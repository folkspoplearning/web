<?php

/*-----------------------------------------------------------------------------------*/
/* Enqueue script and styles */
/*-----------------------------------------------------------------------------------*/

function professional_video_vlogger_enqueue_google_fonts() {

	require_once get_theme_file_path( 'core/includes/wptt-webfont-loader.php' );

	wp_enqueue_style( 'google-fonts-outfit', 'https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap' );
}
add_action( 'wp_enqueue_scripts', 'professional_video_vlogger_enqueue_google_fonts' );

if (!function_exists('professional_video_vlogger_enqueue_scripts')) {

	function professional_video_vlogger_enqueue_scripts() {

		wp_enqueue_style(
			'bootstrap-css',
			get_template_directory_uri() . '/css/bootstrap.css',
			array(),'4.5.0'
		);

		wp_enqueue_style(
			'fontawesome-css',
			get_template_directory_uri() . '/css/fontawesome-all.css',
			array(),'4.5.0'
		);

		wp_enqueue_style(
			'owl-carousel-css',
			get_template_directory_uri() . '/css/owl.carousel.css',
			array(),'2.3.4'
		);

		wp_enqueue_style('professional-video-vlogger-style', get_stylesheet_uri(), array() );

		wp_style_add_data('professional-video-vlogger-style', 'rtl', 'replace');

		wp_enqueue_style(
			'professional-video-vlogger-media-css',
			get_template_directory_uri() . '/css/media.css',
			array(),'2.3.4'
		);

		wp_enqueue_style(
			'professional-video-vlogger-woocommerce-css',
			esc_url( get_template_directory_uri() ) . '/css/woocommerce.css',
			array(),'2.3.4'
		);

		wp_enqueue_script(
			'professional-video-vlogger-navigation',
			get_template_directory_uri() . '/js/navigation.js',
			FALSE,
			'1.0',
			TRUE
		);

		wp_enqueue_script(
			'owl-carousel-js',
			get_template_directory_uri() . '/js/owl.carousel.js',
			array('jquery'),
			'2.3.4',
			TRUE
		);

		wp_enqueue_script(
			'professional-video-vlogger-script',
			get_template_directory_uri() . '/js/script.js',
			array('jquery'),
			'1.0',
			TRUE
		);

		if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

		$professional_video_vlogger_css = '';

		if ( get_header_image() ) :

			$professional_video_vlogger_css .=  '
				#site-navigation{
					background-image: url('.esc_url(get_header_image()).');
					-webkit-background-size: cover !important;
					-moz-background-size: cover !important;
					-o-background-size: cover !important;
					background-size: cover !important;
				}';

		endif;

		wp_add_inline_style( 'professional-video-vlogger-style', $professional_video_vlogger_css );

		// Theme Customize CSS.
		require get_template_directory(). '/core/includes/inline.php';
		wp_add_inline_style( 'professional-video-vlogger-style',$professional_video_vlogger_custom_css );

	}

	add_action( 'wp_enqueue_scripts', 'professional_video_vlogger_enqueue_scripts' );

}

/*-----------------------------------------------------------------------------------*/
/* Setup theme */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('professional_video_vlogger_after_setup_theme')) {

	function professional_video_vlogger_after_setup_theme() {

		if ( ! isset( $professional_video_vlogger_content_width ) ) $professional_video_vlogger_content_width = 900;

		register_nav_menus( array(
			'main-menu' => esc_html__( 'Main menu', 'professional-video-vlogger' ),
		));

		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'woocommerce' );
		add_theme_support( 'align-wide' );
		add_theme_support('title-tag');
		add_theme_support('automatic-feed-links');
		add_theme_support( 'wp-block-styles' );
		add_theme_support('post-thumbnails');
		add_theme_support( 'custom-background', array(
		  'default-color' => 'f3f3f3'
		));

		add_theme_support( 'custom-logo', array(
			'height'      => 70,
			'width'       => 70,
		) );

		add_theme_support( 'custom-header', array(
			'header-text' => false,
			'width' => 1920,
			'height' => 100
		));

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_editor_style( array( '/css/editor-style.css' ) );
	}

	add_action( 'after_setup_theme', 'professional_video_vlogger_after_setup_theme', 999 );

}

require get_template_directory() .'/core/includes/main.php';
require get_template_directory() .'/core/includes/tgm.php';
require get_template_directory() . '/core/includes/customizer.php';
load_template( trailingslashit( get_template_directory() ) . '/core/includes/class-upgrade-pro.php' );

/*-----------------------------------------------------------------------------------*/
/* Enqueue theme logo style */
/*-----------------------------------------------------------------------------------*/
function professional_video_vlogger_logo_resizer() {

    $professional_video_vlogger_theme_logo_size_css = '';
    $professional_video_vlogger_logo_resizer = get_theme_mod('professional_video_vlogger_logo_resizer');

	$professional_video_vlogger_theme_logo_size_css = '
		.custom-logo{
			height: '.esc_attr($professional_video_vlogger_logo_resizer).'px !important;
			width: '.esc_attr($professional_video_vlogger_logo_resizer).'px !important;
		}
	';
    wp_add_inline_style( 'professional-video-vlogger-style',$professional_video_vlogger_theme_logo_size_css );

}
add_action( 'wp_enqueue_scripts', 'professional_video_vlogger_logo_resizer' );

