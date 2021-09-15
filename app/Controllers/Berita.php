<?php

namespace App\Controllers;

use App\Models\sidebarModel;
use App\Models\beritaModel;
use App\Models\menuAdmin;
use App\Models\admin_level;
use CodeIgniter\Controller;

class Berita extends Controller
{
	public function index()
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
			'berita' => $berita->paginate(2, 'berita'),
			'user_model' => $user_model,
			'sidebar' => $sidebar_side,
			'currentPage' => $currentPage,
			'pager' => $berita->pager,
		];
		return view('dashboard/berita_data', $data);
	}

	public function tambahBerita()
	{
		$model = new sidebarModel;
		$model_ = new beritaModel;
		$sidebar_side = $model->getSide();
		$session = session();
		$fileGambar = $this->request->getFile('poto');
		$fileGambar->move('gambar/berita');
		$namaGambar = $fileGambar->getName();
		$data = [
			'berita_judul' => $this->request->getVar('judul'),
			'berita_deskripsi' => $this->request->getVar('deskripsi'),
			'berita_waktu' => $this->request->getVar('waktu'),
			'berita_gambar' => $namaGambar,
			'kategori_id' => $this->request->getVar('kategori'),
			'admin_nama' => $this->request->getVar('admin')
		];
		$model_->save($data);
		$session->setFlashdata('pesan', 'Data berhasil ditambahkan');
		return redirect()->to('/berita');
	}

	public function tampilEditBerita($id)
	{
		$user = new beritaModel;
		$sidebar = new sidebarModel;
		/*$user_model = $user->findAll();*/
		$side = $sidebar->where('menu_site', 'A')->findAll();
		$sidebar_side = $sidebar->getSide();
		$data = [
			'tittle' => 'Edit Data Berita || PT.CROP',
			'user' => $user->getBerita($id),
			'sidebar' => $sidebar_side
		];
		return view('dashboard/pages/editFormBerita', $data);
	}

	public function editDataBerita()
	{
		$model = new sidebarModel;
		$model_ = new beritaModel;
		$sidebar_side = $model->getSide();
		$session = session();
		$data = [
			'berita_id' => $this->request->getVar('id'),
			'berita_judul' => $this->request->getVar('judul'),
			'berita_deskripsi' => $this->request->getVar('deskripsi'),
			'berita_waktu' => $this->request->getVar('waktu'),
			'berita_gambar' => $this->request->getVar('gambar'),
			'kategori_id' => $this->request->getVar('kategori'),
			'admin_nama' => $this->request->getVar('admin')
		];
		$model_->save($data);
		$session->setFlashdata('pesan', 'Data berhasil diubah');
		return redirect()->to('/berita');
	}

	public function ubahGambar()
	{
		$model = new sidebarModel;
		$model_ = new beritaModel;
		$sidebar_side = $model->getSide();
		$session = session();
		$fileGambar = $this->request->getFile('gambar');
		$fileGambar->move('gambar/berita');
		$namaGambar = $fileGambar->getName();
		$data = [
			'berita_id' => $this->request->getVar('id'),
			'berita_judul' => $this->request->getVar('judul'),
			'berita_deskripsi' => $this->request->getVar('deskripsi'),
			'berita_waktu' => $this->request->getVar('waktu'),
			'berita_gambar' => $namaGambar,
			'kategori_id' => $this->request->getVar('kategori'),
			'admin_nama' => $this->request->getVar('admin')
		];
		$model_->save($data);
		$session->setFlashdata('pesan', 'Data berhasil diubah');
		return redirect()->to('/berita');
	}

	public function hapusBerita($id)
	{
		$model = new beritaModel;
		$model_gambar = $model->find($id);
		unlink('gambar/berita/' . $model_gambar['berita_gambar']);
		$session = session();
		$model->delete($id);
		$session->setFlashdata('pesan', 'Data telah dihapus');
		return redirect()->to('/berita');
	}
}
