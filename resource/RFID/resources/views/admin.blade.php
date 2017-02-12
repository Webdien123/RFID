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
		<div class="container">
			<h1 class="text-center">Đăng ký thông tin</h1>

			<h4 class="text-center">Vui lòng quét thẻ của bạn</h4>

			<form action="postForm" method="post" id="myform" class="text-center">
				{{ csrf_field() }}
				Mã thẻ: <input type="text" name="HoTen" id="MaThe" readonly>
				<input type="submit"
	   				style="position: absolute; left: -9999px; width: 1px; height: 1px;"tabindex="-1" />
			</form>

			<h3>Thông tin cần đăng kí:</h3>

			<table class="table table-hover">
				<thead>
					<tr>
						<th>Họ tên</th>
						<th>MSSV</th>
						<th>Ngày sinh</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Nguyễn Công Ty</td>
						<td>B1305056</td>
						<td>22/02/1989</td>
						<td>
							<button type="button" class="btn btn-warning">
								<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
								Sửa</button>

							<button type="button" class="btn btn-danger">
								<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
								Xóa</button>
						</td>
					</tr>


				</tbody>
			</table>

		</div>
		
	</body>
</html>