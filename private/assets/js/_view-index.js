(function(window, $){

'use strict';

$(document).ready(function () {

	console.log('## Index ready');

	// VARS -------------------------------------------------------------------
	//

	var
		$ghStarButton = $('.github-star-button')
	;

	// ACTIONS ----------------------------------------------------------------
	//

	// Initialize social stuff

	initTwitterButton(document, 'script', 'twitter-wjs');
	initFacebookButton();
	$ghStarButton.attr('src', 'http://ghbtns.com/github-btn.html?user=flovan&repo=headstart&type=watch&count=true');

	//
	// FUNCTIONS --------------------------------------------------------------
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

});

window.fbAsyncInit = function() {
	FB.init({appId: '912714955409005', status: true, cookie: true,
	xfbml: true});
};

}(window, $));