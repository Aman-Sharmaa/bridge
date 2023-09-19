<?php

if(!function_exists('bridge_qode_map_page_meta_fields')) {

	function bridge_qode_map_page_meta_fields() {

		// Layout
		$page_layout_meta_box = bridge_qode_create_meta_box(
			array(
				'scope' => array('page'),
				'title' => esc_html__('Qode Page Options', 'bridge'),
				'name' => 'page_options'
			)
		);

		bridge_qode_create_meta_box_field(array(
			'parent'        => $page_layout_meta_box,
			'type'          => 'select',
			'name'          => 'inter_page_navigation_meta',
			'default_value' => '',
			'label'         => esc_html__('Inter-Page Navigation','bridge'),
			'description'   => esc_html__('Enabling this option will add a navigation section to the bottom of your page with "Previous" and "Next" buttons, which users can use to navigate through your pages. Please note that the navigation will only lead through pages in the same hierarchical level (e.g. if you have a parent page called "Home" and then 3 child pages on which you have enabled the navigation, it will only lead through the child pages).','bridge'),
			'options'       => array(
				""		=> esc_html__("Default",'bridge'),
				"yes"	=> esc_html__("Yes",'bridge'),
				"no"	=> esc_html__("No",'bridge')
			),
			'args'          => array(
				"dependence" => true,
				"hide"       => array(
					""    => "#qodef_qode_inter_page_container",
					"no"  => "#qodef_qode_inter_page_container",
					"yes" => ""
				),
				"show"       => array(
					""    => "",
					"no"  => "",
					"yes" => "#qodef_qode_inter_page_container"
				)
			)
		));

		$inter_page_container = bridge_qode_add_admin_container(
			array(
				'name' => 'qode_inter_page_container',
				'hidden_property' => 'inter_page_navigation_meta',
				'hidden_values' => array('', 'no'),
				'parent' => $page_layout_meta_box,
			)
		);

		$qode_pages = array(
			''			=> esc_html__('Default', 'bridge'),
			'no-link'	=> esc_html__('No Link', 'bridge')
		);
		$pages = get_pages();
		foreach($pages as $page) {
			$qode_pages[$page->ID] = $page->post_title;
		}

		bridge_qode_create_meta_box_field(array(
			'parent'        => $inter_page_container,
			'type'          => 'select',
			'name'          => 'inter_page_back_link_meta',
			'default_value' => '',
			'label'         => esc_html__('"Back To" Link','bridge'),
			'description'	=> esc_html__('Choose a page for the "back to" link to lead to when clicked on.', 'bridge'),
			'options'       => $qode_pages

		));

	}

	add_action('bridge_qode_action_meta_boxes_map', 'bridge_qode_map_page_meta_fields');
}