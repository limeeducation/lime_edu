<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminStudent extends CI_Controller {
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
		$studentList = $this->admin_student_model->gatStudentList();
		$applicantsCnt = $this->admin_student_model->gatStudentList(true);
		$this->load->view('admin/studentList', array(
			'students'   => $studentList,
            'studentCnt' => $applicantsCnt
		));
	}

	//신규 학생 등록페이지
	public function editStudent($idx){
		if(!is_user_logged_in()){
			$msg = "로그인이 필요한 페이지입니다.";
			script_alert_go($msg, '/admin');
		}
		$res['stat'] = "new";
		if(!empty($idx)){
			$res = $this->admin_student_model->getStudentDetail($idx);
			$res['stat'] = "edit";
		}
		$this->load->view('admin/studentEdit', $res);
	}

	public function studentSave(){
		if(!is_user_logged_in()){
        	$msg = "로그인이 필요한 페이지입니다.";
        	script_alert_go($msg, '/admin');
        }
		$stu_idx='';
		$data['con_name'] 		= $this->input->post('con_name');
		$data['con_contact']	= $this->input->post('con_contact');
		$data['con_date'] 		= $this->input->post('con_date');
		$data['con_time'] 		= $this->input->post('con_time');
		$data['con_time'] 		= $this->input->post('con_time');
		$data['con_type'] 		= $this->input->post('con_type');
		$data['con_office'] 	= $this->input->post('con_office');
		$data['con_study'] 		= $this->input->post('con_study');
		$data['con_natio'] 		= $this->input->post('con_natio');
		$data['con_start_dt'] 	= $this->input->post('con_start_dt');
		$data['con_details'] 	= $this->input->post('con_details');
		$data['con_manager'] 	= $this->input->post('con_manager');
		$data['con_contact_yn'] = $this->input->post('con_contact_yn') == 'on' ? 'Y' : 'N';
		$data['con_regist_yn'] 	= $this->input->post('con_regist_yn') == 'on' ? 'Y' : 'N';
		$editType = $this->input->post('edit_type');
		if($editType == 'edit'){
			date_default_timezone_set('Asia/Seoul');
			$data['con_idx'] = $this->input->post('con_idx');
			$data['con_mod_dt'] = date('Y-m-d H:i:s');
			$stu_idx = $data['con_idx'];
			$res = $this->admin_student_model->editStudent($data);
		}else{
			$res = $this->admin_student_model->addStudent($data);
			$stu_idx = $res;
		}

		if($res){
			$res_msg = $editType == 'edit' ? '학생 정보가 수정되었습니다.' : '학생이 등록되었습니다.';
			script_alert_go($res_msg, base_url('/AdminStudent/editStudent/'.$stu_idx));
		}else{
			script_alert_back('저장중 장애가 발생했습니다.');
		}
    }
}
