<?php
	
require get_template_directory() . '/core/includes/class-tgm-plugin-activation.php';

/**
 * Recommended plugins.
 */
function professional_video_vlogger_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Kirki Customizer Framework', 'professional-video-vlogger' ),
			'slug'             => 'kirki',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	professional_video_vlogger_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'professional_video_vlogger_register_recommended_plugins' );