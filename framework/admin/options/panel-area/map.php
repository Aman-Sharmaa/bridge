<?php

if(!function_exists('bridge_qode_panel_area_options_map')) {
    /**
     * Visual Composer options page
     */
    function bridge_qode_panel_area_options_map() {

        bridge_qode_add_admin_page(array(
            'slug' => '_panel_area',
            'title' => esc_html__('Panel Area', 'bridge'),
            'icon' => 'fa fa-bookmark'
        ));

        $panel_general = bridge_qode_add_admin_panel(array(
            'title'	=> esc_html__('General', 'bridge'),
            'name'	=> 'panel_general',
            'page'	=> '_panel_area'
        ));

        bridge_qode_add_admin_field(
            array(
                'parent' => $panel_general,
                'type' => 'color',
                'name' => 'panel_area_background_color',
                'label' => esc_html__('Panel Area background color', 'bridge'),
                'description' => esc_html__('Set background color for panel area','bridge'),
            )
        );

        bridge_qode_add_admin_field(
            array(
                'parent' => $panel_general,
                'type' => 'text',
                'name' => 'panel_area_close_label',
                'label' => esc_html__('Panel Area Close Label', 'bridge'),
                'description' => esc_html__('Set panel area close label. Default value is "Close"','bridge'),
                'args' => [
                    'col_width' => 3
                ]
            )
        );

    }

    add_action('bridge_qode_action_options_map','bridge_qode_panel_area_options_map', 190);
}