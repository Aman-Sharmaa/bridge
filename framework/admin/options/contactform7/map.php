<?php

if(!function_exists('bridge_qode_contactform7_options_map')) {
    /**
     * Contact Form 7 options page
     */
    function bridge_qode_contactform7_options_map() {

        $contactform7page = new BridgeQodeAdminPage("_contact_form_7", esc_html__("Contact Form 7", "bridge"), "fa fa-file-text-o");
        bridge_qode_framework()->qodeOptions->addAdminPage("Contact Form 7", $contactform7page);

        //Contact Form 7 Settings

        $panel1 = new BridgeQodePanel(esc_html__("Custom Style 1 Settings", "bridge"), "contact_form_custom_style_1_panel");
        $contactform7page->addChild("panel1", $panel1);

        $group1 = new BridgeQodeGroup(esc_html__("Form Elements' Background", "bridge"), esc_html__("Define background style for form elements (input, textarea, select)", "bridge"));
        $panel1->addChild("group1", $group1);
        $row1 = new BridgeQodeRow();
        $group1->addChild("row1", $row1);
        $cf7_custom_style_1_element_background_color = new BridgeQodeField("colorsimple", "cf7_custom_style_1_element_background_color", "", esc_html__("Background Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_1_element_background_color", $cf7_custom_style_1_element_background_color);
        $cf7_custom_style_1_element_focus_background_color = new BridgeQodeField("colorsimple", "cf7_custom_style_1_element_focus_background_color", "", esc_html__("Focus Background Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_1_element_focus_background_color", $cf7_custom_style_1_element_focus_background_color);
        $cf7_custom_style_1_element_background_transparency = new BridgeQodeField("textsimple", "cf7_custom_style_1_element_background_transparency", "", esc_html__("Background Transparency (values: 0-1)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_1_element_background_transparency", $cf7_custom_style_1_element_background_transparency);
        $group2 = new BridgeQodeGroup(esc_html__("Form Elements' Border", "bridge"), esc_html__("Define border style for form elements (text input fields, textarea, select)", "bridge"));
        $panel1->addChild("group2", $group2);
        $row1 = new BridgeQodeRow();
        $group2->addChild("row1", $row1);
        $cf7_custom_style_1_element_border_color = new BridgeQodeField("colorsimple", "cf7_custom_style_1_element_border_color", "", esc_html__("Border Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_1_element_border_color", $cf7_custom_style_1_element_border_color);
        $cf7_custom_style_1_element_focus_border_color = new BridgeQodeField("colorsimple", "cf7_custom_style_1_element_focus_border_color", "", esc_html__("Focus Border Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_1_element_focus_border_color", $cf7_custom_style_1_element_focus_border_color);
        $cf7_custom_style_1_border_transparency = new BridgeQodeField("textsimple", "cf7_custom_style_1_border_transparency", "", esc_html__("Border Transparency (values: 0-1)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_1_border_transparency", $cf7_custom_style_1_border_transparency);
        $cf7_custom_style_1_element_border_width = new BridgeQodeField("textsimple", "cf7_custom_style_1_element_border_width", "", esc_html__("Border Width (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_1_element_border_width", $cf7_custom_style_1_element_border_width);
        $row2 = new BridgeQodeRow();
        $group2->addChild("row2", $row2);
        $cf7_custom_style_1_element_enable_border_bottom = new BridgeQodeField("yesnosimple", "cf7_custom_style_1_element_enable_border_bottom", "no", esc_html__("Enable only bottom border", "bridge"),esc_html__("This is some description", "bridge"));
        $row2->addChild("cf7_custom_style_1_element_enable_border_bottom", $cf7_custom_style_1_element_enable_border_bottom);

        $group3 = new BridgeQodeGroup(esc_html__("Form Elements' Border Radius", "bridge"), esc_html__("Define border radius for form elements (text input fields, textarea, select)", "bridge"));
        $panel1->addChild("group3", $group3);
        $row1 = new BridgeQodeRow();
        $group3->addChild("row1", $row1);
        $cf7_custom_style_1_element_border_radius_top_left = new BridgeQodeField("textsimple", "cf7_custom_style_1_element_border_radius_top_left", "", esc_html__("Top Left(px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_1_element_border_radius_top_left", $cf7_custom_style_1_element_border_radius_top_left);
        $cf7_custom_style_1_element_border_radius_top_right = new BridgeQodeField("textsimple", "cf7_custom_style_1_element_border_radius_top_right", "", esc_html__("Top Right(px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_1_element_border_radius_top_right", $cf7_custom_style_1_element_border_radius_top_right);
        $cf7_custom_style_1_element_border_radius_bottom_right = new BridgeQodeField("textsimple", "cf7_custom_style_1_element_border_radius_bottom_right", "", esc_html__("Bottom Right(px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_1_element_border_radius_bottom_right", $cf7_custom_style_1_element_border_radius_bottom_right);
        $cf7_custom_style_1_element_border_radius_bottom_left = new BridgeQodeField("textsimple", "cf7_custom_style_1_element_border_radius_bottom_left", "", esc_html__("Bottom Left(px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_1_element_border_radius_bottom_left", $cf7_custom_style_1_element_border_radius_bottom_left);


        $group4 = new BridgeQodeGroup(esc_html__("Form Elements' Text Style", "bridge"), esc_html__("Define text style for form elements (text input fields, textarea, select)", "bridge"));
        $panel1->addChild("group4", $group4);
        $row1 = new BridgeQodeRow();
        $group4->addChild("row1", $row1);
        $cf7_custom_style_1_element_font_color = new BridgeQodeField("colorsimple", "cf7_custom_style_1_element_font_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_1_element_font_color", $cf7_custom_style_1_element_font_color);
        $cf7_custom_style_1_element_font_focus_color = new BridgeQodeField("colorsimple", "cf7_custom_style_1_element_font_focus_color", "", esc_html__("Focus Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_1_element_font_focus_color", $cf7_custom_style_1_element_font_focus_color);
        $cf7_custom_style_1_element_font_size = new BridgeQodeField("textsimple", "cf7_custom_style_1_element_font_size", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_1_element_font_size", $cf7_custom_style_1_element_font_size);
        $cf7_custom_style_1_element_line_height = new BridgeQodeField("textsimple", "cf7_custom_style_1_element_line_height", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_1_element_line_height", $cf7_custom_style_1_element_line_height);
        $row2 = new BridgeQodeRow(true);
        $group4->addChild("row2", $row2);
        $cf7_custom_style_1_element_font_family = new BridgeQodeField("fontsimple", "cf7_custom_style_1_element_font_family", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("cf7_custom_style_1_element_font_family", $cf7_custom_style_1_element_font_family);
        $cf7_custom_style_1_element_font_style = new BridgeQodeField("selectblanksimple", "cf7_custom_style_1_element_font_style", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("cf7_custom_style_1_element_font_style", $cf7_custom_style_1_element_font_style);
        $cf7_custom_style_1_element_font_weight = new BridgeQodeField("selectblanksimple", "cf7_custom_style_1_element_font_weight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row2->addChild("cf7_custom_style_1_element_font_weight", $cf7_custom_style_1_element_font_weight);
        $cf7_custom_style_1_element_text_transform = new BridgeQodeField("selectblanksimple", "cf7_custom_style_1_element_text_transform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row2->addChild("cf7_custom_style_1_element_text_transform", $cf7_custom_style_1_element_text_transform);
        $row3 = new BridgeQodeRow(true);
        $group4->addChild("row3", $row3);
        $cf7_custom_style_1_element_letter_spacing = new BridgeQodeField("textsimple", "cf7_custom_style_1_element_letter_spacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row3->addChild("cf7_custom_style_1_element_letter_spacing", $cf7_custom_style_1_element_letter_spacing);

        $group5 = new BridgeQodeGroup(esc_html__("Form Elements' Padding", "bridge"), esc_html__("Define padding for form elements (text input fields, textarea, select)", "bridge"));
        $panel1->addChild("group5", $group5);
        $row1 = new BridgeQodeRow();
        $group5->addChild("row1", $row1);
        $cf7_custom_style_1_element_padding_top = new BridgeQodeField("textsimple", "cf7_custom_style_1_element_padding_top", "", esc_html__("Padding Top (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_1_element_padding_top", $cf7_custom_style_1_element_padding_top);
        $cf7_custom_style_1_element_padding_right = new BridgeQodeField("textsimple", "cf7_custom_style_1_element_padding_right", "", esc_html__("Padding Right (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_1_element_padding_right", $cf7_custom_style_1_element_padding_right);
        $cf7_custom_style_1_element_padding_bottom = new BridgeQodeField("textsimple", "cf7_custom_style_1_element_padding_bottom", "", esc_html__("Padding Bottom (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_1_element_padding_bottom", $cf7_custom_style_1_element_padding_bottom);
        $cf7_custom_style_1_element_padding_left = new BridgeQodeField("textsimple", "cf7_custom_style_1_element_padding_left", "", esc_html__("Padding Left (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_1_element_padding_left", $cf7_custom_style_1_element_padding_left);

        $group6 = new BridgeQodeGroup(esc_html__("Form Elements' Margin", "bridge"), esc_html__("Define margin for form elements (text input fields, textarea, select)", "bridge"));
        $panel1->addChild("group6", $group6);
        $row1 = new BridgeQodeRow();
        $group6->addChild("row1", $row1);
        $cf7_custom_style_1_element_margin_top = new BridgeQodeField("textsimple", "cf7_custom_style_1_element_margin_top", "", esc_html__("Margin Top (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_1_element_margin_top", $cf7_custom_style_1_element_margin_top);
        $cf7_custom_style_1_element_margin_bottom = new BridgeQodeField("textsimple", "cf7_custom_style_1_element_margin_bottom", "", esc_html__("Margin Bottom (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_1_element_margin_bottom", $cf7_custom_style_1_element_margin_bottom);

        $group7 = new BridgeQodeGroup(esc_html__("Button Background", "bridge"), esc_html__("Define background style for button", "bridge"));
        $panel1->addChild("group7", $group7);
        $row1 = new BridgeQodeRow();
        $group7->addChild("row1", $row1);
        $cf7_custom_style_1_button_background_color = new BridgeQodeField("colorsimple", "cf7_custom_style_1_button_background_color", "", esc_html__("Background Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_1_button_background_color", $cf7_custom_style_1_button_background_color);
        $cf7_custom_style_1_button_hover_background_color = new BridgeQodeField("colorsimple", "cf7_custom_style_1_button_hover_background_color", "", esc_html__("Hover Background Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_1_button_hover_background_color", $cf7_custom_style_1_button_hover_background_color);
        $cf7_custom_style_1_button_background_transparency = new BridgeQodeField("textsimple", "cf7_custom_style_1_button_background_transparency", "", esc_html__("Background Transparency (values: 0-1)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_1_button_background_transparency", $cf7_custom_style_1_button_background_transparency);
        $group8 = new BridgeQodeGroup("Button Border", "Define border style for button");
        $panel1->addChild("group8", $group8);
        $row1 = new BridgeQodeRow();
        $group8->addChild("row1", $row1);
        $cf7_custom_style_1_button_border_color = new BridgeQodeField("colorsimple", "cf7_custom_style_1_button_border_color", "", esc_html__("Border Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_1_button_border_color", $cf7_custom_style_1_button_border_color);
        $cf7_custom_style_1_button_hover_border_color = new BridgeQodeField("colorsimple", "cf7_custom_style_1_button_hover_border_color", "", esc_html__("Border Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_1_button_hover_border_color", $cf7_custom_style_1_button_hover_border_color);
        $cf7_custom_style_1_button_border_transparency = new BridgeQodeField("textsimple", "cf7_custom_style_1_button_border_transparency", "", esc_html__("Border Transparency (values: 0-1)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_1_button_border_transparency", $cf7_custom_style_1_button_border_transparency);
        $cf7_custom_style_1_button_border_width = new BridgeQodeField("textsimple", "cf7_custom_style_1_button_border_width", "", esc_html__("Border Width (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_1_button_border_width", $cf7_custom_style_1_button_border_width);

        $group9 = new BridgeQodeGroup(esc_html__("Button Border Radius", "bridge"), esc_html__("Define border radius for button", "bridge"));
        $panel1->addChild("group9", $group9);
        $row1 = new BridgeQodeRow();
        $group9->addChild("row1", $row1);
        $cf7_custom_style_1_button_border_radius_top_left = new BridgeQodeField("textsimple", "cf7_custom_style_1_button_border_radius_top_left", "", esc_html__("Top Left(px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_1_button_border_radius_top_left", $cf7_custom_style_1_button_border_radius_top_left);
        $cf7_custom_style_1_button_border_radius_top_right = new BridgeQodeField("textsimple", "cf7_custom_style_1_button_border_radius_top_right", "", esc_html__("Top Right(px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_1_button_border_radius_top_right", $cf7_custom_style_1_button_border_radius_top_right);
        $cf7_custom_style_1_button_border_radius_bottom_right = new BridgeQodeField("textsimple", "cf7_custom_style_1_button_border_radius_bottom_right", "", esc_html__("Bottom Right(px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_1_button_border_radius_bottom_right", $cf7_custom_style_1_button_border_radius_bottom_right);
        $cf7_custom_style_1_button_border_radius_bottom_left = new BridgeQodeField("textsimple", "cf7_custom_style_1_button_border_radius_bottom_left", "", esc_html__("Bottom Left(px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_1_button_border_radius_bottom_left", $cf7_custom_style_1_button_border_radius_bottom_left);

        $group10 = new BridgeQodeGroup(esc_html__("Button Text Style", "bridge"), esc_html__("Define text style for button", "bridge"));
        $panel1->addChild("group10", $group10);
        $row1 = new BridgeQodeRow();
        $group10->addChild("row1", $row1);
        $cf7_custom_style_1_button_font_color = new BridgeQodeField("colorsimple", "cf7_custom_style_1_button_font_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_1_button_font_color", $cf7_custom_style_1_button_font_color);
        $cf7_custom_style_1_button_font_hover_color = new BridgeQodeField("colorsimple", "cf7_custom_style_1_button_font_hover_color", "", esc_html__("Hover Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_1_button_font_hover_color", $cf7_custom_style_1_button_font_hover_color);
        $cf7_custom_style_1_button_font_size = new BridgeQodeField("textsimple", "cf7_custom_style_1_button_font_size", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_1_button_font_size", $cf7_custom_style_1_button_font_size);
        $cf7_custom_style_1_button_font_family = new BridgeQodeField("fontsimple", "cf7_custom_style_1_button_font_family", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_1_button_font_family", $cf7_custom_style_1_button_font_family);
        $row2 = new BridgeQodeRow(true);
        $group10->addChild("row2", $row2);
        $cf7_custom_style_1_button_font_style = new BridgeQodeField("selectblanksimple", "cf7_custom_style_1_button_font_style", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("cf7_custom_style_1_button_font_style", $cf7_custom_style_1_button_font_style);
        $cf7_custom_style_1_button_font_weight = new BridgeQodeField("selectblanksimple", "cf7_custom_style_1_button_font_weight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row2->addChild("cf7_custom_style_1_button_font_weight", $cf7_custom_style_1_button_font_weight);
        $cf7_custom_style_1_button_text_transform = new BridgeQodeField("selectblanksimple", "cf7_custom_style_1_button_text_transform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row2->addChild("cf7_custom_style_1_button_text_transform", $cf7_custom_style_1_button_text_transform);
        $cf7_custom_style_1_button_letter_spacing = new BridgeQodeField("textsimple", "cf7_custom_style_1_button_letter_spacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("cf7_custom_style_1_button_letter_spacing", $cf7_custom_style_1_button_letter_spacing);

        $cf7_custom_style_1_button_height = new BridgeQodeField("text", "cf7_custom_style_1_button_height", "", esc_html__("Button Height (px)", "bridge"), esc_html__("Enter button height in px ", "bridge"), array(), array("col_width" => 3));
        $panel1->addChild("cf7_custom_style_1_button_height", $cf7_custom_style_1_button_height);

        $cf7_custom_style_1_button_padding = new BridgeQodeField("text", "cf7_custom_style_1_button_padding", "", esc_html__("Button Left/Right Padding (px)", "bridge"), esc_html__("Enter button left and right padding in px ", "bridge"), array(), array("col_width" => 3));
        $panel1->addChild("cf7_custom_style_1_button_padding", $cf7_custom_style_1_button_padding);

		$cf7_custom_style_1_button_hover = new BridgeQodeField("select","cf7_custom_style_1_button_hover","",esc_html__("Button Hover Type", "bridge"),esc_html__("Choose button hover type", "bridge"),array(
			"" => esc_html__("Default", "bridge"),
			"enlarge" => esc_html__("Enlarge", "bridge")
		));
		$panel1->addChild("cf7_custom_style_1_button_hover",$cf7_custom_style_1_button_hover);

        bridge_qode_add_admin_field(
            array(
                'name'              => 'button_cf1_full_width',
                'type'              => 'yesno',
                'label'             => esc_html__('Enable Full Width Button', 'bridge'),
                'description'       => esc_html__('Enabling this option will make the "Send" button take up the full width of the contact form.', 'bridge'),
                'default_value'     => 'no',
                'parent'            => $panel1,
            )
        );

        $cf7_custom_style_1_textarea_height = new BridgeQodeField("text", "cf7_custom_style_1_textarea_height", "", esc_html__("Textarea Height (px)", "bridge"), esc_html__("Enter height in px for textarea form element", "bridge"), array(), array("col_width" => 3));
        $panel1->addChild("cf7_custom_style_1_textarea_height", $cf7_custom_style_1_textarea_height);

        $panel2 = new BridgeQodePanel(esc_html__("Custom Style 2 Settings", "bridge"), "contact_form_custom_style_2_panel");
        $contactform7page->addChild("panel2", $panel2);

        $group1 = new BridgeQodeGroup(esc_html__("Form Elements' Background", "bridge"), esc_html__("Define background style for form elements (input, textarea, select)", "bridge"));
        $panel2->addChild("group1", $group1);
        $row1 = new BridgeQodeRow();
        $group1->addChild("row1", $row1);
        $cf7_custom_style_2_element_background_color = new BridgeQodeField("colorsimple", "cf7_custom_style_2_element_background_color", "", esc_html__("Background Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_2_element_background_color", $cf7_custom_style_2_element_background_color);
        $cf7_custom_style_2_element_focus_background_color = new BridgeQodeField("colorsimple", "cf7_custom_style_2_element_focus_background_color", "", esc_html__("Focus Background Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_2_element_focus_background_color", $cf7_custom_style_2_element_focus_background_color);
        $cf7_custom_style_2_element_background_transparency = new BridgeQodeField("textsimple", "cf7_custom_style_2_element_background_transparency", "", esc_html__("Background Transparency (values: 0-1)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_2_element_background_transparency", $cf7_custom_style_2_element_background_transparency);
        $group2 = new BridgeQodeGroup(esc_html__("Form Elements' Border", "bridge"), esc_html__("Define border style for form elements (text input fields, textarea, select)", "bridge"));
        $panel2->addChild("group2", $group2);
        $row1 = new BridgeQodeRow();
        $group2->addChild("row1", $row1);
        $cf7_custom_style_2_element_border_color = new BridgeQodeField("colorsimple", "cf7_custom_style_2_element_border_color", "", esc_html__("Border Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_2_element_border_color", $cf7_custom_style_2_element_border_color);
        $cf7_custom_style_2_element_focus_border_color = new BridgeQodeField("colorsimple", "cf7_custom_style_2_element_focus_border_color", "", esc_html__("Focus Border Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_2_element_focus_border_color", $cf7_custom_style_2_element_focus_border_color);
        $cf7_custom_style_2_border_transparency = new BridgeQodeField("textsimple", "cf7_custom_style_2_border_transparency", "", esc_html__("Border Transparency (values: 0-1)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_2_border_transparency", $cf7_custom_style_2_border_transparency);
        $cf7_custom_style_2_element_border_width = new BridgeQodeField("textsimple", "cf7_custom_style_2_element_border_width", "", esc_html__("Border Width (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_2_element_border_width", $cf7_custom_style_2_element_border_width);
        $row2 = new BridgeQodeRow();
        $group2->addChild("row2", $row2);
        $cf7_custom_style_2_element_enable_border_bottom = new BridgeQodeField("yesnosimple", "cf7_custom_style_2_element_enable_border_bottom", "no", esc_html__("Enable only bottom border", "bridge"),esc_html__("This is some description", "bridge"));
        $row2->addChild("cf7_custom_style_2_element_enable_border_bottom", $cf7_custom_style_2_element_enable_border_bottom);

        $group3 = new BridgeQodeGroup(esc_html__("Form Elements' Border Radius", "bridge"), esc_html__("Define border radius for form elements (text input fields, textarea, select)", "bridge"));
        $panel2->addChild("group3", $group3);
        $row1 = new BridgeQodeRow();
        $group3->addChild("row1", $row1);
        $cf7_custom_style_2_element_border_radius_top_left = new BridgeQodeField("textsimple", "cf7_custom_style_2_element_border_radius_top_left", "", esc_html__("Top Left(px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_2_element_border_radius_top_left", $cf7_custom_style_2_element_border_radius_top_left);
        $cf7_custom_style_2_element_border_radius_top_right = new BridgeQodeField("textsimple", "cf7_custom_style_2_element_border_radius_top_right", "", esc_html__("Top Right(px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_2_element_border_radius_top_right", $cf7_custom_style_2_element_border_radius_top_right);
        $cf7_custom_style_2_element_border_radius_bottom_right = new BridgeQodeField("textsimple", "cf7_custom_style_2_element_border_radius_bottom_right", "", esc_html__("Bottom Right(px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_2_element_border_radius_bottom_right", $cf7_custom_style_2_element_border_radius_bottom_right);
        $cf7_custom_style_2_element_border_radius_bottom_left = new BridgeQodeField("textsimple", "cf7_custom_style_2_element_border_radius_bottom_left", "", esc_html__("Bottom Left(px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_2_element_border_radius_bottom_left", $cf7_custom_style_2_element_border_radius_bottom_left);

        $group4 = new BridgeQodeGroup(esc_html__("Form Elements' Text Style", "bridge"), esc_html__("Define text style for form elements (text input fields, textarea, select)", "bridge"));
        $panel2->addChild("group4", $group4);
        $row1 = new BridgeQodeRow();
        $group4->addChild("row1", $row1);
        $cf7_custom_style_2_element_font_color = new BridgeQodeField("colorsimple", "cf7_custom_style_2_element_font_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_2_element_font_color", $cf7_custom_style_2_element_font_color);
        $cf7_custom_style_2_element_font_focus_color = new BridgeQodeField("colorsimple", "cf7_custom_style_2_element_font_focus_color", "", esc_html__("Focus Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_2_element_font_focus_color", $cf7_custom_style_2_element_font_focus_color);
        $cf7_custom_style_2_element_font_size = new BridgeQodeField("textsimple", "cf7_custom_style_2_element_font_size", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_2_element_font_size", $cf7_custom_style_2_element_font_size);
        $cf7_custom_style_2_element_line_height = new BridgeQodeField("textsimple", "cf7_custom_style_2_element_line_height", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_2_element_line_height", $cf7_custom_style_2_element_line_height);
        $row2 = new BridgeQodeRow(true);
        $group4->addChild("row2", $row2);
        $cf7_custom_style_2_element_font_family = new BridgeQodeField("fontsimple", "cf7_custom_style_2_element_font_family", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("cf7_custom_style_2_element_font_family", $cf7_custom_style_2_element_font_family);
        $cf7_custom_style_2_element_font_style = new BridgeQodeField("selectblanksimple", "cf7_custom_style_2_element_font_style", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("cf7_custom_style_2_element_font_style", $cf7_custom_style_2_element_font_style);
        $cf7_custom_style_2_element_font_weight = new BridgeQodeField("selectblanksimple", "cf7_custom_style_2_element_font_weight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row2->addChild("cf7_custom_style_2_element_font_weight", $cf7_custom_style_2_element_font_weight);
        $cf7_custom_style_2_element_text_transform = new BridgeQodeField("selectblanksimple", "cf7_custom_style_2_element_text_transform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row2->addChild("cf7_custom_style_2_element_text_transform", $cf7_custom_style_2_element_text_transform);
        $row3 = new BridgeQodeRow(true);
        $group4->addChild("row3", $row3);
        $cf7_custom_style_2_element_letter_spacing = new BridgeQodeField("textsimple", "cf7_custom_style_2_element_letter_spacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row3->addChild("cf7_custom_style_2_element_letter_spacing", $cf7_custom_style_2_element_letter_spacing);
        $group5 = new BridgeQodeGroup(esc_html__("Form Elements' Padding", "bridge"), esc_html__("Define padding for form elements (text input fields, textarea, select)", "bridge"));
        $panel2->addChild("group5", $group5);
        $row1 = new BridgeQodeRow();
        $group5->addChild("row1", $row1);
        $cf7_custom_style_2_element_padding_top = new BridgeQodeField("textsimple", "cf7_custom_style_2_element_padding_top", "", esc_html__("Padding Top (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_2_element_padding_top", $cf7_custom_style_2_element_padding_top);
        $cf7_custom_style_2_element_padding_right = new BridgeQodeField("textsimple", "cf7_custom_style_2_element_padding_right", "", esc_html__("Padding Right (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_2_element_padding_right", $cf7_custom_style_2_element_padding_right);
        $cf7_custom_style_2_element_padding_bottom = new BridgeQodeField("textsimple", "cf7_custom_style_2_element_padding_bottom", "", esc_html__("Padding Bottom (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_2_element_padding_bottom", $cf7_custom_style_2_element_padding_bottom);
        $cf7_custom_style_2_element_padding_left = new BridgeQodeField("textsimple", "cf7_custom_style_2_element_padding_left", "", esc_html__("Padding Left (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_2_element_padding_left", $cf7_custom_style_2_element_padding_left);
        $group6 = new BridgeQodeGroup(esc_html__("Form Elements' Margin", "bridge"), esc_html__("Define margin for form elements (text input fields, textarea, select)", "bridge"));
        $panel2->addChild("group6", $group6);
        $row1 = new BridgeQodeRow();
        $group6->addChild("row1", $row1);
        $cf7_custom_style_2_element_margin_top = new BridgeQodeField("textsimple", "cf7_custom_style_2_element_margin_top", "", esc_html__("Margin Top (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_2_element_margin_top", $cf7_custom_style_2_element_margin_top);
        $cf7_custom_style_2_element_margin_bottom = new BridgeQodeField("textsimple", "cf7_custom_style_2_element_margin_bottom", "", esc_html__("Margin Bottom (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_2_element_margin_bottom", $cf7_custom_style_2_element_margin_bottom);

        $group7 = new BridgeQodeGroup(esc_html__("Button Background", "bridge"), esc_html__("Define background style for button", "bridge"));
        $panel2->addChild("group7", $group7);
        $row1 = new BridgeQodeRow();
        $group7->addChild("row1", $row1);
        $cf7_custom_style_2_button_background_color = new BridgeQodeField("colorsimple", "cf7_custom_style_2_button_background_color", "", esc_html__("Background Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_2_button_background_color", $cf7_custom_style_2_button_background_color);
        $cf7_custom_style_2_button_hover_background_color = new BridgeQodeField("colorsimple", "cf7_custom_style_2_button_hover_background_color", "", esc_html__("Hover Background Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_2_button_hover_background_color", $cf7_custom_style_2_button_hover_background_color);
        $cf7_custom_style_2_button_background_transparency = new BridgeQodeField("textsimple", "cf7_custom_style_2_button_background_transparency", "", esc_html__("Background Transparency (values: 0-1)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_2_button_background_transparency", $cf7_custom_style_2_button_background_transparency);
        $group8 = new BridgeQodeGroup("Button Border", "Define border style for button");
        $panel2->addChild("group8", $group8);
        $row1 = new BridgeQodeRow();
        $group8->addChild("row1", $row1);
        $cf7_custom_style_2_button_border_color = new BridgeQodeField("colorsimple", "cf7_custom_style_2_button_border_color", "", esc_html__("Border Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_2_button_border_color", $cf7_custom_style_2_button_border_color);
        $cf7_custom_style_2_button_hover_border_color = new BridgeQodeField("colorsimple", "cf7_custom_style_2_button_hover_border_color", "", esc_html__("Border Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_2_button_hover_border_color", $cf7_custom_style_2_button_hover_border_color);
        $cf7_custom_style_2_button_border_transparency = new BridgeQodeField("textsimple", "cf7_custom_style_2_button_border_transparency", "", esc_html__("Border Transparency (values: 0-1)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_2_button_border_transparency", $cf7_custom_style_2_button_border_transparency);
        $cf7_custom_style_2_button_border_width = new BridgeQodeField("textsimple", "cf7_custom_style_2_button_border_width", "", esc_html__("Border Width (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_2_button_border_width", $cf7_custom_style_2_button_border_width);
        $group9 = new BridgeQodeGroup(esc_html__("Button Border Radius", "bridge"), esc_html__("Define border radius for button", "bridge"));
        $panel2->addChild("group9", $group9);
        $row1 = new BridgeQodeRow();
        $group9->addChild("row1", $row1);
        $cf7_custom_style_2_button_border_radius_top_left = new BridgeQodeField("textsimple", "cf7_custom_style_2_button_border_radius_top_left", "", esc_html__("Top Left(px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_2_button_border_radius_top_left", $cf7_custom_style_2_button_border_radius_top_left);
        $cf7_custom_style_2_button_border_radius_top_right = new BridgeQodeField("textsimple", "cf7_custom_style_2_button_border_radius_top_right", "", esc_html__("Top Right(px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_2_button_border_radius_top_right", $cf7_custom_style_2_button_border_radius_top_right);
        $cf7_custom_style_2_button_border_radius_bottom_right = new BridgeQodeField("textsimple", "cf7_custom_style_2_button_border_radius_bottom_right", "", esc_html__("Bottom Right(px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_2_button_border_radius_bottom_right", $cf7_custom_style_2_button_border_radius_bottom_right);
        $cf7_custom_style_2_button_border_radius_bottom_left = new BridgeQodeField("textsimple", "cf7_custom_style_2_button_border_radius_bottom_left", "", esc_html__("Bottom Left(px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_2_button_border_radius_bottom_left", $cf7_custom_style_2_button_border_radius_bottom_left);

        $group10 = new BridgeQodeGroup(esc_html__("Button Text Style", "bridge"), esc_html__("Define text style for button", "bridge"));
        $panel2->addChild("group10", $group10);
        $row1 = new BridgeQodeRow();
        $group10->addChild("row1", $row1);
        $cf7_custom_style_2_button_font_color = new BridgeQodeField("colorsimple", "cf7_custom_style_2_button_font_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_2_button_font_color", $cf7_custom_style_2_button_font_color);
        $cf7_custom_style_2_button_font_hover_color = new BridgeQodeField("colorsimple", "cf7_custom_style_2_button_font_hover_color", "", esc_html__("Hover Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_2_button_font_hover_color", $cf7_custom_style_2_button_font_hover_color);
        $cf7_custom_style_2_button_font_size = new BridgeQodeField("textsimple", "cf7_custom_style_2_button_font_size", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_2_button_font_size", $cf7_custom_style_2_button_font_size);
        $cf7_custom_style_2_button_font_family = new BridgeQodeField("fontsimple", "cf7_custom_style_2_button_font_family", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_2_button_font_family", $cf7_custom_style_2_button_font_family);
        $row2 = new BridgeQodeRow(true);
        $group10->addChild("row2", $row2);
        $cf7_custom_style_2_button_font_style = new BridgeQodeField("selectblanksimple", "cf7_custom_style_2_button_font_style", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("cf7_custom_style_2_button_font_style", $cf7_custom_style_2_button_font_style);
        $cf7_custom_style_2_button_font_weight = new BridgeQodeField("selectblanksimple", "cf7_custom_style_2_button_font_weight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row2->addChild("cf7_custom_style_2_button_font_weight", $cf7_custom_style_2_button_font_weight);
        $cf7_custom_style_2_button_text_transform = new BridgeQodeField("selectblanksimple", "cf7_custom_style_2_button_text_transform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row2->addChild("cf7_custom_style_2_button_text_transform", $cf7_custom_style_2_button_text_transform);
        $cf7_custom_style_2_button_letter_spacing = new BridgeQodeField("textsimple", "cf7_custom_style_2_button_letter_spacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("cf7_custom_style_2_button_letter_spacing", $cf7_custom_style_2_button_letter_spacing);

        $cf7_custom_style_2_button_height = new BridgeQodeField("text", "cf7_custom_style_2_button_height", "", esc_html__("Button Height (px)", "bridge"), esc_html__("Enter button height in px ", "bridge"), array(), array("col_width" => 3));
        $panel2->addChild("cf7_custom_style_2_button_height", $cf7_custom_style_2_button_height);

        $cf7_custom_style_2_button_padding = new BridgeQodeField("text", "cf7_custom_style_2_button_padding", "", esc_html__("Button Left/Right Padding (px)", "bridge"), esc_html__("Enter button left and right padding in px ", "bridge"), array(), array("col_width" => 3));
        $panel2->addChild("cf7_custom_style_2_button_padding", $cf7_custom_style_2_button_padding);

		$cf7_custom_style_2_button_hover = new BridgeQodeField("select","cf7_custom_style_2_button_hover","",esc_html__("Button Hover Type", "bridge"),esc_html__("Choose button hover type", "bridge"),array(
			"" => esc_html__("Default", "bridge"),
			"enlarge" => esc_html__("Enlarge", "bridge")
		));
		$panel2->addChild("cf7_custom_style_2_button_hover",$cf7_custom_style_2_button_hover);

        bridge_qode_add_admin_field(
            array(
                'name'              => 'button_cf2_full_width',
                'type'              => 'yesno',
                'label'             => esc_html__('Enable Full Width Button', 'bridge'),
                'description'       => esc_html__('Enabling this option will make the "Send" button take up the full width of the contact form.', 'bridge'),
                'default_value'     => 'no',
                'parent'            => $panel2,
            )
        );

        $cf7_custom_style_2_textarea_height = new BridgeQodeField("text", "cf7_custom_style_2_textarea_height", "", esc_html__("Textarea Height (px)", "bridge"), esc_html__("Enter height in px for textarea form element", "bridge"), array(), array("col_width" => 3));
        $panel2->addChild("cf7_custom_style_2_textarea_height", $cf7_custom_style_2_textarea_height);

        $panel3 = new BridgeQodePanel(esc_html__("Custom Style 3 Settings", "bridge"), "contact_form_custom_style_3_panel");
        $contactform7page->addChild("panel3", $panel3);

        $group1 = new BridgeQodeGroup(esc_html__("Form Elements' Background", "bridge"), esc_html__("Define background style for form elements (input, textarea, select)", "bridge"));
        $panel3->addChild("group1", $group1);
        $row1 = new BridgeQodeRow();
        $group1->addChild("row1", $row1);
        $cf7_custom_style_3_element_background_color = new BridgeQodeField("colorsimple", "cf7_custom_style_3_element_background_color", "", esc_html__("Background Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_3_element_background_color", $cf7_custom_style_3_element_background_color);
        $cf7_custom_style_3_element_focus_background_color = new BridgeQodeField("colorsimple", "cf7_custom_style_3_element_focus_background_color", "", esc_html__("Focus Background Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_3_element_focus_background_color", $cf7_custom_style_3_element_focus_background_color);
        $cf7_custom_style_3_element_background_transparency = new BridgeQodeField("textsimple", "cf7_custom_style_3_element_background_transparency", "", esc_html__("Background Transparency (values: 0-1)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_3_element_background_transparency", $cf7_custom_style_3_element_background_transparency);
        $group2 = new BridgeQodeGroup(esc_html__("Form Elements' Border", "bridge"), esc_html__("Define border style for form elements (text input fields, textarea, select)", "bridge"));
        $panel3->addChild("group2", $group2);
        $row1 = new BridgeQodeRow();
        $group2->addChild("row1", $row1);
        $cf7_custom_style_3_element_border_color = new BridgeQodeField("colorsimple", "cf7_custom_style_3_element_border_color", "", esc_html__("Border Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_3_element_border_color", $cf7_custom_style_3_element_border_color);
        $cf7_custom_style_3_element_focus_border_color = new BridgeQodeField("colorsimple", "cf7_custom_style_3_element_focus_border_color", "", esc_html__("Focus Border Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_3_element_focus_border_color", $cf7_custom_style_3_element_focus_border_color);
        $cf7_custom_style_3_border_transparency = new BridgeQodeField("textsimple", "cf7_custom_style_3_border_transparency", "", esc_html__("Border Transparency (values: 0-1)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_3_border_transparency", $cf7_custom_style_3_border_transparency);
        $cf7_custom_style_3_element_border_width = new BridgeQodeField("textsimple", "cf7_custom_style_3_element_border_width", "", esc_html__("Border Width (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_3_element_border_width", $cf7_custom_style_3_element_border_width);
        $row2 = new BridgeQodeRow();
        $group2->addChild("row2", $row2);
        $cf7_custom_style_3_element_enable_border_bottom = new BridgeQodeField("yesnosimple", "cf7_custom_style_3_element_enable_border_bottom", "no", esc_html__("Enable only bottom border", "bridge"),esc_html__("This is some description", "bridge"));
        $row2->addChild("cf7_custom_style_3_element_enable_border_bottom", $cf7_custom_style_3_element_enable_border_bottom);
        $group3 = new BridgeQodeGroup(esc_html__("Form Elements' Border Radius", "bridge"), esc_html__("Define border radius for form elements (text input fields, textarea, select)", "bridge"));
        $panel3->addChild("group3", $group3);
        $row1 = new BridgeQodeRow();
        $group3->addChild("row1", $row1);
        $cf7_custom_style_3_element_border_radius_top_left = new BridgeQodeField("textsimple", "cf7_custom_style_3_element_border_radius_top_left", "", esc_html__("Top Left(px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_3_element_border_radius_top_left", $cf7_custom_style_3_element_border_radius_top_left);
        $cf7_custom_style_3_element_border_radius_top_right = new BridgeQodeField("textsimple", "cf7_custom_style_3_element_border_radius_top_right", "", esc_html__("Top Right(px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_3_element_border_radius_top_right", $cf7_custom_style_3_element_border_radius_top_right);
        $cf7_custom_style_3_element_border_radius_bottom_right = new BridgeQodeField("textsimple", "cf7_custom_style_3_element_border_radius_bottom_right", "", esc_html__("Bottom Right(px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_3_element_border_radius_bottom_right", $cf7_custom_style_3_element_border_radius_bottom_right);
        $cf7_custom_style_3_element_border_radius_bottom_left = new BridgeQodeField("textsimple", "cf7_custom_style_3_element_border_radius_bottom_left", "", esc_html__("Bottom Left(px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_3_element_border_radius_bottom_left", $cf7_custom_style_3_element_border_radius_bottom_left);

        $group4 = new BridgeQodeGroup(esc_html__("Form Elements' Text Style", "bridge"), esc_html__("Define text style for form elements (text input fields, textarea, select)", "bridge"));
        $panel3->addChild("group4", $group4);
        $row1 = new BridgeQodeRow();
        $group4->addChild("row1", $row1);
        $cf7_custom_style_3_element_font_color = new BridgeQodeField("colorsimple", "cf7_custom_style_3_element_font_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_3_element_font_color", $cf7_custom_style_3_element_font_color);
        $cf7_custom_style_3_element_font_focus_color = new BridgeQodeField("colorsimple", "cf7_custom_style_3_element_font_focus_color", "", esc_html__("Focus Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_3_element_font_focus_color", $cf7_custom_style_3_element_font_focus_color);
        $cf7_custom_style_3_element_font_size = new BridgeQodeField("textsimple", "cf7_custom_style_3_element_font_size", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_3_element_font_size", $cf7_custom_style_3_element_font_size);
        $cf7_custom_style_3_element_line_height = new BridgeQodeField("textsimple", "cf7_custom_style_3_element_line_height", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_3_element_line_height", $cf7_custom_style_3_element_line_height);
        $row2 = new BridgeQodeRow(true);
        $group4->addChild("row2", $row2);
        $cf7_custom_style_3_element_font_family = new BridgeQodeField("fontsimple", "cf7_custom_style_3_element_font_family", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("cf7_custom_style_3_element_font_family", $cf7_custom_style_3_element_font_family);
        $cf7_custom_style_3_element_font_style = new BridgeQodeField("selectblanksimple", "cf7_custom_style_3_element_font_style", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("cf7_custom_style_3_element_font_style", $cf7_custom_style_3_element_font_style);
        $cf7_custom_style_3_element_font_weight = new BridgeQodeField("selectblanksimple", "cf7_custom_style_3_element_font_weight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row2->addChild("cf7_custom_style_3_element_font_weight", $cf7_custom_style_3_element_font_weight);
        $cf7_custom_style_3_element_text_transform = new BridgeQodeField("selectblanksimple", "cf7_custom_style_3_element_text_transform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row2->addChild("cf7_custom_style_3_element_text_transform", $cf7_custom_style_3_element_text_transform);
        $row3 = new BridgeQodeRow(true);
        $group4->addChild("row3", $row3);
        $cf7_custom_style_3_element_letter_spacing = new BridgeQodeField("textsimple", "cf7_custom_style_3_element_letter_spacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row3->addChild("cf7_custom_style_3_element_letter_spacing", $cf7_custom_style_3_element_letter_spacing);
        $group5 = new BridgeQodeGroup(esc_html__("Form Elements' Padding", "bridge"), esc_html__("Define padding for form elements (text input fields, textarea, select)", "bridge"));
        $panel3->addChild("group5", $group5);
        $row1 = new BridgeQodeRow();
        $group5->addChild("row1", $row1);
        $cf7_custom_style_3_element_padding_top = new BridgeQodeField("textsimple", "cf7_custom_style_3_element_padding_top", "", esc_html__("Padding Top (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_3_element_padding_top", $cf7_custom_style_3_element_padding_top);
        $cf7_custom_style_3_element_padding_right = new BridgeQodeField("textsimple", "cf7_custom_style_3_element_padding_right", "", esc_html__("Padding Right (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_3_element_padding_right", $cf7_custom_style_3_element_padding_right);
        $cf7_custom_style_3_element_padding_bottom = new BridgeQodeField("textsimple", "cf7_custom_style_3_element_padding_bottom", "", esc_html__("Padding Bottom (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_3_element_padding_bottom", $cf7_custom_style_3_element_padding_bottom);
        $cf7_custom_style_3_element_padding_left = new BridgeQodeField("textsimple", "cf7_custom_style_3_element_padding_left", "", esc_html__("Padding Left (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_3_element_padding_left", $cf7_custom_style_3_element_padding_left);

        $group6 = new BridgeQodeGroup(esc_html__("Form Elements' Margin", "bridge"), esc_html__("Define margin for form elements (text input fields, textarea, select)", "bridge"));
        $panel3->addChild("group6", $group6);
        $row1 = new BridgeQodeRow();
        $group6->addChild("row1", $row1);
        $cf7_custom_style_3_element_margin_top = new BridgeQodeField("textsimple", "cf7_custom_style_3_element_margin_top", "", esc_html__("Margin Top (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_3_element_margin_top", $cf7_custom_style_3_element_margin_top);
        $cf7_custom_style_3_element_margin_bottom = new BridgeQodeField("textsimple", "cf7_custom_style_3_element_margin_bottom", "", esc_html__("Margin Bottom (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_3_element_margin_bottom", $cf7_custom_style_3_element_margin_bottom);

        $group7 = new BridgeQodeGroup(esc_html__("Button Background", "bridge"), esc_html__("Define background style for button", "bridge"));
        $panel3->addChild("group7", $group7);
        $row1 = new BridgeQodeRow();
        $group7->addChild("row1", $row1);
        $cf7_custom_style_3_button_background_color = new BridgeQodeField("colorsimple", "cf7_custom_style_3_button_background_color", "", esc_html__("Background Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_3_button_background_color", $cf7_custom_style_3_button_background_color);
        $cf7_custom_style_3_button_hover_background_color = new BridgeQodeField("colorsimple", "cf7_custom_style_3_button_hover_background_color", "", esc_html__("Hover Background Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_3_button_hover_background_color", $cf7_custom_style_3_button_hover_background_color);
        $cf7_custom_style_3_button_background_transparency = new BridgeQodeField("textsimple", "cf7_custom_style_3_button_background_transparency", "", esc_html__("Background Transparency (values: 0-1)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_3_button_background_transparency", $cf7_custom_style_3_button_background_transparency);
        $group8 = new BridgeQodeGroup("Button Border", "Define border style for button");
        $panel3->addChild("group8", $group8);
        $row1 = new BridgeQodeRow();
        $group8->addChild("row1", $row1);
        $cf7_custom_style_3_button_border_color = new BridgeQodeField("colorsimple", "cf7_custom_style_3_button_border_color", "", esc_html__("Border Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_3_button_border_color", $cf7_custom_style_3_button_border_color);
        $cf7_custom_style_3_button_hover_border_color = new BridgeQodeField("colorsimple", "cf7_custom_style_3_button_hover_border_color", "", esc_html__("Border Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_3_button_hover_border_color", $cf7_custom_style_3_button_hover_border_color);
        $cf7_custom_style_3_button_border_transparency = new BridgeQodeField("textsimple", "cf7_custom_style_3_button_border_transparency", "", esc_html__("Border Transparency (values: 0-1)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_3_button_border_transparency", $cf7_custom_style_3_button_border_transparency);
        $cf7_custom_style_3_button_border_width = new BridgeQodeField("textsimple", "cf7_custom_style_3_button_border_width", "", esc_html__("Border Width (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_3_button_border_width", $cf7_custom_style_3_button_border_width);
        $group9 = new BridgeQodeGroup(esc_html__("Button Border Radius", "bridge"), esc_html__("Define border radius for button", "bridge"));
        $panel3->addChild("group9", $group9);
        $row1 = new BridgeQodeRow();
        $group9->addChild("row1", $row1);
        $cf7_custom_style_3_button_border_radius_top_left = new BridgeQodeField("textsimple", "cf7_custom_style_3_button_border_radius_top_left", "", esc_html__("Top Left(px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_3_button_border_radius_top_left", $cf7_custom_style_3_button_border_radius_top_left);
        $cf7_custom_style_3_button_border_radius_top_right = new BridgeQodeField("textsimple", "cf7_custom_style_3_button_border_radius_top_right", "", esc_html__("Top Right(px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_3_button_border_radius_top_right", $cf7_custom_style_3_button_border_radius_top_right);
        $cf7_custom_style_3_button_border_radius_bottom_right = new BridgeQodeField("textsimple", "cf7_custom_style_3_button_border_radius_bottom_right", "", esc_html__("Bottom Right(px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_3_button_border_radius_bottom_right", $cf7_custom_style_3_button_border_radius_bottom_right);
        $cf7_custom_style_3_button_border_radius_bottom_left = new BridgeQodeField("textsimple", "cf7_custom_style_3_button_border_radius_bottom_left", "", esc_html__("Bottom Left(px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_3_button_border_radius_bottom_left", $cf7_custom_style_3_button_border_radius_bottom_left);
        $group10 = new BridgeQodeGroup(esc_html__("Button Text Style", "bridge"), esc_html__("Define text style for button", "bridge"));
        $panel3->addChild("group10", $group10);
        $row1 = new BridgeQodeRow();
        $group10->addChild("row1", $row1);
        $cf7_custom_style_3_button_font_color = new BridgeQodeField("colorsimple", "cf7_custom_style_3_button_font_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_3_button_font_color", $cf7_custom_style_3_button_font_color);
        $cf7_custom_style_3_button_font_hover_color = new BridgeQodeField("colorsimple", "cf7_custom_style_3_button_font_hover_color", "", esc_html__("Hover Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_3_button_font_hover_color", $cf7_custom_style_3_button_font_hover_color);
        $cf7_custom_style_3_button_font_size = new BridgeQodeField("textsimple", "cf7_custom_style_3_button_font_size", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_3_button_font_size", $cf7_custom_style_3_button_font_size);
        $cf7_custom_style_3_button_font_family = new BridgeQodeField("fontsimple", "cf7_custom_style_3_button_font_family", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("cf7_custom_style_3_button_font_family", $cf7_custom_style_3_button_font_family);
        $row2 = new BridgeQodeRow(true);
        $group10->addChild("row2", $row2);
        $cf7_custom_style_3_button_font_style = new BridgeQodeField("selectblanksimple", "cf7_custom_style_3_button_font_style", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("cf7_custom_style_3_button_font_style", $cf7_custom_style_3_button_font_style);
        $cf7_custom_style_3_button_font_weight = new BridgeQodeField("selectblanksimple", "cf7_custom_style_3_button_font_weight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row2->addChild("cf7_custom_style_3_button_font_weight", $cf7_custom_style_3_button_font_weight);
        $cf7_custom_style_3_button_text_transform = new BridgeQodeField("selectblanksimple", "cf7_custom_style_3_button_text_transform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row2->addChild("cf7_custom_style_3_button_text_transform", $cf7_custom_style_3_button_text_transform);
        $cf7_custom_style_3_button_letter_spacing = new BridgeQodeField("textsimple", "cf7_custom_style_3_button_letter_spacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("cf7_custom_style_3_button_letter_spacing", $cf7_custom_style_3_button_letter_spacing);

        $cf7_custom_style_3_button_height = new BridgeQodeField("text", "cf7_custom_style_3_button_height", "", esc_html__("Button Height (px)", "bridge"), esc_html__("Enter button height in px ", "bridge"), array(), array("col_width" => 3));
        $panel3->addChild("cf7_custom_style_3_button_height", $cf7_custom_style_3_button_height);

        $cf7_custom_style_3_button_padding = new BridgeQodeField("text", "cf7_custom_style_3_button_padding", "", esc_html__("Button Left/Right Padding (px)", "bridge"), esc_html__("Enter button left and right padding in px ", "bridge"), array(), array("col_width" => 3));
        $panel3->addChild("cf7_custom_style_3_button_padding", $cf7_custom_style_3_button_padding);

		$cf7_custom_style_3_button_hover = new BridgeQodeField("select","cf7_custom_style_3_button_hover","",esc_html__("Button Hover Type", "bridge"),esc_html__("Choose button hover type", "bridge"),array(
			"" => esc_html__("Default", "bridge"),
			"enlarge" => esc_html__("Enlarge", "bridge")
		));
		$panel3->addChild("cf7_custom_style_3_button_hover",$cf7_custom_style_3_button_hover);

        bridge_qode_add_admin_field(
            array(
                'name'              => 'button_cf3_full_width',
                'type'              => 'yesno',
                'label'             => esc_html__('Enable Full Width Button', 'bridge'),
                'description'       => esc_html__('Enabling this option will make the "Send" button take up the full width of the contact form.', 'bridge'),
                'default_value'     => 'no',
                'parent'            => $panel3,
            )
        );

        $cf7_custom_style_3_textarea_height = new BridgeQodeField("text", "cf7_custom_style_3_textarea_height", "", esc_html__("Textarea Height (px)", "bridge"), esc_html__("Enter height in px for textarea form element", "bridge"), array(), array("col_width" => 3));
        $panel3->addChild("cf7_custom_style_3_textarea_height", $cf7_custom_style_3_textarea_height);

    }
    add_action('bridge_qode_action_options_map','bridge_qode_contactform7_options_map',190);
}