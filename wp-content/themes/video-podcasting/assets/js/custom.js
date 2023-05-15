function video_podcasting_menu_open_nav() {
	window.video_podcasting_responsiveMenu=true;
	jQuery(".sidenav").addClass('show');
}
function video_podcasting_menu_close_nav() {
	window.video_podcasting_responsiveMenu=false;
 	jQuery(".sidenav").removeClass('show');
}

jQuery(function($){
 	"use strict";
 	jQuery('.main-menu > ul').superfish({
		delay: 500,
		animation: {opacity:'show',height:'show'},  
		speed: 'fast'
 	});
});

jQuery(document).ready(function () {
	window.video_podcasting_currentfocus=null;
  	video_podcasting_checkfocusdElement();
	var video_podcasting_body = document.querySelector('body');
	video_podcasting_body.addEventListener('keyup', video_podcasting_check_tab_press);
	var video_podcasting_gotoHome = false;
	var video_podcasting_gotoClose = false;
	window.video_podcasting_responsiveMenu=false;
 	function video_podcasting_checkfocusdElement(){
	 	if(window.video_podcasting_currentfocus=document.activeElement.className){
		 	window.video_podcasting_currentfocus=document.activeElement.className;
	 	}
 	}
 	function video_podcasting_check_tab_press(e) {
		"use strict";
		// pick passed event or global event object if passed one is empty
		e = e || event;
		var activeElement;

		if(window.innerWidth < 999){
		if (e.keyCode == 9) {
			if(window.video_podcasting_responsiveMenu){
			if (!e.shiftKey) {
				if(video_podcasting_gotoHome) {
					jQuery( ".main-menu ul:first li:first a:first-child" ).focus();
				}
			}
			if (jQuery("a.closebtn.mobile-menu").is(":focus")) {
				video_podcasting_gotoHome = true;
			} else {
				video_podcasting_gotoHome = false;
			}

		}else{

			if(window.video_podcasting_currentfocus=="responsivetoggle"){
				jQuery( "" ).focus();
			}}}
		}
		if (e.shiftKey && e.keyCode == 9) {
		if(window.innerWidth < 999){
			if(window.video_podcasting_currentfocus=="header-search"){
				jQuery(".responsivetoggle").focus();
			}else{
				if(window.video_podcasting_responsiveMenu){
				if(video_podcasting_gotoClose){
					jQuery("a.closebtn.mobile-menu").focus();
				}
				if (jQuery( ".main-menu ul:first li:first a:first-child" ).is(":focus")) {
					video_podcasting_gotoClose = true;
				} else {
					video_podcasting_gotoClose = false;
				}
			
			}else{

			if(window.video_podcasting_responsiveMenu){
			}}}}
		}
	 	video_podcasting_checkfocusdElement();
	}
});

jQuery('document').ready(function($){
  setTimeout(function () {
		jQuery("#preloader").fadeOut("slow");
  },1000);
});

jQuery(document).ready(function () {
	jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
      jQuery('.scrollup i').fadeIn();
    } else {
      jQuery('.scrollup i').fadeOut();
    }
	});
	jQuery('.scrollup i').click(function () {
    jQuery("html, body").animate({
      scrollTop: 0
    }, 600);
    return false;
	});
});

jQuery(document).ready(function () {
	  function video_podcasting_search_loop_focus(element) {
	  var video_podcasting_focus = element.find('select, input, textarea, button, a[href]');
	  var video_podcasting_firstFocus = video_podcasting_focus[0];  
	  var video_podcasting_lastFocus = video_podcasting_focus[video_podcasting_focus.length - 1];
	  var KEYCODE_TAB = 9;

	  element.on('keydown', function video_podcasting_search_loop_focus(e) {
	    var isTabPressed = (e.key === 'Tab' || e.keyCode === KEYCODE_TAB);

	    if (!isTabPressed) { 
	      return; 
	    }

	    if ( e.shiftKey ) /* shift + tab */ {
	      if (document.activeElement === video_podcasting_firstFocus) {
	        video_podcasting_lastFocus.focus();
	          e.preventDefault();
	        }
	      } else /* tab */ {
	      if (document.activeElement === video_podcasting_lastFocus) {
	        video_podcasting_firstFocus.focus();
	          e.preventDefault();
	        }
	      }
	  });
	}
	jQuery('.search-box a').click(function(){
    jQuery(".serach_outer").slideDown(1000);
  	video_podcasting_search_loop_focus(jQuery('.serach_outer'));
  });

  jQuery('.closepop a').click(function(){
    jQuery(".serach_outer").slideUp(1000);
  });
});