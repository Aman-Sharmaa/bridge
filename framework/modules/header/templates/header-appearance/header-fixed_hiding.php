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
								<?php if($centered_logo) {
									dynamic_sidebar( 'header_left_from_logo' );
								} ?>
								<?php echo bridge_qode_get_module_template_part('templates/mobile-menu/mobile-menu-button', 'header'); ?>
								<?php
								echo bridge_qode_get_logo(array(
									'logo_image' => true,
									'logo_image_light' => true,
									'logo_image_dark' => true,
									'logo_image_sticky' => true,
									'logo_image_popup' => true,
									'logo_image_fixed_hidden' => true,
									'logo_image_mobile' => true
								));
								?>
								<?php if($centered_logo) {
									dynamic_sidebar( 'header_right_from_logo' );
								} ?>
							</div>
							<?php if($header_bottom_appearance == "fixed_hiding") { ?> <div class="holeder_for_hidden_menu"> <?php } //only for fixed with hiding menu ?>
							<?php if(!$centered_logo) { ?>
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
							<?php } ?>

							<?php if($centered_logo == true && $enable_search_left_sidearea_right == true ) { ?>
								<div class="header_inner_right left_side">
									<div class="side_menu_button_wrapper">
										<div class="side_menu_button">
											<?php echo bridge_qode_get_module_template_part('templates/search/search-button', 'header', '', $params); ?>
										</div>
									</div>
								</div>
							<?php } ?>

							<nav class="main_menu drop_down <?php echo esc_attr($menu_position); ?>">
								<?php
								wp_nav_menu( array( 'theme_location' => 'top-navigation' ,
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
							<?php if($centered_logo) { ?>
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
							<?php } ?>
							<?php if($header_bottom_appearance == "fixed_hiding") { ?> </div> <?php } //only for fixed with hiding menu ?>
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