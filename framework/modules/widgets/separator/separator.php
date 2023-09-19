<?php
if(class_exists('BridgeQodeWidget')) {
    class BridgeQodeSeparator extends BridgeQodeWidget 	{
        protected $params;

        public function __construct() {
            parent::__construct(
                'qode_separator',
                esc_html__('Qode Separator', 'bridge'),
                array('description' => esc_html__('Display Qode Separator', 'bridge'),)
            );

            $this->setParams();
        }

        protected function setParams() {
            $this->params = array(
                array(
                    'name' => 'thickness',
                    'type' => 'textfield',
                    'title' => esc_html__('Thickness (px)', 'bridge'),
                ),
            );
        }

        public function widget($args, $instance) {
            extract($args);

            $thickness = 0;

            if( ! empty( $instance['thickness'] ) ){
                $thickness = bridge_qode_filter_px( $instance['thickness'] );
            }

            echo '<div class="widget qode_separator_widget" style="margin-bottom: ' . $thickness . 'px;">';

            echo '</div>';
        }
    }
}