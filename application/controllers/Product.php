<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//조기유학 컨트롤러
class Product extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		$this->load->helper(array('url', 'cookie', 'script', 'login'));
		$this->load->model(array('product_model'));
	}
	public function index()
	{
		$this->detail('1');
	}

	//상품 상세 페이지 호출
	public function detail($prod_idx){
		$prod_detail = $this->product_model->getProduct($prod_idx);
		print_r($prod_detail);
		$this->load->view('product/detail', $prod_detail);
	}

}
