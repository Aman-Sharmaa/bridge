<?php

if(!function_exists('bridge_qode_inter_page_navigation_styles')) {

    function bridge_qode_inter_page_navigation_styles() {
    	$inter_page_navigation_style = array();

		$background_color = bridge_qode_options()->getOptionValue('inter_page_navigation_background_color');
		if($background_color !== '') {
			$inter_page_navigation_style['background-color'] = $background_color;
		}

		if (count($inter_page_navigation_style)){
			echo bridge_qode_dynamic_css('.qode-inter-page-navigation-holder, .qode-inter-page-navigation-holder .qode-inter-page-navigation-back-link-inner:after', $inter_page_navigation_style);
		}

    }

    add_action('bridge_qode_action_style_dynamic', 'bridge_qode_inter_page_navigation_styles');
}
