(function($) {
	'use strict';

	//Menu nav
	//Main navigation scroll spy for shadow
	$(window).on('scroll', function() {
		var scroll = $(window).scrollTop();

	    if (scroll >= 150) {
	        $('header.fixed-top')?.addClass('nav-fixed');
	    } else {
	        $('header.fixed-top').removeClass('nav-fixed');
	    }

	});
	
	
	//Search 
	$(document).ready(function() {
		$(".close-search").on("click", function() {
			$(".search_wrap, .search_overlay").removeClass('open');
			
		});
	
		$(".search_trigger").on('click', function() {
			$(".search_wrap, .search_overlay").toggleClass('open');
		});
	
		$(".search_wrap, .search_trigger, .search_wrap form").on('click', function(e) {
			e.stopPropagation();
		});
	});
	
	
})(jQuery);