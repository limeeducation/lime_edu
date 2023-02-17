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
			'tcds'	=> 'Toronto Catholic District School Board',
			'york'	=> 'York Region District School Board',
			'ycdsb'	=> 'York Catholic District School Board',
			'csd'	=> 'Coquitlam School District #43 (43번 교육청)',
			'nvsd'	=> 'North Vancouver School District #44 (44번 교육청)',
			'vps'	=> 'Vancouver School District #39',
			'bnby'	=> 'Burnaby School District #41',
			'lnly'	=> 'Langley School District #35'
		);
		$school_address = array(
			'tdsb'	=> '5050 Yonge Street, Toronto, Ontario M2N 5N8',
			'tcds'	=> '80 Sheppard Ave. E., Toronto ON., M2N 6E8',
			'york'	=> '60 Wellington Street West, Aurora, ON L4G 3H2',
			'ycdsb'	=> '320 Bloomington Road West, Aurora, ON L4G 0M1 Canada',
			'csd'	=> '1100 Winslow Avenue, Coquitlam, BC, Canada (V3J 2G3)',
			'nvsd'	=> '2121 Lonsdale Avenue, North Vancouver, BC, (V7M 2K6)',
			'vps'	=> '1580 West Broadway, Vancouver, BC, Canada (V6J 5K8)',
			'bnby'	=> '5325 Kincaid Street, Burnaby, BC, Canada (V5G 1W2)',
			'lnly'	=> '4875 - 222nd Street, Langley, BC, Canada (V3A 3Z7)'
		);
		$school_url = array(
			'tdsb'	=> 'www.tdsb.on.ca',
			'tcds'	=> 'www.tcdsb.org',
			'york'	=> 'https://www2.yrdsb.ca/',
			'ycdsb'	=> 'https://www.ycdsb.ca',
			'csd'	=> 'http://www.internationaled.com/',
			'nvsd'	=> 'https://www.sd44.ca/ProgramsServices/InternationalEd/Pages/default.aspx',
			'vps'	=> 'http://intered.vsb.bc.ca/',
			'bnby'	=> 'https://www.studyinburnaby.ca/',
			'lnly'	=> 'http://www.studyinlangley.com/'
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
			'york'	=> '<p class="lh28">요크 교육청은 광역 토론토 북부의 외곽도시를 관할로 하는 공립학교들을 주관하는 교육청 입니다.</p>
                        <p class="lh28">온타리오주 내 교육청 중 세번째로 규모가 크며 도시들이 대체로 부유층이 많이 안전하고 학군이 우수합니다.</p>
                        <p>1. 교육열이 매우 높은 지역으로 프레이저 리포트 랭킹에서 다수 학교들이 상위권에 있으며 주정부 시험과 영어능력평가 시험에서도 학업 성취도가 높은 교육청 입니다.</p>
                        <p>2. 토론토 지역에 비해 적은 한국 학생 비율: 영어권 환경 노출의 극대화로 조기유학에 좋은 지역입니다.</p>
                        <p>3. 교육청 내의 학교 시설 대부분이 최신식이며, 커뮤니티 센터들이 근처에 있어 생활이 편리합니다.</p>',
			'ycdsb'	=> '<p class="lh28">요크 가톨릭 교육청은 토론토 광역권 북부의 쏜힐, 오로라, 마컴, 리치몬드 힐 등을 관할하는 교육청입니다.</p>
                        <p class="lh28">부유층이 많이 거주하는 토론토 북쪽 지역이라, 선호하는 국제학생이 많으며 교육열이 높은 지역입니다.</p>
                        <p>특징: </p>
                        <p>1. 커뮤니티센터가 많고 편의시설들이 다른 지역보다 많은 편입니다.</p>
                        <p>2. 요크교육청 관할지역과 마찬가지로 한국인 이민자들을 쉽게 볼 수 있는 지역 입니다.</p>
                        <p>3. 교육청 내의 학교 시설 대부분이 최신식이며, 커뮤니티 센터들이 근처에 있어 생활이 편리합니다.</p>',
			'csd'	=> '<p class="lh28">BC주 서쪽에 위치한 지역</p>
                        <p>Coquitlam, Port Coquitlam, Balcarra & Anmore 지역으로 나뉨 </p>
                        <p>공원이 많으며 여유롭고 살기 좋은 거주환경이 특징 </p>
                        <p>Port Coquitlam지역은 한인 밀집도 및 유학생 비율이 높음 </p>
                        <p>코퀴틀람 교육청 소속 세컨더리 스쿨들은 최근 몇 년간 프레이저 랭킹이 꾸준히 오르고 있음</p>',
			'nvsd'	=> '<p class="lh28">노스밴쿠버 교육청은 우수한 학군으로 공립학교임에도 퀄리티 높은 교육을 제공하고 있으며, 웨스트 밴쿠버 교육청, 밴쿠버 교육청 </p>
                        <p>웨스트 지역과 함께 국제학생 원서 마감이 가장 빠른 교육청 중 하나 입니다.</p>
                        <p>광역 밴쿠버 북쪽에 위치한 부촌지역. 밴쿠버 다운타운으로부터 차량으로 15분정도 떨어져 있음. </p>
                        <p>노스밴쿠버 교육청 관할 구역은 Capilano/Lonsdale/Lynn Valley/Deep Cove로 나뉨</p>
                        <p>아름다운 녹지의 자연 경관이 뛰어나며 높은 교육수준을 자랑함. </p>
                        <p>다문화 적인 커뮤니티와 가족 중심적인 분위기가 잘 형성 되어 있어서 안전하고 정착하기에 인기가 많은 지역. </p>
                        <p>특히, 지역적 특성 상, 하이킹, 스키, 스노우보드, 자전거 등 다양한 액티비티를 즐길 수 있는 여건이 잘 마련되어 있음.</p>'
			'vps'	=> '<p class="lh28">BC주 남서쪽에 위치한 안전하고 기후가 온화한 밴쿠버 대표지역으로써 살기 좋은 도시 3위에 선정됨. </p>
                        <p>BC주 주립대학인 UBC가 근접하며 높은 교육수준을 자랑함.</p>
                        <p>학교 대부분이 안전한 주택가에 인접해 있음.</p>
                        <p>Vancouver West, Vancouver East지역으로 나뉨. </p>
                        <p>주요 관광명소 및 편의 상권이 밀집 해 있으며, 현지 커뮤니티와 잘 조화를 이루어 정착 선호도가 높은 지역. </p>
                        <p class="lh28">밴쿠버 이스트</p>
                        <p>현지인보다는 이민자 커뮤니티 위주로 구성 되어 있으며, 학군이 좋고 유명한 편은 아님. 밴쿠버 웨스트 지역에 비해서는 정착 선호도가 떨어지는 지역.</p>
                        <p class="lh28">밴쿠버 웨스트 </p>
                        <p>학군이 좋고, 주립대 및 유명 사립학교들이 위치해 있는 부촌지역. 중국인, 현지인들이 주를 이루며, 케네디언 학생들과 같은 공간에서</p>
                        <p>학업이 가능하고 대중교통 및 편의시설이 즐비하여 있어 정착 지역으로 선호도가 높음. </p>
                        <p>단, 생활비용이 높은 편(장기거주지 월세비용, 물가 등)</p>',
			'bnby'	=> '<p class="lh28">BC주 중심부에 위치한 광역지역으로 동과 서를 잊는 중요한 역할을 함. </p>
                        <p>BC주의 상위권 대학교 SUF와 유명한 공대 BCIT가 있음 </p>
                        <p>초등과정 교육이 특화 되어 있는 지역</p>
                        <p>North Burnaby, South Burnaby지역으로 나뉨. </p>
                        <p>주요 관광명소 및 거대한 상권으로의 접근성이 좋으며, 한적한 거주환경으로 인한 정착 선호도가 높은 지역. </p>
                        <p class="lh28">버나비 놀쓰</p>
                        <p>현재 개발이 왕성한 지역으로써 학군이 좋고 학교 및 거주 환경이 신식/깔끔함</p>
                        <p>정착 시 유리한 대중교통 조건과 환경적 요소들로 미루어 봤을 때에 선호도가 높음</p>
                        <p class="lh28">버나비 싸우스</p>
                        <p>총 6곳의 도서관이 위치해 있으며, New Westminster지역까지 관할하는 광역 버나비 지역.</p>
                        <p>오랜 시간 동안 역사를 자랑하는 학교(예: Burnaby South 고등학교, 버나비에서 가장 규모가 큰 학교)들 및 한인 커뮤니티가 잘 </p>
                        <p>구성 되어 있음. 다만 한인비중이 타 지역에 비해 높은 편.</p>',
			'lnly'	=> '<p class="lh28">BC주 동남쪽에 위치한 광역지역. </p>
                        <p>밴쿠버 다운타운에서 50분가량 떨어져 있는 외각 지역이나, 최근 개발이 진행되고 있는 신흥도시.</p>
                        <p>새 아파트 및 깔끔한 거주환경과 자연이 조화를 이루고 있는 지역.</p>
                        <p>Walnutgrove, Fort Langley, Aldergrove, Langly City, willbrook지역으로 나뉨. </p>
                        <p>큼직한 상권 및 다양한 스포츠 시설(indoor, outdoor)형성 되어 있으며, 특히 Walnutgrove, Aldergrove, willowbrook지역에는 </p>
                        <p>조기유학 자녀를 동반한 한인가정이 많이 거주/이동하는 추세. </p>
                        <p class="lh28">Walnutgrove</p>
                        <p>큰 쇼핑몰과 상권 및 한인 커뮤니티가 있는 지역으로 랭리시 중 가장 번화한 지역. 한국 및 현지인이 많은 비중을 차지함.</p>
                        <p class="lh28">Fort Langley</p>
                        <p>현지인들이 주를 이루는 지역. 상권에서 멀리 떨어져 있으며 작은 마을 느낌. 정착 선호도가 가장 낮은 지역임.</p>
                        <p class="lh28">Aldergrove</p>
                        <p>한국인이 주를 이루는 정착 선호도가 높은 지역. 남쪽으로의 화이트락 및 써리경계와 근접하여 있어 교통이 편리하고 상권이</p>
                        <p>밀집되어 있음. 현지인도 적당 비중을 차지하고 있으나 자녀를 동반한 한인 </p>
                        <p>부모님들께서 거주하시기 편리한 지역으로써 정착선호도가 높음.</p>'
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
			'york'	=> '<p class="lh28">캐나다 최대 교육청</p>
                        <p>-온타리오주 내 교육청 중 세번째로 큰 규모</p>
                        <p>-유학생 비율을 엄격하게 제한</p>
                        <p>-검증된 선생님들의 높은 수준의 교육제공</p>
                        <p>-토론토 북쪽지역의 도시들 관할</p>
                        <p>-가을 학기는 5월 15일, 봄학기는 11월 15일까지 원서 접수 가능</p>',
			'ycdsb'	=> '<p>-초등학교는 부모나 친척의 주소지를 기준으로 배정</p>
                        <p>-영문 세례 증명서는 경우에 따라 제출안해도 됨</p>
                        <p>-영어, 수학 레벨테스트 결과에 따라 수강할 수 있는 과목이 달라짐</p>
                        <p>-85개의 초등학교와 16개의 세컨더리 스쿨을 관할하며 53,000명의 학생이 공부하고 있음</p>
                        <p>- 8학년 이하의 모든 학생들은 부모나 친척과 함께 거주해야 함</p>',
			'csd'	=> '<p class="lh28">초등학교, 중학교, 고등학교 과정으로 나뉨.</p>
                        <p>- 초등학교 교육과정 = K ~ G5</p>
                        <p>- 중학교 교육과정 = G6 ~ G8</p>
                        <p>- 고등학교 교육과정 = G9~G12</p>
                        <p>BC주 내 교육청 중 국제학생을 위한 영어과정인 ELL이 제일 세분화 되어 있음.(가장 많은 ELL선생님이 재직중이며, 3단계 ELL레벨 수업 및 사회과목 ELL따로 가능)</p>
                        <p>학업 성취도가 뛰어난 학생들에게는 AP프로그램을 통하여 대학교 과정을 미리 선행할 수 있는 기회를 제공</p>
                        <p>대부분의 학교들이 유학생 지원에 큰 제한이 없으나 최근 들어 Dr, Charles Best 나 Pinetree Secondary 같은 학교들은 마감이 빨리</p>
                        <p>이뤄지고 있음</p>
                        <p>각종 스포츠 클럽 액티비티가 특화 되어 있는 것이 장점</p>
                        <p>(예: 대부분의 학교들이 규모/부지가 넓으며 크나 운동장을 갖고 있음)</p>',
			'nvsd'	=> '<p class="lh28">초등학교(elementary) 와 중고등학교(High School)로 나뉨.</p>
                        <p>- 초등학교 교육과정 = K ~ G7 </p>
                        <p>- 중,고등학교 교육과정 = G8~G12</p>
                        <p>매 년 조기 원서접수 마감되는 지역 중 한곳으로, 국제학생 입학 인원수 제한이 있으므로 미리 원서를 접수하는 것을 권장함.</p>
                        <p>최신식 미디어 및 야외활동을 통한 수업을 통해 학생들이 직접 체험하고 견문을 넓히는 데에 이바지 함 (온라인 도서관/프로젝트 등)</p>
                        <p>Fine Arts, PE(체육), Dance, Drama, Music, Art, 야외활동 등을 격려하여 학생들로 하여금 독창적, 창의적인 능력을 향상 시킬 수 있는 기회 제공.</p>
                        <p>일부 고등학교에서 AP 및 IB프로그램을 제공하여 학생들이 대학교 과정을 미리 선행학습 및 심화과정의 수업참여 할 수 있는 기회제공</p>
                        <p>타 교육청에 비해 교사진의 수업 퀄리티 및 교육 수준이 높은 편.</p>
                        <p>특히, 밴쿠버 내 및 동부지역으로의 대학 진학률이 높은 편이고, 미국대학 진학을 위한 학업환경도 잘 조성되어있음</p>',
			'vps'	=> '<p class="lh28">초등학교(elementary) 와 중고등학교(High School)로 구분</p>
                        <p>- 초등학교 교육과정 = K ~ G7 </p>
                        <p>- 중,고등학교 교육과정 = G8~G12</p>
                        <p>브리티시 콜럼비아주 내 교육청 중 제일 큰 규모.</p>
                        <p>학업 성취도가 뛰어난 학생들에게는 AP프로그램을 통하여 학생들이 대학교 과정을 미리 선행할 수 있는 기회를 제공.</p>
                        <p>(UBC Transfer Program과 연계 되어 있으며 UBC내 시설 자유로이 이용가능)</p>
                        <p>미적분, 역사, 과학, 문학, 컴퓨터 부분에 있어서 심화학습 기회를 제공.</p>
                        <p>학문, 예술, 기술, 언어, 체육 등 다방면 인재양성에 서포트가 강함.</p>
                        <p>타 교육청에 비해 입학원서 접수 시 영어 점수를 까다롭게 책정하는 편.</p>',
			'bnby'	=> '<p class="lh28">초등학교(elementary) 와 중고등학교(High School)로 나뉨</p>
                        <p>- 초등학교 교육과정 = K ~ G7 </p>
                        <p>- 중,고등학교 교육과정 = G8 ~ G12</p>
                        <p>브리티시 콜럼비아주 내 교육청 중 제일 큰 불어, AP, 및 스포츠 프로그램 제공.</p>
                        <p>초등학교의 경우 매 년 조기 원서접수 마감되는 지역 중 한곳으로, 미리 문의 후 진행 하는 것을 권장.</p>
                        <p>밴쿠버 내 교육청 중 제일 많은 도서관이 있는 교육청.</p>
                        <p>한국인 전문 카운셀러가 각 고등학교를 정기적으로 순회방문하며 유학생 관리.</p>
                        <p>학문, 예술, 기술, 언어, 체육 등 다방면 인재양성에 서포트가 강함.</p>
                        <p>타 교육청에 비해 ELL서포트가 풍부하기 때문에 영어에 어려움이 있어도 입학가능.</p>',
			'lnly'	=> '<p class="lh28">초등학교(elementary), 중학교(Middle School), 및 고등학교(High School)로 나뉨.</p>
                        <p>- 초등학교 교육과정 = K ~ G5 또는 G7까지(학교에따라 상이)</p>
                        <p>- 중학교 교육과정 = G6 ~ G8 </p>
                        <p>- 고등학교 교육과정 = G9 ~ G12</p>
                        <p>브리티시 콜럼비아주 내 교육청 중 제일 처음 설립된 교육청.(BC주 탄생지라고함)</p>
                        <p>ELL과정의 대폭적인 서포트가 강점</p>
                        <p>(각 학교별로 ELL프로그램이 체계화 되어 있으며, 정규 과목중 하나의 과목으로 인정 됨)</p>
                        <p>초등학교의 경우 한인 학생 비율이 낮은 편.</p>
                        <p>시각예술, 무용, 음악, 연극 등 창의적인 부분의 선택과목 영역 및 체육 등 예술적인 다방면 인재양성에 서포트가 돋보임.</p>
                        <p>매 여름 7월~8월동안 여름학기를 제공함. (부족한 과목 및 점수향상 보완에 도움이 됨)</p>'
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
			'york'	=> '<p class="lh30">1. 입학 가능 시기</p>
                         <p>-초등학교: 9월(1학기), 1월 (2학기)</p>
                         <p>-중고등학교: 9월 (1학기), 2월 (2학기)</p>
                         <p class="lh30">2. 원서접수시 구비서류</p>
                         <p>최근 2년간의 성적증명서 혹은 생활기록부</p>
                         <p>현재 재학중인 학교 선생님 1부 (영문)</p>
                         <p>여권사본</p>
                         <p>영문 재학증명서</p>
                         <p>영문 예방접종증명서</p>
                         <p>가디언서류</p>
                         <p class="lh30">3. 학비</p>
                         <p>원서 접수비용: $350</p>
                         <p>학비: $16,000</p>
                         <p>의료보험: 학비에 포함되어 있음</p>
                         <p class="lh30">--------------------</p>
                         <p>총: $16,350</p>',
			'ycdsb'	=> '<p class="lh30">1. 입학 가능 시기</p>
                        <p>-초등학교: 9월(1학기), 1월 (2학기)</p>
                        <p>-중고등학교: 9월 (1학기), 2월 (2학기)</p>
                        <p class="lh30">2. 원서접수시 구비서류</p>
                        <p>최근 2년간의 성적증명서 혹은 생활기록부</p>
                        <p>현재 재학중인 학교 선생님 1부 (영문)</p>
                        <p>여권사본</p>
                        <p>영문 재학증명서</p>
                        <p>영문 예방접종증명서</p>
                        <p>가디언서류</p>
                        <p class="lh30">3. 학비</p>
                        <p>원서 접수비용: $200</p>
                        <p>학비: $12,000</p>
                        <p>의료보험: 학비에 포함되어 있음</p>
                        <p class="lh30">--------------------</p>
                        <p>총: $12,200</p>',
			'csd'	=>  '<p class="lh30">1. 입학 가능 시기</p>
                         <p>- Elementary School: 9월(1학기), 1월(2학기) </p>
                         <p>- Middle School: 9월(1학기), 1월(2학기)</p>
                         <p>- Secondary School: 9월(1학기), 2월(2학기)</p>
                         <p class="lh30">2. 원서접수시 구비서류</p>
                         <p>생활기록부 (최근2~3년)</p>
                         <p>여권사본</p>
                         <p>가디언서류</p>
                         <p>영문 예방접종 증명서</p>
                         <p>영문 재학 증명서 </p>
                         <p class="lh30">3. 학비</p>
                         <p class="lh30">1) 1년 등록 시 비용 (Elementary, Middle, Secondary)</p>
                         <p>원서 접수비용: $300</p>
                         <p>학비:   $16,500</p>
                         <p>의료보험: 학비에 포함되어 있음</p>
                         <p class="lh30">--------------------</p>
                         <p>총:  $16,800</p>
                         <p class="lh30">2) 1학기 등록 시 비용</p>
                         <p>원서 접수비용: $300</p>
                         <p>학비:  $9,900 (Secondary school은 $8,250)</p>
                         <p>의료보험: 학비에 포함되어 있음</p>
                         <p class="lh30">--------------------</p>
                         <p>총:  $10,200 (Secondary school은 $8,550)</p>',
			'nvsd'	=> '<p class="lh30">1. 입학 가능 시기</p>
                        <p>-초등학교: 9월(1학기), 1월 (2학기)</p>
                        <p>-중고등학교: 9월 (1학기), 2월 (2학기)</p>
                        <p class="lh30">2. 원서접수시 구비서류</p>
                        <p>생활기록부 (최근2~3년)</p>
                        <p>학생 자필 Essay (왜 해당교육청에서 공부하기를 원하는지)</p>
                        <p>현재 재학중인 학교 선생님 영문 추천서 2부</p>
                        <p>여권사본</p>
                        <p>영문 재학증명서</p>
                        <p>영문 예방접종증명서</p>
                        <p>가디언서류</p>
                        <p class="lh30">3. 학비</p>
                        <p>원서 접수비용: $200</p>
                        <p>학비:   $15,000</p>
                        <p>의료보험: $1,000</p>
                        <p class="lh30">--------------------</p>
                        <p>총:  $16,200</p>'
			'vps'	=> '<p class="lh30">1. 입학 가능 시기</p>
                        <p>-초등학교: 9월(1학기) , 1월(2학기) </p>
                        <p>*단, 교육청 당시 TO에 따라 가능성 여부가 달라짐*</p>
                        <p>-중고등학교: 9월 (1학기)</p>
                        <p class="lh30">2. 원서접수시 구비서류</p>
                        <p>생활기록부 (최근2~3년)</p>
                        <p>현재 재학중인 학교 선생님 영문 추천서 2부</p>
                        <p>여권사본</p>
                        <p>가디언서류</p>
                        <p class="lh30">3. 학비</p>
                        <p>원서 접수비용: $250</p>
                        <p>학비:   $15,500</p>
                        <p>의료보험: $1,100</p>
                        <p class="lh30">--------------------</p>
                        <p>총:  $16,850</p>',
			'bnby'	=> '<p class="lh30">1. 입학 가능 시기</p>
                        <p>-중고등학교: 9월 (1학기)</p>
                        <p>-초등학교: 9월(1학기) , 1월(2학기) </p>
                        <p>*단, 지원 시점의 교육청 자리 가능여부에 따라 변수 적용함*</p>
                        <p class="lh30">2. 학비</p>
                        <p class="lh30">초등학교            고등학교</p>
                        <p>원서 접수비용: $250  원서접수비용: $250</p>
                        <p>학비:  $15,250     학비:  $15,250</p>
                        <p>의료보험: $1,100    의료보험:   $1,100</p>
                        <p class="lh30">--------------------------------------------</p>
                        <p>- 총: $16,600 -총 $16,600</p>
                        <p class="lh30">3. 원서접수 구비서류</p>
                        <p>생활기록부 (최근2~3년)</p>
                        <p>여권사본</p>
                        <p>가디언서류</p>',
			'lnly'	=> '<p class="lh30">1. 입학 가능 시기</p>
                        <p>-중고등학교: 9월 (1학기)</p>
                        <p>-초등학교: 9월(1학기)</p>
                        <p class="lh30">2. 원서접수시 구비서류</p>
                        <p>생활기록부 (최근2~3년)</p>
                        <p>여권사본</p>
                        <p>가디언서류 </p>
                        <p class="lh30">3. 학비</p>
                        <p>원서 접수비용: $200</p>
                        <p>학비:   $15,500</p>
                        <p>의료보험: 포함되어있음</p>
                        <p class="lh30">--------------------</p>
                        <p>총:  $15,700</p>'
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
                        <p>  Neil McNeil Secondary School</p>',
			'york'	=> '<p class="lh28">Elementary </p>
                        <p>- Mckee Public School</p>
                        <p>- Avondale Public School </p>
                        <p class="lh28">Secondary </p>
                        <p>- Thornhill Secondary School</p>
                        <p>- Vaughan Secondary School</p>
                        <p>- Langstaff Secondary School</p>',
			'ycdsb'	=> '<p class="lh28">Secondary </p>
                        <p>- Jean Vanier Catholic High School</p>
                        <p>- Sacred Heart Catholic High School</p>
                        <p>- St. Robert Catholic High School</p>',
			'csd'	=>  '<p class="lh28">Elementary </p>
                         <p>- Pinetreeway Elementary </p>
                         <p>- Riverview Park Elementary </p>
                         <p>- Harbour View Elementary </p>
                         <p class="lh28">Secondary </p>
                         <p>- Dr. Charles Best</p>
                         <p>- Pinetree</p>
                         <p>- Gleneagle</p>',
			'vps'	=> '<p class="lh28">Elementary </p>
                        <p>- Dr. Annie B Jamieson Elementary </p>
                        <p>- Kerrisdale Elementary </p>
                        <p>- Sir John Franklin Elementary </p>
                        <p class="lh28">Secondary </p>
                        <p>- Lord Byng </p>
                        <p>- University Hill </p>
                        <p>- Prince of Wales</p>',
			'bnby'	=> '<p class="lh28">Elementary </p>
                        <p>- Buckingham Elementary </p>
                        <p>- Chaffey-Burke Elementary </p>
                        <p>- Taylor Park Elementary </p>
                        <p class="lh28">Secondary </p>
                        <p>- Burnaby North</p>
                        <p>- Burnaby Mountain</p>
                        <p>- Alpha Ecole Secondary</p>',
			'lnly'	=> '<p class="lh28">Elementary <p>
                        <p>- Morgan Elementary <p>
                        <p>- Langley Meadows<p>
                        <p>- Topham Elementary <p>
                        <p class="lh28">Secondary <p>
                        <p>- Langley Fine Arts<p>
                        <p>- Walnut Grove<p>
                        <p>- Langley Fundamental<p>
                        <p>* Langley Fine Art(LFA) 학교 진학을 원하는 케이스가 있다면, <p>
                        <p>교육청 및 해당 학교에 꼭 미리 입학가능 여무 및 포트폴리오 준비과정 문의 후 지원해야 할것.<p>'
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

