<?php

namespace App\Models;

use CodeIgniter\Model;

class agendaModel extends Model
{
	protected $table = 'agenda';
	protected $primaryKey = 'agenda_id';
	protected $allowedFields = [
		'agenda_tema', 'agenda_deskripsi', 'agenda_mulai', 'agenda_selesai', 'agenda_tempat', 'agenda_jam', 'agenda_gambar', 'agenda_posting', 'admin_nama'
	];

	public function getAgenda($id)
	{
		return $this->where(['agenda_id' => $id])->first();
	}

	public function search($cari)
	{
		/*		$builder = $this->table('akti_dosen');
$builder->like('dosen_nip', $cari);
return $builder;*/
		return $this->table('agenda')->like('agenda_tema', $cari)->orLike('agenda_tempat', $cari)->orLike('agenda_deskripsi', $cari);
	}

	// public function getAllAdmin(){
	// 	return $this->table('admin_level')->findAll();
	// }
	public function getAdminLevel()
	{
		return $this->db->table('admin_level')
			->join('users', 'users.admin_level_kode=admin_level.admin_level_kode')
			->get()->getResultArray();
	}
}
