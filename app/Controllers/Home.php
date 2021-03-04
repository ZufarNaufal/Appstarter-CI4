<?php

namespace App\Controllers;
use App\Models\MProduct;

class Home extends BaseController
{
	protected $ProductModel;

	public function __construct()
	{
		$this->MProduct = new MProduct();
	}
	
	public function index()
	{
		$data = [
			'title' => 'Appstarter || Home',
			'product' => $this->MProduct->get_product(),
			'isi' => 'home'
		];
		echo view('home', $data);
		//return view('welcome_message');
	}
}
