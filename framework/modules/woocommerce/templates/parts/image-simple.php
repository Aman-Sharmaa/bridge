<?php
if ( version_compare( WOOCOMMERCE_VERSION, '3.3' ) >= 0 ) {
	$product_image_size = 'woocommerce_thumbnail';
} else {
	$product_image_size = 'shop_thumbnail';
}
if(has_post_thumbnail()) {
	the_post_thumbnail(apply_filters( 'qode_product_list_image_simple_size', $product_image_size));
}