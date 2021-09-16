<?php

namespace App\Models;

use CodeIgniter\Model;

class testimonialModel extends Model
{
    protected $table = 'testimonial';
    protected $primaryKey = 'testimonial_id';
    protected $allowedFields = ['testimonial_nama', 'testimonial_sumber', 'testimonial_kerja', 'testimonial_jabatan', 'testimonial_deskripsi', 'testimonial_gambar'];
    protected $createdField = 'testimonial_waktu';

    public function gettestimonial($id)
    {
        return $this->where(['testimonial_id' => $id])->first();
    }
}
