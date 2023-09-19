<?php

if(!function_exists('bridge_qode_map_portfolio_general_meta_fields')) {

	//General

	function bridge_qode_map_portfolio_general_meta_fields() {

		$qode_pages = array();
		$pages = get_pages();
		foreach($pages as $page) {
			$qode_pages[$page->ID] = $page->post_title;
		}

		$qodeGeneral = bridge_qode_create_meta_box(
			array(
				'scope' => array('portfolio_page'),
				'title' => esc_html__('Qode Portfolio General', 'bridge'),
				'name' => 'portfolio_general'
			)
		);

		$qode_portfolio_date = new BridgeQodeMetaField("date","qode_portfolio_date","",esc_html__('Date', 'bridge'),esc_html__('Set date for portfolio item', 'bridge'));
		$qodeGeneral->addChild("qode_portfolio_date",$qode_portfolio_date);

		$qode_choose_portfolio_single_view = new BridgeQodeMetaField("selectblank","qode_choose-portfolio-single-view","",esc_html__('Portfolio Type', 'bridge'), esc_html__('Choose a portfolio type', 'bridge'), array(
			"1" => esc_html__('Portfolio small images', 'bridge'),
			"2" => esc_html__('Portfolio small slider', 'bridge'),
			"5" => esc_html__('Portfolio big images', 'bridge'),
			"3" => esc_html__('Portfolio big slider', 'bridge'),
			"4" => esc_html__('Portfolio custom - in grid', 'bridge'),
			"7" => esc_html__('Portfolio custom - full width', 'bridge'),
			"6" => esc_html__('Portfolio gallery', 'bridge'),
			"8" => esc_html__('Portfolio big slider - modern', 'bridge')
		),
			array("dependence" => true,
				"hide" => array(
					""=>"#qodef_qode_choose_number_of_portfolio_columns_container",
					"1"=>"#qodef_qode_choose_number_of_portfolio_columns_container",
					"2"=>"#qodef_qode_choose_number_of_portfolio_columns_container",
					"3"=>"#qodef_qode_choose_number_of_portfolio_columns_container",
					"4"=>"#qodef_qode_choose_number_of_portfolio_columns_container",
					"5"=>"#qodef_qode_choose_number_of_portfolio_columns_container",
					"7"=>"#qodef_qode_choose_number_of_portfolio_columns_container",
					"8"=>"#qodef_qode_choose_number_of_portfolio_columns_container"
				),
				"show" => array(
					"6"=>"#qodef_qode_choose_number_of_portfolio_columns_container")
			)
		);
		$qodeGeneral->addChild("qode_choose-portfolio-single-view",$qode_choose_portfolio_single_view);

		$qode_choose_number_of_portfolio_columns_container = new BridgeQodeContainer("qode_choose_number_of_portfolio_columns_container","qode_choose-portfolio-single-view","no",array("", "1", "2", "3", "4", "5", "7"));
		$qodeGeneral->addChild("qode_choose_number_of_portfolio_columns_container",$qode_choose_number_of_portfolio_columns_container);

		$qode_choose_number_of_portfolio_columns = new BridgeQodeMetaField("selectblank","qode_choose-number-of-portfolio-columns","",esc_html__('Number of Columns', 'bridge'), esc_html__('Enter the number of columns for Portfolio Gallery type', 'bridge'), array(
			"2" => esc_html__('2 Columns', 'bridge'),
			"3" => esc_html__('3 Columns', 'bridge'),
			"4" => esc_html__('4 Columns', 'bridge')
		));

		$qode_choose_number_of_portfolio_columns_container->addChild("qode_choose-number-of-portfolio-columns",$qode_choose_number_of_portfolio_columns);

		$qode_portfolio_image_galery_orientation = new BridgeQodeMetaField("select","qode_portfolio_gallery_image_orientation","full",esc_html__('Image Proportions', 'bridge'),esc_html__('Choose image proportions for Portfolio Gallery type', 'bridge'),array(
			"full"					=> esc_html__('Original', 'bridge'),
			"portfolio-square"		=> esc_html__('Square', 'bridge'),
			"portfolio-portrait"	=> esc_html__('Portrait', 'bridge'),
			"portfolio-landscape"	=> esc_html__('Landscape', 'bridge')
		));

		$qode_choose_number_of_portfolio_columns_container->addChild("qode_portfolio-external-link",$qode_portfolio_image_galery_orientation);


		$qode_choose_portfolio_list_page = new BridgeQodeMetaField("selectblank","qode_choose-portfolio-list-page","",esc_html__('"Back To" Link', 'bridge'),esc_html__('Choose "Back To" page to link from portfolio Single Project page', 'bridge'), $qode_pages);
		$qodeGeneral->addChild("qode_choose-portfolio-list-page",$qode_choose_portfolio_list_page);

		$qode_portfolio_external_link = new BridgeQodeMetaField("text","qode_portfolio-external-link","",esc_html__('Portfolio External Link', 'bridge'),esc_html__('Enter URL to link from Portfolio List page (e.g. http://demo.qodeinteractive.com/bridge)', 'bridge'));
		$qodeGeneral->addChild("qode_portfolio-external-link",$qode_portfolio_external_link);

		$qode_portfolio_external_link_target = new BridgeQodeMetaField("select","qode_portfolio-external-link-target","_blank",esc_html__('Portfolio External Link Target', 'bridge'),esc_html__('Choose target for portfolio link from Portfolio List page' ,'bridge'), array(
			"_blank"	=> esc_html__('Blank', 'bridge'),
			"_self"		=> esc_html__('Self', 'bridge')
		));
		$qodeGeneral->addChild("qode_portfolio-external-link-target",$qode_portfolio_external_link_target);

		$qode_portfolio_lightbox_link = new BridgeQodeMetaField("text","qode_portfolio-lightbox-link","",esc_html__('Portfolio Custom Lightbox Content', 'bridge'),esc_html__('Enter URL to link custom image/video content inside lightbox', 'bridge'));
		$qodeGeneral->addChild("qode_portfolio-lightbox-link",$qode_portfolio_lightbox_link);

		$qode_portfolio_type_masonry_style = new BridgeQodeMetaField("select","qode_portfolio_type_masonry_style","",esc_html__('Dimensions for Masonry' ,'bridge'),esc_html__('Choose image layout when it appears in Masonry type portfolio lists', 'bridge'), array(
			"default"				=> esc_html__('Default', 'bridge'),
			"large_width"			=> esc_html__('Large width', 'bridge'),
			"large_height"			=> esc_html__('Large height', 'bridge'),
			"large_width_height"	=> esc_html__('Large width/height', 'bridge')
		));
		$qodeGeneral->addChild("qode_portfolio_type_masonry_style",$qode_portfolio_type_masonry_style);

		$qode_show_badge = new BridgeQodeMetaField("yesempty","qode_show_badge","",esc_html__('Show Badge','bridge'),esc_html__('Enable this option will show badge in portfolio list', 'bridge'), array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_qode_badge_container"));
		$qodeGeneral->addChild("qode_show_badge",$qode_show_badge);

		$qode_badge_container = new BridgeQodeContainer("qode_badge_container","qode_show_badge","");
		$qodeGeneral->addChild("qode_badge_container",$qode_badge_container);

		$qode_badge_text = new BridgeQodeMetaField("text","qode_badge_text","", esc_html__('Badge Text', 'bridge'),"", array(), array());
		$qode_badge_container->addChild("qode_badge_text",$qode_badge_text);

        $qode_portfolio_stacked_image = new BridgeQodeMetaField("image","qode_portfolio_list_stacked_image_meta","",esc_html__('Image for Portfolio Stacked List', 'bridge'),esc_html__('Set desired image to be shown for this portfolio item when used in Portfolio Stacked shortcode', 'bridge'));
        $qodeGeneral->addChild("qode_portfolio_list_stacked_image_meta",$qode_portfolio_stacked_image);

        $qode_portfolio_stacked_x_offset = new BridgeQodeMetaField("text","qode_portfolio_list_stacked_x_meta","",esc_html__('X Offset for Portfolio Stacked List', 'bridge'),esc_html__('Set desired offset on X axis for this portfolio item when used in Portfolio Stacked shortcode', 'bridge'), array(), array("col_width" => 3));
        $qodeGeneral->addChild("qode_portfolio_list_stacked_x_meta",$qode_portfolio_stacked_x_offset);

        $qode_portfolio_stacked_y_offset = new BridgeQodeMetaField("text","qode_portfolio_list_stacked_y_meta","",esc_html__('Y Offset for Portfolio Stacked List', 'bridge'),esc_html__('Set desired offset on Y axis for this portfolio item when used in Portfolio Stacked shortcode', 'bridge'), array(), array("col_width" => 3));
        $qodeGeneral->addChild("qode_portfolio_list_stacked_y_meta",$qode_portfolio_stacked_y_offset);

        $qode_portfolio_carousel_x_offset = new BridgeQodeMetaField("text","qode_portfolio_carousel_x_meta","",esc_html__('X Offset for Portfolio Carousel', 'bridge'),esc_html__('Set desired offset on X axis for this portfolio item when used in Portfolio Carousel shortcode', 'bridge'), array(), array("col_width" => 3));
        $qodeGeneral->addChild("qode_portfolio_carousel_x_meta",$qode_portfolio_carousel_x_offset);

        $qode_portfolio_carousel_stack_order = new BridgeQodeMetaField("text","qode_portfolio_carousel_stack_order","",esc_html__('Stack order of images in Portfolio Carousel', 'bridge'),esc_html__('Set desired stack order (z-index) for this portfolio item when used in Portfolio Carousel shortcode', 'bridge'), array(), array("col_width" => 3));
        $qodeGeneral->addChild("qode_portfolio_carousel_stack_order",$qode_portfolio_carousel_stack_order);

        $qode_vertical_portfolio_slider_image = new BridgeQodeMetaField("image","qode_vertical_portfolio_slider_image_meta","",esc_html__('Background Image for Vertical Portfolio Slider', 'bridge'),esc_html__('Set desired image to be shown for this portfolio item when used in Vertical Portfolio Slider shortcode', 'bridge'));
        $qodeGeneral->addChild("qode_vertical_portfolio_slider_image_meta",$qode_vertical_portfolio_slider_image);

        $qode_vertical_portfolio_slider_title_one = new BridgeQodeMetaField("text","qode_vertical_portfolio_slider_title_one","",esc_html__('Title 1', 'bridge'),esc_html__('Enter title 1', 'bridge'), array(), array("col_width" => 6));
        $qodeGeneral->addChild("qode_vertical_portfolio_slider_title_one",$qode_vertical_portfolio_slider_title_one);

        $qode_vertical_portfolio_slider_title_two = new BridgeQodeMetaField("text","qode_vertical_portfolio_slider_title_two","",esc_html__('Title 2', 'bridge'),esc_html__('Enter title 2', 'bridge'), array(), array("col_width" => 6));
        $qodeGeneral->addChild("qode_vertical_portfolio_slider_title_two",$qode_vertical_portfolio_slider_title_two);
    }

	add_action('bridge_qode_action_meta_boxes_map', 'bridge_qode_map_portfolio_general_meta_fields');
}

if(!function_exists('bridge_qode_map_portfolio_images_videos_meta_fields')) {

	//Portfolio Images

	function bridge_qode_map_portfolio_images_videos_meta_fields() {

		$qodePortfolioImages = bridge_qode_create_meta_box(
			array(
				'scope' => array('portfolio_page'),
				'title' => esc_html__('Qode Portfolio Images (multiple upload)', 'bridge'),
				'name' => 'portfolio_images'
			)
		);

		$qode_portfolio_image_gallery = new BridgeQodeMultipleImages("qode_portfolio-image-gallery",esc_html__('Portfolio Images', 'bridge'),esc_html__('Choose your portfolio images', 'bridge'));
		$qodePortfolioImages->addChild("qode_portfolio-image-gallery",$qode_portfolio_image_gallery);

		
		//Portfolio Images/Videos 2

		$qodePortfolioImagesVideos2 = bridge_qode_create_meta_box(
			array(
				'scope' => array('portfolio_page'),
				'title' => esc_html__('Qode Portfolio Images/Videos (single upload)', 'bridge'),
				'name' => 'portfolio_images_videos2'
			)
		);

		$qode_portfolio_images_videos2 = new BridgeQodeImagesVideosFramework(esc_html__('Portfolio Images/Videos 2', 'bridge'), esc_html__('ThisIsDescription', 'bridge'));
		$qodePortfolioImagesVideos2->addChild("qode_portfolio_images_videos2",$qode_portfolio_images_videos2);

		//Portfolio Additional Sidebar Items

		$qodeAdditionalSidebarItems = bridge_qode_create_meta_box(
			array(
				'scope' => array('portfolio_page'),
				'title' => esc_html__('Qode Additional Portfolio Sidebar Items', 'bridge'),
				'name' => 'portfolio_properties'
			)
		);

		$qode_portfolio_properties = new BridgeQodeOptionsFramework(esc_html__('Portfolio Properties', 'bridge') ,esc_html__('ThisIsDescription', 'bridge'));
		$qodeAdditionalSidebarItems->addChild("qode_portfolio_properties",$qode_portfolio_properties);

	}

	add_action('bridge_qode_action_meta_boxes_map', 'bridge_qode_map_portfolio_images_videos_meta_fields');
}