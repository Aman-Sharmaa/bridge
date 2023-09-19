<?php

if(!function_exists('bridge_qode_breadcrumbs_styles')) {

    function bridge_qode_breadcrumbs_styles() {

        $selector = '.breadcrumb, .breadcrumb .current, .breadcrumb a';

        $breadcrumb_style = array();


		$breadcrumbs_font_size = bridge_qode_options()->getOptionValue('breadcrumbs_font_size');
		if(!empty($breadcrumbs_font_size)) {
			$breadcrumb_style['font-size'] = $breadcrumbs_font_size.'px';
		}

		$breadcrumbs_line_height = bridge_qode_options()->getOptionValue('breadcrumbs_line_height');
		if(!empty($breadcrumbs_line_height)) {
			$breadcrumb_style['line-height'] = $breadcrumbs_line_height.'px';
		}

		$breadcrumbs_text_transform = bridge_qode_options()->getOptionValue('breadcrumbs_transform');
		if(!empty($breadcrumbs_text_transform)) {
			$breadcrumb_style['text-transform'] = $breadcrumbs_text_transform;
		}

		$breadcrumbs_font_family = bridge_qode_options()->getOptionValue('breadcrumbs_font_family');
		if(bridge_qode_is_font_option_valid($breadcrumbs_font_family)) {
			$breadcrumb_style['font-family'] = bridge_qode_get_font_option_val($breadcrumbs_font_family);
		}

		$breadcrumbs_font_style = bridge_qode_options()->getOptionValue('breadcrumbs_font_style');
		if(!empty($breadcrumbs_font_style)) {
			$breadcrumb_style['font-style'] = $breadcrumbs_font_style;
		}

		$breadcrumbs_font_weight = bridge_qode_options()->getOptionValue('breadcrumbs_font_weight');
		if(!empty($breadcrumbs_font_weight)) {
			$breadcrumb_style['font-weight'] = $breadcrumbs_font_weight;
		}

		$breadcrumbs_letter_spacing = bridge_qode_options()->getOptionValue('breadcrumbs_letter_spacing');
		if($breadcrumbs_letter_spacing != '') {
			$breadcrumb_style['letter-spacing'] = $breadcrumbs_letter_spacing.'px';
		}

        echo bridge_qode_dynamic_css($selector, $breadcrumb_style);

    }

    add_action('bridge_qode_action_style_dynamic', 'bridge_qode_breadcrumbs_styles');
}
