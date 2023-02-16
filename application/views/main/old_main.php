<?php
include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/old/head_ca.php');
//include_once($_SERVER['DOCUMENT_ROOT']."/inc/blog_list.php");
?>


<link href="/static/css/old/main.css" rel="stylesheet" >
<div class="main_top">  
		<div id="slide_wrap">
		<ul style="display: none;">
			<li data-img="/static/img/old/main/ca_main_slider01.jpg">
				<div class="main_tx_all">
					<div class="main_tx_box">
						<div class="main_text">
						<div class="mainT">
							영어권 유학 컨설팅 전문 기관으로<br>많은 고객들과 함께 하였습니다.
						</div>
							<ul>
								<li><p>누적 수속 학생수</p><span>21,000명</span></li>
								<li><p>누적 방문고객</p><span>39,052명</span></li>
								<li><p>해외교육기관제휴 </p><span>120개</span></li>
							</ul>
						</div>
					</div>


					<div class="blackbox">
						<div class="bl_vtit">
							<div class="bl_vtit1">전세계 <b>대학 입학 현황</b> </div>
							<p class="bl_vtit3">최근 5년간 컨설턴트 기준</p>
						</div>
						<ul>
							<li><div>김*희님</div><p>Fanshawe College 입학을 축하드립니다</p><span>23년 9월 학기</span> </li>
							<li><div>박*윤님</div><p>Kingston University, London 입학을 축하드립니다</p><span>23년 9월 학기</span> </li>
							<li><div>윤*이님</div><p>Fanshawe College 입학을 축하드립니다</p><span>23년 9월 학기</span> </li>
							<li><div>김*수님</div><p>Fanshawe College 입학을 축하드립니다</p><span>23년 9월 학기</span> </li>
							<li><div>김*혜님</div><p>Fanshawe College 입학을 축하드립니다</p><span>22년 9월 학기</span> </li>
							<li><div>윤*정님</div><p>Fanshawe College 입학을 축하드립니다</p><span>22년 9월 학기</span> </li>
							<li><div>김*님</div><p>Fanshawe College 입학을 축하드립니다</p><span>21년 9월 학기</span> </li>
							<li><div>김*혜님</div><p>Fanshawe College 입학을 축하드립니다</p><span>21년 9월 학기</span> </li>
							<li><div>김*희님</div><p>Fanshawe College 입학을 축하드립니다</p><span>21년 9월 학기</span> </li>
						</ul>
					</div>
				</div>
			</li>
			<li data-img="/static/img/old/main/ca_main_slider02.jpg">
					<div class="mainText">
						<div>
							<span>18년간의 영어권 유학 컨설팅</span>
							<span>많은 고객과 해외 교육기관이 </span>
							<span>함께 했습니다</span>
						</div>
					</div>
			</li>
		</ul>
	</div><!--slide_wrap-->
</div>



<div id="main">

