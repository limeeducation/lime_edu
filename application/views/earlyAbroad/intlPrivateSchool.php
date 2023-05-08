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
							<p class="pro_tit">국내 고등학교에서 온타리오주 학점 전환</p>
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
					<div class="bg_green require">
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
								<a href="#none" class="rec_tab bg_on">SGA</a><!-- 마지막 컨텐츠 배경색있음 class="bg_on" -->
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
											<p>
												토론토 시내가 아닌 안전한 주택가에 위치한 UMC는 6학년부터 12학년까지 UMC Middle School과 UMC High School로 운영되고 있습니다.
												기존 공립학교가 사용하던 학교시설을 그대로 사용함으로써 공립학교의 넓은 운동장과 체육관 교실, 과학실 등의 학업분위기를 느낄 수 있습니다.<br><br>
												학교자체에서 운영하는 기숙사 이용이 가능하고 기숙사에서 학교까지 통학버스가 제공되어 학생들은 편리하게 학교까지 이동할 수 있습니다.
												또한 기숙사에서는 제공되는 한식을 통해 우리 학생들은 균형 있는 식단으로 성장기 아이들의 건강을 책임지고 있습니다.
												한국인 가디언스 선생님의 세심한 관리와 리포트 그리고 부모님과의 소통이 원활하여 부모님들께서는 생생하게 내 자녀의 현재 학교생활에 대해 피드백을 주기적으로 받을 수 있습니다.
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
														<td>국제 사립학교</td>
													</tr>
													<tr>
														<th>학기 시작</th>
														<td>3학기(9월/1월/3월) + 추가학기 (7월/8월)</td>
													</tr>
													<tr>
														<th>학교 위치</th>
														<td>Scarborough/ 라임에듀케이션에서 40분거리</td>
													</tr>
													<tr>
														<th>숙소 형태</th>
														<td>홈스테이 1인실/기숙사(1인, 2인, 3인)</td>
													</tr>
													<tr>
														<th>제공 프로그램</th>
														<td>
															6-12학년 중/고등학교 정규과정<br/>
															ESL 제공 (A-E 5개 레벨 제공)<br/>
															IELTS 준비반 <br/>
															미술 포트폴리오 준비반<br/>
															관리형 프로그램 (방과후 과외 및 밀착 생활관리)<br/>
															온라인 수업<br/>
															Tutoring 제공
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
												타 국제학교들과 달리 주택가에 위치하여 학업에 몰두 할 수 있는 안전한 분위기
											</li>
											<li>
												유니폼을 착용하며 다양한 클럽활동을 제공
											</li>
											<li>
												기숙사 담당 관리자가 함께 상주하며 학생들 관리 (기숙사 자리가 제한적이라 서둘러 등록추천)
											</li>
											<li>
												정규수업 외 IELTS 시험준비반과 미술포트폴리오 준비반 개설
											</li>
											<li>
												Maplewood 온라인 포털시스템을 통해 자녀들의 출결사항, 학업현황 체크
											</li>
											<li>
												여름방학 때는 한국에서 온라인 수업을 통해 학점 취득 가능
											</li>
											<li>
												캐나다 U15 대학들을 포함한 명문대학교 높은 진학률
											</li>
										</ul>
									</div>
								</div>
								<!--// 학교특징 -->
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
												토론토의 전형적인 부촌 중 하나인 Yonge and Eglinton에 위치한 BICC는 9-12학년까지 약 500명 이상의 국제 학생들이 공부하고 있는 규모가 큰 국제사립고등학교 입니다.
												학생수가 많은 만큼 개설 과목이 다양하며 여름학기에도 수업을 듣는 학생들이 대부분입니다.
												재학생들은 쾌적하고 안전한 환경에서 학업에 전념할 수 있으며 또한 IELTS 공인 테스트 기관으로 학생들은 익숙하고 안정감 있게 학교에서 직접 IELTS 시험을 치를 수 있는 장점이 있습니다.<br><br>
												입시에 특화된 BICC는 입시사관학교라는 수식어를 가지고 있을 만큼 타이트한 학업환경과 분위기를 가지고 있으며 토론토 국제사립학교에서 가장 높은 명문대 합격률을 기록하고 있습니다.
												실력이 좋기로 유명한 한국인 입시컨설팅을 전문으로 하는 가디언스 선생님이 캐나다 명문대학뿐만 아니라 미국, 영국, 싱가폴, 중국, 호주, 뉴질랜드 등 다양한 국가의 명문대학으로 합격시킨 다수의 케이스를 보유하고 있습니다.
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
														<td>국제 사립학교</td>
													</tr>
													<tr>
														<th>학기 시작</th>
														<td>5학기(12월/3월/7월/8월/9월) 추가학기 </td>
													</tr>
													<tr>
														<th>학교 위치</th>
														<td>Eglinton / 라임에듀케이션 직영센터에서 도보 5분거리</td>
													</tr>
													<tr>
														<th>숙소 형태</th>
														<td>홈스테이 1인실</td>
													</tr>
													<tr>
														<th>제공 프로그램</th>
														<td>
															9-12학년 고등학교 정규과정<br>
															EAP 제공 (3레벨 제공)<br>
															미술 포트폴리오 준비반<br>
															Tutoring 제공
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
												토론토 부촌지역인 Eglinton에 위치하여 안전하고 편리한 교통
											</li>
											<li>
												실력 있는 한국 입시컨설팅 가디언스가 학생들의 학과 상담, 과목성전 및 대학 원서진행
											</li>
											<li>정규수업 전 영어가 부족한 학생들에게 EAP 진학영어준비과정 제공</li>
											<li>
												최근 4년동안 영국명문대학교 및 약대 진학율 1위학교<br>
												(킹스컬리지, 임페리얼대학교, 더럼대학교, 멘체스터대학교, UCL, 워릭대학교 등)
											</li>
											<li>
												캐나다 명문대학뿐 아니라 미국, 영국, 뉴질랜드, 호주, 싱가폴, 중국 등 명문대 많은 진학사례
											</li>
											<li>
												학교 정규수업만으로 포트폴리오를 준비하여 OCAD 진학률이 가장 많은 학교
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
												토론토 시내 College역에 위치한 TAIE는 1998년도에 설립된 캐나다 국제학교 사립학교로 25년이 넘는 오랜 역사를 가지고 있습니다.<br>
												도보 거리에 캐나다 1위 대학인 토론토대학교가 있어 학생들은 하교 후 토론토 대학교 도사관을 이용해서 자습을 하기도 하고 대학 지원시기에는 토론토대학교 학부로 다같이 견학을 가기도 합니다.
												또한 토론토 시내의 랜드마크인 이튼센터와 가깝고 학교 주변에 편의시설이 잘 갖추어져 있어 한식 식당이나 마트 등 접근성이 용이합니다.
												TAIE를 선택하는 이유 중 하나는 기숙사인데 학교에서 도보 2분거리의 기숙사가 제공되어 학생들은 안전하고 편리하고 학교생활이 가능합니다.
												오랜 역사를 가진 학교이니만큼 수년간 검증된 교사와 커리큘럼으로 철저한 내신관리 및 진로컨설팅을 받을 수 있어 명문대학교로 학생들을 많이 입학시키고 있습니다.
												토론토 대학출신의 한국인 가디언스 선생님이 학생들의 진로와 생활상담에 도움을 주고 있습니다.
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
														<td>국제 사립학교</td>
													</tr>
													<tr>
														<th>학기 시작</th>
														<td>6학기(1월/3월/5월/8월/9월/11월) </td>
													</tr>
													<tr>
														<th>학교 위치</th>
														<td>College / 라임에듀케이션 직영센터에서 20분거리</td>
													</tr>
													<tr>
														<th>숙소 형태</th>
														<td>홈스테이 1인실/기숙사(1인, 2인)</td>
													</tr>
													<tr>
														<th>제공 프로그램</th>
														<td>
															9-12학년 고등학교 정규과정<br>
															ESL 제공 (3레벨 제공)<br>
															IELTS 준비반<br>
															명문대진학 보장반<br>
															Tutoring 제공
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
											<li>도보 2분거리의 깔끔하고 모던한 기숙사가 있어 편리하고 안전함 (식사제공은 선택사항)</li>
											<li>토론토 시내에 위치하여 대학시설과 편의시설, 한국식당 들이 있어 편하게 이용가능</li>
											<li>토론토대학교 출신의 한국인 가디언스 선생님이 학생들 입시 및 생활관리</li>
											<li>한 달에 1개의 레벨이수가 가능한 ESL 과정 제공</li>
											<li>한반의 학생수가 10명 이하로 평균 6-명이 수업에 참여하므로 수업참여도와 집중도를 높임</li>
											<li>명문대진학 보장반을 운영하고 있으며 명문대 진학율이 매우 높음</li>
										</ul>
									</div>
								</div>
								<!--// 학교특징 -->
							</div>
							<!--// TAIE -->
						</div>
						<!--// 탭컨텐츠 -->

						<!-- SGA -->
						<div class="tab_04">
							<div class="cotn">
								<div class="brd_tit">
									<h2 class="tit">SGA <span>St George Academy High School</span></h2>
								</div>
								<div class="tab_tit_area">
									<div class="cotn_box">
										<p>
											토론토에서 부촌으로 꼽히는 Bayview 지하철 역에서 1분거리에 있는 SGA는 조용하고 안전한 지역에 위치하고 있으며 공립 도서관과 식당, 몰 등과 같은 다양한 편의시설이 주변에 자리잡고 있습니다. SGA 학교에서 기숙사와의 이동거리는 20분으로 이동시간이 짧고 교통이 편리합니다.<br><br>
											대규모가 아닌 소규모의 학생수를 유지하여 학업을 제공하고 있는 SGA는 학생 하나하나에 세심한 관리를 하고 있으며 2주마다 학생의 학업적이고 생활적인 리포트 카드가 발송됩니다.
											소규모의 가족적인 학교 분위기로 학생들의 생일까지 챙기고 서로 축하는 분위기로 정서적으로 안정된 분위기에서 학업이 가능합니다.
											5학기 정규 학기제와 Night School을 운영하여 최대 1년에 18학점까지 취득이 가능합니다. 방과 후 교내외 클럽활동과 학과목 튜터링 그리고 경시대회 준비반을 운영하고 있습니다.
											또한 학교에서 1분거리의 YMCA에서 학생들은 자유롭게 운동을 하고 체육수업을 받게 됩니다.
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
													<td>5학기(2월/4월/7월/9월/11월)</td>
												</tr>
												<tr>
													<th>학교 위치</th>
													<td>College / 라임에듀케이션 직영센터에서 20분거리</td>
												</tr>
												<tr>
													<th>숙소 형태</th>
													<td>홈스테이 1인실/기숙사(1인, 2인)</td>
												</tr>
												<tr>
													<th>제공 프로그램</th>
													<td>
														9~12학년 고등학교 정규<br>
														ESL 제공 (3레벨 제공)<br>
														IELTS, TOEFL, SAT 준비반<br>
														Tutoring 제공<br>
														다양한 교내 클럽활동
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
										<li>토론토의 부촌으로 유명한 Bayview 지역에서 1분거리로 매우 안전하고 조용한 학업분위기 </li>
										<li>2주마다 학업리포트가 전달되어 학생들의 학업현황을 꼼꼼히 살필수 있음</li>
										<li>소규모로 학교로 운영하는 것을 모토로 하여 학생들에게 집중도가 높고 가족 같은 분위기</li>
										<li>베이뷰 공립도서관과 YMCA, 베이뷰 빌리지 쇼핑몰 등이 있어 편의시설 접근성이 용이함</li>
										<li>모의 유엔클럽, 퍼블릭스피킹클럽, 아티클 분석, 체육클럽 등 다양한 교내 활동클럽이 제공</li>
										<li>미국대학 진학을 위한 SAT 준비 및 토플준비반, 각종 경시대회 참가하여 엑스트라 커리큘럼 준비</li>
									</ul>
								</div>
							</div>
							<!--// 학교특징 -->
						</div>
						<!--// SGA -->
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


