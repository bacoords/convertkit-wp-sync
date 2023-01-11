<?php
/**
 * Plugin Name:     ConvertKit WP Sync
 * Plugin URI:      https://github.com/bacoords/convertkit-wp-sync
 * Description:     Additional sync functionality for Convertkit and WordPress
 * Author:          Brian Coords
 * Author URI:      https://www.briancoords.com
 * Text Domain:     convertkit-wp-sync
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Convertkit_Wp_Sync
 */

// Your code starts here.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


if ( class_exists( 'ConvertKit_Settings' ) ) {
	require_once __DIR__ . '/classes/class-convertkit-wp-sync.php';
	new Convertkit_Wp_Sync();
}

