<?php

if(!function_exists('bridge_qode_fonts_options_map')) {
    /**
     * Fonts options page
     */
    function bridge_qode_fonts_options_map(){
        global $bridge_qode_options;

        $fontsPage = new BridgeQodeAdminPage("_fonts", esc_html__("Fonts", "bridge"), "fa fa-font");
        bridge_qode_framework()->qodeOptions->addAdminPage("fonts", $fontsPage);

        // Headings

        $panel1 = new BridgeQodePanel(esc_html__("Headings", "bridge"), "headings_panel");
        $fontsPage->addChild("panel1", $panel1);

        $group1 = new BridgeQodeGroup(esc_html__("H1 Style", "bridge"), esc_html__("Define styles for H1 heading", "bridge"));
        $panel1->addChild("group1", $group1);
        $row1 = new BridgeQodeRow();
        $group1->addChild("row1", $row1);
        $h1_color = new BridgeQodeField("colorsimple", "h1_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h1_color", $h1_color);
        $h1_fontsize = new BridgeQodeField("textsimple", "h1_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h1_fontsize", $h1_fontsize);
        $h1_lineheight = new BridgeQodeField("textsimple", "h1_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h1_lineheight", $h1_lineheight);
        $h1_texttransform = new BridgeQodeField("selectblanksimple", "h1_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row1->addChild("h1_texttransform", $h1_texttransform);
        $row2 = new BridgeQodeRow(true);
        $group1->addChild("row2", $row2);
        $h1_google_fonts = new BridgeQodeField("fontsimple", "h1_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("h1_google_fonts", $h1_google_fonts);
        $h1_fontstyle = new BridgeQodeField("selectblanksimple", "h1_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"),  bridge_qode_get_font_style_array());
        $row2->addChild("h1_fontstyle", $h1_fontstyle);
        $h1_fontweight = new BridgeQodeField("selectblanksimple", "h1_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row2->addChild("h1_fontweight", $h1_fontweight);
        $h1_letterspacing = new BridgeQodeField("textsimple", "h1_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("h1_letterspacing", $h1_letterspacing);

        $group2 = new BridgeQodeGroup(esc_html__("H2 Style", "bridge"), esc_html__("Define styles for H2 heading", "bridge"));
        $panel1->addChild("group2", $group2);
        $row1 = new BridgeQodeRow();
        $group2->addChild("row1", $row1);
        $h2_color = new BridgeQodeField("colorsimple", "h2_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h2_color", $h2_color);
        $h2_fontsize = new BridgeQodeField("textsimple", "h2_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h2_fontsize", $h2_fontsize);
        $h2_lineheight = new BridgeQodeField("textsimple", "h2_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h2_lineheight", $h2_lineheight);
        $h2_texttransform = new BridgeQodeField("selectblanksimple", "h2_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"),  bridge_qode_get_text_transform_array());
        $row1->addChild("h2_texttransform", $h2_texttransform);
        $row2 = new BridgeQodeRow(true);
        $group2->addChild("row2", $row2);
        $h2_google_fonts = new BridgeQodeField("fontsimple", "h2_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("h2_google_fonts", $h2_google_fonts);
        $h2_fontstyle = new BridgeQodeField("selectblanksimple", "h2_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("h2_fontstyle", $h2_fontstyle);
        $h2_fontweight = new BridgeQodeField("selectblanksimple", "h2_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row2->addChild("h2_fontweight", $h2_fontweight);
        $h2_letterspacing = new BridgeQodeField("textsimple", "h2_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("h2_letterspacing", $h2_letterspacing);

        $group3 = new BridgeQodeGroup(esc_html__("H3 Style", "bridge"), esc_html__("Define styles for H3 heading", "bridge"));
        $panel1->addChild("group3", $group3);
        $row1 = new BridgeQodeRow();
        $group3->addChild("row1", $row1);
        $h3_color = new BridgeQodeField("colorsimple", "h3_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h3_color", $h3_color);
        $h3_fontsize = new BridgeQodeField("textsimple", "h3_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h3_fontsize", $h3_fontsize);
        $h3_lineheight = new BridgeQodeField("textsimple", "h3_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h3_lineheight", $h3_lineheight);
        $h3_texttransform = new BridgeQodeField("selectblanksimple", "h3_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row1->addChild("h3_texttransform", $h3_texttransform);
        $row2 = new BridgeQodeRow(true);
        $group3->addChild("row2", $row2);
        $h3_google_fonts = new BridgeQodeField("fontsimple", "h3_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("h3_google_fonts", $h3_google_fonts);
        $h3_fontstyle = new BridgeQodeField("selectblanksimple", "h3_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("h3_fontstyle", $h3_fontstyle);
        $h3_fontweight = new BridgeQodeField("selectblanksimple", "h3_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row2->addChild("h3_fontweight", $h3_fontweight);
        $h3_letterspacing = new BridgeQodeField("textsimple", "h3_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("h3_letterspacing", $h3_letterspacing);

        $group4 = new BridgeQodeGroup(esc_html__("H4 Style", "bridge"), esc_html__("Define styles for H4 heading", "bridge"));
        $panel1->addChild("group4", $group4);
        $row1 = new BridgeQodeRow();
        $group4->addChild("row1", $row1);
        $h4_color = new BridgeQodeField("colorsimple", "h4_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h4_color", $h4_color);
        $h4_fontsize = new BridgeQodeField("textsimple", "h4_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h4_fontsize", $h4_fontsize);
        $h4_lineheight = new BridgeQodeField("textsimple", "h4_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h4_lineheight", $h4_lineheight);
        $h4_texttransform = new BridgeQodeField("selectblanksimple", "h4_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row1->addChild("h4_texttransform", $h4_texttransform);
        $row2 = new BridgeQodeRow(true);
        $group4->addChild("row2", $row2);
        $h4_google_fonts = new BridgeQodeField("fontsimple", "h4_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("h4_google_fonts", $h4_google_fonts);
        $h4_fontstyle = new BridgeQodeField("selectblanksimple", "h4_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("h4_fontstyle", $h4_fontstyle);
        $h4_fontweight = new BridgeQodeField("selectblanksimple", "h4_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row2->addChild("h4_fontweight", $h4_fontweight);
        $h4_letterspacing = new BridgeQodeField("textsimple", "h4_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("h4_letterspacing", $h4_letterspacing);

        $group5 = new BridgeQodeGroup(esc_html__("H5 style", "bridge"), esc_html__("Define styles for H5 heading", "bridge"));
        $panel1->addChild("group5", $group5);
        $row1 = new BridgeQodeRow();
        $group5->addChild("row1", $row1);
        $h5_color = new BridgeQodeField("colorsimple", "h5_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h5_color", $h5_color);
        $h5_fontsize = new BridgeQodeField("textsimple", "h5_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h5_fontsize", $h5_fontsize);
        $h5_lineheight = new BridgeQodeField("textsimple", "h5_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h5_lineheight", $h5_lineheight);
        $h5_texttransform = new BridgeQodeField("selectblanksimple", "h5_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"),  bridge_qode_get_text_transform_array());
        $row1->addChild("h5_texttransform", $h5_texttransform);
        $row2 = new BridgeQodeRow(true);
        $group5->addChild("row2", $row2);
        $h5_google_fonts = new BridgeQodeField("fontsimple", "h5_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("h5_google_fonts", $h5_google_fonts);
        $h5_fontstyle = new BridgeQodeField("selectblanksimple", "h5_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("h5_fontstyle", $h5_fontstyle);
        $h5_fontweight = new BridgeQodeField("selectblanksimple", "h5_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row2->addChild("h5_fontweight", $h5_fontweight);
        $h5_letterspacing = new BridgeQodeField("textsimple", "h5_letterspacing", "", esc_html__("Letter spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("h5_letterspacing", $h5_letterspacing);

        $group6 = new BridgeQodeGroup(esc_html__("H6 Style", "bridge"), esc_html__("Define styles for H6 heading", "bridge"));
        $panel1->addChild("group6", $group6);
        $row1 = new BridgeQodeRow();
        $group6->addChild("row1", $row1);
        $h6_color = new BridgeQodeField("colorsimple", "h6_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h6_color", $h6_color);
        $h6_fontsize = new BridgeQodeField("textsimple", "h6_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h6_fontsize", $h6_fontsize);
        $h6_lineheight = new BridgeQodeField("textsimple", "h6_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h6_lineheight", $h6_lineheight);
        $h6_texttransform = new BridgeQodeField("selectblanksimple", "h6_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"),  bridge_qode_get_text_transform_array());
        $row1->addChild("h6_texttransform", $h6_texttransform);
        $row2 = new BridgeQodeRow(true);
        $group6->addChild("row2", $row2);
        $h6_google_fonts = new BridgeQodeField("fontsimple", "h6_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("h6_google_fonts", $h6_google_fonts);
        $h6_fontstyle = new BridgeQodeField("selectblanksimple", "h6_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("h6_fontstyle", $h6_fontstyle);
        $h6_fontweight = new BridgeQodeField("selectblanksimple", "h6_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row2->addChild("h6_fontweight", $h6_fontweight);
        $h6_letterspacing = new BridgeQodeField("textsimple", "h6_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("h6_letterspacing", $h6_letterspacing);

        $panel1_responsive_tablet = new BridgeQodePanel(esc_html__("Headings Responsive (Tablet Portrait View)", "bridge"), "headings_responsive_tablet_panel");
        $fontsPage->addChild("panel1_responsive_tablet", $panel1_responsive_tablet);

        $group1 = new BridgeQodeGroup(esc_html__("H1 Responsive Style", "bridge"), esc_html__("Define responsive styles for H1 heading", "bridge"));
        $panel1_responsive_tablet->addChild("group1", $group1);
        $row1 = new BridgeQodeRow();
        $group1->addChild("row1", $row1);
        $h1_fontsize_tablet = new BridgeQodeField("textsimple", "h1_fontsize_tablet", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h1_fontsize_tablet", $h1_fontsize_tablet);
        $h1_lineheight_tablet = new BridgeQodeField("textsimple", "h1_lineheight_tablet", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h1_lineheight_tablet", $h1_lineheight_tablet);
        $h1_letterspacing_tablet = new BridgeQodeField("textsimple", "h1_letterspacing_tablet", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h1_letterspacing_tablet", $h1_letterspacing_tablet);

        $group2 = new BridgeQodeGroup(esc_html__("H2 Responsive Style", "bridge"), esc_html__("Define responsive styles for H2 heading", "bridge"));
        $panel1_responsive_tablet->addChild("group2", $group2);
        $row1 = new BridgeQodeRow();
        $group2->addChild("row1", $row1);
        $h2_fontsize_tablet = new BridgeQodeField("textsimple", "h2_fontsize_tablet", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h2_fontsize_tablet", $h2_fontsize_tablet);
        $h2_lineheight_tablet = new BridgeQodeField("textsimple", "h2_lineheight_tablet", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h2_lineheight_tablet", $h2_lineheight_tablet);
        $h2_letterspacing_tablet = new BridgeQodeField("textsimple", "h2_letterspacing_tablet", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h2_letterspacing_tablet", $h2_letterspacing_tablet);

        $group3 = new BridgeQodeGroup(esc_html__("H3 Responsive Style", "bridge"), esc_html__("Define responsive styles for H3 heading", "bridge"));
        $panel1_responsive_tablet->addChild("group3", $group3);
        $row1 = new BridgeQodeRow();
        $group3->addChild("row1", $row1);
        $h3_fontsize_tablet = new BridgeQodeField("textsimple", "h3_fontsize_tablet", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h3_fontsize_tablet", $h3_fontsize_tablet);
        $h3_lineheight_tablet = new BridgeQodeField("textsimple", "h3_lineheight_tablet", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h3_lineheight_tablet", $h3_lineheight_tablet);
        $h3_letterspacing_tablet = new BridgeQodeField("textsimple", "h3_letterspacing_tablet", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h3_letterspacing_tablet", $h3_letterspacing_tablet);

        $group4 = new BridgeQodeGroup(esc_html__("H4 Responsive Style", "bridge"), esc_html__("Define responsive styles for H4 heading", "bridge"));
        $panel1_responsive_tablet->addChild("group4", $group4);
        $row1 = new BridgeQodeRow();
        $group4->addChild("row1", $row1);
        $h4_fontsize_tablet = new BridgeQodeField("textsimple", "h4_fontsize_tablet", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h4_fontsize_tablet", $h4_fontsize_tablet);
        $h4_lineheight_tablet = new BridgeQodeField("textsimple", "h4_lineheight_tablet", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h4_lineheight_tablet", $h4_lineheight_tablet);
        $h4_letterspacing_tablet = new BridgeQodeField("textsimple", "h4_letterspacing_tablet", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h4_letterspacing_tablet", $h4_letterspacing_tablet);

        $group5 = new BridgeQodeGroup(esc_html__("H5 Responsive Style", "bridge"), esc_html__("Define responsive styles for H5 heading", "bridge"));
        $panel1_responsive_tablet->addChild("group5", $group5);
        $row1 = new BridgeQodeRow();
        $group5->addChild("row1", $row1);
        $h5_fontsize_tablet = new BridgeQodeField("textsimple", "h5_fontsize_tablet", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h5_fontsize_tablet", $h5_fontsize_tablet);
        $h5_lineheight_tablet = new BridgeQodeField("textsimple", "h5_lineheight_tablet", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h5_lineheight_tablet", $h5_lineheight_tablet);
        $h5_letterspacing_tablet = new BridgeQodeField("textsimple", "h5_letterspacing_tablet", "", esc_html__("Letter spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h5_letterspacing_tablet", $h5_letterspacing_tablet);

        $group6 = new BridgeQodeGroup(esc_html__("H6 Responsive Style", "bridge"), esc_html__("Define responsive styles for H6 heading", "bridge"));
        $panel1_responsive_tablet->addChild("group6", $group6);
        $row1 = new BridgeQodeRow();
        $group6->addChild("row1", $row1);
        $h6_fontsize_tablet = new BridgeQodeField("textsimple", "h6_fontsize_tablet", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h6_fontsize_tablet", $h6_fontsize_tablet);
        $h6_lineheight_tablet = new BridgeQodeField("textsimple", "h6_lineheight_tablet", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h6_lineheight_tablet", $h6_lineheight_tablet);
        $h6_letterspacing_tablet = new BridgeQodeField("textsimple", "h6_letterspacing_tablet", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h6_letterspacing_tablet", $h6_letterspacing_tablet);

        $panel1_responsive_mobile = new BridgeQodePanel(esc_html__("Headings Responsive (Mobile Devices)", "bridge"), "headings_responsive_mobile_panel");
        $fontsPage->addChild("panel1_responsive_mobile", $panel1_responsive_mobile);

        $group1 = new BridgeQodeGroup(esc_html__("H1 Responsive Style", "bridge"), esc_html__("Define responsive styles for H1 heading", "bridge"));
        $panel1_responsive_mobile->addChild("group1", $group1);
        $row1 = new BridgeQodeRow();
        $group1->addChild("row1", $row1);
        $h1_fontsize_mobile = new BridgeQodeField("textsimple", "h1_fontsize_mobile", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h1_fontsize_mobile", $h1_fontsize_mobile);
        $h1_lineheight_mobile = new BridgeQodeField("textsimple", "h1_lineheight_mobile", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h1_lineheight_mobile", $h1_lineheight_mobile);
        $h1_letterspacing_mobile = new BridgeQodeField("textsimple", "h1_letterspacing_mobile", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h1_letterspacing_mobile", $h1_letterspacing_mobile);

        $group2 = new BridgeQodeGroup(esc_html__("H2 Responsive Style", "bridge"), esc_html__("Define responsive styles for H2 heading", "bridge"));
        $panel1_responsive_mobile->addChild("group2", $group2);
        $row1 = new BridgeQodeRow();
        $group2->addChild("row1", $row1);
        $h2_fontsize_mobile = new BridgeQodeField("textsimple", "h2_fontsize_mobile", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h2_fontsize_mobile", $h2_fontsize_mobile);
        $h2_lineheight_mobile = new BridgeQodeField("textsimple", "h2_lineheight_mobile", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h2_lineheight_mobile", $h2_lineheight_mobile);
        $h2_letterspacing_mobile = new BridgeQodeField("textsimple", "h2_letterspacing_mobile", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h2_letterspacing_mobile", $h2_letterspacing_mobile);

        $group3 = new BridgeQodeGroup(esc_html__("H3 Responsive Style", "bridge"), esc_html__("Define responsive styles for H3 heading", "bridge"));
        $panel1_responsive_mobile->addChild("group3", $group3);
        $row1 = new BridgeQodeRow();
        $group3->addChild("row1", $row1);
        $h3_fontsize_mobile = new BridgeQodeField("textsimple", "h3_fontsize_mobile", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h3_fontsize_mobile", $h3_fontsize_mobile);
        $h3_lineheight_mobile = new BridgeQodeField("textsimple", "h3_lineheight_mobile", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h3_lineheight_mobile", $h3_lineheight_mobile);
        $h3_letterspacing_mobile = new BridgeQodeField("textsimple", "h3_letterspacing_mobile", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h3_letterspacing_mobile", $h3_letterspacing_mobile);

        $group4 = new BridgeQodeGroup(esc_html__("H4 Responsive Style", "bridge"), esc_html__("Define responsive styles for H4 heading", "bridge"));
        $panel1_responsive_mobile->addChild("group4", $group4);
        $row1 = new BridgeQodeRow();
        $group4->addChild("row1", $row1);
        $h4_fontsize_mobile = new BridgeQodeField("textsimple", "h4_fontsize_mobile", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h4_fontsize_mobile", $h4_fontsize_mobile);
        $h4_lineheight_mobile = new BridgeQodeField("textsimple", "h4_lineheight_mobile", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h4_lineheight_mobile", $h4_lineheight_mobile);
        $h4_letterspacing_mobile = new BridgeQodeField("textsimple", "h4_letterspacing_mobile", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h4_letterspacing_mobile", $h4_letterspacing_mobile);

        $group5 = new BridgeQodeGroup(esc_html__("H5 Responsive Style", "bridge"), esc_html__("Define responsive styles for H5 heading", "bridge"));
        $panel1_responsive_mobile->addChild("group5", $group5);
        $row1 = new BridgeQodeRow();
        $group5->addChild("row1", $row1);
        $h5_fontsize_mobile = new BridgeQodeField("textsimple", "h5_fontsize_mobile", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h5_fontsize_mobile", $h5_fontsize_mobile);
        $h5_lineheight_mobile = new BridgeQodeField("textsimple", "h5_lineheight_mobile", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h5_lineheight_mobile", $h5_lineheight_mobile);
        $h5_letterspacing_mobile = new BridgeQodeField("textsimple", "h5_letterspacing_mobile", "", esc_html__("Letter spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h5_letterspacing_mobile", $h5_letterspacing_mobile);

        $group6 = new BridgeQodeGroup(esc_html__("H6 Responsive Style", "bridge"), esc_html__("Define responsive styles for H6 heading", "bridge"));
        $panel1_responsive_mobile->addChild("group6", $group6);
        $row1 = new BridgeQodeRow();
        $group6->addChild("row1", $row1);
        $h6_fontsize_mobile = new BridgeQodeField("textsimple", "h6_fontsize_mobile", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h6_fontsize_mobile", $h6_fontsize_mobile);
        $h6_lineheight_mobile = new BridgeQodeField("textsimple", "h6_lineheight_mobile", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h6_lineheight_mobile", $h6_lineheight_mobile);
        $h6_letterspacing_mobile = new BridgeQodeField("textsimple", "h6_letterspacing_mobile", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("h6_letterspacing_mobile", $h6_letterspacing_mobile);

        // Text

        $panel2 = new BridgeQodePanel(esc_html__("Text", "bridge"), "text_panel");
        $fontsPage->addChild("panel2", $panel2);

        $group1 = new BridgeQodeGroup(esc_html__("Paragraph", "bridge"), esc_html__("Define styles for paragraph text", "bridge"));
        $panel2->addChild("group1", $group1);
        $row1 = new BridgeQodeRow();
        $group1->addChild("row1", $row1);
        $text_color = new BridgeQodeField("colorsimple", "text_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("text_color", $text_color);
        $text_fontsize = new BridgeQodeField("textsimple", "text_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("text_fontsize", $text_fontsize);
        $text_lineheight = new BridgeQodeField("textsimple", "text_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("text_lineheight", $text_lineheight);
        $row2 = new BridgeQodeRow(true);
        $group1->addChild("row2", $row2);
        $text_google_fonts = new BridgeQodeField("fontsimple", "text_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("text_google_fonts", $text_google_fonts);
        $text_fontstyle = new BridgeQodeField("selectblanksimple", "text_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("text_fontstyle", $text_fontstyle);
        $text_fontweight = new BridgeQodeField("selectblanksimple", "text_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row2->addChild("text_fontweight", $text_fontweight);
        $text_margin = new BridgeQodeField("textsimple", "text_margin", "", esc_html__("Top/Bottom Margin (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("text_margin", $text_margin);

        $group1_tablet = new BridgeQodeGroup(esc_html__("Paragraph Responsive (Table Portrait View)", "bridge"), esc_html__("Define responsive styles for paragraph text for table devices - portrait view", "bridge"));
        $panel2->addChild("group1_tablet", $group1_tablet);
        $row1 = new BridgeQodeRow();
        $group1_tablet->addChild("row1", $row1);
        $text_fontsize_tablet = new BridgeQodeField("textsimple", "text_fontsize_tablet", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("text_fontsize_tablet", $text_fontsize_tablet);
        $text_lineheight_tablet = new BridgeQodeField("textsimple", "text_lineheight_tablet", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("text_lineheight_tablet", $text_lineheight_tablet);
        $text_letterspacing_tablet = new BridgeQodeField("textsimple", "text_letterspacing_tablet", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("text_letterspacing_tablet", $text_letterspacing_tablet);

        $group2_mobile = new BridgeQodeGroup(esc_html__("Paragraph Responsive (Mobile Devices)", "bridge"), esc_html__("Define responsive styles for paragraph text for mobile devices", "bridge"));
        $panel2->addChild("group2_mobile", $group2_mobile);
        $row1 = new BridgeQodeRow();
        $group2_mobile->addChild("row1", $row1);
        $text_fontsize_mobile = new BridgeQodeField("textsimple", "text_fontsize_mobile", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("text_fontsize_mobile", $text_fontsize_mobile);
        $text_lineheight_mobile = new BridgeQodeField("textsimple", "text_lineheight_mobile", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("text_lineheight_mobile", $text_lineheight_mobile);
        $text_letterspacing_mobile = new BridgeQodeField("textsimple", "text_letterspacing_mobile", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("text_letterspacing_mobile", $text_letterspacing_mobile);

        $group2 = new BridgeQodeGroup(esc_html__("Links", "bridge"), esc_html__("Define styles for link text", "bridge"));
        $panel2->addChild("group2", $group2);
        $row1 = new BridgeQodeRow();
        $group2->addChild("row1", $row1);
        $link_color = new BridgeQodeField("colorsimple", "link_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("link_color", $link_color);
        $link_hovercolor = new BridgeQodeField("colorsimple", "link_hovercolor", "", esc_html__("Hover Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("link_hovercolor", $link_hovercolor);
        $row2 = new BridgeQodeRow(true);
        $group2->addChild("row2", $row2);
        $link_fontstyle = new BridgeQodeField("selectblanksimple", "link_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("link_fontstyle", $link_fontstyle);
        $link_fontweight = new BridgeQodeField("selectblanksimple", "link_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row2->addChild("link_fontweight", $link_fontweight);
        $link_fontdecoration = new BridgeQodeField("selectblanksimple", "link_fontdecoration", "", esc_html__("Font Decoration", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_decorations());
        $row2->addChild("link_fontdecoration", $link_fontdecoration);

        // Header & Menu

        $panel7 = new BridgeQodePanel(esc_html__("Header & Menu", "bridge"), "header_and_menu_panel");
        $fontsPage->addChild("panel7", $panel7);

        $group1 = new BridgeQodeGroup(esc_html__("1st Level Menu", "bridge"), esc_html__("Define styles for 1st level in Top Navigation Menu", "bridge"));
        $panel7->addChild("group1", $group1);
        $row1 = new BridgeQodeRow();
        $group1->addChild("row1", $row1);
        $menu_color = new BridgeQodeField("colorsimple", "menu_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("menu_color", $menu_color);
        $menu_hovercolor = new BridgeQodeField("colorsimple", "menu_hovercolor", "", esc_html__("Hover Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("menu_hovercolor", $menu_hovercolor);
        $menu_activecolor = new BridgeQodeField("colorsimple", "menu_activecolor", "", esc_html__("Active Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("menu_activecolor", $menu_activecolor);
        $menu_hover_background_color = new BridgeQodeField("colorsimple", "menu_hover_background_color", "", esc_html__("Hover Text Background Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("menu_hover_background_color", $menu_hover_background_color);
        $row2 = new BridgeQodeRow(true);
        $group1->addChild("row2", $row2);
        $menu_google_fonts = new BridgeQodeField("fontsimple", "menu_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("menu_google_fonts", $menu_google_fonts);
        $menu_fontsize = new BridgeQodeField("textsimple", "menu_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("menu_fontsize", $menu_fontsize);
        $menu_lineheight = new BridgeQodeField("textsimple", "menu_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("menu_lineheight", $menu_lineheight);
        $menu_hover_background_color_transparency = new BridgeQodeField("textsimple", "menu_hover_background_color_transparency", "", esc_html__("Hover Text Background Color Transparency", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("menu_hover_background_color_transparency", $menu_hover_background_color_transparency);
        $row3 = new BridgeQodeRow(true);
        $group1->addChild("row3", $row3);
        $menu_fontstyle = new BridgeQodeField("selectblanksimple", "menu_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row3->addChild("menu_fontstyle", $menu_fontstyle);
        $menu_fontweight = new BridgeQodeField("selectblanksimple", "menu_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row3->addChild("menu_fontweight", $menu_fontweight);
        $menu_letterspacing = new BridgeQodeField("textsimple", "menu_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row3->addChild("menu_letterspacing", $menu_letterspacing);
        $menu_text_transform = new BridgeQodeField("selectblanksimple", "menu_text_transform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row3->addChild("menu_text_transform", $menu_text_transform);

        if (isset($bridge_qode_options['vertical_area']) && $bridge_qode_options['vertical_area'] == 'no') {
            $row4 = new BridgeQodeRow(true);
            $group1->addChild("row4", $row4);
            $menu_separator_between_items = new BridgeQodeField("yesnosimple", "menu_separator_between_items", "no", esc_html__("Show Separator Between Items", "bridge"), esc_html__("This is some description", "bridge"));
            $row4->addChild("menu_separator_between_items", $menu_separator_between_items);
            $menu_separator_color = new BridgeQodeField("colorsimple", "menu_separator_color", "", esc_html__("Separator Color", "bridge"), esc_html__("This is some description", "bridge"));
            $row4->addChild("menu_separator_color", $menu_separator_color);
            $menu_padding_left_right = new BridgeQodeField("textsimple", "menu_padding_left_right", "", esc_html__("Padding Left/Right (px)", "bridge"), esc_html__("This is some description", "bridge"));
            $row4->addChild("menu_padding_left_right", $menu_padding_left_right);

            $row5 = new BridgeQodeRow(true);
            $group1->addChild("row5", $row5);
            $menu_item_border = new BridgeQodeField("yesnosimple", "menu_item_border", "no", esc_html__("Show Border on Active/Hover Items", "bridge"), "");
            $row5->addChild("menu_item_border", $menu_item_border);
        }

        $row6 = new BridgeQodeRow(true);
        $group1->addChild("row6", $row6);
        $menu_underline_dash = new BridgeQodeField("yesnosimple", "menu_underline_dash", "no", esc_html__("Show Underline Dash on Active/Hover Items", "bridge"), "", array(),
            array("dependence" => true,
                "dependence_hide_on_yes" => "",
                "dependence_show_on_yes" => "#qodef_menu_underline_dash_container"));
        $row6->addChild("menu_underline_dash", $menu_underline_dash);

        $menu_underline_dash_container = new BridgeQodeContainerNoStyle("menu_underline_dash_container", "menu_underline_dash", "no");
        $row6->addChild("menu_underline_dash_container", $menu_underline_dash_container);

        $menu_underline_dash_color = new BridgeQodeField("colorsimple", "menu_underline_dash_color", "", esc_html__("Dash Color (default is 'inherit' from text)", "bridge"), "");
        $menu_underline_dash_container->addChild("menu_underline_dash_color", $menu_underline_dash_color);

        $menu_underline_dash_width = new BridgeQodeField("textsimple", "menu_underline_dash_width", "", esc_html__("Dash Width (px)", "bridge"), "");
        $menu_underline_dash_container->addChild("menu_underline_dash_width", $menu_underline_dash_width);

        $menu_underline_dash_height = new BridgeQodeField("textsimple", "menu_underline_dash_height", "", esc_html__("Dash Height (px)", "bridge"), "");
        $menu_underline_dash_container->addChild("menu_underline_dash_height", $menu_underline_dash_height);

        $menu_underline_dash_alignment = new BridgeQodeField("selectsimple", "menu_underline_dash_alignment", "center", esc_html__("Dash Alignment", "bridge"), "", array(
                "center" => esc_html__("Center", "bridge"),
                "left" => esc_html__("Left", "bridge"),
                "right" => esc_html__("Right", "bridge"))
        );
        $menu_underline_dash_container->addChild("menu_underline_dash_alignment", $menu_underline_dash_alignment);

        $group2 = new BridgeQodeGroup(esc_html__("2nd Level Menu", "bridge"), esc_html__("Define styles for 2nd level in Top Navigation Menu", "bridge"));
        $panel7->addChild("group2", $group2);
        $row1 = new BridgeQodeRow();
        $group2->addChild("row1", $row1);
        $dropdown_color = new BridgeQodeField("colorsimple", "dropdown_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("dropdown_color", $dropdown_color);
        $dropdown_hovercolor = new BridgeQodeField("colorsimple", "dropdown_hovercolor", "", esc_html__("Hover/Active Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("dropdown_hovercolor", $dropdown_hovercolor);
        $row2 = new BridgeQodeRow(true);
        $group2->addChild("row2", $row2);
        $dropdown_google_fonts = new BridgeQodeField("fontsimple", "dropdown_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("dropdown_google_fonts", $dropdown_google_fonts);
        $dropdown_fontsize = new BridgeQodeField("textsimple", "dropdown_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("dropdown_fontsize", $dropdown_fontsize);
        $dropdown_lineheight = new BridgeQodeField("textsimple", "dropdown_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("dropdown_lineheight", $dropdown_lineheight);
        $dropdown_padding_top_bottom = new BridgeQodeField("textsimple", "dropdown_padding_top_bottom", "", esc_html__("Padding Top/Bottom", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("dropdown_padding_top_bottom", $dropdown_padding_top_bottom);
        $row3 = new BridgeQodeRow(true);
        $group2->addChild("row3", $row3);
        $dropdown_fontstyle = new BridgeQodeField("selectblanksimple", "dropdown_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row3->addChild("dropdown_fontstyle", $dropdown_fontstyle);
        $dropdown_fontweight = new BridgeQodeField("selectblanksimple", "dropdown_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row3->addChild("dropdown_fontweight", $dropdown_fontweight);
        $dropdown_letterspacing = new BridgeQodeField("textsimple", "dropdown_letterspacing", "", esc_html__("Letter spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row3->addChild("dropdown_letterspacing", $dropdown_letterspacing);
        $dropdown_texttransform = new BridgeQodeField("selectblanksimple", "dropdown_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row3->addChild("dropdown_texttransform", $dropdown_texttransform);

        $group3 = new BridgeQodeGroup(esc_html__("2nd Level Wide Menu", "bridge"), esc_html__("Define styles for 2nd level in Wide Menu", "bridge"));
        $panel7->addChild("group3", $group3);
        $row1 = new BridgeQodeRow();
        $group3->addChild("row1", $row1);
        $dropdown_wide_color = new BridgeQodeField("colorsimple", "dropdown_wide_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("dropdown_wide_color", $dropdown_wide_color);
        $dropdown_wide_hovercolor = new BridgeQodeField("colorsimple", "dropdown_wide_hovercolor", "", esc_html__("Hover Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("dropdown_wide_hovercolor", $dropdown_wide_hovercolor);
        $row2 = new BridgeQodeRow(true);
        $group3->addChild("row2", $row2);
        $dropdown_wide_google_fonts = new BridgeQodeField("fontsimple", "dropdown_wide_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("dropdown_wide_google_fonts", $dropdown_wide_google_fonts);
        $dropdown_wide_fontsize = new BridgeQodeField("textsimple", "dropdown_wide_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("dropdown_wide_fontsize", $dropdown_wide_fontsize);
        $dropdown_wide_lineheight = new BridgeQodeField("textsimple", "dropdown_wide_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("dropdown_wide_lineheight", $dropdown_wide_lineheight);
        $row3 = new BridgeQodeRow(true);
        $group3->addChild("row3", $row3);
        $dropdown_wide_fontstyle = new BridgeQodeField("selectblanksimple", "dropdown_wide_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row3->addChild("dropdown_wide_fontstyle", $dropdown_wide_fontstyle);
        $dropdown_wide_fontweight = new BridgeQodeField("selectblanksimple", "dropdown_wide_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row3->addChild("dropdown_wide_fontweight", $dropdown_wide_fontweight);
        $dropdown_wide_letterspacing = new BridgeQodeField("textsimple", "dropdown_wide_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row3->addChild("dropdown_wide_letterspacing", $dropdown_wide_letterspacing);
        $dropdown_wide_texttransform = new BridgeQodeField("selectblanksimple", "dropdown_wide_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row3->addChild("dropdown_wide_texttransform", $dropdown_wide_texttransform);

        $group4 = new BridgeQodeGroup(esc_html__("3rd Level Menu", "bridge"), esc_html__("Define styles for 3rd level in Top Navigation Menu", "bridge"));
        $panel7->addChild("group4", $group4);
        $row1 = new BridgeQodeRow();
        $group4->addChild("row1", $row1);
        $dropdown_color_thirdlvl = new BridgeQodeField("colorsimple", "dropdown_color_thirdlvl", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("dropdown_color_thirdlvl", $dropdown_color_thirdlvl);
        $dropdown_hovercolor_thirdlvl = new BridgeQodeField("colorsimple", "dropdown_hovercolor_thirdlvl", "", esc_html__("Hover/Active Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("dropdown_hovercolor_thirdlvl", $dropdown_hovercolor_thirdlvl);
        $row2 = new BridgeQodeRow(true);
        $group4->addChild("row2", $row2);
        $dropdown_google_fonts_thirdlvl = new BridgeQodeField("fontsimple", "dropdown_google_fonts_thirdlvl", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("dropdown_google_fonts_thirdlvl", $dropdown_google_fonts_thirdlvl);
        $dropdown_fontsize_thirdlvl = new BridgeQodeField("textsimple", "dropdown_fontsize_thirdlvl", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("dropdown_fontsize_thirdlvl", $dropdown_fontsize_thirdlvl);
        $dropdown_lineheight_thirdlvl = new BridgeQodeField("textsimple", "dropdown_lineheight_thirdlvl", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("dropdown_lineheight_thirdlvl", $dropdown_lineheight_thirdlvl);
        $row3 = new BridgeQodeRow(true);
        $group4->addChild("row3", $row3);
        $dropdown_fontstyle_thirdlvl = new BridgeQodeField("selectblanksimple", "dropdown_fontstyle_thirdlvl", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row3->addChild("dropdown_fontstyle_thirdlvl", $dropdown_fontstyle_thirdlvl);
        $dropdown_fontweight_thirdlvl = new BridgeQodeField("selectblanksimple", "dropdown_fontweight_thirdlvl", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row3->addChild("dropdown_fontweight_thirdlvl", $dropdown_fontweight_thirdlvl);
        $dropdown_letterspacing_thirdlvl = new BridgeQodeField("textsimple", "dropdown_letterspacing_thirdlvl", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row3->addChild("dropdown_letterspacing", $dropdown_letterspacing_thirdlvl);
        $dropdown_texttransform_thirdlvl = new BridgeQodeField("selectblanksimple", "dropdown_texttransform_thirdlvl", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row3->addChild("dropdown_texttransform_thirdlvl", $dropdown_texttransform_thirdlvl);

        $group5 = new BridgeQodeGroup(esc_html__("Fixed Menu", "bridge"), esc_html__("Define styles for fixed menu", "bridge"));
        $panel7->addChild("group5", $group5);
        $row1 = new BridgeQodeRow();
        $group5->addChild("row1", $row1);
        $fixed_color = new BridgeQodeField("colorsimple", "fixed_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("fixed_color", $fixed_color);
        $fixed_hovercolor = new BridgeQodeField("colorsimple", "fixed_hovercolor", "", esc_html__("Hover/Active Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("fixed_hovercolor", $fixed_hovercolor);
        $row2 = new BridgeQodeRow(true);
        $group5->addChild("row2", $row2);
        $fixed_google_fonts = new BridgeQodeField("fontsimple", "fixed_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("fixed_google_fonts", $fixed_google_fonts);
        $fixed_fontsize = new BridgeQodeField("textsimple", "fixed_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("fixed_fontsize", $fixed_fontsize);
        $fixed_lineheight = new BridgeQodeField("textsimple", "fixed_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("fixed_lineheight", $fixed_lineheight);
        $row3 = new BridgeQodeRow(true);
        $group5->addChild("row3", $row3);
        $fixed_fontstyle = new BridgeQodeField("selectblanksimple", "fixed_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row3->addChild("fixed_fontstyle", $fixed_fontstyle);
        $fixed_fontweight = new BridgeQodeField("selectblanksimple", "fixed_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row3->addChild("fixed_fontweight", $fixed_fontweight);
        $fixed_letterspacing = new BridgeQodeField("textsimple", "fixed_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row3->addChild("fixed_letterspacing", $fixed_letterspacing);
        $fixed_texttransform = new BridgeQodeField("selectblanksimple", "fixed_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row3->addChild("fixed_texttransform", $fixed_texttransform);

        $group6 = new BridgeQodeGroup(esc_html__("Sticky Menu", "bridge"), esc_html__("Define styles for sticky menu", "bridge"));
        $panel7->addChild("group6", $group6);
        $row1 = new BridgeQodeRow();
        $group6->addChild("row1", $row1);
        $sticky_color = new BridgeQodeField("colorsimple", "sticky_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("sticky_color", $sticky_color);
        $sticky_hovercolor = new BridgeQodeField("colorsimple", "sticky_hovercolor", "", esc_html__("Hover/Active color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("sticky_hovercolor", $sticky_hovercolor);
        $row2 = new BridgeQodeRow(true);
        $group6->addChild("row2", $row2);
        $sticky_google_fonts = new BridgeQodeField("fontsimple", "sticky_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("sticky_google_fonts", $sticky_google_fonts);
        $sticky_fontsize = new BridgeQodeField("textsimple", "sticky_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("sticky_fontsize", $sticky_fontsize);
        $sticky_lineheight = new BridgeQodeField("textsimple", "sticky_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("sticky_lineheight", $sticky_lineheight);
        $row3 = new BridgeQodeRow(true);
        $group6->addChild("row3", $row3);
        $sticky_fontstyle = new BridgeQodeField("selectblanksimple", "sticky_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row3->addChild("sticky_fontstyle", $sticky_fontstyle);
        $sticky_fontweight = new BridgeQodeField("selectblanksimple", "sticky_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row3->addChild("sticky_fontweight", $sticky_fontweight);
        $sticky_letterspacing = new BridgeQodeField("textsimple", "sticky_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row3->addChild("sticky_letterspacing", $sticky_letterspacing);
        $sticky_texttransform = new BridgeQodeField("selectblanksimple", "sticky_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row3->addChild("sticky_texttransform", $sticky_texttransform);

        $group7 = new BridgeQodeGroup(esc_html__("Mobile Menu", "bridge"), esc_html__("Define styles for Mobile Menu (as seen on small screens)", "bridge"));
        $panel7->addChild("group7", $group7);
        $row1 = new BridgeQodeRow();
        $group7->addChild("row1", $row1);
        $mobile_color = new BridgeQodeField("colorsimple", "mobile_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("mobile_color", $mobile_color);
        $mobile_hovercolor = new BridgeQodeField("colorsimple", "mobile_hovercolor", "", esc_html__("Hover/Active Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("mobile_hovercolor", $mobile_hovercolor);

        $row2 = new BridgeQodeRow(true);
        $group7->addChild("row2", $row2);
        $mobile_google_fonts = new BridgeQodeField("fontsimple", "mobile_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("mobile_google_fonts", $mobile_google_fonts);
        $mobile_fontsize = new BridgeQodeField("textsimple", "mobile_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("mobile_fontsize", $mobile_fontsize);
        $mobile_lineheight = new BridgeQodeField("textsimple", "mobile_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("mobile_lineheight", $mobile_lineheight);
        $row3 = new BridgeQodeRow(true);
        $group7->addChild("row3", $row3);
        $mobile_fontstyle = new BridgeQodeField("selectblanksimple", "mobile_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row3->addChild("mobile_fontstyle", $mobile_fontstyle);
        $mobile_fontweight = new BridgeQodeField("selectblanksimple", "mobile_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row3->addChild("mobile_fontweight", $mobile_fontweight);
        $mobile_letter_spacing = new BridgeQodeField("textsimple", "mobile_letter_spacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row3->addChild("mobile_letter_spacing", $mobile_letter_spacing);
        $mobile_texttransform = new BridgeQodeField("selectblanksimple", "mobile_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row3->addChild("mobile_texttransform", $mobile_texttransform);

        $group8 = new BridgeQodeGroup(esc_html__("Header Top", "bridge"), esc_html__("Define styles for Header Top area", "bridge"));
        $panel7->addChild("group8", $group8);
        $row1 = new BridgeQodeRow();
        $group8->addChild("row1", $row1);
        $top_header_text_color = new BridgeQodeField("colorsimple", "top_header_text_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("top_header_text_color", $top_header_text_color);
        $top_header_text_hover_color = new BridgeQodeField("colorsimple", "top_header_text_hover_color", "", esc_html__("Hover Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("top_header_text_hover_color", $top_header_text_hover_color);
        $row2 = new BridgeQodeRow(true);
        $group8->addChild("row2", $row2);
        $top_header_text_font_family = new BridgeQodeField("fontsimple", "top_header_text_font_family", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("top_header_text_font_family", $top_header_text_font_family);
        $top_header_text_font_size = new BridgeQodeField("textsimple", "top_header_text_font_size", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("top_header_text_font_size", $top_header_text_font_size);
        $top_header_text_line_height = new BridgeQodeField("textsimple", "top_header_text_line_height", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("top_header_text_line_height", $top_header_text_line_height);
        $row3 = new BridgeQodeRow(true);
        $group8->addChild("row3", $row3);
        $group8->addChild("row3", $row3);
        $top_header_text_font_style = new BridgeQodeField("selectblanksimple", "top_header_text_font_style", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row3->addChild("top_header_text_font_style", $top_header_text_font_style);
        $top_header_text_font_weight = new BridgeQodeField("selectblanksimple", "top_header_text_font_weight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row3->addChild("top_header_text_font_weight", $top_header_text_font_weight);
        $top_header_text_letter_spacing = new BridgeQodeField("textsimple", "top_header_text_letter_spacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row3->addChild("top_header_text_letter_spacing", $top_header_text_letter_spacing);
        $top_header_text_texttransform = new BridgeQodeField("selectblanksimple", "top_header_text_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row3->addChild("top_header_text_texttransform", $top_header_text_texttransform);

        // Page title

        $panel3 = new BridgeQodePanel(esc_html__("Page Title", "bridge"), "page_title_panel");
        $fontsPage->addChild("panel3", $panel3);

        $group1 = new BridgeQodeGroup(esc_html__("Small Type", "bridge"), esc_html__('Define styles for default "Small" Title', "bridge"));
        $panel3->addChild("group1", $group1);
        $row1 = new BridgeQodeRow();
        $group1->addChild("row1", $row1);
        $page_title_color = new BridgeQodeField("colorsimple", "page_title_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("page_title_color", $page_title_color);
        $page_title_fontsize = new BridgeQodeField("textsimple", "page_title_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("page_title_fontsize", $page_title_fontsize);
        $page_title_lineheight = new BridgeQodeField("textsimple", "page_title_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("page_title_lineheight", $page_title_lineheight);
		$page_title_texttransform = new BridgeQodeField("selectblanksimple", "page_title_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
		$row1->addChild("page_title_texttransform", $page_title_texttransform);
        $row2 = new BridgeQodeRow(true);
        $group1->addChild("row2", $row2);
        $page_title_google_fonts = new BridgeQodeField("fontsimple", "page_title_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("page_title_google_fonts", $page_title_google_fonts);
        $page_title_fontstyle = new BridgeQodeField("selectblanksimple", "page_title_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("page_title_fontstyle", $page_title_fontstyle);
        $page_title_fontweight = new BridgeQodeField("selectblanksimple", "page_title_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row2->addChild("page_title_fontweight", $page_title_fontweight);
        $page_title_letterspacing = new BridgeQodeField("textsimple", "page_title_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("page_title_letterspacing", $page_title_letterspacing);



        $group2 = new BridgeQodeGroup(esc_html__("Medium Type", "bridge"), esc_html__('Define styles for default "Medium" Title', "bridge"));
        $panel3->addChild("group2", $group2);
        $row1 = new BridgeQodeRow();
        $group2->addChild("row1", $row1);
        $page_title_medium_fontsize = new BridgeQodeField("textsimple", "page_title_medium_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("page_title_medium_fontsize", $page_title_medium_fontsize);
        $page_title_medium_lineheight = new BridgeQodeField("textsimple", "page_title_medium_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("page_title_medium_lineheight", $page_title_medium_lineheight);
        $page_title_medium_fontweight = new BridgeQodeField("selectblanksimple", "page_title_medium_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row1->addChild("page_title_medium_fontweight", $page_title_medium_fontweight);
        $page_title_medium_letterspacing = new BridgeQodeField("textsimple", "page_title_medium_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("page_title_medium_letterspacing", $page_title_medium_letterspacing);
		$row2 = new BridgeQodeRow();
		$group2->addChild("row2", $row2);
		$page_title_medium_texttransform = new BridgeQodeField("selectblanksimple", "page_title_medium_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
		$row2->addChild("page_title_medium_texttransform", $page_title_medium_texttransform);


        $group3 = new BridgeQodeGroup(esc_html__("Large Type", "bridge"), esc_html__('Define styles for default "Large" Title', "bridge"));
        $panel3->addChild("group3", $group3);
        $row1 = new BridgeQodeRow();
        $group3->addChild("row1", $row1);
        $page_title_large_fontsize = new BridgeQodeField("textsimple", "page_title_large_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("page_title_large_fontsize", $page_title_large_fontsize);
        $page_title_large_lineheight = new BridgeQodeField("textsimple", "page_title_large_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("page_title_large_lineheight", $page_title_large_lineheight);
        $page_title_large_fontweight = new BridgeQodeField("selectblanksimple", "page_title_large_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row1->addChild("page_title_large_fontweight", $page_title_large_fontweight);
        $page_title_large_letterspacing = new BridgeQodeField("textsimple", "page_title_large_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("page_title_large_letterspacing", $page_title_large_letterspacing);
		$row2 = new BridgeQodeRow();
		$group3->addChild("row2", $row2);
		$page_title_large_texttransform = new BridgeQodeField("selectblanksimple", "page_title_large_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
		$row2->addChild("page_title_large_texttransform", $page_title_large_texttransform);

        // Page Title Responsive

        $panel_title_responsive = new BridgeQodePanel(esc_html__("Page Title Responsive", "bridge"), "panel_title_responsive");
        $fontsPage->addChild("panel_title_responsive", $panel_title_responsive);

        $small_group = bridge_qode_add_admin_group(array(
            'name'          => 'small_group',
            'title'         => esc_html__('Small Title', 'bridge'),
            'description'   => esc_html__('Setup responsive font options for small title', 'bridge'),
            'parent'        => $panel_title_responsive
        ));

        $tablet_row = bridge_qode_add_admin_row(array(
            'name' => 'tablet_row',
            'next' => true,
            'parent' => $small_group
        ));

        bridge_qode_add_admin_field(array(
            'parent'        => $tablet_row,
            'type'          => 'textsimple',
            'name'          => 'small_tablet_title_fs',
            'default_value' => '',
            'label'         => esc_html__('Font Size for Tablet portrait', 'bridge'),
            'description'   => ''
        ));

        bridge_qode_add_admin_field(array(
            'parent'        => $tablet_row,
            'type'          => 'textsimple',
            'name'          => 'small_tablet_title_lh',
            'default_value' => '',
            'label'         => esc_html__('Line Height for Tablet portrait', 'bridge'),
            'description'   => ''
        ));

        $mobile_row = bridge_qode_add_admin_row(array(
            'name' => 'mobile_row',
            'parent' => $small_group
        ));

        bridge_qode_add_admin_field(array(
            'parent'        => $mobile_row,
            'type'          => 'textsimple',
            'name'          => 'small_mobile_title_fs',
            'default_value' => '',
            'label'         => esc_html__('Font Size for Mobile', 'bridge'),
            'description'   => ''
        ));

        bridge_qode_add_admin_field(array(
            'parent'        => $mobile_row,
            'type'          => 'textsimple',
            'name'          => 'small_mobile_title_lh',
            'default_value' => '',
            'label'         => esc_html__('Line Height for Mobile', 'bridge'),
            'description'   => ''
        ));

        $medium_group = bridge_qode_add_admin_group(array(
            'name'          => 'medium_group',
            'title'         => esc_html__('Medium Title', 'bridge'),
            'description'   => esc_html__('Setup responsive font options for medium title', 'bridge'),
            'parent'        => $panel_title_responsive
        ));

        $tablet_row = bridge_qode_add_admin_row(array(
            'name' => 'tablet_row',
            'next' => true,
            'parent' => $medium_group
        ));

        bridge_qode_add_admin_field(array(
            'parent'        => $tablet_row,
            'type'          => 'textsimple',
            'name'          => 'medium_tablet_title_fs',
            'default_value' => '',
            'label'         => esc_html__('Font Size for Tablet portrait', 'bridge'),
            'description'   => ''
        ));

        bridge_qode_add_admin_field(array(
            'parent'        => $tablet_row,
            'type'          => 'textsimple',
            'name'          => 'medium_tablet_title_lh',
            'default_value' => '',
            'label'         => esc_html__('Line Height for Tablet portrait', 'bridge'),
            'description'   => ''
        ));

        $mobile_row = bridge_qode_add_admin_row(array(
            'name' => 'mobile_row',
            'parent' => $medium_group
        ));

        bridge_qode_add_admin_field(array(
            'parent'        => $mobile_row,
            'type'          => 'textsimple',
            'name'          => 'medium_mobile_title_fs',
            'default_value' => '',
            'label'         => esc_html__('Font Size for Mobile', 'bridge'),
            'description'   => ''
        ));

        bridge_qode_add_admin_field(array(
            'parent'        => $mobile_row,
            'type'          => 'textsimple',
            'name'          => 'medium_mobile_title_lh',
            'default_value' => '',
            'label'         => esc_html__('Line Height for Mobile', 'bridge'),
            'description'   => ''
        ));



        $large_group = bridge_qode_add_admin_group(array(
            'name'          => 'large_group',
            'title'         => esc_html__('Large Title', 'bridge'),
            'description'   => esc_html__('Setup responsive font options for large title', 'bridge'),
            'parent'        => $panel_title_responsive
        ));

         $tablet_row = bridge_qode_add_admin_row(array(
            'name' => 'tablet_row',
            'next' => true,
            'parent' => $large_group
        ));

        bridge_qode_add_admin_field(array(
            'parent'        => $tablet_row,
            'type'          => 'textsimple',
            'name'          => 'large_tablet_title_fs',
            'default_value' => '',
            'label'         => esc_html__('Font Size for Tablet portrait', 'bridge'),
            'description'   => ''
        ));

        bridge_qode_add_admin_field(array(
            'parent'        => $tablet_row,
            'type'          => 'textsimple',
            'name'          => 'large_tablet_title_lh',
            'default_value' => '',
            'label'         => esc_html__('Line Height for Tablet portrait', 'bridge'),
            'description'   => ''
        ));

        $mobile_row = bridge_qode_add_admin_row(array(
            'name' => 'mobile_row',
            'parent' => $large_group
        ));

        bridge_qode_add_admin_field(array(
            'parent'        => $mobile_row,
            'type'          => 'textsimple',
            'name'          => 'large_mobile_title_fs',
            'default_value' => '',
            'label'         => esc_html__('Font Size for Mobile', 'bridge'),
            'description'   => ''
        ));

        bridge_qode_add_admin_field(array(
            'parent'        => $mobile_row,
            'type'          => 'textsimple',
            'name'          => 'large_mobile_title_lh',
            'default_value' => '',
            'label'         => esc_html__('Line Height for Mobile', 'bridge'),
            'description'   => ''
        ));

        // Page Subtitle

        $panel4 = new BridgeQodePanel(esc_html__("Page Subtitle", "bridge"), "page_subtitle_panel");
        $fontsPage->addChild("panel4", $panel4);

        $group1 = new BridgeQodeGroup(esc_html__("Subtitle", "bridge"), esc_html__("Define styles for page Subtitle", "bridge"));
        $panel4->addChild("group1", $group1);
        $row1 = new BridgeQodeRow();
        $group1->addChild("row1", $row1);
        $page_subtitle_color = new BridgeQodeField("colorsimple", "page_subtitle_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("page_subtitle_color", $page_subtitle_color);
        $page_subtitle_fontsize = new BridgeQodeField("textsimple", "page_subtitle_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("page_subtitle_fontsize", $page_subtitle_fontsize);
        $page_subtitle_lineheight = new BridgeQodeField("textsimple", "page_subtitle_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("page_subtitle_lineheight", $page_subtitle_lineheight);

        bridge_qode_add_admin_field(array(
            'parent'        => $row1,
            'type'          => 'textsimple',
            'name'          => 'page_subtitle_letter_spacing',
            'default_value' => '',
            'label'         => esc_html__('Letter Spacing', 'bridge')
        ));

        $row2 = new BridgeQodeRow(true);
        $group1->addChild("row2", $row2);
        $page_subtitle_font_family = new BridgeQodeField("fontsimple", "page_subtitle_font_family", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("page_subtitle_font_family", $page_subtitle_font_family);
        $page_subtitle_font_style = new BridgeQodeField("selectblanksimple", "page_subtitle_font_style", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("page_subtitle_font_style", $page_subtitle_font_style);
        $page_subtitle_fontweight = new BridgeQodeField("selectblanksimple", "page_subtitle_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row2->addChild("page_subtitle_fontweight", $page_subtitle_fontweight);

        bridge_qode_add_admin_field(array(
            'parent'        => $row2,
            'type'          => 'selectblanksimple',
            'name'          => 'page_subtitle_text_transform',
            'options'       => bridge_qode_get_text_transform_array(),
            'default_value' => '',
            'label'         => esc_html__('Text Transform', 'bridge')
        ));

        $group2 = new BridgeQodeGroup(esc_html__("Large Type", "bridge"), 'Define styles for default "Large" Subtitle');
        $panel4->addChild("group2", $group2);
        $row1 = new BridgeQodeRow();
        $group2->addChild("row1", $row1);
        $page_subtitle_large_fontsize = new BridgeQodeField("textsimple", "page_subtitle_large_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("page_subtitle_large_fontsize", $page_subtitle_large_fontsize);
        $page_subtitle_large_lineheight = new BridgeQodeField("textsimple", "page_subtitle_large_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("page_subtitle_large_lineheight", $page_subtitle_large_lineheight);
        $page_subtitle_large_fontweight = new BridgeQodeField("selectblanksimple", "page_subtitle_large_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row1->addChild("page_subtitle_large_fontweight", $page_subtitle_large_fontweight);


		// Page Text Above Title

		$panel_text_above_title = new BridgeQodePanel(esc_html__("Page Text Above Title", "bridge"), "page_text_above_title_panel");
		$fontsPage->addChild("panel_text_above_title", $panel_text_above_title);

		$group1 = new BridgeQodeGroup(esc_html__("Text Above Title", "bridge"), esc_html__("Define styles for page Text Above Title", "bridge"));
		$panel_text_above_title->addChild("group1", $group1);
		$row1 = new BridgeQodeRow();
		$group1->addChild("row1", $row1);
		$page_text_above_title_color = new BridgeQodeField("colorsimple", "page_text_above_title_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
		$row1->addChild("page_text_above_title_color", $page_text_above_title_color);
		$page_text_above_title_fontsize = new BridgeQodeField("textsimple", "page_text_above_title_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
		$row1->addChild("page_text_above_title_fontsize", $page_text_above_title_fontsize);
		$page_text_above_title_lineheight = new BridgeQodeField("textsimple", "page_text_above_title_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
		$row1->addChild("page_text_above_title_lineheight", $page_text_above_title_lineheight);
		$page_text_above_title_letterspacing = new BridgeQodeField("textsimple", "page_text_above_title_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
		$row1->addChild("page_text_above_title_letterspacing", $page_text_above_title_letterspacing);
		$row2 = new BridgeQodeRow(true);
		$group1->addChild("row2", $row2);
		$page_text_above_title_font_family = new BridgeQodeField("fontsimple", "page_text_above_title_font_family", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
		$row2->addChild("page_text_above_title_font_family", $page_text_above_title_font_family);
		$page_text_above_title_font_style = new BridgeQodeField("selectblanksimple", "page_text_above_title_font_style", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
		$row2->addChild("page_text_above_title_font_style", $page_text_above_title_font_style);
		$page_text_above_title_fontweight = new BridgeQodeField("selectblanksimple", "page_text_above_title_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
		$row2->addChild("page_text_above_title_fontweight", $page_text_above_title_fontweight);
		$page_text_above_title_texttransform = new BridgeQodeField("selectblanksimple", "page_text_above_title_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
		$row2->addChild("page_text_above_title_texttransform", $page_text_above_title_texttransform);

		$group2 = new BridgeQodeGroup(esc_html__("Large Type", "bridge"), esc_html__('Define styles for default "Large" Text Above Title', "bridge"));
		$panel_text_above_title->addChild("group2", $group2);
		$row1 = new BridgeQodeRow();
		$group2->addChild("row1", $row1);
		$page_text_above_title_large_fontsize = new BridgeQodeField("textsimple", "page_text_above_title_large_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
		$row1->addChild("page_text_above_title_large_fontsize", $page_text_above_title_large_fontsize);
		$page_text_above_title_large_lineheight = new BridgeQodeField("textsimple", "page_text_above_title_large_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
		$row1->addChild("page_text_above_title_large_lineheight", $page_text_above_title_large_lineheight);
		$page_text_above_title_large_fontweight = new BridgeQodeField("selectblanksimple", "page_text_above_title_large_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
		$row1->addChild("page_text_above_title_large_fontweight", $page_text_above_title_large_fontweight);

        // Quote and Link blog format and Blockquote shortcode

        $panel5 = new BridgeQodePanel(esc_html__("Footer", "bridge"), "footer_panel");
        $fontsPage->addChild("panel5", $panel5);

        $group1 = new BridgeQodeGroup(esc_html__("Footer top title styles", "bridge"), esc_html__('Define styles for footer top title', "bridge"));
        $panel5->addChild("group1", $group1);
        $row1 = new BridgeQodeRow();
        $group1->addChild("row1", $row1);
        $footer_title_color = new BridgeQodeField("colorsimple", "footer_title_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("footer_title_color", $footer_title_color);
        $footer_title_font_size = new BridgeQodeField("textsimple", "footer_title_font_size", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("footer_title_font_size", $footer_title_font_size);
        $footer_title_letter_spacing = new BridgeQodeField("textsimple", "footer_title_letter_spacing", "", esc_html__("Letter spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("footer_title_letter_spacing", $footer_title_letter_spacing);
        $footer_title_line_height = new BridgeQodeField("textsimple", "footer_title_line_height", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("footer_title_line_height", $footer_title_line_height);
        $row2 = new BridgeQodeRow(true);
        $group1->addChild("row2", $row2);
        $footer_title_font_family = new BridgeQodeField("fontsimple", "footer_title_font_family", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("footer_title_font_family", $footer_title_font_family);
        $footer_title_font_style = new BridgeQodeField("selectblanksimple", "footer_title_font_style", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("footer_title_font_style", $footer_title_font_style);
        $footer_title_font_weight = new BridgeQodeField("selectblanksimple", "footer_title_font_weight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row2->addChild("footer_title_font_weight", $footer_title_font_weight);
        $footer_title_text_transform = new BridgeQodeField("selectblanksimple", "footer_title_text_transform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row2->addChild("footer_title_text_transform", $footer_title_text_transform);

        $group2 = new BridgeQodeGroup(esc_html__("Footer top text styles", "bridge"), esc_html__('Define styles for footer top text', "bridge"));
        $panel5->addChild("group2", $group2);
        $row1 = new BridgeQodeRow();
        $group2->addChild("row1", $row1);
        $footer_text_font_size = new BridgeQodeField("textsimple", "footer_text_font_size", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("footer_text_font_size", $footer_text_font_size);
        $footer_text_letter_spacing = new BridgeQodeField("textsimple", "footer_text_letter_spacing", "", esc_html__("Letter spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("footer_text_letter_spacing", $footer_text_letter_spacing);
        $footer_text_line_height = new BridgeQodeField("textsimple", "footer_text_line_height", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("footer_text_line_height", $footer_text_line_height);
        $footer_text_font_family = new BridgeQodeField("fontsimple", "footer_text_font_family", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("footer_text_font_family", $footer_text_font_family);
        $row2 = new BridgeQodeRow(true);
        $group2->addChild("row2", $row2);
        $footer_text_font_style = new BridgeQodeField("selectblanksimple", "footer_text_font_style", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("footer_text_font_style", $footer_text_font_style);
        $footer_text_font_weight = new BridgeQodeField("selectblanksimple", "footer_text_font_weight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row2->addChild("footer_text_font_weight", $footer_text_font_weight);
        $footer_text_text_transform = new BridgeQodeField("selectblanksimple", "footer_text_text_transform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row2->addChild("footer_text_text_transform", $footer_text_text_transform);

        $group3 = new BridgeQodeGroup(esc_html__("Footer top link styles", "bridge"), esc_html__('Define styles for footer top link', "bridge"));
        $panel5->addChild("group3", $group3);
        $row1 = new BridgeQodeRow();
        $group3->addChild("row1", $row1);
        $footer_link_font_size = new BridgeQodeField("textsimple", "footer_link_font_size", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("footer_link_font_size", $footer_link_font_size);
        $footer_link_letter_spacing = new BridgeQodeField("textsimple", "footer_link_letter_spacing", "", esc_html__("Letter spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("footer_link_letter_spacing", $footer_link_letter_spacing);
        $footer_link_line_height = new BridgeQodeField("textsimple", "footer_link_line_height", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("footer_link_line_height", $footer_link_line_height);
        $footer_link_font_family = new BridgeQodeField("fontsimple", "footer_link_font_family", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("footer_link_font_family", $footer_link_font_family);
        $row2 = new BridgeQodeRow(true);
        $group3->addChild("row2", $row2);
        $footer_link_font_style = new BridgeQodeField("selectblanksimple", "footer_link_font_style", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("footer_link_font_style", $footer_link_font_style);
        $footer_link_font_weight = new BridgeQodeField("selectblanksimple", "footer_link_font_weight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row2->addChild("footer_link_font_weight", $footer_link_font_weight);
        $footer_link_text_transform = new BridgeQodeField("selectblanksimple", "footer_link_text_transform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row2->addChild("footer_link_text_transform", $footer_link_text_transform);

        $group4 = new BridgeQodeGroup(esc_html__("Footer bottom text styles", "bridge"), esc_html__('Define styles for footer bottom text', "bridge"));
        $panel5->addChild("group4", $group4);
        $row1 = new BridgeQodeRow();
        $group4->addChild("row1", $row1);
        $footer_bottom_text_font_size = new BridgeQodeField("textsimple", "footer_bottom_text_font_size", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("footer_bottom_text_font_size", $footer_bottom_text_font_size);
        $footer_bottom_text_letter_spacing = new BridgeQodeField("textsimple", "footer_bottom_text_letter_spacing", "", esc_html__("Letter spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("footer_bottom_text_letter_spacing", $footer_bottom_text_letter_spacing);
        $footer_bottom_text_line_height = new BridgeQodeField("textsimple", "footer_bottom_text_line_height", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("footer_bottom_text_line_height", $footer_bottom_text_line_height);
        $footer_bottom_text_font_family = new BridgeQodeField("fontsimple", "footer_bottom_text_font_family", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("footer_bottom_text_font_family", $footer_bottom_text_font_family);
        $row2 = new BridgeQodeRow(true);
        $group4->addChild("row2", $row2);
        $footer_bottom_text_font_style = new BridgeQodeField("selectblanksimple", "footer_bottom_text_font_style", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("footer_bottom_text_font_style", $footer_bottom_text_font_style);
        $footer_bottom_text_font_weight = new BridgeQodeField("selectblanksimple", "footer_bottom_text_font_weight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row2->addChild("footer_bottom_text_font_weight", $footer_bottom_text_font_weight);
        $footer_bottom_text_text_transform = new BridgeQodeField("selectblanksimple", "footer_bottom_text_text_transform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row2->addChild("footer_bottom_text_text_transform", $footer_bottom_text_text_transform);

        $group5 = new BridgeQodeGroup(esc_html__("Footer bottom link styles", "bridge"), esc_html__('Define styles for footer bottom link', "bridge"));
        $panel5->addChild("group5", $group5);
        $row1 = new BridgeQodeRow();
        $group5->addChild("row1", $row1);
        $footer_bottom_link_font_size = new BridgeQodeField("textsimple", "footer_bottom_link_font_size", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("footer_bottom_link_font_size", $footer_bottom_link_font_size);
        $footer_bottom_link_letter_spacing = new BridgeQodeField("textsimple", "footer_bottom_link_letter_spacing", "", esc_html__("Letter spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("footer_bottom_link_letter_spacing", $footer_bottom_link_letter_spacing);
        $footer_bottom_link_line_height = new BridgeQodeField("textsimple", "footer_bottom_link_line_height", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("footer_bottom_link_line_height", $footer_bottom_link_line_height);
        $footer_bottom_link_font_family = new BridgeQodeField("fontsimple", "footer_bottom_link_font_family", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("footer_bottom_link_font_family", $footer_bottom_link_font_family);
        $row2 = new BridgeQodeRow(true);
        $group5->addChild("row2", $row2);
        $footer_bottom_link_font_style = new BridgeQodeField("selectblanksimple", "footer_bottom_link_font_style", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("footer_bottom_link_font_style", $footer_bottom_link_font_style);
        $footer_bottom_link_font_weight = new BridgeQodeField("selectblanksimple", "footer_bottom_link_font_weight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row2->addChild("footer_bottom_link_font_weight", $footer_bottom_link_font_weight);
        $footer_bottom_link_text_transform = new BridgeQodeField("selectblanksimple", "footer_bottom_link_text_transform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row2->addChild("footer_bottom_link_text_transform", $footer_bottom_link_text_transform);

        // Portfolio

        $panel6 = new BridgeQodePanel(esc_html__("Portfolio", "bridge"), "portfolio_panel");
        $fontsPage->addChild("panel6", $panel6);

        $group1 = new BridgeQodeGroup(esc_html__("Categories Filter", "bridge"), esc_html__("Define styles for portfolio Category Filter", "bridge"));
        $panel6->addChild("group1", $group1);
        $row1 = new BridgeQodeRow();
        $group1->addChild("row1", $row1);
        $portfolio_filter_color = new BridgeQodeField("colorsimple", "portfolio_filter_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("portfolio_filter_color", $portfolio_filter_color);
        $portfolio_filter_hover_color = new BridgeQodeField("colorsimple", "portfolio_filter_hover_color", "", esc_html__("Text Hover/Active Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("portfolio_filter_hover_color", $portfolio_filter_hover_color);
        $portfolio_filter_font_size = new BridgeQodeField("textsimple", "portfolio_filter_font_size", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("portfolio_filter_font_size", $portfolio_filter_font_size);
        $portfolio_filter_line_height = new BridgeQodeField("textsimple", "portfolio_filter_line_height", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("portfolio_filter_line_height", $portfolio_filter_line_height);
        $row2 = new BridgeQodeRow(true);
        $group1->addChild("row2", $row2);
        $portfolio_filter_text_transform = new BridgeQodeField("selectblanksimple", "portfolio_filter_text_transform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row2->addChild("portfolio_filter_text_transform", $portfolio_filter_text_transform);
        $portfolio_filter_font_family = new BridgeQodeField("fontsimple", "portfolio_filter_font_family", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("portfolio_filter_font_family", $portfolio_filter_font_family);
        $portfolio_filter_font_style = new BridgeQodeField("selectblanksimple", "portfolio_filter_font_style", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("portfolio_filter_font_style", $portfolio_filter_font_style);
        $portfolio_filter_font_weight = new BridgeQodeField("selectblanksimple", "portfolio_filter_font_weight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row2->addChild("portfolio_filter_font_weight", $portfolio_filter_font_weight);
        $row3 = new BridgeQodeRow(true);
        $group1->addChild("row3", $row3);
        $portfolio_filter_letter_spacing = new BridgeQodeField("textsimple", "portfolio_filter_letter_spacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row3->addChild("portfolio_filter_letter_spacing", $portfolio_filter_letter_spacing);

    }
    add_action('bridge_qode_action_options_map','bridge_qode_fonts_options_map',60);
}