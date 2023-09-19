<?php
if(!function_exists('bridge_qode_contact_options_map')) {
    /**
     * Contact options page
     */
    function bridge_qode_contact_options_map(){

        $contactPage = new BridgeQodeAdminPage("_contact", esc_html__("Contact Page", "bridge"), "fa fa-envelope-o");
        bridge_qode_framework()->qodeOptions->addAdminPage("Contact Page", $contactPage);

        //Contact Form

        $panel1 = new BridgeQodePanel(esc_html__("Contact Page", "bridge"), "contact_page_panel");
        $contactPage->addChild("panel1", $panel1);

        $enable_google_map = new BridgeQodeField("yesno", "enable_google_map", "no", esc_html__("Enable Google Map", "bridge"), esc_html__("Enabling this option will display a Google Map on your Contact page", "bridge"), array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_google_map_settings_panel"));
        $panel1->addChild("enable_google_map", $enable_google_map);

        $section_between_map_form = new BridgeQodeField("yesno", "section_between_map_form", "yes", esc_html__("Show Upper Section", "bridge"), esc_html__("Enabling this option will display a section between Map and Contact Form", "bridge"), array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_upper_section_settings_panel"));
        $panel1->addChild("section_between_map_form", $section_between_map_form);

        $enable_contact_form = new BridgeQodeField("yesno", "enable_contact_form", "no", esc_html__("Enable Contact Form", "bridge"), esc_html__("This option will display a Contact Form on Contact page", "bridge"), array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_contact_form_settings_panel"));
        $panel1->addChild("enable_contact_form", $enable_contact_form);

        //Google Map Settings

        $panel3 = new BridgeQodePanel(esc_html__("Google Map Settings", "bridge"), "google_map_settings_panel", "enable_google_map", "no");
        $contactPage->addChild("panel3", $panel3);

        $google_maps_address = new BridgeQodeField("text", "google_maps_address", "", esc_html__("Google Map Address", "bridge"), esc_html__('Enter address to be pinned on Google Map (Example: "Louvre Museum, Paris, France', 'bridge'));
        $panel3->addChild("google_maps_address", $google_maps_address);

        $google_maps_address2 = new BridgeQodeField("text", "google_maps_address2", "", esc_html__("Google Map Address 2", "bridge"), esc_html__("Enter additional address to be pinned on Google Map", "bridge"));
        $panel3->addChild("google_maps_address2", $google_maps_address2);

        $google_maps_address3 = new BridgeQodeField("text", "google_maps_address3", "", esc_html__("Google Map Address 3", "bridge"), esc_html__("Enter additional address to be pinned on Google Map", "bridge"));
        $panel3->addChild("google_maps_address3", $google_maps_address3);

        $google_maps_address4 = new BridgeQodeField("text", "google_maps_address4", "", esc_html__("Google Map Address 4", "bridge"), esc_html__("Enter additional address to be pinned on Google Map", "bridge"));
        $panel3->addChild("google_maps_address4", $google_maps_address4);

        $google_maps_address5 = new BridgeQodeField("text", "google_maps_address5", "", esc_html__("Google Map Address 5", "bridge"), esc_html__("Enter additional address to be pinned on Google Map", "bridge"));
        $panel3->addChild("google_maps_address5", $google_maps_address5);

        $google_maps_pin_image = new BridgeQodeField("image", "google_maps_pin_image", QODE_ROOT . "/img/pin.png", esc_html__("Pin Image", "bridge"), esc_html__("Select a pin image to be used on Google Map ", "bridge"));
        $panel3->addChild("google_maps_pin_image", $google_maps_pin_image);

        $google_maps_height = new BridgeQodeField("text", "google_maps_height", "750", esc_html__("Map Height (px)", "bridge"), esc_html__("Enter a height for Google Map in pixels", "bridge"));
        $panel3->addChild("google_maps_height", $google_maps_height);

        $google_maps_zoom = new BridgeQodeField("range", "google_maps_zoom", "12", esc_html__("Map Zoom", "bridge"), esc_html__("Enter a zoom factor for Google Map (0 = whole worlds, 19 = individual buildings)", "bridge"), array(), array("range_min" => "3",
            "range_max" => "19",
            "range_step" => "1",
            "range_decimals" => "0"
        ));
        $panel3->addChild("google_maps_zoom", $google_maps_zoom);

        $google_maps_scroll_wheel = new BridgeQodeField("yesno", "google_maps_scroll_wheel", "no", esc_html__("Zoom Map on Mouse Wheel", "bridge"), esc_html__("Enabling this option will allow users to zoom in on Map using mouse wheel", "bridge"));
        $panel3->addChild("google_maps_scroll_wheel", $google_maps_scroll_wheel);

        $google_maps_style = new BridgeQodeField("yesno", "google_maps_style", "yes", esc_html__("Custom Map Style", "bridge"), esc_html__("Enabling this option will allow Map editing", "bridge"), array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_google_maps_style_container"));
        $panel3->addChild("google_maps_style", $google_maps_style);

        $google_maps_style_container = new BridgeQodeContainer("google_maps_style_container", "google_maps_style", "no");
        $panel3->addChild("google_maps_style_container", $google_maps_style_container);

        $google_maps_color = new BridgeQodeField("color", "google_maps_color", "", esc_html__("Color Overlay", "bridge"), esc_html__("Choose a Map color overlay", "bridge"));
        $google_maps_style_container->addChild("google_maps_color", $google_maps_color);

        $google_maps_saturation = new BridgeQodeField("range", "google_maps_saturation", "", esc_html__("Saturation", "bridge"), esc_html__("Choose a level of saturation (-100 = least saturated, 100 = most saturated)", "bridge"), array(), array("range_min" => "-100",
            "range_max" => "100",
            "range_step" => "1",
            "range_decimals" => "0"
        ));
        $google_maps_style_container->addChild("google_maps_saturation", $google_maps_saturation);

        $google_maps_lightness = new BridgeQodeField("range", "google_maps_lightness", "", esc_html__("Lightness", "bridge"), esc_html__("Choose a level of lightness (-100 = darkest, 100 = lightest)", "bridge"), array(), array("range_min" => "-100",
            "range_max" => "100",
            "range_step" => "1",
            "range_decimals" => "0"
        ));
        $google_maps_style_container->addChild("google_maps_lightness", $google_maps_lightness);

        //Upper Section Settings

        $panel4 = new BridgeQodePanel(esc_html__("Upper Section Settings", "bridge"), "upper_section_settings_panel", "section_between_map_form", "no");
        $contactPage->addChild("panel4", $panel4);

        $section_between_map_form_position = new BridgeQodeField("select", "section_between_map_form_position", "", esc_html__("Section Alignment", "bridge"), esc_html__("Choose an alignment for Upper Section", "bridge"), array("" => esc_html__("Default", "bridge"),
            "left" => esc_html__("Left", "bridge"),
            "right" => esc_html__("Right", "bridge"),
            "center" => esc_html__("Center", "bridge")
        ));
        $panel4->addChild("section_between_map_form_position", $section_between_map_form_position);

        $contact_section_above_form_title = new BridgeQodeField("text", "contact_section_above_form_title", "", esc_html__("Title", "bridge"), esc_html__("Enter a title to be displayed in Upper Section", "bridge"));
        $panel4->addChild("contact_section_above_form_title", $contact_section_above_form_title);

        $contact_section_above_form_subtitle = new BridgeQodeField("text", "contact_section_above_form_subtitle", "", esc_html__("Subtitle", "bridge"), esc_html__("Enter a subtitle to be displayed in Upper Section", "bridge"));
        $panel4->addChild("contact_section_above_form_subtitle", $contact_section_above_form_subtitle);

        //Contact Form Settings

        $panel2 = new BridgeQodePanel(esc_html__("Contact Form Settings", "bridge"), "contact_form_settings_panel", "enable_contact_form", "no");
        $contactPage->addChild("panel2", $panel2);

        $receive_mail = new BridgeQodeField("text", "receive_mail", "", esc_html__("Mail Send To", "bridge"), esc_html__("Enter email address for receiving messages submitted through Contact Form", "bridge"));
        $panel2->addChild("receive_mail", $receive_mail);

        $email_from = new BridgeQodeField("text", "email_from", "", esc_html__("Email From", "bridge"), esc_html__('Enter a default e-mail address to appear in "From" field when receiving emails through Contact Form', 'bridge'));
        $panel2->addChild("email_from", $email_from);

        $email_subject = new BridgeQodeField("text", "email_subject", "", esc_html__("Email Subject", "bridge"), esc_html__('Enter a default message to appear in "Subject" field when receiving emails through Contact Form', 'bridge'));
        $panel2->addChild("email_subject", $email_subject);

        $hide_contact_form_website = new BridgeQodeField("yesno", "hide_contact_form_website", "no", esc_html__("Hide Website Field", "bridge"), esc_html__('Enabling this option will hide the "Website" field on Contact Form', 'bridge'));
        $panel2->addChild("hide_contact_form_website", $hide_contact_form_website);

        $contact_heading_above = new BridgeQodeField("text", "contact_heading_above", "", esc_html__("Contact Form Heading", "bridge"), esc_html__("Enter a heading to be displayed above Contact Form", "bridge"));
        $panel2->addChild("contact_heading_above", $contact_heading_above);

        $use_recaptcha = new BridgeQodeField("yesno", "use_recaptcha", "no", esc_html__("Use reCAPTCHA", "bridge"), esc_html__("Enabling this option will place a reCAPTCHA box under Contact Form", "bridge"), array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_use_recaptcha_container"));
        $panel2->addChild("use_recaptcha", $use_recaptcha);

        $use_recaptcha_container = new BridgeQodeContainer("use_recaptcha_container", "use_recaptcha", "no");
        $panel2->addChild("use_recaptcha_container", $use_recaptcha_container);

        $recaptcha_public_key = new BridgeQodeField("text", "recaptcha_public_key", "", esc_html__("reCAPTCHA Public Key", "bridge"), esc_html__("Enter reCAPTCHA public key. For more info, see https://www.google.com/recaptcha", "bridge"));
        $use_recaptcha_container->addChild("recaptcha_public_key", $recaptcha_public_key);

        $recaptcha_private_key = new BridgeQodeField("text", "recaptcha_private_key", "", esc_html__("reCAPTCHA Private Key", "bridge"), esc_html__("Enter reCAPTCHA private key. For more info, see https://www.google.com/recaptcha", "bridge"));
        $use_recaptcha_container->addChild("recaptcha_private_key", $recaptcha_private_key);

        bridge_qode_add_admin_field(array(
            'parent'        => $panel2,
            'type'          => 'yesno',
            'name'          => 'enable_contact_page_acceptance',
            'default_value' => 'no',
            'label'         => esc_html__('Enable Acceptance Checkbox', 'bridge'),
            'description'   => esc_html__('Enabling this option will display a checkbox beneath the contact form. This will prompt the user to mark the box before proceeding.', 'bridge'),
            'args' => array(
                'dependence' => true,
                'dependence_hide_on_yes' => '',
                'dependence_show_on_yes' => '#qodef_qode_contact_page_acceptance_text_container'
            )
        ));

        $qode_contact_page_acceptance_text_container = bridge_qode_add_admin_container(
            array(
                'parent'          => $panel2,
                'name'            => 'qode_contact_page_acceptance_text_container',
                'hidden_property' => 'enable_contact_page_acceptance',
                'hidden_value'    => 'no'
            )
        );

        bridge_qode_add_admin_field( array(
            'type'          => 'textarea',
            'name'          => 'qode_contact_page_acceptance_text',
            'default_value' => '',
            'label'         => esc_html__('Contact Page Acceptance Text', 'bridge'),
            'description'   => esc_html__('Please inset desired acceptance condition, or leave empty for default', 'bridge'),
            'parent'        => $qode_contact_page_acceptance_text_container
        ) );
    }
    add_action('bridge_qode_action_options_map','bridge_qode_contact_options_map',150);
}