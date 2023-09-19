<?php
if(!function_exists('bridge_qode_map_sidebar_meta_fields')) {

	function bridge_qode_map_sidebar_meta_fields() {

		$qode_custom_sidebars = bridge_qode_get_custom_sidebars();

		$qodeSideBarScopeArray = apply_filters('bridge_qode_filter_sidebar_scope_post_types', array('page', 'post', 'portfolio_page'));

		$qodeSideBar = bridge_qode_create_meta_box(
			array(
				'scope' => $qodeSideBarScopeArray,
				'title' => esc_html__('Qode Sidebar', 'bridge'),
				'name' => 'page_side_bar'
			)
		);

		$qode_show_sidebar = new BridgeQodeMetaField("select","qode_show-sidebar","default",esc_html__( 'Layout', 'bridge'),esc_html__( 'Choose the sidebar layout', 'bridge'),
			array(
				"default"	=> esc_html__( "Default", 'bridge'),
				"1"			=> esc_html__( "Sidebar 1/3 right", 'bridge'),
				"2"			=> esc_html__( "Sidebar 1/4 right", 'bridge'),
				"3"			=> esc_html__( "Sidebar 1/3 left", 'bridge'),
				"4"			=> esc_html__( "Sidebar 1/4 left", 'bridge')
		));
		$qodeSideBar->addChild("qode_show-sidebar",$qode_show_sidebar);

		$qode_choose_sidebar = new BridgeQodeMetaField("selectblank","qode_choose-sidebar","default",esc_html__( 'Choose Widget Area in Sidebar','bridge'),esc_html__( 'Choose Custom Widget area to display in Sidebar', 'bridge'), $qode_custom_sidebars);
		$qodeSideBar->addChild("qode_choose-sidebar",$qode_choose_sidebar);

	}

	add_action('bridge_qode_action_meta_boxes_map', 'bridge_qode_map_sidebar_meta_fields');
}