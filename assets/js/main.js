(function(window, $){

'use strict';

// Document -------------------------------------------------------------------

$(document).ready(function() {

	log('_## Main script running_');

	// VARS -------------------------------------------------------------------
	//

	var
		fileName = _.last(window.location.href.split('/')),
		$localLink = $('a[href*="' + fileName + '#"]'),
		$scrollTarget = $('html, body')
	;

	// ACTIONS ----------------------------------------------------------------
	//

	$localLink.on('click', localLinkClickHandler);
	
	if(Utils.isOldie()) Utils.patchOldie();

	//
	// FUNCTIONS --------------------------------------------------------------
	//

	function localLinkClickHandler(e)
	{
		var offsetTop = $('#' + $(e.currentTarget).attr('href').split('#')[1]).offset().top,
			optimTime = 400 * (Math.ceil(offsetTop/1000));
		$scrollTarget.animate({
			scrollTop: offsetTop + 'px'
		}, optimTime, 'easeInOutQuad', function()
		{
			window.location.hash = $(e.currentTarget).attr('href').split('#')[1];
		});
		return false;
	}

});

}(window, $));