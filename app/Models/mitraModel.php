<?php

namespace App\Models;

use CodeIgniter\Model;

class mitraModel extends Model
{
    protected $table = 'mitra_kerja';
    protected $primaryKey = 'mitra_id';
    protected $allowedFields = ['mitra_gambar', 'mitra_link'];
    protected $createdField = 'mitra_waktu';

    public function getMitra($id)
    {
        return $this->where(['mitra_id' => $id])->first();
    }
}
