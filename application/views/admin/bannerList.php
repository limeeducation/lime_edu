<?php
	include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/admin/head.php');
?>
<link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js" ></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" ></script>
<script type="text/javascript">

	$(document).ready(function(){
		$(".fixList").hide();
		get_banr_tab('1');
	});

	//리스트 재정렬 활성화
	function changeList(){
		$("#sortable").sortable({disabled: false});
		$(".changeList").hide();
		$(".fixList").show();
	}

	//리스트 정렬 저장 후 비활성화
	function fixList(){
		$("#sortable").sortable({disabled: true});
		$(".fixList").hide();
		$(".changeList").show();
	}
	//수정 페이지 이동
	function go_edit(idx){
			location.href="/adminProd/bannerAdd?type=<?= $type?>&idx="+idx;
	}
	//탭별 리스트 호출
	function get_banr_tab(tab){
		var type = '<?= $type;?>';

		//현재 그려진 리스트 삭제하기
		var ul = document.getElementById("sortable");
		while(ul.hasChildNodes()){
			ul.removeChild(ul.firstChild);
		}

		//해당 탭의 리스트 호출
		$.ajax({
			type: "post",
			url: "/adminProd/getTabListAjax",
			async: false,
			data: {
				"type": type,
				"tab": tab
			},
			dataType: "json",
			beforeSend: function () {
			},
			success: function (data) {
				//리스트 생성
				var list_html = "";
				var banr_chk_yn = "";
				if(data.length > 0){
					for(var i=0; i<data.length; i++){
						banr_chk_yn =  data[i].banr_use_yn == "Y" ? "checked" : "";
						list_html += "<li>";
						list_html += "	<div class='bg-secondary rounded p-2 mt-3'>";
						list_html += "		<form style='display: flex;'>";
						list_html += "			<div class='mb-3 pt-1 col-xl-5' style='height: 270px;'>";
						list_html += "				<img style='width: 100%; height: 100%;' src='"+data[i].banr_img+"'>";
						list_html += "				<div class='form-text'>";
						list_html += "					이미지 권장 사이즈 : @@@@ X @@@@";
						list_html += "				</div>";
						list_html += "			</div>";
						list_html += "			<div class='mb-3 col-xl-6 mx-3'>";
						list_html += "				<label for='banr_img_"+i+"' class='form-label'>이미지 URL</label>";
						list_html += "				<input type='text' class='form-control' id='banr_img_"+i+"' name='img_url_"+i+"' value='"+data[i].banr_img+"' readonly>";
						list_html += "				<label for='banr_link_url_"+i+"' class='form-label mt-3'>연결 URL</label>";
						list_html += "				<input type='text' class='form-control' id='banr_link_url_"+i+"' name='banr_link_url_"+i+"' value='"+data[i].banr_link_url+"' readonly>";
						list_html += "				<div class='form-check form-switch mt-3'>";
						list_html += "					<input class='form-check-input' type='checkbox' role='switch' id='banr_use_yn_"+i+"' name='banr_use_yn_"+i+"' "+banr_chk_yn+" disabled>";
						list_html += "					<label class='form-check-label' for='banr_use_yn_"+i+"'>배너 노출 여부</label>";
						list_html += "				</div>";
						list_html += "				<button type='button' class='btn btn-lg btn-success m-2' onclick='go_edit("+data[i].banr_idx+")'>수정</button>";
						list_html += "				<button type='button' class='btn btn-lg btn-primary m-2' onclick='/adminProd/bannerDel?idx="+data[i].banr_idx+"'>삭제</button>";
						list_html += "			</div>";
						list_html += "		</form>";
						list_html += "	</div>";
						list_html += "</li>";
					}
				}else{
					list_html += "<li>";
					list_html += "	<div class='bg-secondary rounded p-2 mt-3'>";
					list_html += "		등록된 이미지가 없습니다.";
					list_html += "	</div>";
					list_html += "</li>";
				}
				$("#sortable").append(list_html);
			},
			error: function () {
				alert("통신중 장애가 발생 하였습니다.");
			}
		});


	}
</script>
<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        <?php
        	include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/admin/sidebar.php');
        ?>
        <!-- Content Start -->
        <div class="content">

			<?php
				include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/admin/header-gnb.php');
			?>
			<div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-2">
                    <div class="d-flex align-items-center justify-content-between ">
						<h6 class="mb-0"><button type="button" class="btn btn-lg btn-outline-success m-2" onclick="get_banr_tab('1');">TAB 1</button></h6>
						<h6 class="mb-0"><button type="button" class="btn btn-lg btn-outline-success m-2" onclick="get_banr_tab('2');">TAB 2</button></h6>
						<h6 class="mb-0"><button type="button" class="btn btn-lg btn-outline-success m-2" onclick="get_banr_tab('3');">TAB 3</button></h6>
						<a class="text-success" href="/adminProd/bannerAdd?type=<?= $type;?>" >이미지 추가하기</a>
						<a href="javascript:changeList();" class="changeList">순서 변경하기</a>
						<a href="javascript:fixList();" class="fixList">순서 적용하기</a>
					</div>
                </div>
                <ul id="sortable" style="list-style:none;">
				</ul>
            </div>

            <?php
            	include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/admin/footer.php');
            ?>
        </div>
        <!-- Content End -->


	</div>
</body>

</html>
