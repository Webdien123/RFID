$(document).ready(function () {
	$('#xoa_sv_1').click(function(){ 
		if(window.confirm("Xóa sinh viên này?"))
			window.location.replace("/xoa_sv_1/1");
	});
});