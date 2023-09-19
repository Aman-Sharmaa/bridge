<?php

	$product = bridge_qode_return_woocommerce_global_variable();

    if ( version_compare( WOOCOMMERCE_VERSION, '3.0' ) >= 0 ) {
        $product_type = $product->get_type();
    } else {
        $product_type = $product->product_type;
    }

    if (!$product->is_in_stock()) {
        $button_classes = 'ajax_add_to_cart qode-button qode-read-more-button';
    } else if ($product_type === 'variable') {
        $button_classes = 'product_type_variable add_to_cart_button qode-button';
    } else if ($product_type === 'external') {
        $button_classes = 'product_type_external qode-button';
    } else {
        $button_classes = 'add_to_cart_button ajax_add_to_cart qode-button';
    }

	?>
	
	<div class="qode-<?php echo esc_attr($class_name); ?>-add-to-cart">
		<?php echo apply_filters( 'bridge_qode_filter_product_list_add_to_cart_link',
			sprintf( '<a rel="nofollow" href="%s" data-quantity="%s" data-product_id="%s" data-product_sku="%s" class="%s">%s</a>',
				esc_url( $product->add_to_cart_url() ),
				esc_attr( isset( $quantity ) ? $quantity : 1 ),
				esc_attr( $product-> get_id() ),
				esc_attr( $product->get_sku() ),
				esc_attr( $button_classes ),
				esc_html( $product->add_to_cart_text() )
			),
			$product ); ?>
	</div>