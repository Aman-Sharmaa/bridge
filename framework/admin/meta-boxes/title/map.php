<?php
if(!function_exists('bridge_qode_map_title_meta_fields')) {

	function bridge_qode_map_title_meta_fields() {

		$qodeTitleScopeArray = apply_filters('bridge_qode_filter_title_scope_post_types', array('page', 'post', 'portfolio_page'));
		$qodeTitle = bridge_qode_create_meta_box(
			array(
				'scope' => $qodeTitleScopeArray,
				'title' => esc_html__('Qode Title', 'bridge'),
				'name' => 'page_title'
			)
		);

		// Title

		$qode_show_page_title = new BridgeQodeMetaField("select","qode_show-page-title","",esc_html__('Hide Title Area', 'bridge'),esc_html__('Enable this option to turn off page title area', 'bridge'), array(
			''		=> esc_html__( 'Default', 'bridge'),
			'no'	=> esc_html__( 'No', 'bridge' ),
			'yes'	=> esc_html__( 'Yes', 'bridge' )
		),
			array("dependence" => true,
				"hide" => array(
					"yes"=>"#qodef_qode_page_title_area_container, #qodef-meta-box-page_title_animations"),
				"show" => array(
					""=>"#qodef_qode_page_title_area_container, #qodef-meta-box-page_title_animations",
					"no"=>"#qodef_qode_page_title_area_container, #qodef-meta-box-page_title_animations") ));
		$qodeTitle->addChild("qode_show-page-title",$qode_show_page_title);

		$qode_page_title_area_container = new BridgeQodeContainer("qode_page_title_area_container","qode_show-page-title","yes");
		$qodeTitle->addChild("qode_page_title_area_container",$qode_page_title_area_container);

		$qode_animate_page_title = new BridgeQodeMetaField("selectblank","qode_animate-page-title","",esc_html__('Animations', 'bridge'), esc_html__('Choose an animation for Title Area', 'bridge'),array(
			"no"				=> esc_html__('No animation','bridge'),
			"text_right_left"	=> esc_html__('Text right to left','bridge'),
			"area_top_bottom"	=> esc_html__('Title area top to bottom', 'bridge')
		));
		$qode_page_title_area_container->addChild("qode_animate_page_title",$qode_animate_page_title);

		$qode_show_page_title_text = new BridgeQodeMetaField("select","qode_show-page-title-text","",esc_html__('Don\'t Show Title Text','bridge'), esc_html__('Enable this option to hide the title text', 'bridge'),
			array(
				''		=> esc_html__( 'Default', 'bridge'),
				'no'	=> esc_html__( 'No', 'bridge' ),
				'yes'	=> esc_html__( 'Yes', 'bridge' ),
			),
			array("dependence" => true,
				"hide" => array(
					"yes"=>"#qodef_qode_title_text_container"),
				"show" => array(
					""=>"#qodef_qode_title_text_container",
					"no"=>"#qodef_qode_title_text_container") ));
		$qode_page_title_area_container->addChild("qode_show-page-title-text",$qode_show_page_title_text);

		$qode_title_text_container = new BridgeQodeContainer("qode_title_text_container","qode_show-page-title-text","yes");
		$qode_page_title_area_container->addChild("qode_title_text_container",$qode_title_text_container);

		$qode_page_title_position = new BridgeQodeMetaField("selectblank","qode_page_title_position","",esc_html__('Title Text Alignment', 'bridge'),esc_html__('Specify Title text alignment', 'bridge'), array(
			"left"		=> esc_html__('Left','bridge'),
			"center"	=> esc_html__('Center', 'bridge'),
			"right"		=> esc_html__('Right', 'bridge')
		));
		$qode_title_text_container->addChild("qode_page_title_position",$qode_page_title_position);

		$group1 = new BridgeQodeGroup(esc_html__('Title Text Style', 'bridge'),esc_html__('Define styles for text in Title Area', 'bridge'));
		$qode_title_text_container->addChild("group1",$group1);

		$row1 = new BridgeQodeRow();
		$group1->addChild("row1",$row1);

		$qode_page_title_color = new BridgeQodeMetaField("colorsimple","qode_page-title-color","",esc_html__('Text Color','bridge'), esc_html__('ThisIsDescription', 'bridge'));
		$row1->addChild("qode_page-title-color",$qode_page_title_color);

		$qode_page_title_font_size = new BridgeQodeMetaField("selectblanksimple","qode_page_title_font_size","",esc_html__('Text Size', 'bridge'),esc_html__('ThisIsDescription', 'bridge'),array(
			"small"		=> esc_html__('Small','bridge'),
			"medium"	=> esc_html__('Medium','bridge'),
			"large"		=> esc_html__('Large','bridge')
		));
		$row1->addChild("qode_page_title_font_size",$qode_page_title_font_size);

		$qode_title_text_shadow = new BridgeQodeMetaField("selectblanksimple","qode_title_text_shadow","",esc_html__('Text Shadow','bridge'),esc_html__('ThisIsDescription', 'bridge'),array(
			'no'	=> esc_html__( 'No', 'bridge' ),
			'yes'	=> esc_html__( 'Yes', 'bridge' )
		));
		$row1->addChild("qode_title_text_shadow",$qode_title_text_shadow);

		$qode_page_title_background_color = new BridgeQodeMetaField("color","qode_page-title-background-color","",esc_html__('Background Color', 'bridge'),esc_html__('Choose background color for Title Area', 'bridge'));
		$qode_page_title_area_container->addChild("qode_page-title-background-color",$qode_page_title_background_color);

		$qode_show_page_title_image = new BridgeQodeMetaField("yesempty","qode_show-page-title-image","",esc_html__('Don\'t Show Background Image','bridge'),esc_html__('Enable this option to hide background image in Title Area', 'bridge'), array(), array("dependence" => true, "dependence_hide_on_yes" => "#qodef_qode_background_image_container", "dependence_show_on_yes" => "#qodef_qode_title-height"));
		$qode_page_title_area_container->addChild("qode_show-page-title-image",$qode_show_page_title_image);

		$qode_background_image_container = new BridgeQodeContainer("qode_background_image_container","qode_show-page-title-image","yes");
		$qode_page_title_area_container->addChild("qode_background_image_container",$qode_background_image_container);

		$qode_title_image = new BridgeQodeMetaField("image","qode_title-image","",esc_html__('Background Image', 'bridge'),esc_html__('Choose a background image for Title Area', 'bridge'));
		$qode_background_image_container->addChild("qode_title-image",$qode_title_image);

		$qode_title_overlay_image = new BridgeQodeMetaField("image","qode_title-overlay-image","",esc_html__('Pattern Overlay Image', 'bridge'), esc_html__('Choose an image to be used as pattern over Title Area', 'bridge'));
		$qode_background_image_container->addChild("qode_title-overlay-image",$qode_title_overlay_image);

		$qode_responsive_title_image = new BridgeQodeMetaField("selectblank","qode_responsive-title-image","",esc_html__('Responsive Background Image', 'bridge'),esc_html__('Do you want to make Title background image responsive?', 'bridge'), array(
			'no'	=> esc_html__( 'No', 'bridge' ),
			'yes'	=> esc_html__( 'Yes', 'bridge' )),
			array("dependence" => true,
				"hide" => array(
					"yes"=>"#qodef_qode_responsive_title_image_container, #qodef_qode_title-height"),
				"show" => array(
					""=>"#qodef_qode_responsive_title_image_container, #qodef_qode_title-height",
					"no"=>"#qodef_qode_responsive_title_image_container, #qodef_qode_title-height") ));
		$qode_background_image_container->addChild("qode_responsive-title-image",$qode_responsive_title_image);


		$qode_responsive_title_image_container = new BridgeQodeContainer("qode_responsive_title_image_container","qode_responsive-title-image","yes");
		$qode_background_image_container->addChild("qode_responsive_title_image_container",$qode_responsive_title_image_container);

		$qode_fixed_title_image = new BridgeQodeMetaField("selectblank","qode_fixed-title-image","",esc_html__('Parallax Background Image', 'bridge'),esc_html__('Do you want background image to have parallax effect?', 'bridge'), array(
			'no'		=> esc_html__( 'No', 'bridge' ),
			'yes'		=> esc_html__( 'Yes', 'bridge' ),
			"yes_zoom"	=> esc_html__( 'Yes, with zoom out', 'bridge' )
		));
		$qode_responsive_title_image_container->addChild("qode_fixed-title-image",$qode_fixed_title_image);

		$qode_title_height = new BridgeQodeMetaField("text","qode_title-height","",esc_html__('Title Height (px)', 'bridge'),esc_html__('Set a height for Title Area in pixels', 'bridge'), array(), array("col_width" => 3));
		$qode_page_title_area_container->addChild("qode_title-height",$qode_title_height);

		$qode_separator_bellow_title = new BridgeQodeMetaField("select","qode_separator_bellow_title","",esc_html__('Separator Under Title Text', 'bridge'), esc_html__('Do you want to have a separator under title text?', 'bridge'),
			array(
				'' 		=> '',
				'no'	=> esc_html__( 'No', 'bridge' ),
				'yes'	=> esc_html__( 'Yes', 'bridge' )
			),
			array(
				'dependence' => true,
				'hide' => array(
					'no' => '#qodef_animation_page_page_separator_container'
				),
				'show' => array(
					'' => '#qodef_animation_page_page_separator_container',
					'yes' => '#qodef_animation_page_page_separator_container'
				)
			)
		);
		$qode_page_title_area_container->addChild("qode_separator_bellow_title",$qode_separator_bellow_title);

		$qode_title_separator_color = new BridgeQodeMetaField("color","qode_title_separator_color","",esc_html__('Separator Color','bridge'), esc_html__('Choose a color for separator','bridge'));
		$qode_page_title_area_container->addChild("qode_title_separator_color",$qode_title_separator_color);

		$qode_title_gradient_separator = new BridgeQodeMetaField("select", "qode_title_gradient_separator_meta", "", esc_html__('Enable Separator Gradient Color','bridge'), "", array(
			''		=> esc_html__( 'Default', 'bridge'),
			'no'	=> esc_html__( 'No', 'bridge' ),
			'yes'	=> esc_html__( 'Yes', 'bridge' )
		));
		$qode_page_title_area_container->addChild("qode_title_gradient_separator_meta", $qode_title_gradient_separator);

		$qode_enable_page_title_angled = new BridgeQodeMetaField("selectblank","qode_enable_page_title_angled","",esc_html__('Enable Angled Title','bridge'), esc_html__('Enabling this option will show title angled', 'bridge'), array(
			'no'	=> esc_html__( 'No', 'bridge' ),
			'yes'	=> esc_html__( 'Yes', 'bridge' )),
			array("dependence" => true,
				"hide" => array(
					"no"=>"#qodef_qode_title_angled_container",
					""=>"#qodef_qode_title_angled_container"),
				"show" => array(
					"yes"=>"#qodef_qode_title_angled_container") ));
		$qode_page_title_area_container->addChild("qode_enable_page_title_angled",$qode_enable_page_title_angled);

		$qode_title_angled_container = new BridgeQodeContainer("qode_title_angled_container","qode_enable_page_title_angled","");
		$qode_page_title_area_container->addChild("qode_title_angled_container",$qode_title_angled_container);

		$qode_title_angled_section_direction = new BridgeQodeMetaField("selectblank","qode_title_angled_section_direction","",esc_html__('Angled Direction', 'bridge'),esc_html__('Choose a direction for title angled', 'bridge'), array(
			"from_left_to_right" => esc_html__('From Left To Right', 'bridge'),
			"from_right_to_left" => esc_html__('From Right To Left', 'bridge')
		));
		$qode_title_angled_container->addChild("qode_title_angled_section_direction",$qode_title_angled_section_direction);

		$qode_title_angled_section_color = new BridgeQodeMetaField("color","qode_title_angled_section_color","",esc_html__('Background Color', 'bridge'),esc_html__('Choose a background color for Title Angled' ,'bridge'));
		$qode_title_angled_container->addChild("qode_title_angled_section_color",$qode_title_angled_section_color);


		$qode_enable_breadcrumbs = new BridgeQodeMetaField("selectblank","qode_enable_breadcrumbs","",esc_html__('Enable Breadcrumbs' ,'bridge'),esc_html__('Do you want to display breadcrumbs in title area?','bridge'),
			array(
				'no'	=> esc_html__( 'No', 'bridge' ),
				'yes'	=> esc_html__( 'Yes', 'bridge' )
			),
			array(
				'dependence' => true,
				'hide' => array(
					'no' => '#qodef_animation_page_page_breadcrumbs_container'
				),
				'show' => array(
					'yes' => '#qodef_animation_page_page_breadcrumbs_container',
					'' => '#qodef_animation_page_page_breadcrumbs_container'
				)
			)
		);
		$qode_page_title_area_container->addChild("qode_enable_breadcrumbs",$qode_enable_breadcrumbs);

		$qode_page_breadcrumbs_color = new BridgeQodeMetaField("color","qode_page_breadcrumbs_color","",esc_html__('Breadcrumbs Color', 'bridge'),esc_html__('Choose a color for breadcrumbs text','bridge'));
		$qode_page_title_area_container->addChild("qode_page_breadcrumbs_color",$qode_page_breadcrumbs_color);

		$qode_page_subtitle = new BridgeQodeMetaField("text","qode_page_subtitle","",esc_html__('Subtitle Text', 'bridge'),esc_html__('Enter your subtitle text', 'bridge'));
		$qode_page_title_area_container->addChild("qode_page_subtitle",$qode_page_subtitle);

		$qode_page_subtitle_color = new BridgeQodeMetaField("color","qode_page_subtitle_color","",esc_html__('Subtitle Text Color', 'bridge'),esc_html__('Choose a color for subtitle text', 'bridge'));
		$qode_page_title_area_container->addChild("qode_page_subtitle_color",$qode_page_subtitle_color);

		$qode_page_text_above_title = new BridgeQodeMetaField("text","qode_page_text_above_title","",esc_html__('Text Above Title', 'bridge'),esc_html__('Enter your text above Title' ,'bridge'));
		$qode_page_title_area_container->addChild("qode_page_text_above_title",$qode_page_text_above_title);

		$qode_page_text_above_title_color = new BridgeQodeMetaField("color","qode_page_text_above_title_color","",esc_html__('Text Above Title Color', 'bridge'),esc_html__('Choose a color for text above title', 'bridge'));
		$qode_page_title_area_container->addChild("qode_page_text_above_title_color",$qode_page_text_above_title_color);

		$group_margin_after_title = new BridgeQodeGroup(esc_html__('Spacing After title', 'bridge'),esc_html__('Define spacing after title. This option will also take effect if title is disabled, and will move the content down for the set value.', 'bridge'));
		$qodeTitle->addChild("group_margin_after_title",$group_margin_after_title);

		$row1 = new BridgeQodeRow();
		$group_margin_after_title->addChild("row1",$row1);

		$qode_margin_after_title = new BridgeQodeMetaField("textsimple","qode_margin_after_title","",esc_html__('Margin After Title (px)', 'bridge'),esc_html__('Set a bottom margin for Title Area', 'bridge'));
		$row1->addChild("qode_margin_after_title",$qode_margin_after_title);

		$qode_margin_after_title_mobile = new BridgeQodeMetaField("selectblanksimple","qode_margin_after_title_mobile","",esc_html__('Set This Bottom Margin for Mobile Header', 'bridge'),"", array(
			'no'	=> esc_html__( 'No', 'bridge' ),
			'yes'	=> esc_html__( 'Yes', 'bridge' )
		));
		$row1->addChild("qode_margin_after_title_mobile",$qode_margin_after_title_mobile);


	}

	add_action('bridge_qode_action_meta_boxes_map', 'bridge_qode_map_title_meta_fields');
}

