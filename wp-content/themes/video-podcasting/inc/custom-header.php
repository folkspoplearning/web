<?php
/**
 * @package Video Podcasting
 * Setup the WordPress core custom header feature.
 *
 * @uses video_podcasting_header_style()
*/
function video_podcasting_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'video_podcasting_custom_header_args', array(
		'header-text' 			 =>	false,
		'width'                  => 1000,
		'height'                 => 85,
		'flex-width'    		 => true,
		'flex-height'    		 => true,
		'wp-head-callback'       => 'video_podcasting_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'video_podcasting_custom_header_setup' );

if ( ! function_exists( 'video_podcasting_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see video_podcasting_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'video_podcasting_header_style' );

function video_podcasting_header_style() {
	if ( get_header_image() ) :
	$custom_css = "
        .main-header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		    background-size: 100% 100%;
		}";
	   	wp_add_inline_style( 'video-podcasting-basic-style', $custom_css );
	endif;
}
endif;