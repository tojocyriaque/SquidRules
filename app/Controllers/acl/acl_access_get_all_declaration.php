<?php
    function get_autorised_declaration($filename): array{
        $lines = array_filter(file($filename));

        foreach($lines as $line){
          $mot = explode(" ", trim($line));
          if(isset($name_access)){
            if(!in_array($mot[1], $name_access))
              $name_access[] = $mot[1];    
          }
          else {
            $name_access[] = $mot[1];
          }
        }
        return $name_access;
    }

    function send_all_declaration(): array{
      $file = [WRITEPATH . "/conf.d/Domain_name.conf", WRITEPATH . "/conf.d/Header_name.conf", WRITEPATH . "/conf.d/HTTP_Method.conf", 
            WRITEPATH . "/conf.d/HTTP_Status.conf", WRITEPATH . "/conf.d/Ip.conf", WRITEPATH . "/conf.d/Mac.conf",
            WRITEPATH . "/conf.d/Max_connection.conf", WRITEPATH . "/conf.d/max_user_ip.conf", WRITEPATH . "/conf.d/Operative_word.conf",
            WRITEPATH . "/conf.d/Peer_name.conf", WRITEPATH . "/conf.d/Port.conf", WRITEPATH . "/conf.d/Processing_step.conf",
            WRITEPATH . "/conf.d/Protocol.conf", WRITEPATH . "/conf.d/Server_name.conf", WRITEPATH . "/conf.d/Snmp_community.conf", 
            WRITEPATH . "/conf.d/Time.conf", WRITEPATH . "/conf.d/URL.conf", WRITEPATH . "/conf.d/Username.conf"  ];
   
      foreach($file as $f){
          $name = get_autorised_declaration($f);
          foreach($name as $n){   
            $names[] = $n;
          }
      }
      //$data = json_encode($names);
      //header('Content-Type: application/json');
      return $names;
    }

?>
