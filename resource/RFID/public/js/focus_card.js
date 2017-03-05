$(document).ready(function(){
    $("#MaThe").focus();
    $("#MaThe").focusout(function(){
	    $("#MaThe").focus();
	});
});