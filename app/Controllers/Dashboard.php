<?php

namespace App\Controllers;

use App\Models\dosenModel;
use App\Models\prodiModel;
use App\Models\akademikModel;
use App\Models\UserModel;
use App\Models\admin_level;
use App\Models\sidebarModel;
use CodeIgniter\Controller;

class Dashboard extends Controller {
	public function index() {
		$user = new UserModel;
		$dosen = new dosenModel;
		$prodi = new prodiModel;
		$sidebar = new sidebarModel;
		$user_count = $user->countAll();
		$dosen_count = $dosen->countAll();
		$prodi_count = $prodi->countAll(); 
		$side = $sidebar->where('menu_site', 'A')->findAll();
		$sidebar_side = $sidebar->getSide();
		$data = [
			'tittle' => 'Dashboard || PT.CROP',
			'user_count' => $user_count,
			'dosen_count' => $dosen_count,
			'prodi_count' => $prodi_count,
			'side' => $side,
			'sidebar' => $sidebar_side
		];
		return view('dashboard/dashboard', $data);
	}

	public function dataAdmin() {
		$user = new UserModel;
		$sidebar = new sidebarModel;
		$adminLevel = new admin_level;
		$user_model = $user->findAll();
		$admin = $adminLevel->findAll();
		$side = $sidebar->where('menu_site', 'A')->findAll();
		$sidebar_side = $sidebar->getSide();
		$admin_kode = $user->getAdminLevel();
		$data = [
			'tittle' => 'Data Admin || PT.CROP',
			'user' => $admin_kode,
			'side' => $side,
			'sidebar' => $sidebar_side,
			'admin_level' => $admin
		];
		return view('dashboard/admin_data', $data);
	}
	public function tambahAdmin() {
		$model = new UserModel();
		$session = session();
		$data = [
			'user_name' => $this->request->getVar('name'),
			'admin_level_kode' => $this->request->getVar('level'),
			'user_password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
		];
		$model->save($data);
		$session->setFlashdata('pesan', 'Data berhasil ditambahkan');
		return redirect()->to('/dashboard/dataAdmin');
	}

	public function hapusAdmin($id) {
		$model = new UserModel();
		$session = session();
		$model->delete($id);
		$session->setFlashdata('pesan', 'Data berhasil dihapus');
		return redirect()->to('/dashboard/dataAdmin');
	}

	/*Method data dosen*/
	public function dataDosen() {
		$model = new dosenModel;
		/*$user_model = $user->findAll();*/
		$sidebar = new sidebarModel;
		$side = $sidebar->where('menu_site', 'A')->findAll();
		$sidebar_side = $sidebar->getSide();
		$currentPage = $this->request->getVar('page_user') ? $this->request->getvar('page_user') : 1;

		$cari = $this->request->getVar('cari');
		if ($cari) {
			$model->search($cari);

		} else {
			$orang = $model;
		}
		$data = [
			'tittle' => 'Data Dosen || PT.CROP',
			/*'user' => $user_model,*/
			'user' => $model->paginate(5, 'user'),
			'pager' => $model->pager,
			'currentPage' => $currentPage,
			'sidebar' => $sidebar_side
		];
		return view('dashboard/dosen_data', $data);
	}

	public function tampilEditData($id) {
		$user = new dosenModel;
		$sidebar = new sidebarModel;
		/*$user_model = $user->findAll();*/
		$side = $sidebar->where('menu_site', 'A')->findAll();
		$sidebar_side = $sidebar->getSide();
		$data = [
			'tittle' => 'Edit Data Dosen || PT.CROP',
			'user' => $user->getDosen($id),
			'sidebar' => $sidebar_side
		];
		return view('dashboard/pages/editFormDosen', $data);
	}

