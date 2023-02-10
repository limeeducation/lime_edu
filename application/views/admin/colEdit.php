<?php
	include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/admin/head.php');
?>
<link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js" ></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" ></script>
<script type="text/javascript" src="/lib/smarteditor2/js/HuskyEZCreator.js" charset="utf-8"></script>
<script>
	$(document).ready(function(){
		if('<?= $stat;?>' == 'edit'){
			$('#colSubject').val("<?= empty($col_subject) ? '' : $col_subject;?>").prop("selected",true);
			$("#colThumb").val("<?= empty($col_thumb) ? '' : $col_thumb;?>");
			$("#colTitle").val("<?= empty($col_title) ? '' : $col_title;?>");
			$("#colCnts").val("<?= empty($col_cnts) ? '' : $col_cnts;?>");
			if("<?= empty($use_yn) ? 'Y' : $use_yn;?>" == 'N'){
				$("input[name='use_yn']").prop("checked", false);
			}
		}
	});

	function del_col(){
		location.href="/adminProd/columnDelete<?= empty($idx) ? '' : '/'.$idx;?>";
	}

	//스마트 에디터 스크립트
	$(function(){
		//전역변수
		var obj = [];
		//스마트에디터 프레임생성
		nhn.husky.EZCreator.createInIFrame({
			oAppRef: obj,
			elPlaceHolder: "colCnts",
			sSkinURI: "/lib/smarteditor2/SmartEditor2Skin.html",  // 본인 경로게 맞게 수정
			htParams : {
				// 툴바 사용 여부
				bUseToolbar : true,
				// 입력창 크기 조절바 사용 여부
				bUseVerticalResizer : true,
				// 모드 탭(Editor | HTML | TEXT) 사용 여부
				bUseModeChanger : true,
			},
			fCreator: "createSEditor2"
		});
		function pasteHTML(filepath) {
			var sHTML = '';
			oEditors.getById["colCnts"].exec("PASTE_HTML", [sHTML]);
		}
		//칼럼 저장
		$("#btn_col_save").bind('click',function(){
			//칼럼 내용 삽입
			obj.getById["colCnts"].exec("UPDATE_CONTENTS_FIELD", []);
			if( '' == $("select[name=col_subject]").val() ) alert('칼럼 주제를 선택해주세요.');
			else if('' == $('#colTitle').val()) alert('칼럼 제목을 입력해주세요.');
			else if('' == $('#colThumb').val()) alert('썸네일 URL을 입력해주세요.');
			else if('' == $('#colCnts').val() || '<p><br></p>' == $('#colCnts').val()) alert('칼럼 내용을 입력해주세요.');
			else{
				$( "#column_save" ).submit();
			}
		})

	});
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
                <div class="bg-secondary rounded h-100 p-4">
					<h6 class="mb-4">칼럼 <?= $stat == 'edit' ? '수정' : '등록';?></h6>
					<form action="/adminProd/columnSave" id="column_save" method="post" enctype="MULTIPART/FORM-DATA">
						<input type="hidden" class="form-control" name="edit_type" value='<?= $stat;?>'>
						<?php if($stat == "edit") :?>
							<input type="hidden" class="form-control" name="col_idx" value="<?= $idx;?>">
						<?php endif;?>
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="colTitle" name="col_title">
							<label for="colTitle" class="form-label">칼럼 제목</label>
						</div>
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="colThumb" name="col_thumb">
							<label for="colThumb" class="form-label">썸네일 url</label>
						</div>
						<div class="form-floating mb-3">
							<select class="form-select" id="colSubject" name="col_subject">
								<option value="">주제 선택</option>
								<option value="1">해외대학 유학</option>
								<option value="2">조기 유학</option>
								<option value="3">어학 연수</option>
								<option value="4">가족연수/캠프/스쿨링</option>
							</select>
							<label for="colSubject" class="form-label">칼럼 주제</label>
						</div>
						<div class="form-floating mb-3">
							<input type="textarea" class="form-control" id="colCnts" name="col_cnts">
                            <label for="colCnts" class="form-label">칼럼 내용</label>
						</div>
						<div class="form-check form-switch">
							<input class="form-check-input" type="checkbox" role="switch" id="colUseYn" name="use_yn" checked="checked">
							<label class="form-check-label" for="colUseYn">칼럼 노출 여부</label>
						</div>
						<button type="button" class="btn btn-success" id="btn_col_save">칼럼 저장</button>
						<button type="button" class="btn btn-primary" onclick="history.back()" id="col_cancel">취소</button>
						<?php if($stat == "edit") :?>
							<button type="button" class="btn btn-success rounded-pill m-2" onclick="javascript:del_col();">삭제</button>
						<?php endif;?>
					</form>
				</div>
            </div>
            <?php
            	include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/admin/footer.php');
            ?>
        </div>
        <!-- Content End -->


	</div>
</body>

</html>
