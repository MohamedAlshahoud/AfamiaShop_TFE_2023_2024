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
			$("body").removeClass('search_open');
		});
	
		var removeClass = true;
		$(".search_wrap").after('<div class="search_overlay"></div>');
		$(".search_trigger").on('click', function() {
			$(".search_wrap, .search_overlay").toggleClass('open');
			$("body").toggleClass('search_open');
			removeClass = false;
			if ($('.navbar-collapse').hasClass('show')) {
				$(".navbar-collapse").removeClass('show');
				$(".navbar-toggler").addClass('collapsed');
				$(".navbar-toggler").attr("aria-expanded", false);
			}
		});
	
		$(".search_wrap form").on('click', function() {
			removeClass = false;
		});
	
		$("html").on('click', function() {
			if (removeClass) {
				$("body").removeClass('open');
				$(".search_wrap, .search_overlay").removeClass('open');
				$("body").removeClass('search_open');
			}
			removeClass = true;
		});
	
		$(".search_wrap, .search_trigger, .search_wrap form").on('click', function(e) {
			e.stopPropagation();
		});
	});
	
	
})(jQuery);