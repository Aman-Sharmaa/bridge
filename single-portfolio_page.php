<?php
$bridge_qode_id = get_the_ID();

$bridge_qode_sidebar = "";

if(get_post_meta(get_the_ID(), "qode_show-sidebar", true) != "" && get_post_meta(get_the_ID(), "qode_show-sidebar", true) !== "default"){
	$bridge_qode_sidebar = get_post_meta(get_the_ID(), "qode_show-sidebar", true);
}else{
	if(isset($bridge_qode_options['portfolio_single_sidebar'])){
		$bridge_qode_sidebar = $bridge_qode_options['portfolio_single_sidebar'];
	}
}

$bridge_qode_portfolio_qode_like = "on";
if (isset($bridge_qode_options['portfolio_qode_like'])) {
	$bridge_qode_portfolio_qode_like = $bridge_qode_options['portfolio_qode_like'];
}

$bridge_qode_lightbox_single_project = "no";
if (isset($bridge_qode_options['lightbox_single_project']))
	$bridge_qode_lightbox_single_project = $bridge_qode_options['lightbox_single_project'];

if(get_post_meta($bridge_qode_id, "qode_page_background_color", true) != ""){
	$bridge_qode_background_color = get_post_meta($bridge_qode_id, "qode_page_background_color", true);
}else{
	$bridge_qode_background_color = "";
}

$bridge_qode_porftolio_template = 1;
if(get_post_meta(get_the_ID(), "qode_choose-portfolio-single-view", true) != ""){
	if(get_post_meta(get_the_ID(), "qode_choose-portfolio-single-view", true) == 1){
		$bridge_qode_porftolio_template = 1;
	}elseif(get_post_meta(get_the_ID(), "qode_choose-portfolio-single-view", true) == 2){
		$bridge_qode_porftolio_template = 2;
	}elseif(get_post_meta(get_the_ID(), "qode_choose-portfolio-single-view", true) == 3){
		$bridge_qode_porftolio_template = 3;
	}elseif(get_post_meta(get_the_ID(), "qode_choose-portfolio-single-view", true) == 4){
		$bridge_qode_porftolio_template = 4;
	}elseif(get_post_meta(get_the_ID(), "qode_choose-portfolio-single-view", true) == 5){
		$bridge_qode_porftolio_template = 5;
	}elseif(get_post_meta(get_the_ID(), "qode_choose-portfolio-single-view", true) == 6){
		$bridge_qode_porftolio_template = 6;
	}elseif(get_post_meta(get_the_ID(), "qode_choose-portfolio-single-view", true) == 7){
		$bridge_qode_porftolio_template = 7;
	}
}elseif(isset($bridge_qode_options['portfolio_style'])){
	if($bridge_qode_options['portfolio_style'] == 1){
		$bridge_qode_porftolio_template = 1;
	}elseif($bridge_qode_options['portfolio_style'] == 2){
		$bridge_qode_porftolio_template = 2;
	}elseif($bridge_qode_options['portfolio_style'] == 3){
		$bridge_qode_porftolio_template = 3;
	}elseif($bridge_qode_options['portfolio_style'] == 4){
		$bridge_qode_porftolio_template = 4;
	}elseif($bridge_qode_options['portfolio_style'] == 5){
		$bridge_qode_porftolio_template = 5;
	}elseif($bridge_qode_options['portfolio_style'] == 6){
		$bridge_qode_porftolio_template = 6;
	}elseif($bridge_qode_options['portfolio_style'] == 7){
		$bridge_qode_porftolio_template = 7;
	}
}

$bridge_qode_porftolio_single_template = get_post_meta(get_the_ID(), "qode_choose-portfolio-single-view", true);

$bridge_qode_columns_number = "v4";
if(get_post_meta(get_the_ID(), "qode_choose-number-of-portfolio-columns", true) != ""){
	if(get_post_meta(get_the_ID(), "qode_choose-number-of-portfolio-columns", true) == 2){
		$bridge_qode_columns_number = "v2";
	} else if(get_post_meta(get_the_ID(), "qode_choose-number-of-portfolio-columns", true) == 3){
		$bridge_qode_columns_number = "v3";
	} else if(get_post_meta(get_the_ID(), "qode_choose-number-of-portfolio-columns", true) == 4){
		$bridge_qode_columns_number = "v4";
	}
}else{
	if(isset($bridge_qode_options['portfolio_columns_number'])){
		if($bridge_qode_options['portfolio_columns_number'] == 2){
			$bridge_qode_columns_number = "v2";
		} else if($bridge_qode_options['portfolio_columns_number'] == 3) {
			$bridge_qode_columns_number = "v3";
		} else if($bridge_qode_options['portfolio_columns_number'] == 4) {
			$bridge_qode_columns_number = "v4";
		}
	}
}

