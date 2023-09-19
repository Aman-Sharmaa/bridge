<?php
$bridge_qode_id = bridge_qode_get_page_id();
$bridge_qode_sidebar = get_post_meta($bridge_qode_id, "qode_show-sidebar", true);  

$bridge_qode_enable_page_comments = false;
if(get_post_meta($bridge_qode_id, "qode_enable-page-comments", true) == 'yes') {
	$bridge_qode_enable_page_comments = true;
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
		<?php
		$bridge_qode_revslider = get_post_meta($bridge_qode_id, "qode_revolution-slider", true);
		if (!empty($bridge_qode_revslider)){ ?>
			<div class="q_slider">
				<div class="q_slider_inner">
					<?php echo do_shortcode($bridge_qode_revslider); ?>
				</div>
			</div>
		<?php
		}
		?>
		<div class="container"<?php if($bridge_qode_background_color != "") { echo " style='background-color:". $bridge_qode_background_color ."'";} ?>>
            <?php if(isset($bridge_qode_options['overlapping_content']) && $bridge_qode_options['overlapping_content'] == 'yes') {?>
                <div class="overlapping_content"><div class="overlapping_content_inner">
            <?php } ?>
			<div class="container_inner default_template_holder clearfix page_container_inner" <?php bridge_qode_inline_style($bridge_qode_content_style_spacing); ?>>
				<?php do_action( 'bridge_qode_action_after_container_inner_open' ); ?>
				<?php if(($bridge_qode_sidebar == "default")||($bridge_qode_sidebar == "")) : ?>
					<?php if (have_posts()) : 
							while (have_posts()) : the_post(); ?>
							<?php the_content(); ?>
							<?php 
								$bridge_qode_args_pages = array(
									'before'           => '<p class="single_links_pages">',
									'after'            => '</p>',
									'pagelink'         => '<span>%</span>'
								);
								wp_link_pages($bridge_qode_args_pages);
							?>
							<?php
							if($bridge_qode_enable_page_comments){
								comments_template('', true); 
							}
							?> 
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
								
								<?php the_content(); ?>
								<?php 
									$bridge_qode_args_pages = array(
									'before'           => '<p class="single_links_pages">',
									'after'            => '</p>',
									'pagelink'         => '<span>%</span>'
									);

									wp_link_pages($bridge_qode_args_pages);
								?>
								<?php
								if($bridge_qode_enable_page_comments){
									comments_template('', true); 
								}
								?> 
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
									<div class="column_inner">
										<?php the_content(); ?>
										<?php 
											$bridge_qode_args_pages = array(
												'before'           => '<p class="single_links_pages">',
												'after'            => '</p>',
												'pagelink'         => '<span>%</span>'
											);
											wp_link_pages($bridge_qode_args_pages);
										?>
										<?php
										if($bridge_qode_enable_page_comments){
											comments_template('', true); 
										}
										?> 
									</div>
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
	<?php do_action('bridge_qode_action_page_after_container') ?>
	<?php get_footer(); ?>