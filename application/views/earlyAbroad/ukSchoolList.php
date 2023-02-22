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
							<area target="" alt="카디프" title="카디프" href="" coords="774,1010,686,956" shape="rect">
							<area target="" alt="슈르지베리" title="슈르지베리" href="" coords="735,850,836,898" shape="rect">
							<area target="" alt="버밍엄" title="버밍엄" href="" coords="912,900,812,940" shape="rect">
							<area target="" alt="런던" title="런던" href="" coords="921,990,987,1032" shape="rect">
							<area target="" alt="캠브리지" title="캠브리지" href="" coords="954,955,1040,910" shape="rect">
							<area target="" alt="옥스포드" title="옥스포드" href="" coords="914,993,842,1036" shape="rect">
							<area target="" alt="멘체스터" title="멘체스터" href="" coords="798,826,906,778" shape="rect">
							<area target="" alt="노스햄튼" title="노스햄튼" href="" coords="854,978,950,945" shape="rect">
							<area target="" alt="본머스" title="본머스" href="" coords="756,1060,875,1099" shape="rect">
							<area target="" alt="브라이튼" title="브라이튼" href="" coords="933,1108,1001,1069" shape="rect">
							<area target="" alt="캔터버리" title="캔터버리" href="" coords="1005,1071,1100,1020" shape="rect">
						</map>
						<!--// 이미지맵 링크 -->
					</div>
					<!--// 영국지도 -->

					<!-- 학교탭 -->
					<div class="school_tab_wrap">
						<div class="uk_tab_area">
							<button type="button" class="uk_tab">
								<strong>영국</strong>
								<span>United Kingdom</span>
							</button>
						</div>
						<div class="city_tab_area">
							<button type="button" class="city_tab">
								<strong>카디프</strong>
								<span>Cardiff</span>
							</button>
							<button type="button" class="city_tab">
								<strong>슈르지베리</strong>
								<span>Shrewsbury</span>
							</button>
							<button type="button" class="city_tab">
								<strong>버밍엄</strong>
								<span>Birmingham</span>
							</button>
							<button type="button" class="city_tab">
								<strong>런던</strong>
								<span>London</span>
							</button>
							<button type="button" class="city_tab">
								<strong>캠브리지</strong>
								<span>Cambridge</span>
							</button>
							<button type="button" class="city_tab">
								<strong>옥스포드</strong>
								<span>Oxford</span>
							</button>
							<button type="button" class="city_tab">
								<strong>멘체스터</strong>
								<span>Manchester</span>
							</button>
							<button type="button" class="city_tab">
								<strong>노스햄튼</strong>
								<span>Northampton</span>
							</button>
							<button type="button" class="city_tab">
								<strong>본머스</strong>
								<span>Bournemouth</span>
							</button>
							<button type="button" class="city_tab">
								<strong>브라이튼</strong>
								<span>Brighton</span>
							</button>
							<button type="button" class="city_tab">
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
							<div class="sc_group">
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
							<div class="sc_group">
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
												<td>London/ Cambridge/ Manchester</td>
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
							<div class="sc_group">
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
												<td>Shrewbury</td>
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
							<div class="sc_group">
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
												<td>London/ Cambridge / Birmingham</td>
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
							<div class="sc_group">
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
						</div>
						<!--// 목록 -->

						<!-- 페이징 -->
						<div class="paging">
							<a href="#none" class="btn_arr prev"></a>
							<a href="#none" class="num on">1</a><!-- 현재페이지class="on"추가 -->
							<a href="#none" class="num ">2</a>
							<a href="#none" class="num ">3</a>
							<a href="#none" class="btn_arr next"></a>
						</div>
						<!--// 페이징 -->
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


