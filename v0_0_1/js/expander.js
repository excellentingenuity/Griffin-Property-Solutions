// JavaScript Document

$(document).ready(function() {
	var window_height = window.innerHeight;
   var spacer_height = (window_height * .53);
   $('.fluid_spacer').css('height', spacer_height + 'px');
});

function content_expansion (myid){
	//var myid = $(this).attr("id");
	$('.fluid_spacer').hide('slow');
	$.ajax({ url:"interface.php", type: "POST", data: {function: "Load_content", content : myid},dataType: "html", success: function(response){$("h2#hidden_content").append(response)}});
	$('.main_content').show('slow');
	$('.hidden_content').css('visibility', 'visible');
};