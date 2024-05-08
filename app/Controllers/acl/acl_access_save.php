<?php 
    function save_autorise(array $check, array $rules){
        $file = WRITEPATH . "/conf.d/access.conf";

        // file_put_contents($file, "");

        // for($i=0;$i<count($rules["access"]);$i++){
        //     if($check[$i]){
        //         //file_put_contents($file, "http_access " . $rules["access"][$i] . " " . str_replace("+", " ", $rules["name"][$i]) . "\n" , FILE_APPEND);
        //     }
        // }  
    }
?>