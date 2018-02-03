<?php
function arafat_widgets() {
	register_sidebar(array(
		'name'			=> __( 'My First theme sidebar', 'arafat' ),
		'id'			=> 'arafat_sidebar',
		'description'	=> __('Sidebar for my Theme arafat'),
		'class'			=> ''

		
	));
}