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
			<a href="/trangquantri" class="btn btn-primary pull-right">Vào trang quản trị</a>

			<h1 class="text-center">Vui lòng quét thẻ của bạn</h1>

			<form action="postForm" method="post" id="myform" class="text-center">
				{{ csrf_field() }}
				Mã thẻ: <input type="text" name="HoTen" id="MaThe" readonly>
				<input type="submit"
	   				style="position: absolute; left: -9999px; width: 1px; height: 1px;"tabindex="-1" />
			</form>
		</div>
		
		<script type="text/javascript">
			$(document).ready(function(){
		        $("#MaThe").focus();
		        $("#MaThe").focusout(function(){
				    $("#MaThe").focus();
				});
			});
		</script>
		
	</body>
</html>