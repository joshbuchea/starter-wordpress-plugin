<?php
/**
 * Plugin Name:     Plugin Name
 * Plugin URI:      http://example.com/plugin-name-uri/
 * Description:     This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:         1.0.0
 * Author:          Your Name or Your Company
 * Author URI:      http://example.com/
 * Text Domain:     plugin-name
 * Domain Path:     /languages
 */

if ( !defined('ABSPATH') ) exit; // Exit if accessed directly

if ( !function_exists('plugin_name') ) {

  function plugin_name() {
    // Hello world!
  }

  plugin_name();

}
