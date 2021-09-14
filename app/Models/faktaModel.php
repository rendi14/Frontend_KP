<?php

namespace App\Models;

use CodeIgniter\Model;

class faktaModel extends Model
{
    protected $table = 'akti_fakta';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'gambar', 'keterangan', 'kategori', 'admin_nama'];
    // protected $createdField = 'created_at';

    public function getFakta($id)
    {
        return $this->where(['id' => $id])->first();
    }
}
