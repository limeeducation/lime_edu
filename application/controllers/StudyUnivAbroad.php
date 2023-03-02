<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//어학연수 컨트롤러
class StudyUnivAbroad extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		$this->load->helper(array('url', 'cookie', 'script', 'login'));
		$this->load->model(array('admin_model','admin_student_model','school_model'));
	}
	public function index()
	{
		$this->studyUnivUs();
	}

	//해외대학유학 영국
	public function studyUnivUk(){

		$this->load->view('stdUniv/univUk');
	}

	//해외대학유학 미국
	public function studyUnivUs(){

		$this->load->view('stdUniv/univUs');
	}

	//해외대학유학 캐나다
	public function studyUnivCa(){

		$this->load->view('stdUniv/univCa');
	}

}

