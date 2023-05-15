<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="<?php echo esc_attr(get_bloginfo('html_type')); ?>; charset=<?php echo esc_attr(get_bloginfo('charset')); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) )
	{
		wp_body_open();
	}else{
		do_action('wp_body_open');
	}
?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'professional-video-vlogger' ); ?></a>

<header id="site-navigation" class="header text-center text-md-left py-2">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-2 col-md-12 col-sm-12 align-self-center">
				<div class="logo">
		    		<div class="logo-image">
		    			<?php echo esc_url( the_custom_logo() ); ?>
			    	</div>
			    	<div class="logo-content text-center text-lg-left">
				    	<?php
				    		if ( get_theme_mod('professional_video_vlogger_display_header_title', true) == true ) :
					      		echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '">';
					      			echo esc_attr(get_bloginfo('name'));
					      		echo '</a>';
					      	endif;

					      	if ( get_theme_mod('professional_video_vlogger_display_header_text', false) == true ) :
				      			echo '<span>'. esc_attr(get_bloginfo('description')) . '</span>';
				      		endif;
			    		?>
					</div>
				</div>
		   	</div>
			<div class="col-lg-6 col-md-6 col-sm-6 align-self-center">
				<?php if(has_nav_menu('main-menu')){ ?>
					<button class="menu-toggle my-2 py-2 px-3" aria-controls="top-menu" aria-expanded="false" type="button">
						<span aria-hidden="true"><?php esc_html_e( 'Menu', 'professional-video-vlogger' ); ?></span>
					</button>
					<nav id="main-menu" class="close-panal">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'main-menu',
								'container' => 'false'
							));
						?>
						<button class="close-menu my-2 p-2" type="button">
							<span aria-hidden="true"><i class="fa fa-times"></i></span>
						</button>
					</nav>
				<?php }?>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-3 align-self-center">
				<div class="header-search text-center text-md-right py-3 py-md-0">
		        	<?php if ( get_theme_mod('professional_video_vlogger_search_box_enable', true) == true ) : ?>
						<?php if(class_exists('woocommerce')){ ?>
				          	<form method="get" class="woocommerce-product-search" action="<?php echo esc_url(home_url('/')); ?>">
					            <label class="screen-reader-text" for="woocommerce-product-search-field"><?php esc_html_e('Search for:', 'professional-video-vlogger'); ?></label>
					            <input type="search" id="woocommerce-product-search-field" class="search-field " placeholder="<?php echo esc_html('Search Here','professional-video-vlogger'); ?>" value="<?php echo get_search_query(); ?>" name="s"/>
					            <button type="submit" value="" class="search-button"><i class="fas fa-search"></i></button>
					            <input type="hidden" name="post_type" value="product"/>
				          	</form>
				        <?php }?>
		        	<?php endif; ?>
		        </div>
	       	</div>
	       	<div class="col-lg-2 col-md-3 col-sm-3 align-self-center">
				<?php $professional_video_vlogger_settings = get_theme_mod( 'professional_video_vlogger_social_links_settings' ); ?>
				<div class="social-links text-center text-md-right">
					<?php if ( is_array($professional_video_vlogger_settings) || is_object($professional_video_vlogger_settings) ){ ?>
				    	<?php foreach( $professional_video_vlogger_settings as $professional_video_vlogger_setting ) { ?>
					        <a href="<?php echo esc_url( $professional_video_vlogger_setting['link_url'] ); ?>">
					            <i class="<?php echo esc_attr( $professional_video_vlogger_setting['link_text'] ); ?> mr-3"></i>
					        </a>
				    	<?php } ?>
					<?php } ?>
				</div>
			</div>
	   	</div>
	</div>
</header>
