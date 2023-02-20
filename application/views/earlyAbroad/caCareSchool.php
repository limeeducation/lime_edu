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

			<div id="content">
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
							<div class="pro_group on">
								<a href="/earlyAbroad/abtCaManageAbroad">
									<figure class="pro_img">
										<img src="/static/img/early_abroad/ca/icon_pro_03.png" alt="">
									</figure>
									<span class="menu_txt">관리형 유학</span>
								</a>
							</div>
							<div class="pro_group">
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

					<!-- 관리형 유학이란? -->
					<section class="intro_care">
						<div class="cotn">
							<div class="content_tit">
								<h3>관리형 유학이란?</h3>
							</div>
							<div class="intro_txt">
								<p>
									아이 홀로 떠난 유학에서 <span>낯선 외국 생활에 문제없이 적응할 수 있도록 혹은 명문대학교 진학을 목표로 하는 학생들을 위한<br>
									토탈케어 종합 프로그램</span>입니다. ESL 제공은 물론 성적관리를 위한 방과 후 수업 등의 학업적인 부분 뿐만 아니라 <br>
									건강, 음식,정서 등 다각도로 학생을 케어하고 써포트  합니다. 부모님을 대신하여 학교 카운셀러와 소통하고 주말과 휴일에도 <br>
									학교 밖에서 다채로운 운동, 문화체험 및 액티비티에 참석하게 되어 체력증진과 여러가지 경험을 통하여 성장하고 스스로 성장해가는 <br>
									자립심을 키우게 됩니다. 미국 명문 대학진학 및 전공선정에 있어 성공적인 포트폴리오를 만들수 있습니다. <br>
									또한 부모님과 관리형 관리자들은 원활한 소통으로 자녀들의 일상 생활을 확인할 수 있으며 예측하지 못한 문제가 생길 경우에도 <br>
									적극적으로 해결하는 데 용이합니다. 언제든 어떤 위기 상황이 생기더라도 24시간 응대할 수 있는 관리자들로 인해 <br>
									우리 아이들과 부모님은 안심할 수 있는 유학을 계획 할 수 있습니다.
								</p>
							</div>
							<div class="intro_list">
								<div class="group">
									<i class="i_intro li_01"></i>
									<div class="txt_area">
										<p>내신성적</p>
										<span>(학점관리)</span>
									</div>
								</div>
								<div class="group">
									<i class="i_intro li_02"></i>
									<div class="txt_area">
										<p>부모님 소통원활</p>
										<span>(실시간 소통& 정기적 레포트)</span>
									</div>
								</div>
								<div class="group">
									<i class="i_intro li_03"></i>
									<div class="txt_area">
										<p>균형잡힌 식단</p>
									</div>
								</div>
								<div class="group">
									<i class="i_intro li_04"></i>
									<div class="txt_area">
										<p>방과 후 학습</p>
									</div>
								</div>
								<div class="group">
									<i class="i_intro li_05"></i>
									<div class="txt_area">
										<p>운동 및 주말 액티비티</p>
									</div>
								</div>
								<div class="group">
									<i class="i_intro li_06"></i>
									<div class="txt_area">
										<p>가디언 서비스</p>
										<span>(학교 카운셀러 소통)</span>
									</div>
								</div>
								<div class="group">
									<i class="i_intro li_07"></i>
									<div class="txt_area">
										<p>대학입시 준비 및 컨설팅</p>
									</div>
								</div>
							</div>
						</div>
					</section>
					<!--// 관리형 유학이란? -->

					<!-- 탭영역 -->
					<section class="tab_sec tab_care_wrap">
						<!-- 추천탭 -->
						<div class="section_tab">
							<h2 class="tab_title">추천 관리형 프로그램</h2>
							<div class="tab_wrap">
								<a href="#none" class="rec_tab on">홈스테이형</a><!-- 활성화시 class="on"추가 -->
								<a href="#none" class="rec_tab">기숙사형</a>
								<a href="#none" class="rec_tab">홈스테이&기숙사형</a>
							</div>
						</div>
						<!--// 추천탭 -->

						<!-- 탭컨텐츠 -->
						<div class="tab_list_wrap">
							<div class="tab_01 home" style="display:block;">
								<div class="cotn">
									<div class="brd_tit">
										<h2 class="tit">홈스테이형 프로그램</h2>
									</div>
									<!-- 소개텍스트 -->
									<div class="intr_wrap">
										<div class="tab_tit_area">
											<div class="content_tit">
												<h3>프로그램 소개</h3>
											</div>
											<div class="cotn_box">
												<p>캐나다 밴쿠버가 속해 있는 BC주에서 차로 4시간 거리의 소도시 버논은 Native Canadian이 99% 이상이기 때문에 대부분 캐네디언 친구를 사귈 수 있으며, 콜롬비아, 아프리카, 독일 등 다양한 국적의 학생들이 공부하고 있습니다. 외국인들에게 친절하고 우호적인 커뮤니티가 잘 형성되어 있는 소규모 도시이며, 좋은 홈스테이 환경을 가지고 있으며 학생과 선생님 비율도 18:1로, 대도시에 비해 소규모 클래스로 진행됩니다.
													<br>버논 교육청 소속의 학교에 재학중인 초등학교 6학년부터 고등학생에게 제공하는 세미 관리형 프로그램으로
													<br>학생 개개인의 자율성과 독립성을 키우며 또한 학업 써포트가 충분히 가능하여 자기 주도학습이 가능한 프로그램입니다.
													<br>장기적인 유학생활에 홀로 지치지 않고 성공적인 유학생활을 유지 할 수 있도록 충분한 써포트를 주고 있습니다.</p>
											</div>
										</div>
										<div class="wel_list">
											<div class="group">
												<div class="icon_box">
													<i class="i_wel li_01"></i>
												</div>
												<p>주 2시간 원어민<br>1:1 교습</p>
											</div>
											<div class="group">
												<div class="icon_box">
													<i class="i_wel li_02"></i>
												</div>
												<p>주 1회 아카데믹<br>카운슬링</p>
											</div>
											<div class="group">
												<div class="icon_box">
													<i class="i_wel li_03"></i>
												</div>
												<p>주 1회 Essay<br>첨삭지도</p>
											</div>
											<div class="group">
												<div class="icon_box">
													<i class="i_wel li_04"></i>
												</div>
												<p>월간보고서</p>
											</div>
											<div class="group">
												<div class="icon_box">
													<i class="i_wel li_05"></i>
												</div>
												<p>유학 플랜에 따른<br>체계적 학습</p>
											</div>
											<div class="group">
												<div class="icon_box">
													<i class="i_wel li_06"></i>
												</div>
												<p>공인 영어 시험<br>등록</p>
											</div>
											<div class="group">
												<div class="icon_box">
													<i class="i_wel li_07"></i>
												</div>
												<p>한국 음식 제공</p>
											</div>
										</div>
									</div>
									<!--// 소개텍스트 -->

									<!-- 테이블영역 -->
									<div class="table_area">
										<div class="content_tit">
											<h3>주간샘플 일정표</h3>
										</div>
										<div class="care_table">
											<div class="cap_wrap">
												<p class="caption">&middot; 상기일정은 현지사정에 따라 변동될 수 있습니다.</p>
											</div>
											<div class="table_wrap">
												<table>
													<colgroup>
														<col width="12.5%">
														<col width="12.5%">
														<col width="12.5%">
														<col width="12.5%">
														<col width="12.5%">
														<col width="12.5%">
														<col width="12.5%">
														<col width="12.5%">
													</colgroup>
													<thead>
														<tr>
															<th>Time</th>
															<th>Mon</th>
															<th>Tue</th>
															<th>Wed</th>
															<th>Th</th>
															<th>Fri</th>
															<th>Sat</th>
															<th>Sun</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>07:00 ~ 08:30</td>
															<td colspan="5">
																기상 및 학교 통학<br>
																학교와 집의 거리에 따라 스쿨버스 혹은 걸어서 등교
															</td>
															<td colspan="2" rowspan="6">
																홈스테이 가족과 야외 활동
																<br><br>
																친구들과 여가 생활 다음 주 학업 준비<br>
																(시험 및 Quiz)
																<br><br>
																월 1회 담당 선생님과<br>
																개인 면담 및 식사
																<br><br>
																주 1회 담당 선생님과 Zoom meeting을<br>
																통한 아카데믹 카운슬링
																<br><br>
																학교 스포츠팀 경기 참여<br>
																(스포츠팀에 참여할 경우)
															</td>
														</tr>
														<tr>
															<td>08:30 ~ 15:00</td>
															<td colspan="5">
																학교 정규 과목 참석 격주 - 지도 선생님과 면담을 통하여<br>
																학업 성취도, 대학 진학, 불편 사항 접수 등
															</td>
														</tr>
														<tr>
															<td>15:00 ~ 17:00</td>
															<td colspan="5">
																학생 별 관심 분야에 따른 동아리 및 방과 후 활동<br>
																(축구, 하키, 악기, 리더십)
															</td>
														</tr>
														<tr>
															<td>17:00 ~ 19:00</td>
															<td colspan="5">
																귀가 후 가족들과 저녁 식사 및 개인 정비 시간<br>
																-정비 시간은 주로 부족한 과목 공부, 친구들과 여가 생활 혹 가족등과 영화 감상 등<br>
																캐나다 생활 적응에 도움이 되는 활동
															</td>
														</tr>
														<tr>
															<td>19:00 ~ 21:00</td>
															<td colspan="5">
																원어민 선생님과 1:1 개인 교습<br>
																(학생의 실력 및 수강하는 정규 과목에 의하여 선새임 선별)<br>
																개인 교습이 없는 날은 과제 및 Quiz, test, 공부, 담당 선생님과 카톡으로 이야기하며 질의응답의 시간으로 활용<br>
																*주 2시간으로 이루어지며 시간 및 요일 변동 가능성
															</td>
														</tr>
														<tr>
															<td>21:00 ~ 22:00</td>
															<td colspan="5">
																주 1회 Essay 작성 및 첨삭 교육<br>
																1주일간 특정 주제로 Essay 작성 후 담당 선생님의 첨삭지도를 통해 영작 실력 향상
															</td>
														</tr>
														<tr>
															<td>18:00 ~ 19:00</td>
															<td colspan="7">House rule에 따른 취침시간</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<!--// 테이블영역 -->
								</div>
							</div>
							<div class="tab_02 dom">
								<div class="cotn">
									<div class="brd_tit">
										<h2 class="tit">기숙사형 프로그램</h2>
									</div>
									<!-- 소개텍스트 -->
									<div class="intr_wrap">
										<div class="tab_tit_area">
											<div class="content_tit">
												<h3>프로그램 소개</h3>
											</div>
											<div class="cotn_box">
												<p>
													캐나다 알버타 주 Strathmore 지역은 인구 17,000여명의 소도시이지만 캐나다에서 가장 빠르게 성장하는 지역중 하나 입니다.캘거리와의 접근성이 좋아 대도시의 편리함과 소도시의 친밀함을 동시에 누릴 수 있는 지역으로  도시 인구 95%이상이 영어를 모국어로 하는 백인 지역으로 완벽한 영어몰입 환경이 가능하며, 학생 혼자 가는 조기유학의 경우 무엇보다 중요한 안전이 확보되는 지역입니다.<br>
													교육청 전체에 국제학생 비율이 6%에 불과 할 정도라 영어 몰입환경이 완벽히 조성되어 있고, 공립 교육청으로서는 최초로 국제학생을 위한<br>
													최신시설의 기숙사를 제공하며 관리형 프로그램을 직접 운영하여, 조기유학생들도 보다 안전하고 성공적인 유학생활을 돕고 있습니다.
												</p>
											</div>
										</div>
										<div class="wel_list">
											<div class="group">
												<div class="icon_box">
													<i class="i_wel li_08"></i>
												</div>
												<p>교육청 주관 <br>기숙 관리형 프로그램</p>
											</div>
											<div class="group">
												<div class="icon_box">
													<i class="i_wel li_09"></i>
												</div>
												<p>방과 후 수업 제공</p>
											</div>
											<div class="group">
												<div class="icon_box">
													<i class="i_wel li_010"></i>
												</div>
												<p>철저한 유학생 <br>관리 시스템</p>
											</div>
											<div class="group">
												<div class="icon_box">
													<i class="i_wel li_011"></i>
												</div>
												<p>다양한 문화<br>체험 및 탐방</p>
											</div>
											<div class="group">
												<div class="icon_box">
													<i class="i_wel li_012"></i>
												</div>
												<p>봉사활동 통한<br>책임감 양성</p>
											</div>
										</div>
									</div>
									<!--// 소개텍스트 -->

									<!-- 테이블영역 -->
									<div class="table_area">
										<div class="content_tit">
											<h3>주간샘플 일정표</h3>
										</div>
										<div class="care_table">
											<div class="cap_wrap">
												<p class="caption">&middot; 상기일정은 현지사정에 따라 변동될 수 있습니다.</p>
											</div>
											<div class="table_wrap">
												<table>
													<colgroup>
														<col width="12.5%">
														<col width="12.5%">
														<col width="12.5%">
														<col width="12.5%">
														<col width="12.5%">
														<col width="12.5%">
														<col width="12.5%">
														<col width="12.5%">
													</colgroup>
													<thead>
														<tr>
															<th>Time</th>
															<th>Mon</th>
															<th>Tue</th>
															<th>Wed</th>
															<th>Th</th>
															<th>Fri</th>
															<th>Sat</th>
															<th>Sun</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>06:30 ~ 08:00</td>
															<td colspan="5">기상, 아침식사, 등교(스쿨버스)</td>
															<td colspan="2" rowspan="11">
																11 : 30 브런치<br><br>종교활동 및 매달 2회 액티비티
															</td>
														</tr>
														<tr>
															<td>08:25 ~ 08:40</td>
															<td colspan="5">Flex Time</td>
														</tr>
														<tr>
															<td>08:35 ~ 09:43</td>
															<td>Sicence</td>
															<td>Math</td>
															<td>Social Studies</td>
															<td>English</td>
															<td>-</td>
														</tr>
														<tr>
															<td>09:50 ~ 10:54</td>
															<td>Math</td>
															<td>Sicence</td>
															<td>English</td>
															<td>Social Studies</td>
															<td>-</td>
														</tr>
														<tr>
															<td>11:00 ~ 12:04</td>
															<td>English</td>
															<td>Social Studies</td>
															<td>Math</td>
															<td>Sicence</td>
															<td>-</td>
														</tr>
														<tr>
															<td>12:04 ~ 12:50</td>
															<td colspan="5">점심시간</td>
														</tr>
														<tr>
															<td>12:50 ~ 13:40</td>
															<td>English</td>
															<td>Social Studies</td>
															<td>Math</td>
															<td>Sicence</td>
															<td>-</td>
														</tr>
														<tr>
															<td>13:40 ~ 14:10</td>
															<td colspan="5">Learning Strategies</td>
														</tr>
														<tr>
															<td>14:16 ~ 15:20</td>
															<td>English</td>
															<td>Social Studies</td>
															<td>Sicence</td>
															<td>Math</td>
															<td>-</td>
														</tr>
														<tr>
															<td>15:20 ~ 15:35</td>
															<td colspan="5">Flex Time</td>
														</tr>
														<tr>
															<td>15:30 ~ 17:00</td>
															<td colspan="5">휴식시간</td>
														</tr>
														<tr>
															<td>17:00 ~ 17:30</td>
															<td colspan="7">저녁식사</td>
														</tr>
														<tr>
															<td>18:00 ~ 20:00</td>
															<td colspan="5">자습시간</td>
															<td colspan="5" rowspan="3">자유시간</td>
														</tr>
														<tr>
															<td>20:00 ~ 20:30</td>
															<td colspan="5">간식시간</td>
														</tr>
														<tr>
															<td>20:30 ~ 22:00</td>
															<td colspan="5">자유시간</td>
														</tr>
														<tr>
															<td>22:00 ~ </td>
															<td colspan="7">취침시간 (금,토 취침시간 오후 11시)</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<!--// 테이블영역 -->
								</div>
							</div>
							<div class="tab_03 duo">
								<div class="cotn">
									<div class="brd_tit">
										<h2 class="tit">홈스테이&기숙사형 프로그램</h2>
									</div>
									<!-- 소개텍스트 -->
									<div class="intr_wrap">
										<div class="tab_tit_area">
											<div class="content_tit">
												<p class="sub_txt">( 토론토-워털루 )</p>
												<h3>프로그램 소개</h3>
											</div>
											<div class="cotn_box">
												<p>
													캐나다 최고 공대인 University of Waterloo 가 있는 도시 워털루 지역은 캐나다 최고의 교육 도시 중 하나입니다.캐나다 TOP 5위의 높은 가계 소득, IT산업의 중심, 금융산업 도시의 핵심으로 손꼽히는 워터루 지역은 평균 학력과 교육열이 높고 한국인<br>
													비율이 낮아 한국 유학생들이 많이 선호하는 지역이기도 합니다. 이 곳에서 진행하는 워털루 관리형 프로그램은  15년이 넘는교육 역사를 가진 <br>
													전문 토탈 케어 프로그램입니다.  워털루 지역의 엄선된 공립학교를 다니며 캐네디언 홈스테이와 프리미엄 기숙사 중 선택할 수 있어서 특히나 <br>
													성향별 선호도가 많이 갈리는 우리 자녀들에게 선택을 폭을 넓혀 줍니다. 캐네디언 현지 가족들과 문화를 제대로 느끼고 자유시간이 중요한 <br>
													학생들에게는 캐네디언 홈스테이를 공부에 집중하고 학습과 생활 케어가 필요하다고 생각하는 학생들에게는 프리리엄 기숙사를 추천합니다.
												</p>
											</div>
										</div>
										<div class="wel_list">
											<div class="group">
												<div class="icon_box">
													<i class="i_wel li_019"></i>
												</div>
												<p>국제학생 경험이 풍부한 현역<br>교사들 중심의 전담 교사진</p>
											</div>
											<div class="group">
												<div class="icon_box">
													<i class="i_wel li_013"></i>
												</div>
												<p>개별학생들의 학습목표 및 실력에<br>따라 맞춤형 진행되는 방과후 수업</p>
											</div>
											<div class="group">
												<div class="icon_box">
													<i class="i_wel li_014"></i>
												</div>
												<p>교육청 산하의 전문업체를 통해<br>검증된 가정에 배정되는 홈스테이</p>
											</div>
											<div class="group">
												<div class="icon_box">
													<i class="i_wel li_05"></i>
												</div>
												<p>성적관리와 학생들의 생활, 용돈<br>까지 관리하는 최적의 교육환경</p>
											</div>
											<div class="group">
												<div class="icon_box">
													<i class="i_wel li_08"></i>
												</div>
												<p>대학진학을 위한 봉사활동 및<br>엑스트라 커리큘럼 관리</p>
											</div>
										</div>
									</div>
									<!--// 소개텍스트 -->

									<!-- 테이블영역 -->
									<div class="table_area">
										<div class="content_tit">
											<h3>주간샘플 일정표 (홈스테이)</h3>
										</div>
										<div class="care_table">
											<div class="cap_wrap">
												<p class="caption">&middot; 상기일정은 현지사정에 따라 변동될 수 있습니다.</p>
											</div>
											<div class="table_wrap">
												<table>
													<colgroup>
														<col width="14.28%">
														<col width="14.28%">
														<col width="14.28%">
														<col width="14.28%">
														<col width="14.28%">
														<col width="14.28%">
														<col width="14.28%">
													</colgroup>
													<thead>
														<tr>
															<th>Time</th>
															<th>Mon</th>
															<th>Tue</th>
															<th>Wed</th>
															<th>Th</th>
															<th>Fri</th>
															<th>Sat</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>08:20 ~ 14:20</td>
															<td colspan="5">Schooling at WCDSB (학교)</td>
															<td rowspan="4">
																TOEFL(IELTS)<br>
																OSSLT Prep<br>
																Classes<br>
																(토플, 아이엘츠 <br>
																테스트 준비반, <br>
																졸업영어시험 준비)<br>
																<br><br>
																(별도 요청하는 학생 = 별도비용)<br>
															</td>
														</tr>
														<tr>
															<td>14:20 ~ 15:00</td>
															<td colspan="5">템즈아카데미 도착 (Break Time)</td>
														</tr>
														<tr>
															<td>15:00 ~ 16:00</td>
															<td colspan="4">
																Daily Homework (지도교사 숙제점검)<br>
																English at Study Hall (가디언그룹 영어지도)
															</td>
															<td>
																Weekly<br>
																Presentation<br>
																(주간발표)
															</td>
														</tr>
														<tr>
															<td>16:00 ~ 17:30</td>
															<td colspan="5">Subject Lessons : Science, Math, Social Studies (과목별 소그룹별 방과후 수업)</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<!--// 테이블영역 -->

									<!-- 테이블영역 -->
									<div class="table_area">
										<div class="content_tit">
											<h3>주간샘플 일정표 (기숙사)</h3>
										</div>
										<div class="care_table">
											<div class="cap_wrap">
												<p class="caption">&middot; 상기일정은 현지사정에 따라 변동될 수 있습니다.</p>
											</div>
											<div class="table_wrap">
												<table>
													<colgroup>
														<col width="14.28%">
														<col width="14.28%">
														<col width="14.28%">
														<col width="14.28%">
														<col width="14.28%">
														<col width="14.28%">
														<col width="14.28%">
													</colgroup>
													<thead>
														<tr>
															<th>Time</th>
															<th>Mon</th>
															<th>Tue</th>
															<th>Wed</th>
															<th>Th</th>
															<th>Fri</th>
															<th>Sat</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>08:20 ~ 14:20</td>
															<td colspan="5">Schooling at WCDSB (학교)</td>
															<td rowspan="4">
																TOEFL(IELTS)<br>
																OSSLT Prep<br>
																Classes<br>
																(토플, 아이엘츠 <br>
																테스트 준비반, <br>
																졸업영어시험 준비)<br>
																<br><br>
																(별도 요청하는 학생 = 별도비용)<br>
															</td>
														</tr>
														<tr>
															<td>14:20 ~ 15:00</td>
															<td colspan="5">템즈아카데미 도착 (Break Time)</td>
														</tr>
														<tr>
															<td>15:00 ~ 16:00</td>
															<td colspan="4">
																Daily Homework (지도교사 숙제점검)<br>
																English at Study Hall (가디언그룹 영어지도)
															</td>
															<td>
																Weekly<br>
																Presentation<br>
																(주간발표)
															</td>
														</tr>
														<tr>
															<td>16:00 ~ 17:30</td>
															<td colspan="5">Subject Lessons : Science, Math, Social Studies (과목별 소그룹별 방과후 수업)</td>
														</tr>
														<tr>
															<td>17:30 ~ 19:00</td>
															<td colspan="6">Dinner with Manager and Friends (저녁식사 및 개인 휴식)</td>
														</tr>
														<tr>
															<td>19:00 ~ 20:30</td>
															<td colspan="6">Residence Group Study (레지던스 그룹스터디)</td>
														</tr>
														<tr>
															<td>20:30 ~ 22:00</td>
															<td colspan="6">Private Study . or Free Time (개인공부 및 자유시간)</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<!--// 테이블영역 -->

									<!-- 소개텍스트 -->
									<div class="intr_wrap">
										<div class="tab_tit_area">
											<div class="content_tit">
												<p class="sub_txt">( 벤쿠버-델타 )</p>
												<h3>프로그램 소개</h3>
											</div>
											<div class="cotn_box">
												<p>
													밴쿠버에서 차로 30분 거리에 위치한 Delta (델타) 교육청의 우수 명문 공립학교를 다니며, 체계적인 관리를 받는 유학프로그램입니다.한국의 세종시로 불리는 델타는 국제학생 비율이 평균적으로 3~10%미만으로 타 지역과 교육청에 비해 매우 낮은 비율이며,
													대부분의 학교 90% 학생들의 모국어가 영어이므로 조기유학을 시작하여 영어공부를 집중적으로 할 수 있는 환경을 갖추고 있습니다. 이 곳에서 진행되는 관리형 프로그램의  학생들의 성향과 준비된 학습에 따라 캐네디언 홈스테이 혹은 한국인 홈스테이 그리고
													프리미엄 기숙사 중에서 선택하실 수 있습니다.
												</p>
											</div>
										</div>
										<div class="wel_list">
											<div class="group">
												<div class="icon_box">
													<i class="i_wel li_014"></i>
												</div>
												<p>가족적이고 편안한 홈스테이/<br>한국인- 캐네디언 선택가능</p>
											</div>
											<div class="group">
												<div class="icon_box">
													<i class="i_wel li_015"></i>
												</div>
												<p>등하교/방과후 러닝센터 숙소이동<br>까지 안전한 Ride 서비스</p>
											</div>
											<div class="group">
												<div class="icon_box">
													<i class="i_wel li_03"></i>
												</div>
												<p>인성, 건강, 학습의<br>균형있는 관리</p>
											</div>
											<div class="group">
												<div class="icon_box">
													<i class="i_wel li_016"></i>
												</div>
												<p>IB, AP 과목이 개설된<br>우수한 공립학교로 배정</p>
											</div>
											<div class="group">
												<div class="icon_box">
													<i class="i_wel li_017"></i>
												</div>
												<p>교과목 방과 후 수업 외에 코딩,<br>디베이트 수업 써포트</p>
											</div>
											<div class="group">
												<div class="icon_box">
													<i class="i_wel li_018"></i>
												</div>
												<p>월 2회 다양한 외부 <br>액티비티 및 봉사활동 참여</p>
											</div>
										</div>
									</div>
									<!--// 소개텍스트 -->

									<!-- 테이블영역 -->
									<div class="table_area">
										<div class="content_tit">
											<h3>주간샘플 일정표</h3>
										</div>
										<div class="care_table">
											<div class="cap_wrap">
												<p class="caption">&middot; 상기일정은 현지사정에 따라 변동될 수 있습니다.</p>
												<p class="caption">&middot; 한달에 2회 주말 - 외부 Activity (견학, 운동, 여행 및 자원봉사 활동)</p>
												<p class="caption">&middot; 주말은 교회활동 및 자유시간</p>
											</div>
											<div class="table_wrap">
												<table>
													<colgroup>
														<col width="12.5%">
														<col width="12.5%">
														<col width="12.5%">
														<col width="12.5%">
														<col width="12.5%">
														<col width="12.5%">
														<col width="12.5%">
														<col width="12.5%">
													</colgroup>
													<thead>
														<tr>
															<th>Time</th>
															<th>Mon</th>
															<th>Tue</th>
															<th>Wed</th>
															<th>Th</th>
															<th>Fri</th>
															<th>Sat</th>
															<th>Sun</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>08:30 ~ 15:00</td>
															<td colspan="5">학교생활</td>
															<td colspan="2" rowspan="6">자유시간</td>
														</tr>
														<tr>
															<td>15:00 ~ 16:00</td>
															<td colspan="5">하교 및 간식 타임, 다음 활동 준비하기</td>
														</tr>
														<tr>
															<td>16:00 ~ 18:00</td>
															<td colspan="5">주 4회 - 영어, 사회, 수학, 과학 수업 / 주 1회 코딩 또는 디베이트 수업</td>
														</tr>
														<tr>
															<td>18:00 ~ 18:30</td>
															<td colspan="5">저녁 식사 및 휴식과 준비</td>
														</tr>
														<tr>
															<td>18:30 ~ 20:30</td>
															<td colspan="5">월/화/목/금/ 공부방 학습 / 수요일은 코딩 또는 디베이트 수업</td>
														</tr>
														<tr>
															<td>20:30 ~</td>
															<td colspan="5">숙소로 이동 휴식</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<!--// 테이블영역 -->
								</div>
							</div>
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


