<?php

if(!function_exists('bridge_qode_woocommerce_options_map')) {
	/**
	 * WooCommerce options page
	 */
	function bridge_qode_woocommerce_options_map() {

		$woocommerce_page = new BridgeQodeAdminPage("_woocommerce", esc_html__( "WooCommerce", "bridge" ), "fa fa-shopping-cart");

		bridge_qode_framework()->qodeOptions->addAdminPage("woocommerce", $woocommerce_page);

		$product_list_panel = new BridgeQodePanel( esc_html__( "Product List", "bridge" ), "product_list_panel");
		$woocommerce_page->addChild($product_list_panel->name, $product_list_panel);

		$woo_products_list_number = new BridgeQodeField("select", "woo_products_list_number", "columns-3", esc_html__( "Product List and Related Products Columns Number", "bridge" ), esc_html__( "Choose number of columns for product listing and related products on single product", "bridge" ), array(
			"columns-3" => esc_html__( "3 Columns (2 with sidebar)", "bridge" ),
			"columns-4" => esc_html__( "4 Columns (3 with sidebar)", "bridge")
		));

		$product_list_panel->addChild("woo_products_list_number", $woo_products_list_number);

		$product_info_box_color = new BridgeQodeField('color', 'woo_product_info_box_color', '', esc_html__( 'Product Info Box Background Color', 'bridge' ), esc_html__( 'Set background color of the box that holds product information', 'bridge' ));
		$product_list_panel->addChild('woo_product_info_box_color', $product_info_box_color);

		$product_show_categories = new BridgeQodeField('yesno','woo_products_show_categories','no',esc_html__( 'Show Categories Above Title ', 'bridge' ), esc_html__( 'Enabling this option will display categories above title', 'bridge' ));
		$product_list_panel->addChild('woo_products_show_categories', $product_show_categories);

		//Title Separator
		$product_title_show_sep = new BridgeQodeField(
			'yesno',
			'woo_products_show_title_sep',
			'no',
            esc_html__( 'Show Separator After Product Title ', 'bridge' ),
            esc_html__( 'Enabling this option will display small separator after product title', 'bridge' ),
			array(),
			array(
				"dependence" => true,
				"dependence_hide_on_yes" => "",
				"dependence_show_on_yes" => "#qodef_woo_products_title_sep_container"
			)
		);

		$product_list_panel->addChild('woo_products_show_title_sep', $product_title_show_sep);

		$product_title_sep_container = new BridgeQodeContainer('woo_products_title_sep_container', 'woo_products_show_title_sep', 'no');
		$product_list_panel->addChild('woo_products_title_sep_container', $product_title_sep_container);

		$group10 = new BridgeQodeGroup(esc_html__( "Separator Styles", "bridge" ), esc_html__( "Define style for product title separator ", "bridge" ));
		$product_title_sep_container->addChild("group10", $group10);

		$row1 = new BridgeQodeRow();
		$group10->addChild("row1", $row1);

		$woo_products_title_separator_color = new BridgeQodeField("colorsimple", "woo_products_title_separator_color", "", esc_html__( "Color", "bridge" ), esc_html__( "This is some description", "bridge" ));
		$row1->addChild("woo_products_title_separator_color", $woo_products_title_separator_color);

		$woo_products_title_separator_thickness = new BridgeQodeField("textsimple", "woo_products_title_separator_thickness", "", esc_html__( "Thickness (px)", "bridge" ));
		$row1->addChild("woo_products_title_separator_thickness", $woo_products_title_separator_thickness);

		$woo_products_title_separator_margin_top = new BridgeQodeField("textsimple", "woo_products_title_separator_margin_top", "", esc_html__( "Margin Top (px)", "bridge"), esc_html__( "This is some description", "bridge" ));
		$row1->addChild("woo_products_title_separator_margin_top", $woo_products_title_separator_margin_top);

		$woo_products_title_separator_margin_bottom = new BridgeQodeField("textsimple", "woo_products_title_separator_margin_bottom", "", esc_html__( "Margin Bottom (px)", "bridge" ), esc_html__( "This is some description", "bridge" ));
		$row1->addChild("woo_products_title_separator_margin_bottom", $woo_products_title_separator_margin_bottom);

		$woo_products_show_order_by = new BridgeQodeField('yesno','woo_products_show_order_by','yes',esc_html__( 'Show Orderby Dropdown', 'bridge'),'');
		$product_list_panel->addChild('woo_products_show_order_by', $woo_products_show_order_by);

		//Product Title
		$group3 = new BridgeQodeGroup(esc_html__( "Product Title", "bridge" ), esc_html__( "Define product title text style", "bridge" ) );
		$product_list_panel->addChild("group3", $group3);

		$row1 = new BridgeQodeRow();
		$group3->addChild("row1", $row1);

		$woo_products_title_color = new BridgeQodeField("colorsimple", "woo_products_title_color", "", esc_html__( "Text Color", "bridge" ));
		$row1->addChild("woo_products_title_color", $woo_products_title_color);

		$woo_products_title_font_size = new BridgeQodeField("textsimple", "woo_products_title_font_size", "", esc_html__( "Font Size (px)", "bridge" ));
		$row1->addChild("woo_products_title_font_size", $woo_products_title_font_size);

		$woo_products_title_line_height = new BridgeQodeField("textsimple", "woo_products_title_line_height", "", esc_html__( "Line Height (px)", "bridge" ));
		$row1->addChild("woo_products_title_line_height", $woo_products_title_line_height);

		$woo_products_title_text_transform = new BridgeQodeField("selectblanksimple", "woo_products_title_text_transform", "", esc_html__( "Text Transform", "bridge" ), "", bridge_qode_get_text_transform_array());
		$row1->addChild("woo_products_title_text_transform", $woo_products_title_text_transform);

		$row2 = new BridgeQodeRow(true);
		$group3->addChild("row2", $row2);

		$woo_products_title_font_family = new BridgeQodeField("fontsimple", "woo_products_title_font_family", "-1", esc_html__( "Font Family", "bridge" ), esc_html__( "This is some description", "bridge" ));
		$row2->addChild("woo_products_title_font_family", $woo_products_title_font_family);

		$woo_products_title_font_style = new BridgeQodeField("selectblanksimple", "woo_products_title_font_style", "", esc_html__( "Font Style", "bridge" ), esc_html__( "This is some description", "bridge" ), bridge_qode_get_font_style_array());
		$row2->addChild("woo_products_title_font_style", $woo_products_title_font_style);

		$woo_products_title_font_weight = new BridgeQodeField("selectblanksimple", "woo_products_title_font_weight", "", esc_html__( "Font Weight", "bridge"), esc_html__( "This is some description", "bridge"), bridge_qode_get_font_weight_array());
		$row2->addChild("woo_products_title_font_weight", $woo_products_title_font_weight);

		$woo_products_title_letter_spacing = new BridgeQodeField("textsimple", "woo_products_title_letter_spacing", "", esc_html__( "Letter Spacing (px)", "bridge"), esc_html__( "This is some description", "bridge" ));
		$row2->addChild("woo_products_title_letter_spacing", $woo_products_title_letter_spacing);

		$row3 = new BridgeQodeRow(true);
		$group3->addChild("row3", $row3);

		$woo_products_title_hover_color = new BridgeQodeField("colorsimple", "woo_products_title_hover_color", "", esc_html__( "Hover Text Color", "bridge"), esc_html__( "This is some description", "bridge"));
		$row3->addChild("woo_products_title_hover_color", $woo_products_title_hover_color);

		$woo_products_title_line_margin_bottom = new BridgeQodeField("textsimple", "woo_products_title_line_margin_bottom", "", esc_html__( "Margin Bottom (px)", "bridge" ), esc_html__( "This is some description", "bridge"));
		$row3->addChild("woo_products_title_line_margin_bottom", $woo_products_title_line_margin_bottom);

		$woo_products_title_text_align = new BridgeQodeField("selectblanksimple", "woo_products_title_text_align", "", esc_html__( "Text align", "bridge") , esc_html__( "This is some description", "bridge"), array(
			"center" => esc_html__( "Center", "bridge"),
			"left" => esc_html__( "Left", "bridge"),
			"right" => esc_html__( "Right", "bridge")
		));
		$row3->addChild("woo_products_title_text_align", $woo_products_title_text_align);


		//Product price
		$group4 = new BridgeQodeGroup(esc_html__( "Product Price", "bridge"), esc_html__( "Define product price text style", "bridge"));
		$product_list_panel->addChild("group4", $group4);

		$row1 = new BridgeQodeRow();
		$group4->addChild("row1", $row1);

		$woo_products_price_color = new BridgeQodeField("colorsimple", "woo_products_price_color", "", esc_html__( "Text Color", "bridge"), esc_html__( "This is some description", "bridge"));
		$row1->addChild("woo_products_price_color", $woo_products_price_color);

		$woo_products_price_font_size = new BridgeQodeField("textsimple", "woo_products_price_font_size", "", esc_html__( "Font Size (px)", "bridge"), esc_html__( "This is some description", "bridge"));
		$row1->addChild("woo_products_price_font_size", $woo_products_price_font_size);

		$woo_products_price_line_height = new BridgeQodeField("textsimple", "woo_products_price_line_height", "", esc_html__( "Line Height (px)", "bridge"), esc_html__( "This is some description", "bridge"));
		$row1->addChild("woo_products_price_line_height", $woo_products_price_line_height);

		$woo_products_price_text_transform = new BridgeQodeField("selectblanksimple", "woo_products_price_text_transform", "", esc_html__( "Text Transform", "bridge"), esc_html__( "This is some description", "bridge"), bridge_qode_get_text_transform_array());
		$row1->addChild("woo_products_price_text_transform", $woo_products_price_text_transform);

		$row2 = new BridgeQodeRow(true);
		$group4->addChild("row2", $row2);

		$woo_products_price_font_family = new BridgeQodeField("fontsimple", "woo_products_price_font_family", "-1", esc_html__( "Font Family", "bridge"), esc_html__( "This is some description", "bridge"));
		$row2->addChild("woo_products_price_font_family", $woo_products_price_font_family);

		$woo_products_price_font_style = new BridgeQodeField("selectblanksimple", "woo_products_price_font_style", "", esc_html__( "Font Style", "bridge"), esc_html__( "This is some description", "bridge"), bridge_qode_get_font_style_array());
		$row2->addChild("woo_products_price_font_style", $woo_products_price_font_style);

		$woo_products_price_font_weight = new BridgeQodeField("selectblanksimple", "woo_products_price_font_weight", "", esc_html__( "Font Weight", "bridge"), esc_html__( "This is some description", "bridge"), bridge_qode_get_font_weight_array());
		$row2->addChild("woo_products_price_font_weight", $woo_products_price_font_weight);

		$woo_products_price_letter_spacing = new BridgeQodeField("textsimple", "woo_products_price_letter_spacing", "", esc_html__( "Letter Spacing (px)", "bridge"), esc_html__( "This is some description", "bridge"));
		$row2->addChild("woo_products_price_letter_spacing", $woo_products_price_letter_spacing);

		$row3 = new BridgeQodeRow(true);
		$group4->addChild("row3", $row3);

		$woo_products_price_old_font_size = new BridgeQodeField("textsimple", "woo_products_price_old_font_size", "", esc_html__( "Old Price Font Size (px)", "bridge"), esc_html__( "This is some description", "bridge"));
		$row3->addChild("woo_products_price_old_font_size", $woo_products_price_old_font_size);

		$woo_products_price_old_color = new BridgeQodeField("colorsimple", "woo_products_price_old_color", "", esc_html__( "Old Price Color", "bridge"), esc_html__( "This is some description", "bridge"));
		$row3->addChild("woo_products_price_old_color", $woo_products_price_old_color);

		$woo_products_price_text_align = new BridgeQodeField("selectblanksimple", "woo_products_price_text_align", "", esc_html__( "Text align", "bridge"), esc_html__( "This is some description", "bridge"), array(
			"center" => esc_html__( "Center", "bridge"),
			"left" => esc_html__( "Left", "bridge"),
			"right" => esc_html__( "Right", "bridge")
		));
		$row3->addChild("woo_products_price_text_align", $woo_products_price_text_align);

		//Product sale
		$group5 = new BridgeQodeGroup(esc_html__( "Product Sale", "bridge"), esc_html__( "Define product sale text style", "bridge"));
		$product_list_panel->addChild("group5", $group5);

		$row1 = new BridgeQodeRow();
		$group5->addChild("row1", $row1);

		$woo_products_sale_color = new BridgeQodeField("colorsimple", "woo_products_sale_color", "", esc_html__( "Text Color", "bridge"), esc_html__( "This is some description", "bridge"));
		$row1->addChild("woo_products_sale_color", $woo_products_sale_color);

		$woo_products_sale_font_size = new BridgeQodeField("textsimple", "woo_products_sale_font_size", "", esc_html__( "Font Size (px)", "bridge"), esc_html__( "This is some description", "bridge"));
		$row1->addChild("woo_products_sale_font_size", $woo_products_sale_font_size);

		$woo_products_sale_text_transform = new BridgeQodeField("selectblanksimple", "woo_products_sale_text_transform", "", esc_html__( "Text Transform", "bridge"), esc_html__( "This is some description", "bridge"), bridge_qode_get_text_transform_array());
		$row1->addChild("woo_products_sale_text_transform", $woo_products_sale_text_transform);

		$woo_products_sale_letter_spacing = new BridgeQodeField("textsimple", "woo_products_sale_letter_spacing", "", esc_html__( "Letter Spacing (px)", "bridge"), esc_html__( "This is some description", "bridge"));
		$row1->addChild("woo_products_sale_letter_spacing", $woo_products_sale_letter_spacing);

		$row2 = new BridgeQodeRow(true);
		$group5->addChild("row2", $row2);

		$woo_products_sale_font_family = new BridgeQodeField("fontsimple", "woo_products_sale_font_family", "-1", esc_html__( "Font Family", "bridge"), esc_html__( "This is some description", "bridge"));
		$row2->addChild("woo_products_sale_font_family", $woo_products_sale_font_family);

		$woo_products_sale_font_style = new BridgeQodeField("selectblanksimple", "woo_products_sale_font_style", "", esc_html__( "Font Style", "bridge"), esc_html__( "This is some description", "bridge"), bridge_qode_get_font_style_array());
		$row2->addChild("woo_products_sale_font_style", $woo_products_sale_font_style);

		$woo_products_sale_font_weight = new BridgeQodeField("selectblanksimple", "woo_products_sale_font_weight", "", esc_html__( "Font Weight", "bridge"), esc_html__( "This is some description", "bridge"), bridge_qode_get_font_weight_array());
		$row2->addChild("woo_products_sale_font_weight", $woo_products_sale_font_weight);

		$woo_products_sale_border_radius = new BridgeQodeField("textsimple", "woo_products_sale_border_radius", "", esc_html__( "Border Radius (px)", "bridge"), esc_html__( "This is some description", "bridge"));
		$row2->addChild("woo_products_sale_border_radius", $woo_products_sale_border_radius);

		$row3 = new BridgeQodeRow(true);
		$group5->addChild("row3", $row3);

		$woo_products_sale_background_color = new BridgeQodeField("colorsimple", "woo_products_sale_background_color", "", esc_html__( "Background Color", "bridge"), esc_html__( "This is some description", "bridge"));
		$row3->addChild("woo_products_sale_background_color", $woo_products_sale_background_color);


		$woo_products_sale_width = new BridgeQodeField("textsimple", "woo_products_sale_width", "", esc_html__( "Width (px)", "bridge"), esc_html__( "This is some description", "bridge"));
		$row3->addChild("woo_products_sale_width", $woo_products_sale_width);

		$woo_products_sale_height = new BridgeQodeField("textsimple", "woo_products_sale_height", "", esc_html__( "Height (px)", "bridge"), esc_html__( "This is some description", "bridge"));
		$row3->addChild("woo_products_sale_height", $woo_products_sale_height);

		$woo_products_sale_show_sep = new BridgeQodeField("yesnosimple", "woo_products_sale_show_sep", "yes", esc_html__( "Show Separator", "bridge"));
		$row3->addChild("woo_products_sale_show_sep", $woo_products_sale_show_sep);

		//Product out of stock

		$group6 = new BridgeQodeGroup(esc_html__( 'Product "Out Of Stock"', 'bridge'), esc_html__( "Define 'Out Of Stock' text style", "bridge"));
		$product_list_panel->addChild("group6", $group6);

		$row1 = new BridgeQodeRow();
		$group6->addChild("row1", $row1);

		$woo_products_out_of_stock_color = new BridgeQodeField("colorsimple", "woo_products_out_of_stock_color", "", esc_html__( "Text Color", "bridge"), esc_html__( "This is some description", "bridge"));
		$row1->addChild("woo_products_out_of_stock_color", $woo_products_out_of_stock_color);

		$woo_products_out_of_stock_font_size = new BridgeQodeField("textsimple", "woo_products_out_of_stock_font_size", "", esc_html__( "Font Size (px)", "bridge"), esc_html__( "This is some description", "bridge"));
		$row1->addChild("woo_products_out_of_stock_font_size", $woo_products_out_of_stock_font_size);

		$woo_products_out_of_stock_text_transform = new BridgeQodeField("selectblanksimple", "woo_products_out_of_stock_text_transform", "", esc_html__( "Text Transform", "bridge"), esc_html__( "This is some description", "bridge"), bridge_qode_get_text_transform_array());
		$row1->addChild("woo_products_out_of_stock_text_transform", $woo_products_out_of_stock_text_transform);

		$woo_products_out_of_stock_letter_spacing = new BridgeQodeField("textsimple", "woo_products_out_of_stock_letter_spacing", "", esc_html__( "Letter Spacing (px)", "bridge"), esc_html__( "This is some description", "bridge"));
		$row1->addChild("woo_products_out_of_stock_letter_spacing", $woo_products_out_of_stock_letter_spacing);

		$row2 = new BridgeQodeRow(true);
		$group6->addChild("row2", $row2);

		$woo_products_out_of_stock_font_family = new BridgeQodeField("fontsimple", "woo_products_out_of_stock_font_family", "-1", esc_html__( "Font Family", "bridge"), esc_html__( "This is some description", "bridge"));
		$row2->addChild("woo_products_out_of_stock_font_family", $woo_products_out_of_stock_font_family);

		$woo_products_out_of_stock_font_style = new BridgeQodeField("selectblanksimple", "woo_products_out_of_stock_font_style", "", esc_html__( "Font Style", "bridge"), esc_html__( "This is some description", "bridge"), bridge_qode_get_font_style_array());
		$row2->addChild("woo_products_out_of_stock_font_style", $woo_products_out_of_stock_font_style);

		$woo_products_out_of_stock_font_weight = new BridgeQodeField("selectblanksimple", "woo_products_out_of_stock_font_weight", "", esc_html__( "Font Weight", "bridge"), esc_html__( "This is some description", "bridge"), bridge_qode_get_font_weight_array());
		$row2->addChild("woo_products_out_of_stock_font_weight", $woo_products_out_of_stock_font_weight);

		$woo_products_out_of_stock_border_radius = new BridgeQodeField("textsimple", "woo_products_out_of_stock_border_radius", "", esc_html__( "Border Radius (px)", "bridge"), esc_html__( "This is some description", "bridge"));
		$row2->addChild("woo_products_out_of_stock_border_radius", $woo_products_out_of_stock_border_radius);

		$row3 = new BridgeQodeRow(true);
		$group6->addChild("row3", $row3);

		$woo_products_out_of_stock_background_color = new BridgeQodeField("colorsimple", "woo_products_out_of_stock_background_color", "", esc_html__( "Background Color", "bridge"), esc_html__( "This is some description", "bridge"));
		$row3->addChild("woo_products_out_of_stock_background_color", $woo_products_out_of_stock_background_color);

		$woo_products_out_of_stock_width = new BridgeQodeField("textsimple", "woo_products_out_of_stock_width", "", esc_html__( "Width (px)", "bridge"), esc_html__( "This is some description", "bridge"));
		$row3->addChild("woo_products_out_of_stock_width", $woo_products_out_of_stock_width);

		$woo_products_out_of_stock_height = new BridgeQodeField("textsimple", "woo_products_out_of_stock_height", "", esc_html__( "Height (px)", "bridge"), esc_html__( "This is some description", "bridge"));
		$row3->addChild("woo_products_out_of_stock_height", $woo_products_out_of_stock_height);

		//Product add to cart
		$products_add_to_cart_subtitle = new BridgeQodeGroup(esc_html__( '"Add to cart" button', 'bridge'), esc_html__( 'Define styles for add to cart button', 'bridge'));
		$product_list_panel->addChild("products_add_to_cart_subtitle", $products_add_to_cart_subtitle);

		$row1 = new BridgeQodeRow();
		$products_add_to_cart_subtitle->addChild("row1", $row1);

		$woo_products_add_to_cart_color = new BridgeQodeField("colorsimple", "woo_products_add_to_cart_color", "", esc_html__( "Text Color", "bridge"), esc_html__( "This is some description", "bridge"));
		$row1->addChild("woo_products_add_to_cart_color", $woo_products_add_to_cart_color);

		$woo_products_add_to_cart_hover_color = new BridgeQodeField("colorsimple", "woo_products_add_to_cart_hover_color", "", esc_html__( "Hover Text Color", "bridge"), esc_html__( "This is some description", "bridge"));
		$row1->addChild("woo_products_add_to_cart_hover_color", $woo_products_add_to_cart_hover_color);

		$woo_products_add_to_cart_font_size = new BridgeQodeField("textsimple", "woo_products_add_to_cart_font_size", "", esc_html__( "Font Size (px)", "bridge"), esc_html__( "This is some description", "bridge"));
		$row1->addChild("woo_products_add_to_cart_font_size", $woo_products_add_to_cart_font_size);

		$woo_products_add_to_cart_line_height = new BridgeQodeField("textsimple", "woo_products_add_to_cart_line_height", "", esc_html__( "Line Height (px)", "bridge"), esc_html__( "This is some description", "bridge"));
		$row1->addChild("woo_products_add_to_cart_line_height", $woo_products_add_to_cart_line_height);

		$row2 = new BridgeQodeRow(true);
		$products_add_to_cart_subtitle->addChild("row2", $row2);

		$woo_products_add_to_cart_text_transform = new BridgeQodeField("selectblanksimple", "woo_products_add_to_cart_text_transform", "", esc_html__( "Text Transform", "bridge"), esc_html__( "This is some description", "bridge"), bridge_qode_get_text_transform_array());
		$row2->addChild("woo_products_add_to_cart_text_transform", $woo_products_add_to_cart_text_transform);

		$woo_products_add_to_cart_font_family = new BridgeQodeField("fontsimple", "woo_products_add_to_cart_font_family", "-1", esc_html__( "Font Family", "bridge"), esc_html__( "This is some description", "bridge"));
		$row2->addChild("woo_products_add_to_cart_font_family", $woo_products_add_to_cart_font_family);

		$woo_products_add_to_cart_font_style = new BridgeQodeField("selectblanksimple", "woo_products_add_to_cart_font_style", "", esc_html__( "Font Style", "bridge"), esc_html__( "This is some description", "bridge"), bridge_qode_get_font_style_array());
		$row2->addChild("woo_products_add_to_cart_font_style", $woo_products_add_to_cart_font_style);

		$woo_products_add_to_cart_font_weight = new BridgeQodeField("selectblanksimple", "woo_products_add_to_cart_font_weight", "", esc_html__( "Font Weight", "bridge"), esc_html__( "This is some description", "bridge"), bridge_qode_get_font_weight_array());
		$row2->addChild("woo_products_add_to_cart_font_weight", $woo_products_add_to_cart_font_weight);

		$row3 = new BridgeQodeRow(true);
		$products_add_to_cart_subtitle->addChild("row3", $row3);

		$woo_products_add_to_cart_letter_spacing = new BridgeQodeField("textsimple", "woo_products_add_to_cart_letter_spacing", "", esc_html__( "Letter Spacing (px)", "bridge"), esc_html__( "This is some description", "bridge"));
		$row3->addChild("woo_products_add_to_cart_letter_spacing", $woo_products_add_to_cart_letter_spacing);

		$woo_products_add_to_cart_background_color = new BridgeQodeField("colorsimple", "woo_products_add_to_cart_background_color", "", esc_html__( "Background Color", "bridge"), esc_html__( "This is some description", "bridge"));
		$row3->addChild("woo_products_add_to_cart_background_color", $woo_products_add_to_cart_background_color);

		$woo_products_add_to_cart_background_hover_color = new BridgeQodeField("colorsimple", "woo_products_add_to_cart_background_hover_color", "", esc_html__( "Hover Background Color", "bridge"), esc_html__( "This is some description", "bridge"));
		$row3->addChild("woo_products_add_to_cart_background_hover_color", $woo_products_add_to_cart_background_hover_color);

		$woo_products_add_to_cart_border_radius = new BridgeQodeField("textsimple", "woo_products_add_to_cart_border_radius", "", esc_html__( "Border radius (px)", "bridge"), esc_html__( "This is some description", "bridge"));
		$row3->addChild("woo_products_add_to_cart_border_radius", $woo_products_add_to_cart_border_radius);

		$row4 = new BridgeQodeRow();
		$products_add_to_cart_subtitle->addChild("row4", $row4);

		$woo_products_add_to_cart_border_color = new BridgeQodeField("colorsimple", "woo_products_add_to_cart_border_color", "", esc_html__( "Border Color", "bridge"), esc_html__( "This is some description", "bridge"));
		$row4->addChild("woo_products_add_to_cart_border_color", $woo_products_add_to_cart_border_color);

		$woo_products_add_to_cart_border_hover_color = new BridgeQodeField("colorsimple", "woo_products_add_to_cart_border_hover_color", "", esc_html__( "Border Hover Color", "bridge"), esc_html__( "This is some description", "bridge"));
		$row4->addChild("woo_products_add_to_cart_border_hover_color", $woo_products_add_to_cart_border_hover_color);

		$woo_products_add_to_cart_border_width = new BridgeQodeField("textsimple", "woo_products_add_to_cart_border_width", "", esc_html__( "Border Width (px)", "bridge"), esc_html__( "This is some description", "bridge"));
		$row4->addChild("woo_products_add_to_cart_border_width", $woo_products_add_to_cart_border_width);

		$woo_products_add_to_cart_hover_type = new BridgeQodeField("selectsimple","woo_products_add_to_cart_hover_type","",esc_html__( "Button Hover Type", "bridge"),esc_html__( "This is some description", "bridge"),array(
			"" => esc_html__( "Default", "bridge"),
			"enlarge" => esc_html__( "Enlarge", "bridge")
		));
		$row4->addChild("woo_products_add_to_cart_hover_type",$woo_products_add_to_cart_hover_type);

		//Product single
		$product_single_panel = new BridgeQodePanel(esc_html__( 'Product Single', 'bridge'), 'product_single_panel');

		$woocommerce_page->addChild('product_single_panel', $product_single_panel);
		$woo_product_single_type = new BridgeQodeField("select","woo_product_single_type","",esc_html__( "Product Type", "bridge"),esc_html__( "Choose product type", "bridge"),array(
			"" => esc_html__( "Default", "bridge"),
			"wide-gallery" => esc_html__( "Wide Gallery", "bridge"),
			"tabs-on-bottom" => esc_html__( "Tabs on Bottom", "bridge")
		), array(
	            'dependence' => true,
	            'hide'       => array(
	                ''    				=> '',
	                'wide-gallery'      => '#qodef_default_woo_features_container',
	                'tabs-on-bottom'    => '',
	            ),
	            'show'       => array(
	                ''    				=> '#qodef_default_woo_features_container',
	                'wide-gallery'      => '',
	                'tabs-on-bottom'    => '#qodef_default_woo_features_container',
	            ),
	        )
		);

		$product_single_panel->addChild("woo_product_single_type",$woo_product_single_type);

		$woo_product_single_related_post_tag = new BridgeQodeField("select","woo_product_single_related_post_tag","",esc_html__( "Related and Upsells Sections H Tag", "bridge"),esc_html__( "Choose h tag for related and upsells sections heading. Default is h4", "bridge"),array(
			""	 => esc_html__( "Default", "bridge"),
			"h2" => "h2",
			"h3" => "h3",
			"h4" => "h4",
			"h5" => "h5",
			"h6" => "h6"
		));
		$product_single_panel->addChild("woo_product_single_related_post_tag",$woo_product_single_related_post_tag);

		//Product single title
		$group3 = new BridgeQodeGroup(esc_html__( "Product Title", "bridge"), esc_html__( "Define product title text style", "bridge"));
		$product_single_panel->addChild("group3", $group3);

		$row1 = new BridgeQodeRow();
		$group3->addChild("row1", $row1);

		$woo_product_single_title_color = new BridgeQodeField("colorsimple", "woo_product_single_title_color", "", esc_html__( "Text Color", "bridge"));
		$row1->addChild("woo_product_single_title_color", $woo_product_single_title_color);

		$woo_product_single_title_font_size = new BridgeQodeField("textsimple", "woo_product_single_title_font_size", "", esc_html__( "Font Size (px)", "bridge"));
		$row1->addChild("woo_product_single_title_font_size", $woo_product_single_title_font_size);

		$woo_product_single_title_line_height = new BridgeQodeField("textsimple", "woo_product_single_title_line_height", "", esc_html__( "Line Height (px)", "bridge"));
		$row1->addChild("woo_product_single_title_line_height", $woo_product_single_title_line_height);

		$woo_product_single_title_text_transform = new BridgeQodeField("selectblanksimple", "woo_product_single_title_text_transform", "", esc_html__( "Text Transform", "bridge"), "", bridge_qode_get_text_transform_array());
		$row1->addChild("woo_product_single_title_text_transform", $woo_product_single_title_text_transform);

		$row2 = new BridgeQodeRow(true);
		$group3->addChild("row2", $row2);

		$woo_product_single_title_font_family = new BridgeQodeField("fontsimple", "woo_product_single_title_font_family", "-1", esc_html__( "Font Family", "bridge"), esc_html__( "This is some description", "bridge"));
		$row2->addChild("woo_product_single_title_font_family", $woo_product_single_title_font_family);

		$woo_product_single_title_font_style = new BridgeQodeField("selectblanksimple", "woo_product_single_title_font_style", "", esc_html__( "Font Style", "bridge"), esc_html__( "This is some description", "bridge"), bridge_qode_get_font_style_array());
		$row2->addChild("woo_product_single_title_font_style", $woo_product_single_title_font_style);

		$woo_product_single_title_font_weight = new BridgeQodeField("selectblanksimple", "woo_product_single_title_font_weight", "", esc_html__( "Font Weight", "bridge"), esc_html__( "This is some description", "bridge"), bridge_qode_get_font_weight_array());
		$row2->addChild("woo_product_single_title_font_weight", $woo_product_single_title_font_weight);

		$woo_product_single_title_letter_spacing = new BridgeQodeField("textsimple", "woo_product_single_title_letter_spacing", "", esc_html__( "Letter Spacing (px)", "bridge"), esc_html__( "This is some description", "bridge"));
		$row2->addChild("woo_product_single_title_letter_spacing", $woo_product_single_title_letter_spacing);

		$row3 = new BridgeQodeRow(true);
		$group3->addChild("row3", $row3);

		$woo_product_single_title_line_margin_bottom = new BridgeQodeField("textsimple", "woo_product_single_title_line_margin_bottom", "", esc_html__( "Margin Bottom (px)", "bridge"), esc_html__( "This is some description", "bridge"));
		$row3->addChild("woo_product_single_title_line_margin_bottom", $woo_product_single_title_line_margin_bottom);

		//Product single price
		$group4 = new BridgeQodeGroup(esc_html__( "Product Price", "bridge"), esc_html__( "Define product price text style", "bridge"));
		$product_single_panel->addChild("group4", $group4);

		$row1 = new BridgeQodeRow();
		$group4->addChild("row1", $row1);

		$woo_product_single_price_color = new BridgeQodeField("colorsimple", "woo_product_single_price_color", "", esc_html__( "Text Color", "bridge"), esc_html__( "This is some description", "bridge"));
		$row1->addChild("woo_product_single_price_color", $woo_product_single_price_color);

		$woo_product_single_price_font_size = new BridgeQodeField("textsimple", "woo_product_single_price_font_size", "", esc_html__( "Font Size (px)", "bridge"), esc_html__( "This is some description", "bridge"));
		$row1->addChild("woo_product_single_price_font_size", $woo_product_single_price_font_size);

		$woo_product_single_price_line_height = new BridgeQodeField("textsimple", "woo_product_single_price_line_height", "", esc_html__( "Line Height (px)", "bridge"), esc_html__( "This is some description", "bridge"));
		$row1->addChild("woo_product_single_price_line_height", $woo_product_single_price_line_height);

		$woo_product_single_price_text_transform = new BridgeQodeField("selectblanksimple", "woo_product_single_price_text_transform", "", esc_html__( "Text Transform", "bridge"), esc_html__( "This is some description", "bridge"), bridge_qode_get_text_transform_array());
		$row1->addChild("woo_product_single_price_text_transform", $woo_product_single_price_text_transform);

		$row2 = new BridgeQodeRow(true);
		$group4->addChild("row2", $row2);

		$woo_product_single_price_font_family = new BridgeQodeField("fontsimple", "woo_product_single_price_font_family", "-1", esc_html__( "Font Family", "bridge"), esc_html__( "This is some description", "bridge"));
		$row2->addChild("woo_product_single_price_font_family", $woo_product_single_price_font_family);

		$woo_product_single_price_font_style = new BridgeQodeField("selectblanksimple", "woo_product_single_price_font_style", "", esc_html__( "Font Style", "bridge"), esc_html__( "This is some description", "bridge"), bridge_qode_get_font_style_array());
		$row2->addChild("woo_product_single_price_font_style", $woo_product_single_price_font_style);

		$woo_product_single_price_font_weight = new BridgeQodeField("selectblanksimple", "woo_product_single_price_font_weight", "", esc_html__( "Font Weight", "bridge"), esc_html__( "This is some description", "bridge"), bridge_qode_get_font_weight_array());
		$row2->addChild("woo_product_single_price_font_weight", $woo_product_single_price_font_weight);

		$woo_product_single_price_letter_spacing = new BridgeQodeField("textsimple", "woo_product_single_price_letter_spacing", "", esc_html__( "Letter Spacing (px)", "bridge"), esc_html__( "This is some description", "bridge"));
		$row2->addChild("woo_product_single_price_letter_spacing", $woo_product_single_price_letter_spacing);

		$row3 = new BridgeQodeRow(true);
		$group4->addChild("row3", $row3);

		$woo_product_single_price_old_font_size = new BridgeQodeField("textsimple", "woo_product_single_price_old_font_size", "", esc_html__( "Old Price Font Size (px)", "bridge"), esc_html__( "This is some description", "bridge"));
		$row3->addChild("woo_product_single_price_old_font_size", $woo_product_single_price_old_font_size);

		$woo_product_single_price_old_color = new BridgeQodeField("colorsimple", "woo_product_single_price_old_color", "", esc_html__( "Old Price Color", "bridge"), esc_html__( "This is some description", "bridge"));
		$row3->addChild("woo_product_single_price_old_color", $woo_product_single_price_old_color);

		//Quantity buttons
		$quantity_buttons_group = new BridgeQodeGroup(esc_html__( 'Quantity Buttons', 'bridge'), esc_html__( 'Define styles for quantity buttons', 'bridge'));
		$product_single_panel->addChild('quantity_buttons_group', $quantity_buttons_group);

		$quantity_button_background_color = new BridgeQodeField('colorsimple', 'quantity_button_background_color', '', esc_html__( 'Background Color', 'bridge'));
		$quantity_buttons_group->addChild('quantity_button_background_color', $quantity_button_background_color);

		$quantity_button_hover_background_color = new BridgeQodeField('colorsimple', 'quantity_hover_button_background_color', '', esc_html__( 'Hover Background Color', 'bridge'));
		$quantity_buttons_group->addChild('quantity_hover_button_background_color', $quantity_button_hover_background_color);

		$quantity_button_icon_color = new BridgeQodeField('colorsimple', 'quantity_button_icon_color', '', esc_html__( 'Icon Color', 'bridge'));
		$quantity_buttons_group->addChild('quantity_button_icon_color', $quantity_button_icon_color);

		$quantity_button_icon_hover_color = new BridgeQodeField('colorsimple', 'quantity_button_icon_hover_color', '', esc_html__( 'Icon Hover Color', 'bridge'));
		$quantity_buttons_group->addChild('quantity_button_icon_hover_color', $quantity_button_icon_hover_color);

		//Default WooCommerce features

		$default_woo_features_container = bridge_qode_add_admin_container(
            array(
                'parent'          => $product_single_panel,
                'name'            => 'default_woo_features_container',
                'hidden_property' => 'woo_product_single_type',
                'hidden_value'    => 'wide-gallery'
            )
        );

		bridge_qode_add_admin_field(

			array(
                'name'              => 'default_woo_features',
                'type'              => 'yesno',
                'label'             => esc_html__('Enable Default WooCommerce Product Gallery Features', 'bridge'),
                'description'       => esc_html__('Enabling this option will add support for WooCommerce default zoom, swipe and lightbox features', 'bridge'),
                'default_value'     => 'no',
                'parent'            => $default_woo_features_container
            )

		);

		//Cart page
		$panel_cart_page = new BridgeQodePanel('Cart Page', 'panel_cart_page');
		$woocommerce_page->addChild('panel_cart_page', $panel_cart_page);

		$cart_title_size = new BridgeQodeField('text', 'woo_cart_title_size', '', esc_html__( 'Title Size (px)', 'bridge'), esc_html__( 'Define size for titles that are displayed on cart page', 'bridge'), '', array('col_width' => 3));
		$panel_cart_page->addChild('woo_cart_title_size', $cart_title_size);

		$cart_title_line_height = new BridgeQodeField('text', 'woo_cart_title_line_height', '', esc_html__( 'Line Height (px)', 'bridge'), esc_html__( 'Define line height for titles that are displayed on cart page', 'bridge'), '', array('col_width' => 3));
		$panel_cart_page->addChild('woo_cart_title_line_height', $cart_title_line_height);

		$cart_title_letter_spacing = new BridgeQodeField('text', 'woo_cart_title_letter_spacing', '', esc_html__( 'Letter Spacing (px)', 'bridge'), esc_html__( 'Define letter spacing for titles that are displayed on cart page', 'bridge'), '', array('col_width' => 3));
		$panel_cart_page->addChild('woo_cart_title_letter_spacing', $cart_title_letter_spacing);

		//Product List - Elegant Shortcode
		$panel_product_list_shortcode_page = new BridgeQodePanel(esc_html__( 'Product List - Elegant Shortcode', 'bridge'), 'panel_product_list_shortcode_page');
		$woocommerce_page->addChild('panel_product_list_shortcode_page', $panel_product_list_shortcode_page);

		$product_list_first_background_color = new BridgeQodeField('color', 'product_list_first_background_color', '', esc_html__( 'First Background Color', 'bridge'));
		$panel_product_list_shortcode_page->addChild('product_list_first_background_color', $product_list_first_background_color);

		$product_list_second_background_color = new BridgeQodeField('color', 'product_list_second_background_color', '', esc_html__( 'Second Background Color', 'bridge'));
		$panel_product_list_shortcode_page->addChild('product_list_second_background_color', $product_list_second_background_color);

		//Product category
		$group_ples = new BridgeQodeGroup(esc_html__( "Product Category", "bridge"), esc_html__( "Define product category text style", "bridge"));
		$panel_product_list_shortcode_page->addChild("group_ples", $group_ples);

		$row1 = new BridgeQodeRow();
		$group_ples->addChild("row1", $row1);

		$woo_product_list_elegant_category_color = new BridgeQodeField("colorsimple", "woo_product_list_elegant_category_color", "", esc_html__( "Text Color", "bridge"), esc_html__( "This is some description", "bridge"));
		$row1->addChild("woo_product_list_elegant_category_color", $woo_product_list_elegant_category_color);

		$woo_product_list_elegant_category_font_size = new BridgeQodeField("textsimple", "woo_product_list_elegant_category_font_size", "", esc_html__( "Font Size (px)", "bridge"), esc_html__( "This is some description", "bridge"));
		$row1->addChild("woo_product_list_elegant_category_font_size", $woo_product_list_elegant_category_font_size);

		$woo_product_list_elegant_category_line_height = new BridgeQodeField("textsimple", "woo_product_list_elegant_category_line_height", "", esc_html__( "Line Height (px)", "bridge"), esc_html__( "This is some description", "bridge"));
		$row1->addChild("woo_product_list_elegant_category_line_height", $woo_product_list_elegant_category_line_height);

		$woo_product_list_elegant_category_text_transform = new BridgeQodeField("selectblanksimple", "woo_product_list_elegant_category_text_transform", "", esc_html__( "Text Transform", "bridge"), "This is some description", bridge_qode_get_text_transform_array());
		$row1->addChild("woo_product_list_elegant_category_text_transform", $woo_product_list_elegant_category_text_transform);

		$row2 = new BridgeQodeRow(true);
		$group_ples->addChild("row2", $row2);

		$woo_product_list_elegant_category_font_family = new BridgeQodeField("fontsimple", "woo_product_list_elegant_category_font_family", "-1", esc_html__( "Font Family", "bridge"), esc_html__( "This is some description", "bridge"));
		$row2->addChild("woo_product_list_elegant_category_font_family", $woo_product_list_elegant_category_font_family);

		$woo_product_list_elegant_category_font_style = new BridgeQodeField("selectblanksimple", "woo_product_list_elegant_category_font_style", "", esc_html__( "Font Style", "bridge"), esc_html__( "This is some description", "bridge"), bridge_qode_get_font_style_array());
		$row2->addChild("woo_product_list_elegant_category_font_style", $woo_product_list_elegant_category_font_style);

		$woo_product_list_elegant_category_font_weight = new BridgeQodeField("selectblanksimple", "woo_product_list_elegant_category_font_weight", "", esc_html__( "Font Weight", "bridge"), esc_html__( "This is some description", "bridge"), bridge_qode_get_font_weight_array());
		$row2->addChild("woo_product_list_elegant_category_font_weight", $woo_product_list_elegant_category_font_weight);

		$woo_product_list_elegant_category_letter_spacing = new BridgeQodeField("textsimple", "woo_product_list_elegant_category_letter_spacing", "", esc_html__( "Letter Spacing (px)", "bridge"), esc_html__( "This is some description", "bridge"));
		$row2->addChild("woo_product_list_elegant_category_letter_spacing", $woo_product_list_elegant_category_letter_spacing);

		$row3 = new BridgeQodeRow(true);
		$group_ples->addChild("row3", $row3);

		$woo_product_list_elegant_category_hover_color = new BridgeQodeField("colorsimple", "woo_product_list_elegant_category_hover_color", "", esc_html__( "Hover Color", "bridge"), esc_html__( "This is some description", "bridge"));
		$row3->addChild("woo_product_list_elegant_category_hover_color", $woo_product_list_elegant_category_hover_color);

		//Dropdown Cart
		$panel_dropdown_cart = new BridgeQodePanel(esc_html__( 'Dropdown Cart', 'bridge'), 'panel_dropdown_cart');
		$woocommerce_page->addChild('panel_dropdown_cart', $panel_dropdown_cart);

		$woo_cart_type = new BridgeQodeField('select', 'woo_cart_type', '', esc_html__( 'Cart Icon Type', 'bridge'), esc_html__( 'Choose icon type for dropdown cart icon', 'bridge'), array(
			'' => esc_html__( 'Default', 'bridge'),
			'font-elegant' => esc_html__( 'Font Elegant Icon', 'bridge'),
			'dripicons'	=> esc_html__( 'Dripicons Icon', 'bridge'),
			'font-awesome'	=> esc_html__( 'Font Awesome', 'bridge')
		));
		$panel_dropdown_cart->addChild('woo_cart_type', $woo_cart_type);

	}
	add_action('bridge_qode_action_options_map','bridge_qode_woocommerce_options_map',200);
}