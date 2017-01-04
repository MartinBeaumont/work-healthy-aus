jQuery( document ).ready(function( $ ) {
  'use strict';

  // Touch Device Detection
	var isTouchDevice = 'ontouchstart' in document.documentElement;
	if( isTouchDevice ) {
		$('body').removeClass('no-touch');
	}

  $('a').click(function(){
      $('html, body').animate({
          scrollTop: $( $(this).attr('href') ).offset().top + -160
      }, 500);
      return false;
  });



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

  $('#testimonial-slider').slick({
    autoplay: true,
    autoplaySpeed: 7000,
    infinite: true,
    slidesToShow: 1,
    arrows: true,
    dots: true
  });

  $('#industry-slider').slick({
    autoplay: true,
    autoplaySpeed: 7000,
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    responsive: [
      {
        breakpoint: 976,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 688,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });

});
