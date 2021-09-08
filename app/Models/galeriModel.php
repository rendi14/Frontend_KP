<?php

namespace App\Models;

use CodeIgniter\Model;

class galeriModel extends Model
{
  protected $table      = 'album';
  protected $primaryKey = 'album_id';
  protected $allowedFields = [
    'album_judul', 'album_deskripsi', 'album_gambar', 'album_kategori', 'urutan'
  ];

  // public function search($cari)
  // {
  //   return $this->table('berita')->like('berita_judul', $cari);
  // }

  public function getAlbum($id)
  {
    return $this->where(['album_id' => $id])->first();
  }

  public function getSleg($Sleg)
  {
    return $this->where(['album_id' => $Sleg])->first();
  }
  // public function getSlug($slug)
  // {
  //  return $this->where(['berita_judul' => $slug])->first(); 
  // }
}
