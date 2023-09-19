<?php
if(!function_exists('bridge_qode_get_blog_single_params')) {
	function bridge_qode_get_blog_single_params() {
		global $bridge_qode_options;
		$params = array();

		$id = bridge_qode_get_page_id();

		$chosen_sidebar = get_post_meta($id, "qode_show-sidebar", true);
		$default_array = array('default', '');

		if(!in_array($chosen_sidebar, $default_array)){
			$params['sidebar'] = get_post_meta($id, "qode_show-sidebar", true);
		}else{
			$params['sidebar'] = bridge_qode_options()->getOptionValue('blog_single_sidebar');
		}

		$params['blog_hide_comments'] = "";
		if (isset($bridge_qode_options['blog_hide_comments']))
			$params['blog_hide_comments'] = $bridge_qode_options['blog_hide_comments'];

		if(get_post_meta($id, "qode_page_background_color", true) != ""){
			$params['background_color'] = get_post_meta($id, "qode_page_background_color", true);
		}else{
			$params['background_color'] = "";
		}

		$params['content_style_spacing'] = "";
		if(get_post_meta($id, "qode_margin_after_title", true) != ""){
			if(get_post_meta($id, "qode_margin_after_title_mobile", true) == 'yes'){
				$params['content_style_spacing'] = "padding-top:".esc_attr(get_post_meta($id, "qode_margin_after_title", true))."px !important";
			}else{
				$params['content_style_spacing'] = "padding-top:".esc_attr(get_post_meta($id, "qode_margin_after_title", true))."px";
			}
		}
		$params['single_type'] = bridge_qode_get_meta_field_intersect('blog_single_type');
		$params['single_loop'] = 'blog_single';
		$params['single_grid'] = 'yes';
		$params['single_class'] = array('blog_single', 'blog_holder');
		if($params['single_type'] == 'image-title-post'){
			$params['single_loop'] = 'blog-single-image-title-post';
			$params['single_grid'] = 'no';
			$params['single_class'][] = 'single_image_title_post';
		}

		return $params;
	}
}

if ( ! function_exists('bridge_qode_return_post_format') ) {
	/**
	 * Function return all parts on single.php page
	 */
	function bridge_qode_return_post_format() {
		$post_format            = get_post_format();
		$supported_post_formats = array( 'audio', 'video', 'link', 'quote', 'gallery' );
		$post_format            = in_array( $post_format, $supported_post_formats ) ? $post_format : 'standard';

		return $post_format;
	}
}