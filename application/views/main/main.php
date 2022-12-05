<?php
include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/template/head.php');
//include_once($_SERVER['DOCUMENT_ROOT']."/inc/blog_list.php");
?>
<body>
	<script type="text/javascript">
		function moveToSelected(element) {

		  if (element == "next") {
			var selected = $(".selected").next();
		  } else if (element == "prev") {
			var selected = $(".selected").prev();
		  } else {
			var selected = element;
		  }

		  var next = $(selected).next();
		  var prev = $(selected).prev();
		  var prevSecond = $(prev).prev();
		  var nextSecond = $(next).next();

		  $(selected).removeClass().addClass("selected");

		  $(prev).removeClass().addClass("prev");
		  $(next).removeClass().addClass("next");

		  $(nextSecond).removeClass().addClass("nextRightSecond");
		  $(prevSecond).removeClass().addClass("prevLeftSecond");

		  $(nextSecond).nextAll().removeClass().addClass('hideRight');
		  $(prevSecond).prevAll().removeClass().addClass('hideLeft');

		  $("#cls_evt_left").addClass('btn_evt_bnr');
		  $("#cls_evt_right").addClass('btn_evt_bnr');

		}

		$('#carousel div').click(function() {
		  moveToSelected($(this));
		});

	</script>
	<div id="carousel">
		<?php foreach($event_banner_list as $event_banner) : ?>
			<?php if($event_banner->banr_seq == '0'): ?>
				<div class="selected" id="<?= $event_banner->banr_seq; ?>">
					<img src="<?= $event_banner->banr_img;?>">
				</div>
			<?php else : ?>
				<div class="next" id="<?= $event_banner->banr_seq; ?>">
					<img src="<?= $event_banner->banr_img;?>">
				</div>
			<?php endif; ?>
		<?php endforeach; ?>
		<button class="btn_evt_bnr" id="cls_evt_left" onclick="javascript:moveToSelected('prev');"></button>
		<button class="btn_evt_bnr" id="cls_evt_right" onclick="javascript:moveToSelected('next');"></button>
	</div>

</body>

<?php
include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/footer_temp.php');
?>
