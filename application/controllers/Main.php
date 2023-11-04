<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper(array('url', 'script', 'banner', 'html'));
		$this->load->model(array('old_model','apply_model'));
	}
	public function index()
	{
		//$query = "select * from ms_board_table where isdel <> '1' order by idx desc limit 0,3";
		//$result = $this->old_model->run_query($query);
		//$query = "select * from ms_board_table where isdel <> '1' order by idx desc limit 3,6";
		//$result2 = $this->old_model->run_query($query);
		//$this->load->view('main/old_main', array(
        //			'result' 	=> $result,
        //			'result2'	=> $result2
        //));
        $this->new_main();
	}

	//신규 메인페이지
	public function new_main(){
		//tab => 1: 메인 / 5: 해외대학 유학 / 6: 조기유학 / 7: 어학연수 / 8: 가족연수/캠프/스쿨링
		$tab = !empty($_GET['tab']) ? $_GET['tab'] : '1';

		$data = array(
			'tab'						=> $tab
		);

		if($tab == '1'){//최초 메인 페이지에서는 type:normal / tab:1~4 불러오기
			//1: 메인 - 어학연수 / 2: 메인 - 초중고 유학 / 3: 메인 - 대학유학 / 4: 메인 - 컬리지 유학 후 이민/자녀무상
			$normal_banner_list[0] = get_banner("1", "normal");
			$normal_banner_list[1] = get_banner("2", "normal");
			$normal_banner_list[2] = get_banner("3", "normal");
			$normal_banner_list[3] = get_banner("4", "normal");
			$event_banner_list = get_banner("1", "event");
			$data['normal_banner_list'] = $normal_banner_list;
			$data['event_banner_list'] = $event_banner_list;

			//전체 칼럼 리스트 중 최근 작성 글 10개 불러오기
			$column_list = get_column();
			foreach($column_list as $column){
				$column->col_cnts = mb_strimwidth(strip_tags($column->col_cnts), '0', '80', '...', 'utf-8');
			}
			$data['column_list'] = $column_list;
		}else{
			$normal_banner_list = get_banner($tab, "normal");
			$us_banner_list = array();
			$uk_banner_list = array();
			$ca_banner_list = array();
			$phil_banner_list = array();
			if(in_array($tab,array('6','7','8'))){
			    foreach($normal_banner_list as $normal_banner){
                    $tab_2 = $normal_banner->banr_tab_2;
                    if($tab_2 == '1'){
                        array_push($us_banner_list,$normal_banner);
                    }else if($tab_2 == '2'){
                        array_push($uk_banner_list,$normal_banner);
                    }else if($tab_2 == '3'){
                        array_push($ca_banner_list,$normal_banner);
                    }else if($tab_2 == '4'){
                        array_push($phil_banner_list,$normal_banner);
                    }
                }
                $data['us_banner_list'] = $us_banner_list;
                $data['uk_banner_list'] = $uk_banner_list;
                $data['ca_banner_list'] = $ca_banner_list;
                $data['phil_banner_list'] = $phil_banner_list;
			}
			$data['normal_banner_list'] = $normal_banner_list;
			$column_list = get_column();
			foreach($column_list as $column){
				$column->col_cnts = mb_strimwidth(strip_tags($column->col_cnts), '0', '80', '...', 'utf-8');
			}
			$data['column_list'] = $column_list;
		}

		$this->load->view('main/main', $data);
	}

	//상담 신청
	public function apply_consult(){
		$data['con_office'] = $this->input->post('con_office');
		$data['con_type'] = $this->input->post('con_type');
		$data['con_date'] = $this->input->post('con_date');
		$data['con_time'] = $this->input->post('con_time').":00";
		$data['con_start_dt'] = $this->input->post('start_year').".".$this->input->post('start_month');
		$data['con_name'] = $this->input->post('con_name');
		$data['con_contact'] = $this->input->post('con_contact');
		$data['con_natio'] = empty($this->input->post('con_natio')) ? '' : $this->input->post('con_natio');
		$data['con_study'] = empty($this->input->post('con_study')) ? '' : $this->input->post('con_study');
		$data['con_details'] = empty($this->input->post('con_details')) ? '' : $this->input->post('con_details');
		$data['con_apply_url'] = $this->input->post('con_apply_url');
		//url이 없는 경우 비정상접근.
		if($data['con_apply_url'] == null || $data['con_apply_url'] == ''){
			script_alert_back('상담 신청에 실패했습니다. 관리자에게 문의하세요.');
		}

		//상담 신청일이 날짜형식이 아닌경우 비정상접근
		if(!preg_match("/^([0-9]{4})-([0-9]{2})-([0-9]{2})$/", $data['con_date']){
			script_alert_back('상담 신청에 실패했습니다. 관리자에게 문의하세요.');
		}


		$apply_res = $this->apply_model->consult_apply($data);

		if(!$apply_res){
			script_alert_back('상담 신청에 실패했습니다. 관리자에게 문의하세요.');
		}else{
			script_alert_go('상담 신청이 완료되었습니다.', $data['con_apply_url']);
		}
	}

	//상담신청페이지
	public function application(){
		$this->load->view('main/application');
	}

}
