<?php
if(!function_exists('bridge_qode_logo_options_map')) {
    /**
     * Logo options page
     */
    function bridge_qode_logo_options_map(){

        $logoPage = new BridgeQodeAdminPage("_logo",  esc_html__( 'Logo','bridge'), "fa fa-coffee");
        bridge_qode_framework()->qodeOptions->addAdminPage("logo", $logoPage);

        $panel1 = new BridgeQodePanel( esc_html__( 'Logo', 'bridge'), "logo");
        $logoPage->addChild("panel1", $panel1);

        $logo_image = new BridgeQodeField("image", "logo_image", QODE_ROOT . "/img/logo.png",  esc_html__( 'Logo Image - normal', 'bridge'),  esc_html__( 'Choose a default logo image to display', 'bridge'));
        $panel1->addChild("logo_image", $logo_image);

        $logo_image_light = new BridgeQodeField("image", "logo_image_light", QODE_ROOT . "/img/logo_white.png",  esc_html__( 'Logo Image - Light', 'bridge'),  esc_html__( 'Choose a logo image to display for "Light" header skin', 'bridge'));
        $panel1->addChild("logo_image_light", $logo_image_light);

        $logo_image_dark = new BridgeQodeField("image", "logo_image_dark", QODE_ROOT . "/img/logo_black.png",  esc_html__( 'Logo Image - Dark', 'bridge'),  esc_html__( 'Choose a logo image to display for "Dark" header skin', 'bridge'));
        $panel1->addChild("logo_image_dark", $logo_image_dark);

        $logo_image_sticky = new BridgeQodeField("image", "logo_image_sticky", QODE_ROOT . "/img/logo_black.png",  esc_html__( 'Logo Image - Sticky Header', 'bridge'),  esc_html__( 'Choose a logo image to display for "Sticky" header type', 'bridge'));
        $panel1->addChild("logo_image_sticky", $logo_image_sticky);

        $logo_image_fixed_hidden = new BridgeQodeField("image", "logo_image_fixed_hidden", "",  esc_html__( 'Logo Image - Fixed Advanced Header', 'bridge'),  esc_html__( 'Choose a logo image to display for "Fixed Advanced" header type', 'bridge'));
        $panel1->addChild("logo_image_fixed_hidden", $logo_image_fixed_hidden);

        $logo_image_mobile = new BridgeQodeField("image", "logo_image_mobile", "",  esc_html__( 'Logo Image - Mobile Header', 'bridge'),  esc_html__( 'Choose a logo image to display for "Mobile" header type', 'bridge'));
        $panel1->addChild("logo_image_mobile", $logo_image_mobile);

        $vertical_logo_bottom = new BridgeQodeField("image", "vertical_logo_bottom", "",  esc_html__( 'Logo Image - Side Menu Area Bottom', 'bridge'),  esc_html__( 'Choose a logo image to display on the bottom of side menu area for "Initially Hidden" side menu area type','bridge'));
        $panel1->addChild("vertical_logo_bottom", $vertical_logo_bottom);

        $logo_mobile_header_height = new BridgeQodeField("text", "logo_mobile_header_height", "",  esc_html__( 'Logo Height For Mobile Header (px)','bridge'),  esc_html__( 'Define logo height for mobile header', 'bridge'));
        $panel1->addChild("logo_mobile_header_height", $logo_mobile_header_height);

        $logo_mobile_height = new BridgeQodeField("text", "logo_mobile_height", "",  esc_html__( 'Logo Height For Mobile Devices (px)', 'bridge'),  esc_html__( 'Define logo height for mobile devices', 'bridge'));
        $panel1->addChild("logo_mobile_height", $logo_mobile_height);
    }

    add_action('bridge_qode_action_options_map','bridge_qode_logo_options_map',20);
}