<?php

add_action( 'admin_menu', 'professional_video_vlogger_getting_started' );
function professional_video_vlogger_getting_started() {
	add_theme_page( esc_html__('Get Started', 'professional-video-vlogger'), esc_html__('Get Started', 'professional-video-vlogger'), 'edit_theme_options', 'professional-video-vlogger-guide-page', 'professional_video_vlogger_test_guide');
}

function professional_video_vlogger_admin_enqueue_scripts() {
	wp_enqueue_style( 'professional-video-vlogger-admin-style',get_template_directory_uri().'/css/main.css' );
}
add_action( 'admin_enqueue_scripts', 'professional_video_vlogger_admin_enqueue_scripts' );

if ( ! defined( 'PROFESSIONAL_VIDEO_VLOGGER_DOCS_FREE' ) ) {
define('PROFESSIONAL_VIDEO_VLOGGER_DOCS_FREE',__('https://www.misbahwp.com/docs/professional-video-vlogger-free-docs/','professional-video-vlogger'));
}
if ( ! defined( 'PROFESSIONAL_VIDEO_VLOGGER_DOCS_PRO' ) ) {
define('PROFESSIONAL_VIDEO_VLOGGER_DOCS_PRO',__('https://www.misbahwp.com/docs/professional-video-vlogger-pro-docs','professional-video-vlogger'));
}
if ( ! defined( 'PROFESSIONAL_VIDEO_VLOGGER_BUY_NOW' ) ) {
define('PROFESSIONAL_VIDEO_VLOGGER_BUY_NOW',__('https://www.misbahwp.com/themes/vlogger-wordpress-theme/','professional-video-vlogger'));
}
if ( ! defined( 'PROFESSIONAL_VIDEO_VLOGGER_SUPPORT_FREE' ) ) {
define('PROFESSIONAL_VIDEO_VLOGGER_SUPPORT_FREE',__('https://wordpress.org/support/theme/professional-video-vlogger','professional-video-vlogger'));
}
if ( ! defined( 'PROFESSIONAL_VIDEO_VLOGGER_REVIEW_FREE' ) ) {
define('PROFESSIONAL_VIDEO_VLOGGER_REVIEW_FREE',__('https://wordpress.org/support/theme/professional-video-vlogger/reviews/#new-post','professional-video-vlogger'));
}
if ( ! defined( 'PROFESSIONAL_VIDEO_VLOGGER_DEMO_PRO' ) ) {
define('PROFESSIONAL_VIDEO_VLOGGER_DEMO_PRO',__('https://www.misbahwp.com/demo/professional-video-vlogger/','professional-video-vlogger'));
}

function professional_video_vlogger_test_guide() { ?>
	<?php $professional_video_vlogger_theme = wp_get_theme(); ?>

	<div class="wrap" id="main-page">
		<div id="lefty">
			<div id="admin_links">
				<a href="<?php echo esc_url( PROFESSIONAL_VIDEO_VLOGGER_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Documentation', 'professional-video-vlogger' ) ?></a>
				<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Customize', 'professional-video-vlogger' ); ?> </a>
				<a class="blue-button-1" href="<?php echo esc_url( PROFESSIONAL_VIDEO_VLOGGER_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Support', 'professional-video-vlogger' ) ?></a>
				<a class="blue-button-2" href="<?php echo esc_url( PROFESSIONAL_VIDEO_VLOGGER_REVIEW_FREE ); ?>" target="_blank" class="btn4"><?php esc_html_e( 'Review', 'professional-video-vlogger' ) ?></a>
			</div>
			<div id="description">
				<h3><?php esc_html_e('Welcome! Thank you for choosing ','professional-video-vlogger'); ?><?php echo esc_html( $professional_video_vlogger_theme ); ?>  <span><?php esc_html_e('Version: ', 'professional-video-vlogger'); ?><?php echo esc_html($professional_video_vlogger_theme['Version']);?></span></h3>
				<img class="img_responsive" style="width:100%;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/screenshot.png">
				<div id="description-inside">
					<?php
						$professional_video_vlogger_theme = wp_get_theme();
						echo wp_kses_post( apply_filters( 'misbah_theme_description', esc_html( $professional_video_vlogger_theme->get( 'Description' ) ) ) );
					?>
				</div>
			</div>
		</div>
		<div id="righty">
			<div class="postbox donate">
				<div class="d-table">
			    <ul class="d-column">
			      <li class="feature"><?php esc_html_e('Features','professional-video-vlogger'); ?></li>
			      <li class="free"><?php esc_html_e('Pro','professional-video-vlogger'); ?></li>
			      <li class="plus"><?php esc_html_e('Free','professional-video-vlogger'); ?></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('24hrs Priority Support','professional-video-vlogger'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Kirki Framework','professional-video-vlogger'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Posttype','professional-video-vlogger'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('One Click Demo Import','professional-video-vlogger'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Reordering','professional-video-vlogger'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Enable / Disable Option','professional-video-vlogger'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Multiple Sections','professional-video-vlogger'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Color Pallete','professional-video-vlogger'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Widgets','professional-video-vlogger'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Page Templates','professional-video-vlogger'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Typography','professional-video-vlogger'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Background Image / Color ','professional-video-vlogger'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
	  		</div>
				<h3 class="hndle"><?php esc_html_e( 'Upgrade to Premium', 'professional-video-vlogger' ); ?></h3>
				<div class="inside">
					<p><?php esc_html_e('Discover upgraded pro features with premium version click to upgrade.','professional-video-vlogger'); ?></p>
					<div id="admin_pro_links">
						<a class="blue-button-2" href="<?php echo esc_url( PROFESSIONAL_VIDEO_VLOGGER_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Go Pro', 'professional-video-vlogger' ); ?></a>
						<a class="blue-button-1" href="<?php echo esc_url( PROFESSIONAL_VIDEO_VLOGGER_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'professional-video-vlogger' ) ?></a>
						<a class="blue-button-2" href="<?php echo esc_url( PROFESSIONAL_VIDEO_VLOGGER_DOCS_PRO ); ?>" target="_blank"><?php esc_html_e( 'Pro Docs', 'professional-video-vlogger' ) ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php } ?>
