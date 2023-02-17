<?php
include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/head.php');
//include_once($_SERVER['DOCUMENT_ROOT']."/inc/blog_list.php");
?>
<link rel="stylesheet" type="text/css" href="/static/css/product_detail.css">
<script src="/static/js/map.js"></script>
<script src="/static/js/product_detail.js"></script>
<body>
    <script type="text/javascript">
		function go_back(){
			history.back();
		}
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

					<!-- 교육청리스트 -->
					<div class="detail_table_wrap">
						<h2 class="office_title">교육청 리스트</h2>

						<!-- 상세보기버튼 -->
						<a href="javascript:go_back();" class="btn_detail">
							<span>나가기</span>
						</a>
						<!--// 상세보기버튼 -->

						<!-- 상세테이블 -->
						<div class="detail_table">
							<!-- 이미지영역 -->
							<div class="logo_img_area">
								<figure class="logo_img">
									<img src="/static/img/early_abroad/ca/logo_<?= $school;?>.png" alt="Tdsb">
								</figure>
								<p class="name">Toronto District School Board</p>
							</div>
							<!--// 이미지영역 -->

							<!-- 테이블 -->
							<div class="d_table">
								<table>
									<colgroup>
										<col width="26%">
										<col width="74%">
									</colgroup>
									<tbody>
										<tr>
											<th>기관/학교 명</th>
											<td class="tc">Toronto District School Board</td>
										</tr>
										<tr>
											<th>주소</th>
											<td class="tc">5050 Yonge Street, Toronto, Ontario M2N 5N8</td>
										</tr>
										<tr>
											<th>홈페이지</th>
											<td class="tc">
												<a href="www.tdsb.on.ca">www.tdsb.on.ca</a>
											</td>
										</tr>
										<tr>
											<th>지역 설명</th>
											<td>
												<p class="lh28">토론토 시의 정규교육 과정을 관할하고 있으며, 산하에 584개의 학교가 운영되는 캐나다 최대규모의 교육청입니다.</p>
												<p>1. 매년 국제학생이 입학 가능한 고등학교들을 선정하며, 선정된 학교들만 입학수속이 가능합니다.</p>
												<p>2. 유치원~초중등학교 입학의 경우, 학교 권역안의 주소지 증명이 입학수속에 필요합니다.</p>
												<p>3. 토론토 전지역에 걸쳐 다양한 학교가 분포되어 있으며, 교복은 따로 없습니다.</p>
												<p>4. 재학생들의 국적, 문화배경이 매우 다양하며, 각 학교의 지도교사(가이던스)들이 국제학생에 대한 이해도가 높아 보다 빠르고 안정적인 현지적응이 가능합니다.</p>
											</td>
										</tr>
										<tr>
											<th>교육청 정보 및 특징 </th>
											<td>
												<p class="lh28">캐나다 최대 교육청</p>
												<p>-북미에서 4번째로 큰, 캐나다 최대 교육청</p>
												<p>-K-G8 초등학교 / G9 / G9 -G12 중, 고등학교로 구분</p>
												<p>-총 600 개의 학교에서 259,000 여명 재학 중</p>
												<p>-검증된 선생님들의 높은 수준의 교육제공</p>
												<p>-토론토 교육청은 토론토 전 지역에 걸쳐 관할</p>
												<p>-다양한 국제학생들의 체류로 학구열이 높은 North York 지역이 인기가 많음</p>
											</td>
										</tr>
										<tr>
											<th>입학 정보</th>
											<td>
												<p class="lh30">1. 입학 가능 시기</p>
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
												<p>총: $16,350</p>
											</td>
										</tr>
										<tr>
											<th>추천 학교</th>
											<td>
												<p class="lh28">Elementary</p>
												<p>- Mckee Public School, Avondale Public School</p>
												<p class="lh28">Secondary</p>
												<p>- A.Y Jackson Secondary School, William Lyon Mackenzie Collegiate Institute</p>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<!--// 테이블 -->
						</div>
						<!--// 상세테이블 -->
					</div>
					<!--// 교육청리스트 -->

					<!-- 추천 상품 [불필요시 삭제] -->
					<div class="recom_tab">
						<h2 class="area_tab_tit">추천 상품</h2>
						<div class="area_tab_wrap">
							<a href="#none" class="area_tab can">
								<span class="blind">캐나다</span>
							</a>
							<a href="#none" class="area_tab ont">
								<span class="blind">온타리오주</span>
							</a>
							<a href="#none" class="area_tab brt">
								<span class="blind">브리티시 컬럼비아주</span>
							</a>
						</div>
					</div>
					<!--// 추천 상품 [불필요시 삭제] -->
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