<section class="main_con1">
	<div class="mainc1 bx1">
		<div class="mc1box bx1">

			<div class="swiper c1Swiper">
			  <div class="swiper-wrapper">

				<div class="swiper-slide">
					<ul class="mc1_im_ul">
					<?
					for($i=0; $i<count($result); $i++){
						$row1 = $result[$i];
						$img_file = explode("|",$row1->filename_real1);
					?>
						<li><a href="/ca/board/<?=$row1->idx?>">
							<div class="tx">
								<p class="tit"><?=$row1->title?></p>
								<div><?=strip_tags($row1->contents)?></div>
							</div>
							<div class="im"><img src="/static/img/old/data/board/<?=$img_file[0]?>"></div></a>
						</li>	
						<?}?>
					</ul>		
				</div><!--swiper-slide-->
			  
				<div class="swiper-slide">
					<ul class="mc1_im_ul">
					<?
					for($i=0; $i<count($result2); $i++){
						$row2 = $result2[$i];
						$img_file = explode("|",$row2->filename_real1);
					?>
						<li><a href="/ca/board/<?=$row2->idx?>">
							<div class="tx">
								<p class="tit"><?=$row2->title?></p>
								<div><?=strip_tags($row2->contents)?></div>
								<!--<span>
									조회 <b>103</b> 
									댓글 <b>8</b>
								</span>-->
							</div>
							<div class="im"><img src="/static/img/old/data/board/<?=$img_file[0]?>"></div></a>
						</li>
						<?}?>
					</ul>		
				</div><!--swiper-slide-->
			  </div>
			  <div class="swiper-pagination"></div>
			</div>


		</div>
		<div class="mc1box bx2">
			<h2 class="main_tit">전공별 대학</h2>
			<ul class="mc1_ic_ul scrollbar">
				<li><a href="/ca/college/major"><i class="fas fa-desktop"></i><p>Computer Science & Engineering</p></a></li>
				<li><a href="/ca/college/major"><i class="fas fa-wrench"></i><p>Mechanical Engineering</p></a></li>
				<li><a href="/ca/college/major"><i class="fas fa-stethoscope"></i><p>Health & Medical Science</p></a></li>
				<li><a href="/ca/college/major"><i class="fas fa-briefcase"></i><p>Business & Commerce</p></a></li>
				<li><a href="/ca/college/major"><i class="fas fa-truck-pickup"></i><p>Architectural Engineering</p></a></li>
				<li><a href="/ca/college/major"><i class="fas fa-palette"></i><p>Art & Design</p></a></li>
				<li><a href="/ca/college/major"><i class="fas fa-share-alt"></i><p>Social Scinece</p></a></li>
				<li><a href="/ca/college/major"><i class="fas fa-vials"></i><p>Biomedical Enginerring</p></a></li>
				<li><a href="/ca/college/major"><i class="far fa-newspaper"></i><p>Journlism</p></a></li>
				<li><a href="/ca/college/major"><i class="fas fa-superscript"></i><p>Mathmatics</p></a></li>
				<li><a href="/ca/college/major"><i class="fas fa-space-shuttle"></i><p>Aerospace Engineering</p></a></li>
				<li><a href="/ca/college/major"><i class="fas fa-user-astronaut"></i><p>Pilot Training</p></a></li>
				<li><a href="/ca/college/major"><i class="far fa-chart-bar"></i><p>Statistics</p></a></li>
				<li><a href="/ca/college/major"><i class="fas fa-book-medical"></i><p>Psychology &Neuroscience</p></a></li>
				<li><a href="/ca/college/major"><i class="fas fa-school"></i><p>Education</p></a></li>
				<li><a href="/ca/college/major"><i class="fas fa-user-nurse"></i><p>Nursing</p></a></li>
			</ul>
		</div>
	</div><!--mainc1-->
</section>

<section class="main_con2">
	<h2 class="main_tit">라임에듀 추천 프로그램</h2>
	<div class="main_sl_box">
		<div class="swiper c2Swiper">
		  <div class="swiper-wrapper">
			<div class="swiper-slide">
				<a href="/ca/bod/ridely">
					<div>
						<img src="/static/img/old/prog_ca01_new.jpg" alt="">
					</div>
				</a>
				<a href="/ca/family">
					<div>
						<img src="/static/img/old/prog_ca05_new.jpg" alt="">
					</div>
				</a>
			</div>
			<div class="swiper-slide">
				<a href="/ca/mng/bc">
					<div>
						<img src="/static/img/old/prog_ca02_new.jpg" alt="">
					</div>
				</a>
				<div>
					<a href="/ca/intl/bicc">
						<img src="/static/img/old/prog_ca06_new.jpg" alt="">
					</a>
				</div>
			</div>
			<div class="swiper-slide">
				<div>
					<a href="/ca/gdn">
						<img src="/static/img/old/prog_ca03_new.jpg" alt="">
					</a>
				</div>
				<div>
					<a href="/ca/college/major">
						<img src="/static/img/old/prog_ca07_new.jpg" alt="">
					</a>
				</div>
			</div>
			<div class="swiper-slide">
				<div>
					<a href="/ca/publ/york_catholic">
						<img src="/static/img/old/prog_ca04_new.jpg" alt="">
					</a>
				</div>
				<div>
					<a href="/ca/campPage">
						<img src="/static/img/old/prog_ca08_new.jpg" alt="">
					</a>
				</div>
			</div>
		  </div>
		   <div class="swiper-pagination"></div>
		</div>
	</div>
</section>

<section class="main_con3">
	<h2 class="main_tit">학생들이 말하는 후기</h2>
    
	<div class="swiper c3Swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><a href="/static/img/old/after_ka_1.jpg" target="_blank"><img src="/static/img/old/after_ka_1.jpg"></a></div>
        <div class="swiper-slide"><a href="/static/img/old/after_ka_2.jpg" target="_blank"><img src="/static/img/old/after_ka_2.jpg"></a></div>
        <div class="swiper-slide"><a href="/static/img/old/after_ka_3.jpg" target="_blank"><img src="/static/img/old/after_ka_3.jpg"></a></div>
        <div class="swiper-slide"><a href="/static/img/old/after_ka_4.jpg" target="_blank"><img src="/static/img/old/after_ka_4.jpg"></a></div>
        <div class="swiper-slide"><a href="/static/img/old/after_ka_5.jpg" target="_blank"><img src="/static/img/old/after_ka_5.jpg"></a></div>
		<div class="swiper-slide"><a href="/static/img/old/after_ka_7.jpg" target="_blank"><img src="/static/img/old/after_ka_7.jpg"></a></div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
