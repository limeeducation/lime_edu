<!-- 상담예약팝업 -->
<script>
	function applyStart(){
		if(''==$("#conOffice").val()){
			alert('상담 희망 지사를 선택해주세요');
			$("#seoul_office").focus();
		}else if(''==$("#conDate").val()){
			alert('상담 희망 날짜를 선택해주세요');
			$("#conDate").focus();
		}else if(''==$("#conTime").val()){
			alert('상담 희망 시간을 선택해주세요');
			$("#conTime").focus();
		}else if(''==$("#startYear").val()){
			alert('희망 시작 년도를 선택해주세요');
			$("#startYear").focus();
		}else if(''==$("#startMonth").val()){
			alert('희망 시작 월을 선택해주세요');
			$("#startMonth").focus();
		}else if(''==$("#conName").val()){
			alert('이름을 입력해주세요');
			$("#conName").focus();
		}else if(''==$("#conContact").val()){
			alert('연락처를 입력해주세요');
			$("#conContact").focus();
		}else if(''==$("#conNatio").val()){
			alert('상담 국가를 선택해주세요');
			$("#country_usa").focus();
		}else if(!$("#conAgreeYn").is(":checked")){
			alert('개인정보 수집 및 이용에 동의해주세요');
			$("#conAgreeYn").focus();
		}else{
			var cur_url = window.location.href;
			$("#conApplyUrl").val(cur_url);
			$("#applyConsult").submit();
		}
	};
	function setValue(key,value){
		$('#'+key).val(value);
	};
