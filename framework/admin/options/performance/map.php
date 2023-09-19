<?php

if(!function_exists('bridge_qode_performance_options_map')) {
    /**
     * Performance options page
     */
    function bridge_qode_performance_options_map() {

        $icon_collections = bridge_qode_get_icon_packs();

        //remove font awesome as option to disable since it is default icon pack used by theme
        if( array_key_exists('font_awesome', $icon_collections) ){
            unset($icon_collections['font_awesome']);
        }

        $icon_collections_keys = array_keys( $icon_collections );

        bridge_qode_add_admin_page(array(
            'slug' => '_performance',
            'title' => esc_html__('Performance', 'bridge'),
            'icon' => 'fa fa-cog'
        ));

        $panel_general = bridge_qode_add_admin_panel(array(
            'title'	=> esc_html__('General', 'bridge'),
            'name'	=> 'panel_general',
            'page'	=> '_performance'
        ));

        bridge_qode_add_admin_field(
            array(
                'parent' => $panel_general,
                'type' => 'checkboxgroup',
                'name' => 'qode_performance_icon_packs',
                'label' => esc_html__('Icon Packs', 'bridge'),
                'description' => esc_html__('Choose which icon pack will be loaded for your site. By default, all icon packs are loaded initially','bridge'),
                'options' => $icon_collections,
                'default_value' => $icon_collections_keys
            )
        );

    }
    add_action('bridge_qode_action_options_map', 'bridge_qode_performance_options_map', 190);
}