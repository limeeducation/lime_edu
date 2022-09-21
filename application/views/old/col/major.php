<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/old/head_ca.php');
?>

<div id="container">


<div class="sub_tit ca_tit_coll_maj">
	<div class="stt_box">
		<h3 class="tit_tx">캐나다 전공별 컬리지</h3>
	</div>
</div>


<div class="sb_con_all gdn_all">

	<div class="sb_con_tx_box">
		<div class="main_text">
			<div class="txbox ">캐나다 컬리지는 쉽게 말해 한국의 2년제 전문대와 비슷한 과정으로, 고등학교를 졸업하고 취업과 관련된 전문적인 교육을 받을 수 있는 교육기관입니다.<br>
캐나다 내에서 정규 학위로 인정받는 컬리지 과정을 통해 취업 및 영주권 취득을 목표로 할 수 있으며, 캐나다에서의 장기적인 정착을 위한 현지 취업에도<br> 도움을 받을 수 있습니다. 
캐나다는 각 지역별, 전공별로 훌륭한 컬리지들이 많이 있습니다. 자신에게 맞는 환경과 전공을 갖춘 컬리지를 선택해 보세요..



			</div>
		</div><!--main_text-->
	</div><!--sb_con_tx_box-->	



<ul class="coll_tab">
	<li class="b1 on"onclick="veiw_tab2('coll1');">항공</li>
	<li class="b2"onclick="veiw_tab2('coll2');">자동차</li>
	<li class="b3"onclick="veiw_tab2('coll3');">IT</li>
	<li class="b4"onclick="veiw_tab2('coll4');">전기/전자</li>
	<li class="b5"onclick="veiw_tab2('coll5');">기계공학</li>
	<li class="b6"onclick="veiw_tab2('coll6');">용접</li>
	<li class="b7"onclick="veiw_tab2('coll7');">건축/토목</li>
	<li class="b8"onclick="veiw_tab2('coll8');">목공</li>
	<li class="b9"onclick="veiw_tab2('coll9');">조경</li>
	<li class="b10"onclick="veiw_tab2('coll10');">간호/방사선</li>
	<li class="b11"onclick="veiw_tab2('coll11');">예술디자인</li>
	<li class="b12"onclick="veiw_tab2('coll12');">유아교육</li>
	<li class="b13"onclick="veiw_tab2('coll13');">사회복지</li>
	<li class="b14"onclick="veiw_tab2('coll14');">요식업</li>
	<li class="b15"onclick="veiw_tab2('coll15');">호텔관광</li>
	<li class="b16"onclick="veiw_tab2('coll16');">경영사무</li>
</ul>


