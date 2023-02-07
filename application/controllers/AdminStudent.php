<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
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
		$this->studentList();
	}

	//상담 신청학생 리스트
	public function studentList(){
		if(!is_user_logged_in()){
			$msg = "로그인이 필요한 페이지입니다.";
			script_alert_go($msg, '/admin');
		}
		//학생 리스트 호출
		$studentList = $this->admin_student_model->selectStudentList();
		$this->load->view('admin/studentList', array(
			'students'   => $studentList
		));
	}


}
