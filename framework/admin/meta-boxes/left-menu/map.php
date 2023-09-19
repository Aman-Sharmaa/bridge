<?php
if(!function_exists('bridge_qode_map_left_menu_meta_fields')) {

	function bridge_qode_map_left_menu_meta_fields() {
		$qodeLeftMenuArea = bridge_qode_create_meta_box(
			array(
				'scope' => array('page', 'portfolio_page', 'post'),
				'title' => esc_html__('Qode Left Menu Area', 'bridge'),
				'name' => 'page_left_menu',
				'hidden_property' => 'vertical_area',
				'hidden_values' => array('no')
			)
		);


		$qode_page_vertical_area_transparency = new BridgeQodeMetaField("selectblank","qode_page_vertical_area_transparency","",esc_html__( 'Enable transparent left menu area', 'bridge'), esc_html__( 'Enabling this option will make Left Menu background transparent', 'bridge'), array(
			'no'	=> esc_html__( 'No', 'bridge' ),
			'yes'	=> esc_html__( 'Yes', 'bridge' )
		));
		$qodeLeftMenuArea->addChild("qode_page_vertical_area_transparency",$qode_page_vertical_area_transparency);

		$qode_page_vertical_area_background = new BridgeQodeMetaField("color","qode_page_vertical_area_background","", esc_html__( 'Left Menu Area Background Color', 'bridge'), esc_html__( 'Choose a color for Left Menu background', 'bridge'));
		$qodeLeftMenuArea->addChild("qode_page_vertical_area_background",$qode_page_vertical_area_background);

		$qode_page_vertical_area_background_image = new BridgeQodeMetaField("image","qode_page_vertical_area_background_image","", esc_html__( 'Left Menu Area Background Image', 'bridge'), esc_html__( 'Choose an image for Left Menu background', 'bridge'));
		$qodeLeftMenuArea->addChild("qode_page_vertical_area_background_image",$qode_page_vertical_area_background_image);


	}

	add_action('bridge_qode_action_meta_boxes_map', 'bridge_qode_map_left_menu_meta_fields');
}