<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LoginController extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Appstarter || Sign-In'
		];
		echo view('auth/template', $data);
		echo view('auth/login', $data);
	}
}
