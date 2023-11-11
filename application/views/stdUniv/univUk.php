<?php
include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/head.php');
//include_once($_SERVER['DOCUMENT_ROOT']."/inc/blog_list.php");
?>
<link rel="stylesheet" type="text/css" href="/static/css/sub.css">
<link rel="stylesheet" type="text/css" href="/static/css/product_detail.css">
<script src="/static/js/map.js"></script>
<script src="/static/js/product_detail.js"></script>
<header>
	<meta name="description" content="라임유학-영국 대학 유학">
	<meta property="og:description" content="라임유학-영국 대학 유학">
	<meta name=”keywords” content=”러셀그룹,영국대학,영국대학순위,리즈대학교,런던대학교,랏거스대학교,영국대학교,요크대학교,버밍엄대학교,옥스포드대학교,옥스퍼드대학교,세필드대학교,리버풀대학교,워릭대학교,글라스고대학교,영국대학교순위,영국대학박람회,엑시터대학교,노팅엄대학교,켄트대학교,영국의대,영국약대,영국의대입시,영국의대입시,영국취업,영국석사,영국치대,영국명문대,노팅엄약대,딤디영국약대,영국약대학비,파운데이션,영국파운데이션,영국파데,런던파데,옥스포드파데,런던파운데이션,뉴캐슬대학교,랑커스터대학교,브리스톨대학교,카디프대학교,임페리얼컬리지,런던정경대학,브라이튼대학교,맨체스터대학교,리버풀대학교,더럼대학교,요크대학교,퀸즈대학교벨파스트,영국학제,UAL,센트럴세인트마틴,영국패션디자인대학,LCF,캠벨대학교,첼시대학교,영국미대,영국미술대학교,런던예술대학교”>
</header>
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


