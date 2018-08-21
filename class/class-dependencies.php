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
	 * Run hooks.
	 *
	 * @since 1.0.0
	 */
	public function register_hooks() {
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
			App::get( 'basename' ) . '-style',
			App::get( 'plugin_url' ) . 'assets/css/main.css',
			array(),
			App::get( 'version' )
		);
	}

	/**
	 * Enqueue public scripts.
	 *
	 * @since 1.0.0
	 */
	public function enqueue_scripts() {
		wp_enqueue_script(
			App::get( 'basename' ) . '-js',
			App::get( 'plugin_url' ) . 'assets/js/main.js',
			array( 'jquery' ),
			App::get( 'version' )
		);
	}
}
