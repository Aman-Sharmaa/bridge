<?php
if ( ! function_exists( 'bridge_qode_register_latest_posts_widget' ) ) {
	/**
	 * Function that register latest posts widget
	 */
	function bridge_qode_register_latest_posts_widget( $widgets ) {
		$widgets[] = 'BridgeQodeLatestPosts';

		return $widgets;
	}

	add_filter( 'bridge_core_filter_register_widgets', 'bridge_qode_register_latest_posts_widget' );
}