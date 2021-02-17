<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class RegisterController extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Appstarter || Sign-Up Account'
		];
		echo view('auth/register', $data);
	}
}
