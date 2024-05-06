<?php
    session_start();

    $postdata=file_get_contents("php://input");
    if(isset($postdata) && !empty($postdata)){
        $data=json_decode($postdata,true);
        $GLOBAL["value"]=array();
        $GLOBAL["value"]=give_datas($data);
        header('Content-Type: application/json');    
        echo json_encode($GLOBAL["value"]);
    }
    else{
        http_response_code(400);
        header('Content-Type: application/json');
        echo json_encode(["Error" => "Aucune donnee recue."]);
    }

function give_datas($data){
    $auth = file_get_contents("/var/log/auth.log");
    $auth=explode("\n",$auth);
    $result=array();
    $main_session=array();

    $month=array(
        "01" => "Jan",
        "02" => "Feb",
        "03" => "Mar",
        "04" => "Apr",
        "05" => "May",
        "06" => "Jun",
        "07" => "Jul",
        "08" => "Aug",
        "09" => "Sep",
        "10" => "Oct",
        "11" => "Nov",
        "12" => "Dec"
    );

    $i=0;    
    $with_date=0;
    if(isset($data["date"])){
        $dt = explode("-",$data["date"]);
        if($dt[2][0]=='0')$_SESSION["search"] = $month[$dt[1]]."  ".$dt[2][1];
        else $_SESSION["search"] = $month[$dt[1]]."  ".$dt[2];
        $with_date=1;
    }
    
    foreach($auth as $line){

//Condition recherche
        if((isset($data["input"])&&($data["input"]!=="")&&(strpos($line,$data["input"])!==false))||((!isset($data["input"]))&&(!isset($data["date"])))||(($with_date==1)&&(strpos($line,$_SESSION["search"])!==false))||($data==="")||($data["input"]==="")){
            $line = explode("!",$line);
            //Session Successed
           if((isset($line[2]))&&((strpos($line[2],"session"))!==false)){
                $regex = "%[^)]): session %s for user %s %[^$]";
                sscanf($line[2],$regex,$inutile,$session,$user,$by);
                if ($by !== "")sscanf($by,"by %s",$by);
//First and last session                
                if(($i==0)&&($session=="opened")){
                    $main_session[0]=array("First session opened" => array($line[0],$line[1],$user));
                    $i=1;
                }
                if($session == "closed"){
                    $main_session[1]=array(("Last session closed") => array($line[0],$line[1],$user));
                }

// //                if($by=="")$by=" - - ";

                $line[2]=$session;
                $line[]=$user;
                $line[]=$by;
                $line[]="Success";
                $result[]=$line;
          }
            else if((isset($line[2]))&&(strpos($line[2],"ssh2")!==false)){
                $regex = "%s password for %s from %s %[^$]";
                sscanf($line[2],$regex,$status,$user,$by,$inutile);
                
                $line[2]="To open";
                $line[]=$user;
                $line[]=$by;
                $line[]=$status;
                $result[]=$line;                
            }
// //Session Failed
            if((isset($line[2]))&&(strpos($line[2],"FAILED")!==false)){
                $regex = "FAILED SU (to %[^)]) %[^$]";
                sscanf($line[2],$regex,$user,$inutile);
                $line[2]="to open";
                $line[]=$user;
                $line[]=" - - ";
                $line[]="Failed";
                 $result[]=$line;            
            }
        }
    }
    $result[]=$main_session;
    return $result;
}    
?>