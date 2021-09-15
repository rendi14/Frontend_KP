<?php

namespace App\Controllers;

use App\Models\sidebarModel;
use App\Models\agendaModel;
use App\Models\menuAdmin;
use App\Models\admin_level;
use CodeIgniter\Controller;

class Agenda extends Controller {
	public function index() {
        $sidebar = new sidebarModel;
        $agenda = new agendaModel;
		$side = $sidebar->where('menu_site', 'A')->findAll();
        $user_model = $sidebar->findAll();
        $agenda_user = $agenda->findAll();
		$sidebar_side = $sidebar->getSide();
		$data = [
            'tittle' => 'Agenda || PT.CROP',
            'side' => $side,
            'agenda_user' => $agenda->paginate(4, 'agenda'),
			'user_model' => $user_model,
            'sidebar' => $sidebar_side,
            'pager' => $agenda->pager,
		];
		return view('dashboard/agenda_data', $data);
    }
    
    public function tambahAgenda() {
		$model = new agendaModel;
		$fileGambar = $this->request->getFile('poto');
		$fileGambar->move('gambar/agenda/');
		$namaGambar = $fileGambar->getName();
		$session = session();
		$data = [
			'agenda_tema' => $this->request->getVar('tema'),
			'agenda_deskripsi' => $this->request->getVar('deskripsi'),
			'agenda_mulai' => $this->request->getVar('agenda_mulai'),
			'agenda_selesai' => $this->request->getVar('agenda_selesai'),
			'agenda_tempat' => $this->request->getVar('tempat'),
			'agenda_gambar' => $namaGambar,
			'agenda_jam' => $this->request->getVar('jam'),
			'admin_nama' => $this->request->getVar('admin'),
		];
		$model->save($data);
		$session->setFlashdata('pesan', 'Data berhasil ditambahkan');
		return redirect()->to('/Agenda');
	}
	
	// public function tambahMenu(){
	// 	$model = new menuAdmin;
	// 	$session = session();
	// 	$data = [
	// 		'menu_kode' => $this->request->getVar('kode'),
	// 		'admin_level_kode' => $this->request->getVar('access')			
	// 	];
	// 	$model->save($data);
	// 	$session->setFlashdata('msg', 'Menu sudah diatur');
	// 	return redirect()->to('/MenuDashboard');
	// }	
	
	// public function tabelMenu(){
	// 	$sidebar = new sidebarModel;
	// 	$user_model = $sidebar->findAll();
	// 	$sidebar_side = $sidebar->getSide();
	// 	$data = [
    //         'tittle' => 'Tabel Menu || PT.CROP',
	// 		'side' => $sidebar->where('menu_site', 'A')->findAll(),
	// 		'user_model' => $user_model,
	// 		'sidebar' => $sidebar_side
	// 	];
	// 	return view('Menu/tabelMenu', $data);
	// }

	public function hapusAgenda($id){
		$model = new agendaModel;
		$model_gambar = $model->find($id);
		unlink('gambar/agenda/' . $model_gambar['agenda_gambar']);
		$session = session();
		$model->delete($id);
		$session->setFlashdata('pesan', 'Data telah dihapus');
		return redirect()->to('/Agenda');
	}
}