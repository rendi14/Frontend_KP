<?php

namespace App\Models;

use CodeIgniter\Model;

class videoModel extends Model
{
    protected $table = 'galeri_video';
    protected $primaryKey = 'video_id';
    protected $allowedFields = ['video_judul', 'video_deskripsi', 'video_link', 'video_type'];
    protected $createdField = 'video_waktu';

    public function getVideo($id)
    {
        return $this->where(['video_id' => $id])->first();
    }

    public function search($cari)
    {
        return $this->table('galeri_video')->like('video_judul', $cari);
    }
}
