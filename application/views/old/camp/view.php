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
		margin:1%;
		width:100%;
		text-align:center;
	}
	.inner_content{
		width:40%;
		margin:1%;
	}
	.btn_consult{
		width:100%;
	}
	@media(max-width: 768px){
		.inner_content{
			width:90%;
			margin:1%;
        }
	}
</style>
<body>
	<div class="top_back"></div>
	<div class="content_outer">
		<a href="#none" class="btn_consult" data-toggle="modal" data-target="#application_form">
			<img src="/static/img/old/camp/am_east_pri_camp.png" class="inner_content">
		</a>
		<a href="#none" class="btn_consult" data-toggle="modal" data-target="#application_form">
			<img src="/static/img/old/camp/uk_pub_sch.png" class="inner_content">
		</a>
		<a href="#none" class="btn_consult" data-toggle="modal" data-target="#application_form">
			<img src="/static/img/old/camp/ca_pub_sch.png" class="inner_content">
		</a>
		<a href="#none" class="btn_consult" data-toggle="modal" data-target="#application_form">
			<img src="/static/img/old/camp/phil_ceb_camp.png" class="inner_content">
		</a>
		<a href="#none" class="btn_consult" data-toggle="modal" data-target="#application_form">
			<img src="/static/img/old/camp/phil_tallac_camp.png" class="inner_content">
		</a>
		<a href="#none" class="btn_consult" data-toggle="modal" data-target="#application_form">
			<img src="/static/img/old/camp/phi_tallac_fa.png" class="inner_content">
		</a>
	</div>
</body>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/footer_temp.php');
?>
