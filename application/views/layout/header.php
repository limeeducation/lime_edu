<!-- 전체메뉴 영역 -->
<script>
	$(document).ready(function(){
		var container = document.getElementById('container');
		container.style.zoom = 0.8;
		var cs_pop = document.getElementsByClassName('cs_pop')[0];
		cs_pop.style.zoom = 0.8;
	});
</script>
<aside id="mobileMenu">
	<div class="inner">
		<a href="#" class="mo_menu_close"><i class="ri-close-line"></i><span class="blind">전체메뉴 닫기</span></a>
		<ul class="mobile_user">
			<li><a href="javascript:on_construct();">로그인</a></li>
			<li><a href="javascript:on_construct();">회원가입</a></li>
		</ul>
		<ul id="mnb">
			<li class="item1">
				<a href="#"><span>해외대학 유학</span></a>
				<ul class="depth">
					<li>
						<a href="#" class="depth_sub_title"><i><img src="/static/img/common/gnb_ico_us@2x.png" alt=""></i>미국</a>
						<ul class="depth_list">
							<li><a href="#">미국 대학교 랭킹</a></li>
							<li><a href="#">미국 대학 진학방법</a></li>
							<li><a href="#">명문대 편입 프로그램</a></li>
						</ul>
					</li>
					<li>
						<a href="#" class="depth_sub_title"><i><img src="/static/img/common/gnb_ico_ca@2x.png" alt=""></i>캐나다</a>
						<ul class="depth_list">
							<li><a href="#">캐나다 대학교 랭킹</a></li>
							<li><a href="#">국제학생 특별 전형</a></li>
							<li><a href="#">국제고를 통한 지원</a></li>
							<li><a href="#">명문대 편입 프로그램</a></li>
							<li><a href="#">캐나다 대학교 다이렉트 신입학 & 편입</a></li>
						</ul>
					</li>
					<li>
						<a href="#" class="depth_sub_title"><i><img src="/static/img/common/gnb_ico_gb@2x.png" alt=""></i>영국</a>
						<ul class="depth_list">
							<li><a href="#">영국 대학교 랭킹</a></li>
							<li><a href="#">국제학생 특별전형</a></li>
							<li><a href="#">명문대 편입 프로그램</a></li>
							<li><a href="#">다이렉트 지원</a></li>
							<li><a href="#">캐나다 국제 사립고를 통한 지원</a></li>
						</ul>
					</li>

				</ul>
			</li>
			<li class="item2">
				<a href="#"><span>조기유학</span></a>
				<ul class="depth">
					<li>
						<a href="/earlyAbroad/whyEarlyUsa" class="depth_sub_title"><i><img src="/static/img/common/gnb_ico_us@2x.png" alt=""></i>미국</a>
						<ul class="depth_list">
							<li><a href="/earlyAbroad/usSchoolList">조기유학 학교찾기</a></li>
							<li><a href="/earlyAbroad/whyEarlyUsa">왜 조기유학인가?</a></li>
							<li><a href="/earlyAbroad/usTopSchools">명문 TOP 50</a></li>
						</ul>
					</li>
					<li>
						<a href="/earlyAbroad/whyEarlyCa" class="depth_sub_title"><i><img src="/static/img/common/gnb_ico_ca@2x.png" alt=""></i>캐나다</a>
						<ul class="depth_list">
							<li><a href="/earlyAbroad/caSchoolList">조기유학 학교찾기</a></li>
							<li><a href="/earlyAbroad/whyEarlyCa">왜 조기유학인가?</a></li>
							<li><a href="/earlyAbroad/abtCaManageAbroad">관리형 유학</a></li>
							<li><a href="/earlyAbroad/caInternationalPrivate">국제사립학교</a></li>
						</ul>
					</li>
					<li>
						<a href="/earlyAbroad/whyEarlyUk" class="depth_sub_title"><i><img src="/static/img/common/gnb_ico_gb@2x.png" alt=""></i>영국</a>
						<ul class="depth_list">
							<li><a href="/earlyAbroad/ukSchoolList">조기유학 학교찾기</a></li>
							<li><a href="/earlyAbroad/whyEarlyUk">왜 조기유학인가?</a></li>
							<li><a href="/earlyAbroad/ukTopSchools">명문 TOP 100</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="item3">
				<a href="#"><span>어학연수</span></a>
				<ul class="depth">
					<li>
						<a href="/StudyEnglishAbroad/usAcademyList" class="depth_sub_title"><i><img src="/static/img/common/gnb_ico_us@2x.png" alt=""></i>미국</a>
					</li>
					<li>
						<a href="#" class="depth_sub_title"><i><img src="/static/img/common/gnb_ico_ca@2x.png" alt=""></i>캐나다</a>
					</li>
					<li>
						<a href="#" class="depth_sub_title"><i><img src="/static/img/common/gnb_ico_phi@2x.png" alt=""></i>필리핀</a>
					</li>
				</ul>
			</li>
			<li class="item4">
				<a href="#"><span>가족연수/캠프/스쿨링</span></a>
				<ul class="depth">
					<li>
						<a href="#" class="depth_sub_title"><i><img src="/static/img/common/gnb_ico_us@2x.png" alt=""></i>미국</a>
					</li>
					<li>
						<a href="#" class="depth_sub_title"><i><img src="/static/img/common/gnb_ico_ca@2x.png" alt=""></i>캐나다</a>
					</li>
					<li>
						<a href="#" class="depth_sub_title"><i><img src="/static/img/common/gnb_ico_gb@2x.png" alt=""></i>영국</a>
					</li>
					<li>
						<a href="#" class="depth_sub_title"><i><img src="/static/img/common/gnb_ico_nz@2x.png" alt="NZ"></i>뉴질랜드</a>
					</li>
					<li>
						<a href="#" class="depth_sub_title"><i><img src="/static/img/common/gnb_ico_phi@2x.png" alt="PH"></i>필리핀</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</aside>
