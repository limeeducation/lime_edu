<?php
include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/head.php');
//include_once($_SERVER['DOCUMENT_ROOT']."/inc/blog_list.php");
?>
<body>
    <script type="text/javascript">
    $(document).ready(function(){
    	$('.cs_pop').fadeIn(200);
		$('body').addClass('dimed');
		// 취소버튼 메인으로가기
		$('.cancel').on('click', function(){
			location.href="/";
		});

		// 딤드 클릭시 닫기
		$(document).mouseup(function (e){
			location.href="/";
		});
    });
    </script>
	<div id="wrap">
	<?php
    include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/header.php');
    ?>
    	<div id="container">
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
</body>
</html>
