<?php
if(!function_exists('bridge_qode_maintenance_options_map')) {
    /**
     * Maintenance options page
     */
    function bridge_qode_maintenance_options_map(){

        $qode_pages = array();
        $pages = get_posts(array(
            'post_type' => 'page',
            'meta_key' => '_wp_page_template',
            'meta_value' => 'landing_page.php'
        ));
        foreach ($pages as $page) {
            $qode_pages[$page->ID] = $page->post_title;
        }

        $maintenancePage = new BridgeQodeAdminPage("_maintenance", esc_html__( 'Maintenance Mode', 'bridge'), "fa fa-wrench");
        bridge_qode_framework()->qodeOptions->addAdminPage("Maintenance Mode", $maintenancePage);

        //Maintenance

        $panel1 = new BridgeQodePanel(esc_html__( 'Settings', 'bridge'), "maintenance_panel");
        $maintenancePage->addChild("panel1", $panel1);

        $maintenance_mode = new BridgeQodeField("yesno", "qode_maintenance_mode", "no", esc_html__( 'Maintenance Mode','bridge'), esc_html__( 'Turn on this option if you want to enable maintenance mode on your site', 'bridge'), array(),
            array("dependence" => true,
                "dependence_hide_on_yes" => "",
                "dependence_show_on_yes" => "#qodef_maintenance_container"
            ));
        $panel1->addChild("qode_maintenance_mode", $maintenance_mode);

        $maintenance_container = new BridgeQodeContainer("maintenance_container", "qode_maintenance_mode", "no");
        $panel1->addChild("maintenance_container", $maintenance_container);

        $maintenance_page = new BridgeQodeField("selectblank", "qode_maintenance_page", "", esc_html__( 'Maintenance Page', 'bridge'), esc_html__( 'Choose maintenance page to display when user visits your site', 'bridge'), $qode_pages);
        $maintenance_container->addChild("qode_maintenance_page", $maintenance_page);

    }
    add_action('bridge_qode_action_options_map','bridge_qode_maintenance_options_map',210);
}