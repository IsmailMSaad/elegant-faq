<?php
/**
 * Plugin Name:       Elegant FAQ
 * Description:       A new plugin.
 * Version:           0.0.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Ismail Saad 
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       elegant-faq
 * Domain Path:       /languages
 */
defined( 'ABSPATH' ) || exit;

/*
 * Globals.
 */
define( 'EFAQ_ROOT_PATH', dirname( __FILE__ ) );
define( 'EFAQ_ROOT_URL' , plugin_dir_url( __FILE__ ) );

// Includes.
include_once EFAQ_ROOT_PATH . '/includes/efaq-core-functions.php';
include_once EFAQ_ROOT_PATH . '/includes/class-efaq-shortcode-handler.php';
