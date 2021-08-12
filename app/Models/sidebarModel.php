<?php

namespace App\Models;

use CodeIgniter\Model;

class sidebarModel extends Model
{
    protected $table      = 'menu';
    protected $primaryKey = 'menu_kode';
    protected $allowedFields = ['menu_nama', 'menu_deskripsi', 'menu_site', 'menu_urutan', 'menu_url', 'menu_level'];
    
    public function getSide(){
         return $this->db->table('menu_admin')->join('menu','menu.menu_kode=menu_admin.menu_kode')
         ->get()->getResultArray();  
    }

//     public function getSideOrder(){
//         return $this->db->table('menu_admin')->orderBy('menu_kode', 'ASC');
//    }
	public function getUpdate($id) {
		return $this->where(['menu_kode' => $id])->first();
	}
}