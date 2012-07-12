<?php

?>
<html lang="en">
<head>

<!-- Page designed and coded by James Johnson of Excellent InGenuity LLC, 2012 under contract for ERF Marketing -->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, intial-scale=1.0">
<title>Griffin Property Solutions</title>

<link rel="shortcut icon" href="img/fav_icon.png" />

<link rel="stylesheet" media="all" href="css/bootstrap.css">
<link rel="stylesheet" media="all" href="css/bootstrap-responsive.css">
<link rel="stylesheet" media="all" href="css/Background_image_animate.css">
<link rel="stylesheet" media="screen" href="css/phone.css">
<link rel="stylesheet" media="screen and (min-width: 330px) and (max-width: 590px)" href="css/phone-hz.css"> 
<link rel="stylesheet" media="screen and (min-width: 600px) and (max-width: 800px)" href="css/tablet.css">
<link rel="stylesheet" media="screen and (min-width: 801px) and (max-width: 1280px)" href="css/desktop.css">
<link rel="stylesheet" media="screen and (min-width: 1280px)" href="css/widescreen.css">

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->


<!--javascript includes -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/background_image_animate_3.js"></script>
  <script src="js/expander.js"></script>
 
</head>
<body>
<!-- The container for the background-image -->

<img id="bg_alpha">
<img id="bg_bravo">

<!-- page elements inside here -->
<div class="container" id="header_container">
	<div class="row">
    	<img class="span2 thumbnail header_logo" alt="Griffin Property Solutions" src="img/logo1.png">
    	<div class="span10 header_content">
        	
        </div>
    </div>
</div>
<div class="container" id="nav_container">
	<div class="row">
		<div class="fluid_spacer">
        
		</div>
	</div>
	<div class="row" id="nav_row">
    		
        	<img class="span2 thumbnail nav_item nav_item_first" id="nav_corp" src="http://dummyimage.com/175x175" />
          
        	<img class="span2 thumbnail nav_item" id="nav_residential" src="http://dummyimage.com/175x175" />
        
        	<img class="span2 thumbnail nav_item" id="nav_brockerage" src="http://dummyimage.com/175x175" />
        
        	<img class="span2 thumbnail nav_item" id="nav_property_management" src="http://dummyimage.com/175x175" />
            
            <img class="span2 thumbnail nav_item" id="nav_items" src="http://dummyimage.com/175x175" />
            
            <img class="span2 thumbnail nav_item nav_item_last" id="nav_items" src="http://dummyimage.com/175x175" />
        	
    </div>
</div>
<script>
$('img.nav_item').click(function(e) {
	content_expansion($(this).attr("id"));
});
</script>
<div class="container" id="body_container">
	<div class="row">
    	<div class="span11 hidden main_content">
        	<h2 class="hidden_content">Lorem Ipsum</h2>
        	<p class="main_content_p hidden_content">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed luctus auctor enim. Pellentesque viverra orci in lectus egestas a porta ligula pellentesque. Nam scelerisque pulvinar magna fermentum porta. Praesent est turpis, sollicitudin id interdum sit amet, interdum non nunc. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus sed dui et risus lacinia vestibulum vitae eu dui. Aenean pretium dapibus diam vel egestas. Curabitur ac nunc nunc, id auctor mauris. Integer venenatis sagittis nisi vestibulum tempor. Nunc quis rutrum massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
            </p>
			<p class="main_content_p hidden_content">
			Proin faucibus purus ut ligula adipiscing in tempor nisi pharetra. Cras non gravida arcu. Quisque eleifend est et augue elementum sit amet luctus nibh ornare. Maecenas pulvinar arcu eu lectus scelerisque at semper libero rhoncus. Vivamus tempor felis non quam porttitor blandit. Cras metus lacus, scelerisque vitae dapibus eget, convallis eu nibh. Nullam bibendum urna luctus elit semper gravida.
			</p>
			<p class="main_content_p hidden_content">
			Nam enim nisl, malesuada id semper eu, lobortis et enim. Suspendisse potenti. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In hac habitasse platea dictumst. Curabitur vel fermentum erat. Nullam mollis est ac tortor fermentum congue. Sed tempus, magna nec semper condimentum, augue sapien adipiscing lacus, ut tincidunt nisl libero mattis libero. Fusce vehicula laoreet euismod. Duis a congue libero. Maecenas iaculis justo sed nulla scelerisque gravida. - Et tu Brute?
            </p>
        </div>
    </div>
</div>
<div class="container" id="footer_container">
	<footer class="row">
    	<div class="footer">
        	<div class="copyright">
            	Copyright 2012 Griffin Property Solutions - <a id="copyright" href="http://www.erfmarketing.com">ERF</a>
            </div>
        </div>
    </footer>
</div>








</div>
</body>
</html>