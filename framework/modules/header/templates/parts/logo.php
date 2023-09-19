<div class="<?php echo esc_attr( $wrapper_class ); ?>" <?php echo wp_kses_post( $logo_style ); ?>>
	<div class="<?php echo esc_attr( $image_class ); ?>">
		<a itemprop="url" href="<?php echo home_url('/'); ?>" <?php echo wp_kses_post( $logo_style ); ?>>
            <?php if($show_logo_image){ ?> <img itemprop="image" class="normal" src="<?php echo esc_url( $logo_image ); ?>" alt="<?php esc_html_e('Logo', 'bridge'); ?>"> <?php } ?>
			<?php if($show_logo_image_light){ ?> <img itemprop="image" class="light" src="<?php echo esc_url( $logo_image_light ); ?>" alt="<?php esc_html_e('Logo', 'bridge'); ?>"/> <?php } ?>
			<?php if($show_logo_image_dark){ ?> <img itemprop="image" class="dark" src="<?php echo esc_url( $logo_image_dark ); ?>" alt="<?php esc_html_e('Logo', 'bridge'); ?>"/> <?php } ?>
			<?php if($show_logo_image_sticky){ ?> <img itemprop="image" class="sticky" src="<?php echo esc_url( $logo_image_sticky ); ?>" alt="<?php esc_html_e('Logo', 'bridge'); ?>"/> <?php } ?>
			<?php if($show_logo_image_mobile){ ?> <img itemprop="image" class="mobile" src="<?php echo esc_url( $logo_image_mobile ); ?>" alt="<?php esc_html_e('Logo', 'bridge'); ?>"/> <?php } ?>
			<?php if($show_logo_image_popup && bridge_qode_options()->getOptionValue('enable_popup_menu') == 'yes'){ ?> <img itemprop="image" class="popup" src="<?php echo esc_url( $logo_image_popup ); ?>" alt="<?php esc_html_e('Logo', 'bridge'); ?>"/> <?php } ?>
		</a>
	</div>
	<?php if($show_logo_image_fixed_hidden) { ?>
        <div class="q_logo_hidden">
            <a itemprop="url" href="<?php echo esc_url(home_url('/')); ?>"><img itemprop="image" alt=<?php esc_html_e('Logo', 'bridge'); ?> src="<?php echo esc_url( $logo_image_fixed_hidden ); ?>" style="height: 100%;"></a>
        </div>
	<?php } ?>
</div>