<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Login extends Controller {
	public function index() {
		$data = [
			'tittle' => 'Login || PT.CROP',
		];
		return view('login/login', $data);
	}

	public function auth() {
		$session = session();
		$model = new UserModel();
		$email = $this->request->getVar('name');
		$password = $this->request->getVar('password');
		$user = $model->where('user_name', $email)->first();
		if ($user) {
			$pass = $user['user_password'];
			if (password_verify($password, $pass)) {
				$session->set([
					'user_id' => $user['user_id'],
					'user_name' => $user['user_name'],
					'user_email' => $user['user_email'],
					'user_password' => $user['user_password'],
					'user_profile' => $user['user_profile'],
					'user_level' => $user['admin_level_kode'],
					'logged_in' => TRUE,
				]);

				return redirect()->to('dashboard');
			} else {
				$session->setFlashdata('msg', 'Password anda salah');
				return redirect()->to('/login');
			}
		} else {
			$session->setFlashdata('msg', 'Username tidak ditemukan');
			return redirect()->to('/login');
		}
	}

	public function logout() {
		$session = session();
		$session->destroy();
		return redirect()->to('/login');
	}

/*	public function data_row() {
$user = new ProdukModel;
$data['mahasiswa'] = $user->where('user_id', session()->get('user_id'))->first();
return view('dashboard', $data);
}*/
}