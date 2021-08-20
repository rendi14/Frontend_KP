<?php

namespace App\Controllers;

use App\Models\sidebarModel;
use App\Models\menuAdmin;
use App\Models\admin_level;
use CodeIgniter\Controller;

class MenuDashboard extends Controller
{
	public function index()
	{
		$sidebar = new sidebarModel;
		$admin = new admin_level;
		$side = $sidebar->where('menu_site', 'A')->findAll();
		$user_model = $sidebar->findAll();
		$admin_model = $admin->findAll();
		$sidebar_side = $sidebar->getSide();
		$data = [
			'tittle' => 'Halaman Web Dinamis || PT.CROP',
			'side' => $side,
			'admin_model'	=> $admin_model,
			'user_model' => $user_model,
			'sidebar' => $sidebar_side
		];
		return view('Menu/index', $data);
	}

	public function tambahWeb()
	{
		$model = new sidebarModel;
		$sidebar_side = $model->getSide();
		$session = session();
		$data = [
			'menu_nama' => $this->request->getVar('nama'),
			'menu_deskripsi' => $this->request->getVar('deskripsi'),
			'menu_url' => $this->request->getVar('menu-url'),
			'menu_site' => $this->request->getVar('menu-site'),
			'menu_level' => $this->request->getVar('menu-access'),
			'menu_urutan' => $this->request->getVar('urutan')
		];
		$model->save($data);
		$session->setFlashdata('pesan', 'Data berhasil ditambahkan');
		return redirect()->to('/MenuDashboard');
	}

	public function tambahMenu()
	{
		$model = new menuAdmin;
		$session = session();
		$data = [
			'menu_kode' => $this->request->getVar('kode'),
			'admin_level_kode' => $this->request->getVar('access')
		];
		$model->save($data);
		$session->setFlashdata('msg', 'Menu sudah diatur');
		return redirect()->to('/MenuDashboard');
	}

	public function tabelMenu()
	{
		$sidebar = new sidebarModel;
		$admin = new admin_level;
		$user_pagi = new menuAdmin;
		$user_model = $sidebar->findAll();
		$sidebar_side = $sidebar->getSide();
		$admin_model = $admin->findAll();
		$data = [
			'tittle' => 'Tabel Menu || PT.CROP',
			'side' => $sidebar->where('menu_site', 'A')->findAll(),
			'user_model' => $user_model,
			'sidebar' => $sidebar_side,
			'admin_model'	=> $admin_model,
		];
		return view('Menu/tabelMenu', $data);
	}

	public function hapusMenu($id)
	{
		$admin = new menuAdmin;
		$admin_sidebar = new sidebarModel;
		$session = session();
		$admin->delete($id);
		$admin_sidebar->delete($id);
		$session->setFlashdata('msg', 'Menu Telah dihapus');
		return redirect()->to('/MenuDashboard/tabelMenu/');
	}

	public function tampilDataMenu($id)
	{
		$sidebar = new sidebarModel;
		/*$user_model = $user->findAll();*/
		$side = $sidebar->where('menu_site', 'A')->findAll();
		$sidebar_side = $sidebar->getSide();
		$data = [
			'tittle' => 'Edit Data Dosen || PT.CROP',
			'tampil' => $sidebar->getUpdate($id),
			'sidebar' => $sidebar_side
		];
		return view('Menu/pages/editFormMenu', $data);
	}

	public function editMenu()
	{
		$model = new sidebarModel;
		$sidebar_side = $model->getSide();
		$session = session();
		$data = [
			'menu_kode' => $this->request->getVar('id'),
			'menu_nama' => $this->request->getVar('nama'),
			'menu_deskripsi' => $this->request->getVar('deskripsi'),
			'menu_url' => $this->request->getVar('menu-url'),
			'menu_site' => $this->request->getVar('menu-site'),
			'menu_level' => $this->request->getVar('menu-access'),
			'menu_urutan' => $this->request->getVar('urutan')
		];
		$model->save($data);
		$session->setFlashdata('pesan', 'Data berhasil ditambahkan');
		return redirect()->to('/MenuDashboard/tabelMenu');
	}
}
