<!-- 상담예약팝업 -->
<section class="popup_wrap cs_pop">
	<!-- 팝업헤더 -->
	<header class="pop_head">
		<h1>상담 예약</h1>
	</header>
	<!--// 팝업헤더 -->

	<!-- 컨텐츠 -->
	<div class="pop_cotn">
		<form action="">
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
						<a href="#none" class="tab on">서울</a>
						<a href="#none" class="tab">대전</a>
						<a href="#none" class="tab">송도</a>
						<a href="#none" class="tab">대구</a>
						<a href="#none" class="tab">부산</a>
						<a href="#none" class="tab">제주</a>
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
							<input type="radio" name="rdo_02" id="rdo21" checked>
							<i class="icon_rdo"></i>
							<span>전화상담</span>
						</label>
						<label for="rdo22">
							<input type="radio" name="rdo_02" id="rdo22">
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
								<input type="text" class="datepick">
								<select class="select_area">
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
								<select class="select_area">
									<option selected>년</option>
									<option>2023년</option>
									<option>2024년</option>
									<option>2025년</option>
									<option>2026년</option>
								</select>
								<select class="select_area">
									<option selected>월</option>
									<option>1월</option>
									<option>2월</option>
									<option>3월</option>
									<option>4월</option>
									<option>5월</option>
									<option>6월</option>
									<option>7월</option>
									<option>8월</option>
									<option>9월</option>
									<option>10월</option>
									<option>11월</option>
									<option>12월</option>
								</select>
							</div>
						</div>
						<div class="info_wrap">
							<p class="info_tit">신청자 이름</p>
							<div class="form_wrap">
								<input type="text" placeholder="신청자 이름">
							</div>
						</div>
						<div class="info_wrap">
							<p class="info_tit">신청자 연락처</p>
							<div class="form_wrap">
								<input type="text" placeholder="전화번호 or 카카오톡 ID">
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
						<a href="#none" class="tab on">미국</a>
						<a href="#none" class="tab">영국</a>
						<a href="#none" class="tab">캐나다</a>
						<a href="#none" class="tab">호주</a>
						<a href="#none" class="tab">필리핀</a>
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
								<input type="radio" name="rdo_01" id="rdo1" checked>
								<i class="icon_rdo"></i>
								<span>어학연수</span>
							</label>
							<label for="rdo2" class="label_b">
								<input type="radio" name="rdo_01" id="rdo2">
								<i class="icon_rdo"></i>
								<span>전문과정 (테솔/통번역/인턴쉽 등)</span>
							</label>
							<label for="rdo3" class="label_m">
								<input type="radio" name="rdo_01" id="rdo3">
								<i class="icon_rdo"></i>
								<span>교환학생 (중고생)</span>
							</label>
						</div>
						<div class="rdo_inner in_02">
							<label for="rdo4">
								<input type="radio" name="rdo_01" id="rdo4">
								<i class="icon_rdo"></i>
								<span>조기유학 (초)</span>
							</label>
							<label for="rdo5">
								<input type="radio" name="rdo_01" id="rdo5">
								<i class="icon_rdo"></i>
								<span>조기유학 (중)</span>
							</label>
							<label for="rdo6">
								<input type="radio" name="rdo_01" id="rdo6">
								<i class="icon_rdo"></i>
								<span>조기유학 (고)</span>
							</label>
							<label for="rdo7" class="label_m">
								<input type="radio" name="rdo_01" id="rdo7">
								<i class="icon_rdo"></i>
								<span>영어캠프 (초중고)</span>
							</label>
						</div>
						<div class="rdo_inner in_03">
							<label for="rdo8">
								<input type="radio" name="rdo_01" id="rdo8">
								<i class="icon_rdo"></i>
								<span>컬리지</span>
							</label>
							<label for="rdo9">
								<input type="radio" name="rdo_01" id="rdo9">
								<i class="icon_rdo"></i>
								<span>학사</span>
							</label>
							<label for="rdo10">
								<input type="radio" name="rdo_01" id="rdo10">
								<i class="icon_rdo"></i>
								<span>석사</span>
							</label>
							<label for="rdo11" class="label_m">
								<input type="radio" name="rdo_01" id="rdo11">
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
						<textarea placeholder="(선택) 문의 내용을 간략히 입력해 주세요."></textarea>
					</div>
					<!--// textarea -->

					<!-- 개인정보수집동의영역 -->
					<div class="policy_wrap">
						<div class="chk_wrap">
							<div class="form_chk">
								<label for="chk1">
									<input type="checkbox" name="chk_01" id="chk1">
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
				<button type="button" class="pop_btn cancel">취소</button>
				<button type="button" class="pop_btn confirm">상담예약</button>
			</div>
			<!--// 버튼 -->
		</form>
	</div>
	<!--// 컨텐츠 -->
</section>
<!--// 상담예약팝업 -->
