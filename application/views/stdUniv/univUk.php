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
							<img id="why_uk_univ" src="/static/img/std_univ/uk/img_univ_uk_01.png" alt="왜 영국대학?">
							<img id="uk_univ_100" src="/static/img/std_univ/uk/img_univ_uk_02.png" alt="영국대학 랭킹 100">
							<img id="uk_univ_pathway" src="/static/img/std_univ/uk/img_univ_uk_03.png" alt="영국대학 진학 방법">
							<img id="uk_univ_transfer" src="/static/img/std_univ/uk/img_univ_uk_04.png" alt="영국대학 편입 프로그램">
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


