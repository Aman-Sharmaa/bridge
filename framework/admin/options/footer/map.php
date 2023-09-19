<?php

if(!function_exists('bridge_qode_footer_options_map')) {
    /**
     * Footer options page
     */
    function bridge_qode_footer_options_map() {

        $footerPage = new BridgeQodeAdminPage("_footer", esc_html__("Footer", "bridge"), "fa fa-sort-amount-asc");
        bridge_qode_framework()->qodeOptions->addAdminPage("footer", $footerPage);


        $panel10 = new BridgeQodePanel(esc_html__("Footer", "bridge"), "footer_panel");
        $footerPage->addChild("panel10", $panel10);
        $uncovering_footer = new BridgeQodeField("yesno", "uncovering_footer", "no", esc_html__("Uncovering Footer", "bridge"), esc_html__("Enabling this option will make Footer gradually appear on scroll", "bridge"));
        $panel10->addChild("uncovering_footer", $uncovering_footer);

        $footer_main_image_background = new BridgeQodeField("image", "footer_main_image_background", "", esc_html__("Footer Background Image", "bridge"), esc_html__("Choose footer background image", "bridge"));
        $panel10->addChild("footer_main_image_background", $footer_main_image_background);

        $show_footer_top = new BridgeQodeField("yesno", "show_footer_top", "yes", esc_html__("Show Footer Top", "bridge"), esc_html__("Enabling this option will show Footer Top area", "bridge"), array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_show_footer_top_container"));
        $panel10->addChild("show_footer_top", $show_footer_top);
        $show_footer_top_container = new BridgeQodeContainer("show_footer_top_container", "show_footer_top", "no");
        $panel10->addChild("show_footer_top_container", $show_footer_top_container);
        $footer_in_grid = new BridgeQodeField("yesno", "footer_in_grid", "yes", esc_html__("Footer in Grid", "bridge"), esc_html__("Enabling this option will place Footer Top content in grid", "bridge"));
        $show_footer_top_container->addChild("footer_in_grid", $footer_in_grid);
        $footer_top_columns = new BridgeQodeField("select", "footer_top_columns", "4", esc_html__("Footer Top Columns", "bridge"), esc_html__("Choose number of columns for Footer Top area", "bridge"), array("1" => esc_html__("1", "bridge"),
            "2" => esc_html__("2", "bridge"),
            "3" => esc_html__("3", "bridge"),
            "5" => esc_html__("3(25%+25%+50%)", "bridge"),
            "6" => esc_html__("3(50%+25%+25%)", "bridge"),
            "4" => esc_html__("4", "bridge")
        ), array(
            "dependence" => true,
            "hide" => array(
                "1" => "#qodef_footer_col2_alignment_container, #qodef_footer_col3_alignment_container, #qodef_footer_col4_alignment_container",
                "2" => "#qodef_footer_col3_alignment_container, #qodef_footer_col4_alignment_container",
                "3" => "#qodef_footer_col4_alignment_container",
                "5" => "#qodef_footer_col4_alignment_container",
                "6" => "#qodef_footer_col4_alignment_container",
                "4" => ""
            ),
            "show" => array(
                "1" => "#qodef_footer_col1_alignment_container",
                "2" => "#qodef_footer_col1_alignment_container, #qodef_footer_col2_alignment_container",
                "3" => "#qodef_footer_col1_alignment_container, #qodef_footer_col2_alignment_container, #qodef_footer_col3_alignment_container",
                "5" => "#qodef_footer_col1_alignment_container, #qodef_footer_col2_alignment_container, #qodef_footer_col3_alignment_container",
                "6" => "#qodef_footer_col1_alignment_container, #qodef_footer_col2_alignment_container, #qodef_footer_col3_alignment_container",
                "4" => "#qodef_footer_col1_alignment_container, #qodef_footer_col2_alignment_container, #qodef_footer_col3_alignment_container, #qodef_footer_col4_alignment_container",
            )
        ));

        $show_footer_top_container->addChild("footer_top_columns", $footer_top_columns);

        $footer_col1_alignment_container = new BridgeQodeContainer("footer_col1_alignment_container", "footer_top_columns", "");
        $show_footer_top_container->addChild("footer_col1_alignment_container", $footer_col1_alignment_container);

        $footer_col1_alignment = new BridgeQodeField("selectblank", "footer_col1_alignment", "", esc_html__("Footer Top First Column Alignment", "bridge"), esc_html__("Choose alignment for first column", "bridge"), array(
            "left" => esc_html__("Left", "bridge"),
            "center" => esc_html__("Center", "bridge"),
            "right" => esc_html__("Right", "bridge")
        ));
        $footer_col1_alignment_container->addChild("footer_col1_alignment", $footer_col1_alignment);

        $footer_col2_alignment_container = new BridgeQodeContainer("footer_col2_alignment_container", "footer_top_columns", "", array("1"));
        $show_footer_top_container->addChild("footer_col2_alignment_container", $footer_col2_alignment_container);

        $footer_col2_alignment = new BridgeQodeField("selectblank", "footer_col2_alignment", "", esc_html__("Footer Top Second Column Alignment", "bridge"), "Choose alignment for second column", array(
            "left" => esc_html__("Left", "bridge"),
            "center" => esc_html__("Center", "bridge"),
            "right" => esc_html__("Right", "bridge")
        ));
        $footer_col2_alignment_container->addChild("footer_col2_alignment", $footer_col2_alignment);

        $footer_col3_alignment_container = new BridgeQodeContainer("footer_col3_alignment_container", "footer_top_columns", "", array("1", "2"));
        $show_footer_top_container->addChild("footer_col3_alignment_container", $footer_col3_alignment_container);

        $footer_col3_alignment = new BridgeQodeField("selectblank", "footer_col3_alignment", "", esc_html__("Footer Top Third Column Alignment", "bridge"), esc_html__("Choose alignment for third column", "bridge"), array(
            "left" => esc_html__("Left", "bridge"),
            "center" => esc_html__("Center", "bridge"),
            "right" => esc_html__("Right", "bridge")
        ));
        $footer_col3_alignment_container->addChild("footer_col3_alignment", $footer_col3_alignment);

        $footer_col4_alignment_container = new BridgeQodeContainer("footer_col4_alignment_container", "footer_top_columns", "", array("1", "2", "3", "5", "6"));
        $show_footer_top_container->addChild("footer_col4_alignment_container", $footer_col4_alignment_container);

        $footer_col4_alignment = new BridgeQodeField("selectblank", "footer_col4_alignment", "", esc_html__("Footer Top Fourth Column Alignment", "bridge"), esc_html__("Choose alignment for fourth column", "bridge"), array(
            "left" => esc_html__("Left", "bridge"),
            "center" => esc_html__("Center", "bridge"),
            "right" => esc_html__("Right", "bridge")
        ));

        $footer_col4_alignment_container->addChild("footer_col4_alignment", $footer_col4_alignment);

        bridge_qode_add_admin_field( array(
            'type'          => 'yesno',
            'name'          => 'advanced_footer_top_responsive',
            'default_value' => 'no',
            'label'         => esc_html__('Advanced Top Footer Responsiveness', 'bridge'),
            'description'   => esc_html__('Enable this option if you would like advanced footer responsiveness for top footer. (Note: This option is only applied when 4 footer top columns are selected)', 'bridge'),
            'parent'        => $footer_col4_alignment_container,
            'args' => array(
                'dependence' => true,
                'dependence_hide_on_yes' => '',
                'dependence_show_on_yes' => '#qodef_qode_footer_top_responsive_advanced_options_container'
            )
        ) );

        $qode_footer_top_responsive_advanced_options_container = bridge_qode_add_admin_container(
            array(
                'parent'          => $footer_col4_alignment_container,
                'name'            => 'qode_footer_top_responsive_advanced_options_container',
                'hidden_property' => 'advanced_footer_top_responsive',
                'hidden_value'    => 'no'
            )
        );

        bridge_qode_add_admin_field( array(
                'type'          => 'select',
                'name'          => 'footer_top_responsive_advanced_width',
                'default_value' => '',
                'label'         => esc_html__('Advanced Responsive Breakpoint', 'bridge'),
                'description'   => esc_html__('Choose a width at which advanced responsive options will take effect. This will make footer columns go 2 by 2 under selected width.', 'bridge'),
                'parent'        => $qode_footer_top_responsive_advanced_options_container,
                'options'       => array(
                    '1000'  => '1000px',
                    '768'   => '768px'
                )
        ) );

        $footer_top_responsive = new BridgeQodeField("yesno", "footer_top_responsive", "no", esc_html__("Set Footer Columns To Be One By One on Tablet Portrait", "bridge"), esc_html__("Enabling this option will set footer columns one by one for tabet portrait view", "bridge"));
        $show_footer_top_container->addChild("footer_top_responsive", $footer_top_responsive);

        $group1 = new BridgeQodeGroup(esc_html__("Footer Top Colors", "bridge"), esc_html__("Configure colors for Footer Top area", "bridge"));
        $show_footer_top_container->addChild("group1", $group1);
        $row1 = new BridgeQodeRow();
        $group1->addChild("row1", $row1);
        $footer_top_background_color = new BridgeQodeField("colorsimple", "footer_top_background_color", "", esc_html__("Background Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("footer_top_background_color", $footer_top_background_color);
        $footer_top_title_color = new BridgeQodeField("colorsimple", "footer_top_title_color", "", esc_html__("Title Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("footer_top_title_color", $footer_top_title_color);
        $footer_top_text_color = new BridgeQodeField("colorsimple", "footer_top_text_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("footer_top_text_color", $footer_top_text_color);
        $row2 = new BridgeQodeRow(true);
        $group1->addChild("row2", $row2);
        $footer_link_color = new BridgeQodeField("colorsimple", "footer_link_color", "", esc_html__("Link Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("footer_link_color", $footer_link_color);
        $footer_link_hover_color = new BridgeQodeField("colorsimple", "footer_link_hover_color", "", esc_html__("Link Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("footer_link_hover_color", $footer_link_hover_color);
        $footer_image_background = new BridgeQodeField("image", "footer_image_background", "", esc_html__("Footer Top Background Image", "bridge"), esc_html__("Choose footer top background image", "bridge"));
        $show_footer_top_container->addChild("footer_image_background", $footer_image_background);

        //Footer top border section
        $footer_top_border_group = new BridgeQodeGroup(esc_html__('Footer Top Border', "bridge"), esc_html__('Set footer top section borders', "bridge"));
        $show_footer_top_container->addChild('footer_top_border_group', $footer_top_border_group);

        $row_ft_border = new BridgeQodeRow(true);
        $footer_top_border_group->addChild('row_ft_border', $row_ft_border);

        $footer_top_border_color = new BridgeQodeField('colorsimple', 'footer_top_border_color', '', esc_html__('Top Border Color', "bridge"));
        $row_ft_border->addChild('footer_top_border_color', $footer_top_border_color);

        $footer_top_border_width = new BridgeQodeField('textsimple', 'footer_top_border_width', '', esc_html__('Top Border Width (px)', "bridge"));
        $row_ft_border->addChild('footer_top_border_width', $footer_top_border_width);

        $footer_top_border_in_grid = new BridgeQodeField('yesnosimple', 'footer_top_border_in_grid', 'no', esc_html__('Top Border In Grid', "bridge"));
        $row_ft_border->addChild('footer_top_border_in_grid', $footer_top_border_in_grid);

        $footer_top_padding_group = new BridgeQodeGroup(esc_html__('Footer Top Padding', "bridge"), esc_html__('Set padding for footer top section', "bridge"));
        $show_footer_top_container->addChild('footer_top_padding_group', $footer_top_padding_group);

        $footer_top_padding_row = new BridgeQodeRow(true);
        $footer_top_padding_group->addChild('footer_top_padding_row', $footer_top_padding_row);

        $footer_top_padding_top = new BridgeQodeField('textsimple', 'footer_top_padding_top', '', esc_html__('Padding Top (px)', "bridge"));
        $footer_top_padding_row->addChild('footer_top_padding_top', $footer_top_padding_top);

        $footer_top_padding_right = new BridgeQodeField('textsimple', 'footer_top_padding_right', '', esc_html__('Padding Right (px)', "bridge"));
        $footer_top_padding_row->addChild('footer_top_padding_right', $footer_top_padding_right);

        $footer_top_padding_bottom = new BridgeQodeField('textsimple', 'footer_top_padding_bottom', '', esc_html__('Padding Bottom (px)', "bridge"));
        $footer_top_padding_row->addChild('footer_top_padding_bottom', $footer_top_padding_bottom);

        $footer_top_padding_left = new BridgeQodeField('textsimple', 'footer_top_padding_left', '', esc_html__('Padding Left (px)', "bridge"));
        $footer_top_padding_row->addChild('footer_top_padding_left', $footer_top_padding_left);


        //Footer angled sections
        $footer_angled_section = new BridgeQodeField("yesno", "footer_angled_section", "no", esc_html__("Enable Angled Footer", "bridge"), esc_html__("Enabling this option will show angled shape in footer background", "bridge"), array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_footer_angled_section_holder"));
        $show_footer_top_container->addChild("footer_angled_section", $footer_angled_section);

        $footer_angled_section_holder = new BridgeQodeContainer("footer_angled_section_holder", "footer_angled_section", "no");
        $show_footer_top_container->addChild("footer_angled_section_holder", $footer_angled_section_holder);

        $footer_angled_section_direction = new BridgeQodeField("select", "footer_angled_section_direction", "", esc_html__("Angled Shape Direction", "bridge"), esc_html__("Choose a direction for footer angled shape", "bridge"), array(
            "from_left_to_right" => esc_html__("From Left To Right", "bridge"),
            "from_right_to_left" => esc_html__("From Right To Left", "bridge")
        ));
        $footer_angled_section_holder->addChild("footer_angled_section_direction", $footer_angled_section_direction);

        $footer_angled_section_background_color = new BridgeQodeField("color", "footer_angled_section_background_color", "", esc_html__("Background Color", "bridge"), esc_html__("Choose a background color for angled shape", "bridge"));
        $footer_angled_section_holder->addChild("footer_angled_section_background_color", $footer_angled_section_background_color);


        $footer_text = new BridgeQodeField("yesno", "footer_text", "yes", esc_html__("Show Footer Bottom", "bridge"), esc_html__("Enabling this option will show Footer Bottom area", "bridge"), array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_footer_text_container"));
        $panel10->addChild("footer_text", $footer_text);
        $footer_text_container = new BridgeQodeContainer("footer_text_container", "footer_text", "no");
        $panel10->addChild("footer_text_container", $footer_text_container);

        $footer_bottom_in_grid = new BridgeQodeField("yesno", "footer_bottom_in_grid", "no", esc_html__("Footer Bottom in Grid", "bridge"), esc_html__("Enabling this option will place Footer bottom content in grid", "bridge"));
        $footer_text_container->addChild("footer_bottom_in_grid", $footer_bottom_in_grid);

        $footer_bottom_columns = new BridgeQodeField("select", "footer_bottom_columns", "1", esc_html__("Footer Bottom Columns", "bridge"), esc_html__("Choose number of columns for Footer Bottom area", "bridge"), array("1" => "1",
            "2" => "2",
            "3" => "3"
        ));
        $footer_text_container->addChild("footer_bottom_columns", $footer_bottom_columns);

        $group2 = new BridgeQodeGroup(esc_html__("Footer Bottom Colors", "bridge"), esc_html__("Configure colors for Footer Bottom area", "bridge"));
        $footer_text_container->addChild("group2", $group2);
        $row1 = new BridgeQodeRow();
        $group2->addChild("row1", $row1);
        $footer_bottom_background_color = new BridgeQodeField("colorsimple", "footer_bottom_background_color", "", esc_html__("Background Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("footer_bottom_background_color", $footer_bottom_background_color);
        $footer_bottom_text_color = new BridgeQodeField("colorsimple", "footer_bottom_text_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("footer_bottom_text_color", $footer_bottom_text_color);
        $footer_bottom_link_hover_color = new BridgeQodeField("colorsimple", "footer_bottom_link_hover_color", "", esc_html__("Link Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("footer_bottom_link_hover_color", $footer_bottom_link_hover_color);

        $footer_bottom_border_group = new BridgeQodeGroup(esc_html__('Footer Bottom Border', "bridge"), esc_html__('Set footer bottom section borders', "bridge"));
        $footer_text_container->addChild('footer_bottom_border_group', $footer_bottom_border_group);
        $footer_bottom_border_row = new BridgeQodeRow(true);
        $footer_bottom_border_group->addChild('footer_bottom_border_row', $footer_bottom_border_row);

        $footer_bottom_border_color = new BridgeQodeField('colorsimple', 'footer_bottom_border_color', '', esc_html__('Border Top Color', "bridge"));
        $footer_bottom_border_row->addChild('footer_bottom_border_color', $footer_bottom_border_color);

        $footer_bottom_border_width = new BridgeQodeField('textsimple', 'footer_bottom_border_width', '', esc_html__('Border Top Width (px)', "bridge"));
        $footer_bottom_border_row->addChild('footer_bottom_border_width', $footer_bottom_border_width);

        $footer_bottom_border_in_grid = new BridgeQodeField('yesnosimple', 'footer_bottom_border_in_grid', 'no', esc_html__('Border Top In Grid', "bridge"));
        $footer_bottom_border_row->addChild('footer_bottom_border_in_grid', $footer_bottom_border_in_grid);


        $footer_bottom_padding_group = new BridgeQodeGroup(esc_html__('Footer Bottom Padding', "bridge"), esc_html__('Set footer bottom padding', "bridge"));
        $footer_text_container->addChild('footer_bottom_padding_group', $footer_bottom_padding_group);
        $footer_bottom_padding_row = new BridgeQodeRow(true);
        $footer_bottom_padding_group->addChild('footer_bottom_padding_row', $footer_bottom_padding_row);

        $footer_bottom_padding_top = new BridgeQodeField('textsimple', 'footer_bottom_padding_top', '', esc_html__('Padding Top (px)', "bridge"));
        $footer_bottom_padding_row->addChild('footer_bottom_padding_top', $footer_bottom_padding_top);

        $footer_bottom_padding_right = new BridgeQodeField('textsimple', 'footer_bottom_padding_right', '', esc_html__('Padding Right (px)', "bridge"));
        $footer_bottom_padding_row->addChild('footer_bottom_padding_right', $footer_bottom_padding_right);

        $footer_bottom_padding_bottom = new BridgeQodeField('textsimple', 'footer_bottom_padding_bottom', '', esc_html__('Padding Bottom (px)', "bridge"));
        $footer_bottom_padding_row->addChild('footer_bottom_padding_bottom', $footer_bottom_padding_bottom);

        $footer_bottom_padding_left = new BridgeQodeField('textsimple', 'footer_bottom_padding_left', '', esc_html__('Padding Left (px)', "bridge"));
        $footer_bottom_padding_row->addChild('footer_bottom_padding_left', $footer_bottom_padding_left);


        $footer_bottom_image_background = new BridgeQodeField("image", "footer_bottom_image_background", "", esc_html__("Footer Bottom Background Image", "bridge"), esc_html__("Choose footer bottom background image", "bridge"));
        $footer_text_container->addChild("footer_bottom_image_background", $footer_bottom_image_background);

        $footer_custom_menu_spacing = new BridgeQodeField("text", "footer_custom_menu_spacing", "", esc_html__("Custom Menu Item Spacing (px)", "bridge"), esc_html__("Enter Spacing Between Items in the Custom Menu Widget. This Option Only Applies When the Custom Menu Widget is Set in the Footer Bottom.", "bridge"), array(), array("col_width" => 3));
        $footer_text_container->addChild("footer_custom_menu_spacing", $footer_custom_menu_spacing);

    }
    add_action('bridge_qode_action_options_map','bridge_qode_footer_options_map',40);
}