<?php
if ( ! function_exists( 'bridge_qode_register_sticky_sidebar_widget' ) ) {
	/**
	 * Function that register sticky sidebar widget
	 */
	function bridge_qode_register_sticky_sidebar_widget( $widgets ) {

		$widgets[] = 'BridgeQodeStickySidebar';

		return $widgets;
	}

	add_filter( 'bridge_core_filter_register_widgets', 'bridge_qode_register_sticky_sidebar_widget' );
}