// JavaScript Document

$(document).ready(function() {
	sizer();
});
function sizer() {
	var window_height = window.innerHeight;
   var spacer_height = (window_height * .10);
   $('.fluid_spacer').css('height', spacer_height + 'px');
}
function content_expansion (myid){
	//var myid = $(this).attr("id");
	$('.fluid_spacer').hide('slow');
	$.ajax({ type: "POST", url:"./lib/ajax_interface/interface.php", data: {my_function:"Load_content", content:myid}, dataType: "html", success: function(data){$("h2.hidden_content").append(data)}});
	$('.main-content').show('slow');
	$('.hidden_content').css('visibility', 'visible');
};
function content_expansion_replace (myid, destinationid){
	//var myid = $(this).attr("id");
	var menu_id;
	var submenushow;
	switch (myid){
		case "nav_corp":
			menu_id = "v_corp";
			submenushow = true;
			break;
		case "nav_residential":
			menu_id = "v_res";
			submenushow = true;
			break;
		case "nav_brockerage":
			menu_id = "v_brock";
			submenushow = true;
			break;
		case "nav_consulting":
			menu_id = "v_consult";
			submenushow = true;
			break;
		case "about":
			submenushow = false;
			break;
		case "join":
			submenushow = false;
			break;
		case "contact":
			submenushow = false;
			break;
		case "mls":
			submenushow = false;
			break;
		case "search_residential":
			submenushow = false;
			myid = "mls";
			break;
		case "search_commercial":
			submenushow = false;
			myid = "mls";
			break;
			
	}
	if($('.main-content').is(":visible")){
		$('.main-content').fadeOut(2100);
		//$('.sub-menu').fadeOut(2100);
		setTimeout(function () {$.ajax({ type: "POST", url:"./lib/ajax_interface/interface.php", data: {my_function:"Load_content", content:myid}, dataType: "html", success: function(data){content_replace(data, destinationid)}})}, 2100);	
		
	} else {
	$.ajax({ type: "POST", url:"./lib/ajax_interface/interface.php", data: {my_function:"Load_content", content:myid}, dataType: "html", success: function(data){content_replace(data, destinationid)}});
	}
	menu_replace (menu_id);
	$('.main-content').fadeIn(2100);
	$('.main-content').css('display', 'inline');
	//$('.sub-menu').fadeIn(2100);
	if (submenushow == false) {
		$('.sub-menu').css('display', 'none');
	}else if(submenushow == true){
	$('.sub-menu').css('display', 'inline');
	}
	
};

