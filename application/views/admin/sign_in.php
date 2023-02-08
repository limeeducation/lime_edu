<?php
	include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/admin/head.php');
?>

<body>
    <div class="container-fluid position-relative d-flex p-0">

        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="https://mylimeedu.com/admin" class="">
                                <h3 class="text-success"><i class="fa fa-user-edit me-2"></i>LIME EDU ADMIN</h3>
                            </a>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="userId">
                            <label for="floatingInput">ID</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="userPass" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="remember">
								<label class="form-check-label" for="remember">ID 기억하기</label>
							</div>
						</div>
                        <button type="submit" class="btn btn-success py-3 w-100 mb-4" id="btnLogin">LOGIN</button>
                        <p class="text-center mb-0">관리자 계정이 없으신가요? <a class="text-success" href="" onclick="javascript:on_product_alert()">관리자 계정 신청하기</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
        <form id="info_form" style="display: none;">
        	<input type="hidden" id="id" name="id">
        	<input type="hidden" id="user_idx" name="user_idx">
        	<input type="hidden" id="mobile" name="mobile">
        	<input type="hidden" id="name" name="name">
        	<input type="hidden" id="position" name="position">
        </form>
    </div>

    <script type="text/javascript">

    	function on_product_alert(){
    		alert("현재 준비중인 기능입니다.");
    	}

    	$('#btnLogin').on('click', function () {
			doLogin();
		});

		$('#userPass').bind('keydown', function(e) {
			if(e.keyCode == 13) {
				$('#btnLogin').trigger('click');
			}
		});

		function doLogin() {
			var userid = $('#userId').val();
			if(userid.length == 0) {
				alert('아이디를 입력해 주세요.');
				$('#userId').focus();
				return false;
			}
			var userpass = $('#userPass').val();
			if(userpass.length == 0) {
				alert('비밀번호를 입력해 주세요.');
				$('#userPass').focus();
				return;
			}
			var remember = document.getElementById('remember');
			var isRememberChk = $(remember).is(':checked');
			is_resend = false;
			//로그인 기능 ajax로 변경
			$.ajax({
				type : 'post',
				url : '/admin/doSignIn',
				data : {
					'userId' : userid,
					'userPass' : userpass,
					'remember' : isRememberChk
				},
				dataType : 'json',
				async : true,
				success : function(data){
					if(data.result == 'success'){
						document.getElementById('mobile').value = data.mobile;
						document.getElementById('id').value = data.id;
						document.getElementById('name').value = data.name;
						document.getElementById('user_idx').value = data.user_idx;
						document.getElementById('position').value = data.position;

						$('#info_form').attr({
							method: 'post',
							action: '/admin/successLogin'
						}).submit();

					}else{
						alert(data.msg);
					}
				},error : function(data){
					alert("통신중 장애가 발생 하였습니다.");
					console.log(data.msg);
				}
			});
		}

    </script>
</body>

</html>
