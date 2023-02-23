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
		function showSchool(area){
			console.log(area);
			$(".acad_group").hide();
			if(area == 'all'){
				$(".acad_group").show();
			}else{
				$("."+area).show();
			}
		}
    	function init() {
        	circle_NewYork.onclick=showSchool('NewYork');
        	circle_Boston.onclick=showSchool('Boston');
        	circle_LosAngeles.onclick=showSchool('LosAngeles');
        	circle_SanDiego.onclick=showSchool('SanDiego');
        	circle_Seattle.onclick=showSchool('Seattle');
        	circle_Chicago.onclick=showSchool('Chicago');
        	circle_SanFrancisco.onclick=showSchool('SanFrancisco');
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
			<div id="detail_wrap" class="usa">
				<!-- 왜 미국에서 영어를 배우나요? -->
				<a href="/StudyEnglishAbroad/whyStudyEngUs">
					<div class="usa_title">
						<p>왜 미국에서 영어를 배우나요?</p>
					</div>
				</a>
				<!--// 왜 미국에서 영어를 배우나요? -->

				<!-- 미국지도영역 -->
				<div class="image_map_wrap">
					<h2 class="map_tit">미국</h2>
					<img src="/static/img/std_eng_abrd/us/map_usa.png" class="canada_map" usemap="#image-map">

					<!-- 이미지맵 링크 -->
					<map name="image-map">
						<area target="" class="tw_chg" id="circle_NewYork" open-layer="ny" alt="뉴욕" title="뉴욕" href="javascript:;" coords="886,60,61" shape="circle" onload="init()">
						<area target="" class="tw_chg" id="circle_Boston" open-layer="bs" alt="보스턴" title="보스턴" href="javascript:;" coords="1107,276,60" shape="circle" onload="init()">
						<area target="" class="tw_chg" id="circle_LosAngeles" open-layer="la" alt="로스앤젤리스" title="로스앤젤리스" href="javascript:;" coords="320,634,61" shape="circle" onload="init()">
						<area target="" class="tw_chg" id="circle_SanDiego" open-layer="sd" alt="샌디에이고" title="샌디에이고" href="javascript:;" coords="394,437,59" shape="circle" onload="init()">
						<area target="" class="tw_chg" id="circle_Seattle" open-layer="se" alt="시애틀" title="시애틀" href="javascript:;" coords="67,96,60" shape="circle" onload="init()">
						<area target="" class="tw_chg" id="circle_Chicago" open-layer="cha" alt="시카고" title="시카고" href="javascript:;" coords="639,227,61" shape="circle" onload="init()">
						<area target="" class="tw_chg" id="circle_SanFrancisco" open-layer="sf" alt="샌프란시스코" title="샌프란시스코" href="javascript:;" coords="62,511,63" shape="circle" onload="init()">
					</map>
					<!--// 이미지맵 링크 -->
				</div>
				<!--// 미국지도영역 -->

				<!-- 주요도시탭 -->
				<div class="town_tab_wrap">
					<p class="town_tit">주요 도시</p>
					<div class="tab_box">
						<div class="usa_tab_area">
							<button type="button" class="usa_tab tw_chg" open-layer="usa" onclick="showSchool('all');">
								<strong>U.S.A</strong>
								<span>미국</span>
							</button>
						</div>
						<div class="town_tab_area">
							<!--
								뉴욕 class="ny"
								보스턴 class="bs"
								로스앤젤리스 class="la"
								샌디에이고 class="sd"
								시애틀 class="se"
								시카고 class="cha"
								샌프란시스코 class="sf"
							-->
							<button type="button" class="town_tab tw_chg ny" open-layer="ny" onclick="showSchool('NewYork');">
								<strong>New York</strong>
								<span>뉴욕</span>
							</button>
							<button type="button" class="town_tab tw_chg bs" open-layer="bs" onclick="showSchool('Boston');">
								<strong>Boston</strong>
								<span>보스턴</span>
							</button>
							<button type="button" class="town_tab tw_chg la" open-layer="la" onclick="showSchool('LosAngeles');">
								<strong>Los Angeles</strong>
								<span>로스앤젤리스</span>
							</button>
							<button type="button" class="town_tab tw_chg sd" open-layer="sd" onclick="showSchool('SanDiego');">
								<strong>San Diego</strong>
								<span>샌디에이고</span>
							</button>
							<button type="button" class="town_tab tw_chg se" open-layer="se" onclick="showSchool('Seattle');">
								<strong>Seattle</strong>
								<span>시애틀</span>
							</button>
							<button type="button" class="town_tab tw_chg cha" open-layer="cha" onclick="showSchool('Chicago');">
								<strong>Chicago</strong>
								<span>시카고</span>
							</button>
							<button type="button" class="town_tab tw_chg sf" open-layer="sf" onclick="showSchool('SanFrancisco');">
								<strong>San Francisco</strong>
								<span>샌프란시스코</span>
							</button>
							<button type="button" class="town_tab none"></button>
						</div>
					</div>
				</div>
				<!--// 주요도시탭 -->

				<!-- 주요도시소개 -->
				<div class="town_intro_wrap">
					<div class="tw_intro usa" style="display:block">
						<!--
								미국 class="usa"
								뉴욕 class="ny"
								보스턴 class="bs"
								로스앤젤리스 class="la"
								샌디에이고 class="sd"
								시애틀 class="se"
								시카고 class="cha"
								샌프란시스코 class="sf"
							-->
						<h3 class="intro_tit">미국 U.S.A</h3>
						<p class="sub_tit">01 다양한 영어 교육 기관</p>
						<p class="txt">현재 영어 어학연수를 할 수 있는 나라는 많지만 대부분 2~4개의 대도시와 중소도시에 유학생들이 몰려 있는 것이 사실입니다. 미국은 한국 면적의 100배, 인구는 3억명이 넘는 나라로 수많은 어학연수 기관과 대학들이 있습니다. 이로 인해서 미국 전역에 걸쳐 어학연수를 할 수 있는 지역이 분포되어 있으며 또한 그만큼 다양한 프로그램들이 개설되어 있기 때문에 본인의 어학연수 목적과 기호에 따라서 적합하게 선택할 수 있습니다.</p>
						<ul>
							<li>1. 대학 부설 어학원</li>
							<li>2. 사설 어학원</li>
						</ul>
						<p class="sub_tit">02 각양각색의 문화 체험</p>
						<p class="txt">인종의 용광로 또는 멜팅 팟 이론(영어: melting pot)은 다양한 문화를 가진 사람들이 섞여 하나의 동질한 문화를 만들어가는 것을 의미합니다. 역사적으로는 주로 미국의 경우에 많이 사용되었는데, 이는 미국으로 수많은 이주민과 외국인들이 서로 모여 단일한 공통적 문화를 만들어가던 현상을 설명하기 위해 사용되었던 것입니다. </p>
						<p class="sub_tit">03 세계 경제, 교육, 문화의 중심</p>
						<p class="txt"> 전 세계 많은 국가들에 영향을 미치고 있는 미국에서 언어 뿐만 아니라 다양한 분야에서의 전문 지식 습득, 세계를 움직이는 흐름을 배울 수 있습니다. 미국은 경제, 정치, 문화 등의 다양한 분야를 선도하고 있는 미국에서 세계의 흐름을 직접 느끼고 경험하여 글로벌 감각을 습득할 수 있다는 것이 큰 장점 입니다.</p>
						<p class="sub_tit">04 한국에 가장 많이 익숙한 미국 영어</p>
					</div>
					<div class="tw_intro ny">
						<h3 class="intro_tit">뉴욕 도시 소개</h3>
						<p class="txt">뉴욕은 맨해튼, 브룩클린, 퀸즈, 브롱크스, 스테이트 아일랜드의 5개의 독립구로 나뉘어져 있습니다. 이중 뉴욕관광의 중심지인 맨해튼은 동쪽으로 이스트강, 서쪽으로 허드슨 강, 남쪽으로 어퍼 뉴욕만에 둘러싸인 길다란 섬으로 맨해튼이 뉴욕으로 알려져 있을 정도입니다. 그 외에도 미국 4대 지상파 방송국 본사가 모두 뉴욕에 있고 밀라노, 파리, 런던과 함께 세계 4대 패션 위크가 열리는 곳이기도 합니다. 유명한 쇼핑가와 세계경제의 중심지로 불리는 월 스트리트, 예술, 문화의 중심지인 브로드웨이 등 뉴욕을 대표하는 모든 것들이 모여 있는 곳입니다. 생활물가는 다른 도시에 비해서 많이 높다는 점이 아쉽지만 활기찬 분위기를 좋아하거나 많은 경험을 해보시고 싶은 분들께 어학연수지로 추천 드릴만한 곳입니다.</p>
						<p class="sub_tit">01 미국 내에서도 독자적인 세계를 이루는 독특한 도시</p>
						<p class="sub_tit">02 맨하탄은 시의 중심부</p>
						<p class="sub_tit">03 거리에는 많은 볼거리와 축제가 있음</p>
						<p class="sub_tit">04 관광지: 타임스퀘어, 자유여신상, 센트럴 파크 등</p>
						<p class="sub_tit">05 미국의 상업, 금융, 무역, 경제, 문화의 중심지</p>
					</div>
					<div class="tw_intro bs">
						<h3 class="intro_tit">보스턴 도시 소개</h3>
						<p class="txt">
							미국에서 가장 오래된 도시들 가운데 하나인 보스턴은 문화유산이 풍부하고 방문자에게 다양하고 풍부한 볼거리와 즐길 거리를 제공합니다. 50개 이상의 종합 대학 및 단과대학이 모여 있고 세계 최고의 대학 하버드 대학교와 MIT 등 명문대가 소재해 있습니다. 화려함은 없지만 아름다운 풍광과 아늑하고 전원적인 환경에 학구적인 분위기로 교육 도시의 품격을 느낄 수 있습니다. 미술관 관람, 보스턴 커먼에서 즐기는 스케이트 타기, 펜웨이파크의 야구경기 관람 등을 비롯하여 보스턴은 모두가 즐길 수 있는 많은 것들을 얻을 수 있는 도시입니다. 비싼 물가와 추운 날씨가 단점이긴 하지만 조용하고 안정적인 분위기에서 어학연수를 하고자 하는 분께 추천 드립니다.
						</p>
						<p class="sub_tit">01 매사추세츠주의 주도</p>
						<p class="sub_tit">02 경제, 상업, 교육, 문화의 중심지</p>
						<p class="sub_tit">03 세계최대의 항만도시</p>
						<p class="sub_tit">04 해가 비교적 빨리 져서 금방 어두워 짐</p>
						<p class="sub_tit">05 미국에서 가장 역사가 오래된 도시, 유적지가 많음</p>
						<p class="sub_tit">06 하버드 대학, MIT등 미국의 명문대학들이 소재</p>
						<p class="sub_tit">07 관광지 : 벙커힐 기념탑, 커먼 공원, 보스턴 미술관</p>
					</div>
					<div class="tw_intro la">
						<h3 class="intro_tit">로스앤젤리스 도시 소개</h3>
						<p class="txt">
							Los Angeles는 미국 제 2의 도시이며, 미서부에서는 최대 규모의 도시 입니다. 일년내내 쾌창한 날씨가 장점이며, 수많은 해변들과 디즈니랜드, 유니버셜 파크 등 테마 공원들이 있으며, 라스베거스, 샌디에고 등에 매우 근접하여 여행하기 좋습니다. UCLA나 남가주 최대의 사립대학인 USC같은 명문 학교들도 위치해 있고 명문대학교 부설에서 제공하는 ESL을 비롯, 여러 규모 있는 사설 어학원에서 영어 프로그램을 수강할 수 있다는 장점이 있습니다. 불편한 대중교통이 단점이지만 추운 날씨를 싫어하고 따뜻한 곳에서 연수를 원하는 학생들에게는 최적의 장소입니다.
						</p>
						<p class="sub_tit">01 뉴욕에 다음가는 미국을 대표하는 도시</p>
						<p class="sub_tit">02 미국 영화, 음악산업의 중심지 할리우드 위치</p>
						<p class="sub_tit">03 자연환경, 인종, 산업구조의 종류가 매우 다양</p>
						<p class="sub_tit">04 육상, 항공 교통으로 태평양 연안 남부지역 중심지</p>
						<p class="sub_tit">05 한국, 중국, 일본, 필리핀 등 동양계 이민이 많음</p>
						<p class="sub_tit">06 관광지 :코닥극장, 다저스 스타디움, 디즈니 랜드, 헐리웃 등</p>
					</div>
					<div class="tw_intro sd">
						<h3 class="intro_tit">샌디에이고 도시 소개</h3>
						<p class="txt">
							길게 펼쳐져 있는 황금빛 백사장과 미국 최고의 날씨를 자랑하면서도 도시의 분주함과 활력을 보여 주는 샌디에이고는 캘리포니아에서 영어 배우기에 이상적인 도시입니다. 사시사철 쾌적한 기후로 휴양 도시로 불리기도 하며, 안정된 치안과 비싼 물가로 부유한 백인들의 은퇴 도시라 불립니다. 또한 샌디에이고 씨월드, 샌디에이고 동물원, 샌디에이고 사파리 파크, 레고랜드 캘리포니아와 같이 세계 최고 수준의 테마파크로 가득 차 있습니다. 도시 자체가 편안해서 지루하게 느껴질 수도 있지만 편안하고 안정적인 분위기를 추구하며 영어를 배울 수 있다는 장점이 있습니다.
						</p>
						<p class="sub_tit">01 쾌적하고 조용한 항구도시, 휴양도시</p>
						<p class="sub_tit">02 연중 쾌적한 지중해성 기후</p>
						<p class="sub_tit">03 안전한 치안</p>
						<p class="sub_tit">04 UCSD, SDSU 등 교육의 중심지</p>
						<p class="sub_tit">05 관광지: 라호야 비치, 올드타운, 발보아 파크, 씨월드, 샌디에고 동물원, 레고랜드</p>
					</div>
					<div class="tw_intro se">
						<h3 class="intro_tit">시애틀 도시 소개</h3>
						<p class="txt">
							워싱턴주의 서북부에 위치한 항구도시로 알래스카의 관문이며 워싱턴주에서 가장 크고, 서북부에서 가장 아름다운 도시입니다. 일반적으로 '서해안'이라고 하면 LA나 샌프란시스코 등 캘리포니아를 떠올리게 되는데 그들과는 전혀 다른 매력을 지닌 곳이 바로 시애틀입니다. 또한 첨단과학, 항공산업, 반도체산업, 목재 가공업 등이 발달했고, 보잉, 마이크로소프트, 스타벅스 등의 본사가 소재하고 있습니다. 시애틀에서 어학연수를 하는 학생들은 사설 어학원 뿐만 아니라 워싱턴대학교 부설 어학센터에서도 퀄리티 있는 영어수업을 수강할 수도 있습니다. 캐나다 주요도시 중 하나인 밴쿠버와 육로로 2시간 이내로 갈 수 있는 장점도 있습니다.
						</p>
						<p class="sub_tit">01 겨울에 비가 많이 오는 편이지만 따뜻한 해양성 기후</p>
						<p class="sub_tit">02 미국 서북부에서 가장 큰 도시, 상업과 조선 산업의 중심</p>
						<p class="sub_tit">03 관광지: 스페이스 니들, 파이크 플레이스 마켓, 스타벅스 1호점, 치훌리 가든 앤드 글래스</p>
					</div>
					<div class="tw_intro cha">
						<h3 class="intro_tit">시카고 도시 소개</h3>
						<p class="txt">
							시카고는 지형적 장애물이 없어 바람이 그대로 도달하여 윈디시티(Windy City)라는 닉네임으로 잘 알려져 있습니다. 그야말로 바람이 많이 부는 윈디시티 시카고다. 그래서 겨울철이면 강추위가 몰아칩니다. 학술·문화의 중심이며, 시카고 대학교나 각종 미술관과 역사·과학·산업 박물관, 대수족관 등이 있습니다. 시카고는 마피아가 지배하던 도시라는 인식 때문에 굉장히 위험하다는 느낌을 받지만, 사실은 도심이 매우 청결하며 뉴욕이나 로스엔젤레스 같은 다른 대도시보다 치안도 안전한 편이며, 세계에서 가장 고층건물이 많은 도시입니다.
						</p>
						<p class="sub_tit">01 여름에는 덥고 습한 편, 봄, 가을은 온난하며 습도가 낮음, 겨울에는 한파가 오는 날이 많음</p>
						<p class="sub_tit">02 시카고는 뉴욕, 로스앤젤레스에 이어 미국에서 3번째로 큰 도시이며, 미국 중서부에서 가장 큰 도시</p>
						<p class="sub_tit">03 관광지: 시카고 미술관, 밀레니엄 공원, 월리스 타워, 존 핸콕 센터</p>
					</div>
					<div class="tw_intro sf">
						<h3 class="intro_tit">샌프란시스코 도시 소개</h3>
						<p class="txt">
							1800년대 중반 골드러시로 명성을 얻었던 샌프란시스코는 오늘날은 미국에서도 손꼽히는 규모의 도시로 성장했으면, 같은 캘리포니아에 있는 타 도시와는 달리 도심으로의 인구 집중도가 높습니다. 가장 편리한 대중교통 시스템으로 연수를 온 국제학생들에게는 편리함을 제공하며, 서부의 맨하탄이라고 불리우는 도시 답게 대도시의 화려함도 갖추고 있습니다. 동부 주요도시인 뉴욕, 보스턴 못지 않으며 서부에서 제일 비싼 물가가 단점이지만 금문교, 알카트라즈섬 등의 주요 관광지와 스탠포드대학교와 유씨 버클리대학교가 가까이 있어 미국에서 대학교 진학을 꿈꾸며 영어를 공부하는 학생들에게는 장점이 많은 도시입니다.
						</p>
						<p class="sub_tit">01 여름에 서늘하고 겨울에 따뜻한 지중해성 기후</p>
						<p class="sub_tit">02 서부지역의 경제, 상공업의 지도적 위치</p>
						<p class="sub_tit">03 샌프란시스코항은 동양과의 교류 활발</p>
						<p class="sub_tit">04 관광지 : 바버라코스트, 소노마 밸리, 베이 브리지</p>
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
								<button type="button" class="acad_pop_btn" onclick="showSchoolDetail('<?= $school->en_aca_city_idx;?>', '<?= $school->en_aca_idx;?>', '<?= $school->aca_name;?>', '<?= $school->city_name;?>');">
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
								<p class="info_tit">학교소개</p>
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
				<section class="pop_detail cs_pop pop_intro"><!-- 학교소개 모달팝업 class="pop_intro" 추가 -->
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
							<h3 class="sec_tit" id="curr_name">기본과정</h3>
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


