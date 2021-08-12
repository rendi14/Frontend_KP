<?php

namespace App\Models;

use CodeIgniter\Model;

class menuAdmin extends Model
{
    protected $table      = 'menu_admin';
    protected $primaryKey = 'menu_admin_kode';
    protected $allowedFields = ['menu_kode', 'admin_level_kode'];
    
    
	public function getMenu($id) {
		return $this->where(['menu_admin_kode' => $id])->first();
	}

}