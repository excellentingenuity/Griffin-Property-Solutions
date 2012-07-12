// JavaScript Document

$(document).ready(function() {
	sizer();
});
function sizer() {
	var window_height = window.innerHeight;
   var spacer_height = (window_height * .58);
   $('.fluid_spacer').css('height', spacer_height + 'px');
}
function content_expansion (myid){
	//var myid = $(this).attr("id");
	$('.fluid_spacer').hide('slow');
	$.ajax({ type: "POST", url:"./lib/ajax_interface/interface.php", data: {function: "Load_content", content : myid}, dataType: "html", success: function(data){$("h2.hidden_content").append(data)}});
	$('.main_content').show('slow');
	$('.hidden_content').css('visibility', 'visible');
};
function content_expansion_replace (myid, destinationid){
	//var myid = $(this).attr("id");
	var menu_id;
	switch (myid){
		case "nav_corp":
			menu_id = "v_corp";
			break;
		case "nav_residential":
			menu_id = "v_res";
			break;
		case "nav_brockerage":
			menu_id = "v_brock";
			break;
	}
	if($('.main_content').is(":visible")){
		$('.main_content').fadeOut(2100);
		$('.v_menu').fadeOut(2100);
		setTimeout(function () {$.ajax({ type: "POST", url:"./lib/ajax_interface/interface.php", data: {function: "Load_content", content : myid}, dataType: "html", success: function(data){content_replace(data, destinationid)}})}, 2100);	
		
	} else {
	$.ajax({ type: "POST", url:"./lib/ajax_interface/interface.php", data: {function: "Load_content", content : myid}, dataType: "html", success: function(data){content_replace(data, destinationid)}});
	}
	menu_replace (menu_id);
	$('.main_content').fadeIn(2100);
	$('.main_content').css('display', 'inline');
	$('.v_menu').fadeIn(2100);
	$('.v_menu').css('display', 'inline');

	
};

function content_replace (data, id){
		$(id).html(data);

};
function menu_replace (my_menu_id) {
	
	var corp = new Array(6); 
	for (i = 0; i < corp.length; i++) {corp[i] = new Array(2)};
	corp[0][0] = "industrial";
	corp[0][1] = "http://dummyimage.com/100x100";
	corp[1][0] = "industrial";
	corp[1][1] = "http://dummyimage.com/100x100";
	corp[2][0] = "industrial";
	corp[2][1] = "http://dummyimage.com/100x100";
	corp[3][0] = "industrial";
	corp[3][1] = "http://dummyimage.com/100x100";
	corp[4][0] = "industrial";
	corp[4][1] = "http://dummyimage.com/100x100";
	corp[5][0] = "industrial";
	corp[5][1] = "http://dummyimage.com/100x100";
	
	var res = new Array(6); 
	for (i = 0; i < res.length; i++) {res[i] = new Array(2)};
	res[0][0] = "industrial";
	res[0][1] = "http://dummyimage.com/100x100";
	res[1][0] = "industrial";
	res[1][1] = "http://dummyimage.com/100x100";
	res[2][0] = "industrial";
	res[2][1] = "http://dummyimage.com/100x100";
	res[3][0] = "industrial";
	res[3][1] = "http://dummyimage.com/100x100";
	res[4][0] = "industrial";
	res[4][1] = "http://dummyimage.com/100x100";
	res[5][0] = "industrial";
	res[5][1] = "http://dummyimage.com/100x100";
	
	
	var brock = new Array(6); 
	for (i = 0; i < brock.length; i++) {brock[i] = new Array(2)};
	brock[0][0] = "industrial";
	brock[0][1] = "http://dummyimage.com/100x100";
	brock[1][0] = "industrial";
	brock[1][1] = "http://dummyimage.com/100x100";
	brock[2][0] = "industrial";
	brock[2][1] = "http://dummyimage.com/100x100";
	brock[3][0] = "industrial";
	brock[3][1] = "http://dummyimage.com/100x100";
	brock[4][0] = "industrial";
	brock[4][1] = "http://dummyimage.com/100x100";
	brock[5][0] = "industrial";
	brock[5][1] = "http://dummyimage.com/100x100";

	
	var attr = $('.v_menu').attr('id');
	if(my_menu_id != attr) {
		switch (my_menu_id){
		case "v_corp":
			$('.v_menu').attr('id', my_menu_id);
			$('img.v_menu').each(function(index, myelem){$(myelem).attr('id', corp[index][0]); $(melem).attr('src', corp[index][1]); });
			break;
		case "v_res":
			$('.v_menu').attr('id', my_menu_id);
			$('img.v_menu').each(function(index, myelem){$(myelem).attr('id', res[index][0]); $(melem).attr('src', res[index][1]); });
			break;
		case "v_brock":
			$('.v_menu').attr('id', my_menu_id);
			$('img.v_menu').each(function(index, myelem){$(myelem).attr('id', brock[index][0]); $(melem).attr('src', brock[index][1]); });
			break;
		}
	}
}
