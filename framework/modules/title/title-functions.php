<?php
if(!function_exists('bridge_qode_get_title')) {
	function bridge_qode_get_title() {

		$page_id              = bridge_qode_get_page_id();
		$show_title_area_meta = true;
		$show_title_area      = apply_filters( 'bridge_qode_filter_show_title_area', $show_title_area_meta );
		if($show_title_area){
			get_template_part( 'title' );
		}
	}
}
