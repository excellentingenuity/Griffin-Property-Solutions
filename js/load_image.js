// JavaScript Document
  	var aImages = new Array();
	//var aURL = new Array();
	//var aArtists = new Array();
	var iPrev = -1;
	var iRnd = -1;
	
	aImages[0] = "http://cobblestonestreets.files.wordpress.com/2011/06/dsc_1101.jpg";
	aImages[1] = "https://contest.thesca.org/sites/default/files/snow2012/mooo2550.jpg";
	aImages[2] = "http://cobblestonestreets.files.wordpress.com/2011/06/dsc_1111.jpg";
	aImages[3] = "http://www.ballparksandbrews.com/wp-content/uploads/2011/09/DSC00124.jpg";
	aImages[4] = "http://aroundofsound.files.wordpress.com/2009/05/duck1.jpg";
	aImages[5] = "http://photos2.meetupstatic.com/photos/event/c/1/4/c/highres_16909484.jpeg";
	aImages[6] = "http://obxcdn.nagshead-homes.com/wp-content/uploads/2010/08/IMG_1454.jpg";

	/*aURL[0] = "http://kunst.canvasinabox.com/?_globalsearch=47-7";
	aURL[1] = "http://kunst.canvasinabox.com/?_globalsearch=48-7";
	aURL[2] = "http://kunst.canvasinabox.com/?_globalsearch=46-7";
	aURL[3] = "http://kunst.canvasinabox.com/?_globalsearch=133-18";
	aURL[4] = "http://kunst.canvasinabox.com/?_globalsearch=174-27";
	aURL[5] = "http://kunst.canvasinabox.com/?_globalsearch=173-27";
	aURL[6] = "http://kunst.canvasinabox.com/?_globalsearch=25-5";
	
	aArtists[0] = "Marcel Verkaart";
	aArtists[1] = "Marcel Verkaart";
	aArtists[2] = "Marcel Verkaart";
	aArtists[3] = "Marco Schippers";	
	aArtists[4] = "Sylvia Hennequin";
	aArtists[5] = "Sylvia Hennequin";
	aArtists[6] = "Jonathan Vos";*/
	
	$(document).ready(function() {
	
		/* Define the function that triggers to fade in the background as soon as the image has loaded */
		$("img#bg").load(function()
			{
				/* Fade in during 3 seconds */
				$("img#bg").fadeTo(4000,1);
				
				/* Animate the picture description during 1 second */
				//setTimeout(function() { $("#image_description").animate({right: '+=150'}, 1000) }, 1000);
			
				/* Set the timeout to fade out the image and the description after 10 seconds*/
		    	setTimeout(function() 
			    	{
			    		//$("#image_description").animate({right: '-=150'}, 1000);
			    		$("img#bg").fadeOut(4000);
			    		
			    		/* Load the next image after 4 seconds */
			    		setTimeout(LoadImages,4100);
			    	}
			    	,15000);
			}			
		)
	
		/* Start the slideshow one second after the page is ready */ 
		setTimeout(LoadImages,10);
		
    });
    function LoadImage(iNr)
	{
	
		/* Assign the new image to the background */
		$("img#bg").attr("src", aImages[iNr]);
 		
 		/* Assign the artist name to the description */
 		//$("#image_artist").html(aArtists[iNr]);
 		
 		/* Assign the image url to the description */
        //$("a#image_url").attr("href", aURL[iNr]);
        //$("a#image_url").html("for sale @canvasinabox.com");
                        	
    };
    
    function LoadImages()
    {
    	
    	/* Select a random image number and make sure this is not equal to the previous image */
    	while(iPrev == iRnd)
    	{
    		iRnd = Math.floor(Math.random()*aImages.length);
    	}
    	
    	/* Show the selected image */
    	LoadImage(iRnd);
    	
    	iPrev = iRnd;
    	
    };