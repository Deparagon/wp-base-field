<?php
/*
Plugin Name: WP Base Field
Plugin URI: mrparagon.me/wp-base-field/
Description: New Wordpress plugin structure for faster development of Wordpress plugin
Author: Kingsley Paragon
Version: 1.0
Requires at least: 3.5
Requires PHP: 5.6
Tested up to: 5.2.3
Author URI: mrparagon.me
license: GPLV2
Text Domain: wp-base-field
Domain Path: /langs/
*/



if (!defined('ABSPATH')) {
    exit;
}

function activate()
{
    require_once plugin_dir_path(__FILE__).'/inc/BFActivation.php';
    BSActivation::run();
}

function deactivate()
{
    require_once plugin_dir_path(__FILE__).'/inc/BFDeactivation.php';
    BFDeactivation::run();
}

register_activation_hook(__FILE__, 'activate');
register_deactivation_hook(__FILE__, 'deactivate');

/**
 * Let's Do it.
 */
require_once plugin_dir_path(__FILE__).'/inc/BaseField.php';
new BaseField();