<?php

namespace App\Models;

use CodeIgniter\Model;

class statisModel extends Model
{
	protected $table = 'statis';
	protected $primaryKey = 'statis_id';
	protected $allowedFields = ['statis_judul', 'statis_deskripsi', 'statis_gambar', 'statis_waktu'];

	public function getStatis($id)
	{
		return $this->where(['statis_id' => $id])->first();
	}

	public function search($cari)
	{
		return $this->table('statis')->like('statis_judul', $cari);
	}

	public function getSlug($slug)
	{
		return $this->where(['statis_judul' => $slug])->first();
	}
}
