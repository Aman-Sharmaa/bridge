<?php

if(!function_exists('bridge_qode_general_options_map')) {
    /**
     * General options page
     */
    function bridge_qode_general_options_map(){

        $generalPage = new BridgeQodeAdminPage("", esc_html__("General", "bridge"), "fa fa-institution");
        bridge_qode_framework()->qodeOptions->addAdminPage("general", $generalPage);

        // Design Style

        $panel1 = new BridgeQodePanel(esc_html__("Design Style", "bridge"), "design_style");
        $generalPage->addChild("panel1", $panel1);

		$disable_google_fonts = new BridgeQodeField("yesno","disable_google_fonts","no",esc_html__("Disable Google Fonts", "bridge"),esc_html__("Please note that in order to be presented with the full set of available options that changing this option entails, you should save your changes after triggering the option, and refresh the page afterwards.", "bridge"), array(),
			array("dependence" => true,
				"dependence_hide_on_yes" => "#qodef_disable_google_fonts_container",
				"dependence_show_on_yes" => ""));
		$panel1->addChild("disable_google_fonts",$disable_google_fonts);

		$google_fonts = new BridgeQodeField("font", "google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("Choose a default font for your site", "bridge"));
        $panel1->addChild("google_fonts", $google_fonts);

		$disable_google_fonts_container = new BridgeQodeContainer("disable_google_fonts_container","disable_google_fonts","yes");
		$panel1->addChild("disable_google_fonts_container",$disable_google_fonts_container);

        $additional_google_fonts = new BridgeQodeField("yesno","additional_google_fonts","no",esc_html__("Additional Google Fonts", "bridge"),"", array(),
            array("dependence" => true,
                "dependence_hide_on_yes" => "",
                "dependence_show_on_yes" => "#qodef_additional_google_font_container"));
		$disable_google_fonts_container->addChild("additional_google_fonts",$additional_google_fonts);

        $additional_google_font_container = new BridgeQodeContainer("additional_google_font_container","additional_google_fonts","no");
        $panel1->addChild("additional_google_font_container",$additional_google_font_container);

        $additional_google_font1 = new BridgeQodeField("font","additional_google_font1","-1",esc_html__("Font Family", "bridge"),esc_html__("Choose additional Google font for your site", "bridge"));
        $additional_google_font_container->addChild("additional_google_font1",$additional_google_font1);

        $additional_google_font2 = new BridgeQodeField("font","additional_google_font2","-1",esc_html__("Font Family", "bridge"),esc_html__("Choose additional Google font for your site", "bridge"));
        $additional_google_font_container->addChild("additional_google_font2",$additional_google_font2);

        $additional_google_font3 = new BridgeQodeField("font","additional_google_font3","-1",esc_html__("Font Family", "bridge"),esc_html__("Choose additional Google font for your site", "bridge"));
        $additional_google_font_container->addChild("additional_google_font3",$additional_google_font3);

        $additional_google_font4 = new BridgeQodeField("font","additional_google_font4","-1",esc_html__("Font Family", "bridge"),esc_html__("Choose additional Google font for your site", "bridge"));
        $additional_google_font_container->addChild("additional_google_font4",$additional_google_font4);

        $additional_google_font5 = new BridgeQodeField("font","additional_google_font5","-1",esc_html__("Font Family", "bridge"),esc_html__("Choose additional Google font for your site", "bridge"));
        $additional_google_font_container->addChild("additional_google_font5",$additional_google_font5);

		bridge_qode_add_repeater_field(
			array(
				'name'        => 'qode_custom_fonts',
				'label'       => esc_html__('Custom Fonts', 'bridge'),
				'description' => esc_html__('Please note that in order to be presented with the full set of available options that changing this option entails, you should save your changes after triggering the option, and refresh the page afterwards. Note that you should upload only one custom font type of your choosing for each new font.', 'bridge'),
				'fields' => array(
					array(
						'name'        => 'qode_custom_font_ttf',
						'type'        => 'file',
						'label'       => esc_html__('Custom Font TTF', 'bridge'),
						'col_width'   => '3',
					),
					array(
						'name'        => 'qode_custom_font_otf',
						'type'        => 'file',
						'label'       => esc_html__('Custom Font OTF', 'bridge'),
						'col_width'   => '3',
					),
					array(
						'name'        => 'qode_custom_font_woff',
						'type'        => 'file',
						'label'       => esc_html__('Custom Font WOFF', 'bridge'),
						'col_width'   => '3',
					),
					array(
						'name'        	=> 'qode_custom_font_woff2',
						'type'        	=> 'file',
						'label'      	=> esc_html__('Custom Font TTF WOFF2', 'bridge'),
						'col_width'   => '3',
					),
					array(
						'name'        => 'qode_custom_font_name',
						'type'        => 'text',
						'label'       => esc_html__('Font Name', 'bridge'),
						'col_width'   => '3',
					)

				),
				'parent'      => $panel1,
				'field_domain' => 'global'
			)
		);

        $first_color = new BridgeQodeField("color", "first_color", "", esc_html__("First Main Color", "bridge"), esc_html__("Choose the most dominant theme color", "bridge"));
        $panel1->addChild("first_color", $first_color);

        $second_color = new BridgeQodeField("color", "second_color", "", esc_html__("Second Main Color", "bridge"), esc_html__("Choose the second most dominant theme color", "bridge"));
        $panel1->addChild("second_color", $second_color);

        $third_color = new BridgeQodeField("color", "third_color", "", esc_html__("Third Main Color", "bridge"), esc_html__("Choose the third most dominant theme color", "bridge"));
        $panel1->addChild("third_color", $third_color);

        $fourth_color = new BridgeQodeField("color", "fourth_color", "", esc_html__("Fourth Main Color", "bridge"), esc_html__("Choose the fourth most dominant theme color", "bridge"));
        $panel1->addChild("fourth_color", $fourth_color);

        $background_color = new BridgeQodeField("color", "background_color", "", esc_html__("Content Background Color", "bridge"), esc_html__("Choose the background color for page content area ", "bridge"));
        $panel1->addChild("background_color", $background_color);

        $background_color_boxes = new BridgeQodeField("color", "background_color_boxes", "", esc_html__("Box Background Color", "bridge"), esc_html__("Choose the background color for portfolio and blog boxes", "bridge"));
        $panel1->addChild("background_color_boxes", $background_color_boxes);

        $selection_color = new BridgeQodeField("color", "selection_color", "", esc_html__("Text Selection Color", "bridge"), esc_html__("Choose the color users see when selecting text", "bridge"));
        $panel1->addChild("selection_color", $selection_color);

        $group_gradient = bridge_qode_add_admin_group(array(
            'name'        => 'group_gradient',
            'title'       => esc_html__('Gradient Colors', "bridge"),
            'description' => esc_html__('Define colors for gradient styles', "bridge"),
            'parent'      => $panel1
        ));

            $row_gradient_style1 = bridge_qode_add_admin_row(array(
                'name'   => 'row_gradient_style1',
                'parent' => $group_gradient
            ));

                bridge_qode_add_admin_field(array(
                    'type'          => 'colorsimple',
                    'name'          => 'gradient_style1_start_color',
                    'default_value' => '#31c8a2',
                    'label'         => esc_html__('Style 1 - Start Color (def. #31c8a2)', "bridge"),
                    'parent'        => $row_gradient_style1
                ));

                bridge_qode_add_admin_field(array(
                    'type'          => 'colorsimple',
                    'name'          => 'gradient_style1_end_color',
                    'default_value' => '#ae66fd',
                    'label'         => esc_html__('Style 1 - End Color (def. #ae66fd)', "bridge"),
                    'parent'        => $row_gradient_style1
                ));

        $transparent_content = new BridgeQodeField("yesno","transparent_content","no",esc_html__("Enable Uniform Site Background", "bridge"),esc_html__("If enabled, content background on pages will be transparent (unless set otherwise) and the background you set here will show", "bridge"), array(),
            array("dependence" => true,
                "dependence_hide_on_yes" => "",
                "dependence_show_on_yes" => "#qodef_transparent_content_container"));
        $panel1->addChild("transparent_content",$transparent_content);

            $transparent_content_container = new BridgeQodeContainer("transparent_content_container","transparent_content","no");
            $panel1->addChild("transparent_content_container",$transparent_content_container);

            $transparent_content_background_color = new BridgeQodeField("color","transparent_content_background_color","",esc_html__("Background Color", "bridge"),esc_html__("Choose body background color. Default color is #ffffff.", "bridge"));
            $transparent_content_container->addChild("transparent_content_background_color",$transparent_content_background_color);

            $transparent_content_background_image = new BridgeQodeField("image","transparent_content_background_image","",esc_html__("Background Image", "bridge"),esc_html__("Choose an image to be displayed in background", "bridge"));
            $transparent_content_container->addChild("transparent_content_background_image",$transparent_content_background_image);

            $transparent_content_pattern_background_image = new BridgeQodeField("image","transparent_content_pattern_background_image","",esc_html__("Background Pattern", "bridge"),esc_html__("Choose an image to be used as background pattern", "bridge"));
            $transparent_content_container->addChild("transparent_content_pattern_background_image",$transparent_content_pattern_background_image);

        $overlapping_content = new BridgeQodeField("yesno", "overlapping_content", "no", esc_html__("Enable Overlapping Content", "bridge"), esc_html__("Enabling this option will make content overlap title area or slider for set amount of pixels", "bridge"), array(),
            array("dependence" => true,
                "dependence_hide_on_yes" => "",
                "dependence_show_on_yes" => "#qodef_overlapping_content_container"));
        $panel1->addChild("overlapping_content", $overlapping_content);

        $overlapping_content_container = new BridgeQodeContainer("overlapping_content_container", "overlapping_content", "no");
        $panel1->addChild("overlapping_content_container", $overlapping_content_container);

        $overlapping_content_amount = new BridgeQodeField("text", "overlapping_content_amount", "", esc_html__("Overlapping amount (px)", "bridge"), esc_html__("Enter amount of pixels you would like content to overlap title area or slider", "bridge"), array(), array("col_width" => 1));
        $overlapping_content_container->addChild("overlapping_content_amount", $overlapping_content_amount);

        $overlapping_content_padding = new BridgeQodeField("text", "overlapping_content_padding", "", esc_html__("Overlapping left/right padding (px)", "bridge"), esc_html__("This option takes effect only on Default (in grid) templates", "bridge"), array(), array("col_width" => 1));
        $overlapping_content_container->addChild("overlapping_content_padding", $overlapping_content_padding);

        $boxed = new BridgeQodeField("yesno", "boxed", "no", esc_html__("Boxed layout", "bridge"), esc_html__("Enabling this option will display site content in grid", "bridge"), array(),
            array("dependence" => true,
                "dependence_hide_on_yes" => "",
                "dependence_show_on_yes" => "#qodef_boxed_container"));
        $panel1->addChild("boxed", $boxed);

        $boxed_container = new BridgeQodeContainer("boxed_container", "boxed", "no");
        $panel1->addChild("boxed_container", $boxed_container);

        $background_color_box = new BridgeQodeField("color", "background_color_box", "", esc_html__("Page Background Color", "bridge"), esc_html__("Choose the page background (body) color", "bridge"));
        $boxed_container->addChild("background_color_box", $background_color_box);

        $background_image = new BridgeQodeField("image", "background_image", "", esc_html__("Background Image", "bridge"), esc_html__("Choose an image to be displayed in background", "bridge"));
        $boxed_container->addChild("background_image", $background_image);

        $pattern_background_image = new BridgeQodeField("image", "pattern_background_image", "", esc_html__("Background Pattern", "bridge"), esc_html__("Choose an image to be used as background pattern", "bridge"));
        $boxed_container->addChild("pattern_background_image", $pattern_background_image);

        $paspartu = new BridgeQodeField("yesno", "paspartu", "no", esc_html__("Passepartout", "bridge"), esc_html__("Enabling this option will display passepartout around site content", "bridge"), array(),
            array("dependence" => true,
                "dependence_hide_on_yes" => "",
                "dependence_show_on_yes" => "#qodef_paspartu_container"));
        $panel1->addChild("paspartu", $paspartu);

        $paspartu_container = new BridgeQodeContainer("paspartu_container", "paspartu", "no");
        $panel1->addChild("paspartu_container", $paspartu_container);

        $paspartu_color = new BridgeQodeField("color", "paspartu_color", "", esc_html__("Passepartout Color", "bridge"), esc_html__("Choose passepartout color, default value is #ffffff", "bridge"));
        $paspartu_container->addChild("paspartu_color", $paspartu_color);

        $paspartu_width = new BridgeQodeField("text", "paspartu_width", "", esc_html__("Passepartout Size (%)", "bridge"), esc_html__("Enter size amount for passepartout, default value is 2% (the percent is in relation to site width)", "bridge"), array(), array("col_width" => 3));
        $paspartu_container->addChild("paspartu_width", $paspartu_width);

        $paspartu_header_alignment = new BridgeQodeField("yesno", "paspartu_header_alignment", "no", esc_html__("Align Header With Passepartout", "bridge"), esc_html__("Enabling this option will set header content within passepartout", "bridge"));
        $paspartu_container->addChild("paspartu_header_alignment", $paspartu_header_alignment);

        $paspartu_header_inside = new BridgeQodeField("yesno", "paspartu_header_inside", "no", esc_html__("Set Header Inside Passepartout", "bridge"), esc_html__("Enabling this option will set the whole header between the left and right border of passepartout", "bridge"));
        $paspartu_container->addChild("paspartu_header_inside", $paspartu_header_inside);

        $vertical_menu_inside_paspartu = new BridgeQodeField("yesno", "vertical_menu_inside_paspartu", "yes", esc_html__("Vertical Menu Inside Passepartout", "bridge"), "");
        $paspartu_container->addChild("vertical_menu_inside_paspartu", $vertical_menu_inside_paspartu);

        $paspartu_footer_alignment = new BridgeQodeField("yesno", "paspartu_footer_alignment", "no", esc_html__("Align Footer With Passepartout", "bridge"), esc_html__("Enabling this option will align footer content with passepartout borders", "bridge"));
        $paspartu_container->addChild("paspartu_footer_alignment", $paspartu_footer_alignment);

        $paspartu_on_top = new BridgeQodeField("yesno", "paspartu_on_top", "yes", esc_html__("Top Passepartout", "bridge"), esc_html__("Disabling this option will disable top part of passepartout", "bridge"), array(),
            array("dependence" => true,
                "dependence_hide_on_yes" => "",
                "dependence_show_on_yes" => "#qodef_paspartu_on_top_fixed_container"));
        $paspartu_container->addChild("paspartu_on_top", $paspartu_on_top);

        $paspartu_on_top_fixed_container = new BridgeQodeContainer("paspartu_on_top_fixed_container", "paspartu_on_top", "no");
        $paspartu_container->addChild("paspartu_on_top_fixed_container", $paspartu_on_top_fixed_container);

        $paspartu_on_top_fixed = new BridgeQodeField("yesno", "paspartu_on_top_fixed", "no", esc_html__("Fix Top Passepartout", "bridge"), esc_html__("Enabling this option will fix top part of passepartout to the top of the screen", "bridge"));
        $paspartu_on_top_fixed_container->addChild("paspartu_on_top_fixed", $paspartu_on_top_fixed);

        $paspartu_on_bottom_slider_container = new BridgeQodeContainer("paspartu_on_bottom_slider_container", "", "");
        $paspartu_container->addChild("paspartu_on_bottom_slider_container", $paspartu_on_bottom_slider_container);

        $paspartu_on_bottom_slider = new BridgeQodeField("yesno", "paspartu_on_bottom_slider", "no", esc_html__("Show Bottom Passepartout on Qode Slider", "bridge"), esc_html__("Enabling this option will show bottom passepartout on Qode Slider", "bridge"));
        $paspartu_on_bottom_slider_container->addChild("paspartu_on_bottom_slider", $paspartu_on_bottom_slider);

        $paspartu_on_bottom = new BridgeQodeField("yesno", "paspartu_on_bottom", "yes", esc_html__("Bottom Passepartout", "bridge"), esc_html__("Disabling this option will disable bottom part of passepartout", "bridge"), array(),
            array("dependence" => true,
                "dependence_hide_on_yes" => "",
                "dependence_show_on_yes" => "#qodef_paspartu_on_bottom_fixed_container"));
        $paspartu_container->addChild("paspartu_on_bottom", $paspartu_on_bottom);

        $paspartu_on_bottom_fixed_container = new BridgeQodeContainer("paspartu_on_bottom_fixed_container", "paspartu_on_bottom", "no");
        $paspartu_container->addChild("paspartu_on_bottom_fixed_container", $paspartu_on_bottom_fixed_container);

        $paspartu_on_bottom_fixed = new BridgeQodeField("yesno", "paspartu_on_bottom_fixed", "no", esc_html__("Fix Bottom Passepartout", "bridge"), esc_html__("Enabling this option will fix bottom part of passepartout to the bottom of the screen", "bridge"));
        $paspartu_on_bottom_fixed_container->addChild("paspartu_on_bottom_fixed", $paspartu_on_bottom_fixed);

        $enable_content_top_margin = new BridgeQodeField("yesno", "enable_content_top_margin", "no", esc_html__("Always put content below header", "bridge"), esc_html__("Enabling this option always will put content below header", "bridge"));
        $panel1->addChild("enable_content_top_margin", $enable_content_top_margin);

        $initial_content_width = new BridgeQodeField("select", "initial_content_width", "grid_1100", esc_html__("Initial Width of Content", "bridge"), esc_html__('Choose the initial width of content which is in grid', "bridge"),
            array(
                "grid_1100" => esc_html__("1100px (default)", "bridge"),
                "grid_1200" => esc_html__("1200px", "bridge"),
                "grid_1300" => esc_html__("1300px", "bridge"),
                "grid_1400" => esc_html__("1400px", "bridge")
            )
        );
        $panel1->addChild("initial_content_width", $initial_content_width);

        bridge_qode_add_admin_field(
            array(
                'name'          => 'content_grid_lines',
                'type'          => 'select',
                'default_value' => 'none',
                'label'         => esc_html__('Grid Lines in Page Background', 'bridge'),
                'description'   => esc_html__('If you would like to enable a set of lines in the page background, choose how many lines you would like to display. The lines will be placed on the page grid.', 'bridge'),
                'parent'        => $panel1,
                'options'       => array(
                    "none" => esc_html__("None", 'bridge'),
                    "2" => esc_html__("3 lines", "bridge"),
                    "3" => esc_html__("4 lines", "bridge"),
                    "4" => esc_html__("5 lines", "bridge"),
                    "5" => esc_html__("6 lines", "bridge"),
                    "6" => esc_html__("7 lines", "bridge")
                ),
                'args'    => array(
                    'dependence' => true,
                    'hide'       => array(
                        'none'    => '#qodef_lines_container',
                        '2'      => '',
                        '3'      => '',
                        '4'      => '',
                        '5'      => '',
                        '6'      => '',
                    ),
                    'show'       => array(
                        'none'    => '',
                        '2'      => '#qodef_lines_container',
                        '3'      => '#qodef_lines_container',
                        '4'      => '#qodef_lines_container',
                        '5'      => '#qodef_lines_container',
                        '6'      => '#qodef_lines_container',
                    )
                )
            )
        );

        $lines_container = bridge_qode_add_admin_container(
            array(
                'parent'          => $panel1,
                'name'            => 'lines_container',
                'hidden_property' => 'content_grid_lines',
                'hidden_value'    => 'none'
            )
        );

        bridge_qode_add_admin_field(
            array(
                'name'          => 'content_grid_lines_skin',
                'type'          => 'select',
                'default_value' => '',
                'label'         => esc_html__( 'Grid Lines Skin', 'bridge' ),
                'description'   => esc_html__( 'Choose skin for background grid lines', 'bridge' ),
                'parent'        => $lines_container,
                'options'       => array(
                    'light'  => esc_html__( 'Light', 'bridge' ),
                    'dark' => esc_html__( 'Dark', 'bridge' )
                )
            )
        );

        // Settings

        $panel4 = new BridgeQodePanel("Settings", "settings");
        $generalPage->addChild("panel4", $panel4);

        $qode_ui_scripts = bridge_qode_return_ui_scripts_array();

        foreach ($qode_ui_scripts as $script => $name){
            $qode_default_scripts[] = $script;
        }

        bridge_qode_add_admin_field(
            array(
                'name'          => 'qode_ui_scripts_option',
                'type'          => 'checkboxgroup',
                'default_value' => $qode_default_scripts,
                'label'         => esc_html__( 'JQuery Scripts ', 'bridge' ),
                'description'   => esc_html__( 'Choose which JQuery scripts will be loaded for your site. By default, all scripts are loaded initially', 'bridge' ),
                'parent'        => $panel4,
                'options'       => $qode_ui_scripts
            )
        );

        $page_transitions = new BridgeQodeField("select", "page_transitions", "0", esc_html__("Page Transition", "bridge"), esc_html__('Choose a a type of transition between loading pages. In order for animation to work properly, you must choose "Post name" in permalinks settings', "bridge"), array(0 => "No animation",
            1 => esc_html__("Up/Down", "bridge"),
            2 => esc_html__("Fade", "bridge"),
            3 => esc_html__("Up/Down (In) / Fade (Out)", "bridge"),
            4 => esc_html__("Left/Right", "bridge")
        ), array("dependence" => true,
			"hide" => array(
				"0"=>"#qodef_ajax_animate_header_container",
				"1"=>"#qodef_ajax_animate_header_container,#qodef_page_loading_effect_container",
				"2"=>"#qodef_page_loading_effect_container",
				"3"=>"#qodef_page_loading_effect_container",
				"4"=>"#qodef_ajax_animate_header_container,#qodef_page_loading_effect_container"
			),
			"show" => array(
				"0"=>"#qodef_page_loading_effect_container",
				"1"=>"",
				"2"=>"#qodef_ajax_animate_header_container",
				"3"=>"#qodef_ajax_animate_header_container",
				"4"=>""
			) 
		), "enable_grid_elements", array("yes"));
        $panel4->addChild("page_transitions", $page_transitions);

        $page_transitions_notice = new BridgeQodeNotice(esc_html__("Ajax Page Transition", "bridge"), esc_html__('Choose a a type of transition between loading pages. In order for animation to work properly, you must choose "Post name" in permalinks settings', "bridge"), esc_html__("AJAX Page transitions are disabled due to VC Grid Elements", "bridge"), "enable_grid_elements", "no");
        $panel4->addChild("page_transitions_notice", $page_transitions_notice);
	
		$ajax_animate_header_container = new BridgeQodeContainer("ajax_animate_header_container","page_transitions","0");
		$panel4->addChild("ajax_animate_header_container",$ajax_animate_header_container);
		
		$ajax_animate_header = new BridgeQodeField("yesno","ajax_animate_header","no",esc_html__("Animate Header", "bridge"),esc_html__("Enabling this option will include the header area in the Ajax Page Transition Animations", "bridge"));
		$ajax_animate_header_container->addChild("ajax_animate_header",$ajax_animate_header);


		$page_loading_effect_container = new BridgeQodeContainer("page_loading_effect_container","page_transitions","", array('1','2','3','4'));
		$panel4->addChild("page_loading_effect_container",$page_loading_effect_container);

		$page_loading_effect = new BridgeQodeField("yesno","page_loading_effect","no",esc_html__("Page Loading Effect", "bridge"),esc_html__("Choose a loading effect for your pages. Please note that this is not the same as Ajax page transitions. The page is loaded normally, without Ajax, but it will have a loading effect.", "bridge"));
		$page_loading_effect_container->addChild("page_loading_effect",$page_loading_effect);

        $loading_animation = new BridgeQodeField("onoff", "loading_animation", "off", esc_html__("Loading Animation", "bridge"), esc_html__("Enabling this option will display animation while page loads", "bridge"), array(),
            array("dependence" => true,
                "dependence_hide_on_yes" => "",
                "dependence_show_on_yes" => "#qodef_loading_animation_container"));
        $panel4->addChild("loading_animation", $loading_animation);

        $loading_animation_container = new BridgeQodeContainer("loading_animation_container", "loading_animation", "off");
        $panel4->addChild("loading_animation_container", $loading_animation_container);

        $group1 = new BridgeQodeGroup(esc_html__("Loading Animation Graphic", "bridge"), esc_html__("Choose type and color of preload graphic animation", "bridge"));
        $loading_animation_container->addChild("group1", $group1);

        $row1 = new BridgeQodeRow();
        $group1->addChild("row1", $row1);

        $loading_animation_spinner = new BridgeQodeField("selectsimple", "loading_animation_spinner", "pulse", esc_html__("Spinner", "bridge"), esc_html__("This is some description", "bridge"), array("pulse" => "Pulse",
            "double_pulse" => esc_html__("Double Pulse", "bridge"),
            "cube" => esc_html__("Cube", "bridge"),
            "rotating_cubes" => esc_html__("Rotating Cubes", "bridge"),
            "stripes" => esc_html__("Stripes", "bridge"),
            "wave" => esc_html__("Wave", "bridge"),
            "two_rotating_circles" => esc_html__("2 Rotating Circles", "bridge"),
            "five_rotating_circles" => esc_html__("5 Rotating Circles", "bridge")
        ));
        $row1->addChild("loading_animation_spinner", $loading_animation_spinner);

        $spinner_color = new BridgeQodeField("colorsimple", "spinner_color", "", esc_html__("Spinner Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("spinner_color", $spinner_color);

		$loading_background_color = new BridgeQodeField("color", "loading_background_color", "", esc_html__("Background Color", "bridge"), esc_html__('Choose Background Color (Note: This option is only applied when Page Loading Effect is enabled)', "bridge"));
		$loading_animation_container->addChild("loading_background_color", $loading_background_color);

        $loading_image = new BridgeQodeField("image", "loading_image", "", esc_html__("Loading Image", "bridge"), esc_html__('Upload custom image to be displayed while page loads (Note: Page Transition must not be set to "No Animation")', "bridge"));
        $loading_animation_container->addChild("loading_image", $loading_image);

        $loading_animation_left_menu_alignment = new BridgeQodeField("yesno", "loading_animation_left_menu_alignment", "no", esc_html__("Center Loading Animation to Browser Window", "bridge"), esc_html__('Enabling this option will center loading animation in regard to browser window instead of in regard to content when left menu is enabled', "bridge"));
        $loading_animation_container->addChild("loading_animation_left_menu_alignment", $loading_animation_left_menu_alignment);

        $smooth_scroll = new BridgeQodeField("yesno", "smooth_scroll", "yes", esc_html__("Smooth Scroll", "bridge"), esc_html__("Enabling this option will perform a smooth scrolling effect on every page (except on Mac and touch devices)", "bridge"));
        $panel4->addChild("smooth_scroll", $smooth_scroll);

        $elements_animation_on_touch = new BridgeQodeField("yesno", "elements_animation_on_touch", "no", esc_html__("Elements Animation on Mobile/Touch Devices", "bridge"), esc_html__("Enabling this option will allow elements (shortcodes) to animate on mobile / touch devices", "bridge"));
        $panel4->addChild("elements_animation_on_touch", $elements_animation_on_touch);

        $show_back_button = new BridgeQodeField("yesno", "show_back_button", "yes", esc_html__("Show 'Back To Top Button'", "bridge"), esc_html__("Enabling this option will display a Back to Top button on every page", "bridge"));
        $panel4->addChild("show_back_button", $show_back_button);

        $responsiveness = new BridgeQodeField("yesno", "responsiveness", "yes", esc_html__("Responsiveness", "bridge"), esc_html__("Enabling this option will make all pages responsive", "bridge"));
        $panel4->addChild("responsiveness", $responsiveness);

        $content_sidebar_responsiveness = new BridgeQodeField("yesno", "content_sidebar_responsiveness", "no", esc_html__("Sidebar Responsiveness for Tablet Devices (Portrait View)", "bridge"), esc_html__("Enabling this option will enable responsive sidebar on tablet devices in portrait view. Default behavior is for responsive sidebar to be enabled in Mobile View", "bridge"));
        $panel4->addChild("content_sidebar_responsiveness", $content_sidebar_responsiveness);

        $favicon_image = new BridgeQodeField("image", "favicon_image", QODE_ROOT . "/img/favicon.ico", esc_html__("Favicon Image", "bridge"), esc_html__("Choose a favicon image to be displayed", "bridge"));
        $panel4->addChild("favicon_image", $favicon_image);

        $internal_no_ajax_links = new BridgeQodeField("textarea", "internal_no_ajax_links", "", esc_html__("List of Internal URLs Loaded Without AJAX (Separated With Comma)", "bridge"), esc_html__("To disable AJAX transitions on certain pages, enter their full URLs here (for example: http://www.mydomain.com/forum/)", "bridge"));
        $panel4->addChild("internal_no_ajax_links", $internal_no_ajax_links);

        // Custom Code

        $panel3 = new BridgeQodePanel("Custom Code", "custom_code");
        $generalPage->addChild("panel3", $panel3);

        $custom_css = new BridgeQodeField("textarea", "custom_css", "", esc_html__("Custom CSS", "bridge"), esc_html__("Enter your custom CSS here", "bridge"));
        $panel3->addChild("custom_css", $custom_css);

        $custom_svg_css = new BridgeQodeField("textarea", "custom_svg_css", "", esc_html__("Custom SVG CSS", "bridge"), esc_html__("Enter your SVG CSS here", "bridge"));
        $panel3->addChild("custom_svg_css", $custom_svg_css);

        $custom_js = new BridgeQodeField("textarea", "custom_js", "", esc_html__("Custom JS", "bridge"), esc_html__('Enter your custom Javascript here (jQuery selector is "$j" because of the conflict mode)', "bridge"));
        $panel3->addChild("custom_js", $custom_js);

        // SEO

        $panel2 = new BridgeQodePanel("SEO", "seo");
        $generalPage->addChild("panel2", $panel2);

        $google_analytics_code = new BridgeQodeField("text", "google_analytics_code", "", esc_html__("Google Analytics Account ID", "bridge"), esc_html__("With this field you can monitor traffic on your website", "bridge"));
        $panel2->addChild("google_analytics_code", $google_analytics_code);

        $disable_qode_seo = new BridgeQodeField("yesno", "disable_qode_seo", "no", esc_html__("Disable Qode SEO", "bridge"), esc_html__("Enabling this option will turn off Qode SEO", "bridge"), array(),
            array("dependence" => true,
                "dependence_hide_on_yes" => "#qodef_disable_qode_seo_container",
                "dependence_show_on_yes" => ""));
        $panel2->addChild("disable_qode_seo", $disable_qode_seo);

        $disable_qode_seo_container = new BridgeQodeContainer("disable_qode_seo_container", "disable_qode_seo", "yes");
        $panel2->addChild("disable_qode_seo_container", $disable_qode_seo_container);

        $meta_keywords = new BridgeQodeField("textarea", "meta_keywords", "", esc_html__("Meta Keywords", "bridge"), esc_html__("Add relevant keywords separated with commas to improve SEO", "bridge"));
        $disable_qode_seo_container->addChild("meta_keywords", $meta_keywords);

        $meta_description = new BridgeQodeField("textarea", "meta_description", "", esc_html__("Meta Description", "bridge"), esc_html__("Enter a short description of the website for SEO", "bridge"));
        $disable_qode_seo_container->addChild("meta_description", $meta_description);


		// Google Maps

		$panel_google_maps = new BridgeQodePanel(esc_html__("Google Maps", "bridge"), "google_maps");
		$generalPage->addChild("panel_google_maps", $panel_google_maps);

		$google_maps_api_key = new BridgeQodeField("text", "google_maps_api_key", "", esc_html__("Google Maps Api Key", "bridge"), esc_html__("Insert your Google Maps API key here. For instructions on how to create a Google Maps API key, please refer to our to our documentation.", "bridge"));
		$panel_google_maps->addChild("google_maps_api_key", $google_maps_api_key);

    }

    add_action('bridge_qode_action_options_map','bridge_qode_general_options_map',10);
}