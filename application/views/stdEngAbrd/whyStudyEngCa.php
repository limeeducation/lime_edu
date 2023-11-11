<?php
include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/head.php');
//include_once($_SERVER['DOCUMENT_ROOT']."/inc/blog_list.php");
?>
<link rel="stylesheet" type="text/css" href="/static/css/sub.css">
<link rel="stylesheet" type="text/css" href="/static/css/product_detail.css">
<script src="/static/js/map.js"></script>
<script src="/static/js/product_detail.js"></script>
<header>
	<meta name="description" content="라임유학-왜 캐나다에서 어학연수를 진행하는지 알아봅시다">
	<meta property="og:description" content="라임유학-왜 캐나다에서 어학연수를 진행하는지 알아봅시다">
	<meta name=”keywords” content=”캐나다어학원,밴쿠버어학원,캘거리어학원,토론토어학원,할리팩스어학원,오타와어학원,토론토어학연수,빅토리아어학원,캐나다어학연수,밴쿠버어학연수,캘거리어학연수,오타와어학연수,빅토리아어학연수,몬트리올어학연수,아일락어학원,아일락,ILAC,ILSC,ILSC어학원,퀘스트어학원,토론토소형어학원,밴쿠버소형어학원,캘거리소형어학원,CCEL,밴웨스트,Vanwest,SGIC,TLG,UMC,UMC어학원,탬우드,카플란캐나다,카플란토론토,카플란밴쿠버,ILAC토론토,ILSC밴쿠버,아일락토론토,아일락밴쿠버,ILAC밴쿠버,코넥트어학원,커넥트어학원,토론토커넥트,ESC,OHC토론토,캐나다명문대어학연수,캐나다명문대어학원,토론토대학교연수,토론토대학교어학연수,UBC어학연수,UBC연수,캐나다명문대연수,LAB밴쿠버,VGC밴쿠버,St.Giles어학원,코너스톤어학원,Bayswater어학원,베이스워터어학원,EF빅토리아,EF밴쿠버,EF토론토,LSI어학원,LSI밴쿠버,LSI토론토,EC어학원,EC몬트리올,EC밴쿠버,EC토론토,캘거리대학교어학연수,퀸즈대학교어학연수,빅토리아대학교어학연수,탬우드토론토,탬우드밴쿠버,UMC토론토,UMC몬트리올,ILAC토론토,ILAC밴쿠버,SSLC어학원,SSLC밴쿠버,SSLC토론토,SSLC빅토리아,오타와대학교연수,요크대학교연수”>
