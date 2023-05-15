<?php
/**
 * Template Name: Custom Home Page
 */

get_header(); ?>

<main id="maincontent" role="main">
  <?php do_action( 'video_podcasting_before_slider' ); ?>

  <?php if( get_theme_mod( 'video_podcasting_slider_hide_show', false) == 1 || get_theme_mod( 'video_podcasting_resp_slider_hide_show', false) == 1) { ?>
    <section id="slider"> 
      <?php if(get_theme_mod('video_podcasting_slider_type', 'Default slider') == 'Default slider' ){ ?>       
        <div id="carouselExampleInterval" class="carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="<?php echo esc_attr(get_theme_mod( 'video_podcasting_slider_speed',4000)) ?>">
          <?php $video_podcasting_pages = array();
            for ( $count = 1; $count <= 3; $count++ ) {
              $mod = intval( get_theme_mod( 'video_podcasting_slider_page' . $count ));
              if ( 'page-none-selected' != $mod ) {
                $video_podcasting_pages[] = $mod;
              }
            }
            if( !empty($video_podcasting_pages) ) :
              $args = array(
                'post_type' => 'page',
                'post__in' => $video_podcasting_pages,
                'orderby' => 'post__in'
              );
              $query = new WP_Query( $args );
              if ( $query->have_posts() ) :
                $i = 1;
          ?>
          <div class="carousel-inner" role="listbox">
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
              <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
                <div class="slider-img">
                  <?php if(has_post_thumbnail()){
                    the_post_thumbnail();
                  } else{?>
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/block-patterns/images/banner.png" alt="" />
                  <?php } ?>
                </div>
                <div class="carousel-caption">
                  <div class="inner_carousel">
                    <h1 class="wow rollIn delay-1000" data-wow-duration="2s"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                    <div class="wow rollIn delay-1000" data-wow-duration="2s"><?php the_content(); ?></div>
                  </div>
                </div>
              </div>
            <?php $i++; endwhile; 
            wp_reset_postdata();?>
          </div>
          <?php else : ?>
            <div class="no-postfound"></div>
          <?php endif;
          endif;?>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" id="prev" data-bs-slide="prev">
          <i class="fas fa-angle-left" aria-hidden="true"></i>
          <span class="screen-reader-text"><?php echo esc_html('Previous','video-podcasting'); ?></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next" id="next">
          <i class="fas fa-angle-right" aria-hidden="true"></i>
          <span class="screen-reader-text"><?php echo esc_html('Next','video-podcasting'); ?></span>
          </button>
        </div> 
          <?php } else if(get_theme_mod('video_podcasting_slider_type', 'Advance slider') == 'Advance slider'){?>
            <?php echo do_shortcode(get_theme_mod('video_podcasting_advance_slider_shortcode')); ?>
          <?php } ?>
    </section>
  <?php }?>

  <?php do_action( 'video_podcasting_after_slider' ); ?>

  <?php if(get_theme_mod('video_podcasting_section_title') != '' || get_theme_mod('video_podcasting_about_post') != '') {?>
    <section id="about-section" class="py-5 wow slideInRight delay-1000" data-wow-duration="2s">
      <div class="container">
        <?php
        $video_podcasting_about_post =  get_theme_mod('video_podcasting_about_post');
        if($video_podcasting_about_post){
          $args = array( 'name' => esc_html($video_podcasting_about_post ,'video-podcasting'));
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $count = 0;
            while ( $query->have_posts() ) : $query->the_post(); ?>
              <div class="row">
                <?php if (has_post_thumbnail()){?>
                  <div class="col-lg-4 col-md-4 align-self-center">
                    <?php the_post_thumbnail(); ?>
                  </div>
                <?php }?>
                <div class="<?php if (has_post_thumbnail()){?> col-lg-8 col-md-8<?php } else {?> col-lg-12 col-md-12 <?php }?> align-self-center">
                  <?php if( get_theme_mod('video_podcasting_section_title') != '' ){ ?>
                    <h2><?php echo esc_html(get_theme_mod('video_podcasting_section_title'));?></h2>
                  <?php }?>
                  <h3><?php the_title(); ?></h3>
                  <p><?php $video_podcasting_excerpt = get_the_excerpt(); echo esc_html( video_podcasting_string_limit_words( $video_podcasting_excerpt, 30)); ?></p>
                  <div class="getin-btn">
                    <a href="<?php the_permalink(); ?>"><?php echo esc_html('Get In Touch', 'video-podcasting'); ?><i class="far fa-angle-right ms-2"></i><span class="screen-reader-text"><?php echo esc_html('Get In Touch', 'video-podcasting'); ?></span></a>
                  </div>
                </div>
              </div>
            <?php endwhile; 
            wp_reset_postdata();?>
          <?php else : ?>
            <div class="no-postfound"></div>
          <?php endif;
        }?>
      </div>
    </section>
  <?php }?>

  <?php do_action( 'video_podcasting_after_service' ); ?>

  <div id="content-vw" class="py-3">
    <div class="container">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>