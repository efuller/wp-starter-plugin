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
	 * Current version.
	 *
	 * @var string
	 * @since 1.0.0
	 */
	const VERSION = '1.0.0';

	/**
	 * Main plugin file.
	 *
	 * @var string
	 * @since 1.0.0
	 */
	protected $plugin_file = '';

	/**
	 * Constructor. Initialize the plugin.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {

		$this->plugin_file = dirname( __FILE__ );

		add_action( 'init', array( $this, 'init' ) );
	}

	/**
	 * Initialize method.
	 *
	 * @since 1.0.0
	 */
	public function init() {
		App::bind( 'version', self::VERSION );
		App::bind( 'plugin_directory_url', plugin_dir_url( $this->plugin_file ) );
		App::bind( 'plugin_directory_path', plugin_dir_path( $this->plugin_file ) );
		App::bind( 'basename', basename( dirname( $this->plugin_file ) ) );
		App::bind( 'dependencies', new Dependencies() );
	}
}
