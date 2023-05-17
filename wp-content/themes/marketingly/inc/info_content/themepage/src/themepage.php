<?php
defined("ABSPATH") || exit();

require(trailingslashit(get_template_directory()) . 'inc/info_content/themepage/config.php');
$sptConfig = new SuperbInfoContentConfig();
$user = wp_get_current_user();
$theme = wp_get_theme();
$parent_name = is_child_theme() ? wp_get_theme($theme->Template) : '';
$theme_name = is_child_theme() ? $theme . " " . __("and", "marketingly") . " " . $parent_name : $theme;
$demo_text = is_child_theme() ? sprintf(__("Need inspiration? Take a moment to view our theme demo for the %s parent theme %s!", "marketingly"), $theme, $parent_name) : __("Need inspiration? Take a moment to view our theme demo!", "marketingly");
$premium_text = is_child_theme() ? sprintf(__("Unlock all features by upgrading to the premium edition of %s and its parent theme %s.", "marketingly"), $theme, $parent_name) : sprintf(__("Unlock all features by upgrading to the premium edition of %s.", "marketingly"), $theme);
?>
<div class="wrap">

    <div class="spt-theme-settings-wrapper">
        <div class="spt-theme-settings-wrapper-main-content">

            <div class="spt-theme-settings-wrapper-main-content-section">
                <div class="spt-theme-settings-wrapper-main-content-section-top">
                    <span class="spt-theme-settings-headline"><?php esc_html_e("Customize Settings", "marketingly"); ?></span>
                    <a class="spt-theme-settings-headline-link" href="<?php echo esc_url(admin_url('customize.php'))  ?>"><?php esc_html_e("Go To Customizer", "marketingly"); ?></a>
                </div>

                <div class="spt-theme-settings-content">

                    <div class="spt-theme-settings-content-getting-started-wrapper">
                        <div class="spt-theme-settings-content-item">
                            <div class="spt-theme-settings-content-item-header">
                                <img width="25" height="25" src="<?php echo esc_url(get_template_directory_uri() . '/inc/info_content/themepage/src/icons/list-bullets.svg'); ?>" />
                                <div class="spt-theme-settings-content-item-headline">
                                    <?php esc_html_e("Add Menus", "marketingly"); ?>
                                </div>
                                <p><?php esc_html_e("Add a navigation to your website to improve the user experience.", "marketingly"); ?></p>
                            </div>
                            <div class="spt-theme-settings-content-item-content">
                                <a class="spt-theme-settings-content-item-button" href="<?php echo esc_url(admin_url('nav-menus.php'))  ?>"><?php esc_html_e("Go to menus", "marketingly"); ?></a>
                            </div>
                        </div>

                        <div class="spt-theme-settings-content-item">
                            <div class="spt-theme-settings-content-item-header">
                                <img width="25" height="25" src="<?php echo esc_url(get_template_directory_uri() . '/inc/info_content/themepage/src/icons/squares-four.svg'); ?>" />
                                <div class="spt-theme-settings-content-item-headline">
                                    <?php esc_html_e("Add Widgets", "marketingly"); ?>
                                </div>
                                <p><?php esc_html_e("Add content to the sidebar and other widget areas.", "marketingly"); ?></p>
                            </div>
                            <div class="spt-theme-settings-content-item-content">
                                <a class="spt-theme-settings-content-item-button" href="<?php echo esc_url(admin_url('widgets.php'))  ?>"><?php esc_html_e("Go to widgets", "marketingly"); ?></a>
                            </div>
                        </div>

                        <div class="spt-theme-settings-content-item">
                            <div class="spt-theme-settings-content-item-header">
                                <img width="25" height="25" src="<?php echo esc_url(get_template_directory_uri() . '/inc/info_content/themepage/src/icons/paint-brush.svg'); ?>" />
                                <div class="spt-theme-settings-content-item-headline">
                                    <?php esc_html_e("Customize Design", "marketingly"); ?>
                                </div>
                                <p><?php esc_html_e("Customize your website design to fit your personality or brand.", "marketingly"); ?></p>
                            </div>
                            <div class="spt-theme-settings-content-item-content">
                                <a class="spt-theme-settings-content-item-button" href="<?php echo esc_url(admin_url('customize.php')) ?>"><?php esc_html_e("Go to customizer", "marketingly"); ?></a>
                            </div>
                        </div>

                        <div class="spt-theme-settings-content-item">
                            <div class="spt-theme-settings-content-item-header">
                                <img width="25" height="25" src="<?php echo esc_url(get_template_directory_uri() . '/inc/info_content/themepage/src/icons/text-a-underline.svg'); ?>" />
                                <div class="spt-theme-settings-content-item-headline">
                                    <?php esc_html_e("Change Site Title", "marketingly"); ?>
                                </div>
                                <p><?php esc_html_e("Add your website name and tagline to improve the design and SEO.", "marketingly"); ?></p>
                            </div>
                            <div class="spt-theme-settings-content-item-content">
                                <a class="spt-theme-settings-content-item-button" href="<?php echo esc_url(admin_url('customize.php')) ?>"><?php esc_html_e("Go to customizer", "marketingly"); ?></a>
                            </div>
                        </div>

                        <div class="spt-theme-settings-content-item">
                            <div class="spt-theme-settings-content-item-header">
                                <img width="25" height="25" src="<?php echo esc_url(get_template_directory_uri() . '/inc/info_content/themepage/src/icons/image.svg'); ?>" />
                                <div class="spt-theme-settings-content-item-headline">
                                    <?php esc_html_e("Upload Logo", "marketingly"); ?>
                                </div>
                                <p><?php esc_html_e("Add a custom logo to make your website look more professional.", "marketingly"); ?></p>
                            </div>
                            <div class="spt-theme-settings-content-item-content">
                                <a class="spt-theme-settings-content-item-button" href="<?php echo esc_url(admin_url('customize.php')) ?>"><?php esc_html_e("Go to customizer", "marketingly"); ?></a>
                            </div>
                        </div>

                        <div class="spt-theme-settings-content-item">
                            <div class="spt-theme-settings-content-item-header">
                                <img width="25" height="25" src="<?php echo esc_url(get_template_directory_uri() . '/inc/info_content/themepage/src/icons/file.svg'); ?>" />
                                <div class="spt-theme-settings-content-item-headline">
                                    <?php esc_html_e("Create New Pages", "marketingly"); ?>
                                </div>
                                <p><?php esc_html_e("Start creating your website by adding pages to it.", "marketingly"); ?></p>
                            </div>
                            <div class="spt-theme-settings-content-item-content">
                                <a class="spt-theme-settings-content-item-button" href="<?php echo esc_url(admin_url('edit.php?post_type=page')) ?>"><?php esc_html_e("Create a new page", "marketingly"); ?></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="spt-theme-settings-wrapper-main-content-section">
                <div class="spt-theme-settings-wrapper-main-content-section-top">
                    <span class="spt-theme-settings-headline"><?php esc_html_e("Premium Features", "marketingly"); ?></span>
                    <a class="spt-theme-settings-headline-link" href="<?= esc_url(SuperbInfoContentConfig::THEME_LINK); ?>"><?php esc_html_e("Unlock All Features", "marketingly"); ?></a>
                </div>
                <p class="spt-theme-settings-wrapper-main-content-section-top-description">
                    <?php esc_html_e("Create a beautiful website easily, without coding.", "marketingly"); ?>
                </p>

                <div class="spt-theme-settings-content spt-theme-settings-content-us">
                    <?php
                    foreach ($sptConfig->GetFeatures() as $feature) :
                    ?>
                        <a target="_blank" href="<?= esc_url(SuperbInfoContentConfig::THEME_LINK); ?>" class="spt-theme-settings-content-item spt-theme-settings-content-item-unavailable">
                            <span class="spt-theme-settings-content-item-unavailable-premium">Premium</span>
                            <div class="spt-theme-settings-content-item-header">
                                <div>
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/inc/info_content/themepage/src/icons/' . $feature["icon"]); ?>" />
                                </div>
                                <span class="spt-theme-settings-content-us-title"><?php esc_html_e($feature["title"]); ?></span></span>
                                <p><?php esc_html_e("With ", "marketingly"); ?><?= esc_attr($theme_name); ?> <?php esc_html_e(" Premium you'll have full access to this feature as well as all the other features listed.", "marketingly"); ?></p>
                            </div>
                            <div class="spt-theme-settings-content-item-content">
                                <span class="spt-theme-settings-content-us-button-link"><?php esc_html_e("Get Premium Version", "marketingly"); ?></span>
                            </div>
                        </a>
                    <?php
                    endforeach;
                    ?>

                </div>
            </div>
        </div>


        <div class="spt-theme-settings-wrapper-sidebar">

            <div class="spt-theme-settings-wrapper-sidebar-item">
                <div class="spt-theme-settings-wrapper-sidebar-item-content">
                    <img class="spt-theme-settings-wrapper-sidebar-item-content-demo-image" src="<?= esc_url(get_template_directory_uri() . '/inc/admin_notification/src/preview.png'); ?>" alt="<?= esc_attr($theme_name); ?> Preview" />
                    <div class="spt-theme-settings-wrapper-sidebar-item-header"><?php esc_html_e("View Demo", "marketingly"); ?></div>
                    <p><?= esc_html__("Need inspiration? Take a moment to view our theme demo!", "marketingly") ?></p>
                    <a href="<?= esc_url(SuperbInfoContentConfig::DEMO_LINK); ?>" target="_blank" class="button"><?php esc_html_e("View Demo", "marketingly"); ?></a>
                </div>
            </div>

            <div class="spt-theme-settings-wrapper-sidebar-item">
                <img width="25" height="25" src="<?php echo esc_url(get_template_directory_uri() . '/inc/info_content/themepage/src/icons/color-crown.svg'); ?>" />
                <div class="spt-theme-settings-wrapper-sidebar-item-header"><?php esc_html_e("Upgrade to premium", "marketingly"); ?></div>
                <div class="spt-theme-settings-wrapper-sidebar-item-content">
                    <p><?php echo esc_html($premium_text); ?></p>
                    <a href="<?= esc_url(SuperbInfoContentConfig::THEME_LINK); ?>" target="_blank" class="button button-primary"><?php esc_html_e("View Premium Version", "marketingly"); ?></a>
                </div>
            </div>

            <div class="spt-theme-settings-wrapper-sidebar-item">
                <img width="25" height="25" src="<?php echo esc_url(get_template_directory_uri() . '/inc/info_content/themepage/src/icons/wechat-logo.svg'); ?>" />
                <div class="spt-theme-settings-wrapper-sidebar-item-header"><?php esc_html_e("Contact support", "marketingly"); ?></div>
                <div class="spt-theme-settings-wrapper-sidebar-item-content">
                    <p><?php esc_html_e("If you have issues with", "marketingly"); ?> <?php echo esc_html($theme); ?> <?php esc_html_e("then send us an email through our website!", "marketingly"); ?></p>
                    <a href="https://superbthemes.com/customer-support/" target="_blank" class="button"><?php esc_html_e("Contact Support", "marketingly"); ?></a>
                </div>
            </div>

            <div class="spt-theme-settings-wrapper-sidebar-item">
                <img width="25" height="25" src="<?php echo esc_url(get_template_directory_uri() . '/inc/info_content/themepage/src/icons/shooting-star.svg'); ?>" />
                <div class="spt-theme-settings-wrapper-sidebar-item-header"><?php esc_html_e("Give us feedback", "marketingly"); ?></div>
                <div class="spt-theme-settings-wrapper-sidebar-item-content">
                    <p><?php esc_html_e("Do you enjoy using", "marketingly"); ?> <?php echo esc_html($theme); ?><?php esc_html_e("? Support us by reviewing us on WordPress.org!", "marketingly"); ?></p>
                    <a href="https://wordpress.org/support/theme/<?php echo esc_attr(get_stylesheet()); ?>/reviews/#new-post" target="_blank" class="button"><?php esc_html_e("Leave a Review", "marketingly"); ?></a>
                </div>
            </div>



        </div>

    </div>
</div>