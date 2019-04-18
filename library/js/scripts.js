/*
Bones Scripts File
Author: Eddie Machado

This file should contain any js scripts you want to add to the site.
Instead of calling it in the header or throwing it inside wp_head()
this file will be called automatically in the footer so as not to
slow the page load.

*/

// IE8 ployfill for GetComputed Style (for Responsive Script below)
if (!window.getComputedStyle) {
		window.getComputedStyle = function(el, pseudo) {
				this.el = el;
				this.getPropertyValue = function(prop) {
						var re = /(\-([a-z]){1})/g;
						if (prop == 'float') prop = 'styleFloat';
						if (re.test(prop)) {
								prop = prop.replace(re, function () {
										return arguments[2].toUpperCase();
								});
						}
						return el.currentStyle[prop] ? el.currentStyle[prop] : null;
				}
				return this;
		}
}

// as the page loads, call these scripts
jQuery(document).ready(function($) {

		/*
		Responsive jQuery is a tricky thing.
		There's a bunch of different ways to handle
		it, so be sure to research and find the one
		that works for you best.
		*/

		/* getting viewport width */
		var responsive_viewport = $(window).width();

		/* if is below 481px */
		if (responsive_viewport < 481) {

		} /* end smallest screen */

		/* if is larger than 481px */
		if (responsive_viewport > 481) {

		} /* end larger than 481px */

		/* if is above or equal to 768px */
		if (responsive_viewport >= 768) {

				/* load gravatars */
				$('.comment img[data-gravatar]').each(function(){
						$(this).attr('src',$(this).attr('data-gravatar'));
				});

		}

		/* off the bat large screen actions */
		if (responsive_viewport > 1030) {

		}


	// add all your scripts here



	$(function(){
		$(window).resize(function(){
			var windowHeight = $(window).height();
			mapHeight = windowHeight - 200;
			$('#top').css('height',windowHeight + 'px');
			$('#map').css('height',windowHeight + 'px');
			$('#about').css('min-height',windowHeight + 'px');
			$('#gallery').css('min-height',windowHeight + 'px');
			$('#press').css('min-height',windowHeight + 'px');
			$('#map .content-back').css('height',mapHeight + 'px');
		}).resize();
	});


	/* prepend menu icon */
	$('.nav').prepend('<div id="mobile-menu"><i class="fw-mobile-menu"></i></div>');
	$('.nav').append('<a class="close-button" style="display:none">close</a>');
	$('#menus .current-page').append('<i class="fw-mobile-menu"></i>');

	/* toggle nav */
	$("#mobile-menu").on("click", function(){
		$("#menu-front-page-menu").slideToggle();
		$(this).toggleClass("active");
		$(".close-button").toggle();
		$(this).toggleClass("active");
		$(".current-page .fw-mobile-menu").toggle();
		$(this).toggleClass("active");
	});

	$("#mobile-menu").on("click", function(){
		$("#menu-main-menu").slideToggle();
		$(this).toggleClass("active");
		$(".close-button").toggle();
		$(this).toggleClass("active");
		$(".current-page .fw-mobile-menu").toggle();
		$(this).toggleClass("active");
	});

	$("#menus .current-page").on("click", function(){
		$("ul#menu-the-menus-menu").slideToggle();
		$(this).toggleClass("active");
	});

	$(".close-button").on("click", function(){
		$("#menu-front-page-menu").slideToggle();
		$(this).toggleClass("active");
		$(".close-button").toggle();
		$(this).toggleClass("active");
		$(".current-page .fw-mobile-menu").toggle();
		$(this).toggleClass("active");
	});

	$(document).click(function() {
		// all dropdowns
		$('.wrapper-dropdown-2').removeClass('active');
	});

	/* Reveal 'Back to Top' Button */
	var backToTop = $('.back-to-top').offset().top;

	$(window).scroll(function(){
		var scrollTop = $(window).scrollTop();
		if (scrollTop > backToTop) {
			$('.back-to-top').addClass('show');
		} else {
			$('.back-to-top').removeClass('show');
		}

	});


	/* Stick navigation to the top of the page */
	var stickyNavTop = $('.front-page-nav').offset().top;

	$(window).scroll(function(){
		var scrollTop = $(window).scrollTop();

		if (scrollTop > stickyNavTop) {
			$('.front-page-nav').addClass('sticky-header');
			$('.site-header').addClass('shifted');
		} else {
			$('.front-page-nav').removeClass('sticky-header');
			$('.site-header').removeClass('shifted');
		}

	});

	/* Scroll to specific section on front page */
	$(function() {
		$('a[href*=#]:not([href=#])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					$('html,body').animate({
						scrollTop: (target.offset().top - -1)
					}, 1000);
					return false;
				}
			}
		});
	});

	$(function() {
		$('a[href=#top]').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					$('html,body').animate({
						scrollTop: (target.offset().top - 0)
					}, 1000);
					return false;
				}
			}
		});
	});


	$("a[href='#menu-one']").attr('href', 'javascript:showonlyone("menu-one");');
	$("a[href='#menu-two']").attr('href', 'javascript:showonlyone("menu-two");');
	$("a[href='#menu-three']").attr('href', 'javascript:showonlyone("menu-three");');
	$("a[href='#menu-four']").attr('href', 'javascript:showonlyone("menu-four");');
	$("a[href='#menu-five']").attr('href', 'javascript:showonlyone("menu-five");');
	$("a[href='#menu-six']").attr('href', 'javascript:showonlyone("menu-six");');


}); /* end of as page load scripts */


/*! A fix for the iOS orientationchange zoom bug.
 Script by @scottjehl, rebound by @wilto.
 MIT License.
*/
(function(w){
	// This fix addresses an iOS bug, so return early if the UA claims it's something else.
	if( !( /iPhone|iPad|iPod/.test( navigator.platform ) && navigator.userAgent.indexOf( "AppleWebKit" ) > -1 ) ){ return; }
		var doc = w.document;
		if( !doc.querySelector ){ return; }
		var meta = doc.querySelector( "meta[name=viewport]" ),
				initialContent = meta && meta.getAttribute( "content" ),
				disabledZoom = initialContent + ",maximum-scale=1",
				enabledZoom = initialContent + ",maximum-scale=10",
				enabled = true,
		x, y, z, aig;
		if( !meta ){ return; }
		function restoreZoom(){
				meta.setAttribute( "content", enabledZoom );
				enabled = true; }
		function disableZoom(){
				meta.setAttribute( "content", disabledZoom );
				enabled = false; }
		function checkTilt( e ){
		aig = e.accelerationIncludingGravity;
		x = Math.abs( aig.x );
		y = Math.abs( aig.y );
		z = Math.abs( aig.z );
		// If portrait orientation and in one of the danger zones
				if( !w.orientation && ( x > 7 || ( ( z > 6 && y < 8 || z < 8 && y > 6 ) && x > 5 ) ) ){
			if( enabled ){ disableZoom(); } }
		else if( !enabled ){ restoreZoom(); } }
	w.addEventListener( "orientationchange", restoreZoom, false );
	w.addEventListener( "devicemotion", checkTilt, false );
})( this );
