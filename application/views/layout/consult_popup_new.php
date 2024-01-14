<!-- 상담신청팝업 -->
<section class="popup cs_pop">
	<div class="pop_inner">
		<h3 class="pop_tit">상담신청</h3>
		<p class="des">*일요일과 공유일은 전화 예약이 필요합니다.</p>
		<div class="cs_box">
			<div class="group">
				<div class="inpt_wrap">
					<p class="form_tit">이름</p>
					<input type="text" class="inpt inpt_name" placeholder="이름">
				</div>
				<div class="inpt_wrap">
					<p class="form_tit">연락처</p>
					<input type="text" class="inpt inpt_tel" placeholder="전화번호 or 카카오톡 ID">
				</div>
			</div>
			<div class="group">
				<div class="cs_tab_wrap">
					<p class="form_tit">지사선택</p>
					<ul class="tab_li">
						<li><a href="#" class="on">전국</a></li>
						<li><a href="#">서울</a></li>
						<li><a href="#">대전</a></li>
						<li><a href="#">송도</a></li>
						<li><a href="#">대구</a></li>
						<li><a href="#">부산</a></li>
						<li><a href="#">제주</a></li>
					</ul>
				</div>
			</div>
			<div class="group">
				<div class="cs_tab_wrap">
					<p class="form_tit">상담방법</p>
					<ul class="tab_li cs_tab">
						<li><a href="#" class="on">방문상담</a></li>
						<li><a href="#">전화상담</a></li>
					</ul>
				</div>
			</div>
			<div class="group">
				<div class="select_wrap">
					<div class="date_wrap">
						<p class="form_tit">상담 희망일자</p>
						<div class="datepicker"></div>
					</div>
					<div class="time_wrap">
						<p class="form_tit">예약시간</p>
						<!-- <select class="ni_select" id="clock">
							<option value="10" data-display="오전 10 : 00">오전 10 : 00</option>
							<option value="11">오전 11 : 00</option>
							<option value="12">오후 12 : 00</option>
							<option value="13">오후 13 : 00</option>
							<option value="14">오후 14 : 00</option>
							<option value="15">오후 15 : 00</option>
							<option value="16">오후 16 : 00</option>
							<option value="17">오후 17 : 00</option>
							<option value="18">오후 18 : 00</option>
						</select> -->
						<div class="select_menu select_clock">
							<a href="#n" class="select_btn">오전 10 : 00</a>
							<ul class="select_list">
								<li data-value="10" class="on"><a href="#n">오전 10 : 00</a></li>
								<li data-value="11"><a href="#n">오전 11 : 00</a></li>
								<li data-value="12"><a href="#n">오후 12 : 00</a></li>
								<li data-value="13"><a href="#n">오후 13 : 00</a></li>
								<li data-value="14"><a href="#n">오후 14 : 00</a></li>
								<li data-value="15"><a href="#n">오후 15 : 00</a></li>
								<li data-value="16"><a href="#n">오후 16 : 00</a></li>
								<li data-value="17"><a href="#n">오후 17 : 00</a></li>
								<li data-value="18"><a href="#n">오후 18 : 00</a></li>
							</ul>
						</div>
						<ul class="clock">
							<li data-value="10" class="on"><img src="/static/img/img_new/common/clock_01.png" alt=""></li>
							<li data-value="11"><img src="/static/img/img_new/common/clock_02.png" alt=""></li>
							<li data-value="12"><img src="/static/img/img_new/common/clock_03.png" alt=""></li>
							<li data-value="13"><img src="/static/img/img_new/common/clock_04.png" alt=""></li>
							<li data-value="14"><img src="/static/img/img_new/common/clock_05.png" alt=""></li>
							<li data-value="15"><img src="/static/img/img_new/common/clock_06.png" alt=""></li>
							<li data-value="16"><img src="/static/img/img_new/common/clock_07.png" alt=""></li>
							<li data-value="17"><img src="/static/img/img_new/common/clock_08.png" alt=""></li>
							<li data-value="18"><img src="/static/img/img_new/common/clock_09.png" alt=""></li>
						</ul>
					</div>
					<div class="start_date">
						<div class="rdo_wrap">
							<p class="form_tit" style="margin-bottom:15px; text-align:center;">유학 과정</p>
							<div class="start_wrap">
								<div class="select_menu start_y" style="width:100%;">
									<a href="#n" class="select_btn">어학연수</a>
									<ul class="select_list">
										<li class="on"><a href="#n">어학연수</a></li>
										<li><a href="#n">전문과정</a></li>
										<li><a href="#n">중고생 교환학생</a></li>
										<li><a href="#n">조기유학</a></li>
										<li><a href="#n">영어캠프</a></li>
										<li><a href="#n">컬리지</a></li>
										<li><a href="#n">박사</a></li>
										<li><a href="#n">학사</a></li>
										<li><a href="#n">석사</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="group">
				<div class="cs_tab_wrap">
					<p class="form_tit">상담국가</p>
					<ul class="tab_li">
						<li><a href="#" class="on">미국</a></li>
						<li><a href="#">영국</a></li>
						<li><a href="#">캐나다</a></li>
						<li><a href="#">호주</a></li>
						<li><a href="#">필리핀</a></li>
					</ul>
				</div>
			</div>
			<div class="group">
				<div class="inpt_wrap">
					<p class="form_tit">희망시작시기</p>
					<input type="text" class="inpt inpt_year" placeholder="2024">년
					<input type="text" class="inpt inpt_month" placeholder="12">월
				</div>
			</div>
			<hr style="display:block;"/>
			<div class="group">
				<p class="form_tit">문의내용</p>
				<div class="textarea_wrap"><textarea cols="30" rows="10" placeholder="문의 내용을 적어주세요&#13;&#10;*자세히 입력할수록 정확한 상담이 가능합니다"></textarea></div>
			</div>
		</div>
		<div class="chk_wrap">
			<label for="chk">
				<input type="checkbox" id="chk">
				<p>개인정보 수집 및 이용 동의[보기]</p>
			</label>
		</div>
		<div class="cs_btn">
			<a href="#" class="btn">신청하기</a>
		</div>
	</div>
</section>
<script>
$(document).ready(function(){//예약시간 선택 탭
	$('.cs_box .list li').on('click', function(e){
		e.preventDefault();
		var name_data = $(this).attr('data-value');
		$(this).parent().parent().next('.clock').find('li').removeClass('on');
		$(this).parent().parent().next('.clock').find("[data-value='" + name_data + "']").addClass('on')
	})

	$('.select_clock li').on('click', function(e){
		e.preventDefault();
		var name_data = $(this).attr('data-value');
		$(this).parent().parent().next('.clock').find('li').removeClass('on');
		$(this).parent().parent().next('.clock').find("[data-value='" + name_data + "']").addClass('on')
	})

	$('.select_btn').on('click', function(){//form selectbox
		$('.select_list').stop().slideUp();
		$(this).next('.select_list').stop().slideToggle();
	})
	$('.select_list li a').on('click', function(){
		var select_text = $(this).text(),
			select_li = $(this).parent('li'),
			select_btn = $(this).parents('.select_list').siblings('.select_btn');
		select_btn.text(select_text);
		$(this).parent('li').siblings().removeClass('on');
		select_li.addClass('on');
		$(this).parents('.select_list').stop().slideUp();
	})
	$('body').on('click', function(e){
		if($('.select_menu').has(e.target).length == 0){
			$('.select_list').stop().slideUp();
		}
	});
})
</script>
<!--// 상담신청팝업 -->
