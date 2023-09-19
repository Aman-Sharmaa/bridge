<?php

if(!function_exists('bridge_qode_error_options_map')) {
    /**
     * Error options page
     */
    function bridge_qode_error_options_map() {

        $error404Page = new BridgeQodeAdminPage("_404", esc_html__("404 Error Page", "bridge"), "fa fa-times-circle-o");
        bridge_qode_framework()->qodeOptions->addAdminPage("error404Page", $error404Page);

        //404 Page Options

        $panel1 = new BridgeQodePanel(esc_html__("404 Page Options", "bridge"), "page_error_options_panel");
        $error404Page->addChild("panel1", $panel1);

        $title_404 = new BridgeQodeField("text", "404_title", "", esc_html__("Title", "bridge"), esc_html__("Enter title for 404 page", "bridge"));
        $panel1->addChild("404_title", $title_404);

        $subtitle_404 = new BridgeQodeField("text", "404_subtitle", "", esc_html__("Subtitle", "bridge"), esc_html__("Enter subtitle for 404 page", "bridge"));
        $panel1->addChild("404_subtitle", $subtitle_404);

        $text_404 = new BridgeQodeField("text", "404_text", "", esc_html__("Text", "bridge"), esc_html__("Enter text for 404 page", "bridge"));
        $panel1->addChild("404_text", $text_404);

        $backlabel_404 = new BridgeQodeField("text", "404_backlabel", "", esc_html__("Back to Home Button Label", "bridge"), esc_html__('Enter label for "Back to Home" button ', 'bridge'));
        $panel1->addChild("404_backlabel", $backlabel_404);
    }
    add_action('bridge_qode_action_options_map','bridge_qode_error_options_map',140);
}
