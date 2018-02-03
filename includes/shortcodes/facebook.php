<?php

function arafat_facebook_shortcode ( $atts, $content = 'LIKE US ON FACEBOOK' ) {

	$arafat_theme_opts = get_option('arafat_opts'); //my theme facebook 

	$atts 				= shortcode_atts(  array(

		'page' 			=> $arafat_theme_opts['facebook']
	), $atts);
	return '<a href="http://facebook.com/'.$atts['page'].'" class="btn btn-danger">
		'.do_shortcode($content).'
	</a>';
}

function arafat_icon_shortcode($atts) {

	return '<i class="fa fa-' . $atts['icon']. '"></i>';
}