</section>

<section class="main_con4"><h2 class="main_tit">캐나다 지역별 추천 대학</h2>
	<div class="main_map ca">
		<div class="map_img"></div>
		<div class="map_sch_list">
			<div class="tab on">
				<h3 class="tit1">British</h3>
				<div class="sch_list br">
					<p class="ntit">British Columbia</p>
					<ul class="scrollbar">
						<li>Alexander College</li>
						<li>British Columbia Institute of Technology</li>
						<li>Camosun College</li>
						<li>Canadian College</li>
						<li>Capilano University</li>
						<li>Coast Mountain College</li>
						<li>College of New Caledonia</li>
						<li>College of the Rockies</li>
						<li>Columbia College</li>
						<li>Create Career College</li>
						<li>Douglas College</li>
						<li>Educacentre College (French language institution)</li>
						<li>Emily Carr University of Art and Design</li>
						<li>Eton College, Vancouver</li>
						<li>First College</li>
						<li>Kwantlen Polytechnic University</li>
						<li>Langara College</li>
						<li>North Island College</li>
						<li>Northern Lights College</li>
						<li>Okanagan College</li>
						<li>Royal Roads University</li>
						<li>Royal Roads University</li>
						<li>Selkirk College</li>
						<li>Simon Fraser University</li>
						<li>Sprott Shaw College</li>
						<li>Thompson Rivers University</li>
						<li>University of British Columbia</li>
						<li>University of Northern British Columbia</li>
						<li>University of the Fraser Valley</li>
						<li>University of Victoria</li>
						<li>Vancouver Community College</li>
						<li>Vancouver Institute of Media Arts (VanArts)</li>
						<li>Vancouver Island University</li>
					</ul>
				</div>
			</div>

			<div class="tab">
				<h3 class="tit2">Alberta</h3>
				<div class="sch_list ab">
					<p class="ntit">Alberta</p>
					<ul class="scrollbar">
						<li>Ambrose University	</li>
						<li>Bow Valley College	</li>
						<li>Burman University	</li>
						<li>Concordia University of Edmonton	</li>
						<li>Grande Prairie Regional College	</li>
						<li>Keyano College	</li>
						<li>Lakeland College	</li>
						<li>MacEwan University	</li>
						<li>Medicine Hat College	</li>
						<li>Mount Royal University	</li>
						<li>NorQuest College	</li>
						<li>Northern Alberta Institute of Technology	</li>
						<li>Northern Lakes College	</li>
						<li>Red Deer College	</li>
						<li>SAIT Polytechnic	Calgary</li>
						<li>St Mary's University	</li>
						<li>The King’s University	</li>
						<li>University of Alberta	</li>
						<li>University of Calgary</li>	
						<li>University of Lethbridge</li>
					</ul>
				</div>
			</div>

			<div class="tab">
				<h3 class="tit3">Ontario</h3>
				<div class="sch_list on">
					<p class="ntit">Ontario</p>
					<ul class="scrollbar">
						<li>Algoma University</li>
						<li>Algonquin College</li>
						<li>Brock University</li>
						<li>Cambrian College</li>
						<li>Canadore College</li>
						<li>Carleton University</li>
						<li>Centennial College</li>
						<li>Collège Boréal</li>
						<li>Conestoga College</li>
						<li>Confederation College</li>
						<li>Durham College</li>
						<li>Fanshawe College</li>
						<li>Fleming College</li>
						<li>George Brown College</li>
						<li>Georgian College</li>
						<li>Humber College</li>
						<li>Lakehead University</li>
						<li>Lambton College</li>
						<li>Laurentian University </li>
						<li>Loyalist College</li>
						<li>McMaster University</li>
						<li>Mohawk College</li>
						<li>Niagara College</li>
						<li>Nipissing University</li>
						<li>Northern College</li>
						<li>Ontario College of Art and Design University</li>
						<li>Ontario Tech University</li>
						<li>Queen's University at Kingston</li>
						<li>Royal Military College</li>
						<li>Royal Military College of Canada </li>
						<li>Ryerson University</li>
						<li>Sault College</li>
						<li>Seneca College</li>
						<li>Sheridan College</li>
						<li>Springfield College Brampton</li>
						<li>St. Clair College</li>
						<li>St. Lawrence College</li>
						<li>Trent University</li>
						<li>University of Guelph</li>
						<li>University of Ottawa </li>
						<li>University of Toronto</li>
						<li>University of Waterloo</li>
						<li>University of Western Ontario</li>
						<li>University of Windsor</li>
						<li>Wilfrid Laurier University</li>
						<li>York University</li>
					</ul>
				</div>
			</div>

			<div class="tab">
				<h3 class="tit4">Quebec</h3>
				<div class="sch_list qc">
					<p class="ntit">Quebec</p>
					<ul class="scrollbar">
						<li>Bishop's University</li>
						<li>Concordia University</li>
						<li>McGill University</li>
						<li>Université de Montréal</li>
						<li>Université de Sherbrooke</li>
						<li>Université Laval</li>
					</ul>
				</div>
			</div>

		</div><!---->
	</div>
