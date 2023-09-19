<?php
if(!function_exists('bridge_qode_map_general_meta_fields')) {

	function bridge_qode_map_general_meta_fields() {

		$qodeGeneralScopeArray = apply_filters('bridge_qode_filter_general_scope_post_types', array('page', 'post', 'portfolio_page'));
		$qodeGeneral = bridge_qode_create_meta_box(
			array(
				'scope' => $qodeGeneralScopeArray,
				'title' => esc_html__('Qode General', 'bridge'),
				'name' => 'page_general'
			)
		);

		$qode_page_background_color = new BridgeQodeMetaField("color","qode_page_background_color","",esc_html__('Page Background Color','bridge'),esc_html__('Choose the page background (body) color', 'bridge'));
		$qodeGeneral->addChild("qode_page_background_color",$qode_page_background_color);


        bridge_qode_create_meta_box_field(
            array(
                'name'          => 'qode_transparent_content_page',
                'type'          => 'selectblank',
                'label'         => esc_html__('Enable Uniform Page Background', 'bridge'),
                'description'   => esc_html__('If enabled, content background on this page will be transparent (unless set otherwise) and the background you set here will show.', 'bridge'),
                'parent'        => $qodeGeneral,
                'options'       => array(
					'no'	=> esc_html__( 'No', 'bridge' ),
					'yes'	=> esc_html__( 'Yes', 'bridge' )
                ),
                'args'    => array(
                    'dependence' => true,
                    'hide'       => array(
                        ''       => '#qodef_qode_transparent_content_page_container',
                        'no'     => '#qodef_qode_transparent_content_page_container',
                        'yes'    => ''
                    ),
                    'show'       => array(  
                        ''       => '',
                        'no'     => '',                      
                        'yes'    => '#qodef_qode_transparent_content_page_container',
                    )
                )
            )
        );

        $qode_transparent_content_page_container = bridge_qode_add_admin_container(
            array(
                'parent'          => $qodeGeneral,
                'name'            => 'qode_transparent_content_page_container',
                'hidden_property' => 'qode_transparent_content_page',
                'hidden_values'    => array('none', 'no')
            )
        );

        bridge_qode_create_meta_box_field(
            array(
                'name'          => 'qode_page_background_image',
                'type'          => 'image',
                'label'         => esc_html__( 'Background Image', 'bridge' ),
                'description'   => esc_html__( 'Choose page background image', 'bridge' ),
                'parent'        => $qode_transparent_content_page_container
            )
        );

        bridge_qode_create_meta_box_field(
            array(
                'name'          => 'qode_page_background_image_fixed',
                'type'          => 'yesno',
                'label'         => esc_html__( 'Fixed Background Image', 'bridge' ),
                'default_value' => 'yes',
                'description'   => esc_html__( 'Choose if you want to have fixed background image', 'bridge' ),
                'parent'        => $qode_transparent_content_page_container
            )
        );

        bridge_qode_create_meta_box_field(
            array(
                'name'          => 'qode_page_background_pattern_image',
                'type'          => 'image',
                'label'         => esc_html__( 'Background Pattern Image', 'bridge' ),
                'description'   => esc_html__( 'Choose page background pattern image', 'bridge' ),
                'parent'        => $qode_transparent_content_page_container
            )
        );

		bridge_qode_create_meta_box_field(
            array(
                'name'          => 'qode_content_grid_lines_meta',
                'type'          => 'select',
                'label'         => esc_html__('Grid Lines in Page Background', 'bridge'),
                'description'   => esc_html__('If you would like to enable a set of lines in the page background, choose how many lines you would like to display. The lines will be placed on the page grid.', 'bridge'),
                'parent'        => $qodeGeneral,
                'options'       => array(
                    "" => "",
                    "none"	=> esc_html__("None", 'bridge'),
                    "2"		=> esc_html__("3 lines", 'bridge'),
                    "3"		=> esc_html__("4 lines", 'bridge'),
                    "4"		=> esc_html__("5 lines", 'bridge'),
                    "5"		=> esc_html__("6 lines", 'bridge'),
                    "6"		=> esc_html__("7 lines", 'bridge')
                ),
                'args'    => array(
                    'dependence' => true,
                    'hide'       => array(
                        ''    => '#qodef_lines_container_meta',
                        'none'  => '#qodef_lines_container_meta',
                        '2' => '',
                        '3' => '',
                        '4' => '',
                        '5' => '',
                        '6' => ''
                    ),
                    'show'       => array(
                        ''    => '',
                        'none'  => '',
                        '2' => '#qodef_lines_container_meta',
                        '3' => '#qodef_lines_container_meta',
                        '4' => '#qodef_lines_container_meta',
                        '5' => '#qodef_lines_container_meta',
                        '6' => '#qodef_lines_container_meta'
                    )
                )
            )
        );

        $lines_container_meta = bridge_qode_add_admin_container(
            array(
                'parent'          => $qodeGeneral,
                'name'            => 'lines_container_meta',
                'hidden_property' => 'qode_content_grid_lines_meta',
                'hidden_values'   => array(
                    '',
                    'none'
                )
            )
        );

        bridge_qode_create_meta_box_field(
            array(
                'name'          => 'qode_content_grid_lines_skin_meta',
                'type'          => 'select',
                'label'         => esc_html__( 'Grid Lines Skin', 'bridge' ),
                'description'   => esc_html__( 'Choose skin for background grid lines', 'bridge' ),
                'parent'        => $lines_container_meta,
                'options'       => array(
                    ''      => '',
                    'light'	=> esc_html__( 'Light', 'bridge' ),
                    'dark'	=> esc_html__( 'Dark', 'bridge' )
                )
            )
        );


		$qode_show_animation = new BridgeQodeMetaField("selectblank", "qode_show-animation", "", esc_html__('Page Transition', 'bridge' ), esc_html__('Choose a type of transition between loading pages.', 'bridge' ), array(
			"no_animation"	=> esc_html__("No Animation", 'bridge' ),
			"updown"		=> esc_html__("Up / Down", 'bridge' ),
			"fade"			=> esc_html__("Fade", 'bridge' ),
			"updown_fade"	=> esc_html__("Up/Down (In) / Fade (Out)", 'bridge' ),
			"leftright"		=> esc_html__("Left / Right", 'bridge' )
		), array(), "enable_grid_elements", array("yes"));
		$qodeGeneral->addChild("qode_show-animation", $qode_show_animation);

		$page_transitions_notice = new BridgeQodeNotice(esc_html__( 'Page Transition', 'bridge'),esc_html__( 'Choose a a type of transition between loading pages. In order for animation to work properly, you must choose "Post name" in permalinks settings', 'bridge'), esc_html__( 'AJAX Page transitions are disabled due to VC Grid Elements', 'bridge'), "enable_grid_elements","no");
		$qodeGeneral->addChild("page_transitions_notice",$page_transitions_notice);

		$qode_revolution_slider = new BridgeQodeMetaField("text","qode_revolution-slider","",esc_html__( 'Layer Slider or Qode Slider Shortcode', 'bridge'),esc_html__( 'Copy and paste your shortcode located in Qode Slider -> Slider','bridge'));
		$qodeGeneral->addChild("qode_revolution-slider",$qode_revolution_slider);

		$qode_enable_content_top_margin = new BridgeQodeMetaField("selectblank","qode_enable_content_top_margin","",esc_html__( 'Always put content below header', 'bridge'),esc_html__( 'Enabling this option always will put content below header', 'bridge'), array(
			'no'	=> esc_html__( 'No', 'bridge' ),
			'yes'	=> esc_html__( 'Yes', 'bridge' )
		));
		$qodeGeneral->addChild("qode_enable_content_top_margin",$qode_enable_content_top_margin);


	}

	add_action('bridge_qode_action_meta_boxes_map', 'bridge_qode_map_general_meta_fields');
}