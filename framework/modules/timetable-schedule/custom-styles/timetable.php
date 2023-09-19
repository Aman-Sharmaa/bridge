<?php

if(!function_exists('bridge_qode_timetable_styles')) {

    function bridge_qode_timetable_styles() {
    	$column_heading_style = array();

		$color = bridge_qode_options()->getOptionValue('timetable_title_color');
		if($color !== '') {
			$column_heading_style['color'] = $color;
		}

		$font_size = bridge_qode_options()->getOptionValue('timetable_title_font_size');
		if($font_size !== '') {
			$column_heading_style['font-size'] = bridge_qode_filter_px($font_size).'px';
		}

		$font_family = bridge_qode_options()->getOptionValue('timetable_title_font_family');
		if(bridge_qode_is_font_option_valid($font_family)){
			$column_heading_style['font-family'] = bridge_qode_get_font_option_val($font_family);
		}
		
		$text_transform = bridge_qode_options()->getOptionValue('timetable_title_text_transform');
		if(!empty($text_transform)) {
			$column_heading_style['text-transform'] = $text_transform;
		}

		$font_style = bridge_qode_options()->getOptionValue('timetable_title_font_style');
		if(!empty($font_style)) {
			$column_heading_style['font-style'] = $font_style;
		}

		$letter_spacing = bridge_qode_options()->getOptionValue('timetable_title_letter_spacing');
		if($letter_spacing !== '') {
			$column_heading_style['letter-spacing'] = bridge_qode_filter_px($letter_spacing).'px';
		}

		$font_weight = bridge_qode_options()->getOptionValue('timetable_title_font_weight');
		if(!empty($font_weight)) {
			$column_heading_style['font-weight'] = $font_weight;
		}

		if (count($column_heading_style)){
			echo bridge_qode_dynamic_css('table.tt_timetable th, .tt_responsive .tt_timetable.small .box_header', $column_heading_style);
		}

		$timetable_heading_bckg_color = bridge_qode_options()->getOptionValue('timetable_title_bckg_color');
		if(!empty($timetable_heading_bckg_color)) {
			echo bridge_qode_dynamic_css('table.tt_timetable .row_gray', array('background-color' => $timetable_heading_bckg_color.'!important'));
		}

		$border_selector = array(
			'table.tt_timetable',
			'table.tt_timetable th',
			'table.tt_timetable thead tr',
			'table.tt_timetable td',
			'table.tt_timetable tbody tr',
			'table.tt_timetable .event:not(.tt_single_event) .event_container',
			'table.tt_timetable .tt_tooltip_content'
		);

        $border_color = bridge_qode_options()->getOptionValue('timetable_border_color');
        if(!empty($border_color)) {
			echo bridge_qode_dynamic_css($border_selector, array('border-color' => $border_color.'!important'));
			echo bridge_qode_dynamic_css('table.tt_timetable .tt_tooltip .tt_tooltip_arrow:before', array('border-color' => $border_color.' transparent'));
        }

		$timetable_odd_bckg_color = bridge_qode_options()->getOptionValue('timetable_odd_bckg_color');
		if(!empty($timetable_odd_bckg_color)) {
			echo bridge_qode_dynamic_css('table.tt_timetable tbody tr:nth-child(odd)', array('background-color' => $timetable_odd_bckg_color.'!important'));
		}

		$timetable_even_bckg_color = bridge_qode_options()->getOptionValue('timetable_even_bckg_color');
		if(!empty($timetable_even_bckg_color)) {
			echo bridge_qode_dynamic_css('table.tt_timetable tbody tr:nth-child(even)', array('background-color' => $timetable_even_bckg_color.'!important'));
		}

    }

    add_action('bridge_qode_action_style_dynamic', 'bridge_qode_timetable_styles');
}