</header>
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
		<div id="container" class="canada_cont" style="padding:0;">

			<div id="content">

				<!-- 조기유학상세작업 -->
				<div id="detail_wrap" class="canada">
					<!-- 왜 캐나다에서 영어를 배우나요? -->
					<div class="trn_detail">

						<!-- 뒤로가기버튼 -->
						<a href="javascript:go_back();" class="btn_back">
							<span>뒤로가기</span>
						</a>
						<!--// 뒤로가기버튼 -->

						<div class="tit_box">
							<p>왜 캐나다에서 영어를 배우나요?</p>
						</div>
						<div class="bdr_txt_box">
							<p class="txt">
								캐나다는 세계 5위의 무역국가로서 고도의 경제개방을 유지하고 있으며
								록키산맥과 같은 대자연을 가지고 있어 다양한 겨울 스포츠를 즐길 수 있는 곳입니다.
								캐나다는 세계에서 가장 거대한 국가 중 하나이지만 그 규모에도 불구하고, 세계에서 가장 친근한 이미지를 자랑합니다.
								많은 대도시와 아름다운 도시들로 인해, 영어 공부를 어디서 시작할 지 결정하는 것에 대해 다양한 선택권을 가질 수 있습니다.
								휘슬러의 그림 같은 작은 마을 느낌에서 부터 토론토라는 거대한 국제 도시에 이르기까지
								캐나다에는 모든 학생들에게 이상적인 코스가 있습니다.
								게다가, ESL은 몬트리올, 밴쿠버, 캘거리, 빅토리아에서도 퀄리티 높은 영어 수업을 제공하고 있습니다.
								또한 많은 학생들이 인턴쉽이나 워킹홀리데이 프로그램으로 캐나다에서 영어를 배우며,
								배운 영어를 바탕으로 현지 아르바이트를 하기 위해 캐나다로 영어를 공부하기 위해 여행을 가기도 합니다.
							</p>
						</div>
						<div class="res_list_wrap">
							<div class="list">
								<div class="img_area">
									<img src="/static/img/std_eng_abrd/ca/can_edu_01.jpg" alt="안전한 연수 환경">
								</div>
								<div class="txt_area">
									<div class="tit_area">
										<span class="num">01</span>
										<p class="tit">안전한 연수 환경</p>
									</div>
									<p class="txt">
										어학연수를 생각할 때 가장 중요한 것은 치안입니다. 캐나다는 이민자들의 나라로 현지인들이 기본적으로 외국인에게 관대하고 친절합니다. 또 같은 북미 지역이라도 캐나다는 미국과 달리 총기 및 마약류 소지에 대해 엄격히 규제하고 있으며 세계 최저 범죄율을 자랑하고 있습니다. 또 경찰과 안전요원들이 학교와 다운타운을 상시로 순찰해 유학생들이 보다 안전하게 학업을 마칠 수 있습니다.
									</p>
								</div>
							</div>
							<div class="list">
								<div class="img_area">
									<img src="/static/img/std_eng_abrd/ca/can_edu_02.jpg" alt="북미 표준 영어">
								</div>
								<div class="txt_area">
									<div class="tit_area">
										<span class="num">02</span>
										<p class="tit">북미 표준 영어</p>
									</div>
									<p class="txt">
										미국식 표준영어를 사용하면서도 미국인들처럼 연음을 많이 섞어 흘려 발음하지 않아 미국식 영어에 익숙한 한국학생들이 거부감 없이 영어를 쉽게 배울 수 있습니다. 지역과 계층, 인종별로 다른 발음과 억양을 구사하는 미국과 기존의 표준발음 정책을 포기하고 여러 발음을 용인하기 시작한 영국에 비해 캐나다는 알아듣기 쉽고 말하기 편한 표준적인 영어를 사용해 영어공부를 하기에 좋은 환경 입니다.
									</p>
								</div>
							</div>
							<div class="list">
								<div class="img_area">
									<img src="/static/img/std_eng_abrd/ca/can_edu_03.jpg" alt="수준 높은 교육">
								</div>
								<div class="txt_area">
									<div class="tit_area">
										<span class="num">03</span>
										<p class="tit">수준 높은 교육</p>
									</div>
									<p class="txt">
										캐나다인들은 교육을 매우 중요시하며, 최고의 학교들을 요구하고 있습니다. 캐나다는 다른 선진국 국가들과 마찬가지로 많은 예산을 교육에 투자하고 있으며, 어느 OECD 국가들과 비교해도 훨씬 더 많은 투자를 하고 있습니다. 캐나다 현지 학생들은 계속해서 독해, 과학, 수학 분야의 국제 수준 테스트에서 우수한 성적을 보여주고 있으며 이는 캐나다 학교들의 특출한 수준을 보여주고 있는 예시입니다. 캐나다 대학에서 취득한 학위나 졸업장은 비즈니스, 정부 단체, 그리고 학술 단체에서 전 세계적으로 인정받고 있습니다.
									</p>
								</div>
							</div>
							<div class="list">
								<div class="img_area">
									<img src="/static/img/std_eng_abrd/ca/can_edu_04.jpg" alt="친절한 사람들">
								</div>
								<div class="txt_area">
									<div class="tit_area">
										<span class="num">04</span>
										<p class="tit">친절한 사람들</p>
									</div>
									<p class="txt">
										캐나다는 이민자의 나라이며, 전통과 다문화의 다양성을 장려하는 정책을 펴고 있습니다. 이런 다양한 환경내에서 서로 존중 받고 서로를 이해하고 있습니다. 거의 모든 세계의 인종들이 캐나다를 대표하고 있습니다. 따라서 특정 문화와 결합된 많은 민족 음식과 유쾌한 오락활동을 캐나다에서 접해볼 수 있습니다. 캐나다의 대표적인 도시 중 하나인 밴쿠버는 북미에서 가장 큰 규모의 차이나타운이 도시에 위치하고 있으며, 헝가리, 태국, 한국, 아프리칸 음식들을 맛볼 수 있는 다양한 식당들이 있습니다. 주요 도시 중심가에는 다양한 쇼핑몰, 레스토랑, 영화관, 미술관, 박물관 등이 있으며, 캐나다 도시는 시민을 위한 수많은 공원과, 정원, 해변 등을 제공하며, 또한 훌륭한 스포츠나 오락 시설도 제공하고 있습니다.
									</p>
								</div>
							</div>
						</div>
					</div>
					<!--// 왜 캐나다에서 영어를 배우나요? -->

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


