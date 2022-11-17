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
							<img src="https://drive.google.com/file/d/155w1uIZUWoJobQppx--W1NJ8odKJlIyK/view?usp=sharing">
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
