$(window).scroll(function() {
    if ($(this).scrollTop() > 2){  
        $('nav').addClass("navbar-fixed-top");
		$('nav').addClass("shrink");
    }
    else{
        $('nav').removeClass("navbar-fixed-top");
		$('nav').removeClass("shrink");
    }
});