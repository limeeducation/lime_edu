<?php
include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/head.php');
//include_once($_SERVER['DOCUMENT_ROOT']."/inc/blog_list.php");
?>
<link rel="stylesheet" type="text/css" href="/static/css/product_detail.css">
<script src="/static/js/map.js"></script>
<script src="/static/js/product_detail.js"></script>
<header>
	<meta name="description" content="라임유학-캐나다 관리형 조기유학">
	<meta property="og:description" content="라임유학-캐나다 관리형 조기유학">
	<meta name=”keywords” content=”밴쿠버관리형유학,캐나다관리형유학,토론토관리형유학,워털루관리형유학,캘거리관리형유학,알버타관리형유학,골든힐교육청,골든힐관리형,메이플릿지관리형유학,온타리오관리형유학,BC관리형유학,공립교육청기숙사관리형,버논관리형”>
</header>
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
								<p class="name"><?= $school_name[$school];?></p>
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
											<td class="tc"><?= $school_name[$school];?></td>
										</tr>
										<tr>
											<th>주소</th>
											<td class="tc"><?= $address[$school];?></td>
										</tr>
										<tr>
											<th>홈페이지</th>
											<td class="tc">
												<a href="www.tdsb.on.ca"><?= $url[$school];?></a>
											</td>
										</tr>
										<tr>
											<th>지역 설명</th>
											<td>
												<?= $area[$school];?>
											</td>
										</tr>
										<tr>
											<th>교육청 정보 및 특징 </th>
											<td>
												<?= $char[$school];?>
											</td>
										</tr>
										<tr>
											<th>입학 정보</th>
											<td>
												<?= $entry[$school];?>
											</td>
										</tr>
										<tr>
											<th>추천 학교</th>
											<td>
												<?= $recom[$school];?>
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
					<div class="recom_tab" style="display:none;">
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


