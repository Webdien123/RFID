<!DOCTYPE html>
<html lang="vi">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Trang đăng kí</title>

		@include('link_css_js')

		<script src="<?php echo asset('js/jquery.validate.js')?>"></script>

		<script src="<?php echo asset('js/validate_addsv_form.js')?>"></script>
		
		<script src="<?php echo asset('js/focus_card.js')?>"></script>

	</head>

	<body>
		<div class="container-fluid">
			@include('admin_header')

			<h1 class="text-center text-danger">{{ $mes }}</h1>

			<center><img src="<?php echo asset('img/sad.png')?>" class="img-responsive" alt="Image"></center>
			
			<h3 class="text-center">Bấm vào đây để thử lại hoặc về trang quản trị để thực hiện các thao tác khác.</h3>

		</div>
	</body>
</html>