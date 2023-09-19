<?php

if(!function_exists('bridge_qode_sidebar_options_map')) {
    /**
     * Sidebar options page
     */
    function bridge_qode_sidebar_options_map() {

        $sidebarPage = new BridgeQodeAdminPage("_sidebar", esc_html__('Sidebar', 'bridge'), "fa fa-bars");
        bridge_qode_framework()->qodeOptions->addAdminPage("sidebarPage", $sidebarPage);

        //Widgets style

        $panel1 = new BridgeQodePanel(esc_html__('Widgets Style', 'bridge'), "widget_panel");
        $sidebarPage->addChild("panel1", $panel1);

        $group1 = new BridgeQodeGroup(esc_html__('Title Style', 'bridge'), esc_html__('Define styles for widgets title', 'bridge'));
        $panel1->addChild("group1", $group1);

        $row1 = new BridgeQodeRow();
        $group1->addChild("row1", $row1);

        $sidebar_title_color = new BridgeQodeField("colorsimple", "sidebar_title_color", "", esc_html__('Text Color', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("sidebar_title_color", $sidebar_title_color);

        $sidebar_title_fontsize = new BridgeQodeField("textsimple", "sidebar_title_fontsize", "", esc_html__('Font Size (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("sidebar_title_fontsize", $sidebar_title_fontsize);

        $sidebar_title_lineheight = new BridgeQodeField("textsimple", "sidebar_title_lineheight", "", esc_html__('Line Height (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("sidebar_title_lineheight", $sidebar_title_lineheight);

        $sidebar_title_texttransform = new BridgeQodeField("selectblanksimple", "sidebar_title_texttransform", "", esc_html__('Text Transform', 'bridge'), esc_html__('This is some description', 'bridge'), bridge_qode_get_text_transform_array());
        $row1->addChild("sidebar_title_texttransform", $sidebar_title_texttransform);

        $row2 = new BridgeQodeRow(true);
        $group1->addChild("row2", $row2);

        $sidebar_title_google_fonts = new BridgeQodeField("fontsimple", "sidebar_title_google_fonts", "-1", esc_html__('Font Family', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row2->addChild("sidebar_title_google_fonts", $sidebar_title_google_fonts);

        $sidebar_title_fontstyle = new BridgeQodeField("selectblanksimple", "sidebar_title_fontstyle", "", esc_html__('Font Style', 'bridge'), esc_html__('This is some description', 'bridge'), bridge_qode_get_font_style_array());
        $row2->addChild("sidebar_title_fontstyle", $sidebar_title_fontstyle);

        $sidebar_title_fontweight = new BridgeQodeField("selectblanksimple", "sidebar_title_fontweight", "", esc_html__('Font Weight', 'bridge'), esc_html__('This is some description', 'bridge'), bridge_qode_get_font_weight_array());
        $row2->addChild("sidebar_title_fontweight", $sidebar_title_fontweight);

        $sidebar_title_letterspacing = new BridgeQodeField("textsimple", "sidebar_title_letterspacing", "", esc_html__('Letter Spacing (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row2->addChild("sidebar_title_letterspacing", $sidebar_title_letterspacing);

        $group2 = new BridgeQodeGroup("Text Style", "Define styles for widget text");
        $panel1->addChild("group2", $group2);

        $row1 = new BridgeQodeRow();
        $group2->addChild("row1", $row1);

        $sidebar_text_color = new BridgeQodeField("colorsimple", "sidebar_text_color", "", esc_html__('Text Color', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("sidebar_text_color", $sidebar_text_color);

        $sidebar_text_fontsize = new BridgeQodeField("textsimple", "sidebar_text_fontsize", "", esc_html__('Font Size (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("sidebar_text_fontsize", $sidebar_text_fontsize);

        $sidebar_text_lineheight = new BridgeQodeField("textsimple", "sidebar_text_lineheight", "", esc_html__('Line Height (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("sidebar_text_lineheight", $sidebar_text_lineheight);

        $sidebar_text_texttransform = new BridgeQodeField("selectblanksimple", "sidebar_text_texttransform", "", esc_html__('Text Transform', 'bridge'), esc_html__('This is some description', 'bridge'), bridge_qode_get_text_transform_array());
        $row1->addChild("sidebar_text_texttransform", $sidebar_text_texttransform);

        $row2 = new BridgeQodeRow(true);
        $group2->addChild("row2", $row2);

        $sidebar_text_google_fonts = new BridgeQodeField("fontsimple", "sidebar_text_google_fonts", "-1", esc_html__('Font Family', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row2->addChild("sidebar_text_google_fonts", $sidebar_text_google_fonts);

        $sidebar_text_fontstyle = new BridgeQodeField("selectblanksimple", "sidebar_text_fontstyle", "", esc_html__('Font Style', 'bridge'), esc_html__('This is some description', 'bridge'), bridge_qode_get_font_style_array());
        $row2->addChild("sidebar_text_fontstyle", $sidebar_text_fontstyle);

        $sidebar_text_fontweight = new BridgeQodeField("selectblanksimple", "sidebar_text_fontweight", "", esc_html__('Font Weight', 'bridge'), esc_html__('This is some description', 'bridge'), bridge_qode_get_font_weight_array());
        $row2->addChild("sidebar_text_fontweight", $sidebar_text_fontweight);

        $sidebar_text_letterspacing = new BridgeQodeField("textsimple", "sidebar_text_letterspacing", "", esc_html__('Letter Spacing (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row2->addChild("sidebar_text_letterspacing", $sidebar_text_letterspacing);

        $group3 = new BridgeQodeGroup("Link Style", "Define styles for widget links");
        $panel1->addChild("group3", $group3);

        $row1 = new BridgeQodeRow();
        $group3->addChild("row1", $row1);

        $sidebar_link_color = new BridgeQodeField("colorsimple", "sidebar_link_color", "", esc_html__('Text Color', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("sidebar_link_color", $sidebar_link_color);

        $sidebar_link_hover_color = new BridgeQodeField("colorsimple", "sidebar_link_hover_color", "", esc_html__('Text Hover Color', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("sidebar_link_hover_color", $sidebar_link_hover_color);

        $sidebar_link_fontsize = new BridgeQodeField("textsimple", "sidebar_link_fontsize", "", esc_html__('Font Size (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("sidebar_link_fontsize", $sidebar_link_fontsize);

        $sidebar_link_lineheight = new BridgeQodeField("textsimple", "sidebar_link_lineheight", "", esc_html__('Line Height (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("sidebar_link_lineheight", $sidebar_link_lineheight);

        $row2 = new BridgeQodeRow(true);
        $group3->addChild("row2", $row2);

        $sidebar_link_texttransform = new BridgeQodeField("selectblanksimple", "sidebar_link_texttransform", "", esc_html__('Text Transform', 'bridge'), esc_html__('This is some description', 'bridge'), bridge_qode_get_text_transform_array());
        $row2->addChild("sidebar_link_texttransform", $sidebar_link_texttransform);

        $sidebar_link_google_fonts = new BridgeQodeField("fontsimple", "sidebar_link_google_fonts", "-1", esc_html__('Font Family', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row2->addChild("sidebar_link_google_fonts", $sidebar_link_google_fonts);

        $sidebar_link_fontstyle = new BridgeQodeField("selectblanksimple", "sidebar_link_fontstyle", "", esc_html__('Font Style', 'bridge'), esc_html__('This is some description', 'bridge'), bridge_qode_get_font_style_array());
        $row2->addChild("sidebar_link_fontstyle", $sidebar_link_fontstyle);

        $sidebar_link_fontweight = new BridgeQodeField("selectblanksimple", "sidebar_link_fontweight", "", esc_html__('Font Weight', 'bridge'), esc_html__('This is some description', 'bridge'), bridge_qode_get_font_weight_array());
        $row2->addChild("sidebar_link_fontweight", $sidebar_link_fontweight);

        $row3 = new BridgeQodeRow();
        $group3->addChild("row3", $row3);

        $sidebar_link_letterspacing = new BridgeQodeField("textsimple", "sidebar_link_letterspacing", "", esc_html__('Letter Spacing (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row3->addChild("sidebar_link_letterspacing", $sidebar_link_letterspacing);
    }
    add_action('bridge_qode_action_options_map','bridge_qode_sidebar_options_map',80);
}