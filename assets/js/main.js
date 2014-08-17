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
		$contentOverlay = $('.content-overlay'),
		$ghStarButton = $('.github-star-button')
	;

	// ACTIONS ----------------------------------------------------------------
	//

	twitButton(document, 'script', 'twitter-wjs');
	$ghStarButton.attr('src', 'http://ghbtns.com/github-btn.html?user=flovan&repo=headstart&type=watch&count=true');

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

function twitButton (d,s,id) {
	var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}
}

}(window, $));