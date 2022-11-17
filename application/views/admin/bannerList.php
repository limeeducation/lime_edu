<?php
	include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/admin/head.php');
?>
<link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js" ></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" ></script>
<script type="text/javascript">
	$(function(){

	});
	$(document).ready(function(){
		$(".fixList").hide();
	});
	function changeList(){
		$("#sortable").sortable({disabled: false});
		$(".changeList").hide();
		$(".fixList").show();
	}
	function fixList(){
		$("#sortable").sortable({disabled: true});
		$(".fixList").hide();
		$(".changeList").show();
	}
</script>
<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        <?php
        	include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/admin/sidebar.php');
        ?>
        <!-- Content Start -->
        <div class="content">

			<?php
				include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/admin/header-gnb.php');
			?>
			<div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-2">
                    <div class="d-flex align-items-center justify-content-between ">
						<h6 class="mb-0"><button type="button" class="btn btn-lg btn-outline-success m-2">TAB 1</button></h6>
						<h6 class="mb-0"><button type="button" class="btn btn-lg btn-outline-success m-2">TAB 2</button></h6>
						<h6 class="mb-0"><button type="button" class="btn btn-lg btn-outline-success m-2">TAB 3</button></h6>
						<a class="text-success" href="" >이미지 등록하기</a>
						<a href="javascript:changeList();" class="changeList">순서 변경하기</a>
						<a href="javascript:fixList();" class="fixList">순서 적용하기</a>
					</div>
                </div>
                <ul id="sortable" style="list-style:none;">
					<li>
						<div class="bg-secondary rounded p-2 mt-3">
							<form style="display: flex;">
								<div class="mb-3 pt-1" style="height: 270px;">
									<img style="width: 100%; height: 100%;" src="https://lh3.googleusercontent.com/fife/AAbDypAodj6aQmciN4TcL0Doc4rKlzCkGGBUrECeAn2Ti7CUJWBoIz-mMhiRwOwMJcD31gcznipmsGGQZjfXoOl3vOg1TG-YgiDUXjaR-lHLuDqO4IQCQQl-mcl1fj-dap8CvgW8_Az_PYY7ohPeRdpjqg_bgD_RswUnWM_6oxcF6oUUiTXEnl6dYCELkaLXw01Gta5A9m05s6q5Zv9ezNX5enltmd-4AB8Qfn2W7rzBeqztPwjM6M0XEo9N51x5t8snsFTAAzDYrkbVgKN5gPunaDpZ1YV-gVv_Fm66PWDfX2kWKMEPOitep_mQ4ZCxbd_XYD3NZf-TV1p-9NMYMUVCzfjGDGwlAjmuxqVB7vJXKH_KTwyCUbzsNwlTM-mkPqCkYNnZj_vYovai0iLjoa61rjPbwdWz7u95lyZyX_OgT9aR_EERmBYmXDBTxyIsmdL0HrUynC25Xk2_SoCbcRL2TU9w6wSC1LjL7bGSbQ_iEbl6bZJjobyCsbQ8DvnC8NNdrogsYKdLrjWMgnHmW0Lr0ToQWFQ5Sbo903-NCvOaMXyzhMbrGNbpVvcuIY7sJFFl-3MmEwPfQWMn4AdHAmV6xxJMSFo-2wzv_4Ionx5IU3-50kabDErZmyMImQaP6v_mJ9jHp9a-QJp1oG0C5_dMRZb9TMB7_xFdUWkhjwEGLOVbq0hf6zOwoa-aTM_lEe1C5StmqBphrH_d4T8GbgH3r1EmpEDKqQQR3Q3b-5czDK7KJoPti8uTZwL93ZciSltXTCfL-vUgIpRbhwhhhAbVXTY9rWlloNJQoGSdQAFZHLKpmOqyl9U4c1lrd6wUKmPA7PGIUCkLCW4hqKsGoKWMaxg5Mec-Xin2Wh7QZZs0aLTvBAs5sQxPFi2_VzkeVbDdLkyq7sSTiAvE1GRSC5M1dLdJJ9PL-5H3cY7wi_d72QwY14dZ_xxVrmSswZ-YAEi-SitRL_Zf7MxGGMVN9dtfNTst4p8WXhtdxnZ_aEAK-c9iHNQqsL0y_TSAiaf5xTdmxzB5pLq-MvYlF3KhPCLoLi9G-7J0cJgL4OhTt9oh8vSt9WuxgqDf6kCF3KvhhtpNjtKdH2pscB9TSfLkhcFgCpkRrW6gUmSdIE6Ipov8pNgxRViOP3BOi5RJSw3F5y9AfayAw2TsfZxmVcd43mNuGvHjlSQUtyNCoO8NxWjxJvSJFQkZVZAFy-vfhgkdg-jTLj15iqgthNuQaLbWFQa8hltD2R_IB8VIyZdYTe4hrJylwYHGQ3BuvlMCQNe28vHnA02FoviJqUw_utzFhkCzWU5TsNHiKwhkgRp6jkD3uKfnETVA4KppOwxIRdcKHN6BgOihKd56LV0aC3t2ZQM2vLvQrvyWltO-bPFqrLwl-6uwMjc-9cakf5H845YxyUjPm8h_kv1AJ1Ns0_csmcUDNQR5ZM3yHD5K4zqDpKsVhUOXupO8hxyOiIyFQ-IKt1guBxlksdpZNT4Pr7sRB5kJTxUq_SNRnOi6fa_o-_t4UY_ZcbnXffr-bJdj7Cjiw6k92DZGFwiUPub8EhmKRRtx-2gSMBXv0QeCl7SVTwLHGPTDQyw2hrYz=w1476-h805">
									<div class="form-text">
										이미지 권장 사이즈 : @@@@ X @@@@
									</div>
								</div>
								<div class="mb-3 col-xl-6 mx-3">
									<label for="img_url_1" class="form-label">이미지 URL</label>
									<input type="text" class="form-control" id="img_url_1">
									<label for="conn_url_1" class="form-label">연결 URL</label>
									<input type="text" class="form-control" id="conn_url_1">
									<label for="exp_start_1" class="form-label">노출 시작일</label>
									<input type="text" class="form-control" id="exp_start_1">
									<label for="exp_end_1" class="form-label">노출 종료일</label>
									<input type="text" class="form-control" id="exp_end_1">
								</div>
							</form>
						</div>
					</li>
					<li>
						<div class="bg-secondary rounded p-2 mt-3">
							<form style="display: flex;">
								<div class="mb-3 pt-1" style="height: 270px;">
									<img style="width: 100%; height: 100%;" src="https://lh3.googleusercontent.com/fife/AAbDypB03_pAGWysJtFLy0NcV7SdAzquhAyyCpdwhMJXF1TuvT4JOnHqfNvcL-iG7DlJDOd0aseFkhLaPlPqHMgQVsRroESxG9B3oey3JVccBcMUkpeJmRg66nt9ggJ5Lweb7_F-1o8vOgqTzmwhHmrPMV1GsIL1w47XqJ79D5qf10msscXkpIKlFvlJVWGbN76vry_9YcTnPaclxf2SB1SbQ-GVksJIHEmoFP2q99rifmCxMYS8nIiA8c2MBv5gaP1pW83MagIP_lbI1iTL-pV-_Ymdet71675FPNMSH0Rh80VtbrhMGZ4fglyUwGZZAjSr5xckfU9v2z5ZGZOZsFCLYiNS7samoeEiZX-imaBg8CqwAaADe70mtDKTD-0uUS9Tq9JRtZiqAklqmIfaEVuIg8b_zhjg519ZIjI7FA7m5TyxsZgEMEysp8Cq_HqH1xlq6GdfdmUE-QMaMtA7UZRBeM38UbPRuVgagPG0__6Qt6srw24P8CBXlDKoksMauo6yV6uWKeuKhglgxMDdPzGztssKEbT5LbWGM13RRQeSfW79c8uJZoU0h5C0XgUyxqiNORHaI54Uee4mZVAazzmZ6nJpRfPN99gyavr5eE4zAg75pCa5BsH-yJ2SqhVpRerJ8U0XMuyvmJQx7dN5Y7clYtbURfpoUQJTA5C_D4SW_FyFhklC2p4VbI5wRIDPNNJl3Z8WUHxZDMUL7fXlp7uQoxGiSpeSw570xjX9iyXg7eHShRYhpB751NA_h9C89mgoSg_ZEH2OZaBiy88aenwsR32bE0BZw8_O_4WlRyQvTYCYdH4G3j06vZdE8FnFsETdwFU4M-Z9MWqiYnh1tJNlvmG8PmSl0Jw2sqKgYUycPb1d8qPNVMNiCobsoSw6cUwU3ULxb-sIlSJPmrdOVqyUEx6_0LdCN6NP-xNH7wcrlnuwFAwwXMljEfxU07QKzv5LUUpIRB6v3GYqps1GPMtmCbeElb95OWutnU1dwaOtPBtCNtYeKNbXZyQZqpZUFKgwhvIZmTP9bt8IiIACKWSA6Aw5cufb5uWIhYMvyXTy4i4_9gr5Z9xOPmW3DU-jdwb1pDtck-MdBtod1SZJKFHvlRrdrCHVvOjtncchGfyVTHGFZpkZ22-xww6k14xof3zsPcObHblNzG4dh9vTdHuxKgFUT9UvL1lchsMuF9LyV1FzN2Cf9mL5bT-hlChDd1DCrDJZrG58kwoj5ex66bTAFoU5WBGoKt5tWZLNtfPN9aAt-b-jD3EcNbNKZ-2n8U7kwrfnmYnmoveteeXqt2OLRE9Z0AnLIfyI8_YkoNXPmHD7p2yr4fvzNAkuWUmD4_cn4HASxaiq0Fbf6V05KpAvRpGW1C8-A42HHUga6WpI7PTDj8KptEjZnkJipfVxpewoupjtWcNvjDMY7bPwMQ0i7CJErQCidwkxIwYoQIKZrNKB_C7clbOEpv84tVZiTlgoOmOBRDs0TRHlpKCr1g3h8AJCs1-AR7UP3WpRCDslMKO_SAYIh-wt6q1lYBLwVJYNzkKp_xVhl-MGicxbhIrTjJH9Z3wmQBvB6DYXGxqIhzir2_jRJWXF=w1920-h937">
									<div class="form-text">
										이미지 권장 사이즈 : @@@@ X @@@@
									</div>
								</div>
								<div class="mb-3 col-xl-6 mx-3">
									<label for="img_url_2" class="form-label">이미지 URL</label>
									<input type="text" class="form-control" id="img_url_2">
									<label for="conn_url_2" class="form-label">연결 URL</label>
									<input type="text" class="form-control" id="conn_url_2">
									<label for="exp_start_2" class="form-label">노출 시작일</label>
									<input type="text" class="form-control" id="exp_start_2">
									<label for="exp_end_2" class="form-label">노출 종료일</label>
									<input type="text" class="form-control" id="exp_end_2">
								</div>
							</form>
						</div>
					</li>
				</ul>
            </div>

            <?php
            	include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/admin/footer.php');
            ?>
        </div>
        <!-- Content End -->


	</div>
</body>

</html>
