var mywidth = $(window).width();
load_page(mywidth, "index");


function load_page(mywidth, page){
	if (mywidth < 590){
		$.ajax({ type: "POST", url:"./lib/ajax_interface/interface.php", data: {function: "Load_header", content : "mobile"}, dataType: "html", success: function(data){}});
		$.ajax({ type: "POST", url:"./lib/ajax_interface/interface.php", data: {function: "Load_page", content : "mobile"}, dataType: "html", success: function(data){}});
	}else if ((mywidth >= 590) && (mywidth < 800)) {
	
	}else if ((mywidth >= 800) && (mywidth < 1280)){

	} else if (mywidth >= 1280) {
		$.ajax({ type: "POST", url:"./lib/ajax_interface/interface.php", data: {function: "Load_header", screen : "widescreen", my_page : page }, dataType: "html", success: function(data){('head').append(data)}});
		$.ajax({ type: "POST", url:"./lib/ajax_interface/interface.php", data: {function: "Load_page", screen : "widescreen", my_page : page }, dataType: "html", success: function(data){('body').html(data)}});
	}
	output_includes();
	load_page_content();
}