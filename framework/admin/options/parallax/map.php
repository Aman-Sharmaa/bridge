<?php
if(!function_exists('bridge_qode_parallax_options_map')) {
    /**
     * Parallax options page
     */
    function bridge_qode_parallax_options_map() {

        $parallaxPage = new BridgeQodeAdminPage("_parallax", esc_html__( 'Parallax','bridge'), "fa fa-arrows-v");
        bridge_qode_framework()->qodeOptions->addAdminPage("Parallax", $parallaxPage);

        //Parallax Settings

        $panel1 = new BridgeQodePanel(esc_html__( 'Parallax Settings', 'bridge'), "parallax_settings_panel");
        $parallaxPage->addChild("panel1", $panel1);

        $parallax_onoff = new BridgeQodeField("onoff", "parallax_onoff", "on", esc_html__( 'Parallax on touch devices', 'bridge'), esc_html__( 'Enabling this option will allow parallax on touch devices', 'bridge'));
        $panel1->addChild("parallax_onoff", $parallax_onoff);

        $parallax_minheight = new BridgeQodeField("text", "parallax_minheight", "400", esc_html__( 'Parallax Min Height (px)', 'bridge'), esc_html__( 'Set a minimum height for parallax images on small displays (phones, tablets, etc.)', 'bridge'));
        $panel1->addChild("parallax_minheight", $parallax_minheight);
    }
    add_action('bridge_qode_action_options_map','bridge_qode_parallax_options_map',160);
}