<?php
include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/head.php');
//include_once($_SERVER['DOCUMENT_ROOT']."/inc/blog_list.php");
?>
<link rel="stylesheet" type="text/css" href="/static/css/sub.css">
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
					<!-- 상품상세 -->
					<div class="bnr_wrap">
						<figure class="bnr">
							<img id="why_us_univ" src="/static/img/std_univ/us/img_univ_us_01.png" alt="왜 미국대학?">
							<img id="us_univ_50" src="/static/img/std_univ/us/img_univ_us_02.png" alt="미국대학 랭킹 50">
							<img id="us_univ_pathway" src="/static/img/std_univ/us/img_univ_us_03.png" alt="미국대학 진학 방법">
							<img id="us_univ_pathway_list" src="/static/img/std_univ/us/img_univ_us_04.png" alt="미국대학 패스웨이 리스트">
						</figure>
					</div>
					<!--// 상품상세 -->
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


