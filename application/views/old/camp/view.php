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
	.img_wrap{
		width:40%;
		margin:1%;
	}
	.content_outer .img_wrap img {display:block; width:100%; margin:1%;}
	.content_outer .img_wrap {position:relative;}
	.content_outer .img_wrap .btn_consult {position:absolute; left:50%; transform:translate(-50%); bottom:0; width:69%; height:9.3%;}

	@media(max-width: 768px){
		.img_wrap{
			width:90%;
			margin:1%;
        }
        .top_back{
			height:60px;
		}
	}
</style>
<body>
	<div class="top_back"></div>
	<div class="content_outer">
		<div class="img_wrap">
			<img src="/static/img/old/camp/am_east_pri_camp.png" class="inner_content">
			<a href="#none" class="btn_consult" data-toggle="modal" data-target="#application_form">
				<span class="blind">상담신청하기</span>
			</a>
		</div>
		<div class="img_wrap">
			<img src="/static/img/old/camp/uk_pub_sch.png" class="inner_content">
			<a href="#none" class="btn_consult" data-toggle="modal" data-target="#application_form">
				<span class="blind">상담신청하기</span>
			</a>
		</div>
		<div class="img_wrap">
			<img src="/static/img/old/camp/ca_pub_sch.png" class="inner_content">
			<a href="#none" class="btn_consult" data-toggle="modal" data-target="#application_form">
				<span class="blind">상담신청하기</span>
			</a>
		</div>

		<div class="img_wrap">
			<img src="/static/img/old/camp/phil_ceb_camp.png" class="inner_content">
			<a href="#none" class="btn_consult" data-toggle="modal" data-target="#application_form">
				<span class="blind">상담신청하기</span>
			</a>
		</div>

		<div class="img_wrap">
			<img src="/static/img/old/camp/phil_tallac_camp.png" class="inner_content">
			<a href="#none" class="btn_consult" data-toggle="modal" data-target="#application_form">
				<span class="blind">상담신청하기</span>
			</a>
		</div>

		<div class="img_wrap">
			<img src="/static/img/old/camp/phi_tallac_fa.png" class="inner_content">
			<a href="#none" class="btn_consult" data-toggle="modal" data-target="#application_form">
				<span class="blind">상담신청하기</span>
			</a>
		</div>

	</div>
</body>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/footer_temp.php');
?>
