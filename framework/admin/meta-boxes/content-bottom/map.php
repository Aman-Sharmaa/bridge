<?php
if(!function_exists('bridge_qode_map_content_bottom_meta_fields')) {

	function bridge_qode_map_content_bottom_meta_fields() {

		$qode_custom_sidebars = bridge_qode_get_custom_sidebars();

		$qodeContentBottom = bridge_qode_create_meta_box(
			array(
				'scope'	=> array('page', 'portfolio_page', 'post'),
				'title'	=> esc_html__('Qode Content Bottom', 'bridge'),
				'name'	=> 'page_content_bottom'
			)
		);

		$qode_enable_content_bottom_area = new BridgeQodeMetaField("selectblank","qode_enable_content_bottom_area","",esc_html__('Show Content Bottom Area', 'bridge'),esc_html__('Do you want to show content bottom area?', 'bridge'), array(
			"no"	=> esc_html__('No', 'bridge'),
			"yes"	=> esc_html__('Yes', 'bridge')
		),
			array("dependence" => true,
				"hide" => array(
					"no"=>"#qodef_qode_enable_content_bottom_area_container",
					""=>"#qodef_qode_enable_content_bottom_area_container"),
				"show" => array(
					"yes"=>"#qodef_qode_enable_content_bottom_area_container") ));
		$qodeContentBottom->addChild("qode_enable_content_bottom_area",$qode_enable_content_bottom_area);

		$qode_enable_content_bottom_area_container = new BridgeQodeContainer("qode_enable_content_bottom_area_container","qode_enable_content_bottom_area","no",array("", "no"));
		$qodeContentBottom->addChild("qode_enable_content_bottom_area_container",$qode_enable_content_bottom_area_container);

		$qode_content_bottom_background_color = new BridgeQodeMetaField("color","qode_content_bottom_background_color","", esc_html__('"Background Color', 'bridge'), esc_html__('Choose a color for content bottom area', 'bridge'));
		$qode_enable_content_bottom_area_container->addChild("qode_content_bottom_background_color",$qode_content_bottom_background_color);

		$qode_choose_content_bottom_sidebar = new BridgeQodeMetaField("selectblank","qode_choose_content_bottom_sidebar","", esc_html__('Custom Widget', 'bridge'), esc_html__('Choose Custom Widget area to display', 'bridge'),$qode_custom_sidebars);
		$qode_enable_content_bottom_area_container->addChild("qode_choose_content_bottom_sidebar",$qode_choose_content_bottom_sidebar);

		$qode_content_bottom_sidebar_in_grid = new BridgeQodeMetaField("selectblank","qode_content_bottom_sidebar_in_grid","", esc_html__('Display in Grid', 'bridge'), esc_html__('Enabling this option will place Content Bottom in grid', 'bridge'),array(
			"no"	=> esc_html__('No', 'bridge'),
			"yes"	=> esc_html__('Yes', 'bridge')
		));
		$qode_enable_content_bottom_area_container->addChild("qode_content_bottom_sidebar_in_grid",$qode_content_bottom_sidebar_in_grid);

	}

	add_action('bridge_qode_action_meta_boxes_map', 'bridge_qode_map_content_bottom_meta_fields');
}