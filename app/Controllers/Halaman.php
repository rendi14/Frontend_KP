<?php

namespace App\Controllers;

use App\Models\prodiModel;
use App\Models\akademikModel;
use App\Models\dosenModel;
use App\Models\agendaModel;
use App\Models\beritaModel;
use App\Models\kontakModel;
use App\Models\gambarModel;
use App\Models\galeriModel;
use App\Models\albumModel;

class Halaman extends BaseController
{
    public function index()
    {
        $beritamodel = new beritaModel;
        $berita = $beritamodel->findAll();
        $data = [
            'berita' => $berita,
        ];
        echo view('layout/header');
        echo view('main/beranda', $data);
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
        $user = new galeriModel;
        $album = new gambarModel;
        $sidebar = new sidebarModel;
        /*$user_model = $user->findAll();*/
        $side = $sidebar->where('menu_site', 'A')->findAll();
        $album_model = $album->where('album_id', $id)->findAll();
        $sidebar_side = $sidebar->getSide();
        $data = [
            'tittle' => 'Galeri || PT.CROP',
            'album' => $user->getAlbum($id),
            'galeri' => $album_model,
            'sidebar' => $sidebar_side
        ];
        echo view('layout/header');
        echo view('main/galeri', $data);
        echo view('layout/footer');
    }

    // -------------------------------------------------
    public function album()
    {
        $album = new albumModel;
        $galeri = new galeriModel;
        $album_count = $album->countAll();
        $data = [
            'tittle' => 'Dashboard || PT.CROP',
            'album_count' => $album_count,
            'album' => $album->paginate(3),
            'album_galeri' => $album->findAll(),
        ];
        echo view('layout/header');
        echo view('main/album', $data);
        echo view('layout/footer');
    }




    // -------------------------------------------------
    public function galerivideo()
    {
        echo view('layout/header');
        echo view('main/galerivideo');
        echo view('layout/footer');
    }

    // -------------------------------------------------
    public function Kontak()
    {

        $model = new kontakModel;
        $kontak_model = $model->findAll();
        $currentPage = $this->request->getVar('page_user') ? $this->request->getvar('page_user') : 1;

        /*$user_model = $user->findAll();*/
        $data = [
            'tittle' => 'Data Kontak || PT.CROP',
            'user' => $model->paginate(6, 'user'),
            'pager' => $model->pager,
            'currentPage' => $currentPage,

        ];
        echo view('layout/header');
        echo view('main/Kontak', $data);
        echo view('layout/footer');
    }
    public function tambahAktikontak()
    {
        $model = new kontakModel();
        $session = session();
        $data = [
            'contact_pengirim' => $this->request->getPost('pengirim'),
            'contact_email' => $this->request->getVar('email'),
            'contact_telp' => $this->request->getVar('telephone'),
            'contact_deskripsi' => $this->request->getVar('deskripsi'),
            'contact_waktu' => $this->request->getVar('waktu'),
        ];
        $model->save($data);
        $session->setFlashdata('pesan', 'Data berhasil ditambahkan');
        return redirect()->to('/Halaman/Kontak');
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
            'user' => $model->paginate(50, 'user'),
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

    // -------------------------------------------------
    public function visimisiTOPKR4()
    {
        $model = new prodiModel;
        $TOPKR4 = $model->where('prodi_dosen', '8')->findAll();
        $data = [
            'tittle' => 'Prodi || PT.CROP',
            'TOPKR4'  => $TOPKR4
        ];

        echo view('layout/header');
        echo view('main/visimisiTOPKR4', $data);
        echo view('layout/footer');
    }

    // -------------------------------------------------
    public function tentangTOPKR4()
    {
        $model = new prodiModel;
        $TOPKR4 = $model->where('prodi_dosen', '8')->findAll();
        $data = [
            'tittle' => 'Prodi || PT.CROP',
            'TOPKR4'  => $TOPKR4
        ];

        echo view('layout/header');
        echo view('main/tentangTOPKR4', $data);
        echo view('layout/footer');
    }

    // -------------------------------------------------
    public function Tenagakerja()
    {
        $model = new dosenModel;
        $direktur = $model->where('dosen_kategori', '1')->findAll();
        $yayasan = $model->where('dosen_kategori', '5')->findAll();
        $Tenagaunit = $model->where('dosen_kategori', '6')->findAll();
        $data = [
            'tittle' => 'Prodi || PT.CROP',
            'Tenagaunit'  => $Tenagaunit,
            'direktur'  => $direktur,
            'yayasan'  => $yayasan
        ];
        echo view('layout/header');
        echo view('main/Tenagakerja', $data);
        echo view('layout/footer');
    }
    // -------------------------------------------------
    public function detailBerita($slug)
    {
        $beritamodel = new beritaModel;
        $berita = $beritamodel->findAll();
        $data = [
            'tittle' => 'Detail Berita || PT.CROP',
            'berita' => $beritamodel->getSlug($slug),
        ];
        echo view('layout/header');
        echo view('main/detailBerita', $data);
        echo view('layout/footer');
    }

    // -------------------------------------------------
    public function statis()
    {
        echo view('layout/header');
        echo view('main/statis');
        echo view('layout/footer');
    }
}
