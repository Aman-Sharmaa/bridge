<?php
if(class_exists('BridgeQodeWidget')) {
    class BridgeQodeIconListItem extends BridgeQodeWidget 	{
        protected $params;

        public function __construct() {
            parent::__construct(
                'qode_icon_list_item',
                esc_html__('Qode Icon List Item', 'bridge'),
                array('description' => esc_html__('Display Qode Icon List shortcode', 'bridge'),)
            );

            $this->setParams();
        }

        protected function setParams() {
            $this->params = array_merge(
                bridge_qode_icon_collections()->getIconWidgetParamsArray(),

                array(
                    array(
                        'name' => 'icon_type',
                        'type' => 'dropdown',
                        'title' => esc_html__( "Icon Type", 'bridge' ),
                        'options' => array(
                            'circle'	=> esc_html__('Circle', 'bridge'),
                            'transparent'	=> esc_html__('Transparent', 'bridge'),
                        )
                    ),
                    array(
                        'name' => 'icon_size',
                        'type' => 'textfield',
                        'title' => esc_html__('Icon Size', 'bridge'),
                    ),
                    array(
                        'name' => 'icon_color',
                        'type' => 'colorpicker',
                        'title' => esc_html__('Icon Color', 'bridge'),
                    ),
                    array(
                        'name' => 'icon_background_color',
                        'type' => 'colorpicker',
                        'title' => esc_html__( "Icon Background Color", 'bridge' ),
                    ),
                    array(
                        'name' => 'icon_border_color',
                        'type' => 'colorpicker',
                        'title' => esc_html__( "Icon Border Color", 'bridge' ),
                    ),
                    array(
                        'name' => 'title',
                        'type' => 'textfield',
                        'title' => esc_html__( "Title", 'bridge' ),
                    ),
                    array(
                        'name' => 'title_color',
                        'type' => 'colorpicker',
                        'title' => esc_html__( "Title Color", 'bridge' ),
                    ),
                    array(
                        'name' => 'title_size',
                        'type' => 'textfield',
                        'title' => esc_html__( "Title size (px)", 'bridge' ),
                    ),
                    array(
                        'name' => 'title_font_weight',
                        'type' => 'dropdown',
                        'title' => esc_html__( "Title Font Weight", 'bridge' ),
                        'options' => bridge_qode_get_font_weight_array(true)
                    ),
                    array(
                        'name' => 'margin_bottom',
                        'type' => 'textfield',
                        'title' => esc_html__( "Margin Bottom (px)", 'bridge' )
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

            echo '<div class="widget qode_icon_list_item">';

            echo bridge_qode_execute_shortcode('icon_list_item', $params);

            echo '</div>';
        }
    }
}