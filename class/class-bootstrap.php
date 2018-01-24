<?php
/**
 * Bootstrap for the plugin.
 *
 * @package WPSP
 * @since 1.0.0
 */

namespace WPSP;

/**
 * Bootstrap Class
 *
 * @since 1.0.0
 */
class Bootstrap {

	/**
	 * Constructor. Initialize the plugin.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'init' ) );
	}

	/**
	 * Initialize method.
	 *
	 * @since 1.0.0
	 */
	public function init() {
		App::bind( 'dependencies', new Dependencies() );
	}
}
