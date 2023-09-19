<?php

if(!function_exists('bridge_qode_blog_options_map')) {
    /**
     * Blog options page
     */
    function bridge_qode_blog_options_map()
    {

        $blogPage = new BridgeQodeAdminPage("_blog", esc_html__("Blog", "bridge"), "fa fa-files-o");
        bridge_qode_framework()->qodeOptions->addAdminPage("blogPage", $blogPage);

        // Blog List

        $panel2 = new BridgeQodePanel(esc_html__("Blog List", "bridge"), "blog_list_panel");
        $blogPage->addChild("panel2", $panel2);

        $pagination = new BridgeQodeField("zeroone", "pagination", "1", esc_html__("Pagination", "bridge"), esc_html__("Enabling this option will display pagination on bottom of Blog List", "bridge"));
        $panel2->addChild("pagination", $pagination);

        $blog_style = new BridgeQodeField("select", "blog_style", "1", esc_html__("Archive and Category Layout", "bridge"), esc_html__("Choose a default blog layout for archived Blog Lists and Category Blog Lists", "bridge"), array(
            "1" => esc_html__("Blog Large Image", "bridge"),
//     "5" => "Blog Masonry Full Width",
            "3" => esc_html__("Blog Large Image Whole Post", "bridge"),
            "4" => esc_html__("Blog Small Image", "bridge"),
            "2" => esc_html__("Blog Masonry", "bridge"),
            "7" => esc_html__("Blog Large Image With Dividers", "bridge"),
            "8" => esc_html__("Blog Masonry - Date in Image", "bridge"),
            "9" => esc_html__("Blog Compound", "bridge"),
            "10" => esc_html__("Blog Pinterest", "bridge"),
            "11" => esc_html__("Blog Headlines", "bridge"),
            "12" => esc_html__("Blog Chequered", "bridge")
        ));
        $panel2->addChild("blog_style", $blog_style);

        $category_blog_sidebar = new BridgeQodeField("select", "category_blog_sidebar", "default", esc_html__("Archive and Category Sidebar", "bridge"), esc_html__("Choose a sidebar layout for archived Blog Lists and Category Blog Lists", "bridge"), array("default" => esc_html__("No Sidebar", "bridge"),
            "1" => esc_html__("Sidebar 1/3 right", "bridge"),
            "2" => esc_html__("Sidebar 1/4 right", "bridge"),
            "3" => esc_html__("Sidebar 1/3 left", "bridge"),
            "4" => esc_html__("Sidebar 1/4 left", "bridge")
        ));
        $panel2->addChild("category_blog_sidebar", $category_blog_sidebar);

        $blog_hide_comments = new BridgeQodeField("yesno", "blog_hide_comments", "no", esc_html__("Hide Comments", "bridge"), esc_html__("Enabling this option will hide comments on Blog List and Single Blog Posts", "bridge"));
        $panel2->addChild("blog_hide_comments", $blog_hide_comments);

        $blog_hide_author = new BridgeQodeField("yesno", "blog_hide_author", "no", esc_html__("Hide Author", "bridge"), esc_html__("Enabling this option will hide author name on Blog List", "bridge"));
        $panel2->addChild("blog_hide_author", $blog_hide_author);

        $qode_like = new BridgeQodeField("onoff", "qode_like", "on", esc_html__("Likes", "bridge"), esc_html__('Enabling this option will turn on "Likes"', 'bridge'));
        $panel2->addChild("qode_like", $qode_like);

        $blog_page_range = new BridgeQodeField("text", "blog_page_range", "", esc_html__("Pagination Page Range", "bridge"), esc_html__('Enter the number of numerals to be displayed before the "..." (For example, enter "3" to get "1 2 3...")', 'bridge'), array(), array("col_width" => 3));
        $panel2->addChild("blog_page_range", $blog_page_range);

        $number_of_chars = new BridgeQodeField("text", "number_of_chars", "45", esc_html__("Number of Words in Blog Listing", "bridge"), esc_html__('Enter the number of words to be displayed per post in Blog List', 'bridge'), array(), array("col_width" => 3));
        $panel2->addChild("number_of_chars", $number_of_chars);

        $number_of_chars_masonry = new BridgeQodeField("text", "number_of_chars_masonry", "", esc_html__("Number of Words in Masonry", "bridge"), esc_html__('Enter the number of words to be displayed per post in "Masonry" Blog List (Note: this overrides "Word Number" above)', 'bridge'), array(), array("col_width" => 3));
        $panel2->addChild("number_of_chars_masonry", $number_of_chars_masonry);

        $number_of_chars_large_image = new BridgeQodeField("text", "number_of_chars_large_image", "", esc_html__("Number of Words in Large Image", "bridge"), esc_html__('Enter the number of words to be displayed per post in "Large Image" Blog List (Note: this overrides "Word Number" above)', 'bridge'), array(), array("col_width" => 3));
        $panel2->addChild("number_of_chars_large_image", $number_of_chars_large_image);

        $number_of_chars_small_image = new BridgeQodeField("text", "number_of_chars_small_image", "", esc_html__("Number of Words in Small Image", "bridge"), esc_html__('Enter the number of words to be displayed per post in "Small Image" Blog List (Note: this overrides "Word Number" above))', 'bridge'), array(), array("col_width" => 3));
        $panel2->addChild("number_of_chars_small_image", $number_of_chars_small_image);

        $blog_content_position = new BridgeQodeField("select", "blog_content_position", "content_above_blog_list", esc_html__("Content Position", "bridge"), esc_html__("Choose content position for blog list template when sidebar is enabled. Note: This settings in only for template, not for archive pages", "bridge"), array(
            "content_above_blog_list" => esc_html__("Content Above Blog List", "bridge"),
            "content_above_blog_list_and_sidebar" => esc_html__("Content Above Blog List and Sidebar", "bridge")
        ));
        $panel2->addChild("blog_content_position", $blog_content_position);

        $pagination_masonry = new BridgeQodeField("select", "pagination_masonry", "pagination", esc_html__("Pagination on Masonry/Pinterest/Headlines", "bridge"), esc_html__('Choose a pagination style for "Masonry/Pinterest/Headlines" Blog List', 'bridge'), array(
            "pagination" => esc_html__("Pagination", "bridge"),
            "load_more" => esc_html__("Load More", "bridge"),
            "infinite_scroll" => esc_html__("Infinite Scroll", "bridge")
        ));
        $panel2->addChild("pagination_masonry", $pagination_masonry);

        $blog_masonry_filter = new BridgeQodeField("yesno", "blog_masonry_filter", "no", esc_html__("Show Category Filter on Masonry", "bridge"), esc_html__('Enabling this option will display a Category Filter on "Masonry" Blog List', 'bridge'));
        $panel2->addChild("blog_masonry_filter", $blog_masonry_filter);

        $blog_masonry_padding = new BridgeQodeField("text", "blog_masonry_padding", "", esc_html__("Full Width Masonry Margin", "bridge"), esc_html__('Please insert margin in px (i.e. 5px), or in % (i.e 5%)', 'bridge'), array(), array("col_width" => 3));
        $panel2->addChild("blog_masonry_padding", $blog_masonry_padding);

        $blog_large_image_subtitle = new BridgeQodeTitle("blog_large_image_subtitle", esc_html__("Blog Large Image Style", "bridge"));
        $panel2->addChild("blog_large_image_subtitle", $blog_large_image_subtitle);

        $group1 = new BridgeQodeGroup(esc_html__("Large Image Style", "bridge"), esc_html__('Define styles for the "Large Image" Blog List', 'bridge'));
        $panel2->addChild("group1", $group1);
        $row1 = new BridgeQodeRow();
        $group1->addChild("row1", $row1);
        $blog_large_image_text_in_box = new BridgeQodeField("selectsimple", "blog_large_image_text_in_box", "", esc_html__("Text in Box", "bridge"), esc_html__('ThisIsDescription', 'bridge'), array("Default" => esc_html__("Default", "bridge"),
            "no" => esc_html__("No", "bridge"),
            "yes" => esc_html__("Yes", "bridge")
        ));
        $row1->addChild("blog_large_image_text_in_box", $blog_large_image_text_in_box);
        $blog_large_image_border = new BridgeQodeField("selectsimple", "blog_large_image_border", "", esc_html__("Text Box Border", "bridge"), esc_html__('ThisIsDescription', 'bridge'), array("Default" => esc_html__("Default", "bridge"),
            "no" => esc_html__("No", "bridge"),
            "yes" => esc_html__("Yes", "bridge")
        ));
        $row1->addChild("blog_large_image_border", $blog_large_image_border);
        $blog_large_image_border_width = new BridgeQodeField("textsimple", "blog_large_image_border_width", "", esc_html__("Text Box Border width (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_large_image_border_width", $blog_large_image_border_width);
        $row2 = new BridgeQodeRow(true);
        $group1->addChild("row2", $row2);
        $blog_large_image_background_color = new BridgeQodeField("colorsimple", "blog_large_image_background_color", "", esc_html__("Text Box Background Color", "bridge"), esc_html__("ThisIsDescription", "bridge"));
        $row2->addChild("blog_large_image_background_color", $blog_large_image_background_color);
        $blog_large_image_border_color = new BridgeQodeField("colorsimple", "blog_large_image_border_color", "", esc_html__("Text Box Border Color", "bridge"), esc_html__("ThisIsDescription", "bridge"));
        $row2->addChild("blog_large_image_border_color", $blog_large_image_border_color);

        $group2 = new BridgeQodeGroup(esc_html__("Title Style", "bridge"), esc_html__("Define styles for title. *Please note that these settings also take effect on single post titles", "bridge"));
        $panel2->addChild("group2", $group2);
        $row1 = new BridgeQodeRow();
        $group2->addChild("row1", $row1);
        $blog_large_image_title_color = new BridgeQodeField("colorsimple", "blog_large_image_title_color", "", esc_html__("Title Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_large_image_title_color", $blog_large_image_title_color);
        $blog_large_image_title_hover_color = new BridgeQodeField("colorsimple", "blog_large_image_title_hover_color", "", esc_html__("Title Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_large_image_title_hover_color", $blog_large_image_title_hover_color);
        $blog_large_image_title_date_color = new BridgeQodeField("colorsimple", "blog_large_image_title_date_color", "", esc_html__("Date Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_large_image_title_date_color", $blog_large_image_title_date_color);
        $blog_large_image_title_fontsize = new BridgeQodeField("textsimple", "blog_large_image_title_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_large_image_title_fontsize", $blog_large_image_title_fontsize);


        $row2 = new BridgeQodeRow(true);
        $group2->addChild("row2", $row2);
        $blog_large_image_title_lineheight = new BridgeQodeField("textsimple", "blog_large_image_title_lineheight", "", esc_html__(esc_html__("Line Height (px)", "bridge"), "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_large_image_title_lineheight", $blog_large_image_title_lineheight);
        $blog_large_image_title_texttransform = new BridgeQodeField("selectblanksimple", "blog_large_image_title_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row2->addChild("blog_large_image_title_texttransform", $blog_large_image_title_texttransform);
        $blog_large_image_title_google_fonts = new BridgeQodeField("fontsimple", "blog_large_image_title_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_large_image_title_google_fonts", $blog_large_image_title_google_fonts);
        $blog_large_image_title_fontstyle = new BridgeQodeField("selectblanksimple", "blog_large_image_title_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("blog_large_image_title_fontstyle", $blog_large_image_title_fontstyle);

        $row3 = new BridgeQodeRow(true);
        $group2->addChild("row3", $row3);
        $blog_large_image_title_fontweight = new BridgeQodeField("selectblanksimple", "blog_large_image_title_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row3->addChild("blog_large_image_title_fontweight", $blog_large_image_title_fontweight);
        $blog_large_image_title_letterspacing = new BridgeQodeField("textsimple", "blog_large_image_title_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row3->addChild("blog_large_image_title_letterspacing", $blog_large_image_title_letterspacing);

        $group18 = new BridgeQodeGroup(esc_html__("Post Info Style", "bridge"), esc_html__("Define styles for post info. *Please note that these settings also take effect on single post info", "bridge"));
        $panel2->addChild("group18", $group18);
        $row1 = new BridgeQodeRow();
        $group18->addChild("row1", $row1);
        $blog_large_image_post_info_color = new BridgeQodeField("colorsimple", "blog_large_image_post_info_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_large_image_post_info_color", $blog_large_image_post_info_color);
        $blog_large_image_post_info_link_color = new BridgeQodeField("colorsimple", "blog_large_image_post_info_link_color", "", esc_html__("Link Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_large_image_post_info_link_color", $blog_large_image_post_info_link_color);
        $blog_large_image_post_info_link_hover_color = new BridgeQodeField("colorsimple", "blog_large_image_post_info_link_hover_color", "", esc_html__("Link Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_large_image_post_info_link_hover_color", $blog_large_image_post_info_link_hover_color);
        $blog_large_image_post_info_fontsize = new BridgeQodeField("textsimple", "blog_large_image_post_info_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_large_image_post_info_fontsize", $blog_large_image_post_info_fontsize);

        $row2 = new BridgeQodeRow(true);
        $group18->addChild("row2", $row2);
        $blog_large_image_post_info_lineheight = new BridgeQodeField("textsimple", "blog_large_image_post_info_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_large_image_post_info_lineheight", $blog_large_image_post_info_lineheight);
        $blog_large_image_post_info_texttransform = new BridgeQodeField("selectblanksimple", "blog_large_image_post_info_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row2->addChild("blog_large_image_post_info_texttransform", $blog_large_image_post_info_texttransform);
        $blog_large_image_post_info_google_fonts = new BridgeQodeField("fontsimple", "blog_large_image_post_info_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_large_image_post_info_google_fonts", $blog_large_image_post_info_google_fonts);
        $blog_large_image_post_info_fontstyle = new BridgeQodeField("selectblanksimple", "blog_large_image_post_info_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("blog_large_image_post_info_fontstyle", $blog_large_image_post_info_fontstyle);

        $row3 = new BridgeQodeRow(true);
        $group18->addChild("row3", $row3);
        $blog_large_image_post_info_fontweight = new BridgeQodeField("selectblanksimple", "blog_large_image_post_info_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row3->addChild("blog_large_image_post_info_fontweight", $blog_large_image_post_info_fontweight);
        $blog_large_image_post_info_letterspacing = new BridgeQodeField("textsimple", "blog_large_image_post_info_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row3->addChild("blog_large_image_post_info_letterspacing", $blog_large_image_post_info_letterspacing);

        $group23 = new BridgeQodeGroup(esc_html__("Post Info Quote/Link Style", "bridge"), esc_html__("Define styles for Quote/Link post info. *Please note that these settings also take effect on single post info", "bridge"));
        $panel2->addChild("group23", $group23);
        $row1 = new BridgeQodeRow();
        $group23->addChild("row1", $row1);
        $blog_large_image_ql_post_info_color = new BridgeQodeField("colorsimple", "blog_large_image_ql_post_info_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_large_image_ql_post_info_color", $blog_large_image_ql_post_info_color);
        $blog_large_image_ql_post_info_link_color = new BridgeQodeField("colorsimple", "blog_large_image_ql_post_info_link_color", "", esc_html__("Link Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_large_image_ql_post_info_link_color", $blog_large_image_ql_post_info_link_color);
        $blog_large_image_ql_post_info_link_hover_color = new BridgeQodeField("colorsimple", "blog_large_image_ql_post_info_link_hover_color", "", esc_html__("Link Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_large_image_ql_post_info_link_hover_color", $blog_large_image_ql_post_info_link_hover_color);
        $blog_large_image_ql_post_info_fontsize = new BridgeQodeField("textsimple", "blog_large_image_ql_post_info_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_large_image_ql_post_info_fontsize", $blog_large_image_ql_post_info_fontsize);

        $row2 = new BridgeQodeRow(true);
        $group23->addChild("row2", $row2);
        $blog_large_image_ql_post_info_lineheight = new BridgeQodeField("textsimple", "blog_large_image_ql_post_info_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_large_image_ql_post_info_lineheight", $blog_large_image_ql_post_info_lineheight);
        $blog_large_image_ql_post_info_texttransform = new BridgeQodeField("selectblanksimple", "blog_large_image_ql_post_info_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row2->addChild("blog_large_image_ql_post_info_texttransform", $blog_large_image_ql_post_info_texttransform);
        $blog_large_image_ql_post_info_google_fonts = new BridgeQodeField("fontsimple", "blog_large_image_ql_post_info_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_large_image_ql_post_info_google_fonts", $blog_large_image_ql_post_info_google_fonts);
        $blog_large_image_ql_post_info_fontstyle = new BridgeQodeField("selectblanksimple", "blog_large_image_ql_post_info_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("blog_large_image_ql_post_info_fontstyle", $blog_large_image_ql_post_info_fontstyle);

        $row3 = new BridgeQodeRow(true);
        $group23->addChild("row3", $row3);
        $blog_large_image_ql_post_info_fontweight = new BridgeQodeField("selectblanksimple", "blog_large_image_ql_post_info_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row3->addChild("blog_large_image_ql_post_info_fontweight", $blog_large_image_ql_post_info_fontweight);
        $blog_large_image_ql_post_info_letterspacing = new BridgeQodeField("textsimple", "blog_large_image_ql_post_info_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row3->addChild("blog_large_image_ql_post_info_letterspacing", $blog_large_image_ql_post_info_letterspacing);


        $blog_small_image_subtitle = new BridgeQodeTitle("blog_small_image_subtitle", esc_html__("Blog Small Image Style", "bridge"));
        $panel2->addChild("blog_small_image_subtitle", $blog_small_image_subtitle);

        $group3 = new BridgeQodeGroup(esc_html__("Small Image Style", "bridge"), esc_html__('Define styles for the "Small Image" Blog List', 'bridge'));
        $panel2->addChild("group3", $group3);
        $row1 = new BridgeQodeRow();
        $group3->addChild("row1", $row1);
        $blog_small_image_text_in_box = new BridgeQodeField("selectsimple", "blog_small_image_text_in_box", "", esc_html__("Text in Box", "bridge"), esc_html__("ThisIsDescription", "bridge"), array("Default" => esc_html__("Default", "bridge"),
            "no" => esc_html__("No", "bridge"),
            "yes" => esc_html__("Yes", "bridge")
        ));
        $row1->addChild("blog_small_image_text_in_box", $blog_small_image_text_in_box);
        $blog_small_image_border = new BridgeQodeField("selectsimple", "blog_small_image_border", "", esc_html__("Text Box Border", "bridge"), esc_html__("ThisIsDescription", "bridge"), array("Default" => esc_html__("Default", "bridge"),
            "no" => esc_html__("No", "bridge"),
            "yes" => esc_html__("Yes", "bridge")
        ));
        $row1->addChild("blog_small_image_border", $blog_small_image_border);
        $blog_small_image_border_width = new BridgeQodeField("textsimple", "blog_small_image_border_width", "", esc_html__("Text Box Border width (px)", "bridge"), esc_html__("ThisIsDescription", "bridge"));
        $row1->addChild("blog_small_image_border_width", $blog_small_image_border_width);
        $row2 = new BridgeQodeRow(true);
        $group3->addChild("row2", $row2);
        $blog_small_image_background_color = new BridgeQodeField("colorsimple", "blog_small_image_background_color", "", esc_html__("Text Box Background Color", "bridge"), esc_html__('ThisIsDescription', 'bridge'));
        $row2->addChild("blog_small_image_background_color", $blog_small_image_background_color);
        $blog_small_image_border_color = new BridgeQodeField("colorsimple", "blog_small_image_border_color", "", esc_html__("Text Box Border Color", "bridge"), esc_html__("ThisIsDescription", "bridge"));
        $row2->addChild("blog_small_image_border_color", $blog_small_image_border_color);

        $group4 = new BridgeQodeGroup(esc_html__("Title Style", "bridge"), esc_html__("Define styles for title", "bridge"));
        $panel2->addChild("group4", $group4);
        $row1 = new BridgeQodeRow();
        $group4->addChild("row1", $row1);
        $blog_small_image_title_color = new BridgeQodeField("colorsimple", "blog_small_image_title_color", "", esc_html__("Title Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_small_image_title_color", $blog_small_image_title_color);
        $blog_small_image_title_hover_color = new BridgeQodeField("colorsimple", "blog_small_image_title_hover_color", "", esc_html__("Title Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_small_image_title_hover_color", $blog_small_image_title_hover_color);
        $blog_small_image_title_date_color = new BridgeQodeField("colorsimple", "blog_small_image_title_date_color", "", esc_html__("Date Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_small_image_title_date_color", $blog_small_image_title_date_color);
        $blog_small_image_title_fontsize = new BridgeQodeField("textsimple", "blog_small_image_title_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_small_image_title_fontsize", $blog_small_image_title_fontsize);


        $row2 = new BridgeQodeRow(true);
        $group4->addChild("row2", $row2);
        $blog_small_image_title_lineheight = new BridgeQodeField("textsimple", "blog_small_image_title_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_small_image_title_lineheight", $blog_small_image_title_lineheight);
        $blog_small_image_title_texttransform = new BridgeQodeField("selectblanksimple", "blog_small_image_title_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row2->addChild("blog_small_image_title_texttransform", $blog_small_image_title_texttransform);
        $blog_small_image_title_google_fonts = new BridgeQodeField("fontsimple", "blog_small_image_title_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_small_image_title_google_fonts", $blog_small_image_title_google_fonts);
        $blog_small_image_title_fontstyle = new BridgeQodeField("selectblanksimple", "blog_small_image_title_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("blog_small_image_title_fontstyle", $blog_small_image_title_fontstyle);

        $row3 = new BridgeQodeRow(true);
        $group4->addChild("row3", $row3);
        $blog_small_image_title_fontweight = new BridgeQodeField("selectblanksimple", "blog_small_image_title_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row3->addChild("blog_small_image_title_fontweight", $blog_small_image_title_fontweight);
        $blog_small_image_title_letterspacing = new BridgeQodeField("textsimple", "blog_small_image_title_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row3->addChild("blog_small_image_title_letterspacing", $blog_small_image_title_letterspacing);

        $group19 = new BridgeQodeGroup(esc_html__("Post Info Style", "bridge"), esc_html__("Define styles for post info", "bridge"));
        $panel2->addChild("group19", $group19);
        $row1 = new BridgeQodeRow();
        $group19->addChild("row1", $row1);
        $blog_small_image_post_info_color = new BridgeQodeField("colorsimple", "blog_small_image_post_info_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_small_image_post_info_color", $blog_small_image_post_info_color);
        $blog_small_image_post_info_link_color = new BridgeQodeField("colorsimple", "blog_small_image_post_info_link_color", "", esc_html__("Link Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_small_image_post_info_link_color", $blog_small_image_post_info_link_color);
        $blog_small_image_post_info_link_hover_color = new BridgeQodeField("colorsimple", "blog_small_image_post_info_link_hover_color", "", esc_html__("Link Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_small_image_post_info_link_hover_color", $blog_small_image_post_info_link_hover_color);
        $blog_small_image_post_info_fontsize = new BridgeQodeField("textsimple", "blog_small_image_post_info_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_small_image_post_info_fontsize", $blog_small_image_post_info_fontsize);

        $row2 = new BridgeQodeRow(true);
        $group19->addChild("row2", $row2);
        $blog_small_image_post_info_lineheight = new BridgeQodeField("textsimple", "blog_small_image_post_info_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_small_image_post_info_lineheight", $blog_small_image_post_info_lineheight);
        $blog_small_image_post_info_texttransform = new BridgeQodeField("selectblanksimple", "blog_small_image_post_info_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row2->addChild("blog_small_image_post_info_texttransform", $blog_small_image_post_info_texttransform);
        $blog_small_image_post_info_google_fonts = new BridgeQodeField("fontsimple", "blog_small_image_post_info_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_small_image_post_info_google_fonts", $blog_small_image_post_info_google_fonts);
        $blog_small_image_post_info_fontstyle = new BridgeQodeField("selectblanksimple", "blog_small_image_post_info_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("blog_small_image_post_info_fontstyle", $blog_small_image_post_info_fontstyle);

        $row3 = new BridgeQodeRow(true);
        $group19->addChild("row3", $row3);
        $blog_small_image_post_info_fontweight = new BridgeQodeField("selectblanksimple", "blog_small_image_post_info_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row3->addChild("blog_small_image_post_info_fontweight", $blog_small_image_post_info_fontweight);
        $blog_small_image_post_info_letterspacing = new BridgeQodeField("textsimple", "blog_small_image_post_info_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row3->addChild("blog_small_image_post_info_letterspacing", $blog_small_image_post_info_letterspacing);

        $group24 = new BridgeQodeGroup(esc_html__("Post Info Quote/Link Style", "bridge"), esc_html__("Define styles for Quote/Link post info", "bridge"));
        $panel2->addChild("group24", $group24);
        $row1 = new BridgeQodeRow();
        $group24->addChild("row1", $row1);
        $blog_small_image_ql_post_info_color = new BridgeQodeField("colorsimple", "blog_small_image_ql_post_info_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_small_image_ql_post_info_color", $blog_small_image_ql_post_info_color);
        $blog_small_image_ql_post_info_link_color = new BridgeQodeField("colorsimple", "blog_small_image_ql_post_info_link_color", "", esc_html__("Link Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_small_image_ql_post_info_link_color", $blog_small_image_ql_post_info_link_color);
        $blog_small_image_ql_post_info_link_hover_color = new BridgeQodeField("colorsimple", "blog_small_image_ql_post_info_link_hover_color", "", esc_html__("Link Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_small_image_ql_post_info_link_hover_color", $blog_small_image_ql_post_info_link_hover_color);
        $blog_small_image_ql_post_info_fontsize = new BridgeQodeField("textsimple", "blog_small_image_ql_post_info_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_small_image_ql_post_info_fontsize", $blog_small_image_ql_post_info_fontsize);

        $row2 = new BridgeQodeRow(true);
        $group24->addChild("row2", $row2);
        $blog_small_image_ql_post_info_lineheight = new BridgeQodeField("textsimple", "blog_small_image_ql_post_info_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_small_image_ql_post_info_lineheight", $blog_small_image_ql_post_info_lineheight);
        $blog_small_image_ql_post_info_texttransform = new BridgeQodeField("selectblanksimple", "blog_small_image_ql_post_info_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row2->addChild("blog_small_image_ql_post_info_texttransform", $blog_small_image_ql_post_info_texttransform);
        $blog_small_image_ql_post_info_google_fonts = new BridgeQodeField("fontsimple", "blog_small_image_ql_post_info_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_small_image_ql_post_info_google_fonts", $blog_small_image_ql_post_info_google_fonts);
        $blog_small_image_ql_post_info_fontstyle = new BridgeQodeField("selectblanksimple", "blog_small_image_ql_post_info_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("blog_small_image_ql_post_info_fontstyle", $blog_small_image_ql_post_info_fontstyle);

        $row3 = new BridgeQodeRow(true);
        $group24->addChild("row3", $row3);
        $blog_small_image_ql_post_info_fontweight = new BridgeQodeField("selectblanksimple", "blog_small_image_ql_post_info_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row3->addChild("blog_small_image_ql_post_info_fontweight", $blog_small_image_ql_post_info_fontweight);
        $blog_small_image_ql_post_info_letterspacing = new BridgeQodeField("textsimple", "blog_small_image_ql_post_info_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row3->addChild("blog_small_image_ql_post_info_letterspacing", $blog_small_image_ql_post_info_letterspacing);


        $blog_masonry_subtitle = new BridgeQodeTitle("blog_masonry_subtitle", esc_html__("Masonry Style", "bridge"));
        $panel2->addChild("blog_masonry_subtitle", $blog_masonry_subtitle);

        $group5 = new BridgeQodeGroup(esc_html__("Masonry Style", "bridge"), esc_html__('Define styles for the "Masonry" Blog List', 'bridge'));
        $panel2->addChild("group5", $group5);
        $row1 = new BridgeQodeRow();
        $group5->addChild("row1", $row1);
        $blog_masonry_background_color = new BridgeQodeField("colorsimple", "blog_masonry_background_color", "", esc_html__("Text Box Background Color", "bridge"), esc_html__("ThisIsDescription", "bridge"));
        $row1->addChild("blog_masonry_background_color", $blog_masonry_background_color);
        $blog_masonry_border_color = new BridgeQodeField("colorsimple", "blog_masonry_border_color", "", esc_html__("Text Box Border Color", "bridge"), esc_html__("ThisIsDescription", "bridge"));
        $row1->addChild("blog_masonry_border_color", $blog_masonry_border_color);
        $blog_masonry_border_radius = new BridgeQodeField("textsimple", "blog_masonry_border_radius", "", esc_html__("Text Box Border Radius (px)", "bridge"), esc_html__("ThisIsDescription", "bridge"));
        $row1->addChild("blog_masonry_border_radius", $blog_masonry_border_radius);

        $group6 = new BridgeQodeGroup(esc_html__("Title Style", "bridge"), esc_html__("Define styles for title", "bridge"));
        $panel2->addChild("group6", $group6);
        $row1 = new BridgeQodeRow();
        $group6->addChild("row1", $row1);
        $blog_masonry_title_color = new BridgeQodeField("colorsimple", "blog_masonry_title_color", "", esc_html__("Title Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_masonry_title_color", $blog_masonry_title_color);
        $blog_masonry_title_hover_color = new BridgeQodeField("colorsimple", "blog_masonry_title_hover_color", "", esc_html__("Title Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_masonry_title_hover_color", $blog_masonry_title_hover_color);
        $blog_masonry_title_fontsize = new BridgeQodeField("textsimple", "blog_masonry_title_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_masonry_title_fontsize", $blog_masonry_title_fontsize);
        $blog_masonry_title_lineheight = new BridgeQodeField("textsimple", "blog_masonry_title_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_masonry_title_lineheight", $blog_masonry_title_lineheight);

        $row2 = new BridgeQodeRow(true);
        $group6->addChild("row2", $row2);
        $blog_masonry_title_texttransform = new BridgeQodeField("selectblanksimple", "blog_masonry_title_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row2->addChild("blog_masonry_title_texttransform", $blog_masonry_title_texttransform);
        $blog_masonry_title_google_fonts = new BridgeQodeField("fontsimple", "blog_masonry_title_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_masonry_title_google_fonts", $blog_masonry_title_google_fonts);
        $blog_masonry_title_fontstyle = new BridgeQodeField("selectblanksimple", "blog_masonry_title_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("blog_masonry_title_fontstyle", $blog_masonry_title_fontstyle);
        $blog_masonry_title_fontweight = new BridgeQodeField("selectblanksimple", "blog_masonry_title_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row2->addChild("blog_masonry_title_fontweight", $blog_masonry_title_fontweight);

        $row3 = new BridgeQodeRow(true);
        $group6->addChild("row3", $row3);
        $blog_masonry_title_letterspacing = new BridgeQodeField("textsimple", "blog_masonry_title_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row3->addChild("blog_masonry_title_letterspacing", $blog_masonry_title_letterspacing);

        $group20 = new BridgeQodeGroup(esc_html__("Post Info Style", "bridge"), esc_html__("Define styles for post info", "bridge"));
        $panel2->addChild("group20", $group20);
        $row1 = new BridgeQodeRow();
        $group20->addChild("row1", $row1);
        $blog_masonry_post_info_color = new BridgeQodeField("colorsimple", "blog_masonry_post_info_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_masonry_post_info_color", $blog_masonry_post_info_color);
        $blog_masonry_post_info_link_color = new BridgeQodeField("colorsimple", "blog_masonry_post_info_link_color", "", esc_html__("Link Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_masonry_post_info_link_color", $blog_masonry_post_info_link_color);
        $blog_masonry_post_info_link_hover_color = new BridgeQodeField("colorsimple", "blog_masonry_post_info_link_hover_color", "", esc_html__("Link Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_masonry_post_info_link_hover_color", $blog_masonry_post_info_link_hover_color);
        $blog_masonry_post_info_fontsize = new BridgeQodeField("textsimple", "blog_masonry_post_info_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_masonry_post_info_fontsize", $blog_masonry_post_info_fontsize);

        $row2 = new BridgeQodeRow(true);
        $group20->addChild("row2", $row2);
        $blog_masonry_post_info_lineheight = new BridgeQodeField("textsimple", "blog_masonry_post_info_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_masonry_post_info_lineheight", $blog_masonry_post_info_lineheight);
        $blog_masonry_post_info_texttransform = new BridgeQodeField("selectblanksimple", "blog_masonry_post_info_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row2->addChild("blog_masonry_post_info_texttransform", $blog_masonry_post_info_texttransform);
        $blog_masonry_post_info_google_fonts = new BridgeQodeField("fontsimple", "blog_masonry_post_info_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_masonry_post_info_google_fonts", $blog_masonry_post_info_google_fonts);
        $blog_masonry_post_info_fontstyle = new BridgeQodeField("selectblanksimple", "blog_masonry_post_info_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("blog_masonry_post_info_fontstyle", $blog_masonry_post_info_fontstyle);

        $row3 = new BridgeQodeRow(true);
        $group20->addChild("row3", $row3);
        $blog_masonry_post_info_fontweight = new BridgeQodeField("selectblanksimple", "blog_masonry_post_info_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row3->addChild("blog_masonry_post_info_fontweight", $blog_masonry_post_info_fontweight);
        $blog_masonry_post_info_letterspacing = new BridgeQodeField("textsimple", "blog_masonry_post_info_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row3->addChild("blog_masonry_post_info_letterspacing", $blog_masonry_post_info_letterspacing);

        $group25 = new BridgeQodeGroup(esc_html__("Post Info Quote/Link Style", "bridge"), esc_html__("Define styles for Quote/Link post info", "bridge"));
        $panel2->addChild("group25", $group25);
        $row1 = new BridgeQodeRow();
        $group25->addChild("row1", $row1);
        $blog_masonry_ql_post_info_color = new BridgeQodeField("colorsimple", "blog_masonry_ql_post_info_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_masonry_ql_post_info_color", $blog_masonry_ql_post_info_color);
        $blog_masonry_ql_post_info_link_color = new BridgeQodeField("colorsimple", "blog_masonry_ql_post_info_link_color", "", esc_html__("Link Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_masonry_ql_post_info_link_color", $blog_masonry_ql_post_info_link_color);
        $blog_masonry_ql_post_info_link_hover_color = new BridgeQodeField("colorsimple", "blog_masonry_ql_post_info_link_hover_color", "", esc_html__("Link Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_masonry_ql_post_info_link_hover_color", $blog_masonry_ql_post_info_link_hover_color);
        $blog_masonry_ql_post_info_fontsize = new BridgeQodeField("textsimple", "blog_masonry_ql_post_info_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_masonry_ql_post_info_fontsize", $blog_masonry_ql_post_info_fontsize);

        $row2 = new BridgeQodeRow(true);
        $group25->addChild("row2", $row2);
        $blog_masonry_ql_post_info_lineheight = new BridgeQodeField("textsimple", "blog_masonry_ql_post_info_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_masonry_ql_post_info_lineheight", $blog_masonry_ql_post_info_lineheight);
        $blog_masonry_ql_post_info_texttransform = new BridgeQodeField("selectblanksimple", "blog_masonry_ql_post_info_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row2->addChild("blog_masonry_ql_post_info_texttransform", $blog_masonry_ql_post_info_texttransform);
        $blog_masonry_ql_post_info_google_fonts = new BridgeQodeField("fontsimple", "blog_masonry_ql_post_info_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_masonry_ql_post_info_google_fonts", $blog_masonry_ql_post_info_google_fonts);
        $blog_masonry_ql_post_info_fontstyle = new BridgeQodeField("selectblanksimple", "blog_masonry_ql_post_info_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("blog_masonry_ql_post_info_fontstyle", $blog_masonry_ql_post_info_fontstyle);

        $row3 = new BridgeQodeRow(true);
        $group25->addChild("row3", $row3);
        $blog_masonry_ql_post_info_fontweight = new BridgeQodeField("selectblanksimple", "blog_masonry_ql_post_info_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row3->addChild("blog_masonry_ql_post_info_fontweight", $blog_masonry_ql_post_info_fontweight);
        $blog_masonry_ql_post_info_letterspacing = new BridgeQodeField("textsimple", "blog_masonry_ql_post_info_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row3->addChild("blog_masonry_ql_post_info_letterspacing", $blog_masonry_ql_post_info_letterspacing);


        $blog_masonry_gallery_subtitle = new BridgeQodeTitle("blog_masonry_gallery_subtitle", esc_html__("Masonry Gallery Style", "bridge"));
        $panel2->addChild("blog_masonry_gallery_subtitle", $blog_masonry_gallery_subtitle);

        $group41 = new BridgeQodeGroup(esc_html__("Title Style", "bridge"), esc_html__("Define styles for title", "bridge"));
        $panel2->addChild("group41", $group41);
            $row1 = new BridgeQodeRow();
            $group41->addChild("row1", $row1);
                $blog_masonry_gallery_title_color = new BridgeQodeField("colorsimple", "blog_masonry_gallery_title_color", "", esc_html__("Title Color", "bridge"), esc_html__("This is some description", "bridge"));
                $row1->addChild("blog_masonry_gallery_title_color", $blog_masonry_gallery_title_color);
                $blog_masonry_gallery_title_hover_color = new BridgeQodeField("colorsimple", "blog_masonry_gallery_title_hover_color", "", esc_html__("Title Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
                $row1->addChild("blog_masonry_gallery_title_hover_color", $blog_masonry_gallery_title_hover_color);
                $blog_masonry_gallery_title_fontsize = new BridgeQodeField("textsimple", "blog_masonry_gallery_title_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
                $row1->addChild("blog_masonry_gallery_title_fontsize", $blog_masonry_gallery_title_fontsize);
                $blog_masonry_gallery_title_lineheight = new BridgeQodeField("textsimple", "blog_masonry_gallery_title_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
                $row1->addChild("blog_masonry_gallery_title_lineheight", $blog_masonry_gallery_title_lineheight);

            $row2 = new BridgeQodeRow(true);
            $group41->addChild("row2", $row2);
                $blog_masonry_gallery_title_texttransform = new BridgeQodeField("selectblanksimple", "blog_masonry_gallery_title_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
                $row2->addChild("blog_masonry_gallery_title_texttransform", $blog_masonry_gallery_title_texttransform);
                $blog_masonry_gallery_title_google_fonts = new BridgeQodeField("fontsimple", "blog_masonry_gallery_title_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
                $row2->addChild("blog_masonry_gallery_title_google_fonts", $blog_masonry_gallery_title_google_fonts);
                $blog_masonry_gallery_title_fontstyle = new BridgeQodeField("selectblanksimple", "blog_masonry_gallery_title_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
                $row2->addChild("blog_masonry_gallery_title_fontstyle", $blog_masonry_gallery_title_fontstyle);
                $blog_masonry_gallery_title_fontweight = new BridgeQodeField("selectblanksimple", "blog_masonry_gallery_title_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
                $row2->addChild("blog_masonry_gallery_title_fontweight", $blog_masonry_gallery_title_fontweight);

            $row3 = new BridgeQodeRow(true);
            $group41->addChild("row3", $row3);
                $blog_masonry_gallery_title_letterspacing = new BridgeQodeField("textsimple", "blog_masonry_gallery_title_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
                $row3->addChild("blog_masonry_gallery_title_letterspacing", $blog_masonry_gallery_title_letterspacing);

        $group42 = new BridgeQodeGroup("Post Info Style", "Define styles for post info");
        $panel2->addChild("group42", $group42);
            $row1 = new BridgeQodeRow();
            $group42->addChild("row1", $row1);
                $blog_masonry_gallery_post_info_color = new BridgeQodeField("colorsimple", "blog_masonry_gallery_post_info_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
                $row1->addChild("blog_masonry_gallery_post_info_color", $blog_masonry_gallery_post_info_color);
                $blog_masonry_gallery_post_info_link_color = new BridgeQodeField("colorsimple", "blog_masonry_gallery_post_info_link_color", "", esc_html__("Link Color", "bridge"), esc_html__("This is some description", "bridge"));
                $row1->addChild("blog_masonry_gallery_post_info_link_color", $blog_masonry_gallery_post_info_link_color);
                $blog_masonry_gallery_post_info_link_hover_color = new BridgeQodeField("colorsimple", "blog_masonry_gallery_post_info_link_hover_color", "", esc_html__("Link Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
                $row1->addChild("blog_masonry_gallery_post_info_link_hover_color", $blog_masonry_gallery_post_info_link_hover_color);
                $blog_masonry_gallery_post_info_fontsize = new BridgeQodeField("textsimple", "blog_masonry_gallery_post_info_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
                $row1->addChild("blog_masonry_gallery_post_info_fontsize", $blog_masonry_gallery_post_info_fontsize);

            $row2 = new BridgeQodeRow(true);
            $group42->addChild("row2", $row2);
                $blog_masonry_gallery_post_info_lineheight = new BridgeQodeField("textsimple", "blog_masonry_gallery_post_info_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
                $row2->addChild("blog_masonry_gallery_post_info_lineheight", $blog_masonry_gallery_post_info_lineheight);
                $blog_masonry_gallery_post_info_texttransform = new BridgeQodeField("selectblanksimple", "blog_masonry_gallery_post_info_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
                $row2->addChild("blog_masonry_gallery_post_info_texttransform", $blog_masonry_gallery_post_info_texttransform);
                $blog_masonry_gallery_post_info_google_fonts = new BridgeQodeField("fontsimple", "blog_masonry_gallery_post_info_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
                $row2->addChild("blog_masonry_gallery_post_info_google_fonts", $blog_masonry_gallery_post_info_google_fonts);
                $blog_masonry_gallery_post_info_fontstyle = new BridgeQodeField("selectblanksimple", "blog_masonry_gallery_post_info_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
                $row2->addChild("blog_masonry_gallery_post_info_fontstyle", $blog_masonry_gallery_post_info_fontstyle);

            $row3 = new BridgeQodeRow(true);
            $group42->addChild("row3", $row3);
                $blog_masonry_gallery_post_info_fontweight = new BridgeQodeField("selectblanksimple", "blog_masonry_gallery_post_info_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
                $row3->addChild("blog_masonry_gallery_post_info_fontweight", $blog_masonry_gallery_post_info_fontweight);
                $blog_masonry_gallery_post_info_letterspacing = new BridgeQodeField("textsimple", "blog_masonry_gallery_post_info_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
                $row3->addChild("blog_masonry_gallery_post_info_letterspacing", $blog_masonry_gallery_post_info_letterspacing);

        $group43 = new BridgeQodeGroup(esc_html__("Quote/Link Style", "bridge"), esc_html__("Define styles for Quote/Link post style", "bridge"));
        $panel2->addChild("group43", $group43);
            $row1 = new BridgeQodeRow();
            $group43->addChild("row1", $row1);
                $blog_masonry_gallery_ql_post_info_color = new BridgeQodeField("colorsimple", "blog_masonry_gallery_ql_post_info_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
                $row1->addChild("blog_masonry_gallery_ql_post_info_color", $blog_masonry_gallery_ql_post_info_color);
                $blog_masonry_gallery_ql_post_info_fontsize = new BridgeQodeField("textsimple", "blog_masonry_gallery_ql_post_info_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
                $row1->addChild("blog_masonry_gallery_ql_post_info_fontsize", $blog_masonry_gallery_ql_post_info_fontsize);
                $blog_masonry_gallery_ql_post_info_lineheight = new BridgeQodeField("textsimple", "blog_masonry_gallery_ql_post_info_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
                $row1->addChild("blog_masonry_gallery_ql_post_info_lineheight", $blog_masonry_gallery_ql_post_info_lineheight);
                $blog_masonry_gallery_ql_post_info_texttransform = new BridgeQodeField("selectblanksimple", "blog_masonry_gallery_ql_post_info_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
                $row1->addChild("blog_masonry_gallery_ql_post_info_texttransform", $blog_masonry_gallery_ql_post_info_texttransform);

            $row2 = new BridgeQodeRow(true);
            $group43->addChild("row2", $row2);

                $blog_masonry_gallery_ql_post_info_google_fonts = new BridgeQodeField("fontsimple", "blog_masonry_gallery_ql_post_info_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
                $row2->addChild("blog_masonry_gallery_ql_post_info_google_fonts", $blog_masonry_gallery_ql_post_info_google_fonts);
                $blog_masonry_gallery_ql_post_info_fontstyle = new BridgeQodeField("selectblanksimple", "blog_masonry_gallery_ql_post_info_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
                $row2->addChild("blog_masonry_gallery_ql_post_info_fontstyle", $blog_masonry_gallery_ql_post_info_fontstyle);
                $blog_masonry_gallery_ql_post_info_fontweight = new BridgeQodeField("selectblanksimple", "blog_masonry_gallery_ql_post_info_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
                $row2->addChild("blog_masonry_gallery_ql_post_info_fontweight", $blog_masonry_gallery_ql_post_info_fontweight);
                $blog_masonry_gallery_ql_post_info_letterspacing = new BridgeQodeField("textsimple", "blog_masonry_gallery_ql_post_info_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
                $row2->addChild("blog_masonry_gallery_ql_post_info_letterspacing", $blog_masonry_gallery_ql_post_info_letterspacing);


		$blog_gallery_subtitle = new BridgeQodeTitle("blog_gallery_subtitle", esc_html__("Gallery Style", "bridge"));
		$panel2->addChild("blog_gallery_subtitle", $blog_gallery_subtitle);

		$group51 = new BridgeQodeGroup(esc_html__("Title Style", "bridge"), esc_html__("Define styles for title", "bridge"));
		$panel2->addChild("group51", $group51);
		$row1 = new BridgeQodeRow();
		$group51->addChild("row1", $row1);
		$blog_gallery_title_color = new BridgeQodeField("colorsimple", "blog_gallery_title_color", "", esc_html__("Title Color", "bridge"), esc_html__("This is some description", "bridge"));
		$row1->addChild("blog_gallery_title_color", $blog_gallery_title_color);
		$blog_gallery_title_hover_color = new BridgeQodeField("colorsimple", "blog_gallery_title_hover_color", "", esc_html__("Title Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
		$row1->addChild("blog_gallery_title_hover_color", $blog_gallery_title_hover_color);
		$blog_gallery_title_fontsize = new BridgeQodeField("textsimple", "blog_gallery_title_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
		$row1->addChild("blog_gallery_title_fontsize", $blog_gallery_title_fontsize);
		$blog_gallery_title_lineheight = new BridgeQodeField("textsimple", "blog_gallery_title_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
		$row1->addChild("blog_gallery_title_lineheight", $blog_gallery_title_lineheight);

		$row2 = new BridgeQodeRow(true);
		$group51->addChild("row2", $row2);
		$blog_gallery_title_texttransform = new BridgeQodeField("selectblanksimple", "blog_gallery_title_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
		$row2->addChild("blog_gallery_title_texttransform", $blog_gallery_title_texttransform);
		$blog_gallery_title_google_fonts = new BridgeQodeField("fontsimple", "blog_gallery_title_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
		$row2->addChild("blog_gallery_title_google_fonts", $blog_gallery_title_google_fonts);
		$blog_gallery_title_fontstyle = new BridgeQodeField("selectblanksimple", "blog_gallery_title_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
		$row2->addChild("blog_gallery_title_fontstyle", $blog_gallery_title_fontstyle);
		$blog_gallery_title_fontweight = new BridgeQodeField("selectblanksimple", "blog_gallery_title_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
		$row2->addChild("blog_gallery_title_fontweight", $blog_gallery_title_fontweight);

		$row3 = new BridgeQodeRow(true);
		$group51->addChild("row3", $row3);
		$blog_gallery_title_letterspacing = new BridgeQodeField("textsimple", "blog_gallery_title_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
		$row3->addChild("blog_gallery_title_letterspacing", $blog_gallery_title_letterspacing);

		$group52 = new BridgeQodeGroup(esc_html__("Post Info Style", "bridge"), esc_html__("Define styles for post info", "bridge"));
		$panel2->addChild("group52", $group52);
		$row1 = new BridgeQodeRow();
		$group52->addChild("row1", $row1);
		$blog_gallery_post_info_color = new BridgeQodeField("colorsimple", "blog_gallery_post_info_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
		$row1->addChild("blog_gallery_post_info_color", $blog_gallery_post_info_color);
		$blog_gallery_post_info_link_color = new BridgeQodeField("colorsimple", "blog_gallery_post_info_link_color", "", esc_html__("Link Color", "bridge"), esc_html__("This is some description", "bridge"));
		$row1->addChild("blog_gallery_post_info_link_color", $blog_gallery_post_info_link_color);
		$blog_gallery_post_info_link_hover_color = new BridgeQodeField("colorsimple", "blog_gallery_post_info_link_hover_color", "", esc_html__("Link Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
		$row1->addChild("blog_gallery_post_info_link_hover_color", $blog_gallery_post_info_link_hover_color);
		$blog_gallery_post_info_fontsize = new BridgeQodeField("textsimple", "blog_gallery_post_info_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
		$row1->addChild("blog_gallery_post_info_fontsize", $blog_gallery_post_info_fontsize);

		$row2 = new BridgeQodeRow(true);
		$group52->addChild("row2", $row2);
		$blog_gallery_post_info_lineheight = new BridgeQodeField("textsimple", "blog_gallery_post_info_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
		$row2->addChild("blog_gallery_post_info_lineheight", $blog_gallery_post_info_lineheight);
		$blog_gallery_post_info_texttransform = new BridgeQodeField("selectblanksimple", "blog_gallery_post_info_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
		$row2->addChild("blog_gallery_post_info_texttransform", $blog_gallery_post_info_texttransform);
		$blog_gallery_post_info_google_fonts = new BridgeQodeField("fontsimple", "blog_gallery_post_info_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
		$row2->addChild("blog_gallery_post_info_google_fonts", $blog_gallery_post_info_google_fonts);
		$blog_gallery_post_info_fontstyle = new BridgeQodeField("selectblanksimple", "blog_gallery_post_info_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
		$row2->addChild("blog_gallery_post_info_fontstyle", $blog_gallery_post_info_fontstyle);

		$row3 = new BridgeQodeRow(true);
		$group52->addChild("row3", $row3);
		$blog_gallery_post_info_fontweight = new BridgeQodeField("selectblanksimple", "blog_gallery_post_info_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
		$row3->addChild("blog_gallery_post_info_fontweight", $blog_gallery_post_info_fontweight);
		$blog_gallery_post_info_letterspacing = new BridgeQodeField("textsimple", "blog_gallery_post_info_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
		$row3->addChild("blog_gallery_post_info_letterspacing", $blog_gallery_post_info_letterspacing);


		$blog_chequered_subtitle = new BridgeQodeTitle("blog_chequered_subtitle", esc_html__("Chequered Style", "bridge"));
		$panel2->addChild("blog_chequered_subtitle", $blog_chequered_subtitle);

		$group61 = new BridgeQodeGroup(esc_html__("Title Style", "bridge"), esc_html__("Define styles for title", "bridge"));
		$panel2->addChild("group61", $group61);
		$row1 = new BridgeQodeRow();
		$group61->addChild("row1", $row1);
		$blog_chequered_title_color = new BridgeQodeField("colorsimple", "blog_chequered_title_color", "", esc_html__("Title Color", "bridge"), esc_html__("This is some description", "bridge"));
		$row1->addChild("blog_chequered_title_color", $blog_chequered_title_color);
		$blog_chequered_title_hover_color = new BridgeQodeField("colorsimple", "blog_chequered_title_hover_color", "", esc_html__("Title Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
		$row1->addChild("blog_chequered_title_hover_color", $blog_chequered_title_hover_color);
		$blog_chequered_title_fontsize = new BridgeQodeField("textsimple", "blog_chequered_title_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
		$row1->addChild("blog_chequered_title_fontsize", $blog_chequered_title_fontsize);
		$blog_chequered_title_lineheight = new BridgeQodeField("textsimple", "blog_chequered_title_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
		$row1->addChild("blog_chequered_title_lineheight", $blog_chequered_title_lineheight);

		$row2 = new BridgeQodeRow(true);
		$group61->addChild("row2", $row2);
		$blog_chequered_title_texttransform = new BridgeQodeField("selectblanksimple", "blog_chequered_title_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
		$row2->addChild("blog_chequered_title_texttransform", $blog_chequered_title_texttransform);
		$blog_chequered_title_google_fonts = new BridgeQodeField("fontsimple", "blog_chequered_title_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
		$row2->addChild("blog_chequered_title_google_fonts", $blog_chequered_title_google_fonts);
		$blog_chequered_title_fontstyle = new BridgeQodeField("selectblanksimple", "blog_chequered_title_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
		$row2->addChild("blog_chequered_title_fontstyle", $blog_chequered_title_fontstyle);
		$blog_chequered_title_fontweight = new BridgeQodeField("selectblanksimple", "blog_chequered_title_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
		$row2->addChild("blog_chequered_title_fontweight", $blog_chequered_title_fontweight);

		$row3 = new BridgeQodeRow(true);
		$group61->addChild("row3", $row3);
		$blog_chequered_title_letterspacing = new BridgeQodeField("textsimple", "blog_chequered_title_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
		$row3->addChild("blog_chequered_title_letterspacing", $blog_chequered_title_letterspacing);

		$group62 = new BridgeQodeGroup(esc_html__("Post Info Style", "bridge"), esc_html__("Define styles for post info", "bridge"));
		$panel2->addChild("group62", $group62);
		$row1 = new BridgeQodeRow();
		$group62->addChild("row1", $row1);
		$blog_chequered_post_info_color = new BridgeQodeField("colorsimple", "blog_chequered_post_info_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
		$row1->addChild("blog_chequered_post_info_color", $blog_chequered_post_info_color);
		$blog_chequered_post_info_link_color = new BridgeQodeField("colorsimple", "blog_chequered_post_info_link_color", "", esc_html__("Link Color", "bridge"), esc_html__("This is some description", "bridge"));
		$row1->addChild("blog_chequered_post_info_link_color", $blog_chequered_post_info_link_color);
		$blog_chequered_post_info_link_hover_color = new BridgeQodeField("colorsimple", "blog_chequered_post_info_link_hover_color", "", esc_html__("Link Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
		$row1->addChild("blog_chequered_post_info_link_hover_color", $blog_chequered_post_info_link_hover_color);
		$blog_chequered_post_info_fontsize = new BridgeQodeField("textsimple", "blog_chequered_post_info_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
		$row1->addChild("blog_chequered_post_info_fontsize", $blog_chequered_post_info_fontsize);

		$row2 = new BridgeQodeRow(true);
		$group62->addChild("row2", $row2);
		$blog_chequered_post_info_lineheight = new BridgeQodeField("textsimple", "blog_chequered_post_info_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
		$row2->addChild("blog_chequered_post_info_lineheight", $blog_chequered_post_info_lineheight);
		$blog_chequered_post_info_texttransform = new BridgeQodeField("selectblanksimple", "blog_chequered_post_info_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
		$row2->addChild("blog_chequered_post_info_texttransform", $blog_chequered_post_info_texttransform);
		$blog_chequered_post_info_google_fonts = new BridgeQodeField("fontsimple", "blog_chequered_post_info_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
		$row2->addChild("blog_chequered_post_info_google_fonts", $blog_chequered_post_info_google_fonts);
		$blog_chequered_post_info_fontstyle = new BridgeQodeField("selectblanksimple", "blog_chequered_post_info_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
		$row2->addChild("blog_chequered_post_info_fontstyle", $blog_chequered_post_info_fontstyle);

		$row3 = new BridgeQodeRow(true);
		$group62->addChild("row3", $row3);
		$blog_chequered_post_info_fontweight = new BridgeQodeField("selectblanksimple", "blog_chequered_post_info_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
		$row3->addChild("blog_chequered_post_info_fontweight", $blog_chequered_post_info_fontweight);
		$blog_chequered_post_info_letterspacing = new BridgeQodeField("textsimple", "blog_chequered_post_info_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
		$row3->addChild("blog_chequered_post_info_letterspacing", $blog_chequered_post_info_letterspacing);

		$group63 = new BridgeQodeGroup(esc_html__("Quote/Link Style", "bridge"), esc_html__("Define styles for Quote/Link post style", "bridge"));
		$panel2->addChild("group63", $group63);
		$row1 = new BridgeQodeRow();
		$group63->addChild("row1", $row1);
		$blog_chequered_ql_post_info_color = new BridgeQodeField("colorsimple", "blog_chequered_ql_post_info_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
		$row1->addChild("blog_chequered_ql_post_info_color", $blog_chequered_ql_post_info_color);
		$blog_chequered_ql_post_info_fontsize = new BridgeQodeField("textsimple", "blog_chequered_ql_post_info_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
		$row1->addChild("blog_chequered_ql_post_info_fontsize", $blog_chequered_ql_post_info_fontsize);
		$blog_chequered_ql_post_info_lineheight = new BridgeQodeField("textsimple", "blog_chequered_ql_post_info_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
		$row1->addChild("blog_chequered_ql_post_info_lineheight", $blog_chequered_ql_post_info_lineheight);
		$blog_chequered_ql_post_info_texttransform = new BridgeQodeField("selectblanksimple", "blog_chequered_ql_post_info_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
		$row1->addChild("blog_chequered_ql_post_info_texttransform", $blog_chequered_ql_post_info_texttransform);

		$row2 = new BridgeQodeRow(true);
		$group63->addChild("row2", $row2);

		$blog_chequered_ql_post_info_google_fonts = new BridgeQodeField("fontsimple", "blog_chequered_ql_post_info_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
		$row2->addChild("blog_chequered_ql_post_info_google_fonts", $blog_chequered_ql_post_info_google_fonts);
		$blog_chequered_ql_post_info_fontstyle = new BridgeQodeField("selectblanksimple", "blog_chequered_ql_post_info_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
		$row2->addChild("blog_chequered_ql_post_info_fontstyle", $blog_chequered_ql_post_info_fontstyle);
		$blog_chequered_ql_post_info_fontweight = new BridgeQodeField("selectblanksimple", "blog_chequered_ql_post_info_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
		$row2->addChild("blog_chequered_ql_post_info_fontweight", $blog_chequered_ql_post_info_fontweight);
		$blog_chequered_ql_post_info_letterspacing = new BridgeQodeField("textsimple", "blog_chequered_ql_post_info_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
		$row2->addChild("blog_chequered_ql_post_info_letterspacing", $blog_chequered_ql_post_info_letterspacing);



		$blog_large_image_simple_subtitle = new BridgeQodeTitle("blog_large_image_simple_subtitle", esc_html__("Blog Large Image Simple Style", "bridge"));
        $panel2->addChild("blog_large_image_simple_subtitle", $blog_large_image_simple_subtitle);

        $group7 = new BridgeQodeGroup(esc_html__("Box Content Style", "bridge"), esc_html__("Define styles for content box", "bridge"));
        $panel2->addChild("group7", $group7);
        $blog_large_image_simple_side_padding_left = new BridgeQodeField("textsimple", "blog_large_image_simple_side_padding_left", "", esc_html__("Content Padding Left(px)", "bridge"), esc_html__("This is some description", "bridge"));
        $group7->addChild("blog_large_image_simple_side_padding_left", $blog_large_image_simple_side_padding_left);

        $blog_large_image_simple_side_padding_right = new BridgeQodeField("textsimple", "blog_large_image_simple_side_padding_right", "", esc_html__("Content Padding Right(px)", "bridge"), esc_html__("This is some description", "bridge"));
        $group7->addChild("blog_large_image_simple_side_padding_right", $blog_large_image_simple_side_padding_right);

        $group8 = new BridgeQodeGroup(esc_html__("Title Style", "bridge"), esc_html__("Define styles for title", "bridge"));
        $panel2->addChild("group8", $group8);
        $row1 = new BridgeQodeRow();
        $group8->addChild("row1", $row1);
        $blog_large_image_simple_title_color = new BridgeQodeField("colorsimple", "blog_large_image_simple_title_color", "", esc_html__("Title Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_large_image_simple_title_color", $blog_large_image_simple_title_color);
        $blog_large_image_simple_title_hover_color = new BridgeQodeField("colorsimple", "blog_large_image_simple_title_hover_color", "", esc_html__("Title Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_large_image_simple_title_hover_color", $blog_large_image_simple_title_hover_color);
        $blog_large_image_simple_title_fontsize = new BridgeQodeField("textsimple", "blog_large_image_simple_title_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_large_image_simple_title_fontsize", $blog_large_image_simple_title_fontsize);
        $blog_large_image_simple_title_lineheight = new BridgeQodeField("textsimple", "blog_large_image_simple_title_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_large_image_simple_title_lineheight", $blog_large_image_simple_title_lineheight);

        $row2 = new BridgeQodeRow(true);
        $group8->addChild("row2", $row2);
        $blog_large_image_simple_title_texttransform = new BridgeQodeField("selectblanksimple", "blog_large_image_simple_title_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row2->addChild("blog_large_image_simple_title_texttransform", $blog_large_image_simple_title_texttransform);
        $blog_large_image_simple_title_google_fonts = new BridgeQodeField("fontsimple", "blog_large_image_simple_title_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_large_image_simple_title_google_fonts", $blog_large_image_simple_title_google_fonts);
        $blog_large_image_simple_title_fontstyle = new BridgeQodeField("selectblanksimple", "blog_large_image_simple_title_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("blog_large_image_simple_title_fontstyle", $blog_large_image_simple_title_fontstyle);
        $blog_large_image_simple_title_fontweight = new BridgeQodeField("selectblanksimple", "blog_large_image_simple_title_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row2->addChild("blog_large_image_simple_title_fontweight", $blog_large_image_simple_title_fontweight);

        $row3 = new BridgeQodeRow(true);
        $group8->addChild("row3", $row3);
        $blog_large_image_simple_title_letterspacing = new BridgeQodeField("textsimple", "blog_large_image_simple_title_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row3->addChild("blog_large_image_simple_title_letterspacing", $blog_large_image_simple_title_letterspacing);

        $group21 = new BridgeQodeGroup(esc_html__("Date Style", "bridge"), esc_html__("Define styles for date", "bridge"));
        $panel2->addChild("group21", $group21);
        $row1 = new BridgeQodeRow();
        $group21->addChild("row1", $row1);
        $blog_large_image_simple_post_info_color = new BridgeQodeField("colorsimple", "blog_large_image_simple_post_info_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_large_image_simple_post_info_color", $blog_large_image_simple_post_info_color);
        $blog_large_image_simple_post_info_fontsize = new BridgeQodeField("textsimple", "blog_large_image_simple_post_info_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_large_image_simple_post_info_fontsize", $blog_large_image_simple_post_info_fontsize);
        $blog_large_image_simple_post_info_lineheight = new BridgeQodeField("textsimple", "blog_large_image_simple_post_info_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_large_image_simple_post_info_lineheight", $blog_large_image_simple_post_info_lineheight);
        $blog_large_image_simple_post_info_texttransform = new BridgeQodeField("selectblanksimple", "blog_large_image_simple_post_info_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row1->addChild("blog_large_image_simple_post_info_texttransform", $blog_large_image_simple_post_info_texttransform);

        $row2 = new BridgeQodeRow(true);
        $group21->addChild("row2", $row2);
        $blog_large_image_simple_post_info_google_fonts = new BridgeQodeField("fontsimple", "blog_large_image_simple_post_info_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_large_image_simple_post_info_google_fonts", $blog_large_image_simple_post_info_google_fonts);
        $blog_large_image_simple_post_info_fontstyle = new BridgeQodeField("selectblanksimple", "blog_large_image_simple_post_info_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("blog_large_image_simple_post_info_fontstyle", $blog_large_image_simple_post_info_fontstyle);
        $blog_large_image_simple_post_info_fontweight = new BridgeQodeField("selectblanksimple", "blog_large_image_simple_post_info_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row2->addChild("blog_large_image_simple_post_info_fontweight", $blog_large_image_simple_post_info_fontweight);
        $blog_large_image_simple_post_info_letterspacing = new BridgeQodeField("textsimple", "blog_large_image_simple_post_info_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_large_image_simple_post_info_letterspacing", $blog_large_image_simple_post_info_letterspacing);

        $group26 = new BridgeQodeGroup(esc_html__("Quote/Link Date Style", "bridge"), esc_html__("Define styles for Quote/Link date", "bridge"));
        $panel2->addChild("group26", $group26);
        $row1 = new BridgeQodeRow();
        $group26->addChild("row1", $row1);
        $blog_large_image_simple_ql_post_info_color = new BridgeQodeField("colorsimple", "blog_large_image_simple_ql_post_info_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_large_image_simple_ql_post_info_color", $blog_large_image_simple_ql_post_info_color);
        $blog_large_image_simple_ql_post_info_fontsize = new BridgeQodeField("textsimple", "blog_large_image_simple_ql_post_info_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_large_image_simple_ql_post_info_fontsize", $blog_large_image_simple_ql_post_info_fontsize);
        $blog_large_image_simple_ql_post_info_lineheight = new BridgeQodeField("textsimple", "blog_large_image_simple_ql_post_info_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_large_image_simple_ql_post_info_lineheight", $blog_large_image_simple_ql_post_info_lineheight);
        $blog_large_image_simple_ql_post_info_texttransform = new BridgeQodeField("selectblanksimple", "blog_large_image_simple_ql_post_info_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row1->addChild("blog_large_image_simple_ql_post_info_texttransform", $blog_large_image_simple_ql_post_info_texttransform);

        $row2 = new BridgeQodeRow(true);
        $group26->addChild("row2", $row2);
        $blog_large_image_simple_ql_post_info_google_fonts = new BridgeQodeField("fontsimple", "blog_large_image_simple_ql_post_info_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_large_image_simple_ql_post_info_google_fonts", $blog_large_image_simple_ql_post_info_google_fonts);
        $blog_large_image_simple_ql_post_info_fontstyle = new BridgeQodeField("selectblanksimple", "blog_large_image_simple_ql_post_info_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("blog_large_image_simple_ql_post_info_fontstyle", $blog_large_image_simple_ql_post_info_fontstyle);
        $blog_large_image_simple_ql_post_info_fontweight = new BridgeQodeField("selectblanksimple", "blog_large_image_simple_ql_post_info_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row2->addChild("blog_large_image_simple_ql_post_info_fontweight", $blog_large_image_simple_ql_post_info_fontweight);
        $blog_large_image_simple_ql_post_info_letterspacing = new BridgeQodeField("textsimple", "blog_large_image_simple_ql_post_info_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_large_image_simple_ql_post_info_letterspacing", $blog_large_image_simple_ql_post_info_letterspacing);


        $blog_large_image_dividers_subtitle = new BridgeQodeTitle("blog_large_image_dividers_subtitle", esc_html__("Blog Large Image With Dividers Style", "bridge"));
        $panel2->addChild("blog_large_image_dividers_subtitle", $blog_large_image_dividers_subtitle);

        $blog_large_image_dividers_background_color = new BridgeQodeField("color", "blog_large_image_dividers_background_color", "", esc_html__("Text Box Background Color", "bridge"), esc_html__("Choose a background color for Blog Large Image With Dividers", "bridge"));
        $panel2->addChild("blog_large_image_dividers_background_color", $blog_large_image_dividers_background_color);

        $group9 = new BridgeQodeGroup(esc_html__("Title Style", "bridge"), esc_html__("Define styles for title", "bridge"));
        $panel2->addChild("group9", $group9);
        $row1 = new BridgeQodeRow();
        $group9->addChild("row1", $row1);
        $blog_large_image_dividers_title_color = new BridgeQodeField("colorsimple", "blog_large_image_dividers_title_color", "", esc_html__("Title Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_large_image_dividers_title_color", $blog_large_image_dividers_title_color);
        $blog_large_image_dividers_title_hover_color = new BridgeQodeField("colorsimple", "blog_large_image_dividers_title_hover_color", "", esc_html__("Title Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_large_image_dividers_title_hover_color", $blog_large_image_dividers_title_hover_color);
        $blog_large_image_dividers_title_fontsize = new BridgeQodeField("textsimple", "blog_large_image_dividers_title_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_large_image_dividers_title_fontsize", $blog_large_image_dividers_title_fontsize);
        $blog_large_image_dividers_title_lineheight = new BridgeQodeField("textsimple", "blog_large_image_dividers_title_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_large_image_dividers_title_lineheight", $blog_large_image_dividers_title_lineheight);
        $row2 = new BridgeQodeRow(true);
        $group9->addChild("row2", $row2);
        $blog_large_image_dividers_title_texttransform = new BridgeQodeField("selectblanksimple", "blog_large_image_dividers_title_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row2->addChild("blog_large_image_dividers_title_texttransform", $blog_large_image_dividers_title_texttransform);
        $blog_large_image_dividers_title_google_fonts = new BridgeQodeField("fontsimple", "blog_large_image_dividers_title_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_large_image_dividers_title_google_fonts", $blog_large_image_dividers_title_google_fonts);
        $blog_large_image_dividers_title_fontstyle = new BridgeQodeField("selectblanksimple", "blog_large_image_dividers_title_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("blog_large_image_dividers_title_fontstyle", $blog_large_image_dividers_title_fontstyle);
        $blog_large_image_dividers_title_fontweight = new BridgeQodeField("selectblanksimple", "blog_large_image_dividers_title_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row2->addChild("blog_large_image_dividers_title_fontweight", $blog_large_image_dividers_title_fontweight);
        $row3 = new BridgeQodeRow(true);
        $group9->addChild("row3", $row3);
        $blog_large_image_dividers_title_letterspacing = new BridgeQodeField("textsimple", "blog_large_image_dividers_title_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row3->addChild("blog_large_image_dividers_title_letterspacing", $blog_large_image_dividers_title_letterspacing);

        $group22 = new BridgeQodeGroup(esc_html__("Post Info Style", "bridge"), esc_html__("Define styles for post info", "bridge"));
        $panel2->addChild("group22", $group22);
        $row1 = new BridgeQodeRow();
        $group22->addChild("row1", $row1);
        $blog_large_image_dividers_post_info_color = new BridgeQodeField("colorsimple", "blog_large_image_dividers_post_info_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_large_image_dividers_post_info_color", $blog_large_image_dividers_post_info_color);
        $blog_large_image_dividers_post_info_link_color = new BridgeQodeField("colorsimple", "blog_large_image_dividers_post_info_link_color", "", esc_html__("Link Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_large_image_dividers_post_info_link_color", $blog_large_image_dividers_post_info_link_color);
        $blog_large_image_dividers_post_info_link_hover_color = new BridgeQodeField("colorsimple", "blog_large_image_dividers_post_info_link_hover_color", "", esc_html__("Link Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_large_image_dividers_post_info_link_hover_color", $blog_large_image_dividers_post_info_link_hover_color);
        $blog_large_image_dividers_post_info_fontsize = new BridgeQodeField("textsimple", "blog_large_image_dividers_post_info_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_large_image_dividers_post_info_fontsize", $blog_large_image_dividers_post_info_fontsize);

        $row2 = new BridgeQodeRow(true);
        $group22->addChild("row2", $row2);
        $blog_large_image_dividers_post_info_lineheight = new BridgeQodeField("textsimple", "blog_large_image_dividers_post_info_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_large_image_dividers_post_info_lineheight", $blog_large_image_dividers_post_info_lineheight);
        $blog_large_image_dividers_post_info_texttransform = new BridgeQodeField("selectblanksimple", "blog_large_image_dividers_post_info_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row2->addChild("blog_large_image_dividers_post_info_texttransform", $blog_large_image_dividers_post_info_texttransform);
        $blog_large_image_dividers_post_info_google_fonts = new BridgeQodeField("fontsimple", "blog_large_image_dividers_post_info_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_large_image_dividers_post_info_google_fonts", $blog_large_image_dividers_post_info_google_fonts);
        $blog_large_image_dividers_post_info_fontstyle = new BridgeQodeField("selectblanksimple", "blog_large_image_dividers_post_info_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("blog_large_image_dividers_post_info_fontstyle", $blog_large_image_dividers_post_info_fontstyle);

        $row3 = new BridgeQodeRow(true);
        $group22->addChild("row3", $row3);
        $blog_large_image_dividers_post_info_fontweight = new BridgeQodeField("selectblanksimple", "blog_large_image_dividers_post_info_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row3->addChild("blog_large_image_dividers_post_info_fontweight", $blog_large_image_dividers_post_info_fontweight);
        $blog_large_image_dividers_post_info_letterspacing = new BridgeQodeField("textsimple", "blog_large_image_dividers_post_info_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row3->addChild("blog_large_image_dividers_post_info_letterspacing", $blog_large_image_dividers_post_info_letterspacing);

        $group27 = new BridgeQodeGroup(esc_html__("Post Info Quote/Link Style", "bridge"), esc_html__("Define styles for Quote/Link post info", "bridge"));
        $panel2->addChild("group27", $group27);
        $row1 = new BridgeQodeRow();
        $group27->addChild("row1", $row1);
        $blog_large_image_dividers_ql_post_info_color = new BridgeQodeField("colorsimple", "blog_large_image_dividers_ql_post_info_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_large_image_dividers_ql_post_info_color", $blog_large_image_dividers_ql_post_info_color);
        $blog_large_image_dividers_ql_post_info_link_color = new BridgeQodeField("colorsimple", "blog_large_image_dividers_ql_post_info_link_color", "", esc_html__("Link Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_large_image_dividers_ql_post_info_link_color", $blog_large_image_dividers_ql_post_info_link_color);
        $blog_large_image_dividers_ql_post_info_link_hover_color = new BridgeQodeField("colorsimple", "blog_large_image_dividers_ql_post_info_link_hover_color", "", esc_html__("Link Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_large_image_dividers_ql_post_info_link_hover_color", $blog_large_image_dividers_ql_post_info_link_hover_color);
        $blog_large_image_dividers_ql_post_info_fontsize = new BridgeQodeField("textsimple", "blog_large_image_dividers_ql_post_info_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_large_image_dividers_ql_post_info_fontsize", $blog_large_image_dividers_ql_post_info_fontsize);

        $row2 = new BridgeQodeRow(true);
        $group27->addChild("row2", $row2);
        $blog_large_image_dividers_ql_post_info_lineheight = new BridgeQodeField("textsimple", "blog_large_image_dividers_ql_post_info_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_large_image_dividers_ql_post_info_lineheight", $blog_large_image_dividers_ql_post_info_lineheight);
        $blog_large_image_dividers_ql_post_info_texttransform = new BridgeQodeField("selectblanksimple", "blog_large_image_dividers_ql_post_info_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row2->addChild("blog_large_image_dividers_ql_post_info_texttransform", $blog_large_image_dividers_ql_post_info_texttransform);
        $blog_large_image_dividers_ql_post_info_google_fonts = new BridgeQodeField("fontsimple", "blog_large_image_dividers_ql_post_info_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_large_image_dividers_ql_post_info_google_fonts", $blog_large_image_dividers_ql_post_info_google_fonts);
        $blog_large_image_dividers_ql_post_info_fontstyle = new BridgeQodeField("selectblanksimple", "blog_large_image_dividers_ql_post_info_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("blog_large_image_dividers_ql_post_info_fontstyle", $blog_large_image_dividers_ql_post_info_fontstyle);

        $row3 = new BridgeQodeRow(true);
        $group27->addChild("row3", $row3);
        $blog_large_image_dividers_ql_post_info_fontweight = new BridgeQodeField("selectblanksimple", "blog_large_image_dividers_ql_post_info_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row3->addChild("blog_large_image_dividers_ql_post_info_fontweight", $blog_large_image_dividers_ql_post_info_fontweight);
        $blog_large_image_dividers_ql_post_info_letterspacing = new BridgeQodeField("textsimple", "blog_large_image_dividers_ql_post_info_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row3->addChild("blog_large_image_dividers_ql_post_info_letterspacing", $blog_large_image_dividers_ql_post_info_letterspacing);

        $blog_vertical_loop_subtitle = new BridgeQodeTitle("blog_vertical_loop_subtitle", esc_html__("Blog Vertical Loop Style", "bridge"));
        $panel2->addChild("blog_vertical_loop_subtitle", $blog_vertical_loop_subtitle);

        $group10 = new BridgeQodeGroup(esc_html__("Title Style", "bridge"), esc_html__("Define styles for title", "bridge"));
        $panel2->addChild("group10", $group10);
        $row1 = new BridgeQodeRow();
        $group10->addChild("row1", $row1);
        $blog_vertical_loop_title_color = new BridgeQodeField("colorsimple", "blog_vertical_loop_title_color", "", esc_html__("Title Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_vertical_loop_title_color", $blog_vertical_loop_title_color);
        $blog_vertical_loop_title_hover_color = new BridgeQodeField("colorsimple", "blog_vertical_loop_title_hover_color", "", esc_html__("Title Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_vertical_loop_title_hover_color", $blog_vertical_loop_title_hover_color);
        $blog_vertical_loop_title_fontsize = new BridgeQodeField("textsimple", "blog_vertical_loop_title_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_vertical_loop_title_fontsize", $blog_vertical_loop_title_fontsize);
        $blog_vertical_loop_title_lineheight = new BridgeQodeField("textsimple", "blog_vertical_loop_title_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_vertical_loop_title_lineheight", $blog_vertical_loop_title_lineheight);
        $row2 = new BridgeQodeRow(true);
        $group10->addChild("row2", $row2);
        $blog_vertical_loop_title_texttransform = new BridgeQodeField("selectblanksimple", "blog_vertical_loop_title_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row2->addChild("blog_vertical_loop_title_texttransform", $blog_vertical_loop_title_texttransform);
        $blog_vertical_loop_title_google_fonts = new BridgeQodeField("fontsimple", "blog_vertical_loop_title_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_vertical_loop_title_google_fonts", $blog_vertical_loop_title_google_fonts);
        $blog_vertical_loop_title_fontstyle = new BridgeQodeField("selectblanksimple", "blog_vertical_loop_title_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("blog_vertical_loop_title_fontstyle", $blog_vertical_loop_title_fontstyle);
        $blog_vertical_loop_title_fontweight = new BridgeQodeField("selectblanksimple", "blog_vertical_loop_title_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row2->addChild("blog_vertical_loop_title_fontweight", $blog_vertical_loop_title_fontweight);
        $row3 = new BridgeQodeRow(true);
        $group10->addChild("row3", $row3);
        $blog_vertical_loop_title_letterspacing = new BridgeQodeField("textsimple", "blog_vertical_loop_title_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row3->addChild("blog_vertical_loop_title_letterspacing", $blog_vertical_loop_title_letterspacing);

        $group11 = new BridgeQodeGroup(esc_html__("Next Post Title Style", "bridge"), esc_html__("Define styles for next post title", "bridge"));
        $panel2->addChild("group11", $group11);
        $row1 = new BridgeQodeRow();
        $group11->addChild("row1", $row1);
        $blog_vertical_loop_next_post_title_color = new BridgeQodeField("colorsimple", "blog_vertical_loop_next_post_title_color", "", esc_html__("Title Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_vertical_loop_next_post_title_color", $blog_vertical_loop_next_post_title_color);
        $blog_vertical_loop_next_post_title_fontsize = new BridgeQodeField("textsimple", "blog_vertical_loop_next_post_title_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_vertical_loop_next_post_title_fontsize", $blog_vertical_loop_next_post_title_fontsize);
        $blog_vertical_loop_next_post_title_lineheight = new BridgeQodeField("textsimple", "blog_vertical_loop_next_post_title_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_vertical_loop_next_post_title_lineheight", $blog_vertical_loop_next_post_title_lineheight);
        $blog_vertical_loop_next_post_title_texttransform = new BridgeQodeField("selectblanksimple", "blog_vertical_loop_next_post_title_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row1->addChild("blog_vertical_loop_next_post_title_texttransform", $blog_vertical_loop_next_post_title_texttransform);
        $row2 = new BridgeQodeRow(true);
        $group11->addChild("row2", $row2);
        $blog_vertical_loop_next_post_title_google_fonts = new BridgeQodeField("fontsimple", "blog_vertical_loop_next_post_title_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_vertical_loop_next_post_title_google_fonts", $blog_vertical_loop_next_post_title_google_fonts);
        $blog_vertical_loop_next_post_title_fontstyle = new BridgeQodeField("selectblanksimple", "blog_vertical_loop_next_post_title_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("blog_vertical_loop_next_post_title_fontstyle", $blog_vertical_loop_next_post_title_fontstyle);
        $blog_vertical_loop_next_post_title_fontweight = new BridgeQodeField("selectblanksimple", "blog_vertical_loop_next_post_title_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row2->addChild("blog_vertical_loop_next_post_title_fontweight", $blog_vertical_loop_next_post_title_fontweight);
        $blog_vertical_loop_next_post_title_letterspacing = new BridgeQodeField("textsimple", "blog_vertical_loop_next_post_title_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_vertical_loop_next_post_title_letterspacing", $blog_vertical_loop_next_post_title_letterspacing);


        $group12 = new BridgeQodeGroup(esc_html__("Post info Style", "bridge"), esc_html__("Define styles for post info", "bridge"));
        $panel2->addChild("group12", $group12);
        $row1 = new BridgeQodeRow();
        $group12->addChild("row1", $row1);
        $blog_vertical_loop_post_info_color = new BridgeQodeField("colorsimple", "blog_vertical_loop_post_info_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_vertical_loop_post_info_color", $blog_vertical_loop_post_info_color);
        $blog_vertical_loop_post_info_link_color = new BridgeQodeField("colorsimple", "blog_vertical_loop_post_info_link_color", "", esc_html__("Link Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_vertical_loop_post_info_link_color", $blog_vertical_loop_post_info_link_color);
        $blog_vertical_loop_post_info_hover_color = new BridgeQodeField("colorsimple", "blog_vertical_loop_post_info_hover_color", "", esc_html__("Link Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_vertical_loop_post_info_hover_color", $blog_vertical_loop_post_info_hover_color);
        $blog_vertical_loop_post_info_fontsize = new BridgeQodeField("textsimple", "blog_vertical_loop_post_info_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_vertical_loop_post_info_fontsize", $blog_vertical_loop_post_info_fontsize);
        $row2 = new BridgeQodeRow(true);
        $group12->addChild("row2", $row2);
        $blog_vertical_loop_post_info_lineheight = new BridgeQodeField("textsimple", "blog_vertical_loop_post_info_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_vertical_loop_post_info_lineheight", $blog_vertical_loop_post_info_lineheight);
        $blog_vertical_loop_post_info_texttransform = new BridgeQodeField("selectblanksimple", "blog_vertical_loop_post_info_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row2->addChild("blog_vertical_loop_post_info_texttransform", $blog_vertical_loop_post_info_texttransform);
        $blog_vertical_loop_post_info_google_fonts = new BridgeQodeField("fontsimple", "blog_vertical_loop_post_info_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_vertical_loop_post_info_google_fonts", $blog_vertical_loop_post_info_google_fonts);
        $blog_vertical_loop_post_info_fontstyle = new BridgeQodeField("selectblanksimple", "blog_vertical_loop_post_info_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("blog_vertical_loop_post_info_fontstyle", $blog_vertical_loop_post_info_fontstyle);

        $row3 = new BridgeQodeRow(true);
        $group12->addChild("row3", $row3);
        $blog_vertical_loop_post_info_fontweight = new BridgeQodeField("selectblanksimple", "blog_vertical_loop_post_info_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row3->addChild("blog_vertical_loop_post_info_fontweight", $blog_vertical_loop_post_info_fontweight);
        $blog_vertical_loop_post_info_letterspacing = new BridgeQodeField("textsimple", "blog_vertical_loop_post_info_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row3->addChild("blog_vertical_loop_post_info_letterspacing", $blog_vertical_loop_post_info_letterspacing);

        $group13 = new BridgeQodeGroup(esc_html__("Quote/Link Title Style", "bridge"), esc_html__("Define styles for title", "bridge"));
        $panel2->addChild("group13", $group13);
        $row1 = new BridgeQodeRow();
        $group13->addChild("row1", $row1);
        $blog_vertical_loop_ql_title_color = new BridgeQodeField("colorsimple", "blog_vertical_loop_ql_title_color", "", esc_html__("Title Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_vertical_loop_ql_title_color", $blog_vertical_loop_ql_title_color);
        $blog_vertical_loop_ql_title_hover_color = new BridgeQodeField("colorsimple", "blog_vertical_loop_ql_title_hover_color", "", esc_html__("Title Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_vertical_loop_ql_title_hover_color", $blog_vertical_loop_ql_title_hover_color);
        $blog_vertical_loop_ql_title_author_color = new BridgeQodeField("colorsimple", "blog_vertical_loop_ql_title_author_color", "", esc_html__("Quote Author Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_vertical_loop_ql_title_author_color", $blog_vertical_loop_ql_title_author_color);
        $blog_vertical_loop_ql_title_fontsize = new BridgeQodeField("textsimple", "blog_vertical_loop_ql_title_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_vertical_loop_ql_title_fontsize", $blog_vertical_loop_ql_title_fontsize);

        $row2 = new BridgeQodeRow(true);
        $group13->addChild("row2", $row2);
        $blog_vertical_loop_ql_title_lineheight = new BridgeQodeField("textsimple", "blog_vertical_loop_ql_title_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_vertical_loop_ql_title_lineheight", $blog_vertical_loop_ql_title_lineheight);
        $blog_vertical_loop_ql_title_texttransform = new BridgeQodeField("selectblanksimple", "blog_vertical_loop_ql_title_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row2->addChild("blog_vertical_loop_ql_title_texttransform", $blog_vertical_loop_ql_title_texttransform);
        $blog_vertical_loop_ql_title_google_fonts = new BridgeQodeField("fontsimple", "blog_vertical_loop_ql_title_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_vertical_loop_ql_title_google_fonts", $blog_vertical_loop_ql_title_google_fonts);
        $blog_vertical_loop_ql_title_fontstyle = new BridgeQodeField("selectblanksimple", "blog_vertical_loop_ql_title_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("blog_vertical_loop_ql_title_fontstyle", $blog_vertical_loop_ql_title_fontstyle);

        $row3 = new BridgeQodeRow(true);
        $group13->addChild("row3", $row3);
        $blog_vertical_loop_ql_title_fontweight = new BridgeQodeField("selectblanksimple", "blog_vertical_loop_ql_title_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row3->addChild("blog_vertical_loop_ql_title_fontweight", $blog_vertical_loop_ql_title_fontweight);
        $blog_vertical_loop_ql_title_letterspacing = new BridgeQodeField("textsimple", "blog_vertical_loop_ql_title_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row3->addChild("blog_vertical_loop_ql_title_letterspacing", $blog_vertical_loop_ql_title_letterspacing);

        $group14 = new BridgeQodeGroup(esc_html__("Quote/Link Post Info", "bridge"), esc_html__("Define styles for Quote/Link post info", "bridge"));
        $panel2->addChild("group14", $group14);
        $row1 = new BridgeQodeRow();
        $group14->addChild("row1", $row1);
        $blog_vertical_loop_ql_post_info_color = new BridgeQodeField("colorsimple", "blog_vertical_loop_ql_post_info_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_vertical_loop_ql_post_info_color", $blog_vertical_loop_ql_post_info_color);
        $blog_vertical_loop_ql_post_info_link_color = new BridgeQodeField("colorsimple", "blog_vertical_loop_ql_post_info_link_color", "", esc_html__("Link Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_vertical_loop_ql_post_info_link_color", $blog_vertical_loop_ql_post_info_link_color);
        $blog_vertical_loop_ql_post_info_hover_color = new BridgeQodeField("colorsimple", "blog_vertical_loop_ql_post_info_hover_color", "", esc_html__("Link Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_vertical_loop_ql_post_info_hover_color", $blog_vertical_loop_ql_post_info_hover_color);
        $blog_vertical_loop_ql_post_info_fontsize = new BridgeQodeField("textsimple", "blog_vertical_loop_ql_post_info_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_vertical_loop_ql_post_info_fontsize", $blog_vertical_loop_ql_post_info_fontsize);

        $row2 = new BridgeQodeRow(true);
        $group14->addChild("row2", $row2);
        $blog_vertical_loop_ql_post_info_lineheight = new BridgeQodeField("textsimple", "blog_vertical_loop_ql_post_info_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_vertical_loop_ql_post_info_lineheight", $blog_vertical_loop_ql_post_info_lineheight);
        $blog_vertical_loop_ql_post_info_texttransform = new BridgeQodeField("selectblanksimple", "blog_vertical_loop_ql_post_info_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row2->addChild("blog_vertical_loop_ql_post_info_texttransform", $blog_vertical_loop_ql_post_info_texttransform);
        $blog_vertical_loop_ql_post_info_google_fonts = new BridgeQodeField("fontsimple", "blog_vertical_loop_ql_post_info_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_vertical_loop_ql_post_info_google_fonts", $blog_vertical_loop_ql_post_info_google_fonts);
        $blog_vertical_loop_ql_post_info_fontstyle = new BridgeQodeField("selectblanksimple", "blog_vertical_loop_ql_post_info_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("blog_vertical_loop_ql_post_info_fontstyle", $blog_vertical_loop_ql_post_info_fontstyle);

        $row3 = new BridgeQodeRow(true);
        $group14->addChild("row3", $row3);
        $blog_vertical_loop_ql_post_info_fontweight = new BridgeQodeField("selectblanksimple", "blog_vertical_loop_ql_post_info_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row3->addChild("blog_vertical_loop_ql_post_info_fontweight", $blog_vertical_loop_ql_post_info_fontweight);
        $blog_vertical_loop_ql_post_info_letterspacing = new BridgeQodeField("textsimple", "blog_vertical_loop_ql_post_info_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row3->addChild("blog_vertical_loop_ql_post_info_letterspacing", $blog_vertical_loop_ql_post_info_letterspacing);

        $group15 = new BridgeQodeGroup(esc_html__("Next/Prev Buttons Style", "bridge"), esc_html__("Define styles next/prev buttons", "bridge"));
        $panel2->addChild("group15", $group15);
        $row1 = new BridgeQodeRow();
        $group15->addChild("row1", $row1);
        $blog_vertical_loop_npb_background_color = new BridgeQodeField("colorsimple", "blog_vertical_loop_npb_background_color", "", esc_html__("Background Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_vertical_loop_npb_background_color", $blog_vertical_loop_npb_background_color);

        $blog_vertical_loop_npb_background_hover_color = new BridgeQodeField("colorsimple", "blog_vertical_loop_npb_background_hover_color", "", esc_html__("Background Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_vertical_loop_npb_background_hover_color", $blog_vertical_loop_npb_background_hover_color);

        $blog_vertical_loop_npb_icon_color = new BridgeQodeField("colorsimple", "blog_vertical_loop_npb_icon_color", "", esc_html__("Icon Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_vertical_loop_npb_icon_color", $blog_vertical_loop_npb_icon_color);

        $blog_vertical_loop_npb_icon_hover_color = new BridgeQodeField("colorsimple", "blog_vertical_loop_npb_icon_hover_color", "", esc_html__("Icon Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_vertical_loop_npb_icon_hover_color", $blog_vertical_loop_npb_icon_hover_color);

        $blog_masonry_date_image_subtitle = new BridgeQodeTitle("blog_masonry_date_image_subtitle", esc_html__("Masonry - Date in Image Style", "bridge"));
        $panel2->addChild("blog_masonry_date_image_subtitle", $blog_masonry_date_image_subtitle);

        $group16 = new BridgeQodeGroup(esc_html__("Masonry - Date in Image Style", "bridge"), esc_html__('Choose a background color for Blog Masonry - Date in Image', 'bridge'));
        $panel2->addChild("group16", $group16);
        $row1 = new BridgeQodeRow();
        $group16->addChild("row1", $row1);
        $blog_masonry_date_image_background_color = new BridgeQodeField("colorsimple", "blog_masonry_date_image_background_color", "", esc_html__("Text Box Background Color", "bridge"), esc_html__("ThisIsDescription", "bridge"));
        $row1->addChild("blog_masonry_date_image_background_color", $blog_masonry_date_image_background_color);

        $group17 = new BridgeQodeGroup(esc_html__("Title Style", "bridge"), esc_html__("Define styles for title", "bridge"));
        $panel2->addChild("group17", $group17);
        $row1 = new BridgeQodeRow();
        $group17->addChild("row1", $row1);
        $blog_masonry_date_image_title_color = new BridgeQodeField("colorsimple", "blog_masonry_date_image_title_color", "", esc_html__("Title Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_masonry_date_image_title_color", $blog_masonry_date_image_title_color);
        $blog_masonry_date_image_title_hover_color = new BridgeQodeField("colorsimple", "blog_masonry_date_image_title_hover_color", "", esc_html__("Title Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_masonry_date_image_title_hover_color", $blog_masonry_date_image_title_hover_color);
        $blog_masonry_date_image_title_fontsize = new BridgeQodeField("textsimple", "blog_masonry_date_image_title_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_masonry_date_image_title_fontsize", $blog_masonry_date_image_title_fontsize);
        $blog_masonry_date_image_title_lineheight = new BridgeQodeField("textsimple", "blog_masonry_date_image_title_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_masonry_date_image_title_lineheight", $blog_masonry_date_image_title_lineheight);

        $row2 = new BridgeQodeRow(true);
        $group17->addChild("row2", $row2);
        $blog_masonry_date_image_title_texttransform = new BridgeQodeField("selectblanksimple", "blog_masonry_date_image_title_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row2->addChild("blog_masonry_date_image_title_texttransform", $blog_masonry_date_image_title_texttransform);
        $blog_masonry_date_image_title_google_fonts = new BridgeQodeField("fontsimple", "blog_masonry_date_image_title_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_masonry_date_image_title_google_fonts", $blog_masonry_date_image_title_google_fonts);
        $blog_masonry_date_image_title_fontstyle = new BridgeQodeField("selectblanksimple", "blog_masonry_date_image_title_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("blog_masonry_date_image_title_fontstyle", $blog_masonry_date_image_title_fontstyle);
        $blog_masonry_date_image_title_fontweight = new BridgeQodeField("selectblanksimple", "blog_masonry_date_image_title_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row2->addChild("blog_masonry_date_image_title_fontweight", $blog_masonry_date_image_title_fontweight);

        $row3 = new BridgeQodeRow(true);
        $group17->addChild("row3", $row3);
        $blog_masonry_date_image_title_letterspacing = new BridgeQodeField("textsimple", "blog_masonry_date_image_title_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row3->addChild("blog_masonry_date_image_title_letterspacing", $blog_masonry_date_image_title_letterspacing);

        $group35 = new BridgeQodeGroup(esc_html__("Hover Type", "bridge"), esc_html__("Define hover type for articles", "bridge"));
        $panel2->addChild("group35", $group35);
        $row1 = new BridgeQodeRow();
        $group35->addChild("row1", $row1);
        $blog_masonry_date_image_hover_type = new BridgeQodeField("selectblanksimple", "blog_masonry_date_image_hover_type", "", esc_html__("Hover Type", "bridge"), esc_html__("ThisIsDescription", "bridge"), array(
            'qodef-no-hover' => esc_html__('None', "bridge"),
            'qodef-zoom' => esc_html__('Zoom In', "bridge")
        ));
        $row1->addChild("blog_masonry_date_image_hover_type", $blog_masonry_date_image_hover_type);

        $blog_pinterest_subtitle = new BridgeQodeTitle(esc_html__("blog_pinterest_subtitle", "bridge"), esc_html__("Pinterest Style", "bridge"));
        $panel2->addChild("blog_pinterest_subtitle", $blog_pinterest_subtitle);

        $group30 = new BridgeQodeGroup(esc_html__("Pinterest Style", "bridge"), esc_html__('Define styles for the "Pinterest" Blog List', 'bridge'));
        $panel2->addChild("group30", $group30);
            $row1 = new BridgeQodeRow();
            $group30->addChild("row1", $row1);
            $blog_pinterest_background_color = new BridgeQodeField("colorsimple", "blog_pinterest_background_color", "", esc_html__("Text Box Background Color", "bridge"), esc_html__("ThisIsDescription", "bridge"));
            $row1->addChild("blog_pinterest_background_color", $blog_pinterest_background_color);

        $group31 = new BridgeQodeGroup(esc_html__("Title Style", "bridge"), esc_html__("Define styles for title", "bridge"));
        $panel2->addChild("group31", $group31);
            $row1 = new BridgeQodeRow();
            $group31->addChild("row1", $row1);
            $blog_pinterest_title_color = new BridgeQodeField("colorsimple", "blog_pinterest_title_color", "", esc_html__("Title Color", "bridge"), esc_html__("This is some description", "bridge"));
            $row1->addChild("blog_pinterest_title_color", $blog_pinterest_title_color);
            $blog_pinterest_title_hover_color = new BridgeQodeField("colorsimple", "blog_pinterest_title_hover_color", "", esc_html__("Title Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
            $row1->addChild("blog_pinterest_title_hover_color", $blog_pinterest_title_hover_color);
            $blog_pinterest_title_fontsize = new BridgeQodeField("textsimple", "blog_pinterest_title_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
            $row1->addChild("blog_pinterest_title_fontsize", $blog_pinterest_title_fontsize);
            $blog_pinterest_title_lineheight = new BridgeQodeField("textsimple", "blog_pinterest_title_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
            $row1->addChild("blog_pinterest_title_lineheight", $blog_pinterest_title_lineheight);

            $row2 = new BridgeQodeRow(true);
            $group31->addChild("row2", $row2);
            $blog_pinterest_title_texttransform = new BridgeQodeField("selectblanksimple", "blog_pinterest_title_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
            $row2->addChild("blog_pinterest_title_texttransform", $blog_pinterest_title_texttransform);
            $blog_pinterest_title_google_fonts = new BridgeQodeField("fontsimple", "blog_pinterest_title_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
            $row2->addChild("blog_pinterest_title_google_fonts", $blog_pinterest_title_google_fonts);
            $blog_pinterest_title_fontstyle = new BridgeQodeField("selectblanksimple", "blog_pinterest_title_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
            $row2->addChild("blog_pinterest_title_fontstyle", $blog_pinterest_title_fontstyle);
            $blog_pinterest_title_fontweight = new BridgeQodeField("selectblanksimple", "blog_pinterest_title_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
            $row2->addChild("blog_pinterest_title_fontweight", $blog_pinterest_title_fontweight);

            $row3 = new BridgeQodeRow(true);
            $group31->addChild("row3", $row3);
            $blog_pinterest_title_letterspacing = new BridgeQodeField("textsimple", "blog_pinterest_title_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
            $row3->addChild("blog_pinterest_title_letterspacing", $blog_pinterest_title_letterspacing);

        $group32 = new BridgeQodeGroup(esc_html__("Post Info Style", "bridge"), esc_html__("Define styles for post info", "bridge"));
        $panel2->addChild("group32", $group32);
            $row1 = new BridgeQodeRow();
            $group32->addChild("row1", $row1);
            $blog_pinterest_post_info_color = new BridgeQodeField("colorsimple", "blog_pinterest_post_info_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
            $row1->addChild("blog_pinterest_post_info_color", $blog_pinterest_post_info_color);
            $blog_pinterest_post_info_link_color = new BridgeQodeField("colorsimple", "blog_pinterest_post_info_link_color", "", esc_html__("Link Color", "bridge"), esc_html__("This is some description", "bridge"));
            $row1->addChild("blog_pinterest_post_info_link_color", $blog_pinterest_post_info_link_color);
            $blog_pinterest_post_info_link_hover_color = new BridgeQodeField("colorsimple", "blog_pinterest_post_info_link_hover_color", "", esc_html__("Link Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
            $row1->addChild("blog_pinterest_post_info_link_hover_color", $blog_pinterest_post_info_link_hover_color);
            $blog_pinterest_post_info_fontsize = new BridgeQodeField("textsimple", "blog_pinterest_post_info_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
            $row1->addChild("blog_pinterest_post_info_fontsize", $blog_pinterest_post_info_fontsize);

            $row2 = new BridgeQodeRow(true);
            $group32->addChild("row2", $row2);
            $blog_pinterest_post_info_lineheight = new BridgeQodeField("textsimple", "blog_pinterest_post_info_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
            $row2->addChild("blog_pinterest_post_info_lineheight", $blog_pinterest_post_info_lineheight);
            $blog_pinterest_post_info_texttransform = new BridgeQodeField("selectblanksimple", "blog_pinterest_post_info_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
            $row2->addChild("blog_pinterest_post_info_texttransform", $blog_pinterest_post_info_texttransform);
            $blog_pinterest_post_info_google_fonts = new BridgeQodeField("fontsimple", "blog_pinterest_post_info_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
            $row2->addChild("blog_pinterest_post_info_google_fonts", $blog_pinterest_post_info_google_fonts);
            $blog_pinterest_post_info_fontstyle = new BridgeQodeField("selectblanksimple", "blog_pinterest_post_info_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
            $row2->addChild("blog_pinterest_post_info_fontstyle", $blog_pinterest_post_info_fontstyle);

            $row3 = new BridgeQodeRow(true);
            $group32->addChild("row3", $row3);
            $blog_pinterest_post_info_fontweight = new BridgeQodeField("selectblanksimple", "blog_pinterest_post_info_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
            $row3->addChild("blog_pinterest_post_info_fontweight", $blog_pinterest_post_info_fontweight);
            $blog_pinterest_post_info_letterspacing = new BridgeQodeField("textsimple", "blog_pinterest_post_info_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
            $row3->addChild("blog_pinterest_post_info_letterspacing", $blog_pinterest_post_info_letterspacing);

        $group33 = new BridgeQodeGroup(esc_html__("Post Info Quote/Link Style", "bridge"), esc_html__("Define styles for Quote/Link post info", "bridge"));
        $panel2->addChild("group33", $group33);
            $row1 = new BridgeQodeRow();
            $group33->addChild("row1", $row1);
            $blog_pinterest_ql_post_info_color = new BridgeQodeField("colorsimple", "blog_pinterest_ql_post_info_color", "", esc_html__("Text Color", "bridge"), esc_html__("This is some description", "bridge"));
            $row1->addChild("blog_pinterest_ql_post_info_color", $blog_pinterest_ql_post_info_color);
            $blog_pinterest_ql_post_info_fontsize = new BridgeQodeField("textsimple", "blog_pinterest_ql_post_info_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
            $row1->addChild("blog_pinterest_ql_post_info_fontsize", $blog_pinterest_ql_post_info_fontsize);

            $row2 = new BridgeQodeRow(true);
            $group33->addChild("row2", $row2);
            $blog_pinterest_ql_post_info_lineheight = new BridgeQodeField("textsimple", "blog_pinterest_ql_post_info_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
            $row2->addChild("blog_pinterest_ql_post_info_lineheight", $blog_pinterest_ql_post_info_lineheight);
            $blog_pinterest_ql_post_info_texttransform = new BridgeQodeField("selectblanksimple", "blog_pinterest_ql_post_info_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
            $row2->addChild("blog_pinterest_ql_post_info_texttransform", $blog_pinterest_ql_post_info_texttransform);
            $blog_pinterest_ql_post_info_google_fonts = new BridgeQodeField("fontsimple", "blog_pinterest_ql_post_info_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
            $row2->addChild("blog_pinterest_ql_post_info_google_fonts", $blog_pinterest_ql_post_info_google_fonts);
            $blog_pinterest_ql_post_info_fontstyle = new BridgeQodeField("selectblanksimple", "blog_pinterest_ql_post_info_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
            $row2->addChild("blog_pinterest_ql_post_info_fontstyle", $blog_pinterest_ql_post_info_fontstyle);

            $row3 = new BridgeQodeRow(true);
            $group33->addChild("row3", $row3);
            $blog_pinterest_ql_post_info_fontweight = new BridgeQodeField("selectblanksimple", "blog_pinterest_ql_post_info_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
            $row3->addChild("blog_pinterest_ql_post_info_fontweight", $blog_pinterest_ql_post_info_fontweight);
            $blog_pinterest_ql_post_info_letterspacing = new BridgeQodeField("textsimple", "blog_pinterest_ql_post_info_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
            $row3->addChild("blog_pinterest_ql_post_info_letterspacing", $blog_pinterest_ql_post_info_letterspacing);


        // Blog Single

        $panel3 = new BridgeQodePanel(esc_html__("Blog Single", "bridge"), "blog_single_panel");
        $blogPage->addChild("panel3", $panel3);

        $single_templates = array(
			'standard'				=> esc_html__('Standard', "bridge"),
			'image-title-post'		=> esc_html__('Image Title Post', "bridge")
		);
        $single_templates = apply_filters('bridge_qode_filter_single_blog_templates',$single_templates);

		bridge_qode_add_admin_field(
			array(
				'name'          => 'blog_single_type',
				'type'          => 'select',
				'label'         => esc_html__('Choose a default type for Single Post pages', 'bridge'),
				'description'   => '',
				'options'     => $single_templates,
				'default_value'		=> 'standard',
				'parent'        => $panel3,
				'args'          => array(
					'dependence' => true,
					'hide'       => array(
						'standard'				=> '#qodef_qode_itp_separator_container',
						'image-title-post' 		=> '#qodef_qode_audio_image_container',
						'news-template' 		=> '#qodef_qode_audio_image_container',
					),
					'show'       => array(
						'standard'				=> '#qodef_qode_audio_image_container',
						'image-title-post'		=> '#qodef_qode_itp_separator_container',
						'news-template'			=> '#qodef_qode_itp_separator_container',
					)
				)
			)
		);

		$qode_itp_separator_container = bridge_qode_add_admin_container(
			array(
				'parent'          => $panel3,
				'name'            => 'qode_itp_separator_container',
				'hidden_property' => 'blog_single_type',
				'hidden_value'    => 'standard'
			)
		);

		$qode_audio_image_container = bridge_qode_add_admin_container(
			array(
				'parent'          => $panel3,
				'name'            => 'qode_audio_image_container',
				'hidden_property' => 'blog_single_type',
				'hidden_values'    => array('image-title-post', 'news-template')
			)
		);

		bridge_qode_add_admin_field(
			array(
				'name'          	=> 'blog_imt_post_separator',
				'type'          	=> 'yesno',
				'label'         	=> esc_html__('Enable Separator Below Title', 'bridge'),
				'description'   	=> '',
				'default_value'		=> 'no',
				'parent'        	=> $qode_itp_separator_container,
				'args' => array(
					'dependence' => true,
					'dependence_hide_on_yes' => '',
					'dependence_show_on_yes' => '#qodef_qode_itp_separator_gradient_container'
				)
			)
		);

		$qode_itp_separator_gradient_container = bridge_qode_add_admin_container(
			array(
				'parent'          => $panel3,
				'name'            => 'qode_itp_separator_gradient_container',
				'hidden_property' => 'blog_imt_post_separator',
				'hidden_value'    => 'no'
			)
		);

		bridge_qode_add_admin_field(
			array(
				'name'         		=> 'blog_imt_post_separator_gradient',
				'type'          	=> 'yesno',
				'label'         	=> esc_html__('Enable Gradient on Separator', 'bridge'),
				'description'   	=> '',
				'default_value'		=> 'no',
				'parent'        	=> $qode_itp_separator_gradient_container
			)
		);

		bridge_qode_add_admin_field(
			array(
				'name'         		=> 'show_image_on_audio_post',
				'type'          	=> 'yesno',
				'label'         	=> esc_html__('Show Image on Audio post', 'bridge'),
				'description'   	=> esc_html__('Enabling this option will display image on audio post', 'bridge'),
				'default_value'		=> 'no',
				'parent'        	=> $qode_audio_image_container
			)
		);

		$blog_single_sidebar = new BridgeQodeField("select", "blog_single_sidebar", "default", esc_html__("Sidebar Layout", "bridge"), esc_html__("Choose a sidebar layout for Blog Single pages", "bridge"), array("default" => esc_html__("No Sidebar", "bridge"),
            "1" => esc_html__("Sidebar 1/3 right", "bridge"),
            "2" => esc_html__("Sidebar 1/4 right", "bridge"),
            "3" => esc_html__("Sidebar 1/3 left", "bridge"),
            "4" => esc_html__("Sidebar 1/4 left", "bridge")
        ));
        $panel3->addChild("blog_single_sidebar", $blog_single_sidebar);

        $custom_sidebars = bridge_qode_get_custom_sidebars();

        $blog_single_sidebar_custom_display = new BridgeQodeField("selectblank", "blog_single_sidebar_custom_display", "", esc_html__("Sidebar to Display", "bridge"), esc_html__("Choose a sidebar to display on Blog Single pages", "bridge"), $custom_sidebars);
        $panel3->addChild("blog_single_sidebar_custom_display", $blog_single_sidebar_custom_display);

        $blog_share_like_layout = new BridgeQodeField("select", "blog_share_like_layout", "in_post_info", esc_html__("Share/Like Layout", "bridge"), esc_html__("Choose a share/like layout for Blog Single pages", "bridge"), array(
            "in_post_info" => esc_html__("In Post Info", "bridge"),
            "below_post_text" => esc_html__("Below Post Text", "bridge")
        ));
        $panel3->addChild("blog_share_like_layout", $blog_share_like_layout);



        $blog_author_info = new BridgeQodeField("yesno", "blog_author_info", "no", esc_html__("Show Blog Author", "bridge"), esc_html__("Enabling this option will display author name on Blog Single pages", "bridge"));
        $panel3->addChild("blog_author_info", $blog_author_info);

        $group1 = new BridgeQodeGroup(esc_html__("Blog Single Spacing", "bridge"), esc_html__("Set spacing for blog single posts", "bridge"));
        $panel3->addChild("group1", $group1);
        $row1 = new BridgeQodeRow();
        $group1->addChild("row1", $row1);
        $blog_single_image_margin_bottom = new BridgeQodeField("textsimple", "blog_single_image_margin_bottom", "", esc_html__("Image Margin Bottom (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_single_image_margin_bottom", $blog_single_image_margin_bottom);
        $blog_single_title_margin_bottom = new BridgeQodeField("textsimple", "blog_single_title_margin_bottom", "", esc_html__("Title Margin Bottom (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_single_title_margin_bottom", $blog_single_title_margin_bottom);
        $blog_single_post_info_margin_bottom = new BridgeQodeField("textsimple", "blog_single_post_info_margin_bottom", "", esc_html__("Post Info Margin Bottom (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_single_post_info_margin_bottom", $blog_single_post_info_margin_bottom);

		do_action('bridge_qode_action_blog_single_options_map', $panel3);

        // Quote/Link

        $panel1 = new BridgeQodePanel(esc_html__("Quote/Link", "bridge"), "quote_link_panel");
        $blogPage->addChild("panel1", $panel1);
        $blog_quote_link_box_color = new BridgeQodeField("color", "blog_quote_link_box_color", "", esc_html__("Box Backround Color", "bridge"), esc_html__('Choose a box background color for "Quote" and "Link" type blog displays', 'bridge'));
        $panel1->addChild("blog_quote_link_box_color", $blog_quote_link_box_color);


        $panel4 = new BridgeQodePanel(esc_html__("Blog Slider", "bridge"), "blog_slider_panel");
        $blogPage->addChild("panel4", $panel4);

        $blog_slider_default_subtitle = new BridgeQodeTitle("blog_slider_default_subtitle", esc_html__("Blog Carousel Slider Style", "bridge"));
        $panel4->addChild("blog_slider_default_subtitle", $blog_slider_default_subtitle);

        $group1 = new BridgeQodeGroup(esc_html__("Title Style", "bridge"), esc_html__("Define styles for title", "bridge"));
        $panel4->addChild("group1", $group1);

        $row1 = new BridgeQodeRow();
        $group1->addChild("row1", $row1);

        $blog_slider_title_color = new BridgeQodeField("colorsimple", "blog_slider_title_color", "", esc_html__("Title Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_slider_title_color", $blog_slider_title_color);
        $blog_slider_title_hover_color = new BridgeQodeField("colorsimple", "blog_slider_title_hover_color", "", esc_html__("Title Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_slider_title_hover_color", $blog_slider_title_hover_color);
        $blog_slider_title_fontsize = new BridgeQodeField("textsimple", "blog_slider_title_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_slider_title_fontsize", $blog_slider_title_fontsize);
        $blog_slider_title_lineheight = new BridgeQodeField("textsimple", "blog_slider_title_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_slider_title_lineheight", $blog_slider_title_lineheight);

        $row2 = new BridgeQodeRow();
        $group1->addChild("row2", $row2);

        $blog_slider_title_texttransform = new BridgeQodeField("selectblanksimple", "blog_slider_title_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row2->addChild("blog_slider_title_texttransform", $blog_slider_title_texttransform);
        $blog_slider_title_google_fonts = new BridgeQodeField("fontsimple", "blog_slider_title_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_slider_title_google_fonts", $blog_slider_title_google_fonts);
        $blog_slider_title_fontstyle = new BridgeQodeField("selectblanksimple", "blog_slider_title_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("blog_slider_title_fontstyle", $blog_slider_title_fontstyle);
        $blog_slider_title_fontweight = new BridgeQodeField("selectblanksimple", "blog_slider_title_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row2->addChild("blog_slider_title_fontweight", $blog_slider_title_fontweight);

        $row3 = new BridgeQodeRow();
        $group1->addChild("row3", $row3);

        $blog_slider_title_letterspacing = new BridgeQodeField("textsimple", "blog_slider_title_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row3->addChild("blog_slider_title_letterspacing", $blog_slider_title_letterspacing);

        $group2 = new BridgeQodeGroup(esc_html__("Post Info Style", "bridge"), esc_html__("Define styles for post info", "bridge"));
        $panel4->addChild("group2", $group2);

        $row1 = new BridgeQodeRow();
        $group2->addChild("row1", $row1);

        $blog_slider_post_info_color = new BridgeQodeField("colorsimple", "blog_slider_post_info_color", "", esc_html__("Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_slider_post_info_color", $blog_slider_post_info_color);

        $blog_slider_post_info_link_color = new BridgeQodeField("colorsimple", "blog_slider_post_info_link_color", "", esc_html__("Link Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_slider_post_info_link_color", $blog_slider_post_info_link_color);

        $blog_slider_post_info_link_hover_color = new BridgeQodeField("colorsimple", "blog_slider_post_info_link_hover_color", "", esc_html__("Link Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_slider_post_info_link_hover_color", $blog_slider_post_info_link_hover_color);

        $blog_slider_post_info_fontsize = new BridgeQodeField("textsimple", "blog_slider_post_info_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_slider_post_info_fontsize", $blog_slider_post_info_fontsize);

        $row2 = new BridgeQodeRow(true);
        $group2->addChild("row2", $row2);

        $blog_slider_post_info_lineheight = new BridgeQodeField("textsimple", "blog_slider_post_info_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_slider_post_info_lineheight", $blog_slider_post_info_lineheight);

        $blog_slider_post_info_texttransform = new BridgeQodeField("selectblanksimple", "blog_slider_post_info_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row2->addChild("blog_slider_post_info_texttransform", $blog_slider_post_info_texttransform);

        $blog_slider_post_info_google_fonts = new BridgeQodeField("fontsimple", "blog_slider_post_info_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_slider_post_info_google_fonts", $blog_slider_post_info_google_fonts);

        $blog_slider_post_info_fontstyle = new BridgeQodeField("selectblanksimple", "blog_slider_post_info_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("blog_slider_post_info_fontstyle", $blog_slider_post_info_fontstyle);

        $row3 = new BridgeQodeRow();
        $group2->addChild("row3", $row3);

        $blog_slider_post_info_fontweight = new BridgeQodeField("selectblanksimple", "blog_slider_post_info_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row3->addChild("blog_slider_post_info_fontweight", $blog_slider_post_info_fontweight);

        $blog_slider_post_info_letterspacing = new BridgeQodeField("textsimple", "blog_slider_post_info_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row3->addChild("blog_slider_post_info_letterspacing", $blog_slider_post_info_letterspacing);

        $group9 = new BridgeQodeGroup(esc_html__("Day Style", "bridge"), esc_html__("Define styles for post info - Day, for Post Info Position - Bottom (if not set, it will be inherited from Post Info Style)", "bridge"));
        $panel4->addChild("group9", $group9);

        $row1 = new BridgeQodeRow();
        $group9->addChild("row1", $row1);

        $blog_slider_day_color = new BridgeQodeField("colorsimple", "blog_slider_day_color", "", esc_html__("Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_slider_day_color", $blog_slider_day_color);

        $blog_slider_day_fontsize = new BridgeQodeField("textsimple", "blog_slider_day_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_slider_day_fontsize", $blog_slider_day_fontsize);

        $blog_slider_day_lineheight = new BridgeQodeField("textsimple", "blog_slider_day_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_slider_day_lineheight", $blog_slider_day_lineheight);

        $blog_slider_day_texttransform = new BridgeQodeField("selectblanksimple", "blog_slider_day_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row1->addChild("blog_slider_day_texttransform", $blog_slider_day_texttransform);

        $row2 = new BridgeQodeRow(true);
        $group9->addChild("row2", $row2);

        $blog_slider_day_google_fonts = new BridgeQodeField("fontsimple", "blog_slider_day_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_slider_day_google_fonts", $blog_slider_day_google_fonts);

        $blog_slider_day_fontstyle = new BridgeQodeField("selectblanksimple", "blog_slider_day_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("blog_slider_day_fontstyle", $blog_slider_day_fontstyle);

        $blog_slider_day_fontweight = new BridgeQodeField("selectblanksimple", "blog_slider_day_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row2->addChild("blog_slider_day_fontweight", $blog_slider_day_fontweight);

        $blog_slider_day_letterspacing = new BridgeQodeField("textsimple", "blog_slider_day_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_slider_day_letterspacing", $blog_slider_day_letterspacing);

        $group3 = new BridgeQodeGroup(esc_html__("Blog Slider Spacing", "bridge"), esc_html__("Define spacing for blog slider content", "bridge"));
        $panel4->addChild("group3", $group3);

        $row1 = new BridgeQodeRow();
        $group3->addChild("row1", $row1);

        $blog_slider_title_bottom_margin = new BridgeQodeField("textsimple", "blog_slider_title_bottom_margin", "", esc_html__("Title Margin Bottom (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_slider_title_bottom_margin", $blog_slider_title_bottom_margin);

        $blog_slider_date_bottom_margin = new BridgeQodeField("textsimple", "blog_slider_date_bottom_margin", "", esc_html__("Date Margin Bottom (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_slider_date_bottom_margin", $blog_slider_date_bottom_margin);

        $blog_slider_day_margin = new BridgeQodeField("textsimple", "blog_slider_day_margin", "", esc_html__("Day Margin Bottom (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_slider_day_margin", $blog_slider_day_margin);

        $blog_slider_simple_subtitle = new BridgeQodeTitle("blog_slider_simple_subtitle", esc_html__("Blog Simple Slider Style", "bridge"));
        $panel4->addChild("blog_slider_simple_subtitle", $blog_slider_simple_subtitle);

        $group4 = new BridgeQodeGroup(esc_html__("Title Style", "bridge"), esc_html__("Define styles for title", "bridge"));
        $panel4->addChild("group4", $group4);

        $row1 = new BridgeQodeRow();
        $group4->addChild("row1", $row1);

        $blog_slsimple_title_color = new BridgeQodeField("colorsimple", "blog_slsimple_title_color", "", esc_html__("Title Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_slsimple_title_color", $blog_slsimple_title_color);
        $blog_slsimple_title_hover_color = new BridgeQodeField("colorsimple", "blog_slsimple_title_hover_color", "", esc_html__("Title Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_slsimple_title_hover_color", $blog_slsimple_title_hover_color);
        $blog_slsimple_title_fontsize = new BridgeQodeField("textsimple", "blog_slsimple_title_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_slsimple_title_fontsize", $blog_slsimple_title_fontsize);
        $blog_slsimple_title_lineheight = new BridgeQodeField("textsimple", "blog_slsimple_title_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_slsimple_title_lineheight", $blog_slsimple_title_lineheight);

        $row2 = new BridgeQodeRow();
        $group4->addChild("row2", $row2);

        $blog_slsimple_title_texttransform = new BridgeQodeField("selectblanksimple", "blog_slsimple_title_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row2->addChild("blog_slsimple_title_texttransform", $blog_slsimple_title_texttransform);
        $blog_slsimple_title_google_fonts = new BridgeQodeField("fontsimple", "blog_slsimple_title_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_slsimple_title_google_fonts", $blog_slsimple_title_google_fonts);
        $blog_slsimple_title_fontstyle = new BridgeQodeField("selectblanksimple", "blog_slsimple_title_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("blog_slsimple_title_fontstyle", $blog_slsimple_title_fontstyle);
        $blog_slsimple_title_fontweight = new BridgeQodeField("selectblanksimple", "blog_slsimple_title_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row2->addChild("blog_slsimple_title_fontweight", $blog_slsimple_title_fontweight);

        $row3 = new BridgeQodeRow();
        $group4->addChild("row3", $row3);

        $blog_slsimple_title_letterspacing = new BridgeQodeField("textsimple", "blog_slsimple_title_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row3->addChild("blog_slsimple_title_letterspacing", $blog_slsimple_title_letterspacing);

        $group5 = new BridgeQodeGroup(esc_html__("Post Info Style", "bridge"), esc_html__("Define styles for post info", "bridge"));
        $panel4->addChild("group5", $group5);

        $row1 = new BridgeQodeRow();
        $group5->addChild("row1", $row1);

        $blog_slsimple_post_info_color = new BridgeQodeField("colorsimple", "blog_slsimple_post_info_color", "", esc_html__("Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_slsimple_post_info_color", $blog_slsimple_post_info_color);

        $blog_slsimple_post_info_link_color = new BridgeQodeField("colorsimple", "blog_slsimple_post_info_link_color", "", esc_html__("Link Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_slsimple_post_info_link_color", $blog_slsimple_post_info_link_color);

        $blog_slsimple_post_info_link_hover_color = new BridgeQodeField("colorsimple", "blog_slsimple_post_info_link_hover_color", "", esc_html__("Link Hover Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_slsimple_post_info_link_hover_color", $blog_slsimple_post_info_link_hover_color);

        $blog_slsimple_post_info_fontsize = new BridgeQodeField("textsimple", "blog_slsimple_post_info_fontsize", "", esc_html__("Font Size (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_slsimple_post_info_fontsize", $blog_slsimple_post_info_fontsize);

        $row2 = new BridgeQodeRow();
        $group5->addChild("row2", $row2);

        $blog_slsimple_post_info_lineheight = new BridgeQodeField("textsimple", "blog_slsimple_post_info_lineheight", "", esc_html__("Line Height (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_slsimple_post_info_lineheight", $blog_slsimple_post_info_lineheight);

        $blog_slsimple_post_info_texttransform = new BridgeQodeField("selectblanksimple", "blog_slsimple_post_info_texttransform", "", esc_html__("Text Transform", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_text_transform_array());
        $row2->addChild("blog_slsimple_post_info_texttransform", $blog_slsimple_post_info_texttransform);

        $blog_slsimple_post_info_google_fonts = new BridgeQodeField("fontsimple", "blog_slsimple_post_info_google_fonts", "-1", esc_html__("Font Family", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_slsimple_post_info_google_fonts", $blog_slsimple_post_info_google_fonts);

        $blog_slsimple_post_info_fontstyle = new BridgeQodeField("selectblanksimple", "blog_slsimple_post_info_fontstyle", "", esc_html__("Font Style", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_style_array());
        $row2->addChild("blog_slsimple_post_info_fontstyle", $blog_slsimple_post_info_fontstyle);

        $row3 = new BridgeQodeRow();
        $group5->addChild("row3", $row3);

        $blog_slsimple_post_info_fontweight = new BridgeQodeField("selectblanksimple", "blog_slsimple_post_info_fontweight", "", esc_html__("Font Weight", "bridge"), esc_html__("This is some description", "bridge"), bridge_qode_get_font_weight_array());
        $row3->addChild("blog_slsimple_post_info_fontweight", $blog_slsimple_post_info_fontweight);

        $blog_slsimple_post_info_letterspacing = new BridgeQodeField("textsimple", "blog_slsimple_post_info_letterspacing", "", esc_html__("Letter Spacing (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row3->addChild("blog_slsimple_post_info_letterspacing", $blog_slsimple_post_info_letterspacing);

        $group6 = new BridgeQodeGroup(esc_html__("Blog Slider Spacing", "bridge"), esc_html__("Define spacing for blog slider content", "bridge"));
        $panel4->addChild("group6", $group6);

        $row1 = new BridgeQodeRow();
        $group6->addChild("row1", $row1);

        $blog_slsimple_title_bottom_margin = new BridgeQodeField("textsimple", "blog_slsimple_title_bottom_margin", "", esc_html__("Title Margin Bottom (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_slsimple_title_bottom_margin", $blog_slsimple_title_bottom_margin);

        $blog_slsimple_post_info_bottom_margin = new BridgeQodeField("textsimple", "blog_slsimple_post_info_bottom_margin", "", esc_html__("Post Info Margin Bottom (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_slsimple_post_info_bottom_margin", $blog_slsimple_post_info_bottom_margin);

        $blog_slsimple_excerpt_bottom_margin = new BridgeQodeField("textsimple", "blog_slsimple_excerpt_bottom_margin", "", esc_html__("Excerpt Margin Bottom (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_slsimple_excerpt_bottom_margin", $blog_slsimple_excerpt_bottom_margin);

        $group7 = new BridgeQodeGroup(esc_html__("Box style", "bridge"), esc_html__("Define style for box", "bridge"));
        $panel4->addChild("group7", $group7);

        $row1 = new BridgeQodeRow();
        $group7->addChild("row1", $row1);

        $blog_slider_box_background_color = new BridgeQodeField("colorsimple", "blog_slider_box_background_color", "", esc_html__("Background Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_slider_box_background_color", $blog_slider_box_background_color);

        $blog_slider_box_background_opacity = new BridgeQodeField("textsimple", "blog_slider_box_background_opacity", "", esc_html__("Background Opacity (0-1)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_slider_box_background_opacity", $blog_slider_box_background_opacity);

        $blog_slider_box_border_color = new BridgeQodeField("colorsimple", "blog_slider_box_border_color", "", esc_html__("Border Color", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_slider_box_border_color", $blog_slider_box_border_color);

        $blog_slider_box_border_opacity = new BridgeQodeField("textsimple", "blog_slider_box_border_opacity", "", esc_html__("Border Opacity (0-1)", "bridge"), esc_html__("This is some description", "bridge"));
        $row1->addChild("blog_slider_box_border_opacity", $blog_slider_box_border_opacity);

        $row2 = new BridgeQodeRow();
        $group7->addChild("row2", $row2);

        $blog_slider_box_padding_top = new BridgeQodeField("textsimple", "blog_slider_box_padding_top", "", esc_html__("Padding Top (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_slider_box_padding_top", $blog_slider_box_padding_top);

        $blog_slider_box_padding_right = new BridgeQodeField("textsimple", "blog_slider_box_padding_right", "", esc_html__("Padding Right (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_slider_box_padding_right", $blog_slider_box_padding_right);

        $blog_slider_box_padding_bottom = new BridgeQodeField("textsimple", "blog_slider_box_padding_bottom", "", esc_html__("Padding Bottom (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_slider_box_padding_bottom", $blog_slider_box_padding_bottom);

        $blog_slider_box_padding_left = new BridgeQodeField("textsimple", "blog_slider_box_padding_left", "", esc_html__("Padding Left (px)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_slider_box_padding_left", $blog_slider_box_padding_left);

        $row3 = new BridgeQodeRow();
        $group7->addChild("row3", $row3);

        $blog_slider_box_width = new BridgeQodeField("textsimple", "blog_slider_box_width", "", esc_html__("Width (%)", "bridge"), esc_html__("This is some description", "bridge"));
        $row2->addChild("blog_slider_box_width", $blog_slider_box_width);

        $panel5 = new BridgeQodePanel(esc_html__("Pagination Style", "bridge"), "panel_pagination");
        $blogPage->addChild("panel5", $panel5);

        $group_pagination_styles = bridge_qode_add_admin_group(array(
            'name'          => 'group_pagination_styles',
            'title'         => esc_html__('Pagination Style', 'bridge'),
            'description'   => esc_html__('Define styles for pagination', 'bridge'),
            'parent'        => $panel5
        ));

        $row_pagination_colors = bridge_qode_add_admin_row(array(
            'name'      => 'row_pagination_colors',
            'parent'    => $group_pagination_styles
        ));

            bridge_qode_add_admin_field(
                array(
                    'name'          => 'pagination_border_color',
                    'type'          => 'colorsimple',
                    'label'         => esc_html__('Pagination Border Color', 'bridge'),
                    'description'   => '',
                    'parent'        => $row_pagination_colors
                )
            );
            bridge_qode_add_admin_field(
                array(
                    'name'          => 'pagination_number_color',
                    'type'          => 'colorsimple',
                    'label'         => esc_html__('Pagination Number Color', 'bridge'),
                    'description'   => '',
                    'parent'        => $row_pagination_colors
                )
            );
            bridge_qode_add_admin_field(
                array(
                    'name'          => 'pagination_hover_background_color',
                    'type'          => 'colorsimple',
                    'label'         => esc_html__('Pagination Hover/Active Background Color', 'bridge'),
                    'description'   => '',
                    'parent'        => $row_pagination_colors
                )
            );
            bridge_qode_add_admin_field(
                array(
                    'name'          => 'pagination_hover_number_color',
                    'type'          => 'colorsimple',
                    'label'         => esc_html__('Pagination Hover/Active Number Color', 'bridge'),
                    'description'   => '',
                    'parent'        => $row_pagination_colors
                )
            );


        $row_pagination_measures = bridge_qode_add_admin_row(array(
            'name'      => 'row_pagination_measures',
            'parent'    => $group_pagination_styles
        ));

            bridge_qode_add_admin_field(
                array(
                    'name'          => 'pagination_width',
                    'type'          => 'textsimple',
                    'label'         => esc_html__('Pagination Width (px)', 'bridge'),
                    'description'   => '',
                    'parent'        => $row_pagination_measures
                )
            );
            bridge_qode_add_admin_field(
                array(
                    'name'          => 'pagination_height',
                    'type'          => 'textsimple',
                    'label'         => esc_html__('Pagination Height (px)', 'bridge'),
                    'description'   => '',
                    'parent'        => $row_pagination_measures
                )
            );
            bridge_qode_add_admin_field(
                array(
                    'name'          => 'pagination_border_radius',
                    'type'          => 'textsimple',
                    'label'         => esc_html__('Pagination Border Radius (px)', 'bridge'),
                    'description'   => '',
                    'parent'        => $row_pagination_measures
                )
            );
            bridge_qode_add_admin_field(
                array(
                    'name'          => 'pagination_border_width',
                    'type'          => 'textsimple',
                    'label'         => esc_html__('Pagination Border Width (px)', 'bridge'),
                    'description'   => '',
                    'parent'        => $row_pagination_measures
                )
            );
            bridge_qode_add_admin_field(
                array(
                    'name'          => 'pagination_font_size',
                    'type'          => 'textsimple',
                    'label'         => esc_html__('Pagination Font Size (px)', 'bridge'),
                    'description'   => '',
                    'parent'        => $row_pagination_measures
                )
            );
            bridge_qode_add_admin_field(
                array(
                    'name'          => 'pagination_space',
                    'type'          => 'textsimple',
                    'label'         => esc_html__('Pagination Space Between Items (px)', 'bridge'),
                    'description'   => '',
                    'parent'        => $row_pagination_measures
                )
            );

    }
    add_action('bridge_qode_action_options_map','bridge_qode_blog_options_map',100);
}