<?php
	include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/admin/head.php');
?>
<link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js" ></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" ></script>
<script type="text/javascript">
	//수정 페이지 이동
	function go_edit_prod(idx){
		location.href="/adminProd/prodEdit/"+idx;
	}
	//상품 삭제
	function go_del_prod(idx){
		location.href="/adminProd/prodDel/"+idx;
	}

</script>
<body>
    <div class="container-fluid position-relative d-flex p-0">
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
						<a class="text-success" href="/adminProd/prodEdit" >상품 추가하기</a>
					</div>
				</div>
				<?php if(count($products) < 1): ?>
					<li>
                    	<div class='bg-secondary rounded p-2 mt-3'>
                    		등록된 이미지가 없습니다.
                    	</div>
                    </li>
				<?php else : ?>
					<?php foreach($products as $product): ?>
						<li class='banner'>
							<input type='hidden' id='banr"+data[i].banr_idx+"' class='seq'>
							<div class='bg-secondary rounded p-2 mt-3'>
								<form style='display: flex;'>
									<div class='mb-3 col-xl-6 mx-3'>
										<label for="prod_name_<?= $product->prod_idx;?>" class='form-label'>상품 제목</label>
                                        <input type='text' class='form-control' id='prod_name_<?= $product->prod_idx;?>' name='prod_name_<?= $product->prod_idx;?>' value='<?= $product->prod_name;?>' readonly>
										<label for="prod_img_<?= $product->prod_idx;?>" class='form-label'>이미지 URL</label>
										<input type='text' class='form-control' id='prod_img_<?= $product->prod_idx;?>' name='img_url_<?= $product->prod_idx;?>' value='<?= $product->prod_img_url;?>' readonly>
										<label for="view_url_<?= $product->prod_idx;?>" class='form-label'>상품 상세페이지 URL</label>
                                        <input type='text' class='form-control' id='view_url_<?= $product->prod_idx;?>' name='view_url_<?= $product->prod_idx;?>' value='<?= $product->prod_view_url;?>' readonly>
										<button type='button' class='btn btn-lg btn-success m-2' onclick="go_edit_prod('<?= $product->prod_idx;?>')">수정</button>
										<button type='button' class='btn btn-lg btn-primary m-2' onclick="go_del_prod('<?= $product->prod_idx;?>')">삭제</button>
									</div>
								</form>
							</div>
						</li>
					<?php endforeach; ?>
				<?php endif; ?>

            </div>

            <?php
            	include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/admin/footer.php');
            ?>
        </div>
        <!-- Content End -->


	</div>
</body>

</html>
