<style>
    .form_apply_consult .dimBg {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: #000;
      opacity: .5;
      filter: alpha(opacity=50);
    }
    a.btn-layerClose {
      display: inline-block;
      height: 25px;
      padding: 0 14px 0;
      border: 1px solid #304a8a;
      background-color: #3f5a9d;
      font-size: 13px;
      color: #fff;
      line-height: 25px;
    }
    .btn-r {
      width: 100%;
      margin: 10px 0 20px;
      padding-top: 10px;
      border-top: 1px solid #DDD;
      text-align: right;
    }
    .layer-popup {
      display: none;
      position: absolute;
      top: 10%;
      left: 25%;
      width: 50%;
      height: auto;
      background-color: #fff;
      border: 5px solid #3571B5;
      z-index: 10;
    }
    .form_apply_consult {
      display: none;
      position: fixed;
      _position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 1000;
    }
    .form_apply_consult .layer-popup {
      display: block;
    }
    @media screen and (max-width:640px){
        .layer-popup{
            left: 0;
            width: 100%;
        }
    }
    .btn-r{
        border: none;
    }
    .fotm_bTn{
        margin-bottom : 0;
    }
    #myform{
        margin: 2%;
    }
</style>


<footer id="footer">

	<div id="ft1">
		<ul>
			<li><a href="">회사소개</a></li>
			<li><a href="">이용약관</a></li>
			<li><a href="">개인정보취급방침</a></li>
			<li><a href="">제휴문의</a></li>
		</ul>
	</div><!--ft1-->

	<div id="ft2">
		<div class="cent_list">

			<ul class="ct_list">

				<li><a href="">
					<div class="ct_ttxx">
					<div class="ct_name">서울센터<span>02-2135-7699</span></div>
					<b>서울시 서초구 서초동 1330-10<br>갤럭시 타워 604호</b>
					</div>
					</a>
				</li>


				<li><a href="">
					<div class="ct_ttxx">
					<div class="ct_name">대구센터<span>053-428-0888</span></div>
					<b>대구광역시 중구 중앙대로 385-1, 3층</b>
					</div>
					</a>
				</li>


				<li><a href="">
					<div class="ct_ttxx">
					<div class="ct_name">제주센터<span>064-722-7220</span></div>
					<b>제주시 중앙로 206 그린클리닉 4층</b>
					</div>
					</a>
				</li>




				<li class="time">
					<div>평일 <span>10:00~19:00</span></div>
					<div>토요일 <span>10:00~18:00</span></div>
				</li>
			</ul>
		</div><!--ft2L_sb-->

		<div class="cent_list2">
			<ul class="ct_list">
				<li class="">
					<div class="ad_m"><a href="">해외 센터</a></div>
						<a href=""><span>토론토 센터 : </span><b>55 Eglinton Ave East, Suite 601, Toronto ON M4P 1G8</b></a>
				</li>
			<li class="">
					<div class="ad_m"><a href="">해외 센터</a></div>
						<a href=""><span>밴쿠버 센터 : </span>595 Burrard St, Vancouver BC V7X 1J1</a>
				</li>


			</ul>

		</div><!--ft2L_sb-->
	</div><!--ft2-->

	<div class="ft_last">
		Copyright ⓒ mylimeedu.com. All rights reserved.
	</div>



</footer><!--#footer-->

