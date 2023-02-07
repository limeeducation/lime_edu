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
			<!-- Recent Sales Start -->
			<div class="container-fluid pt-4 px-4">
				<div class="bg-secondary text-center rounded p-4">
					<div class="d-flex align-items-center justify-content-between mb-4">
						<h6 class="mb-0">상담 신청 학생</h6>
						<a href="/adminStudent/editStudent" >등록하기</a>
					</div>
					<div class="table-responsive">
						<table class="table text-start align-middle table-hover mb-0">
							<thead>
								<tr class="text-white">
									<th scope="col">No.</th>
									<th scope="col">이름</th>
									<th scope="col">희망 국가</th>
									<th scope="col">희망 분야</th>
									<th scope="col">희망 시작일</th>
									<th scope="col">희망 상담일</th>
									<th scope="col">상담 희망 지사</th>
									<th scope="col">상담 신청일</th>
									<th scope="col"></th>
								</tr>
							</thead>
							<tbody>
								<?php
									if($studentCnt[0]->cnt > 0):
									foreach($students as $student):
								?>
								<tr>
									<td><?= empty($student->con_idx) ? ' - ' 		: $student->con_idx;?></td>
									<td><?= empty($student->con_name) ? ' - ' 		: $student->con_name;?></td>
									<td><?= empty($student->con_natio) ? ' - ' 		: $student->con_natio;?></td>
									<td><?= empty($student->con_study) ? ' - ' 		: $student->con_study;?></td>
									<td><?= empty($student->con_start_dt) ? ' - ' 	: $student->con_start_dt;?></td>
									<td><?= empty($student->con_date) ? ' - ' 		: $student->con_date;?></td>
									<td><?= empty($student->con_office) ? ' - ' 	: $student->con_office;?></td>
									<td><?= empty($student->con_reg_dt) ? ' - ' 	: $student->con_reg_dt;?></td>
									<td><a class="btn btn-sm btn-success" href="/adminStudent/editStudent/<?= $student->con_idx; ?>">자세히 보기</a></td>
								</tr>
								<?php endforeach;?>
								<?php else:?>
									<tr><td colspan="9" style="text-align:center;">신규 상담 신청 내역이 없습니다.</td></tr>
								<?php endif;?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- Recent Sales End -->

            <?php
            	include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/admin/footer.php');
            ?>
        </div>
        <!-- Content End -->


	</div>
</body>

</html>
