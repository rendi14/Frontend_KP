<?php

namespace App\Controllers;

use App\Models\prodiModel;
use App\Models\akademikModel;

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
        echo view('layout/header');
        echo view('main/TPMO');
        echo view('layout/footer');
    }

    // -------------------------------------------------
    public function visimisiTPMO()
    {
        $model = new prodiModel;
        $currentPage = $this->request->getVar('page_user') ? $this->request->getvar('page_user') : 1;
        $data = [
            'tittle' => 'Prodi || PT.CROP',
            'prodi' => $model->paginate(1, 'prodi'),
            'pager' => $model->pager,
            'currentPage' => $currentPage,
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
