<header class="<?php echo esc_attr( $header_classes ); ?> page_header">
    <div class="header_inner clearfix">
		<?php echo bridge_qode_get_module_template_part('templates/search/search', 'header', '', $params); ?>
        <div class="header_top_bottom_holder">
			<?php echo bridge_qode_get_module_template_part('templates/header-top/header-top', 'header', '', $params); ?>
            <div class="header_bottom clearfix" <?php echo wp_kses_post( $header_color_per_page ); ?> >
				<?php if($header_in_grid){ ?>
                <div class="container">
                    <div class="container_inner clearfix">
						<?php if($overlapping_content) {?><div class="overlapping_content_margin"><?php } ?>
							<?php } ?>
                            <div class="header_inner_left">
                                <div class="side_menu_button_wrapper left">
                                    <div class="side_menu_button">
										<?php echo bridge_qode_get_module_template_part('templates/popup-menu/popup-menu-button', 'header', '', $params); ?>
                                    </div>
                                </div>
                            </div>
							<?php
							echo bridge_qode_get_logo(array(
								'logo_image' => true,
								'logo_image_light' => true,
								'logo_image_dark' => true,
								'logo_image_sticky' => true,
								'logo_image_popup' => true,
								'logo_image_mobile' => true
							));
							?>
                            <div class="header_inner_right">
                                <div class="side_menu_button_wrapper right">
									<?php if(is_active_sidebar('woocommerce_dropdown')) {
										dynamic_sidebar('woocommerce_dropdown');
									} ?>

                                    <div class="side_menu_button">
										<?php echo bridge_qode_get_module_template_part('templates/search/search-button', 'header', '', $params); ?>
                                    </div>
                                </div>
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