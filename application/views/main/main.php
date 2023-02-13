<?php
include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/head.php');
//include_once($_SERVER['DOCUMENT_ROOT']."/inc/blog_list.php");
?>
<body>
    <script type="text/javascript">
        function change_nation(tab,nation){
            if(tab == "5"){

            }else if(tab == "6"){
                $(".banr_lists").hide();
                $("#banr_list_"+nation).show();
            }else if(tab == "7"){
				$(".natio_btn_area").hide();
				$("#btn_"+nation+"_area").show();
				$(".banr_lists").hide();
				$("#banr_list_"+nation).show();
            }
        }

        $('.natio_btn_area').each(function() {

			var nowImg = $(this).find('img');  //호버한 부분의 img파일 찾기
			var srcName = nowImg.attr('src');  //호버한 부분의 이미지 주소값 src가지고오기
			var newSrc = srcName.substring(0, srcName.lastIndexOf('.'));
			//.png , .jpg 와같이 파일명 자르기. 뒤에서부터 시작해서 '.'점있는 곳 까지 컷!

			//호버이벤트
			$(this).hover(function() {
				$(this).find('img').attr('src', newSrc+ '_after.' + /[^.]+$/.exec(srcName)); //hover시 _on붙이기
			}, function() {
				$(this).find('img').attr('src', newSrc + '.' + /[^.]+$/.exec(srcName)); //hover시 _on 때기
			});
        });
    </script>
	<div id="wrap">
	<?php
    include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/header.php');
    ?>
		<div id="container">
			<?php if($tab == '1') : ?>
			<!-- 최초 메인 슬라이더 영역 -->
				<div id="visual">
					<div class="inner">
						<div class="visual-slider slider-rotate">
							<div class="banner_main slider-rotate__container">
								<?php foreach($event_banner_list as $event_banner) : ?>
									<a class="item slider-rotate__item" href="#" target="_blank"><img src="<?= $event_banner->banr_img;?>"></a>
								<?php endforeach; ?>
							</div>
							<div class="slider-rotate__nav">
								<span class="slider-rotate__arrow slider-rotate__arrow--right js-slider-rotate-arrow" data-action="next">next</span>
								<span class="slider-rotate__arrow slider-rotate__arrow--left js-slider-rotate-arrow" data-action="prev">prev</span>
							</div>
						</div>
					</div><!-- // inner -->
				</div>
			<!-- // 최초 메인 슬라이더 영역 -->
			<?php endif; ?>
			<div id="content">

				<!-- 상단 고정배너 -->
				<section class="main_sect" id="mainEvent">
					<?php if($tab == '1') : ?>
					<div class="inner">
						<div class="sect_image"><img src="/static/img/main/event_image1@2x.png" alt=""></div>
					</div>
					<?php elseif($tab == '5'): ?>
					<div class="big_inner">
						<div class="sect_image"><img src="/static/img/main/univ_main_banner.png" alt=""></div>
					</div>
					<?php elseif($tab == '6'): ?>
					<div class="big_inner">
						<div class="sect_image"><img src="/static/img/main/early_main_banner.png" alt=""></div>
					</div>
					<?php elseif($tab == '7'): ?>
					<div class="big_inner">
						<div class="sect_image"><img src="/static/img/main/event_image1@2x.png" alt=""></div>
					</div>
					<?php elseif($tab == '8'): ?>
					<?php endif; ?>
					<!-- // inner -->
				</section>
				<!-- // 상단 고정배너 -->
				<!--  5: 해외대학 유학 / 6: 조기유학 / 7: 어학연수 / 8: 가족연수/캠프/스쿨링 -->
				<?php if($tab == '5' || $tab == '6' ): ?>
				<section class="main_sect" id="mainUniv">
					<div class="inner">
						 <div class="univ_main_sect">
							<div class="univ_nation">
								<a href="javascript:change_nation('<?= $tab;?>','us');">
									<img class="univ_main_img" src="/static/img/main/univ_main_usa.png">
								</a>
							</div>
							<div class="univ_nation">
								<a href="javascript:change_nation('<?= $tab;?>','uk');">
									<img class="univ_main_img" src="/static/img/main/univ_main_uk.png">
								</a>
							</div>
							<div class="univ_nation">
								<a href="javascript:change_nation('<?= $tab;?>','ca');">
									<img class="univ_main_img" src="/static/img/main/univ_main_ca.png">
								</a>
							</div>
						 </div>
					</div>
				</section>
				<?php elseif($tab == '7'): ?>
				<section class="main_sect" id="mainUniv">
					<div class="inner">
						<div class="program_title">국가별 어학연수</div>
						 <div class="univ_main_sect">
							<div class="eng_nation" onclick="javascript:change_nation('<?= $tab;?>','us');">
								<img class="eng_main_img" src="/static/img/main/btn_main_eng_usa.png">
							</div>
							<div class="eng_nation" onclick="javascript:change_nation('<?= $tab;?>','uk');">
								<img class="eng_main_img" src="/static/img/main/btn_main_eng_uk.png">
							</div>
							<div class="eng_nation" onclick="javascript:change_nation('<?= $tab;?>','ca');">
								<img class="eng_main_img" src="/static/img/main/btn_main_eng_ca.png">
							</div>
							<div class="eng_nation" onclick="javascript:change_nation('<?= $tab;?>','phil');">
								<img class="eng_main_img" src="/static/img/main/btn_main_eng_phi.png">
							</div>
						 </div>
					</div>
				</section>
				<section class="main_sect" id="mainUniv">
					<div class="inner">
						 <div class="univ_main_sect natio_btn_area" id="btn_us_area">
							<div class="eng_city_btn">
								<img src="/static/img/button/btn_boston.png" id="btn_boston">
							</div>
							<div class="eng_city_btn">
								<img src="/static/img/button/btn_newyork.png" id="btn_newyork">
							</div>
							<div class="eng_city_btn">
								<img src="/static/img/button/btn_sandiego.png" id="btn_sandiego">
							</div>
							<div class="eng_city_btn">
								<img src="/static/img/button/btn_sanfrancisco.png" id="btn_sanfrancisco">
							</div>
							<div class="more_city story_more"><a href="#">전체보기<i>+</i></a></div>
						 </div>
						 <div class="univ_main_sect natio_btn_area" id="btn_uk_area" style="display:none;">
							<div class="eng_city_btn">
								<img src="/static/img/button/btn_brighton.png" id="btn_brighton">
							</div>
							<div class="eng_city_btn">
								<img src="/static/img/button/btn_cambridge.png" id="btn_cambridge">
							</div>
							<div class="eng_city_btn">
								<img src="/static/img/button/btn_london.png" id="btn_london">
							</div>
							<div class="eng_city_btn">
								<img src="/static/img/button/btn_manchester.png" id="btn_manchester">
							</div>
							<div class="more_city story_more"><a href="#">전체보기<i>+</i></a></div>
						 </div>
						 <div class="univ_main_sect natio_btn_area" id="btn_ca_area" style="display:none;">
							<div class="eng_city_btn">
								<img src="/static/img/button/btn_calgary.png" id="btn_calgary">
							</div>
							<div class="eng_city_btn">
								<img src="/static/img/button/btn_montreal.png" id="btn_montreal">
							</div>
							<div class="eng_city_btn">
								<img src="/static/img/button/btn_toronto.png" id="btn_toronto">
							</div>
							<div class="eng_city_btn">
								<img src="/static/img/button/btn_vancouver.png" id="btn_vancouver">
							</div>
							<div class="more_city story_more"><a href="#">전체보기<i>+</i></a></div>
						 </div>
						 <div class="univ_main_sect natio_btn_area" id="btn_phil_area" style="display:none;">
							<div class="eng_city_btn">
								<img src="/static/img/button/btn_baguio.png" id="btn_baguio">
							</div>
							<div class="eng_city_btn">
								<img src="/static/img/button/btn_cebu.png" id="btn_cebu">
							</div>
							<div class="eng_city_btn">
								<img src="/static/img/button/btn_etc.png" id="btn_etc">
							</div>
							<div class="more_city story_more"><a href="#">전체보기<i>+</i></a></div>
						 </div>
					</div>
				</section>
				<?php elseif($tab == '8'): ?>
				<?php endif; ?>

				<!-- mainProgram -->
				<section class="main_sect" id="mainProgram">
					<div class="inner">

						<div class="program-swiper">
							<?php if($tab == '1') : ?> <!-- 최초 메인 -->
							<div class="swiper-container">
								<div class="swiper-wrapper">
										<div class="swiper-slide">
											<div class="program_title">어학연수</div>
											<ul class="program_list">
												<? foreach($normal_banner_list[0] as $nor_banr_0): ?>
													<li><a href="#"><div class="thumb"><img src="<?= $nor_banr_0->banr_img;?>" alt=""></div></a></li>
												<? endforeach; ?>
											</ul>
											<a href="#" class="box"></a>
										</div>
										<div class="swiper-slide">
											<div class="program_title">초중고 유학</div>
											<ul class="program_list">
												<? foreach($normal_banner_list[1] as $nor_banr_1): ?>
													<li><a href="#"><div class="thumb"><img src="<?= $nor_banr_1->banr_img;?>" alt=""></div></a></li>
												<? endforeach; ?>
											</ul>
											<a href="#" class="box"></a>
										</div>
										<div class="swiper-slide">
											<div class="program_title">대학 유학</div>
											<ul class="program_list">
												<? foreach($normal_banner_list[2] as $nor_banr_2): ?>
													<li><a href="#"><div class="thumb"><img src="<?= $nor_banr_2->banr_img;?>" alt=""></div></a></li>
												<? endforeach; ?>
											</ul>
											<a href="#" class="box"></a>
										</div>
										<div class="swiper-slide">
											<div class="program_title">컬리지 유학 후 이민 / 자녀무상</div>
											<ul class="program_list">
												<? foreach($normal_banner_list[3] as $nor_banr_3): ?>
													<li><a href="#"><div class="thumb"><img src="<?= $nor_banr_3->banr_img;?>" alt=""></div></a></li>
												<? endforeach; ?>
											</ul>
											<a href="#" class="box"></a>
										</div>
								</div><!-- // swiper-wrapper -->
							</div><!-- // swiper-container -->
							<div class="swiper-button-prev"></div>
							<div class="swiper-button-next"></div>
							<?php elseif($tab == '5'): ?> <!-- 해외대학유학 메인 -->
							<?php elseif($tab == '6' || $tab == '7'): ?> <!-- 조기유학 메인 / 어학연수 메인 -->
							<div class="swiper-container">
                            	<div class="swiper-wrapper">
                            		<div class="swiper-slide">
                            			<div class="program_title">추천상품</div>
                            			<ul class="program_list banr_lists" id="banr_list_us">
                            				<? foreach($us_banner_list as $us_banner): ?>
                            					<li><a href="#"><div class="thumb"><img src="<?= $us_banner->banr_img;?>" alt=""></div></a></li>
                            				<? endforeach; ?>
                            			</ul>
                            			<ul class="program_list banr_lists" id="banr_list_uk" style="display:none;">
                                        	<? foreach($uk_banner_list as $uk_banner): ?>
                                        		<li><a href="#"><div class="thumb"><img src="<?= $uk_banner->banr_img;?>" alt=""></div></a></li>
                                        	<? endforeach; ?>
                                        </ul>
                            			<ul class="program_list banr_lists" id="banr_list_ca"style="display:none;">
                                        	<? foreach($ca_banner_list as $ca_banner): ?>
                                        		<li><a href="#"><div class="thumb"><img src="<?= $ca_banner->banr_img;?>" alt=""></div></a></li>
                                        	<? endforeach; ?>
                                        </ul>
                            			<ul class="program_list banr_lists" id="banr_list_phil"style="display:none;">
                                        	<? foreach($phil_banner_list as $phil_banner): ?>
                                        		<li><a href="#"><div class="thumb"><img src="<?= $phil_banner->banr_img;?>" alt=""></div></a></li>
                                        	<? endforeach; ?>
                                        </ul>
                            			<a href="#" class="box"></a>
                            		</div>
                            	</div><!-- // swiper-wrapper -->
                            </div><!-- // swiper-container -->
							<?php elseif($tab == '8'): ?> <!-- 가족연수/캠프/스쿨링 메인 -->
							<!-- 가족연수/캠프란? -->
								<section class="main_sect" id="mainIntro">
									<div class="inner">
										<!-- 가족연수란 -->
										<div class="intro_wrap family">
											<!-- 제목영역 -->
											<div class="tit_area">
												<p class="tit">가족연수란?</p>
											</div>
											<!--// 제목영역 -->

											<!-- 컨텐츠 -->
											<div class="intro_cotn">
												<div class="txt_area">
													<div class="group">
														<i class="i_intro intro_01"></i>
														<p class="txt">자녀는 물론 보호자도 함께<br> 수업을 받을 수 있습니다.</p>
													</div>
													<div class="group">
														<i class="i_intro intro_02"></i>
														<p class="txt">주말에는 보호자와 함께<br> 좋은 추억을 만들 수 있습니다.</p>
													</div>
													<div class="group">
														<i class="i_intro intro_03"></i>
														<p class="txt">캠프에 비해 비교적<br> 저렴한 비용으로 연수가 가능합니다.</p>
													</div>
													<div class="group">
														<i class="i_intro intro_04"></i>
														<p class="txt">주로 학업위주 프로그램이<br> 준비되어 있습니다.</p>
													</div>
												</div>
											</div>
											<!--// 컨텐츠 -->

											<!-- 버튼 -->
											<a href="#none" class="btn_intro btn_i_01">
												<span>가족연수 모집공고 확인하기 Click!</span>
											</a>
											<!--// 버튼 -->
										</div>
										<!--// 가족연수란 -->

										<!-- 캠프란 -->
										<div class="intro_wrap camp">
											<!-- 제목영역 -->
											<div class="tit_area">
												<p class="tit">캠프란?</p>
											</div>
											<!--// 제목영역 -->

											<!-- 컨텐츠 -->
											<div class="intro_cotn">
												<div class="txt_area">
													<div class="group">
														<i class="i_intro intro_05"></i>
														<p class="txt">출국부터 입국까지 담당자가<br> 안전하게 책임집니다.</p>
													</div>
													<div class="group">
														<i class="i_intro intro_06"></i>
														<p class="txt">주말에도 캠프 관계자들이 아이들과<br>함께합니다.</p>
													</div>
													<div class="group">
														<i class="i_intro intro_07"></i>
														<p class="txt">다양한 액티비티가 포함되어 있어 또래<br>들과 신나게 놀면서 공부할 수 있습니다.</p>
													</div>
													<div class="group">
														<i class="i_intro intro_08"></i>
														<p class="txt">영어공부에 대한 좋은 기억을<br> 만들어 줍니다.</p>
													</div>
												</div>
											</div>
											<!--// 컨텐츠 -->

											<!-- 버튼 -->
											<a href="#none" class="btn_intro btn_i_02">
												<span>캠프 모집공고 확인하기 Click!</span>
											</a>
											<!--// 버튼 -->
										</div>
										<!--// 캠프란 -->
									</div>
								</section>
								<!-- // 가족연수/캠프란? -->
							<?php endif; ?>
						</div><!-- // program-swiper -->

					</div><!-- // inner -->
				</section>
				<!-- // mainProgram -->

				<!-- mainStory -->
				<?php if($tab == '1'):?>
					<section class="main_sect" id="mainStory">
				<?php else : ?>
					<section class="main_sect" id="mainStory" style="background-color:#EFF4F3; padding: 5rem 0;">
				<?php endif; ?>

					<div class="inner">

						<div class="story_title">라임스토리</div>
						<div class="story_more"><a href="#">전체보기<i>+</i></a></div>

						<div class="story-swiper">
							<div class="swiper-container">
								<div class="swiper-wrapper">
									<?php foreach($column_list as $column) : ?>
										<div class="swiper-slide">
											<a href="#" class="box">
												<div class="thumb"><img src="<?= $column->col_thumb; ?>" alt=""></div>
												<div class="info">
													<span class="title"><?= $column->col_title; ?></span>
													<span class="text"><?= $column->col_cnts; ?></span>
												</div>
											</a>
										</div>
									<?php endforeach; ?>

								</div><!-- // swiper-wrapper -->
							</div><!-- // swiper-container -->
							<div class="swiper-button-wrap">
								<div class="swiper-button-prev"></div>
								<div class="swiper-button-next"></div>
							</div>
						</div><!-- // story-swiper -->

					</div><!-- // inner -->
				</section>
				<!-- // mainStory -->

				<!-- mainBanner -->
				<section class="main_sect" id="mainBanner">
					<div class="inner">

						<div class="blog_banner">
							<a href="https://blog.naver.com/mylimeeducation" target="_blank">
								<!-- <div class="icon">blog</div>
								<div class="info">
									<span>네이버 블로그 타이틀</span>
									<span>W:300px  H: 300px</span>
								</div> -->
								<div class="more">이동하기</div>
							</a>
						</div>
						<ul class="banner_list">
							<li><a href="#"><img src="/static/img/main/banner_image1@2x.png" alt=""></a></li>
							<li><a href="#"><img src="/static/img/main/banner_image2@2x.png" alt=""></a></li>
							<li><a href="#"><img src="/static/img/main/banner_image3@2x.png" alt=""></a></li>
						</ul>

					</div><!-- // inner -->
				</section>
				<!-- // mainBanner -->
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


