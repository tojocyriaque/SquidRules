<?php

namespace App\Models;

use CodeIgniter\Model;

class Status extends Model
{
    protected $table      = 'status';
    protected $primaryKey = 'id_status';
    protected $allowedFields = ['ip','visited_url', 'method','request_duration','traffics_size','date'];
}

