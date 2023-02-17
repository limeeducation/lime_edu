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
		$this->load->view('earlyAbroad/usaSchoolList');
	}

	//조기유학 미국 왜 조기유학인가
	public function whyEarlyUsa(){
		$this->load->view('earlyAbroad/whyEarlyUsa');
	}

	//조기유학 미국 명문 TOP50
	public function usTopSchools(){
		$this->load->view('earlyAbroad/usaTopSchools');
	}


	//조기유학 캐나다 학교찾기
	public function caSchoolList(){
		$this->load->view('earlyAbroad/caSchoolList');
	}

	//조기유학 캐나다 왜 조기유학인가
	public function whyEarlyCa(){
		$this->load->view('earlyAbroad/caSchoolList');
	}

	//조기유학 캐나다 관리형 유학
	public function abtCaManageAbroad(){
		$this->load->view('earlyAbroad/caSchoolList');
	}

	//조기유학 캐나다 국제사립학교
	public function caInternationalPrivate(){
		$this->load->view('earlyAbroad/caSchoolList');
	}
}

