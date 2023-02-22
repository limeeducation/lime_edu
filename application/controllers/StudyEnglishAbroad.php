<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//어학연수 컨트롤러
class StudyEnglishAbroad extends CI_Controller {
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
		$this->usAcademyList();
	}

	//조기유학 미국 학교찾기
	public function usAcademyList(){
		$school_list = $this->school_model->getSchool('US');
		foreach($school_list as $school){

			$program_list = $this->school_model->getPrograms($school->en_aca_city_idx);
			foreach($program_list as $program){
				array_push($school,$program);
			}
			print_r($school);
			echo '<br>';

			echo $school->city_name . "/" . $school->aca_name;
			echo '<br><br><br>';
		}

		$this->load->view('earlyAbroad/usaSchoolList');
	}


}

