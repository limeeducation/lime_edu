<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminProd extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		$this->load->helper(array('url', 'cookie', 'script', 'login'));
		$this->load->model(array('admin_model', 'admin_prod_model'));
	}
	public function index()
	{
		if(!is_user_logged_in()){
			$msg = "로그인이 필요한 페이지입니다.";
			script_alert_go($msg, '/admin');
		}
	}

	//상품 배너 리스트
	public function bannerList(){
		$type = $this->input->get('type');
		$this->load->view('admin/bannerList', array(
			'type'   => $type
		));
	}
}
