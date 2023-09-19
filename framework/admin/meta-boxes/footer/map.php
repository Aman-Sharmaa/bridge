<?php
if(!function_exists('bridge_qode_map_footer_meta_fields')) {

	function bridge_qode_map_footer_meta_fields() {

		$qodeFooter = bridge_qode_create_meta_box(
			array(
				'scope' => array('page', 'portfolio_page', 'post'),
				'title' => esc_html__('Qode Footer', 'bridge'),
				'name' => 'page_footer'
			)
		);

		bridge_qode_create_meta_box_field(
            array(
                'name'          => 'footer_top_per_page',
                'type'          => 'selectblank',
                'label'         => esc_html__('Show footer top', 'bridge'),
                'description'   => esc_html__('Enabling this option will show footer top on this page', 'bridge'),
                'parent'        => $qodeFooter,
                'options'       => array(
                    'no'	=>  esc_html__('No', 'bridge'),
                    'yes'	=>  esc_html__('Yes', 'bridge')
                )
            )
        );

        bridge_qode_create_meta_box_field(
            array(
                'name'          => 'footer_bottom_per_page',
                'type'          => 'selectblank',
                'label'         => esc_html__('Show footer bottom', 'bridge'),
                'description'   => esc_html__('Enabling this option will show footer bottom on this page', 'bridge'),
                'parent'        => $qodeFooter,
                'options'       => array(
                    'no' => 'No',
                    'yes' => 'Yes'
                )
            )
        );

	}

	add_action('bridge_qode_action_meta_boxes_map', 'bridge_qode_map_footer_meta_fields');
}