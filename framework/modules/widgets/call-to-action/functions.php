<?php
if ( ! function_exists( 'bridge_qode_register_call_to_action_widget' ) ) {
	/**
	 * Function that register call to action widget
	 */
	function bridge_qode_register_call_to_action_widget( $widgets ) {
		$widgets[] = 'BridgeQodeCallToAction';

		return $widgets;
	}

	add_filter( 'bridge_core_filter_register_widgets', 'bridge_qode_register_call_to_action_widget' );
}