<div class="coll_con tblbox">
	<div id="coll1">
		<h3 class="tab_tit">항공 분야</h3>
			<table>
			  <tr class="tbl_top">
				<th scope="col" width="50">주</th>
				<th scope="col" width="110">도시</th>
				<th scope="col" width="230">대학명</th>
				<th scope="col">전공</th>   
				<th scope="col" width="50">기간</th>
				<th scope="col" width="110">상세보기</th>
			  </tr>
			  <tr>
				<th rowspan="7" class="bo">ON</th>
				<td>Toronto</td>
				<td><img src="/static/img/old/coll/logo/Centennial.jpg" alt="로고"><h4>Centennial College</h4></td>
				<td class="le">Aviation Technician - Aircraft Maintenance</td>
				<td>2년</td>
				<td><a href="https://www.centennialcollege.ca/programs-courses/full-time/aviation-technician-aircraft-maintenance/" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<td>Ottawa</td>
				<td><img src="/static/img/old/coll/logo/Algonquin.jpg" alt="로고"><h4>Algonquin College</h4></td>
				<td class="le">Aircraft Maintenance Technician </td>
				<td>2년</td>
				<td><a href="https://www.algonquincollege.com/sat/program/aircraft-maintenance-technician/" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<td>Kitchener</td>
				<td><img src="/static/img/old/coll/logo/Conestoga.jpg" alt="로고"><h4>Conestoga College</h4></td>
				<td class="le">Aviation - General Arts and Science</td>
				<td>2년</td>
				<td><a href="https://www.conestogac.on.ca/fulltime/aviation-general-arts-and-science" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<td>London</td>
				<td><img src="./static/img/old/coll/logo/Fanshawe.jpg" alt="로고"><h4>Fanshawe College</h4></td>
				<td class="le">Aviation Technician - Aircraft Maintenance (Co-op)</td>
				<td>2년</td>
				<td><a href="https://www.fanshawec.ca/programs/aam4-aviation-technician-aircraft-maintenance-co-op/next#" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<td>Barrie</td>
				<td><img src="/static/img/old/coll/logo/Georgian.jpg" alt="로고"><h4>Georgian College</h4></td>
				<td class="le">Aviation Management</td>
				<td>2년</td>
				<td><a href="https://www.georgiancollege.ca/academics/programs/aviation-management/" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<td>Hamilton</td>
				<td><img src="/static/img/old/coll/logo/Mohawk.jpg" alt="로고"><h4>Mohawk College</h4></td>
				<td class="le">Aviation Technician - Aircraft Maintenance</td>
				<td>2년</td>
				<td><a href="https://www.mohawkcollege.ca/programs/technology/aviation-technician-aircraft-maintenance-269" target="_blank">바로가기</a></td>
			  </tr>
			  <tr class="bo">
				<td>Toronto</td>
				<td><img src="/static/img/old/coll/logo/Seneca.jpg" alt="로고"><h4>Seneca College</h4></td>
				<td class="le">Aviation Operations</td>
				<td>2년</td>
				<td><a href="https://www.senecacollege.ca/programs/fulltime/AVO.html" target="_blank">바로가기</a></td>
			  </tr>
			  <tr class="bo">
				<th>BC</th>
				<td>Vancouver</td>
				<td><img src="/static/img/old/coll/logo/BCIT.jpg" alt="로고"><h4>BCIT<span>(The British Columbia Institute of Technology)</span></h4></td>
				<td class="le">Aircraft Gas Turbine Technician</td>
				<td>2년</td>
				<td><a href="https://www.bcit.ca/programs/aircraft-gas-turbine-technician-certificate-full-time-1030certts/" target="_blank">바로가기</a></td>
			  </tr>
			  <tr class="bo">
				<th>AB</th>
				<td>Calgary</td>
				<td><img src="/static/img/old/coll/logo/SAIT.jpg" alt="로고"><h4>SAIT</h4></td>
				<td class="le">Aircraft Maintenance Engineers Technology </td>
				<td>2년</td>
				<td><a href="https://www.sait.ca/programs-and-courses/diplomas/aircraft-maintenance-engineers-technology" target="_blank">바로가기</a></td>
			  </tr>
			  <tr class="bo">
				<th>MA</th>
				<td>Winnipeg</td>
				<td><img src="/static/img/old/coll/logo/RedRiver.jpg" alt="로고"><h4>Red River College</h4></td>
				<td class="le">Aircraft Maintenance Engineer</td>
				<td>1년</td>
				<td><a href="https://catalogue.rrc.ca/Programs/WPG/Fulltime/AIRMF-DP" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<th>NS</th>
				<td>Haifax</td>
				<td><img src="/static/img/old/coll/logo/NSCC.jpg" alt="로고"><h4>NSCC</h4></td>
				<td class="le">Aircraft Maintenance Engineer - Structures</td>
				<td>1년</td>
				<td><a href="https://www.nscc.ca/learning_programs/programs/plandescr.aspx?prg=AMES&pln=AIRMAINSTR" target="_blank">바로가기</a></td>
			  </tr>
			</table>

	</div>
	<div id="coll2" style="display:none;">
		<h3 class="tab_tit">자동차 분야</h3>
			<table>
			  <tr class="tbl_top">
				<th scope="col" width="50">주</th>
				<th scope="col" width="110">도시</th>
				<th scope="col" width="230">대학명</th>
				<th scope="col">전공</th>   
				<th scope="col" width="50">기간</th>
				<th scope="col" width="110">상세보기</th>
			  </tr>
			  <tr>
				<th rowspan="6" class="bo">ON</th>
				<td>Toronto</td>
				<td><img src="/static/img/old/coll/logo/Centennial.jpg" alt="로고"><h4>Centennial College</h4></td>
				<td class="le">Automotive - Motive Power Technician (Optional Co-op)</td>
				<td>2년</td>
				<td><a href="https://www.centennialcollege.ca/programs-courses/full-time/automotive-motive-power-technician-technical/" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<td>Kitchener</td>
				<td><img src="/static/img/old/coll/logo/Conestoga.jpg" alt="로고"><h4>Conestoga College</h4></td>
				<td class="le">Automotive Service Technician (Apprenticeship)</td>
				<td>2년</td>
				<td><a href="https://www.conestogac.on.ca/apprenticeship/automotive-service-technician-apprenticeship" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<td>London</td>
				<td><img src="/static/img/old/coll/logo/Fanshawe.jpg" alt="로고"><h4>Fanshawe College</h4></td>
				<td class="le">Motive Power Technician (Automotive) </td>
				<td>2년</td>
				<td><a href="https://www.fanshawec.ca/programs/mta7-motive-power-technician-automotive/next#" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<td>Barrie</td>
				<td><img src="/static/img/old/coll/logo/Georgian.jpg" alt="로고"><h4>Georgian College</h4></td>
				<td class="le">Automotive Business</td>
				<td>2년</td>
				<td><a href="https://www.georgiancollege.ca/academics/academic-areas/automotive-business/" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<td>Hamilton</td>
				<td><img src="/static/img/old/coll/logo/Mohawk.jpg" alt="로고"><h4>Mohawk College</h4></td>
				<td class="le">Motive Power Technician Diploma Program</td>
				<td>2년</td>
				<td><a href="https://www.mohawkcollege.ca/programs/skilled-trades/motive-power-technician-446" target="_blank">바로가기</a></td>
			  </tr>
			  <tr class="bo">
				<td>Welland</td>
				<td><img src="/static/img/old/coll/logo/Niagara.jpg" alt="로고"><h4>Niagara College</h4></td>
				<td class="le">Motive Power Technician - Automotive (Co-op)</td>
				<td>2년</td>
				<td><a href="https://www.niagaracollege.ca/trades/program/motive-power-automotive/#courses" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<th rowspan="2" class="bo">BC</th>
				<td>Vancouver</td>
				<td><img src="/static/img/old/coll/logo/Vancouver.jpg" alt="로고"><h4>Vancouver Community College</h4></td>
				<td class="le">Automotive Collision and Refinishing Diploma </td>
				<td>2년</td>
				<td><a href="https://www.vcc.ca/international/programs/programs-ie/automotive-collision-and-refinishing--international/" target="_blank">바로가기</a></td>
			  </tr>
			  <tr class="bo">
				<td>Vancouver</td>
				<td><img src="/static/img/old/coll/logo/BCIT.jpg" alt="로고"><h4>BCIT<span>(The British Columbia Institute of Technology)</span></h4></td>
				<td class="le">Automotive Mechanic &amp; Technician Programs</td>
				<td>2년</td>
				<td><a href="https://www.bcit.ca/programs/automotive-mechanic-technician-programs/" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<th rowspan="2" class="bo">AB</th>
				<td>Calgary</td>
				<td><img src="/static/img/old/coll/logo/SAIT.jpg" alt="로고"><h4>SAIT</h4></td>
				<td class="le">Automotive Service Technology </td>
				<td>2년</td>
				<td><a href="https://www.sait.ca/programs-and-courses/diplomas/automotive-service-technology" target="_blank">바로가기</a></td>
			  </tr>
			  <tr class="bo">
				<td>Lethbridge</td>
				<td><img src="/static/img/old/coll/logo/Lethbridge.jpg" alt="로고"><h4>Lethbridge College</h4></td>
				<td class="le">Automotive Systems</td>
				<td>1년</td>
				<td><a href="https://lethbridgecollege.ca/programs/automotive-systems#" target="_blank">바로가기</a></td>
			  </tr>
			  <tr class="bo">
				<th>MA</th>
				<td>Winnipeg</td>
				<td><img src="/static/img/old/coll/logo/RedRiver.jpg" alt="로고"><h4>Red River College</h4></td>
				<td class="le">Automotive Technician-Diploma</td>
				<td>1년</td>
				<td><a href="https://catalogue.rrc.ca/Programs/WPG/Fulltime/AUTDF-DP" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<th>NS</th>
				<td>Haifax</td>
				<td><img src="/static/img/old/coll/logo/NSCC.jpg" alt="로고"><h4>NSCC</h4></td>
				<td class="le">Auto Body and Collision Repair</td>
				<td>1년</td>
				<td><a href="https://www.nscc.ca/learning_programs/programs/plandescr.aspx?prg=ABCR&pln=AUTOBODRP" target="_blank">바로가기</a></td>
			  </tr>
			</table>

	</div>
	<div id="coll3" style="display:none;">
		<h3 class="tab_tit">IT 분야</h3>
			<table>
			  <tr class="tbl_top">
				<th scope="col" width="50">주</th>
				<th scope="col" width="110">도시</th>
				<th scope="col" width="230">대학명</th>
				<th scope="col">전공</th>   
				<th scope="col" width="50">기간</th>
				<th scope="col" width="110">상세보기</th>
			  </tr>
			  <tr>
				<th rowspan="12" class="bo">ON</th>
				<td>Ottawa</td>
				<td><img src="/static/img/old/coll/logo/Algonquin.jpg" alt="로고"><h4>Algonquin College</h4></td>
				<td class="le">Computer Programming <br>(Co-op and Non Co-op Version)</td>
				<td>2년</td>
				<td><a href="https://www.algonquincollege.com/sat/program/computer-programming/" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<td>Toronto</td>
				<td><img src="/static/img/old/coll/logo/Centennial.jpg" alt="로고"><h4>Centennial College</h4></td>
				<td class="le">Computer Systems Technician - Networking</td>
				<td>2년</td>
				<td><a href="https://www.centennialcollege.ca/programs-courses/full-time/computer-systems-technician-networking/" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<td>Kitchener</td>
				<td><img src="/static/img/old/coll/logo/Conestoga.jpg" alt="로고"><h4>Conestoga College</h4></td>
				<td class="le">Computer Systems Technician  (Optional Co-op) </td>
				<td>2년</td>
				<td><a href="https://www.conestogac.on.ca/fulltime/computer-systems-technician-information-technology-infrastructure-and-services" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<td>London</td>
				<td><img src="/static/img/old/coll/logo/Fanshawe.jpg" alt="로고"><h4>Fanshawe College</h4></td>
				<td class="le">Computer Systems Technician </td>
				<td>2년</td>
				<td><a href="https://www.fanshawec.ca/programs/ctn2-computer-systems-technician/next#" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<td>Sarnia</td>
				<td><img src="/static/img/old/coll/logo/Lambton.jpg" alt="로고"><h4>Lambton College</h4></td>
				<td class="le">Computer Programmer</td>
				<td>2년</td>
				<td><a href="https://www.lambtoncollege.ca/custom/LambtonApps/Programs/International.aspx?id=2147504107" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<td>Toronto</td>
				<td><img src="/static/img/old/coll/logo/George.jpg" alt="로고"><h4>George Brown College</h4></td>
				<td class="le">Computer Systems Technician </td>
				<td>2년</td>
				<td><a href="https://www.georgebrown.ca/programs/computer-systems-technician-program-t141" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<td>Barrie</td>
				<td><img src="/static/img/old/coll/logo/Georgian.jpg" alt="로고"><h4>Georgian College</h4></td>
				<td class="le">Computer Programmer</td>
				<td>2년</td>
				<td><a href="https://www.georgiancollege.ca/academics/academic-areas/computer-studies/" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<td>Toronto</td>
				<td><img src="/static/img/old/coll/logo/Humber.jpg" alt="로고"><h4>Humber College</h4></td>
				<td class="le">Computer Programmer</td>
				<td>2년</td>
				<td><a href="https://appliedtechnology.humber.ca/programs/computer-programming.html" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<td>Hamilton</td>
				<td><img src="/static/img/old/coll/logo/Mohawk.jpg" alt="로고"><h4>Mohawk College</h4></td>
				<td class="le">Computer Systems Technician - Network Systems </td>
				<td>2년</td>
				<td><a href="https://www.mohawkcollege.ca/programs/technology/computer-systems-technician-network-systems-447-455" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<td>Welland</td>
				<td><img src="/static/img/old/coll/logo/Niagara.jpg" alt="로고"><h4>Niagara College</h4></td>
				<td class="le">Computer Programming</td>
				<td>2년</td>
				<td><a href="https://www.niagaracollege.ca/media/program/programming/" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<td>Toronto</td>
				<td><img src="/static/img/old/coll/logo/Seneca.jpg" alt="로고"><h4>Seneca College</h4></td>
				<td class="le">Computer Programmer</td>
				<td>2년</td>
				<td><a href="https://www.senecacollege.ca/programs/fulltime/CPD/pathways.html" target="_blank">바로가기</a></td>
			  </tr>
			  <tr class="bo">
				<td>Toronto</td>
				<td><img src="/static/img/old/coll/logo/Sheridan.jpg" alt="로고"><h4>Sheridan College</h4></td>
				<td class="le">Computer Engineering Technician </td>
				<td>2년</td>
				<td><a href="https://www.sheridancollege.ca/programs/computer-engineering-technician" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<th rowspan="3" class="bo">BC</th>
				<td>Victoria</td>
				<td><img src="/static/img/old/coll/logo/Camosun.jpg" alt="로고"><h4>Camosun College</h4></td>
				<td class="le">Information and <br>Computer Systems Technologist, Diploma</td>
				<td>2년</td>
				<td><a href="https://camosun.ca/programs-courses/find-program/information-and-computer-systems-technologist-diploma" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<td>Vancouver</td>
				<td><img src="/static/img/old/coll/logo/BCIT.jpg" alt="로고"><h4>BCIT<span>(The British Columbia Institute of Technology)</span></h4></td>
				<td class="le">Computer Information Technology</td>
				<td>2년</td>
				<td><a href="https://www.bcit.ca/programs/computer-information-technology-diploma-full-time-5540dipma/" target="_blank">바로가기</a></td>
			  </tr>
			  <tr class="bo">
				<td>Kelowna</td>
				<td><img src="/static/img/old/coll/logo/Okanagan.jpg" alt="로고"><h4>Okanagan College</h4></td>
				<td class="le">Computer Information Systems</td>
				<td>2년</td>
				<td><a href="https://www.okanagan.bc.ca/computer-information-systems-diploma" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<th rowspan="4" class="bo">AB</th>
				<td>Edmonton</td>
				<td><img src="/static/img/old/coll/logo/NAIT.jpg" alt="로고"><h4>NAIT</h4></td>
				<td class="le">Computer Engineering Technology </td>
				<td>2년</td>
				<td><a href="https://www.nait.ca/programs/computer-engineering-technology?term=2021-fall" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<td>Calgary</td>
				<td><img src="/static/img/old/coll/logo/SAIT.jpg" alt="로고"><h4>SAIT</h4></td>
				<td class="le">Information Technology <br>(Computer Systems Major)</td>
				<td>2년</td>
				<td><a href="https://www.sait.ca/programs-and-courses/diplomas/information-technology" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<td>Lethbridge</td>
				<td><img src="/static/img/old/coll/logo/Lethbridge.jpg" alt="로고"><h4>Lethbridge College</h4></td>
				<td class="le">Computer Information Technology</td>
				<td>2년</td>
				<td><a href="https://lethbridgecollege.ca/programs/computer-information-technology" target="_blank">바로가기</a></td>
			  </tr>
			  <tr class="bo">
				<td>Medicine Hat</td>
				<td><img src="/static/img/old/coll/logo/Medicine.jpg" alt="로고"><h4>Medicine Hat College</h4></td>
				<td class="le">Information Technology</td>
				<td>2년</td>
				<td><a href="https://www.mhc.ab.ca/ProgramsandCourses/Academic-Programs/Programs-of-Study/Information-Technology" target="_blank">바로가기</a></td>
			  </tr>
			  <tr class="bo">
				<th>MA</th>
				<td>Winnipeg</td>
				<td><img src="/static/img/old/coll/logo/RedRiver.jpg" alt="로고"><h4>Red River College</h4></td>
				<td class="le">Business Information Technology</td>
				<td>2년</td>
				<td><a href="https://catalogue.rrc.ca/Programs/WPG/Fulltime/BUSGF-DP" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<th>NS</th>
				<td>Haifax</td>
				<td><img src="/static/img/old/coll/logo/NSCC.jpg" alt="로고"><h4>NSCC</h4></td>
				<td class="le">IT Programming</td>
				<td>2년</td>
				<td><a href="https://www.nscc.ca/learning_programs/programs/plandescr.aspx?prg=ITPR&pln=ITPROGRAM" target="_blank">바로가기</a></td>
			  </tr>
			</table>

	</div>
	<div id="coll4" style="display:none;">
		<h3 class="tab_tit">전기/전자 분야</h3>		
			<table>
			  <tr class="tbl_top">
				<th scope="col" width="50">주</th>
				<th scope="col" width="110">도시</th>
				<th scope="col" width="230">대학명</th>
				<th scope="col">전공</th>   
				<th scope="col" width="50">기간</th>
				<th scope="col" width="110">상세보기</th>
			  </tr>
			  <tr>
				<th rowspan="11" class="bo">ON</th>
				<td>Toronto</td>
				<td><img src="/static/img/old/coll/logo/George.jpg" alt="로고"><h4>George Brown College</h4></td>
				<td class="le">Electromechanical Engineering Technician</td>
				<td>3년</td>
				<td><a href="https://www.georgebrown.ca/programs/electromechanical-engineering-technician-program-t146" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<td>Toronto</td>
				<td><img src="/static/img/old/coll/logo/Centennial.jpg" alt="로고"><h4>Centennial College</h4></td>
				<td class="le">Electrical Engineering Technician </td>
				<td>2년</td>
				<td><a href="https://www.centennialcollege.ca/programs-courses/full-time/electrical-engineering-technician/" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<td>Toronto</td>
				<td><img src="/static/img/old/coll/logo/Seneca.jpg" alt="로고"><h4>Seneca College</h4></td>
				<td class="le">Electrical Engineering Technician </td>
				<td>2년</td>
				<td><a href="https://www.senecacollege.ca/programs/fulltime/EEN.html" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<td>London</td>
				<td><img src="/static/img/old/coll/logo/Fanshawe.jpg" alt="로고"><h4>Fanshawe College</h4></td>
				<td class="le">Electrical Engineering Technician </td>
				<td>2년</td>
				<td><a href="https://www.fanshawec.ca/programs/eln2-electrical-engineering-technician/next#" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<td>Kitchener</td>
				<td><img src="/static/img/old/coll/logo/Conestoga.jpg" alt="로고"><h4>Conestoga College</h4></td>
				<td class="le">Electrical Engineering Technician </td>
				<td>2년</td>
				<td><a href="https://www.conestogac.on.ca/fulltime/electrical-engineering-technician" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<td>Toronto</td>
				<td><img src="/static/img/old/coll/logo/Humber.jpg" alt="로고"><h4>Humber College</h4></td>
				<td class="le">Electrical Engineering Technician - Control Systems</td>
				<td>2년</td>
				<td><a href="https://appliedtechnology.humber.ca/programs/electrical-engineering-technician-control-systems.html?_ga=2.143797426.640159068.1622675625-2092190031.1622675625" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<td>Ottawa</td>
				<td><img src="/static/img/old/coll/logo/Algonquin.jpg" alt="로고"><h4>Algonquin College</h4></td>
				<td class="le">Electrical Engineering Technician (Co-op and Non Co-op Version)</td>
				<td>2년</td>
				<td><a href="https://www.algonquincollege.com/acce/program/electrical-engineering-technician/" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<td>Barrie</td>
				<td><img src="/static/img/old/coll/logo/Georgian.jpg" alt="로고"><h4>Georgian College</h4></td>
				<td class="le">Electrical Engineering Technician </td>
				<td>2년</td>
				<td><a href="https://www.georgiancollege.ca/academics/programs/electrical-engineering-technician/" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<td>Hamilton</td>
				<td><img src="/static/img/old/coll/logo/Mohawk.jpg" alt="로고"><h4>Mohawk College</h4></td>
				<td class="le">Electrical Engineering Technician - Power</td>
				<td>2년</td>
				<td><a href="https://www.mohawkcollege.ca/programs/skilled-trades/electrical-engineering-technician-power-403-433" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<td>Welland</td>
				<td><img src="/static/img/old/coll/logo/Niagara.jpg" alt="로고"><h4>Niagara College</h4></td>
				<td class="le">Electrical Engineering Technician </td>
				<td>2년</td>
				<td><a href="https://www.niagaracollege.ca/technology/program/electrical-engineering-technician/" target="_blank">바로가기</a></td>
			  </tr>
			  <tr class="bo">
				<td>Sarnia</td>
				<td><img src="/static/img/old/coll/logo/Lambton.jpg" alt="로고"><h4>Lambton College</h4></td>
				<td class="le">Electrical Power Distribution &amp; Control Technician</td>
				<td>2년</td>
				<td><a href="https://www.lambtoncollege.ca/custom/LambtonApps/Programs/International.aspx?id=2147513424" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<th rowspan="3" class="bo">BC</th>
				<td>Vancouver</td>
				<td><img src="/static/img/old/coll/logo/BCIT.jpg" alt="로고"><h4>BCIT<span>(The British Columbia Institute of Technology)</span></h4></td>
				<td class="le">Electronics &amp; Computer Engineering Technology </td>
				<td>2년</td>
				<td><a href="https://www.bcit.ca/programs/electrical-and-computer-engineering-technology-telecommunications-and-networks-option-diploma-full-time-cooperative-education-534cdipma/" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<td>Victoria</td>
				<td><img src="/static/img/old/coll/logo/Camosun.jpg" alt="로고"><h4>Camosun College</h4></td>
				<td class="le">Electrical Engineering Technology - Marine &amp; Industrial, Diploma </td>
				<td>2.5년</td>
				<td><a href="https://camosun.ca/programs-courses/find-program/electrical-engineering-technology-marine-industrial-diploma" target="_blank">바로가기</a></td>
			  </tr>
			  <tr class="bo">
				<td>Kelowna</td>
				<td><img src="/static/img/old/coll/logo/Okanagan.jpg" alt="로고"><h4>Okanagan College</h4></td>
				<td class="le">Electronics Engineering Technology Diploma</td>
				<td>2년</td>
				<td><a href="https://www.okanagan.bc.ca/electronics-engineering-technology-diploma" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<th rowspan="2" class="bo">AB</th>
				<td>Calgary</td>
				<td><img src="/static/img/old/coll/logo/SAIT.jpg" alt="로고"><h4>SAIT</h4></td>
				<td class="le">Electrical Engineering Technology </td>
				<td>2년</td>
				<td><a href="https://www.sait.ca/programs-and-courses/diplomas/electrical-engineering-technology-daytime" target="_blank">바로가기</a></td>
			  </tr>
			  <tr class="bo">
				<td>Edmonton</td>
				<td><img src="/static/img/old/coll/logo/NAIT.jpg" alt="로고"><h4>NAIT</h4></td>
				<td class="le">Electrical Engineering Technology </td>
				<td>2년</td>
				<td><a href="https://www.nait.ca/programs/electrical-engineering-technology?term=2021-fall" target="_blank">바로가기</a></td>
			  </tr>
			  <tr class="bo">
				<th>MA</th>
				<td>Winnipeg</td>
				<td><img src="/static/img/old/coll/logo/RedRiver.jpg" alt="로고"><h4>Red River College</h4></td>
				<td class="le">Electrical Engineering Technology </td>
				<td>2.5년</td>
				<td><a href="https://catalogue.rrc.ca/Programs/WPG/Fulltime/ELEGF-DP" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<th>NS</th>
				<td>Haifax</td>
				<td><img src="/static/img/old/coll/logo/NSCC.jpg" alt="로고"><h4>NSCC</h4></td>
				<td class="le">Electrical Technician </td>
				<td>2년</td>
				<td><a href="https://www.nscc.ca/learning_programs/programs/plandescr.aspx?prg=ELTN&pln=ELECTCN" target="_blank">바로가기</a></td>
			  </tr>
			</table>



	</div>
	<div id="coll5" style="display:none;">
		<h3 class="tab_tit">기계공학 분야</h3>
		<table>
			  <tr class="tbl_top">
				<th scope="col" width="50">주</th>
				<th scope="col" width="110">도시</th>
				<th scope="col" width="230">대학명</th>
				<th scope="col">전공</th>   
				<th scope="col" width="50">기간</th>
				<th scope="col" width="110">상세보기</th>
			  </tr>
		  <tr>
			<th rowspan="10" class="bo">ON</th>
			<td>Toronto</td>
			<td><img src="/static/img/old/coll/logo/George.jpg" alt="로고"><h4>George Brown College</h4></td>
			<td class="le">Mechanical Engineering Technology</td>
			<td>3년</td>
			<td><a href="https://www.georgebrown.ca/programs/mechanical-engineering-technology-design-program-t121" target="_blank">바로가기</a></td>
		  </tr>
		  <tr>
		    <td>Toronto</td>
			<td><img src="/static/img/old/coll/logo/Centennial.jpg" alt="로고"><h4>Centennial College</h4></td>
			<td class="le">Electro-Mechanical Engineering Technician </td>
			<td>2년</td>
			<td><a href="https://www.centennialcollege.ca/programs-courses/full-time/automation-and-robotics-technician/" target="_blank">바로가기</a></td>
		  </tr>
		  <tr>
		    <td>Toronto</td>
			<td><img src="/static/img/old/coll/logo/Seneca.jpg" alt="로고"><h4>Seneca College</h4></td>
			<td class="le">Mechanical Engineering Technician (Tool Design)</td>
			<td>2년</td>
			<td><a href="https://www.senecacollege.ca/programs/fulltime/MATD.html" target="_blank">바로가기</a></td>
		  </tr>
		  <tr>
		    <td>London</td>
			<td><img src="/static/img/old/coll/logo/Fanshawe.jpg" alt="로고"><h4>Fanshawe College</h4></td>
			<td class="le">Manufacturing Engineering Technician (Co-op)</td>
			<td>2년</td>
			<td><a href="https://www.fanshawec.ca/programs/men1-manufacturing-engineering-technician-co-op/next#" target="_blank">바로가기</a></td>
		  </tr>
		  <tr>
		    <td>Kitchener</td>
			<td><img src="/static/img/old/coll/logo/Conestoga.jpg" alt="로고"><h4>Conestoga College</h4></td>
			<td class="le">Mechanical Engineering Technician - <br>Automated Manufacturing (Co-op Option) </td>
			<td>2년</td>
			<td><a href="https://www.conestogac.on.ca/fulltime/mechanical-engineering-technician-automated-manufacturing" target="_blank">바로가기</a></td>
		  </tr>
		  <tr>
		    <td>Toronto</td>
			<td><img src="/static/img/old/coll/logo/Humber.jpg" alt="로고"><h4>Humber College</h4></td>
			<td class="le">Mechanical Engineering Technician</td>
			<td>2년</td>
			<td><a href="https://appliedtechnology.humber.ca/programs/mechanical-engineering-technician.html?_ga=2.177408418.640159068.1622675625-2092190031.1622675625" target="_blank">바로가기</a></td>
		  </tr>
		  <tr>
		    <td>Ottawa</td>
			<td><img src="/static/img/old/coll/logo/Algonquin.jpg" alt="로고"><h4>Algonquin College</h4></td>
			<td class="le">Manufacturing Engineering Technician</td>
			<td>2년</td>
			<td><a href="https://www.algonquincollege.com/sat/program/manufacturing-engineering-technician/" target="_blank">바로가기</a></td>
		  </tr>
		  <tr>
		    <td>Barrie</td>
		    <td><img src="/static/img/old/coll/logo/Georgian.jpg" alt="로고"><h4>Georgian College</h4></td>
		    <td class="le">Mechanical Technician - Precision Skills </td>
		    <td>2년</td>
		    <td><a href="https://www.georgiancollege.ca/academics/programs/mechanical-technician-precision-skills/" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>Hamilton</td>
		    <td><img src="/static/img/old/coll/logo/Mohawk.jpg" alt="로고"><h4>Mohawk College</h4></td>
		    <td class="le">Manufacturing Engineering Technician - Automation </td>
		    <td>2년</td>
		    <td><a href="https://www.mohawkcollege.ca/programs/skilled-trades/manufacturing-engineering-technician-automation-industrial-mechanic" target="_blank">바로가기</a></td>
	      </tr>
		  <tr class="bo">
		    <td>Welland</td>
		    <td><img src="/static/img/old/coll/logo/Niagara.jpg" alt="로고"><h4>Niagara College</h4></td>
		    <td class="le">Mechanical Engineering Technician</td>
		    <td>2년</td>
		    <td><a href="https://www.niagaracollege.ca/technology/program/mechanical-engineering-technician/" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
			<th rowspan="3" class="bo">BC</th>
			<td>Vancouver</td>
			<td><img src="/static/img/old/coll/logo/BCIT.jpg" alt="로고"><h4>BCIT<span>(The British Columbia Institute of Technology)</span></h4></td>
			<td class="le">Mechanical Engineering Technology</td>
			<td>2년</td>
			<td><a href="https://www.bcit.ca/programs/mechanical-engineering/" target="_blank">바로가기</a></td>
		  </tr>
		  <tr>
		    <td>Victoria</td>
		    <td><img src="/static/img/old/coll/logo/Camosun.jpg" alt="로고"><h4>Camosun College</h4></td>
		    <td class="le">Mechanical Engineering Technology, Diploma</td>
		    <td>2년</td>
		    <td><a href="https://camosun.ca/programs-courses/find-program/mechanical-engineering-technology-diploma" target="_blank">바로가기</a></td>
	      </tr>
		  <tr class="bo">
		    <td>Kelowna</td>
		    <td><img src="/static/img/old/coll/logo/Okanagan.jpg" alt="로고"><h4>Okanagan College</h4></td>
		    <td class="le">Mechanical Engineering Technology, Diploma</td>
		    <td>2년</td>
		    <td><a href="https://www.okanagan.bc.ca/mechanical-engineering-technology-diploma" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
			<th rowspan="2" class="bo">AB</th>
			<td>Calgary</td>
			<td><img src="/static/img/old/coll/logo/SAIT.jpg" alt="로고"><h4>SAIT</h4></td>
			<td class="le">Mechanical Engineering Technology </td>
			<td>2년</td>
			<td><a href="https://www.sait.ca/programs-and-courses/diplomas/mechanical-engineering-technology-daytime" target="_blank">바로가기</a></td>
		  </tr>
		  <tr class="bo">
		    <td>Edmonton</td>
		    <td><img src="/static/img/old/coll/logo/NAIT.jpg" alt="로고"><h4>NAIT</h4></td>
		    <td class="le">Mechanical Engineering Technology </td>
		    <td>2년</td>
		    <td><a href="https://www.nait.ca/programs/mechanical-engineering-technology?term=2021-fall" target="_blank">바로가기</a></td>
	      </tr>
		  <tr class="bo">
			<th>MA</th>
			<td>Winnipeg</td>
			<td><img src="/static/img/old/coll/logo/RedRiver.jpg" alt="로고"><h4>Red River College</h4></td>
			<td class="le">Mechanical Engineering Technology </td>
			<td>2.5년</td>
			<td><a href="https://catalogue.rrc.ca/Programs/WPG/Fulltime/MECEF-DP" target="_blank">바로가기</a></td>
		  </tr>
		  <tr>
			<th>NS</th>
			<td>Haifax</td>
			<td><img src="/static/img/old/coll/logo/NSCC.jpg" alt="로고"><h4>NSCC</h4></td>
			<td class="le">Mechanical Engineering Technology </td>
			<td>2년</td>
			<td><a href="https://www.nscc.ca/learning_programs/programs/plandescr.aspx?prg=METG&pln=MECENGTECH" target="_blank">바로가기</a></td>
		  </tr>
		</table>

	</div>
	<div id="coll6" style="display:none;">
		<h3 class="tab_tit">용접 분야</h3>
		<table>
			  <tr class="tbl_top">
				<th scope="col" width="50">주</th>
				<th scope="col" width="110">도시</th>
				<th scope="col" width="230">대학명</th>
				<th scope="col">전공</th>   
				<th scope="col" width="50">기간</th>
				<th scope="col" width="110">상세보기</th>
			  </tr>
		  <tr>
			<th rowspan="5" class="bo">ON</th>
			<td>London</td>
			<td><img src="/static/img/old/coll/logo/Fanshawe.jpg" alt="로고"><h4>Fanshawe College</h4></td>
			<td class="le">Welding Techniques</td>
			<td>1년</td>
			<td><a href="https://www.fanshawec.ca/programs/men1-manufacturing-engineering-technician-co-op/next#" target="_blank">바로가기</a></td>
		  </tr>
		  <tr>
		    <td>Kitchener</td>
			<td><img src="/static/img/old/coll/logo/Conestoga.jpg" alt="로고"><h4>Conestoga College</h4></td>
			<td class="le">Welding and Fabrication Technician </td>
			<td>2년</td>
			<td><a href="https://www.conestogac.on.ca/fulltime/welding-and-fabrication-technician" target="_blank">바로가기</a></td>
		  </tr>
		  <tr>
		    <td>Barrie</td>
			<td><img src="/static/img/old/coll/logo/Georgian.jpg" alt="로고"><h4>Georgian College</h4></td>
			<td class="le">Welding Techniques</td>
			<td>1년</td>
			<td><a href="https://www.georgiancollege.ca/academics/programs/welding-techniques/" target="_blank">바로가기</a></td>
		  </tr>
		  <tr>
		    <td>Welland</td>
			<td><img src="/static/img/old/coll/logo/Niagara.jpg" alt="로고"><h4>Niagara College</h4></td>
			<td class="le">Welding Technician</td>
			<td>2년</td>
			<td><a href="https://www.niagaracollege.ca/trades/program/welding-technician/" target="_blank">바로가기</a></td>
		  </tr>
		  <tr class="bo">
		    <td>Sarnia</td>
			<td><img src="/static/img/old/coll/logo/Lambton.jpg" alt="로고"><h4>Lambton College</h4></td>
			<td class="le">Welding Techniques</td>
			<td>1년</td>
			<td><a href="https://www.lambtoncollege.ca/custom/LambtonApps/Programs/International.aspx?id=2147504038" target="_blank">바로가기</a></td>
		  </tr>
		  <tr class="bo">
			<th>AB</th>
			<td>Calgary</td>
			<td><img src="/static/img/old/coll/logo/SAIT.jpg" alt="로고"><h4>SAIT</h4></td>
			<td class="le">Welding Engineering Technology </td>
			<td>2년</td>
			<td><a href="https://www.sait.ca/programs-and-courses/diplomas/welding-engineering-technology" target="_blank">바로가기</a></td>
		  </tr>
		  <tr class="bo">
			<th>MA</th>
			<td>Winnipeg</td>
			<td><img src="/static/img/old/coll/logo/RedRiver.jpg" alt="로고"><h4>Red River College</h4></td>
			<td class="le">Welding</td>
			<td>1년</td>
			<td><a href="https://catalogue.rrc.ca/Programs/WPG/Fulltime/WELDF-CT" target="_blank">바로가기</a></td>
		  </tr>
		  <tr>
			<th>NS</th>
			<td>Haifax</td>
			<td><img src="/static/img/old/coll/logo/NSCC.jpg" alt="로고"><h4>NSCC</h4></td>
			<td class="le">Welding - Diploma</td>
			<td>2년</td>
			<td><a href="https://www.nscc.ca/learning_programs/programs/plandescr.aspx?prg=WLDD&pln=WELDINGDIP" target="_blank">바로가기</a></td>
		  </tr>
		</table>

	</div>
	<div id="coll7" style="display:none;">
		<h3 class="tab_tit">건축/토목 분야</h3>
			<table>
			  <tr class="tbl_top">
				<th scope="col" width="50">주</th>
				<th scope="col" width="110">도시</th>
				<th scope="col" width="230">대학명</th>
				<th scope="col">전공</th>   
				<th scope="col" width="50">기간</th>
				<th scope="col" width="110">상세보기</th>
			  </tr>
			  <tr>
				<th rowspan="8" class="bo">ON</th>
				<td>Toronto</td>
				<td><img src="/static/img/old/coll/logo/George.jpg" alt="로고"><h4>George Brown College</h4></td>
				<td class="le">Building Renovation Technician </td>
				<td>2년</td>
				<td><a href="https://www.georgebrown.ca/programs/building-renovation-technology-program-t148" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<td>Toronto</td>
				<td><img src="/static/img/old/coll/logo/Centennial.jpg" alt="로고"><h4>Centennial College</h4></td>
				<td class="le">Architectural Technician </td>
				<td>2년</td>
				<td><a href="https://www.centennialcollege.ca/programs-courses/full-time/architectural-technician/" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<td>Toronto</td>
				<td><img src="/static/img/old/coll/logo/Seneca.jpg" alt="로고"><h4>Seneca College</h4></td>
				<td class="le">Civil Engineering Technician </td>
				<td>2년</td>
				<td><a href="https://www.senecacollege.ca/programs/fulltime/CVT.html" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<td>London</td>
				<td><img src="/static/img/old/coll/logo/Fanshawe.jpg" alt="로고"><h4>Fanshawe College</h4></td>
				<td class="le">Construction Engineering Technology</td>
				<td>2년</td>
				<td><a href="https://www.fanshawec.ca/programs/cmy2-construction-engineering-technology/next#" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<td>Ottawa</td>
				<td><img src="/static/img/old/coll/logo/Algonquin.jpg" alt="로고"><h4>Algonquin College</h4></td>
				<td class="le">Architectural Technician (Co-op Option)</td>
				<td>2년</td>
				<td><a href="https://www.algonquincollege.com/acce/program/architectural-technician/" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<td>Barrie</td>
				<td><img src="/static/img/old/coll/logo/Georgian.jpg" alt="로고"><h4>Georgian College</h4></td>
				<td class="le">Civil Engineering Technician - CONSTRUCTION</td>
				<td>2년</td>
				<td><a href="https://www.georgiancollege.ca/academics/programs/civil-engineering-technician/" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<td>Hamilton</td>
				<td><img src="/static/img/old/coll/logo/Mohawk.jpg" alt="로고"><h4>Mohawk College</h4></td>
				<td class="le">Construction Engineering Technician </td>
				<td>2년</td>
				<td><a href="https://www.mohawkcollege.ca/programs/skilled-trades/construction-engineering-technician-451" target="_blank">바로가기</a></td>
			  </tr>
			  <tr class="bo">
				<td>Welland</td>
				<td><img src="/static/img/old/coll/logo/Niagara.jpg" alt="로고"><h4>Niagara College</h4></td>
				<td class="le">Renovation Technician - Construction (Co-op)</td>
				<td>2년</td>
				<td><a href="https://www.niagaracollege.ca/trades/program/carpentry-renovation-technician/" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<th rowspan="3" class="bo">BC</th>
				<td>Vancouver</td>
				<td><img src="/static/img/old/coll/logo/BCIT.jpg" alt="로고"><h4>BCIT<span>(The British Columbia Institute of Technology)</span></h4></td>
				<td class="le">Architectural and Building Technology </td>
				<td>2년</td>
				<td><a href="https://www.bcit.ca/programs/architectural-and-building-technology-diploma-full-time-7140dipma/" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<td>Victoria</td>
				<td><img src="/static/img/old/coll/logo/Camosun.jpg" alt="로고"><h4>Camosun College</h4></td>
				<td class="le">Civil Engineering Technology, Diploma</td>
				<td>2년</td>
				<td><a href="https://camosun.ca/programs-courses/find-program/civil-engineering-technology-diploma" target="_blank">바로가기</a></td>
			  </tr>
			  <tr class="bo">
				<td>Kelowna</td>
				<td><img src="/static/img/old/coll/logo/Okanagan.jpg" alt="로고"><h4>Okanagan College</h4></td>
				<td class="le">Civil Engineering Technology, Diploma</td>
				<td>2년</td>
				<td><a href="https://www.okanagan.bc.ca/civil-engineering-technology-diploma" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<th rowspan="3" class="bo">AB</th>
				<td>Calgary</td>
				<td><img src="/static/img/old/coll/logo/SAIT.jpg" alt="로고"><h4>SAIT</h4></td>
				<td class="le">Architectural Technologies</td>
				<td>2년</td>
				<td><a href="https://www.sait.ca/programs-and-courses/diplomas/architectural-technologies" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<td>Edmonton</td>
				<td><img src="/static/img/old/coll/logo/NAIT.jpg" alt="로고"><h4>NAIT</h4></td>
				<td class="le">Architectural Technology</td>
				<td>2년</td>
				<td><a href="https://www.nait.ca/programs/architectural-technology?term=2021-fall" target="_blank">바로가기</a></td>
			  </tr>
			  <tr class="bo">
				<td>Lethbridge</td>
				<td><img src="/static/img/old/coll/logo/Lethbridge.jpg" alt="로고"><h4>Lethbridge College</h4></td>
				<td class="le">Civil Engineering Technology</td>
				<td>2년</td>
				<td><a href="https://lethbridgecollege.ca/programs/civil-engineering-technology" target="_blank">바로가기</a></td>
			  </tr>
			  <tr class="bo">
				<th>MA</th>
				<td>Winnipeg</td>
				<td><img src="/static/img/old/coll/logo/RedRiver.jpg" alt="로고"><h4>Red River College</h4></td>
				<td class="le">Civil Engineering Technology</td>
				<td>2년</td>
				<td><a href="https://catalogue.rrc.ca/Programs/WPG/Fulltime/CIVCF-DP" target="_blank">바로가기</a></td>
			  </tr>
			  <tr>
				<th>NS</th>
				<td>Haifax</td>
				<td><img src="/static/img/old/coll/logo/NSCC.jpg" alt="로고"><h4>NSCC</h4></td>
				<td class="le">Construction Management Technology</td>
				<td>2년</td>
				<td><a href="https://www.nscc.ca/learning_programs/programs/plandescr.aspx?prg=CARD&pln=CARPENTDIP" target="_blank">바로가기</a></td>
			  </tr>
			</table>

	</div>
	<div id="coll8" style="display:none;">
		<h3 class="tab_tit">목공 관련 분야</h3>
		<table>
			  <tr class="tbl_top">
				<th scope="col" width="50">주</th>
				<th scope="col" width="110">도시</th>
				<th scope="col" width="230">대학명</th>
				<th scope="col">전공</th>   
				<th scope="col" width="50">기간</th>
				<th scope="col" width="110">상세보기</th>
			  </tr>
		  <tr>
		    <th rowspan="5" class="bo">ON</th>
		    <td>Toronto</td>
		    <td><img src="/static/img/old/coll/logo/George.jpg" alt="로고"><h4>George Brown College</h4></td>
		    <td class="le">Carpentry and Renovation Technician Program </td>
		    <td>2년</td>
		    <td><a href="https://www.georgebrown.ca/programs/carpentry-and-renovation-technician-program-t180" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>Kitchener</td>
		    <td><img src="/static/img/old/coll/logo/Conestoga.jpg" alt="로고"><h4>Conestoga College</h4></td>
		    <td class="le">Woodworking Technician</td>
		    <td>2년</td>
		    <td><a href="https://www.conestogac.on.ca/fulltime/woodworking-technician" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>London</td>
		    <td><img src="/static/img/old/coll/logo/Fanshawe.jpg" alt="로고"><h4>Fanshawe College</h4></td>
		    <td class="le">Carpentry and Renovation Technician</td>
		    <td>2년</td>
		    <td><a href="https://www.fanshawec.ca/programs/crt1-carpentry-and-renovation-technician/next#" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>Ottawa</td>
		    <td><img src="/static/img/old/coll/logo/Algonquin.jpg" alt="로고"><h4>Algonquin College</h4></td>
		    <td class="le">Heritage Carpentry and Joinery</td>
		    <td>2년</td>
		    <td><a href="https://www.algonquincollege.com/perth/program/carpentry-and-joinery-heritage/" target="_blank">바로가기</a></td>
	      </tr>
		  <tr class="bo">
		    <td>Barrie</td>
		    <td><img src="/static/img/old/coll/logo/Georgian.jpg" alt="로고"><h4>Georgian College</h4></td>
		    <td class="le">Carpentry and Renovation Techniques </td>
		    <td>1년</td>
		    <td><a href="https://www.georgiancollege.ca/academics/programs/carpentry-renovation-techniques/" target="_blank">바로가기</a></td>
	      </tr>
		  <tr class="bo">
		    <th>MA</th>
		    <td>Winnipeg</td>
		    <td><img src="/static/img/old/coll/logo/RedRiver.jpg" alt="로고"><h4>Red River College</h4></td>
		    <td class="le">Cabinetry and Woodworking Technology</td>
		    <td>2년</td>
		    <td><a href="https://catalogue.rrc.ca/Programs/WPG/Fulltime/CABWF-DP" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <th>NS</th>
		    <td>Haifax</td>
		    <td><img src="/static/img/old/coll/logo/NSCC.jpg" alt="로고"><h4>NSCC</h4></td>
		    <td class="le">Carpentry - Diploma</td>
		    <td>2년</td>
		    <td><a href="https://www.nscc.ca/learning_programs/programs/plandescr.aspx?prg=CARD&pln=CARPENTDIP" target="_blank">바로가기</a></td>
	      </tr>
		</table>
	</div>
	<div id="coll9" style="display:none;">
		<h3 class="tab_tit">조경 관련 분야</h3>
		<table>
			  <tr class="tbl_top">
				<th scope="col" width="50">주</th>
				<th scope="col" width="110">도시</th>
				<th scope="col" width="230">대학명</th>
				<th scope="col">전공</th>   
				<th scope="col" width="50">기간</th>
				<th scope="col" width="110">상세보기</th>
			  </tr>
		  <tr>
		    <th rowspan="4" class="bo">ON</th>
		    <td>Toronto</td>
		    <td><img src="/static/img/old/coll/logo/Humber.jpg" alt="로고"><h4>Humber College</h4></td>
		    <td class="le">Landscape Technician</td>
		    <td>2년</td>
		    <td><a href="https://appliedtechnology.humber.ca/programs/landscape-technician.html?_ga=2.248193152.640159068.1622675625-2092190031.1622675625" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>Welland</td>
		    <td><img src="/static/img/old/coll/logo/Niagara.jpg" alt="로고"><h4>Niagara College</h4></td>
		    <td class="le">Landscape Technician (Co-op)</td>
		    <td>2년</td>
		    <td><a href="https://www.niagaracollege.ca/environment/program/landscape-technician-coop/" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>London</td>
		    <td><img src="/static/img/old/coll/logo/Fanshawe.jpg" alt="로고"><h4>Fanshawe College</h4></td>
		    <td class="le">Landscape Design</td>
		    <td>3년</td>
		    <td><a href="https://www.fanshawec.ca/programs/dls4-landscape-design/next#" target="_blank">바로가기</a></td>
	      </tr>
		  <tr class="bo">
		    <td>Ottawa</td>
		    <td><img src="/static/img/old/coll/logo/Algonquin.jpg" alt="로고"><h4>Algonquin College</h4></td>
		    <td class="le">Horticultural Industries (Co-op)</td>
		    <td>2년</td>
		    <td><a href="https://www.algonquincollege.com/acce/program/horticultural-industries/" target="_blank">바로가기</a></td>
	      </tr>
		  <tr class="bo">
		    <th>AB</th>
		    <td>Edmonton</td>
		    <td><img src="/static/img/old/coll/logo/NAIT.jpg" alt="로고"><h4>NAIT</h4></td>
		    <td class="le">Landscape Architectural Technology</td>
		    <td>2년</td>
		    <td><a href="https://www.nait.ca/programs/landscape-architectural-technology?term=2021-fall" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <th>NS</th>
		    <td>Halifax</td>
		    <td><img src="/static/img/old/coll/logo/NSCC.jpg" alt="로고"><h4>NSCC</h4></td>
		    <td class="le">Horticulture &amp; Landscape Technology</td>
		    <td>2년</td>
		    <td><a href="https://www.nscc.ca/learning_programs/programs/plandescr.aspx?prg=HLTG&pln=HORTLANDTG" target="_blank">바로가기</a></td>
	      </tr>
		</table>

	</div>

	<div id="coll10" style="display:none;">
		<h3 class="tab_tit">간호/방사선 분야</h3>

		<table>
			  <tr class="tbl_top">
				<th scope="col" width="50">주</th>
				<th scope="col" width="110">도시</th>
				<th scope="col" width="230">대학명</th>
				<th scope="col">전공</th>   
				<th scope="col" width="50">기간</th>
				<th scope="col" width="110">상세보기</th>
			  </tr>
		  <tr>
			<th rowspan="9" class="bo">ON</th>
			<td>Ottawa</td>
			<td><img src="/static/img/old/coll/logo/Algonquin.jpg" alt="로고"><h4>Algonquin College</h4></td>
			<td class="le">Medical Radiation Technology </td>
			<td>3년</td>
			<td><a href="https://www.algonquincollege.com/healthandcommunity/program/medical-radiation-technology/" target="_blank">바로가기</a></td>
		  </tr>
		  <tr>
		    <td>London</td>
			<td><img src="/static/img/old/coll/logo/Fanshawe.jpg" alt="로고"><h4>Fanshawe College</h4></td>
			<td class="le">Medical Radiation Technology </td>
			<td>3년</td>
			<td><a href="https://www.fanshawec.ca/programs/mrt1-medical-radiation-technology/next#" target="_blank">바로가기</a></td>
		  </tr>
		  <tr>
		    <td>Toronto</td>
			<td><img src="/static/img/old/coll/logo/Seneca.jpg" alt="로고"><h4>Seneca College</h4></td>
			<td class="le">Practical Nursing</td>
			<td>2년</td>
			<td><a href="https://www.senecacollege.ca/programs/fulltime/PND.html" target="_blank">바로가기</a></td>
		  </tr>
		  <tr>
		    <td>Toronto</td>
			<td><img src="/static/img/old/coll/logo/Humber.jpg" alt="로고"><h4>Humber College</h4></td>
			<td class="le">Practical Nursing</td>
			<td>2년</td>
			<td><a href="https://healthsciences.humber.ca/programs/practical-nursing.html?_ga=2.142370101.640159068.1622675625-2092190031.1622675625" target="_blank">바로가기</a></td>
		  </tr>
		  <tr>
		    <td>Toronto</td>
			<td><img src="/static/img/old/coll/logo/Centennial.jpg" alt="로고"><h4>Centennial College</h4></td>
			<td class="le">Practical Nursing</td>
			<td>2년</td>
			<td><a href="https://www.centennialcollege.ca/programs-courses/full-time/practical-nursing/" target="_blank">바로가기</a></td>
		  </tr>
		  <tr>
		    <td>Welland</td>
		    <td><img src="/static/img/old/coll/logo/Niagara.jpg" alt="로고"><h4>Niagara College</h4></td>
		    <td class="le">Practical Nursing</td>
		    <td>2년</td>
		    <td><a href="https://www.niagaracollege.ca/nursing/programs/rpn-practical-nursing/" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>Barrie</td>
		    <td><img src="/static/img/old/coll/logo/Georgian.jpg" alt="로고"><h4>Georgian College</h4></td>
		    <td class="le">Practical Nursing</td>
		    <td>2년</td>
		    <td><a href="https://www.georgiancollege.ca/academics/programs/practical-nursing/" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>Kitchener</td>
		    <td><img src="/static/img/old/coll/logo/Conestoga.jpg" alt="로고"><h4>Conestoga College</h4></td>
		    <td class="le">Practical Nursing</td>
		    <td>2년</td>
		    <td><a href="https://www.conestogac.on.ca/fulltime/practical-nursing" target="_blank">바로가기</a></td>
	      </tr>
		  <tr class="bo">
		    <td>Sarnia</td>
		    <td><img src="/static/img/old/coll/logo/Lambton.jpg" alt="로고"><h4>Lambton College</h4></td>
		    <td class="le">Practical Nursing</td>
		    <td>2년</td>
		    <td><a href="https://www.lambtoncollege.ca/custom/LambtonApps/Programs/International.aspx?id=2147504253" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
			<th rowspan="2" class="bo">BC</th>
			<td>Victoria</td>
			<td><img src="/static/img/old/coll/logo/Camosun.jpg" alt="로고"><h4>Camosun College</h4></td>
			<td class="le">Practical Nursing, Diploma</td>
			<td>2년</td>
			<td><a href="https://camosun.ca/programs-courses/find-program/practical-nursing-diploma" target="_blank">바로가기</a></td>
		  </tr>
		  <tr class="bo">
		    <td>Kelowna</td>
		    <td><img src="/static/img/old/coll/logo/Okanagan.jpg" alt="로고"><h4>Okanagan College</h4></td>
		    <td class="le">Practical Nursing, Diploma</td>
		    <td>2년</td>
		    <td><a href="https://www.okanagan.bc.ca/practical-nursing-diploma" target="_blank">바로가기</a></td>
	      </tr>
		  <tr class="bo">
		    <th>AB</th>
		    <td>Calgary</td>
		    <td><img src="/static/img/old/coll/logo/BowValley.jpg" alt="로고"><h4>BowValley College</h4></td>
		    <td class="le">Practical Nursing</td>
		    <td>2년</td>
		    <td><a href="https://bowvalleycollege.ca/programs-courses/health-and-wellness/practical-nurse-diploma-internationally-educated-nurses" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
			<th>NS</th>
			<td>Haifax</td>
			<td><img src="/static/img/old/coll/logo/NSCC.jpg" alt="로고"><h4>NSCC</h4></td>
			<td class="le">Practical Nursing</td>
			<td>2년</td>
			<td><a href="https://www.nscc.ca/learning_programs/programs/plandescr.aspx?prg=PNUR&pln=PRACNURDIP" target="_blank">바로가기</a></td>
		  </tr>
		</table>

	</div>
	<div id="coll11" style="display:none;">
		<h3 class="tab_tit">예술디자인 분야</h3>
		<table>
			  <tr class="tbl_top">
				<th scope="col" width="50">주</th>
				<th scope="col" width="110">도시</th>
				<th scope="col" width="230">대학명</th>
				<th scope="col">전공</th>   
				<th scope="col" width="50">기간</th>
				<th scope="col" width="110">상세보기</th>
			  </tr>
		  <tr>
			<th rowspan="10" class="bo">ON</th>
			<td>Ottawa</td>
			<td><img src="/static/img/old/coll/logo/Algonquin.jpg" alt="로고"><h4>Algonquin College</h4></td>
			<td class="le">Animation</td>
			<td>3년</td>
			<td><a href="https://www.algonquincollege.com/mediaanddesign/program/animation/" target="_blank">바로가기</a></td>
		  </tr>
		  <tr>
		    <td>Toronto</td>
			<td><img src="/static/img/old/coll/logo/Centennial.jpg" alt="로고"><h4>Centennial College</h4></td>
			<td class="le">Game - Art</td>
			<td>2년</td>
			<td><a href="https://www.centennialcollege.ca/programs-courses/full-time/game-art/" target="_blank">바로가기</a></td>
		  </tr>
		  <tr>
		    <td>Kitchener</td>
			<td><img src="/static/img/old/coll/logo/Conestoga.jpg" alt="로고"><h4>Conestoga College</h4></td>
			<td class="le">Graphic Design</td>
			<td>3년</td>
			<td><a href="https://www.conestogac.on.ca/fulltime/graphic-design" target="_blank">바로가기</a></td>
		  </tr>
		  <tr>
		    <td>London</td>
			<td><img src="/static/img/old/coll/logo/Fanshawe.jpg" alt="로고"><h4>Fanshawe College</h4></td>
			<td class="le">Interactive Media Design </td>
			<td>2년</td>
			<td><a href="https://www.fanshawec.ca/programs/idp3-interactive-media-design/next#" target="_blank">바로가기</a></td>
		  </tr>
		  <tr>
		    <td>Toronto</td>
			<td><img src="/static/img/old/coll/logo/George.jpg" alt="로고"><h4>George Brown College</h4></td>
			<td class="le">Digital Design - Game Design (for International Students)</td>
			<td>1년</td>
			<td><a href="https://www.georgebrown.ca/programs/digital-design-game-design-program-milantoronto-for-international-students-g205" target="_blank">바로가기</a></td>
		  </tr>
		  <tr>
		    <td>Barrie</td>
		    <td><img src="/static/img/old/coll/logo/Georgian.jpg" alt="로고"><h4>Georgian College</h4></td>
		    <td class="le">Graphic Design Production</td>
		    <td>2년</td>
		    <td><a href="https://www.georgiancollege.ca/academics/programs/graphic-design-production/" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>Toronto</td>
		    <td><img src="/static/img/old/coll/logo/Humber.jpg" alt="로고"><h4>Humber College</h4></td>
		    <td class="le">Advertising and Graphic Design </td>
		    <td>2년</td>
		    <td><a href="https://mediaarts.humber.ca/programs/advertising-and-graphic-design.html?_ga=2.155978812.640159068.1622675625-2092190031.1622675625" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>Hamilton</td>
		    <td><img src="/static/img/old/coll/logo/Mohawk.jpg" alt="로고"><h4>Mohawk College</h4></td>
		    <td class="le">Graphic Design </td>
		    <td>3년</td>
		    <td><a href="https://www.mohawkcollege.ca/programs/communication-arts/graphic-design-508" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>Toronto</td>
		    <td><img src="/static/img/old/coll/logo/Seneca.jpg" alt="로고"><h4>Seneca College</h4></td>
		    <td class="le">Interactive Media Design</td>
		    <td>2년</td>
		    <td><a href="https://www.senecacollege.ca/programs/fulltime/INM.html" target="_blank">바로가기</a></td>
	      </tr>
		  <tr class="bo">
		    <td>Toronto</td>
		    <td><img src="/static/img/old/coll/logo/Sheridan.jpg" alt="로고"><h4>Sheridan College</h4></td>
		    <td class="le">Digital Product Design</td>
		    <td>1년</td>
		    <td><a href="https://www.sheridancollege.ca/programs/digital-product-design" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
			<th rowspan="3" class="bo">BC</th>
			<td>Vancouver</td>
			<td><img src="/static/img/old/coll/logo/BCIT.jpg" alt="로고"><h4>BCIT<span>(The British Columbia Institute of Technology)</span></h4></td>
			<td class="le">New Media Design &amp; Web Development</td>
			<td>2년</td>
			<td><a href="https://www.bcit.ca/programs/new-media-design-and-web-development-diploma-full-time-6525dipma/" target="_blank">바로가기</a></td>
		  </tr>
		  <tr>
		    <td>Victoria</td>
		    <td><img src="/static/img/old/coll/logo/Camosun.jpg" alt="로고"><h4>Camosun College</h4></td>
		    <td class="le">Visual Arts, Diploma</td>
		    <td>2년</td>
		    <td><a href="https://camosun.ca/programs-courses/find-program/visual-arts-diploma" target="_blank">바로가기</a></td>
	      </tr>
		  <tr class="bo">
		    <td>Vancouver</td>
		    <td><img src="/static/img/old/coll/logo/Vancouver.jpg" alt="로고"><h4>Vancouver Community College</h4></td>
		    <td class="le">Jewellery Art and Design Diploma </td>
		    <td>2년</td>
		    <td><a href="https://www.vcc.ca/international/programs/program-areas/design/jewellery-art-and-design/" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <th rowspan="4" class="bo">AB</th>
		    <td>Edmonton</td>
		    <td><img src="/static/img/old/coll/logo/NAIT.jpg" alt="로고"><h4>NAIT</h4></td>
		    <td class="le">Interior Design Technology</td>
		    <td>2년</td>
		    <td><a href="https://www.nait.ca/programs/interior-design-technology?term=2021-fall" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>Calgary</td>
		    <td><img src="/static/img/old/coll/logo/SAIT.jpg" alt="로고"><h4>SAIT</h4></td>
		    <td class="le">New Media Production &amp; Design </td>
		    <td>2년</td>
		    <td><a href="https://www.sait.ca/programs-and-courses/diplomas/new-media-production-and-design" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>Lethbridge</td>
		    <td><img src="/static/img/old/coll/logo/Lethbridge.jpg" alt="로고"><h4>Lethbridge College</h4></td>
		    <td class="le">Interior Design Technology </td>
		    <td>2년</td>
		    <td><a href="https://lethbridgecollege.ca/programs/interior-design-technology" target="_blank">바로가기</a></td>
	      </tr>
		  <tr class="bo">
		    <td>Medicine Hat</td>
		    <td><img src="/static/img/old/coll/logo/Medicine.jpg" alt="로고"><h4>Medicine Hat College</h4></td>
		    <td class="le">Computer Aided Drafting and Design</td>
		    <td>1년</td>
		    <td><a href="https://www.mhc.ab.ca/ProgramsandCourses/Academic-Programs/Programs-of-Study/Computer-Aided-Drafting-and-Design" target="_blank">바로가기</a></td>
	      </tr>
		  <tr class="bo">
			<th>MA</th>
			<td>Winnipeg</td>
			<td><img src="/static/img/old/coll/logo/RedRiver.jpg" alt="로고"><h4>Red River College</h4></td>
			<td class="le">Digital Media Design-Interaction Design and Development</td>
			<td>1년</td>
			<td><a href="https://catalogue.rrc.ca/Programs/WPG/Fulltime/DIGIF-DP/Overview" target="_blank">바로가기</a></td>
		  </tr>
		  <tr>
			<th>NS</th>
			<td>Haifax</td>
			<td><img src="/static/img/old/coll/logo/NSCC.jpg" alt="로고"><h4>NSCC</h4></td>
			<td class="le">Graphic Design</td>
			<td>2년</td>
			<td><a href="https://www.nscc.ca/learning_programs/programs/plandescr.aspx?prg=GDES&pln=GRAPHICDES" target="_blank">바로가기</a></td>
		  </tr>
		</table>

	</div>
	<div id="coll12" style="display:none;">
		<h3 class="tab_tit">유아교육 분야</h3>
		<table>
			  <tr class="tbl_top">
				<th scope="col" width="50">주</th>
				<th scope="col" width="110">도시</th>
				<th scope="col" width="230">대학명</th>
				<th scope="col">전공</th>   
				<th scope="col" width="50">기간</th>
				<th scope="col" width="110">상세보기</th>
			  </tr>
		  <tr>
			<th rowspan="12" class="bo">ON</th>
			<td>Ottawa</td>
			<td><img src="/static/img/old/coll/logo/Algonquin.jpg" alt="로고"><h4>Algonquin College</h4></td>
			<td class="le">Early Childhood Education</td>
			<td>2년</td>
			<td><a href="https://www.georgebrown.ca/programs/early-childhood-education-program-c100" target="_blank">바로가기</a></td>
		  </tr>
		  <tr>
		    <td>Toronto</td>
			<td><img src="/static/img/old/coll/logo/Centennial.jpg" alt="로고"><h4>Centennial College</h4></td>
			<td class="le">Early Childhood Education (Progress Campus)</td>
			<td>2년</td>
			<td><a href="https://www.centennialcollege.ca/programs-courses/full-time/early-childhood-education-progress/" target="_blank">바로가기</a></td>
		  </tr>
		  <tr>
		    <td>Kitchener</td>
			<td><img src="/static/img/old/coll/logo/Conestoga.jpg" alt="로고"><h4>Conestoga College</h4></td>
			<td class="le">Early Childhood Education</td>
			<td>2년</td>
			<td><a href="https://www.conestogac.on.ca/fulltime/early-childhood-education" target="_blank">바로가기</a></td>
		  </tr>
		  <tr>
		    <td>London</td>
			<td><img src="/static/img/old/coll/logo/Fanshawe.jpg" alt="로고"><h4>Fanshawe College</h4></td>
			<td class="le">Early Childhood Education</td>
			<td>2년</td>
			<td><a href="https://www.fanshawec.ca/programs/ece1-early-childhood-education/next#" target="_blank">바로가기</a></td>
		  </tr>
		  <tr>
		    <td>Sarnia</td>
			<td><img src="/static/img/old/coll/logo/Lambton.jpg" alt="로고"><h4>Lambton College</h4></td>
			<td class="le">Early Childhood Education</td>
			<td>2년</td>
			<td><a href="https://www.lambtoncollege.ca/ecep/" target="_blank">바로가기</a></td>
		  </tr>
		  <tr>
		    <td>Toronto</td>
		    <td><img src="/static/img/old/coll/logo/George.jpg" alt="로고"><h4>George Brown College</h4></td>
		    <td class="le">Early Childhood Education</td>
		    <td>2년</td>
		    <td><a href="https://www.georgebrown.ca/programs/early-childhood-education-program-c100" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>Barrie</td>
		    <td><img src="/static/img/old/coll/logo/Georgian.jpg" alt="로고"><h4>Georgian College</h4></td>
		    <td class="le">Early Childhood Education</td>
		    <td>2년</td>
		    <td><a href="https://www.georgiancollege.ca/academics/programs/early-childhood-education/" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>Toronto</td>
		    <td><img src="/static/img/old/coll/logo/Humber.jpg" alt="로고"><h4>Humber College</h4></td>
		    <td class="le">Early Childhood Education</td>
		    <td>2년</td>
		    <td><a href="https://healthsciences.humber.ca/programs/early-childhood-education.html?_ga=2.39085860.640159068.1622675625-2092190031.1622675625" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>Hamilton</td>
		    <td><img src="/static/img/old/coll/logo/Mohawk.jpg" alt="로고"><h4>Mohawk College</h4></td>
		    <td class="le">Early Childhood Education Diploma</td>
		    <td>2년</td>
		    <td><a href="https://www.mohawkcollege.ca/programs/community-services/early-childhood-education-213" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>Welland</td>
		    <td><img src="/static/img/old/coll/logo/Niagara.jpg" alt="로고"><h4>Niagara College</h4></td>
		    <td class="le">Early Childhood Education</td>
		    <td>2년</td>
		    <td><a href="https://www.niagaracollege.ca/communityservices/program/ece-early-childhood-education/" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>Toronto</td>
		    <td><img src="/static/img/old/coll/logo/Seneca.jpg" alt="로고"><h4>Seneca College</h4></td>
		    <td class="le">Early Childhood Education</td>
		    <td>2년</td>
		    <td><a href="https://www.senecacollege.ca/programs/fulltime/ECE.html" target="_blank">바로가기</a></td>
	      </tr>
		  <tr class="bo">
		    <td>Toronto</td>
		    <td><img src="/static/img/old/coll/logo/Sheridan.jpg" alt="로고"><h4>Sheridan College</h4></td>
		    <td class="le">Early Childhood Education</td>
		    <td>2년</td>
		    <td><a href="https://www.sheridancollege.ca/programs/early-childhood-education" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
			<th rowspan="3" class="bo">BC</th>
			<td>Victoria</td>
			<td><img src="/static/img/old/coll/logo/Camosun.jpg" alt="로고"><h4>Camosun College</h4></td>
			<td class="le">Early Learning and Care, Diploma</td>
			<td>2년</td>
			<td><a href="https://camosun.ca/programs-courses/find-program/early-learning-and-care-diploma" target="_blank">바로가기</a></td>
		  </tr>
		  <tr>
		    <td>Castlegar</td>
		    <td><img src="/static/img/old/coll/logo/Selkirk.jpg" alt="로고"><h4>Selkirk College</h4></td>
		    <td class="le">Early Childhood Education</td>
		    <td>2년</td>
		    <td><a href="https://selkirk.ca/program/ecce" target="_blank">바로가기</a></td>
	      </tr>
		  <tr class="bo">
		    <td>Kelowna</td>
		    <td><img src="/static/img/old/coll/logo/Okanagan.jpg" alt="로고"><h4>Okanagan College</h4></td>
		    <td class="le">Early Childhood Education Diploma</td>
		    <td>2년</td>
		    <td><a href="https://www.okanagan.bc.ca/early-childhood-education-diploma" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <th rowspan="3" class="bo">AB</th>
		    <td>Calgary</td>
		    <td><img src="/static/img/old/coll/logo/BowValley.jpg" alt="로고"><h4>BowValley College</h4></td>
		    <td class="le">Early Childhood Education and Development Diploma</td>
		    <td>2년</td>
		    <td><a href="https://bowvalleycollege.ca/programs-courses/community-studies/early-childhood-education-and-development-diploma" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>Lethbridge</td>
		    <td><img src="/static/img/old/coll/logo/Lethbridge.jpg" alt="로고"><h4>Lethbridge College</h4></td>
		    <td class="le">Early Childhood Education</td>
		    <td>2년</td>
		    <td><a href="https://lethbridgecollege.ca/programs/early-childhood-education" target="_blank">바로가기</a></td>
	      </tr>
		  <tr class="bo">
		    <td>Medicine Hat</td>
		    <td><img src="/static/img/old/coll/logo/Medicine.jpg" alt="로고"><h4>Medicine Hat College</h4></td>
		    <td class="le">Early Learning and Child Care</td>
		    <td>2년</td>
		    <td><a href="https://www.mhc.ab.ca/ProgramsandCourses/Academic-Programs/Programs-of-Study/Early-Learning-and-Child-Care" target="_blank">바로가기</a></td>
	      </tr>
		  <tr class="bo">
			<th>MA</th>
			<td>Winnipeg</td>
			<td><img src="/static/img/old/coll/logo/RedRiver.jpg" alt="로고"><h4>Red River College</h4></td>
			<td class="le">Early Childhood Education</td>
			<td>2년</td>
			<td><a href="https://catalogue.rrc.ca/Programs/WPG/Fulltime/EARCF-DP" target="_blank">바로가기</a></td>
		  </tr>
		  <tr>
			<th>NS</th>
			<td>Haifax</td>
			<td><img src="/static/img/old/coll/logo/NSCC.jpg" alt="로고"><h4>NSCC</h4></td>
			<td class="le">Early Childhood Education</td>
			<td>2년</td>
			<td><a href="https://www.nscc.ca/learning_programs/programs/plandescr.aspx?prg=ECED&pln=EARCHIEDUC" target="_blank">바로가기</a></td>
		  </tr>
		</table>

	</div>
	<div id="coll13" style="display:none;">
		<h3 class="tab_tit">사회복지 분야</h3>
		<table>
			  <tr class="tbl_top">
				<th scope="col" width="50">주</th>
				<th scope="col" width="110">도시</th>
				<th scope="col" width="230">대학명</th>
				<th scope="col">전공</th>   
				<th scope="col" width="50">기간</th>
				<th scope="col" width="110">상세보기</th>
			  </tr>
		  <tr>
		    <th rowspan="12" class="bo">ON</th>
		    <td>Ottawa</td>
		    <td><img src="/static/img/old/coll/logo/Algonquin.jpg" alt="로고"><h4>Algonquin College</h4></td>
		    <td class="le">Social Service Worker</td>
		    <td>2년</td>
		    <td><a href="https://www.algonquincollege.com/healthandcommunity/program/social-service-worker/" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>Toronto</td>
		    <td><img src="/static/img/old/coll/logo/Centennial.jpg" alt="로고"><h4>Centennial College</h4></td>
		    <td class="le">Social Service Worker</td>
		    <td>2년</td>
		    <td><a href="https://www.centennialcollege.ca/programs-courses/full-time/social-service-worker/" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>Kitchener</td>
		    <td><img src="/static/img/old/coll/logo/Conestoga.jpg" alt="로고"><h4>Conestoga College</h4></td>
		    <td class="le">Social Service Worker</td>
		    <td>2년</td>
		    <td><a href="https://www.conestogac.on.ca/fulltime/social-service-worker" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>London</td>
		    <td><img src="/static/img/old/coll/logo/Fanshawe.jpg" alt="로고"><h4>Fanshawe College</h4></td>
		    <td class="le">Social Service Worker</td>
		    <td>2년</td>
		    <td><a href="https://www.fanshawec.ca/programs/ssw1-social-service-worker/next#" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>Sarnia</td>
		    <td><img src="/static/img/old/coll/logo/Lambton.jpg" alt="로고"><h4>Lambton College</h4></td>
		    <td class="le">Social Service Worker</td>
		    <td>2년</td>
		    <td><a href="https://www.lambtoncollege.ca/sswk/" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>Toronto</td>
		    <td><img src="/static/img/old/coll/logo/George.jpg" alt="로고"><h4>George Brown College</h4></td>
		    <td class="le">Social Service Worker</td>
		    <td>2년</td>
		    <td><a href="https://www.georgebrown.ca/programs/social-service-worker-program-c119" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>Barrie</td>
		    <td><img src="/static/img/old/coll/logo/Georgian.jpg" alt="로고"><h4>Georgian College</h4></td>
		    <td class="le">Social Service Worker</td>
		    <td>2년</td>
		    <td><a href="https://www.georgiancollege.ca/academics/programs/social-service-worker/" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>Toronto</td>
		    <td><img src="/static/img/old/coll/logo/Humber.jpg" alt="로고"><h4>Humber College</h4></td>
		    <td class="le">Social Service Worker</td>
		    <td>2년</td>
		    <td><a href="https://communityservices.humber.ca/programs/social-service-worker?_ga=2.39085860.640159068.1622675625-2092190031.1622675625" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>Hamilton</td>
		    <td><img src="/static/img/old/coll/logo/Mohawk.jpg" alt="로고"><h4>Mohawk College</h4></td>
		    <td class="le">Social Service Worker  Diploma</td>
		    <td>2년</td>
		    <td><a href="https://www.mohawkcollege.ca/programs/community-services/social-service-worker-215" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>Welland</td>
		    <td><img src="/static/img/old/coll/logo/Niagara.jpg" alt="로고"><h4>Niagara College</h4></td>
		    <td class="le">Social Service Worker</td>
		    <td>2년</td>
		    <td><a href="https://www.niagaracollege.ca/communityservices/program/social-service-worker/" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>Toronto</td>
		    <td><img src="/static/img/old/coll/logo/Seneca.jpg" alt="로고"><h4>Seneca College</h4></td>
		    <td class="le">Social Service Worker</td>
		    <td>2년</td>
		    <td><a href="https://www.senecacollege.ca/programs/fulltime/SSW.html" target="_blank">바로가기</a></td>
	      </tr>
		  <tr class="bo">
		    <td>Toronto</td>
		    <td><img src="/static/img/old/coll/logo/Sheridan.jpg" alt="로고"><h4>Sheridan College</h4></td>
		    <td class="le">Social Service Worker</td>
		    <td>2년</td>
		    <td><a href="https://www.sheridancollege.ca/programs/social-service-worker" target="_blank">바로가기</a></td>
	      </tr>
		  <tr class="bo">
		    <th>BC</th>
		    <td>Kelowna</td>
		    <td><img src="/static/img/old/coll/logo/Okanagan.jpg" alt="로고"><h4>Okanagan College</h4></td>
		    <td class="le">Human Service Work Diploma</td>
		    <td>2년</td>
		    <td><a href="https://www.okanagan.bc.ca/human-service-work-diploma" target="_blank">바로가기</a></td>
	      </tr>
		  <tr class="bo">
		    <th>AB</th>
		    <td>Medicine Hat</td>
		    <td><img src="/static/img/old/coll/logo/Medicine.jpg" alt="로고"><h4>Medicine Hat College</h4></td>
		    <td class="le">Social Work</td>
		    <td>2년</td>
		    <td><a href="https://www.mhc.ab.ca/ProgramsandCourses/Academic-Programs/Programs-of-Study/Social-Work" target="_blank">바로가기</a></td>
	      </tr>
		  <tr class="bo">
		    <th>MA</th>
		    <td>Winnipeg</td>
		    <td><img src="/static/img/old/coll/logo/RedRiver.jpg" alt="로고"><h4>Red River College</h4></td>
		    <td class="le">Disability and Community Support</td>
		    <td>2년</td>
		    <td><a href="https://catalogue.rrc.ca/Programs/WPG/Fulltime/DISCF-DP" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <th>NS</th>
		    <td>Haifax</td>
		    <td><img src="/static/img/old/coll/logo/NSCC.jpg" alt="로고"><h4>NSCC</h4></td>
		    <td class="le">Social Services</td>
		    <td>2년</td>
		    <td><a href="https://www.nscc.ca/learning_programs/programs/plandescr.aspx?prg=SOCS&pln=SOCSERVICE" target="_blank">바로가기</a></td>
	      </tr>
		</table>

	</div>
	<div id="coll14" style="display:none;">
		<h3 class="tab_tit">요식업 분야</h3>
       
		<table>
			  <tr class="tbl_top">
				<th scope="col" width="50">주</th>
				<th scope="col" width="110">도시</th>
				<th scope="col" width="230">대학명</th>
				<th scope="col">전공</th>   
				<th scope="col" width="50">기간</th>
				<th scope="col" width="110">상세보기</th>
			  </tr>
		  <tr>
		    <th rowspan="9" class="bo">ON</th>
		    <td>Ottawa</td>
		    <td><img src="/static/img/old/coll/logo/Algonquin.jpg" alt="로고"><h4>Algonquin College</h4></td>
		    <td class="le">Culinary Management</td>
		    <td>2년</td>
		    <td><a href="https://www.algonquincollege.com/hospitalityandtourism/program/culinary-management/" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>Toronto</td>
		    <td><img src="/static/img/old/coll/logo/Centennial.jpg" alt="로고"><h4>Centennial College</h4></td>
		    <td class="le">Culinary Management</td>
		    <td>2년</td>
		    <td><a href="https://www.centennialcollege.ca/programs-courses/full-time/culinary-management/" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>Kitchener</td>
		    <td><img src="/static/img/old/coll/logo/Conestoga.jpg" alt="로고"><h4>Conestoga College</h4></td>
		    <td class="le">Culinary Management (co-op)</td>
		    <td>2년</td>
		    <td><a href="https://www.conestogac.on.ca/fulltime/culinary-management-co-op" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>London</td>
		    <td><img src="/static/img/old/coll/logo/Fanshawe.jpg" alt="로고"><h4>Fanshawe College</h4></td>
		    <td class="le">Culinary Management</td>
		    <td>2년</td>
		    <td><a href="https://www.fanshawec.ca/programs/clm4-culinary-management/next#" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>Sarnia</td>
		    <td><img src="/static/img/old/coll/logo/Lambton.jpg" alt="로고"><h4>Lambton College</h4></td>
		    <td class="le">Culinary Management</td>
		    <td>1년</td>
		    <td><a href="https://www.lambtoncollege.ca/culn/" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>Toronto</td>
		    <td><img src="/static/img/old/coll/logo/George.jpg" alt="로고"><h4>George Brown College</h4></td>
		    <td class="le">Culinary Management</td>
		    <td>2년</td>
		    <td><a href="https://www.georgebrown.ca/programs/culinary-management-program-h100" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>Barrie</td>
		    <td><img src="/static/img/old/coll/logo/Georgian.jpg" alt="로고"><h4>Georgian College</h4></td>
		    <td class="le">Culinary Management</td>
		    <td>2년</td>
		    <td><a href="https://www.georgiancollege.ca/academics/programs/culinary-management/" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>Toronto</td>
		    <td><img src="/static/img/old/coll/logo/Humber.jpg" alt="로고"><h4>Humber College</h4></td>
		    <td class="le">Culinary Management</td>
		    <td>2년</td>
		    <td><a href="https://business.humber.ca/programs/culinary-management.html?_ga=2.181732384.640159068.1622675625-2092190031.1622675625" target="_blank">바로가기</a></td>
	      </tr>
		  <tr class="bo">
		    <td>Welland</td>
		    <td><img src="/static/img/old/coll/logo/Niagara.jpg" alt="로고"><h4>Niagara College</h4></td>
		    <td class="le">Culinary Management (co-op)</td>
		    <td>2년</td>
		    <td><a href="https://www.niagaracollege.ca/cfwi/program/culinary-management/" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <th rowspan="2" class="bo">BC</th>
		    <td>Vancouver</td>
		    <td><img src="/static/img/old/coll/logo/Vancouver.jpg" alt="로고"><h4>Vancouver Community College</h4></td>
		    <td class="le">Culinary Arts Diploma (International Cohort) </td>
		    <td>17개월</td>
		    <td><a href="https://www.vcc.ca/international/programs/programs-ie/culinary-arts--international/" target="_blank">바로가기</a></td>
	      </tr>
		  <tr class="bo">
		    <td>Kelowna</td>
		    <td><img src="/static/img/old/coll/logo/Okanagan.jpg" alt="로고"><h4>Okanagan College</h4></td>
		    <td class="le">Culinary Management Diploma </td>
		    <td>2년</td>
		    <td><a href="https://www.okanagan.bc.ca/culinary-management-diploma" target="_blank">바로가기</a></td>
	      </tr>
		  <tr class="bo">
		    <th>AB</th>
		    <td>Edmonton</td>
		    <td><img src="/static/img/old/coll/logo/NAIT.jpg" alt="로고"><h4>NAIT</h4></td>
		    <td class="le">Culinary Arts</td>
		    <td>2년</td>
		    <td><a href="https://www.nait.ca/programs/culinary-arts?term=2021-fall" target="_blank">바로가기</a></td>
	      </tr>
		  <tr class="bo">
		    <th>MA</th>
		    <td>Winnipeg</td>
		    <td><img src="/static/img/old/coll/logo/RedRiver.jpg" alt="로고"><h4>Red River College</h4></td>
		    <td class="le">Culinary Arts</td>
		    <td>2년</td>
		    <td><a href="https://catalogue.rrc.ca/Programs/WPG/Fulltime/CULAF-DP" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <th>NS</th>
		    <td>Haifax</td>
		    <td><img src="/static/img/old/coll/logo/NSCC.jpg" alt="로고"><h4>NSCC</h4></td>
		    <td class="le">Culinary Management</td>
		    <td>2년</td>
		    <td><a href="https://www.nscc.ca/learning_programs/programs/plandescr.aspx?prg=CULM&pln=CULMGMT" target="_blank">바로가기</a></td>
	      </tr>
		</table>

	</div>

	<div id="coll15" style="display:none;">
		<h3 class="tab_tit">호텔관광 분야</h3>
		<table>
			  <tr class="tbl_top">
				<th scope="col" width="50">주</th>
				<th scope="col" width="110">도시</th>
				<th scope="col" width="230">대학명</th>
				<th scope="col">전공</th>   
				<th scope="col" width="50">기간</th>
				<th scope="col" width="110">상세보기</th>
			  </tr>
		  <tr>
		    <th rowspan="10" class="bo">ON</th>
		    <td>Ottawa</td>
		    <td><img src="/static/img/old/coll/logo/Algonquin.jpg" alt="로고"><h4>Algonquin College</h4></td>
		    <td class="le">Hospitality - Hotel and Restaurant Operations Management</td>
		    <td>2년</td>
		    <td><a href="https://www.algonquincollege.com/hospitalityandtourism/program/hospitality-hotel-restaurant-operations-management/" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>Toronto</td>
		    <td><img src="/static/img/old/coll/logo/Centennial.jpg" alt="로고"><h4>Centennial College</h4></td>
		    <td class="le">Hospitality - Hotel Operations Management</td>
		    <td>2년</td>
		    <td><a href="https://www.centennialcollege.ca/programs-courses/full-time/hospitality-hotel-operations-management/" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>Kitchener</td>
		    <td><img src="/static/img/old/coll/logo/Conestoga.jpg" alt="로고"><h4>Conestoga College</h4></td>
		    <td class="le">Food and Beverage Management - Hotel and Restaurant Operations (Option Co-op) </td>
		    <td>2년</td>
		    <td><a href="https://www.conestogac.on.ca/fulltime/food-and-beverage-management-hotel-and-restaurant-operations" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>London</td>
		    <td><img src="/static/img/old/coll/logo/Fanshawe.jpg" alt="로고"><h4>Fanshawe College</h4></td>
		    <td class="le">Tourism and Travel</td>
		    <td>2년</td>
		    <td><a href="https://www.fanshawec.ca/programs/ttc6-tourism-travel/next#" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>Sarnia</td>
		    <td><img src="/static/img/old/coll/logo/Lambton.jpg" alt="로고"><h4>Lambton College</h4></td>
		    <td class="le">Hospitality Management</td>
		    <td>2년</td>
		    <td><a href="https://www.lambtoncollege.ca/custom/LambtonApps/Programs/International.aspx?id=2147503866" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>Toronto</td>
		    <td><img src="/static/img/old/coll/logo/George.jpg" alt="로고"><h4>George Brown College</h4></td>
		    <td class="le">Hospitality - Hotel Operations Management</td>
		    <td>2년</td>
		    <td><a href="https://www.georgebrown.ca/programs/hospitality-hotel-operations-management-program-h133" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>Barrie</td>
		    <td><img src="/static/img/old/coll/logo/Georgian.jpg" alt="로고"><h4>Georgian College</h4></td>
		    <td class="le">Hospitality - Hotel and Resort Operations Management </td>
		    <td>2년</td>
		    <td><a href="https://www.georgiancollege.ca/academics/programs/hospitality-hotel-resort-operations-management/" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>Toronto</td>
		    <td><img src="/static/img/old/coll/logo/Humber.jpg" alt="로고"><h4>Humber College</h4></td>
		    <td class="le">Hospitality - Hotel and Restaurant Operations Management</td>
		    <td>2년</td>
		    <td><a href="https://business.humber.ca/programs/hospitality-hotel-and-restaurant-operations-management.html?_ga=2.146482227.640159068.1622675625-2092190031.1622675625" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>Welland</td>
		    <td><img src="/static/img/old/coll/logo/Niagara.jpg" alt="로고"><h4>Niagara College</h4></td>
		    <td class="le">Hospitality - Hotel and Restaurant Operations (Co-op)</td>
		    <td>2년</td>
		    <td><a href="https://www.niagaracollege.ca/hospitalitytourismsport/program/hotel-restaurant-operations-coop/" target="_blank">바로가기</a></td>
	      </tr>
		  <tr class="bo">
		    <td>Toronto</td>
		    <td><img src="/static/img/old/coll/logo/Seneca.jpg" alt="로고"><h4>Seneca College</h4></td>
		    <td class="le">Hospitality - Hotel &amp; Restaurant Services Management </td>
		    <td>2년</td>
		    <td><a href="https://www.senecacollege.ca/programs/fulltime/HTM.html" target="_blank">바로가기</a></td>
	      </tr>
		  <tr class="bo">
		    <th>BC</th>
		    <td>Vancouver</td>
		    <td><img src="/static/img/old/coll/logo/Vancouver.jpg" alt="로고"><h4>Vancouver Community College</h4></td>
		    <td class="le">Hospitality Management</td>
		    <td>2년</td>
		    <td><a href="https://www.vcc.ca/international/programs/programs-ie/hospitality-management-diploma/" target="_blank">바로가기</a></td>
	      </tr>
		  <tr class="bo">
		    <th>AB</th>
		    <td>Calgary</td>
		    <td><img src="/static/img/old/coll/logo/SAIT.jpg" alt="로고"><h4>SAIT</h4></td>
		    <td class="le">Hospitality and Tourism Management (2021 new)</td>
		    <td>2년</td>
		    <td><a href="https://www.sait.ca/programs-and-courses/diplomas/hospitality-and-tourism-management" target="_blank">바로가기</a></td>
	      </tr>
		  <tr class="bo">
		    <th>MA</th>
		    <td>Winnipeg</td>
		    <td><img src="/static/img/old/coll/logo/RedRiver.jpg" alt="로고"><h4>Red River College</h4></td>
		    <td class="le">Hospitality and Tourism Management</td>
		    <td>2년</td>
		    <td><a href="https://catalogue.rrc.ca/Programs/WPG/Fulltime/HOSTF-DP" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <th>NS</th>
		    <td>Haifax</td>
		    <td><img src="/static/img/old/coll/logo/NSCC.jpg" alt="로고"><h4>NSCC</h4></td>
		    <td class="le">Business - Tourism<br /></td>
		    <td>2년</td>
		    <td><a href="https://www.nscc.ca/learning_programs/programs/plandescr.aspx?prg=BSTM&pln=BUSNTOUR" target="_blank">바로가기</a></td>
	      </tr>
		</table>
	</div>

	<div id="coll16" style="display:none;">
		<h3 class="tab_tit">경영사무 분야</h3>
		<table>
			  <tr class="tbl_top">
				<th scope="col" width="50">주</th>
				<th scope="col" width="110">도시</th>
				<th scope="col" width="230">대학명</th>
				<th scope="col">전공</th>   
				<th scope="col" width="50">기간</th>
				<th scope="col" width="110">상세보기</th>
			  </tr>
		  <tr>
			<th rowspan="11" class="bo">ON</th>
			<td>Ottawa</td>
			<td><img src="/static/img/old/coll/logo/Algonquin.jpg" alt="로고"><h4>Algonquin College</h4></td>
			<td class="le">Business - Accounting</td>
			<td>2년</td>
			<td><a href="https://www.algonquincollege.com/business/program/business-accounting/" target="_blank">바로가기</a></td>
		  </tr>
		  <tr>
		    <td>Toronto</td>
			<td><img src="/static/img/old/coll/logo/Centennial.jpg" alt="로고"><h4>Centennial College</h4></td>
			<td class="le">Business</td>
			<td>2년</td>
			<td><a href="https://www.centennialcollege.ca/programs-courses/full-time/business/" target="_blank">바로가기</a></td>
		  </tr>
		  <tr>
		    <td>Kitchener</td>
			<td><img src="/static/img/old/coll/logo/Conestoga.jpg" alt="로고"><h4>Conestoga College</h4></td>
			<td class="le">Business</td>
			<td>2년</td>
			<td><a href="https://www.conestogac.on.ca/fulltime/business" target="_blank">바로가기</a></td>
		  </tr>
		  <tr>
		    <td>London</td>
			<td><img src="/static/img/old/coll/logo/Fanshawe.jpg" alt="로고"><h4>Fanshawe College</h4></td>
			<td class="le">Business</td>
			<td>2년</td>
			<td><a href="https://www.fanshawec.ca/programs/bus1-business/next#" target="_blank">바로가기</a></td>
		  </tr>
		  <tr>
		    <td>Sarnia</td>
			<td><img src="/static/img/old/coll/logo/Lambton.jpg" alt="로고"><h4>Lambton College</h4></td>
			<td class="le">Business Management </td>
			<td>2년</td>
			<td><a href="https://www.lambtoncollege.ca/custom/LambtonApps/Programs/International.aspx?id=2147503796" target="_blank">바로가기</a></td>
		  </tr>
		  <tr>
		    <td>Toronto</td>
		    <td><img src="/static/img/old/coll/logo/George.jpg" alt="로고"><h4>George Brown College</h4></td>
		    <td class="le">Business - Accounting Program </td>
		    <td>2년</td>
		    <td><a href="https://www.georgebrown.ca/programs/business-accounting-program-b103" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>Barrie</td>
		    <td><img src="/static/img/old/coll/logo/Georgian.jpg" alt="로고"><h4>Georgian College</h4></td>
		    <td class="le">Business and Management</td>
		    <td>2년</td>
		    <td><a href="https://www.georgiancollege.ca/academics/academic-areas/business-and-management/" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>Toronto</td>
		    <td><img src="/static/img/old/coll/logo/Humber.jpg" alt="로고"><h4>Humber College</h4></td>
		    <td class="le">Business Management </td>
		    <td>2년</td>
		    <td><a href="https://business.humber.ca/programs/business-management.html" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>Hamilton</td>
		    <td><img src="/static/img/old/coll/logo/Mohawk.jpg" alt="로고"><h4>Mohawk College</h4></td>
		    <td class="le">Business - General </td>
		    <td>2년</td>
		    <td><a href="https://www.mohawkcollege.ca/programs/business/business-general-320" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>Welland</td>
		    <td><img src="/static/img/old/coll/logo/Niagara.jpg" alt="로고"><h4>Niagara College</h4></td>
		    <td class="le">Business - General </td>
		    <td>2년</td>
		    <td><a href="https://www.niagaracollege.ca/business/program/business-general/" target="_blank">바로가기</a></td>
	      </tr>
		  <tr class="bo">
		    <td>Toronto</td>
		    <td><img src="/static/img/old/coll/logo/Seneca.jpg" alt="로고"><h4>Seneca College</h4></td>
		    <td class="le">Business - Insurance </td>
		    <td>2년</td>
		    <td><a href="https://www.senecacollege.ca/programs/fulltime/BIN.html" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
			<th rowspan="2" class="bo">BC</th>
			<td>Vancouver</td>
			<td><img src="/static/img/old/coll/logo/BCIT.jpg" alt="로고"><h4>BCIT<span>(The British Columbia Institute of Technology)</span></h4></td>
			<td class="le">Business Management </td>
			<td>2년</td>
			<td><a href="https://www.bcit.ca/programs/business-management-diploma-full-time-6245diplt/" target="_blank">바로가기</a></td>
		  </tr>
		  <tr class="bo">
		    <td>Victoria</td>
		    <td><img src="/static/img/old/coll/logo/Camosun.jpg" alt="로고"><h4>Camosun College</h4></td>
		    <td class="le">Business Administration, Diploma - General Management Option</td>
		    <td>1년</td>
		    <td><a href="https://camosun.ca/programs-courses/find-program/business-administration-diploma-general-management-option" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <th rowspan="4" class="bo">AB</th>
		    <td>Edmonton</td>
		    <td><img src="/static/img/old/coll/logo/NAIT.jpg" alt="로고"><h4>NAIT</h4></td>
		    <td class="le">Business Administration - Management</td>
		    <td>2년</td>
		    <td><a href="https://www.nait.ca/programs/business-administration-management?term=2021-fall" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>Calgary</td>
		    <td><img src="/static/img/old/coll/logo/SAIT.jpg" alt="로고"><h4>SAIT</h4></td>
		    <td class="le">Business Administration </td>
		    <td>2년</td>
		    <td><a href="https://www.sait.ca/programs-and-courses/diplomas/business-administration-full-time" target="_blank">바로가기</a></td>
	      </tr>
		  <tr>
		    <td>Lethbridge</td>
		    <td><img src="/static/img/old/coll/logo/Lethbridge.jpg" alt="로고"><h4>Lethbridge College</h4></td>
		    <td class="le">Business Administration </td>
		    <td>2년</td>
		    <td><a href="https://lethbridgecollege.ca/programs/business-administration" target="_blank">바로가기</a></td>
	      </tr>
		  <tr class="bo">
		    <td>Medicine Hat</td>
		    <td><img src="/static/img/old/coll/logo/Medicine.jpg" alt="로고"><h4>Medicine Hat College</h4></td>
		    <td class="le">Business Administration </td>
		    <td>2년</td>
		    <td><a href="https://www.mhc.ab.ca/ProgramsandCourses/Academic-Programs/Programs-of-Study/Business-Administration" target="_blank">바로가기</a></td>
	      </tr>
		  <tr class="bo">
			<th>MA</th>
			<td>Winnipeg</td>
			<td><img src="/static/img/old/coll/logo/RedRiver.jpg" alt="로고"><h4>Red River College</h4></td>
			<td class="le">Business Administration </td>
			<td>2년</td>
			<td><a href="https://catalogue.rrc.ca/Programs/WPG/Fulltime/BUADF-NA" target="_blank">바로가기</a></td>
		  </tr>
		  <tr>
			<th>NS</th>
			<td>Haifax</td>
			<td><img src="/static/img/old/coll/logo/NSCC.jpg" alt="로고"><h4>NSCC</h4></td>
			<td class="le">Business Administration </td>
			<td>2년</td>
			<td><a href="https://www.nscc.ca/learning_programs/programs/plandescr.aspx?prg=BSAD&pln=BSAD-YR1" target="_blank">바로가기</a></td>
		  </tr>
		</table>
	</div>
