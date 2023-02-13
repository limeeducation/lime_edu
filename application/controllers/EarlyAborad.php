<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//조기유학 컨트롤러
class EarlyAbroad extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		$this->load->helper(array('url', 'cookie', 'script', 'login'));
		$this->load->model(array('admin_model','admin_student_model'));
	}
	public function index()
	{
		$this->usSchoolList();
	}

	//조기유학 미국 학교찾기
	public function usSchoolList(){

	}

	//조기유학 미국 왜 조기유학인가
	public function whyEarlyUsa(){
		$this->load->view('earlyAborad/whyEarlyUsa');
	}

}
