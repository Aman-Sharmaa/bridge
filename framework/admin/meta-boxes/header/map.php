<?php
if(!function_exists('bridge_qode_map_header_meta_fields')) {

	function bridge_qode_map_header_meta_fields() {

		$qodeHeaderScopeArray = apply_filters('bridge_qode_filter_header_scope_post_types', array('page', 'post', 'portfolio_page'));
		$qodeHeader = bridge_qode_create_meta_box(
			array(
				'scope' => $qodeHeaderScopeArray,
				'title' => esc_html__('Qode Header', 'bridge'),
				'name' => 'page_header',
				'hidden_property' => 'vertical_area',
				'hidden_values' => array('yes')
			)
		);

		$qode_header_style = new BridgeQodeMetaField("selectblank","qode_header-style","",esc_html__( 'Header Skin', 'bridge'),esc_html__( 'Choose a header style to make header elements (logo, main menu, side menu button) in that predefined style', 'bridge'), array(
			"light"	=> esc_html__( 'Light', 'bridge'),
			"dark"	=> esc_html__( 'Dark', 'bridge')
		));
		$qodeHeader->addChild("qode_header-style",$qode_header_style);

		$qode_header_style_on_scroll = new BridgeQodeMetaField("selectblank","qode_header-style-on-scroll","",esc_html__( 'Enable Header Style on Scroll', 'bridge'),esc_html__( 'Enabling this option, header will change style on scroll (depending on row settings) to make header elements (logo, main menu, side menu button) in that style', 'bridge'), array(
			'no'	=> esc_html__( 'No', 'bridge' ),
			'yes'	=> esc_html__( 'Yes', 'bridge' )
		));
		$qodeHeader->addChild("qode_header-style-on-scroll",$qode_header_style_on_scroll);

		$qode_header_color_per_page = new BridgeQodeMetaField("color","qode_header_color_per_page","",esc_html__( 'Initial Header Background Color', 'bridge'), esc_html__( 'Choose a background color for header area','bridge'));
		$qodeHeader->addChild("qode_header_color_per_page",$qode_header_color_per_page);

		$qode_header_color_transparency_per_page = new BridgeQodeMetaField("text","qode_header_color_transparency_per_page","",esc_html__( 'Initial Header Transparency', 'bridge'),esc_html__( 'Choose a transparency for the header background color (0 = fully transparent, 1 = opaque)', 'bridge'), array(), array("col_width" => 3));
		$qodeHeader->addChild("qode_header_color_transparency_per_page",$qode_header_color_transparency_per_page);

		$qode_page_scroll_amount_for_sticky = new BridgeQodeMetaField("text","qode_page_scroll_amount_for_sticky","",esc_html__( 'Scroll amount for sticky header appearance (px)','bridge'),esc_html__( 'Define scroll amount for sticky header appearance', 'bridge'), array(), array("col_width" => 3),"header_bottom_appearance",array( "regular","fixed","fixed_hiding") );
		$qodeHeader->addChild("qode_page_scroll_amount_for_sticky",$qode_page_scroll_amount_for_sticky);

		$qode_page_hide_initial_sticky = new BridgeQodeMetaField("selectblank","qode_page_hide_initial_sticky","",esc_html__( 'Hide Sticky Header Initially', 'bridge'),esc_html__( 'Enabling this option will initially hide the header, and it will only be displayed when the user scrolls down the page', 'bridge'), array(
			'no'	=> esc_html__( 'No', 'bridge' ),
			'yes'	=> esc_html__( 'Yes', 'bridge' )
		));
		$qodeHeader->addChild("qode_page_hide_initial_sticky",$qode_page_hide_initial_sticky);


	}

	add_action('bridge_qode_action_meta_boxes_map', 'bridge_qode_map_header_meta_fields');
}