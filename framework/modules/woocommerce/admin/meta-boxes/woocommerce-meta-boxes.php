<?php

if(!function_exists('bridge_qode_map_woocommerce_meta')) {
    function bridge_qode_map_woocommerce_meta() {
        $woocommerce_meta_box = bridge_qode_create_meta_box(
            array(
                'scope' => array('product'),
                'title' => esc_html__('Qode General', 'bridge'),
                'name' => 'product_general'
            )
        );

		bridge_qode_create_meta_box_field(array(
			'name'        => 'qode_product_list_masonry_layout',
			'type'        => 'selectblank',
			'label'       => esc_html__('Dimensions for Product List - Masonry', 'bridge'),
			'description' => esc_html__('Choose image layout when it appears in Qode Product List - Masonry shortcode', 'bridge'),
			'parent'      => $woocommerce_meta_box,
			'options'     => array(
				"default" => "Default",
				"large-width-height" => "Large Width"
			)
		));

		bridge_qode_create_meta_box_field(array(
			'name'        => 'qode_product_featured_image_size',
			'type'        => 'select',
			'label'       => esc_html__('Dimensions for Product List Shortcode', 'bridge'),
			'description' => esc_html__('Choose image layout when it appears in Product List - Masonry layout shortcode', 'bridge'),
			'parent'      => $woocommerce_meta_box,
			'options'     => array(
				'qode-woo-image-normal-width'		 => esc_html__('Default', 'bridge'),
				'qode-woo-image-large-width'        => esc_html__('Large width', 'bridge'),
				'qode-woo-image-large-height'       => esc_html__('Large height', 'bridge'),
				'qode-woo-image-large-width-height' => esc_html__('Large width/height', 'bridge'),
			)
		));


    }
	
    add_action('bridge_qode_action_meta_boxes_map', 'bridge_qode_map_woocommerce_meta', 99);
}