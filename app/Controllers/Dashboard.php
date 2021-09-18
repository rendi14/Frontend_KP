<?php

namespace App\Controllers;

use App\Models\dosenModel;
use App\Models\prodiModel;
use App\Models\akademikModel;
use App\Models\UserModel;
use App\Models\admin_level;
use App\Models\sidebarModel;
use App\Models\albumModel;
use App\Models\galeriModel;
use App\Models\gambarModel;
use App\Models\kontakModel;
use App\Models\statisModel;
use App\Models\videoModel;
use App\Models\mitraModel;
use App\Models\faktaModel;
use App\Models\testimonialModel;
use CodeIgniter\Controller;

class Dashboard extends Controller
{
	public function index()
	{
		$user = new UserModel;
		$dosen = new dosenModel;
		$prodi = new prodiModel;
		$sidebar = new sidebarModel;
		$album = new albumModel;
		$galeri = new galeriModel;
		$video = new videoModel;
		$mitra = new mitraModel;
		$user_count = $user->countAll();
		$dosen_count = $dosen->countAll();
		$prodi_count = $prodi->countAll();
		$album_count = $album->countAll();
		$video_count = $video->countAll();
		$mitra_count = $mitra->countAll();
		$side = $sidebar->where('menu_site', 'A')->findAll();
		$sidebar_side = $sidebar->getSide();
		$data = [
			'tittle' => 'Dashboard || PT.CROP',
			'user_count' => $user_count,
			'dosen_count' => $dosen_count,
			'prodi_count' => $prodi_count,
			'album_count' => $album_count,
			'video_count' => $video_count,
			'mitra_count' => $mitra_count,
			'side' => $side,
			'mitra' => $mitra->paginate(3),
			'video' => $video->paginate(3),
			'album' => $album->paginate(3),
			'album_galeri' => $album->findAll(),
			'mitra_full' => $mitra->findAll(),
			'video_full' => $video->findAll(),
			'sidebar' => $sidebar_side
		];
		return view('dashboard/dashboard', $data);
	}

