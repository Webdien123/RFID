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
		<div class="container-fluid">
			<div class="btn-group col-sm-12">
				<a href="/" class="btn btn-primary col-sm-2">
					<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
					Trang chủ
				</a>
				<a href="/trangquantri" class="btn btn-info col-sm-2">
					<span class="glyphicon glyphicon-sunglasses" aria-hidden="true"></span>
					Trang quản trị
				</a>
			</div>
			</br>

			<h1 class="text-center">Vui lòng quét thẻ của bạn</h1>

			<form action="/Input_card" method="post" class="text-center" id="f_quet_the">
				{{ csrf_field() }}
				Mã thẻ: <input type="text" name="id" id="MaThe" readonly>
				<input type="submit"
	   				style="position: absolute; left: -9999px; width: 1px; height: 1px;"tabindex="-1" />
			</form>

			</br>

			@yield('Input_card')
			
		</div>
		
		<script src="/js/focus_card.js"></script>
		
	</body>
</html>