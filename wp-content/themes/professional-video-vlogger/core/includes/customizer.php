<?php

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'professional_video_vlogger_logo_resizer',
		'label'       => esc_html__( 'Adjust Your Logo Size ', 'professional-video-vlogger' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'professional_video_vlogger_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'professional-video-vlogger' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'professional_video_vlogger_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'professional-video-vlogger' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'professional-video-vlogger' ),
			'off' => esc_html__( 'Disable', 'professional-video-vlogger' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'professional_video_vlogger_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'professional-video-vlogger' ),
		'section'     => 'title_tagline',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'professional-video-vlogger' ),
			'off' => esc_html__( 'Disable', 'professional-video-vlogger' ),
		],
	] );

	// FONT STYLE TYPOGRAPHY

	Kirki::add_panel( 'professional_video_vlogger_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Typography', 'professional-video-vlogger' ),
	) );

	Kirki::add_section( 'professional_video_vlogger_font_style_section', array(
		'title'      => esc_attr__( 'Typography Option',  'professional-video-vlogger' ),
		'priority'   => 2,
		'capability' => 'edit_theme_options',
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'professional_video_vlogger_all_headings_typography',
		'section'     => 'professional_video_vlogger_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading Of All Sections',  'professional-video-vlogger' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'professional_video_vlogger_all_headings_typography',
		'label'       => esc_attr__( 'Heading Typography',  'professional-video-vlogger' ),
		'description' => esc_attr__( 'Select the typography options for your heading.',  'professional-video-vlogger' ),
		'section'     => 'professional_video_vlogger_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'h1','h2','h3','h4','h5','h6', ),
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'professional_video_vlogger_body_content_typography',
		'section'     => 'professional_video_vlogger_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Body Content',  'professional-video-vlogger' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'professional_video_vlogger_body_content_typography',
		'label'       => esc_attr__( 'Content Typography',  'professional-video-vlogger' ),
		'description' => esc_attr__( 'Select the typography options for your content.',  'professional-video-vlogger' ),
		'section'     => 'professional_video_vlogger_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'body', ),
			),
		),
	) );

	// PANEL

	Kirki::add_panel( 'professional_video_vlogger_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'professional-video-vlogger' ),
	) );

	// Scroll Top

	Kirki::add_section( 'professional_video_vlogger_section_scroll', array(
	    'title'          => esc_html__( 'Additional Settings', 'professional-video-vlogger' ),
	    'description'    => esc_html__( 'Scroll To Top', 'professional-video-vlogger' ),
	    'panel'          => 'professional_video_vlogger_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'professional_video_vlogger_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'professional-video-vlogger' ),
		'section'     => 'professional_video_vlogger_section_scroll',
		'default'     => '1',
		'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'menu_text_transform_professional_video_vlogger',
		'label'       => esc_html__( 'Menus Text Transform', 'professional-video-vlogger' ),
		'section'     => 'professional_video_vlogger_section_scroll',
		'default'     => 'CAPITALISE',
		'placeholder' => esc_html__( 'Choose an option', 'professional-video-vlogger' ),
		'choices'     => [
			'CAPITALISE' => esc_html__( 'CAPITALISE', 'professional-video-vlogger' ),
			'UPPERCASE' => esc_html__( 'UPPERCASE', 'professional-video-vlogger' ),
			'LOWERCASE' => esc_html__( 'LOWERCASE', 'professional-video-vlogger' ),

		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'professional_video_vlogger_container_width',
		'label'       => esc_html__( 'Theme Container Width', 'professional-video-vlogger' ),
		'section'     => 'professional_video_vlogger_section_scroll',
		'default'     => 100,
		'choices'     => [
			'min'  => 50,
			'max'  => 100,
			'step' => 1,
		],
	] );

	// Woocommerce Settings

		Kirki::add_section( 'professional_video_vlogger_woocommerce_settings', array(
				'title'          => esc_html__( 'Woocommerce Settings', 'professional-video-vlogger' ),
				'description'    => esc_html__( 'Shop Page', 'professional-video-vlogger' ),
				'panel'          => 'professional_video_vlogger_panel_id',
				'priority'       => 160,
		) );

		Kirki::add_field( 'theme_config_id', [
			'type'        => 'toggle',
			'settings'    => 'professional_video_vlogger_shop_sidebar',
			'label'       => esc_html__( 'Here you can enable or disable shop page sidebar.', 'professional-video-vlogger' ),
			'section'     => 'professional_video_vlogger_woocommerce_settings',
			'default'     => '1',
			'priority'    => 10,
		] );

		Kirki::add_field( 'theme_config_id', [
			'type'        => 'toggle',
			'settings'    => 'professional_video_vlogger_product_sidebar',
			'label'       => esc_html__( 'Here you can enable or disable product page sidebar.', 'professional-video-vlogger' ),
			'section'     => 'professional_video_vlogger_woocommerce_settings',
			'default'     => '1',
			'priority'    => 10,
		] );


	// POST SECTION

	Kirki::add_section( 'professional_video_vlogger_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'professional-video-vlogger' ),
	    'description'    => esc_html__( 'Here you can get different post settings', 'professional-video-vlogger' ),
	    'panel'          => 'professional_video_vlogger_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'professional_video_vlogger_enable_post_heading',
		'section'     => 'professional_video_vlogger_section_post',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Post Settings.', 'professional-video-vlogger' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'professional_video_vlogger_blog_admin_enable',
		'label'       => esc_html__( 'Post Author Enable / Disable Button', 'professional-video-vlogger' ),
		'section'     => 'professional_video_vlogger_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'professional-video-vlogger' ),
			'off' => esc_html__( 'Disable', 'professional-video-vlogger' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'professional_video_vlogger_blog_comment_enable',
		'label'       => esc_html__( 'Post Comment Enable / Disable Button', 'professional-video-vlogger' ),
		'section'     => 'professional_video_vlogger_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'professional-video-vlogger' ),
			'off' => esc_html__( 'Disable', 'professional-video-vlogger' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'professional_video_vlogger_post_excerpt_number',
		'label'       => esc_html__( 'Post Content Range', 'professional-video-vlogger' ),
		'section'     => 'professional_video_vlogger_section_post',
		'default'     => 15,
		'choices'     => [
			'min'  => 0,
			'max'  => 50,
			'step' => 1,
		],
	] );

	// HEADER SECTION

	Kirki::add_section( 'professional_video_vlogger_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'professional-video-vlogger' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'professional-video-vlogger' ),
	    'panel'          => 'professional_video_vlogger_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'professional_video_vlogger_enable_socail_link',
		'section'     => 'professional_video_vlogger_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'professional-video-vlogger' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'professional_video_vlogger_section_header',
		'priority'    => 11,
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'professional-video-vlogger' ),
			'field' => 'link_text',
		],
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Text', 'professional-video-vlogger' ),
			'field' => 'link_text1',
		],
		'button_label' => esc_html__('Add New Social Icon', 'professional-video-vlogger' ),
		'settings'     => 'professional_video_vlogger_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'professional-video-vlogger' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'professional-video-vlogger' ),
				'default'     => '',
			],
			'link_text1' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Text', 'professional-video-vlogger' ),
				'description' => esc_html__( 'Add the social text  ex: "facebook".', 'professional-video-vlogger' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'professional-video-vlogger' ),
				'description' => esc_html__( 'Add the social icon url here.', 'professional-video-vlogger' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 5
		],
	] );

	// SLIDER SECTION

	Kirki::add_section( 'professional_video_vlogger_blog_slide_section', array(
        'title'          => esc_html__( 'Slider Settings', 'professional-video-vlogger' ),
        'description'    => esc_html__( 'You have to select post category to show slider.', 'professional-video-vlogger' ),
        'panel'          => 'professional_video_vlogger_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'professional_video_vlogger_enable_heading',
		'section'     => 'professional_video_vlogger_blog_slide_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider', 'professional-video-vlogger' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'professional_video_vlogger_blog_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'professional-video-vlogger' ),
		'section'     => 'professional_video_vlogger_blog_slide_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'professional-video-vlogger' ),
			'off' => esc_html__( 'Disable', 'professional-video-vlogger' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'professional_video_vlogger_slider_heading',
		'section'     => 'professional_video_vlogger_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider', 'professional-video-vlogger' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'professional_video_vlogger_blog_slide_number',
		'label'       => esc_html__( 'Number of slides to show', 'professional-video-vlogger' ),
		'section'     => 'professional_video_vlogger_blog_slide_section',
		'default'     => 3,
		'choices'     => [
			'min'  => 0,
			'max'  => 5,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'professional_video_vlogger_blog_slide_category',
		'label'       => esc_html__( 'Select the category to show slider ( Image Dimension 1600 x 600 )', 'professional-video-vlogger' ),
		'section'     => 'professional_video_vlogger_blog_slide_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'professional-video-vlogger' ),
		'priority'    => 10,
		'choices'     => professional_video_vlogger_get_categories_select(),
	] );

	//TRENDING VIDEO SECTION

	Kirki::add_section( 'professional_video_vlogger_gallery_section', array(
	    'title'          => esc_html__( 'Trending Video Settings', 'professional-video-vlogger' ),
	    'description'    => esc_html__( 'Here you can add different type of videos.', 'professional-video-vlogger' ),
	    'panel'          => 'professional_video_vlogger_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'professional_video_vlogger_enable_heading',
		'section'     => 'professional_video_vlogger_gallery_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Trending Video',  'professional-video-vlogger' ) . '</h3>',
		'priority'    => 1,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'professional_video_vlogger_gallery_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable',  'professional-video-vlogger' ),
		'section'     => 'professional_video_vlogger_gallery_section',
		'default'     => '0',
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable',  'professional-video-vlogger' ),
			'off' => esc_html__( 'Disable',  'professional-video-vlogger' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'professional_video_vlogger_gallery_text_heading',
		'section'     => 'professional_video_vlogger_gallery_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Videos', 'professional-video-vlogger' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Text', 'professional-video-vlogger' ),
		'settings' => 'professional_video_vlogger_gallery_heading_text',
		'section'  => 'professional_video_vlogger_gallery_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Heading', 'professional-video-vlogger' ),
		'settings' => 'professional_video_vlogger_gallery_heading',
		'section'  => 'professional_video_vlogger_gallery_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'professional_video_vlogger_gallery_category',
		'label'       => esc_html__( 'Select the category to show videos ', 'professional-video-vlogger' ),
		'section'     => 'professional_video_vlogger_gallery_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'professional-video-vlogger' ),
		'priority'    => 10,
		'choices'     => professional_video_vlogger_get_categories_select(),
	] );

	// FOOTER SECTION

	Kirki::add_section( 'professional_video_vlogger_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'professional-video-vlogger' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'professional-video-vlogger' ),
        'panel'          => 'professional_video_vlogger_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'professional_video_vlogger_footer_text_heading',
		'section'     => 'professional_video_vlogger_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'professional-video-vlogger' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'professional_video_vlogger_footer_text',
		'section'  => 'professional_video_vlogger_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'professional_video_vlogger_footer_enable_heading',
		'section'     => 'professional_video_vlogger_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'professional-video-vlogger' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'professional_video_vlogger_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'professional-video-vlogger' ),
		'section'     => 'professional_video_vlogger_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'professional-video-vlogger' ),
			'off' => esc_html__( 'Disable', 'professional-video-vlogger' ),
		],
	] );

		Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'professional_video_vlogger_footer_text_heading_2',
	'section'     => 'professional_video_vlogger_footer_section',
	'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Alignment', 'professional-video-vlogger' ) . '</h3>',
	'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'professional_video_vlogger_copyright_text_alignment',
		'label'       => esc_html__( 'Copyright text Alignment', 'professional-video-vlogger' ),
		'section'     => 'professional_video_vlogger_footer_section',
		'default'     => 'LEFT-ALIGN',
		'placeholder' => esc_html__( 'Choose an option', 'professional-video-vlogger' ),
		'choices'     => [
			'LEFT-ALIGN' => esc_html__( 'LEFT-ALIGN', 'professional-video-vlogger' ),
			'CENTER-ALIGN' => esc_html__( 'CENTER-ALIGN', 'professional-video-vlogger' ),
			'RIGHT-ALIGN' => esc_html__( 'RIGHT-ALIGN', 'professional-video-vlogger' ),

		],
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'professional_video_vlogger_footer_text_heading_1',
	'section'     => 'professional_video_vlogger_footer_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Background Color', 'professional-video-vlogger' ) . '</h3>',
	'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'professional_video_vlogger_copyright_bg',
		'label'       => __( 'Choose Your Copyright Background Color', 'professional-video-vlogger' ),
		'section'     => 'professional_video_vlogger_footer_section',
		'default'     => '',
	] );
}
