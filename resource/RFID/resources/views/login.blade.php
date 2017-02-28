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
						<form action="/login_process" method="POST">
							{{ csrf_field() }}
							<div class="form-group">
								<label for="">Tên đang nhập:</label>
								<input type="text" class="form-control" name="uname" placeholder="tên đăng nhập">
							</div>
						
							<div class="form-group">
								<label for="">Mật khẩu:</label>
								<input type="password" class="form-control" name="pass" placeholder="mật khẩu">
							</div>

							<button type="submit" class="btn btn-default">
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