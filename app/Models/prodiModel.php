<?php

namespace App\Models;

use CodeIgniter\Model;

class prodiModel extends Model {
	protected $table = 'akti_program_studi';
	protected $primaryKey = 'prodi_id';
	protected $allowedFields = ['prodi_nama', 'prodi_tentang', 'prodi_visi', 'prodi_misi', 'prodi_foto', 'prodi_dosen', 'prodi_kurikulum'];
	protected $createdField = 'created_at';
	protected $updatedField = 'updated_at';

	public function getProdi($id) {
		return $this->where(['prodi_id' => $id])->first();
	}

	public function search($cari) {
		return $this->table('akti_program_studi')->like('prodi_nama', $cari);
	}

}