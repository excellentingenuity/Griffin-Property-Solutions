<img id="bg_alpha">
<img id="bg_bravo">

<!-- page elements inside here -->
<div class="container" id="header_container">
<script>
$(window).resize(function(e) {
   sizer(); 
});
</script>
	<div class="row">
    
    	
    	<div class="span12 header_content">
        <a class="span2" href="index.php"><img class="thumbnail header_logo" alt="Griffin Property Solutions" src="img/logo.png"></a>
        	<span class="pull-right header_links_section">
            <a class="btn btn-primary mls_search" href="contact.php">Contact Us</a>
            <a class="btn btn-primary mls_search" href="about.php">About Us</a>
            <a class="btn btn-primary mls_search" href="mls.php">Search MLS</a>
            </span>
        </div>
    </div>
</div>
<div class="container-fluid" id="body_container">
 	
	<div class="row-fluid">

		<ul class="span3 nav-tabs nav-stacked v_menu" id="v_corp">
        	<li class="v_menu_item_li"><img class="thumbnail v_menu_item" id="industrial" src="http://placehold.it/100x100" /></li>
            <li class="v_menu_item_li"><img class="thumbnail v_menu_item" id="industrial" src="http://placehold.it/100x100" /></li>
            <li class="v_menu_item_li"><img class="thumbnail v_menu_item" id="industrial" src="http://placehold.it/100x100" /></li>
            <li class="v_menu_item_li v_col2 v_col_top"><img class="thumbnail v_menu_item" id="industrial" src="http://placehold.it/100x100" /></li>
            <li class="v_menu_item_li v_col2"><img class="thumbnail v_menu_item" id="industrial" src="http://placehold.it/100x100" /></li>
            <li class="v_menu_item_li v_col2"><img class="thumbnail v_menu_item" id="industrial" src="http://placehold.it/100x100" /></li>
        </ul>
		<script>
		$('img.v_menu_item').click(function(e) {
		content_expansion_replace($(this).attr("id"), ".main_content");
		});
		</script>
        <div class="span7 offset2 main_content">
        
		</div>
        <div class="fluid_spacer"></div>
		
    </div>
    
	</div>
</div>
<div class="container" id="nav_container">

	<div class="row static-content-main-nav">
    		
        	<img class="span3 thumbnail nav_item nav_item_first" id="nav_corp" src="http://placehold.it/350x175" />
          
        	<img class="span3 thumbnail nav_item" id="nav_residential" src="http://placehold.it/350x175" />
        
        	<img class="span3  thumbnail nav_item nav_item_last" id="nav_brockerage" src="http://placehold.it/350x175" />
        

        	
    </div>
</div>
<script>
$('img.nav_item').click(function(e) {
	content_expansion_replace($(this).attr("id"), ".main_content");
});

</script>

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