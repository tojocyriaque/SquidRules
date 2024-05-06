<?php

namespace App\Controllers;
use App\Models\HistoryAcl;

include "acl/main.php";
include "acl/acl_access_get_name.php";
include "acl/acl_access_get_active.php";

class Acl extends BaseController
{
    public function index(): string {
        return view("acl_index");
    }

    public function datas(){}

    public function add(){}

    public function modify(){}

    public function delete(){}

    public function history(){}

    // finished
    public function acl_access_get_active(){
        send_acl_access_active();
    }

    public function acl_access_get_all_declaration(){}

    // finished
    public function acl_access_get_name(){
        send_acl_access_name();
    }

    public function acl_access_add_name(){}

    public function give_type(){}

    public function acl_change_type(){}

    public function restore(){}

    public function give_days(){}


}

?>
