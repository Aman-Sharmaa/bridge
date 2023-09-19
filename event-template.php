<?php
$bridge_qode_options = bridge_qode_return_global_options();
$bridge_qode_id = bridge_qode_get_page_id();

$bridge_qode_sidebar = get_post_meta($bridge_qode_id, "qode_show-sidebar", true);
$bridge_qode_default_array = array('default', '');

if(in_array($bridge_qode_sidebar, $bridge_qode_default_array)){
	$bridge_qode_sidebar = $bridge_qode_options['event_single_sidebar_layout'];
}

if(get_post_meta($bridge_qode_id, "qode_page_background_color", true) != ""){
	$bridge_qode_background_color = get_post_meta($bridge_qode_id, "qode_page_background_color", true);
}else{
	$bridge_qode_background_color = "";
}

$bridge_qode_content_style_spacing = "";
if(get_post_meta($bridge_qode_id, "qode_margin_after_title", true) != ""){
	if(get_post_meta($bridge_qode_id, "qode_margin_after_title_mobile", true) == 'yes'){
		$bridge_qode_content_style_spacing = "padding-top:".esc_attr(get_post_meta($bridge_qode_id, "qode_margin_after_title", true))."px !important";
	}else{
		$bridge_qode_content_style_spacing = "padding-top:".esc_attr(get_post_meta($bridge_qode_id, "qode_margin_after_title", true))."px";
	}
}

if ( get_query_var('paged') ) { $bridge_qode_paged = get_query_var('paged'); }
elseif ( get_query_var('page') ) { $bridge_qode_paged = get_query_var('page'); }
else { $bridge_qode_paged = 1; }

?>
<?php get_header(); ?>
<?php get_template_part( 'title' ); ?>
<?php get_template_part( 'slider' ); ?>
	<div class="container"<?php if($bridge_qode_background_color != "") { echo " style='background-color:". $bridge_qode_background_color ."'";} ?>>
		<?php if(isset($bridge_qode_options['overlapping_content']) && $bridge_qode_options['overlapping_content'] == 'yes') {?>
		<div class="overlapping_content"><div class="overlapping_content_inner">
				<?php } ?>
				<div class="container_inner default_template_holder clearfix page_container_inner" <?php bridge_qode_inline_style($bridge_qode_content_style_spacing); ?>>
					<?php if(($bridge_qode_sidebar == "default")||($bridge_qode_sidebar == "")) : ?>
						<?php if (have_posts()) :
							while (have_posts()) : the_post(); ?>
								<?php  bridge_qode_tt_event_single_content();?>
							<?php endwhile; ?>
						<?php endif; ?>
					<?php elseif($bridge_qode_sidebar == "1" || $bridge_qode_sidebar == "2"): ?>

					<?php if($bridge_qode_sidebar == "1") : ?>
					<div class="two_columns_66_33 background_color_sidebar grid2 clearfix">
						<div class="column1">
							<?php elseif($bridge_qode_sidebar == "2") : ?>
							<div class="two_columns_75_25 background_color_sidebar grid2 clearfix">
								<div class="column1">
									<?php endif; ?>
									<?php if (have_posts()) :
										while (have_posts()) : the_post(); ?>
											<div class="column_inner">
												<?php  bridge_qode_tt_event_single_content();?>
											</div>
										<?php endwhile; ?>
									<?php endif; ?>


								</div>
								<div class="column2"><?php get_sidebar();?></div>
							</div>
							<?php elseif($bridge_qode_sidebar == "3" || $bridge_qode_sidebar == "4"): ?>
							<?php if($bridge_qode_sidebar == "3") : ?>
							<div class="two_columns_33_66 background_color_sidebar grid2 clearfix">
								<div class="column1"><?php get_sidebar();?></div>
								<div class="column2">
									<?php elseif($bridge_qode_sidebar == "4") : ?>
									<div class="two_columns_25_75 background_color_sidebar grid2 clearfix">
										<div class="column1"><?php get_sidebar();?></div>
										<div class="column2">
											<?php endif; ?>
											<?php if (have_posts()) :
												while (have_posts()) : the_post(); ?>
													<?php  bridge_qode_tt_event_single_content();?>
												<?php endwhile; ?>
											<?php endif; ?>
										</div>

									</div>
									<?php endif; ?>
								</div>
								<?php if(isset($bridge_qode_options['overlapping_content']) && $bridge_qode_options['overlapping_content'] == 'yes') {?>
							</div></div>
						<?php } ?>
					</div>
<?php get_footer(); ?>