<?php
include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/head.php');
//include_once($_SERVER['DOCUMENT_ROOT']."/inc/blog_list.php");
?>

<body>
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
					<div class="inner">
						<?php if($tab == '1') : ?>
						<div class="sect_image"><img src="/static/img/main/event_image1@2x.png" alt=""></div>
						<?php else if($tab == '2'): ?>
						<?php else if($tab == '3'): ?>
						<?php else if($tab == '4'): ?>
						<?php else if($tab == '5'): ?>
						<?php endif; ?>
					</div><!-- // inner -->
				</section>
				<!-- // 상단 고정배너 -->

				<!-- mainProgram -->
				<section class="main_sect" id="mainProgram">
					<div class="inner">

						<div class="program-swiper">
							<div class="swiper-container">
								<div class="swiper-wrapper">

									<div class="swiper-slide">
										<div class="program_title">인기 프로그램</div>
										<ul class="program_list">
											<li><a href="#"><div class="thumb"><img src="/static/img/main/program_image1@2x.png" alt=""></div></a></li>
											<li><a href="#"><div class="thumb"><img src="/static/img/main/program_image2@2x.png" alt=""></div></a></li>
											<li><a href="#"><div class="thumb"><img src="/static/img/main/program_image3@2x.png" alt=""></div></a></li>
											<li><a href="#"><div class="thumb"><img src="/static/img/main/program_image4@2x.png" alt=""></div></a></li>
											<li><a href="#"><div class="thumb"><img src="/static/img/main/program_image5@2x.png" alt=""></div></a></li>
											<li><a href="#"><div class="thumb"><img src="/static/img/main/program_image6@2x.png" alt=""></div></a></li>
										</ul>
										<a href="#" class="box"></a>
									</div>
									<div class="swiper-slide">
										<div class="program_title">추천 프로그램</div>
										<ul class="program_list">
											<li><a href="#"><div class="thumb"><img src="/static/img/main/program_image1@2x.png" alt=""></div></a></li>
											<li><a href="#"><div class="thumb"><img src="/static/img/main/program_image2@2x.png" alt=""></div></a></li>
											<li><a href="#"><div class="thumb"><img src="/static/img/main/program_image3@2x.png" alt=""></div></a></li>
											<li><a href="#"><div class="thumb"><img src="/static/img/main/program_image4@2x.png" alt=""></div></a></li>
											<li><a href="#"><div class="thumb"><img src="/static/img/main/program_image5@2x.png" alt=""></div></a></li>
											<li><a href="#"><div class="thumb"><img src="/static/img/main/program_image6@2x.png" alt=""></div></a></li>
										</ul>
										<a href="#" class="box"></a>
									</div>

								</div><!-- // swiper-wrapper -->
							</div><!-- // swiper-container -->
							<div class="swiper-button-prev"></div>
							<div class="swiper-button-next"></div>
						</div><!-- // program-swiper -->

					</div><!-- // inner -->
				</section>
				<!-- // mainProgram -->

				<!-- mainStory -->
				<section class="main_sect" id="mainStory">
					<div class="inner">

						<div class="story_title">라임스토리</div>
						<div class="story_more"><a href="#">전체보기<i>+</i></a></div>

						<div class="story-swiper">
							<div class="swiper-container">
								<div class="swiper-wrapper">
									<?php for($idx=0; $idx<10; $idx++){ ?>
										<div class="swiper-slide">
											<a href="#" class="box">
												<div class="thumb"><img src="/static/img/main/story_image1@2x.png" alt=""></div>
												<div class="info">
													<span class="title">어학연수를 위한 7가지 </span>
													<span class="text">어학연수를 생각한다면 꼭 중요하게 생각해봐야할 7가지 라임에듀와 함께 하면서 꼼꼼히 챙길 수 있었습니다. 라임에듀에서 여러가지 혜택을 받을 수 있도록 도와드립니다.</span>
												</div>
											</a>
										</div>
									<?php }?>

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
							<a href="#">
								<div class="icon">blog</div>
								<div class="info">
									<span>네이버 블로그 타이틀</span>
									<span>W:300px  H: 300px</span>
								</div>
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
<div class="quick_nav">

	<div class="quick_title">유학 관련 궁금한 점은 부담없이 문의하세요!</div>
	<ul class="quick_list">
		<li class="phone"><a href="#">전화 상담 예약</a></li>
		<li class="home"><a href="#">방문 상담 예약</a></li>
		<li class="kakao"><a href="#">실시간 상담</a></li>
	</ul>
	<ul class="quick_time">
		<li>평일 00:00AM~00:00PM</li>
		<li>주말 00:00AM~00:00PM</li>
	</ul>
	<ul class="quick_contact">
		<li class="email">hm.lee@mylimeedu.com</li>
		<li class="tel">02-2135-7699</li>
	</ul>

</div>

			</div>
			<!-- // content -->
		</div>
		<!-- // container -->
		<?php
		include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/footer.php');
		?>
		<div class="dim"></div>

	</div>
	<!-- // wrap-->
</body>
</html>


