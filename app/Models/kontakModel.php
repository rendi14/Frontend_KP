<?php

namespace App\Models;

use CodeIgniter\Model;

class kontakModel extends Model
{
    protected $table = 'akti_contact';
    protected $primaryKey = 'contact_id';
    protected $allowedFields = ['contact_pengirim', 'contact_email', 'contact_telp', 'contact_deskripsi', 'contact_waktu'];
    protected $createdField = 'created_at';

    public function getKontak($id)
    {
        return $this->where(['contact_id' => $id])->first();
    }
}
