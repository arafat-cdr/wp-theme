<?php

function arafat_register_required_plugins() {
	$plugins 	=	array(

		array(

			'name'				=> 'Contact Form 7',
			'slug'				=> 'contact-form-7',
			'rewuired'			=> true
		)
	);

	$config 					=	array(

		'id'					=> 'arafat_tgma',	#unique id for hasing notices for mutiple insertion
		'menu'					=>	'tgmpa-install-plugins', #Menu Slug
		'parent_slug'			=>	'themes.php',	#Parent menu Slug
		//'capability'			=>	'edit_themes_options', #capability need to view plugin install page
		'has_notices'			=>	true, #show admin notices or not
		'dismissable'			=>	true  #if false a user can not dismiss the message
	);


	tgmpa( $plugins, $config );

}