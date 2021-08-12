<?php

namespace App\Models;

use CodeIgniter\Model;

class akademikModel extends Model {
	protected $table = 'akti_akademik';
	protected $primaryKey = 'akademik_id';
	protected $allowedFields = ['akademik_title', 'akademik_deskripsi', 'akademik_gambar', 'akademik_kategori', 'akademik_keterangan', 'admin_nama'];

	public function getAkademik($id) {
		return $this->where(['akademik_id' => $id])->first();
	}

	public function search($cari) {
		return $this->table('akti_akademik')->like('akademik_title', $cari)->orLike('akademik_kategori', $cari);
	}

}