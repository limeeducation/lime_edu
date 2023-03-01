<?php
include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/head.php');
//include_once($_SERVER['DOCUMENT_ROOT']."/inc/blog_list.php");
?>
<link rel="stylesheet" type="text/css" href="/static/css/sub.css">
<script src="/static/js/map.js"></script>
<script src="/static/js/product_detail.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDi41nisz2OpbuKdeFUA1824LYFLB93hso&callback=initMap"></script>
<script>
	$(document).ready(function(){
		var dist = '<?= $dist;?>';
		if(dist == 'cebu'){
			$("#all_btn").removeClass("on");
			$("#cebu_btn").addClass("on");
			$("#map_all").removeClass("on");
			$("#map_cebu").addClass("on");
		}else if(dist == 'baguio'){
			$("#all_btn").removeClass("on");
            $("#baguio_btn").addClass("on");
            $("#map_all").removeClass("on");
            $("#map_baguio").addClass("on");
		}
	});
	//상세보기 지도 초기화
	var map;
	function initMap() {
    	var mapOptions = {
    		zoom : 17,
    		center : new google.maps.LatLng(37.5651, 126.98955), //서울
    		mapTypeId : google.maps.MapTypeId.ROADMAP
    	};
    	map = new google.maps.Map(document.getElementById('md_cont_map'), mapOptions);
    }


	function open_detail(ph_idx){
		$.ajax({
			type: "post",
			url: "/studyEnglishAbroad/apiGetPhAcaDetail",
			async: true,
			data: {
				"idx": ph_idx
			},
			dataType: "text",
			success: function(data){
				var details = JSON.parse(data);
				$("#detail_school_name").empty();
				$("#detail_school_name").append(details['info'][0].aca_name);
				$("#detail_school_dist").empty();
				$("#detail_school_dist").append(details['info'][0].aca_city);
				$("#detail_school_students").empty();
				$("#detail_school_students").append(details['info'][0].aca_students);
				$("#detail_school_curri").empty();
				$("#detail_school_curri").append(details['info'][0].aca_curri);
				$("#detail_school_published").empty();
				$("#detail_school_published").append(details['info'][0].aca_published);
				$("#detail_school_intro").empty();
				$("#detail_school_intro").append(details['info'][0].aca_detail);
				$("#detail_school_address").empty();
                $("#detail_school_address").append(details['info'][0].aca_address);
                $("#detail_school_address_hidden").val(details['info'][0].aca_address);
                getDetailMapLatLon();
                $("#detail_sns_ul").empty();
                var sns_html = "";
				details['sns'].forEach(function(sns){
					if(sns.sns_type == 'Youtube'){
						sns_html += "<li><a href='"+sns.sns_url+"' class='item1' target='_blank'><img src='/static/img/std_eng_abrd/phil/modal_tabs_icons_youtube@2x.png' alt='Youtube'></a></li>";
					}else if(sns.sns_type == 'Facebook'){
						sns_html += "<li><a href='"+sns.sns_url+"' class='item1' target='_blank'><img src='/static/img/std_eng_abrd/phil/modal_tabs_icons_facebook@2x.png' alt='Facebook'></a></li>";
					}else if(sns.sns_type == 'Instagram'){
                     	sns_html += "<li><a href='"+sns.sns_url+"' class='item1' target='_blank'><img src='/static/img/std_eng_abrd/phil/modal_tabs_icons_instagram@2x.png' alt='Instagram'></a></li>";
                    }else if(sns.sns_type == 'Twitter'){
                    	sns_html += "<li><a href='"+sns.sns_url+"' class='item1' target='_blank'><img src='/static/img/std_eng_abrd/phil/modal_tabs_icons_twitter@2x.png' alt='Twitter'></a></li>";
                    }else{
                    	sns_html += "<li><a href='"+sns.sns_url+"' class='item1' target='_blank'><img src='/static/img/std_eng_abrd/phil/modal_tabs_icons_home@2x.png' alt='Home'></a></li>";
                    }
				});
				$("#detail_sns_ul").append(sns_html);
				$("#detail_curri_list").empty();
				var curri_html = "<option value=''>커리큘럼 선택</option>";
				details['curri'].forEach(function(curri){
					curri_html += "<option value='"+curri.idx+"'>"+curri.curri_name+"</option>";
				});
				$("#detail_curri_list").append(curri_html);
			},error: function(data){
				alert("잠시 후 다시 시도해주세요.");
			}
		});
	}

	function setCurriDetailFromSchoolDetail(){
		var selected = document.getElementById("detail_curri_list");
		var selId = selected.options[selected.selectedIndex].value;
		$.ajax({
			type: "post",
			url: "/studyEnglishAbroad/apiGetPhCurriDetail",
			async: true,
			data: {
				"idx": selId
			},
			dataType: "text",
			success: function(data){
				var details = JSON.parse(data);
				var curri_dtl_html = "";
				$(".each_curri_detail").remove();
				details['curri'].forEach(function(curri){
					curri_dtl_html += "<dl class='md_cont_data each_curri_detail'>";
					curri_dtl_html += "<dt>"+curri.class_name+"</dt>";
					curri_dtl_html += "<dd>"+curri.class_detail+"</dd>";
					curri_dtl_html += "</dl>";
				});
				$("#each_dtl_curri").append(curri_dtl_html);
			},error: function(data){
				alert("잠시 후 다시 시도해주세요.");
			}
		});
	}

	var geocoder;
	function getDetailMapLatLon(){
		geocoder = new google.maps.Geocoder();
		var address = document.getElementById('detail_school_address_hidden').value;
		geocoder.geocode( { 'address': address}, function(results, status) {
			if (status == google.maps.GeocoderStatus.OK) {
				var lat = results[0]['geometry']['location']['lat']();
				var lng = results[0]['geometry']['location']['lng']();
				map.setCenter(results[0].geometry.location);
				var marker = new google.maps.Marker({
					map: map,
					position: results[0].geometry.location,
					draggable:false,
					animation:google.maps.Animation.DROP,
					title:address
				});
			}else{
				alert('지도 호출 실패');
			}
		});
	}

	function open_compare(ph_idx){

    }
