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

		<script src="/js/jquery.validate.js"></script>

		<script src="/js/validate_addsv_form.js"></script>

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
											{{ $danhsachsv[0]->hoten }}
										</td>
									</tr>

									<tr>
										<th>MSSV</th>
										<td id="ms_0">
											{{ $danhsachsv[0]->mssv }}
										</td>
									</tr>

									<tr>
										<th>Số điện thoại</th>
										<td>
											{{ $danhsachsv[0]->sdt }}
										</td>
									</tr>

									<tr>
										<th>Ngày sinh</th>
										<td>
											{{ date("d-m-Y", strtotime($danhsachsv[0]->ngsinh)) }}
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

											<button type="button" class="btn btn-danger"
											onclick="if(window.confirm('Xóa sinh viên này?')){
											window.location.replace('<?php echo "/XoaSV/".$danhsachsv[0]->mssv; ?>');}">
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
			<button type="button" class="btn btn-primary col-sm-2"  data-toggle="modal" href='#modal-themsv'>
				<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
				Thêm sinh viên
			</button>

			<div class="modal fade" id="modal-themsv">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title">Thêm sinh viên</h4>
						</div>
						<div class="modal-body">
							<form action="/AddSV" method="POST" id="f_addsv">
								{{ csrf_field() }}
								<div class="form-group">
									<label for="">Họ tên:</label>
									<input type="text" name="hoten" id="hoten" class="form-control" placeholder="họ tên">
								</div>

								<div class="form-group">
									<label for="">MSSV:</label>
									<input type="text" name="mssv" id="mssv" class="form-control" placeholder="mã số sinh viên">
								</div>

								<div class="form-group">
									<label for="">Số điện thoại:</label>
									<input type="text" name="sdt" id="sdt" class="form-control" placeholder="số điện thoại">
								</div>

								<div class="form-group">
									<label for="">Ngày sinh:</label>
									<input type="date" name="ngsinh" id="ngsinh" class="form-control">
								</div>

								<button type="button" class="btn btn-default" data-dismiss="modal">
									<span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>
									Hủy
								</button>

								<button type="submit" class="btn btn-primary">
									<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
									Thêm sinh viên
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>





			
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
							<td>{{ $danhsachsv[$i]->hoten }}</td>
							<td>{{ $danhsachsv[$i]->mssv }}</td>
							<td>{{ $danhsachsv[$i]->sdt }}</td>
							<td>{{ date("d-m-Y", strtotime($danhsachsv[$i]->ngsinh)) }}</td>

							<td>
								<button type="button" class="btn btn-success">
									<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
									Sửa thông tin</button>

								<button type="button" class="btn btn-danger"
									onclick="if(window.confirm('Xóa sinh viên này?')){
									window.location.replace('<?php echo "/XoaSV/".$danhsachsv[$i]->mssv; ?>');}">
									<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
									Xóa
								</button>
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