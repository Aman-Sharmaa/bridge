<nav class="mobile_menu">
	<?php
    if(has_nav_menu('mobile-navigation')) {
        wp_nav_menu(array('theme_location' => 'mobile-navigation',
            'container' => '',
            'container_class' => '',
            'menu_class' => '',
            'menu_id' => '',
            'fallback_cb' => 'bridge_qode_top_navigation_fallback',
            'link_before' => '<span>',
            'link_after' => '</span>',
            'walker' => new BridgeQodeType2WalkerNavMenu()
        ));
    } else{
        wp_nav_menu(array('theme_location' => 'top-navigation',
            'container' => '',
            'container_class' => '',
            'menu_class' => '',
            'menu_id' => '',
            'fallback_cb' => 'bridge_qode_top_navigation_fallback',
            'link_before' => '<span>',
            'link_after' => '</span>',
            'walker' => new BridgeQodeType2WalkerNavMenu()
        ));
    }
	?>
</nav>