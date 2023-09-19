<?php
if(!function_exists('bridge_qode_search_map')) {
    /**
     *
     */
    function bridge_qode_search_map() {

        bridge_qode_add_admin_page(
            array(
                'slug' => '_page_search',
                'title' => esc_html__('Search Page','bridge'),
                'icon' => 'fa fa-search'
            )
        );

        $panel_search = bridge_qode_add_admin_panel(array(
            'title' => esc_html__('Search Results Page','bridge'),
            'name'  => 'panel_page_search',
            'page'  => '_page_search'
        ));

        bridge_qode_add_admin_field(array(
            'parent'        => $panel_search,
            'type'          => 'select',
            'name'          => 'search_results_columns',
            'default_value' => 'one-column',
            'label'         => esc_html__('Number of Columns','bridge'),
            'description'   => esc_html__('Select number of columns for Search Results page','bridge'),
            'options'         => array(
                'one'     => esc_html__("One Column", 'bridge'),
                'two'     => esc_html__("Two Columns", 'bridge'),
                'three'   => esc_html__("Three Columns", 'bridge'),
                'four'    => esc_html__("Four Columns", 'bridge'),
                'five'    => esc_html__("Five Columns", 'bridge'),
                'six'     => esc_html__("Six Columns", 'bridge'),
            ),
            'args' => array(
                'dependence' => true,
                'hide'       => array(
                    'one'       => '#qodef_qode_spacing_container',

                ),
                'show'       => array(
                    'two'        => '#qodef_qode_spacing_container',
                    'three'      => '#qodef_qode_spacing_container',
                    'four'       => '#qodef_qode_spacing_container',
                    'five'       => '#qodef_qode_spacing_container',
                    'six'        => '#qodef_qode_spacing_container',
                )
            )
        ));

        $spacing_container = bridge_qode_add_admin_container(
            array(
                'name' => 'qode_spacing_container',
                'hidden_property' => 'search_results_columns',
                'hidden_value' => 'one',
                'parent' => $panel_search,
            )
        );

        bridge_qode_add_admin_field(array(
            'parent'        => $spacing_container,
            'type'          => 'select',
            'name'          => 'search_results_spacing',
            'default_value' => 'no',
            'label'         => esc_html__('Space Between Items','bridge'),
            'description'   => esc_html__('Select spacing between items in Search Results page','bridge'),
            'options'       => bridge_qode_get_space_between_items_array()
        ));

        /***************** Additional Page Layout - end *****************/

    }
    add_action('bridge_qode_action_options_map', 'bridge_qode_search_map', 100);
}