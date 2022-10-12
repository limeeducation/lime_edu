<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/old/head_ca.php');
?>
<link href="/static/css/old/main.css" rel="stylesheet" >
<style>
	.top_back{
		height:120px;
		background-color:#00000057;
	}
	.content_outer{
		width:100%;
		text-align:center;
	}
	.inner_content{
		width:40%;
	}
</style>
<body>
	<div class="top_back">
	</div>
	<div class="content_outer">
		<img src="/static/img/old/camp/am_east_pri_camp.png" class="inner_content">
		<img src="/static/img/old/camp/ca_pub_sch.png" class="inner_content">
		<img src="/static/img/old/camp/phi_tallac_fa.png" class="inner_content">
		<img src="/static/img/old/camp/phil_ceb_camp.png" class="inner_content">
		<img src="/static/img/old/camp/phil_tallac_camp.png" class="inner_content">
		<img src="/static/img/old/camp/uk_pub_sch.png" class="inner_content">
	</div>
</body>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/footer_temp.php');
?>
