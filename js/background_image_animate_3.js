


var images = new Array();   //array to hold the url to images

	images[0] = "img/fallspark1.jpg";
	images[1] = "img/fallspark2.jpg";
	images[2] = "img/greenville1.jpg";
	images[3] = "img/greenville1.jpg";
	images[4] = "img/greenville1.jpg";
	images[5] = "img/greenville1.jpg";
	images[6] = "img/greenville1.jpg";
	images[7] = "img/greenville1.jpg";
	images[8] = "img/greenville1.jpg";
	images[9] = "img/greenville1.jpg";
	images[10] = "img/greenville1.jpg";
	images[11] = "img/greenville1.jpg";
	images[12] = "img/greenville1.jpg";
	images[13] = "img/greenville1.jpg";
	
	
	
var timer = 10000; //length of time before the next image is rotated to, default is 15 seconds
var effect_timer = 4000; //length of time that the effect takes place, default is 4 seconds
var current_image = 'alpha'; //current image that is visible, default is alpha
var last_image = 'bravo';

var image_count = 0; //default image iterator

$(document).ready(function() {
	Load_Next_Image();
	var localtimer = setInterval(Load_Next_Image, timer);
	
});
function Load_Next_Image () {
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
	if (image_count <= (images.length - 1)) {
		image_count++;	
	} else {
		image_count = 0;
	}
	Transition_Next_Image();
};
function Transition_Next_Image() {
	
	$("img#bg_" + current_image).slideDown(effect_timer);
	$("img#bg_" + last_image).fadeOut(4200);

};