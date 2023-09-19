<?php

if(!function_exists('bridge_qode_contentbottom_options_map')) {
    /**
     * Content Bottom options page
     */
    function bridge_qode_contentbottom_options_map(){

        $contentbottomPage = new BridgeQodeAdminPage("_content_bottom", esc_html__("Content Bottom", "bridge"), "fa fa-caret-square-o-down");
        bridge_qode_framework()->qodeOptions->addAdminPage("Content Bottom", $contentbottomPage);

        //Content Bottom Area

        $panel1 = new BridgeQodePanel(esc_html__("Content Bottom Area", "bridge"), "content_bottom_area_panel");
        $contentbottomPage->addChild("panel1", $panel1);

        $enable_content_bottom_area = new BridgeQodeField("yesno", "enable_content_bottom_area", "no", esc_html__("Enable Content Bottom Area", "bridge"), esc_html__("This option will enable Content Bottom area on pages", "bridge"), array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_enable_content_bottom_area_container"));
        $panel1->addChild("enable_content_bottom_area", $enable_content_bottom_area);

        $enable_content_bottom_area_container = new BridgeQodeContainer("enable_content_bottom_area_container", "enable_content_bottom_area", "no");
        $panel1->addChild("enable_content_bottom_area_container", $enable_content_bottom_area_container);

        $content_botttom_custom_sidebars = bridge_qode_get_custom_sidebars();

        $content_bottom_sidebar_custom_display = new BridgeQodeField("selectblank", "content_bottom_sidebar_custom_display", "", esc_html__("Sidebar to Display", "bridge"), esc_html__("Choose a Content Bottom sidebar to display", "bridge"), $content_botttom_custom_sidebars);
        $enable_content_bottom_area_container->addChild("content_bottom_sidebar_custom_display", $content_bottom_sidebar_custom_display);

        $content_bottom_in_grid = new BridgeQodeField("yesno", "content_bottom_in_grid", "yes", esc_html__("Display in Grid", "bridge"), esc_html__("Enabling this option will place Content Bottom in grid", "bridge"));
        $enable_content_bottom_area_container->addChild("content_bottom_in_grid", $content_bottom_in_grid);

        $content_bottom_background_color = new BridgeQodeField("color", "content_bottom_background_color", "", esc_html__("Background Color", "bridge"), esc_html__("Choose a background color for Content Bottom area", "bridge"));
        $enable_content_bottom_area_container->addChild("content_bottom_background_color", $content_bottom_background_color);
    }
    add_action('bridge_qode_action_options_map','bridge_qode_contentbottom_options_map',170);
}