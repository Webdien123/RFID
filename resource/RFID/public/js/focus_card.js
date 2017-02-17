$(document).ready(function(){
    $("#MaThe").focus();
    $("#MaThe").focusout(function(){
	    $("#MaThe").focus();
	});
});

$('#MaThe').keyup(function() {
  $('#MaThe').val('');
});

$( "#f_quet_the" ).submit(function( event ) {
  // alert( "Handler for .submit() called." );
  event.preventDefault();
});