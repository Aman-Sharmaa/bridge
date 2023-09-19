<?php

if(!function_exists('bridge_qode_add_tt_event_single_to_meta_boxes')) {

	function bridge_qode_add_tt_event_single_to_meta_boxes($metaboxes) {
		$metaboxes[] = 'events';
		return $metaboxes;
	}

	add_filter('bridge_qode_filter_meta_box_post_types_save', 'bridge_qode_add_tt_event_single_to_meta_boxes');
}
if(!function_exists('bridge_qode_add_tt_event_to_metaboxes')) {

	function bridge_qode_add_tt_event_to_metaboxes($post_types) {
		$post_types[] = 'events';
		return $post_types;
	}

	add_filter('bridge_qode_filter_sidebar_scope_post_types', 'bridge_qode_add_tt_event_to_metaboxes');
	add_filter('bridge_qode_filter_header_scope_post_types', 'bridge_qode_add_tt_event_to_metaboxes');
	add_filter('bridge_qode_filter_title_scope_post_types', 'bridge_qode_add_tt_event_to_metaboxes');
}


if(!function_exists('bridge_qode_tt_event_single_content')) {
	/**
	 * Loads timetable single event page
	 */
	function bridge_qode_tt_event_single_content() {
		$id = get_the_ID();

		$subtitle = get_post_meta($id, 'timetable_subtitle', true);

		$params = array(
			'subtitle' => $subtitle
		);

		bridge_qode_get_module_template_part('templates/events-single', 'timetable-schedule', '', $params);
	}
}

if(!function_exists('bridge_qode_register_timetable_event_sidebar')) {
	/**
	 * Function that registers sidebar
	 */
	function bridge_qode_register_timetable_event_sidebar() {
		register_sidebar(array(
			'name' => 'Sidebar Event',
			'id' => 'sidebar-event',
			'before_widget' => '<div id="%1$s" class="widget %2$s posts_holder">',
			'after_widget' => '</div>',
			'before_title' => '<h5>',
			'after_title' => '</h5>'
		));
	}

	add_action('widgets_init', 'bridge_qode_register_timetable_event_sidebar');
}