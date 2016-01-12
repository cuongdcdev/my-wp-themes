(function(){
	$(document).ready(function(){
	console.log("dom loaded ! ");
	$("a.fancy-box").fancybox();
	//remove all empty a tag :
	$("#mainMenu a:empty").remove();
	$("#switchMenu").on("click",function(){
		$("#sidebarMobile").toggleClass("sidebarMobileShow");
	});
function menuHeaderFixed(){
		if($(window).width() > 820){
		$(this).on("scroll",function(){
			if($(this).scrollTop() > 300) $("#menu-header-menu").addClass("activeDesktopMenu");
			else $("#menu-header-menu").removeClass("activeDesktopMenu");
		});
	}
}//menu header fixed

	//backtotop
	$("#backToTop").on("click",function(){
		$("body,html").animate({
			scrollTop : 0
		},400);
	});
$(window).on("resize",function(){
	menuHeaderFixed();
	if($(this).width() < 820) $(this).off("scroll");
});
menuHeaderFixed();


$(window).on("scroll",function(){
	menuHeaderFixed();
	if($(this).scrollTop() > 300){
		$("#switchMenu").parent().addClass("activeSwitchMenu");
	}else{
		$("#switchMenu").parent().removeClass('activeSwitchMenu');
	}
});

});//dom ready


}())