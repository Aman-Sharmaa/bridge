<?php

if ( ! function_exists('bridge_qode_map_post_video_meta') ) {
	function bridge_qode_map_post_video_meta() {
		$video_post_format_meta_box = bridge_qode_create_meta_box(
			array(
				'scope' => array( 'post' ),
				'title' => esc_html__( 'Video Post Format', 'bridge' ),
				'name'  => 'post_format_video_meta'
			)
		);
		
		bridge_qode_create_meta_box_field(
			array(
				'name'          => 'video_format_choose',
				'type'          => 'select',
				'label'         => esc_html__( 'Video Type', 'bridge' ),
				'description'   => esc_html__( 'Choose video type', 'bridge' ),
				'parent'        => $video_post_format_meta_box,
				'default_value' => 'youtube',
				'options'       => array(
					'youtube'	=> esc_html__( 'Youtube', 'bridge' ),
					'vimeo'		=> esc_html__( 'Vimeo', 'bridge' ),
					'self'		=> esc_html__( 'Self Hosted', 'bridge' ),

				),
				'args' => array(
					'dependence' => true,
					'hide' => array(
						'youtube'	=> '#qodef_qodef_video_self_hosted_container',
						'vimeo'		=> '#qodef_qodef_video_self_hosted_container',
						'self'		=> '#qodef_qodef_video_embedded_container'
					),
					'show' => array(
						'youtube'	=> '#qodef_qodef_video_embedded_container',
						'vimeo'		=> '#qodef_qodef_video_embedded_container',
						'self'		=> '#qodef_qodef_video_self_hosted_container'
					)
				)
			)
		);


		$qodef_video_embedded_container = bridge_qode_add_admin_container(
			array(
				'parent'			=> $video_post_format_meta_box,
				'name'				=> 'qodef_video_embedded_container',
				'hidden_property'	=> 'qodef_video_type_meta',
				'hidden_value'		=> 'self'
			)
		);

		$qodef_video_self_hosted_container = bridge_qode_add_admin_container(
			array(
				'parent'			=> $video_post_format_meta_box,
				'name'				=> 'qodef_video_self_hosted_container',
				'hidden_property'	=> 'qodef_video_type_meta',
				'hidden_values'		=> array('youtube', 'vimeo')
			)
		);

		bridge_qode_create_meta_box_field(
			array(
				'name'        => 'video_format_link',
				'type'        => 'text',
				'label'       => esc_html__('Video ID', 'bridge'),
				'description' => esc_html__('Enter Video ID', 'bridge'),
				'parent'      => $qodef_video_embedded_container,
			)
		);

		bridge_qode_create_meta_box_field(
			array(
				'name'        => 'video_format_image',
				'type'        => 'image',
				'label'       => esc_html__('Video Image', 'bridge'),
				'description' => esc_html__('Upload video image', 'bridge'),
				'parent'      => $qodef_video_self_hosted_container,

			)
		);

		bridge_qode_create_meta_box_field(
			array(
				'name'        => 'video_format_webm',
				'type'        => 'text',
				'label'       => esc_html__('Video WEBM', 'bridge'),
				'description' => esc_html__('Enter video URL for WEBM format', 'bridge'),
				'parent'      => $qodef_video_self_hosted_container,

			)
		);

		bridge_qode_create_meta_box_field(
			array(
				'name'        => 'video_format_mp4',
				'type'        => 'text',
				'label'       => esc_html__('Video MP4', 'bridge'),
				'description' => esc_html__('Enter video URL for MP4 format', 'bridge'),
				'parent'      => $qodef_video_self_hosted_container,

			)
		);

		bridge_qode_create_meta_box_field(
			array(
				'name'        => 'video_format_ogv',
				'type'        => 'text',
				'label'       => esc_html__('Video OGV', 'bridge'),
				'description' => esc_html__('Enter video URL for OGV format', 'bridge'),
				'parent'      => $qodef_video_self_hosted_container,

			)
		);
	}
	
	add_action( 'bridge_qode_action_meta_boxes_map', 'bridge_qode_map_post_video_meta', 22 );
}