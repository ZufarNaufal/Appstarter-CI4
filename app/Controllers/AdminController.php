<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Appstarter || Admin || index'
		];
		echo view('admin/v_admin', $data);
	}
}
