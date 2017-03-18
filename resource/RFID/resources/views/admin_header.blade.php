<div class="row">
	<div class="col-sm-12 bg-success">
		<div class="pull-left">
			<a href="{{ route('GetViewHome') }}" class="btn btn-primary">
				<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
				Trang chủ
			</a>

			@if(strpos($_SERVER['REQUEST_URI'], 'SuaSV') || strpos($_SERVER['REQUEST_URI'], 'XoaThe'))
				<a href="{{ route('goAdmin') }}" class="btn btn-info">
					<span class="glyphicon glyphicon-sunglasses" aria-hidden="true"></span>
					Trang quản trị
				</a>	
			@endif
		</div>

		<div class="pull-right">
			{!! 'Xin chào: <b>'.Session::get('uname').'</b>' !!}

			<a href="{{ route('logout') }}" class="btn btn-warning">
				<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
				Đăng xuất
			</a>
		</div>
		
	</div>
</div>