	public function tambahDosen() {
		$model = new dosenModel();
		$session = session();
		$fileGambar = $this->request->getFile('poto');
		$fileGambar->move('gambar/dosen');
		$namaGambar = $fileGambar->getName();
		$data = [
			'dosen_nip' => $this->request->getVar('nip'),
			'dosen_nama' => $this->request->getVar('name'),
			'dosen_jabatan' => $this->request->getVar('jabatan'),
			'dosen_kategori' => $this->request->getVar('kategori'),
			'dosen_foto' => $namaGambar,
			'admin_nama' => $this->request->getVar('admin_nama'),
		];
		$model->save($data);
		$session->setFlashdata('pesan', 'Data berhasil ditambahkan');
		return redirect()->to('/dashboard/dataDosen');
	}

	public function editDataDosen() {
		$model = new dosenModel();
		$session = session();
		$fileGambar = $this->request->getFile('poto');
		$fileGambar->move('gambar/dosen');
		$namaGambar = $fileGambar->getName();
		$data = [
			'dosen_id' => $this->request->getVar('id'),
			'dosen_nip' => $this->request->getVar('nip'),
			'dosen_nama' => $this->request->getVar('nama'),
			'dosen_jabatan' => $this->request->getVar('jabatan'),
			'dosen_foto' => $namaGambar,
			'admin_nama' => $this->request->getVar('admin_nama'),
		];
		$model->save($data);
		$session->setFlashdata('pesan', 'Data berhasil diedit');
		return redirect()->to('/dashboard/dataDosen');
	}

	public function HapusDataDosen($id) {
		$model = new dosenModel();
		$session = session();
		$model->delete($id);
		$session->setFlashdata('pesan', 'Data berhasil dihapus');
		return redirect()->to('/dashboard/dataDosen');
	}

	/*Ahkir data dosen*/

/*Method akti prodi*/
	public function dataProdi() {
		$model = new prodiModel;
		$sidebar = new sidebarModel;
		/*$user_model = $user->findAll();*/
		$side = $sidebar->where('menu_site', 'A')->findAll();
		$sidebar_side = $sidebar->getSide();
		$currentPage = $this->request->getVar('page_user') ? $this->request->getvar('page_user') : 1;

		$cari = $this->request->getVar('cari');
		if ($cari) {
			$model->search($cari);

		} else {
			$orang = $model;
		}
		$data = [
			'tittle' => 'Data Prodi || PT.CROP',
			/*'user' => $user_model,*/
			'prodi' => $model->paginate(1, 'prodi'),
			'pager' => $model->pager,
			'currentPage' => $currentPage,
			'sidebar' => $sidebar_side
		];
		return view('dashboard/prodi_data', $data);
	}

	public function tambahAktiProdi() {
		$model = new prodiModel();
		$session = session();
		$fileGambar = $this->request->getFile('poto');
		$fileGambar->move('gambar/prodi');
		$namaGambar = $fileGambar->getName();
		$data = [
			'prodi_nama' => $this->request->getVar('nama_prodi'),
			'prodi_tentang' => $this->request->getVar('tentang'),
			'prodi_foto' => $namaGambar,
			'prodi_visi' => $this->request->getVar('visi'),
			'prodi_misi' => $this->request->getVar('misi'),
			'prodi_dosen' => $this->request->getVar('dosen'),
		];
		$model->save($data);
		$session->setFlashdata('pesan', 'Data berhasil ditambahkan');
		return redirect()->to('/dashboard/dataProdi');

	}

	public function tampilEditProdi($id) {
		$user = new prodiModel;
		$sidebar = new sidebarModel;
		/*$user_model = $user->findAll();*/
		$side = $sidebar->where('menu_site', 'A')->findAll();
		$sidebar_side = $sidebar->getSide();
		$data = [
			'tittle' => 'Edit Data Prodi || PT.CROP',
			'user' => $user->getProdi($id),
			'sidebar' => $sidebar_side
		];
		return view('dashboard/pages/editFormProdi', $data);
	}

	public function editAktiProdi() {
		$model = new prodiModel();
		$session = session();
		$fileGambar = $this->request->getFile('poto');
		$fileGambar->move('gambar/prodi');
		$namaGambar = $fileGambar->getName();
		$data = [
			'prodi_id' => $this->request->getVar('id'),
			'prodi_nama' => $this->request->getVar('nama'),
			'prodi_tentang' => $this->request->getVar('tentang'),
			'prodi_visi' => $this->request->getVar('visi'),
			'prodi_misi' => $this->request->getVar('misi'),
			'prodi_foto' => $namaGambar,
		];
		$model->save($data);
		$session->setFlashdata('pesan', 'Data berhasil diupdate');
		return redirect()->to('/dashboard/dataProdi');
	}

	public function hapusProdi($id) {
		$model = new prodiModel();
		$session = session();
		$model->delete($id);
		$session->setFlashdata('pesan', 'Data berhasil dihapus');
		return redirect()->to('/dashboard/dataProdi');
	}

	/*Akhir method akti prodi*/
/*Method untuk data akademik*/

	public function dataAkademik() {
		$model = new akademikModel;
		$sidebar = new sidebarModel;
		$side = $sidebar->where('menu_site', 'A')->findAll();
		$sidebar_side = $sidebar->getSide();
		$currentPage = $this->request->getVar('page_user') ? $this->request->getvar('page_user') : 1;

		$cari = $this->request->getVar('cari');
		if ($cari) {
			$model->search($cari);

		} else {
			$orang = $model;
		}
		/*$user_model = $user->findAll();*/
		$data = [
			'tittle' => 'Data Akademik || PT.CROP',
			'user' => $model->paginate(6, 'user'),
			'pager' => $model->pager,
			'currentPage' => $currentPage,
			'sidebar' => $sidebar_side
		];
		return view('dashboard/akademik_data', $data);
	}

	/* Method tambah akti akademik*/
	public function tambahAktiAkademik() {
		$model = new akademikModel();
		$session = session();
		$fileGambar = $this->request->getFile('gambar');
		$fileGambar->move('gambar/akademik');
		$namaGambar = $fileGambar->getName();
		$data = [
			'akademik_title' => $this->request->getVar('judul'),
			'akademik_deskripsi' => $this->request->getVar('deskripsi'),
			'akademik_gambar' => $namaGambar,
			'akademik_kategori' => $this->request->getVar('kategori'),
			'akademik_keterangan' => $this->request->getVar('keterangan'),
			'admin_nama' => $this->request->getVar('admin_nama'),
		];
		$model->save($data);
		$session->setFlashdata('pesan', 'Data berhasil ditambahkan');
		return redirect()->to('/dashboard/dataAkademik');

	}

	public function tampilEditAkademik($id) {
		$user = new akademikModel;
		$sidebar = new sidebarModel;
		/*$user_model = $user->findAll();*/
		$side = $sidebar->where('menu_site', 'A')->findAll();
		$sidebar_side = $sidebar->getSide();
		$data = [
			'tittle' => 'Edit Data Akademik|| PT.CROP',
			'user' => $user->getAkademik($id),
			'sidebar' => $sidebar_side
		];
		return view('dashboard/pages/editFormAkademik', $data);
	}

	public function editAktiAkademik() {
		$model = new akademikModel();
		$session = session();
		$fileGambar = $this->request->getFile('gambar');
		$fileGambar->move('gambar/akademik');
		$namaGambar = $fileGambar->getName();
		$data = [
			'akademik_id' => $this->request->getVar('id'),
			'akademik_title' => $this->request->getVar('judul'),
			'akademik_deskripsi' => $this->request->getVar('deskripsi'),
			'akademik_gambar' => $namaGambar,
			'akademik_kategori' => $this->request->getVar('kategori'),
			'akademik_keterangan' => $this->request->getVar('keterangan'),
			'admin_nama' => $this->request->getVar('admin_nama'),
		];
		$model->save($data);
		$session->setFlashdata('pesan', 'Data berhasil diupdate');
		return redirect()->to('/dashboard/dataAkademik');
	}

	public function hapusAkademik($id) {
		$model = new akademikModel();
		$session = session();
		$model->delete($id);
		$session->setFlashdata('pesan', 'Data berhasil dihapus');
		return redirect()->to('/dashboard/dataAkademik');
	}

	/* Akhir Method Akademik*/


}