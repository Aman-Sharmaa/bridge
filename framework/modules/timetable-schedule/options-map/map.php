<?php 
if(!function_exists('bridge_qode_timetable_map')) {
    /**
     * Add Timetable options
     */
   function bridge_qode_timetable_map() {

		bridge_qode_add_admin_page(
			array(
				'slug' => '_timetable_page',
				'title' => esc_html__('Timetable','bridge'),
				'icon' => 'fa fa-calendar'
			)
		);

       $panel_single = bridge_qode_add_admin_panel(array(
           'title' => esc_html__('Events Single','bridge'),
           'name'  => 'panel_timetable_single',
           'page'  => '_timetable_page'
       ));

       //Single Event options
       
       bridge_qode_add_admin_field(array(
           'parent'        => $panel_single,
           'type'          => 'select',
           'name'          => 'event_single_sidebar_layout',
           'default_value' => 'default',
           'label'         => esc_html__('Sidebar Layout','bridge'),
           'description'   => esc_html__('Choose a sidebar layout for single event pages','bridge'),
           'options'       => array(
           		"default" => esc_html__("No Sidebar",'bridge'),
	            "1" => esc_html__("Sidebar 1/3 right",'bridge'),
	            "2" => esc_html__("Sidebar 1/4 right",'bridge'),
	            "3" => esc_html__("Sidebar 1/3 left",'bridge'),
	            "4" => esc_html__("Sidebar 1/4 left",'bridge')
           	)
   		));

        $custom_sidebars = array();
        foreach ($GLOBALS['wp_registered_sidebars'] as $sidebar) {
            if (bridge_qode_is_user_made_sidebar(ucwords($sidebar['name']))) {
                $custom_sidebars[$sidebar['id']] = ucwords($sidebar['name']);
            }
        }

		bridge_qode_add_admin_field(array(
			'parent'        => $panel_single,
			'type'          => 'select',
			'name'          => 'event_single_sidebar_custom_display',
			'default_value' => '',
			'label'         => esc_html__('Sidebar to Display','bridge'),
			'description'   => esc_html__('Choose a sidebar to display on single event pages','bridge'),
			'options'       => $custom_sidebars
		));

       $panel = bridge_qode_add_admin_panel(array(
           'title' => esc_html__('Timetable Shortcode','bridge'),
           'name'  => 'panel_timetable',
           'page'  => '_timetable_page'
       ));

       //Typography options
       bridge_qode_add_admin_section_title(array(
			'name' => 'typography_section_title',
			'title' => esc_html__('Typography','bridge'),
			'parent' => $panel
       ));

		$heading_typography_group = bridge_qode_add_admin_group(array(
			'name' => 'heading_typography_group',
			'title' => esc_html__('Columns Heading Typography','bridge'),
			'description' => esc_html__('Setup typography for columns heading','bridge'),
			'parent' => $panel
		));

       $heading_typography_row = bridge_qode_add_admin_row(array(
           'name' => 'heading_typography_row',
           'next' => true,
           'parent' => $heading_typography_group
       ));

       bridge_qode_add_admin_field(array(
           'parent'        => $heading_typography_row,
           'type'          => 'textsimple',
           'name'          => 'timetable_title_font_size',
           'default_value' => '',
           'label'         => esc_html__('Font Size (px)','bridge')
       ));

       bridge_qode_add_admin_field(array(
           'parent'        => $heading_typography_row,
           'type'          => 'fontsimple',
           'name'          => 'timetable_title_font_family',
           'default_value' => '',
           'label'         => esc_html__('Font Family','bridge'),
       ));

       bridge_qode_add_admin_field(array(
           'parent'        => $heading_typography_row,
           'type'          => 'selectsimple',
           'name'          => 'timetable_title_text_transform',
           'default_value' => '',
           'label'         => esc_html__('Text Transform','bridge'),
           'options'       => bridge_qode_get_text_transform_array()
       ));

       bridge_qode_add_admin_field(array(
           'parent'        => $heading_typography_row,
           'type'          => 'selectsimple',
           'name'          => 'timetable_title_font_style',
           'default_value' => '',
           'label'         => esc_html__('Font Style','bridge'),
           'options'       => bridge_qode_get_font_style_array()
       ));

       $heading_typography_row2 = bridge_qode_add_admin_row(array(
           'name' => 'heading_typography_row2',
           'next' => true,
           'parent' => $heading_typography_group
       ));		
		
       bridge_qode_add_admin_field(array(
           'parent'        => $heading_typography_row2,
           'type'          => 'textsimple',
           'name'          => 'timetable_title_letter_spacing',
           'default_value' => '',
           'label'         => esc_html__('Letter Spacing (px)','bridge'),
       ));

       bridge_qode_add_admin_field(array(
           'parent'        => $heading_typography_row2,
           'type'          => 'selectsimple',
           'name'          => 'timetable_title_font_weight',
           'default_value' => '',
           'label'         => esc_html__('Font Weight','bridge'),
           'options'       => bridge_qode_get_font_weight_array(true)
       ));
		
		//Initial Timetable Color Styles
		
		bridge_qode_add_admin_section_title(array(
           'name' => 'accordion_color_section_title',
           'title' => esc_html__('Color Styles','bridge'),
           'parent' => $panel
       ));
		
		$timetable_heading_color_group = bridge_qode_add_admin_group(array(
			'name' => 'timetable_heading_color_group',
			'title' => esc_html__('Heading Color Styles','bridge'),
			'description' => esc_html__('Set color styles for timetable heading','bridge'),
			'parent' => $panel
		));

        $timetable_heading_color_row = bridge_qode_add_admin_row(array(
            'name' => 'timetable_heading_color_row',
            'next' => true,
            'parent' => $timetable_heading_color_group
        ));

		bridge_qode_add_admin_field(array(
			'parent'        => $timetable_heading_color_row,
			'type'          => 'colorsimple',
			'name'          => 'timetable_title_color',
			'default_value' => '',
			'label'         => esc_html__('Color', 'bridge'),
			'description'   => ''
		));

		bridge_qode_add_admin_field(array(
			'parent'        => $timetable_heading_color_row,
			'type'          => 'colorsimple',
			'name'          => 'timetable_title_bckg_color',
			'default_value' => '',
			'label'         => esc_html__('Background Color', 'bridge'),
			'description'   => ''
		));

		$timetable_color_group = bridge_qode_add_admin_group(array(
			'name' => 'timetable_color_group',
			'title' => esc_html__('Timetable Color Styles','bridge'),
			'description' => esc_html__('Set color styles for timetable','bridge'),
			'parent' => $panel
		));

        $timetable_color_row = bridge_qode_add_admin_row(array(
            'name' => 'timetable_color_row',
            'next' => true,
            'parent' => $timetable_color_group
        ));

		bridge_qode_add_admin_field(array(
			'parent'        => $timetable_color_row,
			'type'          => 'colorsimple',
			'name'          => 'timetable_border_color',
			'default_value' => '',
			'label'         => esc_html__('Border Color', 'bridge'),
			'description'   => ''
		));

        bridge_qode_add_admin_field(array(
            'parent'        => $timetable_color_row,
            'type'          => 'colorsimple',
            'name'          => 'timetable_odd_bckg_color',
            'default_value' => '',
            'label'         => esc_html__('Odd Rows Background Color', 'bridge')
        ));

		bridge_qode_add_admin_field(array(
			'parent'        => $timetable_color_row,
			'type'          => 'colorsimple',
			'name'          => 'timetable_even_bckg_color',
			'default_value' => '',
			'label'         => esc_html__('Even Rows Background Color', 'bridge')
		));
       
   }
   add_action('bridge_qode_action_options_map', 'bridge_qode_timetable_map',115);
}