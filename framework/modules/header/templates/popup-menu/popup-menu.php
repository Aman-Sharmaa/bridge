<?php
if($enable_popup_menu == "yes"){ 
	$popup_menu_background_image = bridge_qode_options()->getOptionValue('popup_menu_background_image');
	$holder_classes = "";
	if($popup_menu_background_image != ""){
		$holder_classes .= " with_background_image";
	}?>
    <div class="popup_menu_holder_outer">
        <div class="popup_menu_holder <?php echo esc_attr( $holder_classes ); ?>" <?php if($popup_menu_background_image != ""){ echo 'style="background-image:url('.$popup_menu_background_image.');"'; } ?>>
            <div class="popup_menu_holder_inner">
                <nav class="popup_menu">
					<?php
					wp_nav_menu( array( 'theme_location' => 'popup-navigation' ,
						'container'  => '',
						'container_class' => '',
						'menu_class' => '',
						'menu_id' => '',
						'fallback_cb' => 'bridge_qode_top_navigation_fallback',
						'link_before' => '<span>',
						'link_after' => '</span>',
						'walker' => new BridgeQodeType3WalkerNavMenu()
					));
					?>
                </nav>
				<?php
				//Sidearea under menu
				if(is_active_sidebar('fullscreen_menu_area_widget')) : ?>
                    <div class="popup_menu_widget_holder"><div>
							<?php dynamic_sidebar('fullscreen_menu_area_widget'); ?>
                        </div></div>
				<?php endif;
				?>
            </div>
        </div>
    </div>
<?php } ?>