<!-- // 전체메뉴 영역 -->

<!-- header -->
<header id="header" class="on">
	<!-- headUser -->
	<div id="headUser">
		<ul class="header_user">
			<li><a href="javascript:on_construct();">로그인</a></li>
			<li><a href="javascript:on_construct();">회원가입</a></li>
		</ul>
	</div>
	<!-- // headUser -->

	<!-- headGlobal -->
	<div id="headGlobal">
		<h1 class="header_logo"><a href="/main/new_main">라임에듀</a></h1>

		<nav class="header_nav">
			<ul id="gnb">
				<li class="item item1"><a href="/main/new_main?tab=5">해외대학 유학</a>
					<div class="depth_wrap">
						<div class="inner">

							<div class="depth_title">해외대학 유학</div>
							<ul class="depth_group">
								<li>
									<a href="#" class="depth_sub_title"><i><img src="/static/img/common/gnb_ico_us@2x.png" alt=""></i>미국</a>
									<ul class="depth_list">
										<li><a href="#">미국 대학교 랭킹</a></li>
										<li><a href="#">미국 대학 진학방법</a></li>
										<li><a href="#">명문대 편입 프로그램</a></li>
									</ul>
								</li>
								<li>
									<a href="#" class="depth_sub_title"><i><img src="/static/img/common/gnb_ico_ca@2x.png" alt=""></i>캐나다</a>
									<ul class="depth_list">
										<li><a href="#">캐나다 대학교 랭킹</a></li>
										<li><a href="#">국제학생 특별 전형</a></li>
										<li><a href="#">국제고를 통한 지원</a></li>
										<li><a href="#">명문대 편입 프로그램</a></li>
										<li><a href="#">캐나다 대학교 다이렉트 신입학 & 편입</a></li>
									</ul>
								</li>
								<li>
									<a href="#" class="depth_sub_title"><i><img src="/static/img/common/gnb_ico_gb@2x.png" alt=""></i>영국</a>
									<ul class="depth_list">
										<li><a href="#">영국 대학교 랭킹</a></li>
										<li><a href="#">국제학생 특별전형</a></li>
										<li><a href="#">명문대 편입 프로그램</a></li>
										<li><a href="#">다이렉트 지원</a></li>
										<li><a href="#">캐나다 국제 사립고를 통한 지원</a></li>
									</ul>
								</li>
							</ul>

						</div>
					</div>
				</li>
				<li class="item item2"><a href="/main/new_main?tab=6">조기유학</a>
					<div class="depth_wrap">
						<div class="inner">

							<div class="depth_title">조기유학</div>
							<ul class="depth_group">
								<li>
									<a href="/earlyAbroad/whyEarlyUsa" class="depth_sub_title"><i><img src="/static/img/common/gnb_ico_us@2x.png" alt=""></i>미국</a>
									<ul class="depth_list">
										<li><a href="/earlyAbroad/usSchoolList">조기유학 학교찾기</a></li>
										<li><a href="/earlyAbroad/whyEarlyUsa">왜 조기유학인가?</a></li>
										<li><a href="/earlyAbroad/usTopSchools">명문 TOP 50</a></li>
									</ul>
								</li>
								<li>
									<a href="/earlyAbroad/whyEarlyCa" class="depth_sub_title"><i><img src="/static/img/common/gnb_ico_ca@2x.png" alt=""></i>캐나다</a>
									<ul class="depth_list">
										<li><a href="/earlyAbroad/caSchoolList">조기유학 학교찾기</a></li>
										<li><a href="/earlyAbroad/whyEarlyCa">왜 조기유학인가?</a></li>
										<li><a href="/earlyAbroad/abtCaManageAbroad">관리형 유학</a></li>
										<li><a href="/earlyAbroad/caInternationalPrivate">국제사립학교</a></li>
									</ul>
								</li>
								<li>
									<a href="/earlyAbroad/whyEarlyUk" class="depth_sub_title"><i><img src="/static/img/common/gnb_ico_gb@2x.png" alt=""></i>영국</a>
									<ul class="depth_list">
										<li><a href="/earlyAbroad/ukSchoolList">조기유학 학교찾기</a></li>
										<li><a href="/earlyAbroad/whyEarlyUk">왜 조기유학인가?</a></li>
										<li><a href="/earlyAbroad/ukTopSchools">명문 TOP 100</a></li>
									</ul>
								</li>
							</ul>

						</div>
					</div>
				</li>
				<li class="item item3"><a href="/main/new_main?tab=7">어학연수</a>
					<div class="depth_wrap">
						<div class="inner">

							<div class="depth_title">어학연수</div>
							<ul class="depth_group">
								<li>
									<a href="/StudyEnglishAbroad/usAcademyList" class="depth_sub_title"><i><img src="/static/img/common/gnb_ico_us@2x.png" alt=""></i>미국</a>
								</li>
								<li>
									<a href="#" class="depth_sub_title"><i><img src="/static/img/common/gnb_ico_ca@2x.png" alt=""></i>캐나다</a>
								</li>
								<li>
									<a href="#" class="depth_sub_title"><i><img src="/static/img/common/gnb_ico_phi@2x.png" alt=""></i>필리핀</a>
								</li>
							</ul>

						</div>
					</div>
				</li>
				<li class="item item4"><a href="/main/new_main?tab=8">가족연수/캠프/스쿨링</a>
					<div class="depth_wrap">
						<div class="inner">

							<div class="depth_title">가족연수/캠프/스쿨링</div>
							<ul class="depth_group type5">
								<li>
									<a href="#" class="depth_sub_title"><i><img src="/static/img/common/gnb_ico_us@2x.png" alt=""></i>미국</a>
								</li>
								<li>
									<a href="#" class="depth_sub_title"><i><img src="/static/img/common/gnb_ico_ca@2x.png" alt=""></i>캐나다</a>
								</li>
								<li>
									<a href="#" class="depth_sub_title"><i><img src="/static/img/common/gnb_ico_gb@2x.png" alt=""></i>영국</a>
								</li>
								<li>
									<a href="#" class="depth_sub_title"><i><img src="/static/img/common/gnb_ico_nz@2x.png" alt="NZ"></i>뉴질랜드</a>
								</li>
								<li>
									<a href="#" class="depth_sub_title"><i><img src="/static/img/common/gnb_ico_phi@2x.png" alt="PH"></i>필리핀</a>
								</li>
							</ul>

						</div>
					</div>
				</li>
			</ul>
		</nav><!-- // header_nav -->

		<ul class="header_btns">
			<li class="instagram"><a href="https://www.instagram.com/limeedu/?igshid=YmMyMTA2M2Y%3D" target="_blank">인스타그램</a></li>
			<li class="blog"><a href="https://blog.naver.com/mylimeeducation" target="_blank">블로그</a></li>
			<li class="blog"><a href="https://blog.naver.com/PostList.naver?blogId=thelimeinc" target="_blank">블로그</a></li>
		</ul><!-- // header_btns -->

		<div class="header_mo_menu"><a href="#" class="mo_menu_open"><i class="ri-menu-line"></i><span class="blind">전체메뉴 열기</span></a></div>

	</div>
	<!-- // headGlobal -->

</header>
<!-- // header -->
<script type="text/javascript">
	function on_construct(){
		alert('현재 준비중인 기능입니다.');
	}
</script>
