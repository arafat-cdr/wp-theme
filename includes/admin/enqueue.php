<?php

function arafat_admin_enqueue() {

	if( !isset($_GET['page'] ) || $_GET['page'] != 'arafat_theme_opts' ) {
		return '';
	}
	
	wp_register_style('arafat_bootstrap', get_template_directory_uri().'/assests/assests/css/bootstrap.min.css');
	wp_enqueue_style('arafat_bootstrap');

	wp_register_script('arafat_option_js', get_template_directory_uri().'/assests/assests/js/options.js',array(), false, true);
	wp_enqueue_media();
	wp_enqueue_script( 'arafat_option_js' );


}