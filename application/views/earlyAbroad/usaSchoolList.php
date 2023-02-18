<?php
include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/head.php');
//include_once($_SERVER['DOCUMENT_ROOT']."/inc/blog_list.php");
?>
<link rel="stylesheet" type="text/css" href="/static/css/sub.css">
<body>
    <script type="text/javascript">
	function get_list(state){
		if(state == 'All'){
			$(".swiper-slide .item").show();
			$(".swiper-control").show();
			$(".school_list_title").show();
			$(".school_list_info").show();
		}else{
			//$(".swiper-slide .item").hide();
			$(".swiper-control").hide();
			$(".school_list_title").hide();
			$(".school_list_info").hide();
			var title = $("#"+state+"_title");
			var list = $("#"+state+"_list");
			title.parent().parent().children().hide();
			title.parent().show();
			title.show();
			list.show();
			title.focus();
		}
	}
    </script>
	<div id="wrap">
	<?php
    include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/header.php');
    ?>
		<div id="container" style="padding:0;">

			<div id="content">
				<!-- cont_sect -->
				<section class="cont_sect sub2_1">
					<div class="inner">
						<div class="cont_title">미국 조기유학 프로그램</div>
						<ul class="ico_btn_list type3">
							<li>
								<a href="/earlyAbroad/usSchoolList">
									<i class="ico ico1" style="background-color:#FFE8E8;"></i>
									<div class="text" style="background-color:#FFE8E8;">조기유학 학교찾기</div>
								</a>
							</li>
							<li>
								<a href="/earlyAbroad/whyEarlyUsa">
									<i class="ico ico2"></i>
									<div class="text">왜 조기유학인가?</div>
								</a>
							</li>
							<li>
								<a href="/earlyAbroad/usTopSchools">
									<i class="ico ico3"></i>
									<div class="text">명문 TOP50</div>
								</a>
							</li>
						</ul>
					</div><!-- // inner -->
				</section>
				<!-- // cont_sect -->
				<!-- cont_sect -->
				<section class="cont_sect" id="schoolMap">
					<div class="inner">

						<div class="cont_title">미국</div>

						<div class="school_map">
							<img src="/static/img/early_abroad/usa/school_map_eng.png" alt="" usemap="#image-map">

							<map name="image-map">
								 <area target="" alt="워싱턴" title="워싱턴" href="javascript:get_list('Washington');" coords="118,113,209,127,203,189,203,197,168,194,155,195,145,197,126,196,105,195,103,184,88,176,87,157,85,132,83,125,108,133,118,148,119,132" shape="poly">
								 <area target="" alt="오리건" title="오리건" href="javascript:get_list('Oregon');" coords="65,277,190,291,199,240,195,235,200,226,205,218,211,208,203,197,163,192,149,194,105,194,102,182,87,175,82,200,73,237,66,247" shape="poly">
								 <area target="" alt="캘리포니아" title="캘리포니아" href="javascript:get_list('California');" coords="67,282,68,288,66,299,55,311,57,320,65,332,61,345,62,352,63,359,70,365,76,382,85,386,80,391,82,401,91,407,85,420,97,439,102,448,105,458,106,470,124,474,132,480,135,486,145,484,148,493,155,496,164,510,170,522,219,525,220,513,222,506,225,499,229,490,228,482,226,470,130,363,138,290" shape="poly">
								 <area target="" alt="네바다" title="네바다" href="javascript:;" coords="247,300,236,445,224,441,226,452,226,469,131,363,140,289" shape="poly">
								 <area target="" alt="아이다호" title="아이다호" href="javascript:get_list('Idaho');" coords="211,125,224,126,222,147,227,156,228,164,236,172,240,181,247,185,245,197,245,209,253,207,258,213,261,224,267,237,276,237,295,238,297,232,304,238,300,301,195,293,200,243,195,234,211,209,203,193" shape="poly">
								 <area target="" alt="몬태나" title="몬태나" href="javascript:;" coords="225,129,222,146,227,156,229,164,234,170,239,180,247,183,245,203,251,206,257,211,267,235,295,237,302,235,303,229,424,225,420,131" shape="poly">
								 <area target="" alt="와이오밍" title="와이오밍" href="javascript:;" coords="304,229,303,324,428,322,424,227" shape="poly">
								 <area target="" alt="유타" title="유타" href="javascript:;" coords="249,298,301,303,303,323,336,327,336,425,240,421" shape="poly">
								 <area target="" alt="콜로라도" title="콜로라도" href="javascript:get_list('Colorado');" coords="338,324,465,324,471,420,336,425" shape="poly">
								 <area target="" alt="애리조나" title="애리조나" href="javascript:get_list('Arizona');" coords="239,424,237,445,224,442,226,472,230,487,222,511,221,522,217,529,296,564,309,562,333,562,336,428" shape="poly">
								 <area target="" alt="뉴멕시코" title="뉴멕시코" href="javascript:;" coords="337,426,453,424,457,544,386,549,353,552,353,561,335,562" shape="poly">
								 <area target="" alt="노스다코타" title="노스다코타" href="javascript:get_list('North_Dakota');" coords="422,129,484,127,532,123,534,134,536,145,542,152,542,170,544,179,550,186,549,192,424,204" shape="poly">
								 <area target="" alt="사우스다코타" title="사우스다코타" href="javascript:;" coords="422,205,549,194,546,202,555,210,561,249,557,253,561,263,562,274,548,271,540,274,526,267,427,274" shape="poly">
								 <area target="" alt="네브레스카" title="네브레스카" href="javascript:;" coords="428,274,430,320,465,322,468,349,591,334,584,322,578,314,575,306,573,297,565,287,561,276,546,270,540,274,526,267" shape="poly">
								 <area target="" alt="캔자스" title="캔자스" href="javascript:get_list('Kansas');" coords="469,350,591,334,600,338,596,347,600,351,607,353,614,407,473,420" shape="poly">
								 <area target="" alt="오클라호마" title="오클라호마" href="jacascript:;" coords="456,422,614,409,617,419,623,445,628,487,614,483,607,484,595,487,582,486,575,492,569,489,559,491,553,487,544,487,531,481,517,475,511,434,454,434" shape="poly">
								 <area target="" alt="텍사스" title="텍사스" href="javascript:get_list('Texas');" coords="453,436,510,434,517,476,527,480,542,488,552,486,557,490,567,489,575,492,583,487,597,488,613,482,629,490,636,487,642,519,647,530,656,544,656,560,657,572,655,578,640,586,630,600,612,611,598,623,588,636,587,657,591,671,595,681,589,682,570,680,553,675,540,648,523,634,512,612,497,603,488,598,476,595,469,603,463,614,461,619,436,607,430,601,422,583,407,573,395,559,388,552,457,543" shape="poly">
								 <area target="" alt="알래스카" title="알래스카" href="jacascript:;" coords="159,580,168,577,181,578,188,576,199,577,207,576,217,582,232,620,241,642,246,651,251,646,254,651,261,653,270,646,279,652,299,665,307,664,309,676,300,682,292,684,276,676,262,663,247,661,233,661,223,660,219,665,208,670,203,676,196,686,185,696,178,707,168,713,158,719,147,724,149,713,175,694,174,688,165,686,158,682,151,677,142,671,140,663,147,649,138,638,133,625,146,617,138,602,147,591" shape="poly">
								 <area target="" alt="하와이" title="하와이" href="javascript:get_list('Hawaii');" coords="339,646,349,665,365,693,385,707,417,709,440,707,463,696,480,679,484,661,473,644,451,632,425,632,403,629,386,626,367,626,353,624,338,632" shape="poly">
								 <area target="" alt="미네소타" title="미네소타" href="javascript:get_list('Minnesota');" coords="534,121,561,117,565,104,571,111,571,119,586,123,596,124,605,121,611,123,618,125,626,128,636,124,652,124,646,132,636,143,629,152,621,161,621,169,621,179,615,184,614,194,618,199,621,208,625,215,632,219,638,219,648,229,649,238,561,252,559,210,547,201,553,186,544,170,544,150,536,141" shape="poly">
								 <area target="" alt="아이오와" title="아이오와" href="javascript:get_list('Iowa');" coords="560,255,565,276,567,287,575,298,579,311,584,320,615,315,654,309,660,313,667,299,665,288,671,284,676,270,668,259,655,251,652,240" shape="poly">
								 <area target="" alt="미주리" title="미주리" href="javascript:get_list('Missouri');" coords="586,321,654,310,661,315,663,324,675,336,682,346,691,347,690,356,688,361,707,372,713,380,719,390,718,397,713,402,713,413,700,414,699,403,619,419,609,353,597,346,601,337,590,332" shape="poly">
								 <area target="" alt="아칸소" title="아칸소" href="jacascript:;" coords="619,421,628,488,636,485,641,501,696,492,699,484,694,478,698,462,705,455,702,445,708,438,713,415,698,417,698,404" shape="poly">
								 <area target="" alt="루이지애나" title="루이지애나" href="jacascript:;" coords="641,501,644,517,655,541,657,560,656,578,670,576,690,576,699,573,712,578,721,581,735,580,740,570,754,576,748,562,748,551,733,539,714,539,698,540,695,522,700,512,703,506,696,491" shape="poly">
								 <area target="" alt="위스콘신" title="위스콘신" href="javascript:get_list('Wisconsin');" coords="624,164,621,180,617,187,621,206,631,215,639,217,650,230,650,239,657,250,671,259,713,250,713,240,710,225,711,207,710,195,706,188,710,169,717,168,725,164,736,158,746,156,765,152,751,144,739,143,727,145,711,151,693,150,682,146,670,147,663,155,652,159,642,157" shape="poly">
								 <area target="" alt="일리노이" title="일리노이" href="javascript:get_list('Illinois');" coords="673,261,710,252,718,261,725,281,731,306,737,321,738,331,740,338,736,351,734,365,736,371,729,373,732,379,719,381,709,370,690,360,692,346,683,344,671,331,663,321,661,313,669,298,667,290,675,279" shape="poly">
								 <area target="" alt="미시간" title="미시간" href="jacascript:;" coords="736,184,733,197,732,208,736,219,742,230,744,245,738,263,774,255,796,251,799,236,801,228,806,222,797,198,789,196,785,205,777,207,775,195,782,188,777,178,775,167,748,159,745,169,745,177" shape="poly">
								 <area target="" alt="인디애나" title="인디애나" href="jacascript:;" coords="725,271,732,299,738,320,740,334,736,359,743,358,750,358,761,355,768,351,778,335,792,326,773,257" shape="poly">
								 <area target="" alt="오하이오" title="오하이오" href="javascript:get_list('Ohio');" coords="775,257,796,252,815,256,819,251,827,249,836,239,844,234,855,264,857,276,856,287,849,296,844,299,842,307,838,315,836,322,824,320,809,324,792,322" shape="poly">
								 <area target="" alt="켄터키" title="켄터키" href="jacascript:;" coords="740,361,739,367,734,372,726,380,721,383,720,399,741,398,756,389,827,372,850,344,837,334,834,322,818,321,794,324,782,333,769,348" shape="poly">
								 <area target="" alt="웨스트버지니아" title="웨스트버지니아" href="jacascript:;" coords="861,284,854,294,845,299,842,311,836,322,839,332,846,341,853,347,861,345,867,345,881,335,881,324,886,307,893,307,894,299,901,292,902,284,914,282,907,270,892,277,884,286,879,280" shape="poly">
								 <area target="" alt="버지니아" title="버지니아" href="javascript:get_list('Virginia');" coords="912,284,904,286,899,294,893,307,887,310,881,333,870,341,852,348,844,352,830,371,880,360,930,344,967,332,960,323,948,319,951,312,949,300,925,296,932,284,916,278" shape="poly">
								 <area target="" alt="테네시" title="테네시" href="jacascript:;" coords="716,400,713,418,708,441,742,433,765,427,817,416,822,403,834,398,839,390,846,383,856,367,752,390,740,397" shape="poly">
								 <area target="" alt="노스캐롤라이나" title="노스캐롤라이나" href="jacascript:;" coords="857,368,852,381,843,389,836,397,825,404,821,412,843,411,857,402,885,393,892,397,908,396,923,399,938,404,948,405,952,394,961,383,966,375,964,364,971,358,975,345,965,340,959,335" shape="poly">
								 <area target="" alt="미시시피" title="미시시피" href="javascript:get_list('Mississippi');" coords="710,440,706,447,705,457,700,470,696,478,700,485,698,492,706,505,698,525,700,535,734,536,746,548,756,543,766,544,754,497,754,482,753,470,750,445,748,432" shape="poly">
								 <area target="" alt="엘라배마" title="엘라배마" href="jacascript:;" coords="749,431,756,487,758,501,767,540,782,544,786,533,780,527,830,514,830,505,824,497,827,485,824,478,817,471,798,424" shape="poly">
								 <area target="" alt="조지아" title="조지아" href="jacascript:;" coords="800,422,825,415,843,413,845,421,855,421,862,430,875,438,884,445,891,448,894,456,900,460,908,465,900,490,902,501,892,501,894,510,884,510,836,521,833,513,831,504,823,494,828,481,819,471" shape="poly">
								 <area target="" alt="사우스캐롤라이나" title="사우스캐롤라이나" href="javascript:get_list('South_Carolina');" coords="848,411,846,418,856,421,864,429,875,433,884,442,892,448,894,453,904,460,913,452,921,446,933,430,938,417,938,408,911,397,895,400,881,394,852,403" shape="poly">
								 <area target="" alt="플로리다" title="플로리다" href="javascript:get_list('Florida');" coords="783,528,829,517,837,522,890,512,895,503,902,502,909,515,922,533,936,545,938,557,953,571,960,585,962,596,965,607,963,621,954,625,941,621,925,608,909,599,901,591,827,598,806,576,793,561,789,543" shape="poly">
								 <area target="" alt="메인" title="메인" href="javascript:get_list('Maine');" coords="978,97,983,86,983,79,981,70,983,64,980,57,983,37,993,41,999,34,1011,39,1014,51,1020,56,1022,66,1029,67,1031,75,1038,75,1044,80,1044,86,1035,96,1027,97,1025,105,1019,110,1015,118,1008,122,1006,132,1002,141,994,134" shape="poly">
								 <area target="" alt="뉴햄프셔" title="뉴햄프셔" href="jacascript:;" coords="976,99,970,104,974,117,975,125,970,132,971,140,972,151,974,165,989,161,998,154,1000,140,990,134" shape="poly">
								 <area target="" alt="버몬트" title="버몬트" href="javascript:get_list('Vermont');" coords="945,120,971,110,972,123,969,129,973,152,962,168,954,152,950,143,950,133" shape="poly">
								 <area target="" alt="매사추세츠" title="매사추세츠" href="javascript:get_list('Massachusetts');" coords="965,171,979,169,990,164,1004,158,1003,166,1008,170,1017,172,1029,171,1021,176,1015,183,1000,176,965,186" shape="poly">
								 <area target="" alt="로드아일랜드" title="로드아일랜드" href="jacascript:;" coords="995,178,1001,191,1011,185,1001,176" shape="poly">
								 <area target="" alt="코네티컷" title="코네티컷" href="javascript:get_list('Connecticut');" coords="969,188,973,208,981,200,998,193,995,178" shape="poly">
								 <area target="" alt="뉴욕" title="뉴욕" href="뉴욕" coords="918,127,914,135,910,141,907,150,902,155,906,169,900,177,890,183,878,186,868,190,864,195,869,201,861,215,857,223,863,226,880,217,917,209,938,200,949,211,959,214,969,213,967,194,962,172,948,142,940,121" shape="poly">
								 <area target="" alt="펜실베이니아" title="펜실베이니아" href="javascript:get_list('Pennsylvania');" coords="854,222,850,231,863,280,879,277,906,268,944,258,945,250,951,251,961,242,950,230,947,220,948,212,937,201,925,204,918,209,897,212,879,216,865,225" shape="poly">
								 <area target="" alt="뉴저지" title="뉴저지" href="javascript:get_list('New_Jersey');" coords="949,215,965,215,967,229,971,231,975,238,975,248,969,265,961,262,950,251,961,240,949,228" shape="poly">
								 <area target="" alt="델라웨어" title="델라웨어" href="jacascript:;" coords="950,253,945,260,957,280,964,280,961,268" shape="poly">
								 <area target="" alt="메릴랜드" title="메릴랜드" href="javascript:get_list('Maryland');" coords="910,270,919,279,932,283,929,295,949,295,940,281,939,272,941,261" shape="poly">
								 <!-- 텍스트링크 -->
								 <area target="" alt="웨스트버지니아" title="웨스트버지니아" href="jacascript:;" coords="792,130,875,170" shape="rect">
								 <area target="" alt="버몬트" title="버몬트" href="javascript:get_list('Vermont');" coords="905,68,965,100" shape="rect">
								 <area target="" alt="뉴햄프셔" title="뉴햄프셔" href="jacascript:;" coords="1029,99,1122,132" shape="rect">
								 <area target="" alt="매사추세츠" title="매사추세츠" href="javascript:get_list('Massachusetts');" coords="1038,144,1125,176" shape="rect">
								 <area target="" alt="로드아일랜드" title="로드아일랜드" href="jacascript:;" coords="1065,184,1145,218" shape="rect">
								 <area target="" alt="코네티컷" title="코네티컷" href="javascript:get_list('Connecticut');" coords="995,209,1065,243" shape="rect">
								 <area target="" alt="뉴저지" title="뉴저지" href="javascript:get_list('New_Jersey');" coords="994,252,1067,284" shape="rect">
								 <area target="" alt="델라웨어" title="델라웨어" href="jacascript:;" coords="1038,288,1100,321" shape="rect">
								 <area target="" alt="메릴랜드" title="메릴랜드" href="javascript:get_list('Maryland');" coords="981,311,1040,348" shape="rect">
							</map>
						</div>
						<script src="/static/js/jquery.rwdImageMaps.min.js"></script>
						<script>
						$(document).ready(function(e) {
							$('img[usemap]').rwdImageMaps();
						});
						</script>
					</div><!-- // inner -->
				</section>
				<!-- // cont_sect -->

				<!-- cont_sect -->
				<section class="cont_sect" id="schoolInfo">
					<div class="inner">

						<div class="school_group">

							<dl class="school_group_data">
								<dt><img src="/static/img/early_abroad/usa/school_group_eng@2x.png" alt=""></dt>
								<dd class="title">
									<ul>
										<li><a href="javascript:get_list('All');" class="box"><b>U.S.A</b>미국</a></li>
									</ul>
								</dd>
							</dl>
							</dl>
							<dl class="school_group_data">
								<dt>A~F</dt>
								<dd>
									<ul>
										<li><a href="jacascript:;" class="box disabled"><b>AL</b>앨라배마</a></li>
										<li><a href="jacascript:;" class="box disabled"><b>AK</b>알래스카</a></li>
										<li><a href="javascript:get_list('Arizona');" class="box"><b>AZ</b>애리조나</a></li>
										<li><a href="jacascript:;" class="box disabled"><b>AR</b>아칸소</a></li>
										<li><a href="javascript:get_list('California');" class="box"><b>CA</b>캘리포니아</a></li>
										<li><a href="javascript:get_list('Colorado');" class="box"><b>CO</b>콜로라도</a></li>
										<li><a href="javascript:get_list('Connecticut');" class="box"><b>CT</b>코네티컷</a></li>
										<li><a href="jacascript:;" class="box disabled"><b>DE</b>델라웨어</a></li>
										<li><a href="javascript:get_list('Florida');" class="box"><b>FL</b>플로리다</a></li>
									</ul>
								</dd>
							</dl>
							<dl class="school_group_data">
								<dt>G~L</dt>
								<dd>
									<ul>
										<li><a href="jacascript:;" class="box disabled"><b>GA</b>조지아</a></li>
										<li><a href="javascript:get_list('Hawaii');" class="box"><b>HI</b>하와이</a></li>
										<li><a href="javascript:get_list('Idaho');" class="box"><b>ID</b>아이다호</a></li>
										<li><a href="javascript:get_list('Illinois');" class="box"><b>IL</b>일리노이</a></li>
										<li><a href="jacascript:;" class="box disabled"><b>IN</b>인디애나</a></li>
										<li><a href="javascript:get_list('Iowa');" class="box"><b>IA</b>아이오와</a></li>
										<li><a href="javascript:get_list('Kansas');" class="box"><b>KS</b>캔자스</a></li>
										<li><a href="jacascript:;" class="box disabled"><b>KY</b>켄터키</a></li>
										<li><a href="jacascript:;" class="box disabled"><b>LA</b>루이지애나</a></li>
									</ul>
								</dd>
							</dl>
							<dl class="school_group_data">
								<dt>M</dt>
								<dd>
									<ul>
										<li><a href="javascript:get_list('Maine');" class="box"><b>ME</b>메인</a></li>
										<li><a href="javascript:get_list('Maryland');" class="box"><b>MD</b>메릴랜드</a></li>
										<li><a href="javascript:get_list('Massachusetts');" class="box"><b>MA</b>매사추세츠</a></li>
										<li><a href="jacascript:;" class="box disabled"><b>MI</b>미시간</a></li>
										<li><a href="javascript:get_list('Minnesota');" class="box"><b>MN</b>미네소타</a></li>
										<li><a href="javascript:get_list('Mississippi');" class="box"><b>MS</b>미시시피</a></li>
										<li><a href="javascript:get_list('Missouri');" class="box"><b>MO</b>미주리</a></li>
										<li><a href="jacascript:;" class="box disabled"><b>MT</b>몬태나</a></li>
									</ul>
								</dd>
							</dl>
							<dl class="school_group_data">
								<dt>N</dt>
								<dd>
									<ul>
										<li><a href="jacascript:;" class="box disabled"><b>NE</b>네브래스카</a></li>
										<li><a href="jacascript:;" class="box disabled"><b>NV</b>네바다</a></li>
										<li><a href="jacascript:;" class="box disabled"><b>NH</b>뉴햄프셔</a></li>
										<li><a href="javascript:get_list('New_Jersey');" class="box"><b>NJ</b>뉴저지</a></li>
										<li><a href="jacascript:;" class="box disabled"><b>NM</b>뉴멕시코</a></li>
										<li><a href="javascript:get_list('New_York');" class="box"><b>NY</b>뉴욕</a></li>
										<li><a href="jacascript:;" class="box disabled"><b>NC</b>노스캐롤라이나</a></li>
										<li><a href="javascript:get_list('North_Dakota');" class="box"><b>ND</b>노스다코타</a></li>
									</ul>
								</dd>
							</dl>
							<dl class="school_group_data">
								<dt>O~S</dt>
								<dd>
									<ul>
										<li><a href="javascript:get_list('Ohio');" class="box"><b>OH</b>오하이오</a></li>
										<li><a href="jacascript:;" class="box disabled"><b>OK</b>오클라호마</a></li>
										<li><a href="javascript:get_list('Oregon');" class="box"><b>OR</b>오리건</a></li>
										<li><a href="javascript:get_list('Pennsylvania');" class="box"><b>PA</b>펜실베니아</a></li>
										<li><a href="jacascript:;" class="box disabled"><b>RI</b>로드아일랜드</a></li>
										<li><a href="javascript:get_list('South_Carolina');" class="box"><b>SC</b>사우스캐롤라이나</a></li>
										<li><a href="jacascript:;" class="box disabled"><b>SD</b>사우스다코타</a></li>
									</ul>
								</dd>
							</dl>
							<dl class="school_group_data">
								<dt>T~Z</dt>
								<dd>
									<ul>
										<li><a href="jacascript:;" class="box disabled"><b>TN</b>테네시</a></li>
										<li><a href="javascript:get_list('Texas');" class="box"><b>TX</b>텍사스</a></li>
										<li><a href="jacascript:;" class="box disabled"><b>UT</b>유타</a></li>
										<li><a href="javascript:get_list('Vermont');" class="box"><b>VT</b>버몬트</a></li>
										<li><a href="javascript:get_list('Virginia');" class="box"><b>VA</b>버지니아</a></li>
										<li><a href="javascript:get_list('Washington');" class="box"><b>WA</b>워싱턴</a></li>
										<li><a href="jacascript:;" class="box disabled"><b>WV</b>웨스트버지니아</a></li>
										<li><a href="javascript:get_list('Wisconsin');" class="box"><b>WI</b>위스콘신</a></li>
										<li><a href="jacascript:;" class="box disabled"><b>WY</b>와이오밍</a></li>
									</ul>
								</dd>
							</dl>
						</div>

						<div class="cont_title border">학교 리스트</div>

						<div class="school-swiper school_list">
							<div class="swiper-container">
								<div class="swiper-wrapper">
									<div class="swiper-slide item">
										<div class="school_list_title" id="Arizona_title"><div class="box">Arizona</div></div>
										<ul class="school_list_info" id="Arizona_list">
											<li><a target="_blank" href="https://ranchosolano.com/">Rancho Solano Proparatory School</a></li>
											<li><a target="_blank" href="https://www.vvsaz.org/">Verde Valley School</a></li>
										</ul>
										<div class="school_list_title" id="California_title"><div class="box">California</div></div>
										<ul class="school_list_info" id="California_list">
											<li><a target="_blank" href="https://www.riordanhs.org/">Archibishop Riordan High School</a></li>
											<li><a target="_blank" href="https://idyllwildarts.org/">Idyllwild Arts  Academy</a></li>
											<li><a target="_blank" href="https://montereybayacademy.org/">Monterey Bay Academy</a></li>
											<li><a target="_blank" href="https://laketahoeprep.org/">Lake Tahoe Preparatory School</a></li>
											<li><a target="_blank" href="https://www.bradshawchristian.com/">Bradshaw Christian School</a></li>
											<li><a target="_blank" href="https://www.bosco.org/">St. John Bosco High School</a></li>
											<li><a target="_blank" href="https://www.bishopdiego.org/">Bishop Garcia Diego High School</a></li>
											<li><a target="_blank" href="https://saintbernards.us/">Villanova Preparatory School</a></li>
											<li><a target="_blank" href="https://www.villanovaprep.org/">EF Academy California</a></li>
											<li><a target="_blank" href="https://www.efacademy.org/">Fairmont Schools</a></li>
										</ul>
										<div class="school_list_title" id="Colorado_title"><div class="box">Colorado</div></div>
										<ul class="school_list_info" id="Colorado_list">
											<li><a target="_blank" href="https://belleviewchristian.com/">Belleview Christian School</a></li>
										</ul>
										<div class="school_list_title" id="Connecticut_title"><div class="box">Connecticut</div></div>
										<ul class="school_list_info" id="Connecticut_list">
											<li><a target="_blank" href="https://www.marianapolis.org/">Marianapolis  Preparatory School</a></li>
											<li><a target="_blank" href="https://www.woodstockacademy.org/">Woodstock Academy</a></li>
											<li><a target="_blank" href="https://watkinson.org/">Watkinson School</a></li>
										</ul>
										<div class="school_list_title" id="Florida_title"><div class="box">Florida</div></div>
										<ul class="school_list_info" id="Florida_list">
											<li><a target="_blank" href="https://www.flprep.com/">Florida Preparatory  Academy</a></li>
											<li><a target="_blank" href="https://www.tka.net/">The King’s Academy</a></li>
											<li><a target="_blank" href="https://www.lakemaryprep.com/">Lake Mary Preparatory School</a></li>
											<li><a target="_blank" href="https://montverde.org/">Montverde Academy</a></li>
											<li><a target="_blank" href="https://www.nordangliaeducation.com/nbps-florida">North Broward Preparatory School</a></li>
											<li><a target="_blank" href="https://www.nordangliaeducation.com/wps-florida">Windermere  Preparatory School</a></li>
										</ul>
									</div><!-- // swiper-slide -->

									<div class="swiper-slide item">
										<div class="school_list_title" id="Hawaii_title"><div class="box">Hawaii</div></div>
										<ul class="school_list_info" id="Hawaii_list">
											<li><a target="_blank" href="https://www.iolani.org/">‘Iolani School</a></li>
										</ul>
										<div class="school_list_title" id="Idaho_title"><div class="box">Idaho</div></div>
										<ul class="school_list_info" id="Idaho_list">
											<li><a target="_blank" href="https://www.riverstoneschool.org/">Riverstone International School</a></li>
										</ul>
										<div class="school_list_title" id="Iowa_title"><div class="box">Iowa</div></div>
										<ul class="school_list_info" id="Iowa_list">
											<li><a target="_blank" href="https://maharishischool.org/">Maharishi School of the Age of Enlightenment </a></li>
										</ul>
										<div class="school_list_title" id="Illinois_title"><div class="box">Illinois</div></div>
										<ul class="school_list_info" id="Illinois_list">
											<li><a target="_blank" href="https://www.rockfordchristian.org/">Rockford Christian High School</a></li>
											<li><a target="_blank" href="https://www.montini.org/">Montini Catholic High School</a></li>
											<li><a target="_blank" href="https://www.st-bede.com/">St. Bede Academy</a></li>
										</ul>
										<div class="school_list_title" id="Kansas_title"><div class="box">Kansas</div></div>
										<ul class="school_list_info" id="Kansas_list">
											<li><a target="_blank" href="https://www.mh-ma.com/">Maur Hill-Mount Academy</a></li>
											<li><a target="_blank" href="https://overlandchristian.org/">Overland Christian School</a></li>
											<li><a target="_blank" href="https://lifeprep.us/">Life Preparatory Academy </a></li>
										</ul>
										<div class="school_list_title" id="Maine_title"><div class="box">Maine</div></div>
										<ul class="school_list_info" id="Maine_list">
											<li><a target="_blank" href="https://foxcroftacademy.org/">Foxcroft Academy</a></li>
											<li><a target="_blank" href="https://www.fryeburgacademy.org/">Fryeburg Academy</a></li>
											<li><a target="_blank" href="https://www.leeacademy.org/">Lee Academy</a></li>
											<li><a target="_blank" href="https://www.lincolnacademy.org/">Lincoln Academy</a></li>
											<li><a target="_blank" href="https://www.mci-school.org/">Maine Central Institute</a></li>
											<li><a target="_blank" href="https://www.mssm.org/">Maine School of Science and Mathematics</a></li>
											<li><a target="_blank" href="https://www.thorntonacademy.org/">Thornton Academy</a></li>
											<li><a target="_blank" href="https://www.washingtonacademy.org/">Washington Academy</a></li>
											<li><a target="_blank" href="https://www.johnbapst.org/">John Bapst Memorial High School </a></li>
										</ul>
									</div><!-- // swiper-slide -->

									<div class="swiper-slide item">
										<div class="school_list_title" id="Maryland_title"><div class="box">Maryland</div></div>
										<ul class="school_list_info" id="Maryland_list">
											<li><a target="_blank" href="https://www.calvertonschool.org/">The Calverton School</a></li>
											<li><a target="_blank" href="https://www.gunston.org/">The Gunston School</a></li>
											<li><a target="_blank" href="https://www.smrhs.org/">St. Mary's Ryken High School</a></li>
											<li><a target="_blank" href="https://www.olgchs.org/">Our Lady of Good Counsel</a></li>
											<li><a target="_blank" href="https://www.ssfs.org/">Sandy Spring Friends School </a></li>
											<li><a target="_blank" href="https://www.gfs.org/">Garrison Forest School</a></li>
										</ul>
										<div class="school_list_title" id="Massachusetts_title"><div class="box">Massachusetts</div></div>
										<ul class="school_list_info" id="Massachusetts_list">
											<li><a target="_blank" href="https://macduffie.org/">The MacDuffie School</a></li>
											<li><a target="_blank" href="https://www.nmhschool.org/">Northfield Mount Hermon School</a></li>
											<li><a target="_blank" href="https://sbschool.org/">Stoneleigh-Burnham  School</a></li>
											<li><a target="_blank" href="https://www.wma.us/">Wilbraham And  Monson Academy</a></li>
											<li><a target="_blank" href="https://winchendon.org/">The Winchendon  School</a></li>
											<li><a target="_blank" href="https://www.jpiihyannis.org/">St. John Paul II School</a></li>
											<li><a target="_blank" href="https://www.awhs.org/">Archbishop Williams High School</a></li>
											<li><a target="_blank" href="https://www.bostontrinity.org/">Boston Trinity Academy</a></li>
											<li><a target="_blank" href="https://www.waringschool.org/">Waring School</a></li>
											<li><a target="_blank" href="https://www.newmanboston.org/">Newman School</a></li>
											<li><a target="_blank" href="https://www.catsacademyboston.com/">CATS Academy Boston</a></li>
											<li><a target="_blank" href="https://www.applewild.org/">Applewild School</a></li>
											<li><a target="_blank" href="https://www.cushing.org/">Cushing Academy </a></li>
										</ul>
										<div class="school_list_title" id="Mississippi_title"><div class="box">Mississippi</div></div>
										<ul class="school_list_info" id="Mississippi_list">
											<li><a target="_blank" href="https://ststan.com/">St. Stanislaus School</a></li>
											<li><a target="_blank" href="https://www.jacksonprep.net/">Jackson Preparatory School </a></li>
										</ul>
										<div class="school_list_title" id="Minnesota_title"><div class="box">Minnesota</div></div>
										<ul class="school_list_info" id="Minnesota_list">
											<li><a target="_blank" href="https://www.stcroixlutheran.org/admissions">St. Croix Lutheran  Academy</a></li>
											<li><a target="_blank" href="https://www.marshallschool.org/">Marshall School</a></li>
											<li><a target="_blank" href="https://www.concordiaacademy.com/">Concordia Academy </a></li>
											<li><a target="_blank" href="https://sjprep.net/">Saint John’s Preparatory School</a></li>
										</ul>
									</div><!-- // swiper-slide -->

									<div class="swiper-slide item">
										<div class="school_list_title" id="Missouri_title"><div class="box">Missouri</div></div>
										<ul class="school_list_info" id="Missouri_list">
											<li><a target="_blank" href="https://splhs.org/">Saint Paul Lutheran High School</a></li>
											<li><a target="_blank" href="https://summit-christian-academy.org/">Summit Christian Academy</a></li>
											<li><a target="_blank" href="https://www.chaminade-stl.org/">Chaminade College Preparatory</a></li>
										</ul>
										<div class="school_list_title" id="North_Dakota_title"><div class="box">North Dakota</div></div>
										<ul class="school_list_info" id="North_Dakota_list">
											<li><a target="_blank" href="https://www.highmowing.org/">Oak Grove Lutheran High School</a></li>
										</ul>
										<div class="school_list_title" id="Ohio_title"><div class="box">Ohio</div></div>
										<ul class="school_list_info" id="Ohio_list">
											<li><a target="_blank" href="https://www.ccscomets.org/">Central Christian School</a></li>
											<li><a target="_blank" href="https://www.lakeridgeacademy.org/">Lake Ridge Academy</a></li>
											<li><a target="_blank" href="https://www.andrewsosborne.org/">Andrew Osborne Academy  </a></li>
											<li><a target="_blank" href="https://www.lakecatholic.org/">Lake Catholic High School</a></li>
											<li><a target="_blank" href="https://www.chca-oh.org/">Cincinnati Hills Christian Academy</a></li>
										</ul>
										<div class="school_list_title" id="Oregon_title"><div class="box">Oregon</div></div>
										<ul class="school_list_info" id="Oregon_list">
											<li><a target="_blank" href="https://www.saintrays.org/">Saint Raphael Academy</a></li>
											<li><a target="_blank" href="https://www.rockyhill.org/">Rocky Hill Country Day School</a></li>
										</ul>
										<div class="school_list_title" id="New_Jersey_title"><div class="box">New Jersey</div></div>
										<ul class="school_list_info" id="New_Jersey_list">
											<li><a target="_blank" href="https://www.camdencatholic.org/">Camden Catholic  High School</a></li>
											<li><a target="_blank" href="https://www.pilgrimacademy.org/">The Pilgrim Academy</a></li>
											<li><a target="_blank" href="https://www.morriscatholic.org/">Morris Catholic High School</a></li>
											<li><a target="_blank" href="https://www.mfriends.org/">Moorestown Friends School</a></li>
										</ul>
									</div><!-- // swiper-slide -->

									<div class="swiper-slide item">
										<div class="school_list_title" id="New_York_title"><div class="box">New York</div></div>
										<ul class="school_list_info" id="New_York_list">
											<li><a target="_blank" href="https://www.lemanmanhattan.org/">Léman Manhattan  Preparatory School</a></li>
											<li><a target="_blank" href="https://www.oakwoodfriends.org/">Oakwood Friends  School</a></li>
											<li><a target="_blank" href="https://sks.org/">The Storm King  School</a></li>
											<li><a target="_blank" href="https://www.buffaloseminary.org/">Buffalo Seminary</a></li>
											<li><a target="_blank" href="https://www.efacademy.org/">EF Academy New York</a></li>
											<li><a target="_blank" href="https://www.stanthonyshs.org/">Saint Anthony's High School</a></li>
											<li><a target="_blank" href="https://www.stjohnshigh.org/">Saint John's High School</a></li>
										</ul>
										<div class="school_list_title" id="Pennsylvania_title"><div class="box">Pennsylvania</div></div>
										<ul class="school_list_info" id="Pennsylvania_list">
											<li><a target="_blank" href="https://www.grier.org/">Grier School</a></li>
											<li><a target="_blank" href="https://www.mpslakers.com/">Mercyhurst Preparatory School</a></li>
											<li><a target="_blank" href="https://www.perkiomen.org/">The Perkiomen  School</a></li>
											<li><a target="_blank" href="https://www.bishopcarroll.com/">Bishop Carroll Catholic High School</a></li>
											<li><a target="_blank" href="https://www.efcaonline.org/">Erie First Christian Academy</a></li>
											<li><a target="_blank" href="https://www.dccs.org/">Delaware County Christian School</a></li>
											<li><a target="_blank" href="https://www.gocfs.net/">Church Farm School</a></li>
											<li><a target="_blank" href="https://www.lindenhall.org/">Linden Hall</a></li>
											<li><a target="_blank" href="https://www.germantownfriends.org/">Germantown Friends School</a></li>
											<li><a target="_blank" href="https://www.solebury.org/">Solebury School</a></li>
										</ul>
										<div class="school_list_title" id="South_Carolina_title"><div class="box">South Carolina</div></div>
										<ul class="school_list_info" id="South_Carolina_list">
											<li><a target="_blank" href="https://www.benlippen.com/">Ben Lippen School</a></li>
											<li><a target="_blank" href="https://trinitycollegiate.org/">Trinity Byrnes Collegiate School</a></li>
											<li><a target="_blank" href="https://www.southsidechristian.org/">Southside Christian School</a></li>
										</ul>
									</div><!-- // swiper-slide -->

									<div class="swiper-slide item">
										<div class="school_list_title" id="Texas_title"><div class="box">Texas</div></div>
										<ul class="school_list_info" id="Texas_list">
											<li><a target="_blank" href="https://www.tmi-sa.org/">TMI - The Episcopal  School of Texas</a></li>
											<li><a target="_blank" href="https://www.nordangliaeducation.com/village-houston">The Village  School</a></li>
											<li><a target="_blank" href="http://www.dallaslutheranschool.com/">Dallas Lutheran School</a></li>
										</ul>
										<div class="school_list_title" id="Vermont_title"><div class="box">Vermont</div></div>
										<ul class="school_list_info" id="Vermont_list">
											<li><a target="_blank" href="https://burrburton.myschoolapp.com/page/?siteId=962&ssl=1">Burr and Burton  Academy</a></li>
											<li><a target="_blank" href="https://www.lyndoninstitute.org/">Lyndon Institute</a></li>
											<li><a target="_blank" href="https://stjacademy.org/">St. Johnsbury Academy</a></li>
										</ul>
										<div class="school_list_title" id="Virginia_title"><div class="box">Virginia</div></div>
										<ul class="school_list_info" id="Virginia_list">
											<li><a target="_blank" href="https://www.blueridgeschool.com/">Blue Ridge School</a></li>
											<li><a target="_blank" href="https://www.veritasacademydc.com/">Veritas Collegiate Academy</a></li>
										</ul>
										<div class="school_list_title" id="Washington_title"><div class="box">Washington</div></div>
										<ul class="school_list_info" id="Washington_list">
											<li><a target="_blank" href="https://www.bellarmineprep.org/">Bellarmine Preparatory School</a></li>
											<li><a target="_blank" href="https://www.am-hs.org/">Archbishop Murphy High School</a></li>
											<li><a target="_blank" href="https://www.bishopblanchet.org/">Bishop Blanchet High School</a></li>
											<li><a target="_blank" href="https://sgs.org/">Saint George's School </a></li>
											<li><a target="_blank" href="https://www.aw.org/">Annie Wright Schools</a></li>
										</ul>
										<div class="school_list_title" id="Wisconsin_title"><div class="box">Wisconsin</div></div>
										<ul class="school_list_info" id="Wisconsin_list">
											<li><a target="_blank" href="https://www.martinlutherhs.org/">Martin Luther High School </a></li>
										</ul>
									</div><!-- // swiper-slide -->

								</div><!-- // swiper-wrapper -->
							</div><!-- // swiper-container -->

							<div class="swiper-control">
								<div class="swiper-button-prev"></div>
								<div class="swiper-pagination"></div>
								<div class="swiper-button-next"></div>
							</div><!-- // swiper-control -->

						</div><!-- // school-swiper -->
						<script>

							jQuery(function($){

								var school_swiper = new Swiper('.school-swiper .swiper-container', {
									slidesPerView:3,
									slidesPerGroup: 3,
									slidesPerGroupSkip: 1,
									spaceBetween:40,
									speed :900,
									navigation: {
										nextEl: '.school-swiper .swiper-button-next',
										prevEl: '.school-swiper .swiper-button-prev',
									},
									pagination: {
										el : '.school-swiper .swiper-pagination',
										clickable: true,
										renderBullet: function (index, className) {
											return '<span class="' + className + '">' + (index + 1) + "</span>";
										},
									},
									breakpoints:{
										480:{
											slidesPerView:2,
											slidesPerGroup: 2,
											spaceBetween:10,
										},
										720:{
											slidesPerView:2,
											slidesPerGroup: 2,
											spaceBetween:20,
										},
										960:{
											slidesPerView:3,
											slidesPerGroup: 3,
											spaceBetween:30,
										},
										1200:{
											slidesPerView:3,
											slidesPerGroup: 3,
											spaceBetween:40,
										}
									},
								});

							});
						</script>



					</div><!-- // inner -->
				</section>
				<!-- // cont_sect -->
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


