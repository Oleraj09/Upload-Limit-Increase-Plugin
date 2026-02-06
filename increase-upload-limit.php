<?php
/**
 * Plugin Name: Increase Upload Limit
 * Description: Set WordPress upload size limit dynamically from admin
 * Version: 1.0.0
 * Author: Your Name
 * Text Domain: increase-upload-limit
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Define constants
define( 'IUL_VERSION', '1.0.0' );
define( 'IUL_PATH', plugin_dir_path( __FILE__ ) );
define( 'IUL_URL', plugin_dir_url( __FILE__ ) );

// Include core class
require_once IUL_PATH . 'includes/class-upload-limit.php';

// Initialize plugin
function iul_init() {
    new IUL_Upload_Limit();
}
add_action( 'plugins_loaded', 'iul_init' );
