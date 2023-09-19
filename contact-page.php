<?php 
/*
Template Name: Contact Page
*/ 
?>

<?php
$bridge_qode_id = bridge_qode_get_page_id();
get_header();

$bridge_qode_hide_contact_form_website = "";
if (isset($bridge_qode_options['hide_contact_form_website'])) $bridge_qode_hide_contact_form_website = $bridge_qode_options['hide_contact_form_website'];

if(get_post_meta($bridge_qode_id, "qode_page_background_color", true) != ""){
	$bridge_qode_background_color = get_post_meta($bridge_qode_id, "qode_page_background_color", true);
}else{
	$bridge_qode_background_color = "";
}

if($bridge_qode_options['enable_google_map'] == "yes"){
	$bridge_qode_container_class= " full_map";
} else {
	$bridge_qode_container_class= "";
}
$bridge_qode_show_section = "yes";
if(isset($bridge_qode_options['section_between_map_form'])) {
	$bridge_qode_show_section = $bridge_qode_options['section_between_map_form'];
}
$bridge_qode_map_form_section_position = "center";
$bridge_qode_map_form_section_position_class = " contact_section_position_center";
if(isset($bridge_qode_options['section_between_map_form_position']) && $bridge_qode_options['section_between_map_form_position'] != "") {
	$bridge_qode_map_form_section_position = $bridge_qode_options['section_between_map_form_position'];
	$bridge_qode_map_form_section_position_class = " contact_section_position_" . $bridge_qode_options['section_between_map_form_position'];
}

$bridge_qode_content_style_spacing = "";
if(get_post_meta($bridge_qode_id, "qode_margin_after_title", true) != ""){
	if(get_post_meta($bridge_qode_id, "qode_margin_after_title_mobile", true) == 'yes'){
		$bridge_qode_content_style_spacing = "padding-top:".esc_attr(get_post_meta($bridge_qode_id, "qode_margin_after_title", true))."px !important";
	}else{
		$bridge_qode_content_style_spacing = "padding-top:".esc_attr(get_post_meta($bridge_qode_id, "qode_margin_after_title", true))."px";
	}
}

$bridge_qode_enable_contact_page_acceptance = bridge_qode_options()->getOptionValue('enable_contact_page_acceptance');

