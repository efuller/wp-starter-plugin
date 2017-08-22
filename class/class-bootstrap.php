<?php
namespace WPSP;

class Bootstrap {

	public function __construct() {
		add_action( 'init', array( $this, 'init' ) );
	}

	public function init() {
		new \WPSP\Dependencies();
	}
}
