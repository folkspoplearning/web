/* ===============================================
  OWL CAROUSEL SLIDER
=============================================== */

jQuery('document').ready(function(){
  var owl = jQuery('.slider .owl-carousel');
    owl.owlCarousel({
    stagePadding: 200,
    loop:true,
    margin:30,
    autoplay : true,
    lazyLoad: true,
    autoplayTimeout: 5000,
    loop: true,
    dots:false,
    navText : ['<i class="fas fa-arrow-left"></i>','<i class="fas fa-arrow-right"></i>'],
    nav:true,
    items:1,
    nav:true,
    center: true,
    responsive:{
      0:{
          items:1,
          stagePadding: 0
      },
      600:{
          items:1,
          stagePadding: 0
      },
      1000:{
          items:1,
          stagePadding: 200
      },
      1200:{
          items:1,
          stagePadding: 200
      },
      1400:{
          items:1,
          stagePadding: 300
      },
      1600:{
          items:1,
          stagePadding: 350
      },
      1800:{
          items:1,
          stagePadding: 400
      }
    }
  });
});

/* ===============================================
  OPEN CLOSE Menu
============================================= */

function professional_video_vlogger_open_menu() {
  jQuery('button.menu-toggle').addClass('close-panal');
  setTimeout(function(){
    jQuery('nav#main-menu').show();
  }, 100);

  return false;
}

jQuery( "button.menu-toggle").on("click", professional_video_vlogger_open_menu);

function professional_video_vlogger_close_menu() {
  jQuery('button.close-menu').removeClass('close-panal');
  jQuery('nav#main-menu').hide();
}

jQuery( "button.close-menu").on("click", professional_video_vlogger_close_menu);

/* ===============================================
  TRAP TAB FOCUS ON MODAL MENU
============================================= */

jQuery('button.close-menu').on('keydown', function (e) {
  if (jQuery("this:focus") && (e.which === 9)) {
    e.preventDefault();
    jQuery(this).blur();
    jQuery('button.menu-toggle').focus();
  }
});

/* ===============================================
  Scroll Top //
============================================= */

jQuery(window).scroll(function () {
  if (jQuery(this).scrollTop() > 100) {
    jQuery('.scroll-up').fadeIn();
  } else {
    jQuery('.scroll-up').fadeOut();
  }
});

jQuery('a[href="#tobottom"]').click(function () {
  jQuery('html, body').animate({scrollTop: 0}, 'slow');
  return false;
});
