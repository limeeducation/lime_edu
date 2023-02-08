<?php
	include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/admin/head.php');
?>
<link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js" ></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" ></script>
<script>
	$(function(){
		$("#btn_student_save").bind('click',function(){
			if('' == $('#conName').val()) alert('이름을 입력해주세요.');
			else if('' == $('#conContact').val()) alert('연락처를 입력해주세요.');
			else if('' == $('#conManager').val()) alert('담당자를 배정해주세요.');
			else{
				$( "#student_save" ).submit();
			}
		})
	});

	$(document).ready(function(){
		if('<?= $stat;?>' == 'edit'){
			$("#conName").val("<?= empty($con_name) ? '' : $con_name;?>");
			$("#conContact").val("<?= empty($con_contact) ? '' : $con_contact;?>");
			$("#conDate").val("<?= empty($con_date) ? '' : $con_date;?>");
			$("#conTime").val("<?= empty($con_time) ? '' : $con_time;?>");
			$('#conType').val("<?= empty($con_type) ? '' : $con_type;?>").prop("selected",true);
			$('#conOffice').val("<?= empty($con_office) ? '' : $con_office;?>").prop("selected",true);
			$('#conStudy').val("<?= empty($con_study) ? '' : $con_study;?>").prop("selected",true);
			$('#conNatio').val("<?= empty($con_natio) ? '' : $con_natio;?>").prop("selected",true);
			$("#conStartDt").val("<?= empty($con_start_dt) ? '' : $con_start_dt;?>");
			$("#conDetails").val("<?= empty($con_details) ? '' : $con_details;?>");
			$("#conManager").val("<?= empty($con_manager) ? '' : $con_manager;?>");
			if("<?= $con_contact_yn;?>" == 'Y'){
				$("input[name='con_contact_yn']").prop("checked", true);
			}
			if("<?= $con_regist_yn;?>" == 'Y'){
            	$("input[name='con_regist_yn']").prop("checked", true);
            }
		}
	});

	function del_student(){
		location.href="/adminStudent/studentDelete<?= empty($idx) ? '' : '/'.$idx;?>";
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
                <div class="bg-secondary rounded h-100 p-4">
					<h6 class="mb-4">상담 학생 <?= $stat == 'edit' ? '수정' : '등록';?></h6>
					<?php if($stat == "edit") :?>
						<h6 class="mb-4">상담 신청 시간 : <?= $con_reg_dt;?></h6>
					<?php endif;?>
					<form action="/adminStudent/studentSave" id="student_save" method="post">
						<input type="hidden" class="form-control" name="edit_type" value='<?= $stat;?>'>
						<?php if($stat == "edit") :?>
							<input type="hidden" class="form-control" name="con_idx" value="<?= $con_idx;?>">
						<?php endif;?>
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="conName" name="con_name">
							<label for="conName" class="form-label">이름</label>
						</div>
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="conContact" name="con_contact">
							<label for="conContact" class="form-label">연락처(전화번호 or 카카오톡 ID)</label>
						</div>
						<div class="form-floating mb-3">
                        	<input type="text" class="form-control" id="conDate" name="con_date">
                        	<label for="conDate" class="form-label">상담 신청일</label>
                        </div>
                        <div class="form-floating mb-3">
                        	<input type="text" class="form-control" id="conTime" name="con_time">
                        	<label for="conTime" class="form-label">상담 시간</label>
                        </div>
                        <div class="form-floating mb-3">
                        	<select class="form-select" id="conType" name="con_type">
                        		<option value="">상담 방식 선택</option>
                        		<option value="call">전화상담</option>
                        		<option value="visit">방문상담</option>
                        	</select>
                        	<label for="conType" class="form-label">희망 상담 방식</label>
                        </div>
						<div class="form-floating mb-3">
							<select class="form-select" id="conOffice" name="con_office">
								<option value="">센터 선택</option>
								<option value="서울">서울</option>
								<option value="대전">대전</option>
								<option value="송도">송도</option>
								<option value="대구">대구</option>
								<option value="부산">부산</option>
								<option value="제주">제주</option>
							</select>
							<label for="conOffice" class="form-label">상담 센터</label>
						</div>
						<div class="form-floating mb-3">
                        	<select class="form-select" id="conStudy" name="con_study">
                        		<option value="">유학과정 선택</option>
                        		<option value="1">어학연수</option>
                        		<option value="2">전문과정(테솔/통번역/인턴쉽 등)</option>
                        		<option value="3">교환학생(중고생)</option>
                        		<option value="4">조기유학(초)</option>
                        		<option value="5">조기유학(중)</option>
                        		<option value="6">조기유학(고)</option>
                        		<option value="7">영어캠프(초중고)</option>
                        		<option value="8">컬리지</option>
                        		<option value="9">학사</option>
                        		<option value="10">석사</option>
                        		<option value="11">박사</option>
                        	</select>
                        	<label for="conStudy" class="form-label">유학과정</label>
                        </div>
                        <div class="form-floating mb-3">
                        	<select class="form-select" id="conNatio" name="con_natio">
                        		<option value="">국가 선택</option>
                        		<option value="us">미국</option>
                        		<option value="uk">영국</option>
                        		<option value="ca">캐나다</option>
                        		<option value="aus">호주</option>
                        		<option value="phil">필리핀</option>
                        	</select>
                        	<label for="conNatio" class="form-label">상담 국가</label>
                        </div>
                        <div class="form-floating mb-3">
                        	<input type="text" class="form-control" id="conStartDt" name="con_start_dt">
                        	<label for="conStartDt" class="form-label">희망 시작 시기</label>
                        </div>
						<div class="form-floating mb-3">
							<textarea class="form-control" id="conDetails" name="con_details" style="height:300px;"></textarea>
                            <label for="conDetails" class="form-label">문의 내용</label>
						</div>
						<div class="form-floating mb-3">
                        	<input type="text" class="form-control" id="conManager" name="con_manager">
                        	<label for="conManager" class="form-label">담당자</label>
                        </div>
						<div class="form-check form-switch">
							<input class="form-check-input" type="checkbox" role="switch" id="conContactYn" name="con_contact_yn" >
							<label class="form-check-label" for="conContactYn">연락 여부</label>
						</div>
						<div class="form-check form-switch">
                        	<input class="form-check-input" type="checkbox" role="switch" id="conRegistYn" name="con_regist_yn" >
                        	<label class="form-check-label" for="conRegistYn">등록 여부</label>
                        </div>
						<button type="button" class="btn btn-success" id="btn_student_save">학생 정보 저장</button>
						<button type="button" class="btn btn-primary" onclick="history.back()" id="col_cancel">취소</button>
						<?php if($stat == "edit") :?>
							<button type="button" class="btn btn-success rounded-pill m-2" onclick="javascript:del_student();">삭제</button>
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
