<?php
class BridgeQodeWoocommerceDropdownCart extends WP_Widget {

	public function __construct() {
		parent::__construct(
	 		'woocommerce-dropdown-cart', // Base ID
			esc_html__('Bridge Woocommerce Dropdown Cart', 'bridge'), // Name
			array( 'description' => esc_html__( 'Display a shop cart icon with a dropdown that shows products that are in the cart', 'bridge' ), ) // Args
		);
	}

	public function widget( $args, $instance ) {
		extract( $args );
		echo wp_kses_post( $before_widget );
		global $woocommerce;
		global $bridge_qode_options;
		$cart_holder_class = 'header_cart';

		if (isset($bridge_qode_options['woo_cart_type'])){
			$cart_type = $bridge_qode_options['woo_cart_type'];
			switch ($cart_type) {
				case 'font-elegant':
					$cart_holder_class = "header_cart cart_icon";
					break;
				case 'dripicons':
					$cart_holder_class = "header_cart dripicons-cart";
					break;
				case 'font-awesome':
					$cart_holder_class = "header_cart fa fa-shopping-cart";
					break;
				default:
					$cart_holder_class = "header_cart";
					break;
			}
		}
		?>
		<div class="shopping_cart_outer">
		<div class="shopping_cart_inner">
		<div class="shopping_cart_header">
			<a class="<?php echo esc_attr($cart_holder_class);?>" href="<?php echo wc_get_cart_url(); ?>"><span class="header_cart_span"><?php echo esc_attr( WC()->cart->cart_contents_count ); ?></span></a>
			<div class="shopping_cart_dropdown">
			<div class="shopping_cart_dropdown_inner">
				<?php
					$list_class = array( 'cart_list', 'product_list_widget' );
				?>
					<ul class="<?php echo implode(' ', $list_class); ?>">
						<?php if ( ! WC()->cart->is_empty() ) : ?>
							<?php foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) :

								$_product = $cart_item['data'];

								// Only display if allowed
								if ( ! $_product->exists() || $cart_item['quantity'] == 0 ) {
									continue;
								}
								
								if ( version_compare( WOOCOMMERCE_VERSION, '3.0' ) >= 0 ) {
									$product_price = get_option( 'woocommerce_tax_display_cart' ) == 'excl' ? wc_get_price_excluding_tax( $_product ) : wc_get_price_including_tax( $_product );
									$product_price = apply_filters( 'woocommerce_cart_item_price_html', wc_price( $product_price ), $cart_item, $cart_item_key );
								} else {
									// Get price
									$product_price = get_option( 'woocommerce_tax_display_cart' ) == 'excl' ? $_product->get_price_excluding_tax() : $_product->get_price_including_tax();
									$product_price = apply_filters( 'woocommerce_cart_item_price_html', woocommerce_price( $product_price ), $cart_item, $cart_item_key );
								}
								?>

								<li>
									<a itemprop="url" href="<?php echo get_permalink( $cart_item['product_id'] ); ?>">

										<?php echo bridge_qode_get_module_part( $_product->get_image() ); ?>

										<?php echo apply_filters('woocommerce_widget_cart_product_title', $_product->get_title(), $_product ); ?>

									</a>
									
									<?php if ( version_compare( WOOCOMMERCE_VERSION, '3.3' ) >= 0 ) {
										echo wc_get_formatted_cart_item_data( $cart_item );
									} else {
										echo bridge_qode_get_module_part( $woocommerce->cart->get_item_data( $cart_item ) );
									} ?>

									<?php echo apply_filters( 'woocommerce_widget_cart_item_quantity', '<span class="quantity">' . sprintf( '%s &times; %s', $cart_item['quantity'], $product_price ) . '</span>', $cart_item, $cart_item_key ); ?>
								</li>
							<?php endforeach; ?>

						<?php else : ?>
							<li><?php esc_html_e( 'No products in the cart.', 'bridge' ); ?></li>
						<?php endif; ?>
					</ul>
				</div>
                <a itemprop="url" href="<?php echo wc_get_cart_url(); ?>" class="qbutton white view-cart"><?php esc_html_e( 'Cart', 'bridge' ); ?> <i class="fa fa-shopping-cart"></i></a>
				<span class="total"><?php esc_html_e( 'Total:', 'bridge' ); ?><span><?php wc_cart_totals_subtotal_html(); ?></span></span>
	</div>
</div>
		</div>
		</div>
	<?php
		echo wp_kses_post($after_widget);
	}
	
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		
		return $instance;
	}
}

if ( ! function_exists( 'bridge_qode_register_woocommerce_dropdown_cart_widget' ) ) {
	function bridge_qode_register_woocommerce_dropdown_cart_widget( $widgets ) {
		$widgets[] = 'BridgeQodeWoocommerceDropdownCart';
		
		return $widgets;
	}
	
	add_filter( 'bridge_core_filter_register_widgets', 'bridge_qode_register_woocommerce_dropdown_cart_widget' );
}

// WooCommerce plugin changed hooks in 3.0 version and because of that we have this condition
if ( version_compare( WOOCOMMERCE_VERSION, '3.0' ) >= 0 ) {
	add_filter( 'woocommerce_add_to_cart_fragments', 'bridge_qode_woocommerce_header_add_to_cart_fragment' );
} else {
	add_filter( 'add_to_cart_fragments', 'bridge_qode_woocommerce_header_add_to_cart_fragment' );
}
function bridge_qode_woocommerce_header_add_to_cart_fragment($fragments ) {
	ob_start();
	?>
	<span class="header_cart_span"><?php echo WC()->cart->cart_contents_count; ?></span>
	<?php
		$fragments['span.header_cart_span'] = ob_get_clean();
		return $fragments;	
}