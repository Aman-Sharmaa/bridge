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
								<?php echo bridge_qode_get_module_template_part('templates/mobile-menu/mobile-menu-button', 'header'); ?>
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
								<?php if(is_active_sidebar('header_fixed_right')){ ?>
									<div class="header_fixed_right_area">
										<?php dynamic_sidebar('header_fixed_right'); ?>
									</div>
								<?php } ?>
							</div>
							<div class="header_menu_bottom">
								<div class="header_menu_bottom_inner">
									<?php if($centered_logo) { ?>
									<div class="main_menu_header_inner_right_holder with_center_logo">
										<?php } else { ?>
										<div class="main_menu_header_inner_right_holder">
											<?php } ?>
											<nav class="main_menu drop_down">
												<?php
												wp_nav_menu( array(
													'theme_location' => 'top-navigation' ,
													'container'  => '',
													'container_class' => '',
													'menu_class' => 'clearfix',
													'menu_id' => '',
													'fallback_cb' => 'bridge_qode_top_navigation_fallback',
													'link_before' => '<span>',
													'link_after' => '</span>',
													'walker' => new BridgeQodeType1WalkerNavMenu()
												));
												?>
											</nav>
											<div class="header_inner_right">
												<div class="side_menu_button_wrapper right">
													<?php if(is_active_sidebar('header_bottom_right')) { ?>
														<div class="header_bottom_right_widget_holder"><?php dynamic_sidebar('header_bottom_right'); ?></div>
													<?php } ?>
													<?php if(is_active_sidebar('woocommerce_dropdown')) {
														dynamic_sidebar('woocommerce_dropdown');
													} ?>
													<div class="side_menu_button">
														<?php echo bridge_qode_get_module_template_part('templates/search/search-button', 'header', '', $params); ?>
														<?php echo bridge_qode_get_module_template_part('templates/popup-menu/popup-menu-button', 'header', '', $params); ?>
														<?php echo bridge_qode_get_module_template_part('templates/side-area/side-menu-button-link', 'header', '', $params); ?>
													</div>
												</div>
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
			</div>
		</div>

</header>