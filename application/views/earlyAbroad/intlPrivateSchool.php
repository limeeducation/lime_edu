<?php
include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/head.php');
//include_once($_SERVER['DOCUMENT_ROOT']."/inc/blog_list.php");
?>
<link rel="stylesheet" type="text/css" href="/static/css/product_detail.css">
<script src="/static/js/map.js"></script>
<script src="/static/js/product_detail.js"></script>
<body>
    <script type="text/javascript">

    </script>
	<div id="wrap">
	<?php
    include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/header.php');
    ?>
		<div id="container" style="padding:0;">

			<div id="content" class="academy_content">
				<!-- 조기유학상세작업 -->
				<div id="detail_wrap">
					<!-- 캐나다 조기유학 프로그램 -->
					<div class="pro_selet">
						<h2 class="pro_title">캐나다 조기유학 프로그램</h2>

						<div class="pro_btn_wrap">
							<div class="pro_group"><!-- 활성화시 class="on"추가 -->
								<a href="/earlyAbroad/caSchoolList">
									<figure class="pro_img">
										<img src="/static/img/early_abroad/ca/icon_pro_01.png" alt="조기유학 학교찾기">
									</figure>
									<span class="menu_txt">조기유학 학교찾기</span>
								</a>
							</div>
							<div class="pro_group">
								<a href="/earlyAbroad/whyEarlyCa">
									<figure class="pro_img">
										<img src="/static/img/early_abroad/ca/icon_pro_02.png" alt="">
									</figure>
									<span class="menu_txt">왜 조기유학인가?</span>
								</a>
							</div>
							<div class="pro_group">
								<a href="/earlyAbroad/abtCaManageAbroad">
									<figure class="pro_img">
										<img src="/static/img/early_abroad/ca/icon_pro_03.png" alt="">
									</figure>
									<span class="menu_txt">관리형 유학</span>
								</a>
							</div>
							<div class="pro_group on">
								<a href="/earlyAbroad/caInternationalPrivate">
									<figure class="pro_img">
										<img src="/static/img/early_abroad/ca/icon_pro_04.png" alt="">
									</figure>
									<span class="menu_txt">국제사립학교</span>
								</a>
							</div>
						</div>
					</div>
					<!--// 캐나다 조기유학 프로그램 -->

					<!-- 국제사립고등학교란 -->
					<div class="bg_green">
						<div class="sec_about_academy cotn">
							<div class="img_area">
								<div class="tit_area">
									<h2 class="tit">국제사립고등학교</h2>
								</div>
								<figure class="academy_img">
									<img src="/static/img/early_abroad/ca/bg_academy.png" alt="국제사립고등학교란">
								</figure>
							</div>

							<div class="content_tit">
								<h3>국제 사립 고등학교란?</h3>
							</div>
							<div class="cotn_box type2">
								<p>
									온타리오 주 교육부의 정식 허가를 받은 고등학교로 주로 국제학생들이 진학하고 있습니다.
								</p>
								<p>
									공립학교와 달리 일년에 2학기 가을과 봄학기를 포함하여 여름학기도 학업을 진행할 수 있으며 학교에 따라 유연하게 최소 4학기에서 최대 6학기를 제공하는 사립학교입니다.
								</p>
								<p>
									온타리오주 고등학교 졸업장 OSSD (Ontario Secondary School Diploma)를 취득하기 위한 9-12학년의 다양한 정규 과목뿐 아니라 예술계열 대학입시를 위한 전문 포트폴리오 준비 과목이 개설되어 있으며 국제학생이라면 대학입시에 필요한 IETLS 시험 준비과정도 개설되어 있습니다.
								</p>
							</div>

							<div class="content_tit">
								<h3>국제 사립 학교의 장점</h3>
							</div>
							<ol class="adt_list">
								<li>
									<span class="num">01</span>
									<div class="txt_box">
										<p>
											다양한 학기 운영으로 보다 빠른 <br />
											학점 이수 가능
										</p>
									</div>
								</li>
								<li>
									<span class="num">02</span>
									<div class="txt_box">
										<p>
											희망 전공에 따라
											다양한 추가학점 <br/>
											취득 용이
										</p>
									</div>
								</li>
								<li>
									<span class="num">03</span>
									<div class="txt_box">
										<p>
											클럽활동 및 경시대회 참여 지원
										</p>
									</div>
								</li>
								<li>
									<span class="num">04</span>
									<div class="txt_box">
										<p>
											캐나다 대학입시의
											특화된 방과후
											학습지원
										</p>
									</div>
								</li>
								<li>
									<span class="num">05</span>
									<div class="txt_box">
										<p>
											학기 시작 일정이
											공립교육청에 비해
											유동적임
										</p>
									</div>
								</li>
							</ol>
						</div>
					</div>
					<!--// 국제사립고등학교란 -->
					<!-- 학점전환 -->
					<div class="cotn">
						<div class="grade_ch">
							<p class="pro_tit">학점 전환</p>
							<ul class="group_rud_list">
								<li>
									<p class="grade_area">중3 수료</p>
									<div class="txt_wrap">
										<p class="box">Grade 9 까지 인정</p>
										<p class="box">최대 8학점 + 10시간 봉사활동 인정</p>
									</div>
								</li>
								<li>
									<p class="grade_area">고1 수료</p>
									<div class="txt_wrap">
										<p class="box">Grade 10 까지 인정</p>
										<p class="box">최대 16학점 + 20시간 봉사활동 인정</p>
									</div>
								</li>
								<li>
									<p class="grade_area">고2 수료</p>
									<div class="txt_wrap">
										<p class="box">Grade 11 까지 인정</p>
										<p class="box">최대 22학점 + 30시간 봉사활동 인정</p>
									</div>
								</li>
								<li>
									<p class="grade_area">고3 수료</p>
									<div class="txt_wrap">
										<p class="box">Grade 12 까지 인정</p>
										<p class="box">최대 26학점 + 40시간 봉사활동 인정</p>
									</div>
								</li>
								<li>
									<p class="grade_area">고교 검정고시</p>
									<div class="txt_wrap">
										<p class="box">22학점까지 인정</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<!--// 학점전환 -->

					<!-- 취득요건 -->
					<div class="require bg_last">
						<div class="cotn">
							<p class="pro_tit">온타리오주 고교 졸업장(OSSD) 취득을 위한 요건</p>
							<ol class="adt_list">
								<li>
									<span class="num">01</span>
									<div class="txt_box">
										<p>
											<strong>30학점이수 (필수 18학점 + 선택 12학점)</strong>
											기존 고등학교의 성적표 제출시 추가로
											필요한 학점을 이수할 수 있습니다
										</p>
									</div>
								</li>
								<li>
									<span class="num">02</span>
									<div class="txt_box">
										<p>
											<strong>영어평가시험</strong>
											온타리오주 문해력시험 (OSSLT)<br>
											온타리오주의 고등학교에서 일괄적으로
											시행되는 시험에 통과해야 합니다
										</p>
									</div>
								</li>
								<li>
									<span class="num">03</span>
									<div class="txt_box">
										<p>
											<strong>봉사활동</strong>
											40시간의 지역 커뮤니티, 학교행사나
											관련기관에서 봉사활동 후<br>
											증빙자료를 제출하면 인정됩니다
										</p>
									</div>
								</li>
							</ol>
						</div>
					</div>
					<!--// 취득요건 -->

					<!-- 탭영역 -->
					<section class="tab_sec academy_tab_sec">
						<!-- 추천탭 -->
						<div class="section_tab">
							<h2 class="tab_title">추천 국제사립학교</h2>
							<div class="tab_wrap">
								<a href="#none" class="rec_tab on">UMC</a><!-- 활성화시 class="on"추가 -->
								<a href="#none" class="rec_tab bg_on">BICC</a><!-- 마지막 컨텐츠 배경색있음 class="bg_on" -->
								<a href="#none" class="rec_tab bg_on">TAIE</a><!-- 마지막 컨텐츠 배경색있음 class="bg_on" -->
							</div>
						</div>
						<!--// 추천탭 -->

						<!-- 탭컨텐츠 -->
						<div class="tab_list_wrap">
							<!-- UMC -->
							<div class="tab_01" style="display:block;">
								<div class="cotn">
									<div class="brd_tit">
										<h2 class="tit">UMC</h2>
									</div>
									<div class="tab_tit_area">
										<div class="cotn_box">
											<p>토론토에 위치하여 6학년부터 12학년까지 UMC Middle School과 UMC High School로 운영되고 있는 온타리오 주 정식 인가된 사립학교입니다. 미들스쿨의 경우 부모님 없이 혼자 유학을 올 때, 아이의 생활, 식사, 통학에 대해서 걱정이 크실 것입니다. UMC의 경우 기숙사를 사용할 수 있고, 통학버스로 등하교를 할 수 있고 기숙사에서 한식을 먹을 수 있기 때문에 이런 부분에 대한 걱정 없이 유학을 보내실 수 있습니다. 하이스쿨의 경우에는 토론토 중심지에서는 다소 떨어져 있는 곳에 위치하여 있지만, 자체 캠퍼스로 운영되고 있어서 넓은 운동장과 체육관 같은 시설을 공립학교처럼 이용이 가능하다는 장점을 갖고 있습니다. 또한, 한국인 담당자의 세심한 생활 관리와 부모님과의 소통이 장점이라고 할 수 있습니다.</p>
										</div>
										<div class="table_wrap">
											<table class="academy_table">
												<colgroup>
													<col>
													<col>
												</colgroup>
												<tbody>
													<tr>
														<th>학교 구분</th>
														<td>국제 사립 학교</td>
													</tr>
													<tr>
														<th>학기 시작</th>
														<td>3학기로 운영 (9월/1월/3월)</td>
													</tr>
													<tr>
														<th>학교 위치</th>
														<td>중학교 과정 : North York 지역 <br/>고등학교 과정 : Scarborough 지역</td>
													</tr>
													<tr>
														<th>숙소 형태</th>
														<td>홈스테이, 기숙사 (1인실/2인실/3~4인실)</td>
													</tr>
													<tr>
														<th>제공 프로그램</th>
														<td>
															6~12학년 온타리오 중/고등학교 정규 과정 <br/>
															국제학생을 위한 ESL 제공 (A~E의 5개 레벨로 구성) <br/>
															IELTS 준비반 <br/>
															미술 포트폴리오 준비반
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>

								<!-- 학교특징 -->
								<div class="bg_green">
									<div class="cotn">
										<div class="content_tit">
											<h3>학교 특징</h3>
										</div>
										<ul class="round_list">
											<li>
												6학년 ~ 12학년 미들스쿨/ 하이스쿨 전과정 운영
											</li>
											<li>
												한국담당 카운셀러의 폭넓은 케어 제공 : 시간표 선정 / 대학진학 상담 /학업상담 / 생활지도
											</li>
											<li>
												1년에 3학기제 + 여름학기 운영 (옵션) <br />
												[ 가을학기 (9월-12월), 겨울학기(1-2월), 봄학기 (3-6월) ] <br />
												1년에 최대 12과목까지 수강 가능 <br />
											</li>
											<li>
												다양한 방과 후 클럽활동 제공
											</li>
											<li>
												기숙사 운영: 기숙사 관리 담당자 함께 거주 하여 학생들 관리
											</li>
											<li>
												기숙사에서 생활하게 되면, 스쿨 버스를 타고 통학 가능
											</li>
											<li>
												기숙사의 경우, 학생들의 선호도가 높은 편이라 일찍 신청하지 않으면 배정이 어려움
											</li>
											<li>
												IELTS 시험 준비반 및 미술 포트폴리오 준비반 제공
											</li>
											<li>
												Maplewood 온라인 포털 시스템 제공 <br />
												UMC에 재학중인 자녀들의 출결 사항, 학업 현황 등 전반적인 생활을 온라인으로 편리하게 확인 가능
											</li>
											<li>
												캐나다의 U15 대학들을 포함한 명문 대학교로의 높은 진학률
											</li>
										</ul>
									</div>
								</div>
								<!--// 학교특징 -->

								<!-- 캠퍼스 지원절차 -->
								<div class="inner_cotn">
									<div class="content_tit">
										<h3>UMC 캠퍼스</h3>
									</div>
									<div class="cotn_box">
										<p>
											UMC캠퍼스는 주택가에 위치한 토론토 교욱청 소속 단독 캠퍼스입니다. 넓은 운동장, 체육관, 도서관, 과학 실험실, 컴퓨터 랩 학생 라운지 등이 있는, 공립 학교와 같은 시설을 제공합니다. 또한, 온라인 학사 관리 시스템을 운영하고 있어, 한국에 계신 부모님께서도 매일 학생의 출결 사항과 성적 확인이 가능합니다. 한국인 담당자의 세심한 생활 관리와 부모님과의 소통이 장점이라고 할 수 있습니다.
											<br />
											6~8학년까지의 Middle School 과정의 학생들은 North York 캠퍼스에서 학업을 하게 되며, 9~12학년들은 스카보로 캠퍼스에서 학업을 하게 됩니다.
											<br />
											UMC High School 은 기숙사를 제공하고 있으며, 남학생과 여학생의 기숙사는 분리되어 있습니다. 기숙사에서 생활하는 학생들은 등•하교 시간에 맞춰 통학버스가 제공되고 있으며, 기숙사 내에서 일주일에 2~3회 정도 저녁식사 후 공부방을 진행합니다.
										</p>
									</div>
									<div class="process_wrap">
										<p class="pro_tit">UMC 지원 및 입학진행 절차</p>
										<ol class="process_list">
											<li>
												<span class="num">01</span>
												<div class="txt_box">
													<p>원서 및 필요서류 제출</p>
												</div>
											</li>
											<li>
												<span class="num">02</span>
												<div class="txt_box">
													<p>UMC 하이스쿨에서 학생 서류 검토</p>
												</div>
											</li>
											<li>
												<span class="num">03</span>
												<div class="txt_box">
													<p>UMC 에서의 학업 계획서 수령</p>
												</div>
											</li>
											<li>
												<span class="num">04</span>
												<div class="txt_box">
													<p>UMC 온라인 영어 레벨 테스트 응시</p>
												</div>
											</li>
											<li>
												<span class="num">05</span>
												<div class="txt_box">
													<p>반 배정 수학 및 영어 입학 시험 응시</p>
												</div>
											</li>
										</ol>
									</div>
								</div>
								<!--// 캠퍼스 지원절차 -->

							</div>
							<!--// UMC -->

							<!-- BICC -->
							<div class="tab_02">
								<div class="cotn">
									<div class="brd_tit">
										<h2 class="tit">BICC</h2>
									</div>
									<div class="tab_tit_area">
										<div class="cotn_box">
											<p>
												BICC 는 온타리오 주 토론토에 위치하여 9학년부터 12학년까지 약500명의 학생이 공부하고 있는 온타리오 주 정식 인가된 고등학교 입니다. 토론토에 전형적인 캐나다 부촌 중 하나인 Yonge and Eglinton 미드타운에 위치하고 있으며, 쾌적하고 안전한 주변 환경 속에서 공부를 할 수
												있는 기관입니다. IELTS 공인 테스트 센터이기도 한 BICC에서는 국내에서 내신이 좋지 못하여 국내의 원하는 전공과 대학교에 진학이 어려운
												고등학생들에게 필수 과목 학점 취득 후에 온타리오주의 고교졸업장과 내신 성적으로 캐나다 명문대 및 영국 명문대 진학을 계획할 수 있습니다.<br><br>
												BICC의 전교생들은 대학 입학 및 학업을 준비하기 위한 커리큘럼을 이수하고 있습니다. <br>
												온타리오 교육청(Ministry of Ontario)의 정식 허가를 받은 BICC만의 커리큘럼과 <br>
												졸업장(OSSD)은 북미에 위치한 모든 University & College 들에게 널리 인정받고 있습니다.
											</p>
										</div>
										<div class="table_wrap">
											<table class="academy_table">
												<colgroup>
													<col>
													<col>
												</colgroup>
												<tbody>
													<tr>
														<th>학교 구분</th>
														<td>국제 사립 학교</td>
													</tr>
													<tr>
														<th>학기 시작</th>
														<td>3학기로 운영 (12월/3월/7~8월(여름학기)/9월)</td>
													</tr>
													<tr>
														<th>학교 위치</th>
														<td>Eglinton역 근처에 위치하고 있으며, 엠버시 에듀 토론토 지사까지 도보 5분 이내의 거리</td>
													</tr>
													<tr>
														<th>숙소 형태</th>
														<td>홈스테이</td>
													</tr>
													<tr>
														<th>제공 프로그램</th>
														<td>
															9~12학년 Secondary School 주요 과목<br>
															국제학생을 위한 ESL 제공 (A~E의 5개 레벨로 구성)<br>
															입시에 필요한 IELTS 준비반 운영
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>

								<!-- 학교특징 -->
								<div class="bg_green bg_last">
									<div class="cotn">
										<div class="content_tit">
											<h3>학교 특징</h3>
										</div>
										<ul class="round_list">
											<li>
												캐나다 공립학교들과 비교하여 크게 차이가 나지 않는 합리적인 학비 (2만불대)
											</li>
											<li>
												학교 내에 한국인 입시 컨설턴트가 상주하여, 학생들의 학과 상담, 코스 선택 등의 상시 상담이 가능함
											</li>
											<li>간편하고 까다롭지 않은 입학 절차 제공 (최근 2년간의 성적표와 여권 만으로 입학 가능)</li>
											<li>
												최근 3년 동안 영국 명문대학교<br>
												(킹스컬리지 런던, 임페리얼대학교, 맨체스터대학교, UCL 등)로의 <br>
												진학률이 꾸준히 높아지고 있음
											</li>
										</ul>
									</div>
								</div>
								<!--// 학교특징 -->
							</div>
							<!--// BICC -->

							<!-- TAIE -->
							<div class="tab_03">
								<div class="cotn">
									<div class="brd_tit">
										<h2 class="tit">TAIE <span>International Institute</span></h2>
									</div>
									<div class="tab_tit_area">
										<div class="cotn_box">
											<p>
												TAIE 국제학교는 1998년 설립된 캐나다 사립 국제학교로 20년이 넘는 역사를 가지고 있습니다.<br>
												캠퍼스는 토론토 지하철 College 역에 위치하고 있습니다. 도보 거리에 토론토 대학교, 이튼 센터를 비롯한 유명 랜드마크나 쇼핑센터들이
												즐비하며, 학생들이 토론토대학교 도서관에 가서 자습을 하기도 하고, 대학 지원 시기에는 토론토대학교 엔지니어링 학부로 다같이 견학을
												다녀오기도 합니다. 학생들이 미래에 진학을 희망하는 대학교를 보고 꿈을 키울 수 있는 장점이 있으며,학교 주변에 편의시설이 잘 발달되어 있어서
												한식 식사나 학생들이 생활하는데 불편함이 전혀 없습니다. 실제로 학생들이 TAIE를선택하는 이유 중 큰 부분을 차지 하는 부분이
												학교의 위치 입니다. 또한, 오랜 기간 검증된 커리큘럼으로 철저한 내신 관리 및 진로 컨설팅을 통해 캐나다 명문대학교로 학생들을 많이
												입학시키고 있습니다.  한국학생 담당 카운셀러 분이 따로 계셔서 학생들의 진로상담을 도와주시고 있습니다.
											</p>
										</div>
										<div class="table_wrap">
											<table class="academy_table">
												<colgroup>
													<col>
													<col>
												</colgroup>
												<tbody>
													<tr>
														<th>학교 구분</th>
														<td>국제 사립 학교</td>
													</tr>
													<tr>
														<th>학기 시작</th>
														<td>정규과정 6학기로 운영, ESL 과목 매월 운영</td>
													</tr>
													<tr>
														<th>학교 위치</th>
														<td>Toronto 시내에 위치</td>
													</tr>
													<tr>
														<th>숙소 형태</th>
														<td>홈스테이, 기숙사 (1인실/2인/ 3~4인실)</td>
													</tr>
													<tr>
														<th>제공 프로그램</th>
														<td>
															9~12학년 온타리오 고등학교 정규<br>
															과정국제학생을 위한 ESL 제공 (A~E의 5개 레벨로 구성)<br>
															IELTS 준비반<br>
															명문대 보장반
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>

								<!-- 학교특징 -->
								<div class="bg_green">
									<div class="cotn">
										<div class="content_tit">
											<h3>학교 특징</h3>
										</div>
										<ul class="round_list">
											<li>도보 거리 이동이 가능하며, 식사옵션이 제공되는 기숙사 보유</li>
											<li>토론토 시내에 위치</li>
											<li>한 달에 1개의 레벨 이수가 가능한 ESL 과정 보유</li>
											<li>토론토대 출신의 한국인 입시 코디네이터</li>
											<li>라이어슨 대학교의 체육관 시설 사용</li>
											<li>국제 사립학교 중에 가장 많은 학기 운영</li>
										</ul>
									</div>
								</div>
								<!--// 학교특징 -->
							</div>
							<!--// TAIE -->
						</div>
						<!--// 탭컨텐츠 -->

					</section>
					<!--// 탭영역 -->

				</div>
				<!--// 조기유학상세작업 -->
			<?php
				include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/quick_nav.php');
			?>
			</div>
			<!-- // content -->
		</div>
		<!-- // container -->
		<?php
		include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/footer.php');
		?>
		<div class="dim"></div>
		<?php
		include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/consult_popup.php');
		?>
	</div>
	<!-- // wrap-->
</body>
</html>


