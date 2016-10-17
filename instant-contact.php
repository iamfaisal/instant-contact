<?php
/**
 * @package instant-contact
 */
/*
Plugin Name: Instant Contact
Plugin URI: http://faisalmughal.com
Description: instant contact widget - supports all cf7, gravity forms, and embedments...
Version: 1.0
Author: Faisal Mughal
Author URI: http://faisalmughal.com
License: GPLv2 or later
Text Domain: instant-contact
*/

define('INSTANT_CONTACT_DIR', dirname(__FILE__).DIRECTORY_SEPARATOR);
define('INSTANT_CONTACT_URL', plugins_url('/', __FILE__));
define('INSTANT_CONTACT_VER', '1.0');

require INSTANT_CONTACT_DIR.'inc/helper.php';
require INSTANT_CONTACT_DIR.'inc/dynamic.php';
require INSTANT_CONTACT_DIR.'inc/hooks.php';

add_action( 'admin_menu', 'instantContact_register' );
add_action( 'admin_enqueue_scripts', 'instantContact_scripts' );

add_action( 'wp_footer', 'instantContact_output' );
add_action( 'wp_enqueue_scripts', 'instantContact_styles' );
add_action( 'wp_print_styles', 'instantContact_dynamicCss' );
add_action( 'wp_enqueue_scripts', 'instantContact_jquery' );
add_action( 'wp_footer', 'instantContact_dynamicJs' );

if (isset($_POST['instantContact_submit'])) instantContact_handleOptions();