$bridge_qode_content_style_spacing = "";
if(get_post_meta($bridge_qode_id, "qode_margin_after_title", true) != ""){
	if(get_post_meta($bridge_qode_id, "qode_margin_after_title_mobile", true) == 'yes'){
		$bridge_qode_content_style_spacing = "padding-top:".esc_attr(get_post_meta($bridge_qode_id, "qode_margin_after_title", true))."px !important";
	}else{
		$bridge_qode_content_style_spacing = "padding-top:".esc_attr(get_post_meta($bridge_qode_id, "qode_margin_after_title", true))."px";
	}
}

?>

<?php get_header(); ?>
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<?php get_template_part( 'title' ); ?>
			<?php
			$bridge_qode_revslider = get_post_meta($bridge_qode_id, "qode_revolution-slider", true);
			if (!empty($bridge_qode_revslider)){ ?>
				<div class="q_slider"><div class="q_slider_inner">
				<?php echo do_shortcode($bridge_qode_revslider); ?>
				</div></div>
			<?php
			}
			?>
			<?php if($bridge_qode_porftolio_template != "7"){ ?>
				<div class="container"<?php if($bridge_qode_background_color != "") { echo " style='background-color:". $bridge_qode_background_color ."'";} ?>>
                    <?php if(isset($bridge_qode_options['overlapping_content']) && $bridge_qode_options['overlapping_content'] == 'yes') {?>
                        <div class="overlapping_content"><div class="overlapping_content_inner">
                    <?php } ?>
					<div class="container_inner default_template_holder clearfix" <?php bridge_qode_inline_style($bridge_qode_content_style_spacing); ?>>
						<?php if(($bridge_qode_sidebar == "default")||($bridge_qode_sidebar == "")) : ?>
							<?php get_template_part('templates/portfolio', 'loop'); ?>
						<?php elseif($bridge_qode_sidebar == "1" || $bridge_qode_sidebar == "2"): ?>
							<?php if($bridge_qode_sidebar == "1") : ?>
							<div class="two_columns_66_33 background_color_sidebar grid2 clearfix">
								<?php elseif($bridge_qode_sidebar == "2") : ?>
								<div class="two_columns_75_25 background_color_sidebar grid2 clearfix">
									<?php endif; ?>
									<div class="column1">
										<div class="column_inner">
											<?php get_template_part('templates/portfolio', 'loop'); ?>
										</div>
									</div>
									<div class="column2">
										<?php get_sidebar(); ?>
									</div>
								</div>
								<?php elseif($bridge_qode_sidebar == "3" || $bridge_qode_sidebar == "4"): ?>
								<?php if($bridge_qode_sidebar == "3") : ?>
								<div class="two_columns_33_66 background_color_sidebar grid2 clearfix">
									<?php elseif($bridge_qode_sidebar == "4") : ?>
									<div class="two_columns_25_75 background_color_sidebar grid2 clearfix">
										<?php endif; ?>
										<div class="column1">
											<?php get_sidebar(); ?>
										</div>
										<div class="column2">
											<div class="column_inner">
												<?php get_template_part('templates/portfolio', 'loop'); ?>
											</div>
										</div>
									</div>
								<?php endif; ?>
                        <?php get_template_part('templates/portfolio', 'related'); ?>
						<?php get_template_part('templates/portfolio-comments'); ?>
					</div>
                    <?php if(isset($bridge_qode_options['overlapping_content']) && $bridge_qode_options['overlapping_content'] == 'yes') {?>
                        </div></div>
                    <?php } ?>
				</div>
			<?php }  else {
				get_template_part('templates/portfolio', 'loop');
			?>
				<div class="container_inner" <?php bridge_qode_inline_style($bridge_qode_content_style_spacing); ?>>
                    <?php get_template_part('templates/portfolio', 'related'); ?>
                    <?php get_template_part('templates/portfolio-comments'); ?>
				</div>

			<?php } ?>
		<?php endwhile; ?>
	<?php endif; ?>
<?php get_footer(); ?>