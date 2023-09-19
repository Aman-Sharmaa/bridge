<?php
if(!class_exists('BridgeQodeYithWishlist')) {
	class BridgeQodeYithWishlist extends WP_Widget {
		public function __construct() {
			parent::__construct(
				'qode_woocommerce_yith_wishlist',
				esc_html__('Bridge Woocommerce Wishlist', 'bridge'),
				array('description' => esc_html__('Display a wishlist icon with number of products that are in the wishlist', 'bridge'),)
			);
		}

		/**
		 * @param array $new_instance
		 * @param array $old_instance
		 *
		 * @return array
		 */
		public function update($new_instance, $old_instance) {
			$instance = array();
			foreach ($this->params as $param) {
				$param_name = $param['name'];

				$instance[$param_name] = sanitize_text_field($new_instance[$param_name]);
			}

			return $instance;
		}

		public function widget($args, $instance) {
			extract($args);

			global $yith_wcwl;

			?>
			<div class="qode-wishlist-widget-holder">
				<a href="<?php echo esc_url($yith_wcwl->get_wishlist_url()); ?>" class="qode-wishlist-widget-link">
					<span class="qode-wishlist-widget-icon"><i class="icon_heart_alt"></i></span>
					<span
						class="qode-wishlist-items-number">(<span><?php echo yith_wcwl_count_products(); ?></span>)</span>
				</a>
			</div>
			<?php
		}
	}
}
if ( ! function_exists( 'bridge_qode_register_qode_yith_wishlist_widget' ) ) {

	function bridge_qode_register_qode_yith_wishlist_widget( $widgets ) {
		$widgets[] = 'BridgeQodeYithWishlist';

		return $widgets;
	}

	add_filter( 'bridge_core_filter_register_widgets', 'bridge_qode_register_qode_yith_wishlist_widget' );
}