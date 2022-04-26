<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/**
 * Plugin Name: Slick slider all
 * Plugin URI:  https://conicsolutions.net/
 * Description: Build a beautiful slider. Custom post types are supported, everything is customized and very easy to use with shortcode.
 * Version:     1.0
 * Author:      Conic Solutions
 * Author URI:  https://conicsolutions.net/
 * Text Domain: cs-ssa
 */

include_once 'config/constants.php';
include_once 'classes/cs-slick-all-bootstrap.php';

$cs_slick_all = new cs_slick_all_bootstrap();

// include the main class
$cs_slick_all->init();

// Plugin delete hook
register_uninstall_hook(__FILE__, array( 'cs_slick_all_bootstrap', 'plugin_delete' ) );

