<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'AppStarter || Profile'
		];
		
	echo view('user/v_user', $data);
	echo view('layouts/header', $data);
	echo view('layouts/head', $data);
	echo view('layouts/nav', $data);
	//echo view('layouts/wrapper', $data);
	}
}
