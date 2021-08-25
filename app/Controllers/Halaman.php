<?php

namespace App\Controllers;

use App\Models\prodiModel;
use App\Models\akademikModel;
use App\Models\dosenModel;
use App\Models\agendaModel;

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
    public function tentangTPMO()
    {
        $model = new prodiModel;
        $tpmo = $model->where('prodi_dosen', '7')->findAll();
        $data = [
            'tittle' => 'Prodi || PT.CROP',
            'tpmo'  => $tpmo
        ];

        echo view('layout/header');
        echo view('main/tentangTPMO', $data);
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
        $agenda = new agendaModel;
        $agenda_user = $agenda->findAll();
        $data = [
            'tittle' => 'Agenda || PT.CROP',
            'agenda_user' => $agenda->paginate(4, 'agenda'),
            'pager' => $agenda->pager,
        ];
        echo view('layout/header');
        echo view('main/agenda', $data);
        echo view('layout/footer');
    }

    // -------------------------------------------------
    public function TOPKR4()
    {
        $model = new dosenModel;
        $TOPKR4 = $model->where('dosen_kategori', '8')->findAll();
        $data = [
            'tittle' => 'Prodi || PT.CROP',
            'TOPKR4'  => $TOPKR4
        ];
        echo view('layout/header');
        echo view('main/TOPKR4', $data);
        echo view('layout/footer');
    }
}
