<?php

namespace App\Models;

use CodeIgniter\Model;

class dosenModel extends Model {
	protected $table = 'akti_dosen';
	protected $primaryKey = 'dosen_id';
	protected $allowedFields = ['dosen_nip', 'dosen_nama', 'dosen_jabatan', 'dosen_foto', 'dosen_kategori', 'dosen_status', 'admin_nama'];

	public function getDosen($id) {
		return $this->where(['dosen_id' => $id])->first();
	}

	public function search($cari) {
/*		$builder = $this->table('akti_dosen');
$builder->like('dosen_nip', $cari);
return $builder;*/
		return $this->table('akti_dosen')->like('dosen_nip', $cari)->orLike('dosen_nama', $cari);
	}
}
