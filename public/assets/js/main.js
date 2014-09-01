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
		$contentMenuWrapper = $('.content-menu__wrapper'),
		$ghStarButton = $('.github-star-button')
	;

	// ACTIONS ----------------------------------------------------------------
	//

	// Initialize social stuff

	initTwitterButton(document, 'script', 'twitter-wjs');
	initFacebookButton();
	initAnalytics();
	$ghStarButton.attr('src', 'http://ghbtns.com/github-btn.html?user=flovan&repo=headstart&type=watch&count=true');

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

	function initFacebookButton () {
		var e = document.createElement('script'); e.async = true;
		e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
		document.getElementById('fb-root').appendChild(e);
	}

	function initTwitterButton (d,s,id) {
		var js,
			fjs = d.getElementsByTagName(s)[0],
			p = /^http:/.test(d.location) ? 'http' : 'https';

		if (!d.getElementById(id)) {
			js = d.createElement(s);
			js.id = id;
			js.src = p + '://platform.twitter.com/widgets.js';
			fjs.parentNode.insertBefore(js,fjs);
		}
	}

	function initAnalytics () {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' === document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	}

});

window.fbAsyncInit = function() {
	FB.init({appId: '912714955409005', status: true, cookie: true,
	xfbml: true});
};

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-19595931-9']);
_gaq.push(['_trackPageview']);

}(window, $));