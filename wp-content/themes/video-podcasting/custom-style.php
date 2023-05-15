<?php

	$video_podcasting_custom_css= "";

	/*----------------------First highlight color-------------------*/

	$video_podcasting_first_color = get_theme_mod('video_podcasting_first_color');

	if($video_podcasting_first_color != false){
		$video_podcasting_custom_css .='.donate-btn a, #slider .ai-wrap .ai-audio-control, .view-all-btn a,.more-btn a,#comments input[type="submit"],#comments a.comment-reply-link,input[type="submit"],.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,nav.woocommerce-MyAccount-navigation ul li,.pro-button a, .woocommerce a.added_to_cart.wc-forward, #about-section .getin-btn a, #footer .wp-block-search .wp-block-search__button, #sidebar .wp-block-search .wp-block-search__button, .scrollup i, #sidebar h3, .woocommerce span.onsale, .toggle-nav button,.post-categories li a,.bradcrumbs a,.bradcrumbs a:hover, .bradcrumbs span {';
			$video_podcasting_custom_css .='background-color: '.esc_attr($video_podcasting_first_color).';';
		$video_podcasting_custom_css .='}';
	}

	if($video_podcasting_first_color != false){
		$video_podcasting_custom_css .='a, .main-navigation ul li a:hover, #slider .ai-wrap .ai-track-progress:after, .copyright a:hover, .post-main-box:hover h2 a, #footer .textwidget a,#footer li a:hover,.post-main-box:hover h3 a,#sidebar ul li a:hover,.post-navigation a:hover .post-title, .post-navigation a:focus .post-title,.post-navigation a:hover,.post-navigation a:focus{';
			$video_podcasting_custom_css .='color: '.esc_attr($video_podcasting_first_color).';';
		$video_podcasting_custom_css .='}';
	}

	if($video_podcasting_first_color != false){
		$video_podcasting_custom_css .='.search-box a{';
			$video_podcasting_custom_css .='border-color: '.esc_attr($video_podcasting_first_color).';';
		$video_podcasting_custom_css .='}';
	}

	/*----------------------First highlight color-------------------*/

	$video_podcasting_second_color = get_theme_mod('video_podcasting_second_color');

	if($video_podcasting_second_color != false){
		$video_podcasting_custom_css .='.more-btn a:hover,input[type="submit"]:hover,#comments input[type="submit"]:hover,#comments a.comment-reply-link:hover,.pagination .current,.pagination a:hover,#footer .tagcloud a:hover,#sidebar .tagcloud a:hover,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.widget_product_search button:hover,nav.woocommerce-MyAccount-navigation ul li:hover, .main-navigation ul.sub-menu>li>a:before, #slider .ai-wrap .ai-track-progress, .view-all-btn a:hover, .more-btn a:hover, #comments input[type="submit"]:hover,#comments a.comment-reply-link:hover,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.pro-button a:hover, #preloader, #footer-2, .pagination span, .pagination a, .widget_product_search button{';
			$video_podcasting_custom_css .='background-color: '.esc_attr($video_podcasting_second_color).';';
		$video_podcasting_custom_css .='}';
	}

	if($video_podcasting_second_color != false){
		$video_podcasting_custom_css .='p.site-title a, .logo h1 a, p.site-description, .main-navigation a, #slider .carousel-control-next i, #slider .carousel-control-prev i, #slider .inner_carousel h1 a, .post-main-box h2 a,.post-main-box:hover .post-info span a, .single-post .post-info:hover a, .middle-bar h6, #sidebar ul li, #sidebar ul li a, #sidebar .tagcloud a{';
			$video_podcasting_custom_css .='color: '.esc_attr($video_podcasting_second_color).';';
		$video_podcasting_custom_css .='}';
	}

	if($video_podcasting_second_color != false){
		$video_podcasting_custom_css .='#slider .carousel-control-next i, #slider .carousel-control-prev i, #sidebar .tagcloud a{';
			$video_podcasting_custom_css .='border-color: '.esc_attr($video_podcasting_second_color).';';
		$video_podcasting_custom_css .='}';
	}

	if($video_podcasting_second_color != false){
		$video_podcasting_custom_css .='.main-header{';
			$video_podcasting_custom_css .='border-bottom-color: '.esc_attr($video_podcasting_second_color).';';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_custom_css .='@media screen and (max-width:1000px) {';
		if($video_podcasting_second_color != false){
			$video_podcasting_custom_css .='.main-navigation a:hover{
			color:'.esc_attr($video_podcasting_second_color).'!important;
			}';
		}
	$video_podcasting_custom_css .='}';

	$video_podcasting_custom_css .='@media screen and (max-width:720px) {';
		if($video_podcasting_second_color != false){
			$video_podcasting_custom_css .='.page-template-custom-home-page .main-header{
			border-bottom-color:'.esc_attr($video_podcasting_second_color).'!important;
			}';
		}
	$video_podcasting_custom_css .='}';

	$video_podcasting_custom_css .='@media screen and (min-width: 721px) and (max-width: 768px) {';
		if($video_podcasting_second_color != false){
			$video_podcasting_custom_css .='.page-template-custom-home-page .main-header{
			border-bottom-color:'.esc_attr($video_podcasting_second_color).'!important;
			}';
		}
	$video_podcasting_custom_css .='}';

	/*---------------------------Width Layout -------------------*/

	$video_podcasting_theme_lay = get_theme_mod( 'video_podcasting_width_option','Full Width');
    if($video_podcasting_theme_lay == 'Boxed'){
		$video_podcasting_custom_css .='body{';
			$video_podcasting_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$video_podcasting_custom_css .='}';
	}else if($video_podcasting_theme_lay == 'Wide Width'){
		$video_podcasting_custom_css .='body{';
			$video_podcasting_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$video_podcasting_custom_css .='}';
	}else if($video_podcasting_theme_lay == 'Full Width'){
		$video_podcasting_custom_css .='body{';
			$video_podcasting_custom_css .='max-width: 100%;';
		$video_podcasting_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$video_podcasting_theme_lay = get_theme_mod( 'video_podcasting_slider_opacity_color','0.7');
	if($video_podcasting_theme_lay == '0'){
		$video_podcasting_custom_css .='#slider.slider-img img{';
			$video_podcasting_custom_css .='opacity:0';
		$video_podcasting_custom_css .='}';
		}else if($video_podcasting_theme_lay == '0.1'){
		$video_podcasting_custom_css .='#slider.slider-img img{';
			$video_podcasting_custom_css .='opacity:0.1';
		$video_podcasting_custom_css .='}';
		}else if($video_podcasting_theme_lay == '0.2'){
		$video_podcasting_custom_css .='#slider.slider-img img{';
			$video_podcasting_custom_css .='opacity:0.2';
		$video_podcasting_custom_css .='}';
		}else if($video_podcasting_theme_lay == '0.3'){
		$video_podcasting_custom_css .='#slider.slider-img img{';
			$video_podcasting_custom_css .='opacity:0.3';
		$video_podcasting_custom_css .='}';
		}else if($video_podcasting_theme_lay == '0.4'){
		$video_podcasting_custom_css .='#slider.slider-img img{';
			$video_podcasting_custom_css .='opacity:0.4';
		$video_podcasting_custom_css .='}';
		}else if($video_podcasting_theme_lay == '0.5'){
		$video_podcasting_custom_css .='#slider.slider-img img{';
			$video_podcasting_custom_css .='opacity:0.5';
		$video_podcasting_custom_css .='}';
		}else if($video_podcasting_theme_lay == '0.6'){
		$video_podcasting_custom_css .='#slider.slider-img img{';
			$video_podcasting_custom_css .='opacity:0.6';
		$video_podcasting_custom_css .='}';
		}else if($video_podcasting_theme_lay == '0.7'){
		$video_podcasting_custom_css .='#slider.slider-img img{';
			$video_podcasting_custom_css .='opacity:0.7';
		$video_podcasting_custom_css .='}';
		}else if($video_podcasting_theme_lay == '0.8'){
		$video_podcasting_custom_css .='#slider.slider-img img{';
			$video_podcasting_custom_css .='opacity:0.8';
		$video_podcasting_custom_css .='}';
		}else if($video_podcasting_theme_lay == '0.9'){
		$video_podcasting_custom_css .='#slider .slider-img img{';
			$video_podcasting_custom_css .='opacity:0.9';
		$video_podcasting_custom_css .='}';
	}

	/*---------------------- Slider Image Overlay ------------------------*/

	$video_podcasting_slider_image_overlay = get_theme_mod('video_podcasting_slider_image_overlay', true);
	if($video_podcasting_slider_image_overlay == false){
		$video_podcasting_custom_css .='#slider img{';
			$video_podcasting_custom_css .='opacity:1;';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_slider_image_overlay_color = get_theme_mod('video_podcasting_slider_image_overlay_color', true);
	if($video_podcasting_slider_image_overlay_color != false){
		$video_podcasting_custom_css .='#slider{';
			$video_podcasting_custom_css .='background-color: '.esc_attr($video_podcasting_slider_image_overlay_color).';';
		$video_podcasting_custom_css .='}';
	}
	
	/*-------------------- Slider CSS ------------------*/

	if(get_theme_mod('video_podcasting_slider_hide_show',false) == false){
	$video_podcasting_custom_css .='.page-template-custom-home-page .main-header{';
	$video_podcasting_custom_css .='position: static; border-bottom: 1px solid #222222;';
	$video_podcasting_custom_css .='}';
	}

	/*------------------ Slider Height ------------*/

	$video_podcasting_slider_height = get_theme_mod('video_podcasting_slider_height');
	if($video_podcasting_slider_height != false){
		$video_podcasting_custom_css .='#slider .slider-img img{';
			$video_podcasting_custom_css .='height: '.esc_attr($video_podcasting_slider_height).';';
		$video_podcasting_custom_css .='}';
	}

	/*----------------Responsive Media -----------------------*/

	$video_podcasting_resp_slider = get_theme_mod( 'video_podcasting_resp_slider_hide_show',false);
	if($video_podcasting_resp_slider == true && get_theme_mod( 'video_podcasting_slider_hide_show', false) == false){
    	$video_podcasting_custom_css .='#slider{';
			$video_podcasting_custom_css .='display:none;';
		$video_podcasting_custom_css .='} ';
	}
    if($video_podcasting_resp_slider == true){
    	$video_podcasting_custom_css .='@media screen and (max-width:575px) {';
		$video_podcasting_custom_css .='#slider{';
			$video_podcasting_custom_css .='display:block;';
		$video_podcasting_custom_css .='} }';
	}else if($video_podcasting_resp_slider == false){
		$video_podcasting_custom_css .='@media screen and (max-width:575px) {';
		$video_podcasting_custom_css .='#slider{';
			$video_podcasting_custom_css .='display:none;';
		$video_podcasting_custom_css .='} }';
		$video_podcasting_custom_css .='@media screen and (max-width:575px){';
		$video_podcasting_custom_css .='.page-template-custom-home-page.admin-bar .homepageheader{';
			$video_podcasting_custom_css .='margin-top: 45px;';
		$video_podcasting_custom_css .='} }';
	}

	$video_podcasting_resp_sidebar = get_theme_mod( 'video_podcasting_sidebar_hide_show',true);
    if($video_podcasting_resp_sidebar == true){
    	$video_podcasting_custom_css .='@media screen and (max-width:575px) {';
		$video_podcasting_custom_css .='#sidebar{';
			$video_podcasting_custom_css .='display:block;';
		$video_podcasting_custom_css .='} }';
	}else if($video_podcasting_resp_sidebar == false){
		$video_podcasting_custom_css .='@media screen and (max-width:575px) {';
		$video_podcasting_custom_css .='#sidebar{';
			$video_podcasting_custom_css .='display:none;';
		$video_podcasting_custom_css .='} }';
	}

	$video_podcasting_resp_scroll_top = get_theme_mod( 'video_podcasting_resp_scroll_top_hide_show',true);
	if($video_podcasting_resp_scroll_top == true && get_theme_mod( 'video_podcasting_hide_show_scroll',true) == false){
    	$video_podcasting_custom_css .='.scrollup i{';
			$video_podcasting_custom_css .='visibility:hidden !important;';
		$video_podcasting_custom_css .='} ';
	}
    if($video_podcasting_resp_scroll_top == true){
    	$video_podcasting_custom_css .='@media screen and (max-width:575px) {';
		$video_podcasting_custom_css .='.scrollup i{';
			$video_podcasting_custom_css .='visibility:visible !important;';
		$video_podcasting_custom_css .='} }';
	}else if($video_podcasting_resp_scroll_top == false){
		$video_podcasting_custom_css .='@media screen and (max-width:575px){';
		$video_podcasting_custom_css .='.scrollup i{';
			$video_podcasting_custom_css .='visibility:hidden !important;';
		$video_podcasting_custom_css .='} }';
	}

	$video_podcasting_resp_menu_toggle_btn_bg_color = get_theme_mod('video_podcasting_resp_menu_toggle_btn_bg_color');
	if($video_podcasting_resp_menu_toggle_btn_bg_color != false){
		$video_podcasting_custom_css .='.toggle-nav button{';
			$video_podcasting_custom_css .='background-color: '.esc_attr($video_podcasting_resp_menu_toggle_btn_bg_color).';';
		$video_podcasting_custom_css .='}';
	}
	
	/*---------------- Button Settings ------------------*/

	$video_podcasting_button_border_radius = get_theme_mod('video_podcasting_button_border_radius');
	if($video_podcasting_button_border_radius != false){
		$video_podcasting_custom_css .='.post-main-box .more-btn a{';
			$video_podcasting_custom_css .='border-radius: '.esc_attr($video_podcasting_button_border_radius).'px;';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_button_font_size = get_theme_mod('video_podcasting_button_font_size',14);
	$video_podcasting_custom_css .='.post-main-box .more-btn a{';
		$video_podcasting_custom_css .='font-size: '.esc_attr($video_podcasting_button_font_size).';';
	$video_podcasting_custom_css .='}';

	$video_podcasting_theme_lay = get_theme_mod( 'video_podcasting_button_text_transform','Uppercase');
	if($video_podcasting_theme_lay == 'Capitalize'){
		$video_podcasting_custom_css .='.post-main-box .more-btn a{';
			$video_podcasting_custom_css .='text-transform:Capitalize;';
		$video_podcasting_custom_css .='}';
	}
	if($video_podcasting_theme_lay == 'Lowercase'){
		$video_podcasting_custom_css .='.post-main-box .more-btn a{';
			$video_podcasting_custom_css .='text-transform:Lowercase;';
		$video_podcasting_custom_css .='}';
	}
	if($video_podcasting_theme_lay == 'Uppercase'){ 
		$video_podcasting_custom_css .='.post-main-box .more-btn a{';
			$video_podcasting_custom_css .='text-transform:Uppercase;';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_button_padding_top_bottom = get_theme_mod('video_podcasting_button_padding_top_bottom');
	$video_podcasting_button_padding_left_right = get_theme_mod('video_podcasting_button_padding_left_right');
	if($video_podcasting_button_padding_top_bottom != false || $video_podcasting_button_padding_left_right != false){
		$video_podcasting_custom_css .='.post-main-box .more-btn a{';
			$video_podcasting_custom_css .='padding-top: '.esc_attr($video_podcasting_button_padding_top_bottom).'!important; padding-bottom: '.esc_attr($video_podcasting_button_padding_top_bottom).'!important;padding-left: '.esc_attr($video_podcasting_button_padding_left_right).'!important;padding-right: '.esc_attr($video_podcasting_button_padding_left_right).'!important;';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_button_letter_spacing = get_theme_mod('video_podcasting_button_letter_spacing',14);
	$video_podcasting_custom_css .='.post-main-box .more-btn a{';
		$video_podcasting_custom_css .='letter-spacing: '.esc_attr($video_podcasting_button_letter_spacing).';';
	$video_podcasting_custom_css .='}';
	/*------------- Single Blog Page ------------------*/

	$video_podcasting_single_blog_comment_title = get_theme_mod('video_podcasting_single_blog_comment_title', 'Leave a Reply');
	if($video_podcasting_single_blog_comment_title == ''){
		$video_podcasting_custom_css .='#comments h2#reply-title {';
			$video_podcasting_custom_css .='display: none;';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_single_blog_comment_button_text = get_theme_mod('video_podcasting_single_blog_comment_button_text', 'Post Comment');
	if($video_podcasting_single_blog_comment_button_text == ''){
		$video_podcasting_custom_css .='#comments p.form-submit {';
			$video_podcasting_custom_css .='display: none;';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_comment_width = get_theme_mod('video_podcasting_single_blog_comment_width');
	if($video_podcasting_comment_width != false){
		$video_podcasting_custom_css .='#comments textarea{';
			$video_podcasting_custom_css .='width: '.esc_attr($video_podcasting_comment_width).';';
		$video_podcasting_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$video_podcasting_theme_lay = get_theme_mod( 'video_podcasting_blog_layout_option','Default');
    if($video_podcasting_theme_lay == 'Default'){
		$video_podcasting_custom_css .='.post-main-box{';
			$video_podcasting_custom_css .='';
		$video_podcasting_custom_css .='}';
	}else if($video_podcasting_theme_lay == 'Center'){
		$video_podcasting_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn{';
			$video_podcasting_custom_css .='text-align:center;';
		$video_podcasting_custom_css .='}';
		$video_podcasting_custom_css .='.post-info{';
			$video_podcasting_custom_css .='margin-top:10px;';
		$video_podcasting_custom_css .='}';
		$video_podcasting_custom_css .='.post-info hr{';
			$video_podcasting_custom_css .='margin:15px auto;';
		$video_podcasting_custom_css .='}';
	}else if($video_podcasting_theme_lay == 'Left'){
		$video_podcasting_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn, #our-services p{';
			$video_podcasting_custom_css .='text-align:Left;';
		$video_podcasting_custom_css .='}';
		$video_podcasting_custom_css .='.post-info hr{';
			$video_podcasting_custom_css .='margin-bottom:10px;';
		$video_podcasting_custom_css .='}';
		$video_podcasting_custom_css .='.post-main-box h2{';
			$video_podcasting_custom_css .='margin-top:10px;';
		$video_podcasting_custom_css .='}';
	}

	/*--------------------- Blog Page Posts -------------------*/

	$video_podcasting_blog_page_posts_settings = get_theme_mod( 'video_podcasting_blog_page_posts_settings','Into Blocks');
    if($video_podcasting_blog_page_posts_settings == 'Without Blocks'){
		$video_podcasting_custom_css .='.post-main-box{';
			$video_podcasting_custom_css .='box-shadow: none; border: none; margin:30px 0;';
		$video_podcasting_custom_css .='}';
	}

	// featured image dimention
	$video_podcasting_blog_post_featured_image_dimension = get_theme_mod('video_podcasting_blog_post_featured_image_dimension', 'default');
	$video_podcasting_blog_post_featured_image_custom_width = get_theme_mod('video_podcasting_blog_post_featured_image_custom_width',250);
	$video_podcasting_blog_post_featured_image_custom_height = get_theme_mod('video_podcasting_blog_post_featured_image_custom_height',250);
	if($video_podcasting_blog_post_featured_image_dimension == 'custom'){
		$video_podcasting_custom_css .='.box-image img{';
			$video_podcasting_custom_css .='width: '.esc_attr($video_podcasting_blog_post_featured_image_custom_width).'; height: '.esc_attr($video_podcasting_blog_post_featured_image_custom_height).';';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_featured_image_border_radius = get_theme_mod('video_podcasting_featured_image_border_radius', 0);
	if($video_podcasting_featured_image_border_radius != false){
		$video_podcasting_custom_css .='.box-image img, .feature-box img{';
			$video_podcasting_custom_css .='border-radius: '.esc_attr($video_podcasting_featured_image_border_radius).'px;';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_featured_image_box_shadow = get_theme_mod('video_podcasting_featured_image_box_shadow',0);
	if($video_podcasting_featured_image_box_shadow != false){
		$video_podcasting_custom_css .='.box-image img, .feature-box img, #content-vw img{';
			$video_podcasting_custom_css .='box-shadow: '.esc_attr($video_podcasting_featured_image_box_shadow).'px '.esc_attr($video_podcasting_featured_image_box_shadow).'px '.esc_attr($video_podcasting_featured_image_box_shadow).'px #cccccc;';
		$video_podcasting_custom_css .='}';
	}


	/*-------------- Copyright Alignment ----------------*/

	$video_podcasting_footer_widgets_heading = get_theme_mod( 'video_podcasting_footer_widgets_heading','Left');
    if($video_podcasting_footer_widgets_heading == 'Left'){
		$video_podcasting_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
		$video_podcasting_custom_css .='text-align: left;';
		$video_podcasting_custom_css .='}';
	}else if($video_podcasting_footer_widgets_heading == 'Center'){
		$video_podcasting_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$video_podcasting_custom_css .='text-align: center;';
		$video_podcasting_custom_css .='}';
	}else if($video_podcasting_footer_widgets_heading == 'Right'){
		$video_podcasting_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$video_podcasting_custom_css .='text-align: right;';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_footer_widgets_content = get_theme_mod( 'video_podcasting_footer_widgets_content','Left');
    if($video_podcasting_footer_widgets_content == 'Left'){
		$video_podcasting_custom_css .='#footer .widget{';
		$video_podcasting_custom_css .='text-align: left;';
		$video_podcasting_custom_css .='}';
	}else if($video_podcasting_footer_widgets_content == 'Center'){
		$video_podcasting_custom_css .='#footer .widget{';
			$video_podcasting_custom_css .='text-align: center;';
		$video_podcasting_custom_css .='}';
	}else if($video_podcasting_footer_widgets_content == 'Right'){
		$video_podcasting_custom_css .='#footer .widget{';
			$video_podcasting_custom_css .='text-align: right;';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_copyright_alingment = get_theme_mod('video_podcasting_copyright_alingment');
	if($video_podcasting_copyright_alingment != false){
		$video_podcasting_custom_css .='.copyright p{';
			$video_podcasting_custom_css .='text-align: '.esc_attr($video_podcasting_copyright_alingment).';';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_footer_padding = get_theme_mod('video_podcasting_footer_padding');
	if($video_podcasting_footer_padding != false){
		$video_podcasting_custom_css .='#footer{';
			$video_podcasting_custom_css .='padding: '.esc_attr($video_podcasting_footer_padding).' 0;';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_footer_icon = get_theme_mod('video_podcasting_footer_icon');
	if($video_podcasting_footer_icon == false){
		$video_podcasting_custom_css .='.copyright p{';
			$video_podcasting_custom_css .='width:100%; text-align:center; float:none;';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_footer_background_image = get_theme_mod('video_podcasting_footer_background_image');
	if($video_podcasting_footer_background_image != false){
		$video_podcasting_custom_css .='#footer{';
			$video_podcasting_custom_css .='background: url('.esc_attr($video_podcasting_footer_background_image).');';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_footer_background_color = get_theme_mod('video_podcasting_footer_background_color');
	if($video_podcasting_footer_background_color != false){
		$video_podcasting_custom_css .='#footer{';
			$video_podcasting_custom_css .='background-color: '.esc_attr($video_podcasting_footer_background_color).';';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_theme_lay = get_theme_mod( 'video_podcasting_img_footer','scroll');
	if($video_podcasting_theme_lay == 'fixed'){
		$video_podcasting_custom_css .='#footer{';
			$video_podcasting_custom_css .='background-attachment: fixed !important; background-position: center !important;';
		$video_podcasting_custom_css .='}';
	}elseif ($video_podcasting_theme_lay == 'scroll'){
		$video_podcasting_custom_css .='#footer{';
			$video_podcasting_custom_css .='background-attachment: scroll !important; background-position: center !important;';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_copyright_background_color = get_theme_mod('video_podcasting_copyright_background_color');
	if($video_podcasting_copyright_background_color != false){
		$video_podcasting_custom_css .='#footer-2{';
			$video_podcasting_custom_css .='background-color: '.esc_attr($video_podcasting_copyright_background_color).';';
		$video_podcasting_custom_css .='}';
	}
	
	/*------------------ Logo  -------------------*/

	$video_podcasting_logo_padding = get_theme_mod('video_podcasting_logo_padding');
	if($video_podcasting_logo_padding != false){
		$video_podcasting_custom_css .='.main-header .logo{';
			$video_podcasting_custom_css .='padding: '.esc_attr($video_podcasting_logo_padding).';';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_logo_margin = get_theme_mod('video_podcasting_logo_margin');
	if($video_podcasting_logo_margin != false){
		$video_podcasting_custom_css .='.main-header .logo{';
			$video_podcasting_custom_css .='margin: '.esc_attr($video_podcasting_logo_margin).';';
		$video_podcasting_custom_css .='}';
	}

	// Site title Font Size
	$video_podcasting_site_title_font_size = get_theme_mod('video_podcasting_site_title_font_size');
	if($video_podcasting_site_title_font_size != false){
		$video_podcasting_custom_css .='.logo h1, .logo p.site-title{';
			$video_podcasting_custom_css .='font-size: '.esc_attr($video_podcasting_site_title_font_size).';';
		$video_podcasting_custom_css .='}';
	}

	// Site tagline Font Size
	$video_podcasting_site_tagline_font_size = get_theme_mod('video_podcasting_site_tagline_font_size');
	if($video_podcasting_site_tagline_font_size != false){
		$video_podcasting_custom_css .='.logo p.site-description{';
			$video_podcasting_custom_css .='font-size: '.esc_attr($video_podcasting_site_tagline_font_size).';';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_header_menus_color = get_theme_mod('video_podcasting_header_menus_color');
	if($video_podcasting_header_menus_color != false){
		$video_podcasting_custom_css .='.main-navigation a{';
			$video_podcasting_custom_css .='color: '.esc_attr($video_podcasting_header_menus_color).';';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_header_menus_hover_color = get_theme_mod('video_podcasting_header_menus_hover_color');
	if($video_podcasting_header_menus_hover_color != false){
		$video_podcasting_custom_css .='.main-navigation a:hover{';
			$video_podcasting_custom_css .='color: '.esc_attr($video_podcasting_header_menus_hover_color).'!important;';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_header_submenus_color = get_theme_mod('video_podcasting_header_submenus_color');
	if($video_podcasting_header_submenus_color != false){
		$video_podcasting_custom_css .='.main-navigation ul ul a{';
			$video_podcasting_custom_css .='color: '.esc_attr($video_podcasting_header_submenus_color).';';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_header_submenus_hover_color = get_theme_mod('video_podcasting_header_submenus_hover_color');
	if($video_podcasting_header_submenus_hover_color != false){
		$video_podcasting_custom_css .='.main-navigation ul.sub-menu a:hover{';
			$video_podcasting_custom_css .='color: '.esc_attr($video_podcasting_header_submenus_hover_color).'!important;';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_menus_item = get_theme_mod( 'video_podcasting_menus_item_style','None');
    if($video_podcasting_menus_item == 'None'){
		$video_podcasting_custom_css .='.main-navigation a{';
			$video_podcasting_custom_css .='';
		$video_podcasting_custom_css .='}';
	}else if($video_podcasting_menus_item == 'Zoom In'){
		$video_podcasting_custom_css .='.main-navigation a:hover{';
			$video_podcasting_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important; color: #ffbf00;';
		$video_podcasting_custom_css .='}';
	}


	/*------------------ Preloader Background Color  -------------------*/

	$video_podcasting_preloader_bg_color = get_theme_mod('video_podcasting_preloader_bg_color');
	if($video_podcasting_preloader_bg_color != false){
		$video_podcasting_custom_css .='#preloader{';
			$video_podcasting_custom_css .='background-color: '.esc_attr($video_podcasting_preloader_bg_color).';';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_preloader_border_color = get_theme_mod('video_podcasting_preloader_border_color');
	if($video_podcasting_preloader_border_color != false){
		$video_podcasting_custom_css .='.loader-line{';
			$video_podcasting_custom_css .='border-color: '.esc_attr($video_podcasting_preloader_border_color).'!important;';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_preloader_bg_img = get_theme_mod('video_podcasting_preloader_bg_img');
	if($video_podcasting_preloader_bg_img != false){
		$video_podcasting_custom_css .='#preloader{';
			$video_podcasting_custom_css .='background: url('.esc_attr($video_podcasting_preloader_bg_img).');-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;';
		$video_podcasting_custom_css .='}';
	}

	// Header Background Color

	$video_podcasting_header_background_color = get_theme_mod('video_podcasting_header_background_color');
	if($video_podcasting_header_background_color != false){
		$video_podcasting_custom_css .='.home-page-header{';
			$video_podcasting_custom_css .='background-color: '.esc_attr($video_podcasting_header_background_color).';';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_single_blog_post_navigation_show_hide = get_theme_mod('video_podcasting_single_blog_post_navigation_show_hide',true);
	if($video_podcasting_single_blog_post_navigation_show_hide != true){
		$video_podcasting_custom_css .='.post-navigation{';
			$video_podcasting_custom_css .='display: none;';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_navigation_menu_font_size = get_theme_mod('video_podcasting_navigation_menu_font_size');
	if($video_podcasting_navigation_menu_font_size != false){
		$video_podcasting_custom_css .='.main-navigation a{';
			$video_podcasting_custom_css .='font-size: '.esc_attr($video_podcasting_navigation_menu_font_size).';';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_navigation_menu_font_weight = get_theme_mod('video_podcasting_navigation_menu_font_weight','600');
	if($video_podcasting_navigation_menu_font_weight != false){
		$video_podcasting_custom_css .='.main-navigation a{';
			$video_podcasting_custom_css .='font-weight: '.esc_attr($video_podcasting_navigation_menu_font_weight).';';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_theme_lay = get_theme_mod( 'video_podcasting_menu_text_transform','Uppercase');
	if($video_podcasting_theme_lay == 'Capitalize'){
		$video_podcasting_custom_css .='.main-navigation a{';
			$video_podcasting_custom_css .='text-transform:Capitalize;';
		$video_podcasting_custom_css .='}';
	}
	if($video_podcasting_theme_lay == 'Lowercase'){
		$video_podcasting_custom_css .='.main-navigation a{';
			$video_podcasting_custom_css .='text-transform:Lowercase;';
		$video_podcasting_custom_css .='}';
	}
	if($video_podcasting_theme_lay == 'Uppercase'){
		$video_podcasting_custom_css .='.main-navigation a{';
			$video_podcasting_custom_css .='text-transform:Uppercase;';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_related_product_show_hide = get_theme_mod('video_podcasting_related_product_show_hide',true);
	if($video_podcasting_related_product_show_hide != true){
		$video_podcasting_custom_css .='.related.products{';
			$video_podcasting_custom_css .='display: none;';
		$video_podcasting_custom_css .='}';
	}

	/*----------------Sroll to top Settings ------------------*/

	$video_podcasting_scroll_to_top_font_size = get_theme_mod('video_podcasting_scroll_to_top_font_size');
	if($video_podcasting_scroll_to_top_font_size != false){
		$video_podcasting_custom_css .='.scrollup i{';
			$video_podcasting_custom_css .='font-size: '.esc_attr($video_podcasting_scroll_to_top_font_size).';';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_scroll_to_top_padding = get_theme_mod('video_podcasting_scroll_to_top_padding');
	$video_podcasting_scroll_to_top_padding = get_theme_mod('video_podcasting_scroll_to_top_padding');
	if($video_podcasting_scroll_to_top_padding != false){
		$video_podcasting_custom_css .='.scrollup i{';
			$video_podcasting_custom_css .='padding-top: '.esc_attr($video_podcasting_scroll_to_top_padding).';padding-bottom: '.esc_attr($video_podcasting_scroll_to_top_padding).';';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_scroll_to_top_width = get_theme_mod('video_podcasting_scroll_to_top_width');
	if($video_podcasting_scroll_to_top_width != false){
		$video_podcasting_custom_css .='.scrollup i{';
			$video_podcasting_custom_css .='width: '.esc_attr($video_podcasting_scroll_to_top_width).';';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_scroll_to_top_height = get_theme_mod('video_podcasting_scroll_to_top_height');
	if($video_podcasting_scroll_to_top_height != false){
		$video_podcasting_custom_css .='.scrollup i{';
			$video_podcasting_custom_css .='height: '.esc_attr($video_podcasting_scroll_to_top_height).';';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_scroll_to_top_border_radius = get_theme_mod('video_podcasting_scroll_to_top_border_radius');
	if($video_podcasting_scroll_to_top_border_radius != false){
		$video_podcasting_custom_css .='.scrollup i{';
			$video_podcasting_custom_css .='border-radius: '.esc_attr($video_podcasting_scroll_to_top_border_radius).'px;';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_products_padding_top_bottom = get_theme_mod('video_podcasting_products_padding_top_bottom');
	if($video_podcasting_products_padding_top_bottom != false){
		$video_podcasting_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$video_podcasting_custom_css .='padding-top: '.esc_attr($video_podcasting_products_padding_top_bottom).'!important; padding-bottom: '.esc_attr($video_podcasting_products_padding_top_bottom).'!important;';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_products_padding_left_right = get_theme_mod('video_podcasting_products_padding_left_right');
	if($video_podcasting_products_padding_left_right != false){
		$video_podcasting_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$video_podcasting_custom_css .='padding-left: '.esc_attr($video_podcasting_products_padding_left_right).'!important; padding-right: '.esc_attr($video_podcasting_products_padding_left_right).'!important;';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_products_box_shadow = get_theme_mod('video_podcasting_products_box_shadow');
	if($video_podcasting_products_box_shadow != false){
		$video_podcasting_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
				$video_podcasting_custom_css .='box-shadow: '.esc_attr($video_podcasting_products_box_shadow).'px '.esc_attr($video_podcasting_products_box_shadow).'px '.esc_attr($video_podcasting_products_box_shadow).'px #ddd;';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_products_border_radius = get_theme_mod('video_podcasting_products_border_radius', 0);
	if($video_podcasting_products_border_radius != false){
		$video_podcasting_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$video_podcasting_custom_css .='border-radius: '.esc_attr($video_podcasting_products_border_radius).'px;';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_products_btn_padding_top_bottom = get_theme_mod('video_podcasting_products_btn_padding_top_bottom');
	if($video_podcasting_products_btn_padding_top_bottom != false){
		$video_podcasting_custom_css .='.woocommerce a.button{';
			$video_podcasting_custom_css .='padding-top: '.esc_attr($video_podcasting_products_btn_padding_top_bottom).' !important; padding-bottom: '.esc_attr($video_podcasting_products_btn_padding_top_bottom).' !important;';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_products_btn_padding_left_right = get_theme_mod('video_podcasting_products_btn_padding_left_right');
	if($video_podcasting_products_btn_padding_left_right != false){
		$video_podcasting_custom_css .='.woocommerce a.button{';
			$video_podcasting_custom_css .='padding-left: '.esc_attr($video_podcasting_products_btn_padding_left_right).' !important; padding-right: '.esc_attr($video_podcasting_products_btn_padding_left_right).' !important;';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_products_button_border_radius = get_theme_mod('video_podcasting_products_button_border_radius', 0);
	if($video_podcasting_products_button_border_radius != false){
		$video_podcasting_custom_css .='.woocommerce ul.products li.product .button, a.checkout-button.button.alt.wc-forward,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
			$video_podcasting_custom_css .='border-radius: '.esc_attr($video_podcasting_products_button_border_radius).'px !important;';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_woocommerce_sale_position = get_theme_mod( 'video_podcasting_woocommerce_sale_position','right');
    if($video_podcasting_woocommerce_sale_position == 'left'){
		$video_podcasting_custom_css .='.woocommerce ul.products li.product .onsale{';
			$video_podcasting_custom_css .='left: 10px !important; right: auto !important;';
		$video_podcasting_custom_css .='}';
	}else if($video_podcasting_woocommerce_sale_position == 'right'){
		$video_podcasting_custom_css .='.woocommerce ul.products li.product .onsale{';
			$video_podcasting_custom_css .='left: auto !important; right: 10px !important;';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_woocommerce_sale_font_size = get_theme_mod('video_podcasting_woocommerce_sale_font_size');
	if($video_podcasting_woocommerce_sale_font_size != false){
		$video_podcasting_custom_css .='.woocommerce span.onsale{';
			$video_podcasting_custom_css .='font-size: '.esc_attr($video_podcasting_woocommerce_sale_font_size).';';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_woocommerce_sale_border_radius = get_theme_mod('video_podcasting_woocommerce_sale_border_radius', 0);
	if($video_podcasting_woocommerce_sale_border_radius != false){
		$video_podcasting_custom_css .='.woocommerce span.onsale{';
			$video_podcasting_custom_css .='border-radius: '.esc_attr($video_podcasting_woocommerce_sale_border_radius).'px;';
		$video_podcasting_custom_css .='}';
	}

		$video_podcasting_site_title_color = get_theme_mod('video_podcasting_site_title_color');
	if($video_podcasting_site_title_color != false){
		$video_podcasting_custom_css .='p.site-title a{';
			$video_podcasting_custom_css .='color: '.esc_attr($video_podcasting_site_title_color).';';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_site_tagline_color = get_theme_mod('video_podcasting_site_tagline_color');
	if($video_podcasting_site_tagline_color != false){
		$video_podcasting_custom_css .='.logo p.site-description{';
			$video_podcasting_custom_css .='color: '.esc_attr($video_podcasting_site_tagline_color).';';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_logo_width = get_theme_mod('video_podcasting_logo_width');
	if($video_podcasting_logo_width != false){
		$video_podcasting_custom_css .='.logo img{';
			$video_podcasting_custom_css .='width: '.esc_attr($video_podcasting_logo_width).';';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_logo_height = get_theme_mod('video_podcasting_logo_height');
	if($video_podcasting_logo_height != false){
		$video_podcasting_custom_css .='.logo img{';
			$video_podcasting_custom_css .='height: '.esc_attr($video_podcasting_logo_height).';';
		$video_podcasting_custom_css .='}';
	}

	// Woocommerce img

	$video_podcasting_shop_featured_image_border_radius = get_theme_mod('video_podcasting_shop_featured_image_border_radius', 0);
	if($video_podcasting_shop_featured_image_border_radius != false){
		$video_podcasting_custom_css .='.woocommerce ul.products li.product a img{';
			$video_podcasting_custom_css .='border-radius: '.esc_attr($video_podcasting_shop_featured_image_border_radius).'px;';
		$video_podcasting_custom_css .='}';
	}

	$video_podcasting_shop_featured_image_box_shadow = get_theme_mod('video_podcasting_shop_featured_image_box_shadow',0);
	if($video_podcasting_shop_featured_image_box_shadow != false){
		$video_podcasting_custom_css .='.woocommerce ul.products li.product a img{';
			$video_podcasting_custom_css .='box-shadow: '.esc_attr($video_podcasting_shop_featured_image_box_shadow).'px '.esc_attr($video_podcasting_shop_featured_image_box_shadow).'px '.esc_attr($video_podcasting_shop_featured_image_box_shadow).'px #ddd;';
		$video_podcasting_custom_css .='}';
	}
