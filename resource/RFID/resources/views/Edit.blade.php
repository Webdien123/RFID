<!DOCTYPE html>
<html lang="vi">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Sửa thông tin</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

		<script src="/js/jquery.validate.js"></script>

		<script src="/js/validate_editsv_form.js"></script>

	</head>

	<body>
		<div class="container-fluid row">
			<div class="col-sm-6 col-sm-offset-3">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Sửa thông tin</h3>
					</div>
					<div class="panel-body">
						<form action="/XuLySuaSV" method="POST" id="f_editsv">
							{{ csrf_field() }}

							<div class="form-group">
								<label for="">Mã số sinh viên:</label>
								<input type="text" name="mssv" id="mssv" class="form-control" value="{{ $sv->mssv }}" readonly>
							</div>

							<div class="form-group">
								<label for="">Họ tên:</label>
								<input type="text" name="hoten" id="hoten" value="{{ $sv->hoten }}" class="form-control" >
							</div>

							<div class="form-group">
								<label for="">Số điện thoại:</label>
								<input type="text" name="sdt" id="sdt" value="{{ $sv->sdt }}" class="form-control" >
							</div>

							<div class="form-group">
								<label for="">Ngày sinh:</label>
								<input type="date" name="ngsinh" id="ngsinh" value="{{ $sv->ngsinh }}" class="form-control">
							</div>

							<button type="button" class="btn btn-default" data-dismiss="modal" onclick="window.top.close();">
								<span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>
								Hủy
							</button>

							<button type="submit" class="btn btn-info">
								<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
								Sửa thông tin
							</button>
						</form>
					</div>
				</div>				
			</div>
			


		</div>
	</body>
</html>