<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="/static/mdb/css/mdb.rtl.min.css">
<link rel="stylesheet" type="text/css" href="/static/mdb/css/mdb.min.css">
<link rel="stylesheet" type="text/css" href="/static/mdb/css/mdb.rtl.core.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<style>
	.naver_cafe{
		background: url("/static/img/footer/icon_naver_cafe.png");
		height: 28px;
		width: 28px;
		display: block;
	}
	.naver_blog{
    		background: url("/static/img/footer/icon_naver_blog.png");
    		height: 28px;
    		width: 28px;
    		display: block;
    }
    .fix_btn .bt2{background-image:url(/static/img/footer/main_ic2.png); border-radius:50%;background-color:#ffee00;height:65px;width:65px;}
    .fix_btn{right:10px;bottom:10px;z-index:9999;}
    .fix_btn li{border-radius:50%;background-color:#b4d130;width:45px;height:45px;display:flex;align-items: center;justify-content:center; background-repeat:no-repeat;background-size:30px auto;background-position:center;margin-bottom:10px;box-shadow:0 0 2px #000000a6}
	.fix_btn{position:fixed;right:50px;bottom:30%;}
	.fix_btn p{font-size:15px;line-height:15px;color:#666;}
	.fix_btn li{width:65px;height:65px;margin-bottom:20px;background-size:55px auto;}
	.fix_btn li:hover{background-image:none;cursor:pointer}
	.fix_btn li:hover p{display:block;  position: relative;animation:tex .2s;}

	@media (max-width: 576px){
		#apply-modal{max-width: 85% !important;}
    }
</style>
<!-- Remove the container if you want to extend the Footer to full width. -->
  <!-- Footer -->
  <footer
          class="text-dark"
          style="background-color: #ECEFF1"
          >
    <!-- Section: Social media -->
    <section
             class="d-flex justify-content-between p-3"
             style="background-color: #b4d130"
             >
      <!-- Left -->
      <div class="me-5">
        <span></span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div style="display: flex;">
        <a href="https://blog.naver.com/mylimeeducation" target="_blank" class="text-white me-4">
          <i class="naver_blog"></i>
        </a>
        <a href="https://blog.naver.com/PostList.naver?blogId=thelimeinc" target="_blank" class="text-white me-4">
		  <i class="naver_blog"></i>
		</a>
        <a href="https://instagram.com/limeedu?igshid=YmMyMTA2M2Y=" target="_blank" class="text-white me-4">
          <i class="fab fa-instagram fa-2xl"></i>
        </a>
        <a href="https://m.cafe.naver.com/limecanada" target="_blank" class="text-white me-4">
          <i class="naver_cafe"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-4">
        <!-- Grid row -->
        <div class="row mt-6">
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 mx-auto">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">본점</h6>
            <p><i class="fas fa-phone mr-3"></i> 02 2135 7699</p>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 150px; background-color: #7c4dff; height: 2px" />
            <h6 class="text-uppercase fw-bold">서울 강남센터</h6>
            <p><i class="fas fa-home mr-3"></i> 서울특별시 강남구 강남대로 310 유니온센터 1204호</p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">국내 직영센터</h6>
            <p><i class="fas fa-phone mr-3"></i> 대표번호 1688-9806</p>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 150px; background-color: #7c4dff; height: 2px" />
            <h6 class="text-uppercase fw-bold">인천 송도 센터</h6>
            <p><i class="fas fa-home mr-3"></i> 인천광역시 연수구 컨벤시아대로 165 포스코타워 26층</p>
			<h6 class="text-uppercase fw-bold">대구 동성로 센터</h6>
			<p><i class="fas fa-home mr-3"></i> 대구광역시 중구 중앙대로 385-1 3층</p>
			<h6 class="text-uppercase fw-bold">부산 서면 센터</h6>
			<p><i class="fas fa-home mr-3"></i> 부산광역시 진구 동천로 109 삼한골든게이트 빌딩 9층</p>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
		  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
		    <!-- Links -->
		    <h6 class="text-uppercase fw-bold">해외 직영센터</h6>
		    <p><i class="fas fa-phone mr-3"></i> 대표번호 +1 647 427 2006</p>
		    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 150px; background-color: #7c4dff; height: 2px" />
		    <h6 class="text-uppercase fw-bold">캐나다 토론토 센터</h6>
		    <p><i class="fas fa-home mr-3"></i> 55 Eglinton Ave East, Suite 601, Toronto ON M4P 1G8 Canada</p>
			<h6 class="text-uppercase fw-bold">캐나다 벤쿠버 센터</h6>
			<p><i class="fas fa-home mr-3"></i> 595 Burrard st., Vancouver BC V7X 1J1 Canada</p>
		  </div>
		  <!-- Grid column -->

        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)" >
      © 2022 Copyright:
      <a class="text-dark" target="_blank" href="http://mylimeedu.com">mylimeedu.com</a>
    </div>
    <div class="modal fade" id="application_form" tabindex="-1" aria-labelledby="exampleModalLabel" style="z-index:10000;">
      <div class="modal-dialog modal-dialog-centered" id="apply-modal">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">상담 신청하기</h5>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form name='myform' id='myform' method='post'>
				<input type="hidden" name="temp_site" value='limeedu' >
				<input type="hidden" name="tempkbn" value='on' >
				<input type="hidden" name="backURL" value='<?='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']?>' >
				<input type="hidden" name="temp_key" value="<?='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']?>" >
				<div class="mb-3">
					<label for="recipient-name" class="col-form-label">이름</label>
					<input type="text" class="form-control" name="temp_namef" id="stu_name" />
				</div>
				<div class="mb-3">
					<label for="message-text" class="col-form-label">연락처</label>
					<select class="form-control" name="temp_tel_01" id="stu_tel_01">
						<option value="010">010</option>
						<option value="011">011</option>
						<option value="016">016</option>
						<option value="017">017</option>
						<option value="018">018</option>
						<option value="019">019</option>
					</select>
					<input type="text" class="form-control" name="temp_tel_02" id="stu_tel_02" placeholder="0000">
					<input type="text" class="form-control" name="temp_tel_03" id="stu_tel_03" placeholder="0000">
				</div>
				<div class="mb-3">
					<select class="form-control" name="temp_address" id="stu_addr" >
						<option value="">거주지역</option>
						<option value="1">강원</option>
						<option value="2">경기</option>
						<option value="3">경남</option>
						<option value="4">경북</option>
						<option value="5">광주</option>
						<option value="6">대구</option>
						<option value="7">대전</option>
						<option value="8">부산</option>
						<option value="9">서울</option>
						<option value="10">울산</option>
						<option value="11">인천</option>
						<option value="12">전남</option>
						<option value="13">전북</option>
						<option value="14">제주</option>
						<option value="15">충남·세종</option>
						<option value="16">충북</option>
						<option value="17">기타</option>
					</select>
				</div>
				<div class="mb-3">
					<select class="form-control" name="temp_startdate" >
						<option value="">희망 시작일</option>
						<?
							$date=date("Y-m");
							$date_1=date("Y-m",strtotime('+1 month'));
							$date_2=date("Y-m",strtotime('+2 month'));
							$date_3=date("Y-m",strtotime('+3 month'));
							$date_4=date("Y-m",strtotime('+4 month'));
							$date_5=date("Y-m",strtotime('+5 month'));
							$date_6=date("Y-m",strtotime('+6 month'));
							$date_7=date("Y-m",strtotime('+7 month'));
							$date_8=date("Y-m",strtotime('+8 month'));
							$date_9=date("Y-m",strtotime('+9 month'));
						?>
						<option value="<?=$date?>" class="bl"><?=$date?></option>
						<option value="<?=$date_1?>" class="bl"><?=$date_1?></option>
						<option value="<?=$date_2?>" class="bl"><?=$date_2?></option>
						<option value="<?=$date_3?>" class="bl"><?=$date_3?></option>
						<option value="<?=$date_4?>" class="bl"><?=$date_4?></option>
						<option value="<?=$date_5?>" class="bl"><?=$date_5?></option>
						<option value="<?=$date_6?>" class="bl"><?=$date_6?></option>
						<option value="<?=$date_7?>" class="bl"><?=$date_7?></option>
						<option value="<?=$date_8?>" class="bl"><?=$date_8?></option>
						<option value="<?=$date_9?>" class="bl"><?=$date_9?></option>
					</select>
				</div>
				<div class="mb-3">
					<label for="recipient-name" class="col-form-label">문의사항</label>
					<textarea class="form-control" name="temp_stetc" ></textarea>
				</div>
				<div class="mb-3">
					<span class="yac_ttxx"><label for="agree"><input type='checkbox' name='agree' id='agree'  >개인정보 보호에 동의(*) </label> <b class="yac_Btn">[닫기]</b><b class="yac_Btn_cl">[방침보기]</b></a></span>
					<div class="yac_more">
						<div id="privacy">
							<div class="yac_tit">개인정보수집 및 이용에 대한 안내</div>
							<div class="yac_box">
								<div class="taba" id="btn_1" onclick="span_view('1')">수입하는 <br>개인정보의 항목</div>
								<div class="tabb" id="btn_2" onclick="span_view('2')">개인정보의 <br>수집 및 이용목적</div>
								<div class="taba" id="btn_3" onclick="span_view('3')">개인정보의 <br>보유 및 이용기간</div>
							</div>

							<div class="yac_con" id="tab_1" style="border:1px solid #000;">
								<h4>■ 수집하는 개인정보 항목</h4>
								<p> 라임에듀케이션은 원활한 상담진행과 서비스 제공을 위해서 아래와 같은 개인정보를 수집하고 있습니다.
								<p>아래와 같은 개인정보를 수집하고 있습니다.</p>
								<p><b>수집항목</b></p>
								<p>필수항목 : 이름, 휴대전화, 상담형태, 상담지사, 출국예정일</p>
								<p>선택항목 : 예상기간, 희망국가, 관심분야, 관심학교, 기타문의사항</p>
								<p>단, 수집항목은 상담신청과 세미나신청, 유학박람회신청 등과 관계 없이 모두 동일합니다.</p>
								<p><b>개인정보 수집방법</b><p>
								<p>라임에듀케이션은 다음과 같은 방법으로 개인정보를 수집할 수 있습니다.</p>
								<p>- PC 혹은 모바일 홈페이지 상담예약, 전화, 서면양식</p>
							</div>

							<div class="yac_con" id="tab_2" style="border:1px solid #000;">
								<h4>■ 개인정보의 수집 및 이용목적</h4>
								<p>수집한 개인정보를 다음의 목적을 위해 활용합니다.</p>
								<p>- 서비스 제공에 관한 계약 이행</p>
								<p>- 상담관리</p>
								<p>- 고객과의 상담기록 보존, 상담서비스 개선, 서비스 개선을 위한 내부교육자료 활용</p>
								<p>- 접속 빈도 파악 또는 회원의 서비스 이용에 대한 통계</p>
								<p><b>회원 관리</b></p>
								<p>회원제 서비스 이용에 따른 본인확인 , 개인 식별 , 불량
								회원의 부정 이용 방지와 비인가 사용 방지 , 가입 의사 확인 ,
								연령확인 , 불만처리 등 민원처리 , 고지사항 전달 </p>
								<p><b>마케팅 및 광고에 활용</b></p>
								<p>이벤트 등 광고성 정보 전달 , 접속 빈도 파악 또는 회원의 서비스 이용에 대한 통계 </p>
							</div>

							<div class="yac_con" id="tab_3" style="border:1px solid #000;">
								<h4>■ 개인정보의 보유 및 이용기간</h4>
								<p>원칙적으로, 개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 지체 없이 파기합니다. </p>
								<p>단, 관계법령의 규정에 의하여 보존할 필요가 있는 경우 회사는 아래와 같이 관계법령에서 정한 일정한 기간 동안 회원정보를 보관합니다.</p>
								<p>&nbsp;</p>
								<p><b>보존 항목 : </b> 결제기록</p>
								<p><b>보존 근거 : </b>계약 또는 청약철회 등에 관한 기록</p>
								<p><b>보존 기간 : </b>3년</p>
								<p><b>계약 또는 청약철회 등에 관한 기록 : </b>5년 (전자상거래등에서의 소비자보호에 관한 법률)</p>
								<p><b>대금결제 및 재화 등의 공급에 관한 기록 : </b>5년 (전자상거래등에서의 소비자보호에 관한 법률)</p>
								<p><b>소비자의 불만 또는 분쟁처리에 관한 기록 : </b>3년 (전자상거래등에서의 소비자보호에 관한 법률)</p>
							</div>
						</div>
					</div>
				</div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" onclick="checkInput();">상담 신청하기</button>
          </div>
        </div>
      </div>
    </div>

    <div class="fix_btn">
        <ul>
            <li>
            	<button type="button" class="btn btn-primary bt2" data-toggle="modal" data-target="#application_form">
                </button>
            </li>
        </ul>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
<!-- End of .container -->
<script type="text/javascript">

    function checkInput() {
        var form = $("#myform");
        var kbn='true';
        if($('#stu_name').val() == '') {
            alert("이름을 입력하세요");
            $('#stu_name').focus();
            return false;
        }else if($('#stu_tel_02').val() == '') {
            alert("전화번호를 입력해 주세요");
            $('#stu_tel_02').focus();
            return false;
        }else if($('#stu_tel_03').val() == '') {
            alert("전화번호를 입력해 주세요");
            $('#stu_tel_03').focus();
            return false;
        }else if($('#stu_addr').val() == '') {
            alert("거주지역을 선택해주세요");
            $('#stu_addr').focus();
            return false;
        }else if(!$('#agree').is(':checked')) {
            alert("개인정보 보호에 동의해주세요");
            $('#agree').focus();
            return false;
        }

        $(function(){
            var $form = $("#myform");
            var params = $form.serialize();
            $.ajax({
                type: "post",
                url: "/RnQuickAct",
                data: params,
                contentType : "application/x-www-form-urlencoded;charset=utf-8",
                success: function(rtnData){
					console.log(rtnData);
                    if(rtnData == 'ok'){
                        alert("상담예약이 완료되었습니다.");
                    }else{
                        alert("예약이 완료되지 않았습니다. 잠시후 다시 시도해 주세요.");
                    }

                $form.find("textarea, select, text").val("");

                },
                complete : function(){

                },
                error : function(xhr, status, error){
                	alert(error);
                	console.log(xhr);
                	console.log(status);
                	console.log(error);
                }
            });
        });
    }

	$(".yac_Btn").click(function(){
		$(".yac_more").slideToggle(500);
		$(".yac_Btn").css("display","none");
		$(".yac_Btn_cl").css("display","inline-block");
		span_view('1');
	});
	$(".yac_Btn_cl").click(function(){
		$(".yac_more").slideToggle(500);
		$(".yac_Btn").css("display","inline-block");
		$(".yac_Btn_cl").css("display","none");
	});

	function span_view(a){
		for(var i="1"; i<"4"; i++){
			document.getElementById('tab_'+i).style.display="none";
			document.getElementById('btn_'+i).style.background="#ddd";
			document.getElementById('btn_'+i).style.color="#222";
		}
		document.getElementById('tab_'+a).style.display="block";
		document.getElementById('btn_'+a).style.background="#7591f8";
		document.getElementById('btn_'+a).style.color="#fff";
	}

	$( document ).ready(function() {
       $(".yac_Btn_cl").click();
    });
</script>
