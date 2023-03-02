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
    		zoom : 15,
    		center : new google.maps.LatLng(37.5651, 126.98955), //서울
    		mapTypeId : google.maps.MapTypeId.ROADMAP
    	};
    	map = new google.maps.Map(document.getElementById('detail_map_div'), mapOptions);
    }
	var compare_from_long_term;
	var compare_to_long_term;
	var long_term_detail;
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
				long_term_detail = details['long_term'];
				$("#detail_school_name").empty();
				$("#detail_school_name").append(details['info'][0].aca_name);
				$("#detail_school_dist").empty();
				$("#detail_school_dist").append(details['info'][0].aca_city);
				$("#detail_logo_img").attr("src", details['info'][0].logo_url);
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
				$("#detail_price_curri").empty();
				var curri_html = "<option value=''>커리큘럼 선택</option>";
				var curri_price_html = "<option value=''>커리큘럼 선택</option>";
				details['curri'].forEach(function(curri){
					curri_html += "<option value='"+curri.idx+"'>"+curri.curri_name+"</option>";
					if(curri.fixed_period == '' || curri.fixed_period == null || curri.fixed_period == 'null'){
						curri_price_html += "<option value='"+curri.curri_price+"'>"+curri.curri_name+"</option>";
					}else{
						curri_price_html += "<option id="+curri.fixed_period+" value='"+curri.curri_price+"'>"+curri.curri_name+"(기간 고정)</option>";
					}

				});
				$("#detail_curri_list").append(curri_html);
				$("#detail_price_curri").append(curri_price_html);

				$("#detail_price_dorm").empty();
				var dorm_html = "<option value=''>기숙사 선택</option>";
				details['dorm'].forEach(function(dorm){
					dorm_html += "<option value='"+dorm.dorm_price+"'>"+dorm.dorm_name+"</option>";
				});
				$("#detail_price_dorm").append(dorm_html);

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

	function setCalFromDetail(){
		var selectedCurri = document.getElementById("detail_price_curri");
        var cur_price_week = selectedCurri.options[selectedCurri.selectedIndex].value;
        var cur_fixed = selectedCurri.options[selectedCurri.selectedIndex].id;
        var selectedDorm = document.getElementById("detail_price_dorm");
        var dorm_price_week = selectedDorm.options[selectedDorm.selectedIndex].value;
        var selectedPeriod = document.getElementById("detail_price_period");
        var price_week = selectedPeriod.options[selectedPeriod.selectedIndex].value;
        if(!cur_fixed){
        	var price_curri = (cur_price_week/4) * price_week;
        }else{
        	$("#detail_price_period").val(cur_fixed).prop("selected", true);
        	price_week = selectedPeriod.options[selectedPeriod.selectedIndex].value;
        	var price_curri = (cur_price_week/4) * price_week;
        }
        $("#long_term_discount_detail").empty();
        $("#detail_long_term_alert").hide();
        $("#detail_price_curri_cal").empty();
        $("#detail_price_curri_cal").append(Math.ceil(price_curri).toLocaleString('ko-KR'));
        var price_dorm = (dorm_price_week/4) * price_week;
        $("#detail_price_dorm_cal").empty();
        $("#detail_price_dorm_cal").append(price_dorm.toLocaleString('ko-KR'));
        var long_term_discount = 0;
        if(long_term_detail){
			long_term_detail.forEach(function(long_term){
				console.log("promo_over_period : "+long_term.promo_over_period);
				console.log("price_week : "+price_week);
				if(long_term.promo_over_period == price_week){
					$("#detail_long_term_alert").show();
					$("#long_term_discount_detail").append("-"+long_term.discount_price.toLocaleString('ko-KR'));
					long_term_discount = long_term.discount_price;
				}
			});
		}
        var total_price = 100000+Math.ceil(price_curri)+price_dorm - long_term_discount;
        $("#tot_price_detail").empty();
        $("#tot_price_detail").append(total_price.toLocaleString('ko-KR'));
        if(price_week > 0 && price_week < 4){
        	alert("4주 미만일 경우 학원 정책에 따라 추가 비용이 발생할 수 있습니다.");
        }

	}

	function setCalFromCompare(compare){
		var selectedCurri = document.getElementById("compare_"+compare+"_price_curri");
        var cur_price_week = selectedCurri.options[selectedCurri.selectedIndex].value;
        var cur_fixed = selectedCurri.options[selectedCurri.selectedIndex].id;
        var selectedDorm = document.getElementById("compare_"+compare+"_price_dorm");
        var dorm_price_week = selectedDorm.options[selectedDorm.selectedIndex].value;
        var selectedPeriod = document.getElementById("compare_"+compare+"_price_period");
        var price_week = selectedPeriod.options[selectedPeriod.selectedIndex].value;
        if(!cur_fixed){
        	var price_curri = (cur_price_week/4) * price_week;
        }else{
        	$("#compare_"+compare+"_price_period").val(cur_fixed).prop("selected", true);
        	price_week = selectedPeriod.options[selectedPeriod.selectedIndex].value;
        	var price_curri = (cur_price_week/4) * price_week;
        }
        $("#long_term_discount_compare_"+compare).empty();
        $("#compare_"+compare+"_long_term_alert").hide();
        $("#compare_"+compare+"_price_curri_cal").empty();
        $("#compare_"+compare+"_price_curri_cal").append(Math.ceil(price_curri).toLocaleString('ko-KR'));
        var price_dorm = (dorm_price_week/4) * price_week;
        $("#compare_"+compare+"_price_dorm_cal").empty();
        $("#compare_"+compare+"_price_dorm_cal").append(price_dorm.toLocaleString('ko-KR'));
        var compare_long_term_discount = 0;
        var cal_long_now;
        if(compare == 'from' && compare_from_long_term){
        	cal_long_now = compare_from_long_term;
        }else if(compare == 'to' && compare_to_long_term){
        	cal_long_now = compare_to_long_term;
        }
        if(cal_long_now){
        	cal_long_now.forEach(function(long_term){
        		if(long_term.promo_over_period == price_week){
        			$("#compare_"+compare+"_long_term_alert").show();
        			$("#long_term_discount_compare_"+compare).append("-"+long_term.discount_price.toLocaleString('ko-KR'));
        			compare_long_term_discount = long_term.discount_price;
        		}
        	});
        }
        var total_price = 100000+Math.ceil(price_curri)+price_dorm - compare_long_term_discount;
        $("#tot_price_compare_"+compare).empty();
        $("#tot_price_compare_"+compare).append(total_price.toLocaleString('ko-KR'));
        if(price_week > 0 && price_week < 4){
        	alert("4주 미만일 경우 학원 정책에 따라 추가 비용이 발생할 수 있습니다.");
        }
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

	var printContents;
    var initBody;
	function printDetail(){
		printContents = document.getElementById("detail_print");

		window.onbeforeprint = beforePrint;
		window.onafterprint = afterPrint;
		window.print();
	}

	function beforePrint(){
		initBody = document.body.innerHTML;
		document.body.innerHTML = printContents.innerHTML;
    }

    function afterPrint(){
		document.body.innerHTML = initBody;
    }
	var compare_from;
	var compare_to;

	function open_compare(ph_idx){
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
				compare_from_long_term = details['long_term'];
				$("#start_compare_name").empty();
                $("#start_compare_name").append(details['info'][0].aca_name);
                $("#start_compare_city").empty();
                $("#start_compare_city").append(details['info'][0].aca_city);
                $("#start_compare_logo").attr("src", details['info'][0].logo_url);
                $("#start_compare_students").empty();
                $("#start_compare_students").append(details['info'][0].aca_students);
                $("#start_compare_curri").empty();
                $("#start_compare_curri").append(details['info'][0].aca_curri);
                $("#start_compare_published").empty();
                $("#start_compare_published").append(details['info'][0].aca_published);
                $("#start_compare_detail").empty();
                $("#start_compare_detail").append(details['info'][0].aca_detail);

                //비교하기 클릭 시 비교 모달 기본정보 선세팅
                compare_from = details;
                $("#compare_from_name").empty();
                $("#compare_from_name").append(details['info'][0].aca_name);
                $("#compare_from_city").empty();
                $("#compare_from_city").append(details['info'][0].aca_city);
                $("#compare_from_logo").attr("src", details['info'][0].logo_url);
                $("#compare_from_students").empty();
                $("#compare_from_students").append(details['info'][0].aca_students);
                $("#compare_from_curri").empty();
                $("#compare_from_curri").append(details['info'][0].aca_curri);
                $("#compare_from_published").empty();
                $("#compare_from_published").append(details['info'][0].aca_published);
                $("#compare_from_detail").empty();
                $("#compare_from_detail").append(details['info'][0].aca_detail);
                $("#compare_from_addr").empty();
                $("#compare_from_addr").append(details['info'][0].aca_address);
				$("#compare_from_sns_ul").empty();
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
				$("#compare_from_sns_ul").append(sns_html);

				$("#compare_from_curri_list").empty();
                $("#compare_from_price_curri").empty();
                var curri_html = "<option value=''>커리큘럼 선택</option>";
                var curri_price_html = "<option value=''>커리큘럼 선택</option>";
                details['curri'].forEach(function(curri){
                	curri_html += "<option value='"+curri.idx+"'>"+curri.curri_name+"</option>";
                	if(curri.fixed_period == '' || curri.fixed_period == null || curri.fixed_period == 'null'){
                		curri_price_html += "<option value='"+curri.curri_price+"'>"+curri.curri_name+"</option>";
                	}else{
                		curri_price_html += "<option id="+curri.fixed_period+" value='"+curri.curri_price+"'>"+curri.curri_name+"(기간 고정)</option>";
                	}
                });
                $("#compare_from_curri_list").append(curri_html);
                $("#compare_from_price_curri").append(curri_price_html);
                $("#compare_from_price_dorm").empty();
                var dorm_html = "<option value=''>기숙사 선택</option>";
                details['dorm'].forEach(function(dorm){
                	dorm_html += "<option value='"+dorm.dorm_price+"'>"+dorm.dorm_name+"</option>";
                });
                $("#compare_from_price_dorm").append(dorm_html);
			},error: function(data){
				alert("잠시 후 다시 시도해주세요.");
			}
		});
    }
	function setCompareCity(city){
		$(".btn_compare_city").removeClass("on");
		$("#btn_compare_city_"+city).addClass("on");
		if(city == 'all'){
			$(".compare_list_city").show();
		}else{
			$(".compare_list_city").hide();
            $("."+city).show();
		}
	}
    function set_compare(ph_idx){
		compare_to = ph_idx;
		console.log(compare_to);
    }

    function setCompareAll(){
    	$.ajax({
        	type: "post",
        	url: "/studyEnglishAbroad/apiGetPhAcaDetail",
        	async: true,
        	data: {
        		"idx": compare_to
        	},
        	dataType: "text",
        	success: function(data){
        		var details = JSON.parse(data);
        		compare_to_long_term = details['long_term'];
        		$("#compare_to_name").empty();
                $("#compare_to_name").append(details['info'][0].aca_name);
                $("#compare_to_city").empty();
                $("#compare_to_city").append(details['info'][0].aca_city);
                $("#compare_to_logo").attr("src", details['info'][0].logo_url);
                $("#compare_to_students").empty();
                $("#compare_to_students").append(details['info'][0].aca_students);
                $("#compare_to_curri").empty();
                $("#compare_to_curri").append(details['info'][0].aca_curri);
                $("#compare_to_published").empty();
                $("#compare_to_published").append(details['info'][0].aca_published);
                $("#compare_to_detail").empty();
                $("#compare_to_detail").append(details['info'][0].aca_detail);
                $("#compare_to_addr").empty();
                $("#compare_to_addr").append(details['info'][0].aca_address);
                $("#compare_to_sns_ul").empty();
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
				$("#compare_to_sns_ul").append(sns_html);

				$("#compare_to_curri_list").empty();
                $("#compare_to_price_curri").empty();
                var curri_html = "<option value=''>커리큘럼 선택</option>";
                var curri_price_html = "<option value=''>커리큘럼 선택</option>";
                details['curri'].forEach(function(curri){
                	curri_html += "<option value='"+curri.idx+"'>"+curri.curri_name+"</option>";
                	if(curri.fixed_period == '' || curri.fixed_period == null || curri.fixed_period == 'null'){
                		curri_price_html += "<option value='"+curri.curri_price+"'>"+curri.curri_name+"</option>";
                	}else{
                		curri_price_html += "<option id="+curri.fixed_period+" value='"+curri.curri_price+"'>"+curri.curri_name+"(기간 고정)</option>";
                	}
                });
                $("#compare_to_curri_list").append(curri_html);
                $("#compare_to_price_curri").append(curri_price_html);
                $("#compare_to_price_dorm").empty();
                var dorm_html = "<option value=''>기숙사 선택</option>";
                details['dorm'].forEach(function(dorm){
                	dorm_html += "<option value='"+dorm.dorm_price+"'>"+dorm.dorm_name+"</option>";
                });
                $("#compare_to_price_dorm").append(dorm_html);
            },error: function(data){
            	alert('잠시 후 다시 시도해주세요.');
            }
        });
    }

	function setCurriCompareSchoolDetail(compare){
		var selected = document.getElementById("compare_"+compare+"_curri_list");
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
				$(".each_curri_compare_"+compare).remove();
				details['curri'].forEach(function(curri){
					curri_dtl_html += "<dl class='md_cont_data each_curri_compare_"+compare+"'>";
					curri_dtl_html += "<dt>"+curri.class_name+"</dt>";
					curri_dtl_html += "<dd>"+curri.class_detail+"</dd>";
					curri_dtl_html += "</dl>";
				});
				$("#each_compare_"+compare+"_curri").append(curri_dtl_html);
			},error: function(data){
				alert("잠시 후 다시 시도해주세요.");
			}
		});
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
													<div class="logo_image"><img src="<?= $school_list[$i]->logo_url; ?>" alt=""></div>
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
										<div class="logo_image"><img id="detail_logo_img" src="/static/img/std_eng_abrd/phil/academy_item_logo@2x.png" alt=""></div>
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
										<div class="md_cont_map" id="detail_map_div" style="width:100%;height:200px;"></div>
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
												<option value="">커리큘럼 선택</option>
											</select>
										</div>
										<dl class="md_cont_data each_curri_detail">
										</dl>
									</div><!-- // md_cont_detail -->
								</div><!-- // modal_tabs_item -->
								<div class="modal_tabs_item item4" id="detail_print">
									<div class="md_cont_detail">
										<div class="md_cont_title">학비계산</div>
										<div class="md_cont_select_wrap">
											<div class="md_cont_select">
												<select name="" id="detail_price_period" onchange="setCalFromDetail();">
													<option value="">기간선택</option>
													<?php for($i=1; $i<25; $i++):?>
													<option value="<?= $i;?>"><?= $i;?>주</option>
													<?php endfor; ?>
												</select>
											</div>
											<div class="md_cont_print"><a href="javascript:printDetail();"><img src="/static/img/std_eng_abrd/phil/modal_print@2x.png" alt="Print"></a></div>
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
														<select name="" id="detail_price_curri" onchange="setCalFromDetail();">
															<option value="">XXXXX 코스</option>
														</select>
													</div>
													<div class="text" id="detail_price_curri_cal"></div>
													<input type="hidden" id="detail_curr_price_final"/>
												</dd>
											</dl>
											<dl class="md_cont_data">
												<dt>기숙사비</dt>
												<dd>
													<div class="select">
														<select name="" id="detail_price_dorm" onchange="setCalFromDetail();">
															<option value=""></option>
														</select>
													</div>
													<div class="text" id="detail_price_dorm_cal"></div>
													<input type="hidden" id="detail_dorm_price_final"/>
												</dd>
											</dl>
											<dl class="md_cont_data">
												<dt>프로모션</dt>
												<dd>
													<div class="select">
														<select name="" id="detail_promotion">
															<option value="">프로모션 선택</option>
															<option value="">-현재 선택 가능한 프로모션이 없습니다-</option>
														</select>
													</div>
													<div class="text minus" id="detail_promotion_cal">-0</div>
												</dd>
											</dl>
										</div><!-- // md_cont_group -->
										<div id="detail_long_term_alert" style="display:none;">
											<p style="float:right;" id="long_term_discount_detail">-100,000</p>
											<p style="float:right;">장기연수할인 : </p>
										</div>
										<dl class="md_cont_data total">
											<dt>합계</dt>
											<dd>
												<div class="text" id="tot_price_detail">2,000,000 (원)</div>
											</dd>
										</dl>
										<p style="float:right;" id="detail_discount_alert" style="display:none;">프로모션 적용 가능 여부는 출발일 또는 연수 기간등에 따라 상이하므로 꼭 상담원에게 문의하시기 바랍니다</p>
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
												<div class="logo_image"><img id="start_compare_logo" src="/static/img/std_eng_abrd/phil/academy_item_logo@2x.png" alt=""></div>
												<div class="logo_name" id="start_compare_name">SMEAG 캐피탈</div>
											</div><!-- // item_logo -->
											<div class="item_info">
												<dl class="training_academy_data">
													<dt>학원위치</dt>
													<dd><div class="text" id="start_compare_city">세부</div></dd>
													<dt>학생규모</dt>
													<dd><div class="text" id="start_compare_students">500</div></dd>
													<dt>커리큘럼</dt>
													<dd><div class="text" id="start_compare_curri">스파르타</div></dd>
													<dt>설립연도</dt>
													<dd><div class="text" id="start_compare_published">2000</div></dd>
													<dt>학원설명</dt>
													<dd class="colspan"><div class="text auto" id="start_compare_detail">이학원은 어쩌구저쩌구가 조아요</div></dd>
												</dl>
											</div><!-- // item_info -->
										</div><!-- // training_academy_item -->
									</div><!-- // modal_training_academy -->
								</li>
								<li>
									<div class="modal_training_academy">
										<div class="training_academy_item">
											<div class="item_logo">
												<div class="logo_image"><img src="/static/img/std_eng_abrd/phil/logo_none.png" alt=""></div>
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
									<li id="btn_compare_city_all" class="btn_compare_city on"><a href="javascript:setCompareCity('all');">전체</a></li>
									<li id="btn_compare_city_cebu" class="btn_compare_city"><a href="javascript:setCompareCity('cebu');">세부</a></li>
									<li id="btn_compare_city_baguio" class="btn_compare_city"><a href="javascript:setCompareCity('baguio');">바기오</a></li>
									<li id="btn_compare_city_etc" class="btn_compare_city"><a href="javascript:setCompareCity('etc');">기타</a></li>
								</ul>

								<ul class="training_academy_list">
									<?php foreach($school_list as $key => $value): ?>
									<?php $city = "";
										if($school_list[$key]->aca_city == "세부"){
											$city = "cebu";
										}else if($school_list[$key]->aca_city == "바기오"){
											$city = "baguio";
										}else{
											$city = "etc";
										}
									?>
									<li class="training_academy_item compare_list_city <?= $city; ?>" onclick="set_compare('<?= $school_list[$key]->ph_idx; ?>');"><a href="#"><div class="box">
										<div class="item_logo">
											<div class="logo_image"><img src="<?= $school_list[$key]->logo_url; ?>" alt=""></div>
											<div class="logo_name"><?= $school_list[$key]->aca_name; ?></div>
										</div><!-- // item_logo -->
										<div class="item_info">
											<dl class="training_academy_data">
												<dt>학원위치</dt>
												<dd><div class="text"><?= $school_list[$key]->aca_city; ?></div></dd>
												<dt>학생규모</dt>
												<dd><div class="text"><?= $school_list[$key]->aca_students; ?></div></dd>
												<dt>커리큘럼</dt>
												<dd><div class="text"><?= $school_list[$key]->aca_curri; ?></div></dd>
												<dt>설립연도</dt>
												<dd><div class="text"><?= $school_list[$key]->aca_published; ?></div></dd>
												<dt>학원설명</dt>
												<dd class="colspan"><div class="text auto"><?= $school_list[$key]->aca_detail; ?></div></dd>
											</dl>
										</div><!-- // item_info -->
									</div></a></li><!-- // training_academy_item -->
									<?php endforeach; ?>
								</ul>

							</div><!-- // modal_compare_cont -->
							<div class="modal_compare_submit">
							<a href="#modal_04" class="modal_open" onclick="setCompareAll();">선택 완료</a></div>

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
												<div class="logo_image"><img id="compare_from_logo" src="/static/img/std_eng_abrd/phil/academy_item_logo@2x.png" alt=""></div>
												<div class="logo_name" id="compare_from_name">SMEAG 캐피탈</div>
											</div><!-- // item_logo -->
											<div class="item_info">
												<dl class="training_academy_data">
													<dt>학원위치</dt>
													<dd><div class="text" id="compare_from_city">세부</div></dd>
													<dt>학생규모</dt>
													<dd><div class="text" id="compare_from_students">500</div></dd>
													<dt>커리큘럼</dt>
													<dd><div class="text" id="compare_from_curri">스파르타</div></dd>
													<dt>설립연도</dt>
													<dd><div class="text" id="compare_from_published">2000</div></dd>
													<dt>학원설명</dt>
													<dd class="colspan"><div class="text auto" id="compare_from_detail">이학원은 어쩌구저쩌구가 조아요</div></dd>
												</dl>
											</div><!-- // item_info -->
										</div><!-- // training_academy_item -->
									</div><!-- // modal_training_academy -->
								</li>
								<li>
									<div class="modal_training_academy">
										<div class="training_academy_item">
											<div class="item_logo">
												<div class="logo_image"><img id="compare_to_logo" src="/static/img/std_eng_abrd/phil/academy_item_logo@2x.png" alt=""></div>
												<div class="logo_name" id="compare_to_name"></div>
											</div><!-- // item_logo -->
											<div class="item_info">
												<dl class="training_academy_data">
													<dt>학원위치</dt>
													<dd><div class="text" id="compare_to_city"></div></dd>
													<dt>학생규모</dt>
													<dd><div class="text" id="compare_to_students"></div></dd>
													<dt>커리큘럼</dt>
													<dd><div class="text" id="compare_to_curri"></div></dd>
													<dt>설립연도</dt>
													<dd><div class="text" id="compare_to_published"></div></dd>
													<dt>학원설명</dt>
													<dd class="colspan"><div class="text auto" id="compare_to_detail"></div></dd>
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
												<div class="md_cont_map"><img id="compare_from_map" src="/static/img/std_eng_abrd/phil/modal_tabs_map@2x.png" alt=""></div>
												<dl class="md_cont_addr">
													<dt>주소</dt>
													<dd id="compare_from_addr">abcdabcdabcd road, cebu, ...</dd>
												</dl>
											</div><!-- // md_cont_detail -->

											<ul class="md_cont_icons" id="compare_from_sns_ul">
											</ul><!-- // md_cont_icons -->

											<div class="md_cont_detail">
												<p class="md_cont_image"><img src="/static/img/std_eng_abrd/phil/modal_tabs_image@2x.png" alt=""></p>
												<p class="md_cont_image"><img src="/static/img/std_eng_abrd/phil/modal_tabs_image@2x.png" alt=""></p>
												<p class="md_cont_image"><img src="/static/img/std_eng_abrd/phil/modal_tabs_image@2x.png" alt=""></p>
											</div><!-- // md_cont_detail -->
										</li>
										<li>
											<div class="md_cont_detail">
												<div class="md_cont_map"><img id="compare_to_map" src="/static/img/std_eng_abrd/phil/modal_tabs_map@2x.png" alt=""></div>
												<dl class="md_cont_addr">
													<dt>주소</dt>
													<dd id="compare_to_addr">abcdabcdabcd road, cebu, ...</dd>
												</dl>
											</div><!-- // md_cont_detail -->

											<ul class="md_cont_icons" id="compare_to_sns_ul">
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
											<div class="md_cont_detail" id="each_compare_from_curri">
												<div class="md_cont_select">
													<select name="" id="compare_from_curri_list" onchange="setCurriCompareSchoolDetail('from');">
														<option value="">XXXXX 코스</option>
													</select>
												</div>
												<dl class="md_cont_data each_curri_compare_from">
												</dl>
											</div><!-- // md_cont_detail -->
										</li>
										<li>
											<div class="md_cont_detail" id="each_compare_to_curri">
												<div class="md_cont_select">
													<select name="" id="compare_to_curri_list" onchange="setCurriCompareSchoolDetail('to');">
														<option value="">XXXXX 코스</option>
													</select>
												</div>
												<dl class="md_cont_data each_curri_compare_to">
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
														<select name="" id="compare_from_price_period" onchange="setCalFromCompare('from');">
															<?php for($i=1; $i<25; $i++):?>
															<option value="<?= $i;?>"><?= $i;?>주</option>
															<?php endfor; ?>
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
																<select name="" id="compare_from_price_curri" onchange="setCalFromCompare('from');">
																	<option value="">커리큘럼 선택</option>
																</select>
															</div>
															<div class="text" id="compare_from_price_curri_cal"></div>
														</dd>
													</dl>
													<dl class="md_cont_data">
														<dt>기숙사비</dt>
														<dd>
															<div class="select">
																<select name="" id="compare_from_price_dorm" onchange="setCalFromCompare('from');">
																	<option value="">기숙사 선택</option>
																</select>
															</div>
															<div class="text" id="compare_from_price_dorm_cal"></div>
														</dd>
													</dl>
													<dl class="md_cont_data">
														<dt>프로모션</dt>
														<dd>
															<div class="select">
																<select name="" id="">
																	<option value="">프로모션 선택</option>
																	<option value="">-현재 선택 가능한 프로모션이 없습니다-</option>
																</select>
															</div>
															<div class="text minus">-0</div>
														</dd>
													</dl>
												</div><!-- // md_cont_group -->
												<div id="compare_from_long_term_alert" style="display:none;">
                                                	<p style="float:right;" id="long_term_discount_compare_from">-100,000</p>
                                                	<p style="float:right;">장기연수할인 : </p>
                                                </div>
												<dl class="md_cont_data total">
													<dt>합계</dt>
													<dd>
														<div class="text" id="tot_price_compare_from">2,000,000 (원)</div>
													</dd>
												</dl>
												<p style="float:right;" id="compare_from_discount_alert" style="display:none;">프로모션 적용 가능 여부는 출발일 또는 연수 기간등에 따라 상이하므로<br>꼭 상담원에게 문의하시기 바랍니다</p>
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
														<select name="" id="compare_to_price_period" onchange="setCalFromCompare('to');">
															<?php for($i=1; $i<25; $i++):?>
															<option value="<?= $i;?>"><?= $i;?>주</option>
															<?php endfor; ?>
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
																<select name="" id="compare_to_price_curri" onchange="setCalFromCompare('to');">
																	<option value="">커리큘럼 선택</option>
																</select>
															</div>
															<div class="text" id="compare_to_price_curri_cal"></div>
														</dd>
													</dl>
													<dl class="md_cont_data">
														<dt>기숙사비</dt>
														<dd>
															<div class="select">
																<select name="" id="compare_to_price_dorm" onchange="setCalFromCompare('to');">
																	<option value="">기숙사 선택</option>
																</select>
															</div>
															<div class="text" id="compare_to_price_dorm_cal"></div>
														</dd>
													</dl>
													<dl class="md_cont_data">
														<dt>프로모션</dt>
														<dd>
															<div class="select">
																<select name="" id="">
																	<option value="">프로모션 선택</option>
																	<option value="">-현재 선택 가능한 프로모션이 없습니다-</option>
																</select>
															</div>
															<div class="text minus">-0</div>
														</dd>
													</dl>
												</div><!-- // md_cont_group -->
												<div id="compare_to_long_term_alert" style="display:none;">
                                                	<p style="float:right;" id="long_term_discount_compare_to">-100,000</p>
                                                	<p style="float:right;">장기연수할인 : </p>
                                                </div>
												<dl class="md_cont_data total">
													<dt>합계</dt>
													<dd>
														<div class="text" id="tot_price_compare_to">2,000,000 (원)</div>
													</dd>
												</dl>
												<p style="float:right;" id="compare_to_discount_alert" style="display:none;">프로모션 적용 가능 여부는 출발일 또는 연수 기간등에 따라 상이하므로<br>꼭 상담원에게 문의하시기 바랍니다</p>
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


