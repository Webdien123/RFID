@extends('home')
@section('Input_card')
<div class="row">
	<div class="col-sm-6 col-sm-offset-3">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Thông tin thẻ</h3>
			</div>
			<div class="panel-body">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Mã thẻ</th>
							<th class="text-primary">
								<?php echo $mathe; ?>
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>Họ tên</th>
							<td>
								Nguyễn Công Trường
								<button type="button" class="btn btn-default">
								<span class="glyphicon glyphicon-volume-up" aria-hidden="true"></span>
								Đọc họ tên</button>
							</td>
						</tr>

						<tr>
							<th>MSSV</th>
							<td>B1301110</td>
						</tr>

						<tr>
							<th>Ngày sinh</th>
							<td>01/02/1995</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>

@endsection