jQuery( document ).ready(function( $ ) {
  'use strict';

  // Touch Device Detection
	var isTouchDevice = 'ontouchstart' in document.documentElement;
	if( isTouchDevice ) {
		$('body').removeClass('no-touch');
	}

  // Nifty Nav
  niftyNav();

});
