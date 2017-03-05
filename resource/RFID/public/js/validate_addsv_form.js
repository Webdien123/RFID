$(document).ready(function () {

    // Hàm xử lý thông báo và ràng buột khi nhập dữ liệu
    $( "#f_addsv" ).validate({
        rules: {
            hoten: "required",
            mssv: "required",
            sdt: "required",
            ngsinh: "required"
        },

        messages: {
            hoten: "Bạn chưa nhập tên",
            mssv: "Bạn chưa nhập mật khẩu",
            sdt: "Bạn chưa nhập số điện thoại",
            ngsinh: "Bạn chưa nhập ngày sinh"
        },

        errorPlacement: function (error, element) {
            error.attr("color", "red");
            error.addClass("help-block");
            error.insertAfter(element);
        },

        errorClass: "has-error",
        validClass: "has-success",
        highlight: function(element,errorClass,validClass){
            $(element).parent(".form-group").addClass(errorClass).removeClass(validClass);   
        },
	                
        unhighlight: function(element, errorClass, validClass) {
            $(element).parent(".form-group").removeClass(errorClass).addClass(validClass); 
        }

    });
});