// Bootstrap specific functions and styling
jQuery(document).ready(function(){

	// here for each comment reply link of WordPress
	jQuery( '.comment-reply-link' ).addClass( 'btn btn-sm btn-default' );

	// here for the submit button of the comment reply form
	jQuery( '#submit, button[type=submit], button, html input[type=button], input[type=reset], input[type=submit]' ).addClass( 'btn btn-default' );

	// Now we'll add some classes for the WordPress default widgets - let's go
	jQuery( '.widget_rss ul' ).addClass( 'media-list' );

	// Add Bootstrap style for drop-downs
	jQuery( '.postform' ).addClass( 'form-control' );

	// Add Bootstrap styling for tables
	jQuery( 'table#wp-calendar' ).addClass( 'table table-striped');

	jQuery( '#submit, .tagcloud, button[type=submit], .comment-reply-link, .widget_rss ul, .postform, table#wp-calendar' ).show( "fast" );

});

// jQuery powered scroll to top

jQuery(document).ready(function(){

	//Check to see if the window is top if not then display button
	jQuery(window).scroll(function(){
		if (jQuery(this).scrollTop() >= 100) {
			jQuery('.scroll-to-top').fadeIn();
		} else {
			jQuery('.scroll-to-top').fadeOut();
		}
	});

	//Click event to scroll to top
	jQuery('.scroll-to-top').click(function(){
		jQuery('html, body').animate({scrollTop : 0},800);
		return false;
	});


	// ===============================================================
	/* BTN.SCROLL */
	// ===============================================================
	jQuery('.scroll').click(function(){
		jQuery('html, body').animate({
			scrollTop: jQuery( ( jQuery(this).attr('href') || '').split('?')[0] ).offset().top
		}, 'slow');
		return false;
	});

	// ===============================================================
	/* HEDAR TOGGLE MOBILE */
	// ===============================================================
	jQuery('.navbar-toggle').click(function() {
		jQuery(this).parent().toggleClass('open');
	});

});

// Slider functions
// Can also be used with $(document).ready()
jQuery(document).ready(function ($) {
  $(window).load(function() {
    $('.flexslider').flexslider({
      animation: "fade",
      slideshowSpeed: 7000,
      smoothHeight: true,
      touch: true
    });
  });
});