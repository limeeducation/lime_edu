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
			$("#conApplyUrlProd").val(cur_url);
			$("#applyConsultFromProd").submit();
		}
	};
	function setValueProd(key,value){
		$('#'+key).val(value);
	};
    </script>
	<div id="wrap">
	<?php
    include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/header.php');
    ?>
		<div id="container" style="padding:0;">

			<div id="content">

				<!-- 조기유학상세작업 -->
				<div id="detail_wrap">
					<!-- 상품상세 -->
					<div class="bnr_wrap">
						<h1 class="pro_title prod_name">
							<?= $col_title; ?>
						</h1>
						<h3 class="" style="text-align:right;">
							주제 : <?php
							if($col_subject == '1'){
								echo "해외대학 유학";
							}else if($col_subject == '2'){
								echo "조기 유학";
							}else if($col_subject == '3'){
								echo "어학 연수";
							}else if($col_subject == '2'){
								echo "가족연수 / 캠프 / 스쿨링";
							}
							?>
						</h3>
						<?= $col_cnts; ?>
					</div>
					<!--// 상품상세 -->

					<!-- 상담신청란 -->
					<div class="cs_area">
						<div class="cs_form" style="background-color: rgba(255, 255, 255, 1);"><!-- 투명도조절 -->
							<h2 class="form_tit">상담신청란</h2>

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
											<a href="javascript:setValueProd('conOfficeProd','전남');" class="tab">전남</a>
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
												<input type="text" class="datepickProd" name="con_date" id="conDateProd" placeholder="예약일자">
												<select class="select_area" name="con_time" id="conTimeProd">
													<option selected>예약시간</option>
													<option value="10">오전 10시</option>
													<option value="11">오전 11시</option>
													<option value="12">오후 12시</option>
													<option value="13">오후 1시</option>
													<option value="14">오후 2시</option>
													<option value="15">오후 3시</option>
													<option value="16">오후 4시</option>
													<option value="17">오후 5시</option>
													<option value="18">오후 6시</option>
													<option value="19">오후 7시</option>
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
				</div>
				<!--// 조기유학상세작업 -->
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


