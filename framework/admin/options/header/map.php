<?php
if(!function_exists('bridge_qode_haeder_options_map')) {
    /**
     * Header options page
     */
    function bridge_qode_haeder_options_map(){

        $headerandfooterPage = new BridgeQodeAdminPage("_header",  esc_html__( 'Header', 'bridge'), "fa fa-header");
        bridge_qode_framework()->qodeOptions->addAdminPage("headerandfooter", $headerandfooterPage);

        // Header Position

        $panel6 = new BridgeQodePanel( esc_html__( 'Header Position', 'bridge'), "header_position");
        $headerandfooterPage->addChild("panel6", $panel6);
        $vertical_area = new BridgeQodeField("yesno", "vertical_area", "no",  esc_html__( 'Switch to Left Menu', 'bridge'),  esc_html__( 'Enabling this option will switch to a Left Menu area (default is Top Menu)', 'bridge'), array(),
            array("dependence" => true,
                "dependence_hide_on_yes" => "#qodef_header_panel,#qodef_header_top_panel,#qodef_enable_search_panel,#qodef_enable_menus_panel,#qodef_enable_side_area_panel,#qodef_enable_popup_menu_panel,#qodef_language_switcher",
                "dependence_show_on_yes" => "#qodef_vertical_areas_panel"));
        $panel6->addChild("vertical_area", $vertical_area);

        // Header

        $panel5 = new BridgeQodePanel( esc_html__( 'Header', 'bridge'), "header_panel", "vertical_area", "yes");
        $headerandfooterPage->addChild("panel5", $panel5);
        $header_in_grid = new BridgeQodeField("yesno", "header_in_grid", "yes",  esc_html__( 'Header in Grid', 'bridge'),  esc_html__( 'Enabling this option will display header content in grid', 'bridge'));
        $panel5->addChild("header_in_grid", $header_in_grid);
        $header_bottom_appearance = new BridgeQodeField("select", "header_bottom_appearance", "regular",  esc_html__( 'Header Type', 'bridge'),  esc_html__( 'Choose the header layout & behavior', 'bridge'),
            array(
                "regular"						=>  esc_html__( 'Regular','bridge'),
                "fixed"							=>  esc_html__( 'Fixed','bridge'),
                "fixed fixed_minimal"			=>  esc_html__( 'Fixed Minimal', 'bridge'),
                "fixed_hiding"					=>  esc_html__( 'Fixed Advanced', 'bridge'),
                "fixed_top_header"				=>  esc_html__( 'Fixed Header Top', 'bridge'),
                "stick"							=>  esc_html__( 'Sticky', 'bridge'),
                "stick menu_bottom"				=>  esc_html__( 'Sticky Expanded', 'bridge'),
                "stick_with_left_right_menu"	=>  esc_html__( 'Sticky Divided', 'bridge')
            ),
            array("dependence" => true,
                "hide" => array(
                    "regular" => "#qodef_search_left_sidearea_right_container,#qodef_disable_text_shadow_for_sticky_container,#qodef_header_top_height_container,#qodef_menu_background_color_container,#qodef_scroll_amount_for_sticky_container,#qodef_header_height_scroll,#qodef_header_height_sticky,#qodef_header_height_scroll_hidden,#qodef_header_background_color_scroll,#qodef_header_background_color_sticky,#qodef_header_background_transparency_scroll,#qodef_header_background_transparency_sticky,#qodef_scroll_amount_for_fixed_hiding_container,#qodef_header_fixed_top_logo_background_container",
                    "fixed" => "#qodef_search_left_sidearea_right_container,#qodef_header_top_height_container,#qodef_menu_background_color_container,#qodef_scroll_amount_for_sticky_container,#qodef_header_height_sticky,#qodef_header_height_scroll_hidden,#qodef_header_background_color_sticky,#qodef_header_background_transparency_sticky,#qodef_scroll_amount_for_fixed_hiding_container, #qodef_header_fixed_top_logo_background_container",
                    "fixed fixed_minimal" => "#qodef_search_left_sidearea_right_container,#qodef_header_top_height_container,#qodef_menu_position_container,#qodef_menu_background_color_container,#qodef_scroll_amount_for_sticky_container,#qodef_header_height_sticky,#qodef_header_height_scroll_hidden,#qodef_header_background_color_sticky,#qodef_header_background_transparency_sticky,#qodef_scroll_amount_for_fixed_hiding_container,#qodef_header_fixed_top_logo_background_container",
                    "fixed_top_header" => "#qodef_search_left_sidearea_right_container,#qodef_disable_text_shadow_for_sticky_container,#qodef_header_top_scroll_container,#qodef_header_background_transparency_scroll,#qodef_header_background_color_scroll,#qodef_header_height_container,#qodef_menu_position_container,#qodef_menu_background_color_container,#qodef_scroll_amount_for_sticky_container,#qodef_header_height_sticky,#qodef_header_height_scroll_hidden,#qodef_header_background_color_sticky,#qodef_header_background_transparency_sticky,#qodef_scroll_amount_for_fixed_hiding_container",
                    "fixed_hiding" => "#qodef_header_top_height_container,#qodef_scroll_amount_for_sticky_container,#qodef_menu_position_container,#qodef_header_height_scroll,#qodef_header_height_sticky,#qodef_header_background_color_sticky,#qodef_header_background_transparency_sticky, #qodef_header_fixed_top_logo_background_container",
                    "stick menu_bottom" => "#qodef_search_left_sidearea_right_container,#qodef_header_top_height_container,#qodef_menu_background_color_container,#qodef_menu_position_container,#qodef_header_height_scroll,#qodef_header_height_scroll_hidden,#qodef_header_background_transparency_scroll,#qodef_header_background_color_scroll,#qodef_scroll_amount_for_fixed_hiding_container,#qodef_header_fixed_top_logo_background_container",
                    "stick_with_left_right_menu" => "#qodef_search_left_sidearea_right_container,#qodef_header_top_height_container,#qodef_menu_background_color_container,#qodef_menu_position_container,#qodef_header_height_scroll,#qodef_header_height_scroll_hidden,#qodef_header_background_transparency_scroll,#qodef_header_background_color_scroll,#qodef_scroll_amount_for_fixed_hiding_container,#qodef_header_fixed_top_logo_background_container",
                    "stick" => "#qodef_search_left_sidearea_right_container,#qodef_header_top_height_container,#qodef_menu_background_color_container,#qodef_header_height_scroll,#qodef_header_height_scroll_hidden,#qodef_header_background_color_scroll,#qodef_header_background_transparency_scroll,#qodef_scroll_amount_for_fixed_hiding_container,#qodef_header_fixed_top_logo_background_container"),
                "show" => array(
                    "regular" => "#qodef_header_top_scroll_container,#qodef_header_height_container,#qodef_menu_position_container",
                    "fixed" => "#qodef_disable_text_shadow_for_sticky_container,#qodef_header_top_scroll_container,#qodef_header_height_container,#qodef_menu_position_container,#qodef_header_height_scroll,#qodef_header_background_color_scroll,#qodef_header_background_transparency_scroll",
                    "fixed fixed_minimal" => "#qodef_disable_text_shadow_for_sticky_container,#qodef_header_top_scroll_container,#qodef_header_height_container,#qodef_header_height_scroll,#qodef_header_background_color_scroll,#qodef_header_background_transparency_scroll",
                    "fixed_top_header" => "#qodef_header_top_height_container,#qodef_header_height_scroll,#qodef_header_fixed_top_logo_background_container",
                    "stick" => "#qodef_disable_text_shadow_for_sticky_container,#qodef_header_top_scroll_container,#qodef_header_height_container,#qodef_scroll_amount_for_sticky_container,#qodef_menu_position_container,#qodef_header_height_sticky,#qodef_header_background_color_sticky,#qodef_header_background_transparency_sticky",
                    "stick menu_bottom" => "#qodef_disable_text_shadow_for_sticky_container,#qodef_header_top_scroll_container,#qodef_header_height_container,#qodef_scroll_amount_for_sticky_container,#qodef_header_height_sticky,#qodef_header_background_color_sticky,#qodef_header_background_transparency_sticky",
                    "stick_with_left_right_menu" => "#qodef_disable_text_shadow_for_sticky_container,#qodef_header_top_scroll_container,#qodef_header_height_container,#qodef_scroll_amount_for_sticky_container,#qodef_header_height_sticky,#qodef_header_background_color_sticky,#qodef_header_background_transparency_sticky",
                    "fixed_hiding" => "#qodef_search_left_sidearea_right_container,#qodef_disable_text_shadow_for_sticky_container,#qodef_header_top_scroll_container,#qodef_header_height_container,#qodef_menu_background_color_container,#qodef_header_height_scroll_hidden,#qodef_header_background_color_scroll,#qodef_header_background_transparency_scroll,#qodef_scroll_amount_for_fixed_hiding_container")));
        $panel5->addChild("header_bottom_appearance", $header_bottom_appearance);

        $search_left_sidearea_right_container = new BridgeQodeContainer("search_left_sidearea_right_container", "header_bottom_appearance", "", array("regular", "fixed", "fixed_top_header", "fixed fixed_minimal", "stick", "stick menu_bottom", "stick_with_left_right_menu", "fixed_top_header", "fixed fixed_minimal"));
        $panel5->addChild("search_left_sidearea_right_container", $search_left_sidearea_right_container);

        $search_left_sidearea_right = new BridgeQodeField("yesno", "search_left_sidearea_right", "no",  esc_html__( 'Place Search and Side Area Icons to Separate Sides of Header', 'bridge'),  esc_html__( 'Enabling this option will set search icon to left side of header and side area icon to right side of header', 'bridge'));
        $search_left_sidearea_right_container->addChild("search_left_sidearea_right", $search_left_sidearea_right);

        $scroll_amount_for_sticky_container = new BridgeQodeContainer("scroll_amount_for_sticky_container", "header_bottom_appearance", "", array("regular", "fixed", "fixed_hiding", "fixed fixed_minimal", "fixed_top_header"));
        $panel5->addChild("scroll_amount_for_sticky_container", $scroll_amount_for_sticky_container);
        $scroll_amount_for_sticky = new BridgeQodeField("text", "scroll_amount_for_sticky", "",  esc_html__( 'Scroll Amount for Sticky (px)', 'bridge'),  esc_html__( 'Enter scroll amount (in pixels) for Sticky Menu to appear', 'bridge'), array(), array("col_width" => 3));
        $scroll_amount_for_sticky_container->addChild("scroll_amount_for_sticky", $scroll_amount_for_sticky);

        $hide_initial_sticky = new BridgeQodeField("yesno", "hide_initial_sticky", "no",  esc_html__( 'Hide Header Initially', 'bridge'),  esc_html__( 'Enabling this option will initially hide the header, and it will only be displayed when the user scrolls down the page', 'bridge'));
        $scroll_amount_for_sticky_container->addChild("hide_initial_sticky", $hide_initial_sticky);

        $scroll_amount_for_fixed_hiding_container = new BridgeQodeContainer("scroll_amount_for_fixed_hiding_container", "header_bottom_appearance", "", array("regular", "fixed", "stick", "stick menu_bottom", "stick_with_left_right_menu", "fixed fixed_minimal", "fixed_top_header"));
        $panel5->addChild("scroll_amount_for_fixed_hiding_container", $scroll_amount_for_fixed_hiding_container);
        $scroll_amount_for_fixed_hiding = new BridgeQodeField("text", "scroll_amount_for_fixed_hiding", "",  esc_html__( 'Scroll Amount (px)', 'bridge'),  esc_html__( 'Enter scroll amount (in pixels) for menu to hide', 'bridge'), array(), array("col_width" => 3));
        $scroll_amount_for_fixed_hiding_container->addChild("scroll_amount_for_fixed_hiding", $scroll_amount_for_fixed_hiding);

        $menu_position_container = new BridgeQodeContainer("menu_position_container", "header_bottom_appearance", "", array("stick menu_bottom", "stick_with_left_right_menu", "fixed_hiding", "fixed fixed_minimal", "fixed_top_header"));
        $panel5->addChild("menu_position_container", $menu_position_container);
        $menu_position = new BridgeQodeField("select", "menu_position", "",  esc_html__( 'Menu Position', 'bridge'),  esc_html__( 'Choose a menu position', 'bridge'), array(
            "-1"		=>  esc_html__( 'Right', 'bridge'),
            "center"	=>  esc_html__( 'Center', 'bridge'),
            "left"		=>  esc_html__( 'Left', 'bridge')
        ));
        $menu_position_container->addChild("menu_position", $menu_position);
        $center_logo_image = new BridgeQodeField("yesno", "center_logo_image", "no",  esc_html__( 'Center Logo', 'bridge'),  esc_html__( 'Enabling this option will center logo and position it above menu', 'bridge'), array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_center_logo_image_container"));
        $menu_position_container->addChild("center_logo_image", $center_logo_image);

        $center_logo_image_container = new BridgeQodeContainer("center_logo_image_container", "center_logo_image", "no");
        $menu_position_container->addChild("center_logo_image_container", $center_logo_image_container);

        $search_left_sidearea_right_regular = new BridgeQodeField("yesno", "search_left_sidearea_right_regular", "no",  esc_html__( 'Place Search and Side Area Icons to Separate Sides of Header', 'bridge'),  esc_html__( 'Enabling this option will set search icon to left side of header and side area icon to right side of header', 'bridge'));
        $center_logo_image_container->addChild("search_left_sidearea_right_regular", $search_left_sidearea_right_regular);

        $center_logo_image_animate = new BridgeQodeField("yesno", "center_logo_image_animate", "no",  esc_html__( 'Animate Centered Logo','bridge'),  esc_html__( 'Enabling this option will animate logo upon loading', 'bridge'));
        $center_logo_image_container->addChild("center_logo_image_animate", $center_logo_image_animate);

        $disable_text_shadow_for_sticky_container = new BridgeQodeContainer("disable_text_shadow_for_sticky_container", "header_bottom_appearance", "", array("fixed_top_header", "regular"));
        $panel5->addChild("disable_text_shadow_for_sticky_container", $disable_text_shadow_for_sticky_container);

        $disable_text_shadow_for_sticky = new BridgeQodeField("yesno", "disable_text_shadow_for_sticky", "no",  esc_html__( 'Disable Shadow For Scrolled Header', 'bridge'),  esc_html__( 'Enabling this option will disable shadow for scrolled/sticky header', 'bridge'));
        $disable_text_shadow_for_sticky_container->addChild("disable_text_shadow_for_sticky", $disable_text_shadow_for_sticky);


        $header_height_container = new BridgeQodeContainerNoStyle("header_height_container", "header_bottom_appearance", "", array("fixed_top_header"));
        $panel5->addChild("header_height_container", $header_height_container);
        $group1 = new BridgeQodeGroup( esc_html__( 'Header Height', 'bridge'),  esc_html__( 'Enter header height in pixels', 'bridge'));
        $header_height_container->addChild("group1", $group1);
        $row1 = new BridgeQodeRow();
        $group1->addChild("row1", $row1);
        $header_height = new BridgeQodeField("textsimple", "header_height", "",  esc_html__( 'Initial (px)', 'bridge'),  esc_html__( 'Initial header (px)', 'bridge'));
        $row1->addChild("header_height", $header_height);
        $header_height_scroll = new BridgeQodeField("textsimple", "header_height_scroll", "",  esc_html__( 'After Scroll (px)', 'bridge'),  esc_html__( 'This is some description', 'bridge'), array(), array(), "header_bottom_appearance", array("regular", "stick", "stick menu_bottom", "stick_with_left_right_menu", "fixed_hiding"));
        $row1->addChild("header_height_scroll", $header_height_scroll);
        $header_height_sticky = new BridgeQodeField("textsimple", "header_height_sticky", "",  esc_html__( 'After Scroll (px)', 'bridge'), esc_html__('This is some description', 'bridge'), array(), array(), "header_bottom_appearance", array("regular", "fixed", "fixed_hiding", "fixed fixed_minimal", "fixed_top_header"));
        $row1->addChild("header_height_sticky", $header_height_sticky);
        $header_height_scroll_hidden = new BridgeQodeField("textsimple", "header_height_scroll_hidden", "", esc_html__( 'After Scroll (px)', 'bridge'), esc_html__('This is some description', 'bridge'), array(), array(), "header_bottom_appearance", array("regular", "fixed", "stick", "stick menu_bottom", "stick_with_left_right_menu", "fixed fixed_minimal", "fixed_top_header"));
        $row1->addChild("header_height_scroll_hidden", $header_height_scroll_hidden);

        $header_fixed_top_logo_background_container = new BridgeQodeContainer("header_fixed_top_logo_background_container", "header_bottom_appearance", "", array("regular", "fixed", "fixed fixed_minimal", "stick", "stick menu_bottom", "stick_with_left_right_menu", "fixed_hiding"));
        $panel5->addChild("header_fixed_top_logo_background_container", $header_fixed_top_logo_background_container);

        $header_fixed_top_logo_background = new BridgeQodeField("image", "header_fixed_top_logo_background", "", esc_html__( 'Header Bottom Background Image', 'bridge'), esc_html__( 'Set background image for header bottom', 'bridge'));
        $header_fixed_top_logo_background_container->addChild("header_fixed_top_logo_background", $header_fixed_top_logo_background);

        $header_style = new BridgeQodeField("select", "header_style", "", esc_html__( 'Header Skin','bridge'), esc_html__( 'Choose a header style to make header elements (logo, main menu, side menu button) in that predefined style', 'bridge'), array(
            "-1"	=> "",
            "light"	=> esc_html__( 'Light', 'bridge'),
            "dark"	=> esc_html__( 'Dark', 'bridge')
        ));
        $panel5->addChild("header_style", $header_style);

        $enable_header_style_on_scroll = new BridgeQodeField("yesno", "enable_header_style_on_scroll", "no", esc_html__( 'Enable Header Style on Scroll', 'bridge'), esc_html__( 'Enabling this option, header will change style depending on row settings for dark/light style', 'bridge'));
        $panel5->addChild("enable_header_style_on_scroll", $enable_header_style_on_scroll);

        $group2 = new BridgeQodeGroup(esc_html__( 'Header Background Color', 'bridge'), esc_html__( 'Choose a background color for header area', 'bridge'));
        $panel5->addChild("group2", $group2);
        $row1 = new BridgeQodeRow();
        $group2->addChild("row1", $row1);
        $header_background_color = new BridgeQodeField("colorsimple", "header_background_color", "", esc_html__( 'Initial', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("header_background_color", $header_background_color);
        $header_background_color_scroll = new BridgeQodeField("colorsimple", "header_background_color_scroll", "", esc_html__( 'After Scroll', 'bridge'), esc_html__('This is some description', 'bridge'), array(), array(), "header_bottom_appearance", array("regular", "stick", "stick menu_bottom", "stick_with_left_right_menu", "fixed_top_header"));
        $row1->addChild("header_background_color_scroll", $header_background_color_scroll);
        $header_background_color_sticky = new BridgeQodeField("colorsimple", "header_background_color_sticky", "", esc_html__( 'After Scroll', 'bridge'), esc_html__('This is some description', 'bridge'), array(), array(), "header_bottom_appearance", array("regular", "fixed", "fixed_hiding", "fixed fixed_minimal", "fixed_top_header"));
        $row1->addChild("header_background_color_sticky", $header_background_color_sticky);
        $group3 = new BridgeQodeGroup(esc_html__( 'Header Transparency', 'bridge'), esc_html__( 'Choose a transparency for the header background color (0 = fully transparent, 1 = opaque)', 'bridge'));
        $panel5->addChild("group3", $group3);
        $row1 = new BridgeQodeRow();
        $group3->addChild("row1", $row1);
        $header_background_transparency_initial = new BridgeQodeField("textsimple", "header_background_transparency_initial", "", esc_html__( 'Initial', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("header_background_transparency_initial", $header_background_transparency_initial);
        $header_background_transparency_scroll = new BridgeQodeField("textsimple", "header_background_transparency_scroll", "", esc_html__( 'After Scroll', 'bridge'), esc_html__('This is some description', 'bridge'), array(), array(), "header_bottom_appearance", array("regular", "stick", "stick menu_bottom", "stick_with_left_right_menu", "fixed_top_header"));
        $row1->addChild("header_background_transparency_scroll", $header_background_transparency_scroll);
        $header_background_transparency_sticky = new BridgeQodeField("textsimple", "header_background_transparency_sticky", "", esc_html__( 'After Scroll', 'bridge'), esc_html__('This is some description', 'bridge'), array(), array(), "header_bottom_appearance", array("regular", "fixed", "fixed_hiding", "fixed fixed_minimal", "fixed_top_header"));
        $row1->addChild("header_background_transparency_sticky", $header_background_transparency_sticky);
        $header_bottom_border_color = new BridgeQodeField("color", "header_bottom_border_color", "", esc_html__( 'Header Bottom Border Color', 'bridge'), esc_html__( 'Choose a color for the header bottom border. Note: If color has not been chosen, border bottom will not be displayed','bridge'));
        $panel5->addChild("header_bottom_border_color", $header_bottom_border_color);
        $header_botom_border_transparency = new BridgeQodeField("text", "header_botom_border_transparency", "", esc_html__( 'Header Bottom Border Transparency', 'bridge'), esc_html__( 'Choose a transparency for the header border color (0 = fully transparent, 1 = opaque). Note: Works only if Header Bottom Border Color is filled','bridge'), array(), array("col_width" => 3));
        $panel5->addChild("header_botom_border_transparency", $header_botom_border_transparency);
        $header_botom_border_in_grid = new BridgeQodeField("yesno", "header_botom_border_in_grid", "no", esc_html__( 'Enable Header Bottom Border in Grid', 'bridge'), esc_html__( 'Enabling this option will set header border bottom width in grid', 'bridge'));
        $panel5->addChild("header_botom_border_in_grid", $header_botom_border_in_grid);


        bridge_qode_add_admin_field(array(
            'parent'        => $panel5,
            'type'          => 'yesno',
            'name'          => 'sticky_mobile_header',
            'default_value' => 'no',
            'label'         => esc_html__('Sticky Mobile Header', 'bridge'),
            'description'   => esc_html__('Enable this option if you want sticky mobile header','bridge')
        ));


        $panel10 = new BridgeQodePanel("Menus", "enable_menus_panel", "vertical_area", "yes");
        $headerandfooterPage->addChild("panel10", $panel10);

        $menu_background_color_container = new BridgeQodeContainer("menu_background_color_container", "header_bottom_appearance", "", array("regular", "fixed", "stick", "stick_with_left_right_menu", "fixed fixed_minimal", "fixed_top_header"));
        $panel10->addChild("menu_background_color_container", $menu_background_color_container);

        $menu_background_color = new BridgeQodeField("color", "menu_background_color", "", esc_html__( 'Background Color of 1st Level Menu', 'bridge'), esc_html__( 'Choose a color for the menu background (works only for Fixed Advanced header)', 'bridge'));
        $menu_background_color_container->addChild("menu_background_color", $menu_background_color);

        $dropdown_separator_beetwen_items = new BridgeQodeField("yesno", "dropdown_separator_beetwen_items", "no", esc_html__( 'Dropdown Menu Item Separators', 'bridge'), esc_html__( 'Enabling this option will display horizontal separators between menu items in classic dropdown menu (in case of wide menu, vertical separators are always enabled)','bridge'));
        $panel10->addChild("dropdown_separator_beetwen_items", $dropdown_separator_beetwen_items);
        $dropdown_border_around = new BridgeQodeField("yesno", "dropdown_border_around", "no", esc_html__( 'Border Around Dropdown Menus', 'bridge'), esc_html__( 'Enabling this option will display border around dropdown menus', 'bridge'));
        $panel10->addChild("dropdown_border_around", $dropdown_border_around);
        $header_separator_color = new BridgeQodeField("color", "header_separator_color", "", esc_html__( 'Dropdown Menu Item Separator and Border Color', 'bridge'), esc_html__( 'Choose a color for horizontal (classic dropdown) or vertical (wide dropdown) separators between dropdown menu items. This option also applies to border around dropdown menus','bridge'));
        $panel10->addChild("header_separator_color", $header_separator_color);
        $group4 = new BridgeQodeGroup(esc_html__( 'Dropdown Menu Background', 'bridge'), esc_html__( 'Choose a color and transparency for the main menu background (0 = fully transparent, 1 = opaque)', 'bridge'));
        $panel10->addChild("group4", $group4);
        $row1 = new BridgeQodeRow();
        $group4->addChild("row1", $row1);
        $dropdown_background_color = new BridgeQodeField("colorsimple", "dropdown_background_color", "", esc_html__( 'Background Color', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("dropdown_background_color", $dropdown_background_color);
        $dropdown_background_transparency = new BridgeQodeField("textsimple", "dropdown_background_transparency", "", esc_html__( 'Transparency', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("dropdown_background_transparency", $dropdown_background_transparency);


        bridge_qode_add_admin_field(
            array(
                'name'          => 'enable_wide_manu_background',
                'type'          => 'yesno',
                'default_value' => 'no',
                'label'         => esc_html__( 'Enable Full Width Background for Wide Dropdown Type', 'bridge'),
                'description'   => esc_html__( 'Enabling this option will show full width background for wide dropdown type', 'bridge'),
                'parent'        => $panel10,
                'args'			=> array("dependence" => true,
                    "dependence_hide_on_yes" => "",
                    "dependence_show_on_yes" => "#qodef_enable_wide_menu_container")
            )
        );

        $qode_enable_wide_menu_container = bridge_qode_add_admin_container(
            array(
                'parent'          => $panel10,
                'name'            => 'enable_wide_menu_container',
                'hidden_property' => 'enable_wide_manu_background',
                'hidden_values'  => array('no')
            )
        );

        bridge_qode_add_admin_field(
            array(
                'name'          => 'enable_full_width_wide_menu',
                'type'          => 'yesno',
                'default_value' => 'no',
                'label'         => esc_html__( 'Enable Full Width Menu for Wide Dropdown Type', 'bridge'),
                'description'   => esc_html__( 'Enabling this option will display the wide menu in full width', 'bridge'),
                'parent'        => $qode_enable_wide_menu_container,

            )
        );

        $panel3 = new BridgeQodePanel(esc_html__( 'Qode Search', 'bridge'), "enable_search_panel", "vertical_area", "yes");
        $headerandfooterPage->addChild("panel3", $panel3);
        $enable_search = new BridgeQodeField("yesno", "enable_search", "no", esc_html__( 'Enable Qode Search Bar', 'bridge'), esc_html__( 'This option enables Qode Search functionality (search icon will appear next to main navigation)', 'bridge'), array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_enable_search_container"));
        $panel3->addChild("enable_search", $enable_search);

        $enable_search_container = new BridgeQodeContainer("enable_search_container", "enable_search", "no");
        $panel3->addChild("enable_search_container", $enable_search_container);

        $search_type = new BridgeQodeField("select", "search_type", "search_slides_from_window_top", esc_html__( 'Qode Search Type', 'bridge'), esc_html__( 'Choose a type of Qode search bar (Note: Slide From Header Bottom search type doesn\'t work with transparent header)', 'bridge'), array(
            "search_slides_from_window_top"		=> esc_html__( 'Slide From Window Top', 'bridge'),
            "search_slides_from_header_bottom"	=> esc_html__( 'Slide From Header Bottom', 'bridge'),
            "search_covers_header"				=> esc_html__( 'Search Covers Header', 'bridge'),
            "fullscreen_search"					=> esc_html__( 'Fullscreen Search', 'bridge')
        ),
            array("dependence" => true,
                "hide" => array(
                    "search_slides_from_window_top" => "#qodef_search_animation_container,#qodef_search_cover_header_container,#qodef_search_height_container",
                    "search_covers_header" => "#qodef_search_height_container,#qodef_search_animation_container",
                    "fullscreen_search" => "#qodef_search_height_container,#qodef_search_cover_header_container",
                    "search_slides_from_header_bottom" => "#qodef_search_animation_container,#qodef_search_cover_header_container"
                ),
                "show" => array(
                    "search_slides_from_window_top" => "",
                    "search_slides_from_header_bottom" => "#qodef_search_height_container",
                    "fullscreen_search" => "#qodef_search_animation_container",
                    "search_covers_header" => "#qodef_search_cover_header_container"
                )
            ));
        $enable_search_container->addChild("search_type", $search_type);


        $search_height_container = new BridgeQodeContainer("search_height_container", "search_type", "", array("search_covers_header", "fullscreen_search", "search_slides_from_window_top"));
        $enable_search_container->addChild("search_height_container", $search_height_container);

        $search_height = new BridgeQodeField("text", "search_height", "", esc_html__( 'Search bar height','bridge'), esc_html__( 'Set search bar height (in pixels)', 'bridge'), array(), array("col_width" => 3));
        $search_height_container->addChild("search_height", $search_height);

        $search_animation_container = new BridgeQodeContainer("search_animation_container", "search_type", "", array("search_covers_header", "search_slides_from_header_bottom", "search_slides_from_window_top"));
        $enable_search_container->addChild("search_animation_container", $search_animation_container);

        $search_animation = new BridgeQodeField("select", "search_animation", "fade", esc_html__( 'Fullscreen Search Overlay Animation', 'bridge'), esc_html__( 'Choose animation for fullscreen search overlay', 'bridge'), array(
            "fade"			=> esc_html__( 'Fade', 'bridge'),
            "from_circle"	=> esc_html__( 'Circle appear', 'bridge')
        ));
        $search_animation_container->addChild("search_animation", $search_animation);

        $fullscreen_search_icon_color = new BridgeQodeField('color', 'fullscreen_search_icon_color', '', esc_html__( 'Fullscreen Search Icon Color', 'bridge'), esc_html__( 'Choose color for search icon that appears after input field', 'bridge'));
        $search_animation_container->addChild('fullscreen_search_icon_color', $fullscreen_search_icon_color);

        $search_cover_header_container = new BridgeQodeContainer("search_cover_header_container", "search_type", "", array("fullscreen_search", "search_slides_from_header_bottom", "search_slides_from_window_top"));
        $enable_search_container->addChild("search_cover_header_container", $search_cover_header_container);

        $search_cover_only_bottom_yesno = new BridgeQodeField("yesno", "search_cover_only_bottom_yesno", "no", esc_html__( 'Cover Only Header Bottom', 'bridge'), esc_html__( 'Enable this option to make search cover only header bottom','bridge'));
        $search_cover_header_container->addChild("search_cover_only_bottom_yesno", $search_cover_only_bottom_yesno);

        $search_icon_pack = new BridgeQodeField('iconpack', 'search_icon_pack', 'font_awesome', esc_html__( 'Icon Pack', 'bridge'), esc_html__( 'Choose icon pack for search icon', 'bridge'));
        $enable_search_container->addChild('search_icon_pack', $search_icon_pack);

        $search_background_color = new BridgeQodeField("color", "search_background_color", "", esc_html__( 'Search Background Color', 'bridge'), esc_html__( 'Choose a background color for Qode search bar', 'bridge'));
        $enable_search_container->addChild("search_background_color", $search_background_color);

        $group1 = new BridgeQodeGroup(esc_html__( 'Search Input Text', 'bridge'), esc_html__( 'Define Style for Search input text', 'bridge'));
        $enable_search_container->addChild("group1", $group1);
        $row1 = new BridgeQodeRow();
        $group1->addChild("row1", $row1);
        $search_text_color = new BridgeQodeField("colorsimple", "search_text_color", "", esc_html__('Text Color', 'bridge'), "Choose a text color for Qode search bar");
        $row1->addChild("search_text_color", $search_text_color);
        $search_text_disabled_color = new BridgeQodeField("colorsimple", "search_text_disabled_color", "", esc_html__('Disabled Text Color', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("search_text_disabled_color", $search_text_disabled_color);
        $search_text_fontsize = new BridgeQodeField("textsimple", "search_text_fontsize", "", esc_html__('Font Size (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("search_text_fontsize", $search_text_fontsize);
        $search_text_texttransform = new BridgeQodeField("selectblanksimple", "search_text_texttransform", "", esc_html__('Text Transform', 'bridge'), esc_html__('This is some description', 'bridge'), bridge_qode_get_text_transform_array());
        $row1->addChild("search_text_texttransform", $search_text_texttransform);

        $row2 = new BridgeQodeRow(true);
        $group1->addChild("row2", $row2);
        $search_text_google_fonts = new BridgeQodeField("fontsimple", "search_text_google_fonts", "-1", esc_html__('Font Family', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row2->addChild("search_text_google_fonts", $search_text_google_fonts);
        $search_text_fontstyle = new BridgeQodeField("selectblanksimple", "search_text_fontstyle", "", esc_html__('Font Style', 'bridge'), esc_html__('This is some description', 'bridge'), bridge_qode_get_font_style_array());
        $row2->addChild("search_text_fontstyle", $search_text_fontstyle);
        $search_text_fontweight = new BridgeQodeField("selectblanksimple", "search_text_fontweight", "", esc_html__('Font Weight', 'bridge'), esc_html__('This is some description', 'bridge'), bridge_qode_get_font_weight_array());
        $row2->addChild("search_text_fontweight", $search_text_fontweight);
        $search_text_letterspacing = new BridgeQodeField("textsimple", "search_text_letterspacing", "", esc_html__('Letter Spacing (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row2->addChild("search_text_letterspacing", $search_text_letterspacing);

        $group5 = new BridgeQodeGroup( esc_html__('Search Label Text', 'bridge'),  esc_html__('Define Style for Search label text', 'bridge'));
        $enable_search_container->addChild("group5", $group5);
        $row1 = new BridgeQodeRow();
        $group5->addChild("row1", $row1);
        $search_label_text_color = new BridgeQodeField("colorsimple", "search_label_text_color", "", esc_html__('Text Color','bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("search_label_text_color", $search_label_text_color);
        $search_label_text_fontsize = new BridgeQodeField("textsimple", "search_label_text_fontsize", "", esc_html__('Font Size (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("search_label_text_fontsize", $search_label_text_fontsize);
        $search_label_text_texttransform = new BridgeQodeField("selectblanksimple", "search_label_text_texttransform", "", esc_html__('Text Transform', 'bridge'), esc_html__('This is some description', 'bridge'), bridge_qode_get_text_transform_array());
        $row1->addChild("search_label_text_texttransform", $search_label_text_texttransform);

        $row2 = new BridgeQodeRow(true);
        $group5->addChild("row2", $row2);
        $search_label_text_google_fonts = new BridgeQodeField("fontsimple", "search_label_text_google_fonts", "-1", esc_html__('Font Family', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row2->addChild("search_label_text_google_fonts", $search_label_text_google_fonts);
        $search_label_text_fontstyle = new BridgeQodeField("selectblanksimple", "search_label_text_fontstyle", "", esc_html__('Font Style', 'bridge'), esc_html__('This is some description', 'bridge'), bridge_qode_get_font_style_array());
        $row2->addChild("search_label_text_fontstyle", $search_label_text_fontstyle);
        $search_label_text_fontweight = new BridgeQodeField("selectblanksimple", "search_label_text_fontweight", "", esc_html__('Font Weight', 'bridge'), esc_html__('This is some description', 'bridge'), bridge_qode_get_font_weight_array());
        $row2->addChild("search_label_text_fontweight", $search_label_text_fontweight);
        $search_label_text_letterspacing = new BridgeQodeField("textsimple", "search_label_text_letterspacing", "", esc_html__('Letter Spacing (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row2->addChild("search_label_text_letterspacing", $search_label_text_letterspacing);

        $group7 = new BridgeQodeGroup( esc_html__('Initial Search Icon', 'bridge'),  esc_html__('Define size for Search icon in header', 'bridge'));
        $enable_search_container->addChild("group7", $group7);
        $row1 = new BridgeQodeRow();
        $group7->addChild("row1", $row1);
        $header_search_icon_size = new BridgeQodeField("textsimple", "header_search_icon_size", "",  esc_html__('Icon Size', 'bridge'),  esc_html__('Set size for icon (ix pixels)', 'bridge'), array(), array("col_width" => 3));
        $row1->addChild("header_search_icon_size", $header_search_icon_size);

        $group2 = new BridgeQodeGroup( esc_html__('Search Icons', 'bridge'),  esc_html__('Define Style for icons in Search bar', 'bridge'));
        $enable_search_container->addChild("group2", $group2);
        $row1 = new BridgeQodeRow();
        $group2->addChild("row1", $row1);
        $search_icon_color = new BridgeQodeField("colorsimple", "search_icon_color", "", esc_html__('Color', 'bridge'), "Choose icon color for Qode search bar");
        $row1->addChild("search_icon_color", $search_icon_color);
        $search_icon_hover_color = new BridgeQodeField("colorsimple", "search_icon_hover_color", "", esc_html__('Hover Color', 'bridge'), "Choose icon hover color for Qode search bar");
        $row1->addChild("search_icon_hover_color", $search_icon_hover_color);
        $search_icon_disabled_color = new BridgeQodeField("colorsimple", "search_icon_disabled_color", "", esc_html__('Disabled Color', 'bridge'), "Choose icon disabled color for Qode search bar");
        $row1->addChild("search_icon_disabled_color", $search_icon_disabled_color);
        $search_icon_size = new BridgeQodeField("textsimple", "search_icon_size", "", esc_html__('Size', 'bridge'), esc_html__('Set size for icon (ix pixels)','bridge'), array(), array("col_width" => 3));
        $row1->addChild("search_icon_size", $search_icon_size);

        $group4 = new BridgeQodeGroup(esc_html__('Search Close Icon', 'bridge'), esc_html__('Define style for Search close icon', 'bridge'));
        $enable_search_container->addChild("group4", $group4);
        $row1 = new BridgeQodeRow();
        $group4->addChild("row1", $row1);
        $search_close_color = new BridgeQodeField("colorsimple", "search_close_color", "", esc_html__('Color', 'bridge'), esc_html__('Choose color for search close icon', 'bridge'));
        $row1->addChild("search_close_color", $search_close_color);
        $search_close_hover_color = new BridgeQodeField("colorsimple", "search_close_hover_color", "", esc_html__('Hover Color', 'bridge'), esc_html__('Choose hover color for search close icon', 'bridge'));
        $row1->addChild("search_close_hover_color", $search_close_hover_color);
        $search_close_size = new BridgeQodeField("textsimple", "search_close_size", "", esc_html__('Size', 'bridge'), esc_html__('Choose size for search close icon', 'bridge'));
        $row1->addChild("search_close_size", $search_close_size);

        $group3 = new BridgeQodeGroup(esc_html__('Search Bottom Border', 'bridge'), esc_html__('Define style for Search text input bottom border (for Fullscreen search type)', 'bridge'));
        $enable_search_container->addChild("group3", $group3);
        $row1 = new BridgeQodeRow();
        $group3->addChild("row1", $row1);
        $search_border_color = new BridgeQodeField("colorsimple", "search_border_color", "", esc_html__('Border Color','bridge'), esc_html__('Choose border color for search text input', 'bridge'));
        $row1->addChild("search_border_color", $search_border_color);
        $search_border_focus_color = new BridgeQodeField("colorsimple", "search_border_focus_color", "", esc_html__('Border Focus Color', 'bridge'), esc_html__('Choose focus color for search text input', 'bridge'));
        $row1->addChild("search_border_focus_color", $search_border_focus_color);


        $panel11 = new BridgeQodePanel("Side Area", "enable_side_area_panel", "vertical_area", "yes");
        $headerandfooterPage->addChild("panel11", $panel11);

        $enable_side_area = new BridgeQodeField("yesno", "enable_side_area", "yes", "Enable Side Area", "This option enables a side area to be opened from main menu navigation", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_enable_side_area_container"));
        $panel11->addChild("enable_side_area", $enable_side_area);

        $enable_side_area_container = new BridgeQodeContainer("enable_side_area_container", "enable_side_area", "no");
        $panel11->addChild("enable_side_area_container", $enable_side_area_container);


        $side_area_type = new BridgeQodeField("select", "side_area_type", "side_area_uncovered_from_content", esc_html__('Side Area Type','bridge'), esc_html__('Choose a type of Side Area', 'bridge'), array(
            "side_area_uncovered_from_content"	=> esc_html__('Uncovered from Content', 'bridge'),
            "side_menu_slide_from_right"		=> esc_html__('Slide from Right Over Content', 'bridge'),
            "side_menu_slide_with_content"		=> esc_html__('Slide from Right With Content', 'bridge')
        ),
            array("dependence" => true,
                "hide" => array(
                    "side_area_uncovered_from_content" => "#qodef_side_area_width_container,#qodef_side_area_slide_with_content_container",
                    "side_menu_slide_from_right" => "#qodef_side_area_slide_with_content_container",
                    "side_menu_slide_with_content" => "#qodef_side_area_width_container"

                ),
                "show" => array(
                    "side_area_uncovered_from_content" => "",
                    "side_menu_slide_from_right" => "#qodef_side_area_width_container",
                    "side_menu_slide_with_content" => "#qodef_side_area_slide_with_content_container"
                )
            ));

        $enable_side_area_container->addChild("side_area_type", $side_area_type);

        //init icon pack hide and show array. It will be populated dinamically from collections array
        $side_area_icon_pack_hide_array = array();
        $side_area_icon_pack_show_array = array();

        //do we have some collection added in collections array?
        if (is_array(bridge_qode_icon_collections()->iconCollections) && count(bridge_qode_icon_collections()->iconCollections)) {
            //get collections params array. It will contain values of 'param' property for each collection
            $side_area_icon_collections_params = bridge_qode_icon_collections()->getIconCollectionsParams();

            //foreach collection generate hide and show array
            foreach (bridge_qode_icon_collections()->iconCollections as $dep_collection_key => $dep_collection_object) {
                $side_area_icon_pack_hide_array[$dep_collection_key] = '';

                //we need to include only current collection in show string as it is the only one that needs to show
                $side_area_icon_pack_show_array[$dep_collection_key] = '#qodef_side_area_icon_' . $dep_collection_object->param . '_container';

                //for all collections param generate hide string
                foreach ($side_area_icon_collections_params as $side_area_icon_collections_param) {
                    //we don't need to include current one, because it needs to be shown, not hidden
                    if ($side_area_icon_collections_param !== $dep_collection_object->param) {
                        $side_area_icon_pack_hide_array[$dep_collection_key] .= '#qodef_side_area_icon_' . $side_area_icon_collections_param . '_container,';
                        $side_area_icon_pack_hide_array[$dep_collection_key] .= '#qodef_side_area_icon_svg_container,';
                    }
                }

                //remove remaining ',' character
                $side_area_icon_pack_hide_array[$dep_collection_key] = rtrim($side_area_icon_pack_hide_array[$dep_collection_key], ',');
            }

            $side_area_icon_pack_show_array['svg_path'] = '#qodef_side_area_icon_svg_container';

            $side_area_icon_pack_hide_array['svg_path'] = '';

            foreach ($side_area_icon_collections_params as $side_area_icon_collections_param) {
                $side_area_icon_pack_hide_array['svg_path'] .= '#qodef_side_area_icon_' . $side_area_icon_collections_param . '_container,';
            }

            //remove remaining ',' character
            $side_area_icon_pack_hide_array['svg_path'] = rtrim($side_area_icon_pack_hide_array['svg_path'], ',');

        }

        $side_area_icon_pack_options = array_merge(bridge_qode_icon_collections()->getIconCollections(), ['svg_path' => esc_html__('SVG Path', 'bridge')]);

        $side_area_button_icon_pack = new BridgeQodeField(
            "select",
            "side_area_button_icon_pack",
            "font_awesome",
            esc_html__('Side Area Button Icon Pack', 'bridge'),
            esc_html__('Choose icon pack for side area button', 'bridge'),
            $side_area_icon_pack_options,
            array(
                "dependence" => true,
                "hide" => $side_area_icon_pack_hide_array,
                "show" => $side_area_icon_pack_show_array
            ));

        $enable_side_area_container->addChild("side_area_button_icon_pack", $side_area_button_icon_pack);

        if (is_array(bridge_qode_icon_collections()->iconCollections) && count(bridge_qode_icon_collections()->iconCollections)) {
            //foreach icon collection we need to generate separate container that will have dependency set
            //it will have one field inside with icons dropdown
            foreach (bridge_qode_icon_collections()->iconCollections as $collection_key => $collection_object) {
                $icons_array = $collection_object->getIconsArray();

                if( $collection_key == 'kiko' ){
                    $icons_array = array_flip( $icons_array );
                }

                //get icon collection keys (keys from collections array, e.g 'font_awesome', 'font_elegant' etc.)
                $icon_collections_keys = bridge_qode_icon_collections()->getIconCollectionsKeys();

                //unset current one, because it doesn't have to be included in dependency that hides icon container
                unset($icon_collections_keys[array_search($collection_key, $icon_collections_keys)]);

                $side_area_icon_hide_values = $icon_collections_keys;
                $side_area_icon_hide_values[] = 'svg_path';
                $side_area_icon_container = new BridgeQodeContainer("side_area_icon_" . $collection_object->param . "_container", "side_area_button_icon_pack", "", $side_area_icon_hide_values);
                $side_area_button_icon = new BridgeQodeField("select", "side_area_icon_" . $collection_object->param, "fa-bars", esc_html__('Side Area Icon', 'bridge'), esc_html__('Choose Side Area Icon', 'bridge'), $icons_array, array("col_width" => 3));
                $side_area_icon_container->addChild("side_area_icon_" . $collection_object->param, $side_area_button_icon);

                $enable_side_area_container->addChild("side_area_icon_" . $collection_object->param . "_container", $side_area_icon_container);
            }

        }

        //sidearea svg options map start

        $icon_collections_keys = bridge_qode_icon_collections()->getIconCollectionsKeys();

        $side_area_icon_svg_container = new BridgeQodeContainer("side_area_icon_svg_container","side_area_button_icon_pack", "", $icon_collections_keys);

        $side_area_button_icon_svg_opener = new BridgeQodeField("textarea", "side_area_icon_svg_opener", "", esc_html__('Side Area SVG Opener Path', 'bridge'), esc_html__('Enter your Side Area icon SVG path here. Please remove version and id attributes from your SVG path because of HTML validation', 'bridge'), "", array("col_width" => 3));

        $side_area_icon_svg_container->addChild("side_area_icon_svg_opener", $side_area_button_icon_svg_opener);

        $enable_side_area_container->addChild("side_area_icon_svg_opener", $side_area_icon_svg_container);

        //sidearea svg options map end

        $side_area_width_container = new BridgeQodeContainer("side_area_width_container", "side_area_type", "", array("side_menu_slide_with_content", "side_area_uncovered_from_content"));
        $enable_side_area_container->addChild("side_area_width_container", $side_area_width_container);

        $side_area_width = new BridgeQodeField("text", "side_area_width", "", esc_html__('Side Area Width', 'bridge'), esc_html__('Enter a width for Side Area (in percentages, enter more than 30)', 'bridge'), array(), array("col_width" => 3));
        $side_area_width_container->addChild("side_area_width", $side_area_width);

        $side_area_content_overlay_color = new BridgeQodeField("color", "side_area_content_overlay_color", "", esc_html__('Content Overlay Background Color', 'bridge'), esc_html__('Choose a background color for a content overlay', 'bridge'), array(), array("col_width" => 3));
        $side_area_width_container->addChild("side_area_content_overlay_color", $side_area_content_overlay_color);

        $side_area_content_overlay_opacity = new BridgeQodeField("text", "side_area_content_overlay_opacity", "", esc_html__('Content Overlay Background Transparency', 'bridge'), esc_html__('Choose a transparency for the content overlay background color (0 = fully transparent, 1 = opaque)', 'bridge'), array(), array("col_width" => 3));
        $side_area_width_container->addChild("side_area_content_overlay_opacity", $side_area_content_overlay_opacity);

        $side_area_slide_with_content_container = new BridgeQodeContainer("side_area_slide_with_content_container", "side_area_type", "", array("side_menu_slide_from_right", "side_area_uncovered_from_content"));
        $enable_side_area_container->addChild("side_area_slide_with_content_container", $side_area_slide_with_content_container);

        $side_area_slide_with_content_width = new BridgeQodeField("select", "side_area_slide_with_content_width", "width_470", esc_html__('Side Area Width', 'bridge'), esc_html__('Choose width for Side Area', 'bridge'), array(
            "width_270" => esc_html__('270px', 'bridge'),
            "width_370" => esc_html__('370px', 'bridge'),
            "width_470" => esc_html__('470px', 'bridge')
        ));
        $side_area_slide_with_content_container->addChild("side_area_slide_with_content_width", $side_area_slide_with_content_width);

        $side_area_title = new BridgeQodeField("text", "side_area_title", "", esc_html__('Side Area Title', 'bridge'), esc_html__('Enter a title to appear in Side Area', 'bridge'));
        $enable_side_area_container->addChild("side_area_title", $side_area_title);

        $side_area_background_color = new BridgeQodeField("color", "side_area_background_color", "", esc_html__('Background Color', 'bridge'), esc_html__('Choose a background color for Side Area', 'bridge'));
        $enable_side_area_container->addChild("side_area_background_color", $side_area_background_color);

        $group5 = new BridgeQodeGroup(esc_html__('Padding', 'bridge'), esc_html__('Define padding for Side Area' ,'bridge'));
        $enable_side_area_container->addChild("group5", $group5);
        $row1 = new BridgeQodeRow(true);
        $group5->addChild("row1", $row1);
        $side_area_padding_top = new BridgeQodeField("textsimple", "side_area_padding_top", "", esc_html__('Top Padding (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("side_area_padding_top", $side_area_padding_top);
        $side_area_padding_right = new BridgeQodeField("textsimple", "side_area_padding_right", "", esc_html__('Right Padding (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("side_area_padding_right", $side_area_padding_right);
        $side_area_padding_bottom = new BridgeQodeField("textsimple", "side_area_padding_bottom", "", esc_html__('Bottom Padding (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("side_area_padding_bottom", $side_area_padding_bottom);
        $side_area_padding_left = new BridgeQodeField("textsimple", "side_area_padding_left", "", esc_html__('Left Padding (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("side_area_padding_left", $side_area_padding_left);

        $side_area_alignment = new BridgeQodeField("selectblank", "side_area_alignment", "", "Side Area Alignment", esc_html__('Choose alignment for Side Area content', 'bridge'), array(
            "left"		=> esc_html__('Left', 'bridge'),
            "center"	=> esc_html__('Center', 'bridge'),
            "right"		=> esc_html__('Right', 'bridge')

        ));
        $enable_side_area_container->addChild("side_area_alignment", $side_area_alignment);

        $group1 = new BridgeQodeGroup(esc_html__('Text', 'bridge'), esc_html__('Define styles for Side Area text', 'bridge'));
        $enable_side_area_container->addChild("group1", $group1);

        $row1 = new BridgeQodeRow();
        $group1->addChild("row1", $row1);

        $side_area_text_color = new BridgeQodeField("colorsimple", "side_area_text_color", "", esc_html__('Text Color', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("side_area_text_color", $side_area_text_color);

        $side_area_text_hover_color = new BridgeQodeField("colorsimple", "side_area_text_hover_color", "", esc_html__('Text Hover Color', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("side_area_text_hover_color", $side_area_text_hover_color);

        $side_area_text_lineheight = new BridgeQodeField("textsimple", "side_area_text_lineheight", "", esc_html__('Line Height (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("side_area_text_lineheight", $side_area_text_lineheight);

        $side_area_text_texttransform = new BridgeQodeField("selectblanksimple", "side_area_text_texttransform", "", esc_html__('Text Transform', 'bridge'), esc_html__('This is some description', 'bridge'), bridge_qode_get_text_transform_array());
        $row1->addChild("side_area_text_texttransform", $side_area_text_texttransform);

        $row2 = new BridgeQodeRow(true);
        $group1->addChild("row2", $row2);

        $side_area_text_font_size = new BridgeQodeField("textsimple", "side_area_text_font_size", "", esc_html__('Font Size (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row2->addChild("side_area_text_font_size", $side_area_text_font_size);

        $side_area_text_letter_spacing = new BridgeQodeField("textsimple", "side_area_text_letter_spacing", "", esc_html__('Letter Spacing (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row2->addChild("side_area_text_letter_spacing", $side_area_text_letter_spacing);

        $side_area_text_font_weight = new BridgeQodeField("selectblanksimple", "side_area_text_font_weight", "", esc_html__('Font Weight', 'bridge'), esc_html__('This is some description', 'bridge'), bridge_qode_get_font_weight_array());
        $row2->addChild("side_area_text_font_weight", $side_area_text_font_weight);


        $group2 = new BridgeQodeGroup(esc_html__('Title', 'bridge'), esc_html__('Define styles for Side Area title', 'bridge'));
        $enable_side_area_container->addChild("group2", $group2);

        $row1 = new BridgeQodeRow();
        $group2->addChild("row1", $row1);

        $side_area_title_color = new BridgeQodeField("colorsimple", "side_area_title_color", "", esc_html__('Text Color', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("side_area_title_color", $side_area_title_color);

        $row2 = new BridgeQodeRow(true);
        $group2->addChild("row2", $row2);

        $side_area_title_font_size = new BridgeQodeField("textsimple", "side_area_title_font_size", "", esc_html__('Font Size (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row2->addChild("side_area_title_font_size", $side_area_title_font_size);

        $side_area_title_letter_spacing = new BridgeQodeField("textsimple", "side_area_title_letter_spacing", "", esc_html__('Letter Spacing (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row2->addChild("side_area_title_letter_spacing", $side_area_title_letter_spacing);

        $side_area_title_font_weight = new BridgeQodeField("selectblanksimple", "side_area_title_font_weight", "", esc_html__('Font Weight', 'bridge'), esc_html__('This is some description', 'bridge'), bridge_qode_get_font_weight_array());
        $row2->addChild("side_area_title_font_weight", $side_area_title_font_weight);


        $side_area_close_icon_style = new BridgeQodeField("select", "side_area_close_icon_style", "", esc_html__('Close Icon Style', 'bridge'), esc_html__('Choose a style for close ("X") button', 'bridge'), array(
            "-1"	=> '',
            "light" => esc_html__('Light', 'bridge'),
            "dark"	=> esc_html__('Dark', 'bridge')
        ));
        $enable_side_area_container->addChild("side_area_close_icon_style", $side_area_close_icon_style);


        $panel12 = new BridgeQodePanel(esc_html__('Fullscreen Menu', 'bridge'), "enable_popup_menu_panel", "vertical_area", "yes");
        $headerandfooterPage->addChild("panel12", $panel12);
        $enable_popup_menu = new BridgeQodeField("yesno", "enable_popup_menu", "no", esc_html__('Enable Fullscreen Menu', 'bridge'), esc_html__('This option enables a fullscreen menu to be opened from main menu navigation', 'bridge'), array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_enable_popup_menu_container"));
        $panel12->addChild("enable_popup_menu", $enable_popup_menu);
        $enable_popup_menu_container = new BridgeQodeContainer("enable_popup_menu_container", "enable_popup_menu", "no");
        $panel12->addChild("enable_popup_menu_container", $enable_popup_menu_container);

        $popup_menu_animation_style = new BridgeQodeField("select", "popup_menu_animation_style", "", esc_html__('Fullscreen Menu Overlay Animation', 'bridge'), esc_html__('Choose animation type for fullscreen menu overlay', 'bridge'), array(
            '' => '',
            'popup_menu_push_text_right'	=> esc_html__('Fade Push Text Right', 'bridge'),
            'popup_menu_push_text_top'		=> esc_html__('Fade Push Text Top', 'bridge'),
            'popup_menu_text_scaledown'		=> esc_html__('Fade Text Scaledown', 'bridge')
        ));
        $enable_popup_menu_container->addChild("popup_menu_animation_style", $popup_menu_animation_style);

        $logo_image_popup = new BridgeQodeField("image", "logo_image_popup", "", esc_html__('Logo image for Fullscreen menu', 'bridge'), esc_html__('Choose a logo for Fullscreen Menu', 'bridge'));
        $enable_popup_menu_container->addChild("logo_image_popup", $logo_image_popup);

        $popup_menu_icon_pack_hide_array = array();
        $popup_menu_icon_pack_show_array = array();

        $popup_menu_icon_pack_show_array['svg_path'] = '#qodef_popup_menu_icon_svg_container';
        $popup_menu_icon_pack_hide_array['font_awesome'] = '#qodef_popup_menu_icon_svg_container';
        $popup_menu_icon_pack_hide_array['font_elegant'] = '#qodef_popup_menu_icon_svg_container';

        $font_icon_pack_icon_popup = new BridgeQodeField("select", "font_icon_pack_icon_popup", "", esc_html__('Menu Icon Style', 'bridge'), esc_html__('Choose a menu icon style for Fullscreen Menu', 'bridge'), array(
            ""				=> esc_html__('Default', 'bridge'),
            "font_awesome"	=> esc_html__('Font Awesome', 'bridge'),
            "font_elegant"	=> esc_html__('Font Elegant', 'bridge'),
            "kiko"	        => esc_html__('Kiko', 'bridge'),
            "svg_path"      => esc_html__('SVG Path', 'bridge')
        ), array(
            "dependence" => true,
            "hide" => $popup_menu_icon_pack_hide_array,
            "show" => $popup_menu_icon_pack_show_array
        ));

        $enable_popup_menu_container->addChild("font_icon_pack_icon_popup", $font_icon_pack_icon_popup);

        $popup_menu_icon_svg_container = new BridgeQodeContainer("popup_menu_icon_svg_container","font_icon_pack_icon_popup", "", array('', 'font_awesome', 'font_elegant' ));

        $popup_menu_button_icon_svg_opener = new BridgeQodeField("textarea", "popup_menu_icon_svg_opener", "", esc_html__('Fullscreen Menu Opener SVG Opener Path', 'bridge'), esc_html__('Enter your Fullscreen Menu Opener icon SVG path here. Please remove version and id attributes from your SVG path because of HTML validation', 'bridge'), "", array("col_width" => 3));
        $popup_menu_button_icon_svg_closer = new BridgeQodeField("textarea", "popup_menu_icon_svg_closer", "", esc_html__('Fullscreen Menu Closer SVG Opener Path', 'bridge'), esc_html__('Enter your Fullscreen Menu Closer icon SVG path here. Please remove version and id attributes from your SVG path because of HTML validation', 'bridge'), "", array("col_width" => 3));

        $popup_menu_icon_svg_container->addChild("side_area_icon_svg_opener", $popup_menu_button_icon_svg_opener);
        $popup_menu_icon_svg_container->addChild("side_area_icon_svg_closer", $popup_menu_button_icon_svg_closer);

        $enable_popup_menu_container->addChild("side_area_icon_svg_opener", $popup_menu_icon_svg_container);




        $group1 = new BridgeQodeGroup(esc_html__('1st Level Style', 'bridge'), esc_html__('Define styles for 1st level in Fullscreen Menu', 'bridge'));
        $enable_popup_menu_container->addChild("group1", $group1);
        $row1 = new BridgeQodeRow();
        $group1->addChild("row1", $row1);
        $popup_menu_color = new BridgeQodeField("colorsimple", "popup_menu_color", "", esc_html__('Text Color', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("popup_menu_color", $popup_menu_color);
        $popup_menu_hover_color = new BridgeQodeField("colorsimple", "popup_menu_hover_color", "", esc_html__('Text Hover Color', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("popup_menu_hover_color", $popup_menu_hover_color);
        $popup_menu_hover_background_color = new BridgeQodeField("colorsimple", "popup_menu_hover_background_color", "", esc_html__('Background Hover Color', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("popup_menu_hover_background_color", $popup_menu_hover_background_color);

        $row2 = new BridgeQodeRow(true);
        $group1->addChild("row2", $row2);
        $popup_menu_google_fonts = new BridgeQodeField("fontsimple", "popup_menu_google_fonts", "-1", esc_html__('Font Family', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row2->addChild("popup_menu_google_fonts", $popup_menu_google_fonts);
        $popup_menu_fontsize = new BridgeQodeField("textsimple", "popup_menu_fontsize", "", esc_html__('Font Size (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row2->addChild("popup_menu_fontsize", $popup_menu_fontsize);
        $popup_menu_lineheight = new BridgeQodeField("textsimple", "popup_menu_lineheight", "", esc_html__('Line Height (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row2->addChild("popup_menu_lineheight", $popup_menu_lineheight);
        $popup_menu_texttransform = new BridgeQodeField("selectblanksimple", "popup_menu_texttransform", "", esc_html__('Text Transform', 'bridge'), esc_html__('This is some description', 'bridge'), bridge_qode_get_text_transform_array());
        $row2->addChild("popup_menu_texttransform", $popup_menu_texttransform);
        $row3 = new BridgeQodeRow(true);
        $group1->addChild("row3", $row3);
        $popup_menu_fontstyle = new BridgeQodeField("selectblanksimple", "popup_menu_fontstyle", "", esc_html__('Font Style', 'bridge'), esc_html__('This is some description', 'bridge'), bridge_qode_get_font_style_array());
        $row3->addChild("popup_menu_fontstyle", $popup_menu_fontstyle);
        $popup_menu_fontweight = new BridgeQodeField("selectblanksimple", "popup_menu_fontweight", "", esc_html__('Font Weight', 'bridge'), esc_html__('This is some description', 'bridge'), bridge_qode_get_font_weight_array());
        $row3->addChild("popup_menu_fontweight", $popup_menu_fontweight);
        $popup_menu_letterspacing = new BridgeQodeField("textsimple", "popup_menu_letterspacing", "", esc_html__('Letter Spacing (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row3->addChild("popup_menu_letterspacing", $popup_menu_letterspacing);

        $group2 = new BridgeQodeGroup("2nd Level Style", "Define styles for 2nd level in Fullscreen Menu");
        $enable_popup_menu_container->addChild("group2", $group2);
        $row1 = new BridgeQodeRow();
        $group2->addChild("row1", $row1);
        $popup_menu_color_2nd = new BridgeQodeField("colorsimple", "popup_menu_color_2nd", "", esc_html__('Text Color', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("popup_menu_color_2nd", $popup_menu_color_2nd);
        $popup_menu_hover_color_2nd = new BridgeQodeField("colorsimple", "popup_menu_hover_color_2nd", "", esc_html__('Text Hover Color', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("popup_menu_hover_color_2nd", $popup_menu_hover_color_2nd);
        $popup_menu_hover_background_color_2nd = new BridgeQodeField("colorsimple", "popup_menu_hover_background_color_2nd", "", esc_html__('Background Hover Color', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("popup_menu_hover_background_color_2nd", $popup_menu_hover_background_color_2nd);

        $row2 = new BridgeQodeRow(true);
        $group2->addChild("row2", $row2);
        $popup_menu_google_fonts_2nd = new BridgeQodeField("fontsimple", "popup_menu_google_fonts_2nd", "-1", esc_html__('Font Family', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row2->addChild("popup_menu_google_fonts_2nd", $popup_menu_google_fonts_2nd);
        $popup_menu_fontsize_2nd = new BridgeQodeField("textsimple", "popup_menu_fontsize_2nd", "", esc_html__('Font Size (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row2->addChild("popup_menu_fontsize_2nd", $popup_menu_fontsize_2nd);
        $popup_menu_lineheight_2nd = new BridgeQodeField("textsimple", "popup_menu_lineheight_2nd", "", esc_html__('Line Height (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row2->addChild("popup_menu_lineheight_2nd", $popup_menu_lineheight_2nd);
        $popup_menu_texttransform_2nd = new BridgeQodeField("selectblanksimple", "popup_menu_texttransform_2nd", "", esc_html__('Text Transform', 'bridge'), esc_html__('This is some description', 'bridge'), bridge_qode_get_text_transform_array());
        $row2->addChild("popup_menu_texttransform_2nd", $popup_menu_texttransform_2nd);

        $row3 = new BridgeQodeRow(true);
        $group2->addChild("row3", $row3);
        $popup_menu_fontstyle_2nd = new BridgeQodeField("selectblanksimple", "popup_menu_fontstyle_2nd", "", esc_html__('Font Style', 'bridge'), esc_html__('This is some description', 'bridge'), bridge_qode_get_font_style_array());
        $row3->addChild("popup_menu_fontstyle_2nd", $popup_menu_fontstyle_2nd);
        $popup_menu_fontweight_2nd = new BridgeQodeField("selectblanksimple", "popup_menu_fontweight_2nd", "", esc_html__('Font Weight', 'bridge'), esc_html__('This is some description', 'bridge'), bridge_qode_get_font_weight_array());
        $row3->addChild("popup_menu_fontweight_2nd", $popup_menu_fontweight_2nd);
        $popup_menu_letterspacing_2nd = new BridgeQodeField("textsimple", "popup_menu_letterspacing_2nd", "", esc_html__('Letter Spacing (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row3->addChild("popup_menu_letterspacing_2nd", $popup_menu_letterspacing_2nd);

        $group3 = new BridgeQodeGroup(esc_html__('Background', 'bridge'), esc_html__('Select a background color and transparency for Fullscreen Menu (0 = fully transparent, 1 = opaque)','bridge'));
        $enable_popup_menu_container->addChild("group3", $group3);
        $row1 = new BridgeQodeRow();
        $group3->addChild("row1", $row1);
        $popup_menu_background_color = new BridgeQodeField("colorsimple", "popup_menu_background_color", "", esc_html__('Color', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("popup_menu_background_color", $popup_menu_background_color);
        $popup_menu_background_transparency = new BridgeQodeField("textsimple", "popup_menu_background_transparency", "", esc_html__('Transparency', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("popup_menu_background_transparency", $popup_menu_background_transparency);

        bridge_qode_add_admin_field(array(
            'parent'        => $enable_popup_menu_container,
            'type'          => 'image',
            'name'          => 'popup_menu_background_image',
            'label'         => esc_html__('Background Image','bridge'),
            'description'   => esc_html__('Select background image for full screen menu', 'bridge')
        ));

        $group4 = new BridgeQodeGroup(esc_html__('Close Button Color', 'bridge'), esc_html__('Select a color for close button', 'bridge'));
        $enable_popup_menu_container->addChild("group4", $group4);
        $row2 = new BridgeQodeRow();
        $group4->addChild("row2", $row2);
        $popup_menu_close_button_color = new BridgeQodeField("colorsimple", "popup_menu_close_button_color", "", esc_html__('Color', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row2->addChild("popup_menu_close_button_color", $popup_menu_close_button_color);


        $panel2 = new BridgeQodePanel("Header Top", "header_top_panel", "vertical_area", "yes");
        $headerandfooterPage->addChild("panel2", $panel2);
        $header_top_area = new BridgeQodeField("yesno", "header_top_area", "no", esc_html__('Show Header Top Area', 'bridge'), esc_html__('Enabling this option will show Header Top area (this setting applies to Header Left and Header Right widgets)', 'bridge'), array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_header_top_area_container"));
        $panel2->addChild("header_top_area", $header_top_area);
        $header_top_area_container = new BridgeQodeContainer("header_top_area_container", "header_top_area", "no");
        $panel2->addChild("header_top_area_container", $header_top_area_container);

        $header_top_scroll_container = new BridgeQodeContainer("header_top_scroll_container", "header_bottom_appearance", "", array("fixed_top_header"));
        $header_top_area_container->addChild("header_top_scroll_container", $header_top_scroll_container);

        $header_top_area_scroll = new BridgeQodeField("yesno", "header_top_area_scroll", "no", esc_html__('Hide on Scroll', 'bridge'), esc_html__('Enabling this option will hide Header Top on scroll (if fixed header types are chosen)', 'bridge'));
        $header_top_scroll_container->addChild("header_top_area_scroll", $header_top_area_scroll);

        $hide_top_bar_on_mobile = new BridgeQodeField("yesno", "hide_top_bar_on_mobile", "no", esc_html__('Hide Top Bar on Mobile Header', 'bridge'), esc_html__('Enabling this option you will hide top header area when mobile header is active', 'bridge'));
        $header_top_scroll_container->addChild("hide_top_bar_on_mobile", $hide_top_bar_on_mobile);

        $header_top_height_container = new BridgeQodeContainer("header_top_height_container", "header_bottom_appearance", "", array("regular", "fixed", "fixed_hiding", "fixed fixed_minimal", "stick", "stick menu_bottom", "stick_with_left_right_menu"));
        $header_top_area_container->addChild("header_top_height_container", $header_top_height_container);

        $header_top_height = new BridgeQodeField("text", "header_top_height", "", esc_html__('Header Top Height', 'bridge'), esc_html__('Enter height for header top', 'bridge'), array(), array("col_width" => 3));
        $header_top_height_container->addChild("header_top_height", $header_top_height);

        $header_top_background_color = new BridgeQodeField("color", "header_top_background_color", "", esc_html__('Background color', 'bridge'), esc_html__('Choose a background color for Header Top area', 'bridge'));
        $header_top_area_container->addChild("header_top_background_color", $header_top_background_color);

        $group5 = new BridgeQodeGroup(esc_html__('Bottom Border', 'bridge'), esc_html__('Define bottom border style for Header Top', 'bridge'));
        $header_top_area_container->addChild("group5", $group5);
        $row1 = new BridgeQodeRow();
        $group5->addChild("row1", $row1);
        $top_header_border_color = new BridgeQodeField("colorsimple", "top_header_border_color", "", esc_html__('Bottom Border Color', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("top_header_border_color", $top_header_border_color);
        $top_header_border_weight = new BridgeQodeField("textsimple", "top_header_border_weight", "", esc_html__('Bottom Border Width (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("top_header_border_weight", $top_header_border_weight);

        $top_header_area_padding = new BridgeQodeField("text", "top_header_area_padding", "", esc_html__('Padding (%)', 'bridge'), esc_html__('Choose a left/right padding for Header Top area','bridge'));
        $header_top_area_container->addChild("top_header_area_padding", $top_header_area_padding);


        $panel7 = new BridgeQodePanel("Left Menu Area", "vertical_areas_panel", "vertical_area", "no");
        $headerandfooterPage->addChild("panel7", $panel7);

        $vertical_area_type = new BridgeQodeField("select", "vertical_area_type", "", esc_html__('Left Menu Area Type', 'bridge'), esc_html__('Specify menu type', 'bridge'), array(
            ""			=> esc_html__('Always Opened (Default)', 'bridge'),
            "hidden"	=> esc_html__('Initially Hidden', 'bridge')
        ),
            array("dependence" => true,
                "hide" => array(
                    "" => "#qodef_vertical_area_hidden_button_color_container, #qodef_vertical_area_width_container",
                    "hidden" => "#qodef_vertical_area_transparency_container"),
                "show" => array(
                    "" => "#qodef_vertical_area_transparency_container",
                    "hidden" => "#qodef_vertical_area_hidden_button_color_container, #qodef_vertical_area_width_container"
                )
            ));
        $panel7->addChild("vertical_area_type", $vertical_area_type);

        $vertical_area_hidden_button_color_container = new BridgeQodeContainer("vertical_area_hidden_button_color_container", "vertical_area_type", "");
        $panel7->addChild("vertical_area_hidden_button_color_container", $vertical_area_hidden_button_color_container);

        $vertical_area_hidden_button_color = new BridgeQodeField("color", "vertical_area_hidden_button_color", "", esc_html__('Button Color', 'bridge'), esc_html__('Choose a color for button that opens/closes Hidden Left Menu Area', 'bridge'));
        $vertical_area_hidden_button_color_container->addChild("vertical_area_hidden_button_color", $vertical_area_hidden_button_color);

        $vertical_area_hidden_button_margin_top = new BridgeQodeField("text", "vertical_area_hidden_button_margin_top", "", esc_html__('Button Margin Top (px)', 'bridge'), esc_html__('Set top margin for button that opens/closes Hidden Left Menu Area', 'bridge'), array(), array("col_width" => 3));
        $vertical_area_hidden_button_color_container->addChild("vertical_area_hidden_button_margin_top", $vertical_area_hidden_button_margin_top);

        $vertical_area_width_container = new BridgeQodeContainer("vertical_area_width_container", "vertical_area_type", "");
        $panel7->addChild("vertical_area_width_container", $vertical_area_width_container);

        $vertical_area_width = new BridgeQodeField("select", "vertical_area_width", "width_260", esc_html__('Left Menu Area Width', 'bridge'), esc_html__('Choose width for left menu area', 'bridge'), array(
            "width_260" => esc_html__('260px', 'bridge'),
            "width_290" => esc_html__('290px', 'bridge'),
            "width_350" => esc_html__('350px', 'bridge'),
            "width_400" => esc_html__('400px', 'bridge')
        ));
        $vertical_area_width_container->addChild("vertical_area_width", $vertical_area_width);

        $vertical_area_transparency_container = new BridgeQodeContainer("vertical_area_transparency_container", "vertical_area_type", "hidden");
        $panel7->addChild("vertical_area_transparency_container", $vertical_area_transparency_container);
        $vertical_area_transparency = new BridgeQodeField("yesno", "vertical_area_transparency", "no", esc_html__('Enable transparent left menu area', 'bridge'), esc_html__('Enabling this option will make Left Menu background transparent', 'bridge'));
        $vertical_area_transparency_container->addChild("vertical_area_transparency", $vertical_area_transparency);

        $vertical_area_submenu_opening_style = new BridgeQodeField("select", "vertical_area_submenu_opening_type", "", esc_html__('Submenu Opening Style', 'bridge'), esc_html__('Specify submenu opening style', 'bridge'), array(
            ""			=> esc_html__('On Hover', 'bridge'),
            "on_click"	=> esc_html__('On Click', 'bridge'),
            "float"		=> esc_html__('Float In', 'bridge')
        ), array(
            "dependence" => true,
            "hide" => array("" => "#qodef_vertical_area_float_container", "on_click" => "#qodef_vertical_area_float_container"),
            "show" => array("float" => "#qodef_vertical_area_float_container")
        ));
        $panel7->addChild("vertical_area_submenu_opening_style", $vertical_area_submenu_opening_style);

        $vertically_center_content = new BridgeQodeField("yesno", "vertical_area_vertically_center_content", "no", esc_html__('Vertically Center Content', 'bridge'), esc_html__('Enabling this option will make menu to be centered vertically', 'bridge'));
        $panel7->addChild("vertical_area_vertically_center_content", $vertically_center_content);

        $vertical_area_background = new BridgeQodeField("color", "vertical_area_background", "", esc_html__('Left Menu Area Background Color', 'bridge'), esc_html__('Choose a color for Left Menu background', 'bridge'));
        $panel7->addChild("vertical_area_background", $vertical_area_background);

        $vertical_area_float_container = new BridgeQodeContainer("vertical_area_float_container", "vertical_area_submenu_opening_type", array(), array("", "on_click"));
        $panel7->addChild("vertical_area_float_container", $vertical_area_float_container);

        $vertical_area_float_dropdown_bckg_color = new BridgeQodeField("color", "vertical_area_float_dropdown_bckg_color", "", esc_html__('Dropdown Background Color','bridge'), esc_html__('Choose a color for Left Menu Float type dropdown background', 'bridge'));
        $vertical_area_float_container->addChild("vertical_area_float_dropdown_bckg_color", $vertical_area_float_dropdown_bckg_color);

        $vertical_area_float_dropdown_alignment = new BridgeQodeField("selectblank", "vertical_area_float_dropdown_alignment", "", "Dropdown Alignment", "Choose an alignment for dropdown, leave empty if it inherits Content Alignment", array(
            "left"		=> esc_html__('Left', 'bridge'),
            "center"	=> esc_html__('Center', 'bridge'),
            "right"		=> esc_html__('Right', 'bridge')
        ));
        $vertical_area_float_container->addChild("vertical_area_float_dropdown_alignment", $vertical_area_float_dropdown_alignment);

        $vertical_area_background_image = new BridgeQodeField("image", "vertical_area_background_image", "", esc_html__('Left Menu Area Background Image', 'bridge'), esc_html__('Choose an image for Left Menu background', 'bridge'));
        $panel7->addChild("vertical_area_background_image", $vertical_area_background_image);
        $vertical_area_text_color = new BridgeQodeField("color", "vertical_area_text_color", "", esc_html__('Left Menu Area Text Color (for Widgets)', 'bridge'), esc_html__('Choose a text color for widgets in Left Menu', 'bridge'));
        $panel7->addChild("vertical_area_text_color", $vertical_area_text_color);
        $vertical_area_content_alignment = new BridgeQodeField("select", "left_menu_alignment", "", esc_html__('Content Alignment', 'bridge'), esc_html__('Choose content alignment inside left menu area', 'bridge'), array(
            "left"		=> esc_html__('Left', 'bridge'),
            "center"	=> esc_html__('Center', 'bridge'),
            "right"		=> esc_html__('Right', 'bridge')
        ));
        $panel7->addChild("left_menu_alignment", $vertical_area_content_alignment);

        $group1 = new BridgeQodeGroup(esc_html__('1st Level Menu Style', 'bridge'), esc_html__('Define styles for 1st level in Left Menu', 'bridge'));
        $panel7->addChild("group1", $group1);
        $row1 = new BridgeQodeRow();
        $group1->addChild("row1", $row1);
        $vertical_menu_color = new BridgeQodeField("colorsimple", "vertical_menu_color", "", esc_html__('Text Color', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("vertical_menu_color", $vertical_menu_color);
        $vertical_menu_hovercolor = new BridgeQodeField("colorsimple", "vertical_menu_hovercolor", "", esc_html__('Hover/Active color', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("vertical_menu_hovercolor", $vertical_menu_hovercolor);

        $row2 = new BridgeQodeRow(true);
        $group1->addChild("row2", $row2);
        $vertical_menu_google_fonts = new BridgeQodeField("fontsimple", "vertical_menu_google_fonts", "-1", esc_html__('Font Family', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row2->addChild("vertical_menu_google_fonts", $vertical_menu_google_fonts);
        $vertical_menu_fontsize = new BridgeQodeField("textsimple", "vertical_menu_fontsize", "", esc_html__('Font Size (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row2->addChild("vertical_menu_fontsize", $vertical_menu_fontsize);
        $vertical_menu_lineheight = new BridgeQodeField("textsimple", "vertical_menu_lineheight", "", esc_html__('Line Height (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row2->addChild("vertical_menu_lineheight", $vertical_menu_lineheight);

        $row3 = new BridgeQodeRow(true);
        $group1->addChild("row3", $row3);
        $vertical_menu_fontstyle = new BridgeQodeField("selectblanksimple", "vertical_menu_fontstyle", "", esc_html__('Font Style', 'bridge'), esc_html__('This is some description', 'bridge'), bridge_qode_get_font_style_array());
        $row3->addChild("vertical_menu_fontstyle", $vertical_menu_fontstyle);
        $vertical_menu_fontweight = new BridgeQodeField("selectblanksimple", "vertical_menu_fontweight", "", esc_html__('Font Weight', 'bridge'), esc_html__('This is some description', 'bridge'), bridge_qode_get_font_weight_array());
        $row3->addChild("vertical_menu_fontweight", $vertical_menu_fontweight);
        $vertical_menu_letterspacing = new BridgeQodeField("textsimple", "vertical_menu_letterspacing", "", esc_html__('Letter Spacing (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row3->addChild("vertical_menu_letterspacing", $vertical_menu_letterspacing);
        $vertical_menu_texttransform = new BridgeQodeField("selectblanksimple", "vertical_menu_texttransform", "", esc_html__('Text Transform', 'bridge'), esc_html__('This is some description', 'bridge'), bridge_qode_get_text_transform_array());
        $row3->addChild("vertical_menu_texttransform", $vertical_menu_texttransform);

        $group2 = new BridgeQodeGroup(esc_html__('2nd Level Menu Style', 'bridge'), esc_html__('Define styles for 2st level in Left Menu', 'bridge'));
        $panel7->addChild("group2", $group2);
        $row1 = new BridgeQodeRow();
        $group2->addChild("row1", $row1);
        $vertical_dropdown_color = new BridgeQodeField("colorsimple", "vertical_dropdown_color", "", esc_html__('Text Color', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("vertical_dropdown_color", $vertical_dropdown_color);
        $vertical_dropdown_hovercolor = new BridgeQodeField("colorsimple", "vertical_dropdown_hovercolor", "", esc_html__('Hover/Active Color', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("vertical_dropdown_hovercolor", $vertical_dropdown_hovercolor);

        $row2 = new BridgeQodeRow(true);
        $group2->addChild("row2", $row2);
        $vertical_dropdown_google_fonts = new BridgeQodeField("fontsimple", "vertical_dropdown_google_fonts", "-1", esc_html__('Font Family', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row2->addChild("vertical_dropdown_google_fonts", $vertical_dropdown_google_fonts);
        $vertical_dropdown_fontsize = new BridgeQodeField("textsimple", "vertical_dropdown_fontsize", "", esc_html__('Font Size (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row2->addChild("vertical_dropdown_fontsize", $vertical_dropdown_fontsize);
        $vertical_dropdown_lineheight = new BridgeQodeField("textsimple", "vertical_dropdown_lineheight", "", esc_html__('Line Height (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row2->addChild("vertical_dropdown_lineheight", $vertical_dropdown_lineheight);

        $row3 = new BridgeQodeRow(true);
        $group2->addChild("row3", $row3);
        $vertical_dropdown_fontstyle = new BridgeQodeField("selectblanksimple", "vertical_dropdown_fontstyle", "", esc_html__('Font Style', 'bridge'), esc_html__('This is some description', 'bridge'), bridge_qode_get_font_style_array());
        $row3->addChild("vertical_dropdown_fontstyle", $vertical_dropdown_fontstyle);
        $vertical_dropdown_fontweight = new BridgeQodeField("selectblanksimple", "vertical_dropdown_fontweight", "", esc_html__('Font Weight', 'bridge'), esc_html__('This is some description', 'bridge'), bridge_qode_get_font_weight_array());
        $row3->addChild("vertical_dropdown_fontweight", $vertical_dropdown_fontweight);
        $vertical_dropdown_letterspacing = new BridgeQodeField("textsimple", "vertical_dropdown_letterspacing", "", esc_html__('Letter Spacing (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row3->addChild("vertical_dropdown_letterspacing", $vertical_dropdown_letterspacing);
        $vertical_dropdown_texttransform = new BridgeQodeField("selectblanksimple", "vertical_dropdown_texttransform", "", esc_html__('Text Transform', 'bridge'), esc_html__('This is some description', 'bridge'), bridge_qode_get_text_transform_array());
        $row3->addChild("vertical_dropdown_texttransform", $vertical_dropdown_texttransform);


        $group3 = new BridgeQodeGroup(esc_html__('3rd Level Menu Style', 'bridge'), esc_html__('Define styles for 3rd level in Left Menu', 'bridge'));
        $panel7->addChild("group3", $group3);
        $row1 = new BridgeQodeRow();
        $group3->addChild("row1", $row1);
        $vertical_dropdown_color_thirdlvl = new BridgeQodeField("colorsimple", "vertical_dropdown_color_thirdlvl", "", esc_html__('Text Color', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("vertical_dropdown_color_thirdlvl", $vertical_dropdown_color_thirdlvl);
        $vertical_dropdown_hovercolor_thirdlvl = new BridgeQodeField("colorsimple", "vertical_dropdown_hovercolor_thirdlvl", "", esc_html__('Hover/Active Color', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("vertical_dropdown_hovercolor_thirdlvl", $vertical_dropdown_hovercolor_thirdlvl);

        $row2 = new BridgeQodeRow(true);
        $group3->addChild("row2", $row2);
        $vertical_dropdown_google_fonts_thirdlvl = new BridgeQodeField("fontsimple", "vertical_dropdown_google_fonts_thirdlvl", "-1", esc_html__('Font Family', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row2->addChild("vertical_dropdown_google_fonts_thirdlvl", $vertical_dropdown_google_fonts_thirdlvl);
        $vertical_dropdown_fontsize_thirdlvl = new BridgeQodeField("textsimple", "vertical_dropdown_fontsize_thirdlvl", "", esc_html__('Font Size (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row2->addChild("vertical_dropdown_fontsize_thirdlvl", $vertical_dropdown_fontsize_thirdlvl);
        $vertical_dropdown_lineheight_thirdlvl = new BridgeQodeField("textsimple", "vertical_dropdown_lineheight_thirdlvl", "", esc_html__('Line Height (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row2->addChild("vertical_dropdown_lineheight_thirdlvl", $vertical_dropdown_lineheight_thirdlvl);

        $row3 = new BridgeQodeRow(true);
        $group3->addChild("row3", $row3);
        $vertical_dropdown_fontstyle_thirdlvl = new BridgeQodeField("selectblanksimple", "vertical_dropdown_fontstyle_thirdlvl", "", esc_html__('Font Style', 'bridge'), esc_html__('This is some description', 'bridge'), bridge_qode_get_font_style_array());
        $row3->addChild("vertical_dropdown_fontstyle_thirdlvl", $vertical_dropdown_fontstyle_thirdlvl);
        $vertical_dropdown_fontweight_thirdlvl = new BridgeQodeField("selectblanksimple", "vertical_dropdown_fontweight_thirdlvl", "", esc_html__('Font Weight', 'bridge'), esc_html__('This is some description', 'bridge'), bridge_qode_get_font_weight_array());
        $row3->addChild("vertical_dropdown_fontweight_thirdlvl", $vertical_dropdown_fontweight_thirdlvl);
        $vertical_dropdown_letterspacing_thirdlvl = new BridgeQodeField("textsimple", "vertical_dropdown_letterspacing_thirdlvl", "", esc_html__('Letter Spacing (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row3->addChild("vertical_dropdown_letterspacing_thirdlvl", $vertical_dropdown_letterspacing_thirdlvl);
        $vertical_dropdown_texttransform_thirdlvl = new BridgeQodeField("selectblanksimple", "vertical_dropdown_texttransform_thirdlvl", "", esc_html__('Text Transform', 'bridge'), esc_html__('This is some description', 'bridge'), bridge_qode_get_text_transform_array());
        $row3->addChild("vertical_dropdown_texttransform_thirdlvl", $vertical_dropdown_texttransform_thirdlvl);


        $panel20 = new BridgeQodePanel(esc_html__('Mobile Menu', 'bridge'), "mobile_menu_panel");
        $headerandfooterPage->addChild("panel20", $panel20);

        $mobile_separator_color = new BridgeQodeField("color", "mobile_separator_color", "", esc_html__('Mobile Menu Item Separator Color', 'bridge'), esc_html__('Choose color for mobile menu horizontal separators', 'bridge'));
        $panel20->addChild("mobile_separator_color", $mobile_separator_color);
        $mobile_background_color = new BridgeQodeField("color", "mobile_background_color", "", esc_html__('Mobile Header & Menu Background Color', 'bridge'), esc_html__('Choose color for mobile header&menu background', 'bridge'));
        $panel20->addChild("mobile_background_color", $mobile_background_color);
        $mobile_header_top_background_color = new BridgeQodeField("color", "mobile_header_top_background_color", "", esc_html__('Mobile Header Top Background Color', 'bridge'), esc_html__('Choose color for mobile header top background', 'bridge'));
        $panel20->addChild("mobile_header_top_background_color", $mobile_header_top_background_color);
        //init icon pack hide and show array. It will be populated dinamically from collections array
        $mobile_menu_icon_pack_hide_array = array();
        $mobile_menu_icon_pack_show_array = array();

        //do we have some collection added in collections array?
        if (is_array(bridge_qode_icon_collections()->iconCollections) && count(bridge_qode_icon_collections()->iconCollections)) {
            //get collections params array. It will contain values of 'param' property for each collection
            $mobile_menu_icon_collections_params = bridge_qode_icon_collections()->getIconCollectionsParams();

            //foreach collection generate hide and show array
            foreach (bridge_qode_icon_collections()->iconCollections as $dep_collection_key => $dep_collection_object) {
                $mobile_menu_icon_pack_hide_array[$dep_collection_key] = '';

                //we need to include only current collection in show string as it is the only one that needs to show
                $mobile_menu_icon_pack_show_array[$dep_collection_key] = '#qodef_mobile_menu_icon_' . $dep_collection_object->param . '_container';

                //for all collections param generate hide string
                foreach ($mobile_menu_icon_collections_params as $mobile_menu_icon_collections_param) {
                    //we don't need to include current one, because it needs to be shown, not hidden
                    if ($mobile_menu_icon_collections_param !== $dep_collection_object->param) {
                        $mobile_menu_icon_pack_hide_array[$dep_collection_key] .= '#qodef_mobile_menu_icon_' . $mobile_menu_icon_collections_param . '_container,';
                    }
                }

                //remove remaining ',' character
                $mobile_menu_icon_pack_hide_array[$dep_collection_key] = rtrim($mobile_menu_icon_pack_hide_array[$dep_collection_key], ',');
            }

        }

        $mobile_menu_button_icon_pack = new BridgeQodeField(
            "select",
            "mobile_menu_button_icon_pack",
            "font_awesome",
            esc_html__('Mobile Menu Button Icon Pack', 'bridge'),
            esc_html__('Choose icon pack for Mobile Menu button', 'bridge'),
            bridge_qode_icon_collections()->getIconCollections(),
            array(
                "dependence" => true,
                "hide" => $mobile_menu_icon_pack_hide_array,
                "show" => $mobile_menu_icon_pack_show_array
            ));

        $panel20->addChild("mobile_menu_button_icon_pack", $mobile_menu_button_icon_pack);

        if (is_array(bridge_qode_icon_collections()->iconCollections) && count(bridge_qode_icon_collections()->iconCollections)) {
            //foreach icon collection we need to generate separate container that will have dependency set
            //it will have one field inside with icons dropdown
            foreach (bridge_qode_icon_collections()->iconCollections as $collection_key => $collection_object) {
                $icons_array = $collection_object->getIconsArray();

                if( $collection_key == 'kiko' ){
                    $icons_array = array_flip( $icons_array );
                }

                //get icon collection keys (keys from collections array, e.g 'font_awesome', 'font_elegant' etc.)
                $icon_collections_keys = bridge_qode_icon_collections()->getIconCollectionsKeys();

                //unset current one, because it doesn't have to be included in dependency that hides icon container
                unset($icon_collections_keys[array_search($collection_key, $icon_collections_keys)]);

                $mobile_menu_icon_hide_values = $icon_collections_keys;
                $mobile_menu_icon_container = new BridgeQodeContainer("mobile_menu_icon_" . $collection_object->param . "_container", "mobile_menu_button_icon_pack", "", $mobile_menu_icon_hide_values);
                $mobile_menu_button_icon = new BridgeQodeField("select", "mobile_menu_icon_" . $collection_object->param, "fa-bars", esc_html__('Mobile Menu Icon', 'bridge'), esc_html__('Choose Mobile Menu Icon', 'bridge'), $icons_array, array("col_width" => 3));
                $mobile_menu_icon_container->addChild("mobile_menu_icon_" . $collection_object->param, $mobile_menu_button_icon);

                $panel20->addChild("mobile_menu_icon_" . $collection_object->param . "_container", $mobile_menu_icon_container);
            }

        }


        $panel9 = new BridgeQodePanel(esc_html__('Header Button Icons', 'bridge'), "header_buttons_panel");
        $headerandfooterPage->addChild("panel9", $panel9);
        $header_buttons_color = new BridgeQodeField("color", "header_buttons_color", "", esc_html__('Color', 'bridge'), esc_html__('Choose a color for Header icons', 'bridge'));
        $panel9->addChild("header_buttons_color", $header_buttons_color);
        $header_buttons_hover_color = new BridgeQodeField("color", "header_buttons_hover_color", "", esc_html__('Hover Color', 'bridge'), esc_html__('Choose a hover color for Header icons', 'bridge'));
        $panel9->addChild("header_buttons_hover_color", $header_buttons_hover_color);
        $header_buttons_font_size = new BridgeQodeField("text", "header_buttons_font_size", "", esc_html__('Icon Size (px)', 'bridge'), esc_html__('Choose a size for Header icons', 'bridge'), array(), array("col_width" => 3));
        $panel9->addChild("header_buttons_font_size", $header_buttons_font_size);
        $header_buttons_size = new BridgeQodeField("select", "header_buttons_size", "normal", esc_html__('Side Menu / Fullscreen Menu Icon Size', 'bridge'), esc_html__('Choose a size for Side Menu / Fullscreen Menu icons', 'bridge'), array(
            "normal"	=> esc_html__('Normal', 'bridge'),
            "medium"	=> esc_html__('Medium', 'bridge'),
            "large"		=> esc_html__('Large', 'bridge')
        ));
        $panel9->addChild("header_buttons_size", $header_buttons_size);


        if (bridge_qode_is_wpml_installed()) {
            $wpml_panel = new BridgeQodePanel(esc_html__('Language Switcher', 'bridge'), 'language_switcher', 'vertical_area', 'yes');

            $headerandfooterPage->addChild('language_switcher', $wpml_panel);

            $lang_items_padding = new BridgeQodeField('text', 'header_bottom_lang_items_padding', '', esc_html__('Left / Right Spacing Between Languages in List (px)', 'bridge'), esc_html__('Set spacing between languages when horizontal language switcher is added to main menu', 'bridge'), array(), array("col_width" => 3));
            $wpml_panel->addChild('header_bottom_lang_items_padding', $lang_items_padding);
        }

    }
    add_action('bridge_qode_action_options_map','bridge_qode_haeder_options_map',30);
}