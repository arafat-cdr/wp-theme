<?php
//give my user for custom edit permission
function arafat_activate() {
	if( version_compare(get_bloginfo('version'), '4.2', '<')) {
		wp_die(__('You must have a minum version of 4.2 to use this theme ! '));

	}

	$theme_opts	=	get_option('arafat_opts');

	if( !$theme_opts ) {
		$opts 			=   [

			'facebook'		=> 	'',
			'twitter'		=>	'',
			'youtube'		=>	'',
			'logo_type'		=>  1,  //1 for text 2 for image
			'logo_img'		=>  '',
			'footer'		=>  ''
		];

		add_option( 'arafat_opts', $opts );
	} 	
}