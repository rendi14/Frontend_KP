<?php

namespace App\Models;

use CodeIgniter\Model;

class beritaModel extends Model
{
    protected $table      = 'berita';
    protected $primaryKey = 'berita_id';
    protected $allowedFields = ['berita_judul', 'headline', 'berita_deskripsi', 
    'berita_waktu', 'berita_gambar', 'berita_hits', 'tags', 'kategori_id', 'admin_nama'];

    public function search($cari) {
		return $this->table('berita')->like('berita_judul', $cari);
	}

    public function getBerita($id) {
		return $this->where(['berita_id' => $id])->first();
	}
}