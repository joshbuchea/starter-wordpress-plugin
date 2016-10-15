<?php
/**
 * Plugin Name:     Starter WordPress Plugin
 * Plugin URI:      http://example.com/plugin-name-uri/
 * Description:     This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:         1.0.0
 * Author:          Your Name or Your Company
 * Author URI:      http://example.com/
 * Text Domain:     starter-wordpress-plugin
 * Domain Path:     /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) die;

/**
 * The code that runs during plugin activation.
 */
register_activation_hook( __FILE__, 'activate_plugin_name' );
function activate_plugin_name() {
	// do stuff here...
}

/**
 * The code that runs during plugin deactivation.
 */
register_deactivation_hook( __FILE__, 'deactivate_plugin_name' );
function deactivate_plugin_name() {
	// do stuff here...
}