</section>
</div><!--main-->

<?php
include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/footer_temp.php');
?>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.1.0/swiper-bundle.min.js'></script>
<script>
	$(".map_sch_list .tab h3").click(function(){
		$(".map_sch_list .tab").removeClass("on");
		$(this).parent(".tab").addClass("on");
	});

</script>
<script>//게시글
  var swiper = new Swiper(".c1Swiper", {  
    loop: true,
	pagination: {
	  el: ".swiper-pagination",
	  dynamicBullets: true,
	},
  });
//추천프로그램



  var swiper = new Swiper(".c2Swiper", {
	  loop:'true',
	  autoplay : {  
		  delay : 4000,   
		  disableOnInteraction : false, 
		},
	  slidesPerView: 2,
	  spaceBetween: 10, 
	  pagination: {
		  el: ".swiper-pagination",
		  clickable: true,
		},
		//반응형 조건 속성
		  breakpoints: { 
			  640: { 
				slidesPerView: 3, 
			  },
			  1020: {
				loop:false,
			   slidesPerView: 4,
			   spaceBetween: 25, 
				   touchRatio: 0 
			  },
		  },

});



//후기
  var swiper = new Swiper(".c3Swiper", {

        slidesPerView: 2,
        spaceBetween: 20,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },

		  breakpoints: { 
			  1020: {
			   slidesPerView: 4,
			   spaceBetween: 30, 
				   touchRatio: 0 
			  },
		  },
		   observer: true,

      });

</script>

<script src="/static/js/old/lc-micro-slider.js" type="text/javascript"></script>
    <script type="text/javascript">
    const timing = 8000;
        
        
    new lc_micro_slider('#slide_wrap', {
        fixed_slide_type    : 'image',  
        slide_fx            : 'fade',
        animation_time	    : 2000,
        slideshow_time	    : timing,
        nav_arrows          : true,  
        slideshow_cmd       : true,
        autoplay            : true,
        pause_on_hover      : true,
        addit_classes       : ['lcms_default_theme']    
    });
        
        
        
    //// ken burns effect
    let ken_burns_intval,
        curr_comb = '';
        
    document.getElementById('slide_wrap').addEventListener('lcms_slide_shown', (e) => {
        const $subj = e.target,
              slide_index = e.detail.slide_index;

        if(ken_burns_intval) {
            clearInterval(ken_burns_intval);    
        }
        ken_burns_intval = setInterval(() => {
            ken_burns_fx($subj, slide_index);
        }, timing);    

        ken_burns_fx($subj, slide_index);
    });
        
    const ken_burns_fx = function($subj, slide_index) {
              vert_opts     = ["top", "bottom"],
              horiz_opts    = ["left", "right"];
        
        if(document.getElementById('lcms_kenburns')) {
            document.getElementById('lcms_kenburns').remove();        
        }

        const vert_rule  = vert_opts[Math.floor(Math.random() * vert_opts.length)], 
              horiz_rule = horiz_opts[Math.floor(Math.random() * horiz_opts.length)];
              
        // force movement
        if(curr_comb == vert_rule+horiz_rule) {
            ken_burns_fx($subj, slide_index);      
        }
        
        
        let animation = {
            top: 0,
            right: 0,
            bottom: 0,
            left: 0
        };
        animation[ vert_rule ] = '-20%';
        animation[ horiz_rule ] = '-20%';

        document.querySelector('#slide_wrap .lcms_slide[data-index="'+ slide_index +'"] .lcms_bg').animate(
            animation,
            {
                duration: timing,
                iterations: 1,
                fill: 'forwards'
            }
        );       
    };  
    </script>
