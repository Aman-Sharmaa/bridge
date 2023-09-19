<?php
if(!function_exists('bridge_qode_verticalsplitslider_options_map')) {
    /**
     * Vertical Split Slider options page
     */
    function bridge_qode_verticalsplitslider_options_map()
    {

        $verticalSplitSliderPage = new BridgeQodeAdminPage("_vertical_split_slider", esc_html__('Vertical Split Slider', 'bridge'), "fa fa-arrows-v");
        bridge_qode_framework()->qodeOptions->addAdminPage("verticalSplitSlider", $verticalSplitSliderPage);

        // General Style

        $panel10 = new BridgeQodePanel(esc_html__('General Style', 'bridge'), "general_style");
        $verticalSplitSliderPage->addChild("panel10", $panel10);

        $group1 = new BridgeQodeGroup(esc_html__('Navigation Style', 'bridge'), esc_html__('Define style for navigation bullets', 'bridge'));
        $panel10->addChild("group1", $group1);

        $row1 = new BridgeQodeRow();
        $group1->addChild("row1", $row1);

        $vss_navigation_inactive_color = new BridgeQodeField("colorsimple", "vss_navigation_inactive_color", "", esc_html__('Navigation Color', 'bridge'), esc_html__('Define color for navigation dots', 'bridge'));
        $row1->addChild("vss_navigation_inactive_color", $vss_navigation_inactive_color);

        $vss_navigation_inactive_border_color = new BridgeQodeField("colorsimple", "vss_navigation_inactive_border_color", "", esc_html__('Navigation Border Color', 'bridge'), esc_html__('Define border color for navigation dots', 'bridge'));
        $row1->addChild("vss_navigation_inactive_border_color", $vss_navigation_inactive_border_color);

        $vss_navigation_color = new BridgeQodeField("colorsimple", "vss_navigation_color", "", esc_html__('Navigation Active Color', 'bridge'), esc_html__('Define active color for navigation dots', 'bridge'));
        $row1->addChild("vss_navigation_color", $vss_navigation_color);

        $vss_navigation_border_color = new BridgeQodeField("colorsimple", "vss_navigation_border_color", "", esc_html__('Navigation Active Border Color', 'bridge'), esc_html__('Define active border color for navigation dots', 'bridge'));
        $row1->addChild("vss_navigation_border_color", $vss_navigation_border_color);

        $vss_navigation_size = new BridgeQodeField("text", "vss_navigation_size", "", esc_html__('Navigation Size (px)', 'bridge'), esc_html__('Define size for navigation dots', 'bridge'), array(), array("col_width" => 1));
        $panel10->addChild("vss_navigation_size", $vss_navigation_size);

        $vss_left_panel_size = new BridgeQodeField("text", "vss_left_panel_size", "", esc_html__('Left Slide Panel size (%)', 'bridge'), esc_html__('Define size for left slide panel. Note that sum of left and right slide panel should be 100.', 'bridge'), array(), array("col_width" => 1));
        $panel10->addChild("vss_left_panel_size", $vss_left_panel_size);

        $vss_right_panel_size = new BridgeQodeField("text", "vss_right_panel_size", "", esc_html__('Right Slide Panel size (%)', 'bridge'), esc_html__('Define size for right slide panel. Note that sum of left and right slide panel should be 100.', 'bridge'), array(), array("col_width" => 1));
        $panel10->addChild("vss_right_panel_size", $vss_right_panel_size);

       bridge_qode_add_admin_field(
            array(
                'name'              => 'vss_responsive_advanced',
                'type'              => 'yesno',
                'label'             => esc_html__('Advanced Responsive', 'bridge'),
                'description'       => esc_html__('Enable this option for advanced responsive on smaller devices', 'bridge'),
                'default_value'     => 'no',
                'parent'            => $panel10,
                'args' => array(
                    'dependence' => true,
                    'dependence_hide_on_yes' => '',
                    'dependence_show_on_yes' => '#qodef_qode_vss_responsive_advanced_options_container'
                )
            )
        );

        $qode_vss_responsive_advanced_options_container = bridge_qode_add_admin_container(
            array(
                'parent'          => $panel10,
                'name'            => 'qode_vss_responsive_advanced_options_container',
                'hidden_property' => 'vss_responsive_advanced',
                'hidden_value'    => 'no'
            )
        );

        bridge_qode_add_admin_field( array(
                'type'          => 'select',
                'name'          => 'vss_responsive_advanced_width',
                'default_value' => '768',
                'label'         => esc_html__('Advanced Responsive Breakpoint', 'bridge'),
                'description'   => esc_html__('Choose a width at which advanced responsive options will take effect.', 'bridge'),
                'parent'        => $qode_vss_responsive_advanced_options_container,
                'options'       => array(
                    '1000'  => esc_html__('1000px', 'bridge'),
                    '768'   => esc_html__('768px', 'bridge'),
                    '600'   => esc_html__('600px', 'bridge')
                )
        ) );
    }
    add_action('bridge_qode_action_options_map','bridge_qode_verticalsplitslider_options_map',120);
}
