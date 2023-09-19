<?php
if ( ! function_exists( 'bridge_qode_register_latest_posts_menu_widget' ) ) {
	/**
	 * Function that register latest posts menu widget
	 */
	function bridge_qode_register_latest_posts_menu_widget( $widgets ) {
		$widgets[] = 'BridgeQodeLatestPostsMenu';

		return $widgets;
	}

	add_filter( 'bridge_core_filter_register_widgets', 'bridge_qode_register_latest_posts_menu_widget' );
}