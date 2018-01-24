<?php
/**
* Plugin Name: WP Plugin
* Plugin URI:  http://www.ericfuller.net
* Description: A starter plugin.
* Version:     1.0.0
* Author:      Eric Fuller
* Author URI:  http://www.ericfuller.net
* License:     GPL-3.0+
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Require class files here.
require_once( 'class/class-bootstrap.php' );
require_once( 'class/class-dependencies.php' );
require_once( 'class/class-app.php' );

/**
 * Bootstrap the plugin.
 *
 * @since 1.0.0
 */
function engage() {

	// Kick things off.
	new \WPSP\Bootstrap();
}

// Engage.
engage();
