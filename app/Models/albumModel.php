<?php

namespace App\Models;

use CodeIgniter\Model;

class albumModel extends Model
{
    protected $table      = 'album';
    protected $primaryKey = 'album_id';
    protected $allowedFields = [
        'album_judul', 'album_deskripsi',
        'album_gambar', 'album_kategori', 'album_urutan'
    ];

    // public function getSide(){
    //      return $this->db->table('menu_admin')->join('menu','menu.menu_kode=menu_admin.menu_kode')
    //      ->get()->getResultArray();  
    // }

    //     public function getSideOrder(){
    //         return $this->db->table('menu_admin')->orderBy('menu_kode', 'ASC');
    //    }
    public function getAlbum($judul)
    {
        return $this->where(['album_judul' => $judul])->first();
    }

    public function search($cari)
    {
        return $this->table('album')->like('album_judul', $cari);
    }
}
