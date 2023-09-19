<?php

if(!function_exists('bridge_qode_woocommerce_styles')) {

    function bridge_qode_woocommerce_styles() {
		$first_color_selector = array(
			'.qode-pl-holder .qode-prl-loading .qode-prl-loading-msg',
			'.qode-pl-holder .qode-pl-categories ul li a:hover, .qode-pl-holder .qode-pl-categories ul li a.active',
			'.qode-pl-holder .qode-pli .qode-pli-rating',
			'.qode-pl-holder.qode-info-on-image:not(.qode-product-info-light) .qode-pli-category',
			'.qode-pl-holder.qode-info-on-image:not(.qode-product-info-light) .qode-pli-excerpt',
			'.qode-pl-holder.qode-info-on-image:not(.qode-product-info-light) .qode-pli-price',
			'.qode-pl-holder.qode-info-on-image:not(.qode-product-info-light) .qode-pli-rating',
			'.qode-pl-holder.qode-info-below-image .qode-pli .qode-pli-text-wrapper .qode-pli-add-to-cart a:hover'
		);

		$first_color = bridge_qode_options()->getOptionValue('first_color');
		if(!empty($first_color)) {
			echo bridge_qode_dynamic_css($first_color_selector, array('color' => $first_color));
		}

    }

    add_action('bridge_qode_action_style_dynamic', 'bridge_qode_woocommerce_styles');
}
