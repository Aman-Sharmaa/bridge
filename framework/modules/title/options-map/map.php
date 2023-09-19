<?php

if(!function_exists('bridge_qode_breadcrumbs_map')) {
    function bridge_qode_breadcrumbs_map() {

		$panel = bridge_qode_add_admin_panel(array(
            'title' => esc_html__('Breadcrumbs', 'bridge'),
            'name'  => 'panel_breadcrumbs',
            'page'  => 'fonts'
        ));

        $text_group = bridge_qode_add_admin_group(array(
            'name'			=> 'text_group',
            'title'			=> esc_html__('Breadcrumbs style', 'bridge'),
            'description'	=> esc_html__('Define breadcrumbs style', 'bridge'),
            'parent'		=> $panel
        ));

        $text_row_1 = bridge_qode_add_admin_row(array(
            'name' => 'text_row_1',
            'next' => true,
            'parent' => $text_group
        ));

		bridge_qode_add_admin_field(array(
			'parent'        => $text_row_1,
			'type'          => 'textsimple',
			'name'          => 'breadcrumbs_font_size',
			'default_value' => '',
			'label'         => esc_html__('Font Size', 'bridge')
		));
		bridge_qode_add_admin_field(array(
			'parent'        => $text_row_1,
			'type'          => 'textsimple',
			'name'          => 'breadcrumbs_line_height',
			'default_value' => '',
			'label'         => esc_html__('Line Height', 'bridge')
		));
		bridge_qode_add_admin_field(array(
			'parent'        => $text_row_1,
			'type'          => 'selectblanksimple',
			'name'          => 'breadcrumbs_transform',
			'options'		=> bridge_qode_get_text_transform_array(),
			'default_value' => '',
			'label'         => esc_html__('Text Transform', 'bridge')
		));
		bridge_qode_add_admin_field(array(
			'parent'        => $text_row_1,
			'type'          => 'fontsimple',
			'name'          => 'breadcrumbs_font_family',
			'default_value' => '',
			'label'         => esc_html__('Font Family', 'bridge')
		));

		$text_row_2 = bridge_qode_add_admin_row(array(
            'name' => 'text_row_2',
            'next' => true,
            'parent' => $text_group
        ));

        
		bridge_qode_add_admin_field(array(
			'parent'        => $text_row_2,
			'type'          => 'selectblanksimple',
			'name'          => 'breadcrumbs_font_style',
			'options'		=> bridge_qode_get_font_style_array(),
			'default_value' => '',
			'label'         => esc_html__('Font Style', 'bridge')
		));
		bridge_qode_add_admin_field(array(
			'parent'        => $text_row_2,
			'type'          => 'selectblanksimple',
			'name'          => 'breadcrumbs_font_weight',
			'default_value' => '',
			'options'		=> bridge_qode_get_font_weight_array(),
			'label'         => esc_html__('Font Weight', 'bridge')
		));
		bridge_qode_add_admin_field(array(
			'parent'        => $text_row_2,
			'type'          => 'textsimple',
			'name'          => 'breadcrumbs_letter_spacing',
			'default_value' => '',
			'label'         => esc_html__('Letter Spacing', 'bridge')
		));

		bridge_qode_add_admin_field(array(
			'parent'        => $panel,
			'type'          => 'text',
			'name'          => 'breadcrumbs_delimiter_sign',
			'default_value' => '',
			'label'			=> esc_html__('Breadcrumbs delimiter', 'bridge'),
			'description'   => esc_html__('Insert desired breadcrumbs delimiter', 'bridge')
		));
		
	}

    add_action('bridge_qode_action_options_elements_page_map', 'bridge_qode_breadcrumbs_map');
}