<?php
if ( ! function_exists( 'bridge_qode_register_panel_area_opener_widget' ) ) {
    /**
     * Function that register call to action widget
     */
    function bridge_qode_register_panel_area_opener_widget( $widgets ) {
        $widgets[] = 'BridgeQodePanelAreaOpener';

        return $widgets;
    }

    add_filter( 'bridge_core_filter_register_widgets', 'bridge_qode_register_panel_area_opener_widget' );
}