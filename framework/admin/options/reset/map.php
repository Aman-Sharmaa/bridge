<?php

if(!function_exists('bridge_qode_reset_options_map')) {
    /**
     * Reset options page
     */
    function bridge_qode_reset_options_map(){

        $resetPage = new BridgeQodeAdminPage("_reset", esc_html__('Reset', 'bridge'), "fa fa-eraser");
        bridge_qode_framework()->qodeOptions->addAdminPage("Reset", $resetPage);

        //Reset

        $panel1 = new BridgeQodePanel(esc_html__('Reset to Defaults', 'bridge'), "reset_panel");
        $resetPage->addChild("panel1", $panel1);

        $reset_to_defaults = new BridgeQodeField("yesno", "reset_to_defaults", "no", esc_html__('Reset to Defaults', 'bridge'), esc_html__('This option will reset all Qode Options values to defaults', 'bridge'));
        $panel1->addChild("reset_to_defaults", $reset_to_defaults);
    }
    add_action('bridge_qode_action_options_map','bridge_qode_reset_options_map',220);
}