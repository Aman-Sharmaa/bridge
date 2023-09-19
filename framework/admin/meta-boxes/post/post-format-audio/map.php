<?php

if ( ! function_exists('bridge_qode_map_post_audio_meta') ) {
	function bridge_qode_map_post_audio_meta() {
		$audio_post_format_meta_box = bridge_qode_create_meta_box(
			array(
				'scope' => array( 'post' ),
				'title' => esc_html__( 'Audio Post Format', 'bridge' ),
				'name'  => 'post_format_audio_meta'
			)
		);
		
		bridge_qode_create_meta_box_field(
			array(
				'name'        => 'audio_link',
				'type'        => 'text',
				'label'       => esc_html__( 'Audio Link', 'bridge' ),
				'description' => esc_html__( 'Enter audio link', 'bridge' ),
				'parent'      => $audio_post_format_meta_box
			)
		);
	}
	
	add_action( 'bridge_qode_action_meta_boxes_map', 'bridge_qode_map_post_audio_meta', 23 );
}