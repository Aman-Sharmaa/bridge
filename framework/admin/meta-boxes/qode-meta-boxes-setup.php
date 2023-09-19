<?php

if(!function_exists('bridge_qode_meta_boxes_map_init')) {
	function bridge_qode_meta_boxes_map_init() {

		do_action('bridge_qode_action_before_meta_boxes_map');

		require_once( QODE_FRAMEWORK_ROOT_DIR . "/admin/meta-boxes/slides/map.php");
		require_once( QODE_FRAMEWORK_ROOT_DIR . "/admin/meta-boxes/testimonials/map.php");
		require_once( QODE_FRAMEWORK_ROOT_DIR . "/admin/meta-boxes/carousels/map.php");
		require_once( QODE_FRAMEWORK_ROOT_DIR . "/admin/meta-boxes/masonry_gallery/map.php");
		require_once( QODE_FRAMEWORK_ROOT_DIR . "/admin/meta-boxes/general/map.php");
		require_once( QODE_FRAMEWORK_ROOT_DIR . "/admin/meta-boxes/portfolio/map.php");
		require_once( QODE_FRAMEWORK_ROOT_DIR . "/admin/meta-boxes/post/map.php");
		require_once( QODE_FRAMEWORK_ROOT_DIR . "/admin/meta-boxes/post/post-format-audio/map.php");
		require_once( QODE_FRAMEWORK_ROOT_DIR . "/admin/meta-boxes/post/post-format-gallery/map.php");
		require_once( QODE_FRAMEWORK_ROOT_DIR . "/admin/meta-boxes/post/post-format-link/map.php");
		require_once( QODE_FRAMEWORK_ROOT_DIR . "/admin/meta-boxes/post/post-format-quote/map.php");
		require_once( QODE_FRAMEWORK_ROOT_DIR . "/admin/meta-boxes/post/post-format-video/map.php");
		require_once( QODE_FRAMEWORK_ROOT_DIR . "/admin/meta-boxes/header/map.php");
		require_once( QODE_FRAMEWORK_ROOT_DIR . "/admin/meta-boxes/left-menu/map.php");
		require_once( QODE_FRAMEWORK_ROOT_DIR . "/admin/meta-boxes/footer/map.php");
		require_once( QODE_FRAMEWORK_ROOT_DIR . "/admin/meta-boxes/title/map.php");
		require_once( QODE_FRAMEWORK_ROOT_DIR . "/admin/meta-boxes/content-bottom/map.php");
		require_once( QODE_FRAMEWORK_ROOT_DIR . "/admin/meta-boxes/blog/map.php");
		require_once( QODE_FRAMEWORK_ROOT_DIR . "/admin/meta-boxes/sidebar/map.php");
		require_once( QODE_FRAMEWORK_ROOT_DIR . "/admin/meta-boxes/seo/map.php");

		do_action('bridge_qode_action_meta_boxes_map');
	}

	add_action('init', 'bridge_qode_meta_boxes_map_init');

}