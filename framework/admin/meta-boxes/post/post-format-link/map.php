<?php

if ( ! function_exists('bridge_qode_map_post_link_meta') ) {
	function bridge_qode_map_post_link_meta() {
		$link_post_format_meta_box = bridge_qode_create_meta_box(
			array(
				'scope' => array( 'post' ),
				'title' => esc_html__( 'Link Post Format', 'bridge' ),
				'name'  => 'post_format_link_meta'
			)
		);
		
		bridge_qode_create_meta_box_field(
			array(
				'name'        => 'title_link',
				'type'        => 'text',
				'label'       => esc_html__( 'Link', 'bridge' ),
				'description' => esc_html__( 'Enter link', 'bridge' ),
				'parent'      => $link_post_format_meta_box
			)
		);
	}
	
	add_action( 'bridge_qode_action_meta_boxes_map', 'bridge_qode_map_post_link_meta', 24 );
}