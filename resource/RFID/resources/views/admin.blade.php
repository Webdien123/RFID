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
		<div class="container-fluid">
			<div class="col-sm-2 col-sm-offset-10">
					{!! 'Xin chào: <b>'.Session::get('uname').'</b>' !!}

				<a href="/logout" class="btn btn-warning">
					<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
					Đăng xuất
				</a>
			</div>

			<h1 class="text-center">Đăng ký thẻ mới</h1>

			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<div class="panel panel-info">
						<div class="panel-heading">
							<h3 class="panel-title">Thông tin đăng kí</h3>
						</div>
						<div class="panel-body">
							<table class="table table-hover">

							@if (count($danhsachsv) > 0)
								<thead>
									<tr>
										<th>Thẻ đăng kí</th>
										<th>
											<form action="/" method="post">
												{{ csrf_field() }}
												<input type="text" name="id" id="MaThe" placeholder="quét thẻ để đăng kí">
												<input type="submit"
									   				style="position: absolute; left: -9999px; width: 1px; height: 1px;"tabindex="-1" />
											</form>
										</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th>Họ tên</th>
										<td>
											{{ $danhsachsv[0]['hoten'] }}
										</td>
									</tr>

									<tr>
										<th>MSSV</th>
										<td>
											{{ $danhsachsv[0]['mssv'] }}
										</td>
									</tr>

									<tr>
										<th>Số điện thoại</th>
										<td>
											{{ $danhsachsv[0]['sdt'] }}
										</td>
									</tr>

									<tr>
										<th>Ngày sinh</th>
										<td>
											{{ date("d-m-Y", strtotime($danhsachsv[0]['ngsinh'])) }}
										</td>
									</tr>

									<tr>
										<td colspan="2">
											<button type="button" class="btn btn-info">
												<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
												Đăng ký sau</button>

											<button type="button" class="btn btn-success">
												<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
												Sửa thông tin</button>

											<button type="button" class="btn btn-danger">
												<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
												Xóa</button>
										</td>
									</tr>
								</tbody>
							@else
								<thead>
									<tr>
										<th>Không có thông tin, thêm sinh viên mới nếu muốn đăng kí tiếp tục</th>
									</tr>						
								</thead>
							@endif
								
							</table>
						</div>
			</div>
				</div>
			</div>
			<h3 class="col-sm-12">Danh sách đăng kí tiếp theo:</h3>
			<button type="button" class="btn btn-primary col-sm-2">
				<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
				Thêm sinh viên
			</button>
			
			<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th>Họ tên</th>
						<th>MSSV</th>
						<th>Số điện thoại</th>
						<th>Ngày sinh</th>
						<th>Thao tác</th>
					</tr>
				</thead>
				<tbody>
				@if( count($danhsachsv) > 1 )
					@for($i = 1; $i < count($danhsachsv); $i++)
						<tr>
							<td>{{ $danhsachsv[$i]['hoten'] }}</td>
							<td>{{ $danhsachsv[$i]['mssv'] }}</td>
							<td>{{ $danhsachsv[$i]['sdt'] }}</td>
							<td>{{ date("d-m-Y", strtotime($danhsachsv[$i]['ngsinh'])) }}</td>

							<td>
								<button type="button" class="btn btn-success">
									<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
									Sửa thông tin</button>

								<button type="button" class="btn btn-danger">
									<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
									Xóa</button>
							</td>
						</tr>
					@endfor
				@else
					<tr>
						<th colspan="5" class="text-center">
							danh sách trống
						</th>
					</tr>
				@endif
				</tbody>
			</table>

		</div>
		
		<script src="/js/focus_card.js"></script>

	</body>
</html>