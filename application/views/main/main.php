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
						<?php elseif($tab == '5'): ?>
						<?php elseif($tab == '6'): ?>
						<?php elseif($tab == '7'): ?>
						<?php elseif($tab == '8'): ?>
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
									<?php if($tab == '1') : ?> <!-- 최초 메인 -->
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
									<?php elseif($tab == '5'): ?> <!-- 해외대학유학 메인 -->
									<?php elseif($tab == '6'): ?> <!-- 조기유학 메인 -->
									<?php elseif($tab == '7'): ?> <!-- 어학연수 메인 -->
									<?php elseif($tab == '8'): ?> <!-- 가족연수/캠프/스쿨링 메인 -->
									<?php endif; ?>

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


