<?php
$vertical_menu_style = "toggle";
$vertical_area_scroll = "";
if(bridge_qode_options()->getOptionValue('vertical_area_submenu_opening_type') != "") {
	switch (bridge_qode_options()->getOptionValue('vertical_area_submenu_opening_type')) {
		case 'on_click':
			$vertical_menu_style = "on_click";
			break;
		case 'float':
			$vertical_menu_style = "float";
			break;
		default:
			$vertical_menu_style = "toggle";
			break;
	}
}
if ($vertical_menu_style !== 'float') {
	$vertical_area_scroll = " with_scroll";
}

$page_vertical_area_background = "";
if(get_post_meta($id, "qode_page_vertical_area_background", true) != ""){
	$page_vertical_area_background = 'style="background-color:'.get_post_meta($id, "qode_page_vertical_area_background", true).';"';
}

$vertically_center_content = '';
if(bridge_qode_options()->getOptionValue('vertical_area_vertically_center_content') == 'yes'){
	$vertically_center_content = 'vertically_center_content';
}
?>
<aside class="vertical_menu_area<?php echo esc_attr($vertical_area_scroll); ?> <?php echo esc_attr($header_style); ?> <?php echo esc_attr($vertically_center_content); ?>" <?php echo wp_kses_post($page_vertical_area_background); ?>>
    <div class="vertical_menu_area_inner">
        <?php if(bridge_qode_options()->getOptionValue('vertical_area_type') == 'hidden') { ?>
            <a href="#" class="vertical_menu_hidden_button">
                <span class="vertical_menu_hidden_button_line"></span>
            </a>
        <?php } ?>

        <div class="vertical_area_background" <?php if($vertical_area_background_image != ""){ echo 'style="background-image:url('.$vertical_area_background_image.');"'; } ?>></div>
		<?php
		echo bridge_qode_get_logo(array(
			'logo_image' => true,
			'logo_image_light' => true,
			'logo_image_dark' => true,
            'wrapper_class' => 'vertical_logo_wrapper',
		    'image_class' => 'q_logo_vertical'
		));
		?>

        <nav class="vertical_menu dropdown_animation vertical_menu_<?php echo esc_attr( $vertical_menu_style ); ?>">
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
        <div class="vertical_menu_area_widget_holder">
            <?php dynamic_sidebar('vertical_menu_area'); ?>
        </div>
    </div>
</aside>
<?php if(bridge_qode_options()->getOptionValue('vertical_area_type') && bridge_qode_options()->getOptionValue('vertical_logo_bottom') !== '') { ?>
    <div class="vertical_menu_area_bottom_logo">
        <div class="vertical_menu_area_bottom_logo_inner">
            <a href="javascript: void(0)">
                <img itemprop="image" src="<?php echo esc_url(bridge_qode_options()->getOptionValue('vertical_logo_bottom')); ?>" alt="<?php esc_html_e('vertical_menu_area_bottom_logo', 'bridge'); ?>"/>
            </a>
        </div>
    </div>
<?php } ?>

<header class="page_header <?php if($display_header_top == "yes"){ echo 'has_top'; }  if($header_top_area_scroll == "yes"){ echo ' scroll_top'; }?> <?php if($centered_logo){ echo " centered_logo"; } ?> <?php echo esc_attr( $header_bottom_appearance ); ?>  <?php echo esc_attr( $header_style ); ?> <?php if(is_active_sidebar('header_fixed_right')) { echo 'has_header_fixed_right'; } ?>">
    <div class="header_inner clearfix">
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
                        </div>
						<?php if($header_in_grid){ ?>
						<?php if($overlapping_content) {?></div><?php } ?>
                </div>
            </div>
		<?php } ?>
        <?php echo bridge_qode_get_module_template_part('templates/mobile-menu/mobile-menu', 'header', '', $params); ?>
        </div>
    </div>
</header>
