<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Product extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Appstarter || Product',
			'content' => 'v_product'
		];
		echo view('product/template');
		echo view('product/v_product', $data);
	}
}