</div><!--coll_con-->



	


</div><!--sb_con_all-->

<!--<div class="sc_mid_bnn_img ca05"></div>-->
</div><!--container-->

<?php
include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/footer_temp.php');
?>

<script language=javascript>
	function veiw_tab2(d){
		hide_tab2();
		document.getElementById(d).style.display="block";
		for(var r=1; r<17; r++){
			$(".coll_tab .b"+r).removeClass("on");
		}
		if(d=='coll1'){
			k=1;
		}else if(d=='coll2'){
			k=2;
		}else if(d=='coll3'){
			k=3;
		}else if(d=='coll4'){
			k=4;
		}else if(d=='coll5'){
			k=5;
		}else if(d=='coll6'){
			k=6;
		}else if(d=='coll7'){
			k=7;
		}else if(d=='coll8'){
			k=8;
		}else if(d=='coll9'){
			k=9;
		}else if(d=='coll10'){
			k=10;
		}else if(d=='coll11'){
			k=11;
		}else if(d=='coll12'){
			k=12;
		}else if(d=='coll13'){
			k=13;
		}else if(d=='coll14'){
			k=14;
		}else if(d=='coll15'){
			k=15;
		}else if(d=='coll16'){
			k=16;
		}
		$(".coll_tab .b"+k).addClass("on");
	}
	function hide_tab2(){
		document.getElementById("coll1").style.display="none";
		document.getElementById("coll2").style.display="none";
		document.getElementById("coll3").style.display="none";
		document.getElementById("coll4").style.display="none";
		document.getElementById("coll5").style.display="none";
		document.getElementById("coll6").style.display="none";
		document.getElementById("coll7").style.display="none";
		document.getElementById("coll8").style.display="none";
		document.getElementById("coll9").style.display="none";
		document.getElementById("coll10").style.display="none";
		document.getElementById("coll11").style.display="none";
		document.getElementById("coll12").style.display="none";
		document.getElementById("coll13").style.display="none";
		document.getElementById("coll14").style.display="none";
		document.getElementById("coll15").style.display="none";
		document.getElementById("coll16").style.display="none";
	}
</script>
