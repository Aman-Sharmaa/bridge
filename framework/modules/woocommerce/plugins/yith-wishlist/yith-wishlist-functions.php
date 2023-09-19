<?php

if(!function_exists('bridge_qode_is_yith_wishlist_installed')) {
	function bridge_qode_is_yith_wishlist_installed() {
		return defined('YITH_WCWL');
	}
}

if(!function_exists('bridge_qode_woocommerce_wishlist_shortcode')) {
	function bridge_qode_woocommerce_wishlist_shortcode() {

		if(bridge_qode_is_yith_wishlist_installed()) {
			echo do_shortcode('[yith_wcwl_add_to_wishlist]');
		}
	}
}

if(!function_exists('bridge_qode_product_ajax_wishlist')) {
	function bridge_qode_product_ajax_wishlist(){

		$data = array(
			'wishlist_count_products' => class_exists('YITH_WCWL') ? yith_wcwl_count_products() : 0
		);
		wp_send_json($data); exit;
	}

	add_action('wp_ajax_bridge_qode_product_ajax_wishlist', 'bridge_qode_product_ajax_wishlist');
	add_action('wp_ajax_nopriv_bridge_qode_product_ajax_wishlist', 'bridge_qode_product_ajax_wishlist');
}

