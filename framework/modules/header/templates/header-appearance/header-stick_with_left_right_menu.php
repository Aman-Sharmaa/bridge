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
							<?php if($header_bottom_appearance == "stick_with_left_right_menu") { ?>
								<nav class="main_menu drop_down left_side">
									<?php
									wp_nav_menu( array( 'theme_location' => 'left-top-navigation' ,
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
									'logo_image_mobile' => true
								));
								?>
								<?php if($centered_logo) {
									dynamic_sidebar( 'header_right_from_logo' );
								} ?>
							</div>
							<?php if($header_bottom_appearance == "stick_with_left_right_menu") { ?>
								<nav class="main_menu drop_down right_side">
									<?php
									wp_nav_menu( array( 'theme_location' => 'right-top-navigation' ,
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
							<?php } ?>
							<?php echo bridge_qode_get_module_template_part('templates/mobile-menu/mobile-menu', 'header', 'stick-with-left-right-menu', $params); ?>

							<?php if($header_in_grid){ ?>
							<?php if($overlapping_content) {?></div><?php } ?>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>

</header>