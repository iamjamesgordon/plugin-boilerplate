<?php

/**
 * Plugin Name:       Plugin Boilerplate
 * Plugin URI:        https://plugin-boilerplate
 * Description:       This is the description for the plugin
 * Version:           1.0.0
 * Author:            James Gordon
 * Author URI:        https://github.com/iamjamesgordon/plugin-boilerplate/
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'PLUGIN_BOILERPLATE_VERSION', '1.0.0' );

require_once(plugin_dir_path(__FILE__) . '/src/autoload.php');

require_once(plugin_dir_path(__FILE__) . 'src/load.php');