<?php
include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/head.php');
//include_once($_SERVER['DOCUMENT_ROOT']."/inc/blog_list.php");
?>
<link rel="stylesheet" type="text/css" href="/static/css/sub.css">
<link rel="stylesheet" type="text/css" href="/static/css/product_detail.css">
<script src="/static/js/map.js"></script>
<script src="/static/js/product_detail.js"></script>
<body>
    <script type="text/javascript">
		function applyStartProd(){
			if(''==$("#conOfficeProd").val()){
				alert('상담 희망 지사를 선택해주세요');
				$("#seoul_office_prod").focus();
			}else if(''==$("#conDateProd").val()){
				alert('상담 희망 날짜를 선택해주세요');
				$("#conDateProd").focus();
			}else if(''==$("#conTimeProd").val()){
				alert('상담 희망 시간을 선택해주세요');
				$("#conTimeProd").focus();
			}else if(''==$("#startYearProd").val()){
				alert('희망 시작 년도를 선택해주세요');
				$("#startYearProd").focus();
			}else if(''==$("#startMonthProd").val()){
				alert('희망 시작 월을 선택해주세요');
				$("#startMonthProd").focus();
			}else if(''==$("#conNameProd").val()){
				alert('이름을 입력해주세요');
				$("#conNameProd").focus();
			}else if(''==$("#conContactProd").val()){
				alert('연락처를 입력해주세요');
				$("#conContactProd").focus();
			}else if(!$("#conAgreeYnProd").is(":checked")){
				alert('개인정보 수집 및 이용에 동의해주세요');
				$("#conAgreeYnProd").focus();
			}else{
				var cur_url = window.location.href;
				$("#conApplyUrl").val(cur_url);
				$("#applyConsultFromProd").submit();
			}
		};

		function setValueProd(key,value){
			$('#'+key).val(value);
		};

		function go_back(){
			history.back();
		}
    </script>
	<div id="wrap">
	<?php
    include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/header.php');
    ?>
		<div id="container" style="padding:0;">

			<div id="content">

				<!-- 조기유학상세작업 -->
				<div id="detail_wrap" class="usa">
					<!-- 왜 미국에서 영어를 배우나요? -->
					<div class="detail_usa">

						<!-- 뒤로가기버튼 -->
						<a href="javascript:go_back();" class="btn_back">
							<span>뒤로가기</span>
						</a>
						<!--// 뒤로가기버튼 -->

						<div class="tit_box">
							<p>왜 미국에서 영어를 배우나요?</p>
						</div>
						<div class="bdr_txt_box">
							<p class="tit">미국 영어는 시리즈, 영화, 음악을 통해 전 세계에서 가장 친숙하고 편안한 영어 스타일입니다.</p>
							<p class="sub_txt">또한 미국은 크고 다양한 국가이며, 미국 현지에서는 외국 학생에게 굉장히 우호적인 것으로 유명하여 <br>쉽게 대화를 시작하고 빠른 친구를 금방 사귈 수 있습니다. </p>
						</div>
						<div class="res_list_wrap">
							<div class="list">
								<div class="img_area">
									<img src="/static/img/std_eng_abrd/us/usa_edu_01.jpg" alt="다양한 영어 교육 기관">
								</div>
								<div class="txt_area">
									<div class="tit_area">
										<span class="num">01</span>
										<p class="tit">다양한 영어 교육 기관</p>
									</div>
									<ul>
										<li>
											<p class="sub_txt">다양한 어학연수 지역과 프로그램</p>
											<p class="des_txt">
												현재 영어 어학연수를 할 수 있는 나라는 많지만 대부분 2~4개의 대도시와 중소도시에 유학생들이 몰려 있는 것이 사실입니다. 미국은 한국 면적의 100배, 인구는 3억명이 넘는 나라로 수많은 어학연수 기관과 대학들이 있습니다. 이로 인해서 미국 전역에 걸쳐 어학연수를 할 수 있는 지역이 분포되어 있으며 또한 그만큼 다양한 프로그램들이 개설되어 있기 때문에 본인의 어학연수 목적과 기호에 따라서 적합하게 선택할 수 있습니다.
											</p>
										</li>
										<li>
											<p class="sub_txt">1. 대학부설 어학원</p>
											<p class="des_txt">
												대학교에서 대학 부설 시설로 어학원을 운영하는 대학 부설 어학원 입니다. 대학 부설 어학원의 가장 큰 특징은 수강 학생들의 효율적인 대학 진학에 초점을 두고 있다는 것입니다. 그렇기 때문에 단순히 영어실력을 키우는 것 뿐만 아니라 대학교육을 듣기 위한 충분한 영어실력 향상에 중점을 두고 있습니다. 또 다른 두드러진 특징은 어학교가 대학교 캠퍼스내에 자리잡고 있다는 것입니다. 학생들은 다양한 학교행사에 참여가 가능하며, 대학내 정규 학생들과의 교류를 통해 생활영어를 익히고 미국의 대학생활을 엿볼 수 있는 기회가 주어 집니다.
											</p>
										</li>
										<li>
											<p class="sub_txt">2. 사설 어학원</p>
											<p class="des_txt">
												다른 종류의 어학 교육기관은 일반 민간 회사가 운영하는 사설 어학원입니다. 이러한 사설 어학원에서는 영어실력 향상을 위해 다양성이 강조된 폭 넓은 프로그램을 제공하고 있습니다. 그 외에 대학부속과 사립의 중간이라고도 할 수 있는 대학교 내에 위치한 사설 어학원은 대학 시설의 이용과 현지 학생들과의 교류가 가능한 점이 대학부속어학교와 동일 하지만 입학날짜나 기간의 선택이 자유롭다는 특징이 있습니다.
											</p>
										</li>
									</ul>
								</div>
							</div>
							<div class="list">
								<div class="img_area">
									<img src="/static/img/std_eng_abrd/us/usa_edu_02.jpg" alt="각양각색의 문화 체험">
								</div>
								<div class="txt_area">
									<div class="tit_area">
										<span class="num">02</span>
										<p class="tit">각양각색의 문화 체험</p>
									</div>
									<p class="txt">
										인종의 용광로 또는 멜팅 팟 이론(영어: melting pot)은 다양한 문화를 가진 사람들이 섞여 하나의 동질한 문화를 만들어가는 것을 의미합니다. 역사적으로는 주로 미국의 경우에 많이 사용되었는데, 이는 미국으로 수많은 이주민과 외국인들이 서로 모여 단일한 공통적 문화를 만들어가던 현상을 설명하기 위해 사용되었던 것입니다. 다만 현재의 미국은 다양한 문화들이 서로 섞여 조화를 이루되 각자의 문화를 보존하는 '샐러드 그릇' 이론에 더 가까운 정책을 펼치고 있고, 세계적인 추세도 각자의 문화를 인정해주며 공존하는 방향으로 향하고 있기에, 용광로 이론을 현대 사회에 그대로 적용하기에는 무리가 있습니다.
									</p>
								</div>
							</div>
							<div class="list">
								<div class="img_area">
									<img src="/static/img/std_eng_abrd/us/usa_edu_03.jpg" alt="세계 경제, 교육, 문화의 중심">
								</div>
								<div class="txt_area">
									<div class="tit_area">
										<span class="num">03</span>
										<p class="tit">세계 경제, 교육, 문화의 중심</p>
									</div>
									<p class="txt">
										전 세계 많은 국가들에 영향을 미치고 있는 미국에서 언어 뿐만 아니라 다양한 분야에서의 전문 지식 습득, 세계를 움직이는 흐름을 배울 수 있습니다. 미국은 경제, 정치, 문화 등의 다양한 분야를 선도하고 있는 미국에서 세계의 흐름을 직접 느끼고 경험하여 글로벌 감각을 습득할 수 있다는 것이 큰 장점 입니다.
									</p>
								</div>
							</div>
							<div class="list">
								<div class="img_area">
									<img src="/static/img/std_eng_abrd/us/usa_edu_04.jpg" alt="한국에 가장 많이 익숙한 미국 영어">
								</div>
								<div class="txt_area">
									<div class="tit_area">
										<span class="num">04</span>
										<p class="tit">한국에 가장 많이 익숙한 미국 영어</p>
									</div>
									<p class="txt">
										전세계에서 영어를 사용하는 나라는 매우 많습니다. 글로벌 시대인만큼 미국식, 영국식 영어로 구분한다는 것이 사실 무의미 하고 어느 나라 영어가 더 우세하다고 할 수는 없습니다. 하지만 우리는 한국에서 어릴 때 부터 미국식 영어를 배워왔고 세계에서 사용하는 나라가 많은 만큼 이질감 없이 익숙한 느낌으로 미국어학연수를 통해 영어를 배울 수 있다는 점이 미국식 영어의 가장 큰 장점이라고 할 수 있습니다.
									</p>
								</div>
							</div>
						</div>
					</div>
					<!--// 왜 미국에서 영어를 배우나요? -->

					<!-- 추천프로그램 -->
					<div class="rec_pro_wrap" style="display:none;">
						<p class="rec_pro_tit"><em>n</em>월 추천 프로그램</p>

						<div class="rec_pro_slide swiper-container">
							<div class="swiper-wrapper">
								<div class="rec_pro swiper-slide">
									<a href="#none">
										<img src="images/main/banner_image4@2x.png" alt="추천프로그램">
									</a>
								</div>
								<div class="rec_pro swiper-slide">
									<a href="#none">
										<img src="images/main/banner_image2@2x.png" alt="추천프로그램">
									</a>
								</div>
								<div class="rec_pro swiper-slide">
									<a href="#none">
										<img src="images/main/banner_image5@2x.png" alt="추천프로그램">
									</a>
								</div>
								<div class="rec_pro swiper-slide">
									<a href="#none">
										<img src="images/main/banner_image1@2x.png" alt="추천프로그램">
									</a>
								</div>
							</div>

							<div class="btn_arr_wrap">
								<div class="btn_arrow prev"></div>
								<div class="btn_arrow next"></div>
							</div>
						</div>
					</div>
					<!--// 추천프로그램 -->
				</div>
				<!--// 조기유학상세작업 -->

				<!-- 상담신청란 -->
				<div class="cs_area">
					<div class="cs_form" style="background-color: rgba(255, 255, 255, 1);"><!-- 투명도조절 -->
						<h2 class="form_tit">상담 신청하기</h2>

						<form action="/main/apply_consult" id="applyConsultFromProd" method="post">
							<input type="hidden" id="conApplyUrlProd" name="con_apply_url">
							<!-- 지사선택 -->
							<div class="cotn">
								<div class="tit_area">
									<p class="cotn_tit">지사선택</p>
								</div>
								<div class="res_wrap">
									<!-- 탭영역 -->
									<div class="tap_wrap">
										<!--
											탭 활성화 class="on" 추가
											탭 비활성화 class="off" 추가
										-->
										<input type="hidden" id="conOfficeProd" name="con_office">
										<a href="javascript:setValueProd('conOfficeProd','전국');" class="tab">전국</a>
										<a href="javascript:setValueProd('conOfficeProd','서울');" id="seoul_office_prod" class="tab on">서울</a>
										<a href="javascript:setValueProd('conOfficeProd','대전');" class="tab">대전</a>
										<a href="javascript:setValueProd('conOfficeProd','송도');" class="tab">송도</a>
										<a href="javascript:setValueProd('conOfficeProd','대구');" class="tab">대구</a>
										<a href="javascript:setValueProd('conOfficeProd','부산');" class="tab">부산</a>
										<a href="javascript:setValueProd('conOfficeProd','제주');" class="tab">제주</a>
									</div>
									<!--// 탭영역 -->
								</div>
							</div>
							<!--// 지사선택 -->

							<!-- 상담일시 -->
							<div class="cotn">
								<div class="tit_area">
									<p class="cotn_tit">상담일시</p>
									<!-- 라디오영역 -->
									<div class="rdo_wrap">
										<label for="rdo211">
											<input type="radio" name="con_type" value="call" id="rdo211" checked>
											<i class="icon_rdo"></i>
											<span>전화상담</span>
										</label>
										<label for="rdo221">
											<input type="radio" name="con_type" value="visit" id="rdo221">
											<i class="icon_rdo"></i>
											<span>방문상담</span>
										</label>
									</div>
									<!--// 라디오영역 -->
								</div>
								<div class="inpt_wrap">
									<div class="date_wrap">
										<div class="form_date">
											<input type="text" class="datepick" name="con_date" id="conDateProd" placeholder="예약일자">
											<select class="select_area" name="con_time" id="conTimeProd">
												<option selected>예약시간</option>
												<option>오전 10시</option>
												<option>오전 11시</option>
												<option>오후 12시</option>
												<option>오후 1시</option>
												<option>오후 2시</option>
												<option>오후 3시</option>
												<option>오후 4시</option>
												<option>오후 5시</option>
												<option>오후 6시</option>
												<option>오후 7시</option>
											</select>
										</div>
										<div class="date_text">
											*월~금 : 오전 10:00 ~ 오후 7:00 까지 &ensp;|&ensp; 토 : 오전 10:00 ~ 오후 2:00 까지<br>
											*일요일/공휴일 예약은 유선으로 따로 예약해야 합니다
										</div>
									</div>
									<div class="info_wrap">
										<p class="info_tit">희망 시작 시기</p>
										<div class="form_wrap">
											<select class="select_area" name="start_year" id="startYearProd">
												<option value="" selected>년</option>
												<option value="2023">2023년</option>
												<option value="2024">2024년</option>
												<option value="2025">2025년</option>
												<option value="2026">2026년</option>
											</select>
											<select class="select_area" name="start_month" id="startMonthProd">
												<option value="" selected>월</option>
												<option value="1">1월</option>
												<option value="2">2월</option>
												<option value="3">3월</option>
												<option value="4">4월</option>
												<option value="5">5월</option>
												<option value="6">6월</option>
												<option value="7">7월</option>
												<option value="8">8월</option>
												<option value="9">9월</option>
												<option value="10">10월</option>
												<option value="11">11월</option>
												<option value="12">12월</option>
											</select>
										</div>
									</div>
									<div class="info_wrap">
										<p class="info_tit">이름*</p>
										<div class="form_wrap">
											<input type="text" placeholder="이름" name="con_name" id="conNameProd">
										</div>
									</div>
									<div class="info_wrap">
										<p class="info_tit">연락처*</p>
										<div class="form_wrap">
											<input type="text" placeholder="전화번호 or 카카오톡 ID" name="con_contact" id="conContactProd">
										</div>
									</div>
								</div>
							</div>
							<!--// 상담일시 -->

							<!-- 문의내용 -->
							<div class="cotn">
								<div class="tit_area">
									<p class="cotn_tit">문의내용</p>
								</div>
								<div class="ta_wrap">
									<!-- textarea -->
									<div class="textarea_wrap">
										<textarea placeholder="(선택) 문의 내용을 간략히 입력해 주세요." name="con_details"></textarea>
									</div>
									<!--// textarea -->

									<!-- 개인정보수집동의영역 -->
									<div class="policy_wrap">
										<div class="chk_wrap">
											<div class="form_chk">
												<label for="conAgreeYnProd">
													<input type="checkbox" name="con_agree_yn" id="conAgreeYnProd">
													<i class="icon_chk"></i>
													<span>개인정보 수집 및 이용 동의</span>
												</label>
												<button type="button" class="btn_policy">[보기]</button><!-- 하단 컨텐츠 열기 class="on"추가 -->
											</div>
										</div>
										<div class="policy_cotn" style="display: none;">
											<p class="policy_title">개인정보수집 및 이용에 대한 안내</p>
											<div class="policy_tab">
												<a href="#none" class="tab on">수집하는 개인정보의 항목</a><!-- 활성화시 class="on" 추가 -->
												<a href="#none" class="tab">개인정보의 수집 및 이용목적</a>
												<a href="#none" class="tab">개인정보의 보유 및 이용기간</a>
												<a href="#none" class="tab">동의 거부 시 불이익에 관한 사항</a>
											</div>
											<div class="txt_list">
												<div class="txt_wrap" style="display: block;">
													<p class="tit">■ 수집하는 개인정보 항목</p>
													<p class="txt">
														라임에듀케이션은 원활한 상담진행과 서비스 제공을 위해서 아래와 같은 개인정보를 수집하고 있습니다.<br>
														아래와 같은 개인정보를 수집하고 있습니다.
													</p>
													<p class="tit">수집항목</p>
													<p class="txt">
														필수항목 : 이름, 휴대전화, 상담형태, 상담지사, 출국예정일<br>
														선택항목 : 예상기간, 희망국가, 관심분야, 관심학교, 기타문의사항<br>
														단, 수집항목은 상담신청과 세미나신청, 유학박람회신청 등과 관계 없이 모두 동일합니다.
													</p>
												</div>
												<div class="txt_wrap">
													<p class="tit">■ 개인정보의 수집 및 이용목적</p>
													<p class="txt">
														라임에듀케이션은 원활한 상담진행과 서비스 제공을 위해서 아래와 같은 개인정보를 수집하고 있습니다.<br>
														아래와 같은 개인정보를 수집하고 있습니다.
													</p>
													<p class="tit">수집항목</p>
													<p class="txt">
														필수항목 : 이름, 휴대전화, 상담형태, 상담지사, 출국예정일<br>
														선택항목 : 예상기간, 희망국가, 관심분야, 관심학교, 기타문의사항<br>
														단, 수집항목은 상담신청과 세미나신청, 유학박람회신청 등과 관계 없이 모두 동일합니다.
													</p>
												</div>
												<div class="txt_wrap">
													<p class="tit">■ 개인정보의 보유 및 이용기간</p>
													<p class="txt">
														라임에듀케이션은 원활한 상담진행과 서비스 제공을 위해서 아래와 같은 개인정보를 수집하고 있습니다.<br>
														아래와 같은 개인정보를 수집하고 있습니다.
													</p>
													<p class="tit">수집항목</p>
													<p class="txt">
														필수항목 : 이름, 휴대전화, 상담형태, 상담지사, 출국예정일<br>
														선택항목 : 예상기간, 희망국가, 관심분야, 관심학교, 기타문의사항<br>
														단, 수집항목은 상담신청과 세미나신청, 유학박람회신청 등과 관계 없이 모두 동일합니다.
													</p>
												</div>
												<div class="txt_wrap">
													<p class="tit">■ 동의 거부 시 불이익에 관한 사항</p>
													<p class="txt">
														라임에듀케이션은 원활한 상담진행과 서비스 제공을 위해서 아래와 같은 개인정보를 수집하고 있습니다.<br>
														아래와 같은 개인정보를 수집하고 있습니다.
													</p>
													<p class="tit">수집항목</p>
													<p class="txt">
														필수항목 : 이름, 휴대전화, 상담형태, 상담지사, 출국예정일<br>
														선택항목 : 예상기간, 희망국가, 관심분야, 관심학교, 기타문의사항<br>
														단, 수집항목은 상담신청과 세미나신청, 유학박람회신청 등과 관계 없이 모두 동일합니다.
													</p>
												</div>
											</div>
										</div>
									</div>
									<!--// 개인정보수집동의영역 -->
								</div>
							</div>
							<!--// 문의내용 -->

							<!-- 버튼 -->
							<div class="btn_wrap">
								<button type="button" class="cs_btn" onclick="applyStartProd();">상담신청하기</button>
							</div>
							<!--// 버튼 -->
						</form>
					</div>
				</div>
				<!--// 상담신청란 -->

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


