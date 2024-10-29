<?php
/**
 * Plugin Name: AP Stream to Rocket
 * Plugin URI: https://wordpress.org/plugins/ap-stream-to-rocket/
 * Description: Send Stream logs to rocket.chat.
 * Author: f.staude, stk_jj
 * Version: 0.0.5
 * Author URI: https://staude.net/
 * Text Domain: ap-stream-to-rocket
 * Domain Path: /languages
 * GitHub Plugin URI: https://github.com/adminpress/ap-stream-to-rocket
 * GitHub Branch: master
 * [](http://coderisk.com/wp/plugin/ap-stream-to-rocket/RIPS-B6sc2fzJtR)
 */

require_once dirname( __FILE__ ) . '/inc/class-ap-stream-rocket-api.php';

function register_ap_stream_rocket() {
	$stream_rocket = new AP_Stream_Rocket_API();
}
add_action( 'init', 'register_ap_stream_rocket' );

