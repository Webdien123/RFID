<!DOCTYPE html>
<html lang="vi">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Trang đăng kí</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</head>

	<body>
		<div class="container">
			<h1 class="text-center">Đăng ký thẻ mới</h1>

			<!-- <form action="postForm" method="post" id="myform" class="text-center">
				{{ csrf_field() }}
				<input type="text" name="HoTen" id="MaThe" readonly>
				<input type="submit"
	   				style="position: absolute; left: -9999px; width: 1px; height: 1px;"tabindex="-1" />
			</form></br> -->

			<div class="panel panel-info col-sm-6 col-sm-offset-3">
				<div class="panel-heading">
					<h3 class="panel-title">Thông tin đăng kí</h3>
				</div>
				<div class="panel-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Thẻ đăng kí</th>
								<th>
									<input type="text" name="HoTen" id="MaThe" readonly>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>Họ tên</th>
								<td>Nguyễn Công Trường</td>
							</tr>

							<tr>
								<th>MSSV</th>
								<td>B1301110</td>
							</tr>

							<tr>
								<th>Ngày sinh</th>
								<td>01/02/1995</td>
							</tr>

							<tr>
								<td colspan="2">
									<!-- <button type="button" class="btn btn-success">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
										Đăng ký sau</button> -->

									<button type="button" class="btn btn-success">
										<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
										Sửa thông tin</button>

									<button type="button" class="btn btn-danger">
										<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
										Xóa</button>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

			<h3 class="col-sm-12">Danh sách đăng kí tiếp theo:</h3>

			<table class="table table-hover table-bordered">
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
						<td>B1301011</td>
						<td>22/02/1995</td>
						<td>
							<button type="button" class="btn btn-success">
								<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
								Sửa thông tin</button>

							<button type="button" class="btn btn-danger">
								<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
								Xóa</button>
						</td>
					</tr>

					<tr>
						<td>Nguyễn Công An</td>
						<td>B1301012</td>
						<td>13/12/1996</td>
						<td>
							<button type="button" class="btn btn-success">
								<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
								Sửa thông tin</button>

							<button type="button" class="btn btn-danger">
								<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
								Xóa</button>
						</td>
					</tr>

					<tr>
						<td>Nguyễn Công Công</td>
						<td>B1301013</td>
						<td>14/09/1994</td>
						<td>
							<button type="button" class="btn btn-success">
								<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
								Sửa thông tin</button>

							<button type="button" class="btn btn-danger">
								<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
								Xóa</button>
						</td>
					</tr>

				</tbody>
			</table>

		</div>
		
		<script src="/js/focus_card.js"></script>

	</body>
</html>