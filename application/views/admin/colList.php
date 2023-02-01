<?php
	include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/admin/head.php');
?>
<link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js" ></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" ></script>
<script type="text/javascript">
	function go_search(){

	}
	function add_col(){
		location.href="/adminProd/columnEdit";
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
                <div class="row g-12">
					<div class="col-sm-12 col-md-6 col-xl-12">
						<div class="h-100 bg-secondary rounded p-4">
							<div class="d-flex align-items-center justify-content-between mb-2">
								<h6 class="mb-0">칼럼 관리</h6>
							</div>
							<div class="d-flex align-items-center justify-content-between mb-2">
								<form class="d-md-flex ms-5 w-100">
									<div class="form-floating me-5" style="width:40%;">
										<input class="form-control bg-dark border-0" type="search" id="colString" name="col_str" placeholder="검색어를 입력해주세요">
										<label for="colString">검색어</label>
									</div>
									<div class="form-floating me-5" style="width:40%;">
										<select class="form-select" id="colSubject" name="col_sub" aria-label="Floating label select example">
											<option selected="">주제를 선택해주세요</option>
											<option value="1">해외대학유학</option>
											<option value="2">조기유학</option>
											<option value="3">어학연수</option>
											<option value="4">가족연수/캠프/스쿨링</option>
										</select>
										<label for="colSubject">주제</label>
									</div>
								</form>
								<button type="button" class="btn btn-success rounded-pill m-2" onclick="javascript:go_search();" style="width:8%;">검색</button>
							</div>
							<?php if($totalCnt > 0) : ?>
								<?php foreach($search as $columns) : ?>
									<a href="/adminProd/columnEdit/<?= $columns->col_idx; ?>">
										<div class="d-flex align-items-center border-bottom py-3">
											<img class="rounded-circle flex-shrink-0" src="<?= $columns->col_thumb; ?>" alt="" style="width: 40px; height: 40px;">
											<div class="w-100 ms-3">
												<div class="d-flex w-100 ">
													<h3 class="mb-0"><?= $columns->col_title; ?></h3>
													<h6 class="mb-0 ms-3"><?= $columns->col_subject; ?></h6><small class="ms-3"><?= $columns->reg_name; ?></small>
												</div>
												<span><?= $columns->col_cnts;?></span>
											</div>
										</div>
									</a>
								<?php endforeach; ?>
							<?php else : ?>
								<div class="d-flex align-items-center border-bottom border-top py-3">
									<div class="w-100 ms-3">
										<div class="d-flex w-100 justify-content-between">
											<h6 class="mb-0">검색 결과가 없습니다.</h6>
										</div>
									</div>
								</div>
							<?php endif; ?>
							<!-- <?php if($totalCnt > 0):?>
								<?php pagination('', empty($_GET['page'])?1:$_GET['page'], $totalCnt,empty(@$_GET['list_count']) ? 10 : @$_GET['list_count']);?>
							<?php endif;?> -->
							<button type="button" class="btn btn-success rounded-pill m-2" onclick="javascript:add_col();">칼럼 등록하기</button>
						</div>
					</div>
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
