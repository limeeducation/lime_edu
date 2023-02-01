<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper(array('url', 'script', 'banner', 'html'));
		$this->load->model(array('old_model'));
	}
	public function index()
	{
		$query = "select * from ms_board_table where isdel <> '1' order by idx desc limit 0,3";
		$result = $this->old_model->run_query($query);
		$query = "select * from ms_board_table where isdel <> '1' order by idx desc limit 3,6";
		$result2 = $this->old_model->run_query($query);
		$this->load->view('main/old_main', array(
        			'result' 	=> $result,
        			'result2'	=> $result2
        ));
	}

	//신규 메인페이지
	public function new_main(){
		//tab => 1: 메인 / 5: 해외대학 유학 / 6: 조기유학 / 7: 어학연수 / 8: 가족연수/캠프/스쿨링
		$tab = !empty($_GET['tab']) ? $_GET['tab'] : '1';
		require_once($_SERVER['DOCUMENT_ROOT'].'/lib/snoopy/Snoopy.class.php');

		//블로그 내용 스크래핑
		$snoopy = new Snoopy;
		$snoopy->fetch(NAVER_BLOG_URL);

		//필요한 내용만 추출
		preg_match('/<iframe id="ExternalWidgetIframe_10" class="item">(.*?)<\/li>/is', $snoopy->results, $scrap_contents);

		$data = array(
			'blog_contents'				=> $snoopy->results,
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
				$column->col_cnts = mb_strimwidth($column->col_cnts, '0', '70', '...', 'utf-8');
			}
			$data['column_list'] = $column_list;
		}else{
			$normal_banner_list = get_banner($tab, "normal");
			$data['normal_banner_list'] = $normal_banner_list;
			$column_list = get_column();
			foreach($column_list as $column){
				$column->col_cnts = mb_strimwidth($column->col_cnts, '0', '70', '...', 'utf-8');
			}
			$data['column_list'] = $column_list;
		}

		$this->load->view('main/main', $data);
	}
}
