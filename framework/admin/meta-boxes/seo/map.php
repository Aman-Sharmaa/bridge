<?php
if(!function_exists('bridge_qode_map_seo_meta_fields')) {

	function bridge_qode_map_seo_meta_fields() {
		$qodeSeo = bridge_qode_create_meta_box(
			array(
				'scope' => array('page', 'portfolio_page', 'post'),
				'title' => esc_html__('Qode SEO', 'bridge'),
				'name' => 'page_seo'
			)
		);

		$seo_title = new BridgeQodeMetaField("text","qode_seo_title","",esc_html__( 'SEO Title', 'bridge'),esc_html__( 'Enter custom Title for this page', 'bridge'));
		$qodeSeo->addChild("qode_seo_title",$seo_title);

		$seo_keywords = new BridgeQodeMetaField("text","qode_seo_keywords","",esc_html__( 'Meta Keywords', 'bridge'),esc_html__( 'Enter the list of keywords separated by comma', 'bridge'));
		$qodeSeo->addChild("qode_seo_keywords",$seo_keywords);

		$seo_description = new BridgeQodeMetaField("textarea","qode_seo_description","",esc_html__( 'Meta Description','bridge'),esc_html__( 'Enter meta description for this page', 'bridge'));
		$qodeSeo->addChild("qode_seo_description",$seo_description);

	}

	add_action('bridge_qode_action_meta_boxes_map', 'bridge_qode_map_seo_meta_fields');
}