<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Mlogin;
//use App\Models\MProduct;

class LoginController extends BaseController
{
	public function __construct()
	{
		$this->Mlogin = new Mlogin();
		helper('form');
	}
	public function index()
	{
		$data = [
			'title' => 'Appstarter || Sign-In'
		];
		echo view('auth/template', $data);
		echo view('auth/login', $data);
	}

	public function check_login()
	{
		$username = $this->request->getPost('username');
		$password = $this->request->getPost('password');

		$check = $this->Mlogin->login_check($username, $password);

		if(($check['username']==$username) &&($check['password']==$password))
		{
			session()->set('username', $check['username']);
			session()->set('name_user', $check['name_user']);
			session()->set('level', $check['level']);
			return redirect()->to(base_url('home'));
		} else {
			session()->setFlashdata('failed', 'username or password wrong');
			return redirect()->to(base_url('login'));
		} 
	}
	public function logout()
		{
			session()->destroy();
			return redirect()->to(base_url('home'));
		}
}
