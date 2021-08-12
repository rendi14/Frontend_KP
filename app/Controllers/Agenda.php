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
    
    // public function tambahWeb() {
	// 	$model = new sidebarModel;
	// 	$sidebar_side = $model->getSide();
	// 	$session = session();
	// 	$data = [
	// 		'menu_nama' => $this->request->getVar('nama'),
	// 		'menu_deskripsi' => $this->request->getVar('deskripsi'),
	// 		'menu_url' => $this->request->getVar('menu-url'),
	// 		'menu_site' => $this->request->getVar('menu-site'),
	// 		'menu_level' => $this->request->getVar('menu-access'),
    //         'menu_urutan' => $this->request->getVar('urutan')
	// 	];
	// 	$model->save($data);
	// 	$session->setFlashdata('pesan', 'Data berhasil ditambahkan');
	// 	return redirect()->to('/MenuDashboard');
	// }
	
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

	// public function hapusMenu($id){
	// 	$admin = new menuAdmin;
	// 	$session = session();
	// 	$admin->delete($id);
	// 	$session->setFlashdata('msg', 'Menu telah dihapus');
	// 	return redirect()->to('/MenuDashboard/tabelMenu/');
	// }
}