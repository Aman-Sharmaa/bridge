<?php
$product = bridge_qode_return_woocommerce_global_variable();

if ($display_price === 'yes' &&  $price_html = $product->get_price_html()) { ?>
	<div class="qode-<?php echo esc_attr($class_name); ?>-price"><?php print bridge_qode_get_module_part( $price_html ); ?></div>
<?php } ?>