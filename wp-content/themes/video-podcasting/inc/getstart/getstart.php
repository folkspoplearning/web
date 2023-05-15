<?php
//about theme info
add_action( 'admin_menu', 'video_podcasting_gettingstarted' );
function video_podcasting_gettingstarted() {
	add_theme_page( esc_html__('About Video Podcasting', 'video-podcasting'), esc_html__('About Video Podcasting', 'video-podcasting'), 'edit_theme_options', 'video_podcasting_guide', 'video_podcasting_mostrar_guide');
}

// Add a Custom CSS file to WP Admin Area
function video_podcasting_admin_theme_style() {
	wp_enqueue_style('video-podcasting-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getstart/getstart.css');
	wp_enqueue_script('video-podcasting-tabs', esc_url(get_template_directory_uri()) . '/inc/getstart/js/tab.js');
}
add_action('admin_enqueue_scripts', 'video_podcasting_admin_theme_style');

//guidline for about theme
function video_podcasting_mostrar_guide() { 
	//custom function about theme customizer
	$video_podcasting_return = add_query_arg( array()) ;
	$video_podcasting_theme = wp_get_theme( 'video-podcasting' );
?>

<div class="wrapper-info">
    <div class="col-left">
    	<h2><?php esc_html_e( 'Welcome to Video Podcasting', 'video-podcasting' ); ?> <span class="version"><?php esc_html_e( 'Version', 'video-podcasting' ); ?>: <?php echo esc_html($video_podcasting_theme['Version']);?></span></h2>
    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','video-podcasting'); ?></p>
    </div>

    <div class="col-right">
    	<div class="logo">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/final-logo.png" alt="" />
		</div>
		<div class="update-now">
			<h4><?php esc_html_e('Buy Video Podcasting at 20% Discount','video-podcasting'); ?></h4>
			<h4><?php esc_html_e('Use Coupon','video-podcasting'); ?> ( <span><?php esc_html_e('vwpro20','video-podcasting'); ?></span> ) </h4>
			<div class="info-link">
				<a href="<?php echo esc_url( VIDEO_PODCASTING_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Upgrade to Pro', 'video-podcasting' ); ?></a>
			</div>
		</div>
   	</div>

    <div class="tab-sec">
    	<div class="tab">
			<button class="tablinks" onclick="video_podcasting_open_tab(event, 'lite_theme')"><?php esc_html_e( 'Setup With Customizer', 'video-podcasting' ); ?></button>
			<button class="tablinks" onclick="video_podcasting_open_tab(event, 'block_pattern')"><?php esc_html_e( 'Setup With Block Pattern', 'video-podcasting' ); ?></button>
			<button class="tablinks" onclick="video_podcasting_open_tab(event, 'gutenberg_editor')"><?php esc_html_e( 'Setup With Gutunberg Block', 'video-podcasting' ); ?></button>
			<button class="tablinks" onclick="video_podcasting_open_tab(event, 'product_addons_editor')"><?php esc_html_e( 'Woocommerce Product Addons', 'video-podcasting' ); ?></button>
			<button class="tablinks" onclick="video_podcasting_open_tab(event, 'theme_pro')"><?php esc_html_e( 'Get Premium', 'video-podcasting' ); ?></button>
		  	<button class="tablinks" onclick="video_podcasting_open_tab(event, 'free_pro')"><?php esc_html_e( 'Support', 'video-podcasting' ); ?></button>
		</div>

		<?php
			$video_podcasting_plugin_custom_css = '';
			if(class_exists('Ibtana_Visual_Editor_Menu_Class')){
				$video_podcasting_plugin_custom_css ='display: block';
			}
		?>
		<div id="lite_theme" class="tabcontent open">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
				$plugin_ins = Video_Podcasting_Plugin_Activation_Settings::get_instance();
				$video_podcasting_actions = $plugin_ins->recommended_actions;
				?>
				<div class="video-podcasting-recommended-plugins">
				    <div class="video-podcasting-action-list">
				        <?php if ($video_podcasting_actions): foreach ($video_podcasting_actions as $key => $video_podcasting_actionValue): ?>
				                <div class="video-podcasting-action" id="<?php echo esc_attr($video_podcasting_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($video_podcasting_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($video_podcasting_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($video_podcasting_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" get-start-tab-id="lite-theme-tab" href="javascript:void(0);"><?php esc_html_e('Skip','video-podcasting'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="lite-theme-tab" style="<?php echo esc_attr($video_podcasting_plugin_custom_css); ?>">
				<h3><?php esc_html_e( 'Lite Theme Information', 'video-podcasting' ); ?></h3>
				<hr class="h3hr">
				<p><?php esc_html_e('Are you willing to have a good podcast website? You can begin with this Free Podcasting WordPress Theme which is an excellent theme for getting started. This is a highly responsive theme for bringing the best display to your podcasts as well as other multimedia content that includes audio files as well as images. With a design that is capable of adding more features to your website thanks to its plugin compatibility, you can always have a functional website with all the essential features for making your podcasts popular. With the SEO-friendly codes included, you always have better chances of bringing more traffic to your page and increasing your chances of getting more regular viewers. You can make your own identity as a podcaster and add your own logo to your website and make effective use of the different social media icons included in the theme for making better promotions','video-podcasting'); ?></p>
			  	<div class="col-left-inner">
			  		<h4><?php esc_html_e( 'Theme Documentation', 'video-podcasting' ); ?></h4>
					<p><?php esc_html_e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'video-podcasting' ); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VIDEO_PODCASTING_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'video-podcasting' ); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Theme Customizer', 'video-podcasting'); ?></h4>
					<p> <?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'video-podcasting'); ?></p>
					<div class="info-link">
						<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'video-podcasting'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Having Trouble, Need Support?', 'video-podcasting'); ?></h4>
					<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'video-podcasting'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VIDEO_PODCASTING_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'video-podcasting'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Reviews & Testimonials', 'video-podcasting'); ?></h4>
					<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'video-podcasting'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VIDEO_PODCASTING_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'video-podcasting'); ?></a>
					</div>

					<div class="link-customizer">
						<h3><?php esc_html_e( 'Link to customizer', 'video-podcasting' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','video-podcasting'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=video_podcasting_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','video-podcasting'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-slides"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=video_podcasting_slidersettings') ); ?>" target="_blank"><?php esc_html_e('Slider Settings','video-podcasting'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-category"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=video_podcasting_about_section') ); ?>" target="_blank"><?php esc_html_e('About Section','video-podcasting'); ?></a>
								</div>
							</div>
						
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','video-podcasting'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','video-podcasting'); ?></a>
								</div>
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=video_podcasting_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','video-podcasting'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=video_podcasting_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','video-podcasting'); ?></a>
								</div>
							</div>
						</div>
					</div>
			  	</div>
				<div class="col-right-inner">
					<h3 class="page-template"><?php esc_html_e('How to set up Home Page Template','video-podcasting'); ?></h3>
				  	<hr class="h3hr">
					<p><?php esc_html_e('Follow these instructions to setup Home page.','video-podcasting'); ?></p>
                  	<p><span class="strong"><?php esc_html_e('1. Create a new page :','video-podcasting'); ?></span><?php esc_html_e(' Go to ','video-podcasting'); ?>
					  	<b><?php esc_html_e(' Dashboard >> Pages >> Add New Page','video-podcasting'); ?></b></p>
                  	<p><?php esc_html_e('Name it as "Home" then select the template "Custom Home Page".','video-podcasting'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/home-page-template.png" alt="" />
                  	<p><span class="strong"><?php esc_html_e('2. Set the front page:','video-podcasting'); ?></span><?php esc_html_e(' Go to ','video-podcasting'); ?>
					  	<b><?php esc_html_e(' Settings >> Reading ','video-podcasting'); ?></b></p>
				  	<p><?php esc_html_e('Select the option of Static Page, now select the page you created to be the homepage, while another page to be your default page.','video-podcasting'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/set-front-page.png" alt="" />
                  	<p><?php esc_html_e(' Once you are done with setup, then follow the','video-podcasting'); ?> <a class="doc-links" href="<?php echo esc_url( VIDEO_PODCASTING_FREE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','video-podcasting'); ?></a></p>
			  	</div>
			</div>
		</div>

		<div id="block_pattern" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
			$plugin_ins = Video_Podcasting_Plugin_Activation_Settings::get_instance();
			$video_podcasting_actions = $plugin_ins->recommended_actions;
			?>
				<div class="video-podcasting-recommended-plugins">
				    <div class="video-podcasting-action-list">
				        <?php if ($video_podcasting_actions): foreach ($video_podcasting_actions as $key => $video_podcasting_actionValue): ?>
				                <div class="video-podcasting-action" id="<?php echo esc_attr($video_podcasting_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($video_podcasting_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($video_podcasting_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($video_podcasting_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" href="javascript:void(0);" get-start-tab-id="gutenberg-editor-tab"><?php esc_html_e('Skip','video-podcasting'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="gutenberg-editor-tab" style="<?php echo esc_attr($video_podcasting_plugin_custom_css); ?>">
				<div class="block-pattern-img">
				  	<h3><?php esc_html_e( 'Block Patterns', 'video-podcasting' ); ?></h3>
					<hr class="h3hr">
					<p><?php esc_html_e('Follow the below instructions to setup Home page with Block Patterns.','video-podcasting'); ?></p>
	              	<p><b><?php esc_html_e('Click on Below Add new page button >> Click on "+" Icon >> Click Pattern Tab >> Click on homepage sections >> Publish.','video-podcasting'); ?></span></b></p>
	              	<div class="video-podcasting-pattern-page">
				    	<a href="javascript:void(0)" class="vw-pattern-page-btn button-primary button"><?php esc_html_e('Add New Page','video-podcasting'); ?></a>
				    </div>
	              	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/block-pattern.png" alt="" />
	            </div>

              	<div class="block-pattern-link-customizer">
					<h3><?php esc_html_e( 'Link to customizer', 'video-podcasting' ); ?></h3>
					<hr class="h3hr">
					<div class="first-row">
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','video-podcasting'); ?></a>
							</div>
							<div class="row-box2">
								<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=video_podcasting_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','video-podcasting'); ?></a>
							</div>
						</div>
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','video-podcasting'); ?></a>
							</div>
							
							<div class="row-box2">
								<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=video_podcasting_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','video-podcasting'); ?></a>
							</div>
						</div>
						
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=video_podcasting_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','video-podcasting'); ?></a>
							</div>
							 <div class="row-box2">
								<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','video-podcasting'); ?></a>
							</div> 
						</div>
					</div>
				</div>			
					
	        </div>
		</div>
		
		<div id="gutenberg_editor" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
			$plugin_ins = Video_Podcasting_Plugin_Activation_Settings::get_instance();
			$video_podcasting_actions = $plugin_ins->recommended_actions;
			?>
				<div class="video-podcasting-recommended-plugins">
				    <div class="video-podcasting-action-list">
				        <?php if ($video_podcasting_actions): foreach ($video_podcasting_actions as $key => $video_podcasting_actionValue): ?>
				                <div class="video-podcasting-action" id="<?php echo esc_attr($video_podcasting_actionValue['id']);?>">
			                        <div class="action-inner plugin-activation-redirect">
			                            <h3 class="action-title"><?php echo esc_html($video_podcasting_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($video_podcasting_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($video_podcasting_actionValue['link']); ?>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php }else{ ?>
				<h3><?php esc_html_e( 'Gutunberg Blocks', 'video-podcasting' ); ?></h3>
				<hr class="h3hr">
				<div class="video-podcasting-pattern-page">
			    	<a href="<?php echo esc_url( admin_url( 'admin.php?page=ibtana-visual-editor-templates' ) ); ?>" class="vw-pattern-page-btn ibtana-dashboard-page-btn button-primary button"><?php esc_html_e('Ibtana Settings','video-podcasting'); ?></a>
			    </div>

			    <div class="link-customizer-with-guternberg-ibtana">
	              	<div class="link-customizer-with-block-pattern">
						<h3><?php esc_html_e( 'Link to customizer', 'video-podcasting' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','video-podcasting'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=video_podcasting_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','video-podcasting'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','video-podcasting'); ?></a>
								</div>
								
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=video_podcasting_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','video-podcasting'); ?></a>
								</div>
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=video_podcasting_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','video-podcasting'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','video-podcasting'); ?></a>
								</div> 
							</div>
						</div>
					</div>	
				</div>
			<?php } ?>
		</div>

		<div id="product_addons_editor" class="tabcontent">
			<?php if(!class_exists('IEPA_Loader')){
				$plugin_ins = Video_Podcasting_Plugin_Activation_Woo_Products::get_instance();
				$video_podcasting_actions = $plugin_ins->recommended_actions;
				?>
				<div class="video-podcasting-recommended-plugins">
					    <div class="video-podcasting-action-list">
					        <?php if ($video_podcasting_actions): foreach ($video_podcasting_actions as $key => $video_podcasting_actionValue): ?>
					                <div class="video-podcasting-action" id="<?php echo esc_attr($video_podcasting_actionValue['id']);?>">
				                        <div class="action-inner plugin-activation-redirect">
				                            <h3 class="action-title"><?php echo esc_html($video_podcasting_actionValue['title']); ?></h3>
				                            <div class="action-desc"><?php echo esc_html($video_podcasting_actionValue['desc']); ?></div>
				                            <?php echo wp_kses_post($video_podcasting_actionValue['link']); ?>
				                        </div>
					                </div>
					            <?php endforeach;
					        endif; ?>
					    </div>
				</div>
			<?php }else{ ?>
				<h3><?php esc_html_e( 'Woocommerce Products Blocks', 'video-podcasting' ); ?></h3>
				<hr class="h3hr">
				<div class="video-podcasting-pattern-page">
					<p><?php esc_html_e('Follow the below instructions to setup Products Templates.','video-podcasting'); ?></p>
					<p><b><?php esc_html_e('1. First you need to activate these plugins','video-podcasting'); ?></b></p>
						<p><?php esc_html_e('1. Ibtana - WordPress Website Builder ','video-podcasting'); ?></p>
						<p><?php esc_html_e('2. Ibtana - Ecommerce Product Addons.','video-podcasting'); ?></p>
						<p><?php esc_html_e('3. Woocommerce','video-podcasting'); ?></p>

					<p><b><?php esc_html_e('2. Go To Dashboard >> Ibtana Settings >> Woocommerce Templates','video-podcasting'); ?></span></b></p>
	              	<div class="video-podcasting-pattern-page">
			    		<a href="<?php echo esc_url( admin_url( 'admin.php?page=ibtana-visual-editor-woocommerce-templates&ive_wizard_view=parent' ) ); ?>" class="vw-pattern-page-btn ibtana-dashboard-page-btn button-primary button"><?php esc_html_e('Woocommerce Templates','video-podcasting'); ?></a>
			    	</div>
	              	<p><?php esc_html_e('You can create a template as you like.','video-podcasting'); ?></span></p>
			    </div>
			<?php } ?>
		</div>

		<div id="theme_pro" class="tabcontent">
		  	<h3><?php esc_html_e( 'Premium Theme Information', 'video-podcasting' ); ?></h3>
			<hr class="h3hr">
		    <div class="col-left-pro">
		    	<p><?php esc_html_e('There are many podcasters as well as podcasts out there but in order to get regular listeners and viewers, you need to bring them to a place where they will find access to all your content. This is where a website will be useful and to create an effective and impressive podcast website, this Video Podcast WordPress Theme makes a great choice. It will let you change of perception that creating a website is a daunting task. Rather it brings you so many useful tools and elements that will let you create a stunning website effortlessly. WP Video Podcast WordPress Theme impresses everyone with a stunning slider having slider settings. With stunning spaces given for your podcasts, you can practically display your podcasts anywhere on the page. As it supports multimedia, you can bring audios, videos, show your playlists, individual episodes, and more. This is what makes it the most suitable choice','video-podcasting'); ?></p>
		    	<div class="pro-links">
			    	<a href="<?php echo esc_url( VIDEO_PODCASTING_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'video-podcasting'); ?></a>
					<a href="<?php echo esc_url( VIDEO_PODCASTING_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'video-podcasting'); ?></a>
					<a href="<?php echo esc_url( VIDEO_PODCASTING_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'video-podcasting'); ?></a>
				</div>
		    </div>
		    <div class="col-right-pro">
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/responsive.png" alt="" />
		    </div>
		    <div class="featurebox">
			    <h3><?php esc_html_e( 'Theme Features', 'video-podcasting' ); ?></h3>
				<hr class="h3hr">
				<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th></th>
								<th><?php esc_html_e('Free Themes', 'video-podcasting'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'video-podcasting'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Theme Customization', 'video-podcasting'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'video-podcasting'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Logo Upload', 'video-podcasting'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Social Media Links', 'video-podcasting'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Slider Settings', 'video-podcasting'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Number of Slides', 'video-podcasting'); ?></td>
								<td class="table-img"><?php esc_html_e('4', 'video-podcasting'); ?></td>
								<td class="table-img"><?php esc_html_e('Unlimited', 'video-podcasting'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Template Pages', 'video-podcasting'); ?></td>
								<td class="table-img"><?php esc_html_e('3', 'video-podcasting'); ?></td>
								<td class="table-img"><?php esc_html_e('6', 'video-podcasting'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'video-podcasting'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'video-podcasting'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'video-podcasting'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Theme sections', 'video-podcasting'); ?></td>
								<td class="table-img"><?php esc_html_e('2', 'video-podcasting'); ?></td>
								<td class="table-img"><?php esc_html_e('9', 'video-podcasting'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Contact us Page Template', 'video-podcasting'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'video-podcasting'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Blog Templates & Layout', 'video-podcasting'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'video-podcasting'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Page Templates & Layout', 'video-podcasting'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('2(Left/Right Sidebar)', 'video-podcasting'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Color Pallete For Particular Sections', 'video-podcasting'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Global Color Option', 'video-podcasting'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Reordering', 'video-podcasting'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Demo Importer', 'video-podcasting'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Allow To Set Site Title, Tagline, Logo', 'video-podcasting'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Enable Disable Options On All Sections, Logo', 'video-podcasting'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Full Documentation', 'video-podcasting'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Latest WordPress Compatibility', 'video-podcasting'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Woo-Commerce Compatibility', 'video-podcasting'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support 3rd Party Plugins', 'video-podcasting'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Secure and Optimized Code', 'video-podcasting'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Exclusive Functionalities', 'video-podcasting'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Enable / Disable', 'video-podcasting'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Google Font Choices', 'video-podcasting'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Gallery', 'video-podcasting'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Simple & Mega Menu Option', 'video-podcasting'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'video-podcasting'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Shortcodes', 'video-podcasting'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'video-podcasting'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Premium Membership', 'video-podcasting'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Budget Friendly Value', 'video-podcasting'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Priority Error Fixing', 'video-podcasting'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Feature Addition', 'video-podcasting'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('All Access Theme Pass', 'video-podcasting'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Seamless Customer Support', 'video-podcasting'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td></td>
								<td class="table-img"></td>
								<td class="update-link"><a href="<?php echo esc_url( VIDEO_PODCASTING_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'video-podcasting'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="free_pro" class="tabcontent">
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-star-filled"></span><?php esc_html_e('Pro Version', 'video-podcasting'); ?></h4>
				<p> <?php esc_html_e('To gain access to extra theme options and more interesting features, upgrade to pro version.', 'video-podcasting'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VIDEO_PODCASTING_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get Pro', 'video-podcasting'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-cart"></span><?php esc_html_e('Pre-purchase Queries', 'video-podcasting'); ?></h4>
				<p> <?php esc_html_e('If you have any pre-sale query, we are prepared to resolve it.', 'video-podcasting'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VIDEO_PODCASTING_CONTACT ); ?>" target="_blank"><?php esc_html_e('Question', 'video-podcasting'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">		  		
		  		<h4><span class="dashicons dashicons-admin-customizer"></span><?php esc_html_e('Child Theme', 'video-podcasting'); ?></h4>
				<p> <?php esc_html_e('For theme file customizations, make modifications in the child theme and not in the main theme file.', 'video-podcasting'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VIDEO_PODCASTING_CHILD_THEME ); ?>" target="_blank"><?php esc_html_e('About Child Theme', 'video-podcasting'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-admin-comments"></span><?php esc_html_e('Frequently Asked Questions', 'video-podcasting'); ?></h4>
				<p> <?php esc_html_e('We have gathered top most, frequently asked questions and answered them for your easy understanding. We will list down more as we get new challenging queries. Check back often.', 'video-podcasting'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VIDEO_PODCASTING_FAQ ); ?>" target="_blank"><?php esc_html_e('View FAQ','video-podcasting'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-sos"></span><?php esc_html_e('Support Queries', 'video-podcasting'); ?></h4>
				<p> <?php esc_html_e('If you have any queries after purchase, you can contact us. We are eveready to help you out.', 'video-podcasting'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VIDEO_PODCASTING_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Contact Us', 'video-podcasting'); ?></a>
				</div>
		  	</div>
		</div>

	</div>
</div>

<?php } ?>