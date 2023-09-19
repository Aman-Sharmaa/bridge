<header class="<?php echo esc_attr( $header_classes ); ?> page_header">
    <div class="header_inner clearfix">
		<?php echo bridge_qode_get_module_template_part('templates/search/search', 'header', 'fixed-top-header', $params); ?>
        <div class="header_top_bottom_holder">
			<?php if($display_header_top == "yes"){ ?>
                <div class="top_header clearfix" <?php echo wp_kses_post( $header_top_color_per_page ); ?> >
					<?php if($header_in_grid){ ?>
                    <div class="container">
                        <div class="container_inner clearfix">
							<?php if($overlapping_content) {?><div class="overlapping_content_margin"><?php } ?>
								<?php } ?>
                                <div class="left">
                                    <div class="inner">
                                        <nav class="main_menu drop_down right">
											<?php
											wp_nav_menu( array(
												'theme_location' => 'top-navigation' ,
												'container'  => '',
												'container_class' => '',
												'menu_class' => '',
												'menu_id' => '',
												'fallback_cb' => 'bridge_qode_top_navigation_fallback',
												'link_before' => '<span>',
												'link_after' => '</span>',
												'walker' => new BridgeQodeType1WalkerNavMenu()
											));
											?>
                                        </nav>
										<?php echo bridge_qode_get_module_template_part('templates/mobile-menu/mobile-menu-button', 'header'); ?>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="inner">
                                        <div class="side_menu_button_wrapper right">
                                            <div class="header_bottom_right_widget_holder">
												<?php
												dynamic_sidebar('header_right');
												?>
                                            </div>
											<?php if(is_active_sidebar('woocommerce_dropdown')) {
												dynamic_sidebar('woocommerce_dropdown');
											} ?>
                                            <div class="side_menu_button">
												<?php echo bridge_qode_get_module_template_part('templates/search/search-button', 'header', 'fixed-top-header', $params); ?>
												<?php echo bridge_qode_get_module_template_part('templates/side-area/side-menu-button-link', 'header', '', $params); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<?php echo bridge_qode_get_module_template_part('templates/mobile-menu/mobile-menu', 'header', '', $params); ?>
								<?php if($header_in_grid){ ?>
								<?php if($overlapping_content) {?></div><?php } ?>
                        </div>
                    </div>
				<?php } ?>
                </div>
			<?php } ?>
            <div class="bottom_header clearfix" <?php echo wp_kses_post( $header_color_per_page ); ?> >
				<?php if($header_in_grid){ ?>
                <div class="container">
                    <div class="container_inner clearfix">
						<?php if($overlapping_content) {?><div class="overlapping_content_margin"><?php } ?>
							<?php } ?>
                            <div class="header_inner_center">
								<?php
								echo bridge_qode_get_logo(array(
									'logo_image' => true,
									'logo_image_light' => true,
									'logo_image_dark' => true,
									'logo_image_mobile' => true,
                                    'logo_style' => 'height:'.($logo_height/2).'px'
								));
								?>
								<?php
								dynamic_sidebar('header_bottom_center');
								?>
                            </div>

							<?php if($header_in_grid){ ?>
							<?php if($overlapping_content) {?></div><?php } ?>
                    </div>
                </div>
			<?php } ?>
            </div>
        </div>
    </div>
</header>