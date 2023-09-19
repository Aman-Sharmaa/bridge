<?php

if ( ! function_exists('bridge_qode_map_post_quote_meta') ) {
	function bridge_qode_map_post_quote_meta() {
		$quote_post_format_meta_box = bridge_qode_create_meta_box(
			array(
				'scope' => array( 'post' ),
				'title' => esc_html__( 'Quote Post Format', 'bridge' ),
				'name'  => 'post_format_quote_meta'
			)
		);
		
		bridge_qode_create_meta_box_field(
			array(
				'name'        => 'quote_format',
				'type'        => 'text',
				'label'       => esc_html__( 'Quote', 'bridge' ),
				'description' => esc_html__( 'Enter Quote text', 'bridge' ),
				'parent'      => $quote_post_format_meta_box
			)
		);
	}
	
	add_action( 'bridge_qode_action_meta_boxes_map', 'bridge_qode_map_post_quote_meta', 25 );
}