<!DOCTYPE html>
<html lang="vi">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Trang hủy thẻ</title>

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
		<h1 class="text-center">Danh sách sinh viên đã đăng kí</h1>

 		<table class="table table-hover table-bordered">
 			<thead>
 				<tr>
 					<th>Họ tên</th>
 					<th>MSSV</th>
 					<th>Số điện thoại</th>
 					<th>Ngày sinh</th>
 					<th>Mã thẻ</th>
 				</tr>
 			</thead>
 			<tbody>
 				@for($i = 0; $i < count($danhsachthe); $i++)
	 				<tr>
	 					<td><?php echo $danhsachthe[$i]->sinhvien->hoten; ?></td>
	 					<td><?php echo $danhsachthe[$i]->sinhvien->mssv; ?></td>
	 					<td><?php echo $danhsachthe[$i]->sinhvien->sdt; ?></td>
	 					<td><?php echo date("d-m-Y", strtotime($danhsachthe[$i]->sinhvien->ngsinh)); ?></td>
	 					<td><?php echo $danhsachthe[$i]->id ?></td>
	 				</tr>
	 			@endfor
 			</tbody>
 		</table>
	</body>
</html>