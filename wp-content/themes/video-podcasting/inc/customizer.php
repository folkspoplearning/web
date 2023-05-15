<?php
/**
 * Video Podcasting Theme Customizer
 *
 * @package Video Podcasting
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function video_podcasting_custom_controls() {
	load_template( trailingslashit( get_template_directory() ) . '/inc/custom-controls.php' );
}
add_action( 'customize_register', 'video_podcasting_custom_controls' );

function video_podcasting_customize_register( $wp_customize ) {

	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-picker.php' );

	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage'; 
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'blogname', array( 
		'selector' => '.logo .site-title a', 
	 	'render_callback' => 'video_podcasting_Customize_partial_blogname',
	)); 

	$wp_customize->selective_refresh->add_partial( 'blogdescription', array( 
		'selector' => 'p.site-description', 
		'render_callback' => 'video_podcasting_Customize_partial_blogdescription',
	));

	//Homepage Settings
	$wp_customize->add_panel( 'video_podcasting_homepage_panel', array(
		'title' => esc_html__( 'Homepage Settings', 'video-podcasting' ),
		'panel' => 'video_podcasting_panel_id',
		'priority' => 20,
	));

	// Header
	$wp_customize->add_section( 'video_podcasting_header' , array(
    'title' => esc_html__( 'Header', 'video-podcasting' ),
		'panel' => 'video_podcasting_homepage_panel'
	) );

   	// Header Background color

	$wp_customize->add_setting('video_podcasting_header_background_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'video_podcasting_header_background_color', array(
		'label'    => __('Header Background Color', 'video-podcasting'),
		'section'  => 'video_podcasting_header',
	)));

	$wp_customize->add_setting('video_podcasting_donate_btn_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('video_podcasting_donate_btn_text',array(
		'label'	=> esc_html__('Add Button Text','video-podcasting'),
		'input_attrs' => array(
            'placeholder' => esc_html__( 'Donate', 'video-podcasting' ),
        ),
		'section'=> 'video_podcasting_header',
		'type'=> 'text'
	));

	$wp_customize->add_setting('video_podcasting_donate_btn_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('video_podcasting_donate_btn_url',array(
		'label'	=> esc_html__('Add Button URL','video-podcasting'),
		'input_attrs' => array(
            'placeholder' => esc_html__( 'www.example.com', 'video-podcasting' ),
        ),
		'section'=> 'video_podcasting_header',
		'type'=> 'url'
	));

	//Menus Settings
	$wp_customize->add_section( 'video_podcasting_menu_section' , array(
    	'title' => __( 'Menus Settings', 'video-podcasting' ),
		'panel' => 'video_podcasting_homepage_panel'
	) );

	$wp_customize->add_setting('video_podcasting_navigation_menu_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('video_podcasting_navigation_menu_font_size',array(
		'label'	=> __('Menus Font Size','video-podcasting'),
		'description'	=> __('Enter a value in pixels. Example:20px','video-podcasting'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'video-podcasting' ),
        ),
		'section'=> 'video_podcasting_menu_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('video_podcasting_navigation_menu_font_weight',array(
        'default' => 600,
        'transport' => 'refresh',
        'sanitize_callback' => 'video_podcasting_sanitize_choices'
	));
	$wp_customize->add_control('video_podcasting_navigation_menu_font_weight',array(
        'type' => 'select',
        'label' => __('Menus Font Weight','video-podcasting'),
        'section' => 'video_podcasting_menu_section',
        'choices' => array(
        	'100' => __('100','video-podcasting'),
            '200' => __('200','video-podcasting'),
            '300' => __('300','video-podcasting'),
            '400' => __('400','video-podcasting'),
            '500' => __('500','video-podcasting'),
            '600' => __('600','video-podcasting'),
            '700' => __('700','video-podcasting'),
            '800' => __('800','video-podcasting'),
            '900' => __('900','video-podcasting'),
        ),
	) );

	// text trasform
	$wp_customize->add_setting('video_podcasting_menu_text_transform',array(
		'default'=> 'Uppercase',
		'sanitize_callback'	=> 'video_podcasting_sanitize_choices'
	));
	$wp_customize->add_control('video_podcasting_menu_text_transform',array(
		'type' => 'radio',
		'label'	=> __('Menus Text Transform','video-podcasting'),
		'choices' => array(
            'Uppercase' => __('Uppercase','video-podcasting'),
            'Capitalize' => __('Capitalize','video-podcasting'),
            'Lowercase' => __('Lowercase','video-podcasting'),
        ),
		'section'=> 'video_podcasting_menu_section',
	));

	$wp_customize->add_setting('video_podcasting_menus_item_style',array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'video_podcasting_sanitize_choices'
	));
	$wp_customize->add_control('video_podcasting_menus_item_style',array(
        'type' => 'select',
        'section' => 'video_podcasting_menu_section',
		'label' => __('Menus Item Hover Style','video-podcasting'),
		'choices' => array(
            'None' => __('None','video-podcasting'),
            'Zoom In' => __('Zoom In','video-podcasting'),
        ),
	) );

	$wp_customize->add_setting('video_podcasting_header_menus_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'video_podcasting_header_menus_color', array(
		'label'    => __('Menus Color', 'video-podcasting'),
		'section'  => 'video_podcasting_menu_section',
	)));

	$wp_customize->add_setting('video_podcasting_header_menus_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'video_podcasting_header_menus_hover_color', array(
		'label'    => __('Menus Hover Color', 'video-podcasting'),
		'section'  => 'video_podcasting_menu_section',
	)));

	$wp_customize->add_setting('video_podcasting_header_submenus_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'video_podcasting_header_submenus_color', array(
		'label'    => __('Sub Menus Color', 'video-podcasting'),
		'section'  => 'video_podcasting_menu_section',
	)));

	$wp_customize->add_setting('video_podcasting_header_submenus_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'video_podcasting_header_submenus_hover_color', array(
		'label'    => __('Sub Menus Hover Color', 'video-podcasting'),
		'section'  => 'video_podcasting_menu_section',
	)));

	//Slider
	$wp_customize->add_section( 'video_podcasting_slidersettings' , array(
    	'title'      => __( 'Slider Settings', 'video-podcasting' ),
    	'description' => __('Free theme has 3 slides options, For unlimited slides and more options </br> <a class="go-pro-btn" target="blank" href="https://www.vwthemes.com/themes/video-podcast-wordpress-theme/">GO PRO</a>','video-podcasting'),
		'panel' => 'video_podcasting_homepage_panel'
	) );

	$wp_customize->add_setting( 'video_podcasting_slider_hide_show',array(
      'default' => 0,
      'transport' => 'refresh',
      'sanitize_callback' => 'video_podcasting_switch_sanitization'
    ));  
  $wp_customize->add_control( new Video_Podcasting_Toggle_Switch_Custom_Control( $wp_customize, 'video_podcasting_slider_hide_show',array(
      'label' => esc_html__( 'Show / Hide Slider','video-podcasting' ),
      'section' => 'video_podcasting_slidersettings'
    )));

  $wp_customize->add_setting('video_podcasting_slider_type',array(
        'default' => 'Default slider',
        'sanitize_callback' => 'video_podcasting_sanitize_choices'
	) );
	$wp_customize->add_control('video_podcasting_slider_type', array(
        'type' => 'select',
        'label' => __('Slider Type','video-podcasting'),
        'section' => 'video_podcasting_slidersettings',
        'choices' => array(
            'Default slider' => __('Default slider','video-podcasting'),
            'Advance slider' => __('Advance slider','video-podcasting'),
        ),
	));

	$wp_customize->add_setting('video_podcasting_advance_slider_shortcode',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('video_podcasting_advance_slider_shortcode',array(
		'label'	=> __('Add Slider Shortcode','video-podcasting'),
		'section'=> 'video_podcasting_slidersettings',
		'type'=> 'text',
		'active_callback' => 'video_podcasting_advance_slider'
	));

  //Selective Refresh
  $wp_customize->selective_refresh->add_partial('video_podcasting_slider_hide_show',array(
		'selector'        => '.slider-btn a',
		'render_callback' => 'video_podcasting_customize_partial_video_podcasting_slider_hide_show',
	));

	for ( $count = 1; $count <= 3; $count++ ) {
		$wp_customize->add_setting( 'video_podcasting_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'video_podcasting_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'video_podcasting_slider_page' . $count, array(
			'label'    => __( 'Select Slider Page', 'video-podcasting' ),
			'description' => __('Slider image size (1500 x 600)','video-podcasting'),
			'section'  => 'video_podcasting_slidersettings',
			'type'     => 'dropdown-pages',
			'active_callback' => 'video_podcasting_default_slider'
		) );
	}

	//content layout
	$wp_customize->add_setting('video_podcasting_slider_content_option',array(
        'default' => 'Left',
        'sanitize_callback' => 'video_podcasting_sanitize_choices'
	));
	$wp_customize->add_control(new Video_Podcasting_Image_Radio_Control($wp_customize, 'video_podcasting_slider_content_option', array(
        'type' => 'select',
        'label' => __('Slider Content Layouts','video-podcasting'),
        'section' => 'video_podcasting_slidersettings',
        'choices' => array(
            'Left' => esc_url(get_template_directory_uri()).'/assets/images/slider-content1.png',
            'Center' => esc_url(get_template_directory_uri()).'/assets/images/slider-content2.png',
            'Right' => esc_url(get_template_directory_uri()).'/assets/images/slider-content3.png',
    ),'active_callback' => 'video_podcasting_default_slider'
    )));

  //Slider excerpt
	$wp_customize->add_setting( 'video_podcasting_slider_excerpt_number', array(
		'default'              => 20,
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'video_podcasting_sanitize_number_range'
	) );
	$wp_customize->add_control( 'video_podcasting_slider_excerpt_number', array(
		'label'       => esc_html__( 'Slider Excerpt length','video-podcasting' ),
		'section'     => 'video_podcasting_slidersettings',
		'type'        => 'range',
		'settings'    => 'video_podcasting_slider_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),'active_callback' => 'video_podcasting_default_slider'
	) );

	//Slider height
	$wp_customize->add_setting('video_podcasting_slider_height',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('video_podcasting_slider_height',array(
		'label'	=> __('Slider Height','video-podcasting'),
		'description'	=> __('Specify the slider height (px).','video-podcasting'),
		'input_attrs' => array(
            'placeholder' => __( '500px', 'video-podcasting' ),
        ),
		'section'=> 'video_podcasting_slidersettings',
		'type'=> 'text',
		'active_callback' => 'video_podcasting_default_slider'
	));

	$wp_customize->add_setting( 'video_podcasting_slider_speed', array(
		'default'  => 4000,
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'video_podcasting_slider_speed', array(
		'label' => esc_html__('Slider Transition Speed','video-podcasting'),
		'section' => 'video_podcasting_slidersettings',
		'type'  => 'text',
		'active_callback' => 'video_podcasting_default_slider'
	) );

	//Opacity
	$wp_customize->add_setting('video_podcasting_slider_opacity_color',array(
		'default'              => 0.7,
		'sanitize_callback' => 'video_podcasting_sanitize_choices'
	));

	$wp_customize->add_control( 'video_podcasting_slider_opacity_color', array(
		'label'       => esc_html__( 'Slider Image Opacity','video-podcasting' ),
		'section'     => 'video_podcasting_slidersettings',
		'type'        => 'select',
		'settings'    => 'video_podcasting_slider_opacity_color',
		'choices' => array(
			'0' =>  esc_attr('0','video-podcasting'),
			'0.1' =>  esc_attr('0.1','video-podcasting'),
			'0.2' =>  esc_attr('0.2','video-podcasting'),
			'0.3' =>  esc_attr('0.3','video-podcasting'),
			'0.4' =>  esc_attr('0.4','video-podcasting'),
			'0.5' =>  esc_attr('0.5','video-podcasting'),
			'0.6' =>  esc_attr('0.6','video-podcasting'),
			'0.7' =>  esc_attr('0.7','video-podcasting'),
			'0.8' =>  esc_attr('0.8','video-podcasting'),
			'0.9' =>  esc_attr('0.9','video-podcasting')
		),'active_callback' => 'video_podcasting_default_slider'
	));

	$wp_customize->add_setting( 'video_podcasting_slider_image_overlay',array(
    	'default' => 1,
      	'transport' => 'refresh',
      	'sanitize_callback' => 'video_podcasting_switch_sanitization'
 ));
 $wp_customize->add_control( new video_podcasting_Toggle_Switch_Custom_Control( $wp_customize, 'video_podcasting_slider_image_overlay',array(
	    	'label' => esc_html__( 'Slider Image Overlay','video-podcasting' ),
	    	'section' => 'video_podcasting_slidersettings',
	    	'active_callback' => 'video_podcasting_default_slider'
	 )));

	$wp_customize->add_setting('video_podcasting_slider_image_overlay_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'video_podcasting_slider_image_overlay_color', array(
		'label'    => __('Slider Image Overlay Color', 'video-podcasting'),
		'section'  => 'video_podcasting_slidersettings',
		'active_callback' => 'video_podcasting_default_slider'
	)));

	//Latest Podcast Section
	$wp_customize->add_section('video_podcasting_latest_podcast', array(
		'title'       => __('Latest Podcast Section', 'video-podcasting'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','video-podcasting'),
		'priority'    => null,
		'panel'       => 'video_podcasting_homepage_panel',
	));

	$wp_customize->add_setting('video_podcasting_latest_podcast_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('video_podcasting_latest_podcast_text',array(
		'description' => __('<p>1. More options for Latest Podcast section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Latest Podcast section.</p>','video-podcasting'),
		'section'=> 'video_podcasting_latest_podcast',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('video_podcasting_latest_podcast_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('video_podcasting_latest_podcast_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=video_podcasting_guide') ." '>More Info</a>",
		'section'=> 'video_podcasting_latest_podcast',
		'type'=> 'hidden'
	));

	//Featured Podcast Section
	$wp_customize->add_section('video_podcasting_featured_podcast', array(
		'title'       => __('Featured Podcast Section', 'video-podcasting'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','video-podcasting'),
		'priority'    => null,
		'panel'       => 'video_podcasting_homepage_panel',
	));

	$wp_customize->add_setting('video_podcasting_featured_podcast_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('video_podcasting_featured_podcast_text',array(
		'description' => __('<p>1. More options for Featured Podcast section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Featured Podcast section.</p>','video-podcasting'),
		'section'=> 'video_podcasting_featured_podcast',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('video_podcasting_featured_podcast_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('video_podcasting_featured_podcast_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=video_podcasting_guide') ." '>More Info</a>",
		'section'=> 'video_podcasting_featured_podcast',
		'type'=> 'hidden'
	));

	// About Section
	$wp_customize->add_section('video_podcasting_about_section',array(
		'title'	=> __('About Section','video-podcasting'),
		'description' => __('For more options of the about section <a class="go-pro-btn" target="blank" href="https://www.vwthemes.com/themes/video-podcast-wordpress-theme/">GO PRO</a>','video-podcasting'),
		'panel' => 'video_podcasting_homepage_panel',
	));

	$wp_customize->add_setting( 'video_podcasting_section_title', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'video_podcasting_section_title', array(
		'label'    => __( 'Add Section Title', 'video-podcasting' ),
		'input_attrs' => array(
            'placeholder' => __( 'About', 'video-podcasting' ),
        ),
		'section'  => 'video_podcasting_about_section',
		'type'     => 'text'
	) );

	$args =  array('numberposts' => -1);
	$post_list = get_posts($args);
	$i = 0;
	$psts[]='Select';  
	foreach($post_list as $post){
		$psts[$post->post_title] = $post->post_title;
	}

	$wp_customize->add_setting('video_podcasting_about_post',array(
		'default'	=> 'select',
		'sanitize_callback' => 'video_podcasting_sanitize_choices',
	));
	$wp_customize->add_control('video_podcasting_about_post',array(
		'type'    => 'select',
		'choices' => $psts,
		'label' => __('Select About Post','video-podcasting'),
		'section' => 'video_podcasting_about_section',
	));

	//Trending Podcast Section
	$wp_customize->add_section('video_podcasting_trending_podcast', array(
		'title'       => __('Trending Podcast Section', 'video-podcasting'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','video-podcasting'),
		'priority'    => null,
		'panel'       => 'video_podcasting_homepage_panel',
	));

	$wp_customize->add_setting('video_podcasting_trending_podcast_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('video_podcasting_trending_podcast_text',array(
		'description' => __('<p>1. More options for Trending Podcast section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Trending Podcast section.</p>','video-podcasting'),
		'section'=> 'video_podcasting_trending_podcast',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('video_podcasting_trending_podcast_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('video_podcasting_trending_podcast_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=video_podcasting_guide') ." '>More Info</a>",
		'section'=> 'video_podcasting_trending_podcast',
		'type'=> 'hidden'
	));

	//Meet Our Host Section
	$wp_customize->add_section('video_podcasting_our_host', array(
		'title'       => __('Meet Our Host Section', 'video-podcasting'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','video-podcasting'),
		'priority'    => null,
		'panel'       => 'video_podcasting_homepage_panel',
	));

	$wp_customize->add_setting('video_podcasting_our_host_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('video_podcasting_our_host_text',array(
		'description' => __('<p>1. More options for Meet Our Host section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Meet Our Host section.</p>','video-podcasting'),
		'section'=> 'video_podcasting_our_host',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('video_podcasting_our_host_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('video_podcasting_our_host_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=video_podcasting_guide') ." '>More Info</a>",
		'section'=> 'video_podcasting_our_host',
		'type'=> 'hidden'
	));

	//Recent Post Section
	$wp_customize->add_section('video_podcasting_recent_post', array(
		'title'       => __('Recent Post Section', 'video-podcasting'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','video-podcasting'),
		'priority'    => null,
		'panel'       => 'video_podcasting_homepage_panel',
	));

	$wp_customize->add_setting('video_podcasting_recent_post_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('video_podcasting_recent_post_text',array(
		'description' => __('<p>1. More options for Recent Post section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Recent Post section.</p>','video-podcasting'),
		'section'=> 'video_podcasting_recent_post',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('video_podcasting_recent_post_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('video_podcasting_recent_post_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=video_podcasting_guide') ." '>More Info</a>",
		'section'=> 'video_podcasting_recent_post',
		'type'=> 'hidden'
	));

	//Testimonial Section
	$wp_customize->add_section('video_podcasting_testimonial', array(
		'title'       => __('Testimonial Section', 'video-podcasting'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','video-podcasting'),
		'priority'    => null,
		'panel'       => 'video_podcasting_homepage_panel',
	));

	$wp_customize->add_setting('video_podcasting_testimonial_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('video_podcasting_testimonial_text',array(
		'description' => __('<p>1. More options for Testimonial section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Testimonial section.</p>','video-podcasting'),
		'section'=> 'video_podcasting_testimonial',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('video_podcasting_testimonial_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('video_podcasting_testimonial_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=video_podcasting_guide') ." '>More Info</a>",
		'section'=> 'video_podcasting_testimonial',
		'type'=> 'hidden'
	));

	//Donate Section
	$wp_customize->add_section('video_podcasting_donate', array(
		'title'       => __('Donate Section', 'video-podcasting'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','video-podcasting'),
		'priority'    => null,
		'panel'       => 'video_podcasting_homepage_panel',
	));

	$wp_customize->add_setting('video_podcasting_donate_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('video_podcasting_donate_text',array(
		'description' => __('<p>1. More options for Donate section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Donate section.</p>','video-podcasting'),
		'section'=> 'video_podcasting_donate',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('video_podcasting_donate_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('video_podcasting_donate_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=video_podcasting_guide') ." '>More Info</a>",
		'section'=> 'video_podcasting_donate',
		'type'=> 'hidden'
	));

	//Newsletter Section
	$wp_customize->add_section('video_podcasting_newsletter', array(
		'title'       => __('Newsletter Section', 'video-podcasting'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','video-podcasting'),
		'priority'    => null,
		'panel'       => 'video_podcasting_homepage_panel',
	));

	$wp_customize->add_setting('video_podcasting_newsletter_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('video_podcasting_newsletter_text',array(
		'description' => __('<p>1. More options for Newsletter section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Newsletter section.</p>','video-podcasting'),
		'section'=> 'video_podcasting_newsletter',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('video_podcasting_newsletter_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('video_podcasting_newsletter_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=video_podcasting_guide') ." '>More Info</a>",
		'section'=> 'video_podcasting_newsletter',
		'type'=> 'hidden'
	));

	//Footer Text
	$wp_customize->add_section('video_podcasting_footer',array(
		'title'	=> esc_html__('Footer Settings','video-podcasting'),
		'description' => __('For more options of the footer section <a class="go-pro-btn" target="blank" href="https://www.vwthemes.com/themes/video-podcast-wordpress-theme/">GO PRO</a>','video-podcasting'),
		'panel' => 'video_podcasting_homepage_panel',
	));	

	$wp_customize->add_setting( 'video_podcasting_footer_hide_show',array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'video_podcasting_switch_sanitization'
    ));
    $wp_customize->add_control( new video_podcasting_Toggle_Switch_Custom_Control( $wp_customize, 'video_podcasting_footer_hide_show',array(
      'label' => esc_html__( 'Show / Hide Footer','video-podcasting' ),
      'section' => 'video_podcasting_footer'
    )));

	$wp_customize->add_setting('video_podcasting_footer_background_color', array(
		'default'           => '#111111',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'video_podcasting_footer_background_color', array(
		'label'    => __('Footer Background Color', 'video-podcasting'),
		'section'  => 'video_podcasting_footer',
	)));

	$wp_customize->add_setting('video_podcasting_footer_background_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'video_podcasting_footer_background_image',array(
        'label' => __('Footer Background Image','video-podcasting'),
        'section' => 'video_podcasting_footer'
	)));

	// Footer
	$wp_customize->add_setting('video_podcasting_img_footer',array(
		'default'=> 'scroll',
		'sanitize_callback'	=> 'video_podcasting_sanitize_choices'
	));
	$wp_customize->add_control('video_podcasting_img_footer',array(
		'type' => 'select',
		'label'	=> __('Footer Background Attatchment','video-podcasting'),
		'choices' => array(
            'fixed' => __('fixed','video-podcasting'),
            'scroll' => __('scroll','video-podcasting'),
        ),
		'section'=> 'video_podcasting_footer',
	));

	$wp_customize->add_setting('video_podcasting_footer_widgets_heading',array(
    'default' => 'Left',
    'transport' => 'refresh',
    'sanitize_callback' => 'video_podcasting_sanitize_choices'
	));
	$wp_customize->add_control('video_podcasting_footer_widgets_heading',array(
    'type' => 'select',
    'label' => __('Footer Widget Heading','video-podcasting'),
    'section' => 'video_podcasting_footer',
    'choices' => array(
    	'Left' => __('Left','video-podcasting'),
      'Center' => __('Center','video-podcasting'),
      'Right' => __('Right','video-podcasting')
    ),
	) );

	$wp_customize->add_setting('video_podcasting_footer_widgets_content',array(
    'default' => 'Left',
    'transport' => 'refresh',
    'sanitize_callback' => 'video_podcasting_sanitize_choices'
	));
	$wp_customize->add_control('video_podcasting_footer_widgets_content',array(
    'type' => 'select',
    'label' => __('Footer Widget Content','video-podcasting'),
    'section' => 'video_podcasting_footer',
    'choices' => array(
    	'Left' => __('Left','video-podcasting'),
      'Center' => __('Center','video-podcasting'),
      'Right' => __('Right','video-podcasting')
    ),
	) );

	// footer padding
	$wp_customize->add_setting('video_podcasting_footer_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('video_podcasting_footer_padding',array(
		'label'	=> __('Footer Top Bottom Padding','video-podcasting'),
		'description'	=> __('Enter a value in pixels. Example:20px','video-podcasting'),
		'input_attrs' => array(
      'placeholder' => __( '10px', 'video-podcasting' ),
    ),
		'section'=> 'video_podcasting_footer',
		'type'=> 'text'
	));

  // footer social icon
	$wp_customize->add_setting( 'video_podcasting_footer_icon',array(
		'default' => false,
		'transport' => 'refresh',
		'sanitize_callback' => 'video_podcasting_switch_sanitization'
  ) );
	$wp_customize->add_control( new Video_Podcasting_Toggle_Switch_Custom_Control( $wp_customize, 'video_podcasting_footer_icon',array(
		'label' => esc_html__( 'Footer Social Icon','video-podcasting' ),
		'section' => 'video_podcasting_footer'
  ))); 

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('video_podcasting_footer_text', array( 
		'selector' => '.copyright p', 
		'render_callback' => 'video_podcasting_Customize_partial_video_podcasting_footer_text', 
	));

	$wp_customize->add_setting( 'video_podcasting_copyright_hide_show',array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'video_podcasting_switch_sanitization'
    ));
    $wp_customize->add_control( new Video_Podcasting_Toggle_Switch_Custom_Control( $wp_customize, 'video_podcasting_copyright_hide_show',array(
      'label' => esc_html__( 'Show / Hide Copyright','video-podcasting' ),
      'section' => 'video_podcasting_footer'
    )));

	$wp_customize->add_setting('video_podcasting_copyright_background_color', array(
		'default'           => '#222222',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'video_podcasting_copyright_background_color', array(
		'label'    => __('Copyright Background Color', 'video-podcasting'),
		'section'  => 'video_podcasting_footer',
	)));
	
	$wp_customize->add_setting('video_podcasting_footer_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('video_podcasting_footer_text',array(
		'label'	=> esc_html__('Copyright Text','video-podcasting'),
		'input_attrs' => array(
      'placeholder' => esc_html__( 'Copyright 2022, .....', 'video-podcasting' ),
    ),
		'section'=> 'video_podcasting_footer',
		'type'=> 'text'
	));

	$wp_customize->add_setting('video_podcasting_copyright_alingment',array(
    'default' => 'center',
    'sanitize_callback' => 'video_podcasting_sanitize_choices'
	));
	$wp_customize->add_control(new Video_Podcasting_Image_Radio_Control($wp_customize, 'video_podcasting_copyright_alingment', array(
    'type' => 'select',
    'label' => esc_html__('Copyright Alignment','video-podcasting'),
    'section' => 'video_podcasting_footer',
    'settings' => 'video_podcasting_copyright_alingment',
    'choices' => array(
        'left' => esc_url(get_template_directory_uri()).'/assets/images/copyright1.png',
        'center' => esc_url(get_template_directory_uri()).'/assets/images/copyright2.png',
        'right' => esc_url(get_template_directory_uri()).'/assets/images/copyright3.png'
    ))));

    $wp_customize->add_setting( 'video_podcasting_hide_show_scroll',array(
    	'default' => 1,
      	'transport' => 'refresh',
      	'sanitize_callback' => 'video_podcasting_switch_sanitization'
    ));  
    $wp_customize->add_control( new Video_Podcasting_Toggle_Switch_Custom_Control( $wp_customize, 'video_podcasting_hide_show_scroll',array(
      	'label' => esc_html__( 'Show / Hide Scroll to Top','video-podcasting' ),
      	'section' => 'video_podcasting_footer'
    )));

     //Selective Refresh
	$wp_customize->selective_refresh->add_partial('video_podcasting_scroll_to_top_icon', array( 
		'selector' => '.scrollup i', 
		'render_callback' => 'video_podcasting_Customize_partial_video_podcasting_scroll_to_top_icon', 
	));

    $wp_customize->add_setting('video_podcasting_scroll_to_top_icon',array(
		'default'	=> 'fas fa-long-arrow-alt-up',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new video_podcasting_Fontawesome_Icon_Chooser(
        $wp_customize,'video_podcasting_scroll_to_top_icon',array(
		'label'	=> __('Add Scroll to Top Icon','video-podcasting'),
		'transport' => 'refresh',
		'section'	=> 'video_podcasting_footer',
		'setting'	=> 'video_podcasting_scroll_to_top_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('video_podcasting_scroll_to_top_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('video_podcasting_scroll_to_top_font_size',array(
		'label'	=> __('Icon Font Size','video-podcasting'),
		'description'	=> __('Enter a value in pixels. Example:20px','video-podcasting'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'video-podcasting' ),
        ),
		'section'=> 'video_podcasting_footer',
		'type'=> 'text'
	));

	$wp_customize->add_setting('video_podcasting_scroll_to_top_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('video_podcasting_scroll_to_top_padding',array(
		'label'	=> __('Icon Top Bottom Padding','video-podcasting'),
		'description'	=> __('Enter a value in pixels. Example:20px','video-podcasting'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'video-podcasting' ),
        ),
		'section'=> 'video_podcasting_footer',
		'type'=> 'text'
	));

	$wp_customize->add_setting('video_podcasting_scroll_to_top_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('video_podcasting_scroll_to_top_width',array(
		'label'	=> __('Icon Width','video-podcasting'),
		'description'	=> __('Enter a value in pixels Example:20px','video-podcasting'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'video-podcasting' ),
        ),
		'section'=> 'video_podcasting_footer',
		'type'=> 'text'
	));

	$wp_customize->add_setting('video_podcasting_scroll_to_top_height',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('video_podcasting_scroll_to_top_height',array(
		'label'	=> __('Icon Height','video-podcasting'),
		'description'	=> __('Enter a value in pixels. Example:20px','video-podcasting'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'video-podcasting' ),
        ),
		'section'=> 'video_podcasting_footer',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'video_podcasting_scroll_to_top_border_radius', array(
		'default'              => '',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'video_podcasting_sanitize_number_range'
	) );
	$wp_customize->add_control( 'video_podcasting_scroll_to_top_border_radius', array(
		'label'       => esc_html__( 'Icon Border Radius','video-podcasting' ),
		'section'     => 'video_podcasting_footer',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

    $wp_customize->add_setting('video_podcasting_scroll_top_alignment',array(
        'default' => 'Right',
        'sanitize_callback' => 'video_podcasting_sanitize_choices'
	));
	$wp_customize->add_control(new Video_Podcasting_Image_Radio_Control($wp_customize, 'video_podcasting_scroll_top_alignment', array(
        'type' => 'select',
        'label' => esc_html__('Scroll To Top','video-podcasting'),
        'section' => 'video_podcasting_footer',
        'settings' => 'video_podcasting_scroll_top_alignment',
        'choices' => array(
            'Left' => esc_url(get_template_directory_uri()).'/assets/images/layout1.png',
            'Center' => esc_url(get_template_directory_uri()).'/assets/images/layout2.png',
            'Right' => esc_url(get_template_directory_uri()).'/assets/images/layout3.png'
    ))));

	//Blog Post Settings
	$wp_customize->add_panel( 'video_podcasting_blog_post_parent_panel', array(
		'title' => esc_html__( 'Blog Post Settings', 'video-podcasting' ),
		'panel' => 'video_podcasting_panel_id',
		'priority' => 20,
	));

	// Add example section and controls to the middle (second) panel
	$wp_customize->add_section( 'video_podcasting_post_settings', array(
		'title' => esc_html__( 'Post Settings', 'video-podcasting' ),
		'panel' => 'video_podcasting_blog_post_parent_panel',
	));

	//Blog layout
    $wp_customize->add_setting('video_podcasting_blog_layout_option',array(
        'default' => 'Default',
        'sanitize_callback' => 'video_podcasting_sanitize_choices'
    ));
    $wp_customize->add_control(new Video_Podcasting_Image_Radio_Control($wp_customize, 'video_podcasting_blog_layout_option', array(
        'type' => 'select',
        'label' => __('Blog Post Layouts','video-podcasting'),
        'section' => 'video_podcasting_post_settings',
        'choices' => array(
            'Default' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout1.png',
            'Center' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout2.png',
            'Left' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout3.png',
    ))));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('video_podcasting_toggle_postdate', array( 
		'selector' => '.post-main-box h2 a', 
		'render_callback' => 'video_podcasting_Customize_partial_video_podcasting_toggle_postdate', 
	));

  $wp_customize->add_setting('video_podcasting_toggle_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Video_Podcasting_Fontawesome_Icon_Chooser(
        $wp_customize,'video_podcasting_toggle_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','video-podcasting'),
		'transport' => 'refresh',
		'section'	=> 'video_podcasting_post_settings',
		'setting'	=> 'video_podcasting_toggle_postdate_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'video_podcasting_toggle_postdate',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'video_podcasting_switch_sanitization'
) );
  $wp_customize->add_control( new Video_Podcasting_Toggle_Switch_Custom_Control( $wp_customize, 'video_podcasting_toggle_postdate',array(
      'label' => esc_html__( 'Post Date','video-podcasting' ),
      'section' => 'video_podcasting_post_settings'
  )));

	$wp_customize->add_setting('video_podcasting_toggle_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Video_Podcasting_Fontawesome_Icon_Chooser(
        $wp_customize,'video_podcasting_toggle_author_icon',array(
		'label'	=> __('Add Author Icon','video-podcasting'),
		'transport' => 'refresh',
		'section'	=> 'video_podcasting_post_settings',
		'setting'	=> 'video_podcasting_toggle_author_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'video_podcasting_toggle_author',array(
	'default' => 1,
	'transport' => 'refresh',
	'sanitize_callback' => 'video_podcasting_switch_sanitization'
  ) );
  $wp_customize->add_control( new Video_Podcasting_Toggle_Switch_Custom_Control( $wp_customize, 'video_podcasting_toggle_author',array(
	'label' => esc_html__( 'Author','video-podcasting' ),
	'section' => 'video_podcasting_post_settings'
  )));

  $wp_customize->add_setting('video_podcasting_toggle_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Video_Podcasting_Fontawesome_Icon_Chooser(
        $wp_customize,'video_podcasting_toggle_comments_icon',array(
		'label'	=> __('Add Comments Icon','video-podcasting'),
		'transport' => 'refresh',
		'section'	=> 'video_podcasting_post_settings',
		'setting'	=> 'video_podcasting_toggle_comments_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'video_podcasting_toggle_comments',array(
	'default' => 1,
	'transport' => 'refresh',
	'sanitize_callback' => 'video_podcasting_switch_sanitization'
  ) );
  $wp_customize->add_control( new Video_Podcasting_Toggle_Switch_Custom_Control( $wp_customize, 'video_podcasting_toggle_comments',array(
	'label' => esc_html__( 'Comments','video-podcasting' ),
	'section' => 'video_podcasting_post_settings'
  )));

  $wp_customize->add_setting('video_podcasting_toggle_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Video_Podcasting_Fontawesome_Icon_Chooser(
        $wp_customize,'video_podcasting_toggle_time_icon',array(
		'label'	=> __('Add Time Icon','video-podcasting'),
		'transport' => 'refresh',
		'section'	=> 'video_podcasting_post_settings',
		'setting'	=> 'video_podcasting_toggle_time_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'video_podcasting_toggle_time',array(
	'default' => 1,
	'transport' => 'refresh',
	'sanitize_callback' => 'video_podcasting_switch_sanitization'
  ) );
  $wp_customize->add_control( new Video_Podcasting_Toggle_Switch_Custom_Control( $wp_customize, 'video_podcasting_toggle_time',array(
	'label' => esc_html__( 'Time','video-podcasting' ),
	'section' => 'video_podcasting_post_settings'
  )));

  $wp_customize->add_setting( 'video_podcasting_featured_image_hide_show',array(
	'default' => 1,
	'transport' => 'refresh',
	'sanitize_callback' => 'video_podcasting_switch_sanitization'
	));
  $wp_customize->add_control( new Video_Podcasting_Toggle_Switch_Custom_Control( $wp_customize, 'video_podcasting_featured_image_hide_show', array(
	'label' => esc_html__( 'Featured Image','video-podcasting' ),
	'section' => 'video_podcasting_post_settings'
  )));

  $wp_customize->add_setting( 'video_podcasting_featured_image_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'video_podcasting_sanitize_number_range'
	) );
	$wp_customize->add_control( 'video_podcasting_featured_image_border_radius', array(
		'label'       => esc_html__( 'Featured Image Border Radius','video-podcasting' ),
		'section'     => 'video_podcasting_post_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'video_podcasting_featured_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'video_podcasting_sanitize_number_range'
	) );
	$wp_customize->add_control( 'video_podcasting_featured_image_box_shadow', array(
		'label'       => esc_html__( 'Featured Image Box Shadow','video-podcasting' ),
		'section'     => 'video_podcasting_post_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Featured Image
	$wp_customize->add_setting('video_podcasting_blog_post_featured_image_dimension',array(
	       'default' => 'default',
	       'sanitize_callback'	=> 'video_podcasting_sanitize_choices'
	));
  $wp_customize->add_control('video_podcasting_blog_post_featured_image_dimension',array(
     'type' => 'select',
     'label'	=> __('Blog Post Featured Image Dimension','video-podcasting'),
     'section'	=> 'video_podcasting_post_settings',
     'choices' => array(
          'default' => __('Default','video-podcasting'),
          'custom' => __('Custom Image Size','video-podcasting'),
      ),
  ));

	$wp_customize->add_setting('video_podcasting_blog_post_featured_image_custom_width',array(
			'default'=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
	$wp_customize->add_control('video_podcasting_blog_post_featured_image_custom_width',array(
			'label'	=> __('Featured Image Custom Width','video-podcasting'),
			'description'	=> __('Enter a value in pixels. Example:20px','video-podcasting'),
			'input_attrs' => array(
	    'placeholder' => __( '10px', 'video-podcasting' ),),
			'section'=> 'video_podcasting_post_settings',
			'type'=> 'text',
			'active_callback' => 'video_podcasting_blog_post_featured_image_dimension'
		));

	$wp_customize->add_setting('video_podcasting_blog_post_featured_image_custom_height',array(
			'default'=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('video_podcasting_blog_post_featured_image_custom_height',array(
			'label'	=> __('Featured Image Custom Height','video-podcasting'),
			'description'	=> __('Enter a value in pixels. Example:20px','video-podcasting'),
			'input_attrs' => array(
	    'placeholder' => __( '10px', 'video-podcasting' ),),
			'section'=> 'video_podcasting_post_settings',
			'type'=> 'text',
			'active_callback' => 'video_podcasting_blog_post_featured_image_dimension'
	));


    $wp_customize->add_setting( 'video_podcasting_toggle_tags',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'video_podcasting_switch_sanitization'
	));
    $wp_customize->add_control( new Video_Podcasting_Toggle_Switch_Custom_Control( $wp_customize, 'video_podcasting_toggle_tags', array(
		'label' => esc_html__( 'Tags','video-podcasting' ),
		'section' => 'video_podcasting_post_settings'
    )));

    $wp_customize->add_setting( 'video_podcasting_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'video_podcasting_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'video_podcasting_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','video-podcasting' ),
		'section'     => 'video_podcasting_post_settings',
		'type'        => 'range',
		'settings'    => 'video_podcasting_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('video_podcasting_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('video_podcasting_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','video-podcasting'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','video-podcasting'),
		'section'=> 'video_podcasting_post_settings',
		'type'=> 'text'
	));

    $wp_customize->add_setting('video_podcasting_excerpt_settings',array(
        'default' => 'Excerpt',
        'transport' => 'refresh',
        'sanitize_callback' => 'video_podcasting_sanitize_choices'
	));
	$wp_customize->add_control('video_podcasting_excerpt_settings',array(
        'type' => 'select',
        'label' => esc_html__('Post Content','video-podcasting'),
        'section' => 'video_podcasting_post_settings',
        'choices' => array(
        	'Content' => esc_html__('Content','video-podcasting'),
            'Excerpt' => esc_html__('Excerpt','video-podcasting'),
            'No Content' => esc_html__('No Content','video-podcasting')
        ),
	) );

  $wp_customize->add_setting('video_podcasting_blog_page_posts_settings',array(
        'default' => 'Into Blocks',
        'transport' => 'refresh',
        'sanitize_callback' => 'video_podcasting_sanitize_choices'
	));
	$wp_customize->add_control('video_podcasting_blog_page_posts_settings',array(
        'type' => 'select',
        'label' => __('Display Blog Page posts','video-podcasting'),
        'section' => 'video_podcasting_post_settings',
        'choices' => array(
        	'Into Blocks' => __('Into Blocks','video-podcasting'),
            'Without Blocks' => __('Without Blocks','video-podcasting')
        ),
	) );

    // Button Settings
	$wp_customize->add_section( 'video_podcasting_button_settings', array(
		'title' => esc_html__( 'Button Settings', 'video-podcasting' ),
		'panel' => 'video_podcasting_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('video_podcasting_button_text', array( 
		'selector' => '.post-main-box .more-btn a', 
		'render_callback' => 'video_podcasting_Customize_partial_video_podcasting_button_text', 
	));

    $wp_customize->add_setting('video_podcasting_button_text',array(
		'default'=> esc_html__('Read More','video-podcasting'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('video_podcasting_button_text',array(
		'label'	=> esc_html__('Add Button Text','video-podcasting'),
		'input_attrs' => array(
            'placeholder' => esc_html__( 'Read More', 'video-podcasting' ),
        ),
		'section'=> 'video_podcasting_button_settings',
		'type'=> 'text'
	));

	// font size button
	$wp_customize->add_setting('video_podcasting_button_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('video_podcasting_button_font_size',array(
		'label'	=> __('Button Font Size','video-podcasting'),
		'description'	=> __('Enter a value in pixels. Example:20px','video-podcasting'),
		'input_attrs' => array(
      'placeholder' => __( '10px', 'video-podcasting' ),
    ),
    'type'        => 'text',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
		'section'=> 'video_podcasting_button_settings',
	));

	$wp_customize->add_setting( 'video_podcasting_button_border_radius', array(
		'default'              => 5,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'video_podcasting_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'video_podcasting_button_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','video-podcasting' ),
		'section'     => 'video_podcasting_button_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('video_podcasting_button_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('video_podcasting_button_padding_top_bottom',array(
		'label'	=> __('Padding Top Bottom','video-podcasting'),
		'description'	=> __('Enter a value in pixels. Example:20px','video-podcasting'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'video-podcasting' ),
        ),
		'section'=> 'video_podcasting_button_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('video_podcasting_button_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('video_podcasting_button_padding_left_right',array(
		'label'	=> __('Padding Left Right','video-podcasting'),
		'description'	=> __('Enter a value in pixels. Example:20px','video-podcasting'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'video-podcasting' ),
        ),
		'section'=> 'video_podcasting_button_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('video_podcasting_button_letter_spacing',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('video_podcasting_button_letter_spacing',array(
		'label'	=> __('Button Letter Spacing','video-podcasting'),
		'description'	=> __('Enter a value in pixels. Example:20px','video-podcasting'),
		'input_attrs' => array(
      	'placeholder' => __( '10px', 'video-podcasting' ),
    ),
    	'type'        => 'text',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
		'section'=> 'video_podcasting_button_settings',
	));

	// text trasform
	$wp_customize->add_setting('video_podcasting_button_text_transform',array(
		'default'=> 'Uppercase',
		'sanitize_callback'	=> 'video_podcasting_sanitize_choices'
	));
	$wp_customize->add_control('video_podcasting_button_text_transform',array(
		'type' => 'radio',
		'label'	=> __('Button Text Transform','video-podcasting'),
		'choices' => array(
            'Uppercase' => __('Uppercase','video-podcasting'),
            'Capitalize' => __('Capitalize','video-podcasting'),
            'Lowercase' => __('Lowercase','video-podcasting'),
        ),
		'section'=> 'video_podcasting_button_settings',
	));

	// Related Post Settings
	$wp_customize->add_section( 'video_podcasting_related_posts_settings', array(
		'title' => esc_html__( 'Related Posts Settings', 'video-podcasting' ),
		'panel' => 'video_podcasting_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('video_podcasting_related_post_title', array( 
		'selector' => '.related-post h3', 
		'render_callback' => 'video_podcasting_Customize_partial_video_podcasting_related_post_title', 
	));

    $wp_customize->add_setting( 'video_podcasting_related_post',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'video_podcasting_switch_sanitization'
    ) );
    $wp_customize->add_control( new Video_Podcasting_Toggle_Switch_Custom_Control( $wp_customize, 'video_podcasting_related_post',array(
		'label' => esc_html__( 'Related Post','video-podcasting' ),
		'section' => 'video_podcasting_related_posts_settings'
    )));

    $wp_customize->add_setting('video_podcasting_related_post_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('video_podcasting_related_post_title',array(
		'label'	=> esc_html__('Add Related Post Title','video-podcasting'),
		'input_attrs' => array(
            'placeholder' => esc_html__( 'Related Post', 'video-podcasting' ),
        ),
		'section'=> 'video_podcasting_related_posts_settings',
		'type'=> 'text'
	));

   	$wp_customize->add_setting('video_podcasting_related_posts_count',array(
		'default'=> 3,
		'sanitize_callback'	=> 'video_podcasting_sanitize_number_absint'
	));
	$wp_customize->add_control('video_podcasting_related_posts_count',array(
		'label'	=> esc_html__('Add Related Post Count','video-podcasting'),
		'input_attrs' => array(
            'placeholder' => esc_html__( '3', 'video-podcasting' ),
        ),
		'section'=> 'video_podcasting_related_posts_settings',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'video_podcasting_related_posts_excerpt_number', array(
		'default'              => 20,
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'video_podcasting_sanitize_number_range'
	) );
	$wp_customize->add_control( 'video_podcasting_related_posts_excerpt_number', array(
		'label'       => esc_html__( 'Related Posts Excerpt length','video-podcasting' ),
		'section'     => 'video_podcasting_related_posts_settings',
		'type'        => 'range',
		'settings'    => 'video_podcasting_related_posts_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		), 
	) );

	// Single Posts Settings
	$wp_customize->add_section( 'video_podcasting_single_blog_settings', array(
		'title' => __( 'Single Post Settings', 'video-podcasting' ),
		'panel' => 'video_podcasting_blog_post_parent_panel',
	));

  	$wp_customize->add_setting('video_podcasting_single_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new video_podcasting_Fontawesome_Icon_Chooser(
        $wp_customize,'video_podcasting_single_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','video-podcasting'),
		'transport' => 'refresh',
		'section'	=> 'video_podcasting_single_blog_settings',
		'setting'	=> 'video_podcasting_single_postdate_icon',
		'type'		=> 'icon'
	)));

 	$wp_customize->add_setting( 'video_podcasting_single_postdate',array(
	    'default' => 1,
	    'transport' => 'refresh',
	    'sanitize_callback' => 'video_podcasting_switch_sanitization'
	) );
	$wp_customize->add_control( new Video_Podcasting_Toggle_Switch_Custom_Control( $wp_customize, 'video_podcasting_single_postdate',array(
	    'label' => esc_html__( 'Date','video-podcasting' ),
	   'section' => 'video_podcasting_single_blog_settings'
	)));

	$wp_customize->add_setting('video_podcasting_single_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new video_podcasting_Fontawesome_Icon_Chooser(
        $wp_customize,'video_podcasting_single_author_icon',array(
		'label'	=> __('Add Author Icon','video-podcasting'),
		'transport' => 'refresh',
		'section'	=> 'video_podcasting_single_blog_settings',
		'setting'	=> 'video_podcasting_single_author_icon',
		'type'		=> 'icon'
	)));
 
  	$wp_customize->add_setting( 'video_podcasting_single_author',array(
	    'default' => 1,
	    'transport' => 'refresh',
    	'sanitize_callback' => 'video_podcasting_switch_sanitization'
	) );
	$wp_customize->add_control( new Video_Podcasting_Toggle_Switch_Custom_Control( $wp_customize, 'video_podcasting_single_author',array(
	    'label' => esc_html__( 'Author','video-podcasting' ),
	    'section' => 'video_podcasting_single_blog_settings'
	)));

   	$wp_customize->add_setting('video_podcasting_single_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new video_podcasting_Fontawesome_Icon_Chooser(
        $wp_customize,'video_podcasting_single_comments_icon',array(
		'label'	=> __('Add Comments Icon','video-podcasting'),
		'transport' => 'refresh',
		'section'	=> 'video_podcasting_single_blog_settings',
		'setting'	=> 'video_podcasting_single_comments_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'video_podcasting_single_comments',array(
	    'default' => 1,
	    'transport' => 'refresh',
	    'sanitize_callback' => 'video_podcasting_switch_sanitization'
	) );
	$wp_customize->add_control( new Video_Podcasting_Toggle_Switch_Custom_Control( $wp_customize, 'video_podcasting_single_comments',array(
	    'label' => esc_html__( 'Comments','video-podcasting' ),
	    'section' => 'video_podcasting_single_blog_settings'
	)));

  	$wp_customize->add_setting('video_podcasting_single_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new video_podcasting_Fontawesome_Icon_Chooser(
        $wp_customize,'video_podcasting_single_time_icon',array(
		'label'	=> __('Add Time Icon','video-podcasting'),
		'transport' => 'refresh',
		'section'	=> 'video_podcasting_single_blog_settings',
		'setting'	=> 'video_podcasting_single_time_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'video_podcasting_single_time',array(
	    'default' => 1,
	    'transport' => 'refresh',
	    'sanitize_callback' => 'video_podcasting_switch_sanitization'
	) );

	$wp_customize->add_control( new Video_Podcasting_Toggle_Switch_Custom_Control( $wp_customize, 'video_podcasting_single_time',array(
	    'label' => esc_html__( 'Time','video-podcasting' ),
	    'section' => 'video_podcasting_single_blog_settings'
	)));

	$wp_customize->add_setting( 'video_podcasting_single_post_breadcrumb',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'video_podcasting_switch_sanitization'
  ) );
  $wp_customize->add_control( new Video_Podcasting_Toggle_Switch_Custom_Control( $wp_customize, 'video_podcasting_single_post_breadcrumb',array(
		'label' => esc_html__( 'Single Post Breadcrumb','video-podcasting' ),
		'section' => 'video_podcasting_single_blog_settings'
    )));

   // Single Posts Category
  $wp_customize->add_setting( 'video_podcasting_single_post_category',array(
		'default' => true,
		'transport' => 'refresh',
		'sanitize_callback' => 'video_podcasting_switch_sanitization'
  ) );
  $wp_customize->add_control( new Video_Podcasting_Toggle_Switch_Custom_Control( $wp_customize, 'video_podcasting_single_post_category',array(
		'label' => esc_html__( 'Single Post Category','video-podcasting' ),
		'section' => 'video_podcasting_single_blog_settings'
 	)));

	$wp_customize->add_setting( 'video_podcasting_toggle_tags',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'video_podcasting_switch_sanitization'
	));
  $wp_customize->add_control( new Video_Podcasting_Toggle_Switch_Custom_Control( $wp_customize, 'video_podcasting_toggle_tags', array(
		'label' => esc_html__( 'Tags','video-podcasting' ),
		'section' => 'video_podcasting_single_blog_settings'
    )));

 	$wp_customize->add_setting( 'video_podcasting_single_blog_post_navigation_show_hide',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'video_podcasting_switch_sanitization'
	));
	$wp_customize->add_control( new Video_Podcasting_Toggle_Switch_Custom_Control( $wp_customize, 'video_podcasting_single_blog_post_navigation_show_hide', array(
		  'label' => esc_html__( 'Post Navigation','video-podcasting' ),
		  'section' => 'video_podcasting_single_blog_settings'
	)));

	$wp_customize->add_setting('video_podcasting_single_post_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('video_podcasting_single_post_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','video-podcasting'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','video-podcasting'),
		'section'=> 'video_podcasting_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('video_podcasting_single_blog_comment_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('video_podcasting_single_blog_comment_title',array(
		'label'	=> __('Add Comment Title','video-podcasting'),
		'input_attrs' => array(
            'placeholder' => __( 'Leave a Reply', 'video-podcasting' ),
        ),
		'section'=> 'video_podcasting_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('video_podcasting_single_blog_comment_button_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('video_podcasting_single_blog_comment_button_text',array(
		'label'	=> __('Add Comment Button Text','video-podcasting'),
		'input_attrs' => array(
            'placeholder' => __( 'Post Comment', 'video-podcasting' ),
        ),
		'section'=> 'video_podcasting_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('video_podcasting_single_blog_comment_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('video_podcasting_single_blog_comment_width',array(
		'label'	=> __('Comment Form Width','video-podcasting'),
		'description'	=> __('Enter a value in %. Example:50%','video-podcasting'),
		'input_attrs' => array(
            'placeholder' => __( '100%', 'video-podcasting' ),
        ),
		'section'=> 'video_podcasting_single_blog_settings',
		'type'=> 'text'
	));

	  // Grid layout setting
	$wp_customize->add_section( 'video_podcasting_grid_layout_settings', array(
		'title' => __( 'Grid Layout Settings', 'video-podcasting' ),
		'panel' => 'video_podcasting_blog_post_parent_panel',
	));

  	$wp_customize->add_setting('video_podcasting_grid_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new video_podcasting_Fontawesome_Icon_Chooser(
        $wp_customize,'video_podcasting_grid_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','video-podcasting'),
		'transport' => 'refresh',
		'section'	=> 'video_podcasting_grid_layout_settings',
		'setting'	=> 'video_podcasting_grid_postdate_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'video_podcasting_grid_postdate',array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'video_podcasting_switch_sanitization'
  	) );
  	$wp_customize->add_control( new Video_Podcasting_Toggle_Switch_Custom_Control( $wp_customize, 'video_podcasting_grid_postdate',array(
      'label' => esc_html__( 'Post Date','video-podcasting' ),
      'section' => 'video_podcasting_grid_layout_settings'
  	)));

	$wp_customize->add_setting('video_podcasting_grid_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new video_podcasting_Fontawesome_Icon_Chooser(
        $wp_customize,'video_podcasting_grid_author_icon',array(
		'label'	=> __('Add Author Icon','video-podcasting'),
		'transport' => 'refresh',
		'section'	=> 'video_podcasting_grid_layout_settings',
		'setting'	=> 'video_podcasting_grid_author_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'video_podcasting_grid_author',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'video_podcasting_switch_sanitization'
	) );
	$wp_customize->add_control( new Video_Podcasting_Toggle_Switch_Custom_Control( $wp_customize, 'video_podcasting_grid_author',array(
		'label' => esc_html__( 'Author','video-podcasting' ),
		'section' => 'video_podcasting_grid_layout_settings'
	)));

   	$wp_customize->add_setting('video_podcasting_grid_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new video_podcasting_Fontawesome_Icon_Chooser(
        $wp_customize,'video_podcasting_grid_comments_icon',array(
		'label'	=> __('Add Comments Icon','video-podcasting'),
		'transport' => 'refresh',
		'section'	=> 'video_podcasting_grid_layout_settings',
		'setting'	=> 'video_podcasting_grid_comments_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'video_podcasting_grid_comments',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'video_podcasting_switch_sanitization'
	) );
	$wp_customize->add_control( new Video_Podcasting_Toggle_Switch_Custom_Control( $wp_customize, 'video_podcasting_grid_comments',array(
		'label' => esc_html__( 'Comments','video-podcasting' ),
		'section' => 'video_podcasting_grid_layout_settings'
	)));

	//Others Settings
	$wp_customize->add_panel( 'video_podcasting_others_panel', array(
		'title' => esc_html__( 'Others Settings', 'video-podcasting' ),
		'panel' => 'video_podcasting_panel_id',
		'priority' => 20,
	));

	// Layout
	$wp_customize->add_section( 'video_podcasting_left_right', array(
    	'title' => esc_html__( 'General Settings', 'video-podcasting' ),
		'panel' => 'video_podcasting_others_panel'
	) );

	$wp_customize->add_setting('video_podcasting_width_option',array(
        'default' => 'Full Width',
        'sanitize_callback' => 'video_podcasting_sanitize_choices'
	));
	$wp_customize->add_control(new Video_Podcasting_Image_Radio_Control($wp_customize, 'video_podcasting_width_option', array(
        'type' => 'select',
        'label' => esc_html__('Width Layouts','video-podcasting'),
        'description' => esc_html__('Here you can change the width layout of Website.','video-podcasting'),
        'section' => 'video_podcasting_left_right',
        'choices' => array(
            'Full Width' => esc_url(get_template_directory_uri()).'/assets/images/full-width.png',
            'Wide Width' => esc_url(get_template_directory_uri()).'/assets/images/wide-width.png',
            'Boxed' => esc_url(get_template_directory_uri()).'/assets/images/boxed-width.png',
    ))));

	$wp_customize->add_setting('video_podcasting_theme_options',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'video_podcasting_sanitize_choices'
	));
	$wp_customize->add_control('video_podcasting_theme_options',array(
        'type' => 'select',
        'label' => esc_html__('Post Sidebar Layout','video-podcasting'),
        'description' => esc_html__('Here you can change the sidebar layout for posts. ','video-podcasting'),
        'section' => 'video_podcasting_left_right',
        'choices' => array(
            'Left Sidebar' => esc_html__('Left Sidebar','video-podcasting'),
            'Right Sidebar' => esc_html__('Right Sidebar','video-podcasting'),
            'One Column' => esc_html__('One Column','video-podcasting'),
            'Grid Layout' => esc_html__('Grid Layout','video-podcasting')
        ),
	) );

	$wp_customize->add_setting('video_podcasting_page_layout',array(
        'default' => 'One_Column',
        'sanitize_callback' => 'video_podcasting_sanitize_choices'
	));
	$wp_customize->add_control('video_podcasting_page_layout',array(
        'type' => 'select',
        'label' => esc_html__('Page Sidebar Layout','video-podcasting'),
        'description' => esc_html__('Here you can change the sidebar layout for pages. ','video-podcasting'),
        'section' => 'video_podcasting_left_right',
        'choices' => array(
            'Left_Sidebar' => esc_html__('Left Sidebar','video-podcasting'),
            'Right_Sidebar' => esc_html__('Right Sidebar','video-podcasting'),
            'One_Column' => esc_html__('One Column','video-podcasting')
        ),
	) );

  $wp_customize->add_setting( 'video_podcasting_single_page_breadcrumb',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'video_podcasting_switch_sanitization'
    ) );
    $wp_customize->add_control( new Video_Podcasting_Toggle_Switch_Custom_Control( $wp_customize, 'video_podcasting_single_page_breadcrumb',array(
		'label' => esc_html__( 'Single Page Breadcrumb','video-podcasting' ),
		'section' => 'video_podcasting_left_right'
    )));

  //Wow Animation
	$wp_customize->add_setting( 'video_podcasting_animation',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'video_podcasting_switch_sanitization'
  ));
    $wp_customize->add_control( new Video_Podcasting_Toggle_Switch_Custom_Control( $wp_customize, 'video_podcasting_animation',array(
      'label' => esc_html__( 'Animations','video-podcasting' ),
      'description' => __('Here you can disable overall site animation effect','video-podcasting'),
      'section' => 'video_podcasting_left_right'
    )));

    // Pre-Loader
	$wp_customize->add_setting( 'video_podcasting_loader_enable',array(
    'default' => 0,
    'transport' => 'refresh',
    'sanitize_callback' => 'video_podcasting_switch_sanitization'
  ));
    $wp_customize->add_control( new Video_Podcasting_Toggle_Switch_Custom_Control( $wp_customize, 'video_podcasting_loader_enable',array(
      'label' => esc_html__( 'Pre-Loader','video-podcasting' ),
      'section' => 'video_podcasting_left_right'
    )));

	$wp_customize->add_setting('video_podcasting_preloader_bg_color', array(
		'default'           => '#222222',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'video_podcasting_preloader_bg_color', array(
		'label'    => __('Pre-Loader Background Color', 'video-podcasting'),
		'section'  => 'video_podcasting_left_right',
	)));

	$wp_customize->add_setting('video_podcasting_preloader_border_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'video_podcasting_preloader_border_color', array(
		'label'    => __('Pre-Loader Border Color', 'video-podcasting'),
		'section'  => 'video_podcasting_left_right',
	)));

	$wp_customize->add_setting('video_podcasting_preloader_bg_img',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'video_podcasting_preloader_bg_img',array(
        'label' => __('Preloader Background Image','video-podcasting'),
        'section' => 'video_podcasting_left_right'
	)));

	//Responsive Media Settings
	$wp_customize->add_section('video_podcasting_responsive_media',array(
		'title'	=> esc_html__('Responsive Media','video-podcasting'),
		'panel' => 'video_podcasting_others_panel',
	));

    $wp_customize->add_setting( 'video_podcasting_resp_slider_hide_show',array(
      	'default' => 0,
     	'transport' => 'refresh',
      	'sanitize_callback' => 'video_podcasting_switch_sanitization'
    ));  
    $wp_customize->add_control( new Video_Podcasting_Toggle_Switch_Custom_Control( $wp_customize, 'video_podcasting_resp_slider_hide_show',array(
      	'label' => esc_html__( 'Show / Hide Slider','video-podcasting' ),
      	'section' => 'video_podcasting_responsive_media'
    )));

    $wp_customize->add_setting( 'video_podcasting_sidebar_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'video_podcasting_switch_sanitization'
    ));  
    $wp_customize->add_control( new Video_Podcasting_Toggle_Switch_Custom_Control( $wp_customize, 'video_podcasting_sidebar_hide_show',array(
      	'label' => esc_html__( 'Show / Hide Sidebar','video-podcasting' ),
      	'section' => 'video_podcasting_responsive_media'
    )));

    $wp_customize->add_setting( 'video_podcasting_resp_scroll_top_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'video_podcasting_switch_sanitization'
    ));  
    $wp_customize->add_control( new Video_Podcasting_Toggle_Switch_Custom_Control( $wp_customize, 'video_podcasting_resp_scroll_top_hide_show',array(
      	'label' => esc_html__( 'Show / Hide Scroll To Top','video-podcasting' ),
      	'section' => 'video_podcasting_responsive_media'
    )));

    $wp_customize->add_setting('video_podcasting_resp_menu_toggle_btn_bg_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'video_podcasting_resp_menu_toggle_btn_bg_color', array(
		'label'    => __('Toggle Button Bg Color', 'video-podcasting'),
		'section'  => 'video_podcasting_responsive_media',
	)));

    //Woocommerce settings
	$wp_customize->add_section('video_podcasting_woocommerce_section', array(
		'title'    => __('WooCommerce Layout', 'video-podcasting'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

    //Shop Page Featured Image
	$wp_customize->add_setting( 'video_podcasting_shop_featured_image_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'video_podcasting_sanitize_number_range'
	) );
	$wp_customize->add_control( 'video_podcasting_shop_featured_image_border_radius', array(
		'label'       => esc_html__( 'Shop Page Featured Image Border Radius','video-podcasting' ),
		'section'     => 'video_podcasting_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'video_podcasting_shop_featured_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'video_podcasting_sanitize_number_range'
	) );
	$wp_customize->add_control( 'video_podcasting_shop_featured_image_box_shadow', array(
		'label'       => esc_html__( 'Shop Page Featured Image Box Shadow','video-podcasting' ),
		'section'     => 'video_podcasting_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) ); 

	// Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'video_podcasting_woocommerce_shop_page_sidebar', array( 'selector' => '.post-type-archive-product #sidebar', 
				'render_callback' => 'video_podcasting_customize_partial_video_podcasting_woocommerce_shop_page_sidebar', ) );

    // Woocommerce Shop Page Sidebar
	$wp_customize->add_setting( 'video_podcasting_woocommerce_shop_page_sidebar',array(
				'default' => 1,
				'transport' => 'refresh',
				'sanitize_callback' => 'video_podcasting_switch_sanitization'
    ) );
	$wp_customize->add_control( new Video_Podcasting_Toggle_Switch_Custom_Control( $wp_customize, 'video_podcasting_woocommerce_shop_page_sidebar',array(
			'label' => esc_html__( 'Shop Page Sidebar','video-podcasting' ),
			'section' => 'video_podcasting_woocommerce_section'
  )));

  $wp_customize->add_setting('video_podcasting_shop_page_layout',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'video_podcasting_sanitize_choices'
	));
	$wp_customize->add_control('video_podcasting_shop_page_layout',array(
        'type' => 'select',
        'label' => __('Shop Page Sidebar Layout','video-podcasting'),
        'section' => 'video_podcasting_woocommerce_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','video-podcasting'),
            'Right Sidebar' => __('Right Sidebar','video-podcasting'),
        ),
	) );

  // Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'video_podcasting_woocommerce_single_product_page_sidebar', array( 'selector' => '.single-product #sidebar', 
		'render_callback' => 'video_podcasting_customize_partial_video_podcasting_woocommerce_single_product_page_sidebar', ) );

    //Woocommerce Single Product page Sidebar
	$wp_customize->add_setting( 'video_podcasting_woocommerce_single_product_page_sidebar',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'video_podcasting_switch_sanitization'
    ) );
  $wp_customize->add_control( new Video_Podcasting_Toggle_Switch_Custom_Control( $wp_customize, 'video_podcasting_woocommerce_single_product_page_sidebar',array(
		'label' => esc_html__( 'Single Product Sidebar','video-podcasting' ),
		'section' => 'video_podcasting_woocommerce_section'
  )));

  $wp_customize->add_setting('video_podcasting_single_product_layout',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'video_podcasting_sanitize_choices'
	));
	$wp_customize->add_control('video_podcasting_single_product_layout',array(
        'type' => 'select',
        'label' => __('Single Product Sidebar Layout','video-podcasting'),
        'section' => 'video_podcasting_woocommerce_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','video-podcasting'),
            'Right Sidebar' => __('Right Sidebar','video-podcasting'),
        ),
	) );

	//Products padding
	$wp_customize->add_setting('video_podcasting_products_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('video_podcasting_products_padding_top_bottom',array(
		'label'	=> __('Products Padding Top Bottom','video-podcasting'),
		'description'	=> __('Enter a value in pixels. Example:20px','video-podcasting'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'video-podcasting' ),
        ),
		'section'=> 'video_podcasting_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('video_podcasting_products_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('video_podcasting_products_padding_left_right',array(
		'label'	=> __('Products Padding Left Right','video-podcasting'),
		'description'	=> __('Enter a value in pixels. Example:20px','video-podcasting'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'video-podcasting' ),
        ),
		'section'=> 'video_podcasting_woocommerce_section',
		'type'=> 'text'
	));

	//Products box shadow
	$wp_customize->add_setting( 'video_podcasting_products_box_shadow', array(
		'default'              => '',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'video_podcasting_sanitize_number_range'
	) );
	$wp_customize->add_control( 'video_podcasting_products_box_shadow', array(
		'label'       => esc_html__( 'Products Box Shadow','video-podcasting' ),
		'section'     => 'video_podcasting_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Products border radius
    $wp_customize->add_setting( 'video_podcasting_products_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'video_podcasting_sanitize_number_range'
	) );
	$wp_customize->add_control( 'video_podcasting_products_border_radius', array(
		'label'       => esc_html__( 'Products Border Radius','video-podcasting' ),
		'section'     => 'video_podcasting_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('video_podcasting_products_btn_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('video_podcasting_products_btn_padding_top_bottom',array(
		'label'	=> __('Products Button Padding Top Bottom','video-podcasting'),
		'description'	=> __('Enter a value in pixels. Example:20px','video-podcasting'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'video-podcasting' ),
        ),
		'section'=> 'video_podcasting_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('video_podcasting_products_btn_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('video_podcasting_products_btn_padding_left_right',array(
		'label'	=> __('Products Button Padding Left Right','video-podcasting'),
		'description'	=> __('Enter a value in pixels. Example:20px','video-podcasting'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'video-podcasting' ),
        ),
		'section'=> 'video_podcasting_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'video_podcasting_products_button_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'video_podcasting_sanitize_number_range'
	) );
	$wp_customize->add_control( 'video_podcasting_products_button_border_radius', array(
		'label'       => esc_html__( 'Products Button Border Radius','video-podcasting' ),
		'section'     => 'video_podcasting_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Products Sale Badge
	$wp_customize->add_setting('video_podcasting_woocommerce_sale_position',array(
        'default' => 'right',
        'sanitize_callback' => 'video_podcasting_sanitize_choices'
	));
	$wp_customize->add_control('video_podcasting_woocommerce_sale_position',array(
        'type' => 'select',
        'label' => __('Sale Badge Position','video-podcasting'),
        'section' => 'video_podcasting_woocommerce_section',
        'choices' => array(
            'left' => __('Left','video-podcasting'),
            'right' => __('Right','video-podcasting'),
        ),
	) );

	$wp_customize->add_setting('video_podcasting_woocommerce_sale_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('video_podcasting_woocommerce_sale_font_size',array(
		'label'	=> __('Sale Font Size','video-podcasting'),
		'description'	=> __('Enter a value in pixels. Example:20px','video-podcasting'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'video-podcasting' ),
        ),
		'section'=> 'video_podcasting_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'video_podcasting_woocommerce_sale_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'video_podcasting_sanitize_number_range'
	) );
	$wp_customize->add_control( 'video_podcasting_woocommerce_sale_border_radius', array(
		'label'       => esc_html__( 'Sale Border Radius','video-podcasting' ),
		'section'     => 'video_podcasting_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	// Related Product
  $wp_customize->add_setting( 'video_podcasting_related_product_show_hide',array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'video_podcasting_switch_sanitization'
  ) );
  $wp_customize->add_control( new video_podcasting_Toggle_Switch_Custom_Control( $wp_customize, 'video_podcasting_related_product_show_hide',array(
      'label' => esc_html__( 'Related product','video-podcasting' ),
      'section' => 'video_podcasting_woocommerce_section'
  )));


}

add_action( 'customize_register', 'video_podcasting_customize_register' );

load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Video_Podcasting_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	*/
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Video_Podcasting_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section( new Video_Podcasting_Customize_Section_Pro( $manager,'video_podcasting_go_pro', array(
			'priority'   => 1,
			'title'    => esc_html__( 'Video Podcasting Pro', 'video-podcasting' ),
			'pro_text' => esc_html__( 'UPGRADE PRO', 'video-podcasting' ),
			'pro_url'  => esc_url('https://www.vwthemes.com/themes/video-podcast-wordpress-theme/'),
		) )	);

		// Register sections.
		$manager->add_section(new Video_Podcasting_Customize_Section_Pro($manager,'video_podcasting_get_started_link',array(
			'priority'   => 1,
			'title'    => esc_html__( 'DOCUMENTATION', 'video-podcasting' ),
			'pro_text' => esc_html__( 'DOCS', 'video-podcasting' ),
			'pro_url'  => esc_url('https://www.vwthemesdemo.com/docs/free-video-podcasting/'),
		)));
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'video-podcasting-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'video-podcasting-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Video_Podcasting_Customize::get_instance();