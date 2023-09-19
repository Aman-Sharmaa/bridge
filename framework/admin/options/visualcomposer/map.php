<?php

if(!function_exists('bridge_qode_visualcomposer_options_map')) {
    /**
     * WPBakery options page
     */
    function bridge_qode_visualcomposer_options_map() {

        $visualComposerPage = new BridgeQodeAdminPage('_visual_composer', esc_html__('WPBakery', 'bridge'), 'fa fa-ellipsis-h');
        bridge_qode_framework()->qodeOptions->addAdminPage('visualComposerPage', $visualComposerPage);

        $panel1 = new BridgeQodePanel(esc_html__('WPBakery Grid Elements', 'bridge'), 'vc_grid_elements');
        $visualComposerPage->addChild('panel1', $panel1);

        $enable_grid_elements = new BridgeQodeField('yesno', 'enable_grid_elements', 'no', esc_html__('Enable Grid Elements', 'bridge'), esc_html__('Enabling this option will allow WPBakery Grid Elements. NOTE: Enabling Grid Elements will disable Page Transition.', 'bridge'), array(), array(
            'dependence' => 'true',
            'dependence_hide_on_yes' => '',
            'dependence_show_on_yes' => '#qodef_vc_grid_elements_style'
        ));
        $panel1->addChild('enable_grid_elements', $enable_grid_elements);

        $panel2 = new BridgeQodePanel(esc_html__('WPBakery Grid Elements Style', 'bridge'), 'vc_grid_elements_style', 'enable_grid_elements', 'no');
        $visualComposerPage->addChild('panel2', $panel2);

        $group1 = new BridgeQodeGroup(esc_html__('Button', 'bridge'), esc_html__('Define styles for grid button', 'bridge'));
        $panel2->addChild('group1', $group1);

        $row1 = new BridgeQodeRow();
        $group1->addChild("row1", $row1);

        $vc_grid_button_title_color = new BridgeQodeField('colorsimple', 'vc_grid_button_title_color', '', esc_html__('Text Color', 'bridge'), '');
        $row1->addChild('vc_grid_button_title_color', $vc_grid_button_title_color);
        $vc_grid_button_title_hovercolor = new BridgeQodeField('colorsimple', 'vc_grid_button_title_hovercolor', '', esc_html__('Hover Color', 'bridge'), '');
        $row1->addChild('vc_grid_button_title_hovercolor', $vc_grid_button_title_hovercolor);

        $row2 = new BridgeQodeRow(true);
        $group1->addChild('row2', $row2);

        $vc_grid_button_title_google_fonts = new BridgeQodeField('fontsimple', 'vc_grid_button_title_google_fonts', '-1', esc_html__('Font Family', 'bridge'), '');
        $row2->addChild('vc_grid_button_title_google_fonts', $vc_grid_button_title_google_fonts);
        $vc_grid_button_title_fontsize = new BridgeQodeField('textsimple', 'vc_grid_button_title_fontsize', '', esc_html__('Font Size (px)', 'bridge'), '');
        $row2->addChild('vc_grid_button_title_fontsize', $vc_grid_button_title_fontsize);
        $vc_grid_button_title_lineheight = new BridgeQodeField('textsimple', 'vc_grid_button_title_lineheight', '', esc_html__('Line Height (px)', 'bridge'), '');
        $row2->addChild('vc_grid_button_title_lineheight', $vc_grid_button_title_lineheight);

        $row3 = new BridgeQodeRow(true);
        $group1->addChild('row3', $row3);

        $vc_grid_button_title_fontstyle = new BridgeQodeField('selectblanksimple', 'vc_grid_button_title_fontstyle', '', esc_html__('Font Style', 'bridge'), '', bridge_qode_get_font_style_array());
        $row3->addChild('vc_grid_button_title_fontstyle', $vc_grid_button_title_fontstyle);
        $vc_grid_button_title_fontweight = new BridgeQodeField('selectblanksimple', 'vc_grid_button_title_fontweight', '', esc_html__('Font Weight', 'bridge'), '', bridge_qode_get_font_weight_array());
        $row3->addChild('vc_grid_button_title_fontweight', $vc_grid_button_title_fontweight);
        $vc_grid_button_title_letter_spacing = new BridgeQodeField('textsimple', 'vc_grid_button_title_letter_spacing', '', esc_html__('Letter Spacing (px)', 'bridge'), '');
        $row3->addChild('vc_grid_button_title_letter_spacing', $vc_grid_button_title_letter_spacing);

        $row4 = new BridgeQodeRow(true);
        $group1->addChild('row4', $row4);

        $vc_grid_button_backgroundcolor = new BridgeQodeField('colorsimple', 'vc_grid_button_backgroundcolor', '', esc_html__('Background Color', 'bridge'), '');
        $row4->addChild('vc_grid_button_backgroundcolor', $vc_grid_button_backgroundcolor);
        $vc_grid_button_backgroundcolor_hover = new BridgeQodeField('colorsimple', 'vc_grid_button_backgroundcolor_hover', '', esc_html__('Hover Background Color', 'bridge'), '');
        $row4->addChild('vc_grid_button_backgroundcolor_hover', $vc_grid_button_backgroundcolor_hover);
        $vc_grid_button_border_color = new BridgeQodeField('colorsimple', 'vc_grid_button_border_color', '', esc_html__('Border Color', 'bridge'), '');
        $row4->addChild('vc_grid_button_border_color', $vc_grid_button_border_color);
        $vc_grid_button_border_hover_color = new BridgeQodeField('colorsimple', 'vc_grid_button_border_hover_color', '', esc_html__('Border Hover color', 'bridge'), '');
        $row4->addChild('vc_grid_button_border_hover_color', $vc_grid_button_border_hover_color);

        $row5 = new BridgeQodeRow(true);
        $group1->addChild('row5', $row5);

        $vc_grid_button_border_width = new BridgeQodeField('textsimple', 'vc_grid_button_border_width', '', esc_html__('Border Width (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row5->addChild('vc_grid_button_border_width', $vc_grid_button_border_width);
        $vc_grid_button_border_radius = new BridgeQodeField('textsimple', 'vc_grid_button_border_radius', '', esc_html__('Border Radius (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row5->addChild('vc_grid_button_border_radius', $vc_grid_button_border_radius);


        $group2 = new BridgeQodeGroup(esc_html__('Load More Button', 'bridge'), esc_html__('Define styles for grid load more button', 'bridge'));
        $panel2->addChild('group2', $group2);

        $row1 = new BridgeQodeRow();
        $group2->addChild("row1", $row1);

        $vc_grid_load_more_button_title_color = new BridgeQodeField('colorsimple', 'vc_grid_load_more_button_title_color', '', esc_html__('Text Color', 'bridge'), '');
        $row1->addChild('vc_grid_load_more_button_title_color', $vc_grid_load_more_button_title_color);
        $vc_grid_load_more_button_title_hovercolor = new BridgeQodeField('colorsimple', 'vc_grid_load_more_button_title_hovercolor', '', esc_html__('Hover Color', 'bridge'), '');
        $row1->addChild('vc_grid_load_more_button_title_hovercolor', $vc_grid_load_more_button_title_hovercolor);

        $row2 = new BridgeQodeRow(true);
        $group2->addChild('row2', $row2);

        $vc_grid_load_more_button_title_google_fonts = new BridgeQodeField('fontsimple', 'vc_grid_load_more_button_title_google_fonts', '-1', esc_html__('Font Family', 'bridge'), '');
        $row2->addChild('vc_grid_load_more_button_title_google_fonts', $vc_grid_load_more_button_title_google_fonts);
        $vc_grid_load_more_button_title_fontsize = new BridgeQodeField('textsimple', 'vc_grid_load_more_button_title_fontsize', '', esc_html__('Font Size (px)', 'bridge'), '');
        $row2->addChild('vc_grid_load_more_button_title_fontsize', $vc_grid_load_more_button_title_fontsize);
        $vc_grid_load_more_button_title_lineheight = new BridgeQodeField('textsimple', 'vc_grid_load_more_button_title_lineheight', '', esc_html__('Line Height (px)', 'bridge'), '');
        $row2->addChild('vc_grid_load_more_button_title_lineheight', $vc_grid_load_more_button_title_lineheight);

        $row3 = new BridgeQodeRow(true);
        $group2->addChild('row3', $row3);

        $vc_grid_load_more_button_title_fontstyle = new BridgeQodeField('selectblanksimple', 'vc_grid_load_more_button_title_fontstyle', '', esc_html__('Font Style', 'bridge'), '', bridge_qode_get_font_style_array());
        $row3->addChild('vc_grid_load_more_button_title_fontstyle', $vc_grid_load_more_button_title_fontstyle);
        $vc_grid_load_more_button_title_fontweight = new BridgeQodeField('selectblanksimple', 'vc_grid_load_more_button_title_fontweight', '', esc_html__('Font Weight', 'bridge'), '', bridge_qode_get_font_weight_array());
        $row3->addChild('vc_grid_load_more_button_title_fontweight', $vc_grid_load_more_button_title_fontweight);
        $vc_grid_load_more_button_title_letter_spacing = new BridgeQodeField('textsimple', 'vc_grid_load_more_button_title_letter_spacing', '', esc_html__('Letter Spacing (px)', 'bridge'), '');
        $row3->addChild('vc_grid_load_more_button_title_letter_spacing', $vc_grid_load_more_button_title_letter_spacing);

        $row4 = new BridgeQodeRow(true);
        $group2->addChild('row4', $row4);

        $vc_grid_load_more_button_backgroundcolor = new BridgeQodeField('colorsimple', 'vc_grid_load_more_button_backgroundcolor', '', esc_html__('Background Color', 'bridge'), '');
        $row4->addChild('vc_grid_load_more_button_backgroundcolor', $vc_grid_load_more_button_backgroundcolor);
        $vc_grid_load_more_button_backgroundcolor_hover = new BridgeQodeField('colorsimple', 'vc_grid_load_more_button_backgroundcolor_hover', '', esc_html__('Hover Background Color', 'bridge'), '');
        $row4->addChild('vc_grid_load_more_button_backgroundcolor_hover', $vc_grid_load_more_button_backgroundcolor_hover);
        $vc_grid_load_more_button_border_color = new BridgeQodeField('colorsimple', 'vc_grid_load_more_button_border_color', '', esc_html__('Border Color', 'bridge'), '');
        $row4->addChild('vc_grid_load_more_button_border_color', $vc_grid_load_more_button_border_color);
        $vc_grid_load_more_button_border_hover_color = new BridgeQodeField('colorsimple', 'vc_grid_load_more_button_border_hover_color', '', esc_html__('Border Hover color', 'bridge'), '');
        $row4->addChild('vc_grid_load_more_button_border_hover_color', $vc_grid_load_more_button_border_hover_color);

        $row5 = new BridgeQodeRow(true);
        $group2->addChild('row5', $row5);

        $vc_grid_load_more_button_border_width = new BridgeQodeField('textsimple', 'vc_grid_load_more_button_border_width', '', esc_html__('Border Width (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row5->addChild('vc_grid_load_more_button_border_width', $vc_grid_load_more_button_border_width);
        $vc_grid_load_more_button_border_radius = new BridgeQodeField('textsimple', 'vc_grid_load_more_button_border_radius', '', esc_html__('Border Radius (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row5->addChild('vc_grid_load_more_button_border_radius', $vc_grid_load_more_button_border_radius);

        $group3 = new BridgeQodeGroup(esc_html__('Pagination', 'bridge'), esc_html__('Define styles for grid pagination', 'bridge'));
        $panel2->addChild('group3', $group3);

        $row1 = new BridgeQodeRow();
        $group3->addChild('row1', $row1);

        $vc_grid_pagination_color = new BridgeQodeField('colorsimple', 'vc_grid_pagination_color', '', esc_html__('Color', 'bridge'), '');
        $row1->addChild('vc_grid_pagination_color', $vc_grid_pagination_color);

        $vc_grid_pagination_hover_color = new BridgeQodeField('colorsimple', 'vc_grid_pagination_hover_color', '', esc_html__('Hover Color', 'bridge'), '');
        $row1->addChild('vc_grid_pagination_hover_color', $vc_grid_pagination_hover_color);

        $vc_grid_pagination_background_color = new BridgeQodeField('colorsimple', 'vc_grid_pagination_background_color', '', esc_html__('Background Color', 'bridge'), '');
        $row1->addChild('vc_grid_pagination_background_color', $vc_grid_pagination_background_color);

        $vc_grid_pagination_background_hover_color = new BridgeQodeField('colorsimple', 'vc_grid_pagination_background_hover_color', '', esc_html__('Background Hover Color', 'bridge'), '');
        $row1->addChild('vc_grid_pagination_background_hover_color', $vc_grid_pagination_background_hover_color);

        $row2 = new BridgeQodeRow(true);
        $group3->addChild('row2', $row2);

        $vc_grid_pagination_border_color = new BridgeQodeField('colorsimple', 'vc_grid_pagination_border_color', '', esc_html__('Border Color', 'bridge'), '');
        $row2->addChild('vc_grid_pagination_border_color', $vc_grid_pagination_border_color);

        $vc_grid_pagination_border_hover_color = new BridgeQodeField('colorsimple', 'vc_grid_pagination_border_hover_color', '', esc_html__('Border Hover Color', 'bridge'), '');
        $row2->addChild('vc_grid_pagination_border_hover_color', $vc_grid_pagination_border_hover_color);

        $group4 = new BridgeQodeGroup('Arrows', 'Define styles for grid arrows');
        $panel2->addChild('group4', $group4);

        $row1 = new BridgeQodeRow();
        $group4->addChild('row1', $row1);

        $vc_grid_arrows_color = new BridgeQodeField('colorsimple', 'vc_grid_arrows_color', '', esc_html__('Color', 'bridge'), '');
        $row1->addChild('vc_grid_arrows_color', $vc_grid_arrows_color);

    }
    add_action('bridge_qode_action_options_map','bridge_qode_visualcomposer_options_map',180);
}