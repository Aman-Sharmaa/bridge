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
    } else {
        echo '<ul>';
        wp_nav_menu(array('theme_location' => 'left-top-navigation',
            'container' => '',
            'container_class' => '',
            'menu_class' => '',
            'menu_id' => '',
            'fallback_cb' => '',
            'link_before' => '<span>',
            'link_after' => '</span>',
            'walker' => new BridgeQodeType4WalkerNavMenu(),
            'items_wrap' => '%3$s'
        ));
        wp_nav_menu(array('theme_location' => 'right-top-navigation',
            'container' => '',
            'container_class' => '',
            'menu_class' => '',
            'menu_id' => '',
            'fallback_cb' => '',
            'link_before' => '<span>',
            'link_after' => '</span>',
            'walker' => new BridgeQodeType4WalkerNavMenu(),
            'items_wrap' => '%3$s'
        ));
        echo '</ul>';
    }
	?>
</nav>