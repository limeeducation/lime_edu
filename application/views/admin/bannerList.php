<?php
	include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/admin/head.php');
?>

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
						<a href="" >순서 변경하기</a>
					</div>
                </div>
                <div class="bg-secondary rounded p-2 mt-3">
					<form style="display: flex;">
						<div class="mb-3 col-xl-5" style="height: 270px;">
							<img style="width: 100%;" src="https://lh3.googleusercontent.com/fife/AAbDypAodj6aQmciN4TcL0Doc4rKlzCkGGBUrECeAn2Ti7CUJWBoIz-mMhiRwOwMJcD31gcznipmsGGQZjfXoOl3vOg1TG-YgiDUXjaR-lHLuDqO4IQCQQl-mcl1fj-dap8CvgW8_Az_PYY7ohPeRdpjqg_bgD_RswUnWM_6oxcF6oUUiTXEnl6dYCELkaLXw01Gta5A9m05s6q5Zv9ezNX5enltmd-4AB8Qfn2W7rzBeqztPwjM6M0XEo9N51x5t8snsFTAAzDYrkbVgKN5gPunaDpZ1YV-gVv_Fm66PWDfX2kWKMEPOitep_mQ4ZCxbd_XYD3NZf-TV1p-9NMYMUVCzfjGDGwlAjmuxqVB7vJXKH_KTwyCUbzsNwlTM-mkPqCkYNnZj_vYovai0iLjoa61rjPbwdWz7u95lyZyX_OgT9aR_EERmBYmXDBTxyIsmdL0HrUynC25Xk2_SoCbcRL2TU9w6wSC1LjL7bGSbQ_iEbl6bZJjobyCsbQ8DvnC8NNdrogsYKdLrjWMgnHmW0Lr0ToQWFQ5Sbo903-NCvOaMXyzhMbrGNbpVvcuIY7sJFFl-3MmEwPfQWMn4AdHAmV6xxJMSFo-2wzv_4Ionx5IU3-50kabDErZmyMImQaP6v_mJ9jHp9a-QJp1oG0C5_dMRZb9TMB7_xFdUWkhjwEGLOVbq0hf6zOwoa-aTM_lEe1C5StmqBphrH_d4T8GbgH3r1EmpEDKqQQR3Q3b-5czDK7KJoPti8uTZwL93ZciSltXTCfL-vUgIpRbhwhhhAbVXTY9rWlloNJQoGSdQAFZHLKpmOqyl9U4c1lrd6wUKmPA7PGIUCkLCW4hqKsGoKWMaxg5Mec-Xin2Wh7QZZs0aLTvBAs5sQxPFi2_VzkeVbDdLkyq7sSTiAvE1GRSC5M1dLdJJ9PL-5H3cY7wi_d72QwY14dZ_xxVrmSswZ-YAEi-SitRL_Zf7MxGGMVN9dtfNTst4p8WXhtdxnZ_aEAK-c9iHNQqsL0y_TSAiaf5xTdmxzB5pLq-MvYlF3KhPCLoLi9G-7J0cJgL4OhTt9oh8vSt9WuxgqDf6kCF3KvhhtpNjtKdH2pscB9TSfLkhcFgCpkRrW6gUmSdIE6Ipov8pNgxRViOP3BOi5RJSw3F5y9AfayAw2TsfZxmVcd43mNuGvHjlSQUtyNCoO8NxWjxJvSJFQkZVZAFy-vfhgkdg-jTLj15iqgthNuQaLbWFQa8hltD2R_IB8VIyZdYTe4hrJylwYHGQ3BuvlMCQNe28vHnA02FoviJqUw_utzFhkCzWU5TsNHiKwhkgRp6jkD3uKfnETVA4KppOwxIRdcKHN6BgOihKd56LV0aC3t2ZQM2vLvQrvyWltO-bPFqrLwl-6uwMjc-9cakf5H845YxyUjPm8h_kv1AJ1Ns0_csmcUDNQR5ZM3yHD5K4zqDpKsVhUOXupO8hxyOiIyFQ-IKt1guBxlksdpZNT4Pr7sRB5kJTxUq_SNRnOi6fa_o-_t4UY_ZcbnXffr-bJdj7Cjiw6k92DZGFwiUPub8EhmKRRtx-2gSMBXv0QeCl7SVTwLHGPTDQyw2hrYz=w1476-h805">
							<div class="form-text">
								이미지 권장 사이즈 : @@@@ X @@@@
							</div>
						</div>
						<div class="mb-3 col-xl-6 mx-3">
							<label for="exampleInputPassword1" class="form-label">이미지 URL</label>
							<input type="password" class="form-control" id="exampleInputPassword1">
							<label for="exampleInputPassword1" class="form-label">연결 URL</label>
							<input type="password" class="form-control" id="exampleInputPassword1">
							<label for="exampleInputPassword1" class="form-label">노출 시작일</label>
							<input type="password" class="form-control" id="exampleInputPassword1">
							<label for="exampleInputPassword1" class="form-label">노출 종료일</label>
							<input type="password" class="form-control" id="exampleInputPassword1">
						</div>
					</form>
				</div>
            </div>

            <?php
            	include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/admin/footer.php');
            ?>
        </div>
        <!-- Content End -->


	</div>
</body>

</html>
