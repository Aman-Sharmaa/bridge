<?php

if(!function_exists('bridge_qode_title_options_map')) {
    /**
     * Title options page
     */
    function bridge_qode_title_options_map() {

        $titlePage = new BridgeQodeAdminPage("_title", esc_html__('Title', 'bridge'), "fa fa-list-alt");
        bridge_qode_framework()->qodeOptions->addAdminPage("title", $titlePage);

        $panel8 = new BridgeQodePanel(esc_html__('Title','bridge'), "title_panel");
        $titlePage->addChild("panel8", $panel8);
        $dont_show_page_title = new BridgeQodeField("yesno", "dont_show_page_title", "no", esc_html__('Hide Title Area', 'bridge'), esc_html__('Enable this option to turn off page title area', 'bridge'), array(), array("dependence" => true, "dependence_hide_on_yes" => "#qodef_page_title_area_container", "dependence_show_on_yes" => ""));
        $panel8->addChild("dont_show_page_title", $dont_show_page_title);

        $page_title_area_container = new BridgeQodeContainer("page_title_area_container", "dont_show_page_title", "yes");
        $panel8->addChild("page_title_area_container", $page_title_area_container);


        $animate_title_area = new BridgeQodeField("select", "animate_title_area", "no", esc_html__('Animations', 'bridge'), esc_html__('Choose an animation for Title Area', 'bridge'), array(
        	"no"				=> esc_html__('No animation', 'bridge'),
            "text_right_left"	=> esc_html__('Text right to left', 'bridge'),
            "area_top_bottom"	=> esc_html__('Title area top to bottom', 'bridge')
        ));
        $page_title_area_container->addChild("animate_title_area", $animate_title_area);


        $dont_show_page_title_text = new BridgeQodeField("yesno", "dont_show_page_title_text", "no", esc_html__('Don\'t Show Title Text', 'bridge'), esc_html__('Enable this option to turn off page title text', 'bridge'), array(), array("dependence" => true, "dependence_hide_on_yes" => "#qodef_page_title_area_text_container", "dependence_show_on_yes" => ""));
        $page_title_area_container->addChild("dont_show_page_title_text", $dont_show_page_title_text);

        $page_title_area_text_container = new BridgeQodeContainer("page_title_area_text_container", "dont_show_page_title_text", "yes");
        $page_title_area_container->addChild("page_title_area_text_container", $page_title_area_text_container);


        $page_title_position = new BridgeQodeField("select", "page_title_position", "left", esc_html__('Title Text Alignment', 'bridge'), esc_html__('Specify Title text alignment', 'bridge'), array(
        	"left"		=> esc_html__('Left', 'bridge'),
            "center"	=> esc_html__('Center', 'bridge'),
            "right"		=> esc_html__('Right', 'bridge')
        ));
        $page_title_area_text_container->addChild("page_title_position", $page_title_position);
        $predefined_title_sizes = new BridgeQodeField("select", "predefined_title_sizes", "small", esc_html__('Text Size','bridge'), esc_html__('Choose a default Title size', 'bridge'), array(
        	"small"		=> esc_html__('Small', 'bridge'),
            "medium"	=> esc_html__('Medium', 'bridge'),
            "large"		=> esc_html__('Large', 'bridge')
        ));
        $page_title_area_text_container->addChild("predefined_title_sizes", $predefined_title_sizes);
        $title_text_shadow = new BridgeQodeField("yesno", "title_text_shadow", "no", esc_html__('Text Shadow', 'bridge'), esc_html__('Enabling this option will give Title text a shadow', 'bridge'));
        $page_title_area_text_container->addChild("title_text_shadow", $title_text_shadow);
        $title_text_margin = new BridgeQodeField("text", "title_text_margin", "", esc_html__('Text Margin (top right bottom left)', 'bridge'), esc_html__('Set margin for title text, our suggestion is to use percentage mark because of responsivness.', 'bridge'), array(), array("col_width" => 3));
        $page_title_area_text_container->addChild("title_text_margin", $title_text_margin);
        $title_background_color = new BridgeQodeField("color", "title_background_color", "", esc_html__('Background Color', 'bridge'), esc_html__('Choose a background color for Title Area', 'bridge'));
        $page_title_area_container->addChild("title_background_color", $title_background_color);
        $title_image = new BridgeQodeField("image", "title_image", "", esc_html__('Background Image', 'bridge'), esc_html__('Choose an Image for Title Area', 'bridge'));
        $page_title_area_container->addChild("title_image", $title_image);
        $responsive_title_image = new BridgeQodeField("yesno", "responsive_title_image", "no", esc_html__('Background Responsive Image', 'bridge'), esc_html__('Enabling this option will make Title background image responsive', 'bridge'), array(), array("dependence" => true, "dependence_hide_on_yes" => "#qodef_responsive_title_image_container", "dependence_show_on_yes" => ""));
        $page_title_area_container->addChild("responsive_title_image", $responsive_title_image);

        $responsive_title_image_container = new BridgeQodeContainer("responsive_title_image_container", "responsive_title_image", "yes");
        $page_title_area_container->addChild("responsive_title_image_container", $responsive_title_image_container);
        $fixed_title_image = new BridgeQodeField("select", "fixed_title_image", "no", esc_html__('Parallax Title Image', 'bridge'), esc_html__('Enabling this option will make Title image parallax', 'bridge'), array(
			'no'		=> esc_html__( 'No', 'bridge' ),
			'yes'		=> esc_html__( 'Yes', 'bridge' ),
            "yes_zoom"	=> esc_html__( 'Yes, with zoom out', 'bridge')
        ));
        $responsive_title_image_container->addChild("fixed_title_image", $fixed_title_image);
        $title_height = new BridgeQodeField("text", "title_height", "", esc_html__( 'Title Height (px)', 'bridge'), esc_html__( 'Set a height for Title Area in pixels', 'bridge'), array(), array("col_width" => 3));
        $responsive_title_image_container->addChild("title_height", $title_height);
        $title_overlay_image = new BridgeQodeField("image", "title_overlay_image", "", esc_html__( 'Pattern Overlay Image', 'bridge'), esc_html__( 'Choose an image to be used as pattern over Title Area', 'bridge'));
        $page_title_area_container->addChild("title_overlay_image", $title_overlay_image);
        $title_separator = new BridgeQodeField("yesno", "title_separator", "yes", esc_html__( 'Show Title Separator', 'bridge'), esc_html__( 'Enabling this option will display a separator underneath Title', 'bridge'), array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_title_separator_container, #qodef_animation_page_separator_container"));
        $page_title_area_container->addChild("title_separator", $title_separator);
        $title_separator_container = new BridgeQodeContainer("title_separator_container", "title_separator", "no");
        $page_title_area_container->addChild("title_separator_container", $title_separator_container);
        $title_separator_color = new BridgeQodeField("color", "title_separator_color", "", esc_html__( 'Title Separator Color', 'bridge'), esc_html__( 'Choose a color for Title separator', 'bridge'));
        $title_separator_container->addChild("title_separator_color", $title_separator_color);

		$title_gradient_separator = new BridgeQodeField("yesno", "title_gradient_separator", "no", esc_html__( 'Enable Separator Gradient Color', 'bridge'), "", array());
		$title_separator_container->addChild("title_gradient_separator", $title_gradient_separator);

        $title_separator_width = new BridgeQodeField("text", "title_separator_width", "", esc_html__( 'Title Separator Width (px)', 'bridge'), esc_html__( 'Set the separator width in pixels', 'bridge'), array(), array("col_width" => 3));
        $title_separator_container->addChild("title_separator_width", $title_separator_width);

        $enable_title_angled = new BridgeQodeField("yesno", "enable_title_angled", "no", esc_html__( 'Enable Angled Title', 'bridge'), esc_html__( 'Enabling this option will show angled shape in background', 'bridge'), array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_enable_title_angled_container"));
        $page_title_area_container->addChild("enable_title_angled", $enable_title_angled);

        $enable_title_angled_container = new BridgeQodeContainer("enable_title_angled_container", "enable_title_angled", "no");
        $page_title_area_container->addChild("enable_title_angled_container", $enable_title_angled_container);

        $title_angled_section_direction = new BridgeQodeField("select", "title_angled_section_direction", "", esc_html__( 'Angled Direction', 'bridge'), esc_html__( 'Choose a direction for angled shape in title background', 'bridge'), array(
            "from_left_to_right" => esc_html__( 'From Left To Right', 'bridge'),
            "from_right_to_left" => esc_html__( 'From Right To Left', 'bridge')
        ));
        $enable_title_angled_container->addChild("title_angled_section_direction", $title_angled_section_direction);

        $title_angled_section_color = new BridgeQodeField("color", "title_angled_section_color", "", esc_html__( 'Background Color', 'bridge'), esc_html__( 'Choose a background color for angled shape','bridge'));
        $enable_title_angled_container->addChild("title_angled_section_color", $title_angled_section_color);

        $border_bottom_title_area = new BridgeQodeField("yesno", "border_bottom_title_area", "no", esc_html__( 'Bottom Border', 'bridge'), esc_html__( 'Enabling this option will display bottom border on Title Area','bridge'), array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_border_bottom_title_area_container"));
        $page_title_area_container->addChild("border_bottom_title_area", $border_bottom_title_area);
        $border_bottom_title_area_container = new BridgeQodeContainer("border_bottom_title_area_container", "border_bottom_title_area", "no");
        $page_title_area_container->addChild("border_bottom_title_area_container", $border_bottom_title_area_container);
        $border_bottom_title_area_color = new BridgeQodeField("color", "border_bottom_title_area_color", "", esc_html__( 'Bottom Border Color', 'bridge'), esc_html__( 'Choose a color for Title Area bottom border', 'bridge'));
        $border_bottom_title_area_container->addChild("border_bottom_title_area_color", $border_bottom_title_area_color);

        $border_bottom_in_grid_title_area = new BridgeQodeField('yesno', 'border_bottom_in_grid_title_area', 'no', esc_html__( 'Border In Grid', 'bridge'), esc_html__( 'Set border in grid', 'bridge'));
        $border_bottom_title_area_container->addChild('border_bottom_in_grid_title_area', $border_bottom_in_grid_title_area);

        $margin_after_title = new BridgeQodeField("text", "margin_after_title", "", esc_html__( 'Margin After Title for Default Template (px)', 'bridge'), esc_html__( 'Set a bottom margin for Title Area', 'bridge'), array(), array("col_width" => 3));
        $panel8->addChild("margin_after_title", $margin_after_title);

        $margin_after_title_responsive = new BridgeQodeField("text", "margin_after_title_responsive", "", esc_html__( 'Margin After Title for Default Template on Touch Devices (px)', 'bridge'), esc_html__( 'Set a bottom margin for Title Area on touch devices', 'bridge'), array(), array("col_width" => 3));
        $panel8->addChild("margin_after_title_responsive", $margin_after_title_responsive);

        $panel4 = new BridgeQodePanel(esc_html__( 'Breadcrumbs', 'bridge'), "enable_breadcrumbs_panel");
        $titlePage->addChild("panel4", $panel4);
        $enable_breadcrumbs = new BridgeQodeField("yesno", "enable_breadcrumbs", "no", esc_html__( 'Enable Breadcrumbs', 'bridge'), esc_html__( 'This option will display Breadcrumbs in Title Area', 'bridge'), array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_enable_breadcrumbs_container, #qodef_animation_page_breadcrumb_container"));
        $panel4->addChild("enable_breadcrumbs", $enable_breadcrumbs);
        $enable_breadcrumbs_container = new BridgeQodeContainer("enable_breadcrumbs_container", "enable_breadcrumbs", "no");
        $panel4->addChild("enable_breadcrumbs_container", $enable_breadcrumbs_container);
        $breadcrumbs_color = new BridgeQodeField("color", "breadcrumbs_color", "", esc_html__( 'Breadcrumbs Color', 'bridge'), esc_html__( 'Choose a color for Breadcrumb text', 'bridge'));
        $enable_breadcrumbs_container->addChild("breadcrumbs_color", $breadcrumbs_color);


        $panel9 = new BridgeQodePanel(esc_html__( 'Title Scroll Animations', 'bridge'), 'title_animations');
        $titlePage->addChild('panel9', $panel9);

        //Whole title content animation
        $page_title_whole_content_animations = new BridgeQodeField('yesno', 'page_title_whole_content_animations', 'no', esc_html__( 'Enable Whole Title Content Animation', 'bridge'), esc_html__( 'This option will enable whole title content animation', 'bridge'), array(), array(
            'dependence' => true,
            'dependence_hide_on_yes' => '',
            'dependence_show_on_yes' => '#qodef_page_title_whole_content_animations_container'
        ));
        $panel9->addChild('page_title_whole_content_animations', $page_title_whole_content_animations);

        $page_title_whole_content_animations_container = new BridgeQodeContainer('page_title_whole_content_animations_container', 'page_title_whole_content_animations', 'no');
        $panel9->addChild('page_title_whole_content_animations_container', $page_title_whole_content_animations_container);

        $page_title_whole_content_animations_data_start = new BridgeQodeGroup(esc_html__( 'Scrolling Animation Start Point', 'bridge'), esc_html__( 'These are properties for the first keyframe in scrolling animation', 'bridge'));
        $page_title_whole_content_animations_container->addChild('page_title_whole_content_animations_data_start', $page_title_whole_content_animations_data_start);

        $row1 = new BridgeQodeRow();
        $page_title_whole_content_animations_data_start->addChild('row1', $row1);

        $page_title_whole_content_data_start = new BridgeQodeField('textsimple', 'page_title_whole_content_data_start', '', esc_html__( 'Scrollbar Top Distance (px)', 'bridge'));
        $row1->addChild('page_title_whole_content_data_start', $page_title_whole_content_data_start);

        $page_title_whole_content_start_custom_style = new BridgeQodeField('textareasimple', 'page_title_whole_content_start_custom_style', '', esc_html__( 'Enter CSS declarations separated by semicolons', 'bridge'));
        $row1->addChild('page_title_whole_content_start_custom_style', $page_title_whole_content_start_custom_style);

        $page_title_whole_content_animations_data_end = new BridgeQodeGroup(esc_html__( 'Scrolling Animation End Point', 'bridge'), esc_html__( 'These are properties for the last keyframe in scrolling animation', 'bridge'));
        $page_title_whole_content_animations_container->addChild('page_title_whole_content_animations_data_end', $page_title_whole_content_animations_data_end);

        $row2 = new BridgeQodeRow();
        $page_title_whole_content_animations_data_end->addChild('row2', $row2);

        $page_title_whole_content_data_end = new BridgeQodeField('textsimple', 'page_title_whole_content_data_end', '', esc_html__( 'Scrollbar Top Distance (px)', 'bridge'));
        $row2->addChild('page_title_whole_content_data_end', $page_title_whole_content_data_end);

        $page_title_whole_content_end_custom_style = new BridgeQodeField('textareasimple', 'page_title_whole_content_end_custom_style', '', esc_html__( 'Enter CSS declarations separated by semicolons', 'bridge'));
        $row2->addChild('page_title_whole_content_end_custom_style', $page_title_whole_content_end_custom_style);

        //Title Animations
        $page_title_animations = new BridgeQodeField('yesno', 'page_title_animations', 'no', esc_html__( 'Enable Page Title Animations', 'bridge'), esc_html__( 'This option will enable Page Title Scroll Animations', 'bridge'), array(), array(
            'dependence' => true,
            'dependence_hide_on_yes' => '',
            'dependence_show_on_yes' => '#qodef_page_title_animations_container'
        ));
        $panel9->addChild('page_title_animations', $page_title_animations);

        $page_title_animations_container = new BridgeQodeContainer('page_title_animations_container', 'page_title_animations', 'no');
        $panel9->addChild('page_title_animations_container', $page_title_animations_container);

        $page_title_animations_data_start = new BridgeQodeGroup(esc_html__( 'Scrolling Animation Start Point', 'bridge'), esc_html__( 'These are properties for the first keyframe in scrolling animation', 'bridge'));
        $page_title_animations_container->addChild('page_title_animations_data_start', $page_title_animations_data_start);

        $row1 = new BridgeQodeRow();
        $page_title_animations_data_start->addChild('row1', $row1);

        $page_title_data_start = new BridgeQodeField('textsimple', 'page_title_data_start', '', esc_html__( 'Scrollbar Top Distance (px)', 'bridge'));
        $row1->addChild('page_title_data_start', $page_title_data_start);

        $page_title_start_custom_style = new BridgeQodeField('textareasimple', 'page_title_start_custom_style', '', esc_html__( 'Enter CSS declarations separated by semicolons', 'bridge'));
        $row1->addChild('page_title_start_custom_style', $page_title_start_custom_style);

        $page_title_animations_data_end = new BridgeQodeGroup(esc_html__( 'Scrolling Animation End Point', 'bridge'), esc_html__( 'These are properties for the last keyframe in scrolling animation', 'bridge'));
        $page_title_animations_container->addChild('page_title_animations_data_end', $page_title_animations_data_end);

        $row2 = new BridgeQodeRow();
        $page_title_animations_data_end->addChild('row2', $row2);

        $page_title_data_end = new BridgeQodeField('textsimple', 'page_title_data_end', '', esc_html__( 'Scrollbar Top Distance (px)', 'bridge'));
        $row2->addChild('page_title_data_end', $page_title_data_end);

        $page_title_end_custom_style = new BridgeQodeField('textareasimple', 'page_title_end_custom_style', '', esc_html__( 'Enter CSS declarations separated by semicolons', 'bridge'));
        $row2->addChild('page_title_end_custom_style', $page_title_end_custom_style);

        //Title Separator Animations
        $animation_page_separator_container = new BridgeQodeContainerNoStyle('animation_page_separator_container', 'title_separator', 'no');
        $panel9->addChild('animation_page_separator_container', $animation_page_separator_container);

        $page_title_separator_animations = new BridgeQodeField('yesno', 'page_title_separator_animations', 'no', esc_html__( 'Enable Page Title Separator Animations', 'bridge'), esc_html__( 'This option will enable Page Title Separator Scroll Animations', 'bridge'), array(), array(
            'dependence' => true,
            'dependence_hide_on_yes' => '',
            'dependence_show_on_yes' => '#qodef_page_title_separator_animations_container'
        ));
        $animation_page_separator_container->addChild('page_title_separator_animations', $page_title_separator_animations);

        $page_title_separator_animations_container = new BridgeQodeContainer('page_title_separator_animations_container', 'page_title_separator_animations', 'no');
        $animation_page_separator_container->addChild('page_title_separator_animations_container', $page_title_separator_animations_container);

        $page_title_separator_animations_data_start = new BridgeQodeGroup(esc_html__( 'Scrolling Animation Start Point', 'bridge'), esc_html__( 'These are properties for the first keyframe in scrolling animation', 'bridge'));
        $page_title_separator_animations_container->addChild('page_title_separator_animations_data_start', $page_title_separator_animations_data_start);

        $row1 = new BridgeQodeRow();
        $page_title_separator_animations_data_start->addChild('row1', $row1);

        $page_title_separator_data_start = new BridgeQodeField('textsimple', 'page_title_separator_data_start', '', esc_html__( 'Scrollbar Top Distance (px)', 'bridge'));
        $row1->addChild('page_title_separator_data_start', $page_title_separator_data_start);

        $page_title_separator_start_custom_style = new BridgeQodeField('textareasimple', 'page_title_separator_start_custom_style', '', esc_html__( 'Enter CSS declarations separated by semicolons', 'bridge'));
        $row1->addChild('page_title_separator_start_custom_style', $page_title_separator_start_custom_style);

        $page_title_separator_animations_data_end = new BridgeQodeGroup(esc_html__( 'Scrolling Animation End Point', 'bridge'), esc_html__( 'These are properties for the last keyframe in scrolling animation', 'bridge'));
        $page_title_separator_animations_container->addChild('page_title_separator_animations_data_end', $page_title_separator_animations_data_end);

        $row2 = new BridgeQodeRow();
        $page_title_separator_animations_data_end->addChild('row2', $row2);

        $page_title_separator_data_end = new BridgeQodeField('textsimple', 'page_title_separator_data_end', '', esc_html__( 'Scrollbar Top Distance (px)', 'bridge'));
        $row2->addChild('page_title_separator_data_end', $page_title_separator_data_end);

        $page_title_separator_end_custom_style = new BridgeQodeField('textareasimple', 'page_title_separator_end_custom_style', '', esc_html__( 'Enter CSS declarations separated by semicolons', 'bridge'));
        $row2->addChild('page_title_separator_end_custom_style', $page_title_separator_end_custom_style);

        //Subtitle Animations
        $page_subtitle_animations = new BridgeQodeField('yesno', 'page_subtitle_animations', 'no', esc_html__( 'Enable Page Subtitle Animations', 'bridge'), esc_html__( 'This option will enable Page Subtitle Scroll Animations', 'bridge'), array(), array(
            'dependence' => true,
            'dependence_hide_on_yes' => '',
            'dependence_show_on_yes' => '#qodef_page_subtitle_animations_container'
        ));
        $panel9->addChild('page_subtitle_animations', $page_subtitle_animations);

        $page_subtitle_animations_container = new BridgeQodeContainer('page_subtitle_animations_container', 'page_subtitle_animations', 'no');
        $panel9->addChild('page_subtitle_animations_container', $page_subtitle_animations_container);

        $page_subtitle_animations_data_start = new BridgeQodeGroup(esc_html__( 'Scrolling Animation Start Point', 'bridge'), esc_html__( 'These are properties for the first keyframe in scrolling animation', 'bridge'));
        $page_subtitle_animations_container->addChild('page_subtitle_animations_data_start', $page_subtitle_animations_data_start);

        $row1 = new BridgeQodeRow();
        $page_subtitle_animations_data_start->addChild('row1', $row1);

        $page_subtitle_data_start = new BridgeQodeField('textsimple', 'page_subtitle_data_start', '', esc_html__( 'Scrollbar Top Distance (px)', 'bridge'));
        $row1->addChild('page_subtitle_data_start', $page_subtitle_data_start);

        $page_subtitle_start_custom_style = new BridgeQodeField('textareasimple', 'page_subtitle_start_custom_style', '', esc_html__( 'Enter CSS declarations separated by semicolons', 'bridge'));
        $row1->addChild('page_subtitle_start_custom_style', $page_subtitle_start_custom_style);

        $page_subtitle_animations_data_end = new BridgeQodeGroup(esc_html__( 'Scrolling Animation End Point', 'bridge'), esc_html__( 'These are properties for the last keyframe in scrolling animation', 'bridge'));
        $page_subtitle_animations_container->addChild('page_subtitle_animations_data_end', $page_subtitle_animations_data_end);

        $row2 = new BridgeQodeRow();
        $page_subtitle_animations_data_end->addChild('row2', $row2);

        $page_subtitle_data_end = new BridgeQodeField('textsimple', 'page_subtitle_data_end', '', esc_html__( 'Scrollbar Top Distance (px)', 'bridge'));
        $row2->addChild('page_subtitle_data_end', $page_subtitle_data_end);

        $page_subtitle_end_custom_style = new BridgeQodeField('textareasimple', 'page_subtitle_end_custom_style', '', esc_html__( 'Enter CSS declarations separated by semicolons', 'bridge'));
        $row2->addChild('page_subtitle_end_custom_style', $page_subtitle_end_custom_style);

        //Breadcrumb animations
        $animation_page_breadcrumb_container = new BridgeQodeContainerNoStyle('animation_page_breadcrumb_container', 'enable_breadcrumbs', 'no');
        $panel9->addChild('animation_page_breadcrumb_container', $animation_page_breadcrumb_container);

        $page_title_breadcrumbs_animations = new BridgeQodeField('yesno', 'page_title_breadcrumbs_animations', 'no', esc_html__( 'Enable Page Title Breadcrumbs Animations', 'bridge'), esc_html__( 'This option will enable Page Title Breadcrumbs Scroll Animations','bridge'), array(), array(
            'dependence' => true,
            'dependence_hide_on_yes' => '',
            'dependence_show_on_yes' => '#qodef_page_title_breadcrumbs_animations_container'
        ));
        $animation_page_breadcrumb_container->addChild('page_title_breadcrumbs_animations', $page_title_breadcrumbs_animations);

        $page_title_breadcrumbs_animations_container = new BridgeQodeContainer('page_title_breadcrumbs_animations_container', 'page_title_breadcrumbs_animations', 'no');
        $animation_page_breadcrumb_container->addChild('page_title_breadcrumbs_animations_container', $page_title_breadcrumbs_animations_container);

        $page_title_breadcrumbs_animations_data_start = new BridgeQodeGroup(esc_html__( 'Scrolling Animation Start Point','bridge'), esc_html__( 'These are properties for the first keyframe in scrolling animation', 'bridge'));
        $page_title_breadcrumbs_animations_container->addChild('page_title_breadcrumbs_animations_data_start', $page_title_breadcrumbs_animations_data_start);

        $row1 = new BridgeQodeRow();
        $page_title_breadcrumbs_animations_data_start->addChild('row1', $row1);

        $page_title_breadcrumbs_data_start = new BridgeQodeField('textsimple', 'page_title_breadcrumbs_data_start', '', esc_html__( 'Scrollbar Top Distance (px)', 'bridge'));
        $row1->addChild('page_title_breadcrumbs_data_start', $page_title_breadcrumbs_data_start);

        $page_title_breadcrumbs_start_custom_style = new BridgeQodeField('textareasimple', 'page_title_breadcrumbs_start_custom_style', '', esc_html__( 'Enter CSS declarations separated by semicolons', 'bridge'));
        $row1->addChild('page_title_breadcrumbs_start_custom_style', $page_title_breadcrumbs_start_custom_style);

        $page_title_breadcrumbs_animations_data_end = new BridgeQodeGroup(esc_html__( 'Scrolling Animation End Point', 'bridge'), esc_html__( 'These are properties for the last keyframe in scrolling animation', 'bridge'));
        $page_title_breadcrumbs_animations_container->addChild('page_title_breadcrumbs_animations_data_end', $page_title_breadcrumbs_animations_data_end);

        $row2 = new BridgeQodeRow();
        $page_title_breadcrumbs_animations_data_end->addChild('row2', $row2);

        $page_title_breadcrumbs_data_end = new BridgeQodeField('textsimple', 'page_title_breadcrumbs_data_end', '', esc_html__( 'Scrollbar Top Distance (px)','bridge'));
        $row2->addChild('page_title_breadcrumbs_data_end', $page_title_breadcrumbs_data_end);

        $page_title_breadcrumbs_end_custom_style = new BridgeQodeField('textareasimple', 'page_title_breadcrumbs_end_custom_style', '', esc_html__( 'Enter CSS declarations separated by semicolons', 'bridge'));
        $row2->addChild('page_title_breadcrumbs_end_custom_style', $page_title_breadcrumbs_end_custom_style);

    }
    add_action('bridge_qode_action_options_map','bridge_qode_title_options_map',50);
}