/*-----------------------------------------------------------------------------------*/
/* Enqueue Global color style */
/*-----------------------------------------------------------------------------------*/
function professional_video_vlogger_global_color() {

    $theme_color_css = '';
    $professional_video_vlogger_copyright_bg = get_theme_mod('professional_video_vlogger_copyright_bg');

	$theme_color_css = '
    .copyright {
			background: '.esc_attr($professional_video_vlogger_copyright_bg).';
		}
	';
    wp_add_inline_style( 'professional-video-vlogger-style',$theme_color_css );
    wp_add_inline_style( 'professional-video-vlogger-woocommerce-css',$theme_color_css );

}
add_action( 'wp_enqueue_scripts', 'professional_video_vlogger_global_color' );

/*-----------------------------------------------------------------------------------*/
/* Get post comments */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('professional_video_vlogger_comment')) :
    /**
     * Template for comments and pingbacks.
     *
     * Used as a callback by wp_list_comments() for displaying the comments.
     */
    function professional_video_vlogger_comment($comment, $args, $depth){

        if ('pingback' == $comment->comment_type || 'trackback' == $comment->comment_type) : ?>

            <li id="comment-<?php comment_ID(); ?>" <?php comment_class('media'); ?>>
            <div class="comment-body">
                <?php esc_html_e('Pingback:', 'professional-video-vlogger');
                comment_author_link(); ?><?php edit_comment_link(__('Edit', 'professional-video-vlogger'), '<span class="edit-link">', '</span>'); ?>
            </div>

        <?php else : ?>

        <li id="comment-<?php comment_ID(); ?>" <?php comment_class(empty($args['has_children']) ? '' : 'parent'); ?>>
            <article id="div-comment-<?php comment_ID(); ?>" class="comment-body media mb-4">
                <a class="pull-left" href="#">
                    <?php if (0 != $args['avatar_size']) echo get_avatar($comment, $args['avatar_size']); ?>
                </a>
                <div class="media-body">
                    <div class="media-body-wrap card">
                        <div class="card-header">
                            <h5 class="mt-0"><?php /* translators: %s: author */ printf('<cite class="fn">%s</cite>', get_comment_author_link() ); ?></h5>
                            <div class="comment-meta">
                                <a href="<?php echo esc_url(get_comment_link($comment->comment_ID)); ?>">
                                    <time datetime="<?php comment_time('c'); ?>">
                                        <?php /* translators: %s: Date */ printf( esc_attr('%1$s at %2$s', '1: date, 2: time', 'professional-video-vlogger'), esc_attr( get_comment_date() ), esc_attr( get_comment_time() ) ); ?>
                                    </time>
                                </a>
                                <?php edit_comment_link( __( 'Edit', 'professional-video-vlogger' ), '<span class="edit-link">', '</span>' ); ?>
                            </div>
                        </div>

                        <?php if ('0' == $comment->comment_approved) : ?>
                            <p class="comment-awaiting-moderation"><?php esc_html_e('Your comment is awaiting moderation.', 'professional-video-vlogger'); ?></p>
                        <?php endif; ?>

                        <div class="comment-content card-block">
                            <?php comment_text(); ?>
                        </div>

                        <?php comment_reply_link(
                            array_merge(
                                $args, array(
                                    'add_below' => 'div-comment',
                                    'depth' => $depth,
                                    'max_depth' => $args['max_depth'],
                                    'before' => '<footer class="reply comment-reply card-footer">',
                                    'after' => '</footer><!-- .reply -->'
                                )
                            )
                        ); ?>
                    </div>
                </div>
            </article>

            <?php
        endif;
    }
endif; // ends check for professional_video_vlogger_comment()

if (!function_exists('professional_video_vlogger_widgets_init')) {

	function professional_video_vlogger_widgets_init() {

		register_sidebar(array(

			'name' => esc_html__('Sidebar','professional-video-vlogger'),
			'id'   => 'professional-video-vlogger-sidebar',
			'description'   => esc_html__('This sidebar will be shown next to the content.', 'professional-video-vlogger'),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

		register_sidebar(array(

			'name' => esc_html__('Footer sidebar','professional-video-vlogger'),
			'id'   => 'professional-video-vlogger-footer-sidebar',
			'description'   => esc_html__('This sidebar will be shown next at the bottom of your content.', 'professional-video-vlogger'),
			'before_widget' => '<div id="%1$s" class="col-lg-3 col-md-3 %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

	}

	add_action( 'widgets_init', 'professional_video_vlogger_widgets_init' );

}

function professional_video_vlogger_get_categories_select() {
	$professional_video_vlogger_teh_cats = get_categories();
	$results = array();
	$professional_video_vlogger_count = count($professional_video_vlogger_teh_cats);
	for ($i=0; $i < $professional_video_vlogger_count; $i++) {
	if (isset($professional_video_vlogger_teh_cats[$i]))
  		$results[$professional_video_vlogger_teh_cats[$i]->slug] = $professional_video_vlogger_teh_cats[$i]->name;
	else
  		$professional_video_vlogger_count++;
	}
	return $results;
}

/**
 * Change number or products per row to 3
 */
add_filter('loop_shop_columns', 'professional_video_vlogger_loop_columns', 999);
if (!function_exists('professional_video_vlogger_loop_columns')) {
	function professional_video_vlogger_loop_columns() {
		return 3; // 3 products per row
	}
}

//redirect
Function professional_video_vlogger_notice(){
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {
   		wp_safe_redirect( admin_url("themes.php?page=professional-video-vlogger-guide-page") );
   	}
}
add_action('after_setup_theme', 'professional_video_vlogger_notice');

?>
