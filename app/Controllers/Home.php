<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Appstarter || Home',
			'isi' => 'home'
		];
		echo view('home', $data);
		//return view('welcome_message');
	}
}
