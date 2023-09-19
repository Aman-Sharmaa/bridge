<?php

if(class_exists('BridgeQodeWidget')) {

	class BridgeQodeStickySidebar extends BridgeQodeWidget {
		protected $params;

		public function __construct() {
			parent::__construct(
				'qode_sticky_sidebar',
				esc_html__('Qode Sticky Sidebar', 'bridge'),
				array(
					'description' => esc_html__('Use this widget to make the sidebar sticky. Drag it into the sidebar above the widget which you want to be the first element in the sticky sidebar.', 'bridge')
				)
			);
			$this->setParams();
		}

		protected function setParams(){

		}

		public function widget($args, $instance) {
			echo '<div class="widget qode-widget-sticky-sidebar"></div>';
		}

	}
}