</script>
<section class="popup_wrap cs_pop">
	<!-- 팝업헤더 -->
	<header class="pop_head">
		<h1>상담 예약</h1>
	</header>
	<!--// 팝업헤더 -->

	<!-- 컨텐츠 -->
	<div class="pop_cotn">
		<form action="/main/apply_consult" id="applyConsult" method="post">
			<input type="hidden" id="conApplyUrl" name="con_apply_url">
			<!-- 지사선택 -->
			<div class="cotn">
				<div class="tit_area">
					<p class="cotn_tit">지사선택</p>
				</div>
				<div class="res_wrap">
					<!-- 탭영역 -->
					<div class="pop_tap_wrap">
						<!--
							탭 활성화 class="on" 추가
							탭 비활성화 class="off" 추가
						-->
						<input type="hidden" id="conOffice" name="con_office">
						<a href="javascript:setValue('conOffice','서울');" class="tab" id="seoul_office">서울</a>
						<a href="javascript:setValue('conOffice','대전');" class="tab">대전</a>
						<a href="javascript:setValue('conOffice','송도');" class="tab">송도</a>
						<a href="javascript:setValue('conOffice','대구');" class="tab">대구</a>
						<a href="javascript:setValue('conOffice','부산');" class="tab">부산</a>
						<a href="javascript:setValue('conOffice','전남');" class="tab">전남</a>
						<a href="javascript:setValue('conOffice','토론토');" class="tab">토론토</a>
						<a href="javascript:setValue('conOffice','밴쿠버');" class="tab">밴쿠버</a>
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
						<label for="rdo21">
							<input type="radio" name="con_type" value="call" id="rdo21" checked>
							<i class="icon_rdo"></i>
							<span>전화상담</span>
						</label>
						<label for="rdo22">
							<input type="radio" name="con_type" value="visit" id="rdo22">
							<i class="icon_rdo"></i>
							<span>방문상담</span>
						</label>
					</div>
					<!--// 라디오영역 -->
				</div>
				<div class="res_wrap">
					<div class="inpt_wrap">
						<div class="date_wrap">
							<div class="form_date">
								<input type="text" class="datepick" name="con_date" id="conDate" placeholder="희망 일자를 선택해주세요">
								<select class="select_area" name="con_time" id="conTime">
									<option selected value="">예약시간</option>
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
								<select class="select_area" name="start_year" id="startYear">
									<option value="" selected>년</option>
									<option value="2023">2023년</option>
									<option value="2024">2024년</option>
									<option value="2025">2025년</option>
									<option value="2026">2026년</option>
								</select>
								<select class="select_area" name="start_month" id="startMonth">
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
							<p class="info_tit">이름</p>
							<div class="form_wrap">
								<input type="text" placeholder="이름" name="con_name" id="conName">
							</div>
						</div>
						<div class="info_wrap">
							<p class="info_tit">연락처</p>
							<div class="form_wrap">
								<input type="text" placeholder="전화번호 or 카카오톡 ID" name="con_contact" id="conContact">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--// 상담일시 -->

			<!-- 상담국가 -->
			<div class="cotn">
				<div class="tit_area">
					<p class="cotn_tit">상담국가</p>
				</div>
				<div class="res_wrap">
					<!-- 탭영역 -->
					<div class="pop_tap_wrap">
						<!--
							탭 활성화 class="on" 추가
							탭 비활성화 class="off" 추가
						-->
						<input type="hidden" id="conNatio" name="con_natio" value="">
						<a href="javascript:setValue('conNatio','us');" class="tab on" id="country_usa">미국</a>
						<a href="javascript:setValue('conNatio','uk');" class="tab">영국</a>
						<a href="javascript:setValue('conNatio','ca');" class="tab">캐나다</a>
						<a href="javascript:setValue('conNatio','aus');" class="tab">호주</a>
						<a href="javascript:setValue('conNatio','phil');" class="tab">필리핀</a>
						<a href="javascript:setValue('conNatio','nz');" class="tab">뉴질랜드</a>
						<a href="javascript:setValue('conNatio','ire');" class="tab">아일랜드</a>
						<a href="javascript:setValue('conNatio','etc');" class="tab">기타</a>
					</div>
					<!--// 탭영역 -->
				</div>
			</div>
			<!--// 상담국가 -->

			<!-- 유학과정 -->
			<div class="cotn">
				<div class="tit_area">
					<p class="cotn_tit">유학과정</p>
				</div>
				<div class="res_wrap">
					<!-- 라디오영역 -->
					<div class="rdo_wrap res_rdo">
						<div class="rdo_inner in_01">
							<label for="rdo1">
								<input type="radio" name="con_study" id="rdo1" value="1" checked>
								<i class="icon_rdo"></i>
								<span>어학연수</span>
							</label>
							<label for="rdo2" class="label_b">
								<input type="radio" name="con_study" id="rdo2" value="2">
								<i class="icon_rdo"></i>
								<span>전문과정 (테솔/통번역/인턴쉽 등)</span>
							</label>
							<label for="rdo3" class="label_m">
								<input type="radio" name="con_study" id="rdo3" value="3">
								<i class="icon_rdo"></i>
								<span>교환학생 (중고생)</span>
							</label>
						</div>
						<div class="rdo_inner in_02">
							<label for="rdo4">
								<input type="radio" name="con_study" id="rdo4" value="4">
								<i class="icon_rdo"></i>
								<span>조기유학 (초)</span>
							</label>
							<label for="rdo5">
								<input type="radio" name="con_study" id="rdo5" value="5">
								<i class="icon_rdo"></i>
								<span>조기유학 (중)</span>
							</label>
							<label for="rdo6">
								<input type="radio" name="con_study" id="rdo6" value="6">
								<i class="icon_rdo"></i>
								<span>조기유학 (고)</span>
							</label>
							<label for="rdo7" class="label_m">
								<input type="radio" name="con_study" id="rdo7" value="7">
								<i class="icon_rdo"></i>
								<span>영어캠프 (초중고)</span>
							</label>
						</div>
						<div class="rdo_inner in_03">
							<label for="rdo8">
								<input type="radio" name="con_study" id="rdo8" value="8">
								<i class="icon_rdo"></i>
								<span>컬리지</span>
							</label>
							<label for="rdo9">
								<input type="radio" name="con_study" id="rdo9" value="9">
								<i class="icon_rdo"></i>
								<span>학사</span>
							</label>
							<label for="rdo10">
								<input type="radio" name="con_study" id="rdo10" value="10">
								<i class="icon_rdo"></i>
								<span>석사</span>
							</label>
							<label for="rdo11" class="label_m">
								<input type="radio" name="con_study" id="rdo11" value="11">
								<i class="icon_rdo"></i>
								<span>박사</span>
							</label>
						</div>
					</div>
					<!--// 라디오영역 -->
				</div>
			</div>
			<!--// 유학과정 -->

			<!-- 문의내용 -->
			<div class="cotn">
				<div class="tit_area">
					<p class="cotn_tit">문의내용</p>
				</div>
				<div class="res_wrap">
					<!-- textarea -->
					<div class="textarea_wrap">
						<textarea placeholder="(선택) 문의 내용을 간략히 입력해 주세요." name="con_details"></textarea>
					</div>
					<!--// textarea -->

					<!-- 개인정보수집동의영역 -->
					<div class="policy_wrap">
						<div class="chk_wrap">
							<div class="form_chk">
								<label for="conAgreeYn">
									<input type="checkbox" name="con_agree_yn" id="conAgreeYn">
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
									<p class="tit">수집방법</p>
                                    <p class="txt">
                                    	라임에듀케이션은 다음과 같은 방법으로 개인정보를 수집할 수 있습니다.<br>
                                    	- PC 혹은 모바일 홈페이지 상담예약, 전화, 서면양식
                                    </p>
								</div>
								<div class="txt_wrap">
									<p class="tit">■ 개인정보의 수집 및 이용목적</p>
									<p class="txt">
										수집한 개인정보를 다음의 목적을 위해 활용합니다.
									</p>
									<p class="tit">수집항목</p>
									<p class="txt">
										- 서비스 제공에 관한 계약 이행<br>
                                        - 상담관리<br>
                                        - 고객과의 상담기록 보존, 상담서비스 개선, 서비스 개선을 위한 내부교육자료 활용<br>
                                        - 접속 빈도 파악 또는 회원의 서비스 이용에 대한 통계
									</p>
								</div>
								<div class="txt_wrap">
									<p class="tit">■ 개인정보의 보유 및 이용기간</p>
									<p class="txt">
										이용자의 개인정보는 원칙적으로 개인정보의 수집 및 이용목적이 달성되면 지체없이 파기합니다. 단, 다음의 정보에 대해서는 아래의 이유로 명시한 기간 동안 보존합니다.
									</p>
									<p class="tit">회사 내부 방침에 의한 정보보유 사유</p>
									<p class="txt">
										- 부정이용기록 보존 이유 : 부정 이용 방지<br>
                                        - 보존기간 : 1년
									</p>
									<p class="tit">상법 등 관련법령의 규정 및 내부 방침에 의해 다음과 같이 거래 관련 권리의무 관계의 확인 등을 이유로 필요한 경우에는 일정기간 보유합니다.</p>
									<p class="txt">
										※ 관련 법령(상법, 국세기본법, 법인세법, 전자상거래 등에서의 소비자 보호에 관한 법률 등)에 의한 정보 보유<br><br>
                                        보유사항 및 보존기간<br>
                                        - 계약 또는 청약철회 등에 관련 기록 : 5년<br>
                                        - 대금결제 및 재화 등의 공급에 관한 기록 : 5년<br>
                                        - 소비자의 불만 또는 분쟁처리에 관한 기록 : 5년<br>

									</p>
								</div>
								<div class="txt_wrap">
									<p class="tit">■ 동의 거부 시 불이익에 관한 사항</p>
									<p class="txt">
										'개인정보 수집 및 이용 안내' 에 관한 사항의 동의를 거부할 때에는 서비스의 이용이 제한됩니다.
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
				<button type="button" class="pop_btn cancel">취소</button>
				<button type="button" class="pop_btn confirm" onclick="applyStart();">상담예약</button>
			</div>
			<!--// 버튼 -->
		</form>
	</div>
	<!--// 컨텐츠 -->
</section>
<!--// 상담예약팝업 -->
