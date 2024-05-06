<?php

    function return_history($requete){
        $list=array();
        $connect = mysqli_connect("localhost","mit","123456")or die("Impossible d'ouvrir le fichier.");
        
        mysqli_query($connect,"CREATE DATABASE IF NOT EXISTS mit;");
        mysqli_select_db($connect,"mit");
        mysqli_query($connect,"CREATE TABLE IF NOT EXISTS history_acl(date timestamp DEFAULT current_timestamp(), action VARCHAR(255));");    
        $result=mysqli_query($connect,$requete);
        
        foreach($result as $r){
          $list[]=array($r['date'],$r['action']);
        }
        
        mysqli_close($connect);
        return $list;
    }

?>
