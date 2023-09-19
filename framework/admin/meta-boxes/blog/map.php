<?php
if(!function_exists('bridge_qode_map_blog_meta_fields')) {

	function bridge_qode_map_blog_meta_fields() {

		$qode_blog_categories = array();
		$categories = get_categories();
		foreach($categories as $category) {
			$qode_blog_categories[$category->term_id] = $category->name;
		}

		$qodeBlog = bridge_qode_create_meta_box(
			array(
				'scope' => array('page'),
				'title' => esc_html__('Qode Blog', 'bridge'),
				'name' => 'page_blog'
			)
		);

		$qode_choose_blog_category = new BridgeQodeMetaField("selectblank","qode_choose-blog-category","",esc_html__('Blog Category' ,'bridge'),esc_html__('Choose category of posts to display (leave empty to display all categories)','bridge'),$qode_blog_categories);
		$qodeBlog->addChild("qode_choose-blog-category",$qode_choose_blog_category);

		$qode_show_posts_per_page = new BridgeQodeMetaField("text","qode_show-posts-per-page","",esc_html__('Number of Posts' ,'bridge'),esc_html__('Enter the number of posts to display' ,'bridge'), array(), array("col_width" => 3));
		$qodeBlog->addChild("qode_show-posts-per-page",$qode_show_posts_per_page);

		$qode_enable_page_comments = new BridgeQodeMetaField("yesempty","qode_enable-page-comments","",esc_html__('Show Comments' ,'bridge'),esc_html__('Enabling this option will show comments on your page' ,'bridge'));
		$qodeBlog->addChild("qode_enable-page-comments",$qode_enable_page_comments);

	}

	add_action('bridge_qode_action_meta_boxes_map', 'bridge_qode_map_blog_meta_fields');
}