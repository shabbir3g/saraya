(function ($) {
	"use strict";


	$(window).scroll(function() {
		if ($(window).scrollTop() > 150) {
			$(".navbar").addClass("sticky");
		} 
		else {
			$(".navbar").removeClass("sticky");
		}
	});
	$(document).ready(function(){
		$(".navbar-toggle").click(function() {
			$('.navbar .navbar-collapse').toggleClass('in');
			$(this).toggleClass('in');
			
		});
		

	  // search box
		
		$('#search-trigger').click(function(){
			$('#search-input').toggleClass('search-input-open');
			$('.navbar.navbar-default.navbar-bottom ul li a').toggleClass('change-hobe');
			
		});

		$(document).click(function(e){
			if(!$(e.target).closest('.ngen-search-form').length){
				$('#search-input').removeClass('search-input-open');
				$('.navbar.navbar-default.navbar-bottom ul li a').removeClass('change-hobe');
			}
		})


		// search box
		
		
		// scroll to top
		
		$('.totop a').click(function(){
	
		
			$('html, body').animate({'scrollTop': '0px'},2000);
		
			return false;
		
		});
		
		
		
		// scroll to top
		
		
		
		
		
		
	});

	
		

}(jQuery));