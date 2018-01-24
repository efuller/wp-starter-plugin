<?php

namespace WPSP;

class App {

	/**
	 * Registered dependencies.
	 *
	 * @static
	 * @var array
	 */
	protected static $registry = array();

	/**
	 * Register a new dependency.
	 *
	 * @static
	 * @param string $key   Name of the dependency.
	 * @param mixed  $value The dependency being registered.
	 */
	public static function bind( $key, $value ) {
		static::$registry[ $key ] = $value;
	}

	/**
	 * Get a dependency
	 *
	 * @static
	 * @param $key
	 * @throws \Exception If no key is provided.
	 *
	 * @return mixed
	 */
	public static function get( $key ) {
		if ( ! array_key_exists( $key, static::$registry ) ) {
			throw new \Exception( 'There was no key registered!' );
		}

		return static::$registry[ $key ];
	}
}
