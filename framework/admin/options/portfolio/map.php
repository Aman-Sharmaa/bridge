<?php

if(!function_exists('bridge_qode_portfolio_options_map')) {
    /**
     * Portfolio options page
     */
    function bridge_qode_portfolio_options_map() {

        $portfolioPage = new BridgeQodeAdminPage("_portfolio",  esc_html__('Portfolio', 'bridge'), "fa fa-camera-retro");
        bridge_qode_framework()->qodeOptions->addAdminPage("portfolioPage", $portfolioPage);

        //Portfolio Single Project

        $panel1 = new BridgeQodePanel(esc_html__('Portfolio Single Project', 'bridge'), "porfolio_single_project");
        $portfolioPage->addChild("panel1", $panel1);

        $portfolio_style = new BridgeQodeField("select", "portfolio_style", "1", esc_html__('Portfolio Type', 'bridge'), esc_html__('Choose a default type for Single Project pages', 'bridge'), array(
        	"1" => esc_html__('Portfolio small images', 'bridge'),
            "2" => esc_html__('Portfolio small slider','bridge'),
            "5" => esc_html__('Portfolio big images', 'bridge'),
            "3" => esc_html__('Portfolio big slider', 'bridge'),
            "4" => esc_html__('Portfolio custom - in grid', 'bridge'),
            "7" => esc_html__('Portfolio custom - full width','bridge'),
            "6" => esc_html__('Portfolio gallery','bridge'),
            "8" => esc_html__('Portfolio big slider - modern', 'bridge'),
        ));
        $panel1->addChild("portfolio_style", $portfolio_style);

        $portfolio_qode_like = new BridgeQodeField("onoff", "portfolio_qode_like", "on", esc_html__('Likes','bridge'), esc_html__('Enabling this option will turn on "Likes"', 'bridge'));
        $panel1->addChild("portfolio_qode_like", $portfolio_qode_like);

        $lightbox_single_project = new BridgeQodeField("yesno", "lightbox_single_project", "yes", esc_html__('Lightbox for Images', 'bridge'), esc_html__('Enabling this option will turn on lightbox functionality for projects with images.', 'bridge'));
        $panel1->addChild("lightbox_single_project", $lightbox_single_project);

        $lightbox_video_single_project = new BridgeQodeField("yesno", "lightbox_video_single_project", "no", esc_html__('Lightbox for Videos', 'bridge'), esc_html__('Enabling this option will turn on lightbox functionality for YouTube/Vimeo projects.', 'bridge'));
        $panel1->addChild("lightbox_video_single_project", $lightbox_video_single_project);

        $portfolio_columns_number = new BridgeQodeField("select", "portfolio_columns_number", "2", esc_html__('Number of Columns', 'bridge'), esc_html__('Enter the number of columns for Portfolio Gallery type', 'bridge'), array(
        	"2" => esc_html__('2 columns', 'bridge'),
            "3" => esc_html__('3 columns', 'bridge'),
            "4" => esc_html__('4 columns','bridge')
        ));
        $panel1->addChild("portfolio_columns_number", $portfolio_columns_number);

        $portfolio_single_sidebar = new BridgeQodeField("select", "portfolio_single_sidebar", "default", esc_html__('Sidebar Layout', 'bridge'), esc_html__('Choose a sidebar layout for Single Project pages', 'bridge'), array(
        	"default"	=> esc_html__('No Sidebar','bridge'),
            "1"			=> esc_html__('Sidebar 1/3 right','bridge'),
            "2"			=> esc_html__('Sidebar 1/4 right','bridge'),
            "3"			=> esc_html__('Sidebar 1/3 left','bridge'),
            "4"			=> esc_html__('Sidebar 1/4 left','bridge')
        ));
        $panel1->addChild("portfolio_single_sidebar", $portfolio_single_sidebar);

        $custom_sidebars = bridge_qode_get_custom_sidebars();

        $portfolio_single_sidebar_custom_display = new BridgeQodeField("selectblank", "portfolio_single_sidebar_custom_display", "", esc_html__('Sidebar to Display','bridge'), esc_html__('Choose a sidebar to display on Single Project pages', 'bridge'), $custom_sidebars);
        $panel1->addChild("portfolio_single_sidebar_custom_display", $portfolio_single_sidebar_custom_display);

        $portfolio_single_slug = new BridgeQodeField("text", "portfolio_single_slug", "", esc_html__('Portfolio Single Slug', 'bridge'), esc_html__('Enter if you wish to use a different Single Project slug (Note: After entering slug, navigate to Settings -> Permalinks and click "Save" in order for changes to take effect)','bridge'), array(), array("col_width" => 3));
        $panel1->addChild("portfolio_single_slug", $portfolio_single_slug);

        $disable_portfolio_single_title_label = new BridgeQodeField("yesno", "disable_portfolio_single_title_label", "no", esc_html__('Disable Project Title Label', 'bridge'), esc_html__('Enabling this option will hide "About This Project" label on portfolio single page', 'bridge'));
        $panel1->addChild("disable_portfolio_single_title_label", $disable_portfolio_single_title_label);

        $portfolio_text_follow = new BridgeQodeField("portfoliofollow", "portfolio_text_follow", "portfolio_single_follow", esc_html__('Sticky Side Text', 'bridge'), esc_html__('Enabling this option will make side text sticky on Single Project pages', 'bridge'));
        $panel1->addChild("portfolio_text_follow", $portfolio_text_follow);

        $portfolio_comments = new BridgeQodeField("yesno", "enable_portfolio_comments", "no", esc_html__('Enable Comments', 'bridge'), esc_html__('Enabling this option will display comments on portfolio single page', 'bridge'));
        $panel1->addChild("enable_portfolio_comments", $portfolio_comments);

        $portfolio_related = new BridgeQodeField("yesno", "enable_portfolio_related", "no", esc_html__('Enable Related Portfolios', 'bridge'), esc_html__('Enabling this option will display related portfolios on portfolio single page', 'bridge'), array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_portfolio_related_container"));
        $panel1->addChild("enable_portfolio_related", $portfolio_related);

        $portfolio_related_container = new BridgeQodeContainer("portfolio_related_container", "enable_portfolio_related", "no");
        $panel1->addChild("portfolio_related_container", $portfolio_related_container);

        $portfolio_related_image_size = new BridgeQodeField("select", "portfolio_related_image_size", "", esc_html__('Image Proportion', 'bridge'), esc_html__('Select image proportion for related portfolio items.', 'bridge'), array(
            "" 						=> esc_html__('Original', 'bridge'),
            "portfolio-landscape"	=> esc_html__('Landscape','bridge'),
            "portfolio-portrait"	=> esc_html__('Portrait', 'bridge'),
            "portfolio-square"		=> esc_html__('Square', 'bridge')
        ));
        $portfolio_related_container->addChild("portfolio_related_image_size", $portfolio_related_image_size);

        $enable_navigation_title = new BridgeQodeField("yesno", "enable_navigation_title", "no", esc_html__('Show Title on Navigation', 'bridge'), esc_html__('Enabling this option will display title and categories on portfolio single navigation', 'bridge'));
        $panel1->addChild("enable_navigation_title", $enable_navigation_title);

        $portfolio_navigation_through_same_category = new BridgeQodeField("yesno", "portfolio_navigation_through_same_category", "no", esc_html__('Enable Pagination Through Same Category', 'bridge'), esc_html__('Enabling this option will make portfolio pagination sort through current category.', 'bridge'));
        $panel1->addChild("portfolio_navigation_through_same_category", $portfolio_navigation_through_same_category);


        /* Portfolio List */

        $panel2 = new BridgeQodePanel(esc_html__('Portfolio List', 'bridge'), "porfolio_list");
        $portfolioPage->addChild("panel2", $panel2);

        $group1 = new BridgeQodeGroup(esc_html__('Overlay Style', 'bridge'), esc_html__('Define styles overlay', 'bridge'));
        $panel2->addChild("group1", $group1);
        $row1 = new BridgeQodeRow();
        $group1->addChild("row1", $row1);
        $portfolio_list_overlay_color = new BridgeQodeField("colorsimple", "portfolio_list_overlay_color", "", esc_html__('Overlay Color', 'bridge'), esc_html__('Choose overlay color', 'bridge'));
        $row1->addChild("portfolio_list_overlay_color", $portfolio_list_overlay_color);
        $portfolio_list_overlay_opacity = new BridgeQodeField("textsimple", "portfolio_list_overlay_opacity", "", esc_html__('Overlay Opacity (values 0-1)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("portfolio_list_overlay_opacity", $portfolio_list_overlay_opacity);

        $group2 = new BridgeQodeGroup(esc_html__('Title Style (Standard and Masonry With Space)', 'bridge'), esc_html__('Define styles for title', 'bridge'));
        $panel2->addChild("group2", $group2);
        $row1 = new BridgeQodeRow();
        $group2->addChild("row1", $row1);
        $portfolio_list_standard_title_color = new BridgeQodeField("colorsimple", "portfolio_list_standard_title_color", "", esc_html__('Text Color', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("portfolio_list_standard_title_color", $portfolio_list_standard_title_color);
        $portfolio_list_standard_title_hover_color = new BridgeQodeField("colorsimple", "portfolio_list_standard_title_hover_color", "", esc_html__('Text Hover Color', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("portfolio_list_standard_title_hover_color", $portfolio_list_standard_title_hover_color);
        $portfolio_list_standard_title_fontsize = new BridgeQodeField("textsimple", "portfolio_list_standard_title_fontsize", "", esc_html__('Font Size (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("portfolio_list_standard_title_fontsize", $portfolio_list_standard_title_fontsize);
        $portfolio_list_standard_title_lineheight = new BridgeQodeField("textsimple", "portfolio_list_standard_title_lineheight", "", esc_html__('Line Height (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("portfolio_list_standard_title_lineheight", $portfolio_list_standard_title_lineheight);
        $row2 = new BridgeQodeRow(true);
        $group2->addChild("row2", $row2);
        $portfolio_list_standard_title_texttransform = new BridgeQodeField("selectblanksimple", "portfolio_list_standard_title_texttransform", "", esc_html__('Text Transform', 'bridge'), esc_html__('This is some description', 'bridge'), bridge_qode_get_text_transform_array());
        $row2->addChild("portfolio_list_standard_title_texttransform", $portfolio_list_standard_title_texttransform);
        $portfolio_list_standard_title_google_fonts = new BridgeQodeField("fontsimple", "portfolio_list_standard_title_google_fonts", "-1", esc_html__('Font Family', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row2->addChild("portfolio_list_standard_title_google_fonts", $portfolio_list_standard_title_google_fonts);
        $portfolio_list_standard_title_fontstyle = new BridgeQodeField("selectblanksimple", "portfolio_list_standard_title_fontstyle", "", esc_html__('Font Style', 'bridge'), esc_html__('This is some description', 'bridge'), bridge_qode_get_font_style_array());
        $row2->addChild("portfolio_list_standard_title_fontstyle", $portfolio_list_standard_title_fontstyle);
        $portfolio_list_standard_title_fontweight = new BridgeQodeField("selectblanksimple", "portfolio_list_standard_title_fontweight", "", esc_html__('Font Weight', 'bridge'), esc_html__('This is some description', 'bridge'), bridge_qode_get_font_weight_array());
        $row2->addChild("portfolio_list_standard_title_fontweight", $portfolio_list_standard_title_fontweight);
        $row3 = new BridgeQodeRow(true);
        $group2->addChild("row3", $row3);
        $portfolio_list_standard_title_letterspacing = new BridgeQodeField("textsimple", "portfolio_list_standard_title_letterspacing", "", esc_html__('Letter Spacing (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row3->addChild("portfolio_list_standard_title_letterspacing", $portfolio_list_standard_title_letterspacing);

        $group3 = new BridgeQodeGroup(esc_html__('Category Style (Standard and Masonry With Space)', 'bridge'), esc_html__('Define styles for category', 'bridge'));
        $panel2->addChild("group3", $group3);
        $row1 = new BridgeQodeRow();
        $group3->addChild("row1", $row1);
        $portfolio_list_standard_category_color = new BridgeQodeField("colorsimple", "portfolio_list_standard_category_color", "", esc_html__('Text Color', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("portfolio_list_standard_category_color", $portfolio_list_standard_category_color);
        $portfolio_list_standard_category_fontsize = new BridgeQodeField("textsimple", "portfolio_list_standard_category_fontsize", "", esc_html__('Font Size (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("portfolio_list_standard_category_fontsize", $portfolio_list_standard_category_fontsize);
        $portfolio_list_standard_category_lineheight = new BridgeQodeField("textsimple", "portfolio_list_standard_category_lineheight", "", esc_html__('Line Height (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("portfolio_list_standard_category_lineheight", $portfolio_list_standard_category_lineheight);
        $portfolio_list_standard_category_texttransform = new BridgeQodeField("selectblanksimple", "portfolio_list_standard_category_texttransform", "", esc_html__('Text Transform', 'bridge'), esc_html__('This is some description', 'bridge'), bridge_qode_get_text_transform_array());
        $row1->addChild("portfolio_list_standard_category_texttransform", $portfolio_list_standard_category_texttransform);
        $row2 = new BridgeQodeRow(true);
        $group3->addChild("row2", $row2);
        $portfolio_list_standard_category_google_fonts = new BridgeQodeField("fontsimple", "portfolio_list_standard_category_google_fonts", "-1", esc_html__('Font Family', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row2->addChild("portfolio_list_standard_category_google_fonts", $portfolio_list_standard_category_google_fonts);
        $portfolio_list_standard_category_fontstyle = new BridgeQodeField("selectblanksimple", "portfolio_list_standard_category_fontstyle", "", esc_html__('Font Style', 'bridge'), esc_html__('This is some description', 'bridge'), bridge_qode_get_font_style_array());
        $row2->addChild("portfolio_list_standard_category_fontstyle", $portfolio_list_standard_category_fontstyle);
        $portfolio_list_standard_category_fontweight = new BridgeQodeField("selectblanksimple", "portfolio_list_standard_category_fontweight", "", esc_html__('Font Weight', 'bridge'), esc_html__('This is some description', 'bridge'), bridge_qode_get_font_weight_array());
        $row2->addChild("portfolio_list_standard_category_fontweight", $portfolio_list_standard_category_fontweight);
        $portfolio_list_standard_category_letterspacing = new BridgeQodeField("textsimple", "portfolio_list_standard_category_letterspacing", "", esc_html__('Letter Spacing (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row2->addChild("portfolio_list_standard_category_letterspacing", $portfolio_list_standard_category_letterspacing);

        $group4 = new BridgeQodeGroup(esc_html__('Title Style (Hover Text, Masonry Without Space, Masonry With Space (only image) and Justified Gallery)', 'bridge'), esc_html__('Define styles for title', 'bridge'));
        $panel2->addChild("group4", $group4);
        $row1 = new BridgeQodeRow();
        $group4->addChild("row1", $row1);
        $portfolio_list_gallery_title_color = new BridgeQodeField("colorsimple", "portfolio_list_gallery_title_color", "", esc_html__('Text Color', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("portfolio_list_gallery_title_color", $portfolio_list_gallery_title_color);
        $portfolio_list_gallery_title_hover_color = new BridgeQodeField("colorsimple", "portfolio_list_gallery_title_hover_color", "", esc_html__('Text Hover Color', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("portfolio_list_gallery_title_hover_color", $portfolio_list_gallery_title_hover_color);
        $portfolio_list_gallery_title_fontsize = new BridgeQodeField("textsimple", "portfolio_list_gallery_title_fontsize", "", esc_html__('Font Size (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("portfolio_list_gallery_title_fontsize", $portfolio_list_gallery_title_fontsize);
        $portfolio_list_gallery_title_lineheight = new BridgeQodeField("textsimple", "portfolio_list_gallery_title_lineheight", "", esc_html__('Line Height (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("portfolio_list_gallery_title_lineheight", $portfolio_list_gallery_title_lineheight);

        $row2 = new BridgeQodeRow(true);
        $group4->addChild("row2", $row2);
        $portfolio_list_gallery_title_texttransform = new BridgeQodeField("selectblanksimple", "portfolio_list_gallery_title_texttransform", "", esc_html__('Text Transform', 'bridge'), esc_html__('This is some description', 'bridge'), bridge_qode_get_text_transform_array());
        $row2->addChild("portfolio_list_gallery_title_texttransform", $portfolio_list_gallery_title_texttransform);
        $portfolio_list_gallery_title_google_fonts = new BridgeQodeField("fontsimple", "portfolio_list_gallery_title_google_fonts", "-1", esc_html__('Font Family', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row2->addChild("portfolio_list_gallery_title_google_fonts", $portfolio_list_gallery_title_google_fonts);
        $portfolio_list_gallery_title_fontstyle = new BridgeQodeField("selectblanksimple", "portfolio_list_gallery_title_fontstyle", "", esc_html__('Font Style', 'bridge'), esc_html__('This is some description', 'bridge'), bridge_qode_get_font_style_array());
        $row2->addChild("portfolio_list_gallery_title_fontstyle", $portfolio_list_gallery_title_fontstyle);
        $portfolio_list_gallery_title_fontweight = new BridgeQodeField("selectblanksimple", "portfolio_list_gallery_title_fontweight", "", esc_html__('Font Weight', 'bridge'), esc_html__('This is some description', 'bridge'), bridge_qode_get_font_weight_array());
        $row2->addChild("portfolio_list_gallery_title_fontweight", $portfolio_list_gallery_title_fontweight);
        $row3 = new BridgeQodeRow(true);
        $group4->addChild("row3", $row3);
        $portfolio_list_gallery_title_letterspacing = new BridgeQodeField("textsimple", "portfolio_list_gallery_title_letterspacing", "", esc_html__('Letter Spacing (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row3->addChild("portfolio_list_gallery_title_letterspacing", $portfolio_list_gallery_title_letterspacing);

        $group5 = new BridgeQodeGroup(esc_html__('Category Style (Hover Text, Masonry Without Space, Masonry With Space (only image) and Justified Gallery)', 'bridge'), esc_html__('Define styles for category', 'bridge'));
        $panel2->addChild("group5", $group5);
        $row1 = new BridgeQodeRow();
        $group5->addChild("row1", $row1);
        $portfolio_list_gallery_category_color = new BridgeQodeField("colorsimple", "portfolio_list_gallery_category_color", "", esc_html__('Text Color', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("portfolio_list_gallery_category_color", $portfolio_list_gallery_category_color);
        $portfolio_list_gallery_category_fontsize = new BridgeQodeField("textsimple", "portfolio_list_gallery_category_fontsize", "", esc_html__('Font Size (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("portfolio_list_gallery_category_fontsize", $portfolio_list_gallery_category_fontsize);
        $portfolio_list_gallery_category_lineheight = new BridgeQodeField("textsimple", "portfolio_list_gallery_category_lineheight", "", esc_html__('Line Height (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row1->addChild("portfolio_list_gallery_category_lineheight", $portfolio_list_gallery_category_lineheight);
        $portfolio_list_gallery_category_texttransform = new BridgeQodeField("selectblanksimple", "portfolio_list_gallery_category_texttransform", "", esc_html__('Text Transform', 'bridge'), esc_html__('This is some description', 'bridge'), bridge_qode_get_text_transform_array());
        $row1->addChild("portfolio_list_gallery_category_texttransform", $portfolio_list_gallery_category_texttransform);
        $row2 = new BridgeQodeRow(true);
        $group5->addChild("row2", $row2);
        $portfolio_list_gallery_category_google_fonts = new BridgeQodeField("fontsimple", "portfolio_list_gallery_category_google_fonts", "-1", esc_html__('Font Family', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row2->addChild("portfolio_list_gallery_category_google_fonts", $portfolio_list_gallery_category_google_fonts);
        $portfolio_list_gallery_category_fontstyle = new BridgeQodeField("selectblanksimple", "portfolio_list_gallery_category_fontstyle", "", esc_html__('Font Style', 'bridge'), esc_html__('This is some description', 'bridge'), bridge_qode_get_font_style_array());
        $row2->addChild("portfolio_list_gallery_category_fontstyle", $portfolio_list_gallery_category_fontstyle);
        $portfolio_list_gallery_category_fontweight = new BridgeQodeField("selectblanksimple", "portfolio_list_gallery_category_fontweight", "", esc_html__('Font Weight', 'bridge'), esc_html__('This is some description', 'bridge'), bridge_qode_get_font_weight_array());
        $row2->addChild("portfolio_list_gallery_category_fontweight", $portfolio_list_gallery_category_fontweight);
        $portfolio_list_gallery_category_letterspacing = new BridgeQodeField("textsimple", "portfolio_list_gallery_category_letterspacing", "", esc_html__('Letter Spacing (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
        $row2->addChild("portfolio_list_gallery_category_letterspacing", $portfolio_list_gallery_category_letterspacing);

        $group6 = new BridgeQodeGroup(esc_html__('Category Filter Style', 'bridge'), esc_html__('Define styles for category filter holder', 'bridge'));
        $panel2->addChild("group6", $group6);

        $row1 = new BridgeQodeRow();
        $group6->addChild("row1", $row1);

        $portfolio_list_filter_background_color = new BridgeQodeField("colorsimple", "portfolio_list_filter_background_color", "", esc_html__('Background Color', 'bridge'), esc_html__('Choose color for background of filter area', 'bridge'));
        $row1->addChild("portfolio_list_filter_background_color", $portfolio_list_filter_background_color);
        $portfolio_list_filter_height = new BridgeQodeField("textsimple", "portfolio_list_filter_height", "", esc_html__('Height (px)', 'bridge'), esc_html__('Enter height for filter area', 'bridge'));
        $row1->addChild("portfolio_list_filter_height", $portfolio_list_filter_height);
        $portfolio_filter_margin_bottom = new BridgeQodeField("textsimple", "portfolio_filter_margin_bottom", "", esc_html__('Bottom Margin (px)', 'bridge'), esc_html__('Enter bottom margin for filter area. Default value is 40', 'bridge'));
        $row1->addChild("portfolio_filter_margin_bottom", $portfolio_filter_margin_bottom);

        $thin_icon_only_title = new BridgeQodeTitle('thin_icon_only', esc_html__('Thin Plus Only Hover', 'bridge'));
        $panel2->addChild('thin_icon_only', $thin_icon_only_title);
        $thin_icon_font_family = new BridgeQodeField('font', 'thin_icon_only_font_family', '', esc_html__('Icon Font Family', 'bridge'), esc_html__('Choose font family plus icon that appears on hover', 'bridge'));
        $panel2->addChild('thin_icon_only_font_family', $thin_icon_font_family);
    }
    
    add_action('bridge_qode_action_options_map','bridge_qode_portfolio_options_map',110);
}