if(!function_exists('bridge_qode_map_title_animations_meta_fields')) {

	// Title Animations

	function bridge_qode_map_title_animations_meta_fields() {
		$qodeTitleAnimations = bridge_qode_create_meta_box(
			array(
				'scope' => array('page', 'portfolio_page', 'post'),
				'title' => esc_html__('Qode Scroll Title Animations', 'bridge'),
				'name' => 'page_title_animations',
				'hidden_property' => 'qode_show-page-title',
				'hidden_values' => array('yes')
			)
		);

		//Whole title content animation
		$page_page_title_whole_content_animations = new BridgeQodeMetaField('selectblank', 'page_page_title_whole_content_animations', '', esc_html__( 'Enable Whole Title Content Animation', 'bridge'), esc_html__( 'This option will enable whole title content animation', 'bridge'), array(
			'no'	=> esc_html__( 'No', 'bridge' ),
			'yes'	=> esc_html__( 'Yes', 'bridge' )
		),
			array(
				'dependence' => true,
				'hide' => array(
					'' => '#qodef_page_page_title_whole_content_animations_container',
					'no' => '#qodef_page_page_title_whole_content_animations_container'
				),
				'show' => array(
					'yes' => '#qodef_page_page_title_whole_content_animations_container'
				)
			));
		$qodeTitleAnimations->addChild('page_page_title_whole_content_animations', $page_page_title_whole_content_animations);

		$page_page_title_whole_content_animations_container = new BridgeQodeContainer('page_page_title_whole_content_animations_container', 'page_page_title_whole_content_animations', '', array('', 'no'));
		$qodeTitleAnimations->addChild('page_page_title_whole_content_animations_container', $page_page_title_whole_content_animations_container);

		$page_page_title_whole_content_animations_data_start = new BridgeQodeGroup(esc_html__( 'Scrolling Animation Start Point', 'bridge'), esc_html__( 'These are properties for the first keyframe in scrolling animation', 'bridge'));
		$page_page_title_whole_content_animations_container->addChild('page_page_title_whole_content_animations_data_start', $page_page_title_whole_content_animations_data_start);

		$row1 = new BridgeQodeRow();
		$page_page_title_whole_content_animations_data_start->addChild('row1', $row1);

		$page_page_title_whole_content_data_start = new BridgeQodeMetaField('textsimple', 'page_page_title_whole_content_data_start', '', esc_html__( 'Scrollbar Top Distance (px)', 'bridge'));
		$row1->addChild('page_page_title_whole_content_data_start', $page_page_title_whole_content_data_start);

		$page_page_title_whole_content_start_custom_style = new BridgeQodeMetaField('textareasimple', 'page_page_title_whole_content_start_custom_style', '', esc_html__( 'Enter CSS declarations separated by semicolons', 'bridge'));
		$row1->addChild('page_page_title_whole_content_start_custom_style', $page_page_title_whole_content_start_custom_style);

		$page_page_title_whole_content_animations_data_end = new BridgeQodeGroup(esc_html__( 'Scrolling Animation End Point', 'bridge'), esc_html__( 'These are properties for the last keyframe in scrolling animation', 'bridge'));
		$page_page_title_whole_content_animations_container->addChild('page_page_title_whole_content_animations_data_end', $page_page_title_whole_content_animations_data_end);

		$row2 = new BridgeQodeRow();
		$page_page_title_whole_content_animations_data_end->addChild('row2', $row2);

		$page_page_title_whole_content_data_end = new BridgeQodeMetaField('textsimple', 'page_page_title_whole_content_data_end', '', esc_html__( 'Scrollbar Top Distance (px)', 'bridge'));
		$row2->addChild('page_page_title_whole_content_data_end', $page_page_title_whole_content_data_end);

		$page_page_title_whole_content_end_custom_style = new BridgeQodeMetaField('textareasimple', 'page_page_title_whole_content_end_custom_style', '', esc_html__( 'Enter CSS declarations separated by semicolons', 'bridge'));
		$row2->addChild('page_page_title_whole_content_end_custom_style', $page_page_title_whole_content_end_custom_style);


		//Title Animations
		$animation_page_page_title_container = new BridgeQodeContainerNoStyle('animation_page_page_title_container', 'qode_show-page-title-text', 'yes');
		$qodeTitleAnimations->addChild('animation_page_page_title_container', $animation_page_page_title_container);

		$page_page_title_animations = new BridgeQodeMetaField('selectblank', 'page_page_title_animations', '', esc_html__( 'Enable Page Title Animations', 'bridge'), esc_html__( 'This option will enable Page Title Scroll Animations', 'bridge'),
			array(
				'no'	=> esc_html__( 'No', 'bridge' ),
				'yes'	=> esc_html__( 'Yes', 'bridge' )
			),
			array(
				'dependence' => true,
				'hide' => array(
					'' => '#qodef_page_page_title_animations_container',
					'no' => '#qodef_page_page_title_animations_container'
				),
				'show' => array(
					'yes' => '#qodef_page_page_title_animations_container'
				) ));

		$animation_page_page_title_container->addChild('page_page_title_animations', $page_page_title_animations);

		$page_page_title_animations_container = new BridgeQodeContainer('page_page_title_animations_container', 'page_page_title_animations', '', array('', 'no'));
		$animation_page_page_title_container->addChild('page_page_title_animations_container', $page_page_title_animations_container);

		$page_page_title_animations_data_start = new BridgeQodeGroup(esc_html__( 'Scrolling Animation Start Point', 'bridge'), esc_html__( 'These are properties for the first keyframe in scrolling animation', 'bridge'));
		$page_page_title_animations_container->addChild('page_page_title_animations_data_start', $page_page_title_animations_data_start);

		$row1 = new BridgeQodeRow();
		$page_page_title_animations_data_start->addChild('row1', $row1);

		$page_page_title_data_start = new BridgeQodeMetaField('textsimple', 'page_page_title_data_start', '', esc_html__('Scrollbar Top Distance (px)', 'bridge'));
		$row1->addChild('page_page_title_data_start', $page_page_title_data_start);

		$page_page_title_start_custom_style = new BridgeQodeMetaField('textareasimple', 'page_page_title_start_custom_style', '', esc_html__('Enter CSS declarations separated by semicolons', 'bridge'));
		$row1->addChild('page_page_title_start_custom_style', $page_page_title_start_custom_style);

		$page_page_title_animations_data_end = new BridgeQodeGroup(esc_html__('Scrolling Animation End Point', 'bridge'), esc_html__('These are properties for the last keyframe in scrolling animation', 'bridge'));
		$page_page_title_animations_container->addChild('page_page_title_animations_data_end', $page_page_title_animations_data_end);

		$row2 = new BridgeQodeRow();
		$page_page_title_animations_data_end->addChild('row2', $row2);

		$page_page_title_data_end = new BridgeQodeMetaField('textsimple', 'page_page_title_data_end', '', esc_html__('Scrollbar Top Distance (px)', 'bridge'));
		$row2->addChild('page_page_title_data_end', $page_page_title_data_end);

		$page_page_title_end_custom_style = new BridgeQodeMetaField('textareasimple', 'page_page_title_end_custom_style', '', esc_html__('Enter CSS declarations separated by semicolons', 'bridge'));
		$row2->addChild('page_page_title_end_custom_style', $page_page_title_end_custom_style);

		//Title Separator Animations
		$animation_page_page_separator_container = new BridgeQodeContainerNoStyle('animation_page_page_separator_container', 'qode_separator_bellow_title', 'no');
		$qodeTitleAnimations->addChild('animation_page_page_separator_container', $animation_page_page_separator_container);

		$page_page_title_separator_animations = new BridgeQodeMetaField('selectblank', 'page_page_title_separator_animations', '', esc_html__('Enable Page Separator Title Animations', 'bridge'), esc_html__('This option will enable Page Title Separator Scroll Animations', 'bridge'),
			array(
				'no'	=> esc_html__( 'No', 'bridge' ),
				'yes'	=> esc_html__( 'Yes', 'bridge' )
			),
			array(
				'dependence' => true,
				'hide' => array(
					'' => '#qodef_page_page_title_separator_animations_container',
					'no' => '#qodef_page_page_title_separator_animations_container'
				),
				'show' => array(
					'yes' => '#qodef_page_page_title_separator_animations_container'
				)
			));
		$animation_page_page_separator_container->addChild('page_page_title_separator_animations', $page_page_title_separator_animations);

		$page_page_title_separator_animations_container = new BridgeQodeContainer('page_page_title_separator_animations_container', 'page_page_title_separator_animations', '', array('no', ''));
		$animation_page_page_separator_container->addChild('page_page_title_separator_animations_container', $page_page_title_separator_animations_container);

		$page_page_title_separator_animations_data_start = new BridgeQodeGroup(esc_html__('Scrolling Animation Start Point', 'bridge'), esc_html__('These are properties for the first keyframe in scrolling animation', 'bridge'));
		$page_page_title_separator_animations_container->addChild('page_page_title_separator_animations_data_start', $page_page_title_separator_animations_data_start);

		$row1 = new BridgeQodeRow();
		$page_page_title_separator_animations_data_start->addChild('row1', $row1);

		$page_page_title_separator_data_start = new BridgeQodeMetaField('textsimple', 'page_page_title_separator_data_start', '', esc_html__('Scrollbar Top Distance (px)', 'bridge'));
		$row1->addChild('page_page_title_separator_data_start', $page_page_title_separator_data_start);

		$page_page_title_separator_start_custom_style = new BridgeQodeMetaField('textareasimple', 'page_page_title_separator_start_custom_style', '', esc_html__('Enter CSS declarations separated by semicolons','bridge'));
		$row1->addChild('page_page_title_separator_start_custom_style', $page_page_title_separator_start_custom_style);

		$page_page_title_separator_animations_data_end = new BridgeQodeGroup(esc_html__('Scrolling Animation End Point', 'bridge'), esc_html__('These are properties for the last keyframe in scrolling animation', 'bridge'));
		$page_page_title_separator_animations_container->addChild('page_page_title_separator_animations_data_end', $page_page_title_separator_animations_data_end);

		$row2 = new BridgeQodeRow();
		$page_page_title_separator_animations_data_end->addChild('row2', $row2);

		$page_page_title_separator_data_end = new BridgeQodeMetaField('textsimple', 'page_page_title_separator_data_end', '', esc_html__('Scrollbar Top Distance (px)', 'bridge'));
		$row2->addChild('page_page_title_separator_data_end', $page_page_title_separator_data_end);

		$page_page_title_separator_end_custom_style = new BridgeQodeMetaField('textareasimple', 'page_page_title_separator_end_custom_style', '', esc_html__('Enter CSS declarations separated by semicolons', 'bridge'));
		$row2->addChild('page_page_title_separator_end_custom_style', $page_page_title_separator_end_custom_style);

		//Subtitle Animations
		$page_page_subtitle_animations = new BridgeQodeMetaField('selectblank', 'page_page_subtitle_animations', '', esc_html__('Enable Page Subtitle Animations', 'bridge'), esc_html__('This option will enable Page Subtitle Scroll Animations', 'bridge'),
			array(
				'no'	=> esc_html__( 'No', 'bridge' ),
				'yes'	=> esc_html__( 'Yes', 'bridge' )
			),
			array(
				'dependence' => true,
				'hide' => array(
					'' => '#qodef_page_page_subtitle_animations_container',
					'no' => '#qodef_page_page_subtitle_animations_container'
				),
				'show' => array(
					'yes' => '#qodef_page_page_subtitle_animations_container'
				)
			));
		$qodeTitleAnimations->addChild('page_page_subtitle_animations', $page_page_subtitle_animations);

		$page_page_subtitle_animations_container = new BridgeQodeContainer('page_page_subtitle_animations_container', 'page_page_subtitle_animations', '', array('', 'no'));
		$qodeTitleAnimations->addChild('page_page_subtitle_animations_container', $page_page_subtitle_animations_container);

		$page_page_subtitle_animations_data_start = new BridgeQodeGroup(esc_html__('Scrolling Animation Start Point', 'bridge'), esc_html__('These are properties for the first keyframe in scrolling animation', 'bridge'));
		$page_page_subtitle_animations_container->addChild('page_page_subtitle_animations_data_start', $page_page_subtitle_animations_data_start);

		$row1 = new BridgeQodeRow();
		$page_page_subtitle_animations_data_start->addChild('row1', $row1);

		$page_page_subtitle_data_start = new BridgeQodeMetaField('textsimple', 'page_page_subtitle_data_start', '', esc_html__('Scrollbar Top Distance (px)', 'bridge'));
		$row1->addChild('page_page_subtitle_data_start', $page_page_subtitle_data_start);

		$page_page_subtitle_start_custom_style = new BridgeQodeMetaField('textareasimple', 'page_page_subtitle_start_custom_style', '', esc_html__('Enter CSS declarations separated by semicolons', 'bridge'));
		$row1->addChild('page_page_subtitle_start_custom_style', $page_page_subtitle_start_custom_style);

		$page_page_subtitle_animations_data_end = new BridgeQodeGroup(esc_html__('Scrolling Animation End Point', 'bridge'), esc_html__('These are properties for the last keyframe in scrolling animation', 'bridge'));
		$page_page_subtitle_animations_container->addChild('page_page_subtitle_animations_data_end', $page_page_subtitle_animations_data_end);

		$row2 = new BridgeQodeRow();
		$page_page_subtitle_animations_data_end->addChild('row2', $row2);

		$page_page_subtitle_data_end = new BridgeQodeMetaField('textsimple', 'page_page_subtitle_data_end', '', esc_html__('Scrollbar Top Distance (px)', 'bridge'));
		$row2->addChild('page_page_subtitle_data_end', $page_page_subtitle_data_end);

		$page_page_subtitle_end_custom_style = new BridgeQodeMetaField('textareasimple', 'page_page_subtitle_end_custom_style', '', esc_html__('Enter CSS declarations separated by semicolons', 'bridge'));
		$row2->addChild('page_page_subtitle_end_custom_style', $page_page_subtitle_end_custom_style);

		//Breadcrumb animations
		$animation_page_page_breadcrumbs_container = new BridgeQodeContainerNoStyle('animation_page_page_breadcrumbs_container', 'qode_enable_breadcrumbs', 'no');
		$qodeTitleAnimations->addChild('animation_page_page_breadcrumbs_container', $animation_page_page_breadcrumbs_container);

		$page_page_title_breadcrumbs_animations = new BridgeQodeMetaField('selectblank', 'page_page_title_breadcrumbs_animations', '', esc_html__('Enable Page Title Breadcrumbs Animations', 'bridge'), esc_html__('This option will enable Page Title Breadcrumbs Scroll Animations', 'bridge'),
			array(
				'no'	=> esc_html__( 'No', 'bridge' ),
				'yes'	=> esc_html__( 'Yes', 'bridge' )
			),
			array(
				'dependence' => true,
				'hide' => array(
					'' => '#qodef_page_page_title_breadcrumbs_animations_container',
					'no' => '#qodef_page_page_title_breadcrumbs_animations_container'
				),
				'show' => array(
					'yes' => '#qodef_page_page_title_breadcrumbs_animations_container'
				)
			));
		$animation_page_page_breadcrumbs_container->addChild('page_page_title_breadcrumbs_animations', $page_page_title_breadcrumbs_animations);

		$page_page_title_breadcrumbs_animations_container = new BridgeQodeContainer('page_page_title_breadcrumbs_animations_container', 'page_page_title_breadcrumbs_animations', '', array('', 'no'));
		$animation_page_page_breadcrumbs_container->addChild('page_page_title_breadcrumbs_animations_container', $page_page_title_breadcrumbs_animations_container);

		$page_page_title_breadcrumbs_animations_data_start = new BridgeQodeGroup(esc_html__('Scrolling Animation Start Point', 'bridge'), esc_html__('These are properties for the first keyframe in scrolling animation', 'bridge'));
		$page_page_title_breadcrumbs_animations_container->addChild('page_page_title_breadcrumbs_animations_data_start', $page_page_title_breadcrumbs_animations_data_start);

		$row1 = new BridgeQodeRow();
		$page_page_title_breadcrumbs_animations_data_start->addChild('row1', $row1);

		$page_page_title_breadcrumbs_data_start = new BridgeQodeMetaField('textsimple', 'page_page_title_breadcrumbs_data_start', '', esc_html__('Scrollbar Top Distance (px)','bridge'));
		$row1->addChild('page_page_title_breadcrumbs_data_start', $page_page_title_breadcrumbs_data_start);

		$page_page_title_breadcrumbs_start_custom_style = new BridgeQodeMetaField('textareasimple', 'page_page_title_breadcrumbs_start_custom_style', '', esc_html__('Enter CSS declarations separated by semicolons', 'bridge'));
		$row1->addChild('page_page_title_breadcrumbs_start_custom_style', $page_page_title_breadcrumbs_start_custom_style);

		$page_page_title_breadcrumbs_animations_data_end = new BridgeQodeGroup(esc_html__('Scrolling Animation End Point', 'bridge'), esc_html__('These are properties for the last keyframe in scrolling animation','bridge'));
		$page_page_title_breadcrumbs_animations_container->addChild('page_page_title_breadcrumbs_animations_data_end', $page_page_title_breadcrumbs_animations_data_end);

		$row2 = new BridgeQodeRow();
		$page_page_title_breadcrumbs_animations_data_end->addChild('row2', $row2);

		$page_page_title_breadcrumbs_data_end = new BridgeQodeMetaField('textsimple', 'page_page_title_breadcrumbs_data_end', '', esc_html__('Scrollbar Top Distance (px)', 'bridge'));
		$row2->addChild('page_page_title_breadcrumbs_data_end', $page_page_title_breadcrumbs_data_end);

		$page_page_title_breadcrumbs_end_custom_style = new BridgeQodeMetaField('textareasimple', 'page_page_title_breadcrumbs_end_custom_style', '', esc_html__('Enter CSS declarations separated by semicolons', 'bridge'));
		$row2->addChild('page_page_title_breadcrumbs_end_custom_style', $page_page_title_breadcrumbs_end_custom_style);


	}

	add_action('bridge_qode_action_meta_boxes_map', 'bridge_qode_map_title_animations_meta_fields');
}