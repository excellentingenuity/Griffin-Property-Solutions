//TODO: breakout function for js and css then also page content selection instead of by screen view
//do screen view adding to a gloabl js and css includes list

var js_includes = Array();
var css_includes = Array();
var file;


function screen_loads(mywidth, page){
	if (mywidth < 590){
		file = "phone-" + page + ".php";
		inculde_phone(mywidth);
	}else if ((mywidth >= 590) && (mywidth < 800)) {
		file = "tablet-" + page + ".php";
		include_tablet(mywidth);	
	}else if ((mywidth >= 800) && (mywidth < 1280)){
		file = "desktop-" + page + ".php";
		include_desktop(mywidth);
	} else if (mywidth >= 1280) {
		file = "desktop-" + page + ".php";
		include_widescreen();
	}
	output_includes();
	load_page_content();
}

function include_all() {
	css_includes.push('<link rel="stylesheet" media="all" href="css/bootstrap.css">');
	css_includes.push('<link rel="stylesheet" media="all" href="css/bootstrap-responsive.css">');
	css_includes.push('<link rel="stylesheet" media="screen" href="css/base.css">');
	js_includes.push('<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->');
	js_includes.push('<script src="js/bootstrap.js"></script>');
	js_includes.push('<script src="js/bootstrap-tab.js"></script>');
	js_includes.push('<script src="js/bootstrap-button.js"></script>');
	//output_includes();
	
}
function include_phone() {
	
}
function include_tablet(){
	
}
function include_desktop() {
	include_all();
	css_includes.push('<link rel="stylesheet" media="all" href="css/Background_image_animate.css">');
	css_includes.push('<link rel="stylesheet" media="screen and (min-width: 801px) and (max-width: 1280px)" href="css/desktop.css">');
	css_includes.push('<script src="js/background_image_animate_3.js"></script>');
	js_includes.push('<script src="js/expander.js"></script>');	
	//output_includes();
	
}
function include_widescreen() {
	//include_all();
	include_desktop();
	css_includes.push('<link rel="stylesheet" media="screen and (min-width: 1280px)" href="css/widescreen.css">');
	//output_includes();
	//load_page_content("desktop.php");
}

function output_includes(){
	for( i in css_includes){
		$('head').append(css_includes[i]);
	}
	for(i in js_includes){
		$('head').append(js_includes[i]);
	}
}

function load_page_content(){
	
	$.ajax({ type: "POST", url: file, dataType: "html", success: function(data){content_replace(data, 'body')}});
}
function content_replace (data, id){
	$(id).html(data);

};