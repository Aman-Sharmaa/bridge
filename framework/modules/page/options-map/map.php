<?php 
if(!function_exists('bridge_qode_page_map')) {
    /**
     * Add Timetable options
     */
   function bridge_qode_page_map() {

		bridge_qode_add_admin_page(
			array(
				'slug' => '_page_page',
				'title' => esc_html__('Page','bridge'),
				'icon' => 'fa fa-file-o'
			)
		);

       $panel_single = bridge_qode_add_admin_panel(array(
           'title' => esc_html__('Page Single','bridge'),
           'name'  => 'panel_page_single',
           'page'  => '_page_page'
       ));

	   bridge_qode_add_admin_field(array(
		   'parent'        => $panel_single,
		   'type'          => 'yesno',
		   'name'          => 'inter_page_navigation',
		   'default_value' => 'no',
		   'label'         => esc_html__('Inter-Page Navigation','bridge'),
		   'description'   => esc_html__('Enabling this option will add a navigation section to the bottom of your page with "Previous" and "Next" buttons, which users can use to navigate through your pages. Please note that the navigation will only lead through pages in the same hierarchical level (e.g. if you have a parent page called "Home" and then 3 child pages on which you have enabled the navigation, it will only lead through the child pages).','bridge'),
		   'args' => array(
			   'dependence' => true,
			   'dependence_hide_on_yes' => '',
			   'dependence_show_on_yes' => '#qodef_qode_inter_page_container'
		   )
	   ));

	   $inter_page_container = bridge_qode_add_admin_container(
		   array(
			   'name' => 'qode_inter_page_container',
			   'hidden_property' => 'inter_page_navigation',
			   'hidden_value' => 'no',
			   'parent' => $panel_single,
		   )
	   );

	   bridge_qode_add_admin_field(array(
		   'parent'        => $inter_page_container,
		   'type'          => 'yesno',
		   'name'          => 'inter_page_navigation_in_grid',
		   'default_value' => 'no',
		   'label'         => esc_html__('In Grid', 'bridge'),
		   'description'   => esc_html__('Set this option to "Yes" if you would like the inter-page navigation to be placed in grid.', 'bridge')
	   ));

	   bridge_qode_add_admin_field(array(
		   'parent'        => $inter_page_container,
		   'type'          => 'color',
		   'name'          => 'inter_page_navigation_background_color',
		   'default_value' => '',
		   'label'         => esc_html__('Background Color', 'bridge')
	   ));

	   bridge_qode_add_admin_field(array(
		   'parent'        => $inter_page_container,
		   'type'          => 'yesno',
		   'name'          => 'inter_page_icons_gradient',
		   'default_value' => 'no',
		   'label'         => esc_html__('Enable Icon Gradient','bridge')
	   ));

	   $qode_pages = array(
		   'no-link' => esc_html__('No Link', 'bridge')
	   );
	   $pages = get_pages();
	   foreach($pages as $page) {
		   $qode_pages[$page->ID] = $page->post_title;
	   }

	   bridge_qode_add_admin_field(array(
		   'parent'        => $inter_page_container,
		   'type'          => 'select',
		   'name'          => 'inter_page_back_link',
		   'default_value' => 'no-link',
		   'label'         => esc_html__('"Back To" Link','bridge'),
		   'description'	=> esc_html__('Choose a page for the "back to" link to lead to when clicked on.', 'bridge'),
		   'options'       => $qode_pages
	   ));
	   bridge_qode_add_admin_field(array(
		   'parent'			=> $inter_page_container,
		   'type'			=> 'select',
		   'name'			=> 'inter_page_order_by',
		   'default_value'	=> 'post_title',
		   'label'			=> esc_html__('Order By','bridge'),
		   'description'	=> esc_html__('Choose order for pages', 'bridge'),
		   'options'		=> array(
			   'post_title'	=> esc_html__('Title','bridge'),
			   'menu_order' => esc_html__('Menu Order','bridge'),
			   'post_date'	=> esc_html__('Date','bridge')
		   )
	   ));

	   /***************** Additional Page Layout - start *****************/

	   do_action( 'bridge_qode_action_additional_page_options_map' );

	   /***************** Additional Page Layout - end *****************/

   }
   add_action('bridge_qode_action_options_map', 'bridge_qode_page_map', 100);
}