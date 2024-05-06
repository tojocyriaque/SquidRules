<?php

namespace App\Controllers;
use App\Models\HistoryAcl;
use CodeIgniter\API\ResponseTrait;

include "acl/main.php";
include "acl/history.php";

include "acl/acl_access_get_name.php";
include "acl/acl_access_get_active.php";
include "acl/acl_access_get_all_declaration.php";


class Acl extends BaseController
{
    public function index(): string {
        return view("acl_index");
    }

    public function datas(): void{}

    public function add(): void{}

    public function modify(): void{}

    public function delete(): void{}

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

    public function acl_access_add_name(){}

    public function give_type(){}

    public function acl_change_type(){}

    public function restore(){}

    public function give_days(){}


}

?>
