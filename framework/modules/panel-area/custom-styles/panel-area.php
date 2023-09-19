<?php

if(!function_exists('bridge_qode_panel_area_styles')) {
    /**
     * Generate styles for solid type buttons
     */
    function bridge_qode_panel_area_styles() {
        //solid styles
        $panel_selector = '.qode-panel-area';
        $panel_styles = array();

        if(bridge_qode_options()->getOptionValue('panel_area_background_color')) {
            $panel_styles['background-color'] = bridge_qode_options()->getOptionValue('panel_area_background_color');
        }

        echo bridge_qode_dynamic_css($panel_selector, $panel_styles);

    }

    add_action('bridge_qode_action_style_dynamic', 'bridge_qode_panel_area_styles');
}