<?php

namespace App\Models;

use CodeIgniter\Model;

class gambarModel extends Model
{
  protected $table      = 'album_galeri';
  protected $primaryKey = 'galeri_id';
  protected $allowedFields = ['galeri_judul', 'galeri_deskripsi', 'galeri_gambar', 'album_id'
  ];

  // public function search($cari)
  // {
  //   return $this->table('berita')->like('berita_judul', $cari);
  // }
  public function getAlbum(){
    return $this->db->table('album')->join('album_galeri','album_galeri.album_id=album.album_id')
        ->get()->getResultArray();  
  }
  public function getGambar($id)
  {
    return $this->where(['album_id' => $id])->first();
  }
  // public function getSlug($slug)
  // {
  //  return $this->where(['berita_judul' => $slug])->first(); 
  // }
}