</script>
<body>

	<div id="wrap">
	<?php
    include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/header.php');
    ?>
		<div id="container" style="padding:0;">

			<div id="content">

				<!-- 필리핀 어학연수 메인 배너 -->
				<section class="cont_sect" id="trainingVisual">
					<div class="inner">

						<div class="visual_flag"><img src="/static/img/std_eng_abrd/phil/training_visual_img@2x.png" alt=""></div>
						<div class="visual_title">필리핀 어학연수</div>

					</div><!-- // inner -->
				</section>
				<!-- // cont_sect -->
				<!-- 필리핀 학원 선택기준 배너 -->
				<section class="cont_sect" id="trainingBanner">
					<div class="inner">

						<div class="cont_image"><a href="#modal_01" class="modal_open"><img src="/static/img/std_eng_abrd/phil/training_banner@2x.png" alt="필리핀 어학원은 어떤 기준으로 골라야 하나요..? 내게 딱 맞는 학원 고르는 방법!"></a></div>

					</div><!-- // inner -->
				</section>
				<!-- // 필리핀 학원 선택기준 배너 -->

				<!-- 필리핀 전체 지도 영역 -->
				<section class="cont_sect" id="trainingMap">

					<ul class="inner training_tabs_list type3">
						<li class="on" id="all_btn"><a href="/StudyEnglishAbroad/philAcademyList">전체</a></li>
						<li class="" id="cebu_btn"><a href="/StudyEnglishAbroad/philAcademyList/cebu">세부</a></li>
						<li class="" id="baguio_btn"><a href="/StudyEnglishAbroad/philAcademyList/baguio">바기오</a></li>
					</ul><!-- // inner -->
					<div class="training_tabs_info">
						<div class="training_tabs_item item1 on" id="map_all">전체 지도</div>
						<div class="training_tabs_item item2" id="map_cebu">세부 지도</div>
						<div class="training_tabs_item item3" id="map_baguio">바기오 지도</div>
					</div>
				</section>
				<!-- // 필리핀 전체 지도 영역 -->

				<!-- 학원 리스트 영역 -->
				<section class="cont_sect" id="trainingAcademy">
					<div class="inner">
						<div class="training-swiper">
							<div class="swiper-container">
								<div class="swiper-wrapper">
									<!-- 학원 5개 단위로 해당 div가 반복되어야 함 -->
									<?php $i = 1; ?>
									<?php foreach($school_list as $key => $value): ?>
									<?php if($i %5 == 1): ?>
									<div class="swiper-slide item">
										<ul class="training_academy_list">
									<?php endif; ?>
											<!-- 해당 li가 반복되어야 함 -->
											<li class="training_academy_item">
												<div class="item_logo">
													<div class="logo_image"><img src="/static/img/std_eng_abrd/phil/academy_item_logo@2x.png" alt=""></div>
													<div class="logo_name"><?= $school_list[$i]->aca_name; ?></div>
												</div><!-- // item_logo -->
												<div class="item_info">
													<dl class="training_academy_data">
														<dt>학원위치</dt>
														<dd><div class="text"><?= $school_list[$i]->aca_city; ?></div></dd>
														<dt>학생규모</dt>
														<dd><div class="text"><?= $school_list[$i]->aca_students; ?></div></dd>
														<dt>커리큘럼</dt>
														<dd><div class="text"><?= $school_list[$i]->aca_curri; ?></div></dd>
														<dt>설립연도</dt>
														<dd><div class="text"><?= $school_list[$i]->aca_published; ?></div></dd>
														<dt>학원설명</dt>
														<dd class="colspan"><div class="text auto"><?= $school_list[$i]->aca_detail; ?></div></dd>
													</dl>
													<div class="training_academy_btn">
														<a href="#modal_02" class="modal_open" onclick="open_detail('<?= $school_list[$i]->ph_idx; ?>');">상세보기 +</a>
														<a href="#modal_03" class="modal_open" onclick="open_compare('<?= $school_list[$i]->ph_idx; ?>');">비교하기 +</a>
													</div>
												</div><!-- // item_info -->
											</li><!-- // training_academy_item -->
									<?php if($i %5 == 0 || empty($school_list[$i]->aca_name)): ?>
										</ul>
									</div><!-- // swiper-slide -->
									<?php endif; ?>
									<?php $i++; ?>
									<?php if(empty($school_list[$i]->aca_name)){break;}?>
									<?php endforeach; ?>
								</div><!-- // swiper-wrapper -->
							</div><!-- // swiper-container -->
							<div class="swiper-control">
								<div class="swiper-button-prev"></div>
								<div class="swiper-pagination"></div>
								<div class="swiper-button-next"></div>
							</div><!-- // swiper-control -->

						</div><!-- // training-swiper -->

						<div class="training_search" style="display:none;">
							<input type="text" placeholder="학원 이름으로 검색">
						</div><!-- // training_search -->

						<script>

							jQuery(function($){

								var training_swiper = new Swiper('.training-swiper .swiper-container', {
									slidesPerView:1,
									spaceBetween:40,
									speed :900,
									navigation: {
										nextEl: '.training-swiper .swiper-button-next',
										prevEl: '.training-swiper .swiper-button-prev',
									},
									pagination: {
										el : '.training-swiper .swiper-pagination',
										clickable: true,
										renderBullet: function (index, className) {
											return '<span class="' + className + '">' + (index + 1) + "</span>";
										},
									},
									breakpoints:{
										320:{
											slidesPerView:1,
											spaceBetween:30,
										},
										960:{
											slidesPerView:1,
											spaceBetween:30,
										},
									},
								});

							});
						</script>

					</div><!-- // inner -->
				</section>
				<!-- // 학원 리스트 영역 -->

				<!-- 필리핀 학원 선택 모달 -->
				<div class="modal_wrap modal_academy" id="modal_01">
					<div class="modal_area">

						<div class="modal_head">
							<div class="modal_logo"><img src="/static/img/common/header_logo_2@2x.png" alt="LIME EDU"></div>
							<button class="modal_close">닫기</button>
						</div><!-- // modal_head -->

						<div class="modal_body">

							<ul class="modal_menu_list type2">
								<li class="on"><a href="#"><i><img src="/static/img/std_eng_abrd/phil/modal_menu_ico1@2x.png" alt=""></i>지역별 비교</a></li>
								<li class=""><a href="#"><i><img src="/static/img/std_eng_abrd/phil/modal_menu_ico2@2x.png" alt=""></i>커리큘럼별 비교</a></li>
							</ul><!-- // inner -->
							<div class="modal_menu_info">
								<div class="modal_menu_item">

									<ul class="modal_tabs_list type3">
										<li class="on"><a href="#">세부</a></li>
										<li class=""><a href="#">바기오</a></li>
										<li class=""><a href="#">기타</a></li>
									</ul><!-- // inner -->
									<div class="modal_tabs_info">
										<div class="modal_tabs_item">

											<div class="md_cont_academy">
												<p class="md_cont_image"><img src="/static/img/std_eng_abrd/phil/modal_tabs_academy1@2x.png" alt=""></p>
											</div><!-- // md_cont_academy -->

											<ul class="md_cont_list">
												<li>가장 인기 높은 어학연수 도시로 그에 따라 대규모 시스템이 잘 갖춰진 어학교육기관이 밀집</li>
												<li>발전된 도시로 깨끗한 환경과 우수한 시설 보유</li>
												<li>필리핀의 주요 관광지로 주말에 누릴 수 있는 야외활동이 풍부</li>
												<li>입학일이 따로 정해져 있지 않아 학업 스케쥴 짜기가 용이</li>
											</ul>

										</div><!-- // modal_tabs_item -->

										<div class="modal_tabs_item item2">

											<div class="md_cont_academy">
												<p class="md_cont_image"><img src="/static/img/std_eng_abrd/phil/modal_tabs_academy2@2x.png" alt=""></p>
											</div><!-- // md_cont_academy -->

											<ul class="md_cont_list">
												<li>유흥시설 등 학업 저해요소가 현저히 적고, <br>조용한 환경에서 공부에 집중하기에 적합한 도시</li>
												<li>필리핀 내 타 도시에 비해 치안이 안정되어 있어 <br>안전한 학업과 생활이 가능</li>
												<li>선선한 날씨 덕분에 기후로 인한 어려움이 감소하여<br>더위에 지치지 않고 공부할 수 있음음</li>
											</ul>

										</div><!-- // modal_tabs_item -->

										<div class="modal_tabs_item item3">

											<dl class="md_cont_academy_data">
												<dt><img src="/static/img/std_eng_abrd/phil/modal_tabs_academy3_1@2x.png" alt=""></dt>
												<dd>
													<strong>마닐라</strong>
													<p>유흥시설 등 학업 저해요소가 현저히 적고, 조용한 환경에서 공부에 집중하기에 적합한 도시</p>
													<p>필리핀 내 타 도시에 비해 치안이 안정되어 있어 안전한 학업과 생활이 가능</p>
												</dd>
											</dl>
											<dl class="md_cont_academy_data">
												<dt><img src="/static/img/std_eng_abrd/phil/modal_tabs_academy3_2@2x.png" alt=""></dt>
												<dd>
													<strong>클락</strong>
													<p>유흥시설 등 학업 저해요소가 현저히 적고, 조용한 환경에서 공부에 집중하기에 적합한 도시</p>
													<p>필리핀 내 타 도시에 비해 치안이 안정되어 있어 안전한 학업과 생활이 가능</p>
												</dd>
											</dl>
											<dl class="md_cont_academy_data">
												<dt><img src="/static/img/std_eng_abrd/phil/modal_tabs_academy3_3@2x.png" alt=""></dt>
												<dd>
													<strong>일로일로</strong>
													<p>유흥시설 등 학업 저해요소가 현저히 적고, 조용한 환경에서 공부에 집중하기에 적합한 도시</p>
													<p>필리핀 내 타 도시에 비해 치안이 안정되어 있어 안전한 학업과 생활이 가능</p>
												</dd>
											</dl>

										</div><!-- // modal_tabs_item -->

									</div><!-- // modal_tabs_info -->

								</div><!-- // modal_menu_item -->

								<div class="modal_menu_item">

									<ul class="md_cont_curriculum type_th">
										<li class="item empty"></li>
										<li class="item"><div class="box">정규 수업량</div></li>
										<li class="item"><div class="box">생활 관리</div></li>
										<li class="item"><div class="box">기타 특징</div></li>
									</ul>
									<ul class="md_cont_curriculum type_td">
										<li class="item title"><div class="box">스파르타</div></li>
										<li class="item"><div class="box">1일 <br>7 ~ 8타임 수업</div></li>
										<li class="item"><div class="box">주중 외출불가 <br>주말 외출가능</div></li>
										<li class="item"><div class="box">정규 수업 외 <br>단어테스트, <br>일기 작성, <br>강제 자습 실시</div></li>
									</ul>
									<ul class="md_cont_curriculum type_td">
										<li class="item title"><div class="box">세미 스파르타</div></li>
										<li class="item"><div class="box">1일 <br>6 ~ 8타임 수업</div></li>
										<li class="item"><div class="box">주중/주말 <br>외출 가능 <br>(주중 통금시간 존재)</div></li>
										<li class="item"><div class="box">정규 수업 외 <br>자유시간 <br>(통금시간 엄수)</div></li>
									</ul>
									<ul class="md_cont_curriculum type_td">
										<li class="item title"><div class="box">일반(자율형)</div></li>
										<li class="item"><div class="box">1일 <br>6 ~ 7타임 수업</div></li>
										<li class="item"><div class="box">주중/주말 <br>외출 자유 <br>(통금시간 없음)</div></li>
										<li class="item"><div class="box">정규 수업 외 <br>자유시간</div></li>
									</ul>

									<div class="md_cont_text">
										<div class="title">공통사항</div>
										<div class="text">
											<strong>▶ ㅇㅇㅇ특징</strong>
											<p>이러저러하고 이러저러한 특징이 있음</p>
										</div>
										<div class="text">
											<strong>▶ ㅇㅇㅇ특징</strong>
											<p>이러저러하고 이러저러한 특징이 있음</p>
										</div>
										<div class="text">
											<strong>▶ ㅇㅇㅇ특징</strong>
											<p>이러저러하고 이러저러한 특징이 있음</p>
										</div>
									</div><!-- // md_cont_text -->

								</div><!-- // modal_menu_item -->
							</div><!-- // modal_menu_info -->

						</div><!-- // modal_body -->

					</div><!-- // modal_area -->
				</div>
				<!-- // 필리핀 학원 선택 모달 -->
				<!-- 필리핀 학원 상세보기 -->
				<div class="modal_wrap" id="modal_02">
					<div class="modal_area">

						<div class="modal_head">
							<div class="modal_logo"><img src="/static/img/common/header_logo_2@2x.png" alt="LIME EDU"></div>
							<button class="modal_close">닫기</button>
						</div><!-- // modal_head -->

						<div class="modal_body">
							<div class="modal_training_academy">
								<div class="training_academy_item">
									<div class="item_logo">
										<div class="logo_image"><img src="/static/img/std_eng_abrd/phil/academy_item_logo@2x.png" alt=""></div>
										<div class="logo_name" id="detail_school_name">SMEAG 캐피탈</div>
									</div><!-- // item_logo -->
									<div class="item_info">
										<dl class="training_academy_data">
											<dt>학원위치</dt>
											<dd><div class="text" id="detail_school_dist">세부</div></dd>
											<dt>학생규모</dt>
											<dd><div class="text" id="detail_school_students">500</div></dd>
											<dt>커리큘럼</dt>
											<dd><div class="text" id="detail_school_curri">스파르타</div></dd>
											<dt>설립연도</dt>
											<dd><div class="text" id="detail_school_published">2000</div></dd>
											<dt>학원설명</dt>
											<dd class="colspan"><div class="text auto" id="detail_school_intro">이학원은 어쩌구저쩌구가 조아요</div></dd>
										</dl>
									</div><!-- // item_info -->
								</div><!-- // training_academy_item -->
							</div><!-- // modal_training_academy -->

							<ul class="modal_tabs_list type4">
								<li class="on"><a href="#">소개</a></li>
								<li class=""><a href="#">시설</a></li>
								<li class=""><a href="#">커리큘럼</a></li>
								<li class=""><a href="#">학비계산</a></li>
							</ul><!-- // inner -->
							<div class="modal_tabs_info">
								<div class="modal_tabs_item">

									<div class="md_cont_detail">
										<div class="md_cont_title">위치</div>
										<div class="md_cont_map"></div>
										<dl class="md_cont_addr">
											<dt>주소</dt>
											<dd id="detail_school_address">abcdabcdabcd road, cebu, ...</dd>
											<input type="hidden" id="detail_school_address_hidden" value=""/>
										</dl>
									</div><!-- // md_cont_detail -->

									<ul class="md_cont_icons" id="detail_sns_ul">
										<li><a href="#" class="item1"><img src="/static/img/std_eng_abrd/phil/modal_tabs_icons_youtube@2x.png" alt="Youtube"></a></li>
										<li><a href="#" class="item2"><img src="/static/img/std_eng_abrd/phil/modal_tabs_icons_facebook@2x.png" alt="Facebook"></a></li>
										<li><a href="#" class="item3"><img src="/static/img/std_eng_abrd/phil/modal_tabs_icons_twitter@2x.png" alt="Twitter"></a></li>
										<li><a href="#" class="item4"><img src="/static/img/std_eng_abrd/phil/modal_tabs_icons_instagram@2x.png" alt="Instagram"></a></li>
										<li><a href="#" class="item5"><img src="/static/img/std_eng_abrd/phil/modal_tabs_icons_home@2x.png" alt="Home"></a></li>
									</ul><!-- // md_cont_icons -->

									<div class="md_cont_detail">
										<p class="md_cont_image"><img src="/static/img/std_eng_abrd/phil/modal_tabs_image@2x.png" alt=""></p>
										<p class="md_cont_image"><img src="/static/img/std_eng_abrd/phil/modal_tabs_image@2x.png" alt=""></p>
										<p class="md_cont_image"><img src="/static/img/std_eng_abrd/phil/modal_tabs_image@2x.png" alt=""></p>
									</div><!-- // md_cont_detail -->

								</div><!-- // modal_tabs_item -->
								<div class="modal_tabs_item item2">

									<div class="md_cont_detail">
										<div class="md_cont_title">시설</div>
										<p class="md_cont_image"><img src="/static/img/std_eng_abrd/phil/modal_tabs_image@2x.png" alt=""></p>
										<p class="md_cont_image"><img src="/static/img/std_eng_abrd/phil/modal_tabs_image@2x.png" alt=""></p>
										<p class="md_cont_image"><img src="/static/img/std_eng_abrd/phil/modal_tabs_image@2x.png" alt=""></p>
									</div><!-- // md_cont_detail -->

								</div><!-- // modal_tabs_item -->
								<div class="modal_tabs_item item3">
									<div class="md_cont_detail" id="each_dtl_curri">
										<div class="md_cont_title">커리큘럼</div>
										<div class="md_cont_select">
											<select name="" id="detail_curri_list" onchange="setCurriDetailFromSchoolDetail();">
												<option value="">XXXXX 코스</option>
											</select>
										</div>
										<dl class="md_cont_data each_curri_detail">
											<dt>1:1수업</dt>
											<dd>Reading (50분), Speaking(50분)</dd>
										</dl>
									</div><!-- // md_cont_detail -->
								</div><!-- // modal_tabs_item -->
								<div class="modal_tabs_item item4">
									<div class="md_cont_detail">
										<div class="md_cont_title">학비계산</div>
										<div class="md_cont_select_wrap">
											<div class="md_cont_select">
												<select name="" id="">
													<option value="">기간선택</option>
													<option value="">기간선택2</option>
													<option value="">기간선택3</option>
												</select>
											</div>
											<div class="md_cont_print"><a href="#"><img src="/static/img/std_eng_abrd/phil/modal_print@2x.png" alt="Print"></a></div>
										</div>
										<div class="md_cont_group">
											<dl class="md_cont_data">
												<dt>등록비</dt>
												<dd>
													<div class="text">100,000 (원)</div>
												</dd>
											</dl>
											<dl class="md_cont_data">
												<dt>학비</dt>
												<dd>
													<div class="select">
														<select name="" id="">
															<option value="">XXXXX 코스</option>
															<option value="">XXXXX 코스2</option>
															<option value="">XXXXX 코스3</option>
														</select>
													</div>
													<div class="text">1,000,000 (원)</div>
												</dd>
											</dl>
											<dl class="md_cont_data">
												<dt>기숙사비</dt>
												<dd>
													<div class="select">
														<select name="" id="">
															<option value="">4인실(A)</option>
															<option value="">6인실(A)</option>
															<option value="">8인실(A)</option>
														</select>
													</div>
													<div class="text">1,000,000 (원)</div>
												</dd>
											</dl>
											<dl class="md_cont_data">
												<dt>프로모션</dt>
												<dd>
													<div class="select">
														<select name="" id="">
															<option value="">2022 겨울 방학 등록비 프로모션</option>
															<option value="">2023 겨울 방학 등록비 프로모션</option>
															<option value="">2024 겨울 방학 등록비 프로모션</option>
														</select>
													</div>
													<div class="text minus">-100,000 (원)</div>
												</dd>
											</dl>
										</div><!-- // md_cont_group -->

										<dl class="md_cont_data total">
											<dt>합계</dt>
											<dd>
												<div class="text">2,000,000 (원)</div>
											</dd>
										</dl>

									</div><!-- // md_cont_detail -->

									<div class="md_cont_detail">
										<div class="md_cont_title">현지납부비용<p>필리핀에 도착한 이후 학원 또는 필리핀 정부로 납부하는 비용</p></div>

										<div class="md_cont_group">
											<dl class="md_cont_data">
												<dt>SSP</dt>
												<dd>
													<div class="text">6,300 (페소)</div>
												</dd>
											</dl>
											<dl class="md_cont_data">
												<dt>VISA</dt>
												<dd>
													<div class="text">3,300 (페소)</div>
												</dd>
											</dl>
											<dl class="md_cont_data">
												<dt>공과금</dt>
												<dd>
													<div class="text empty"></div>
												</dd>
											</dl>
											<dl class="md_cont_data">
												<dt>기타</dt>
												<dd>
													<div class="text empty"></div>
												</dd>
											</dl>
										</div><!-- // md_cont_group -->

									</div><!-- // md_cont_detail -->

								</div><!-- // modal_tabs_item -->
							</div>

						</div><!-- // modal_body -->

					</div><!-- // modal_area -->
				</div>
				<!-- // 필리핀 학원 상세보기 -->

				<!-- 학원 비교하기(학원 선택창) -->
				<div class="modal_wrap modal_compare" id="modal_03">
					<div class="modal_area">

						<div class="modal_head">
							<div class="modal_logo"><img src="/static/img/common/header_logo_2@2x.png" alt="LIME EDU"></div>
							<button class="modal_close">닫기</button>
						</div><!-- // modal_head -->

						<div class="modal_body">

 							<ul class="modal_half modal_half_head">
								<li>
									<div class="modal_training_academy">
										<div class="training_academy_item">
											<div class="item_logo">
												<div class="logo_image"><img src="/static/img/std_eng_abrd/phil/academy_item_logo@2x.png" alt=""></div>
												<div class="logo_name">SMEAG 캐피탈</div>
											</div><!-- // item_logo -->
											<div class="item_info">
												<dl class="training_academy_data">
													<dt>학원위치</dt>
													<dd><div class="text">세부</div></dd>
													<dt>학생규모</dt>
													<dd><div class="text">500</div></dd>
													<dt>커리큘럼</dt>
													<dd><div class="text">스파르타</div></dd>
													<dt>설립연도</dt>
													<dd><div class="text">2000</div></dd>
													<dt>학원설명</dt>
													<dd class="colspan"><div class="text auto">이학원은 어쩌구저쩌구가 조아요</div></dd>
												</dl>
											</div><!-- // item_info -->
										</div><!-- // training_academy_item -->
									</div><!-- // modal_training_academy -->
								</li>
								<li>
									<div class="modal_training_academy">
										<div class="training_academy_item">
											<div class="item_logo">
												<div class="logo_image"><img src="/static/img/std_eng_abrd/phil/academy_item_logo@2x.png" alt=""></div>
												<div class="logo_name"></div>
											</div><!-- // item_logo -->
											<div class="item_info">
												<dl class="training_academy_data">
													<dt>학원위치</dt>
													<dd><div class="text"></div></dd>
													<dt>학생규모</dt>
													<dd><div class="text"></div></dd>
													<dt>커리큘럼</dt>
													<dd><div class="text"></div></dd>
													<dt>설립연도</dt>
													<dd><div class="text"></div></dd>
													<dt>학원설명</dt>
													<dd class="colspan"><div class="text auto"></div></dd>
												</dl>
											</div><!-- // item_info -->
										</div><!-- // training_academy_item -->
									</div><!-- // modal_training_academy -->
								</li>

							</ul><!-- // modal_half -->

							<div class="modal_compare_cont">
								<div class="modal_compare_title"><div>비교할 학원을 선택해 주세요</div></div>
								<ul class="modal_compare_btn">
									<li class="on"><a href="#">전체</a></li>
									<li><a href="#">세부</a></li>
									<li><a href="#">바기오</a></li>
									<li><a href="#">기타</a></li>
								</ul>

								<ul class="training_academy_list">

									<li class="training_academy_item"><a href="#"><div class="box">
										<div class="item_logo">
											<div class="logo_image"><img src="/static/img/std_eng_abrd/phil/academy_item_logo@2x.png" alt=""></div>
											<div class="logo_name">SMEAG 캐피탈</div>
										</div><!-- // item_logo -->
										<div class="item_info">
											<dl class="training_academy_data">
												<dt>학원위치</dt>
												<dd><div class="text">세부</div></dd>
												<dt>학생규모</dt>
												<dd><div class="text">500</div></dd>
												<dt>커리큘럼</dt>
												<dd><div class="text">스파르타</div></dd>
												<dt>설립연도</dt>
												<dd><div class="text">2000</div></dd>
												<dt>학원설명</dt>
												<dd class="colspan"><div class="text auto">이학원은 어쩌구저쩌구가 조아요</div></dd>
											</dl>
										</div><!-- // item_info -->
									</div></a></li><!-- // training_academy_item -->

									<li class="training_academy_item"><a href="#"><div class="box">

										<div class="item_logo">
											<div class="logo_image"><img src="/static/img/std_eng_abrd/phil/academy_item_logo@2x.png" alt=""></div>
											<div class="logo_name">SMEAG 캐피탈</div>
										</div><!-- // item_logo -->
										<div class="item_info">
											<dl class="training_academy_data">
												<dt>학원위치</dt>
												<dd><div class="text">세부</div></dd>
												<dt>학생규모</dt>
												<dd><div class="text">500</div></dd>
												<dt>커리큘럼</dt>
												<dd><div class="text">스파르타</div></dd>
												<dt>설립연도</dt>
												<dd><div class="text">2000</div></dd>
												<dt>학원설명</dt>
												<dd class="colspan"><div class="text auto">이학원은 어쩌구저쩌구가 조아요</div></dd>
											</dl>
										</div><!-- // item_info -->
									</div></a></li><!-- // training_academy_item -->

									<li class="training_academy_item"><a href="#"><div class="box">

										<div class="item_logo">
											<div class="logo_image"><img src="/static/img/std_eng_abrd/phil/academy_item_logo@2x.png" alt=""></div>
											<div class="logo_name">SMEAG 캐피탈</div>
										</div><!-- // item_logo -->
										<div class="item_info">
											<dl class="training_academy_data">
												<dt>학원위치</dt>
												<dd><div class="text">세부</div></dd>
												<dt>학생규모</dt>
												<dd><div class="text">500</div></dd>
												<dt>커리큘럼</dt>
												<dd><div class="text">스파르타</div></dd>
												<dt>설립연도</dt>
												<dd><div class="text">2000</div></dd>
												<dt>학원설명</dt>
												<dd class="colspan"><div class="text auto">이학원은 어쩌구저쩌구가 조아요</div></dd>
											</dl>
										</div><!-- // item_info -->
									</div></a></li><!-- // training_academy_item -->

									<li class="training_academy_item"><a href="#"><div class="box">

										<div class="item_logo">
											<div class="logo_image"><img src="/static/img/std_eng_abrd/phil/academy_item_logo@2x.png" alt=""></div>
											<div class="logo_name">SMEAG 캐피탈</div>
										</div><!-- // item_logo -->
										<div class="item_info">
											<dl class="training_academy_data">
												<dt>학원위치</dt>
												<dd><div class="text">세부</div></dd>
												<dt>학생규모</dt>
												<dd><div class="text">500</div></dd>
												<dt>커리큘럼</dt>
												<dd><div class="text">스파르타</div></dd>
												<dt>설립연도</dt>
												<dd><div class="text">2000</div></dd>
												<dt>학원설명</dt>
												<dd class="colspan"><div class="text auto">이학원은 어쩌구저쩌구가 조아요</div></dd>
											</dl>
										</div><!-- // item_info -->
									</div></a></li><!-- // training_academy_item -->

									<li class="training_academy_item"><a href="#"><div class="box">

										<div class="item_logo">
											<div class="logo_image"><img src="/static/img/std_eng_abrd/phil/academy_item_logo@2x.png" alt=""></div>
											<div class="logo_name">SMEAG 캐피탈</div>
										</div><!-- // item_logo -->
										<div class="item_info">
											<dl class="training_academy_data">
												<dt>학원위치</dt>
												<dd><div class="text">세부</div></dd>
												<dt>학생규모</dt>
												<dd><div class="text">500</div></dd>
												<dt>커리큘럼</dt>
												<dd><div class="text">스파르타</div></dd>
												<dt>설립연도</dt>
												<dd><div class="text">2000</div></dd>
												<dt>학원설명</dt>
												<dd class="colspan"><div class="text auto">이학원은 어쩌구저쩌구가 조아요</div></dd>
											</dl>
										</div><!-- // item_info -->
									</div></a></li><!-- // training_academy_item -->

								</ul>

							</div><!-- // modal_compare_cont -->

							<ul class="modal_compare_paging">
								<li class="on"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
							</ul>
							<div class="modal_compare_submit"><a href="#modal_04" class="modal_open">선택 완료</a></div>

						</div><!-- // modal_body -->

					</div><!-- // modal_area -->
				</div>
				<!-- // 학원 비교하기(학원 선택창) -->

				<!-- // 학원 비교하기 -->
				<div class="modal_wrap modal_compare" id="modal_04">
					<div class="modal_area">

						<div class="modal_head">
							<div class="modal_logo"><img src="/static/img/common/header_logo_2@2x.png" alt="LIME EDU"></div>
							<button class="modal_close">닫기</button>
						</div><!-- // modal_head -->

						<div class="modal_body">

 							<ul class="modal_half modal_half_head none">
								<li>
									<div class="modal_training_academy">
										<div class="training_academy_item">
											<div class="item_logo">
												<div class="logo_image"><img src="/static/img/std_eng_abrd/phil/academy_item_logo@2x.png" alt=""></div>
												<div class="logo_name">SMEAG 캐피탈</div>
											</div><!-- // item_logo -->
											<div class="item_info">
												<dl class="training_academy_data">
													<dt>학원위치</dt>
													<dd><div class="text">세부</div></dd>
													<dt>학생규모</dt>
													<dd><div class="text">500</div></dd>
													<dt>커리큘럼</dt>
													<dd><div class="text">스파르타</div></dd>
													<dt>설립연도</dt>
													<dd><div class="text">2000</div></dd>
													<dt>학원설명</dt>
													<dd class="colspan"><div class="text auto">이학원은 어쩌구저쩌구가 조아요</div></dd>
												</dl>
											</div><!-- // item_info -->
										</div><!-- // training_academy_item -->
									</div><!-- // modal_training_academy -->
								</li>
								<li>
									<div class="modal_training_academy">
										<div class="training_academy_item">
											<div class="item_logo">
												<div class="logo_image"><img src="/static/img/std_eng_abrd/phil/academy_item_logo@2x.png" alt=""></div>
												<div class="logo_name"></div>
											</div><!-- // item_logo -->
											<div class="item_info">
												<dl class="training_academy_data">
													<dt>학원위치</dt>
													<dd><div class="text"></div></dd>
													<dt>학생규모</dt>
													<dd><div class="text"></div></dd>
													<dt>커리큘럼</dt>
													<dd><div class="text"></div></dd>
													<dt>설립연도</dt>
													<dd><div class="text"></div></dd>
													<dt>학원설명</dt>
													<dd class="colspan"><div class="text auto"></div></dd>
												</dl>
											</div><!-- // item_info -->
										</div><!-- // training_academy_item -->
									</div><!-- // modal_training_academy -->
								</li>

							</ul><!-- // modal_half -->

							<ul class="modal_tabs_list type4">
								<li class="on"><a href="#">소개</a></li>
								<li class=""><a href="#">시설</a></li>
								<li class=""><a href="#">커리큘럼</a></li>
								<li class=""><a href="#">학비계산</a></li>
							</ul><!-- // inner -->
							<div class="modal_tabs_info">

								<div class="modal_tabs_item">

									<ul class="modal_half modal_half_info">
										<li>
											<div class="md_cont_detail">
												<div class="md_cont_map"><img src="/static/img/std_eng_abrd/phil/modal_tabs_map@2x.png" alt=""></div>
												<dl class="md_cont_addr">
													<dt>주소</dt>
													<dd>abcdabcdabcd road, cebu, ...</dd>
												</dl>
											</div><!-- // md_cont_detail -->

											<ul class="md_cont_icons">
												<li><a href="#" class="item1"><img src="/static/img/std_eng_abrd/phil/modal_tabs_icons_youtube@2x.png" alt="Youtube"></a></li>
												<li><a href="#" class="item2"><img src="/static/img/std_eng_abrd/phil/modal_tabs_icons_facebook@2x.png" alt="Facebook"></a></li>
												<li><a href="#" class="item3"><img src="/static/img/std_eng_abrd/phil/modal_tabs_icons_twitter@2x.png" alt="Twitter"></a></li>
												<li><a href="#" class="item4"><img src="/static/img/std_eng_abrd/phil/modal_tabs_icons_instagram@2x.png" alt="Instagram"></a></li>
												<li><a href="#" class="item5"><img src="/static/img/std_eng_abrd/phil/modal_tabs_icons_home@2x.png" alt="Home"></a></li>
											</ul><!-- // md_cont_icons -->

											<div class="md_cont_detail">
												<p class="md_cont_image"><img src="/static/img/std_eng_abrd/phil/modal_tabs_image@2x.png" alt=""></p>
												<p class="md_cont_image"><img src="/static/img/std_eng_abrd/phil/modal_tabs_image@2x.png" alt=""></p>
												<p class="md_cont_image"><img src="/static/img/std_eng_abrd/phil/modal_tabs_image@2x.png" alt=""></p>
											</div><!-- // md_cont_detail -->
										</li>
										<li>
											<div class="md_cont_detail">
												<div class="md_cont_map"><img src="/static/img/std_eng_abrd/phil/modal_tabs_map@2x.png" alt=""></div>
												<dl class="md_cont_addr">
													<dt>주소</dt>
													<dd>abcdabcdabcd road, cebu, ...</dd>
												</dl>
											</div><!-- // md_cont_detail -->

											<ul class="md_cont_icons">
												<li><a href="#" class="item1"><img src="/static/img/std_eng_abrd/phil/modal_tabs_icons_youtube@2x.png" alt="Youtube"></a></li>
												<li><a href="#" class="item2"><img src="/static/img/std_eng_abrd/phil/modal_tabs_icons_facebook@2x.png" alt="Facebook"></a></li>
												<li><a href="#" class="item3"><img src="/static/img/std_eng_abrd/phil/modal_tabs_icons_twitter@2x.png" alt="Twitter"></a></li>
												<li><a href="#" class="item4"><img src="/static/img/std_eng_abrd/phil/modal_tabs_icons_instagram@2x.png" alt="Instagram"></a></li>
												<li><a href="#" class="item5"><img src="/static/img/std_eng_abrd/phil/modal_tabs_icons_home@2x.png" alt="Home"></a></li>
											</ul><!-- // md_cont_icons -->

											<div class="md_cont_detail">
												<p class="md_cont_image"><img src="/static/img/std_eng_abrd/phil/modal_tabs_image@2x.png" alt=""></p>
												<p class="md_cont_image"><img src="/static/img/std_eng_abrd/phil/modal_tabs_image@2x.png" alt=""></p>
												<p class="md_cont_image"><img src="/static/img/std_eng_abrd/phil/modal_tabs_image@2x.png" alt=""></p>
											</div><!-- // md_cont_detail -->
										</li>
									</ul>

								</div><!-- // modal_tabs_item -->

								<div class="modal_tabs_item">

									<ul class="modal_half modal_half_info">
										<li>
											<div class="md_cont_detail">
												<p class="md_cont_image"><img src="/static/img/std_eng_abrd/phil/modal_tabs_image@2x.png" alt=""></p>
												<p class="md_cont_image"><img src="/static/img/std_eng_abrd/phil/modal_tabs_image@2x.png" alt=""></p>
												<p class="md_cont_image"><img src="/static/img/std_eng_abrd/phil/modal_tabs_image@2x.png" alt=""></p>
											</div><!-- // md_cont_detail -->
										</li>
										<li>
											<div class="md_cont_detail">
												<p class="md_cont_image"><img src="/static/img/std_eng_abrd/phil/modal_tabs_image@2x.png" alt=""></p>
												<p class="md_cont_image"><img src="/static/img/std_eng_abrd/phil/modal_tabs_image@2x.png" alt=""></p>
												<p class="md_cont_image"><img src="/static/img/std_eng_abrd/phil/modal_tabs_image@2x.png" alt=""></p>
											</div><!-- // md_cont_detail -->
										</li>
									</ul>

								</div><!-- // modal_tabs_item -->

								<div class="modal_tabs_item">

									<ul class="modal_half modal_half_info">
										<li>
											<div class="md_cont_detail">
												<div class="md_cont_select">
													<select name="" id="">
														<option value="">XXXXX 코스</option>
														<option value="">XXXXX 코스2</option>
														<option value="">XXXXX 코스3</option>
													</select>
												</div>
												<dl class="md_cont_data">
													<dt>1:1수업</dt>
													<dd>Reading (50분), Speaking(50분)</dd>
												</dl>
												<dl class="md_cont_data">
													<dt>1:4 수업</dt>
													<dd>Reading (50분), Speaking(50분)</dd>
												</dl>
												<dl class="md_cont_data">
													<dt>1:8 수업</dt>
													<dd>Reading (50분), Speaking(50분)</dd>
												</dl>
												<dl class="md_cont_data">
													<dt>스페셜코스 <br>(방과 후)</dt>
													<dd>Reading (50분), Speaking(50분)</dd>
												</dl>
											</div><!-- // md_cont_detail -->
										</li>
										<li>
											<div class="md_cont_detail">
												<div class="md_cont_select">
													<select name="" id="">
														<option value="">XXXXX 코스</option>
														<option value="">XXXXX 코스2</option>
														<option value="">XXXXX 코스3</option>
													</select>
												</div>
												<dl class="md_cont_data">
													<dt>1:1수업</dt>
													<dd>Reading (50분), Speaking(50분)</dd>
												</dl>
												<dl class="md_cont_data">
													<dt>1:4 수업</dt>
													<dd>Reading (50분), Speaking(50분)</dd>
												</dl>
												<dl class="md_cont_data">
													<dt>1:8 수업</dt>
													<dd>Reading (50분), Speaking(50분)</dd>
												</dl>
												<dl class="md_cont_data">
													<dt>스페셜코스 <br>(방과 후)</dt>
													<dd>Reading (50분), Speaking(50분)</dd>
												</dl>
											</div><!-- // md_cont_detail -->
										</li>
									</ul>

								</div><!-- // modal_tabs_item -->

								<div class="modal_tabs_item">

									<ul class="modal_half modal_half_info">
										<li>
											<div class="md_cont_detail">
												<div class="md_cont_select_wrap">
													<div class="md_cont_select">
														<select name="" id="">
															<option value="">기간선택</option>
															<option value="">기간선택2</option>
															<option value="">기간선택3</option>
														</select>
													</div>
													<div class="md_cont_print"><a href="#"><img src="/static/img/std_eng_abrd/phil/modal_print@2x.png" alt="Print"></a></div>
												</div>
												<div class="md_cont_group">
													<dl class="md_cont_data">
														<dt>등록비</dt>
														<dd>
															<div class="text">100,000 (원)</div>
														</dd>
													</dl>
													<dl class="md_cont_data">
														<dt>학비</dt>
														<dd>
															<div class="select">
																<select name="" id="">
																	<option value="">XXXXX 코스</option>
																	<option value="">XXXXX 코스2</option>
																	<option value="">XXXXX 코스3</option>
																</select>
															</div>
															<div class="text">1,000,000 (원)</div>
														</dd>
													</dl>
													<dl class="md_cont_data">
														<dt>기숙사비</dt>
														<dd>
															<div class="select">
																<select name="" id="">
																	<option value="">4인실(A)</option>
																	<option value="">6인실(A)</option>
																	<option value="">8인실(A)</option>
																</select>
															</div>
															<div class="text">1,000,000 (원)</div>
														</dd>
													</dl>
													<dl class="md_cont_data">
														<dt>프로모션</dt>
														<dd>
															<div class="select">
																<select name="" id="">
																	<option value="">2022 겨울 방학 등록비 프로모션</option>
																	<option value="">2023 겨울 방학 등록비 프로모션</option>
																	<option value="">2024 겨울 방학 등록비 프로모션</option>
																</select>
															</div>
															<div class="text minus">-100,000 (원)</div>
														</dd>
													</dl>
												</div><!-- // md_cont_group -->

												<dl class="md_cont_data total">
													<dt>합계</dt>
													<dd>
														<div class="text">2,000,000 (원)</div>
													</dd>
												</dl>

											</div><!-- // md_cont_detail -->

											<div class="md_cont_detail">
												<div class="md_cont_title">현지납부비용<p>필리핀에 도착한 이후 학원 또는 필리핀 정부로 납부하는 비용</p></div>

												<div class="md_cont_group">
													<dl class="md_cont_data">
														<dt>SSP</dt>
														<dd>
															<div class="text">6,300 (페소)</div>
														</dd>
													</dl>
													<dl class="md_cont_data">
														<dt>VISA</dt>
														<dd>
															<div class="text">3,300 (페소)</div>
														</dd>
													</dl>
													<dl class="md_cont_data">
														<dt>공과금</dt>
														<dd>
															<div class="text empty"></div>
														</dd>
													</dl>
													<dl class="md_cont_data">
														<dt>기타</dt>
														<dd>
															<div class="text empty"></div>
														</dd>
													</dl>
												</div><!-- // md_cont_group -->

											</div><!-- // md_cont_detail -->
										</li>
										<li>
											<div class="md_cont_detail">
												<div class="md_cont_select_wrap">
													<div class="md_cont_select">
														<select name="" id="">
															<option value="">기간선택</option>
															<option value="">기간선택2</option>
															<option value="">기간선택3</option>
														</select>
													</div>
													<div class="md_cont_print"><a href="#"><img src="/static/img/std_eng_abrd/phil/modal_print@2x.png" alt="Print"></a></div>
												</div>
												<div class="md_cont_group">
													<dl class="md_cont_data">
														<dt>등록비</dt>
														<dd>
															<div class="text">100,000 (원)</div>
														</dd>
													</dl>
													<dl class="md_cont_data">
														<dt>학비</dt>
														<dd>
															<div class="select">
																<select name="" id="">
																	<option value="">XXXXX 코스</option>
																	<option value="">XXXXX 코스2</option>
																	<option value="">XXXXX 코스3</option>
																</select>
															</div>
															<div class="text">1,000,000 (원)</div>
														</dd>
													</dl>
													<dl class="md_cont_data">
														<dt>기숙사비</dt>
														<dd>
															<div class="select">
																<select name="" id="">
																	<option value="">4인실(A)</option>
																	<option value="">6인실(A)</option>
																	<option value="">8인실(A)</option>
																</select>
															</div>
															<div class="text">1,000,000 (원)</div>
														</dd>
													</dl>
													<dl class="md_cont_data">
														<dt>프로모션</dt>
														<dd>
															<div class="select">
																<select name="" id="">
																	<option value="">2022 겨울 방학 등록비 프로모션</option>
																	<option value="">2023 겨울 방학 등록비 프로모션</option>
																	<option value="">2024 겨울 방학 등록비 프로모션</option>
																</select>
															</div>
															<div class="text minus">-100,000 (원)</div>
														</dd>
													</dl>
												</div><!-- // md_cont_group -->

												<dl class="md_cont_data total">
													<dt>합계</dt>
													<dd>
														<div class="text">2,000,000 (원)</div>
													</dd>
												</dl>

											</div><!-- // md_cont_detail -->

											<div class="md_cont_detail">
												<div class="md_cont_title">현지납부비용<p>필리핀에 도착한 이후 학원 또는 필리핀 정부로 납부하는 비용</p></div>

												<div class="md_cont_group">
													<dl class="md_cont_data">
														<dt>SSP</dt>
														<dd>
															<div class="text">6,300 (페소)</div>
														</dd>
													</dl>
													<dl class="md_cont_data">
														<dt>VISA</dt>
														<dd>
															<div class="text">3,300 (페소)</div>
														</dd>
													</dl>
													<dl class="md_cont_data">
														<dt>공과금</dt>
														<dd>
															<div class="text empty"></div>
														</dd>
													</dl>
													<dl class="md_cont_data">
														<dt>기타</dt>
														<dd>
															<div class="text empty"></div>
														</dd>
													</dl>
												</div><!-- // md_cont_group -->

											</div><!-- // md_cont_detail -->
										</li>
									</ul>

								</div><!-- // modal_tabs_item -->
							</div>

						</div><!-- // modal_body -->

					</div><!-- // modal_area -->
				</div>
				<!-- // 학원 비교하기 -->

				<script>
					jQuery(function($){

						/* 탭메뉴 */
						$(".modal_menu_list").each(function(index){
							$(this).find("> li:eq(0)").addClass('on');
							$(this).parents('.modal_body').find(".modal_menu_info > .modal_menu_item:eq(0)").addClass('on');
						});

						$('.modal_menu_list li a').on('click', function(){
							var menu_num = $(this).parent().index();
							var $menu_list = $(this).parents('.modal_menu_list');
							var $menu_info = $(this).parents('.modal_body').find(".modal_menu_info");

							$('.modal_menu_list li').removeClass('on');
							$('.modal_menu_list li').eq(menu_num).addClass('on');

							$menu_info.find('.modal_menu_item').removeClass('on');
							$menu_info.find('.modal_menu_item').eq(menu_num).addClass('on');
							return false;
						});

						$(".modal_tabs_list").each(function(index){
							$(this).find("> li:eq(0)").addClass('on');
							$(this).parents('.modal_body').find(".modal_tabs_info > .modal_tabs_item:eq(0)").addClass('on');
						});

						$('.modal_tabs_list li a').on('click', function(){
							var tabs_num = $(this).parent().index();
							var $tabs_list = $(this).parents('.modal_tabs_list');
							var $tabs_info = $(this).parents('.modal_body').find(".modal_tabs_info");

							$tabs_list.find('li').removeClass('on');
							$tabs_list.find('li').eq(tabs_num).addClass('on');

							$tabs_info.find('.modal_tabs_item').removeClass('on');
							$tabs_info.find('.modal_tabs_item').eq(tabs_num).addClass('on');
							return false;
						});

					});

					function open_modal(modal_id) {
						$('body').toggleClass('show-modal');
						$('#' + modal_id).toggleClass('active');
						return false;
					}
					// open_modal('modal_04');
				</script>

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


