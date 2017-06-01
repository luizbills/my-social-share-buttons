<?php
/*
Plugin Name: My Social Share Buttons
Description: Add social share buttons.
Version: 1.2.0
GitHub Plugin URI: https://github.com/luizbills/my-social-share-buttons

Author: Luiz Bills
Author URI: https://luizp.com

License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Text Domain: mssb
Domain Path: /languages/

Requires at least: 4.0
Tested up to: 4.7
*/

if ( ! defined( 'ABSPATH' ) ) die;

define( 'MSSB_PLUGIN_VERSION', '1.2.0' );
define( 'MSSB_FILE', __FILE__ );
define( 'MSSB_DIR', dirname( __FILE__ ) );
define( 'MSSB_ASSETS_DIR', trailingslashit( MSSB_DIR ) . 'static' );
define( 'MSSB_ASSETS_URL', esc_url( trailingslashit( plugins_url( '/static/', __FILE__) ) ) );

require 'inc/plugin_helpers.php';
require 'inc/plugin_functions.php';
require 'inc/plugin_hooks.php';
