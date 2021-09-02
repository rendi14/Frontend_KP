<?php

namespace App\Controllers;

use App\Models\beritaModel;

use App\Models\sidebarModel;

class Beranda extends BaseController
{

    public function berita()
    {
        $sidebar = new sidebarModel;
        $berita = new beritaModel;
        $side = $sidebar->where('menu_site', 'A')->findAll();
        $user_model = $sidebar->findAll();
        $agenda_user = $berita->findAll();
        $sidebar_side = $sidebar->getSide();
        $currentPage = $this->request->getVar('page_user') ? $this->request->getvar('page_user') : 1;

        $cari = $this->request->getVar('cari');
        if ($cari) {
            $berita->search($cari);
        } else {
            $orang = $berita;
        }
        $data = [
            'tittle' => 'Berita || PT.CROP',
            'side' => $side,
            'berita' => $berita->paginate(10, 'berita'),
            'user_model' => $user_model,
            'sidebar' => $sidebar_side,
            'currentPage' => $currentPage,
            'pager' => $berita->pager,
        ];
        echo view('layout/header');
        echo view('main/berita', $data);
        echo view('layout/footer');
    }
}