?>
	
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
			
		<?php get_template_part( 'title' ); ?>
		<?php if($bridge_qode_options['enable_google_map'] == "yes"){ ?>
			<div class="google_map_holder">
				<?php
					$bridge_qode_google_maps_scroll_wheel = false;
					if(isset($bridge_qode_options['google_maps_scroll_wheel'])){
						if ($bridge_qode_options['google_maps_scroll_wheel'] == "yes")
							$bridge_qode_google_maps_scroll_wheel = true;
					}
					if(!$bridge_qode_google_maps_scroll_wheel){
				?>
					<div class="google_map_ovrlay"></div>
				<?php } ?>
				<div class="google_map" id="map_canvas"></div>
			</div>
		<?php } ?>
		<div class="container"<?php if($bridge_qode_background_color != "") { echo " style='background-color:". $bridge_qode_background_color ."'";} ?>>
		<div class="container_inner<?php echo esc_attr( $bridge_qode_container_class ); ?> default_template_holder clearfix"  <?php bridge_qode_inline_style($bridge_qode_content_style_spacing); ?>>
				<div class="contact_detail">
					<?php if($bridge_qode_show_section == "yes") { ?>
						<div class="contact_section<?php echo esc_attr( $bridge_qode_map_form_section_position_class); ?>">
							<h2><?php if(isset( $bridge_qode_options['contact_section_above_form_title']) && $bridge_qode_options['contact_section_above_form_title'] != "") {
							echo esc_attr( $bridge_qode_options['contact_section_above_form_title'] );  } else { ?><?php esc_html_e('Get in touch with us', 'bridge'); ?><?php } ?></h2>
							<div class="separator small <?php echo esc_attr( $bridge_qode_map_form_section_position ); ?>"></div>
							<h4><?php if(isset( $bridge_qode_options['contact_section_above_form_subtitle']) && $bridge_qode_options['contact_section_above_form_subtitle'] != "") {
							echo esc_attr( $bridge_qode_options['contact_section_above_form_subtitle'] );  } else { ?><?php esc_html_e('Say Hello! Don\'t be shy.', 'bridge'); ?><?php } ?></h4>
						</div>
					<?php } ?>
					<?php if($bridge_qode_options['enable_contact_form'] == "yes"){ ?>
					<div class="two_columns_33_66 clearfix grid2">
						<div class="column1">
							<div class="column_inner">
								<div class="contact_info">
									<?php the_content(); ?>
								</div>	
							</div>
						</div>
						<div class="column2">
							<div class="column_inner">
								<div class="contact_form">
									<h5><?php if($bridge_qode_options['contact_heading_above'] != "") { echo esc_attr( $bridge_qode_options['contact_heading_above'] );  } else { ?><?php esc_html_e('Contact Us', 'bridge'); ?><?php } ?></h5>
									<form id="contact-form" method="post" class="qode-contact-form-contact-template<?php if(!empty($bridge_qode_enable_contact_page_acceptance) && $bridge_qode_enable_contact_page_acceptance == 'yes'){ echo ' qode-contact-form-contact-with-acceptance'; } ?> " action="" data-required-message = "<?php esc_html_e('This is a required field', 'bridge'); ?>" data-wrong-email-message = "<?php esc_html_e('Please enter a valid email address.', 'bridge'); ?>">
										<?php wp_nonce_field('bridge_qode_contact_page_nonce', 'bridge_qode_contact_page_nonce'); ?>
										<div class="two_columns_50_50 clearfix">
											<div class="column1">
												<div class="column_inner">
													<input type="text" class="requiredField" name="fname" id="fname" value="" placeholder="<?php esc_html_e('First Name *', 'bridge'); ?>" />
													
												</div>
											</div>
											<div class="column2">
												<div class="column_inner">
													<input type="text" class="requiredField" name="lname" id="lname" value="" placeholder="<?php esc_html_e('Last Name *', 'bridge'); ?>" />
												</div>
											</div>
										</div>
										<?php if ($bridge_qode_hide_contact_form_website == "yes") { ?>
											<div class="website_field_holder">
												<input type="text" class="requiredField email" name="email" id="email" value="" placeholder="<?php esc_html_e('Email *', 'bridge'); ?>" />
												<input type="hidden" name="website" id="website" value="" />
											</div>

										<?php } else { ?>
										<div class="two_columns_50_50 clearfix">
											<div class="column1">
												<div class="column_inner">
													<input type="text" class="requiredField email" name="email" id="email" value="" placeholder="<?php esc_html_e('Email *', 'bridge'); ?>" />
													
												</div>
											</div>
											<div class="column2">
												<div class="column_inner">
													<input type="text" name="website" id="website" value="" placeholder="<?php esc_html_e('Website', 'bridge'); ?>" />
												</div>
											</div>
										</div>
										<?php }?>
										<textarea name="message" id="message" rows="10" placeholder="<?php esc_html_e('Message', 'bridge'); ?>"></textarea>
										<?php if(bridge_qode_options()->getOptionValue('use_recaptcha') && bridge_qode_options()->getOptionValue('recaptcha_public_key') != '') { ?>
											<div id="qode-captcha-element-holder" data-sitekey="<?php echo bridge_qode_options()->getOptionValue('recaptcha_public_key'); ?>"></div>
										<?php } ?>
                                        <?php
                                            $qode_contact_page_acceptance_text = bridge_qode_options()->getOptionValue('qode_contact_page_acceptance_text');
                                            if( !empty($bridge_qode_enable_contact_page_acceptance) && $bridge_qode_enable_contact_page_acceptance == 'yes'){
                                                ?>
                                                <p class="contact_form_acceptance"> <?php
                                                    if($qode_contact_page_acceptance_text == ''){
                                                        echo esc_html__('I accept the terms and agreements', 'bridge');
                                                    }
                                                    else{
                                                        echo wp_kses($qode_contact_page_acceptance_text, '', '');
                                                    }
                                                ?> <input class="contact_form_acceptance_value" type="checkbox"/> </p>
                                                <?php
                                            }

                                        ?>
										<span class="submit_button_contact">
											<input class="qbutton contact_form_button" type="submit" value="<?php esc_html_e('Contact Us', 'bridge'); ?>" />
										</span>
									</form>	
								</div>
	
							</div>
						</div>
					</div>
					<?php }  else { ?>
						<div class="contact_info">
							<?php the_content(); ?>
						</div>
					<?php } ?>
				</div>	
		</div>	
	</div>	
		
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>			