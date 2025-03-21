<?php
/**
 * Plugin Name: Login 403 on fail
 * 
 * Description: Send a HTTP/1.1 403 Forbidden header on a failed login
 * Version: 1.0
 * Author: Plugins4.OWN.pl
 * Author URI: https://plugins4.own.pl
 * License: Public domain
 */

add_action('wp_login_failed', function() {
  status_header(403);
});