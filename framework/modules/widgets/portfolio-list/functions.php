<?php
if ( ! function_exists( 'bridge_qode_register_portfolio_list_widget' ) ) {
    /**
     * Function that register call to action widget
     */
    function bridge_qode_register_portfolio_list_widget( $widgets ) {
        $widgets[] = 'BridgeQodePortfolioList';

        return $widgets;
    }

    add_filter( 'bridge_core_filter_register_widgets', 'bridge_qode_register_portfolio_list_widget' );
}