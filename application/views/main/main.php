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

			<div id="visual">
				<div class="inner">
					<div class="visual-slider slider-rotate">
						<div class="banner_main slider-rotate__container">
							<?php foreach($event_banner_list as $event_banner) : ?>
								<a class="item slider-rotate__item" href="#" target="_blank"><img src="<?= $event_banner->banr_img;?>"></a>
							<?php endforeach; ?>
							<!-- <a class="item slider-rotate__item" href="#" target="_blank"><img src="/static/img/main/visual_image1@2x.png"></a>  -->
							<!-- <a class="item slider-rotate__item" href="#" target="_blank"><img src="/static/img/main/visual_image2@2x.png"></a>  -->
							<!-- <a class="item slider-rotate__item" href="#" target="_blank"><img src="/static/img/main/visual_image3@2x.png"></a>  -->
							<!-- <a class="item slider-rotate__item" href="#" target="_blank"><img src="/static/img/main/visual_image4@2x.png"></a>  -->
							<!-- <a class="item slider-rotate__item" href="#" target="_blank"><img src="/static/img/main/visual_image5@2x.png"></a>  -->
						</div>
						<div class="slider-rotate__nav">
							<span class="slider-rotate__arrow slider-rotate__arrow--right js-slider-rotate-arrow" data-action="next">next</span>
							<span class="slider-rotate__arrow slider-rotate__arrow--left js-slider-rotate-arrow" data-action="prev">prev</span>
						</div>
					</div>

				</div><!-- // inner -->
			</div>
			<!-- // visual -->
			<div id="content">

			<!-- mainEvent -->
			<section class="main_sect" id="mainEvent">
				<div class="inner">

					<div class="sect_image"><img src="/static/img/main/event_image1@2x.png" alt=""></div>

				</div><!-- // inner -->
			</section>
			<!-- // mainEvent -->

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

								<div class="swiper-slide">
									<a href="#" class="box">
										<div class="thumb"><img src="/static/img/main/story_image1@2x.png" alt=""></div>
										<div class="info">
											<span class="title">어학연수를 위한 7가지 </span>
											<span class="text">어학연수를 생각한다면 꼭 중요하게 생각해봐야할 7가지 라임에듀와 함께 하면서 꼼꼼히 챙길 수 있었습니다. 라임에듀에서 여러가지 혜택을 받을 수 있도록 도와드립니다.</span>
										</div>
									</a>
								</div>
								<div class="swiper-slide">
									<a href="#" class="box">
										<div class="thumb"><img src="/static/img/main/story_image1@2x.png" alt=""></div>
										<div class="info">
											<span class="title">어학연수를 위한 7가지 </span>
											<span class="text">어학연수를 생각한다면 꼭 중요하게 생각해봐야할 7가지 라임에듀와 함께 하면서 꼼꼼히 챙길 수 있었습니다. 라임에듀에서 여러가지 혜택을 받을 수 있도록 도와드립니다.</span>
										</div>
									</a>
								</div>
								<div class="swiper-slide">
									<a href="#" class="box">
										<div class="thumb"><img src="/static/img/main/story_image1@2x.png" alt=""></div>
										<div class="info">
											<span class="title">어학연수를 위한 7가지 </span>
											<span class="text">어학연수를 생각한다면 꼭 중요하게 생각해봐야할 7가지 라임에듀와 함께 하면서 꼼꼼히 챙길 수 있었습니다. 라임에듀에서 여러가지 혜택을 받을 수 있도록 도와드립니다.</span>
										</div>
									</a>
								</div>
								<div class="swiper-slide">
									<a href="#" class="box">
										<div class="thumb"><img src="/static/img/main/story_image1@2x.png" alt=""></div>
										<div class="info">
											<span class="title">어학연수를 위한 7가지 </span>
											<span class="text">어학연수를 생각한다면 꼭 중요하게 생각해봐야할 7가지 라임에듀와 함께 하면서 꼼꼼히 챙길 수 있었습니다. 라임에듀에서 여러가지 혜택을 받을 수 있도록 도와드립니다.</span>
										</div>
									</a>
								</div>
								<div class="swiper-slide">
									<a href="#" class="box">
										<div class="thumb"><img src="/static/img/main/story_image1@2x.png" alt=""></div>
										<div class="info">
											<span class="title">어학연수를 위한 7가지 </span>
											<span class="text">어학연수를 생각한다면 꼭 중요하게 생각해봐야할 7가지 라임에듀와 함께 하면서 꼼꼼히 챙길 수 있었습니다. 라임에듀에서 여러가지 혜택을 받을 수 있도록 도와드립니다.</span>
										</div>
									</a>
								</div>
								<div class="swiper-slide">
									<a href="#" class="box">
										<div class="thumb"><img src="/static/img/main/story_image1@2x.png" alt=""></div>
										<div class="info">
											<span class="title">어학연수를 위한 7가지 </span>
											<span class="text">어학연수를 생각한다면 꼭 중요하게 생각해봐야할 7가지 라임에듀와 함께 하면서 꼼꼼히 챙길 수 있었습니다. 라임에듀에서 여러가지 혜택을 받을 수 있도록 도와드립니다.</span>
										</div>
									</a>
								</div>
								<div class="swiper-slide">
									<a href="#" class="box">
										<div class="thumb"><img src="/static/img/main/story_image1@2x.png" alt=""></div>
										<div class="info">
											<span class="title">어학연수를 위한 7가지 </span>
											<span class="text">어학연수를 생각한다면 꼭 중요하게 생각해봐야할 7가지 라임에듀와 함께 하면서 꼼꼼히 챙길 수 있었습니다. 라임에듀에서 여러가지 혜택을 받을 수 있도록 도와드립니다.</span>
										</div>
									</a>
								</div>
								<div class="swiper-slide">
									<a href="#" class="box">
										<div class="thumb"><img src="/static/img/main/story_image1@2x.png" alt=""></div>
										<div class="info">
											<span class="title">어학연수를 위한 7가지 </span>
											<span class="text">어학연수를 생각한다면 꼭 중요하게 생각해봐야할 7가지 라임에듀와 함께 하면서 꼼꼼히 챙길 수 있었습니다. 라임에듀에서 여러가지 혜택을 받을 수 있도록 도와드립니다.</span>
										</div>
									</a>
								</div>

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

	</div>
	<!-- // wrap-->
</body>
</html>


