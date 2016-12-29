jQuery( document ).ready(function( $ ) {
  'use strict';

  // Touch Device Detection
	var isTouchDevice = 'ontouchstart' in document.documentElement;
	if( isTouchDevice ) {
		$('body').removeClass('no-touch');
	}

  // Nifty Nav
  //niftyNav();

  $('#stat-slider').slick({
    autoplay: true,
    autoplaySpeed: 6000,
    infinite: true,
    slidesToShow: 2,
    arrows: true,
    dots: true
  });

});