	public function dataAdmin()
	{
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
	public function tambahAdmin()
	{
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

	public function hapusAdmin($id)
	{
		$model = new UserModel();
		$session = session();
		$model->delete($id);
		$session->setFlashdata('pesan', 'Data berhasil dihapus');
		return redirect()->to('/dashboard/dataAdmin');
	}

	/*Method data dosen*/
	public function dataDosen()
	{
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

	public function tampilEditData($id)
	{
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

	public function tambahDosen()
	{
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

	public function editDataDosen()
	{
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

	public function HapusDataDosen($id)
	{
		$model = new dosenModel();
		$model_gambar = $model->find($id);
		unlink('gambar/dosen/' . $model_gambar['dosen_foto']);
		$session = session();
		$model->delete($id);
		$session->setFlashdata('pesan', 'Data berhasil dihapus');
		return redirect()->to('/dashboard/dataDosen');
	}

	/*Ahkir data dosen*/

	/*Method akti prodi*/
	public function dataProdi()
	{
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

	// 
	public function dataagen()
	{
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
		return view('main/agenda', $data);
	}

	public function tambahAktiagen()
	{
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
		return redirect()->to('/dashboard/dataagen');
	}


	// =============


	public function tambahAktiProdi()
	{
		$model = new prodiModel();
		$session = session();
		$fileGambar = $this->request->getFile('poto');
		$fileGambar->move('gambar/prodi');
		$namaGambar = $fileGambar->getName();
		$data = [
			'prodi_nama' => $this->request->getVar('nama_prodi'),
			'prodi_tentang' => $this->request->getVar('tentang'),
			'prodi_kurikulum' => $this->request->getVar('kurikulum'),
			'prodi_foto' => $namaGambar,
			'prodi_visi' => $this->request->getVar('visi'),
			'prodi_misi' => $this->request->getVar('misi'),
			'prodi_dosen' => $this->request->getVar('dosen'),
		];
		$model->save($data);
		$session->setFlashdata('pesan', 'Data berhasil ditambahkan');
		return redirect()->to('/dashboard/dataProdi');
	}

	public function tampilEditProdi($id)
	{
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

	public function editAktiProdi()
	{
		$model = new prodiModel();
		$session = session();
		$fileGambar = $this->request->getFile('poto');
		$fileGambar->move('gambar/prodi');
		$namaGambar = $fileGambar->getName();
		$data = [
			'prodi_id' => $this->request->getVar('id'),
			'prodi_nama' => $this->request->getVar('nama'),
			'prodi_tentang' => $this->request->getVar('tentang'),
			'prodi_kurikulum' => $this->request->getVar('kurikulum'),
			'prodi_visi' => $this->request->getVar('visi'),
			'prodi_misi' => $this->request->getVar('misi'),
			'prodi_foto' => $namaGambar,
		];
		$model->save($data);
		$session->setFlashdata('pesan', 'Data berhasil diupdate');
		return redirect()->to('/dashboard/dataProdi');
	}

	public function hapusProdi($id)
	{
		$model = new prodiModel();
		$model_gambar = $model->find($id);
		unlink('gambar/prodi/' . $model_gambar['prodi_foto']);
		$session = session();
		$model->delete($id);
		$session->setFlashdata('pesan', 'Data berhasil dihapus');
		return redirect()->to('/dashboard/dataProdi');
	}

	/*Akhir method akti prodi*/
	/*Method untuk data akademik*/

	public function dataAkademik()
	{
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
	public function tambahAktiAkademik()
	{
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

	public function tampilEditAkademik($id)
	{
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

	public function editAktiAkademik()
	{
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

	public function hapusAkademik($id)
	{
		$model = new akademikModel();
		$model_gambar = $model->find($id);
		unlink('gambar/akademik/' . $model_gambar['akademik_gambar']);
		$session = session();
		$model->delete($id);
		$session->setFlashdata('pesan', 'Data berhasil dihapus');
		return redirect()->to('/dashboard/dataAkademik');
	}

	// Album gallery
	public function albumGaleri($id)
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
		return view('dashboard/pages/albumGaleri', $data);
	}
	/* Akhir Method Akademik*/
	public function tambahAlbum()
	{
		$model = new galeriModel();
		$session = session();
		$fileGambar = $this->request->getFile('poto');
		$fileGambar->move('gambar/album');
		$namaGambar = $fileGambar->getName();
		$data = [
			'album_judul' => $this->request->getVar('judul'),
			'album_deskripsi' => $this->request->getVar('deskripsi'),
			'album_gambar' => $namaGambar,
			'album_kategori' => $this->request->getVar('kategori'),
		];
		$model->save($data);
		$session->setFlashdata('pesan', 'Album telah ditambahkan');
		return redirect()->to('/dashboard');
	}
	public function editAlbum()
	{
		$model = new galeriModel();
		$session = session();
		$fileGambar = $this->request->getFile('poto');
		$fileGambar->move('gambar/album');
		$namaGambar = $fileGambar->getName();
		$data = [
			'album_id' => $this->request->getVar('id'),
			'album_judul' => $this->request->getVar('judul'),
			'album_deskripsi' => $this->request->getVar('deskripsi'),
			'album_gambar' => $namaGambar,
			'album_kategori' => $this->request->getVar('kategori'),
		];
		$model->save($data);
		$session->setFlashdata('pesan', 'Album telah diperbarui');
		return redirect()->to('/dashboard/');
	}

	public function deleteAlbum($id)
	{
		$model = new galeriModel();
		$model_galeri = new gambarModel();
		$model_gambar = $model->find($id);
		unlink('gambar/album/' . $model_gambar['album_gambar']);
		$session = session();
		$model->delete($id);
		$session->setFlashdata('pesan', 'Album telah dihapus');
		return redirect()->to('/dashboard');
	}
	public function tambahGaleri()
	{
		$model = new gambarModel();
		$session = session();
		$fileGambar = $this->request->getFile('poto');
		$fileGambar->move('gambar/album');
		$namaGambar = $fileGambar->getName();
		$data = [
			'galeri_judul' => $this->request->getVar('judul'),
			'galeri_deskripsi' => $this->request->getVar('deskripsi'),
			'galeri_gambar' => $namaGambar,
			'album_id' => $this->request->getVar('album'),
		];
		$model->save($data);
		$session->setFlashdata('pesan', 'Album telah ditambahkan');
		return redirect()->to('/dashboard');
	}
	public function deleteFoto($id)
	{
		$model = new gambarModel();
		$model_gambar = $model->find($id);
		unlink('gambar/album/' . $model_gambar['galeri_gambar']);
		$session = session();
		$model->delete($id);
		$session->setFlashdata('pesan', 'Foto telah dihapus');
		return redirect()->to('/dashboard');
	}

	public function dataStatis()
	{
		$model = new statisModel;
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
			'tittle' => 'Data Statis || PT.CROP',
			'user' => $model->paginate(2, 'user'),
			'pager' => $model->pager,
			'currentPage' => $currentPage,
			'sidebar' => $sidebar_side
		];
		return view('dashboard/statis-data', $data);
	}

	public function tambahStatis()
	{
		$model = new statisModel();
		$session = session();
		$fileGambar = $this->request->getFile('poto');
		$fileGambar->move('gambar/statis');
		$namaGambar = $fileGambar->getName();
		$data = [
			'statis_judul' => $this->request->getVar('judul'),
			'statis_deskripsi' => $this->request->getVar('deskripsi'),
			'statis_gambar' => $namaGambar,
			'statis_status' => $this->request->getVar('status'),
		];
		$model->save($data);
		$session->setFlashdata('pesan', 'Statis telah ditambahkan');
		return redirect()->to('/dashboard/dataStatis');
	}

	public function hapusStatis($id)
	{
		$model = new statisModel();
		$model_gambar = $model->find($id);
		unlink('gambar/statis/' . $model_gambar['statis_gambar']);
		$session = session();
		$model->delete($id);
		$session->setFlashdata('pesan', 'Statis telah dihapus');
		return redirect()->to('/dashboard/dataStatis');
	}
	public function tampilEditStatis($id)
	{
		$user = new statisModel;
		$sidebar = new sidebarModel;
		/*$user_model = $user->findAll();*/
		$side = $sidebar->where('menu_site', 'A')->findAll();
		$sidebar_side = $sidebar->getSide();
		$data = [
			'tittle' => 'Edit Statis || PT.CROP',
			'user' => $user->getStatis($id),
			'sidebar' => $sidebar_side
		];
		return view('dashboard/pages/editStatis', $data);
	}

	public function editStatis()
	{
		$model = new statisModel();
		$session = session();
		$fileGambar = $this->request->getFile('poto');
		$fileGambar->move('gambar/statis');
		$namaGambar = $fileGambar->getName();
		$data = [
			'statis_id' => $this->request->getVar('id'),
			'statis_judul' => $this->request->getVar('judul'),
			'statis_deskripsi' => $this->request->getVar('deskripsi'),
			'statis_gambar' => $namaGambar,
			'statis_status' => $this->request->getVar('status'),
		];
		$model->save($data);
		$session->setFlashdata('pesan', 'Statis data telah diperbarui');
		return redirect()->to('/dashboard/dataStatis');
	}

	public function dataKontak()
	{
		$model = new kontakModel;
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
			'tittle' => 'Tabel Kontak || PT.CROP',
			'user' => $model->paginate(6, 'user'),
			'pager' => $model->pager,
			'currentPage' => $currentPage,
			'sidebar' => $sidebar_side
		];
		return view('dashboard/kontak-data', $data);
	}

	public function hapusDataKontak($id)
	{
		$model = new kontakModel();
		$session = session();
		$model->delete($id);
		$session->setFlashdata('pesan', 'Pesan telah dihapus');
		return redirect()->to('/dashboard/dataKontak');
	}

	// Tambah data dengan link 
	public function tambahVideoLink()
	{
		$model = new videoModel();
		$session = session();
		$data = [
			'video_judul' => $this->request->getVar('judul'),
			'video_deskripsi' => $this->request->getVar('deskripsi'),
			'video_link' => $this->request->getVar('link'),
			'video_type' => $this->request->getVar('type'),
		];
		$model->save($data);
		$session->setFlashdata('pesan', 'video telah ditambahkan');
		return redirect()->to('/dashboard');
	}

	public function uploadVideo()
	{
		$model = new videoModel();
		$session = session();
		$fileGambar = $this->request->getFile('poto');
		$fileGambar->move('assets/img/video');
		$namaGambar = $fileGambar->getName();
		$data = [
			'video_judul' => $this->request->getVar('judul'),
			'video_deskripsi' => $this->request->getVar('deskripsi'),
			'video_link' => $namaGambar,
			'video_type' => $this->request->getVar('type'),
		];
		$model->save($data);
		$session->setFlashdata('pesan', 'Video telah ditambahkan');
		return redirect()->to('/dashboard');
	}

	public function hapusVideo($id)
	{
		$model = new videoModel();
		$session = session();
		$model->delete($id);
		$session->setFlashdata('pesan', 'Video telah dihapus');
		return redirect()->to('/dashboard');
	}

	public function hapusVideoUpload($id)
	{
		$model = new videoModel();
		$model_gambar = $model->find($id);
		unlink('assets/img/video/' . $model_gambar['video_link']);
		$session = session();
		$model->delete($id);
		$session->setFlashdata('pesan', 'Video telah dihapus');
		return redirect()->to('/dashboard');
	}

	public function tambahMitra()
	{
		$model = new mitraModel();
		$session = session();
		$fileGambar = $this->request->getFile('poto');
		$fileGambar->move('assets/img/clients');
		$namaGambar = $fileGambar->getName();
		$data = [
			'mitra_gambar' => $namaGambar,
			'mitra_link' => $this->request->getVar('link'),
		];
		$model->save($data);
		$session->setFlashdata('pesan', 'Mitra telah ditambahkan');
		return redirect()->to('/dashboard');
	}

	public function hapusMitra($id)
	{
		$model = new mitraModel();
		$model_gambar = $model->find($id);
		unlink('assets/img/clients/' . $model_gambar['mitra_gambar']);
		$session = session();
		$model->delete($id);
		$session->setFlashdata('pesan', 'Mitra telah dihapus');
		return redirect()->to('/dashboard');
	}

	// -------------------------------------------------
	public function datafakta()
	{
		$model = new faktaModel;
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
			'tittle' => 'Data Fakta || PT.CROP',
			'user' => $model->paginate(5, 'user'),
			'pager' => $model->pager,
			'currentPage' => $currentPage,
			'sidebar' => $sidebar_side
		];
		return view('dashboard/fakta_data', $data);
	}

	public function tambahFakta()
	{
		$model = new faktaModel();
		$session = session();
		$fileGambar = $this->request->getFile('poto');
		$fileGambar->move('gambar/fakta/');
		$namaGambar = $fileGambar->getName();
		$data = [
			'title' => $this->request->getVar('title'),
			'gambar' => $namaGambar,
			'keterangan' => $this->request->getVar('keterangan'),
			'admin_nama' => $this->request->getVar('admin_nama'),
		];
		$model->save($data);
		$session->setFlashdata('pesan', 'Data telah ditambahkan');
		return redirect()->to('/dashboard/datafakta');
	}

	public function hapusFakta($id)
	{
		$model = new faktaModel();
		$model_gambar = $model->find($id);
		unlink('gambar/fakta/' . $model_gambar['gambar']);
		$session = session();
		$model->delete($id);
		$session->setFlashdata('pesan', 'Data telah dihapus');
		return redirect()->to('/dashboard/datafakta');
	}

	public function tampilEditFakta($id)
	{
		$user = new faktaModel;
		$sidebar = new sidebarModel;
		/*$user_model = $user->findAll();*/
		$side = $sidebar->where('menu_site', 'A')->findAll();
		$sidebar_side = $sidebar->getSide();
		$data = [
			'tittle' => 'Edit Fakta || PT.CROP',
			'user' => $user->getFakta($id),
			'sidebar' => $sidebar_side
		];
		return view('dashboard/pages/editFormFakta', $data);
	}

	public function editFakta()
	{
		$model = new faktaModel();
		$session = session();
		$fileGambar = $this->request->getFile('poto');
		$fileGambar->move('gambar/fakta');
		$namaGambar = $fileGambar->getName();
		$data = [
			'id' => $this->request->getVar('id'),
			'title' => $this->request->getVar('title'),
			'katerangan' => $this->request->getVar('katerangan'),
			'gambar' => $namaGambar,
			'admin_nama' => $this->request->getVar('admin_nama'),
		];
		$model->save($data);
		$session->setFlashdata('pesan', 'Fakta telah diperbarui');
		return redirect()->to('/dashboard/datafakta');
	}

	// -------------------------------------------------
	public function datatestimonial()
	{
		$model = new testimonialModel;
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
			'tittle' => 'Data testimonial || PT.CROP',
			'user' => $model->paginate(4, 'user'),
			'pager' => $model->pager,
			'currentPage' => $currentPage,
			'sidebar' => $sidebar_side
		];
		return view('dashboard/testimonial_data', $data);
	}

	public function tambahTesti()
	{
		$model = new testimonialModel();
		$session = session();
		$fileGambar = $this->request->getFile('poto');
		$fileGambar->move('gambar/testimonial/');
		$namaGambar = $fileGambar->getName();
		$data = [
			'testimonial_nama' => $this->request->getVar('nama'),
			'testimonial_sumber' => $this->request->getVar('sumber'),
			'testimonial_kerja' => $this->request->getVar('kerja'),
			'testimonial_jabatan' => $this->request->getVar('jabatan'),
			'testimonial_deskripsi' => $this->request->getVar('deskripsi'),
			'testimonial_gambar' => $namaGambar
		];
		$model->save($data);
		$session->setFlashdata('pesan', 'Data berhasil ditambahkan');
		return redirect()->to('/dashboard/datatestimonial');
	}

	public function hapusTesti($id)
	{
		$model = new testimonialModel();
		$model_gambar = $model->find($id);
		unlink('gambar/testimonial/' . $model_gambar['testimonial_gambar']);
		$session = session();
		$model->delete($id);
		$session->setFlashdata('pesan', 'Data berhasil dihapus');
		return redirect()->to('/dashboard/datatestimonial');
	}
}
