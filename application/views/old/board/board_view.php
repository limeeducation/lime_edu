<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/old/head_ca.php');
?>

<div id="container">

<div class="sub_tit" style="background-image: url(/static/img/old/data/board/<?=$img_file[0]?>); background-size: cover; background-position: center;">
	<div class="stt_box">
		<h3 class="tit_tx">유학컬럼</h3>
	</div>
</div>
<?php
$img_file = explode("|",$contents[0]->filename_real1);
?>
<div class="sb_con_all">
	<div class="up-on-scroll txbox">
		<h4 class="sub_tx_tit"><?=$contents[0]->title?></h4>
		<div class="tblbox le">
			<?=$contents[0]->contents?>
		</div>
	</div>
</div>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/footer_temp.php');
?>
