<?php
/**
 * The template part for Middle Header
 *
 * @package Video Podcasting
 * @subpackage video-podcasting
 * @since video-podcasting 1.0
 */
?>

<div class="main-header">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-4 col-9">
        <div class="logo text-start">
          <?php if ( has_custom_logo() ) : ?>
            <div class="site-logo"><?php the_custom_logo(); ?></div>
          <?php endif; ?>
          <?php $blog_info = get_bloginfo( 'name' ); ?>
            <?php if ( ! empty( $blog_info ) ) : ?>
              <?php if ( is_front_page() && is_home() ) : ?>
                <?php if( get_theme_mod('video_podcasting_logo_title_hide_show',true) == 1){ ?>
                  <p class="site-title mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <?php } ?>
              <?php else : ?>
                <?php if( get_theme_mod('video_podcasting_logo_title_hide_show',true) == 1){ ?>
                  <p class="site-title mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <?php } ?>
              <?php endif; ?>
            <?php endif; ?>
            <?php
              $description = get_bloginfo( 'description', 'display' );
              if ( $description || is_customize_preview() ) :
            ?>
            <?php if( get_theme_mod('video_podcasting_tagline_hide_show',false) == 1){ ?>
              <p class="site-description mb-0">
                <?php echo esc_html($description); ?>
              </p>
            <?php } ?>
          <?php endif; ?>
        </div>
      </div>
      <div class="<?php if(get_theme_mod('video_podcasting_donate_btn_url') != '' || get_theme_mod('video_podcasting_donate_btn_text') != ''){ ?>col-lg-6 col-md-4<?php } else {?> col-lg-7 col-md-6 <?php }?> col-3 align-self-center">
        <?php get_template_part('template-parts/header/navigation'); ?>
      </div>
      <?php if(get_theme_mod('video_podcasting_donate_btn_url') != '' || get_theme_mod('video_podcasting_donate_btn_text') != ''){ ?>
        <div class="col-lg-2 col-md-2 col-6 donate-btn align-self-center text-end">
          <a href="<?php echo esc_url(get_theme_mod('video_podcasting_donate_btn_url')); ?>"><i class="fas fa-dollar-sign me-2"></i><?php echo esc_html(get_theme_mod('video_podcasting_donate_btn_text')); ?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('video_podcasting_donate_btn_text')); ?></span></a>
        </div>
      <?php }?> 
      <div class="col-lg-1 col-md-2 col-6 ps-md-0 pe-lg-0 align-self-center">
        <span class="search-box">
          <a href="#"><i class="fas fa-search me-2"></i><?php echo esc_html('Search', 'video-podcasting'); ?></a>
        </span>
      </div>
      <div class="serach_outer">
        <div class="closepop"><a href="#maincontent"><i class="fa fa-window-close"></i></a></div>
        <div class="serach_inner">
          <?php get_search_form(); ?>
        </div>
      </div>
    </div>
  </div>
</div>