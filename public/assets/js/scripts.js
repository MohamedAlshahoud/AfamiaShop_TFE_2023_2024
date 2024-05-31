/*===================================
Author       : Bestwebcreator.
Template Name: Shopwise - eCommerce Bootstrap 5 HTML Template
Version      : 1.3
===================================*/

/*===================================*
PAGE JS
*===================================*/

(function($) {
	'use strict';

	/*===================================*
	04. MENU JS
	*===================================*/
	//Main navigation scroll spy for shadow
	$(window).on('scroll', function() {
		var scroll = $(window).scrollTop();

	    if (scroll >= 150) {
	        $('header.fixed-top')?.addClass('nav-fixed');
	    } else {
	        $('header.fixed-top').removeClass('nav-fixed');
	    }

	});
	
	/*===================================*
	06. SEARCH JS
	*===================================*/
    
	$(".close-search").on("click", function() {
		$(".search_wrap,.search_overlay").removeClass('open');
		$("body").removeClass('search_open');
	});
	
	var removeClass = true;
	$(".search_wrap").after('<div class="search_overlay"></div>');
	$(".search_trigger").on('click', function () {
		$(".search_wrap,.search_overlay").toggleClass('open');
		$("body").toggleClass('search_open');
		removeClass = false;
		if($('.navbar-collapse').hasClass('show'))
		{
			$(".navbar-collapse").removeClass('show');
			$(".navbar-toggler")?.addClass('collapsed');
			$(".navbar-toggler").attr("aria-expanded", false);
		}
	});
	$(".search_wrap form").on('click', function() {
		removeClass = false;
	});
	$("html").on('click', function () {
		if (removeClass) {
			$("body").removeClass('open');
			$(".search_wrap,.search_overlay").removeClass('open');
			$("body").removeClass('search_open');
		}
		removeClass = true;
	});

	
	/*===================================*
	21. ZOOM IMAGE
	*===================================*/
	var image = $('#product_img');
	//var zoomConfig = {};
	var zoomActive = false;
	
    zoomActive = !zoomActive;
	if(zoomActive) {
		if ($(image).length > 0){
			$(image).elevateZoom({
				cursor: "crosshair",
				easing : true, 
				gallery:'pr_item_gallery',
				zoomType: "inner",
				galleryActiveClass: "active"
			}); 
		}
	}
	else {
		$.removeData(image, 'elevateZoom');//remove zoom instance from image
		$('.zoomContainer:last-child').remove();// remove zoom container from DOM
	}
	
	$.magnificPopup.defaults.callbacks = {
    open: function() {
      $('body')?.addClass('zoom_image');
    },
    close: function() {
      // Wait until overflow:hidden has been removed from the html tag
      setTimeout(function() {
        $('body').removeClass('zoom_image');
		$('body').removeClass('zoom_gallery_image');
		//$('.zoomContainer:last-child').remove();// remove zoom container from DOM
		$('.zoomContainer').slice(1).remove();
      	}, 100);
      }
  	};
	
	// Set up gallery on click
	var galleryZoom = $('#pr_item_gallery');
	galleryZoom.magnificPopup({
		delegate: 'a',
		type: 'image',
		gallery:{
			enabled: true
		},
		callbacks: {
			elementParse: function(item) {
				item.src = item.el.attr('data-zoom-image');
			}
		}
	});
	
	// Zoom image when click on icon
	$('.product_img_zoom').on('click', function(){
		var atual = $('#pr_item_gallery a').attr('data-zoom-image');
		$('body')?.addClass('zoom_gallery_image');
		$('#pr_item_gallery .item').each(function(){
			if( atual == $(this).find('.product_gallery_item').attr('data-zoom-image') ) {
				return galleryZoom.magnificPopup('open', $(this).index());
			}
		});
	});
	
	$('.plus').on('click', function() {
		if ($(this).prev().val()) {
			$(this).prev().val(+$(this).prev().val() + 1);
			
			let href = $('a.btn-addtocart').attr("href")
			let newHref = href.split('/')
			newHref.pop()
			$('a.btn-addtocart').attr("href", newHref.join("/")+"/"+ $(this).prev().val())
		}
	});
	$('.minus').on('click', function() {
		if ($(this).next().val() > 1) {
			if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);

			let href = $('a.btn-addtocart').attr("href")
			let newHref = href.split('/')
			newHref.pop()
			$('a.btn-addtocart').attr("href", newHref.join("/")+"/"+ $(this).next().val())
		}
	});
	
	
})(jQuery);