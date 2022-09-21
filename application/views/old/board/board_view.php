<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/old/head_ca.php');
?>

<div id="container">

<div class="sub_tit">
	<div class="stt_box">
		<h3 class="tit_tx">유학컬럼</h3>
	</div>
</div>


<?php print_r($contents[0]->title);?>
	<div class="up-on-scroll txbox">
		<h4 class="sub_tx_tit"><?=$contents[0].$title?></h4>
		<div class="tblbox le">
			<?=$contents['contents']?>
		</div>
	</div>

<?php
include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/footer_temp.php');
?>
