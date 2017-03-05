$(document).ready(function () {

    // $.validator.addMethod("regx", function(value, element, regexpr) {          
    //     return regexpr.test(value);
    // }, "Mã số sinh viên có dạng Bxxxxxxx.");

    // Hàm xử lý thông báo và ràng buột khi nhập dữ liệu
    $( "#f_editsv" ).validate({
        rules: {
            hoten: "required",
            mssv:{
                required: true,
                maxlength: 8
            },
            sdt: {
                required: true,
                number: true,
                minlength: 10
            },
            ngsinh: "required"
        },

        messages: {
            hoten: "Bạn chưa nhập tên",
            mssv: {
                required: "Bạn chưa nhập mã số",
                maxlength: "Mã số tối đa là 8 kí tự"
            },
            sdt: {
                required: "Bạn chưa nhập số điện thoại",
                number: "Số điện thoại phải là chữ số",
                minlength: "số điện thoại tối thiểu 10 chữ số"
            },
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