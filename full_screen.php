<?php 
/*
Template Name: Full Screen Sections
*/ 
?>
<?php
$bridge_qode_id = bridge_qode_get_page_id();

$bridge_qode_full_screen_holder_style = "";

if(get_post_meta($bridge_qode_id, "qode_page_background_color", true) != ""){
	$bridge_qode_full_screen_holder_style .= "background-color:".get_post_meta($bridge_qode_id, "qode_page_background_color", true).";";
}else{
	$bridge_qode_full_screen_holder_style .= "";
}

$bridge_qode_header_bottom_appearance = 'regular';
if(isset($bridge_qode_options['header_bottom_appearance'])){
	$bridge_qode_header_bottom_appearance = $bridge_qode_options['header_bottom_appearance'];
}

$bridge_qode_enable_vertical_menu = false;
if(isset($bridge_qode_options['vertical_area']) && $bridge_qode_options['vertical_area'] =='yes'){
	$bridge_qode_enable_vertical_menu = true;
}

if(!$bridge_qode_enable_vertical_menu){
	if($bridge_qode_header_bottom_appearance == 'regular' || $bridge_qode_header_bottom_appearance == 'stick' || $bridge_qode_header_bottom_appearance == 'stick_with_left_right_menu'){
		$bridge_qode_header_height = 100;
		if(!empty($bridge_qode_options['header_height'])){
			$bridge_qode_header_height = $bridge_qode_options['header_height'];
		}
		$bridge_qode_full_screen_holder_style .= "margin-top:".(-$bridge_qode_header_height)."px;";
	} else {
		$bridge_qode_full_screen_holder_style .= "";
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

if ( get_query_var('paged') ) { $bridge_qode_paged = get_query_var('paged'); }
elseif ( get_query_var('page') ) { $bridge_qode_paged = get_query_var('page'); }
else { $bridge_qode_paged = 1; }

?>
<?php get_header(); ?>

<div class="full_screen_preloader"><div class="ajax_loader"><div class="ajax_loader_1"><?php echo bridge_qode_loading_spinners(true); ?></div></div></div>

<div class="full_screen_holder"<?php if($bridge_qode_full_screen_holder_style != "") { echo " style='".$bridge_qode_full_screen_holder_style."'";} ?>>
	<?php if (!isset($bridge_qode_options['fss_navigation_button_position']) || $bridge_qode_options['fss_navigation_button_position'] !== 'side_by_side'){?>
	<div class="full_screen_navigation_holder up_arrow"><div class="full_screen_navigation_inner"><a id="up_fs_button" href="#" target="_self"><i class='fa fa-angle-up'></i></a></div></div>
	<?php } ?>
	<div class="full_screen_inner" <?php bridge_qode_inline_style($bridge_qode_content_style_spacing); ?>>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
			<?php the_content(); ?>

		<?php endwhile; endif; ?>

	</div>
	<?php if (!isset($bridge_qode_options['fss_navigation_button_position']) || $bridge_qode_options['fss_navigation_button_position'] !== 'side_by_side'){?>
	<div class="full_screen_navigation_holder down_arrow"><div class="full_screen_navigation_inner"><a id="down_fs_button" href="#" target="_self"><i class='fa fa-angle-down'></i></a></div></div>
	<?php } ?>

	<?php if (isset($bridge_qode_options['fss_navigation_button_position']) && $bridge_qode_options['fss_navigation_button_position'] == 'side_by_side'){?>
	<div class="full_screen_navigation_holder side_by_side">
		<div class="full_screen_navigation_inner up_arrow"><a id="up_fs_button" href="#" target="_self"><i class='fa fa-angle-up'></i></a></div>
		<div class="full_screen_navigation_inner down_arrow"><a id="down_fs_button" href="#" target="_self"><i class='fa fa-angle-down'></i></a></div>
	</div>
	<?php } ?>
</div>

<?php get_footer(); ?>