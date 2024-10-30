<?php
/*
Plugin Name: mowomo Analytics code
Plugin URI: https://mowomo.com/
Description: Insert Google Analytics code in your WordPress, it's simple!.
Author: mowomo
Author URI: https://mowomo.com/sobre-nosotros
Version: 1.1
License: GPLv2 o cualquier versión posterior.

*/

/**
 * mowomo-analytics-code
 *
 * @since      1.0.0
 */

define( 'MWMAC_PLUGIN', __FILE__ );
define( 'MWMAC_PLUGIN_DIR', untrailingslashit( dirname( MWMAC_PLUGIN ) ) );

require_once MWMAC_PLUGIN_DIR . '/configuracion.php';
require_once MWMAC_PLUGIN_DIR . '/insert-snippet.php';
