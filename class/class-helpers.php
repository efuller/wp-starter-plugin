<?php
/**
 * Helpers
 *
 * @package WPSP
 * @since 1.0.0
 */

namespace WPSP;

/**
 * Helpers class.
 *
 * Functions used globally.
 *
 * @since 1.0.0
 */
class Helpers {
	/**
	 * Return path to view template.
	 *
	 * @param string $file Name of the file. No extension.
	 * @return string The path to the file.
	 */
	public static function view( $file ) {

		$path = self::get_plugin_dir();

		return $path . 'views/' . $file . '.php';
	}

	/**
	 * Get the absolute path to this plugin's root directory, with
	 * trailing slash.
	 *
	 * @return string The path.
	 */
	public static function get_plugin_dir() {
		return trailingslashit( WP_PLUGIN_DIR ) . trailingslashit( self::get_plugin_dir_name() );
	}

	/**
	 * Get the URL to this plugin's root directory, with trailing slash.
	 *
	 * @return string The URL.
	 */
	public static function get_plugin_url() {
		return trailingslashit( plugins_url( self::get_plugin_dir_name() ) );
	}

	/**
	 * Get the name of this plugin's root directory.
	 *
	 * @return string Directory name on empty string on failure.
	 */
	public static function get_plugin_dir_name() {
		$basename       = plugin_basename( __FILE__ );
		$basename_parts = explode( '/', $basename );

		if ( $basename_parts ) {
			return $basename_parts[0];
		}

		return '';
	}
}
