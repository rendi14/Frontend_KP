<?php

namespace App\Controllers;

use App\Models\prodiModel;
use App\Models\akademikModel;
use App\Models\dosenModel;

class Halaman extends BaseController
{
    public function index()
    {
        echo view('layout/header');
        echo view('main/beranda');
        echo view('layout/footer');
    }


    // -------------------------------------------------
    public function tentang()
    {
        echo view('layout/header');
        echo view('main/tentang');
        echo view('layout/footer');
    }

    // -------------------------------------------------
    public function galeri()
    {
        echo view('layout/header');
        echo view('main/galeri');
        echo view('layout/footer');
    }


    // -------------------------------------------------
    public function TPMO()
    {
        $model = new dosenModel;
        $tpmo = $model->where('dosen_kategori', '7')->findAll();
        $data = [
            'tittle' => 'Prodi || PT.CROP',
            'tpmo'  => $tpmo
        ];
        echo view('layout/header');
        echo view('main/TPMO', $data);
        echo view('layout/footer');
    }

    // -------------------------------------------------
    public function visimisiTPMO()
    {
        $model = new prodiModel;
        $tpmo = $model->where('prodi_dosen', '7')->findAll();
        $data = [
            'tittle' => 'Prodi || PT.CROP',
            'tpmo'  => $tpmo
        ];

        echo view('layout/header');
        echo view('main/visimisiTPMO', $data);
        echo view('layout/footer');
    }

    // -------------------------------------------------
    public function akademik()
    {
        $model = new akademikModel;

        $data = [
            'tittle' => 'Akademik || PT.CROP',
            'user' => $model->paginate(10, 'user'),
            'pager' => $model->pager,

        ];

        echo view('layout/header');
        echo view('main/akademik', $data);
        echo view('layout/footer');
    }

    // -------------------------------------------------
    public function agenda()
    {
        echo view('layout/header');
        echo view('main/agenda');
        echo view('layout/footer');
    }
}
