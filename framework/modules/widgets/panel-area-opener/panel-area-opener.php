<?php
if(class_exists('BridgeQodeWidget')) {
    class BridgeQodePanelAreaOpener extends BridgeQodeWidget 	{
        protected $params;

        public function __construct() {
            parent::__construct(
                'qode_panel_area_opener',
                esc_html__('Qode Panel Area Opener', 'bridge'),
                array('description' => esc_html__('Display Panel Area Opener', 'bridge'),)
            );

            $this->setParams();
        }

        protected function setParams() {
            $this->params = array(
                array(
                    'name' => 'title',
                    'type' => 'textfield',
                    'title' => esc_html__('Title', 'bridge')
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

            echo '<div class="widget qode_panel_area_opener_widget">';

            echo '<a class="qode_panel_area_opener" href="#">';

            if( ! empty( $instance['title'] ) ){
                echo esc_attr($instance['title']);
            }

            echo '</a>';

            echo '</div>';
        }
    }
}