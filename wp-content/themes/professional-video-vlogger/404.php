<?php get_header(); ?>

<div id="content">
	<div class="container">
		<div class="py-5">
			<h1><?php esc_html_e('404', 'professional-video-vlogger'); ?></h1>
			<h2><?php esc_html_e('Not found', 'professional-video-vlogger'); ?></h2>
			<p><?php esc_html_e('Sorry, no posts matched your criteria.', 'professional-video-vlogger'); ?></p>
			<?php get_search_form(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>