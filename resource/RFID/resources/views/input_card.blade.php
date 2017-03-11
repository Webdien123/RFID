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
								<?php echo $sv->hoten; ?>
								<audio id="audio-docten" src="<?php echo './audios/' . $sv->mssv . '.mp3'; ?>" hidden></audio>
								<button type="button" id="btn_doc_ten" class="btn btn-default">
								<script src="/js/input_card.js"></script>
								<span class="glyphicon glyphicon-volume-up" aria-hidden="true"></span>
								Đọc họ tên</button>
							</td>
						</tr>

						<tr>
							<th>MSSV</th>
							<td>
								<?php echo $sv->mssv; ?>
							</td>
						</tr>

						<tr>
							<th>Ngày sinh</th>
							<td>
								<?php echo date("d-m-Y", strtotime($sv->ngsinh)); ?>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection