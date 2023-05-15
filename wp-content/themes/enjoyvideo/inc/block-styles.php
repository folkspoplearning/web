<?php
/**
 * Block Styles
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 */
	function enjoyvideo_register_block_styles() {
		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'enjoyvideo-border',
				'label' => esc_html__( 'Borders', 'enjoyvideo' ),
			)
		);
	}
	add_action( 'init', 'enjoyvideo_register_block_styles' );
}
