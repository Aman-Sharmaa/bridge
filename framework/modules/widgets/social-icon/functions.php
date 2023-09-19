<?php
if ( ! function_exists( 'bridge_qode_register_social_icon_widget' ) ) {
	/**
	 * Function that register social icon widget
	 */
	function bridge_qode_register_social_icon_widget( $widgets ) {
		$widgets[] = 'BridgeQodeSocialIcon';

		return $widgets;
	}

	add_filter( 'bridge_core_filter_register_widgets', 'bridge_qode_register_social_icon_widget' );
}