<?php
if(!function_exists('bridge_qode_sidebar_layout')) {
	function bridge_qode_sidebar_layout() {

		$id = bridge_qode_get_page_id();
		$sidebar_layout						= '';
		$sidebar_layout_meta				= get_post_meta($id, "qode_show-sidebar", true);
		$archive_sidebar_layout				= bridge_qode_options()->getOptionValue( 'category_blog_sidebar' );
		$single_sidebar_layout				= bridge_qode_options()->getOptionValue( 'blog_single_sidebar' );
		$portfolio_single_sidebar_layout	= bridge_qode_options()->getOptionValue( 'portfolio_single_sidebar' );

		if ( ! empty( $sidebar_layout_meta ) && $sidebar_layout_meta != 'default') {
			$sidebar_layout = $sidebar_layout_meta;
		}

		if ( is_singular( 'post' ) && (! empty( $single_sidebar_layout ) ||  $single_sidebar_layout != 'default' ) && ( empty( $sidebar_layout_meta ) || $sidebar_layout_meta == 'default') ) {
			$sidebar_layout = $single_sidebar_layout;
		}
		if ( is_singular( 'portfolio_page' ) && (! empty( $portfolio_single_sidebar_layout ) ||  $portfolio_single_sidebar_layout != 'default') && ( empty( $sidebar_layout_meta ) || $sidebar_layout_meta == 'default')) {
			$sidebar_layout = $single_sidebar_layout;
		}

		if ( ( is_archive() || ( is_home() && is_front_page() ) ) && ! bridge_qode_is_woocommerce_page() && ! empty( $archive_sidebar_layout ) ) {
			$sidebar_layout = $archive_sidebar_layout;
		}

		switch ($sidebar_layout):
			case '1':
				$sidebar_layout_value = 'sidebar-33-right';
				break;
			case '2':
				$sidebar_layout_value = 'sidebar-25-right';
				break;
			case '3':
				$sidebar_layout_value = 'sidebar-33-left';
				break;
			case '4':
				$sidebar_layout_value = 'sidebar-25-left';
				break;
			default:
				$sidebar_layout_value = $sidebar_layout;
				break;
			endswitch;


		return apply_filters( 'bridge_qode_filter_sidebar_layout', $sidebar_layout_value );
	}
}
if(!function_exists('bridge_qode_get_content_sidebar_class')) {
	function bridge_qode_get_content_sidebar_class() {
		$sidebar_layout = bridge_qode_sidebar_layout();
		$content_class  = array( 'qode-page-content-holder' );

		switch ( $sidebar_layout ) {
			case 'sidebar-33-right':
				$content_class[] = 'qode-grid-col-8';
				break;
			case 'sidebar-25-right':
				$content_class[] = 'qode-grid-col-9';
				break;
			case 'sidebar-20-right':
				$content_class[] = 'qode-grid-col-10';
				break;
			case 'sidebar-33-left':
				$content_class[] = 'qode-grid-col-8';
				$content_class[] = 'qode-grid-col-push-4';
				break;
			case 'sidebar-25-left':
				$content_class[] = 'qode-grid-col-9';
				$content_class[] = 'qode-grid-col-push-3';
				break;
			case 'sidebar-20-left':
				$content_class[] = 'qode-grid-col-10';
				$content_class[] = 'qode-grid-col-push-2';
				break;
			default:
				$content_class[] = 'qode-grid-col-12';
				break;
		}

		return bridge_qode_get_class_attribute( $content_class );
	}
}
if(!function_exists('bridge_qode_get_sidebar_holder_class')) {
	function bridge_qode_get_sidebar_holder_class() {
		$sidebar_layout = bridge_qode_sidebar_layout();
		$sidebar_class  = array( 'qode-sidebar-holder' );

		switch ( $sidebar_layout ) {
			case 'sidebar-33-right':
				$sidebar_class[] = 'qode-grid-col-4';
				break;
			case 'sidebar-25-right':
				$sidebar_class[] = 'qode-grid-col-3';
				break;
			case 'sidebar-20-right':
				$sidebar_class[] = 'qode-grid-col-2';
				break;
			case 'sidebar-33-left':
				$sidebar_class[] = 'qode-grid-col-4';
				$sidebar_class[] = 'qode-grid-col-pull-8';
				break;
			case 'sidebar-25-left':
				$sidebar_class[] = 'qode-grid-col-3';
				$sidebar_class[] = 'qode-grid-col-pull-9';
				break;
			case 'sidebar-20-left':
				$sidebar_class[] = 'qode-grid-col-2';
				$sidebar_class[] = 'qode-grid-col-pull-10';
		}

		return bridge_qode_get_class_attribute( $sidebar_class );
	}
}
