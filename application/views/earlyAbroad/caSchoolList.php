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
							<div class="pro_group on"><!-- 활성화시 class="on"추가 -->
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

					<!-- 캐나다지도 -->
					<div class="image_map_wrap">
						<h2 class="map_tit">캐나다</h2>
						<img src="/static/img/early_abroad/ca/map.png" class="canada_map" usemap="#image-map">

						<!-- 이미지맵 링크 -->
						<map name="image-map">
							<area target="" href="" class="off_tab ont" alt="Ontario" title="Ontario" coords="663,562,642,582,629,593,615,620,600,634,605,650,602,667,601,702,615,710,648,700,664,702,680,708,694,701,705,696,716,704,729,714,729,723,742,725,746,733,768,731,784,730,796,738,811,741,832,750,840,756,854,738,835,729,821,716,807,718,796,709,797,696,786,675,781,658,777,642,763,646,760,631,755,624,745,627,748,614,734,609,736,599,727,588,727,574,712,573,703,579,692,573" shape="poly">
							<!-- 온타리오주 class="ont" 추가 -->

							<!-- 온타리오주 교육청 링크연결 -->
							<area target="" href="" alt="Toronto District School Board" title="Toronto District School Board" coords="774,509,58" shape="circle">
							<area target="" href="" alt="York Catholic District School Board" title="York Catholic District School Board" coords="869,676,59" shape="circle">
							<area target="" href="" alt="Toronto Catholic District School Board" title="Toronto Catholic District School Board" coords="803,802,59" shape="circle">
							<area target="" href="" alt="York Region District School Board" title="York Region District School Board" coords="650,761,59" shape="circle">
							<!--// 온타리오주 교육청 링크연결 -->


							<area target="" href="" class="off_tab brt" alt="British Columbia" title="British Columbia" coords="266,441,266,467,260,486,246,502,244,517,239,536,229,546,224,552,237,554,238,565,234,573,247,585,244,593,236,604,247,618,260,629,260,647,267,657,279,660,286,669,355,686,348,652,352,638,341,622,345,614,331,595,338,578,347,538,325,523,305,501,303,479,303,456" shape="poly">
							<!-- 브리티시 컬럼비아주 class="brt" 추가 -->

							<!-- 브리티시 컬럼비아주 교육청 링크연결 -->
							<area target="" href="" alt="Langley School District #35" title="Langley School District #35" coords="207,456,59" shape="circle">
							<area target="" href="" alt="Coquitlam School District #43" title="Coquitlam School District #43" coords="362,477,59" shape="circle">
							<area target="" href="" alt="North Vancouver School District #44" title="North Vancouver School District #44" coords="412,654,58" shape="circle">
							<area target="" href="" alt="Vancouver School District #39" title="Vancouver School District #39" coords="297,738,59" shape="circle">
							<area target="" href="" alt="Burnaby School District #41" title="Burnaby School District #41" coords="175,650,58" shape="circle">
							<!--// 브리티시 컬럼비아주 교육청 링크연결 -->
						</map>
						<!--// 이미지맵 링크 -->
					</div>
					<!--// 캐나다지도 -->

					<!-- 지역탭 -->
					<div class="area_tab_wrap">
						<a href="#none" class="area_tab off_tab all">
							<span class="area_txt"><strong>캐나다</strong>Canada</span>
						</a>
						<a href="#none" class="area_tab off_tab ont"><!-- 온타리오주 class="ont" 추가 -->
							<span class="area_txt"><strong>온타리오주</strong>Ontario</span>
						</a>
							<!-- 브리티시 컬럼비아주 class="brt" 추가 -->
						<a href="#none" class="area_tab off_tab brt">
							<span class="area_txt"><strong>브리티시 컬럼비아주</strong>British Columbia</span>
						</a>
					</div>
					<!--// 지역탭 -->

					<!-- 교육청리스트 -->
					<div class="office_list_wrap">
						<h2 class="office_title">교육청 리스트</h2>

						<!-- 목록 -->
						<div class="office_list">
							<div class="group ontario">
							<!--온타리오주 교육청 class="ontario" 추가
                            브리티시 컬럼비아주 교육청 class="british" 추가-->
								<div class="group_list">
									<!-- 왼쪽이미지영역 -->
									<div class="img_area">
										<figure class="logo_img">
											<img src="/static/img/early_abroad/ca/logo_tdsb.png" alt="Tdsb">
										</figure>
										<p class="name">Toronto District<br>School Board</p>
									</div>
									<!--// 왼쪽이미지영역 -->

									<!-- 오른쪽텍스트영역 -->
									<div class="txt_box">
										<!-- 학교정보 -->
										<div class="ofc_info">
											<div class="info_txt_wrap">
												<h4 class="info_tit">기관/ 학교 명 :</h4>
												<p class="info_txt">Toronto District School Board (토론토 교육청)</p>
											</div>
											<div class="info_txt_wrap">
												<h4 class="info_tit">주소 :</h4>
												<p class="info_txt">Toronto District School Board (토론토 교육청)</p>
											</div>
											<div class="info_txt_wrap">
												<h4 class="info_tit">홈페이지 :</h4>
												<a href="www.tdsb.on.ca" class="info_txt">www.tdsb.on.ca</a>
											</div>
										</div>
										<!--// 학교정보 -->

										<!-- 지역설명 -->
										<div class="ofc_info">
											<div class="info_txt_wrap loca_area">
												<h4 class="info_tit">지역설명 : </h4>
												<div class="loca_txt">
													<p>
														토론토 시의 정규교육 과정을 관할하고 있으며, 산하에 584개의 학교가 운영되는 캐나다 최대규모의 교육청입니다.<br>
														- 매년 국제학생이 입학 가능한 고등학교들을 선정하며, 선정된 학교들만 입학수속이 가능합니다.<br>
														- 유치원~초중등학교 입학의 경우, 학교 권역안의 주소지 증명이 입학수속에 필요합니다.<br>
														- 토론토 전지역에 걸쳐 다양한 학교가 분포되어 있으며, 교복은 따로 없습니다. <br>
														- 재학생들의 국적, 문화배경이 매우 다양하며, 각 학교의 지도교사(가이던스)들이 국제학생에 대한 이해도가 높아 보다 빠르고 안정적인 현지적응이 가능합니다.
													</p>
												</div>
											</div>
										</div>
										<!--// 지역설명 -->

										<!-- 상세보기버튼 -->
										<a href="/earlyAbroad/caSchoolDetail/tdsb" class="btn_detail">
											<span>상세보기 &nbsp; +</span>
										</a>
										<!--// 상세보기버튼 -->
									</div>
									<!--// 오른쪽텍스트영역 -->

								</div>
							</div>
							<div class="group ontario">
								<div class="group_list">
									<!--
										온타리오주 교육청 class="ontario" 추가
										브리티시 컬럼비아주 교육청 class="british" 추가
									-->
									<!-- 왼쪽이미지영역 -->
									<div class="img_area">
										<figure class="logo_img">
											<img src="/static/img/early_abroad/ca/logo_tcds.png" alt="TCDS">
										</figure>
										<p class="name">Toronto Catholic District<br>School Board</p>
									</div>
									<!--// 왼쪽이미지영역 -->

									<!-- 오른쪽텍스트영역 -->
									<div class="txt_box">
										<!-- 학교정보 -->
										<div class="ofc_info">
											<div class="info_txt_wrap">
												<h4 class="info_tit">기관/ 학교 명 :</h4>
												<p class="info_txt">Toronto Catholic District School Board (토론토 가톨릭 교육청)</p>
											</div>
											<div class="info_txt_wrap">
												<h4 class="info_tit">주소 :</h4>
												<p class="info_txt">80 Sheppard Ave. E., Toronto ON., M2N 6E8</p>
											</div>
											<div class="info_txt_wrap">
												<h4 class="info_tit">홈페이지 :</h4>
												<a href="www.tcdsb.org" class="info_txt">www.tcdsb.org</a>
											</div>
										</div>
										<!--// 학교정보 -->

										<!-- 지역설명 -->
										<div class="ofc_info">
											<div class="info_txt_wrap loca_area">
												<h4 class="info_tit">지역설명 : </h4>
												<div class="loca_txt">
													<p>
														토론토시에 거주하는 카톨릭 신자들의 교육을 위해 카톨릭 재단에서 운영하는 교육청으로, 캐나다 최대 규모 교육청 중 한 곳입니다.<br>
														- 유치부-초중등학교 입학의 경우, 학교 권역안의 주소지 증명이 필수이며, 학생본인 혹은 부모님, 현지 가디언(보호자)가 카톨릭 신자여야만 입학이 가능합니다.<br>
														- 고등학교 입학의 경우, 카톨릭 신자가 아니여도 입학이 가능하며, 타 교육청에 비해 학교선택이 비교적 자유롭습니다.<br>
														- 1년(2학기), 1학기(5개월), 한달 단위의 입학신청도 가능하며, 일반 유학생들과 동일한 학교 선택이 가능합니다.<br>
														- 드레스 코드가 존재하며 교복 착용이 필수입니다.
													</p>
												</div>
											</div>
										</div>
										<!--// 지역설명 -->

										<!-- 상세보기버튼 -->
										<a href="/earlyAbroad/caSchoolDetail/tcds" class="btn_detail">
											<span>상세보기 &nbsp; +</span>
										</a>
										<!--// 상세보기버튼 -->
									</div>
									<!--// 오른쪽텍스트영역 -->
								</div>
							</div>
							<div class="group ontario">
								<div class="group_list">
									<!--
										온타리오주 교육청 class="ontario" 추가
										브리티시 컬럼비아주 교육청 class="british" 추가
									-->

									<!-- 왼쪽이미지영역 -->
									<div class="img_area">
										<figure class="logo_img">
											<img src="/static/img/early_abroad/ca/logo_york.png" alt="york">
										</figure>
										<p class="name">York Region District<br> School Board</p>
									</div>
									<!--// 왼쪽이미지영역 -->

									<!-- 오른쪽텍스트영역 -->
									<div class="txt_box">
										<!-- 학교정보 -->
										<div class="ofc_info">
											<div class="info_txt_wrap">
												<h4 class="info_tit">기관/ 학교 명 :</h4>
												<p class="info_txt">York Region District School Board (요크 교육청)</p>
											</div>
											<div class="info_txt_wrap">
												<h4 class="info_tit">주소 :</h4>
												<p class="info_txt">60 Wellington Street West, Aurora, ON L4G 3H2</p>
											</div>
											<div class="info_txt_wrap">
												<h4 class="info_tit">홈페이지 :</h4>
												<a href="https://www2.yrdsb.ca/" class="info_txt">https://www2.yrdsb.ca/</a>
											</div>
										</div>
										<!--// 학교정보 -->

										<!-- 지역설명 -->
										<div class="ofc_info">
											<div class="info_txt_wrap loca_area">
												<h4 class="info_tit">지역설명 : </h4>
												<div class="loca_txt">
													<p>
														요크 교육청은 광역 토론토 북부의 외곽도시를 관할로 하는 공립학교들을 주관하는 교육청 입니다. <br>
														온타리오주 내 교육청 중 세번째로 규모가 크며 도시들이 대체로 부유층이 많이 안전하고 학군이 우수합니다. <br>
														- 유교육열이 매우 높은 지역으로 프레이저 리포트 랭킹에서 다수 학교들이 상위권에 있으며 주정부 시험과 영어능력평가 시험에서도 학업 성취도가 높은 교육청 입니다.<br>
														- 토론토 지역에 비해 적은 한국 학생 비율: 영어권 환경 노출의 극대화로 조기유학에 좋은 지역입니다.<br>
														- 교육청 내의 학교 시설 대부분이 최신식이며, 커뮤니티 센터들이 근처에 있어 생활이 편리합니다.
													</p>
												</div>
											</div>
										</div>
										<!--// 지역설명 -->

										<!-- 상세보기버튼 -->
										<a href="/earlyAbroad/caSchoolDetail/york" class="btn_detail">
											<span>상세보기 &nbsp; +</span>
										</a>
										<!--// 상세보기버튼 -->
									</div>
									<!--// 오른쪽텍스트영역 -->

								</div>
							</div>
							<div class="group ontario">
								<div class="group_list">
									<!--
										온타리오주 교육청 class="ontario" 추가
										브리티시 컬럼비아주 교육청 class="british" 추가
									-->

									<!-- 왼쪽이미지영역 -->
									<div class="img_area">
										<figure class="logo_img">
											<img src="/static/img/early_abroad/ca/logo_ycdsb.png" alt="ycdsb">
										</figure>
										<p class="name">York Catholic District<br>School Board</p>
									</div>
									<!--// 왼쪽이미지영역 -->

									<!-- 오른쪽텍스트영역 -->
									<div class="txt_box">
										<!-- 학교정보 -->
										<div class="ofc_info">
											<div class="info_txt_wrap">
												<h4 class="info_tit">기관/ 학교 명 :</h4>
												<p class="info_txt">York Catholic District School Board (요크 가톨릭 교육청)</p>
											</div>
											<div class="info_txt_wrap">
												<h4 class="info_tit">주소 :</h4>
												<p class="info_txt">320 Bloomington Road West, Aurora, ON L4G 0M1 Canada</p>
											</div>
											<div class="info_txt_wrap">
												<h4 class="info_tit">홈페이지 :</h4>
												<a href="https://www.ycdsb.ca" class="info_txt">https://www.ycdsb.ca</a>
											</div>
										</div>
										<!--// 학교정보 -->

										<!-- 지역설명 -->
										<div class="ofc_info">
											<div class="info_txt_wrap loca_area">
												<h4 class="info_tit">지역설명 : </h4>
												<div class="loca_txt">
													<p>
														요크 가톨릭 교육청은 토론토 광역권 북부의 쏜힐, 오로라, 마컴, 리치몬드 힐 등을 관할하는 교육청입니다.부유층이 많이 거주하는 토론토 북쪽 지역이라, 선호하는 국제학생이 많으며 교육열이 높은 지역입니다.<br>
														- 커뮤니티센터가 많고 편의시설들이 다른 지역보다 많은 편입니다.<br>
														- 요크교육청 관할지역과 마찬가지로 한국인 이민자들을 쉽게 볼 수 있는 지역 입니다.<br>
														- 교육청 내의 학교 시설 대부분이 최신식이며, 커뮤니티 센터들이 근처에 있어 생활이 편리합니다.
													</p>
												</div>
											</div>
										</div>
										<!--// 지역설명 -->

										<!-- 상세보기버튼 -->
										<a href="/earlyAbroad/caSchoolDetail/ycdsb" class="btn_detail">
											<span>상세보기 &nbsp; +</span>
										</a>
										<!--// 상세보기버튼 -->
									</div>
									<!--// 오른쪽텍스트영역 -->

								</div>
							</div>
							<div class="group british">
								<div class="group_list">
									<!--
										온타리오주 교육청 class="ontario" 추가
										브리티시 컬럼비아주 교육청 class="british" 추가
									-->

									<!-- 왼쪽이미지영역 -->
									<div class="img_area">
										<figure class="logo_img">
											<img src="/static/img/early_abroad/ca/logo_csd.png" alt="csd">
										</figure>
										<p class="name">Coquitlam School<br>District #43</p>
									</div>
									<!--// 왼쪽이미지영역 -->

									<!-- 오른쪽텍스트영역 -->
									<div class="txt_box">
										<!-- 학교정보 -->
										<div class="ofc_info">
											<div class="info_txt_wrap">
												<h4 class="info_tit">기관/ 학교 명 :</h4>
												<p class="info_txt">Coquitlam School<br>District (코퀴틀람 교육청)</p>
											</div>
											<div class="info_txt_wrap">
												<h4 class="info_tit">주소 :</h4>
												<p class="info_txt">1100 Winslow Avenue, Coquitlam, BC, Canada (V3J 2G3)</p>
											</div>
											<div class="info_txt_wrap">
												<h4 class="info_tit">홈페이지 :</h4>
												<a href=" http://www.internationaled.com/" class="info_txt"> http://www.internationaled.com/</a>
											</div>
										</div>
										<!--// 학교정보 -->

										<!-- 지역설명 -->
										<div class="ofc_info">
											<div class="info_txt_wrap loca_area">
												<h4 class="info_tit">지역설명 : </h4>
												<div class="loca_txt">
													<p>
														BC주 서쪽에 위치한 지역입니다.<br>
														- Coquitlam, Port Coquitlam, Balcarra & Anmore 지역으로 나뉨니다.<br>
														- 공원이 많으며 여유롭고 살기 좋은 거주환경이 특징입니다.- Port Coquitlam지역은 한인 밀집도 및 유학생 비율이 높습니다.<br>
														- 코퀴틀람 교육청 소속 세컨더리 스쿨들은 최근 몇 년간 프레이저 랭킹이 꾸준히 오르고 있습니다.
													</p>
												</div>
											</div>
										</div>
										<!--// 지역설명 -->

										<!-- 상세보기버튼 -->
										<a href="/earlyAbroad/caSchoolDetail/csd" class="btn_detail">
											<span>상세보기 &nbsp; +</span>
										</a>
										<!--// 상세보기버튼 -->
									</div>
									<!--// 오른쪽텍스트영역 -->

								</div>
							</div>
							<div class="group british">
								<div class="group_list">
									<!--
										온타리오주 교육청 class="ontario" 추가
										브리티시 컬럼비아주 교육청 class="british" 추가
									-->

									<!-- 왼쪽이미지영역 -->
									<div class="img_area">
										<figure class="logo_img">
											<img src="/static/img/early_abroad/ca/logo_nvsd.png" alt="csd">
										</figure>
										<p class="name">North Vancouver School<br>District #44</p>
									</div>
									<!--// 왼쪽이미지영역 -->

									<!-- 오른쪽텍스트영역 -->
									<div class="txt_box">
										<!-- 학교정보 -->
										<div class="ofc_info">
											<div class="info_txt_wrap">
												<h4 class="info_tit">기관/ 학교 명 :</h4>
												<p class="info_txt">North Vancouver School District #44 (44번 교육청)</p>
											</div>
											<div class="info_txt_wrap">
												<h4 class="info_tit">주소 :</h4>
												<p class="info_txt">2121 Lonsdale Avenue, North Vancouver, BC, (V7M 2K6)</p>
											</div>
											<div class="info_txt_wrap">
												<h4 class="info_tit">홈페이지 :</h4>
												<a href="https://www.sd44.ca/ProgramsServices/InternationalEd/Pages/default.aspx" class="info_txt"> https://www.sd44.ca/ProgramsServices/InternationalEd/Pages/default.aspx</a>
											</div>
										</div>
										<!--// 학교정보 -->

										<!-- 지역설명 -->
										<div class="ofc_info">
											<div class="info_txt_wrap loca_area">
												<h4 class="info_tit">지역설명 : </h4>
												<div class="loca_txt">
													<p>
														노스밴쿠버 교육청은 우수한 학군으로 공립학교임에도 퀄리티 높은 교육을 제공하고 있으며,<br>
														웨스트 밴쿠버 교육청, 밴쿠버 교육청 웨스트 지역과 함께 국제학생 원서 마감이 가장 빠른 교육청 중 하나 입니다.
														- 광역 밴쿠버 북쪽에 위치한 부촌지역. 밴쿠버 다운타운으로부터 차량으로 15분정도 떨어져 있습니다.
														- 노스밴쿠버 교육청 관할 구역은 Capilano/Lonsdale/Lynn Valley/Deep Cove로 나뉩니다.
													</p>
												</div>
											</div>
										</div>
										<!--// 지역설명 -->

										<!-- 상세보기버튼 -->
										<a href="#none" class="btn_detail">
											<span>상세보기 &nbsp; +</span>
										</a>
										<!--// 상세보기버튼 -->
									</div>
									<!--// 오른쪽텍스트영역 -->

								</div>
							</div>
							<div class="group british">
								<div class="group_list">
									<!--
										온타리오주 교육청 class="ontario" 추가
										브리티시 컬럼비아주 교육청 class="british" 추가
									-->
									<!-- 왼쪽이미지영역 -->
									<div class="img_area">
										<figure class="logo_img">
											<img src="/static/img/early_abroad/ca/logo_vps.png" alt="vps">
										</figure>
										<p class="name">Vancouver School<br>District #39</p>
									</div>
									<!--// 왼쪽이미지영역 -->

									<!-- 오른쪽텍스트영역 -->
									<div class="txt_box">
										<!-- 학교정보 -->
										<div class="ofc_info">
											<div class="info_txt_wrap">
												<h4 class="info_tit">기관/ 학교 명 :</h4>
												<p class="info_txt">Vancouver School District #39</p>
											</div>
											<div class="info_txt_wrap">
												<h4 class="info_tit">주소 :</h4>
												<p class="info_txt">1580 West Broadway, Vancouver, BC, Canada (V6J 5K8)</p>
											</div>
											<div class="info_txt_wrap">
												<h4 class="info_tit">홈페이지 :</h4>
												<a href="http://intered.vsb.bc.ca/" class="info_txt"> http://intered.vsb.bc.ca/</a>
											</div>
										</div>
										<!--// 학교정보 -->

										<!-- 지역설명 -->
										<div class="ofc_info">
											<div class="info_txt_wrap loca_area">
												<h4 class="info_tit">지역설명 : </h4>
												<div class="loca_txt">
													<p>
														BC주 남서쪽에 위치한 안전하고 기후가 온화한 밴쿠버 대표지역으로써 살기 좋은 도시 3위에 선정되었습니다.<br>
                                                        - BC주 주립대학인 UBC가 근접하며 높은 교육수준을 자랑합니다.<br>
                                                        - 학교 대부분이 안전한 주택가에 인접해 있습니다.<br>
                                                        - Vancouver West, Vancouver East지역으로 나뉩니다.<br>
                                                        - 주요 관광명소 및 편의 상권이 밀집 해 있으며, 현지 커뮤니티와 잘 조화를 이루어 정착 선호도가 높은 지역입니다.
													</p>
												</div>
											</div>
										</div>
										<!--// 지역설명 -->

										<!-- 상세보기버튼 -->
										<a href="/earlyAbroad/caSchoolDetail/vps" class="btn_detail">
											<span>상세보기 &nbsp; +</span>
										</a>
										<!--// 상세보기버튼 -->
									</div>
									<!--// 오른쪽텍스트영역 -->
								</div>
							</div>
							<div class="group british">
								<div class="group_list">
									<!--
										온타리오주 교육청 class="ontario" 추가
										브리티시 컬럼비아주 교육청 class="british" 추가
									-->
									<!-- 왼쪽이미지영역 -->
									<div class="img_area">
										<figure class="logo_img">
											<img src="/static/img/early_abroad/ca/logo_bnby.png" alt="bnby">
										</figure>
										<p class="name">Burnaby School<br>District #41</p>
									</div>
									<!--// 왼쪽이미지영역 -->

									<!-- 오른쪽텍스트영역 -->
									<div class="txt_box">
										<!-- 학교정보 -->
										<div class="ofc_info">
											<div class="info_txt_wrap">
												<h4 class="info_tit">기관/ 학교 명 :</h4>
												<p class="info_txt">Burnaby School District #41</p>
											</div>
											<div class="info_txt_wrap">
												<h4 class="info_tit">주소 :</h4>
												<p class="info_txt">5325 Kincaid Street, Burnaby, BC, Canada (V5G 1W2)</p>
											</div>
											<div class="info_txt_wrap">
												<h4 class="info_tit">홈페이지 :</h4>
												<a href="https://www.studyinburnaby.ca/" class="info_txt">https://www.studyinburnaby.ca/</a>
											</div>
										</div>
										<!--// 학교정보 -->

										<!-- 지역설명 -->
										<div class="ofc_info">
											<div class="info_txt_wrap loca_area">
												<h4 class="info_tit">지역설명 : </h4>
												<div class="loca_txt">
													<p>
														BC주 중심부에 위치한 광역지역으로 동과 서를 잊는 중요한 역할을 합니다.<br>
                                                        - BC주의 상위권 대학교 SUF와 유명한 공대 BCIT가 있습니다.<br>
                                                        - 초등과정 교육이 특화 되어 있는 지역입니다.<br>
                                                        - North Burnaby, South Burnaby 지역으로 나뉩니다.<br>
                                                        - 주요 관광명소 및 거대한 상권으로의 접근성이 좋으며, 한적한 거주환경으로 인한 정착 선호도가 높은 지역입니다.<br>
													</p>
												</div>
											</div>
										</div>
										<!--// 지역설명 -->

										<!-- 상세보기버튼 -->
										<a href="#none" class="btn_detail">
											<span>상세보기 &nbsp; +</span>
										</a>
										<!--// 상세보기버튼 -->
									</div>
									<!--// 오른쪽텍스트영역 -->
								</div>
							</div>
							<div class="group british">
								<div class="group_list">
									<!--
										온타리오주 교육청 class="ontario" 추가
										브리티시 컬럼비아주 교육청 class="british" 추가
									-->
									<!-- 왼쪽이미지영역 -->
									<div class="img_area">
										<figure class="logo_img">
											<img src="/static/img/early_abroad/ca/logo_lnly.png" alt="lnly">
										</figure>
										<p class="name">Langley School<br>District #35</p>
									</div>
									<!--// 왼쪽이미지영역 -->

									<!-- 오른쪽텍스트영역 -->
									<div class="txt_box">
										<!-- 학교정보 -->
										<div class="ofc_info">
											<div class="info_txt_wrap">
												<h4 class="info_tit">기관/ 학교 명 :</h4>
												<p class="info_txt">Burnaby School District #41</p>
											</div>
											<div class="info_txt_wrap">
												<h4 class="info_tit">주소 :</h4>
												<p class="info_txt">5325 Kincaid Street, Burnaby, BC, Canada (V5G 1W2)</p>
											</div>
											<div class="info_txt_wrap">
												<h4 class="info_tit">홈페이지 :</h4>
												<a href="http://www.studyinlangley.com/" class="info_txt">http://www.studyinlangley.com/</a>
											</div>
										</div>
										<!--// 학교정보 -->

										<!-- 지역설명 -->
										<div class="ofc_info">
											<div class="info_txt_wrap loca_area">
												<h4 class="info_tit">지역설명 : </h4>
												<div class="loca_txt">
													<p>
														BC주 동남쪽에 위치한 광역지역입니다.<br>
                                                        - 밴쿠버 다운타운에서 50분가량 떨어져 있는 외각 지역이나, 최근 개발이 진행되고 있는 신흥도시입니다.<br>
                                                        - 새 아파트 및 깔끔한 거주환경과 자연이 조화를 이루고 있는 지역입니다.<br>
                                                        - Walnutgrove, Fort Langley, Aldergrove, Langly City, willbrook지역으로 나뉩니다.<br>
                                                        - 큼직한 상권 및 다양한 스포츠 시설(indoor, outdoor)형성 되어 있으며, 특히 Walnutgrove, Aldergrove, willowbrook지역에는<br>
                                                        조기유학 자녀를 동반한 한인가정이 많이 거주/이동하는 추세입니다.
													</p>
												</div>
											</div>
										</div>
										<!--// 지역설명 -->

										<!-- 상세보기버튼 -->
										<a href="#none" class="btn_detail">
											<span>상세보기 &nbsp; +</span>
										</a>
										<!--// 상세보기버튼 -->
									</div>
									<!--// 오른쪽텍스트영역 -->
								</div>
							</div>
						</div>
						<!--// 목록 -->

					</div>
					<!--// 교육청리스트 -->
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


