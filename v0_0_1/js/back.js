// JavaScript Document


function back_image(i){
	var imgurl = new Array("url(img/greenville1.jpg)", "url(img/fallspark1.jpg)", "url(img/fallspark2.jpg)" );
	document.body.style.backgroundImage = imgurl[i];
	if (i < (imgurl.length - 1)){
		i++;
	}else {
		i = 0;
	}
	
	return i;
	
	
}