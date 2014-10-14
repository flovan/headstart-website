(function(window, $){

'use strict';

$(document).ready(function () {

	console.log('## Maintenance ready');

	// VARS -------------------------------------------------------------------
	//

	var
		$logo = $('.maintenance-logo'),
		$parts = $logo.children(),
		boundary = {
			width: $logo.width(),
			height: $logo.height()
		}
	;

	// ACTIONS ----------------------------------------------------------------
	//

	console.log(boundary);

	setTimeout(function () {

	}, 1500);

	//
	// FUNCTIONS --------------------------------------------------------------
	//

	

});

window.fbAsyncInit = function() {
	FB.init({appId: '912714955409005', status: true, cookie: true,
	xfbml: true});
};

}(window, $));