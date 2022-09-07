<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script type="text/javascript" src="/static/mdb/src/js/mdb.free.js"></script>
<link rel="stylesheet" type="text/css" href="/static/mdb/css/mdb.rtl.min.css">
<link rel="stylesheet" type="text/css" href="/static/mdb/css/mdb.min.css">
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
    .fix_btn .bt2{background-image:url(/static/img/footer/main_ic2.png); border-radius:50%;background-color:#fff;height:65px;}
    .fix_btn{position:fixed;right:10px;bottom:10px;z-index:9999;}
    .fix_btn li{border-radius:50%;background-color:#fff;width:45px;height:45px;display:flex;align-items: center;justify-content:center; background-repeat:no-repeat;background-size:30px auto;background-position:center;margin-bottom:10px;box-shadow:0 0 2px #000000a6}
	.fix_btn{right:50px;bottom:100px;}
	.fix_btn p{font-size:15px;line-height:15px;color:#666;}
	.fix_btn li{width:65px;height:65px;margin-bottom:20px;background-size:55px auto;}
	.fix_btn li:hover{background-image:none;cursor:pointer}
	.fix_btn li:hover p{display:block;  position: relative;animation:tex .2s;}
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
             style="background-color: #21D192"
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
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">한국 지역 본부</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 150px; background-color: #7c4dff; height: 2px"
                />
            <p><i class="fas fa-home mr-3"></i> 서울시 서초구 서초동 1330-10번지 갤럭시타워 604호</p>
            <p><i class="fas fa-envelope mr-3"></i> hm.lee@mylimeedu.com</p>
            <p><i class="fas fa-phone mr-3"></i> 02 2135 7699</p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">캐나다 본사</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 150px; background-color: #7c4dff; height: 2px"
                />
            <p><i class="fas fa-home mr-3"></i> 55 Eglinton Ave East, Suite 601, Toronto, ON Canada M4P 1G8</p>
            <p><i class="fas fa-envelope mr-3"></i> tglee@mylimeedu.com </p>
            <p><i class="fas fa-phone mr-3"></i> + 1 647 427 2006</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © 2022 Copyright:
      <a class="text-dark" target="_blank" href="http://mylimeedu.com">mylimeedu.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
<!-- End of .container -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">상담 신청하기</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name" />
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>

<div class="fix_btn">
    <ul>
        <li>
        	<button type="button" class="btn btn-primary bt2" data-mdb-toggle="modal" data-mdb-target="#exampleModal" >
            </button>
        </li>
    </ul>
</div>

<script type="text/javascript">
	const Modal = document.getElementById('open_application');
	Modal.addEventListener('show.mdb.modal', (e) => {

	})
</script>

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
                url: "/rn_quick_act.php",
                data: params,
                contentType : "application/x-www-form-urlencoded;charset=utf-8",
                success: function(rtnData){

                    //alert("rtnData:" + rtnData);

                    if(rtnData == 'ok'){
                        alert("상담예약이 완료되었습니다.");
                    }else{
                        alert("예약이 완료되지 않았습니다. 잠시후 다시 시도해 주세요.");
                    }

                $form.find("textarea, select, text").val("");

                },
                complete : function(){

                },
                error : function(xhr, status, error){alert(error);}
            });
        });
    }

	$(".yac_Btn").click(function(){
		$(".yac_more").slideToggle(500);
		$(".yac_Btn").css("display","none");
		$(".yac_Btn_cl").css("display","inline-block");
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
</script>
