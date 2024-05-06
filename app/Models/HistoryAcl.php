<?php

use CodeIgniter\BaseModel;

class historyAcl extends BaseModel
{
    protected $table = "history_acl";
    protected $primaryKey = "id";
    protected $allowedFields = ["id", "date", "action"];
}

?>