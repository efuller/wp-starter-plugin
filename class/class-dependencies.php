<?php
/**
 * Dependencies for the plugin.
 *
 * @package WPSP
 * @since 1.0.0
 */

namespace WPSP;

/**
 * Class Dependencies.
 *
 * @package WPSP
 * @since 1.0.0
 */
class Dependencies {

	/**
	 * Constructor.
	 *
	 * Add scripts and styles.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		// Enqueue styles.
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_styles' ) );
		// Enqueue scripts.
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
	}

	/**
	 * Enqueue public styles.
	 *
	 * @since 1.0.0
	 */
	public function enqueue_styles() {
		wp_enqueue_style(
			'wp-starter-plugin-styles',
			plugins_url( 'wp-starter-plugin/assets/css/main.css' ),
			array(),
			'0.1.0'
		);
	}

	/**
	 * Enqueue public scripts.
	 *
	 * @since 1.0.0
	 */
	public function enqueue_scripts() {
		wp_enqueue_script(
			'wp-starter-plugin-js',
			plugins_url( 'wp-starter-plugin/assets/js/main.js' ),
			array( 'jquery' ),
			'0.1.0'
		);
	}
}
