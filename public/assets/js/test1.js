var J = jQuery.noConflict();

J(function(){
	var navbar = J('.navbar');
	
	J(window).scroll(function(){
		if(J(window).scrollTop() <= 40){
			navbar.removeClass('navbar-scroll');
		} else {
			navbar.addClass('navbar-scroll');
		}
	});
});

