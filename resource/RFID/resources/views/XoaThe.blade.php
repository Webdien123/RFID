<!DOCTYPE html>
<html lang="vi">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Trang hủy thẻ</title>

		@include('link_css_js')
	</head>
	<body>
		<div class="container-fluid">
			@include('admin_header')
			<br>
			<h1 class="text-center">Danh sách sinh viên đã đăng kí</h1>

	 		<table class="table table-hover table-bordered">
	 			<thead>
	 				<tr>
	 					<th>Họ tên</th>
	 					<th>MSSV</th>
	 					<th>Số điện thoại</th>
	 					<th>Ngày sinh</th>
	 					<th>Mã thẻ</th>
	 					<th>Thao tác</th>
	 				</tr>
	 			</thead>
	 			<tbody>
	 				@for($i = 0; $i < count($danhsachthe); $i++)
		 				<tr>
		 					<td>{{ $danhsachthe[$i]->sinhvien->hoten }}</td>
		 					<td>{{ $danhsachthe[$i]->sinhvien->mssv }}</td>
		 					<td>{{ $danhsachthe[$i]->sinhvien->sdt }}</td>
		 					<td>{{ date("d-m-Y", strtotime($danhsachthe[$i]->sinhvien->ngsinh)) }}</td>
		 					<td>{{ $danhsachthe[$i]->id }}</td>
		 					<td>
								<a href="{{ '/SuaSV/'.$danhsachthe[$i]->mssv }}" target="_blank" class="btn btn-success">
									<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
									Sửa thông tin
								</a>

								<button type="button" class="btn btn-danger" 
								onclick="
									if(window.confirm('Xóa cả thông tin sinh viên này trong bộ nhớ?')){
										window.location.replace('<?php echo "/XuLyXoaThe/".$danhsachthe[$i]->mssv."/true"; ?>');
									}
									else{
										window.location.replace('<?php echo "/XuLyXoaThe/".$danhsachthe[$i]->mssv."/false"; ?>');
									}
								">
									<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
									Hủy thẻ
								</button>
							</td>
		 				</tr>
		 			@endfor
	 			</tbody>
	 		</table>
		</div>
		
	</body>
</html>