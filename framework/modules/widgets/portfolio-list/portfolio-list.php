<?php
if(class_exists('BridgeQodeWidget')) {
    class BridgeQodePortfolioList extends BridgeQodeWidget 	{
        protected $params;

        public function __construct() {
            parent::__construct(
                'qode_portfolio_list',
                esc_html__('Qode Portfolio List', 'bridge'),
                array('description' => esc_html__('Display Portfolio List', 'bridge'),)
            );

            $this->setParams();
        }

        protected function setParams() {
            $this->params = array(
                array(
                    'name' => 'type',
                    'type' => 'dropdown',
                    'title' => esc_html__('Type', 'bridge'),
                    'options' => [
                        'standard' => esc_html__( 'Standard', 'bridge-core' ),
                        'standard_no_space' => esc_html__( 'Standard No Space', 'bridge-core' ),
                        'masonry_with_space' => esc_html__( 'Masonry(Pinterest) with space', 'bridge-core' ),
                    ]
                ),
                array(
                    'name' => 'hover_type_standard',
                    'type' => 'dropdown',
                    'title' => esc_html__('Hover Type', 'bridge'),
                    'options' => [
                        'default' => esc_html__( 'Default', 'bridge-core' ),
                        'subtle_vertical_hover' => esc_html__( 'Subtle Vertical', 'bridge-core' ),
                        'image_subtle_rotate_zoom_hover' => esc_html__( 'Image Subtle Rotate Zoom', 'bridge-core' ),
                        'image_text_zoom_hover' => esc_html__( 'Image Subtle Rotate Zoom', 'bridge-core' ),
                        'thin_plus_only' => esc_html__( 'Thin Plus Only', 'bridge-core' ),
                        'slow_zoom' => esc_html__( 'Slow Zoom', 'bridge-core' ),
                        'split_up' => esc_html__( 'Split Up', 'bridge-core' ),
                    ]
                ),
                array(
                    'name' => 'spacing',
                    'type' => 'textfield',
                    "description" => esc_html__('This option only works with "Masonry(Pinterest) with space" type', 'bridge'),
                    'title' => esc_html__('Spacing', 'bridge')
                ),
                array(
                    'name' => 'box_background_color',
                    'type' => 'colorpicker',
                    'title' => esc_html__('Box Background Color', 'bridge'),
                ),
                array(
                    'name'		=> 'columns',
                    'type'		=> 'dropdown',
                    'title'		=> esc_html__('Columns', 'bridge'),
                    'options'	=> [
                        "1" => "1",
                        "2" => "2",
                        "3" => "3",
                        "4" => "4",
                        "5" => "5",
                        "6" => "6",
                    ]
                ),
                array(
                    'name'		=> 'image_size',
                    'type'		=> 'dropdown',
                    'title'		=> esc_html__('Image Proportions', 'bridge'),
                    'options'	=> [
                        '' => esc_html__( 'Original', 'bridge-core' ),
                        'square' => esc_html__( 'Square', 'bridge-core' ),
                        'landscape' => esc_html__( 'Landscape', 'bridge-core' ),
                        'portrait' => esc_html__( 'Portrait', 'bridge-core' ),
                    ]
                ),
                array(
                    'name'		=> 'order_by',
                    'type'		=> 'dropdown',
                    'title'		=> esc_html__('Order By', 'bridge'),
                    'options'	=> [
                        '' => '',
                        'menu_order' => esc_html__( 'Menu Order', 'bridge-core' ),
                        'title' => esc_html__( 'Title', 'bridge-core' ),
                        'date' => esc_html__( 'Date', 'bridge-core' )
                    ]
                ),
                array(
                    'name'		=> 'order',
                    'type'		=> 'dropdown',
                    'title'		=> esc_html__('Order', 'bridge'),
                    'options'	=> [
                        '' => '',
                        'ASC' => esc_html__( 'ASC', 'bridge-core' ),
                        'DESC' => esc_html__( 'DESC', 'bridge-core' ),
                    ]
                ),
                array(
                    'name'		=> 'number',
                    'type'		=> 'textfield',
                    "description" => esc_html__( "Number of portfolios on page (-1 is all)", 'bridge-core' ),
                    'title'		=> esc_html__('Numbers', 'bridge')
                ),
                array(
                    'name'		=> 'category',
                    'type'		=> 'textfield',
                    "description" => esc_html__( "Category Slug (leave empty for all)", 'bridge-core' ),
                    'title'		=> esc_html__('Category', 'bridge')
                ),
                array(
                    'name'		=> 'selected_projects',
                    'type'		=> 'textfield',
                    "description" => esc_html__( "Selected Projects (leave empty for all, delimit by comma)", 'bridge-core' ),
                    'title'		=> esc_html__( "Selected Projects", 'bridge-core' ),
                ),
                array(
                    'name'		=> 'title_tag',
                    'type'		=> 'dropdown',
                    'title'		=> esc_html__( "Title Tag", 'bridge-core' ),
                    'options'   => [
                        "h2" => "h2",
                        "h3" => "h3",
                        "h4" => "h4",
                        "h5" => "h5",
                        "h6" => "h6",
                    ]
                ),
                array(
                    'name'		=> 'show_categories',
                    'type'		=> 'dropdown',
                    'title'		=> esc_html__( "Show Categories", 'bridge-core' ),
                    'options'   => bridge_qode_get_yes_no_select_array(true, true)
                ),
                array(
                    'name'		=> 'text_align',
                    'type'		=> 'dropdown',
                    'title'		=> esc_html__( "Text align", 'bridge-core' ),
                    'options'   => [
                        '' => '',
                        'left' => esc_html__( 'Left', 'bridge-core' ),
                        'center' => esc_html__( 'Center', 'bridge-core' ),
                        'right' => esc_html__( 'Right', 'bridge-core' ),
                    ]
                ),
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

            $params['box_border'] = 'no';
            $params['filter'] = 'no';
            $params['show_load_more'] = 'no';
            $params['show_title'] = 'yes';
            $params['portfolio_loading_type'] = 'portfolio_one_by_one';
            $params['portfolio_loading_type_masonry'] = 'portfolio_one_by_one';

            echo '<div class="widget qode_portfolio_list_widget">';

            echo bridge_qode_execute_shortcode('portfolio_list', $params);

            echo '</div>';

        }
    }
}