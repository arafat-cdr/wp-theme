<?php

function arafat_customize_register($wp_customize) {

	$wp_customize->add_setting( 'header_bg_color', array(

		'default'    =>   '#4285f4',
		'transport'  =>   'refresh'
	));

	$wp_customize->add_section( 'arafat_color_theme_section', array(

		'title'				=>	__('color', 'arafat'),
		'priority'			=> 30

	));

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'theme_colors', array(

			'label'			=> __('Header Color', 'arafat'),
			'section'		=> 'arafat_color_theme_section',
			'settings'		=> 'header_bg_color'

	)));

}