function content_replace (data, id){
		$(id).html(data);

};
function menu_replace (my_menu_id) {
	var items = new Array();
	switch (my_menu_id) {
		case "v_corp":
			$('.sub-menu').html('');
			$('.nav-container').removeClass('sub-menu-red');
			$('.nav-container').removeClass('sub-menu-blue');
			$('.nav-container').removeClass('sub-menu-green');
			$('.nav-container').addClass('sub-menu-yellow');
			
		items.push('<li class="sub-meu-li span2"><img class="sub-menu-img" id="industrial" src="img/Commercial/Industrial.png" /></li>');
		items.push('<li class="sub-meu-li span2"><img class="sub-menu-img" id="office" src="img/Commercial/Office.png" /></li>');
		items.push('<li class="sub-meu-li span2"><img class="sub-menu-img" id="retail" src="img/Commercial/Retail.png" /></li>');
		items.push('<li class="sub-meu-li span2"><img class="sub-menu-img" id="income" src="img/Commercial/IncomeProperty.png" /></li>');
		items.push('<li class="sub-meu-li span2"><img class="sub-menu-img" id="land" src="img/Commercial/Land.png" /></li>');
		items.push('<li class="sub-meu-li span2"><img class="sub-menu-img" id="search_commercial" src="img/Commercial/SearchCommercial.png" /></li>');
		break;
		case "v_res":
			$('.sub-menu').html('');
			$('.nav-container').removeClass('sub-menu-red');
			$('.nav-container').removeClass('sub-menu-blue');
			$('.nav-container').removeClass('sub-menu-yellow');
			$('.nav-container').addClass('sub-menu-green');
			items.push('<li class="sub-meu-li span2">&nbsp;</li>');
			items.push('<li class="sub-meu-li span2"><img class="sub-menu-img" id="sellers" src="img/Residential/ResidentialSellers.png" /></li>');
			items.push('<li class="sub-meu-li span2"><img class="sub-menu-img" id="buyers" src="img/Residential/ResidentialBuyers.png" /></li>');
			items.push('<li class="sub-meu-li span2"><img class="sub-menu-img" id="estate" src="img/Residential/EstateLuxuryHomes.png" /></li>');
			items.push('<li class="sub-meu-li span2"><img class="sub-menu-img" id="search_residential" src="img/Residential/SearchResidential.png" /></li>');
			items.push('<li class="sub-meu-li span2">&nbsp;</li>');
			break;
		
		case "v_consult":
			$('.sub-menu').html('');
			$('.nav-container').removeClass('sub-menu-red');
			$('.nav-container').removeClass('sub-menu-yellow');
			$('.nav-container').removeClass('sub-menu-green');
			$('.nav-container').addClass('sub-menu-blue');
			items.push('<li class="sub-meu-li span1">&nbsp;</li>');
			items.push('<li class="sub-meu-li span2"><img class="sub-menu-img" id="management" src="img/Consulting/CommercPropertyMgmt.png" /></li>');
			items.push('<li class="sub-meu-li span2"><img class="sub-menu-img" id="investments" src="img/Consulting/CorpServicesInvestments.png" /></li>');
			items.push('<li class="sub-meu-li span2"><img class="sub-menu-img" id="development" src="img/Consulting/DevelopServices.png" /></li>');
			items.push('<li class="sub-meu-li span2"><img class="sub-menu-img" id="marketing" src="img/Consulting/MarketingPublicRelations.png" /></li>');
			items.push('<li class="sub-meu-li span2"><img class="sub-menu-img" id="planning" src="img/Consulting/StrategicPlanning.png" /></li>');
			items.push('<li class="sub-meu-li span1">&nbsp;</li>');
			break;
		
		case "v_brock":
			$('.sub-menu').html('');
			$('.nav-container').removeClass('sub-menu-yellow');
			$('.nav-container').removeClass('sub-menu-blue');
			$('.nav-container').removeClass('sub-menu-green');
			$('.nav-container').addClass('sub-menu-red');
			items.push('<li class="sub-meu-li span2">&nbsp;</li>');
			items.push('<li class="sub-meu-li span2">&nbsp;</li>');
			items.push('<li class="sub-meu-li span2"><img class="sub-menu-img" id="bis_buyers" src="img/Brokerage/Buyers.png" /></li>');
			items.push('<li class="sub-meu-li span2"><img class="sub-menu-img" id="bis_sellers" src="img/Brokerage/Sellers.png" /></li>');
			items.push('<li class="sub-meu-li span2">&nbsp;</li>');
			items.push('<li class="sub-meu-li span2">&nbsp;</li>');
		break;
	
	}
	
	for( i in items){
		$('.sub-menu').append(items[i]);
	}
	//TODO:add other submenus 
	//also handle on hover change source of image to the glow image - on mousehover substring and add glow on mouseunhover remove
};
function hover_menu(menu_id){
	var destination;
	switch (menu_id){
	case "nav_corp":
		menu_id = "v_corp";
		destination = '.hv-corp';
		break;
	case "nav_residential":
		menu_id = "v_res";
		destination = '.hv-residential';
		break;
	case "nav_brockerage":
		menu_id = "v_brock";
		destination = '.hv-brokerage';
		break;
	case "nav_consulting":
		menu_id = "v_consult";
		destination = '.hv-consulting';
		break;
	}
	var items = new Array();
	switch (menu_id) {
		case "v_corp":
			$(destination).html("");	
		items.push('<li class="v_menu_item_li submenu-hover-li"><img class="v_menu_item" id="industrial" src="img/Commercial/Industrial.png" /></li>');
		items.push('<li class="v_menu_item_li submenu-hover-li"><img class="v_menu_item" id="office" src="img/Commercial/Office.png" /></li>');
		items.push('<li class="v_menu_item_li submenu-hover-li"><img class="v_menu_item" id="retail" src="img/Commercial/Retail.png" /></li>');
		items.push('<li class="v_menu_item_li submenu-hover-li v_col2 v_col_top"><img class="v_menu_item" id="income" src="img/Commercial/IncomeProperty.png" /></li>');
		items.push('<li class="v_menu_item_li submenu-hover-li v_col2"><img class="v_menu_item" id="land" src="img/Commercial/Land.png" /></li>');
		items.push('<li class="v_menu_item_li submenu-hover-li v_col2"><img class="v_menu_item" id="search_commercial" src="img/Commercial/SearchCommercial.png" /></li>');
		break;
		case "v_res":
			$(destination).html("");
			items.push('<li class="v_menu_item_li submenu-hover-li"><img class="v_menu_item" id="sellers" src="img/Residential/ResidentialSellers.png" /></li>');
			items.push('<li class="v_menu_item_li submenu-hover-li"><img class="v_menu_item" id="buyers" src="img/Residential/ResidentialBuyers.png" /></li>');
			items.push('<li class="v_menu_item_li submenu-hover-li"><img class="v_menu_item" id="estate" src="img/Residential/EstateLuxuryHomes.png" /></li>');
			items.push('<li class="v_menu_item_li submenu-hover-li"><img class="v_menu_item" id="search_residential" src="img/Residential/SearchResidential.png" /></li>');
			break;
		
		case "v_consult":
			$(destination).html("");
			items.push('<li class="v_menu_item_li submenu-hover-li"><img class="v_menu_item" id="management" src="img/Consulting/CommercPropertyMgmt.png" /></li>');
			items.push('<li class="v_menu_item_li submenu-hover-li"><img class="v_menu_item" id="investments" src="img/Consulting/CorpServicesInvestments.png" /></li>');
			items.push('<li class="v_menu_item_li submenu-hover-li"><img class="v_menu_item" id="development" src="img/Consulting/DevelopServices.png" /></li>');
			items.push('<li class="v_menu_item_li v_col2 v_col_top submenu-hover-li"><img class="v_menu_item" id="marketing" src="img/Consulting/MarketingPublicRelations.png" /></li>');
			items.push('<li class="v_menu_item_li v_col2 submenu-hover-li"><img class="v_menu_item" id="planning" src="img/Consulting/StrategicPlanning.png" /></li>');
		break;
		
		case "v_brock":
			$(destination).html("");
			items.push('<li class="v_menu_item_li submenu-hover-li"><img class="v_menu_item" id="bis_buyers" src="img/Brokerage/Buyers.png" /></li>');
			items.push('<li class="v_menu_item_li submenu-hover-li"><img class="v_menu_item" id="bis_sellers" src="img/Brokerage/Sellers.png" /></li>');
		break;
	
	}
	
	for( i in items){
		$(destination).append(items[i]);
	}
};
function hide_hover_menu(menu_id){
	switch (menu_id){
	case "nav_corp":
		menu_id = "v_corp";
		$('.hv-corp').html("&nbsp;");
		break;
	case "nav_residential":
		menu_id = "v_res";
		$('.hv-residential').html("&nbsp;");
		break;
	case "nav_brockerage":
		menu_id = "v_brock";
		$('.hv-brokerage').html("&nbsp;");
		break;
	case "nav_consulting":
		menu_id = "v_consult";
		$('.hv-consulting').html("&nbsp;");
		break;
	}
}
