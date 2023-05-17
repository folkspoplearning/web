<?php
defined("ABSPATH") || exit();


add_action('admin_menu', 'marketingly_themepage');
function marketingly_themepage()
{
    add_menu_page(__('Theme Settings', 'marketingly'), __('Theme Settings', 'marketingly'), 'manage_options', 'marketingly_themepage', 'marketingly_themepage_content', get_template_directory_uri() . '/inc/info_content/themepage/src/wp-icon-superb.svg', 61);
}

function marketingly_themepage_content()
{
    require_once(trailingslashit(get_template_directory()) . 'inc/info_content/themepage/src/themepage.php');
}

function marketingly_comparepage_css($hook)
{
    if ('toplevel_page_marketingly_themepage' != $hook) {
        return;
    }
    wp_enqueue_style('marketingly-custom-style', get_template_directory_uri() . '/inc/info_content/themepage/src/compare.css');
}
add_action('admin_enqueue_scripts', 'marketingly_comparepage_css');

// Theme page end
