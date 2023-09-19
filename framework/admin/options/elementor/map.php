<?php

if(!function_exists('bridge_qode_elementor_options_map')) {
    /**
     * Visual Composer options page
     */
    function bridge_qode_elementor_options_map() {

        bridge_qode_add_admin_page(array(
            'slug' => '_elementor',
            'title' => esc_html__('Elementor', 'bridge'),
            'icon' => 'fa fa-th-list'
        ));

        $panel_general = bridge_qode_add_admin_panel(array(
            'title'	=> esc_html__('General', 'bridge'),
            'name'	=> 'panel_general',
            'page'	=> '_elementor'
        ));

        bridge_qode_add_admin_field(
            array(
                'parent' => $panel_general,
                'type' => 'yesno',
                'name' => 'override_elementor_fonts',
                'default_value' => 'no',
                'label' => esc_html__('Override Elementor Line Height and Font Size options with theme options', 'bridge'),
                'description' => esc_html__('Enable this option if you want to override default Elementor Heading\'s font size and line height options with theme options','bridge'),
            )
        );

    }
    add_action('bridge_qode_action_options_map','bridge_qode_elementor_options_map',185);
}