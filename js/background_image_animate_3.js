


var images = new Array();   //array to hold the url to images

	images[0] = "img/greenville1.jpg";
	images[1] = "img/greenville2.jpg";
	images[2] = "img/greenville3.jpg";
	images[3] = "img/greenville4.jpg";
	images[4] = "img/greenville5.jpg";
	images[5] = "img/greenville6.jpg";
	images[6] = "img/greenville7.jpg";
	images[7] = "img/greenville8.jpg";
	images[8] = "img/greenville9.jpg";
	images[9] = "img/greenville10.jpg";
	images[10] = "img/greenville11.jpg";
	images[11] = "img/greenville12.jpg";
	images[12] = "img/greenville13.jpg";
	images[13] = "img/greenville14.jpg";

var effects = new Array();

	effects[0] = "fade-in";
	effects[1] = "fade-in";
	effects[2] = "slide-right";
	effects[3] = "slide-left";
	effects[4] = "slide-down";
	effects[5] = "slide-up";
	 
	
	
var timer = 10000; //length of time before the next image is rotated to, default is 15 seconds
var effect_timer = 4000; //length of time that the effect takes place, default is 4 seconds
var current_image = 'alpha'; //current image that is visible, default is alpha
var last_image = 'bravo';


var image_count; //default image iterator
var image_max = images.length;


$(document).ready(function() {
	//$("img#bg_charlie").fadeOut(4000);
	Load_Next_Image();
	var localtimer = setInterval(Load_Next_Image, timer);
	
});
function Load_Next_Image () {
	if ($("img#bg_charlie").is(':visible')){
		$("img#bg_charlie").fadeOut(4000);
	}
	image_count = Math.floor(Math.random()*image_max);
	switch (current_image) {
		case 'alpha':
			//set source of bravo
			
			$("img#bg_bravo").attr('src', images[image_count]);
			current_image = 'bravo';
			last_image = 'alpha';
			break;
		case 'bravo':
			//set source of alpha
			
			$("img#bg_alpha").attr('src', images[image_count]);
			current_image = 'alpha';
			last_image = 'bravo';
			break; 
	}
	//TODO: add randomization of image here not to exceed max number of images
	/*if (image_count <= (images.length - 1)) {
		image_count++;	
	} else {
		image_count = 0;
	}*/
	Transition_Next_Image();
};
function Transition_Next_Image() {
	//TODO: add randomization of transitions
	var trans_max = effects.length;
	var trans_num = Math.floor(Math.random()*trans_max);
	//var trans_num = 0;
	switch (effects[trans_num]){
	case 'fade-in':
		//$("img#bg_" + current_image).width(100%);
		$("img#bg_" + current_image).fadeIn(effect_timer);
		break;
	case 'slide-down':
		$("img#bg_" + current_image).css("marginBottom", "100%");
		$("img#bg_" + current_image).show();
		$("img#bg_" + current_image).animate({marginBottom: "0px", display: "inline", visibility: "visible"}, effect_timer);
		break;
	case 'slide-up':
		$("img#bg_" + current_image).css("marginTop", "100%");
		$("img#bg_" + current_image).show();
		$("img#bg_" + current_image).animate({marginTop: "0px", display: "inline", visibility: "visible"}, effect_timer);
		break;
	case 'slide-right':
		$("img#bg_" + current_image).width(0);
		$("img#bg_" + current_image).show();
		//$("img#bg_" + current_image).css("visibility", "visible");
		$("img#bg_" + current_image).animate({width: "100%", display: "inline", visibility: "visible"}, effect_timer);
		break;
	case 'slide-left':
		$("img#bg_" + current_image).css("marginLeft", "100%");
		$("img#bg_" + current_image).show();
		$("img#bg_" + current_image).animate({marginLeft: "0", display: "inline", visibility: "visible"}, effect_timer);
		break;
	}
	
	//$("img#bg_" + current_image).slideDown(effect_timer);
	$("img#bg_" + last_image).fadeOut(4200);
	//$("img#bg_" + last_image).width(0);

};