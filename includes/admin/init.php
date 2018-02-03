<?php

function arafat_admin_init() {
	include( 'enqueue.php' );
	add_action( 'admin_enqueue_scripts', 'arafat_admin_enqueue' );
	add_action( 'admin_post_arafat_save_options', 'arafat_save_options' );
}