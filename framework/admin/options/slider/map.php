<?php
if(!function_exists('bridge_qode_slider_options_map')) {
    /**
     * Slider options page
     */
    function bridge_qode_slider_options_map(){

        $sliderPage = new BridgeQodeAdminPage("_slider", esc_html__('Qode Slider', 'bridge'), "fa fa-sliders");
        bridge_qode_framework()->qodeOptions->addAdminPage("slider", $sliderPage);

        // General Style

        $panel3 = new BridgeQodePanel(esc_html__('General Style', 'bridge'), "navigation_control_style");
        $sliderPage->addChild("panel3", $panel3);

        $qs_slider_height_tablet = new BridgeQodeField("text", "qs_slider_height_tablet", "", esc_html__('Slider Height For Tablet Portrait and Mobile Landscape View (px)', 'bridge'), esc_html__('Define slider height for tablet devices - portrait view and mobile devices landscape view','bridge'));
        $panel3->addChild("qs_slider_height_tablet", $qs_slider_height_tablet);

        $qs_slider_height_mobile = new BridgeQodeField("text", "qs_slider_height_mobile", "", esc_html__('Slider Height For Mobile Devices (px)', 'bridge'), esc_html__('Define slider height for mobile devices', 'bridge'));
        $panel3->addChild("qs_slider_height_mobile", $qs_slider_height_mobile);

        //Buttons

        $panel4 = new BridgeQodePanel(esc_html__('Buttons Style', 'bridge'), "buttons_panel");
        $sliderPage->addChild("panel4", $panel4);

        $group1 = new BridgeQodeGroup(esc_html__('Button 1 Style', 'bridge'), esc_html__('Define style for button 1.', 'bridge'));
        $panel4->addChild("group1", $group1);
        $row1 = new BridgeQodeRow();
        $group1->addChild("row1", $row1);

        $qs_button_color = new BridgeQodeField("colorsimple", "qs_button_color", "", esc_html__('Text Color', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("qs_button_color", $qs_button_color);

        $qs_button_hover_color = new BridgeQodeField("colorsimple", "qs_button_hover_color", "", esc_html__('Hover Text Color', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("qs_button_hover_color", $qs_button_hover_color);

        $qs_button_background_color = new BridgeQodeField("colorsimple", "qs_button_background_color", "", esc_html__('Background Color', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("qs_button_background_color", $qs_button_background_color);

        $qs_button_hover_background_color = new BridgeQodeField("colorsimple", "qs_button_hover_background_color", "", esc_html__('Background Hover Color', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("qs_button_hover_background_color", $qs_button_hover_background_color);

        $row2 = new BridgeQodeRow(true);
        $group1->addChild("row2", $row2);

        $qs_button_border_color = new BridgeQodeField("colorsimple", "qs_button_border_color", "", esc_html__('Border Color', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row2->addChild("qs_button_border_color", $qs_button_border_color);

        $qs_button_hover_border_color = new BridgeQodeField("colorsimple", "qs_button_hover_border_color", "", esc_html__('Border Hover Color', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row2->addChild("qs_button_hover_border_color", $qs_button_hover_border_color);

        $qs_button_border_width = new BridgeQodeField("textsimple", "qs_button_border_width", "", esc_html__('Border Width (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row2->addChild("qs_button_border_width", $qs_button_border_width);

        $qs_button_border_radius = new BridgeQodeField("textsimple", "qs_button_border_radius", "", esc_html__('Border radius (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row2->addChild("qs_button_border_radius", $qs_button_border_radius);

        $group2 = new BridgeQodeGroup(esc_html__('Button 2 Style', 'bridge') , esc_html__('Define style for button 2.', 'bridge'));
        $panel4->addChild("group2", $group2);
        $row1 = new BridgeQodeRow();
        $group2->addChild("row1", $row1);

        $qs_button2_color = new BridgeQodeField("colorsimple", "qs_button2_color", "", esc_html__('Text Color', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("qs_button2_color", $qs_button2_color);

        $qs_button2_hover_color = new BridgeQodeField("colorsimple", "qs_button2_hover_color", "", esc_html__('Hover Text Color', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("qs_button2_hover_color", $qs_button2_hover_color);

        $qs_button2_background_color = new BridgeQodeField("colorsimple", "qs_button2_background_color", "", esc_html__('Background Color', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("qs_button2_background_color", $qs_button2_background_color);

        $qs_button2_hover_background_color = new BridgeQodeField("colorsimple", "qs_button2_hover_background_color", "", esc_html__('Background Hover Color', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("qs_button2_hover_background_color", $qs_button2_hover_background_color);

        $row2 = new BridgeQodeRow(true);
        $group2->addChild("row2", $row2);

        $qs_button2_border_color = new BridgeQodeField("colorsimple", "qs_button2_border_color", "", esc_html__('Border Color', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row2->addChild("qs_button2_border_color", $qs_button2_border_color);

        $qs_button2_hover_border_color = new BridgeQodeField("colorsimple", "qs_button2_hover_border_color", "", esc_html__('Border Hover Color', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row2->addChild("qs_button2_hover_border_color", $qs_button2_hover_border_color);

        $qs_button2_border_width = new BridgeQodeField("textsimple", "qs_button2_border_width", "", esc_html__('Border Width (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row2->addChild("qs_button2_border_width", $qs_button2_border_width);

        $qs_button2_border_radius = new BridgeQodeField("textsimple", "qs_button2_border_radius", "", esc_html__('Border radius (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row2->addChild("qs_button2_border_radius", $qs_button2_border_radius);

		//Buttons v2

		$panel4V2Buttons = new BridgeQodePanel(esc_html__('Buttons V2 Style', 'bridge'), "buttons_v2_panel");
		$sliderPage->addChild("buttons_v2_panel", $panel4V2Buttons);

		$group1 = new BridgeQodeGroup(esc_html__('Button 1 Style', 'bridge'), esc_html__('Define style for button 1.', 'bridge'));
		$panel4V2Buttons->addChild("group1", $group1);
		$row1 = new BridgeQodeRow();
		$group1->addChild("row1", $row1);

		$qs_v2_button_color = new BridgeQodeField("colorsimple", "qs_v2_button_color", "", esc_html__('Text Color', 'bridge'), esc_html__('This is some description', 'bridge'));
		$row1->addChild("qs_v2_button_color", $qs_v2_button_color);

		$qs_v2_button_hover_color = new BridgeQodeField("colorsimple", "qs_v2_button_hover_color", "", esc_html__('Hover Text Color', 'bridge'), esc_html__('This is some description', 'bridge'));
		$row1->addChild("qs_v2_button_hover_color", $qs_v2_button_hover_color);

		$qs_v2_button_background_color = new BridgeQodeField("colorsimple", "qs_v2_button_background_color", "", esc_html__('Background Color', 'bridge'), esc_html__('This is some description', 'bridge'));
		$row1->addChild("qs_v2_button_background_color", $qs_v2_button_background_color);

		$qs_v2_button_hover_background_color = new BridgeQodeField("colorsimple", "qs_v2_button_hover_background_color", "", esc_html__('Background Hover Color', 'bridge'), esc_html__('This is some description', 'bridge'));
		$row1->addChild("qs_v2_button_hover_background_color", $qs_v2_button_hover_background_color);

		$row2 = new BridgeQodeRow(true);
		$group1->addChild("row2", $row2);

		$qs_v2_button_icon_left_border_color = new BridgeQodeField("colorsimple", "qs_v2_button_icon_left_border_color", "", esc_html__('Icon Left Border Color', 'bridge'), esc_html__('This is some description', 'bridge'));
		$row2->addChild("qs_v2_button_icon_left_border_color", $qs_v2_button_icon_left_border_color);

		$qs_v2_button_hover_icon_left_border_color = new BridgeQodeField("colorsimple", "qs_v2_button_hover_icon_left_border_color", "", esc_html__('Icon Left Border Hover Color', 'bridge'), esc_html__('This is some description', 'bridge'));
		$row2->addChild("qs_v2_button_hover_icon_left_border_color", $qs_v2_button_hover_icon_left_border_color);


		$qs_v2_button_icon_background_color = new BridgeQodeField("colorsimple", "qs_v2_button_icon_background_color", "", esc_html__('Icon Background Color', 'bridge'), esc_html__('This is some description', 'bridge'));
		$row2->addChild("qs_v2_button_icon_background_color", $qs_v2_button_icon_background_color);

		$qs_v2_button_hover_icon_background_color = new BridgeQodeField("colorsimple", "qs_v2_button_hover_icon_background_color", "", esc_html__('Icon Background Hover Color', 'bridge'), esc_html__('This is some description', 'bridge'));
		$row2->addChild("qs_v2_button_hover_icon_background_color", $qs_v2_button_hover_icon_background_color);

		$group2 = new BridgeQodeGroup("Button 2 Style", "Define style for button 2.");
		$panel4V2Buttons->addChild("group2", $group2);
		$row1 = new BridgeQodeRow();
		$group2->addChild("row1", $row1);

		$qs_v2_button2_color = new BridgeQodeField("colorsimple", "qs_v2_button2_color", "", esc_html__('Text Color', 'bridge'), esc_html__('This is some description', 'bridge'));
		$row1->addChild("qs_v2_button2_color", $qs_v2_button2_color);

		$qs_v2_button2_hover_color = new BridgeQodeField("colorsimple", "qs_v2_button2_hover_color", "", esc_html__('Hover Text Color', 'bridge'), esc_html__('This is some description', 'bridge'));
		$row1->addChild("qs_v2_button2_hover_color", $qs_v2_button2_hover_color);

		$qs_v2_button2_background_color = new BridgeQodeField("colorsimple", "qs_v2_button2_background_color", "", esc_html__('Background Color', 'bridge'), esc_html__('This is some description', 'bridge'));
		$row1->addChild("qs_v2_button2_background_color", $qs_v2_button2_background_color);

		$qs_v2_button2_hover_background_color = new BridgeQodeField("colorsimple", "qs_v2_button2_hover_background_color", "", esc_html__('Background Hover Color', 'bridge'), esc_html__('This is some description', 'bridge'));
		$row1->addChild("qs_v2_button2_hover_background_color", $qs_v2_button2_hover_background_color);

		$row2 = new BridgeQodeRow(true);
		$group2->addChild("row2", $row2);

		$qs_v2_button2_icon_left_border_color = new BridgeQodeField("colorsimple", "qs_v2_button2_icon_left_border_color", "", esc_html__('Icon Left Border Color', 'bridge'), esc_html__('This is some description', 'bridge'));
		$row2->addChild("qs_v2_button2_icon_left_border_color", $qs_v2_button2_icon_left_border_color);

		$qs_v2_button2_hover_icon_left_border_color = new BridgeQodeField("colorsimple", "qs_v2_button2_hover_icon_left_border_color", "", esc_html__('Icon Left Border Hover Color', 'bridge'), esc_html__('This is some description', 'bridge'));
		$row2->addChild("qs_v2_button2_hover_icon_left_border_color", $qs_v2_button2_hover_icon_left_border_color);


		$qs_v2_button2_icon_background_color = new BridgeQodeField("colorsimple", "qs_v2_button2_icon_background_color", "", esc_html__('Icon Background Color', 'bridge'), esc_html__('This is some description', 'bridge'));
		$row2->addChild("qs_v2_button_icon_background_color", $qs_v2_button2_icon_background_color);

		$qs_v2_button2_hover_icon_background_color = new BridgeQodeField("colorsimple", "qs_v2_button2_hover_icon_background_color", "", esc_html__('Icon Background Hover Color', 'bridge'), esc_html__('This is some description', 'bridge'));
		$row2->addChild("qs_v2_button2_hover_icon_background_color", $qs_v2_button2_hover_icon_background_color);

        // Custom cursor navigation style

        $panel5 = new BridgeQodePanel(esc_html__('Custom Cursor Navigation Style', 'bridge'), "navigation_custom_cursor_style");
        $sliderPage->addChild("panel5", $panel5);

        $qs_enable_navigation_custom_cursor = new BridgeQodeField("yesno", "qs_enable_navigation_custom_cursor", "no", esc_html__('Enable Custom Cursor for Navigation', 'bridge'), esc_html__('Enabling this option will display custom cursors for slider navigation', 'bridge'), array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_qs_enable_navigation_custom_cursor_container"));
        $panel5->addChild("qs_enable_navigation_custom_cursor", $qs_enable_navigation_custom_cursor);


        $qs_enable_navigation_custom_cursor_container = new BridgeQodeContainer("qs_enable_navigation_custom_cursor_container", "qs_enable_navigation_custom_cursor", "no");
        $panel5->addChild("qs_enable_navigation_custom_cursor_container", $qs_enable_navigation_custom_cursor_container);

        $cursor_image_left_right_area_size = new BridgeQodeField("text", "cursor_image_left_right_area_size", "", esc_html__('Clickable Left/Right Area Size (%)', 'bridge'), esc_html__('Define size of clickable left/right slider area in relation to slider width (default value is 23%)', 'bridge'), array(), array("col_width" => 3));
        $qs_enable_navigation_custom_cursor_container->addChild("cursor_image_left_right_area_size", $cursor_image_left_right_area_size);

        $cursor_image_left_normal = new BridgeQodeField("image", "cursor_image_left_normal", "", esc_html__('Cursor Image "Left" - Normal', 'bridge'), esc_html__('Choose a default cursor "Left" image to display', 'bridge'));
        $qs_enable_navigation_custom_cursor_container->addChild("cursor_image_left_normal", $cursor_image_left_normal);

        $cursor_image_right_normal = new BridgeQodeField("image", "cursor_image_right_normal", "", esc_html__('Cursor Image "Right" - Normal','bridge'), esc_html__('Choose a default cursor "Right" image to display', 'bridge'));
        $qs_enable_navigation_custom_cursor_container->addChild("cursor_image_right_normal", $cursor_image_right_normal);


        $cursor_image_left_light = new BridgeQodeField("image", "cursor_image_left_light", "", esc_html__('Cursor Image "Left" - Light', 'bridge'), esc_html__('Choose a cursor "Left" light image to display', 'bridge'));
        $qs_enable_navigation_custom_cursor_container->addChild("cursor_image_left_light", $cursor_image_left_light);

        $cursor_image_right_light = new BridgeQodeField("image", "cursor_image_right_light", "", esc_html__('Cursor Image "Right" - Light', 'bridge'), esc_html__('Choose a cursor "Right" light image to display', 'bridge'));
        $qs_enable_navigation_custom_cursor_container->addChild("cursor_image_right_light", $cursor_image_right_light);

        $cursor_image_left_dark = new BridgeQodeField("image", "cursor_image_left_dark", "", esc_html__('Cursor Image "Left" - Dark', 'bridge'), esc_html__('Choose a cursor "Left" dark image to display', 'bridge'));
        $qs_enable_navigation_custom_cursor_container->addChild("cursor_image_left_dark", $cursor_image_left_dark);

        $cursor_image_right_dark = new BridgeQodeField("image", "cursor_image_right_dark", "", esc_html__('Cursor Image "Right" - Dark', 'bridge'), esc_html__('Choose a cursor "Right" dark image to display' ,'bridge'));
        $qs_enable_navigation_custom_cursor_container->addChild("cursor_image_right_dark", $cursor_image_right_dark);


        $qs_enable_navigation_custom_cursor_grab = new BridgeQodeField("yesno", "qs_enable_navigation_custom_cursor_grab", "no", esc_html__('Enable Custom Cursor for "Grab" Arrow', 'bridge'), esc_html__('Enabling this option will display custom cursor for slider "Grab" arrow', 'bridge'), array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_qs_enable_navigation_custom_cursor_grab_container"));
        $qs_enable_navigation_custom_cursor_container->addChild("qs_enable_navigation_custom_cursor_grab", $qs_enable_navigation_custom_cursor_grab);

        $qs_enable_navigation_custom_cursor_grab_container = new BridgeQodeContainer("qs_enable_navigation_custom_cursor_grab_container", "qs_enable_navigation_custom_cursor_grab", "no");
        $qs_enable_navigation_custom_cursor_container->addChild("qs_enable_navigation_custom_cursor_grab_container", $qs_enable_navigation_custom_cursor_grab_container);

        $cursor_image_grab_normal = new BridgeQodeField("image", "cursor_image_grab_normal", "", esc_html__('Cursor Image "Grab" - Normal', 'bridge'), esc_html__('Choose a default cursor "Grab" image to display', 'bridge'));
        $qs_enable_navigation_custom_cursor_grab_container->addChild("cursor_image_grab_normal", $cursor_image_grab_normal);

        $cursor_image_grab_light = new BridgeQodeField("image", "cursor_image_grab_light", "", esc_html__('Cursor Image "Grab" - Light', 'bridge'), esc_html__('Choose a cursor "Grab" light image to display', 'bridge'));
        $qs_enable_navigation_custom_cursor_grab_container->addChild("cursor_image_grab_light", $cursor_image_grab_light);

        $cursor_image_grab_dark = new BridgeQodeField("image", "cursor_image_grab_dark", "", esc_html__('Cursor Image "Grab" - Dark', 'bridge'), esc_html__('Choose a cursor "Grab" dark image to display', 'bridge'));
        $qs_enable_navigation_custom_cursor_grab_container->addChild("cursor_image_grab_dark", $cursor_image_grab_dark);
    }
    add_action('bridge_qode_action_options_map','bridge_qode_slider_options_map',90);
}