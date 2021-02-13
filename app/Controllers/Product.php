<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MProduct;

class Product extends BaseController
{
	protected $ProductModel;

	public function __construct()
	{
		$this->ProductModel = new MProduct();
	}

	public function index()
	{
		$data = [
			'title' => 'Appstarter || Product',
			'product' => $this->ProductModel->get_product(),
			'content' => 'v_product'
		];
		echo view('product/template');
		echo view('product/v_product', $data);
	}
}
