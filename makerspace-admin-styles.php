<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @package           makerspace_admin_styles
 *
 * @wordpress-plugin
 * Plugin Name:       Maker Space Admin Styles
 * Version:           1.0.0
 * Author:            Jonathan Günz
 * Author URI:        https://hmnd.de
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       makerspace_admin_styles
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

function load_styles() {
    wp_enqueue_script('ms-bootstrap-js', plugins_url('bootstrap.js',__FILE__ ));
    wp_enqueue_style('makerspace_admin_styles', plugins_url('styles/main.css',__FILE__ ));
}

add_action('admin_enqueue_scripts', 'load_styles' );

