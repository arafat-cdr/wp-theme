<?php

function arafat_admin_menus() {
	add_menu_page(
		'Arafat Theme Options',
		'Theme Options',
		'edit_theme_options',
		'arafat_theme_opts',
		'arafat_theme_opts_page'
	);
}