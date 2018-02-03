<?php

//the folder process is can be name any thing and the files also can name any thing

function arafat_save_options() {

	if( !current_user_can( 'edit_theme_options' ) ) {

		wp_die( __e('You are not allowed to access this page') );
	}

	check_admin_referer( 'arafat_options_verify' ); //the nonce i created

	$opts 							=	get_option( 'arafat_opts' );
	$opts['twitter']				=	sanitize_text_field($_POST['arafat_inputTwitter']);
	$opts['facebook']				=	sanitize_text_field($_POST['arafat_inputFacebook']);
	$opts['youtube']				=	sanitize_text_field($_POST['arafat_inputYoutube']);
	$opts['logo_type']				=	absint($_POST['arafat_inputLogoType']);
	$opts['footer']					=	$_POST['arafat_inputFooter'];
	$opts['logo_img']				=	esc_url_raw($_POST['arafat_inputLogoImg']);

	update_option( 'arafat_opts', $opts );
	wp_redirect( admin_url( 'admin.php?page=arafat_theme_opts&status=1' ) );

}