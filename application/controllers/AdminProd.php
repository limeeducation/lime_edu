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
		if(!is_user_logged_in()){
			$msg = "로그인이 필요한 페이지입니다.";
			script_alert_go($msg, '/admin');
		}
		$type = empty($this->input->get('type')) ? 'normal' : $this->input->get('type');
		$this->load->view('admin/bannerList', array(
			'type'   => $type
		));
	}

	//상품 배너 등록 페이지
	public function bannerAdd(){
		if(!is_user_logged_in()){
			$msg = "로그인이 필요한 페이지입니다.";
			script_alert_go($msg, '/admin');
		}
		$type = $this->input->get('type');
		$idx = $this->input->get('idx');
		if(!empty($idx)){
			$banr_detail = $this->admin_prod_model->getBannerDetail($idx);
			$data_arr = array(
							'type'   => $type,
                            'detail' => $banr_detail,
                            'do_func'=> 'edit'
                        );

		}else{
			$data_arr = array(
							'type'   => $type,
							'do_func'=> 'add'
					    );
		}
		$this->load->view('admin/bannerAdd', $data_arr);

	}

	//상품 배너 저장
	public function bannerSave(){

		if(!is_user_logged_in()){
			$msg = "로그인이 필요한 페이지입니다.";
			script_alert_go($msg, '/admin');
		}

		$data['banr_type'] = $this->input->post('banr_type');
		$data['banr_tab'] = $this->input->post('banr_tab');
		$data['banr_img'] = $this->input->post('banr_img');
		$data['banr_link_url'] = $this->input->post('banr_link_url');
		$data['banr_use_yn'] = $this->input->post('banr_use_yn') == 'on' ? 'Y' : 'N';
		$editType = $this->input->post('edit_type');
		if($editType == 'edit'){
			date_default_timezone_set('Asia/Seoul');
			$data['banr_idx'] = $this->input->post('banr_idx');
			$data['banr_mod_id'] = $this->session->userdata('user_idx');
			$data['banr_mod_dt'] = date('Y-m-d H:i:s');
			$res = $this->admin_prod_model->editBanner($data);
		}else{
			$data['banr_reg_id'] = $this->session->userdata('user_idx');
			$res = $this->admin_prod_model->addBanner($data);
		}

		if($res){
		$res_msg = $editType == 'edit' ? '배너가 수정되었습니다.' : '배너가 등록되었습니다.';
			script_alert_go($res_msg, base_url('/AdminProd/bannerList'));
		}else{
			script_alert_back('저장중 장애가 발생했습니다.');
		}
	}

	//탭별 리스트 호출
	public function getTabListAjax(){
		$type = $this->input->post('type');
		$tab = $this->input->post('tab');
		$banner_list = $this->admin_prod_model->getBanners($type, $tab);
		echo json_encode($banner_list);
	}

	//배너 삭제
	public function bannerDel(){

		if(!is_user_logged_in()){
			$msg = "로그인이 필요한 페이지입니다.";
			script_alert_go($msg, '/admin');
		}

		$banr_idx = $this->input->get('idx');
		$res = $this->admin_prod_model->deleteBanner($banr_idx);
		if(!$res){
			script_alert_back('배너 삭제 중 장애가 발생했습니다.');
		}
		script_alert_go('배너가 삭제되었습니다.', base_url('/AdminProd/bannerList'));
	}

	//배너 노출순서 업데이트
	public function updateBanrSeq(){
		$data['banr_idx'] = $this->input->post('idx');
		$data['banr_seq'] = $this->input->post('seq');
		$res = $this->admin_prod_model->updateBannerSeq($data);
		echo json_encode($res);
	}

	//칼럼 리스트
	public function columnList(){
		if(!is_user_logged_in()){
			$msg = "로그인이 필요한 페이지입니다.";
			script_alert_go($msg, '/admin');
		}
		$search = array(
			'str'		=> !empty($_GET['str']) ? $_GET['str'] : '',
			'subject'	=> !empty($_GET['subject']) ? $_GET['subject'] : '',
			'page'      => !empty($_GET['page']) ? $_GET['page'] : 1,
			'pageSize'  => !empty($_GET['list_count']) ? $_GET['list_count'] : 10
		);
		$cols = $this->admin_prod_model->get_cols($search);
		$colCnt = $this->admin_prod_model->get_cols($search, true);
		//make_log(null,'칼럼리스트 호출');
		$this->document->view('admin/colList', array(
			'search' => $cols,
			'totalCnt' => $colCnt
		));
	}

	//칼럼 등록,수정 페이지
	public function columnEdit($idx=null){
		if(!is_user_logged_in()){
			$msg = "로그인이 필요한 페이지입니다.";
			script_alert_go($msg, '/admin');
		}
		$res['stat'] = "new";
		if(!empty($idx)){
			$res = $this->admin_prod_model->get_col_detail($idx);
			$res['stat'] = "edit";
			$this->admin_prod_model->get_cols($search, true);
		}
		$this->document->view('admin/colEdit', $res);
	}

	//칼럼 등록,수정
	public function columnSave(){

	}

	//칼럼 삭제
	public function columnDelete(){

	}
}
