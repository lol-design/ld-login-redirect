<?php
/*
  Plugin Name: LD Login Redirect
  Description: Redirects "/logginn" to wp-login.php
  Version: 1.0
  Author: LOL Design
  Author URI: http://loldesign.no
 */
 
function ld_login_redirect() {
	$urlBeeingAccessed = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
	if (strpos($urlBeeingAccessed,'logginn') !== false) {
	$loginUrl = home_url() . "/wp-login.php"; 
	wp_redirect( $loginUrl );
	exit;
	}
}

add_action('wp_head', 'ld_login_redirect');
