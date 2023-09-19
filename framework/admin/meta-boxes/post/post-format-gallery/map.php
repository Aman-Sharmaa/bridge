<?php

if ( ! function_exists('bridge_qode_map_post_gallery_meta') ) {
	
	function bridge_qode_map_post_gallery_meta() {
		$gallery_post_format_meta_box = bridge_qode_create_meta_box(
			array(
				'scope' => array( 'post' ),
				'title' => esc_html__( 'Gallery Post Format', 'bridge' ),
				'name'  => 'post_format_gallery_meta'
			)
		);

		bridge_qode_create_meta_box_field(
			array(
				'name'          => 'gallery_type',
				'type'          => 'select',
				'label'         => esc_html__('Gallery Type', 'bridge'),
				'description'   => esc_html__('Choose gallery type for Blog Compound list', 'bridge'),
				'parent'        => $gallery_post_format_meta_box,
				'options'       => array(
					'slider'	=> esc_html__('Slider', 'bridge'),
					'masonry'	=> esc_html__('Masonry', 'bridge'),
				)
			)
		);
	}
	
	add_action( 'bridge_qode_action_meta_boxes_map', 'bridge_qode_map_post_gallery_meta', 21 );
}
