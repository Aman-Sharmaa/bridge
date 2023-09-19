<?php

if(!function_exists('bridge_qode_elements_options_map')) {
    /**
     * Elements options page
     */
    function bridge_qode_elements_options_map() {

        $elementsPage = new BridgeQodeAdminPage("_elements", esc_html__("Elements", "bridge"), "fa fa-flag-o");
        bridge_qode_framework()->qodeOptions->addAdminPage("elementsPage", $elementsPage);

        //Separators

        $panel2 = new BridgeQodePanel(esc_html__("Separators", "bridge"), "separators_panel");
        $elementsPage->addChild("panel2", $panel2);

        $group1 = new BridgeQodeGroup(esc_html__("Normal", "bridge"), esc_html__('Define styles for separator of type "Normal"', 'bridge'));
        $panel2->addChild("group1", $group1);
        $row1 = new BridgeQodeRow();
        $group1->addChild("row1", $row1);
        $separator_color = new BridgeQodeField("colorsimple", "separator_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("separator_color", $separator_color);
        $separator_color_transparency = new BridgeQodeField("textsimple", "separator_color_transparency", "", esc_html__("Transparency", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("separator_color_transparency", $separator_color_transparency);
        $row2 = new BridgeQodeRow(true);
        $group1->addChild("row2", $row2);
        $separator_thickness = new BridgeQodeField("textsimple", "separator_thickness", "", esc_html__("Thickness (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("separator_thickness", $separator_thickness);
        $separator_topmargin = new BridgeQodeField("textsimple", "separator_topmargin", "", esc_html__("Top Margin (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("separator_topmargin", $separator_topmargin);
        $separator_bottommargin = new BridgeQodeField("textsimple", "separator_bottommargin", "", esc_html__("Bottom Margin (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("separator_bottommargin", $separator_bottommargin);

        $group2 = new BridgeQodeGroup(esc_html__("Small", "bridge"), esc_html__('Define styles for separator of type "Small"', 'bridge'));
        $panel2->addChild("group2", $group2);
        $row1 = new BridgeQodeRow();
        $group2->addChild("row1", $row1);
        $separator_small_color = new BridgeQodeField("colorsimple", "separator_small_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("separator_small_color", $separator_small_color);
        $separator_small_color_transparency = new BridgeQodeField("textsimple", "separator_small_color_transparency", "", esc_html__("Transparency", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("separator_small_color_transparency", $separator_small_color_transparency);
        $row2 = new BridgeQodeRow(true);
        $group2->addChild("row2", $row2);
        $separator_small_thickness = new BridgeQodeField("textsimple", "separator_small_thickness", "", esc_html__("Thickness (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("separator_small_thickness", $separator_small_thickness);
        $separator_small_width = new BridgeQodeField("textsimple", "separator_small_width", "", esc_html__("Width (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("separator_small_width", $separator_small_width);
        $separator_small_topmargin = new BridgeQodeField("textsimple", "separator_small_topmargin", "", esc_html__("Top Margin (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("separator_small_topmargin", $separator_small_topmargin);
        $separator_small_bottommargin = new BridgeQodeField("textsimple", "separator_small_bottommargin", "", esc_html__("Bottom Margin (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("separator_small_bottommargin", $separator_small_bottommargin);

        $group3 = new BridgeQodeGroup(esc_html__("Separator with Icon", "bridge"), esc_html__('Define styles for separator with icon', 'bridge'));
        $panel2->addChild("group3", $group3);
        $row1 = new BridgeQodeRow();
        $group3->addChild("row1", $row1);
        $separator_small_color = new BridgeQodeField("colorsimple", "separator_with_icon_color", "", esc_html__("Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("separator_with_icon_color", $separator_small_color);
        $separator_small_color_transparency = new BridgeQodeField("textsimple", "separator_with_icon_transparency", "", esc_html__("Transparency", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("separator_with_icon_transparency", $separator_small_color_transparency);
        $row2 = new BridgeQodeRow(true);
        $group3->addChild("row2", $row2);
        $separator_small_thickness = new BridgeQodeField("textsimple", "separator_with_icon_thickness", "", esc_html__("Thickness (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("separator_with_icon_thickness", $separator_small_thickness);
        $separator_small_width = new BridgeQodeField("textsimple", "separator_with_icon_width", "", esc_html__("Width (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("separator_with_icon_width", $separator_small_width);
        $separator_small_topmargin = new BridgeQodeField("textsimple", "separator_with_icon_topmargin", "", esc_html__("Top Margin (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("separator_with_icon_topmargin", $separator_small_topmargin);
        $separator_small_bottommargin = new BridgeQodeField("textsimple", "separator_with_icon_bottommargin", "", esc_html__("Bottom Margin (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("separator_with_icon_bottommargin", $separator_small_bottommargin);

        //Buttons

        $panel3 = new BridgeQodePanel(esc_html__("Buttons", "bridge"), "buttons_panel");
        $elementsPage->addChild("panel3", $panel3);

        $group1 = new BridgeQodeGroup(esc_html__("Default Button", "bridge"), esc_html__('Define styles for "Default" Button', 'bridge'));
        $panel3->addChild("group1", $group1);
        $row1 = new BridgeQodeRow();
        $group1->addChild("row1", $row1);
        $button_title_color = new BridgeQodeField("colorsimple", "button_title_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("button_title_color", $button_title_color);
        $button_title_hovercolor = new BridgeQodeField("colorsimple", "button_title_hovercolor", "", esc_html__("Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("button_title_hovercolor", $button_title_hovercolor);
        $row2 = new BridgeQodeRow(true);
        $group1->addChild("row2", $row2);
        $button_title_google_fonts = new BridgeQodeField("fontsimple", "button_title_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("button_title_google_fonts", $button_title_google_fonts);
        $button_title_fontsize = new BridgeQodeField("textsimple", "button_title_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("button_title_fontsize", $button_title_fontsize);
        $button_title_lineheight = new BridgeQodeField("textsimple", "button_title_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("button_title_lineheight", $button_title_lineheight);
        $row3 = new BridgeQodeRow(true);
        $group1->addChild("row3", $row3);
        $button_title_fontstyle = new BridgeQodeField("selectblanksimple", "button_title_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row3->addChild("button_title_fontstyle", $button_title_fontstyle);
        $button_title_fontweight = new BridgeQodeField("selectblanksimple", "button_title_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row3->addChild("button_title_fontweight", $button_title_fontweight);
        $button_title_letter_spacing = new BridgeQodeField("textsimple", "button_title_letter_spacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row3->addChild("button_title_letter_spacing", $button_title_letter_spacing);
        $button_title_text_transform = new BridgeQodeField("selectblanksimple", "button_title_text_transform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row3->addChild("button_title_text_transform", $button_title_text_transform);
        $row4 = new BridgeQodeRow(true);
        $group1->addChild("row4", $row4);
        $button_backgroundcolor = new BridgeQodeField("colorsimple", "button_backgroundcolor", "", esc_html__("Background Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row4->addChild("button_backgroundcolor", $button_backgroundcolor);
        $button_backgroundcolor_hover = new BridgeQodeField("colorsimple", "button_backgroundcolor_hover", "", esc_html__("Hover Background Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row4->addChild("button_backgroundcolor_hover", $button_backgroundcolor_hover);
        $button_border_color = new BridgeQodeField("colorsimple", "button_border_color", "", esc_html__("Border Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row4->addChild("button_border_color", $button_border_color);
        $button_border_hover_color = new BridgeQodeField("colorsimple", "button_border_hover_color", "", esc_html__("Border Hover color", "bridge"), esc_html__("This is some description", "bridge"));
        $row4->addChild("button_border_hover_color", $button_border_hover_color);
        $row5 = new BridgeQodeRow(true);
        $group1->addChild("row5", $row5);
        $button_border_width = new BridgeQodeField("textsimple", "button_border_width", "", esc_html__("Border Width (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row5->addChild("button_border_width", $button_border_width);
        $button_border_radius = new BridgeQodeField("textsimple", "button_border_radius", "", esc_html__("Border Radius (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row5->addChild("button_border_radius", $button_border_radius);
        $button_padding_leftright = new BridgeQodeField("textsimple", "button_padding_leftright", "", esc_html__("Padding Left/Right (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row5->addChild("button_padding_leftright", $button_padding_leftright);
        $row6 = new BridgeQodeRow(true);
        $group1->addChild("row6", $row6);
        $button_disable_responsive_padding = new BridgeQodeField("yesnosimple", "button_disable_responsive_padding", "no", esc_html__("Disable responsive change of padding", "bridge"), esc_html__("This is some description", "bridge"));
        $row5->addChild("button_disable_responsive_padding", $button_disable_responsive_padding);

        $group2 = new BridgeQodeGroup(esc_html__("White Button", "bridge"), esc_html__('Define styles for "White" Button', 'bridge'));
        $panel3->addChild("group2", $group2);
        $row1 = new BridgeQodeRow();
        $group2->addChild("row1", $row1);
        $button_white_text_color = new BridgeQodeField("colorsimple", "button_white_text_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("button_white_text_color", $button_white_text_color);
        $button_white_text_color_hover = new BridgeQodeField("colorsimple", "button_white_text_color_hover", "", esc_html__("Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("button_white_text_color_hover", $button_white_text_color_hover);
        $row2 = new BridgeQodeRow(true);
        $group2->addChild("row2", $row2);
        $button_white_background_color = new BridgeQodeField("colorsimple", "button_white_background_color", "", esc_html__("Background Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("button_white_background_color", $button_white_background_color);
        $button_white_background_color_hover = new BridgeQodeField("colorsimple", "button_white_background_color_hover", "", esc_html__("Hover Background Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("button_white_background_color_hover", $button_white_background_color_hover);
        $button_white_border_color = new BridgeQodeField("colorsimple", "button_white_border_color", "", esc_html__("Border Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("button_white_border_color", $button_white_border_color);
        $button_white_border_color_hover = new BridgeQodeField("colorsimple", "button_white_border_color_hover", "", esc_html__("Border Hover color", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("button_white_border_color_hover", $button_white_border_color_hover);

		$group_green = new BridgeQodeGroup(esc_html__("Green Button", "bridge"), esc_html__('Define styles for "Green" Button', 'bridge'));
		$panel3->addChild("group_green", $group_green);
		$row1 = new BridgeQodeRow();
		$group_green->addChild("row1", $row1);
		$button_green_text_color = new BridgeQodeField("colorsimple", "button_green_text_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
		$row1->addChild("button_green_text_color", $button_green_text_color);
		$button_green_text_color_hover = new BridgeQodeField("colorsimple", "button_green_text_color_hover", "", esc_html__("Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
		$row1->addChild("button_green_text_color_hover", $button_green_text_color_hover);
		$row2 = new BridgeQodeRow(true);
		$group_green->addChild("row2", $row2);
		$button_green_background_color = new BridgeQodeField("colorsimple", "button_green_background_color", "", esc_html__("Background Color", "bridge"), esc_html__("This is some description", "bridge"));
		$row2->addChild("button_green_background_color", $button_green_background_color);
		$button_green_background_color_hover = new BridgeQodeField("colorsimple", "button_green_background_color_hover", "", esc_html__("Hover Background Color", "bridge"), esc_html__("This is some description", "bridge"));
		$row2->addChild("button_green_background_color_hover", $button_green_background_color_hover);
		$button_green_border_color = new BridgeQodeField("colorsimple", "button_green_border_color", "", esc_html__("Border Color", "bridge"), esc_html__("This is some description", "bridge"));
		$row2->addChild("button_green_border_color", $button_green_border_color);
		$button_green_border_color_hover = new BridgeQodeField("colorsimple", "button_green_border_color_hover", "", esc_html__("Border Hover color", "bridge"), esc_html__("This is some description", "bridge"));
		$row2->addChild("button_green_border_color_hover", $button_green_border_color_hover);

        $group3 = new BridgeQodeGroup(esc_html__("Small Button", "bridge"), esc_html__('Define Styles for "Small" Button', 'bridge'));
        $panel3->addChild("group3", $group3);
        $row1 = new BridgeQodeRow();
        $group3->addChild("row1", $row1);
        $small_button_lineheight = new BridgeQodeField("textsimple", "small_button_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("small_button_lineheight", $small_button_lineheight);
        $small_button_fontsize = new BridgeQodeField("textsimple", "small_button_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("small_button_fontsize", $small_button_fontsize);
        $row2 = new BridgeQodeRow(true);
        $group3->addChild("row2", $row2);
        $small_button_fontweight = new BridgeQodeField("selectblanksimple", "small_button_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row2->addChild("small_button_fontweight", $small_button_fontweight);
        $small_button_padding = new BridgeQodeField("textsimple", "small_button_padding", "", esc_html__("Padding Left/Right (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("small_button_padding", $small_button_padding);
        $small_button_border_radius = new BridgeQodeField("textsimple", "small_button_border_radius", "", esc_html__("Border Radius (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("small_button_border_radius", $small_button_border_radius);

        $group4 = new BridgeQodeGroup(esc_html__("Large Button", "bridge"), esc_html__('Define styles for "Large" Button', 'bridge'));
        $panel3->addChild("group4", $group4);
        $row1 = new BridgeQodeRow();
        $group4->addChild("row1", $row1);
        $large_button_lineheight = new BridgeQodeField("textsimple", "large_button_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("large_button_lineheight", $large_button_lineheight);
        $large_button_fontsize = new BridgeQodeField("textsimple", "large_button_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("large_button_fontsize", $large_button_fontsize);
        $row2 = new BridgeQodeRow(true);
        $group4->addChild("row2", $row2);
        $large_button_fontweight = new BridgeQodeField("selectblanksimple", "large_button_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row2->addChild("large_button_fontweight", $large_button_fontweight);
        $large_button_padding = new BridgeQodeField("textsimple", "large_button_padding", "", esc_html__("Padding Left/Right (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("large_button_padding", $large_button_padding);
        $large_button_border_radius = new BridgeQodeField("textsimple", "large_button_border_radius", "", esc_html__("Border Radius (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("large_button_border_radius", $large_button_border_radius);

        $group5 = new BridgeQodeGroup(esc_html__("Extra Large Button", "bridge"), esc_html__('Define styles for "Extra Large" Button', 'bridge'));
        $panel3->addChild("group5", $group5);
        $row1 = new BridgeQodeRow();
        $group5->addChild("row1", $row1);
        $big_large_button_lineheight = new BridgeQodeField("textsimple", "big_large_button_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("big_large_button_lineheight", $big_large_button_lineheight);
        $big_large_button_fontsize = new BridgeQodeField("textsimple", "big_large_button_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("big_large_button_fontsize", $big_large_button_fontsize);
        $row2 = new BridgeQodeRow(true);
        $group5->addChild("row2", $row2);
        $big_large_button_fontweight = new BridgeQodeField("selectblanksimple", "big_large_button_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row2->addChild("big_large_button_fontweight", $big_large_button_fontweight);
        $big_large_button_padding = new BridgeQodeField("textsimple", "big_large_button_padding", "", esc_html__("Padding Left/Right (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("big_large_button_padding", $big_large_button_padding);
        $big_large_button_border_radius = new BridgeQodeField("textsimple", "big_large_button_border_radius", "", esc_html__("Border Radius (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("big_large_button_border_radius", $big_large_button_border_radius);

        //Message Boxes

        $panel4 = new BridgeQodePanel(esc_html__("Message Boxes", "bridge"), "message_boxes_panel");
        $elementsPage->addChild("panel4", $panel4);

        $group1 = new BridgeQodeGroup(esc_html__("Message Box Style", "bridge"), esc_html__("Define Message Box style", "bridge"));
        $panel4->addChild("group1", $group1);
        $row1 = new BridgeQodeRow();
        $group1->addChild("row1", $row1);
        $message_title_color = new BridgeQodeField("colorsimple", "message_title_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("message_title_color", $message_title_color);
        $message_backgroundcolor = new BridgeQodeField("colorsimple", "message_backgroundcolor", "", esc_html__("Background Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("message_backgroundcolor", $message_backgroundcolor);
        $row2 = new BridgeQodeRow(true);
        $group1->addChild("row2", $row2);
        $message_title_google_fonts = new BridgeQodeField("fontsimple", "message_title_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("message_title_google_fonts", $message_title_google_fonts);
        $message_title_fontsize = new BridgeQodeField("textsimple", "message_title_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("message_title_fontsize", $message_title_fontsize);
        $message_title_lineheight = new BridgeQodeField("textsimple", "message_title_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("message_title_lineheight", $message_title_lineheight);
        $row3 = new BridgeQodeRow(true);
        $group1->addChild("row3", $row3);
        $message_title_fontstyle = new BridgeQodeField("selectblanksimple", "message_title_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row3->addChild("message_title_fontstyle", $message_title_fontstyle);
        $message_title_fontweight = new BridgeQodeField("selectblanksimple", "message_title_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row3->addChild("message_title_fontweight", $message_title_fontweight);

        $group2 = new BridgeQodeGroup(esc_html__("Message Icon Style", "bridge"), esc_html__("Define Message Box icon style", "bridge"));
        $panel4->addChild("group2", $group2);
        $row1 = new BridgeQodeRow();
        $group2->addChild("row1", $row1);
        $message_icon_color = new BridgeQodeField("colorsimple", "message_icon_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("message_icon_color", $message_icon_color);
        $message_icon_fontsize = new BridgeQodeField("textsimple", "message_icon_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("message_icon_fontsize", $message_icon_fontsize);

        //Blockquotes

        $panel5 = new BridgeQodePanel(esc_html__("Blockquotes", "bridge"), "blockquote_panel");
        $elementsPage->addChild("panel5", $panel5);

        $group1 = new BridgeQodeGroup(esc_html__("Blockquote Style", "bridge"), esc_html__("Define Blockquote style", "bridge"));
        $panel5->addChild("group1", $group1);
        $row1 = new BridgeQodeRow(true);
        $group1->addChild("row1", $row1);
        $quote_link_blockqoute_fontsize = new BridgeQodeField("textsimple", "quote_link_blockqoute_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("quote_link_blockqoute_fontsize", $quote_link_blockqoute_fontsize);
        $quote_link_blockqoute_lineheight = new BridgeQodeField("textsimple", "quote_link_blockqoute_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("quote_link_blockqoute_lineheight", $quote_link_blockqoute_lineheight);
        $quote_link_blockqoute_letterspacing = new BridgeQodeField("textsimple", "quote_link_blockqoute_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("quote_link_blockqoute_letterspacing", $quote_link_blockqoute_letterspacing);
        $quote_link_blockqoute_texttransform = new BridgeQodeField("selectblanksimple", "quote_link_blockqoute_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row1->addChild("quote_link_blockqoute_texttransform", $quote_link_blockqoute_texttransform);

        $row2 = new BridgeQodeRow(true);
        $group1->addChild("row2", $row2);
        $quote_link_blockqoute_fontfamily = new BridgeQodeField("fontsimple", "quote_link_blockqoute_fontfamily", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("quote_link_blockqoute_fontfamily", $quote_link_blockqoute_fontfamily);
        $quote_link_blockqoute_fontstyle = new BridgeQodeField("selectblanksimple", "quote_link_blockqoute_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("quote_link_blockqoute_fontstyle", $quote_link_blockqoute_fontstyle);
        $quote_link_blockqoute_fontweight = new BridgeQodeField("selectblanksimple", "quote_link_blockqoute_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row2->addChild("quote_link_blockqoute_fontweight", $quote_link_blockqoute_fontweight);


        $row3 = new BridgeQodeRow(true);
        $group1->addChild("row3", $row3);
        $blockquote_font_color = new BridgeQodeField("colorsimple", "blockquote_font_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row3->addChild("blockquote_font_color", $blockquote_font_color);
        $blockquote_background_color = new BridgeQodeField("colorsimple", "blockquote_background_color", "", esc_html__("Background Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row3->addChild("blockquote_background_color", $blockquote_background_color);
        $blockquote_border_color = new BridgeQodeField("colorsimple", "blockquote_border_color", "", esc_html__("Border Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row3->addChild("blockquote_border_color", $blockquote_border_color);
        $blockquote_quote_icon_color = new BridgeQodeField("colorsimple", "blockquote_quote_icon_color", "", esc_html__("Quote Icon Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row3->addChild("blockquote_quote_icon_color", $blockquote_quote_icon_color);

        //Social Icon

        $panel6 = new BridgeQodePanel(esc_html__("Social Icons", "bridge"), "social_icon_panel");
        $elementsPage->addChild("panel6", $panel6);

        $group1 = new BridgeQodeGroup(esc_html__("Social Icons style", "bridge"), esc_html__("Define Social Icons style", "bridge"));
        $panel6->addChild("group1", $group1);
        $row1 = new BridgeQodeRow();
        $group1->addChild("row1", $row1);
        $social_icon_color = new BridgeQodeField("colorsimple", "social_icon_color", "", esc_html__("Icon Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("social_icon_color", $social_icon_color);
        $social_icon_background_color = new BridgeQodeField("colorsimple", "social_icon_background_color", "", esc_html__("Icon Background Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("social_icon_background_color", $social_icon_background_color);
        $social_icon_border_color = new BridgeQodeField("colorsimple", "social_icon_border_color", "", esc_html__("Icon Border Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("social_icon_border_color", $social_icon_border_color);

        //Testimonials

        $panel7 = new BridgeQodePanel(esc_html__("Testimonials", "bridge"), "testimonials_panel");
        $elementsPage->addChild("panel7", $panel7);

        $group1 = new BridgeQodeGroup(esc_html__("Testimonials Style", "bridge"), esc_html__("Define Testimonials style", "bridge"));
        $panel7->addChild("group1", $group1);
        $row1 = new BridgeQodeRow();
        $group1->addChild("row1", $row1);
        $testimonaials_navigation_border_radius = new BridgeQodeField("textsimple", "testimonaials_navigation_border_radius", "", esc_html__("Navigation Border radius (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("testimonaials_navigation_border_radius", $testimonaials_navigation_border_radius);

        $group2 = new BridgeQodeGroup(esc_html__("Testimonials Text Style", "bridge"), esc_html__("Define Testimonials text style", "bridge"));
        $panel7->addChild("group2", $group2);
        $row1 = new BridgeQodeRow();
        $group2->addChild("row1", $row1);

        $testimonials_text_color = new BridgeQodeField("colorsimple", "testimonials_text_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("testimonials_text_color", $testimonials_text_color);
        $testimonaials_font_size = new BridgeQodeField("textsimple", "testimonaials_font_size", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("testimonaials_font_size", $testimonaials_font_size);
        $testimonials_text_line_height = new BridgeQodeField("textsimple", "testimonials_text_line_height", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("testimonials_text_line_height", $testimonials_text_line_height);
        $testimonials_text_text_transform = new BridgeQodeField("selectblanksimple", "testimonials_text_text_transform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row1->addChild("testimonials_text_text_transform", $testimonials_text_text_transform);

        $row2 = new BridgeQodeRow(true);
        $group2->addChild("row2", $row2);

        $testimonials_text_font_family = new BridgeQodeField("fontsimple", "testimonials_text_font_family", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("testimonials_text_font_family", $testimonials_text_font_family);
        $testimonials_text_font_style = new BridgeQodeField("selectblanksimple", "testimonials_text_font_style", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("testimonials_text_font_style", $testimonials_text_font_style);
        $testimonials_text_font_weight = new BridgeQodeField("selectblanksimple", "testimonials_text_font_weight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row2->addChild("testimonials_text_font_weight", $testimonials_text_font_weight);
        $testimonials_text_letter_spacing = new BridgeQodeField("textsimple", "testimonials_text_letter_spacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("testimonials_text_letter_spacing", $testimonials_text_letter_spacing);

        $group3 = new BridgeQodeGroup(esc_html__("Testimonials Author Style", "bridge"), esc_html__("Define Testimonials author style", "bridge"));
        $panel7->addChild("group3", $group3);
        $row1 = new BridgeQodeRow();
        $group3->addChild("row1", $row1);

        $testimonials_author_color = new BridgeQodeField("colorsimple", "testimonials_author_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("testimonials_author_color", $testimonials_author_color);
        $testimonials_author_font_size = new BridgeQodeField("textsimple", "testimonials_author_font_size", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("testimonials_author_font_size", $testimonials_author_font_size);
        $testimonials_author_line_height = new BridgeQodeField("textsimple", "testimonials_author_line_height", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("testimonials_author_line_height", $testimonials_author_line_height);
        $testimonials_author_text_transform = new BridgeQodeField("selectblanksimple", "testimonials_author_text_transform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row1->addChild("testimonials_author_text_transform", $testimonials_author_text_transform);

        $row2 = new BridgeQodeRow(true);
        $group3->addChild("row2", $row2);

        $testimonials_author_font_family = new BridgeQodeField("fontsimple", "testimonials_author_font_family", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("testimonials_author_font_family", $testimonials_author_font_family);
        $testimonials_author_font_style = new BridgeQodeField("selectblanksimple", "testimonials_author_font_style", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("testimonials_author_font_style", $testimonials_author_font_style);
        $testimonials_author_font_weight = new BridgeQodeField("selectblanksimple", "testimonials_author_font_weight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row2->addChild("testimonials_author_font_weight", $testimonials_author_font_weight);
        $testimonials_author_letter_spacing = new BridgeQodeField("textsimple", "testimonials_author_letter_spacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("testimonials_author_letter_spacing", $testimonials_author_letter_spacing);
        //Counters

        $panel8 = new BridgeQodePanel(esc_html__("Counters", "bridge"), "counters_panel");
        $elementsPage->addChild("panel8", $panel8);

        $group1 = new BridgeQodeGroup(esc_html__("Counters Style", "bridge"), esc_html__("Define styles for Counters", "bridge"));
        $panel8->addChild("group1", $group1);
        $row1 = new BridgeQodeRow();
        $group1->addChild("row1", $row1);
        $counter_color = new BridgeQodeField("colorsimple", "counter_color", "", esc_html__("Numeral Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("counter_color", $counter_color);
        $counter_text_color = new BridgeQodeField("colorsimple", "counter_text_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("counter_text_color", $counter_text_color);
        $counter_separator_color = new BridgeQodeField("colorsimple", "counter_separator_color", "", esc_html__("Separator Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("counter_separator_color", $counter_separator_color);
        $row2 = new BridgeQodeRow(true);
        $group1->addChild("row2", $row2);
        $counters_font_size = new BridgeQodeField("textsimple", "counters_font_size", "", esc_html__("Numeral Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("counters_font_size", $counters_font_size);
        $counters_font_family = new BridgeQodeField("fontsimple", "counters_font_family", "-1", esc_html__("Numeral Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("counters_font_family", $counters_font_family);
        $counters_fontweight = new BridgeQodeField("selectblanksimple", "counters_fontweight", "", esc_html__("Numeral Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row2->addChild("counters_fontweight", $counters_fontweight);
        $row3 = new BridgeQodeRow(true);
        $group1->addChild("row3", $row3);
        $counters_text_font_size = new BridgeQodeField("textsimple", "counters_text_font_size", "", esc_html__("Text Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row3->addChild("counters_text_font_size", $counters_text_font_size);
        $counters_text_font_family = new BridgeQodeField("fontsimple", "counters_text_font_family", "-1", esc_html__("Text Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row3->addChild("counters_text_font_family", $counters_text_font_family);
        $counters_text_fontweight = new BridgeQodeField("selectblanksimple", "counters_text_fontweight", "", esc_html__("Text Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row3->addChild("counters_text_fontweight", $counters_text_fontweight);
        $counters_text_texttransform = new BridgeQodeField("selectblanksimple", "counters_text_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row3->addChild("counters_text_texttransform", $counters_text_texttransform);
        $row4 = new BridgeQodeRow(true);
        $group1->addChild("row4", $row4);
        $counters_text_letterspacing = new BridgeQodeField("textsimple", "counters_text_letterspacing", "", esc_html__("Text Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row4->addChild("counters_text_letterspacing", $counters_text_letterspacing);
        $counters_text_lineheight = new BridgeQodeField("textsimple", "counters_text_lineheight", "", esc_html__("Text Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row4->addChild("counters_text_lineheight", $counters_text_lineheight);

        //Horizontal Progress Bars

        $panel9 = new BridgeQodePanel(esc_html__("Horizontal Progress Bars", "bridge"), "horizontal_progress_bars_panel");
        $elementsPage->addChild("panel9", $panel9);

        $group1 = new BridgeQodeGroup(esc_html__("Progress Bar Style", "bridge"), esc_html__("Define styles for Horizontal Progress Bars", "bridge"));
        $panel9->addChild("group1", $group1);
        $row1 = new BridgeQodeRow();
        $group1->addChild("row1", $row1);
        $progress_bar_horizontal_fontsize = new BridgeQodeField("textsimple", "progress_bar_horizontal_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("progress_bar_horizontal_fontsize", $progress_bar_horizontal_fontsize);
        $progress_bar_horizontal_fontweight = new BridgeQodeField("selectblanksimple", "progress_bar_horizontal_fontweight", "", esc_html__("Text Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row1->addChild("progress_bar_horizontal_fontweight", $progress_bar_horizontal_fontweight);

        //Pie Charts

        $panel10 = new BridgeQodePanel(esc_html__("Pie Charts", "bridge"), "pie_charts_panel");
        $elementsPage->addChild("panel10", $panel10);

        $group1 = new BridgeQodeGroup(esc_html__("Pie Chart Style", "bridge"), esc_html__("Define styles for Pie Charts", "bridge"));
        $panel10->addChild("group1", $group1);
        $row1 = new BridgeQodeRow();
        $group1->addChild("row1", $row1);
        $pie_charts_fontsize = new BridgeQodeField("textsimple", "pie_charts_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("pie_charts_fontsize", $pie_charts_fontsize);
        $pie_charts_fontweight = new BridgeQodeField("selectblanksimple", "pie_charts_fontweight", "", esc_html__("Text Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row1->addChild("pie_charts_fontweight", $pie_charts_fontweight);

        //Tabs Panel

        $panel11 = new BridgeQodePanel(esc_html__("Tabs", "bridge"), "tabs_panel");
        $elementsPage->addChild("panel11", $panel11);

        $group1 = new BridgeQodeGroup(esc_html__("Text Style", "bridge"), esc_html__("Define text styles for Process shortcode", "bridge"));
        $panel11->addChild("group1", $group1);
        $row1 = new BridgeQodeRow();
        $group1->addChild("row1", $row1);

		$tabs_color = new BridgeQodeField("colorsimple", "tabs_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
		$row1->addChild("tabs_color", $tabs_color);

		$tabs_hover_color = new BridgeQodeField("colorsimple", "tabs_hover_color", "", esc_html__("Text Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
		$row1->addChild("tabs_hover_color", $tabs_hover_color);

		$tabs_active_color = new BridgeQodeField("colorsimple", "tabs_active_color", "", esc_html__("Text Active Color", "bridge"), esc_html__("This is some description", "bridge"));
		$row1->addChild("tabs_active_color", $tabs_active_color);

		$row2 = new BridgeQodeRow();
		$group1->addChild("row2", $row2);

        $tabs_text_size = new BridgeQodeField("textsimple", "tabs_text_size", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("tabs_text_size", $tabs_text_size);

		$tabs_line_height = new BridgeQodeField("textsimple", "tabs_line_height", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
		$row2->addChild("tabs_line_height", $tabs_line_height);

		$tabs_text_transform = new BridgeQodeField("selectblanksimple", "tabs_text_transform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
		$row2->addChild("tabs_text_transform", $tabs_text_transform);

		$row3 = new BridgeQodeRow();
		$group1->addChild("row3", $row3);

		$tabs_font_family = new BridgeQodeField("fontsimple", "tabs_font_family", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
		$row3->addChild("tabs_font_family", $tabs_font_family);

		$tabs_font_style = new BridgeQodeField("selectblanksimple", "tabs_font_style", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
		$row3->addChild("tabs_font_style", $tabs_font_style);

		$tabs_fontweight = new BridgeQodeField("selectblanksimple", "tabs_fontweight", "", esc_html__("Text Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row3->addChild("tabs_fontweight", $tabs_fontweight);

		$tabs_letter_spacing = new BridgeQodeField("textsimple", "tabs_letter_spacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
		$row3->addChild("tabs_letter_spacing", $tabs_letter_spacing);

        $group2 = new BridgeQodeGroup(esc_html__("Border Style", "bridge"), esc_html__("Define border styles for Tabs", "bridge"));
        $panel11->addChild("group2", $group2);
        $row1 = new BridgeQodeRow();
        $group2->addChild("row1", $row1);
        $tabs_border_color = new BridgeQodeField("colorsimple", "tabs_border_color", "", esc_html__("Border Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("tabs_border_color", $tabs_border_color);
        $tabs_border_radius = new BridgeQodeField("textsimple", "tabs_border_radius", "", esc_html__("Border Radius (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("tabs_border_radius", $tabs_border_radius);
        $tabs_border_width = new BridgeQodeField("textsimple", "tabs_border_width", "", esc_html__("Border Width (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("button_border_width", $tabs_border_width);


        //Tags

        $panel18 = new BridgeQodePanel(esc_html__("Tags", "bridge"), "tags_panel");
        $elementsPage->addChild("panel18", $panel18);

        $group1 = new BridgeQodeGroup(esc_html__("Tags Style", "bridge"), esc_html__("Define Tags style", "bridge"));
        $panel18->addChild("group1", $group1);
        $row1 = new BridgeQodeRow();
        $group1->addChild("row1", $row1);

        $tags_color = new BridgeQodeField("colorsimple", "tags_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("tags_color", $tags_color);

        $tags_font_size = new BridgeQodeField("textsimple", "tags_font_size", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("tags_font_size", $tags_font_size);

        $tags_line_height = new BridgeQodeField("textsimple", "tags_line_height", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("tags_line_height", $tags_line_height);

        $tags_text_transform = new BridgeQodeField("selectblanksimple", "tags_text_transform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row1->addChild("tags_text_transform", $tags_text_transform);

        $row2 = new BridgeQodeRow(true);
        $group1->addChild("row2", $row2);

        $tags_font_family = new BridgeQodeField("fontsimple", "tags_font_family", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("tags_font_family", $tags_font_family);

        $tags_font_style = new BridgeQodeField("selectblanksimple", "tags_font_style", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("tags_font_style", $tags_font_style);

        $tags_font_weight = new BridgeQodeField("selectblanksimple", "tags_font_weight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row2->addChild("tags_font_weight", $tags_font_weight);

        $tags_letter_spacing = new BridgeQodeField("textsimple", "tags_letter_spacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("tags_letter_spacing", $tags_letter_spacing);

        $row3 = new BridgeQodeRow(true);
        $group1->addChild("row3", $row3);

        $tags_hover_color = new BridgeQodeField("colorsimple", "tags_hover_color", "", esc_html__("Hover Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row3->addChild("tags_hover_color", $tags_hover_color);

        $tags_background_color = new BridgeQodeField("colorsimple", "tags_background_color", "", esc_html__("Background Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row3->addChild("tags_background_color", $tags_background_color);

        $tags_background_hover_color = new BridgeQodeField("colorsimple", "tags_background_hover_color", "", esc_html__("Hover Background Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row3->addChild("tags_background_hover_color", $tags_background_hover_color);

        $tags_border_radius = new BridgeQodeField("textsimple", "tags_border_radius", "", esc_html__("Border Radius (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row3->addChild("tags_border_radius", $tags_border_radius);

        $row4 = new BridgeQodeRow(true);
        $group1->addChild("row4", $row4);

        $tags_border_color = new BridgeQodeField("colorsimple", "tags_border_color", "", esc_html__("Border Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row4->addChild("tags_border_color", $tags_border_color);

        $tags_border_hover_color = new BridgeQodeField("colorsimple", "tags_border_hover_color", "", esc_html__("Border Hover color", "bridge"), esc_html__("This is some description", "bridge"));
        $row4->addChild("tags_border_hover_color", $tags_border_hover_color);

        $tags_border_width = new BridgeQodeField("textsimple", "tags_border_width", "", esc_html__("Border Width (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row4->addChild("tags_border_width", $tags_border_width);

        $tags_border_style = new BridgeQodeField("selectblanksimple", "tags_border_style", "", esc_html__("Border Style", "bridge"), esc_html__("This is some description", "bridge"), array(
            "solid" => esc_html__("Solid", "bridge"),
            "dotted" => esc_html__("Dotted", "bridge"),
            "dashed" => esc_html__("Dashed", "bridge")
        ));
        $row4->addChild("tags_border_style", $tags_border_style);

        $row5 = new BridgeQodeRow(true);
        $group1->addChild("row5", $row5);

        $tags_left_right_padding = new BridgeQodeField("textsimple", "tags_left_right_padding", "", esc_html__("Left/Right Padding (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row5->addChild("tags_left_right_padding", $tags_left_right_padding);


        //Process

        $panel12 = new BridgeQodePanel(esc_html__("Process", "bridge"), "process_panel");
        $elementsPage->addChild("panel12", $panel12);

        $process_circle_hover_background_color = new BridgeQodeField("color", "process_circle_hover_background_color", "", esc_html__("Circles Background Hover Color", "bridge"), "Set Process circles background color on hover");
        $panel12->addChild("process_circle_hover_background_color", $process_circle_hover_background_color);

        $group1 = new BridgeQodeGroup(esc_html__("Circle Text", "bridge"), esc_html__('Define styles for "Text in Process" type Process', "bridge"));
        $panel12->addChild("group1", $group1);
        $row1 = new BridgeQodeRow();
        $group1->addChild("row1", $row1);
        $process_text_in_circle_font_weight = new BridgeQodeField("selectblanksimple", "process_text_in_circle_font_weight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row1->addChild("process_text_in_circle_font_weight", $process_text_in_circle_font_weight);
        $process_text_hover_color = new BridgeQodeField("colorsimple", "process_text_hover_color", "", esc_html__("Text Color on Hover", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("process_text_hover_color", $process_text_hover_color);

        //Input Fields

        $panel13 = new BridgeQodePanel(esc_html__("Input fields", "bridge"), "input_fields_panel");
        $elementsPage->addChild("panel13", $panel13);

        $group1 = new BridgeQodeGroup(esc_html__("Input Fields Style", "bridge"), esc_html__("Define styles for text Input Fields", "bridge"));
        $panel13->addChild("group1", $group1);
        $row1 = new BridgeQodeRow();
        $group1->addChild("row1", $row1);
        $input_background_color = new BridgeQodeField("colorsimple", "input_background_color", "", esc_html__("Background Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("input_background_color", $input_background_color);
        $input_border_color = new BridgeQodeField("colorsimple", "input_border_color", "", esc_html__("Border Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("input_border_color", $input_border_color);
        $input_text_color = new BridgeQodeField("colorsimple", "input_text_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("input_text_color", $input_text_color);

        //Highlights

        $panel1 = new BridgeQodePanel(esc_html__("Highlights", "bridge"), "highlight_panel");
        $elementsPage->addChild("panel1", $panel1);
        $highlight_color = new BridgeQodeField("color", "highlight_color", "", esc_html__("Highlight Color", "bridge"), esc_html__("Set color for highlighted text", "bridge"));
        $panel1->addChild("highlight_color", $highlight_color);

        //Toggle
        $panel_toggle_accordion = new BridgeQodePanel(esc_html__('Toggle Accordion', "bridge"), 'toggle_accordion_panel');
        $elementsPage->addChild('toggle_accordion_panel', $panel_toggle_accordion);

        $toggle_title_group = new BridgeQodeGroup(esc_html__('Toggle Title', "bridge"), esc_html__('Define styles for toggle title', "bridge"));
        $panel_toggle_accordion->addChild('toggle_title_group', $toggle_title_group);

        $toggle_title_bg_color = new BridgeQodeField('colorsimple', 'toggle_title_background_color', '', esc_html__('Background Color', "bridge"));
        $toggle_title_group->addChild('toggle_title_background_color', $toggle_title_bg_color);

        $toggle_hover_title_bg_color = new BridgeQodeField('colorsimple', 'toggle_title_hover_background_color', '', esc_html__('Hover Background Color', "bridge"));
        $toggle_title_group->addChild('toggle_title_hover_background_color', $toggle_hover_title_bg_color);

        $toggle_title_text_color = new BridgeQodeField('colorsimple', 'toggle_title_text_background_color', '', esc_html__('Text Color', "bridge"));
        $toggle_title_group->addChild('toggle_title_text_background_color', $toggle_title_text_color);

        $toggle_hover_title_text_color = new BridgeQodeField('colorsimple', 'toggle_title_hover_text_background_color', '', esc_html__('Hover Text Color', "bridge"));
        $toggle_title_group->addChild('toggle_title_hover_text_background_color', $toggle_hover_title_text_color);

        $panel14 = new BridgeQodePanel(esc_html__("Back to Top Button", "bridge"), "back_to_top_panel");
        $elementsPage->addChild("panel14", $panel14);


		$group_btt_icon = new BridgeQodeGroup(esc_html__("Icon", "bridge"), esc_html__("Choose Icon for Back To Top", "bridge"));
		$panel14->addChild("group_btt_icon", $group_btt_icon);

        $row_btt_icon = new BridgeQodeRow();
		$group_btt_icon->addChild("row_btt_icon", $row_btt_icon);

        BridgeQodeIconCollections::getInstance()->getIconsMetaBoxOrOption(
			array(
				'label'				=> esc_html__( 'Icon ', 'bridge' ),
				'parent'			=> $row_btt_icon,
				'scope'				=> 'back-to-top',
				'name'				=> 'qode_back_to_top_icon_pack',
				'default_icon_pack'	=> 'font_awesome',
				'default_icon'		=> 'fa-arrow-up',
				'type'				=> 'option',
				'field_type'       => 'simple'
			)
		);
		$group1 = new BridgeQodeGroup(esc_html__("Icon Style", "bridge"), esc_html__("Define style for Back to Top icon", "bridge"));
		$panel14->addChild("group1", $group1);

        $row1 = new BridgeQodeRow();
        $group1->addChild("row1", $row1);

        $back_to_top_icon_color = new BridgeQodeField("colorsimple", "back_to_top_icon_color", "", esc_html__("Icon Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("back_to_top_icon_color", $back_to_top_icon_color);

        $back_to_top_icon_hover_color = new BridgeQodeField("colorsimple", "back_to_top_icon_hover_color", "", esc_html__("Icon Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("back_to_top_icon_hover_color", $back_to_top_icon_hover_color);

        $group2 = new BridgeQodeGroup(esc_html__("Background", "bridge"), esc_html__("Define background for Back to Top", "bridge"));
        $panel14->addChild("group2", $group2);

        $row1 = new BridgeQodeRow();
        $group2->addChild("row1", $row1);

        $back_to_top_background_color = new BridgeQodeField("colorsimple", "back_to_top_background_color", "", esc_html__("Background Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("back_to_top_background_color", $back_to_top_background_color);

        $back_to_top_background_hover_color = new BridgeQodeField("colorsimple", "back_to_top_background_hover_color", "", esc_html__("Background Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("back_to_top_background_hover_color", $back_to_top_background_hover_color);

        $back_to_top_background_transparency = new BridgeQodeField("textsimple", "back_to_top_background_transparency", "", esc_html__("Background Transparency (0-1)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("back_to_top_background_transparency", $back_to_top_background_transparency);

        $back_to_top_background_hover_transparency = new BridgeQodeField("textsimple", "back_to_top_background_hover_transparency", "", esc_html__("Background Hover Transparency (0-1)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("back_to_top_background_hover_transparency", $back_to_top_background_hover_transparency);

        $group3 = new BridgeQodeGroup(esc_html__("Border", "bridge"), esc_html__("Choose Border style for Back to Top", "bridge"));
        $panel14->addChild("group3", $group3);

        $row1 = new BridgeQodeRow();
        $group3->addChild("row1", $row1);

        $back_to_top_border_color = new BridgeQodeField("colorsimple", "back_to_top_border_color", "", esc_html__("Border Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("back_to_top_border_color", $back_to_top_border_color);

        $back_to_top_border_hover_color = new BridgeQodeField("colorsimple", "back_to_top_border_hover_color", "", esc_html__("Border Hover color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("back_to_top_border_hover_color", $back_to_top_border_hover_color);

        $back_to_top_border_width = new BridgeQodeField("textsimple", "back_to_top_border_width", "", esc_html__("Border Width (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("back_to_top_border_width", $back_to_top_border_width);

        $back_to_top_border_radius = new BridgeQodeField("textsimple", "back_to_top_border_radius", "", esc_html__("Border Radius (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("back_to_top_border_radius", $back_to_top_border_radius);

        $row2 = new BridgeQodeRow();
        $group3->addChild("row2", $row2);

        $back_to_top_border_transparency = new BridgeQodeField("textsimple", "back_to_top_border_transparency", "", esc_html__("Border Transparency (0-1)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("back_to_top_border_transparency", $back_to_top_border_transparency);

        $back_to_top_border_hover_transparency = new BridgeQodeField("textsimple", "back_to_top_border_hover_transparency", "", esc_html__("Border Hover Transparency (0-1)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("back_to_top_border_hover_transparency", $back_to_top_border_hover_transparency);

        $group4 = new BridgeQodeGroup(esc_html__("Button Size", "bridge"), esc_html__('Choose Size for "Back to Top" button', "bridge"));
        $panel14->addChild("group4", $group4);

        $row1 = new BridgeQodeRow();
        $group4->addChild("row1", $row1);

        $back_to_top_height = new BridgeQodeField("textsimple", "back_to_top_height", "", esc_html__("Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("back_to_top_height", $back_to_top_height);

        $back_to_top_width = new BridgeQodeField("textsimple", "back_to_top_width", "", esc_html__("Width (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("back_to_top_width", $back_to_top_width);

        $group5 = new BridgeQodeGroup(esc_html__("Button Position", "bridge"), esc_html__('Define button position from right and/or bottom edge of the screen', "bridge"));
        $panel14->addChild("group5", $group5);

        $row1 = new BridgeQodeRow();
        $group5->addChild("row1", $row1);

        $back_to_top_right_pos = new BridgeQodeField("textsimple", "back_to_top_right_pos", "", esc_html__("From right (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("back_to_top_right_pos", $back_to_top_right_pos);

        $back_to_top_bottom_pos = new BridgeQodeField("textsimple", "back_to_top_bottom_pos", "", esc_html__("From bottom (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("back_to_top_bottom_pos", $back_to_top_bottom_pos);


        //Slider Navigation Interface

        $panel15 = new BridgeQodePanel(esc_html__("Slider Navigation Interface", "bridge"), "navigation_panel");
        $elementsPage->addChild("panel15", $panel15);

        $navigation_slider_horizontal_section = new BridgeQodeTitle("navigation_slider_horizontal_section", esc_html__("Qode Slider", "bridge"));
        $panel15->addChild("navigation_slider_horizontal_section", $navigation_slider_horizontal_section);

        $group29 = new BridgeQodeGroup(esc_html__("Clickable Left/Right Area Size (%)", "bridge"), esc_html__("Define size of clickable left/right slider area in relation to slider width (default value is 23%)", "bridge"));
        $panel15->addChild("group29", $group29);

        $row1 = new BridgeQodeRow();
        $group29->addChild("row1", $row1);

        $navigation_area_size = new BridgeQodeField("textsimple", "navigation_area_size", "", esc_html__("Width (%)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("navigation_area_size", $navigation_area_size);

        $group1 = new BridgeQodeGroup(esc_html__("Navigation Button Size", "bridge"), esc_html__("Define navigation button size", "bridge"));
        $panel15->addChild("group1", $group1);

        $row1 = new BridgeQodeRow();
        $group1->addChild("row1", $row1);

        $navigation_button_width = new BridgeQodeField("textsimple", "navigation_button_width", "", esc_html__("Width (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("navigation_button_width", $navigation_button_width);

        $navigation_button_height = new BridgeQodeField("textsimple", "navigation_button_height", "", esc_html__("Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("navigation_button_height", $navigation_button_height);

        $group9 = new BridgeQodeGroup(esc_html__("Navigation Button Position", "bridge"), esc_html__("Enter the amount of pixels you would like to move the navigation buttons from the edges of the slider", "bridge"));
        $panel15->addChild("group9", $group9);

        $row1 = new BridgeQodeRow();
        $group9->addChild("row1", $row1);

        $navigation_button_position = new BridgeQodeField("textsimple", "navigation_button_position", "", esc_html__("Position (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("navigation_button_position", $navigation_button_position);

        $group2 = new BridgeQodeGroup(esc_html__("Icon Arrow Style", "bridge"), esc_html__("Define arrow navigation style", "bridge"));
        $panel15->addChild("group2", $group2);

        $row1 = new BridgeQodeRow();
        $group2->addChild("row1", $row1);

        $navigation_arrow_color = new BridgeQodeField("colorsimple", "navigation_arrow_color", "", esc_html__("Arrow Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("navigation_arrow_color", $navigation_arrow_color);

        $navigation_arrow_transparency = new BridgeQodeField("textsimple", "navigation_arrow_transparency", "", esc_html__("Arrow Transparency (0-1)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("navigation_arrow_transparency", $navigation_arrow_transparency);

        $navigation_arrow_hover_color = new BridgeQodeField("colorsimple", "navigation_arrow_hover_color", "", esc_html__("Arrow Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("navigation_arrow_hover_color", $navigation_arrow_hover_color);

        $navigation_arrow_hover_transparency = new BridgeQodeField("textsimple", "navigation_arrow_hover_transparency", "", esc_html__("Arrow Hover Transparency (0-1)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("navigation_arrow_hover_transparency", $navigation_arrow_hover_transparency);

        $row2 = new BridgeQodeRow();
        $group2->addChild("row2", $row2);

        $navigation_arrow_size = new BridgeQodeField("textsimple", "navigation_arrow_size", "", esc_html__("Arrow Size (px)", "bridge"), esc_html__("Default value is 14    ", "bridge"));
        $row2->addChild("navigation_arrow_size", $navigation_arrow_size);

        $group3 = new BridgeQodeGroup(esc_html__("Navigation Button Background", "bridge"), esc_html__("Define navigation button background", "bridge"));
        $panel15->addChild("group3", $group3);

        $row1 = new BridgeQodeRow();
        $group3->addChild("row1", $row1);

        $navigation_background_color = new BridgeQodeField("colorsimple", "navigation_background_color", "", esc_html__("Background Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("navigation_background_color", $navigation_background_color);

        $navigation_background_transparency = new BridgeQodeField("textsimple", "navigation_background_transparency", "", esc_html__("Background Transparency (0-1)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("navigation_background_transparency", $navigation_background_transparency);

        $navigation_background_hover_color = new BridgeQodeField("colorsimple", "navigation_background_hover_color", "", esc_html__("Background Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("navigation_background_hover_color", $navigation_background_hover_color);

        $navigation_background_hover_transparency = new BridgeQodeField("textsimple", "navigation_background_hover_transparency", "", esc_html__("Background Hover Transparency (0-1)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("navigation_background_hover_transparency", $navigation_background_hover_transparency);

        $group4 = new BridgeQodeGroup(esc_html__("Navigation Button Border", "bridge"), esc_html__("Define border style", "bridge"));
        $panel15->addChild("group4", $group4);

        $row1 = new BridgeQodeRow();
        $group4->addChild("row1", $row1);

        $navigation_border_color = new BridgeQodeField("colorsimple", "navigation_border_color", "", esc_html__("Border Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("navigation_border_color", $navigation_border_color);

        $navigation_border_transparency = new BridgeQodeField("textsimple", "navigation_border_transparency", "", esc_html__("Border Transparency (0-1)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("navigation_border_transparency", $navigation_border_transparency);

        $navigation_border_hover_color = new BridgeQodeField("colorsimple", "navigation_border_hover_color", "", esc_html__("Border Hover color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("navigation_border_hover_color", $navigation_border_hover_color);

        $navigation_border_hover_transparency = new BridgeQodeField("textsimple", "navigation_border_hover_transparency", "", esc_html__("Border Hover Transparency (0-1)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("navigation_border_hover_transparency", $navigation_border_hover_transparency);

        $row2 = new BridgeQodeRow();
        $group4->addChild("row2", $row2);

        $navigation_border_width = new BridgeQodeField("textsimple", "navigation_border_width", "", esc_html__("Border Width (px)", "bridge"), "");
        $row2->addChild("navigation_border_width", $navigation_border_width);

        $navigation_border_radius = new BridgeQodeField("textsimple", "navigation_border_radius", "", esc_html__("Border Radius (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("navigation_border_radius", $navigation_border_radius);

        $navigation_carousels_slider = new BridgeQodeTitle("navigation_carousels_slider", esc_html__("Carousel Sliders", "bridge"));
        $panel15->addChild("navigation_carousels_slider", $navigation_carousels_slider);

        $group16 = new BridgeQodeGroup(esc_html__("Navigation Button Size", "bridge"), esc_html__("Define navigation button size", "bridge"));
        $panel15->addChild("group16", $group16);

        $row1 = new BridgeQodeRow();
        $group16->addChild("row1", $row1);

        $carousel_navigation_button_width = new BridgeQodeField("textsimple", "carousel_navigation_button_width", "", esc_html__("Width (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("carousel_navigation_button_width", $carousel_navigation_button_width);

        $carousel_navigation_button_height = new BridgeQodeField("textsimple", "carousel_navigation_button_height", "", esc_html__("Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("carousel_navigation_button_height", $carousel_navigation_button_height);

        $group17 = new BridgeQodeGroup(esc_html__("Navigation Button Position", "bridge"), esc_html__("Enter the amount of pixels you would like to move the navigation buttons from the edges of the slider", "bridge"));
        $panel15->addChild("group17", $group17);

        $row1 = new BridgeQodeRow();
        $group17->addChild("row1", $row1);

        $carousel_navigation_button_position = new BridgeQodeField("textsimple", "carousel_navigation_button_position", "", esc_html__("Position (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("carousel_navigation_button_position", $carousel_navigation_button_position);


        $group18 = new BridgeQodeGroup(esc_html__("Icon Arrow Style", "bridge"), esc_html__("Define arrow navigation style", "bridge"));
        $panel15->addChild("group18", $group18);

        $row1 = new BridgeQodeRow();
        $group18->addChild("row1", $row1);

        $carousel_navigation_arrow_color = new BridgeQodeField("colorsimple", "carousel_navigation_arrow_color", "", esc_html__("Arrow Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("carousel_navigation_arrow_color", $carousel_navigation_arrow_color);

        $carousel_navigation_arrow_transparency = new BridgeQodeField("textsimple", "carousel_navigation_arrow_transparency", "", esc_html__("Arrow Transparency (0-1)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("carousel_navigation_arrow_transparency", $carousel_navigation_arrow_transparency);

        $carousel_navigation_arrow_hover_color = new BridgeQodeField("colorsimple", "carousel_navigation_arrow_hover_color", "", esc_html__("Arrow Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("carousel_navigation_arrow_hover_color", $carousel_navigation_arrow_hover_color);

        $carousel_navigation_arrow_hover_transparency = new BridgeQodeField("textsimple", "carousel_navigation_arrow_hover_transparency", "", esc_html__("Arrow Hover Transparency (0-1)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("carousel_navigation_arrow_hover_transparency", $carousel_navigation_arrow_hover_transparency);

        $row2 = new BridgeQodeRow();
        $group18->addChild("row2", $row2);

        $carousel_navigation_arrow_size = new BridgeQodeField("textsimple", "carousel_navigation_arrow_size", "", esc_html__("Arrow Size (px)", "bridge"), esc_html__("Default value is 14    ", "bridge"));
        $row2->addChild("carousel_navigation_arrow_size", $carousel_navigation_arrow_size);

        $group19 = new BridgeQodeGroup(esc_html__("Navigation Button Background", "bridge"), esc_html__("Define navigation button background", "bridge"));
        $panel15->addChild("group19", $group19);

        $row1 = new BridgeQodeRow();
        $group19->addChild("row1", $row1);

        $carousel_navigation_background_color = new BridgeQodeField("colorsimple", "carousel_navigation_background_color", "", esc_html__("Background Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("carousel_navigation_background_color", $carousel_navigation_background_color);

        $carousel_navigation_background_transparency = new BridgeQodeField("textsimple", "carousel_navigation_background_transparency", "", esc_html__("Background Transparency (0-1)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("carousel_navigation_background_transparency", $carousel_navigation_background_transparency);

        $carousel_navigation_background_hover_color = new BridgeQodeField("colorsimple", "carousel_navigation_background_hover_color", "", esc_html__("Background Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("carousel_navigation_background_hover_color", $carousel_navigation_background_hover_color);

        $carousel_navigation_background_hover_transparency = new BridgeQodeField("textsimple", "carousel_navigation_background_hover_transparency", "", esc_html__("Background Hover Transparency (0-1)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("carousel_navigation_background_hover_transparency", $carousel_navigation_background_hover_transparency);

        $group10 = new BridgeQodeGroup(esc_html__("Navigation Button Border", "bridge"), esc_html__("Define border style", "bridge"));
        $panel15->addChild("group10", $group10);

        $row1 = new BridgeQodeRow();
        $group10->addChild("row1", $row1);

        $carousel_navigation_border_color = new BridgeQodeField("colorsimple", "carousel_navigation_border_color", "", esc_html__("Border Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("carousel_navigation_border_color", $carousel_navigation_border_color);

        $carousel_navigation_border_transparency = new BridgeQodeField("textsimple", "carousel_navigation_border_transparency", "", esc_html__("Border Transparency (0-1)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("carousel_navigation_border_transparency", $carousel_navigation_border_transparency);

        $carousel_navigation_border_hover_color = new BridgeQodeField("colorsimple", "carousel_navigation_border_hover_color", "", esc_html__("Border Hover color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("carousel_navigation_border_hover_color", $carousel_navigation_border_hover_color);

        $carousel_navigation_border_hover_transparency = new BridgeQodeField("textsimple", "carousel_navigation_border_hover_transparency", "", esc_html__("Border Hover Transparency (0-1)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("carousel_navigation_border_hover_transparency", $carousel_navigation_border_hover_transparency);

        $row2 = new BridgeQodeRow();
        $group10->addChild("row2", $row2);

        $carousel_navigation_border_width = new BridgeQodeField("textsimple", "carousel_navigation_border_width", "", esc_html__("Border Width (px)", "bridge"), "");
        $row2->addChild("carousel_navigation_border_width", $carousel_navigation_border_width);

        $carousel_navigation_border_radius = new BridgeQodeField("textsimple", "carousel_navigation_border_radius", "", esc_html__("Border Radius (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("carousel_navigation_border_radius", $carousel_navigation_border_radius);

        $navigation_single_sliders_slider = new BridgeQodeTitle("navigation_single_sliders_slider", esc_html__("Flex Sliders", "bridge"));
        $panel15->addChild("navigation_single_sliders_slider", $navigation_single_sliders_slider);

        $group11 = new BridgeQodeGroup(esc_html__("Navigation Button Size", "bridge"), esc_html__("Define navigation button size", "bridge"));
        $panel15->addChild("group11", $group11);

        $row1 = new BridgeQodeRow();
        $group11->addChild("row1", $row1);

        $single_slider_navigation_button_width = new BridgeQodeField("textsimple", "single_slider_navigation_button_width", "", esc_html__("Width (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("single_slider_navigation_button_width", $single_slider_navigation_button_width);

        $single_slider_navigation_button_height = new BridgeQodeField("textsimple", "single_slider_navigation_button_height", "", esc_html__("Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("single_slider_navigation_button_height", $single_slider_navigation_button_height);

        $group12 = new BridgeQodeGroup(esc_html__("Navigation Button Position", "bridge"), esc_html__("Enter the amount of pixels you would like to move the navigation buttons from the edges of the slider", "bridge"));
        $panel15->addChild("group12", $group12);

        $row1 = new BridgeQodeRow();
        $group12->addChild("row1", $row1);

        $single_slider_navigation_button_position = new BridgeQodeField("textsimple", "single_slider_navigation_button_position", "", esc_html__("Position (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("single_slider_navigation_button_position", $single_slider_navigation_button_position);

        $group13 = new BridgeQodeGroup(esc_html__("Icon Arrow Style", "bridge"), esc_html__("Define arrow navigation style", "bridge"));
        $panel15->addChild("group13", $group13);

        $row1 = new BridgeQodeRow();
        $group13->addChild("row1", $row1);

        $single_slider_navigation_arrow_color = new BridgeQodeField("colorsimple", "single_slider_navigation_arrow_color", "", esc_html__("Arrow Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("single_slider_navigation_arrow_color", $single_slider_navigation_arrow_color);

        $single_slider_navigation_arrow_transparency = new BridgeQodeField("textsimple", "single_slider_navigation_arrow_transparency", "", esc_html__("Arrow Transparency (0-1)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("single_slider_navigation_arrow_transparency", $single_slider_navigation_arrow_transparency);

        $single_slider_navigation_arrow_hover_color = new BridgeQodeField("colorsimple", "single_slider_navigation_arrow_hover_color", "", esc_html__("Arrow Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("single_slider_navigation_arrow_hover_color", $single_slider_navigation_arrow_hover_color);

        $single_slider_navigation_arrow_hover_transparency = new BridgeQodeField("textsimple", "single_slider_navigation_arrow_hover_transparency", "", esc_html__("Arrow Hover Transparency (0-1)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("single_slider_navigation_arrow_hover_transparency", $single_slider_navigation_arrow_hover_transparency);

        $row2 = new BridgeQodeRow();
        $group13->addChild("row2", $row2);

        $single_slider_navigation_arrow_size = new BridgeQodeField("textsimple", "single_slider_navigation_arrow_size", "", esc_html__("Arrow Size (px)", "bridge"), esc_html__("Default value is 14    ", "bridge"));
        $row2->addChild("single_slider_navigation_arrow_size", $single_slider_navigation_arrow_size);

        $group14 = new BridgeQodeGroup(esc_html__("Navigation Button Background", "bridge"), esc_html__("Define navigation button background", "bridge"));
        $panel15->addChild("group14", $group14);

        $row1 = new BridgeQodeRow();
        $group14->addChild("row1", $row1);

        $single_slider_navigation_background_color = new BridgeQodeField("colorsimple", "single_slider_navigation_background_color", "", esc_html__("Background Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("single_slider_navigation_background_color", $single_slider_navigation_background_color);

        $single_slider_navigation_background_transparency = new BridgeQodeField("textsimple", "single_slider_navigation_background_transparency", "", esc_html__("Background Transparency (0-1)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("single_slider_navigation_background_transparency", $single_slider_navigation_background_transparency);

        $single_slider_navigation_background_hover_color = new BridgeQodeField("colorsimple", "single_slider_navigation_background_hover_color", "", esc_html__("Background Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("single_slider_navigation_background_hover_color", $single_slider_navigation_background_hover_color);

        $single_slider_navigation_background_hover_transparency = new BridgeQodeField("textsimple", "single_slider_navigation_background_hover_transparency", "", esc_html__("Background Hover Transparency (0-1)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("single_slider_navigation_background_hover_transparency", $single_slider_navigation_background_hover_transparency);

        $group15 = new BridgeQodeGroup(esc_html__("Navigation Button Border", "bridge"), esc_html__("Define border style", "bridge"));
        $panel15->addChild("group15", $group15);

        $row1 = new BridgeQodeRow();
        $group15->addChild("row1", $row1);

        $single_slider_navigation_border_color = new BridgeQodeField("colorsimple", "single_slider_navigation_border_color", "", esc_html__("Border Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("single_slider_navigation_border_color", $single_slider_navigation_border_color);

        $single_slider_navigation_border_transparency = new BridgeQodeField("textsimple", "single_slider_navigation_border_transparency", "", esc_html__("Border Transparency (0-1)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("single_slider_navigation_border_transparency", $single_slider_navigation_border_transparency);

        $single_slider_navigation_border_hover_color = new BridgeQodeField("colorsimple", "single_slider_navigation_border_hover_color", "", esc_html__("Border Hover color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("single_slider_navigation_border_hover_color", $single_slider_navigation_border_hover_color);

        $single_slider_navigation_border_hover_transparency = new BridgeQodeField("textsimple", "single_slider_navigation_border_hover_transparency", "", esc_html__("Border Hover Transparency (0-1)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("single_slider_navigation_border_hover_transparency", $single_slider_navigation_border_hover_transparency);

        $row2 = new BridgeQodeRow();
        $group15->addChild("row2", $row2);

        $single_slider_navigation_border_width = new BridgeQodeField("textsimple", "single_slider_navigation_border_width", "", esc_html__("Border Width (px)", "bridge"), "");
        $row2->addChild("single_slider_navigation_border_width", $single_slider_navigation_border_width);

        $single_slider_navigation_border_radius = new BridgeQodeField("textsimple", "single_slider_navigation_border_radius", "", esc_html__("Border Radius (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("single_slider_navigation_border_radius", $single_slider_navigation_border_radius);

        $slider_circle_navigation = new BridgeQodeTitle("slider_circle_navigation", esc_html__("Qode Slider Bullet Navigation", "bridge"));
        $panel15->addChild("slider_circle_navigation", $slider_circle_navigation);

        $group20 = new BridgeQodeGroup(esc_html__("Navigation Position", "bridge"), esc_html__("Enter the distance (in percentages) that you would like to move the navigation from the bottom of the slider", "bridge"));
        $panel15->addChild("group20", $group20);

        $row1 = new BridgeQodeRow();
        $group20->addChild("row1", $row1);

        $slider_circle_navigation_position = new BridgeQodeField("textsimple", "slider_circle_navigation_position", "", esc_html__("Position (%)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("slider_circle_navigation_position", $slider_circle_navigation_position);

        $group8 = new BridgeQodeGroup(esc_html__("Navigation Controls", "bridge"), esc_html__("Define navigation controls style", "bridge"));
        $panel15->addChild("group8", $group8);

        $row1 = new BridgeQodeRow();
        $group8->addChild("row1", $row1);

        $button_navigation_color = new BridgeQodeField("colorsimple", "button_navigation_color", "", esc_html__("Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("button_navigation_color", $button_navigation_color);

        $button_navigation_active_color = new BridgeQodeField("colorsimple", "button_navigation_active_color", "", esc_html__("Active Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("button_navigation_active_color", $button_navigation_active_color);

        $button_navigation_size = new BridgeQodeField("textsimple", "button_navigation_size", "", esc_html__("Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("button_navigation_size", $button_navigation_size);

        $button_navigation_border_radius = new BridgeQodeField("textsimple", "button_navigation_border_radius", "", esc_html__("Border Radius (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("button_navigation_border_radius", $button_navigation_border_radius);

        $row2 = new BridgeQodeRow();
        $group8->addChild("row2", $row2);

        $button_navigation_border_color = new BridgeQodeField("colorsimple", "button_navigation_border_color", "", esc_html__("Border Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("button_navigation_border_color", $button_navigation_border_color);

        $button_navigation_active_border_color = new BridgeQodeField("colorsimple", "button_navigation_active_border_color", "", esc_html__("Active Border Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("button_navigation_active_border_color", $button_navigation_active_border_color);

        $slider_bullet_navigation = new BridgeQodeTitle("slider_bullet_navigation", esc_html__("Bullet Navigation for Preview Slider, Content Slider, Advanced Image Gallery and Testimonial Carousel", "bridge"));
        $panel15->addChild("slider_bullet_navigation", $slider_bullet_navigation);

        $group22 = new BridgeQodeGroup(esc_html__("Navigation Controls", "bridge"), esc_html__("Define navigation controls style", "bridge"));
        $panel15->addChild("group22", $group22);

        $row1 = new BridgeQodeRow();
        $group22->addChild("row1", $row1);

        $button_bullet_navigation_color = new BridgeQodeField("colorsimple", "button_bullet_navigation_color", "", esc_html__("Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("button_bullet_navigation_color", $button_bullet_navigation_color);

        $button_bullet_navigation_active_color = new BridgeQodeField("colorsimple", "button_bullet_navigation_active_color", "", esc_html__("Active/Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("button_bullet_navigation_active_color", $button_bullet_navigation_active_color);

        $button_bullet_navigation_size = new BridgeQodeField("textsimple", "button_bullet_navigation_size", "", esc_html__("Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("button_bullet_navigation_size", $button_bullet_navigation_size);

        $button_bullet_navigation_border_radius = new BridgeQodeField("textsimple", "button_bullet_navigation_border_radius", "", esc_html__("Border Radius (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("button_bullet_navigation_border_radius", $button_bullet_navigation_border_radius);

        $row2 = new BridgeQodeRow();
        $group22->addChild("row2", $row2);

        $button_bullet_navigation_border_color = new BridgeQodeField("colorsimple", "button_bullet_navigation_border_color", "", esc_html__("Border Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("button_bullet_navigation_border_color", $button_bullet_navigation_border_color);

        $button_bullet_navigation_active_border_color = new BridgeQodeField("colorsimple", "button_bullet_navigation_active_border_color", "", esc_html__("Active/Hover Border Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("button_bullet_navigation_active_border_color", $button_bullet_navigation_active_border_color);


        //Masonry Gallery
        $panel17 = new BridgeQodePanel(esc_html__('Masonry Gallery', "bridge"), 'masonry_gallery_panel');
        $elementsPage->addChild('panel17', $panel17);

        $masonry_gallery_space = new BridgeQodeField("text", "masonry_gallery_space", "", esc_html__("Space between Items (px)", "bridge"), esc_html__("Define a space between items in the Masonry Gallery", "bridge"), array(), array("col_width" => 3));
        $panel17->addChild("masonry_gallery_space", $masonry_gallery_space);

        //Square Big
        $masonry_gallery_square_big_title = new BridgeQodeTitle('masonry_gallery_square_big_title', esc_html__('Square Big', "bridge"));
        $panel17->addChild('masonry_gallery_square_big_title', $masonry_gallery_square_big_title);

        $group1 = new BridgeQodeGroup(esc_html__('Title Style', "bridge"), esc_html__('Define Square Big Title Style', "bridge"));
        $panel17->addChild('group1', $group1);

        $row1 = new BridgeQodeRow();
        $group1->addChild("row1", $row1);

        $masonry_gallery_square_big_title_color = new BridgeQodeField('colorsimple', 'masonry_gallery_square_big_title_color', '', esc_html__('Title Color', "bridge"));
        $row1->addChild('masonry_gallery_square_big_title_color', $masonry_gallery_square_big_title_color);

        $masonry_gallery_square_big_title_font_size = new BridgeQodeField('textsimple', 'masonry_gallery_square_big_title_font_size', '', esc_html__('Font size (px)', "bridge"));
        $row1->addChild('masonry_gallery_square_big_title_font_size', $masonry_gallery_square_big_title_font_size);

        $masonry_gallery_square_big_title_line_height = new BridgeQodeField('textsimple', 'masonry_gallery_square_big_title_line_height', '', esc_html__('Line Height (px)', "bridge"));
        $row1->addChild('masonry_gallery_square_big_title_line_height', $masonry_gallery_square_big_title_line_height);

        $masonry_gallery_square_big_title_text_transform = new BridgeQodeField('selectblanksimple', 'masonry_gallery_square_big_title_text_transform', '', esc_html__('Text Transform', "bridge"), '', bridge_qode_get_text_transform_array());
        $row1->addChild('masonry_gallery_square_big_title_text_transform', $masonry_gallery_square_big_title_text_transform);

        $row2 = new BridgeQodeRow(true);
        $group1->addChild("row2", $row2);

        $masonry_gallery_square_big_title_font_family = new BridgeQodeField('fontsimple', 'masonry_gallery_square_big_title_font_family', '-1', esc_html__('Font Family', "bridge"));
        $row2->addChild('masonry_gallery_square_big_title_font_family', $masonry_gallery_square_big_title_font_family);

        $masonry_gallery_square_big_title_font_style = new BridgeQodeField('selectblanksimple', 'masonry_gallery_square_big_title_font_style', '', esc_html__('Font Style', "bridge"), '', bridge_qode_get_font_style_array());
        $row2->addChild('masonry_gallery_square_big_title_font_style', $masonry_gallery_square_big_title_font_style);

        $masonry_gallery_square_big_title_font_weight = new BridgeQodeField('selectblanksimple', 'masonry_gallery_square_big_title_font_weight', '', esc_html__('Font Weight', "bridge"), '', bridge_qode_get_font_weight_array());
        $row2->addChild('masonry_gallery_square_big_title_font_weight', $masonry_gallery_square_big_title_font_weight);

        $masonry_gallery_square_big_title_letter_spacing = new BridgeQodeField('textsimple', 'masonry_gallery_square_big_title_letter_spacing', '', esc_html__('Letter Spacing', "bridge"));
        $row2->addChild('masonry_gallery_square_big_title_letter_spacing', $masonry_gallery_square_big_title_letter_spacing);

        $row3 = new BridgeQodeRow(true);
        $group1->addChild("row3", $row3);

        $masonry_gallery_square_big_title_margin_bottom = new BridgeQodeField('textsimple', 'masonry_gallery_square_big_title_margin_bottom', '', esc_html__('Margin Bottom', "bridge"));
        $row3->addChild('masonry_gallery_square_big_title_margin_bottom', $masonry_gallery_square_big_title_margin_bottom);

        $group2 = new BridgeQodeGroup(esc_html__('Text Style', "bridge"), esc_html__('Define Square Big Text Style', "bridge"));
        $panel17->addChild('group2', $group2);

        $row1 = new BridgeQodeRow();
        $group2->addChild("row1", $row1);

        $masonry_gallery_square_big_text_color = new BridgeQodeField('colorsimple', 'masonry_gallery_square_big_text_color', '', esc_html__('Text Color', "bridge"));
        $row1->addChild('masonry_gallery_square_big_text_color', $masonry_gallery_square_big_text_color);

        $masonry_gallery_square_big_text_font_size = new BridgeQodeField('textsimple', 'masonry_gallery_square_big_text_font_size', '', esc_html__('Font size (px)', "bridge"));
        $row1->addChild('masonry_gallery_square_big_text_font_size', $masonry_gallery_square_big_text_font_size);

        $masonry_gallery_square_big_text_line_height = new BridgeQodeField('textsimple', 'masonry_gallery_square_big_text_line_height', '', esc_html__('Line Height (px)', "bridge"));
        $row1->addChild('masonry_gallery_square_big_text_line_height', $masonry_gallery_square_big_text_line_height);

        $masonry_gallery_square_big_text_text_transform = new BridgeQodeField('selectblanksimple', 'masonry_gallery_square_big_text_text_transform', '', esc_html__('Text Transform', "bridge"), '', bridge_qode_get_text_transform_array());
        $row1->addChild('masonry_gallery_square_big_text_text_transform', $masonry_gallery_square_big_text_text_transform);

        $row2 = new BridgeQodeRow(true);
        $group2->addChild("row2", $row2);

        $masonry_gallery_square_big_text_font_family = new BridgeQodeField('fontsimple', 'masonry_gallery_square_big_text_font_family', '-1', esc_html__('Font Family', "bridge"));
        $row2->addChild('masonry_gallery_square_big_text_font_family', $masonry_gallery_square_big_text_font_family);

        $masonry_gallery_square_big_text_font_style = new BridgeQodeField('selectblanksimple', 'masonry_gallery_square_big_text_font_style', '', esc_html__('Font Style', "bridge"), '', bridge_qode_get_font_style_array());
        $row2->addChild('masonry_gallery_square_big_text_font_style', $masonry_gallery_square_big_text_font_style);

        $masonry_gallery_square_big_text_font_weight = new BridgeQodeField('selectblanksimple', 'masonry_gallery_square_big_text_font_weight', '', esc_html__('Font Weight', "bridge"), '', bridge_qode_get_font_weight_array());
        $row2->addChild('masonry_gallery_square_big_text_font_weight', $masonry_gallery_square_big_text_font_weight);

        $masonry_gallery_square_big_text_letter_spacing = new BridgeQodeField('textsimple', 'masonry_gallery_square_big_text_letter_spacing', '', esc_html__('Letter Spacing', "bridge"));
        $row2->addChild('masonry_gallery_square_big_text_letter_spacing', $masonry_gallery_square_big_text_letter_spacing);

        $group3 = new BridgeQodeGroup(esc_html__('Button Style', "bridge"), esc_html__('Define Square Big Button Style', "bridge"));
        $panel17->addChild('group3', $group3);

        $row1 = new BridgeQodeRow();
        $group3->addChild('row1', $row1);

        $masonry_gallery_square_big_button_font_family = new BridgeQodeField('fontsimple', 'masonry_gallery_square_big_button_font_family', '-1', esc_html__('Font Family', "bridge"));
        $row1->addChild('masonry_gallery_square_big_button_font_family', $masonry_gallery_square_big_button_font_family);

        $masonry_gallery_square_big_button_font_style = new BridgeQodeField('selectblanksimple', 'masonry_gallery_square_big_button_font_style', '', esc_html__('Font Style', "bridge"), '', bridge_qode_get_font_style_array());
        $row1->addChild('masonry_gallery_square_big_button_font_style', $masonry_gallery_square_big_button_font_style);

        $masonry_gallery_square_big_button_font_weight = new BridgeQodeField('selectblanksimple', 'masonry_gallery_square_big_button_font_weight', '', esc_html__('Font Weight', "bridge"), '', bridge_qode_get_font_weight_array());
        $row1->addChild('masonry_gallery_square_big_button_font_weight', $masonry_gallery_square_big_button_font_weight);

        $masonry_gallery_square_big_button_text_transform = new BridgeQodeField('selectblanksimple', 'masonry_gallery_square_big_button_text_transform', '', esc_html__('Text Transform', "bridge"), '', bridge_qode_get_text_transform_array());
        $row1->addChild('masonry_gallery_square_big_button_text_transform', $masonry_gallery_square_big_button_text_transform);

        $row2 = new BridgeQodeRow(true);
        $group3->addChild('row2', $row2);

        $masonry_gallery_square_big_button_font_size = new BridgeQodeField('textsimple', 'masonry_gallery_square_big_button_font_size', '', esc_html__('Text Size (px)', "bridge"));
        $row2->addChild('masonry_gallery_square_big_button_font_size', $masonry_gallery_square_big_button_font_size);

        $masonry_gallery_square_big_button_line_height = new BridgeQodeField('textsimple', 'masonry_gallery_square_big_button_line_height', '', esc_html__('Line Height (px)', "bridge"));
        $row2->addChild('masonry_gallery_square_big_button_line_height', $masonry_gallery_square_big_button_line_height);

        $masonry_gallery_square_big_button_letter_spacing = new BridgeQodeField('textsimple', 'masonry_gallery_square_big_button_letter_spacing', '', esc_html__('Letter Spacing (px)', "bridge"));
        $row2->addChild('masonry_gallery_square_big_button_letter_spacing', $masonry_gallery_square_big_button_letter_spacing);

        $row3 = new BridgeQodeRow(true);
        $group3->addChild('row3', $row3);

        $masonry_gallery_square_big_button_text_color = new BridgeQodeField('colorsimple', 'masonry_gallery_square_big_button_text_color', '', esc_html__('Text Color', "bridge"));
        $row3->addChild('masonry_gallery_square_big_button_text_color', $masonry_gallery_square_big_button_text_color);

        $masonry_gallery_square_big_button_hover_text_color = new BridgeQodeField('colorsimple', 'masonry_gallery_square_big_button_hover_text_color', '', esc_html__('Hover Text Color', "bridge"));
        $row3->addChild('masonry_gallery_square_big_button_hover_text_color', $masonry_gallery_square_big_button_hover_text_color);

        $masonry_gallery_square_big_button_background_color = new BridgeQodeField('colorsimple', 'masonry_gallery_square_big_button_background_color', '', esc_html__('Background Color', "bridge"));
        $row3->addChild('masonry_gallery_square_big_button_background_color', $masonry_gallery_square_big_button_background_color);

        $masonry_gallery_square_big_button_hover_background_color = new BridgeQodeField('colorsimple', 'masonry_gallery_square_big_button_hover_background_color', '', esc_html__('Hover Background Color', "bridge"));
        $row3->addChild('masonry_gallery_square_big_button_hover_background_color', $masonry_gallery_square_big_button_hover_background_color);

        $row4 = new BridgeQodeRow(true);
        $group3->addChild('row4', $row4);

        $masonry_gallery_square_big_button_border_color = new BridgeQodeField('colorsimple', 'masonry_gallery_square_big_button_border_color', '', esc_html__('Border Color', "bridge"));
        $row4->addChild('masonry_gallery_square_big_button_border_color', $masonry_gallery_square_big_button_border_color);

        $masonry_gallery_square_big_button_hover_border_color = new BridgeQodeField('colorsimple', 'masonry_gallery_square_big_button_hover_border_color', '', esc_html__('Hover Border Color', "bridge"));
        $row4->addChild('masonry_gallery_square_big_button_hover_border_color', $masonry_gallery_square_big_button_hover_border_color);

        $masonry_gallery_square_big_button_border_width = new BridgeQodeField('textsimple', 'masonry_gallery_square_big_button_border_width', '', esc_html__('Border Width (px)', "bridge"));
        $row4->addChild('masonry_gallery_square_big_button_border_width', $masonry_gallery_square_big_button_border_width);

        $masonry_gallery_square_big_button_border_radius = new BridgeQodeField('textsimple', 'masonry_gallery_square_big_button_border_radius', '', esc_html__('Border Radius (px)', "bridge"));
        $row4->addChild('masonry_gallery_square_big_button_border_radius', $masonry_gallery_square_big_button_border_radius);

        $row5 = new BridgeQodeRow(true);
        $group3->addChild('row5', $row5);

        $masonry_gallery_square_big_button_padding_left = new BridgeQodeField('textsimple', 'masonry_gallery_square_big_button_padding_left', '', esc_html__('Padding Left (px)', "bridge"));
        $row5->addChild('masonry_gallery_square_big_button_padding_left', $masonry_gallery_square_big_button_padding_left);

        $masonry_gallery_square_big_button_padding_right = new BridgeQodeField('textsimple', 'masonry_gallery_square_big_button_padding_right', '', esc_html__('Padding Right (px)', "bridge"));
        $row5->addChild('masonry_gallery_square_big_button_padding_right', $masonry_gallery_square_big_button_padding_right);

        $masonry_gallery_square_big_button_margin_top = new BridgeQodeField('textsimple', 'masonry_gallery_square_big_button_margin_top', '', esc_html__('Margin Top', "bridge"));
        $row5->addChild('masonry_gallery_square_big_button_margin_top', $masonry_gallery_square_big_button_margin_top);

        $group4 = new BridgeQodeGroup(esc_html__('Icon Style', "bridge"), esc_html__('Define Square Big Icon Style', "bridge"));
        $panel17->addChild('group4', $group4);

        $row1 = new BridgeQodeRow();
        $group4->addChild('row1', $row1);

        $masonry_gallery_square_big_icon_color = new BridgeQodeField('colorsimple', 'masonry_gallery_square_big_icon_color', '', esc_html__('Icon Color', "bridge"));
        $row1->addChild('masonry_gallery_square_big_icon_color', $masonry_gallery_square_big_icon_color);

        $masonry_gallery_square_big_icon_hover_color = new BridgeQodeField('colorsimple', 'masonry_gallery_square_big_icon_hover_color', '', esc_html__('Icon Hover Color', "bridge"));
        $row1->addChild('masonry_gallery_square_big_icon_hover_color', $masonry_gallery_square_big_icon_hover_color);

        $masonry_gallery_square_big_icon_size = new BridgeQodeField('textsimple', 'masonry_gallery_square_big_icon_size', '', esc_html__('Icon Size (px)', "bridge"));
        $row1->addChild('masonry_gallery_square_big_icon_size', $masonry_gallery_square_big_icon_size);

        $masonry_gallery_square_big_icon_margin_bottom = new BridgeQodeField('textsimple', 'masonry_gallery_square_big_icon_margin_bottom', '', esc_html__('Margin Bottom', "bridge"));
        $row1->addChild('masonry_gallery_square_big_icon_margin_bottom', $masonry_gallery_square_big_icon_margin_bottom);

        $group5 = new BridgeQodeGroup(esc_html__('Overlay Style', "bridge"), esc_html__('Define Square Big Overlay Style', "bridge"));
        $panel17->addChild('group5', $group5);

        $row1 = new BridgeQodeRow();
        $group5->addChild('row1', $row1);

        $masonry_gallery_square_big_overlay_color = new BridgeQodeField('colorsimple', 'masonry_gallery_square_big_overlay_color', '', esc_html__('Color', "bridge"));
        $row1->addChild('masonry_gallery_square_big_overlay_color', $masonry_gallery_square_big_overlay_color);

        $masonry_gallery_square_big_overlay_transparency = new BridgeQodeField('textsimple', 'masonry_gallery_square_big_overlay_transparency', '', esc_html__('Transparency (0=full - 1=opaque)', "bridge"));
        $row1->addChild('masonry_gallery_square_big_overlay_transparency', $masonry_gallery_square_big_overlay_transparency);

        $group6 = new BridgeQodeGroup(esc_html__('Text Alignment', "bridge"), esc_html__('Define Text Alignment', "bridge"));
        $panel17->addChild('group6', $group6);

        $row1 = new BridgeQodeRow();
        $group6->addChild('row1', $row1);

        $masonry_gallery_square_big_text_align = new BridgeQodeField("selectsimple", "masonry_gallery_square_big_text_align", "center", esc_html__("Text Alignment", "bridge"), esc_html__("Choose text position", "bridge"), array(
            "center" => esc_html__("Center", "bridge"),
            "left" => esc_html__("Left", "bridge"),
            "right" => esc_html__("Right", "bridge")
        ));

        $row1->addChild("masonry_gallery_square_big_text_align", $masonry_gallery_square_big_text_align);

        $group7 = new BridgeQodeGroup(esc_html__('Content Padding', "bridge"), esc_html__('Please insert padding in px(or %) i.e. 5px (or 5%)', "bridge"));
        $panel17->addChild('group7', $group7);

        $row1 = new BridgeQodeRow();
        $group7->addChild('row1', $row1);

        $masonry_gallery_square_big_padding_left = new BridgeQodeField("textsimple", "masonry_gallery_square_big_padding_left", "", esc_html__("Padding Left", "bridge"), esc_html__("Please insert padding in px(or %) i.e. 5px(or 5%)", "bridge"), array(), array("col_width" => 3));
        $row1->addChild("masonry_gallery_square_big_padding_left", $masonry_gallery_square_big_padding_left);

        $masonry_gallery_square_big_padding_right = new BridgeQodeField("textsimple", "masonry_gallery_square_big_padding_right", "", esc_html__("Padding Right", "bridge"), esc_html__("Please insert padding in px(or %) i.e. 5px(or 5%)", "bridge"), array(), array("col_width" => 3));
        $row1->addChild("masonry_gallery_square_big_padding_right", $masonry_gallery_square_big_padding_right);


        //Square Small
        $masonry_gallery_square_small_title = new BridgeQodeTitle('masonry_gallery_square_small_title', esc_html__('Square Small', "bridge"));
        $panel17->addChild('masonry_gallery_square_small_title', $masonry_gallery_square_small_title);

        $group8 = new BridgeQodeGroup(esc_html__('Title Style', "bridge"), esc_html__('Define Square Small Title Style', "bridge"));
        $panel17->addChild('group8', $group8);

        $row1 = new BridgeQodeRow();
        $group8->addChild("row1", $row1);

        $masonry_gallery_square_small_title_color = new BridgeQodeField('colorsimple', 'masonry_gallery_square_small_title_color', '', esc_html__('Title Color', "bridge"));
        $row1->addChild('masonry_gallery_square_small_title_color', $masonry_gallery_square_small_title_color);

        $masonry_gallery_square_small_title_font_size = new BridgeQodeField('textsimple', 'masonry_gallery_square_small_title_font_size', '', esc_html__('Font size (px)', "bridge"));
        $row1->addChild('masonry_gallery_square_small_title_font_size', $masonry_gallery_square_small_title_font_size);

        $masonry_gallery_square_small_title_line_height = new BridgeQodeField('textsimple', 'masonry_gallery_square_small_title_line_height', '', esc_html__('Line Height (px)', "bridge"));
        $row1->addChild('masonry_gallery_square_small_title_line_height', $masonry_gallery_square_small_title_line_height);

        $masonry_gallery_square_small_title_text_transform = new BridgeQodeField('selectblanksimple', 'masonry_gallery_square_small_title_text_transform', '', esc_html__('Text Transform', "bridge"), '', bridge_qode_get_text_transform_array());
        $row1->addChild('masonry_gallery_square_small_title_text_transform', $masonry_gallery_square_small_title_text_transform);

        $row2 = new BridgeQodeRow(true);
        $group8->addChild("row2", $row2);

        $masonry_gallery_square_small_title_font_family = new BridgeQodeField('fontsimple', 'masonry_gallery_square_small_title_font_family', '-1', esc_html__('Font Family', "bridge"));
        $row2->addChild('masonry_gallery_square_small_title_font_family', $masonry_gallery_square_small_title_font_family);

        $masonry_gallery_square_small_title_font_style = new BridgeQodeField('selectblanksimple', 'masonry_gallery_square_small_title_font_style', '', esc_html__('Font Style', "bridge"), '', bridge_qode_get_font_style_array());
        $row2->addChild('masonry_gallery_square_small_title_font_style', $masonry_gallery_square_small_title_font_style);

        $masonry_gallery_square_small_title_font_weight = new BridgeQodeField('selectblanksimple', 'masonry_gallery_square_small_title_font_weight', '', esc_html__('Font Weight', "bridge"), '', bridge_qode_get_font_weight_array());
        $row2->addChild('masonry_gallery_square_small_title_font_weight', $masonry_gallery_square_small_title_font_weight);

        $masonry_gallery_square_small_title_letter_spacing = new BridgeQodeField('textsimple', 'masonry_gallery_square_small_title_letter_spacing', '', esc_html__('Letter Spacing', "bridge"));
        $row2->addChild('masonry_gallery_square_small_title_letter_spacing', $masonry_gallery_square_small_title_letter_spacing);

        $row3 = new BridgeQodeRow(true);
        $group8->addChild("row3", $row3);

        $masonry_gallery_square_small_title_margin_bottom = new BridgeQodeField('textsimple', 'masonry_gallery_square_small_title_margin_bottom', '', esc_html__('Margin Bottom', "bridge"));
        $row3->addChild('masonry_gallery_square_small_title_margin_bottom', $masonry_gallery_square_small_title_margin_bottom);

        $group9 = new BridgeQodeGroup(esc_html__('Text Style', "bridge"), esc_html__('Define Square Small Text Style', "bridge"));
        $panel17->addChild('group9', $group9);

        $row1 = new BridgeQodeRow();
        $group9->addChild("row1", $row1);

        $masonry_gallery_square_small_text_color = new BridgeQodeField('colorsimple', 'masonry_gallery_square_small_text_color', '', esc_html__('Text Color', "bridge"));
        $row1->addChild('masonry_gallery_square_small_text_color', $masonry_gallery_square_small_text_color);

        $masonry_gallery_square_small_text_font_size = new BridgeQodeField('textsimple', 'masonry_gallery_square_small_text_font_size', '', esc_html__('Font size (px)', "bridge"));
        $row1->addChild('masonry_gallery_square_small_text_font_size', $masonry_gallery_square_small_text_font_size);

        $masonry_gallery_square_small_text_line_height = new BridgeQodeField('textsimple', 'masonry_gallery_square_small_text_line_height', '', esc_html__('Line Height (px)', "bridge"));
        $row1->addChild('masonry_gallery_square_small_text_line_height', $masonry_gallery_square_small_text_line_height);

        $masonry_gallery_square_small_text_text_transform = new BridgeQodeField('selectblanksimple', 'masonry_gallery_square_small_text_text_transform', '', esc_html__('Text Transform', "bridge"), '', bridge_qode_get_text_transform_array());
        $row1->addChild('masonry_gallery_square_small_text_text_transform', $masonry_gallery_square_small_text_text_transform);

        $row2 = new BridgeQodeRow(true);
        $group9->addChild("row2", $row2);

        $masonry_gallery_square_small_text_font_family = new BridgeQodeField('fontsimple', 'masonry_gallery_square_small_text_font_family', '-1', esc_html__('Font Family', "bridge"));
        $row2->addChild('masonry_gallery_square_small_text_font_family', $masonry_gallery_square_small_text_font_family);

        $masonry_gallery_square_small_text_font_style = new BridgeQodeField('selectblanksimple', 'masonry_gallery_square_small_text_font_style', '', esc_html__('Font Style', "bridge"), '', bridge_qode_get_font_style_array());
        $row2->addChild('masonry_gallery_square_small_text_font_style', $masonry_gallery_square_small_text_font_style);

        $masonry_gallery_square_small_text_font_weight = new BridgeQodeField('selectblanksimple', 'masonry_gallery_square_small_text_font_weight', '', esc_html__('Font Weight', "bridge"), '', bridge_qode_get_font_weight_array());
        $row2->addChild('masonry_gallery_square_small_text_font_weight', $masonry_gallery_square_small_text_font_weight);

        $masonry_gallery_square_small_text_letter_spacing = new BridgeQodeField('textsimple', 'masonry_gallery_square_small_text_letter_spacing', '', esc_html__('Letter Spacing', "bridge"));
        $row2->addChild('masonry_gallery_square_small_text_letter_spacing', $masonry_gallery_square_small_text_letter_spacing);

        $group10 = new BridgeQodeGroup(esc_html__('Button Style', "bridge"), esc_html__('Define Square Small Button Style', "bridge"));
        $panel17->addChild('group10', $group10);

        $row1 = new BridgeQodeRow();
        $group10->addChild('row1', $row1);

        $masonry_gallery_square_small_button_font_family = new BridgeQodeField('fontsimple', 'masonry_gallery_square_small_button_font_family', '-1', esc_html__('Font Family', "bridge"));
        $row1->addChild('masonry_gallery_square_small_button_font_family', $masonry_gallery_square_small_button_font_family);

        $masonry_gallery_square_small_button_font_style = new BridgeQodeField('selectblanksimple', 'masonry_gallery_square_small_button_font_style', '', esc_html__('Font Style', "bridge"), '', bridge_qode_get_font_style_array());
        $row1->addChild('masonry_gallery_square_small_button_font_style', $masonry_gallery_square_small_button_font_style);

        $masonry_gallery_square_small_button_font_weight = new BridgeQodeField('selectblanksimple', 'masonry_gallery_square_small_button_font_weight', '', esc_html__('Font Weight', "bridge"), '', bridge_qode_get_font_weight_array());
        $row1->addChild('masonry_gallery_square_small_button_font_weight', $masonry_gallery_square_small_button_font_weight);

        $masonry_gallery_square_small_button_text_transform = new BridgeQodeField('selectblanksimple', 'masonry_gallery_square_small_button_text_transform', '', esc_html__('Text Transform', "bridge"), '', bridge_qode_get_text_transform_array());
        $row1->addChild('masonry_gallery_square_small_button_text_transform', $masonry_gallery_square_small_button_text_transform);

        $row2 = new BridgeQodeRow(true);
        $group10->addChild('row2', $row2);

        $masonry_gallery_square_small_button_font_size = new BridgeQodeField('textsimple', 'masonry_gallery_square_small_button_font_size', '', esc_html__('Text Size (px)', "bridge"));
        $row2->addChild('masonry_gallery_square_small_button_font_size', $masonry_gallery_square_small_button_font_size);

        $masonry_gallery_square_small_button_line_height = new BridgeQodeField('textsimple', 'masonry_gallery_square_small_button_line_height', '', esc_html__('Line Height (px)', "bridge"));
        $row2->addChild('masonry_gallery_square_small_button_line_height', $masonry_gallery_square_small_button_line_height);

        $masonry_gallery_square_small_button_letter_spacing = new BridgeQodeField('textsimple', 'masonry_gallery_square_small_button_letter_spacing', '', esc_html__('Letter Spacing (px)', "bridge"));
        $row2->addChild('masonry_gallery_square_small_button_letter_spacing', $masonry_gallery_square_small_button_letter_spacing);

        $row3 = new BridgeQodeRow(true);
        $group10->addChild('row3', $row3);

        $masonry_gallery_square_small_button_text_color = new BridgeQodeField('colorsimple', 'masonry_gallery_square_small_button_text_color', '', esc_html__('Text Color', "bridge"));
        $row3->addChild('masonry_gallery_square_small_button_text_color', $masonry_gallery_square_small_button_text_color);

        $masonry_gallery_square_small_button_hover_text_color = new BridgeQodeField('colorsimple', 'masonry_gallery_square_small_button_hover_text_color', '', esc_html__('Hover Text Color', "bridge"));
        $row3->addChild('masonry_gallery_square_small_button_hover_text_color', $masonry_gallery_square_small_button_hover_text_color);

        $masonry_gallery_square_small_button_background_color = new BridgeQodeField('colorsimple', 'masonry_gallery_square_small_button_background_color', '', esc_html__('Background Color', "bridge"));
        $row3->addChild('masonry_gallery_square_small_button_background_color', $masonry_gallery_square_small_button_background_color);

        $masonry_gallery_square_small_button_hover_background_color = new BridgeQodeField('colorsimple', 'masonry_gallery_square_small_button_hover_background_color', '', esc_html__('Hover Background Color', "bridge"));
        $row3->addChild('masonry_gallery_square_small_button_hover_background_color', $masonry_gallery_square_small_button_hover_background_color);

        $row4 = new BridgeQodeRow(true);
        $group10->addChild('row4', $row4);

        $masonry_gallery_square_small_button_border_color = new BridgeQodeField('colorsimple', 'masonry_gallery_square_small_button_border_color', '', esc_html__('Border Color', "bridge"));
        $row4->addChild('masonry_gallery_square_small_button_border_color', $masonry_gallery_square_small_button_border_color);

        $masonry_gallery_square_small_button_hover_border_color = new BridgeQodeField('colorsimple', 'masonry_gallery_square_small_button_hover_border_color', '', esc_html__('Hover Border Color', "bridge"));
        $row4->addChild('masonry_gallery_square_small_button_hover_border_color', $masonry_gallery_square_small_button_hover_border_color);

        $masonry_gallery_square_small_button_border_width = new BridgeQodeField('textsimple', 'masonry_gallery_square_small_button_border_width', '', esc_html__('Border Width (px)', "bridge"));
        $row4->addChild('masonry_gallery_square_small_button_border_width', $masonry_gallery_square_small_button_border_width);

        $masonry_gallery_square_small_button_border_radius = new BridgeQodeField('textsimple', 'masonry_gallery_square_small_button_border_radius', '', esc_html__('Border Radius (px)', "bridge"));
        $row4->addChild('masonry_gallery_square_small_button_border_radius', $masonry_gallery_square_small_button_border_radius);

        $row5 = new BridgeQodeRow(true);
        $group10->addChild('row5', $row5);

        $masonry_gallery_square_small_button_padding_left = new BridgeQodeField('textsimple', 'masonry_gallery_square_small_button_padding_left', '', esc_html__('Padding Left (px)', "bridge"));
        $row5->addChild('masonry_gallery_square_small_button_padding_left', $masonry_gallery_square_small_button_padding_left);

        $masonry_gallery_square_small_button_padding_right = new BridgeQodeField('textsimple', 'masonry_gallery_square_small_button_padding_right', '', esc_html__('Padding Right (px)', "bridge"));
        $row5->addChild('masonry_gallery_square_small_button_padding_right', $masonry_gallery_square_small_button_padding_right);

        $masonry_gallery_square_small_button_margin_top = new BridgeQodeField('textsimple', 'masonry_gallery_square_small_button_margin_top', '', esc_html__('Margin Top', "bridge"));
        $row5->addChild('masonry_gallery_square_small_button_margin_top', $masonry_gallery_square_small_button_margin_top);

        $group11 = new BridgeQodeGroup(esc_html__('Icon Style', "bridge"), esc_html__('Define Square Small Icon Style', "bridge"));
        $panel17->addChild('group11', $group11);

        $row1 = new BridgeQodeRow();
        $group11->addChild('row1', $row1);

        $masonry_gallery_square_small_icon_color = new BridgeQodeField('colorsimple', 'masonry_gallery_square_small_icon_color', '', esc_html__('Icon Color', "bridge"));
        $row1->addChild('masonry_gallery_square_small_icon_color', $masonry_gallery_square_small_icon_color);

        $masonry_gallery_square_small_icon_hover_color = new BridgeQodeField('colorsimple', 'masonry_gallery_square_small_icon_hover_color', '', esc_html__('Icon Hover Color', "bridge"));
        $row1->addChild('masonry_gallery_square_small_icon_hover_color', $masonry_gallery_square_small_icon_hover_color);

        $masonry_gallery_square_small_icon_size = new BridgeQodeField('textsimple', 'masonry_gallery_square_small_icon_size', '', esc_html__('Icon Size (px)', "bridge"));
        $row1->addChild('masonry_gallery_square_small_icon_size', $masonry_gallery_square_small_icon_size);

        $masonry_gallery_square_small_icon_margin_bottom = new BridgeQodeField('textsimple', 'masonry_gallery_square_small_icon_margin_bottom', '', esc_html__('Margin Bottom (px)', "bridge"));
        $row1->addChild('masonry_gallery_square_small_icon_margin_bottom', $masonry_gallery_square_small_icon_margin_bottom);

        $group12 = new BridgeQodeGroup(esc_html__('Overlay Style', "bridge"), esc_html__('Define Square Small Overlay Style', "bridge"));
        $panel17->addChild('group12', $group12);

        $row1 = new BridgeQodeRow();
        $group12->addChild('row1', $row1);

        $masonry_gallery_square_small_overlay_color = new BridgeQodeField('colorsimple', 'masonry_gallery_square_small_overlay_color', '', esc_html__('Color', "bridge"));
        $row1->addChild('masonry_gallery_square_small_overlay_color', $masonry_gallery_square_small_overlay_color);

        $masonry_gallery_square_small_overlay_transparency = new BridgeQodeField('textsimple', 'masonry_gallery_square_small_overlay_transparency', '', esc_html__('Transparency (0=full - 1=opaque)', "bridge"));
        $row1->addChild('masonry_gallery_square_small_overlay_transparency', $masonry_gallery_square_small_overlay_transparency);

        $group13 = new BridgeQodeGroup(esc_html__('Text Alignment', "bridge"), esc_html__('Define Text Alignment', "bridge"));
        $panel17->addChild('group13', $group13);

        $row1 = new BridgeQodeRow();
        $group13->addChild('row1', $row1);

        $masonry_gallery_square_small_text_align = new BridgeQodeField("selectsimple", "masonry_gallery_square_small_text_align", "center", esc_html__("Text Alignment", "bridge"), esc_html__("Choose text position", "bridge"), array(
            "center" => esc_html__("Center", "bridge"),
            "left" => esc_html__("Left", "bridge"),
            "right" => esc_html__("Right", "bridge")
        ));
        $row1->addChild("masonry_gallery_square_small_text_align", $masonry_gallery_square_small_text_align);

        $group14 = new BridgeQodeGroup(esc_html__('Content Padding', "bridge"), esc_html__('Please insert padding in px(or %) i.e. 5px (or 5%)', "bridge"));
        $panel17->addChild('group14', $group14);

        $row1 = new BridgeQodeRow();
        $group14->addChild('row1', $row1);

        $masonry_gallery_square_small_padding_left = new BridgeQodeField("textsimple", "masonry_gallery_square_small_padding_left", "", esc_html__("Padding Left", "bridge"), esc_html__("Please insert padding in px(or %) i.e. 5px(or 5%)", "bridge"), array(), array("col_width" => 3));
        $row1->addChild("masonry_gallery_square_small_padding_left", $masonry_gallery_square_small_padding_left);

        $masonry_gallery_square_small_padding_right = new BridgeQodeField("textsimple", "masonry_gallery_square_small_padding_right", "", esc_html__("Padding Right", "bridge"), esc_html__("Please insert padding in px(or %) i.e. 5px(or 5%)", "bridge"), array(), array("col_width" => 3));
        $row1->addChild("masonry_gallery_square_small_padding_right", $masonry_gallery_square_small_padding_right);

        //Rectangle Portrait
        $masonry_gallery_rectangle_portrait_title = new BridgeQodeTitle('masonry_gallery_rectangle_portrait_title', esc_html__('Rectangle Portrait', "bridge"));
        $panel17->addChild('masonry_gallery_rectangle_portrait_title', $masonry_gallery_rectangle_portrait_title);

        $group15 = new BridgeQodeGroup(esc_html__('Title Style', "bridge"), esc_html__('Define Rectangle Portrait Title Style', "bridge"));
        $panel17->addChild('group15', $group15);

        $row1 = new BridgeQodeRow();
        $group15->addChild("row1", $row1);

        $masonry_gallery_rectangle_portrait_title_color = new BridgeQodeField('colorsimple', 'masonry_gallery_rectangle_portrait_title_color', '', esc_html__('Title Color', "bridge"));
        $row1->addChild('masonry_gallery_rectangle_portrait_title_color', $masonry_gallery_rectangle_portrait_title_color);

        $masonry_gallery_rectangle_portrait_title_font_size = new BridgeQodeField('textsimple', 'masonry_gallery_rectangle_portrait_title_font_size', '', esc_html__('Font size (px)', "bridge"));
        $row1->addChild('masonry_gallery_rectangle_portrait_title_font_size', $masonry_gallery_rectangle_portrait_title_font_size);

        $masonry_gallery_rectangle_portrait_title_line_height = new BridgeQodeField('textsimple', 'masonry_gallery_rectangle_portrait_title_line_height', '', esc_html__('Line Height (px)', "bridge"));
        $row1->addChild('masonry_gallery_rectangle_portrait_title_line_height', $masonry_gallery_rectangle_portrait_title_line_height);

        $masonry_gallery_rectangle_portrait_title_text_transform = new BridgeQodeField('selectblanksimple', 'masonry_gallery_rectangle_portrait_title_text_transform', '', esc_html__('Text Transform', "bridge"), '', bridge_qode_get_text_transform_array());
        $row1->addChild('masonry_gallery_rectangle_portrait_title_text_transform', $masonry_gallery_rectangle_portrait_title_text_transform);

        $row2 = new BridgeQodeRow(true);
        $group15->addChild("row2", $row2);

        $masonry_gallery_rectangle_portrait_title_font_family = new BridgeQodeField('fontsimple', 'masonry_gallery_rectangle_portrait_title_font_family', '-1', esc_html__('Font Family', "bridge"));
        $row2->addChild('masonry_gallery_rectangle_portrait_title_font_family', $masonry_gallery_rectangle_portrait_title_font_family);

        $masonry_gallery_rectangle_portrait_title_font_style = new BridgeQodeField('selectblanksimple', 'masonry_gallery_rectangle_portrait_title_font_style', '', esc_html__('Font Style', "bridge"), '', bridge_qode_get_font_style_array());
        $row2->addChild('masonry_gallery_rectangle_portrait_title_font_style', $masonry_gallery_rectangle_portrait_title_font_style);

        $masonry_gallery_rectangle_portrait_title_font_weight = new BridgeQodeField('selectblanksimple', 'masonry_gallery_rectangle_portrait_title_font_weight', '', esc_html__('Font Weight', "bridge"), '', bridge_qode_get_font_weight_array());
        $row2->addChild('masonry_gallery_rectangle_portrait_title_font_weight', $masonry_gallery_rectangle_portrait_title_font_weight);

        $masonry_gallery_rectangle_portrait_title_letter_spacing = new BridgeQodeField('textsimple', 'masonry_gallery_rectangle_portrait_title_letter_spacing', '', esc_html__('Letter Spacing', "bridge"));
        $row2->addChild('masonry_gallery_rectangle_portrait_title_letter_spacing', $masonry_gallery_rectangle_portrait_title_letter_spacing);

        $row3 = new BridgeQodeRow(true);
        $group15->addChild("row3", $row3);

        $masonry_gallery_rectangle_portrait_title_margin_bottom = new BridgeQodeField('textsimple', 'masonry_gallery_rectangle_portrait_title_margin_bottom', '', esc_html__('Margin Bottom', "bridge"));
        $row3->addChild('masonry_gallery_rectangle_portrait_title_margin_bottom', $masonry_gallery_rectangle_portrait_title_margin_bottom);

        $group16 = new BridgeQodeGroup(esc_html__('Text Style', "bridge"), esc_html__('Define Rectangle Portrait Text Style', "bridge"));
        $panel17->addChild('group16', $group16);

        $row1 = new BridgeQodeRow();
        $group16->addChild("row1", $row1);

        $masonry_gallery_rectangle_portrait_text_color = new BridgeQodeField('colorsimple', 'masonry_gallery_rectangle_portrait_text_color', '', esc_html__('Text Color', "bridge"));
        $row1->addChild('masonry_gallery_rectangle_portrait_text_color', $masonry_gallery_rectangle_portrait_text_color);

        $masonry_gallery_rectangle_portrait_text_font_size = new BridgeQodeField('textsimple', 'masonry_gallery_rectangle_portrait_text_font_size', '', esc_html__('Font size (px)', "bridge"));
        $row1->addChild('masonry_gallery_rectangle_portrait_text_font_size', $masonry_gallery_rectangle_portrait_text_font_size);

        $masonry_gallery_rectangle_portrait_text_line_height = new BridgeQodeField('textsimple', 'masonry_gallery_rectangle_portrait_text_line_height', '', esc_html__('Line Height (px)', "bridge"));
        $row1->addChild('masonry_gallery_rectangle_portrait_text_line_height', $masonry_gallery_rectangle_portrait_text_line_height);

        $masonry_gallery_rectangle_portrait_text_text_transform = new BridgeQodeField('selectblanksimple', 'masonry_gallery_rectangle_portrait_text_text_transform', '', esc_html__('Text Transform', "bridge"), '', bridge_qode_get_text_transform_array());
        $row1->addChild('masonry_gallery_rectangle_portrait_text_text_transform', $masonry_gallery_rectangle_portrait_text_text_transform);

        $row2 = new BridgeQodeRow(true);
        $group16->addChild("row2", $row2);

        $masonry_gallery_rectangle_portrait_text_font_family = new BridgeQodeField('fontsimple', 'masonry_gallery_rectangle_portrait_text_font_family', '-1', esc_html__('Font Family', "bridge"));
        $row2->addChild('masonry_gallery_rectangle_portrait_text_font_family', $masonry_gallery_rectangle_portrait_text_font_family);

        $masonry_gallery_rectangle_portrait_text_font_style = new BridgeQodeField('selectblanksimple', 'masonry_gallery_rectangle_portrait_text_font_style', '', esc_html__('Font Style', "bridge"), '', bridge_qode_get_font_style_array());
        $row2->addChild('masonry_gallery_rectangle_portrait_text_font_style', $masonry_gallery_rectangle_portrait_text_font_style);

        $masonry_gallery_rectangle_portrait_text_font_weight = new BridgeQodeField('selectblanksimple', 'masonry_gallery_rectangle_portrait_text_font_weight', '', esc_html__('Font Weight', "bridge"), '', bridge_qode_get_font_weight_array());
        $row2->addChild('masonry_gallery_rectangle_portrait_text_font_weight', $masonry_gallery_rectangle_portrait_text_font_weight);

        $masonry_gallery_rectangle_portrait_text_letter_spacing = new BridgeQodeField('textsimple', 'masonry_gallery_rectangle_portrait_text_letter_spacing', '', esc_html__('Letter Spacing', "bridge"));
        $row2->addChild('masonry_gallery_rectangle_portrait_text_letter_spacing', $masonry_gallery_rectangle_portrait_text_letter_spacing);

        $group17 = new BridgeQodeGroup(esc_html__('Button Style', "bridge"), esc_html__('Define Rectangle Portrait Button Style', "bridge"));
        $panel17->addChild('group17', $group17);

        $row1 = new BridgeQodeRow();
        $group17->addChild('row1', $row1);

        $masonry_gallery_rectangle_portrait_button_font_family = new BridgeQodeField('fontsimple', 'masonry_gallery_rectangle_portrait_button_font_family', '-1', esc_html__('Font Family', "bridge"));
        $row1->addChild('masonry_gallery_rectangle_portrait_button_font_family', $masonry_gallery_rectangle_portrait_button_font_family);

        $masonry_gallery_rectangle_portrait_button_font_style = new BridgeQodeField('selectblanksimple', 'masonry_gallery_rectangle_portrait_button_font_style', '', esc_html__('Font Style', "bridge"), '', bridge_qode_get_font_style_array());
        $row1->addChild('masonry_gallery_rectangle_portrait_button_font_style', $masonry_gallery_rectangle_portrait_button_font_style);

        $masonry_gallery_rectangle_portrait_button_font_weight = new BridgeQodeField('selectblanksimple', 'masonry_gallery_rectangle_portrait_button_font_weight', '', esc_html__('Font Weight', "bridge"), '', bridge_qode_get_font_weight_array());
        $row1->addChild('masonry_gallery_rectangle_portrait_button_font_weight', $masonry_gallery_rectangle_portrait_button_font_weight);

        $masonry_gallery_rectangle_portrait_button_text_transform = new BridgeQodeField('selectblanksimple', 'masonry_gallery_rectangle_portrait_button_text_transform', '', esc_html__('Text Transform', "bridge"), '', bridge_qode_get_text_transform_array());
        $row1->addChild('masonry_gallery_rectangle_portrait_button_text_transform', $masonry_gallery_rectangle_portrait_button_text_transform);

        $row2 = new BridgeQodeRow(true);
        $group17->addChild('row2', $row2);

        $masonry_gallery_rectangle_portrait_button_font_size = new BridgeQodeField('textsimple', 'masonry_gallery_rectangle_portrait_button_font_size', '', esc_html__('Text Size (px)', "bridge"));
        $row2->addChild('masonry_gallery_rectangle_portrait_button_font_size', $masonry_gallery_rectangle_portrait_button_font_size);

        $masonry_gallery_rectangle_portrait_button_line_height = new BridgeQodeField('textsimple', 'masonry_gallery_rectangle_portrait_button_line_height', '', esc_html__('Line Height (px)', "bridge"));
        $row2->addChild('masonry_gallery_rectangle_portrait_button_line_height', $masonry_gallery_rectangle_portrait_button_line_height);

        $masonry_gallery_rectangle_portrait_button_letter_spacing = new BridgeQodeField('textsimple', 'masonry_gallery_rectangle_portrait_button_letter_spacing', '', esc_html__('Letter Spacing (px)', "bridge"));
        $row2->addChild('masonry_gallery_rectangle_portrait_button_letter_spacing', $masonry_gallery_rectangle_portrait_button_letter_spacing);

        $row3 = new BridgeQodeRow(true);
        $group17->addChild('row3', $row3);

        $masonry_gallery_rectangle_portrait_button_text_color = new BridgeQodeField('colorsimple', 'masonry_gallery_rectangle_portrait_button_text_color', '', esc_html__('Text Color', "bridge"));
        $row3->addChild('masonry_gallery_rectangle_portrait_button_text_color', $masonry_gallery_rectangle_portrait_button_text_color);

        $masonry_gallery_rectangle_portrait_button_hover_text_color = new BridgeQodeField('colorsimple', 'masonry_gallery_rectangle_portrait_button_hover_text_color', '', esc_html__('Hover Text Color', "bridge"));
        $row3->addChild('masonry_gallery_rectangle_portrait_button_hover_text_color', $masonry_gallery_rectangle_portrait_button_hover_text_color);

        $masonry_gallery_rectangle_portrait_button_background_color = new BridgeQodeField('colorsimple', 'masonry_gallery_rectangle_portrait_button_background_color', '', esc_html__('Background Color', "bridge"));
        $row3->addChild('masonry_gallery_rectangle_portrait_button_background_color', $masonry_gallery_rectangle_portrait_button_background_color);

        $masonry_gallery_rectangle_portrait_button_hover_background_color = new BridgeQodeField('colorsimple', 'masonry_gallery_rectangle_portrait_button_hover_background_color', '', esc_html__('Hover Background Color', "bridge"));
        $row3->addChild('masonry_gallery_rectangle_portrait_button_hover_background_color', $masonry_gallery_rectangle_portrait_button_hover_background_color);

        $row4 = new BridgeQodeRow(true);
        $group17->addChild('row4', $row4);

        $masonry_gallery_rectangle_portrait_button_border_color = new BridgeQodeField('colorsimple', 'masonry_gallery_rectangle_portrait_button_border_color', '', esc_html__('Border Color', "bridge"));
        $row4->addChild('masonry_gallery_rectangle_portrait_button_border_color', $masonry_gallery_rectangle_portrait_button_border_color);

        $masonry_gallery_rectangle_portrait_button_hover_border_color = new BridgeQodeField('colorsimple', 'masonry_gallery_rectangle_portrait_button_hover_border_color', '', esc_html__('Hover Border Color', "bridge"));
        $row4->addChild('masonry_gallery_rectangle_portrait_button_hover_border_color', $masonry_gallery_rectangle_portrait_button_hover_border_color);

        $masonry_gallery_rectangle_portrait_button_border_width = new BridgeQodeField('textsimple', 'masonry_gallery_rectangle_portrait_button_border_width', '', esc_html__('Border Width (px)', "bridge"));
        $row4->addChild('masonry_gallery_rectangle_portrait_button_border_width', $masonry_gallery_rectangle_portrait_button_border_width);

        $masonry_gallery_rectangle_portrait_button_border_radius = new BridgeQodeField('textsimple', 'masonry_gallery_rectangle_portrait_button_border_radius', '', esc_html__('Border Radius (px)', "bridge"));
        $row4->addChild('masonry_gallery_rectangle_portrait_button_border_radius', $masonry_gallery_rectangle_portrait_button_border_radius);

        $row5 = new BridgeQodeRow(true);
        $group17->addChild('row5', $row5);

        $masonry_gallery_rectangle_portrait_button_padding_left = new BridgeQodeField('textsimple', 'masonry_gallery_rectangle_portrait_button_padding_left', '', esc_html__('Padding Left (px)', "bridge"));
        $row5->addChild('masonry_gallery_rectangle_portrait_button_padding_left', $masonry_gallery_rectangle_portrait_button_padding_left);

        $masonry_gallery_rectangle_portrait_button_padding_right = new BridgeQodeField('textsimple', 'masonry_gallery_rectangle_portrait_button_padding_right', '', esc_html__('Padding Right (px)', "bridge"));
        $row5->addChild('masonry_gallery_rectangle_portrait_button_padding_right', $masonry_gallery_rectangle_portrait_button_padding_right);

        $masonry_gallery_rectangle_portrait_button_margin_top = new BridgeQodeField('textsimple', 'masonry_gallery_rectangle_portrait_button_margin_top', '', esc_html__('Margin Top', "bridge"));
        $row5->addChild('masonry_gallery_rectangle_portrait_button_margin_top', $masonry_gallery_rectangle_portrait_button_margin_top);

        $group18 = new BridgeQodeGroup(esc_html__('Icon Style', "bridge"), esc_html__('Define Rectangle Portrait Icon Style', "bridge"));
        $panel17->addChild('group18', $group18);

        $row1 = new BridgeQodeRow();
        $group18->addChild('row1', $row1);

        $masonry_gallery_rectangle_portrait_icon_color = new BridgeQodeField('colorsimple', 'masonry_gallery_rectangle_portrait_icon_color', '', esc_html__('Icon Color', "bridge"));
        $row1->addChild('masonry_gallery_rectangle_portrait_icon_color', $masonry_gallery_rectangle_portrait_icon_color);

        $masonry_gallery_rectangle_portrait_icon_hover_color = new BridgeQodeField('colorsimple', 'masonry_gallery_rectangle_portrait_icon_hover_color', '', esc_html__('Icon Hover Color', "bridge"));
        $row1->addChild('masonry_gallery_rectangle_portrait_icon_hover_color', $masonry_gallery_rectangle_portrait_icon_hover_color);

        $masonry_gallery_rectangle_portrait_icon_size = new BridgeQodeField('textsimple', 'masonry_gallery_rectangle_portrait_icon_size', '', esc_html__('Icon Size (px)', "bridge"));
        $row1->addChild('masonry_gallery_rectangle_portrait_icon_size', $masonry_gallery_rectangle_portrait_icon_size);

        $masonry_gallery_rectangle_portrait_icon_margin_bottom = new BridgeQodeField('textsimple', 'masonry_gallery_rectangle_portrait_icon_margin_bottom', '', esc_html__('Margin Bottom (px)', "bridge"));
        $row1->addChild('masonry_gallery_rectangle_portrait_icon_margin_bottom', $masonry_gallery_rectangle_portrait_icon_margin_bottom);

        $group19 = new BridgeQodeGroup(esc_html__('Overlay Style', "bridge"), esc_html__('Define Rectangle Portrait Overlay Style', "bridge"));
        $panel17->addChild('group19', $group19);

        $row1 = new BridgeQodeRow();
        $group19->addChild('row1', $row1);

        $masonry_gallery_rectangle_portrait_overlay_color = new BridgeQodeField('colorsimple', 'masonry_gallery_rectangle_portrait_overlay_color', '', esc_html__('Color', "bridge"));
        $row1->addChild('masonry_gallery_rectangle_portrait_overlay_color', $masonry_gallery_rectangle_portrait_overlay_color);

        $masonry_gallery_rectangle_portrait_overlay_transparency = new BridgeQodeField('textsimple', 'masonry_gallery_rectangle_portrait_overlay_transparency', '', esc_html__('Transparency (0=full - 1=opaque)', "bridge"));
        $row1->addChild('masonry_gallery_rectangle_portrait_overlay_transparency', $masonry_gallery_rectangle_portrait_overlay_transparency);

        $group20 = new BridgeQodeGroup(esc_html__('Text Alignment', "bridge"), esc_html__('Define Text Alignment', "bridge"));
        $panel17->addChild('group20', $group20);

        $row1 = new BridgeQodeRow();
        $group20->addChild('row1', $row1);

        $masonry_gallery_rectangle_portrait_text_align = new BridgeQodeField("selectsimple", "masonry_gallery_rectangle_portrait_text_align", "center", esc_html__("Text Alignment", "bridge"), esc_html__("Choose text position", "bridge"), array(
            "center" => esc_html__("Center", "bridge"),
            "left" => esc_html__("Left", "bridge"),
            "right" => esc_html__("Right", "bridge")
        ));
        $row1->addChild("masonry_gallery_rectangle_portrait_text_align", $masonry_gallery_rectangle_portrait_text_align);

        $group21 = new BridgeQodeGroup(esc_html__('Content Padding', "bridge"), esc_html__('Please insert padding in px(or %) i.e. 5px (or 5%)', "bridge"));
        $panel17->addChild('group21', $group21);

        $row1 = new BridgeQodeRow();
        $group21->addChild('row1', $row1);

        $masonry_gallery_rectangle_portrait_padding_left = new BridgeQodeField("textsimple", "masonry_gallery_rectangle_portrait_padding_left", "", esc_html__("Padding Left", "bridge"), esc_html__("Please insert padding in px(or %) i.e. 5px(or 5%)", "bridge"), array(), array("col_width" => 3));
        $row1->addChild("masonry_gallery_rectangle_portrait_padding_left", $masonry_gallery_rectangle_portrait_padding_left);

        $masonry_gallery_rectangle_portrait_padding_right = new BridgeQodeField("textsimple", "masonry_gallery_rectangle_portrait_padding_right", "", esc_html__("Padding Right", "bridge"), esc_html__("Please insert padding in px(or %) i.e. 5px(or 5%)", "bridge"), array(), array("col_width" => 3));
        $row1->addChild("masonry_gallery_rectangle_portrait_padding_right", $masonry_gallery_rectangle_portrait_padding_right);

        //Rectangle Landscape
        $masonry_gallery_rectangle_landscape_title = new BridgeQodeTitle('masonry_gallery_rectangle_landscape_title', esc_html__('Rectangle Landscape', "bridge"));
        $panel17->addChild('masonry_gallery_rectangle_landscape_title', $masonry_gallery_rectangle_landscape_title);

        $group22 = new BridgeQodeGroup(esc_html__('Title Style', "bridge"), esc_html__('Define Rectangle Landscape Title Style', "bridge"));
        $panel17->addChild('group22', $group22);

        $row1 = new BridgeQodeRow();
        $group22->addChild("row1", $row1);

        $masonry_gallery_rectangle_landscape_title_color = new BridgeQodeField('colorsimple', 'masonry_gallery_rectangle_landscape_title_color', '', esc_html__('Title Color', "bridge"));
        $row1->addChild('masonry_gallery_rectangle_landscape_title_color', $masonry_gallery_rectangle_landscape_title_color);

        $masonry_gallery_rectangle_landscape_title_font_size = new BridgeQodeField('textsimple', 'masonry_gallery_rectangle_landscape_title_font_size', '', esc_html__('Font size (px)', "bridge"));
        $row1->addChild('masonry_gallery_rectangle_landscape_title_font_size', $masonry_gallery_rectangle_landscape_title_font_size);

        $masonry_gallery_rectangle_landscape_title_line_height = new BridgeQodeField('textsimple', 'masonry_gallery_rectangle_landscape_title_line_height', '', esc_html__('Line Height (px)', "bridge"));
        $row1->addChild('masonry_gallery_rectangle_landscape_title_line_height', $masonry_gallery_rectangle_landscape_title_line_height);

        $masonry_gallery_rectangle_landscape_title_text_transform = new BridgeQodeField('selectblanksimple', 'masonry_gallery_rectangle_landscape_title_text_transform', '', esc_html__('Text Transform', "bridge"), '', bridge_qode_get_text_transform_array());
        $row1->addChild('masonry_gallery_rectangle_landscape_title_text_transform', $masonry_gallery_rectangle_landscape_title_text_transform);

        $row2 = new BridgeQodeRow(true);
        $group22->addChild("row2", $row2);

        $masonry_gallery_rectangle_landscape_title_font_family = new BridgeQodeField('fontsimple', 'masonry_gallery_rectangle_landscape_title_font_family', '-1', esc_html__('Font Family', "bridge"));
        $row2->addChild('masonry_gallery_rectangle_landscape_title_font_family', $masonry_gallery_rectangle_landscape_title_font_family);

        $masonry_gallery_rectangle_landscape_title_font_style = new BridgeQodeField('selectblanksimple', 'masonry_gallery_rectangle_landscape_title_font_style', '', esc_html__('Font Style', "bridge"), '', bridge_qode_get_font_style_array());
        $row2->addChild('masonry_gallery_rectangle_landscape_title_font_style', $masonry_gallery_rectangle_landscape_title_font_style);

        $masonry_gallery_rectangle_landscape_title_font_weight = new BridgeQodeField('selectblanksimple', 'masonry_gallery_rectangle_landscape_title_font_weight', '', esc_html__('Font Weight', "bridge"), '', bridge_qode_get_font_weight_array());
        $row2->addChild('masonry_gallery_rectangle_landscape_title_font_weight', $masonry_gallery_rectangle_landscape_title_font_weight);

        $masonry_gallery_rectangle_landscape_title_letter_spacing = new BridgeQodeField('textsimple', 'masonry_gallery_rectangle_landscape_title_letter_spacing', '', esc_html__('Letter Spacing', "bridge"));
        $row2->addChild('masonry_gallery_rectangle_landscape_title_letter_spacing', $masonry_gallery_rectangle_landscape_title_letter_spacing);

        $row3 = new BridgeQodeRow(true);
        $group22->addChild("row3", $row3);

        $masonry_gallery_rectangle_landscape_title_margin_bottom = new BridgeQodeField('textsimple', 'masonry_gallery_rectangle_landscape_title_margin_bottom', '', esc_html__('Margin Bottom', "bridge"));
        $row3->addChild('masonry_gallery_rectangle_landscape_title_margin_bottom', $masonry_gallery_rectangle_landscape_title_margin_bottom);

        $group23 = new BridgeQodeGroup(esc_html__('Text Style', "bridge"), esc_html__('Define Rectangle Landscape Text Style', "bridge"));
        $panel17->addChild('group23', $group23);

        $row1 = new BridgeQodeRow();
        $group23->addChild("row1", $row1);

        $masonry_gallery_rectangle_landscape_text_color = new BridgeQodeField('colorsimple', 'masonry_gallery_rectangle_landscape_text_color', '', esc_html__('Text Color', "bridge"));
        $row1->addChild('masonry_gallery_rectangle_landscape_text_color', $masonry_gallery_rectangle_landscape_text_color);

        $masonry_gallery_rectangle_landscape_text_font_size = new BridgeQodeField('textsimple', 'masonry_gallery_rectangle_landscape_text_font_size', '', esc_html__('Font size (px)', "bridge"));
        $row1->addChild('masonry_gallery_rectangle_landscape_text_font_size', $masonry_gallery_rectangle_landscape_text_font_size);

        $masonry_gallery_rectangle_landscape_text_line_height = new BridgeQodeField('textsimple', 'masonry_gallery_rectangle_landscape_text_line_height', '', esc_html__('Line Height (px)', "bridge"));
        $row1->addChild('masonry_gallery_rectangle_landscape_text_line_height', $masonry_gallery_rectangle_landscape_text_line_height);

        $masonry_gallery_rectangle_landscape_text_text_transform = new BridgeQodeField('selectblanksimple', 'masonry_gallery_rectangle_landscape_text_text_transform', '', esc_html__('Text Transform', "bridge"), '', bridge_qode_get_text_transform_array());
        $row1->addChild('masonry_gallery_rectangle_landscape_text_text_transform', $masonry_gallery_rectangle_landscape_text_text_transform);

        $row2 = new BridgeQodeRow(true);
        $group23->addChild("row2", $row2);

        $masonry_gallery_rectangle_landscape_text_font_family = new BridgeQodeField('fontsimple', 'masonry_gallery_rectangle_landscape_text_font_family', '-1', esc_html__('Font Family', "bridge"));
        $row2->addChild('masonry_gallery_rectangle_landscape_text_font_family', $masonry_gallery_rectangle_landscape_text_font_family);

        $masonry_gallery_rectangle_landscape_text_font_style = new BridgeQodeField('selectblanksimple', 'masonry_gallery_rectangle_landscape_text_font_style', '', esc_html__('Font Style', "bridge"), '', bridge_qode_get_font_style_array());
        $row2->addChild('masonry_gallery_rectangle_landscape_text_font_style', $masonry_gallery_rectangle_landscape_text_font_style);

        $masonry_gallery_rectangle_landscape_text_font_weight = new BridgeQodeField('selectblanksimple', 'masonry_gallery_rectangle_landscape_text_font_weight', '', esc_html__('Font Weight', "bridge"), '', bridge_qode_get_font_weight_array());
        $row2->addChild('masonry_gallery_rectangle_landscape_text_font_weight', $masonry_gallery_rectangle_landscape_text_font_weight);

        $masonry_gallery_rectangle_landscape_text_letter_spacing = new BridgeQodeField('textsimple', 'masonry_gallery_rectangle_landscape_text_letter_spacing', '', esc_html__('Letter Spacing', "bridge"));
        $row2->addChild('masonry_gallery_rectangle_landscape_text_letter_spacing', $masonry_gallery_rectangle_landscape_text_letter_spacing);

        $group24 = new BridgeQodeGroup(esc_html__('Button Style', "bridge"), esc_html__('Define Rectangle Landscape Button Style', "bridge"));
        $panel17->addChild('group24', $group24);

        $row1 = new BridgeQodeRow();
        $group24->addChild('row1', $row1);

        $masonry_gallery_rectangle_landscape_button_font_family = new BridgeQodeField('fontsimple', 'masonry_gallery_rectangle_landscape_button_font_family', '-1', esc_html__('Font Family', "bridge"));
        $row1->addChild('masonry_gallery_rectangle_landscape_button_font_family', $masonry_gallery_rectangle_landscape_button_font_family);

        $masonry_gallery_rectangle_landscape_button_font_style = new BridgeQodeField('selectblanksimple', 'masonry_gallery_rectangle_landscape_button_font_style', '', esc_html__('Font Style', "bridge"), '', bridge_qode_get_font_style_array());
        $row1->addChild('masonry_gallery_rectangle_landscape_button_font_style', $masonry_gallery_rectangle_landscape_button_font_style);

        $masonry_gallery_rectangle_landscape_button_font_weight = new BridgeQodeField('selectblanksimple', 'masonry_gallery_rectangle_landscape_button_font_weight', '', esc_html__('Font Weight', "bridge"), '', bridge_qode_get_font_weight_array());
        $row1->addChild('masonry_gallery_rectangle_landscape_button_font_weight', $masonry_gallery_rectangle_landscape_button_font_weight);

        $masonry_gallery_rectangle_landscape_button_text_transform = new BridgeQodeField('selectblanksimple', 'masonry_gallery_rectangle_landscape_button_text_transform', '', esc_html__('Text Transform', "bridge"), '', bridge_qode_get_text_transform_array());
        $row1->addChild('masonry_gallery_rectangle_landscape_button_text_transform', $masonry_gallery_rectangle_landscape_button_text_transform);

        $row2 = new BridgeQodeRow(true);
        $group24->addChild('row2', $row2);

        $masonry_gallery_rectangle_landscape_button_font_size = new BridgeQodeField('textsimple', 'masonry_gallery_rectangle_landscape_button_font_size', '', esc_html__('Text Size (px)', "bridge"));
        $row2->addChild('masonry_gallery_rectangle_landscape_button_font_size', $masonry_gallery_rectangle_landscape_button_font_size);

        $masonry_gallery_rectangle_landscape_button_line_height = new BridgeQodeField('textsimple', 'masonry_gallery_rectangle_landscape_button_line_height', '', esc_html__('Line Height (px)', "bridge"));
        $row2->addChild('masonry_gallery_rectangle_landscape_button_line_height', $masonry_gallery_rectangle_landscape_button_line_height);

        $masonry_gallery_rectangle_landscape_button_letter_spacing = new BridgeQodeField('textsimple', 'masonry_gallery_rectangle_landscape_button_letter_spacing', '', esc_html__('Letter Spacing (px)', "bridge"));
        $row2->addChild('masonry_gallery_rectangle_landscape_button_letter_spacing', $masonry_gallery_rectangle_landscape_button_letter_spacing);

        $row3 = new BridgeQodeRow(true);
        $group24->addChild('row3', $row3);

        $masonry_gallery_rectangle_landscape_button_text_color = new BridgeQodeField('colorsimple', 'masonry_gallery_rectangle_landscape_button_text_color', '', esc_html__('Text Color', "bridge"));
        $row3->addChild('masonry_gallery_rectangle_landscape_button_text_color', $masonry_gallery_rectangle_landscape_button_text_color);

        $masonry_gallery_rectangle_landscape_button_hover_text_color = new BridgeQodeField('colorsimple', 'masonry_gallery_rectangle_landscape_button_hover_text_color', '', esc_html__('Hover Text Color', "bridge"));
        $row3->addChild('masonry_gallery_rectangle_landscape_button_hover_text_color', $masonry_gallery_rectangle_landscape_button_hover_text_color);

        $masonry_gallery_rectangle_landscape_button_background_color = new BridgeQodeField('colorsimple', 'masonry_gallery_rectangle_landscape_button_background_color', '', esc_html__('Background Color', "bridge"));
        $row3->addChild('masonry_gallery_rectangle_landscape_button_background_color', $masonry_gallery_rectangle_landscape_button_background_color);

        $masonry_gallery_rectangle_landscape_button_hover_background_color = new BridgeQodeField('colorsimple', 'masonry_gallery_rectangle_landscape_button_hover_background_color', '', esc_html__('Hover Background Color', "bridge"));
        $row3->addChild('masonry_gallery_rectangle_landscape_button_hover_background_color', $masonry_gallery_rectangle_landscape_button_hover_background_color);

        $row4 = new BridgeQodeRow(true);
        $group24->addChild('row4', $row4);

        $masonry_gallery_rectangle_landscape_button_border_color = new BridgeQodeField('colorsimple', 'masonry_gallery_rectangle_landscape_button_border_color', '', esc_html__('Border Color', "bridge"));
        $row4->addChild('masonry_gallery_rectangle_landscape_button_border_color', $masonry_gallery_rectangle_landscape_button_border_color);

        $masonry_gallery_rectangle_landscape_button_hover_border_color = new BridgeQodeField('colorsimple', 'masonry_gallery_rectangle_landscape_button_hover_border_color', '', esc_html__('Hover Border Color', "bridge"));
        $row4->addChild('masonry_gallery_rectangle_landscape_button_hover_border_color', $masonry_gallery_rectangle_landscape_button_hover_border_color);

        $masonry_gallery_rectangle_landscape_button_border_width = new BridgeQodeField('textsimple', 'masonry_gallery_rectangle_landscape_button_border_width', '', esc_html__('Border Width (px)', "bridge"));
        $row4->addChild('masonry_gallery_rectangle_landscape_button_border_width', $masonry_gallery_rectangle_landscape_button_border_width);

        $masonry_gallery_rectangle_landscape_button_border_radius = new BridgeQodeField('textsimple', 'masonry_gallery_rectangle_landscape_button_border_radius', '', esc_html__('Border Radius (px)', "bridge"));
        $row4->addChild('masonry_gallery_rectangle_landscape_button_border_radius', $masonry_gallery_rectangle_landscape_button_border_radius);

        $row5 = new BridgeQodeRow(true);
        $group24->addChild('row5', $row5);

        $masonry_gallery_rectangle_landscape_button_padding_left = new BridgeQodeField('textsimple', 'masonry_gallery_rectangle_landscape_button_padding_left', '', esc_html__('Padding Left (px)', "bridge"));
        $row5->addChild('masonry_gallery_rectangle_landscape_button_padding_left', $masonry_gallery_rectangle_landscape_button_padding_left);

        $masonry_gallery_rectangle_landscape_button_padding_right = new BridgeQodeField('textsimple', 'masonry_gallery_rectangle_landscape_button_padding_right', '', esc_html__('Padding Right (px)', "bridge"));
        $row5->addChild('masonry_gallery_rectangle_landscape_button_padding_right', $masonry_gallery_rectangle_landscape_button_padding_right);

        $masonry_gallery_rectangle_landscape_button_margin_top = new BridgeQodeField('textsimple', 'masonry_gallery_rectangle_landscape_button_margin_top', '', esc_html__('Margin Top', "bridge"));
        $row5->addChild('masonry_gallery_rectangle_landscape_button_margin_top', $masonry_gallery_rectangle_landscape_button_margin_top);

        $group25 = new BridgeQodeGroup(esc_html__('Icon Style', "bridge"), esc_html__('Define Rectangle Landscape Icon Style', "bridge"));
        $panel17->addChild('group25', $group25);

        $row1 = new BridgeQodeRow();
        $group25->addChild('row1', $row1);

        $masonry_gallery_rectangle_landscape_icon_color = new BridgeQodeField('colorsimple', 'masonry_gallery_rectangle_landscape_icon_color', '', esc_html__('Icon Color', "bridge"));
        $row1->addChild('masonry_gallery_rectangle_landscape_icon_color', $masonry_gallery_rectangle_landscape_icon_color);

        $masonry_gallery_rectangle_landscape_icon_hover_color = new BridgeQodeField('colorsimple', 'masonry_gallery_rectangle_landscape_icon_hover_color', '', esc_html__('Icon Hover Color', "bridge"));
        $row1->addChild('masonry_gallery_rectangle_landscape_icon_hover_color', $masonry_gallery_rectangle_landscape_icon_hover_color);

        $masonry_gallery_rectangle_landscape_icon_size = new BridgeQodeField('textsimple', 'masonry_gallery_rectangle_landscape_icon_size', '', esc_html__('Icon Size (px)', "bridge"));
        $row1->addChild('masonry_gallery_rectangle_landscape_icon_size', $masonry_gallery_rectangle_landscape_icon_size);

        $masonry_gallery_rectangle_landscape_icon_margin_bottom = new BridgeQodeField('textsimple', 'masonry_gallery_rectangle_landscape_icon_margin_bottom', '', esc_html__('Margin Bottom (px)', "bridge"));
        $row1->addChild('masonry_gallery_rectangle_landscape_icon_margin_bottom', $masonry_gallery_rectangle_landscape_icon_margin_bottom);

        $group26 = new BridgeQodeGroup(esc_html__('Overlay Style', "bridge"), esc_html__('Define Rectangle Landscape Overlay Style', "bridge"));
        $panel17->addChild('group26', $group26);

        $row1 = new BridgeQodeRow();
        $group26->addChild('row1', $row1);

        $masonry_gallery_rectangle_landscape_overlay_color = new BridgeQodeField('colorsimple', 'masonry_gallery_rectangle_landscape_overlay_color', '', esc_html__('Color', "bridge"));
        $row1->addChild('masonry_gallery_rectangle_landscape_overlay_color', $masonry_gallery_rectangle_landscape_overlay_color);

        $masonry_gallery_rectangle_landscape_overlay_transparency = new BridgeQodeField('textsimple', 'masonry_gallery_rectangle_landscape_overlay_transparency', '', esc_html__('Transparency (0=full - 1=opaque)', "bridge"));
        $row1->addChild('masonry_gallery_rectangle_landscape_overlay_transparency', $masonry_gallery_rectangle_landscape_overlay_transparency);

        $group27 = new BridgeQodeGroup(esc_html__('Text Alignment', "bridge"), esc_html__('Define Text Alignment', "bridge"));
        $panel17->addChild('group27', $group27);

        $row1 = new BridgeQodeRow();
        $group27->addChild('row1', $row1);

        $masonry_gallery_rectangle_landscape_text_align = new BridgeQodeField("selectsimple", "masonry_gallery_rectangle_landscape_text_align", "center", esc_html__("Text Alignment", "bridge"), esc_html__("Choose text position", "bridge"), array(
            "center" => esc_html__("Center", "bridge"),
            "left" => esc_html__("Left", "bridge"),
            "right" => esc_html__("Right", "bridge")
        ));
        $row1->addChild("masonry_gallery_rectangle_landscape_text_align", $masonry_gallery_rectangle_landscape_text_align);

        $group28 = new BridgeQodeGroup(esc_html__('Content Padding', "bridge"), esc_html__('Please insert padding in px(or %) i.e. 5px (or 5%)', "bridge"));
        $panel17->addChild('group28', $group28);

        $row1 = new BridgeQodeRow();
        $group28->addChild('row1', $row1);

        $masonry_gallery_rectangle_landscape_padding_left = new BridgeQodeField("textsimple", "masonry_gallery_rectangle_landscape_padding_left", "", esc_html__("Padding Left", "bridge"), "Please insert padding in px(or %) i.e. 5px (or 5%)", array(), array("col_width" => 3));
        $row1->addChild("masonry_gallery_rectangle_landscape_padding_left", $masonry_gallery_rectangle_landscape_padding_left);

        $masonry_gallery_rectangle_landscape_padding_right = new BridgeQodeField("textsimple", "masonry_gallery_rectangle_landscape_padding_right", "", esc_html__("Padding Right", "bridge"), esc_html__("Please insert padding in px(or %) i.e. 5px(or 5%)", "bridge"), array(), array("col_width" => 3));
        $row1->addChild("masonry_gallery_rectangle_landscape_padding_right", $masonry_gallery_rectangle_landscape_padding_right);


        //Full Screen Sections

        $panel16 = new BridgeQodePanel("Full Screen Sections", "full_screen_sections");
        $elementsPage->addChild("panel16", $panel16);

        $full_screen_sections_nav_title = new BridgeQodeTitle("full_screen_sections_nav_title", esc_html__("Navigation Buttons", "bridge"));
        $panel16->addChild("full_screen_sections_nav_title", $full_screen_sections_nav_title);

        $group1 = new BridgeQodeGroup(esc_html__("Navigation Button Size", "bridge"), esc_html__("Define navigation button size", "bridge"));
        $panel16->addChild("group1", $group1);

        $row1 = new BridgeQodeRow();
        $group1->addChild("row1", $row1);

        $fss_navigation_button_width = new BridgeQodeField("textsimple", "fss_navigation_button_width", "", esc_html__("Width (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("fss_navigation_button_width", $fss_navigation_button_width);

        $fss_navigation_button_height = new BridgeQodeField("textsimple", "fss_navigation_button_height", "", esc_html__("Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("fss_navigation_button_height", $fss_navigation_button_height);

        $fss_navigation_button_position = new BridgeQodeField("select", "fss_navigation_button_position", "", esc_html__("Navigation Position", "bridge"), "Choose navigation buttons position", array(
            "" => esc_html__("Default", "bridge"),
            "side_by_side" => esc_html__("Arrows Side By Side", "bridge")
        ), array(
            "dependence" => true,
            "show" => array("" => "#qodef_fss_default_position_container"),
            "hide" => array("side_by_side" => "#qodef_fss_default_position_container")
        ));
        $panel16->addChild("fss_navigation_button_position", $fss_navigation_button_position);

        $fss_default_position_container = new BridgeQodeContainer("fss_default_position_container", "fss_navigation_button_position", "side_by_side", array("side_by_side"));
        $panel16->addChild("fss_default_position_container", $fss_default_position_container);

        $group1 = new BridgeQodeGroup("Buttons Position", esc_html__("Set the position of buttons from top/bottom edges of the screen", "bridge"));
        $fss_default_position_container->addChild("group1", $group1);

        $row1 = new BridgeQodeRow();
        $group1->addChild("row1", $row1);

        $fss_navigation_button_up_position = new BridgeQodeField("textsimple", "fss_navigation_button_up_position", "", esc_html__("Up Button Position (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("fss_navigation_button_up_position", $fss_navigation_button_up_position);

        $fss_navigation_button_down_position = new BridgeQodeField("textsimple", "fss_navigation_button_down_position", "", esc_html__("Down Button Position (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("fss_navigation_button_down_position", $fss_navigation_button_down_position);

        $group2 = new BridgeQodeGroup(esc_html__("Icon Arrow Style", "bridge"), esc_html__("Define arrow navigation style", "bridge"));
        $panel16->addChild("group2", $group2);

        $row1 = new BridgeQodeRow();
        $group2->addChild("row1", $row1);

        $fss_navigation_arrow_color = new BridgeQodeField("colorsimple", "fss_navigation_arrow_color", "", esc_html__("Arrow Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("fss_navigation_arrow_color", $fss_navigation_arrow_color);

        $fss_navigation_arrow_transparency = new BridgeQodeField("textsimple", "fss_navigation_arrow_transparency", "", esc_html__("Arrow Transparency (0-1)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("fss_navigation_arrow_transparency", $fss_navigation_arrow_transparency);

        $fss_navigation_arrow_hover_color = new BridgeQodeField("colorsimple", "fss_navigation_arrow_hover_color", "", esc_html__("Arrow Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("fss_navigation_arrow_hover_color", $fss_navigation_arrow_hover_color);

        $fss_navigation_arrow_hover_transparency = new BridgeQodeField("textsimple", "fss_navigation_arrow_hover_transparency", "", esc_html__("Arrow Hover Transparency (0-1)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("fss_navigation_arrow_hover_transparency", $fss_navigation_arrow_hover_transparency);

        $row2 = new BridgeQodeRow();
        $group2->addChild("row2", $row2);

        $fss_navigation_arrow_size = new BridgeQodeField("textsimple", "fss_navigation_arrow_size", "", esc_html__("Arrow Size (px)", "bridge"), esc_html__("Default value is 14    ", "bridge"));
        $row2->addChild("fss_navigation_arrow_size", $fss_navigation_arrow_size);

        $group3 = new BridgeQodeGroup(esc_html__("Navigation Button Background", "bridge"), esc_html__("Define navigation button background", "bridge"));
        $panel16->addChild("group3", $group3);

        $row1 = new BridgeQodeRow();
        $group3->addChild("row1", $row1);

        $fss_navigation_background_color = new BridgeQodeField("colorsimple", "fss_navigation_background_color", "", esc_html__("Background Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("fss_navigation_background_color", $fss_navigation_background_color);

        $fss_navigation_background_transparency = new BridgeQodeField("textsimple", "fss_navigation_background_transparency", "", esc_html__("Background Transparency (0-1)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("fss_navigation_background_transparency", $fss_navigation_background_transparency);

        $fss_navigation_background_hover_color = new BridgeQodeField("colorsimple", "fss_navigation_background_hover_color", "", esc_html__("Background Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("fss_navigation_background_hover_color", $fss_navigation_background_hover_color);

        $fss_navigation_background_hover_transparency = new BridgeQodeField("textsimple", "fss_navigation_background_hover_transparency", "", esc_html__("Background Hover Transparency (0-1)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("fss_navigation_background_hover_transparency", $fss_navigation_background_hover_transparency);

        $group4 = new BridgeQodeGroup(esc_html__("Navigation Button Border", "bridge"), esc_html__("Define border style", "bridge"));
        $panel16->addChild("group4", $group4);

        $row1 = new BridgeQodeRow();
        $group4->addChild("row1", $row1);

        $fss_navigation_border_color = new BridgeQodeField("colorsimple", "fss_navigation_border_color", "", esc_html__("Border Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("fss_navigation_border_color", $fss_navigation_border_color);

        $fss_navigation_border_transparency = new BridgeQodeField("textsimple", "fss_navigation_border_transparency", "", esc_html__("Border Transparency (0-1)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("fss_navigation_border_transparency", $fss_navigation_border_transparency);

        $fss_navigation_border_hover_color = new BridgeQodeField("colorsimple", "fss_navigation_border_hover_color", "", esc_html__("Border Hover color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("fss_navigation_border_hover_color", $fss_navigation_border_hover_color);

        $fss_navigation_border_hover_transparency = new BridgeQodeField("textsimple", "fss_navigation_border_hover_transparency", "", esc_html__("Border Hover Transparency (0-1)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("fss_navigation_border_hover_transparency", $fss_navigation_border_hover_transparency);

        $row2 = new BridgeQodeRow();
        $group4->addChild("row2", $row2);

        $fss_navigation_border_width = new BridgeQodeField("textsimple", "fss_navigation_border_width", "", esc_html__("Border Width (px)", "bridge"), "");
        $row2->addChild("fss_navigation_border_width", $fss_navigation_border_width);

        $fss_navigation_border_radius = new BridgeQodeField("textsimple", "fss_navigation_border_radius", "", esc_html__("Border Radius (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("fss_navigation_border_radius", $fss_navigation_border_radius);

		do_action( 'bridge_qode_action_options_elements_page_map' );
    }
    add_action('bridge_qode_action_options_map','bridge_qode_elements_options_map',70);
}