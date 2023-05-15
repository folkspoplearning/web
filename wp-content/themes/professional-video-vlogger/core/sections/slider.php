<?php if ( get_theme_mod('professional_video_vlogger_blog_box_enable') ) : ?>

<?php $args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'category_name' =>  get_theme_mod('professional_video_vlogger_blog_slide_category'),
  'posts_per_page' => get_theme_mod('professional_video_vlogger_blog_slide_number'),
); ?>

<div class="slider my-4">
  <div class="owl-carousel">
    <?php $professional_video_vlogger_arr_posts = new WP_Query( $args );
    if ( $professional_video_vlogger_arr_posts->have_posts() ) :
      while ( $professional_video_vlogger_arr_posts->have_posts() ) :
        $professional_video_vlogger_arr_posts->the_post();
        ?>
        <div class="blog_inner_box">
          <?php
            if ( has_post_thumbnail() ) :
              the_post_thumbnail();
            endif;
          ?>
          <div class="blog_box pt-3 pt-md-0">
            <div class="post-meta my-3">
              <?php if ( get_theme_mod('professional_video_vlogger_blog_comment_enable',true) ) : ?>
                <span><i class="fas fa-comments mr-1"></i> <?php comments_number( esc_attr('0', 'professional-video-vlogger'), esc_attr('0', 'professional-video-vlogger'), esc_attr('%', 'professional-video-vlogger') ); ?></span>
              <?php endif; ?>
            </div>
            <h3 class="my-3"><a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php the_title(); ?></a></h3>
          </div>
        </div>
      <?php
    endwhile;
    wp_reset_postdata();
    endif; ?>
  </div>
</div>

<?php endif; ?>