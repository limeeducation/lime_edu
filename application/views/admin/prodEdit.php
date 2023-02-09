<?php
	include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/admin/head.php');
?>
<link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js" ></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" ></script>
<script>
	$(function(){
		$("#btn_prod_save").bind('click',function(){
			if('' == $('#prodName').val()) alert('상품 이름을 입력해주세요.');
			else if('' == $('#prodImgUrl').val()) alert('상품 상세 이미지 URL을 입력해주세요.');
			else{
				$( "#product_save" ).submit();
			}
		})
	});

	$(document).ready(function(){
		if('<?= $stat;?>' == 'edit'){
			$('#prodName').val("<?= empty($prod_name) ? '' : $prod_name;?>");
			$("#prodImgUrl").val("<?= empty($prod_img_url) ? '' : $prod_img_url;?>");
			$("#prodViewUrl").val("<?= empty($prod_view_url) ? '' : $prod_view_url;?>");
		}
	});

	function prod_col(){
		location.href="/adminProd/prodDel<?= empty($prod_idx) ? '' : '/'.$prod_idx;?>";
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
                <div class="bg-secondary rounded h-100 p-4">
					<h6 class="mb-4">상품 <?= $stat == 'edit' ? '수정' : '등록';?></h6>
					<form action="/adminProd/prodSave" id="product_save" method="post">
						<input type="hidden" class="form-control" name="edit_type" value='<?= $stat;?>'>
						<?php if($stat == "edit") :?>
							<input type="hidden" class="form-control" name="prod_idx" value="<?= $prod_idx;?>">
						<?php endif;?>
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="prodName" name="prod_name">
							<label for="prodName" class="form-label">상품 이름</label>
						</div>
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="prodImgUrl" name="prod_img_url">
							<label for="prodImgUrl" class="form-label">상품 상세 이미지 주소</label>
						</div>
						<?php if($stat == "edit") :?>
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="prodViewUrl" name="prod_view_url" readonly>
							<label for="prodViewUrl" class="form-label">상품 상세페이지 URL</label>
						</div>
						<?php endif;?>
						<button type="button" class="btn btn-success" id="btn_prod_save">상품 저장</button>
						<button type="button" class="btn btn-primary" onclick="history.back()" id="prod_cancel">취소</button>
						<?php if($stat == "edit") :?>
							<button type="button" class="btn btn-success rounded-pill m-2" onclick="javascript:prod_col();">삭제</button>
						<?php endif;?>
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
