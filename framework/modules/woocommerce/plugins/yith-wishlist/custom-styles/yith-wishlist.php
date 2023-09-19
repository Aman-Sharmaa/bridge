<?php

if(!function_exists('bridge_qode_yith_wishlist_styles')) {

    function bridge_qode_yith_wishlist_styles() {
		$first_color_selector = array(
			'.qode-single-product-summary .yith-wcwl-add-to-wishlist .yith-wcwl-add-button a',
			'.qode-single-product-summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse a',
			'.qode-single-product-summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse a',
			'.qode-single-product-summary .yith-wcwl-add-to-wishlist .yith-wcwl-add-button a:after',
			'.qode-single-product-summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse a:after',
			'.qode-single-product-summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse a:after',
			'.qode-wishlist-widget-holder a'
		);

		$first_color = bridge_qode_options()->getOptionValue('first_color');
		if(!empty($first_color)) {
			echo bridge_qode_dynamic_css($first_color_selector, array('color' => $first_color));
		}

    }

    add_action('bridge_qode_action_style_dynamic', 'bridge_qode_yith_wishlist_styles');
}
