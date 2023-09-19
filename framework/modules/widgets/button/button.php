<?php
if(class_exists('BridgeQodeWidget')) {
    class BridgeQodeButton extends BridgeQodeWidget 	{
        protected $params;

        public function __construct() {
            parent::__construct(
                'qode_button',
                esc_html__('Qode Button', 'bridge'),
                array('description' => esc_html__('Display Qode Button', 'bridge'),)
            );

            $this->setParams();
        }

        protected function setParams() {
            $this->params = array_merge(
                array(
                    array(
                        'name' => 'size',
                        'type' => 'dropdown',
                        'title' => esc_html__( "Size", 'bridge' ),
                        'options' => array(
                            ''	=> esc_html__('Default', 'bridge'),
                            'small'	=> esc_html__('Small', 'bridge'),
                            'medium'	=> esc_html__('Medium', 'bridge'),
                            'large'	=> esc_html__('Large', 'bridge'),
                            'big_large'	=> esc_html__('Extra Largerge', 'bridge'),
                            'big_large_full_width'	=> esc_html__('Extra Large Full Width', 'bridge'),
                        )
                    ),

                    array(
                        'name' => 'style',
                        'type' => 'dropdown',
                        'title' => esc_html__( "Style", 'bridge' ),
                        'options' => array(
                            ''	=> esc_html__('Default', 'bridge'),
                            'white'	=> esc_html__('White', 'bridge'),
                        )
                    ),

                    array(
                        'name' => 'custom_class',
                        'type' => 'textfield',
                        'title' => esc_html__('Custom CSS class', 'bridge'),
                    ),

                    array(
                        'name' => 'text',
                        'type' => 'textfield',
                        'title' => esc_html__('Text', 'bridge'),
                    ),
                ),

                bridge_qode_icon_collections()->getIconWidgetParamsArray(),

                array(
                    array(
                        'type'  => 'colorpicker',
                        'name'  => 'icon_color',
                        'title' => esc_html__( "Icon Color", 'bridge' ),
                    ),

                    array(
                        'name' => 'link',
                        'type' => 'textfield',
                        'title' => esc_html__('Link', 'bridge'),
                    ),

                    array(
                        'name' => 'target',
                        'type' => 'dropdown',
                        'title' => esc_html__( "Link Target", 'bridge' ),
                        'options' => bridge_qode_get_link_target_array(false)
                    ),

                    array(
                        'name' => 'hover_type',
                        'type' => 'dropdown',
                        'title' => esc_html__( "Hover Type", 'bridge' ),
                        'options' => array(
                            'default'	=> esc_html__('Default', 'bridge'),
                            'enlarge'	=> esc_html__('Enlarge', 'bridge'),
                        )
                    ),

                    array(
                        'type'  => 'colorpicker',
                        'name'  => 'color',
                        'title' => esc_html__( "Color", 'bridge' ),
                    ),

                    array(
                        'type'  => 'colorpicker',
                        'name'  => 'hover_color',
                        'title' => esc_html__( "Hover Color", 'bridge' ),
                    ),

                    array(
                        'type'  => 'colorpicker',
                        'name'  => 'background_color',
                        'title' => esc_html__( "Background Color", 'bridge' ),
                    ),

                    array(
                        'type'  => 'colorpicker',
                        'name'  => 'hover_background_color',
                        'title' => esc_html__( "Hover Background Color", 'bridge' ),
                    ),

                    array(
                        'type'  => 'colorpicker',
                        'name'  => 'border_color',
                        'title' => esc_html__( "Border Color", 'bridge' ),
                    ),

                    array(
                        'type'  => 'colorpicker',
                        'name'  => 'hover_border_color',
                        'title' => esc_html__( "Hover Border Color", 'bridge' ),
                    ),

                    array(
                        'name' => 'gradient',
                        'type' => 'dropdown',
                        'title' => esc_html__("Enable Button Background Gradient", 'bridge'),
                        'options' => bridge_qode_get_yes_no_select_array(false, false)
                    ),

                    array(
                        'name' => 'font_family',
                        'type' => 'textfield',
                        'title' => esc_html__('Font Family', 'bridge')
                    ),

                    array(
                        'name' => 'font_size',
                        'type' => 'textfield',
                        'title' => esc_html__('Font Size (px)', 'bridge'),
                    ),

                    array(
                        'name' => 'letter_spacing',
                        'type' => 'textfield',
                        'title' => esc_html__('Letter Spacing (px)', 'bridge'),
                    ),

                    array(
                        'name' => 'text_transform',
                        'type' => 'dropdown',
                        'title' => esc_html__('Text Transform', 'bridge'),
                        'options' => bridge_qode_get_text_transform_array(true)
                    ),

                    array(
                        'name' => 'font_style',
                        'type' => 'dropdown',
                        'title' => esc_html__( 'Font Style', 'bridge' ),
                        'options' => bridge_qode_get_font_style_array(true)
                    ),

                    array(
                        'name' => 'font_weight',
                        'type' => 'dropdown',
                        'title' => esc_html__( 'Font Weight', 'bridge' ),
                        'options' => bridge_qode_get_font_weight_array(true)
                    ),

                    array(
                        'name' => 'text_align',
                        'type' => 'dropdown',
                        'title' => esc_html__( 'Text Align', 'bridge' ),
                        'options' => array(
                            '' => '',
                            'left' => esc_html__( 'Left', 'bridge' ),
                            'right' => esc_html__( 'Right', 'bridge' ),
                            'center' => esc_html__( 'Center', 'bridge' ),
                        )
                    ),

                    array(
                        'name' => 'margin',
                        'type' => 'textfield',
                        'title' => esc_html__( 'Margin', 'bridge' ),
                    ),

                    array(
                        'name' => 'border_radius',
                        'type' => 'textfield',
                        'title' => esc_html__( 'Border radius', 'bridge' ),
                    ),

                    array(
                        'name' => 'button_shadow',
                        'type' => 'dropdown',
                        'title' => esc_html__( 'Enable Button Shadow', 'bridge' ),
                        'options' => bridge_qode_get_yes_no_select_array(true)
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

            if (empty($params['target'])) {
                $params['target'] = '_self';
            }

            if (empty($params['hover_type'])) {
                $params['hover_type'] = 'default';
            }

            if (empty($params['gradient'])) {
                $params['gradient'] = 'no';
            }

            echo '<div class="widget qode_button_widget">';

            echo bridge_qode_execute_shortcode('button', $params);

            echo '</div>';
        }
    }
}