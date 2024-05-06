<?php 
    function get_autorised(): array{
      $lines = array_filter(file(WRITEPATH . "/conf.d/access.conf"));
      
      foreach ($lines as $key => $line) {
        $mot = explode(" ", trim($line));
  
        $access[$key] = $mot[1];
        
        if(count($mot) > 3){
          $name[] = $mot[2];
          for($i=3; $i<count($mot); $i++){
            $name[$key] = $name[$key] . "+" . $mot[$i];
          }
        }
        else {
          $name[] = $mot[2];
        }
      }

      $rules[0] = $access;
      $rules[1] = $name;
      return $rules;
    }
    
    function send_acl_access_active():array{
      //$data = json_encode(get_autorised());
      //header('Content-Type: application/json');
      //echo $data;
      return get_autorised();
    }

?>

