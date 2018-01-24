<?php
/**
 * The plugin App.
 *
 * @package WPSP
 * @since 1.0.0
 */

namespace WPSP;

/**
 * Main App class.
 *
 * Dependency injection container.
 *
 * @since 1.0.0
 */
class App {

	/**
	 * Registered dependencies.
	 *
	 * @static
	 *
	 * @var array
	 *
	 * @since 1.0.0
	 */
	protected static $registry = array();

	/**
	 * Register a new dependency.
	 *
	 * @static
	 *
	 * @param string $key   Name of the dependency.
	 * @param mixed  $value The dependency being registered.
	 *
	 * @since 1.0.0
	 */
	public static function bind( $key, $value ) {
		static::$registry[ $key ] = $value;
	}

	/**
	 * Get a dependency.
	 *
	 * @static
	 *
	 * @param $key
	 * @throws \Exception If no key is provided.
	 *
	 * @since 1.0.0
	 *
	 * @return mixed
	 */
	public static function get( $key ) {
		if ( ! array_key_exists( $key, static::$registry ) ) {
			throw new \Exception( 'There was no key registered!' );
		}

		return static::$registry[ $key ];
	}

	/**
	 * Helper that returns the registered dependencies.
	 *
	 * @since 1.0.0
	 *
	 * @return array $registry Current dependencies.
	 */
	public function get_registry() {
		return static::$registry;
	}
}
