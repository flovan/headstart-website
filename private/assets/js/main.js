(function(window, $){

'use strict';

$(document).ready(function () {

	console.log('## Document ready');

	// VARS -------------------------------------------------------------------
	//

	var
		$window = $(window),
		$body = $('html, body'),
		$main = $('#main'),

		$menuToggle = $('.menu-toggle'),
		$sidebar = $('.sidebar'),
		$sidebarWrapper = $('.sidebar__wrapper'),
		$content = $('.content'),
		$contentOverlay = $('.content-overlay'),
		$contentMenuWrapper = $('.content-menu__wrapper')
	;

	// ACTIONS ----------------------------------------------------------------
	//

	// Initialize social stuff

	initAnalytics();

	// Add handlers

	$window.on('resize', windowResizeHandler).trigger('resize');
	$menuToggle.on('click', menuToggleClickHandler);
	$contentOverlay.on('click', contentOverlaylickHandler);

	//
	// FUNCTIONS --------------------------------------------------------------
	//

	function windowResizeHandler (e) {

		_.each([$sidebarWrapper, $contentMenuWrapper], function (wrapper, key) {

			if (wrapper.outerHeight() > window.innerHeight) {
				wrapper.addClass('is-overflowing');
			}
			else {
				wrapper.removeClass('is-overflowing');
			}
		});
	}

	function menuToggleClickHandler (e) {

		$sidebar.addClass('is-opened');
		$body.addClass('is-covered');
		return false;
	}

	function contentOverlaylickHandler (e) {

		$sidebar.removeClass('is-opened');
		$body.removeClass('is-covered');
		return false;
	}

	//
	// HELPERS ----------------------------------------------------------------
	//

	function initAnalytics () {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' === document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	}

});

}(window, $));