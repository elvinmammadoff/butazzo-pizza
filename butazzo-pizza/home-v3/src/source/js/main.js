/*********************************************************************************

	Version: 1.0

    Note: This is scripts js. All custom scripts here.

**********************************************************************************/

/*===============================================================================

  [ INDEX ]
	|
  |___ Affix Navbar fixed on scroll
  |___ loadMoreResults
  |___ Touch Swipe mobile menu
  |___ Loading overlay
  |___ Loading overlay
	|___ Search panel
	|___ AOS Animate
	|___ Datepicker
	|___ Fancybox
	|___ ScrollUp
	|___ Slick slider
	|___
  |
	[END INDEX ]

================================================================================*/


"use strict";

$(document).ready(function() {

    
  //======= START Affix Navbar fixed on scroll ========
  $(window).on('scroll', function (event) {
      var scrollValue = $(window).scrollTop();
      if (scrollValue > 85) {
          $('.navbar-container').addClass('affix');
      } else{
          $('.navbar-container').removeClass('affix');
      }
  });
  //======= END Affix Navbar fixed on scroll ========



  //======= START jQuery loadMoreResults ========
  $(".btn-load-more").click(function(){
    $(".load-dots").addClass('visible'); 
    $(".btn-load-more").hide();   
    setTimeout(function(){
        $("#loadMore").show().css("display","flex");
        $(".load-dots").removeClass('visible');     
    }, 5000);
  });
  //======= END jQuery loadMoreResults ========



    //======= START Touch Swipe mobile menu ========

    //open left menu clicking the left menu icon
    $('.left_menu_icon').on('click', function(event){
      event.preventDefault();
      toggleLeftNav(true);
      $("body").css({'overflow':'hidden'});
  });
  
  //open right menu clicking the right menu icon
  $('.right_menu_icon').on('click', function(event){
      event.preventDefault();
      toggleRightNav(true);
      $("body").css({'overflow':'hidden'});
  });
  
  // close right menu clicking the right menu nav and overlay
  $('.page-scroll, .cd-overlay').on('click', function(){
      toggleLeftNav(false);
      toggleRightNav(false);
      $("body").css({'overflow':'auto'});
  });

  function toggleLeftNav(bool) {
      $('.left_menu, .cd-overlay').toggleClass('is-visible', bool);
      $('main').toggleClass('scale-down', bool);
  }

  function toggleRightNav(bool) {
      $('.right_menu, .cd-overlay').toggleClass('is-visible', bool);
      $('main').toggleClass('scale-down', bool);
  }
  //======= END Touch Swipe mobile menu ========



  //======= START Loading overlay ========
  $(window).on('load', function () {
      $('.loading-overlay').fadeOut(100);
  });
  //======= END Loading overlay ========


  //======= Special Menu Slider Start ========
  $('#special-menu').slick({ 
      slidesToShow: 3,
      slidesToScroll: 1,
      centerMode: false,
      autoplay: true,
      draggable: true,
      dots: false,
      arrows: false,
      focusOnSelect: true,
      pauseOnHover:false,
      infinite: true,
      responsive: [
          {
              breakpoint: 1160,
              settings: {
                  centerMode: true,
                  slidesToShow: 2,
                  slidesToScroll: 1,
              }
          },
          {
              breakpoint: 840,
              settings: {
                  slidesToShow: 1,
              }
          },
          {
              breakpoint: 600,
              settings: {
                  slidesToShow: 1,
              }
          }
      ]
  });
  //======= Special Menu Slider End ========



  //======= START Search panel ========

  // Hide search panel
  function hideNavbarSearch() {
    $('.top-addr').fadeIn();
    $('#navbar_search').fadeOut();
  }

  // Show search panel
  $(document).on('click', '#search', function () {
      $('.top-addr').fadeOut();
      $('#navbar_search').fadeIn();
      $('#navbar_search input').focus();
  });

  // Trigger hideNavbarSearch() when click close button on search panel
  $(document).on('click', '#search_close', function () {
      hideNavbarSearch();
      $('#navbar_search').find('.form-control').val('');
  })

  // Trigger hideNavbarSearch() when press ESC
  $( document ).on( 'keydown', function ( e ) {
      if ( e.keyCode === 27 ) { // ESC
          hideNavbarSearch()
      }
  });
  //======= END Search panel ========



  //======= START AOS Animate ========

  // Init AOS Animate On Scroll Library
  AOS.init({
    duration: 1200,
    startEvent: 'DOMContentLoaded',
    once: false,
    mirror: true
  });
  //======= END AOS Animate ========



  //======= START Datepicker ========
  $('#reserv_date').datepicker({
      locale: 'en',
      todayHighlight : true,
      todayBtn: "linked",
      autoclose: true,
      templates: {
          leftArrow: '<i class="fa-solid fa-chevron-left"></i>',
          rightArrow: '<i class="fa-solid fa-chevron-right"></i>'
      },
      format: "yyyy / mm / dd"
  });

  $('#reserv_time').datetimepicker({
      format: 'hh : mm A'
  });
  //======= END Datepicker ========



  //======= START Fancybox ========
  Fancybox.bind("[data-fancybox]", {
      // Your custom options
  });
  //======= End Fancybox ========



  //======= START ScrollUp ========
	$(document).on( 'scroll', function(){
		if ($(window).scrollTop() > 400) {
			$('.scroll-up').addClass('show');
		} else {
			$('.scroll-up').removeClass('show');
		}
	});

	$('.scroll-up').on('click', scrollToTop);
	 
	function scrollToTop() {
		var verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0,
		element = $('body'),
		offset = element.offset(),
		offsetTop = offset.top;
		$('html, body').animate({scrollTop: offsetTop}, 100, 'linear');
  }
  //======= END ScrollUp ========



  //======= START Slick slider ========
  $('#chef-slider').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    infinite: true,
    draggable: true,
    dots: false,
    arrows: true,
    pauseOnHover: false,
    responsive: [
        {
            breakpoint: 992,
             settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
            }
        },
        {
            breakpoint: 600,
             settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }
    ]
  });
  //======= END Slick slider ========

});
