<?php
/**
 * Core function.
 * 
 * @package Elegant_FAQ/Classes
 * @author  Ismail Saad
 */

defined( 'ABSPATH' ) || exit;

class EFAQ_Shortcode_Handler {
	public function __construct() {
		add_shortcode( 'efaq', array( $this, 'render' ) );
	}

	public function render( $atts ) {
		$options = shortcode_atts( array(
			'template' => 'basic',
		), $atts );

		if ( $options['template'] === 'grid' ) {
			include EFAQ_ROOT_PATH . '/templates/grid.php';
		} else {
			include EFAQ_ROOT_PATH . '/templates/basic.php';
		}
	}
}

new EFAQ_Shortcode_Handler();