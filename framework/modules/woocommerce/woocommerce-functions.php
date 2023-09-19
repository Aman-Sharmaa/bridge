<?php
/**
 * Woocommerce helper functions
 */

if(!function_exists('bridge_qode_is_yith_wcqv_install')) {
	function bridge_qode_is_yith_wcqv_install() {
		return defined('YITH_WCQV');
	}
}

if(!function_exists('bridge_qode_is_yith_wcwl_install')) {
	function bridge_qode_is_yith_wcwl_install() {
		return defined('YITH_WCWL');
	}
}

if(!function_exists('bridge_qode_get_woo_shortcode_module_template_part')) {
	/**
	 * Loads module template part.
	 *
	 * @param string $template name of the template to load
	 * @param string $module name of the module folder
	 * @param string $slug
	 * @param array $params array of parameters to pass to template
	 *
	 * @return html
	 * @see bridge_qode_get_template_part()
	 */
	function bridge_qode_get_woo_shortcode_module_template_part($template, $module, $slug = '', $params = array()) {

		//HTML Content from template
		$html          = '';
		$template_path = 'framework/modules/woocommerce/shortcodes/'.$module;

		$temp = $template_path.'/'.$template;

		if(is_array($params) && count($params)) {
			extract($params);
		}

		$templates = array();

		if($temp !== '') {
			if($slug !== '') {
				$templates[] = "{$temp}-{$slug}.php";
			}

			$templates[] = $temp.'.php';
		}
		$located = bridge_qode_find_template_path($templates);
		if($located) {
			ob_start();
			include($located);
			$html = ob_get_clean();
		}

		return $html;
	}
}

if(!function_exists('bridge_qode_return_woocommerce_global_variable')) {
	function bridge_qode_return_woocommerce_global_variable() {
		if(bridge_qode_is_woocommerce_installed()) {
			global $product;

			return $product;
		}
	}
}

if(!function_exists('bridge_qode_woocommerce_sale_percentage')) {
	/**
	 * Function that social share for product page
	 * Return string
	 */
	function bridge_qode_woocommerce_sale_percentage($price, $sale_price){
		if($price > 0) {
			return '-' . (100 - round(($sale_price * 100) / $price)) . '%';
		}else{
			return esc_html__('SALE', 'bridge');
		}
	}
}

if (!function_exists('bridge_qode_woocommerce_share_wish_tag_before')) {
	/**
	 * Function that adds tag before share and like section
	 */
	function bridge_qode_woocommerce_share_wish_tag_before() {
		print '<div class="qode-single-product-share-wish">';
	}
}

if (!function_exists('bridge_qode_woocommerce_share_wish_tag_after')) {
	/**
	 * Function that adds tag before share and like section
	 */
	function bridge_qode_woocommerce_share_wish_tag_after() {
		print '</div>';
	}
}

/**
 * Loads more function for portfolio.
 */
if(!function_exists('bridge_qode_product_ajax_load_category')) {
	function bridge_qode_product_ajax_load_category() {
		$shortcode_params = array();

		check_ajax_referer('bridge_qode_load_cat_nonce', 'categoryNonce');
		if(!empty($_POST)) {
			foreach ($_POST as $key => $value) {
				if($key !== '') {
					$addUnderscoreBeforeCapitalLetter = preg_replace('/([A-Z])/', '_$1', $key);
					$setAllLettersToLowercase = strtolower($addUnderscoreBeforeCapitalLetter);

					$shortcode_params[$setAllLettersToLowercase] = $value;
				}
			}
		}

		$html = '';

		$product_list = new \Bridge\Shortcodes\ProductList\ProductList();

		$query_array = $product_list->generateProductQueryArray($shortcode_params);
		$query_results = new \WP_Query($query_array);

		if($query_results->have_posts()): while ($query_results->have_posts()) : $query_results->the_post();
			$html .= bridge_core_get_shortcode_template_part('templates/parts/'.$shortcode_params['info_position'], 'product-list', '', $shortcode_params);
		endwhile; else:
			$html .= '<p class="qode-no-posts">'.esc_html__('No products were found!', 'bridge').'</p>';
		endif;
		wp_reset_postdata();

		$return_obj = array(
			'html' => $html,
		);

		echo json_encode($return_obj); exit;
	}

	add_action('wp_ajax_nopriv_bridge_qode_product_ajax_load_category', 'bridge_qode_product_ajax_load_category');
	add_action( 'wp_ajax_bridge_qode_product_ajax_load_category', 'bridge_qode_product_ajax_load_category' );
}

if(!function_exists('bridge_qode_product_single_enable_default_gallery_features')) {
	function bridge_qode_product_single_enable_default_gallery_features() {

		$default_woo_features = bridge_qode_options()->getOptionValue('default_woo_features');
		$single_product_type = bridge_qode_options()->getOptionValue('woo_product_single_type');
		if(!empty($default_woo_features) && $default_woo_features == 'yes' && $single_product_type != 'wide-gallery'){
			add_theme_support('wc-product-gallery-zoom');
			add_theme_support('wc-product-gallery-lightbox');
			add_theme_support('wc-product-gallery-slider');
		}
	}

	add_action('init', 'bridge_qode_product_single_enable_default_gallery_features');
}


