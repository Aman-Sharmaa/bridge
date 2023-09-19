<?php
if(class_exists('BridgeQodeWidget')) {
    class BridgeQodeIconWithText extends BridgeQodeWidget 	{
        protected $params;

        public function __construct() {
            parent::__construct(
                'qode_icon_with_text',
                esc_html__('Qode Icon With Text', 'bridge'),
                array('description' => esc_html__('Display Icon With Text', 'bridge'),)
            );

            $this->setParams();
        }

        protected function setParams() {
            $this->params = array_merge(
                array(
                    array(
                        'name' => 'box_type',
                        'type' => 'dropdown',
                        'title' => esc_html__( "Box type", 'bridge' ),
                        'options' => array(
                            'normal' => esc_html__( 'Normal', 'bridge'),
                            'icon_in_a_box' => esc_html__( "Icon in a box", 'bridge'),
                        )
                    ),

                    array(
                        'name' => 'holder_hover_effect',
                        'type' => 'dropdown',
                        'title' => esc_html__('Enable hover effect','bridge'),
                        'options' => bridge_qode_get_yes_no_select_array(false, false)
                    ),

                    array(
                        'name' => 'box_border_color',
                        'type' => 'colorpicker',
                        'title' => esc_html__( "Box Border Color", 'bridge' )
                    ),

                    array(
                        'name' => 'box_background_color',
                        'type' => 'colorpicker',
                        'title' => esc_html__( "Box Background Color", 'bridge' ),
                    ),
                ),

                bridge_qode_icon_collections()->getIconWidgetParamsArray(),

                array(
                    array(
                        'name' => 'image',
                        'type' => 'image',
                        'title' => esc_html__( "Image", 'bridge' ),
                    ),

                    array(
                        'name' => 'icon_type',
                        'type' => 'dropdown',
                        'title' => esc_html__( "Icon Type", 'bridge' ),
                        'options' => array(
                            'normal' => esc_html__( 'Normal', 'bridge' ),
                            'circle' => esc_html__( 'Circle', 'bridge' ),
                            'square' => esc_html__( 'Square', 'bridge' ),
                        )
                    ),

                    array(
                        'name' => 'icon_position',
                        'type' => 'dropdown',
                        'title' => esc_html__( "Icon/Image Position", 'bridge' ),
                        'options' => array(
                            'top' => esc_html__( 'Top', 'bridge' ),
                            'left' => esc_html__( 'Left', 'bridge' ),
                            'left_from_title' => esc_html__( 'Left From Title', 'bridge' ),
                            'right' => esc_html__( 'Right', 'bridge' ),
                        ),
                        "description" => esc_html__( "Icon Position (only for normal box type)", 'bridge' ),
                    ),

                    array(
                        'name' => 'content_alignment',
                        'type' => 'dropdown',
                        'title' => esc_html__( "Content Alignment", 'bridge' ),
                        'options' => array(
                            'center' => esc_html__( 'Center', 'bridge' ),
                            'left' => esc_html__( 'Left', 'bridge' ),
                            'right' => esc_html__( 'Right', 'bridge' ),
                        ),
                    ),

                    array(
                        'name' => 'icon_margin',
                        'type' => 'textfield',
                        'title' => esc_html__( "Icon Margin", 'bridge' ),
                        "description" => esc_html__( "Margin should be set in a top right bottom left format", 'bridge' ),
                    ),

                    array(
                        'name' => 'icon_size',
                        'type' => 'dropdown',
                        'title' => esc_html__( "Icon Size", 'bridge' ),
                        'options' => array(
                            'fa-lg' => esc_html__( 'Tiny', 'bridge' ),
                            'fa-2x' => esc_html__( 'Small', 'bridge' ),
                            'fa-3x' => esc_html__( 'Medium', 'bridge' ),
                            'fa-4x' => esc_html__( 'Large', 'bridge' ),
                            'fa-5x' => esc_html__( 'Very Large', 'bridge' ),
                        ),
                    ),

                    array(
                        'name' => 'use_custom_icon_size',
                        'type' => 'dropdown',
                        'title' => esc_html__( "Use Custom Icon Size", 'bridge' ),
                        'options' => bridge_qode_get_yes_no_select_array(false, false)
                    ),

                    array(
                        'name' => 'custom_icon_size',
                        'type' => 'textfield',
                        'title' => esc_html__( "Custom Icon Size (px)", 'bridge' ),
                        "description" => esc_html__("Enter just number, omit px", 'bridge'),
                    ),

                    array(
                        'name' => 'custom_icon_size_inner',
                        'type' => 'textfield',
                        'title' => esc_html__( "Custom Icon Size inside a circle or square (px)", 'bridge' ),
                        "description" => esc_html__("Enter just number, omit px. Applied only for circle or square icon type", 'bridge'),
                    ),

                    array(
                        'name' => 'custom_icon_margin',
                        'type' => 'textfield',
                        'title' => esc_html__( "Custom Icon Margin (px)", 'bridge' ),
                        "description" => esc_html__("Spacing between icon and text (for left icon/margin position). Enter just number, omit px", 'bridge'),
                    ),

                    array(
                        'name' => 'icon_border_color',
                        'type' => 'textfield',
                        'title' => esc_html__( "Icon Border Color", 'bridge' ),
                        "description" => esc_html__( "Only for Square and Circle type", 'bridge' ),
                    ),

                    array(
                        'name' => 'icon_color',
                        'type' => 'colorpicker',
                        'title' => esc_html__( "Icon Color", 'bridge' )
                    ),

                    array(
                        'name' => 'icon_hover_color',
                        'type' => 'colorpicker',
                        'title' => esc_html__( "Icon Hover Color", 'bridge' ),
                    ),

                    array(
                        'name' => 'icon_background_color',
                        'type' => 'colorpicker',
                        'title' => esc_html__( "Icon Background Color", 'bridge' ),
                    ),

                    array(
                        'name' => 'icon_gradient',
                        'type' => 'dropdown',
                        'title' => esc_html__("Enable Icon Gradient",'bridge'),
                        'options' => bridge_qode_get_yes_no_select_array(false, false)
                    ),

                    array(
                        'name' => 'icon_hover_background_color',
                        'type' => 'colorpicker',
                        'title' => esc_html__( "Icon Hover Background Color", 'bridge' ),
                        "description" => esc_html__( "Icon Hover Background Color (only for square and circle icon type)", 'bridge' )
                    ),

                    array(
                        'name' => 'icon_animation',
                        'type' => 'dropdown',
                        'title' => esc_html__( "Icon Animation", 'bridge' ),
                        'options' => bridge_qode_get_yes_no_select_array()
                    ),

                    array(
                        'name' => 'icon_animation_delay',
                        'type' => 'textfield',
                        'title' => esc_html__( "Icon Animation Delay (ms)", 'bridge' )
                    ),

                    array(
                        'name' => 'title',
                        'type' => 'textfield',
                        'title' => esc_html__( "Title", 'bridge' ),
                    ),

                    array(
                        'name' => 'title_tag',
                        'type' => 'dropdown',
                        'title' => esc_html__( "Title Tag", 'bridge' ),
                        'options' => bridge_qode_get_title_tag(false)
                    ),

                    array(
                        'name' => 'title_color',
                        'type' => 'colorpicker',
                        'title' => esc_html__( "Title Color", 'bridge' ),
                    ),

                    array(
                        'name' => 'title_font_weight',
                        'type' => 'dropdown',
                        'title' => esc_html__( "Title Font Weight", 'bridge' ),
                        'options' => bridge_qode_get_font_weight_array(true)
                    ),

                    array(
                        'name' => 'separator',
                        'type' => 'dropdown',
                        'title' => esc_html__( "Separator", 'bridge' ),
                        'options' => bridge_qode_get_yes_no_select_array(false, false)
                    ),

                    array(
                        'name' => 'separator_color',
                        'type' => 'colorpicker',
                        'title' => esc_html__( "Separator Color", 'bridge' ),
                    ),

                    array(
                        'name' => 'separator_top_margin',
                        'type' => 'textfield',
                        'title' => esc_html__( "Separator Top Margin", 'bridge' ),
                    ),

                    array(
                        'name' => 'separator_bottom_margin',
                        'type' => 'textfield',
                        'title' => esc_html__( "Separator Bottom Margin", 'bridge' ),
                    ),

                    array(
                        'name' => 'separator_width',
                        'type' => 'textfield',
                        'title' => esc_html__( "Separator Width", 'bridge' ),
                    ),

                    array(
                        'name' => 'text',
                        'type' => 'textfield',
                        'title' => esc_html__( "Text", 'bridge' ),
                    ),

                    array(
                        'name' => 'text_color',
                        'type' => 'colorpicker',
                        'title' => esc_html__( "Text Color", 'bridge' ),
                    ),

                    array(
                        'name' => 'link',
                        'type' => 'textfield',
                        'title' => esc_html__( "Link", 'bridge' ),
                    ),

                    array(
                        'name' => 'link_text',
                        'type' => 'textfield',
                        'title' => esc_html__( "Link Text", 'bridge' ),
                    ),

                    array(
                        'name' => 'link_color',
                        'type' => 'colorpicker',
                        'title' => esc_html__( "Link Color", 'bridge' ),
                    ),

                    array(
                        'name' => 'target',
                        'type' => 'dropdown',
                        'title' => esc_html__( "Target", 'bridge' ),
                        'options' => bridge_qode_get_link_target_array(true)
                    ),

                    array(
                        'name' => 'link_icon',
                        'type' => 'dropdown',
                        'title' => esc_html__( "Link Icon", 'bridge' ),
                        'options' => bridge_qode_get_yes_no_select_array(true, true)
                    )
                )
            );
        }

        public function widget($args, $instance) {
            extract($args);

            //prepare variables
            $content = '';
            $params = array();

            //is instance empty?
            if (is_array($instance) && count($instance)) {
                //generate shortcode params
                foreach ($instance as $key => $value) {
                    $params[$key] = $value;
                }
            }

            if (empty($params['icon_gradient'])) {
                $params['icon_gradient'] = 'no';
            }

            if (empty($params['title_tag'])) {
                $params['title_tag'] = 'h5';
            }

            if (empty($params['separator_top_margin'])) {
                $params['separator_top_margin'] = '0';
            }

            if (empty($params['separator_bottom_margin'])) {
                $params['separator_bottom_margin'] = '15';
            }

            if (empty($params['separator_width'])) {
                $params['separator_width'] = '20';
            }

            if (empty($params['holder_hover_effect'])) {
                $params['holder_hover_effect'] = 'no';
            }

            echo '<div class="widget qode_icon_with_text_widget">';

            echo bridge_qode_execute_shortcode('icon_text', $params);

            echo '</div>';
        }
    }
}