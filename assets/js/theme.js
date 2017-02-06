
// on DOM Ready
jQuery( document ).ready(function( $ ) {
  'use strict';

  // Touch Device Detection
	var isTouchDevice = 'ontouchstart' in document.documentElement;
	if( isTouchDevice ) {
		$('body').removeClass('no-touch');
	}

  // Fire Nifty Nav
  niftyNav({
    subMenus: true
  });

  $('a').click(function(){
      $('html, body').animate({
          scrollTop: $( $(this).attr('href') ).offset().top + -160
      }, 500);
      return false;
  });

  $('#stat-slider').slick({
    autoplay: true,
    autoplaySpeed: 6000,
    infinite: true,
    slidesToShow: 2,
    arrows: true,
    dots: true,
    responsive: [
      {
        breakpoint: 688,
        settings: {
          slidesToShow: 1
        }
      }
    ]
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
    autoplaySpeed: 2000,
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    pauseOnHover: false,
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

  // Sticky Sidebar
  if( $('body').hasClass('page-template-goal') ){
    var waypoint = new Waypoint({
      element: document.getElementById('service-sidebar'),
      handler: function(direction) {

        // get sidebar width initially
        var $sidebar_width = $('#service-sidebar').width();

        // only fire on desktop
        if( window.innerWidth > 688 ){
          if( direction === 'down' ){
            $('#goal-sidebar-container').css({
              'position': 'fixed',
              'top':  0,
              'width': $sidebar_width
            });
          } else{
            $('#goal-sidebar-container').css('position', 'relative');
          }
        }

      }
    });
  }


  // Add Search
  $('#menu-utility').append('<li><a href="#" id="search-icon"><i class="fa fa-search"></i> Search</a></li>');

  // Search Icon on Click
  $('#search-icon').on('click', function(){
    $('#search-panel').slideToggle(300);
  });

  // Click outside of search container
  $(document).click(function(event) {
    if( !$(event.target).closest('#search-panel').length || !$(event.target).closest('#search-icon') ) {
      $('#search-panel').slideUp(300);
    }
});


});
