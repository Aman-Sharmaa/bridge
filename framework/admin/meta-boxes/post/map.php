<?php

if(!function_exists('bridge_qode_map_post_meta_fields')) {

	function bridge_qode_map_post_meta_fields() {

		// Layout
		$post_layout_meta_box = bridge_qode_create_meta_box(
			array(
				'scope' => array('post'),
				'title' => 'Qode Post Layout',
				'name' => 'post_layout'
			)
		);

		$qode_hide_featured_image = new BridgeQodeMetaField("yesno","qode_hide-featured-image","no","Hide Feature image","Do you want to hide feature image for this post?");
		$post_layout_meta_box->addChild("qode_hide-featured-image",$qode_hide_featured_image);


		$qode_post_style_masonry_date_image = new BridgeQodeMetaField("select","qode_post_style_masonry_date_image","","Dimensions of image for Blog Masonry","Choose post image dimensions for Blog Masonry and Blog Masonry - Date in Image template",array(
			"full" => "Default",
			"landscape" => "Landscape",
			"portrait" => "Portrait",
			"square" => "Square"
		));
		$post_layout_meta_box->addChild("qode_post_style_masonry_date_image",$qode_post_style_masonry_date_image);

		$qode_post_style_masonry_gallery = new BridgeQodeMetaField("select","qode_post_style_masonry_gallery","","Dimensions for Masonry Gallery","Choose image layout when it appears in Masonry Gallery list",array(
			"default" => "Default",
			"large-width" => "Large width",
			"large-height" => "Large heigh",
			"large-width-height" => "Large width/height"
		));
		$post_layout_meta_box->addChild("qode_post_style_masonry_gallery",$qode_post_style_masonry_gallery);

		$single_templates_meta = array(
			'standard'				=> 'Standard',
			'image-title-post'		=> 'Image Title Post'
		);
		$single_templates_meta = apply_filters('bridge_qode_filter_single_blog_templates_meta',$single_templates_meta);
		bridge_qode_create_meta_box_field(
			array(
				'name'        	=> 'blog_single_type_meta',
				'type'        	=> 'selectblank',
				'label'       	=> 'Single Post Type',
				'default_value'	=> '',
				'description'	=> 'Choose type for Single Post pages',
				'parent'		=> $post_layout_meta_box,
				'options'		=> $single_templates_meta
			)
		);

		bridge_qode_create_meta_box_field(
			array(
				'name'        => 'post_layout_meta',
				'type'        => 'selectblank',
				'label'       => 'Post Layout',
				'default'	  => 'default',
				'description' => 'Choose post layout for Blog Compound list',
				'parent'      => $post_layout_meta_box,
				'options'     => array(
					'default' => 'Default',
					'split' => 'Split'
				)
			)
		);

		do_action('bridge_qode_action_blog_post_meta', $post_layout_meta_box);
	}

	add_action('bridge_qode_action_meta_boxes_map', 'bridge_qode_map_post_meta_fields');
}