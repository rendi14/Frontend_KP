<?php

namespace App\Models;

use CodeIgniter\Model;

class admin_level extends Model
{
    protected $table      = 'admin_level';
    protected $primaryKey = 'admin_level_kode';
    protected $allowedFields = ['admin_level_nama', 'admin_level_status'];
    

}