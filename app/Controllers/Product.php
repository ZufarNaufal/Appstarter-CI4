<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MProduct;

class Product extends BaseController
{
	protected $ProductModel;

	public function __construct()
	{
		$this->MProduct = new MProduct();
	}

	public function index()
	{
		if(session()->get('username')=='') {
			session()->setFlashdata('Failed, You Must Login Fisrt');
			return redirect()->to(base_url('home'));
		}
		$data = [
			'title' => 'Appstarter || Product',
			'product' => $this->MProduct->get_product(),
			'content' => 'v_product'
		];
		echo view('product/template', $data);
		echo view('product/v_product', $data);
	}

	public function add_item()
	{
		if(session()->get('username')=='') {
			session()->setFlashdata('Failed, You Must Login Fisrt');
			return redirect()->to(base_url('home'));
		}
		$data = [
			'title' => 'Appstarter || Add Item',
			'content' => 'v_add_item'
			//''
		];
		echo view('product/template', $data);
		echo view('product/v_add_item', $data);
	}

	public function edit()
	{
		$data = [
			'title' => 'Appstarter || Edit data'
		];

		echo view('product/v_edit');
	}

	public function save_item()
	{
		
		$data = [
			'product_name' => $this->request->getPost('product_name'),
			'product_description' => $this->request->getPost('product_description'),
		];

		$this->MProduct->insert_product($data);
//		session()->setFlashdata('success', 'Add item Succedd');
		return redirect()->to(base_url('product'));
	}

	public function delete()
	{

	}
}
