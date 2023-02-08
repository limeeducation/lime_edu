<?php
	include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/admin/head.php');
?>
<link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js" ></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" ></script>
<script type="text/javascript">
	var current_tab = '1';
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
		//현재 순서대로 노출 순서 적용
		updateSeq();
	}

	//현재 탭의 노출순서 적용
	function updateSeq(){
		var tab = $("input[name=banr_tab]").val();
		var no = 0;
		var success = 0;
		var fail = 0;
		$(".seq").each(function(i, box) {
			$(this).val(i);
			var banner_idx = $(this).prop("id");
			var idx = banner_idx.substr(4);
			$.ajax({
				type: "post",
				url: "/adminProd/updateBanrSeq",
				async: false,
				data: {
					"idx": idx,
					"seq": i
				},
				dataType: "json",
				beforeSend: function () {
				},
				success: function (data) {
					success++;
				},
				error: function () {
					fail++;
				}
			});
			no++;
		});
		if(no == success){
			alert("노출 순서가 변경되었습니다.");
		}else if(fail > 0){
			alert("노출 순서 변경에 실패했습니다.");
		}else{
			alert("오류가 발생했습니다. 관리자에게 문의해주세요");
		}
	}
	//수정 페이지 이동
	function go_edit_banner(idx){
		location.href="/adminProd/bannerAdd?type=<?= $type?>&idx="+idx;
	}
	//배너 삭제
	function go_del_banner(idx){
		location.href="/adminProd/bannerDel?idx="+idx;
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
				var img_rec_size = "";
				var img_div = "";
				var nation = "";
				if(type == 'event'){
					img_rec_size = "1100px X 480px";
					img_div = "<div class='mb-3 pt-1 col-xl-5' style='height: 270px;'>";
				}else{
					img_rec_size = "300px X 250px";
					img_div = "<div class='mb-3 pt-1 col-xl-5' style='height: 250px; width: 300px;'>";
				}

				if(data.length > 0){
					for(var i=0; i<data.length; i++){
					    if(data[i].banr_tab_2 == "1"){
					        nation = "미국";
					    }else if(data[i].banr_tab_2 == "2"){
                            nation = "영국";
                        }else if(data[i].banr_tab_2 == "3"){
                            nation = "캐나다";
                        }else if(data[i].banr_tab_2 == "4"){
                            nation = "필리핀";
                        }else{
                            nation = "국가 선택이 필요합니다.";
                        }
						banr_chk_yn =  data[i].banr_use_yn == "Y" ? "checked" : "";
						list_html += "<li class='banner'>";
						list_html += "	<input type='hidden' id='banr"+data[i].banr_idx+"' class='seq'>";
						list_html += "	<input type='hidden' name='banr_tab' value='"+data[i].banr_tab+"'>";
						list_html += "	<div class='bg-secondary rounded p-2 mt-3'>";
						list_html += "		<form style='display: flex;'>";
						list_html += img_div;
						list_html += "				<img style='width: 100%; height: 100%;' src='"+data[i].banr_img+"'>";
						list_html += "				<div class='form-text'>";
						list_html += "					이미지 권장 사이즈 : ";
						list_html += img_rec_size;
						list_html += "				</div>";
						list_html += "			</div>";
						list_html += "			<div class='mb-3 col-xl-6 mx-3'>";
						list_html += "				<label for='banr_img_"+i+"' class='form-label'>이미지 URL</label>";
						list_html += "				<input type='text' class='form-control' id='banr_img_"+i+"' name='img_url_"+i+"' value='"+data[i].banr_img+"' readonly>";
						if(type == "normal" && nation != ""){
						    list_html += "				<label for='banr_img_"+i+"' class='form-label'>국가 종류</label>";
						    list_html += "				<input type='text' class='form-control' id='banr_img_"+i+"' name='img_url_"+i+"' value='"+nation+"' readonly>";
						}
						list_html += "				<label for='banr_link_url_"+i+"' class='form-label mt-3'>연결 URL</label>";
						list_html += "				<input type='text' class='form-control' id='banr_link_url_"+i+"' name='banr_link_url_"+i+"' value='"+data[i].banr_link_url+"' readonly>";
						list_html += "				<div class='form-check form-switch mt-3'>";
						list_html += "					<input class='form-check-input' type='checkbox' role='switch' id='banr_use_yn_"+i+"' name='banr_use_yn_"+i+"' "+banr_chk_yn+" disabled>";
						list_html += "					<label class='form-check-label' for='banr_use_yn_"+i+"'>배너 노출 여부</label>";
						list_html += "				</div>";
						list_html += "				<button type='button' class='btn btn-lg btn-success m-2' onclick='go_edit_banner("+data[i].banr_idx+")'>수정</button>";
						list_html += "				<button type='button' class='btn btn-lg btn-primary m-2' onclick='go_del_banner("+data[i].banr_idx+")'>삭제</button>";
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
		$(".tab_btn").css("color", "#198754");
		$(".tab_btn").css("border-color", "#198754");
		$(".tab_btn").css("background-color", "unset");
		var cur_tab = "tab_"+tab;
		$("#"+cur_tab).css("color", "white");
		$("#"+cur_tab).css("background-color", "#198754");
	}
</script>
<body>
    <div class="container-fluid position-relative d-flex p-0">
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
                    	<?php if($type == "normal") : ?>
							<h6 class="mb-0"><button type="button" class="btn btn-lg btn-outline-success m-2 tab_btn" id="tab_1" onclick="get_banr_tab('1');">메인 - 어학연수</button></h6>
							<h6 class="mb-0"><button type="button" class="btn btn-lg btn-outline-success m-2 tab_btn" id="tab_2" onclick="get_banr_tab('2');">메인 - 초중고 유학</button></h6>
							<h6 class="mb-0"><button type="button" class="btn btn-lg btn-outline-success m-2 tab_btn" id="tab_3" onclick="get_banr_tab('3');">메인 - 대학유학</button></h6>
							<h6 class="mb-0"><button type="button" class="btn btn-lg btn-outline-success m-2 tab_btn" id="tab_4" onclick="get_banr_tab('4');">메인 - 컬리지 유학 후 이민/자녀무상</button></h6>
							<h6 class="mb-0"><button type="button" class="btn btn-lg btn-outline-success m-2 tab_btn" id="tab_5" onclick="get_banr_tab('5');">해외대학 유학</button></h6>
							<h6 class="mb-0"><button type="button" class="btn btn-lg btn-outline-success m-2 tab_btn" id="tab_6" onclick="get_banr_tab('6');">조기유학</button></h6>
							<h6 class="mb-0"><button type="button" class="btn btn-lg btn-outline-success m-2 tab_btn" id="tab_7" onclick="get_banr_tab('7');">어학연수</button></h6>
							<h6 class="mb-0"><button type="button" class="btn btn-lg btn-outline-success m-2 tab_btn" id="tab_8" onclick="get_banr_tab('8');">가족연수/캠프/스쿨링</button></h6>
						<?php endif; ?>
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
