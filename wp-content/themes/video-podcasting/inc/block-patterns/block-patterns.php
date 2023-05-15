<?php
/**
 *  Video Podcasting: Block Patterns
 *
 * @package Video Podcasting
 * @since   1.0.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'video-podcasting',
		array( 'label' => __( 'Video Podcasting', 'video-podcasting' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	register_block_pattern(
		'video-podcasting/banner-section',
		array(
			'title'      => __( 'Banner Section', 'video-podcasting' ),
			'categories' => array( 'video-podcasting' ),
			'content'    => "<!-- wp:cover {\"url\":\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/banner.png\",\"id\":1385,\"dimRatio\":0,\"minHeight\":700,\"isDark\":false,\"align\":\"full\",\"className\":\"banner-section \"} -->\n<div class=\"wp-block-cover alignfull is-light banner-section\" style=\"min-height:700px\"><span aria-hidden=\"true\" class=\"has-background-dim-0 wp-block-cover__gradient-background has-background-dim\"></span><img class=\"wp-block-cover__image-background wp-image-1385\" alt=\"\" src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/banner.png\" data-object-fit=\"cover\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:columns {\"align\":\"full\",\"className\":\"mx-5\"} -->\n<div class=\"wp-block-columns alignfull mx-5\"><!-- wp:column {\"width\":\"66.66%\",\"className\":\"banner-section1 ps-lg-5 mx-lg-5\"} -->\n<div class=\"wp-block-column banner-section1 ps-lg-5 mx-lg-5\" style=\"flex-basis:66.66%\"><!-- wp:heading {\"level\":1,\"fontSize\":\"x-large\"} -->\n<h1 class=\"has-x-large-font-size\">Dream as if you’ll live forever</h1>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:audio {\"id\":1400} -->\n<figure class=\"wp-block-audio\"><audio controls src=\"http://localhost/vw-themes/wp-content/uploads/2022/04/audio-2.mp3\"></audio></figure>\n<!-- /wp:audio -->\n\n<!-- wp:columns {\"className\":\"image-section\"} -->\n<div class=\"wp-block-columns image-section\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:image {\"id\":1402,\"width\":113,\"height\":110,\"sizeSlug\":\"full\",\"linkDestination\":\"none\",\"className\":\"banner-section-img1\"} -->\n<figure class=\"wp-block-image size-full is-resized banner-section-img1\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/playlist-1.png\" alt=\"\" class=\"wp-image-1402\" width=\"113\" height=\"110\"/><figcaption>Lorem Ipsum</figcaption></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:image {\"id\":1404,\"width\":113,\"height\":110,\"sizeSlug\":\"full\",\"linkDestination\":\"none\",\"className\":\"banner-section-img2\"} -->\n<figure class=\"wp-block-image size-full is-resized banner-section-img2\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/playlist-2.png\" alt=\"\" class=\"wp-image-1404\" width=\"113\" height=\"110\"/><figcaption>Lorem Ipsum</figcaption></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"className\":\"banner-section img3\"} -->\n<div class=\"wp-block-column banner-section img3\"><!-- wp:image {\"id\":1405,\"width\":113,\"height\":100,\"sizeSlug\":\"full\",\"linkDestination\":\"none\",\"className\":\"banner-section-img3\"} -->\n<figure class=\"wp-block-image size-full is-resized banner-section-img3\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/playlist-3.png\" alt=\"\" class=\"wp-image-1405\" width=\"113\" height=\"100\"/><figcaption>Lorem Ipsum</figcaption></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"verticalAlignment\":\"center\",\"width\":\"33.33%\",\"className\":\"banner-section2\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center banner-section2\" style=\"flex-basis:33.33%\"></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:cover -->",
		)
	);

	register_block_pattern(
		'video-podcasting/services-section',
		array(
			'title'      => __( 'Services Section', 'video-podcasting' ),
			'categories' => array( 'video-podcasting' ),
			'content'    => "<!-- wp:group {\"align\":\"wide\",\"className\":\"about-section mx-5\"} -->\n<div class=\"wp-block-group alignwide about-section mx-5\"><!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column {\"width\":\"33.33%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:33.33%\"><!-- wp:image {\"align\":\"left\",\"id\":1452,\"sizeSlug\":\"full\",\"linkDestination\":\"none\",\"className\":\"about-section1-img\"} -->\n<div class=\"wp-block-image about-section1-img\"><figure class=\"alignleft size-full\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/about.png\" alt=\"\" class=\"wp-image-1452\"/></figure></div>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"66.66%\",\"className\":\"about-section2\"} -->\n<div class=\"wp-block-column about-section2\" style=\"flex-basis:66.66%\"><!-- wp:heading {\"style\":{\"typography\":{\"fontStyle\":\"normal\",\"fontWeight\":\"500\"}},\"fontSize\":\"large\"} -->\n<h2 class=\"has-large-font-size\" style=\"font-style:normal;font-weight:500\">About</h2>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Best Podcast For Curious Mind</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Lorem ipsum&nbsp;is simply dummy text of the printing and typesetting industry.  has been the industry's standard dummy text ever since the 1500s,</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"textColor\":\"white\",\"style\":{\"border\":{\"radius\":\"0px\"},\"color\":{\"background\":\"#ffbf00\"}},\"fontSize\":\"small\"} -->\n<div class=\"wp-block-button has-custom-font-size has-small-font-size\"><a class=\"wp-block-button__link has-white-color has-text-color has-background\" style=\"border-radius:0px;background-color:#ffbf00\">Get In Touch</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:group -->",
		)
	);
}