<?php

//set up
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support( 'post-formats', array( 'link', 'quote', 'video' ) );


//include
include(get_template_directory().'/includes/front/enque.php');
include(get_template_directory().'/includes/setup.php');
include(get_template_directory().'/includes/widgets.php');
include(get_template_directory().'/includes/activate.php');
include(get_template_directory().'/includes/admin/menus.php');
include(get_template_directory().'/includes/admin/options-page.php');
include(get_template_directory().'/includes/admin/init.php');
include(get_template_directory().'/includes/shortcodes/facebook.php');
include(get_template_directory().'/process/save_options.php');
include(get_template_directory().'/includes/theme-customizer.php');
include(get_template_directory().'/includes/front/head.php');
require_once(get_template_directory().'/includes/libs/class-tgm-plugin-activation.php');
require_once(get_template_directory().'/includes/register-plugins.php');


//action and filter hook
add_action('wp_enqueue_scripts', 'arafat_enqueue');
add_action('after_setup_theme', 'arafat_setup_theme');
add_action('widgets_init', 'arafat_widgets');
add_action('after_switch_theme', 'arafat_activate');
add_action('admin_menu', 'arafat_admin_menus');
add_action('admin_init', 'arafat_admin_init');
add_action( 'customize_register', 'arafat_customize_register' );
add_action( 'wp_head', 'arafat_head' );
add_action( 'tgmpa_register', 'arafat_register_required_plugins' );




//short code
add_shortcode( 'ufb', 'arafat_facebook_shortcode' );
add_shortcode( 'ui', 'arafat_icon_shortcode' );



//arafat bad practise

function wp_nav_menu_no_ul()
{
    $options = array(
        'echo' => false,
        'container' => false,
        'theme_location' => 'primary',
        'fallback_cb'=> 'default_page_menu'
    );

    $menu = wp_nav_menu($options);
    echo preg_replace(array(
        '#^<ul[^>]*>#',
        '#</ul>$#'
    ), '', $menu);

}

function default_page_menu() {
   wp_list_pages('title_li=');
}