<!DOCTYPE html>
<html lang="vi">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Trang chủ</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

		<script src="/js/jquery.validate.js"></script>

		<script src="/js/validate_form.js"></script>
	</head>
	<body>
		<div class="container-fluid">
		<h1 class="text-center">Trang đăng nhập</h1>
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Đăng nhập</h3>
					</div>
					<div class="panel-body">
						<form action="/login_process" method="POST" id="f_dgnhap">
							{{ csrf_field() }}
							<div class="form-group">
								<label for="">Tên đang nhập:</label>
								<input type="text" class="form-control" name="uname" id="uname" placeholder="tên đăng nhập">
							</div>
						
							<div class="form-group">
								<label for="">Mật khẩu:</label>
								<input type="password" class="form-control" name="pass" id="pass" placeholder="mật khẩu">
							</div>

							<?php 
								if (Session::get('err') == "1") {
									echo "
										<h4><i class='text-danger'>Tên đăng nhập hoặc mật khẩu không đúng</i></h4>
									";
									Session::forget('err');
								}
							?>
							
							<button type="submit" class="btn btn-success">
								<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
								Đăng nhập
							</button>

							<a href="/" class="btn btn-primary">
								<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
								Về trang chủ</a>
						</form>
					</div>
				</div>
			</div>
		</div>

		</div>
	</body>
</html>