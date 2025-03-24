<?php
/**
 * Plugin Name: Stealth Login Guard
 * 
 * Description: This lightweight plugin sends a 403 Forbidden HTTP header on every login attempt, whether successful or failed. 
 * Version: 1.0
 * Author: Plugins4.OWN.pl
 * Author URI: https://plugins4.own.pl
 * License: Public domain
 */

add_action('wp_login_failed', function() {
  status_header(403);
});

add_action('wp_login', function($user_login, $user) {
  status_header(403);
});