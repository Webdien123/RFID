$(document).ready(function(){
    $("#MaThe").focus();
    $("#MaThe").focusout(function(){
	    $("#MaThe").focus();
	});
});

$('#MaThe').keypress(function(e) {
    if(e.which == 13) {
        alert('You pressed enter!');
    }
});