<?php
if(class_exists('BridgeQodeWidget')) {
	class BridgeQodeLatestPosts extends BridgeQodeWidget 	{
		protected $params;

		public function __construct() {
			parent::__construct(
				'qode_latest_posts',
				esc_html__('Qode Latest Post', 'bridge'),
				array('description' => esc_html__('Display posts from your blog', 'bridge'),)
			);

			$this->setParams();
		}

		protected function setParams() {
			$this->params = array(
				array(
					'name' => 'title',
					'type' => 'textfield',
					'title' => esc_html__('Title', 'bridge')
				),
				array(
					'name' => 'number_of_posts',
					'type' => 'textfield',
					'title' => esc_html__('Number of posts', 'bridge')
				),
				array(
					'name' => 'order_by',
					'type' => 'dropdown',
					'title' => esc_html__('Order By', 'bridge'),
					'options' => array(
						'title'	=> esc_html__('Title', 'bridge'),
						'date'	=> esc_html__('Date', 'bridge')
					)
				),
				array(
					'name' => 'order',
					'type' => 'dropdown',
					'title' => esc_html__('Order', 'bridge'),
					'options' => array(
						'ASC'	=> esc_html__('ASC', 'bridge'),
						'DESC'	=> esc_html__('DESC', 'bridge')
					)
				),
				array(
					'name'	=> 'category',
					'type'	=> 'textfield',
					'title'	=> esc_html__('Category Slug', 'bridge')
				),
				array(
					'name'		=> 'title_tag',
					'type'		=> 'dropdown',
					'title'		=> esc_html__('Title Tag', 'bridge'),
					'options'	=> array(
						"" => "",
						"h2" => "h2",
						"h3" => "h3",
						"h4" => "h4",
						"h5" => "h5",
						"h6" => "h6"
					)
				)
			);
		}

		public function widget($args, $instance) {
			extract($args);

			//prepare variables
			$content = '';
			$params = array();
			$params['type'] = 'image_in_box';

			//is instance empty?
			if (is_array($instance) && count($instance)) {
				//generate shortcode params
				foreach ($instance as $key => $value) {
					$params[$key] = $value;
				}
			}
			if (empty($params['title_tag'])) {
				$params['title_tag'] = 'h5';
			}
			$params['text_length'] = '0';
			$params['display_category'] = '0';
			$params['display_time'] = '1';
			$params['display_comments'] = '0';
			$params['display_like'] = '0';
			$params['display_share'] = '0';

			echo '<div class="widget qode_latest_posts_widget">';
			if ($params['title'] != '') {
				$title = apply_filters('widget_title', empty($params['title']) ? '' : $params['title'], $params);
				print wp_kses_post($args['before_title']) . wp_kses_post($title) . wp_kses_post($args['after_title']);
			}

			echo bridge_qode_execute_shortcode('latest_post', $params);

			echo '</div>';
		}
	}
}