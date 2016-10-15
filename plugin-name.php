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

if ( !class_exists('PluginName') ) {

  class PluginName {

    /**
     * Initialize plugin
     */
    public static function init() {

      // non-admin page
      if ( !is_admin() ) {
        add_action( 'init', array('PluginName', 'hello_world_comment') );
      }

    }

    /**
     * Echoes the text "Hello world!"
     */
    public static function hello_world() {
      echo 'Hello world!';
    }

    /**
     * Echoes "Hello world!" code comment
     */
    public static function hello_world_comment() {
      echo '<!-- Hello world! -->';
    }

  }

  PluginName::init();

}
