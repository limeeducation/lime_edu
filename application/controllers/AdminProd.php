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
		//1: 메인 - 어학연수 / 2: 메인 - 초중고 유학 / 3: 메인 - 대학유학 / 4: 메인 - 컬리지 유학 후 이민/자녀무상 / 5: 해외대학 유학 / 6: 조기유학 / 7: 어학연수 / 8: 가족연수/캠프/스쿨링
		$data['banr_tab'] = $this->input->post('banr_tab');
		$data['banr_tab_2'] = $this->input->post('banr_tab_2');
		$data['banr_img'] = $this->input->post('banr_img');
		$data['banr_link_url'] = $this->input->post('banr_link_url');
		$data['banr_use_yn'] = $this->input->post('banr_use_yn') == 'on' ? 'Y' : 'N';
		$editType = $this->input->post('edit_type');

		//메인 상시 이미지의 경우 최대 6개 등록 가능
		if($data['banr_type'] == 'normal'){//상시 상품 배너인 경우
			if($data['banr_tab'] < 5){//메인에 종속된 배너인 경우
				//저장할 탭의 노출된 이미지 갯수 호출
				$curTabUseCnt = $this->admin_prod_model->getBannerTabUseCnt($data['banr_tab']);
				//수정하는 경우 -> 현재 배너의 탭과 DB에 저장된 탭이 일치하면 저장실행, 아니면 저장할 탭의 배너 갯수 확인해서 일치하면
				if($editType == 'edit'){//수정하는 경우
					$data['banr_idx'] = $this->input->post('banr_idx');
					//해당 배너의 현재상태 호출
					$cur_status = $this->admin_prod_model->getBannerDetail($data['banr_idx']);
					if($cur_status['banr_tab'] == $data['banr_tab']){//탭을 변경하지 않는 경우
						//탭을 변경하지 않는데 이미 노출된 배너가 6개 이상인 경우 + 배너를 비노출 -> 노출 변경하는 경우
						if($curTabUseCnt > 5 && $data['banr_use_yn'] == 'Y' && $cur_status['banr_use_yn'] == 'N'){
							script_alert_back('해당 탭은 6개 까지만 노출이 가능합니다.');
						}
					}else{//탭을 변경하는 경우
						//탭을 변경하는데 이미 노출된 배너가 6개 이상인 경우 + 수정하는 배너를 노출하려고 하는 경우
						if($curTabUseCnt > 5 && $data['banr_use_yn'] == 'Y'){
							script_alert_back('해당 탭은 6개 까지만 노출이 가능합니다.');
						}
					}
					date_default_timezone_set('Asia/Seoul');
					$data['banr_mod_id'] = $this->session->userdata('user_idx');
					$data['banr_mod_dt'] = date('Y-m-d H:i:s');
					$res = $this->admin_prod_model->editBanner($data);
				}else{
					if($curTabUseCnt > 5 && $data['banr_use_yn'] == 'Y'){//저장하려는 탭의 노출된 배너가 6개 이상인 경우 + 노출상태로 저장하려고 하는 경우
						script_alert_back('해당 탭은 6개 까지만 노출이 가능합니다. 탭 노출여부를 비노출 상태로 변경해주세요.');
					}
					$data['banr_reg_id'] = $this->session->userdata('user_idx');
					$res = $this->admin_prod_model->addBanner($data);
				}
			}else{//메인에 종속된 배너가 아닌 경우
				if($editType == 'edit'){//수정하는 경우
					date_default_timezone_set('Asia/Seoul');
					$data['banr_idx'] = $this->input->post('banr_idx');
					$data['banr_mod_id'] = $this->session->userdata('user_idx');
					$data['banr_mod_dt'] = date('Y-m-d H:i:s');
					$res = $this->admin_prod_model->editBanner($data);
				}else{
					$data['banr_reg_id'] = $this->session->userdata('user_idx');
                	$res = $this->admin_prod_model->addBanner($data);
				}
			}
		}else{//메인 상단 배너인 경우
			if($editType == 'edit'){//수정하는 경우
				date_default_timezone_set('Asia/Seoul');
				$data['banr_idx'] = $this->input->post('banr_idx');
				$data['banr_mod_id'] = $this->session->userdata('user_idx');
				$data['banr_mod_dt'] = date('Y-m-d H:i:s');
				$res = $this->admin_prod_model->editBanner($data);
			}else{
				$data['banr_reg_id'] = $this->session->userdata('user_idx');
				$res = $this->admin_prod_model->addBanner($data);
			}
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
		$this->load->view('admin/colList', array(
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
		}
		$this->load->view('admin/colEdit', $res);
	}

	//칼럼 등록,수정
	public function columnSave(){
		if(!is_user_logged_in()){
			$msg = "로그인이 필요한 페이지입니다.";
			script_alert_go($msg, '/admin');
		}
		$data['col_title'] = $this->input->post('col_title');
		$data['col_subject'] = $this->input->post('col_subject');
		$data['col_thumb'] = $this->input->post('col_thumb');
		$data['col_cnts'] = $this->input->post('col_cnts');
		$data['use_yn'] = $this->input->post('use_yn') == 'on' ? 'Y' : 'N';
		$editType = $this->input->post('edit_type');
		if($editType == 'edit'){
			date_default_timezone_set('Asia/Seoul');
			$data['idx'] = $this->input->post('col_idx');
			$data['mod_idx'] = $this->session->userdata('user_idx');
			$data['mod_date'] = date('Y-m-d H:i:s');
			$res = $this->admin_prod_model->editColumn($data);
		}else{
			$data['reg_idx'] = $this->session->userdata('user_idx');
			$res = $this->admin_prod_model->addColumn($data);
		}

		if($res){
		$res_msg = $editType == 'edit' ? '칼럼이 수정되었습니다.' : '칼럼이 등록되었습니다.';
			script_alert_go($res_msg, base_url('/AdminProd/columnList'));
		}else{
			script_alert_back('저장중 장애가 발생했습니다.');
		}
	}

	//칼럼 삭제
	public function columnDelete($idx){
		if(!is_user_logged_in()){
			$msg = "로그인이 필요한 페이지입니다.";
			script_alert_go($msg, '/admin');
		}

		$res = $this->admin_prod_model->deleteColumn($idx);
		if(!$res){
			script_alert_back('칼럼 삭제 중 장애가 발생했습니다.');
		}
		script_alert_go('칼럼이 삭제되었습니다.', base_url('/AdminProd/columnList'));
	}
}
