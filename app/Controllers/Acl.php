<?php

namespace App\Controllers;
use App\Models\HistoryAcl;
use CodeIgniter\API\ResponseTrait;

include "acl/main.php";
include "acl/history.php";

include "acl/acl_access_get_name.php";
include "acl/acl_access_get_active.php";
include "acl/acl_access_get_all_declaration.php";

include "acl/acl_access_add_name.php";
include "acl/ajout.php";
include "acl/modify.php";
include "acl/delete.php";
include "acl/acl_access_save.php";

class Acl extends BaseController
{
    public function index(): string {
        return view("acl_index");
    }

    public function datas(): void{}

    public function ajout(): void{
      $postdata = file_get_contents("php://input");
      if(isset($postdata)&& !empty($postdata)){
          $data = json_decode($postdata,true);
          add($data);
          $GLOBAL["value"]=return_data();
          
          $this->response->setJSON($GLOBAL["value"]);
          echo $this->response->getJSON();
      }
      else{
          http_response_code(400);
          $this->response->setJSON(["Error" => "No data provided!!"]);
          echo $this->response->getJSON();
      }
    }

    public function modify(): void{
      $postdata = file_get_contents("php://input");
      if(isset($postdata) && !empty($postdata)){
          $data=json_decode($postdata,true);
          modify($data);
          $GLOBAL["value"]=return_data();
          $this->response->setJSON($GLOBAL["value"]);
          echo $this->response->getJSON();
          exit(0);
      }else{
          http_response_code(400);
          $error=["Error" => "No data received!"];
          $this->response->setJSON([$error]);
          echo $this->response->getJSON();
          exit(0);
      }
    }

    public function delete(): void{
      $data = file_get_contents("php://input");
      $GLOBAL['value']=array();
      if(isset($data) && !empty($data)){
          $postdata = json_decode($data, true);
          suppr_line($postdata["lineD"]);
          put_datas();
  
          $GLOBAL["value"]=return_data();
          $this->response->setJSON($GLOBAL["value"]);
          echo $this->response->getJSON();
      } else {
          http_response_code(400);
          $this->response->setJSON(["Error" => "No data received"]);
          echo $this->response->getJSON();
      }
    }

    public function history(): void{
      $postdata=file_get_contents("php://input");
      if(isset($postdata) && !empty($postdata)){
        $data=json_decode($postdata,true);
        $GLOBAL["value"] = array();
        $GLOBAL["value"] = return_history($data);
        $this->response->setJSON($GLOBAL["value"]); 
      }
      else{
        http_response_code(400);
        header('Content-Type: application/json');
        $this->response->setJSON(["Error" => "No data provided"]);
      }

      echo $this->response->getJSON();
    }

    public function acl_access_save(): void{
      $data = json_decode(file_get_contents('php://input'), true);
      
      $access = $data['access1'];
      $name = $data['name1'];
      $check = $data['check1'];
      
      var_dump($data);

      $rules = ["access" => $access, "name" => $name];
      save_autorise($check, $rules);
    }

    // finished
    public function acl_access_get_active(): void{
      //send_acl_access_active();
      $data = send_acl_access_active();
      $this->response->setJSON($data);
      echo $this->response->getJSON();
    }

    public function acl_access_get_all_declaration() :void{
      $data = ["name" => "tojo", "age" => "10"];
      $this->response->setJSON($data);
      echo $this->response->getJSON();
    }

    // finished
    public function acl_access_get_name(){
      //send_acl_access_name();
      $data = send_acl_access_name();
      $this->response->setJSON($data);
      echo $this->response->getJSON();
    }

    public function acl_access_add_name(): void{
      acl_access_add_name();
    }
    public function give_type(){}

    public function change_type(){}

    public function restore(){}

    public function give_days(){}


}

?>