<section class="form_apply_consult" style="margin: 0 auto;">
    <div class="dimBg"></div>
    <div class="pri_f_right layer-popup">
        <form name='myform' id='myform' method='post'>
            <input type="hidden" name="tempbang" value='<?=$temp_bang?>' >
            <input type="hidden" name="temp_site" value='limeedu' >
            <input type="hidden" name="tempkbn" value='on' >
            <input type="hidden" name="backURL" value='<?='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']?>' >
            <input type="hidden" name="temp_key" value="<?='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']?>" >

            <div class="pri_fm_box">
                <ul>
                    <li style="width:100%;">
                        <input type="text" name="temp_namef" id="stu_name" value placeholder="이름" style="">
                    </li>
                </ul>
                <ul>
                    <li style="width:100%;">
                        <select name="temp_tel_01" id="stu_tel_01">
                        <option value="010">010</option>
                        <option value="011">011</option>
                        <option value="016">016</option>
                        <option value="017">017</option>
                        <option value="018">018</option>
                        <option value="019">019</option>
                        </select>
                        <input type="text" name="temp_tel_02" id="stu_tel_02" placeholder="0000">
                        <input type="text" name="temp_tel_03" id="stu_tel_03" placeholder="0000">
                    </li>
                </ul>
                <ul>
                    <li>
                        <select name="temp_address" id="stu_addr" style="" >
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
                    </li>
                    <li>
                        <select name="temp_startdate" >
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
                    </li>
                </ul>
                <div>
                    <textarea name='temp_stetc' value placeholder="문의사항을 상세히 적어주시면 빠른상담이 가능합니다~"></textarea>
                </div>

                <div>
                    <span class="yac_ttxx"><label for="agree"><input type='checkbox' name='agree' id='agree'  >개인정보 보호에 동의(*) </label> <b class="yac_Btn">[방침보기]</b><b class="yac_Btn_cl">[닫기]</b></a></span>
                    <div class="yac_more">
                        <div id="privacy">
                            <div class="yac_tit">개인정보수집 및 이용에 대한 안내</div>
                            <div class="yac_box">
                                <div class="taba" id="btn_1" onclick="span_view('1')">수입하는 <br>개인정보의 항목</div>
                                <div class="tabb" id="btn_2" onclick="span_view('2')">개인정보의 <br>수집 및 이용목적</div>
                                <div class="taba" id="btn_3" onclick="span_view('3')">개인정보의 <br>보유 및 이용기간</div>
                            </div>

                            <div class="yac_con" id="tab_1">
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

                            <div class="yac_con" id="tab_2">
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

                            <div class="yac_con" id="tab_3">
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

                <div class="fotm_bTn" onclick="checkInput(myform);" >
                    상담 신청
                </div>
                <div class="btn-r">
                <a href="#" class="btn-layerClose">Close</a>
            </div>

        </form>
    </div>
</section>
<div class="fix_btn">
    <ul>
        <li class="bt2"><a href="#none"><p>상담<br>예약</p></a></li>
        <li class="bt4"><a href="/"><p>메인<br>으로</p></a></li>
    </ul>
</div>


</div><!--#wrap-->
<script type="text/javascript">
    $(".bt2").click( function() {
        open_consult();
    });
    function open_consult(){
        var $el = $(".form_apply_consult");
        var isDim = $el.prev().hasClass('dimBg');
        isDim ? $('.dim-layer').fadeIn() : $el.fadeIn();

        var $elWidth = ~~($el.outerWidth()),
            $elHeight = ~~($el.outerHeight()),
            docWidth = $(document).width(),
            docHeight = $(document).height();

        // 화면의 중앙에 레이어를 띄운다.
        if ($elHeight < docHeight || $elWidth < docWidth) {

        } else {
            $el.css({top: 0, left: 0});
        }

        $el.find('a.btn-layerClose').click(function(){
            isDim ? $('.dim-layer').fadeOut() : $el.fadeOut(); // 닫기 버튼을 클릭하면 레이어가 닫힌다.
            return false;
        });

        $('.layer .dimBg').click(function(){
            $('.dim-layer').fadeOut();
            return false;
        });
    }
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
	$(window).resize(function(){
    	if (window.innerWidth > 1080) { // �ٹ��̽� ũ�Ⱑ 1080�̻��϶�

    		$(".cate2").off("click");
    		return false; /*PC������ a��ũ Ŭ���ǵ��� ��ũ��Ʈ �����ؾ���...*/


    	} else {

    	$(".side .side_dmn .cate2").click(function(){
    		var tg = $(this).siblings(".sub_sub");
    		var dis = tg.css("display");
    		if(dis=="none"){
    			$(".side_dmn .cate2").removeClass("active");
    			$(".side_dmn .sub_sub").slideUp(500);
    			$(this).addClass("active");
    			tg.slideDown(500);
    		} else {
    			$(".side_dmn .cate2").removeClass("active");
    			$(".side_dmn .sub_sub").slideUp(500);
    		}
    		return false;
    	});


    	}
    	}).resize();
</script>

</body>
</html>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.1.0/swiper-bundle.min.js'></script>



