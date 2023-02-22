<?php
include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/head.php');
//include_once($_SERVER['DOCUMENT_ROOT']."/inc/blog_list.php");
?>
<link rel="stylesheet" type="text/css" href="/static/css/product_detail.css">
<script src="/static/js/map.js"></script>
<script src="/static/js/product_detail.js"></script>
<body>
    <script type="text/javascript">
		function showSchool(school){
			$(".sc_group").hide();
			if(school == 'all'){
				$(".sc_group").show();
			}else{
				$("."+school).show();
			}
		}
    </script>
	<div id="wrap">
	<?php
    include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/header.php');
    ?>
		<div id="container" style="padding:0;">

			<div id="content">
				<!-- 조기유학상세작업 -->
				<div id="detail_wrap" class="uk">
					<!-- 영국 조기유학 프로그램 -->
					<div class="pro_selet">
						<h2 class="pro_title">영국 조기유학 프로그램</h2>

						<div class="pro_btn_wrap">
							<div class="pro_group on"><!-- 활성화시 class="on"추가 -->
								<a href="/earlyAbroad/ukSchoolList">
									<figure class="pro_img">
										<img src="/static/img/early_abroad/uk/ico_btn_list_ico1.png" alt="조기유학 학교찾기">
									</figure>
									<span class="menu_txt">조기유학 학교찾기</span>
								</a>
							</div>
							<div class="pro_group">
								<a href="/earlyAbroad/whyEarlyUk">
									<figure class="pro_img">
										<img src="/static/img/early_abroad/uk/ico_btn_list_ico2.png" alt="">
									</figure>
									<span class="menu_txt">왜 조기유학인가?</span>
								</a>
							</div>
							<div class="pro_group">
								<a href="/earlyAbroad/ukTopSchools">
									<figure class="pro_img">
										<img src="/static/img/early_abroad/uk/ico_btn_list_ico3.png" alt="">
									</figure>
									<span class="menu_txt">명문 TOP 100</span>
								</a>
							</div>
						</div>
					</div>
					<!--// 영국 조기유학 프로그램 -->

					<!-- 영국지도 -->
					<div class="image_map_wrap">
						<h2 class="map_tit">영국</h2>
						<img src="/static/img/early_abroad/uk/map_uk.png" class="canada_map" usemap="#image-map">

						<!-- 이미지맵 링크 -->
						<map name="image-map">
							<area target="" alt="카디프" title="카디프" href="javascript:showSchool('Cardiff');" coords="774,1010,686,956" shape="rect" >
							<area target="" alt="슈르지베리" title="슈르지베리" href="javascript:showSchool('Shrewsbury');" coords="735,850,836,898" shape="rect" >
							<area target="" alt="버밍엄" title="버밍엄" href="javascript:showSchool('Birmingham');" coords="912,900,812,940" shape="rect">
							<area target="" alt="런던" title="런던" href="javascript:showSchool('London');" coords="921,990,987,1032" shape="rect">
							<area target="" alt="캠브리지" title="캠브리지" href="javascript:showSchool('Cambridge');" coords="954,955,1040,910" shape="rect">
							<area target="" alt="옥스포드" title="옥스포드" href="javascript:showSchool('Oxford');" coords="914,993,842,1036" shape="rect">
							<area target="" alt="멘체스터" title="멘체스터" href="javascript:showSchool('Manchester');" coords="798,826,906,778" shape="rect">
							<area target="" alt="노스햄튼" title="노스햄튼" href="javascript:showSchool('NorthHampton');" coords="854,978,950,945" shape="rect">
							<area target="" alt="본머스" title="본머스" href="javascript:showSchool('Bournemouth');" coords="756,1060,875,1099" shape="rect">
							<area target="" alt="브라이튼" title="브라이튼" href="javascript:showSchool('Brighton');" coords="933,1108,1001,1069" shape="rect">
							<area target="" alt="캔터버리" title="캔터버리" href="javascript:showSchool('Canterbury');" coords="1005,1071,1100,1020" shape="rect">
						</map>
						<!--// 이미지맵 링크 -->
					</div>
					<!--// 영국지도 -->

					<!-- 학교탭 -->
					<div class="school_tab_wrap">
						<div class="uk_tab_area">
							<button type="button" class="uk_tab" onclick="showSchool('all');">
								<strong>영국</strong>
								<span>United Kingdom</span>
							</button>
						</div>
						<div class="city_tab_area">
							<button type="button" class="city_tab" onclick="showSchool('Cardiff');">
								<strong>카디프</strong>
								<span>Cardiff</span>
							</button>
							<button type="button" class="city_tab" onclick="showSchool('Shrewsbury');">
								<strong>슈르지베리</strong>
								<span>Shrewsbury</span>
							</button>
							<button type="button" class="city_tab" onclick="showSchool('Birmingham');">
								<strong>버밍엄</strong>
								<span>Birmingham</span>
							</button>
							<button type="button" class="city_tab" onclick="showSchool('London');">
								<strong>런던</strong>
								<span>London</span>
							</button>
							<button type="button" class="city_tab" onclick="showSchool('Cambridge');">
								<strong>캠브리지</strong>
								<span>Cambridge</span>
							</button>
							<button type="button" class="city_tab" onclick="showSchool('Oxford');">
								<strong>옥스포드</strong>
								<span>Oxford</span>
							</button>
							<button type="button" class="city_tab" onclick="showSchool('Manchester');">
								<strong>멘체스터</strong>
								<span>Manchester</span>
							</button>
							<button type="button" class="city_tab" onclick="showSchool('NorthHampton');">
								<strong>노스햄튼</strong>
								<span>NorthHampton</span>
							</button>
							<button type="button" class="city_tab" onclick="showSchool('Bournemouth');">
								<strong>본머스</strong>
								<span>Bournemouth</span>
							</button>
							<button type="button" class="city_tab" onclick="showSchool('Brighton');">
								<strong>브라이튼</strong>
								<span>Brighton</span>
							</button>
							<button type="button" class="city_tab" onclick="showSchool('Canterbury');">
								<strong>캔터버리</strong>
								<span>Canterbury</span>
							</button>
							<button type="button" class="city_tab none">
							</button>
						</div>
					</div>
					<!--// 학교탭 -->

					<!-- 학교리스트 -->
					<div class="office_list_wrap">
						<h2 class="office_title">학교 리스트</h2>

						<!-- 목록 -->
						<div class="school_list">
							<div class="sc_group Cardiff">
								<!-- 왼쪽이미지영역 -->
								<div class="img_area">
									<figure class="logo_img">
										<img src="/static/img/early_abroad/uk/logo_ccoex.png" alt="Cardiff Sxith Form College">
									</figure>
									<p class="name">Cardiff Sxith Form College</p>
								</div>
								<!--// 왼쪽이미지영역 -->

								<!-- 오른쪽테이블영역 -->
								<div class="sc_table">
									<table>
										<colgroup>
											<col width="27%">
											<col>
										</colgroup>
										<tbody>
											<tr>
												<th>학교명</th>
												<td>Cardiff Sxith Form College</td>
											</tr>
											<tr>
												<th>지역</th>
												<td>Cardiff</td>
											</tr>
											<tr>
												<th>홈페이지</th>
												<td>
													<a href="http://www.ccoex.com/en">http://www.ccoex.com/en</a>
												</td>
											</tr>
											<tr>
												<th>개설과정</th>
												<td>GCSE/ A-Level용</td>
											</tr>
											<tr>
												<th>보딩비용</th>
												<td>GCSE: £46,400 / A-Level: £46,900</td>
											</tr>
											<tr>
												<th>학교특징</th>
												<td>
													2022년 영국 남녀공학 Sixth Form  Top 3위 보딩스쿨선정<br>
													7명 Oxford, Cambridge 대학 진학<br>
													37명 치대 및 의대 진학
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<!--// 오른쪽테이블영역 -->
							</div>
							<div class="sc_group London Cambridge Manchester">
								<!-- 왼쪽이미지영역 -->
								<div class="img_area">
									<figure class="logo_img">
										<img src="/static/img/early_abroad/uk/logo_abbey.png" alt="Abbey College">
									</figure>
									<p class="name">Abbey College</p>
								</div>
								<!--// 왼쪽이미지영역 -->

								<!-- 오른쪽테이블영역 -->
								<div class="sc_table">
									<table>
										<colgroup>
											<col width="27%">
											<col>
										</colgroup>
										<tbody>
											<tr>
												<th>학교명</th>
												<td>Abbey College</td>
											</tr>
											<tr>
												<th>지역</th>
												<td>London / Cambridge / Manchester</td>
											</tr>
											<tr>
												<th>홈페이지</th>
												<td>
													<a href="https://www.abbeycolleges.co.uk">https://www.abbeycolleges.co.uk</a>
												</td>
											</tr>
											<tr>
												<th>개설과정</th>
												<td>GCSE/ A-Level/ Foundation</td>
											</tr>
											<tr>
												<th>보딩비용</th>
												<td>GCSE: £48,037/ A-Level: £48,037/ Foundation: £48,037</td>
											</tr>
											<tr>
												<th>학교특징</th>
												<td>
													전직 A Level 시험관 출신, 옥스브리지 석박사 학위자 선생들<br>
													A Level 과목수는 30개 이상으로 매우 다양함<br>
													전체학생 중 10% Oxford, Cambridge 대학교 오퍼 및 진학
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<!--// 오른쪽테이블영역 -->
							</div>
							<div class="sc_group Shrewsbury">
								<!-- 왼쪽이미지영역 -->
								<div class="img_area">
									<figure class="logo_img">
										<img src="/static/img/early_abroad/uk/logo_concord.png" alt="Concord College">
									</figure>
									<p class="name">Concord College</p>
								</div>
								<!--// 왼쪽이미지영역 -->

								<!-- 오른쪽테이블영역 -->
								<div class="sc_table">
									<table>
										<colgroup>
											<col width="27%">
											<col>
										</colgroup>
										<tbody>
											<tr>
												<th>학교명</th>
												<td>Concord College</td>
											</tr>
											<tr>
												<th>지역</th>
												<td>Shrewsbury</td>
											</tr>
											<tr>
												<th>홈페이지</th>
												<td>
													<a href="https://concordcollegeuk.com">https://concordcollegeuk.com</a>
												</td>
											</tr>
											<tr>
												<th>개설과정</th>
												<td>GCSE/ A-Level /Pre A-Level</td>
											</tr>
											<tr>
												<th>보딩비용</th>
												<td>GCSE: £48,900 / A-Level: £48,900</td>
											</tr>
											<tr>
												<th>학교특징</th>
												<td>
													영국 사립학교 랭킹 3위<br>
													매년 Oxford, Cambridge대학과 의대 20명 이상 진학<br>
													LSE,Imperial College, UCL 등 최상위 대학 70% 진학<br>
													인터뷰대비, 멘토와의 대화, 관련시험준비를 해줌
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<!--// 오른쪽테이블영역 -->
							</div>
							<div class="sc_group London Cambridge Birmingham">
								<!-- 왼쪽이미지영역 -->
								<div class="img_area">
									<figure class="logo_img">
										<img src="/static/img/early_abroad/uk/logo_mpw.png" alt="MPW">
									</figure>
									<p class="name">MPW</p>
								</div>
								<!--// 왼쪽이미지영역 -->

								<!-- 오른쪽테이블영역 -->
								<div class="sc_table">
									<table>
										<colgroup>
											<col width="27%">
											<col>
										</colgroup>
										<tbody>
											<tr>
												<th>학교명</th>
												<td>MPW</td>
											</tr>
											<tr>
												<th>지역</th>
												<td>London / Cambridge / Birmingham</td>
											</tr>
											<tr>
												<th>홈페이지</th>
												<td>
													<a href="https://www.mpw.ac.uk">https://www.mpw.ac.uk</a>
												</td>
											</tr>
											<tr>
												<th>개설과정</th>
												<td>GCSE/ IGCSE/ A Level / NCUK Foundation/ UAL Diploma</td>
											</tr>
											<tr>
												<th>보딩비용</th>
												<td>GCSE: £60,995 / A-Level: £60,995 / Foundation: £53,995</td>
											</tr>
											<tr>
												<th>학교특징</th>
												<td>
													Cambridge 대학 졸업한 설립자 3인이 옥스브리지 튜도리얼 커리큘럼<br>
													매해 평균 의치대 50명, Oxford, Cambridge 5명, LSE, UCL<br>
													Imperial 등 G5 대학 60-70명 진학<br>
													영국학생 70%, 국제학생 30%의 비율의 이상적인 학업환경
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<!--// 오른쪽테이블영역 -->
							</div>
							<div class="sc_group Oxford">
								<!-- 왼쪽이미지영역 -->
								<div class="img_area">
									<figure class="logo_img">
										<img src="/static/img/early_abroad/uk/logo_oxford.png" alt="Oxford Sixth Form College">
									</figure>
									<p class="name">Oxford Sixth Form College</p>
								</div>
								<!--// 왼쪽이미지영역 -->

								<!-- 오른쪽테이블영역 -->
								<div class="sc_table">
									<table>
										<colgroup>
											<col width="27%">
											<col>
										</colgroup>
										<tbody>
											<tr>
												<th>학교명</th>
												<td>Oxford Sixth Form College</td>
											</tr>
											<tr>
												<th>지역</th>
												<td>Oxford</td>
											</tr>
											<tr>
												<th>홈페이지</th>
												<td>
													<a href="https://www.oxfordsixthformcollege.com">https://www.oxfordsixthformcollege.com</a>
												</td>
											</tr>
											<tr>
												<th>개설과정</th>
												<td>GCSE/ A-Level / BTEC</td>
											</tr>
											<tr>
												<th>보딩비용</th>
												<td>GCSE: £43,047 / A-Level: £43,047/ BTEC: £43,047</td>
											</tr>
											<tr>
												<th>학교특징</th>
												<td>
													60% 이상의 튜터 대부분 Oxford, Cambridge 대학 석사출신<br>
													클래스별 4-5명의 극 소수인원 수업<br>
													영국학생 50%, 국제학생 50% 입시전문 Sixth Form 컬리지
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<!--// 오른쪽테이블영역 -->
							</div>
							<div class="sc_group Oxford">
								<!-- 왼쪽이미지영역 -->
								<div class="img_area">
									<figure class="logo_img">
										<img src="/static/img/early_abroad/uk/logo_overbroeck.png" alt="D' Overbroeck's Oxford">
									</figure>
									<p class="name">D' Overbroeck's Oxford</p>
								</div>
								<!--// 왼쪽이미지영역 -->

								<!-- 오른쪽테이블영역 -->
								<div class="sc_table">
									<table>
										<colgroup>
											<col width="27%">
											<col>
										</colgroup>
										<tbody>
											<tr>
												<th>학교명</th>
												<td>D' Overbroeck's Oxford</td>
											</tr>
											<tr>
												<th>지역</th>
												<td>Oxford</td>
											</tr>
											<tr>
												<th>홈페이지</th>
												<td>
													<a href="http://www.doverbroecks.com">http://www.doverbroecks.com</a>
												</td>
											</tr>
											<tr>
												<th>개설과정</th>
												<td>GCSE / A-Level</td>
											</tr>
											<tr>
												<th>보딩비용</th>
												<td>GCSE: £46,440 / A-Level: £43,350</td>
											</tr>
											<tr>
												<th>학교특징</th>
												<td>
													Independent School 랭킹 4위의 명문사립학교<br>
													영국학생 60%와 국제학생 40%의 이상적인 비율<br>
													지난 5년간 가장 많이 진학한 대학은 UCL, LSE, Imperial <br>
													University of Bristol, Queen Mary, University of London
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<!--// 오른쪽테이블영역 -->
							</div>
							<div class="sc_group London Oxford Brighton Bournemouth">
								<!-- 왼쪽이미지영역 -->
								<div class="img_area">
									<figure class="logo_img">
										<img src="/static/img/early_abroad/uk/logo_kings.png" alt="Kings Education College">
									</figure>
									<p class="name">Kings Education College</p>
								</div>
								<!--// 왼쪽이미지영역 -->

								<!-- 오른쪽테이블영역 -->
								<div class="sc_table">
									<table>
										<colgroup>
											<col width="27%">
											<col>
										</colgroup>
										<tbody>
											<tr>
												<th>학교명</th>
												<td>Kings Education College</td>
											</tr>
											<tr>
												<th>지역</th>
												<td>London / Oxford / Brighton / Bournemouth</td>
											</tr>
											<tr>
												<th>홈페이지</th>
												<td>
													<a href="https://www.kingseducation.com/uk-uni">https://www.kingseducation.com/uk-uni</a>
												</td>
											</tr>
											<tr>
												<th>개설과정</th>
												<td>GCSE / A- Level / Foundation</td>
											</tr>
											<tr>
												<th>보딩비용</th>
												<td>GCSE: £39,826 / A-Level: £39,826 / Foundation: £39,826</td>
											</tr>
											<tr>
												<th>학교특징</th>
												<td>
													A-Level 64% 이상 A*/A 성적취득<br>
													Aston, UClan 대학과 의대 파운데이션 파트너쉽 체결로 입학용이<br>
													UAL Awarding 아트 & 디자인 파운데이션 및 Kingston 대학교 파트너쉽 진학
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<!--// 오른쪽테이블영역 -->
							</div>
							<div class="sc_group Norwich">
								<!-- 왼쪽이미지영역 -->
								<div class="img_area">
									<figure class="logo_img">
										<img src="/static/img/early_abroad/uk/logo_newton.png" alt="INTO Newton A-Level">
									</figure>
									<p class="name">INTO Newton A-Level</p>
								</div>
								<!--// 왼쪽이미지영역 -->

								<!-- 오른쪽테이블영역 -->
								<div class="sc_table">
									<table>
										<colgroup>
											<col width="27%">
											<col>
										</colgroup>
										<tbody>
											<tr>
												<th>학교명</th>
												<td>INTO Newton A-Level</td>
											</tr>
											<tr>
												<th>지역</th>
												<td>Norwich</td>
											</tr>
											<tr>
												<th>홈페이지</th>
												<td>
													<a href="www.intostudy.com/en/universities/newton-a-level-programme">www.intostudy.com/en/universities/newton-a-level-programme</a>
												</td>
											</tr>
											<tr>
												<th>개설과정</th>
												<td>A-LEVEL (Sciences, Medicine, Mathematics, Engineering or Economics)</td>
											</tr>
											<tr>
												<th>보딩비용</th>
												<td>A-Level: £38,857</td>
											</tr>
											<tr>
												<th>학교특징</th>
												<td>
													2018년 71%가 의대 지원생 91% 및 Oxbridge 지원생 100% 오퍼 취득<br>
													영국 STEM  과목 중심 A-Level로 클래스 평균 사이즈 8명의 소규모 집중수업<br>
													Norwich 병원과 UEA 대학 내 풍부한 의학 실습 환경을 갖춰 의대 진학 프로그램 단독운영
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<!--// 오른쪽테이블영역 -->
							</div>
							<div class="sc_group London Cambridge Canterbury">
								<!-- 왼쪽이미지영역 -->
								<div class="img_area">
									<figure class="logo_img">
										<img src="/static/img/early_abroad/uk/logo_cats.png" alt="CATS Global School">
									</figure>
									<p class="name">CATS Global School</p>
								</div>
								<!--// 왼쪽이미지영역 -->

								<!-- 오른쪽테이블영역 -->
								<div class="sc_table">
									<table>
										<colgroup>
											<col width="27%">
											<col>
										</colgroup>
										<tbody>
											<tr>
												<th>학교명</th>
												<td>CATS Global School</td>
											</tr>
											<tr>
												<th>지역</th>
												<td>London / Cambridge / Canterbury</td>
											</tr>
											<tr>
												<th>홈페이지</th>
												<td>
													<a href="htttp://www.catseducation.com">htttp://www.catseducation.com</a>
												</td>
											</tr>
											<tr>
												<th>개설과정</th>
												<td>Pre GCSE / GCSE / Pre A-Level / IB / A-Level / Foundation</td>
											</tr>
											<tr>
												<th>보딩비용</th>
												<td>GCSE: £46,600 / A-Level: £46,600 / Foundation: £46,600</td>
											</tr>
											<tr>
												<th>학교특징</th>
												<td>
													런던 캠퍼스는 상경계열과 아트 & 디자인 특화, 유럽최조 블룸버그 터미널 랩실개설<br>
													캠브리지 캠퍼스는 이공계 STEM 특화 캠퍼스, 기숙사와 강의실 같은 건물<br>
													캔터버리 캠퍼스는 가장 전형적인 영국보딩스쿨로 주니어 학생들과 IB 프로그램
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<!--// 오른쪽테이블영역 -->
							</div>
							<div class="sc_group NorthHampton">
								<!-- 왼쪽이미지영역 -->
								<div class="img_area">
									<figure class="logo_img">
										<img src="/static/img/early_abroad/uk/logo_bic.png" alt="Bosworth Independent College">
									</figure>
									<p class="name">Bosworth Independent College</p>
								</div>
								<!--// 왼쪽이미지영역 -->

								<!-- 오른쪽테이블영역 -->
								<div class="sc_table">
									<table>
										<colgroup>
											<col width="27%">
											<col>
										</colgroup>
										<tbody>
											<tr>
												<th>학교명</th>
												<td>Bosworth Independent College</td>
											</tr>
											<tr>
												<th>지역</th>
												<td>NorthHampton</td>
											</tr>
											<tr>
												<th>홈페이지</th>
												<td>
													<a href="http://www.bosworthcollege.com">http://www.bosworthcollege.com</a>
												</td>
											</tr>
											<tr>
												<th>개설과정</th>
												<td>Pre GCSE / GCSE / Pre A-Level / A-Level / BTEC / Foundation</td>
											</tr>
											<tr>
												<th>보딩비용</th>
												<td>GCSE: £37,980 / A-Level: £37,980 / Foundation / BTEC: £37,980</td>
											</tr>
											<tr>
												<th>학교특징</th>
												<td>
													영국학생 40%와 다양한 국적의 국제학생 비율 60%<br>
													약 70%의 학생들이 Imperial , LSE, Kings, UCL, Machsester, Bristol 등 명문대학 진학<br>
													수학, 과학, 영국 올림피아드 대회출전 및 우수한 성과 수상<br>
													GCSE부터 옥스브릿지, 의대준비반 프로그램 별도로 운영
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<!--// 오른쪽테이블영역 -->
							</div>
							<div class="sc_group Bournemouth">
								<!-- 왼쪽이미지영역 -->
								<div class="img_area">
									<figure class="logo_img">
										<img src="/static/img/early_abroad/uk/logo_bcs.png" alt="Bournemouth Collegiate School">
									</figure>
									<p class="name">Bournemouth Collegiate School</p>
								</div>
								<!--// 왼쪽이미지영역 -->

								<!-- 오른쪽테이블영역 -->
								<div class="sc_table">
									<table>
										<colgroup>
											<col width="27%">
											<col>
										</colgroup>
										<tbody>
											<tr>
												<th>학교명</th>
												<td>Bournemouth Collegiate School</td>
											</tr>
											<tr>
												<th>지역</th>
												<td>Bournemouth</td>
											</tr>
											<tr>
												<th>홈페이지</th>
												<td>
													<a href="https://www.bournemouthcollegiateschool.co.uk">https://www.bournemouthcollegiateschool.co.uk</a>
												</td>
											</tr>
											<tr>
												<th>개설과정</th>
												<td>Pre GCSE / GCSE / Pre A-Level / A-Level</td>
											</tr>
											<tr>
												<th>보딩비용</th>
												<td>GCSE: £36,500 / A-Level: £35,000</td>
											</tr>
											<tr>
												<th>학교특징</th>
												<td>
													영국 전통 보딩스쿨분위기로 영국학생 60%, 국제학생 40%의 균형있는 국적비율 밸런스<br>
													수준높은 스포츠 시설과 아트 스튜디오제공하여 스포츠와 아트관련 수업의 다양한 엑스트라 커리큘럼<br>
													Visual Arts로 Printmaking, Painting, Textiles and Photography 경험하며 다양한 외부 경연대회에 참석하고 수상
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<!--// 오른쪽테이블영역 -->
							</div>
						</div>
						<!--// 목록 -->
					</div>
					<!--// 학교리스트 -->
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


