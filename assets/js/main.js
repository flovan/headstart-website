(function(window, $){

'use strict';

$(document).ready(function () {

	console.log('## Document ready');

	// VARS -------------------------------------------------------------------
	//

	var
		$window = $(window),
		$body = $('body'),

		$menuToggle = $('.menu-toggle'),
		$sidebar = $('.sidebar'),
		$content = $('.content'),
		$contentOverlay = $('.content-overlay')
	;

	// ACTIONS ----------------------------------------------------------------
	//

	$menuToggle.on('click', menuToggleClickHandler);
	$contentOverlay.on('click', contentOverlaylickHandler);

	//
	// FUNCTIONS --------------------------------------------------------------
	//

	function menuToggleClickHandler (e) {
		console.log('clicked the toggle');
		$sidebar.addClass('is-opened');
		$body.addClass('is-covered');
		return false;
	}

	function contentOverlaylickHandler (e) {
		console.log('clicked the cover');
		$sidebar.removeClass('is-opened');
		$body.removeClass('is-covered');
		return false;
	}

});

}(window, $));