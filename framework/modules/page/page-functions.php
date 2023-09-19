<?php
if(!function_exists('bridge_qode_inter_page_navigation')) {

	function bridge_qode_inter_page_navigation() {

		$navigation = bridge_qode_get_meta_field_intersect('inter_page_navigation');

		$page_id = bridge_qode_get_page_id();
		$params = array();
		$parent_id = wp_get_post_parent_id($page_id);
		if($parent_id != 0) {

			$order_by = bridge_qode_options()->getOptionValue('inter_page_order_by');

			$pagelist = get_pages('post_type=page&child_of='.$parent_id.'&sort_column='.$order_by);
			$pages = array();
			foreach ($pagelist as $page) {
				$pages[] += $page->ID;
			}
			$current = array_search($page_id, $pages);
			if(isset( $pages[$current - 1])) {
				$params['prev_id'] = $pages[$current - 1];
			}
			if(isset( $pages[$current+1])) {
				$params['next_id'] = $pages[$current + 1];
			}
		}

		$back_to_link = bridge_qode_get_meta_field_intersect('inter_page_back_link');
		$params['in_grid'] = bridge_qode_options()->getOptionValue('inter_page_navigation_in_grid');
		$gradient = bridge_qode_options()->getOptionValue('inter_page_icons_gradient');

		if($back_to_link != 'no-link') {
			$params['back_page_id'] = $back_to_link;
		}
		$params['arrows_gradient_class'] = '';
		$params['back_gradient_class'] = '';
		if($gradient == 'yes') {
			$params['arrows_gradient_class'] = 'qode-type1-gradient-bottom-to-top-text';
			$params['back_gradient_class'] = 'qode-type1-gradient-left-to-right';
		}

		if($navigation == 'yes'){
			echo bridge_qode_get_module_template_part('templates/inter-page-navigation', 'page', '', $params);
		}



	}

	add_action('bridge_qode_action_page_after_container','bridge_qode_inter_page_navigation');

}