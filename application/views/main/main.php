<?php
include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/template/head.php');
//include_once($_SERVER['DOCUMENT_ROOT']."/inc/blog_list.php");
?>
<script>
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

}

// Eventos teclado
$(document).keydown(function(e) {
    switch(e.which) {
        case 37: // left
        moveToSelected('prev');
        break;

        case 39: // right
        moveToSelected('next');
        break;

        default: return;
    }
    e.preventDefault();
});

$('#carousel div').click(function() {
  moveToSelected($(this));
});

</script>
<body>
<div id="carousel">
	<?php foreach($event_banner_list as $event_banner) : ?>
	<?php print_r($event_banner);?>
	<?php print_r($event_banner.banr_seq);?>
		<input type="radio" name="evt_banner" id="evt_banner_<?= $event_banner['banr_seq']?>">

		<label for="evt_banner_<?= $event_banner['banr_seq']?>" id="evt_banner_img_<?= $event_banner['banr_seq']?>"><img src="<?= $event_banner['banr_img']?>"></label>

		<?php if($event_banner['banr_seq'] == '0'): ?>
			<div class="selected">
				<img src="https://i1.sndcdn.com/artworks-000165384395-rhrjdn-t500x500.jpg">
			</div>
		<?php else : ?>
			<div class="next">
				<img src="<?= $event_banner['banr_img']?>">
			</div>
		<?php endif; ?>

	<?php endforeach; ?>
</div>

</body>

<?php
include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/footer_temp.php');
?>
