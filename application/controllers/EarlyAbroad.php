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

	//조기유학 캐나다 학교 상세
	public function caSchoolDetail($name){
		$school_name = array(
			'tdsb'	=> 'Toronto District School Board',
			'tcds'	=> 'Toronto Catholic District School Board'
		);
		$school_address = array(
			'tdsb'	=> '5050 Yonge Street, Toronto, Ontario M2N 5N8',
			'tcds'	=> '80 Sheppard Ave. E., Toronto ON., M2N 6E8',

		);
		$school_url = array(
			'tdsb'	=> 'www.tdsb.on.ca',
			'tcds'	=> 'www.tcdsb.org',

		);
		$school_area = array(
			'tdsb'	=> '<p class="lh28">토론토 시의 정규교육 과정을 관할하고 있으며, 산하에 584개의 학교가 운영되는 캐나다 최대규모의 교육청입니다.</p>
                        <p>1. 매년 국제학생이 입학 가능한 고등학교들을 선정하며, 선정된 학교들만 입학수속이 가능합니다.</p>
                        <p>2. 유치원~초중등학교 입학의 경우, 학교 권역안의 주소지 증명이 입학수속에 필요합니다.</p>
                        <p>3. 토론토 전지역에 걸쳐 다양한 학교가 분포되어 있으며, 교복은 따로 없습니다.</p>
                        <p>4. 재학생들의 국적, 문화배경이 매우 다양하며, 각 학교의 지도교사(가이던스)들이 국제학생에 대한 이해도가 높아 보다 빠르고 안정적인 현지적응이 가능합니다.</p>',
            'tcds'	=> '<p class="lh28">토론토시에 거주하는 카톨릭 신자들의 교육을 위해 카톨릭 재단에서 운영하는 교육청으로, 캐나다 최대 규모 교육청 중 한 곳입니다.</p>
                        <p>1.유치부-초중등학교 입학의 경우, 학교 권역안의 주소지 증명이 필수이며, 학생본인 혹은 부모님, 현지 가디언(보호자)가 카톨릭 신자여야만 입학이 가능합니다.</p>
                        <p>2.고등학교 입학의 경우, 카톨릭 신자가 아니여도 입학이 가능하며, 타 교육청에 비해 학교선택이 비교적 자유롭습니다.</p>
                        <p>3.1년(2학기), 1학기(5개월), 한달 단위의 입학신청도 가능하며, 일반 유학생들과 동일한 학교 선택이 가능합니다.</p>
                        <p>4.드레스 코드가 존재하며 교복 착용이 필수입니다.</p>',

		);
		$school_char = array(
			'tdsb'	=> '<p class="lh28">캐나다 최대 교육청</p>
                        <p>-북미에서 4번째로 큰, 캐나다 최대 교육청</p>
                        <p>-K-G8 초등학교 / G9 / G9 -G12 중, 고등학교로 구분</p>
                        <p>-총 600 개의 학교에서 259,000 여명 재학 중</p>
                        <p>-검증된 선생님들의 높은 수준의 교육제공</p>
                        <p>-토론토 교육청은 토론토 전 지역에 걸쳐 관할</p>
                        <p>-다양한 국제학생들의 체류로 학구열이 높은 North York 지역이 인기가 많음</p>',
            'tcds'	=> '<p>-옷차림 및 생활태도를 중요시하고 규율이 많습니다.</p>
                        <p>-K-G8 초등학교 / G9 -G12 중, 고등학교로 구분됩니다.</p>
                        <p>-일반 공립 교육청에 비해 엄격하고, 모든 학교의 학생들은 교복을 착용합니다.</p>
                        <p>-종교활동과 학업을 동시에 병행하게 됩니다.</p>
                        <p>-East York 지역의 Neil McNeil (남학교)와 Notre Dame(여학교)가 꾸준히 학생들의 선호도가 높습니다.</p>
                        <p>-토론토 교육청 학교들보다 자리의 확보가 수월한 편입니다.</p>',

		);
		$school_entry = array(
			'tdsb'	=> '<p class="lh30">1. 입학 가능 시기</p>
                       <p> -초등학교: 9월(1학기), 1월 (2학기)</p>
                       <p> -중고등학교: 9월 (1학기), 2월 (2학기)</p>
                       <p class="lh30">2. 원서접수시 구비서류</p>
                       <p>1) 최근 2년간의 성적증명서 혹은 생활기록부</p>
                       <p>2) 현재 재학중인 학교 선생님 영문 추천서 2부</p>
                       <p>3) 여권사본</p>
                       <p>4) 영문 재학증명서</p>
                       <p>5) 영문 예방접종증명서</p>
                       <p>6) 가디언서류</p>
                       <p class="lh30">3. 학비</p>
                       <p>원서 접수비용: $350</p>
                       <p>학비: $16,000</p>
                       <p>의료보험: 학비에 포함되어 있음</p>
                       <p class="lh30"> ----------------------------</p>
                       <p>총: $16,350</p>',
            'tcds'	=> '<p class="lh30">1. 입학 가능 시기</p>
                         <p>-초등학교: 9월(1학기), 1월 (2학기)</p>
                         <p>-중고등학교: 9월 (1학기), 2월 (2학기)</p>
                         <p class="lh30">2. 원서접수시 구비서류</p>
                         <p>최근 2년간의 성적증명서 혹은 생활기록부</p>
                         <p>현재 재학중인 학교 선생님 영문 추천서 2부</p>
                         <p>여권사본</p>
                         <p>영문 재학증명서</p>
                         <p>영문 예방접종증명서</p>
                         <p>가디언서류</p>
                         <p class="lh30">3. 학비</p>
                         <p>원서 접수비용: $350</p>
                         <p>학비:   $16,000</p>
                         <p>의료보험: 학비에 포함되어 있음</p>
                         <p class="lh30"> --------------------</p>
                         <p>총:  $16,350</p>',
		);
		$school_recom = array(
			'tdsb' => '<p class="lh28">Elementary</p>
                       <p>- Mckee Public School, Avondale Public School</p>
                       <p class="lh28">Secondary</p>
                       <p>- A.Y Jackson Secondary School, William Lyon Mackenzie Collegiate Institute</p>',
            'tcds'	=> '<p class="lh28">Elementary </p>
                        <p>- St. Timothy Catholic School, St. Agnes Catholic School</p>
                        <p class="lh28">Secondary </p>
                        <p>- St. Joseph’s Morrow Park Catholic Secondary School (여학교),  Madonna Catholic Secondary School (여학교)</p>
                        <p>  Neil McNeil Secondary School</p>'
		);
		$this->load->view('earlyAbroad/caSchoolDetail', array(
			'school'		=> $name,
			'school_name'	=> $school_name,
			'address'		=> $school_address,
			'url'			=> $school_url,
			'area'			=> $school_area,
			'char'			=> $school_char,
			'entry'			=> $school_entry,
			'recom'			=> $school_recom
		));
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

