<?php
/**
 * Plugin Name: Easy Increase Upload Limit
 * Plugin URI: https://github.com/Oleraj09/Upload-Limit-Increase-Plugin
 * Description: Easily increase the WordPress upload size limit dynamically from the admin dashboard without touching server configuration files.
 * Version: 1.0.0
 * Author: Oleraj Hossin
 * Author URI: https://olerajhossin.top
 * Text Domain: easy-increase-upload-limit
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Requires at least: 5.0
 * Requires PHP: 7.4
 */

if (!defined('ABSPATH')) {
    exit;
}

// Define constants
define('EIUL_VERSION', '1.0.0');
define('EIUL_PATH', plugin_dir_path(__FILE__));
define('EIUL_URL', plugin_dir_url(__FILE__));

// Include core class
require_once EIUL_PATH . 'includes/class-upload-limit.php';

// Initialize plugin
function eiul_init()
{
    load_plugin_textdomain('easy-increase-upload-limit', false, dirname(plugin_basename(__FILE__)) . '/languages');
    new IUL_Upload_Limit();
}
add_action('plugins_loaded', 'eiul_init');
