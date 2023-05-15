<?php if ( get_theme_mod('professional_video_vlogger_gallery_section_enable') ) : ?>

<div class="gallery py-5">
	<div class="container">
		<?php if ( get_theme_mod('professional_video_vlogger_gallery_heading_text') ) : ?>
			<h3 class="text-center"><?php echo esc_html(get_theme_mod('professional_video_vlogger_gallery_heading_text')); ?></h3>
			<hr>
		<?php endif; ?>
		<?php if ( get_theme_mod('professional_video_vlogger_gallery_heading') ) : ?>
			<p class="pb-4 text-center"><?php echo esc_html(get_theme_mod('professional_video_vlogger_gallery_heading')); ?></p>
		<?php endif; ?>

        <?php $args = array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'category_name' =>  get_theme_mod('professional_video_vlogger_gallery_category'),
			'posts_per_page' => 16,
		); ?>
		<div class="row">
		    <?php $professional_video_vlogger_arr_posts = new WP_Query( $args );
		    	if ( $professional_video_vlogger_arr_posts->have_posts() ) :
		      	while ( $professional_video_vlogger_arr_posts->have_posts() ) :
		        $professional_video_vlogger_arr_posts->the_post();
		        ?>
		        <div class="col-lg-3 col-md-4 col-sm-6">
			        <div class="gallery_inner_box mb-4">
						<?php if ( has_post_thumbnail() ) :
							the_post_thumbnail();
						endif; ?>
						<div class="gallery_content_box py-3">
							<div class="post-meta my-1">
				              <?php if ( get_theme_mod('professional_video_vlogger_blog_comment_enable',true) ) : ?>
				                <span><i class="fas fa-comments mr-1"></i> <?php comments_number( esc_attr('0', 'professional-video-vlogger'), esc_attr('0', 'professional-video-vlogger'), esc_attr('%', 'professional-video-vlogger') ); ?></span>
				              <?php endif; ?>
				            </div>
			        		<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
	                    	<p class="time-box mb-0"><?php echo '<span>' . esc_html(get_the_date( 'd' )) . '</span>'; ?><?php echo ' <span>' .esc_html(get_the_date( 'M' )) . '</span>'; echo ' <span>' . esc_html(get_the_date( 'Y' )) . '</span>';  ?></p>
			            </div>
			        </div>
			    </div>
		      	<?php
		    endwhile;
		    wp_reset_postdata();
		    endif; ?>
		</div>
	</div>
</div>

<?php endif; ?>
