<?php

if(bridge_qode_visual_composer_installed()) {

	if(!function_exists('bridge_qode_ttsingle_hours_vc_map')) {
		function bridge_qode_ttsingle_hours_vc_map() {
			vc_map(array(
				'name'                      => esc_html__('Timetable Event Hours', 'bridge'),
				'base'                      => 'tt_event_hours',
				'category'                  => esc_html__('by QODE', 'bridge'),
				'icon'                      => 'extended-custom-icon-qode icon-wpb-tt-event-hours',
				'show_settings_on_create'	=> false,
				'allowed_container_element' => 'vc_row'
			));
		}

		add_action('bridge_qode_action_vc_map', 'bridge_qode_ttsingle_hours_vc_map');
	}

	if(!function_exists('bridge_qode_ttsingle_info_holder')) {
		function bridge_qode_ttsingle_info_holder() {
			vc_map(array(
				"name"                    => esc_html__('Timetable Event Info Holder', 'bridge'),
				'base'                    => 'tt_items_list',
				'as_parent'               => array('only' => 'tt_item'),
				'content_element'         => true,
				'category'                => esc_html__('by QODE', 'bridge'),
				'icon'                    => 'extended-custom-icon-qode icon-wpb-tt-items-list',
				'show_settings_on_create' => false,
				'js_view'                 => 'VcColumnView'
			));
		}

		add_action('bridge_qode_action_vc_map', 'bridge_qode_ttsingle_info_holder');
	}

	if(!function_exists('bridge_qode_ttsingle_info_table_item')) {
		function bridge_qode_ttsingle_info_table_item() {
			vc_map(array(
				'name'                    => esc_html__('Timetable Event Info Table Item', 'bridge'),
				'base'                    => 'tt_item',
				'as_child'                => array('only' => 'tt_items_list'),
				'category'                => esc_html__('by QODE', 'bridge'),
				'icon'                    => 'extended-custom-icon-qode icon-wpb-tt-item',
				'show_settings_on_create' => true,
				'params'                  => array(
					array(
						'type'        => 'textfield',
						'heading'     => esc_html__('Label', 'bridge'),
						'param_name'  => 'content',
						'admin_label' => true
					),
					array(
						'type'        => 'textfield',
						'heading'     => esc_html__('Value', 'bridge'),
						'param_name'  => 'value',
						'admin_label' => true
					),
					array(
						'type'        => 'dropdown',
						'heading'     => esc_html__('Type', 'bridge'),
						'param_name'  => 'type',
						'admin_label' => true,
						'value'       => array(
							'Table' => 'info'
						),
						'save_always' => true
					),
				)
			));
		}

		add_action('bridge_qode_action_vc_map', 'bridge_qode_ttsingle_info_table_item');
	}

	class WPBakeryShortCode_Tt_Items_List extends WPBakeryShortCodesContainer {	}
}

