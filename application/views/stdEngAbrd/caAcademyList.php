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

    	$(document).ready(function(){
    		$("#map_Vancouver").click(function(){
    			showSchool('Vancouver');
    		});
            $("#map_Calgary").click(function(){
				showSchool('Calgary');
            });
            $("#map_Toronto").click(function(){
				showSchool('Toronto');
            });
            $("#map_Montreal").click(function(){
				showSchool('Montreal');
            });

            var city = "<?= $city;?>";
            if(city != ""){
				if(city == 'calgary'){
					$("#map_Calgary").click();
				}else if(city == 'montreal'){
					$("#map_Montreal").click();
				}else if(city == 'toronto'){
					$("#map_Toronto").click();
                }else if(city == 'vancouver'){
                	$("#map_Vancouver").click();
                }
            }
    	});
		function showSchool(area){
			console.log(area);
			$(".acad_group").hide();
			if(area == 'all'){
				$(".acad_group").show();
			}else{
				$("."+area).show();
			}
		}

		function showProgramDetail(idx,school,city){
			$.ajax({
				type: "post",
				url: "/studyEnglishAbroad/apiGetProgramDetail",
				async: true,
				data: {
					"idx": idx
				},
				dataType: "text",
				success: function(data){
					var details = JSON.parse(data);
					//console.log(details);
					//console.log(details[0]);
					//console.log(details[0].pro_class_week);
					$("#city_name").empty();
					$("#city_name").append(school+"-"+city);
					$("#curr_name").empty();
					$("#curr_name").append(details[0].pro_name);
					$("#class_week").empty();
					$("#class_week").append(details[0].pro_class_week);
					$("#pro_intro").empty();
					$("#pro_intro").append(details[0].pro_intro);
					$("#entry_level").empty();
					$("#entry_level").append(details[0].pro_level);
					$("#start_day").empty();
					$("#start_day").append(details[0].pro_start);
					$("#study_period").empty();
					$("#study_period").append(details[0].pro_period);
				},error: function(data){
					alert("잠시 후 다시 시도해주세요.");
				}
			});
			$('.pop_cur').fadeIn(200);
			dimShow();
		}
		function showSchoolDetail(idx,aca_idx,school,city){
			var intro = $("#school_intro_"+idx).innerText;
			$.ajax({
				type: "post",
				url: "/studyEnglishAbroad/apiGetDormitoryDetail",
				async: true,
				data: {
					"idx": idx,
					"aca_idx": aca_idx
				},
				dataType: "text",
				success: function(data){
					var details = JSON.parse(data);
					$("#pop_school_name").empty();
					$("#pop_school_name").append(school+"-"+city);
					$("#pop_school_intro").empty();
					$("#pop_school_intro").append(details['intro'].aca_intro);
					var details_arr = Object.entries(details);
					//숙소 내용 입력
					var html = "";
					//마지막 인덱스에 학교소개 들어감으로 제거 후 숙소 정보 입력
					for(var i = 0; i < details_arr.length-1; i++){
						html += "<tr>";
						html += "<td>"+details_arr[i][1].dorm_type+"</td>";
						html += "<td>"+details_arr[i][1].dorm_bed_meal+"</td>";
						html += "<td>"+details_arr[i][1].dorm_bath+"</td>";
						html += "<td>"+details_arr[i][1].dorm_distance_school+"</td>";
						html += "</tr>";
					}
					$("#dorm_details").empty();
					$("#dorm_details").append(html);
				},error: function(data){
					alert("잠시 후 다시 시도해주세요.");
				}
			});
			$('.pop_intro').fadeIn(200);
			dimShow();
		}
	</script>
	<div id="wrap">
	<?php
    include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/header.php');
    ?>
		<div id="container" style="padding:0;">

			<div id="content">

			<!-- 조기유학상세작업 -->
			<div id="detail_wrap" class="canada">
				<!-- 왜 캐나다에서 영어를 배우나요? -->
				<a href="/StudyEnglishAbroad/whyStudyEngCa">
					<div class="canada_title">
						<p>왜 캐나다에서 영어를 배우나요?</p>
					</div>
				</a>
				<!--// 왜 캐나다에서 영어를 배우나요? -->

				<!-- 캐나다지도영역 -->
				<div class="image_map_wrap">
					<h2 class="map_tit">캐나다</h2>
					<img src="/static/img/std_eng_abrd/ca/map_canada.png" class="canada_map" usemap="#image-map">

					<!-- 이미지맵 링크 -->
                    <!--
                    	캐나다 class="can"
                    	밴쿠버 class="van"
                    	토론토 class="tor"
                    	몬트리올 class="mon"
                    	캘거리 class="cal"
                    -->
					<map name="image-map">
						<area target="" class="tw_chg" id="map_Vancouver" open-layer="van" alt="브리티시컬럼비아" title="브리티시컬럼비아" href="javascript:showSchool('Vancouver');" coords="208,410,249,433,300,456,365,478,335,575,328,596,343,610,346,628,360,650,374,692,266,661,235,604" shape="poly">
						<area target="" class="tw_chg" id="map_Calgary" open-layer="cal" alt="알버타" title="알버타" href="javascript:showSchool('Calgary');" coords="371,483,451,498,427,698,380,695,340,595,340,577" shape="poly">
						<area target="" class="tw_chg" id="map_Toronto" open-layer="tor" alt="온타리오" title="온타리오" href="javascript:showSchool('Toronto');" coords="664,560,604,631,606,657,605,699,668,720,705,692,732,721,761,740,770,808,820,774,861,727,803,719,775,645,733,564" shape="poly">
						<area target="" class="tw_chg" id="map_Montreal" open-layer="mon" alt="퀘백" title="퀘백" href="javascript:showSchool('Montreal');" coords="873,722,807,714,780,642,752,566,745,492,727,423,787,421,855,433,897,477,913,499,878,512,893,542,920,552,950,536,991,519,993,542,961,570,933,687" shape="poly">
					</map>
					<!--// 이미지맵 링크 -->
				</div>
				<!--// 캐나다지도영역 -->

				<!-- 주요도시탭 -->
				<div class="town_tab_wrap">
					<p class="town_tit">주요 도시</p>
					<div class="tab_box">
						<div class="town_tab_area">
							<!--
                            	캐나다 class="can"
                            	밴쿠버 class="van"
                            	토론토 class="tor"
                            	몬트리올 class="mon"
                            	캘거리 class="cal"
                            -->
							<button type="button" class="town_tab tw_chg can" open-layer="can" onclick="showSchool('all');">
								<strong>Canada</strong>
								<span>캐나다</span>
							</button>
							<button type="button" class="town_tab tw_chg van" open-layer="van" onclick="showSchool('Vancouver');">
								<strong>Vancouver</strong>
								<span>밴쿠버</span>
							</button>
							<button type="button" class="town_tab tw_chg tor" open-layer="tor" onclick="showSchool('Toronto');">
								<strong>Toronto</strong>
								<span>토론토</span>
							</button>
							<button type="button" class="town_tab tw_chg mon" open-layer="mon" onclick="showSchool('Montreal');">
								<strong>Montreal</strong>
								<span>몬트리올</span>
							</button>
							<button type="button" class="town_tab tw_chg cal" open-layer="cal" onclick="showSchool('Calgary');">
								<strong>Calgary</strong>
								<span>캘거리</span>
							</button>
						</div>
					</div>
				</div>
				<!--// 주요도시탭 -->

				<!-- 주요도시소개 -->
				<div class="town_intro_wrap">
					<div class="tw_intro can" style="display:block">
						<!--
							캐나다 class="can"
							밴쿠버 class="van"
							토론토 class="tor"
							몬트리올 class="mon"
							캘거리 class="cal"
						-->
						<h3 class="intro_tit">캐나다 Canada</h3>
						<p class="sub_tit">01 안전한 연수 환경</p>
						<p class="txt">어학연수를 생각할 때 가장 중요한 것은 치안입니다. 캐나다는 이민자들의 나라로 현지인들이 기본적으로 외국인에게 관대하고 친절합니다. 또 같은 북미 지역이라도 캐나다는 미국과 달리 총기 및 마약류 소지에 대해 엄격히 규제하고 있으며 세계 최저 범죄율을 자랑하고 있습니다. 또 경찰과 안전요원들이 학교와 다운타운을 상시로 순찰해 유학생들이 보다 안전하게 학업을 마칠 수 있습니다. 또 경찰과 안전요원들이 학교와 다운타운을 상시로 순찰해 유학생들이 보다 안전하게 학업을 마칠 수 있습니다.</p>
						<p class="sub_tit">02 북미 표준 언어</p>
						<p class="txt">미국식 표준영어를 사용하면서도 미국인들처럼 연음을 많이 섞어 흘려 발음하지 않아 미국식 영어에 익숙한 한국학생들이 거부감 없이 영어를 쉽게 배울 수 있습니다. 지역과 계층, 인종별로 다른 발음과 억양을 구사하는 미국과 기존의 표준발음 정책을 포기하고 여러 발음을 용인하기 시작한 영국에 비해 캐나다는 알아듣기 쉽고 말하기 편한 표준적인 영어를 사용해 영어공부를 하기에 좋은 환경 입니다.</p>
						<p class="sub_tit">03 수준 높은 교육</p>
						<p class="txt">캐나다인들은 교육을 매우 중요시하며, 최고의 학교들을 요구하고 있습니다. 캐나다는 다른 선진국 국가들과 마찬가지로 많은 예산을 교육에 투자하고 있으며, 어느 OECD 국가들과 비교해도 훨씬 더 많은 투자를 하고 있습니다. 캐나다 현지 학생들은 계속해서 독해, 과학, 수학 분야의 국제 수준 테스트에서 우수한 성적을 보여주고 있으며 이는 캐나다 학교들의 특출한 수준을 보여주고 있는 예시입니다. 캐나다 대학에서 취득한 학위나 졸업장은 비즈니스, 정부 단체, 그리고 학술 단체에서 전 세계적으로 인정받고 있습니다.</p>
						<p class="sub_tit">04 친절한 사람들</p>
						<p class="txt">캐나다는 이민자의 나라이며, 전통과 다문화의 다양성을 장려하는 정책을 펴고 있습니다. 이런 다양한 환경내에서 서로 존중 받고 서로를 이해하고 있습니다. 거의 모든 세계의 인종들이 캐나다를 대표하고 있습니다. 따라서 특정 문화와 결합된 많은 민족 음식과 유쾌한 오락활동을 캐나다에서 접해볼 수 있습니다. </p>
					</div>
					<div class="tw_intro van">
						<h3 class="intro_tit">밴쿠버 도시 소개</h3>
						<p class="txt">
							태평양에 접하고 있는 해안 도시 밴쿠버는 인구 180~190만명의 서부 캐나다 최대의 도시이자 토론토, 몬트리올에 이어 캐나다 제 3의 도시입니다. 밴쿠버 다운타운의 상업 지구이며 유명한 쇼핑 거리인 롭슨 스트리트가 있는 곳이기도 합니다.<br><br>
							인근에는 규모 면에서 북미에서도 큰 규모를 자랑하는 차이나타운이 있으며, 역사적인 예일타운에는 여러 음식점, 카페, 술집, 부티크, 나이트클럽이 있습니다. 태평양 난류의 영향으로 4계절 내내 온화한 날씨를 보이고 여름은 시원합니다.<br><br>
							세계에서 살기 좋은 도시로도 항상 순위권에 손꼽히는 밴쿠버는 북미 표준 영어를 배우려는 연수생들이 많습니다.<br>
							이민자의 나라 답게 다양한 국가의 전통요리를 만드는 식당들도 많으며, 스텐리 파크 등 관광지도 많아 어학연수로 적격인 도시입니다.
						</p>
					</div>
					<div class="tw_intro tor">
						<h3 class="intro_tit">토론토 도시 소개</h3>
						<p class="txt">
							캐나다 제 1의 도시이며, 세계에서 가장 다양한 문화가 공존하는 곳 입니다.<br>
							CN타워, 온타리오 왕립 박물관, 과학관 등은 토론토를 대표하는 관광지 입니다.<br>
							또한 다양한 북미 프로 스포츠 팀들이 토론토를 연고로 하고 있으며, 국제 영화제 또한 그 화려함을 자랑하고 있습니다. <br><br>
							캐나다에서 가장 인구밀도가 높은 온타리오 주에서 가장 많은 관광객이 들리는 곳이 바로 토론토입니다.<br>
							캐나다 최대의 도시 토론토는 인구 약 350만명으로 캐나다 금융과 비즈니스의 중심지로 위성도시를 안고 있어 규모가 매우 큽니다. 캐나다 어학연수를 생각하는 학생들에게는 인지도 있는 사설 어학원 뿐만 아니라 토론토대학교, 요크대학교와 같은 대학 부설 영어센터에서도 학업할 수 있는 기회가 열려 있습니다.
						</p>
					</div>
					<div class="tw_intro vic">
						<h3 class="intro_tit">빅토리아 도시 소개</h3>
						<p class="txt">
							캐나다의 다른 지역에 비해 온화한 날씨를 가지고 있으며 또한 한국과 가까운 편이라 유학생들이 가장 많이 찾는 지역 중 하나입니다. BC주는 캐나다의 관문인 벤쿠버가 속해 있고, 벤쿠버에서 2시간 떨어진 곳에 벤쿠버 아일랜드가 있습니다.<br>
							관광 명소로 스탠리파크, 휘슬러, 오카나간, 부차드 가든 등이 있습니다.<br>
							밴쿠버 아일랜드는 대한민국 1/3 크기의 거대한 섬으로 빅토리아는 이 밴쿠버 아일랜드에서 가장 큰 도시이자 브리티쉬 컬럼비아주의 주도 입니다. 또한 빅토리아는 날씨와 안락한 환경으로 인해 캐나다인들이 노년을 보내고 싶어하는 도시이며, 실제로 많은 캐네디언들이 은퇴후 여생을 이곳에서 보내고 있어 노령인구가 많습니다. 때문에 사람들이 여유롭고 친절하며 치안과 여가생활에 대한 부분이 캐나다에서 가장 잘 정비되어 있는 도시 중 하나입니다.
						</p>
					</div>
					<div class="tw_intro mon">
						<h3 class="intro_tit">몬트리올 도시 소개</h3>
						<p class="txt">
							캐나다에서 두 번째로 인구가 많은 도시이자 퀘벡주에서 가장 인구가 많은 도시입니다.<br>
							역사적으로 캐나다의 상업도시이며, 하계 올림픽을 개최한 캐나다의 유일한 도시이기도 합니다.<br>
							여름에는 덥고 겨울에는 눈이 많이 내리고 추운 편입니다.<br><br>
							어학연수에서 중요한 부분을 차지하는 국적비율에서 한국학생의 비율이 캐나다 타도시들에 비해 낮은 편입니다.<br><br>
							물론 거리나 상점의 상호들이 불어로 표기되는 경우가 많아 당황스러울 순 있지만 다른 대도시에 비해 생활물가, 특히 렌트비가 저렴하여 영어를 배우길 원하는 분들이 꾸준하게 찾는 도시이기도 합니다. 주요산업으로 우주항공, IT, 컴퓨터, 영화소프트웨어, 생명공학 등이 있으며 몬트리올 국제영화제는 세계 3대 영화제중의 하나로 유명합니다.
						</p>
					</div>
					<div class="tw_intro cal">
						<h3 class="intro_tit">캘거리 도시 소개</h3>
						<p class="txt">
							캘거리(Calgary)는 캐나다 앨버타주의 남쪽 중심에 자리잡고 있으며, 세계적 관광지인 밴프에서 약 100 km정도 남동쪽에 위치하고 있습니다. 차로 1시간 20분 정도면 밴프로 이동할 수 있습니다. 하이킹과 스키를 좋아한다면 최고의 어학연수 도시라고 할 수 있는 곳입니다. 천혜의 입지 조건과 교통 조건 그리고 석유의 발견에 힘입어 현대적 도시로 성장하였습니다. 캘거리는 앨버타 주에서 제일 큰 도시이며 대도시권 인구면에서는 캐나다 전국에서 3위를 차지합니다.
						</p>
					</div>
				</div>
				<!--// 주요도시소개 -->

				<!-- 학원 설명 -->
				<div class="office_list_wrap">
					<h2 class="office_title">학원 설명</h2>

					<!-- 목록 -->
					<div class="acad_list">
						<?php foreach($school_list as $school) : ?>
						<div class="acad_group <?= str_replace(' ', '', $school->city_name);?>">
							<!-- 왼쪽이미지영역 -->
							<div class="img_area">
								<button type="button" class="acad_pop_btn" >
									<figure class="logo_img">
										<img src="<?= $school->logo_url;?>" alt="<?= $school->logo_url;?>">
									</figure>
									<span class="name"><?= $school->aca_name;?><br><?= $school->city_name;?></span>
								</button>
							</div>
							<!--// 왼쪽이미지영역 -->

							<!-- 오른쪽설명영역 -->
							<div class="acad_info">
								<p class="info_tit">프로그램</p>
								<div class="acad_tab_wrap">
									<?php foreach($school->program as $program): ?>
										<button type="button" class="acad_tab" onclick="showProgramDetail('<?= $program->idx;?>', '<?= $school->aca_name;?>', '<?= $school->city_name;?>');"><?= mb_strimwidth($program->pro_name, '0', '35', '...', 'utf-8');?></button>
									<?php endforeach; ?>
								</div>
								<div class="acad_tab_wrap" style="margin-top: 3rem; display: block;">
                                	<p type="button" class="acad_tab" style="background-color: #fff;color: #000;font-size: 2rem;float: left;width: fit-content;margin-top: 2rem;">학교소개</p>
                                	<button type="button" class="acad_tab" onclick="showSchoolDetail('<?= $school->en_aca_city_idx;?>', '<?= $school->en_aca_idx;?>', '<?= $school->aca_name;?>', '<?= $school->city_name;?>');">자세히보기</button>
                                </div>
								<div class="acad_txt">
									<p id="school_intro_<?= $school->en_aca_city_idx;?>"><?= $school->aca_intro;?></p>
								</div>
							</div>
							<!--// 오른쪽설명영역 -->
						</div>
						<?php endforeach;?>
					</div>
					<!--// 목록 -->

					<!-- 페이징 -->
					<!-- <div class="paging">-->
					<!-- 	<a href="#none" class="btn_arr prev"></a>-->
					<!-- 	<a href="#none" class="num on">1</a>--><!-- 현재페이지class="on"추가 -->
					<!-- 	<a href="#none" class="num ">2</a>-->
					<!-- 	<a href="#none" class="num ">3</a>-->
					<!-- 	<a href="#none" class="btn_arr next"></a>-->
					<!-- </div>-->
					<!--// 페이징 -->
				</div>
				<!--// 학원 설명 -->

				<!-- 학교소개 모달팝업 -->
				<section class="pop_detail cs_pop pop_canada pop_intro"><!-- 학교소개 모달팝업 class="pop_intro" 추가 -->
					<div class="cotn">
						<h2 class="pop_title" id="pop_school_name">EF-New York</h2>

						<!-- 학교소개 -->
						<div class="sec_wrap">
							<h3 class="sec_tit">학교소개</h3>
							<div class="sec_des_box">
								<p id="pop_school_intro">
									EF 뉴욕센터는 대부분의 어학원이 밀집해 있는 뉴욕 맨하튼 다운타운에서 벗어나 안전한 주거지역인 테리타운에 위치해 있습니다. 대학캠퍼스를 그대로 인수하여 전체 11개의 건물과 확 트인 녹지가 특징인 25 에이커에 달하는 교정은 마치 미국의 유명 대학에서 공부하는 것같은 기분이 들게 합니다. 미국에서 가장 큰 사설학원 캠퍼스라는 명성에 걸맞게 연령대별로 나누어 배정되는 클라스와 기숙사 생활, 대형 강당, 수영장, 피트니스 센터 등 학생들에게 필요한 모든 것들을 캠퍼스 안에서 할 수 있는 몰입형 캠퍼스입니다.
								</p>
							</div>
						</div>
						<!--// 학교소개 -->

						<!-- 숙소옵션 -->
						<div class="sec_wrap">
							<h3 class="sec_tit">숙소옵션</h3>
							<div class="sec_table">
								<table>
									<colgroup>
										<col width="25%">
										<col width="25%">
										<col width="25%">
										<col width="25%">
									</colgroup>
									<thead>
										<tr>
											<th>Type</th>
											<th>Bed & Meal</th>
											<th>Bathroom</th>
											<th>Distance to School</th>
										</tr>
									</thead>
									<tbody id="dorm_details">

									</tbody>
								</table>
							</div>
						</div>
						<!--// 숙소옵션 -->
					</div>
				</section>
				<!--// 학교소개 모달팝업 -->

				<!-- 커리큘럼상세 모달팝업 -->
				<section class="pop_detail cs_pop pop_cur"><!-- 커리큘럼상세 모달팝업 class="pop_cur" 추가 -->
					<div class="cotn">
						<h2 class="pop_title" id="city_name">EF-New York</h2>

						<!-- 기본과정 -->
						<div class="sec_wrap">
							<h3 class="sec_tit" id="curr_name" style="background-color:#BF0A30; color:#fff;">기본과정</h3>
							<div class="sec_table">
								<table>
									<colgroup>
										<col>
										<col>
									</colgroup>
									<tbody>
										<tr>
											<th>주당<br>수업시간</th>
											<td id="class_week">20레슨(13.3시간)</td>
										</tr>
										<tr>
											<th>프로그램 소개</th>
											<td id="pro_intro">
												여유롭게 휴식을 즐기며 회화를 주로 배우며 주로 방학이나 휴가기간을 이용해서 참여<br>
												일반영어 16레슨 + 프로젝트 수업 2레슨 + 연사강연 2레슨으로 제공<br>
												실생활에서 사용되는 말하기와 이해력 향상에 중점을 두고 있음<br>
												종합적인 학습자료와 개인 맞춤형 지도, 양방향 수업을 통해 실력증진
											</td>
										</tr>
										<tr>
											<th>입학레벨</th>
											<td id="entry_level">홈스테이, 기숙사 (1인실/2인실/3~4인실)</td>
										</tr>
										<tr>
											<th>개강일</th>
											<td id="start_day">3학기로 운영 (9월/1월/3월)</td>
										</tr>
										<tr>
											<th>학업기간</th>
											<td id="study_period">8주</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<!--// 기본과정 -->
					</div>
				</section>
				<!--// 학교소개 모달팝업 -->
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


