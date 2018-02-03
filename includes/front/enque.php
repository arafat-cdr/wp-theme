<?php

function arafat_enqueue() {
	wp_register_style('arafat_bootstrap', get_template_directory_uri().'/assests/assests/css/bootstrap.min.css');
	wp_register_style('arafat_style', get_template_directory_uri().'/assests/assests/css/style.css');
	wp_register_style('arafat_oswald', 'https://fonts.googleapis.com/css?family=Oswald');
	wp_register_style('arafat_Yanone', 'https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz');
	wp_register_style('arafat_fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_register_style('arafat_jquery_ui', 'http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css');
	

	wp_enqueue_style('arafat_bootstrap');
	wp_enqueue_style('arafat_style');
	wp_enqueue_style('arafat_oswald');
	wp_enqueue_style('arafat_Yanone');
	wp_enqueue_style('arafat_fontawesome');
	wp_enqueue_style('arafat_jquery_ui');

	wp_register_script('arafat_bootstrap_js', get_template_directory_uri().'/assests/assests/js/bootstrap.min.js',array(), false, true);
	wp_register_script('arafat_datepicker', get_template_directory_uri().'/assests/assests/js/plugins/datepicker/bootstrap-datepicker.js',array(), false, true);
	wp_register_script('arafat_jquery_ui', 'http://code.jquery.com/ui/1.10.4/jquery-ui.js',array(), false, true);
	wp_register_script('arafat_custom_js', get_template_directory_uri().'/assests/assests/js/custom.js');

	wp_enqueue_script('jquery');
	wp_enqueue_script('arafat_bootstrap_js');
	wp_enqueue_script('arafat_datepicker');
	wp_enqueue_script('arafat_jquery_ui');
	wp_enqueue_script('arafat_custom_js');

}