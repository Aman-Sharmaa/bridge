<?php
	$bridge_qode_options = bridge_qode_return_global_options();
	$bridge_qode_page_id = bridge_qode_get_page_id();
?>
<?php 
$bridge_qode_content_bottom_area = "yes";
if(get_post_meta($bridge_qode_page_id, "qode_enable_content_bottom_area", true) != ""){
	$bridge_qode_content_bottom_area = get_post_meta($bridge_qode_page_id, "qode_enable_content_bottom_area", true);
} else{
	if (isset($bridge_qode_options['enable_content_bottom_area'])) {
		$bridge_qode_content_bottom_area = $bridge_qode_options['enable_content_bottom_area'];
	}
}
$bridge_qode_content_bottom_area_sidebar = "";
if(get_post_meta($bridge_qode_page_id, 'qode_choose_content_bottom_sidebar', true) != ""){
	$bridge_qode_content_bottom_area_sidebar = get_post_meta($bridge_qode_page_id, 'qode_choose_content_bottom_sidebar', true);
} else {
	if(isset($bridge_qode_options['content_bottom_sidebar_custom_display'])) {
		$bridge_qode_content_bottom_area_sidebar = $bridge_qode_options['content_bottom_sidebar_custom_display'];
	}
}
$bridge_qode_content_bottom_area_in_grid = true;
if(get_post_meta($bridge_qode_page_id, 'qode_content_bottom_sidebar_in_grid', true) != ""){
	if(get_post_meta($bridge_qode_page_id, 'qode_content_bottom_sidebar_in_grid', true) == "yes") {
		$bridge_qode_content_bottom_area_in_grid = true;
	} else {
		$bridge_qode_content_bottom_area_in_grid = false;
	} 
}
else {
	if(isset($bridge_qode_options['content_bottom_in_grid'])){if ($bridge_qode_options['content_bottom_in_grid'] == "no") $bridge_qode_content_bottom_area_in_grid = false;}
}
$bridge_qode_content_bottom_background_color = '';
if(get_post_meta($bridge_qode_page_id, "qode_content_bottom_background_color", true) != ""){
	$bridge_qode_content_bottom_background_color = get_post_meta($bridge_qode_page_id, "qode_content_bottom_background_color", true);
}
?>
	<?php if($bridge_qode_content_bottom_area == "yes") { ?>
	<?php if($bridge_qode_content_bottom_area_in_grid){ ?>
		<div class="container">
			<div class="container_inner clearfix">
	<?php } ?>
		<div class="content_bottom" <?php if($bridge_qode_content_bottom_background_color != ''){ echo 'style="background-color:'.$bridge_qode_content_bottom_background_color.';"'; } ?>>
			<?php dynamic_sidebar($bridge_qode_content_bottom_area_sidebar); ?>
		</div>
		<?php if($bridge_qode_content_bottom_area_in_grid){ ?>
					</div>
				</div>
			<?php } ?>
	<?php } ?>
	
	</div>
</div>

<?php
if(isset($bridge_qode_options['paspartu']) && $bridge_qode_options['paspartu'] == 'yes'){?>
        <?php if(isset($bridge_qode_options['vertical_area']) && $bridge_qode_options['vertical_area'] == "yes" && isset($bridge_qode_options['vertical_menu_inside_paspartu']) && $bridge_qode_options['vertical_menu_inside_paspartu'] == 'no') { ?>
        </div> <!-- paspartu_middle_inner close div -->
        <?php } ?>
    </div> <!-- paspartu_inner close div -->
    <?php if((isset($bridge_qode_options['paspartu_on_bottom']) && $bridge_qode_options['paspartu_on_bottom'] == 'yes') ||
        (isset($bridge_qode_options['vertical_area']) && $bridge_qode_options['vertical_area'] == "yes" && isset($bridge_qode_options['vertical_menu_inside_paspartu']) && $bridge_qode_options['vertical_menu_inside_paspartu'] == 'yes')){ ?>
        <div class="paspartu_bottom"></div>
    <?php }?>
    </div> <!-- paspartu_outer close div -->
<?php
}
?>

<?php

$bridge_qode_footer_classes_array = array();
$bridge_qode_footer_classes = '';

$bridge_qode_paspartu = false;
if(isset($bridge_qode_options['paspartu']) && $bridge_qode_options['paspartu'] == 'yes'){
    $bridge_qode_paspartu = true;
}

if(isset($bridge_qode_options['paspartu']) && $bridge_qode_options['paspartu'] == 'yes' && isset($bridge_qode_options['paspartu_footer_alignment']) && $bridge_qode_options['paspartu_footer_alignment'] == 'yes'){
    $bridge_qode_footer_classes_array[]= 'paspartu_footer_alignment';
}

if(isset($bridge_qode_options['uncovering_footer']) && $bridge_qode_options['uncovering_footer'] == "yes" && $bridge_qode_paspartu == false){
    $bridge_qode_footer_classes_array[] = 'uncover';
}

$bridge_qode_display_footer_top = true;

/*$footer_top_per_page_option = get_post_meta($bridge_qode_page_id, "footer_top_per_page", true);
if(!empty($footer_top_per_page_option)){
	$footer_top_per_page = $footer_top_per_page_option;
}


if (isset($bridge_qode_options['show_footer_top'])) {
	if ($bridge_qode_options['show_footer_top'] == "no" && $footer_top_per_page_option == 'no') $bridge_qode_display_footer_top = false;
}*/

$bridge_qode_display_footer_text = true;

/*if (isset($bridge_qode_options['footer_text'])) {
	if ($bridge_qode_options['footer_text'] == "yes") $bridge_qode_display_footer_text = true;
}*/

//is some class added to footer classes array?
if(is_array($bridge_qode_footer_classes_array) && count($bridge_qode_footer_classes_array)) {
    //concat all classes and prefix it with class attribute
    $bridge_qode_footer_classes = esc_attr(implode(' ', $bridge_qode_footer_classes_array));
}

?>

<?php if($bridge_qode_display_footer_top || $bridge_qode_display_footer_text) { ?>
	<footer <?php echo bridge_qode_get_inline_attr($bridge_qode_footer_classes, 'class'); ?>>
		<div class="footer_inner clearfix">
		<?php
		$bridge_qode_footer_in_grid = true;
		if(isset($bridge_qode_options['footer_in_grid'])){
			if ($bridge_qode_options['footer_in_grid'] != "yes") {
				$bridge_qode_footer_in_grid = false;
			}
		}

		
		$bridge_qode_footer_top_columns = 4;
		if (isset($bridge_qode_options['footer_top_columns'])) {
			$bridge_qode_footer_top_columns = $bridge_qode_options['footer_top_columns'];
		}

        $bridge_qode_footer_top_border_color = !empty($bridge_qode_options['footer_top_border_color']) ? $bridge_qode_options['footer_top_border_color'] : '';
        $bridge_qode_footer_top_border_width = isset($bridge_qode_options['footer_top_border_width']) && $bridge_qode_options['footer_top_border_width'] !== '' ? $bridge_qode_options['footer_top_border_width'].'px' : '1px';
        $bridge_qode_footer_top_border_in_grid = 'no';
        $bridge_qode_footer_top_border_in_grid_class = '';

        if(isset($bridge_qode_options['footer_top_border_in_grid'])) {
            $bridge_qode_footer_top_border_in_grid = $bridge_qode_options['footer_top_border_in_grid'];
            $bridge_qode_footer_top_border_in_grid_class = $bridge_qode_footer_top_border_in_grid == 'yes' ? 'in_grid' : '';
        }

        $bridge_qode_footer_top_border_style = array();
        if($bridge_qode_footer_top_border_color !== '') {
            $bridge_qode_footer_top_border_style[] = 'background-color: '.$bridge_qode_footer_top_border_color;
        }

        if($bridge_qode_footer_top_border_width !== '') {
            $bridge_qode_footer_top_border_style[] = 'height: '.$bridge_qode_footer_top_border_width;
        }

		if($bridge_qode_display_footer_top) { ?>
		<div class="footer_top_holder">
            <?php if($bridge_qode_footer_top_border_color !== '') { ?>
                <div <?php bridge_qode_inline_style($bridge_qode_footer_top_border_style); ?> <?php bridge_qode_class_attribute('footer_top_border '.$bridge_qode_footer_top_border_in_grid_class); ?>></div>
            <?php } ?>
			<div class="footer_top<?php if(!$bridge_qode_footer_in_grid) {echo " footer_top_full";} ?>">
				<?php if($bridge_qode_footer_in_grid){ ?>
				<div class="container">
					<div class="container_inner">
				<?php } ?>
						<?php switch ($bridge_qode_footer_top_columns) { 
							case 6:
						?>
							<div class="two_columns_50_50 clearfix">
								<div class="column1 footer_col1">
										<div class="column_inner">
											<?php dynamic_sidebar( 'footer_column_1' ); ?>
										</div>
								</div>
								<div class="column2">
									<div class="column_inner">
										<div class="two_columns_50_50 clearfix">
											<div class="column1 footer_col2">
												<div class="column_inner">
													<?php dynamic_sidebar( 'footer_column_2' ); ?>
												</div>
											</div>
											<div class="column2 footer_col3">
												<div class="column_inner">
													<?php dynamic_sidebar( 'footer_column_3' ); ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>							
						<?php 
							break;
							case 5:
						?>
							<div class="two_columns_50_50 clearfix">
								<div class="column1">
									<div class="column_inner">
										<div class="two_columns_50_50 clearfix">
											<div class="column1 footer_col1">
												<div class="column_inner">
													<?php dynamic_sidebar( 'footer_column_1' ); ?>
												</div>
											</div>
											<div class="column2 footer_col2">
												<div class="column_inner">
													<?php dynamic_sidebar( 'footer_column_2' ); ?>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="column2 footer_col3">
									<div class="column_inner">
										<?php dynamic_sidebar( 'footer_column_3' ); ?>
									</div>
								</div>
							</div>							
						<?php 
							break;
							case 4:
						?>
							<div class="four_columns clearfix">
								<div class="column1 footer_col1">
									<div class="column_inner">
										<?php dynamic_sidebar( 'footer_column_1' ); ?>
									</div>
								</div>
								<div class="column2 footer_col2">
									<div class="column_inner">
										<?php dynamic_sidebar( 'footer_column_2' ); ?>
									</div>
								</div>
								<div class="column3 footer_col3">
									<div class="column_inner">
										<?php dynamic_sidebar( 'footer_column_3' ); ?>
									</div>
								</div>
								<div class="column4 footer_col4">
									<div class="column_inner">
										<?php dynamic_sidebar( 'footer_column_4' ); ?>
									</div>
								</div>
							</div>
						<?php
							break;
							case 3:
						?>
							<div class="three_columns clearfix">
								<div class="column1 footer_col1">
									<div class="column_inner">
										<?php dynamic_sidebar( 'footer_column_1' ); ?>
									</div>
								</div>
								<div class="column2 footer_col2">
									<div class="column_inner">
										<?php dynamic_sidebar( 'footer_column_2' ); ?>
									</div>
								</div>
								<div class="column3 footer_col3">
									<div class="column_inner">
										<?php dynamic_sidebar( 'footer_column_3' ); ?>
									</div>
								</div>
							</div>
						<?php
							break;
							case 2:
						?>
							<div class="two_columns_50_50 clearfix">
								<div class="column1 footer_col1">
									<div class="column_inner">
										<?php dynamic_sidebar( 'footer_column_1' ); ?>
									</div>
								</div>
								<div class="column2 footer_col2">
									<div class="column_inner">
										<?php dynamic_sidebar( 'footer_column_2' ); ?>
									</div>
								</div>
							</div>
						<?php
							break;
							case 1:
								dynamic_sidebar( 'footer_column_1' );
							break;
						}
						?>
				<?php if($bridge_qode_footer_in_grid){ ?>
					</div>
				</div>
				<?php } ?>
			</div>
			<?php if (isset($bridge_qode_options['footer_angled_section'])  && $bridge_qode_options['footer_angled_section'] == "yes"){ ?>
				<svg class="angled-section svg-footer-bottom" preserveAspectRatio="none" viewBox="0 0 86 86" width="100%" height="86">
					<?php if(isset($bridge_qode_options['footer_angled_section_direction']) && $bridge_qode_options['footer_angled_section_direction'] == 'from_left_to_right'){ ?>
						<polygon points="0,0 0,86 86,86" />
					<?php }
					if(isset($bridge_qode_options['footer_angled_section_direction']) && $bridge_qode_options['footer_angled_section_direction'] == 'from_right_to_left'){ ?>
						<polygon points="0,86 86,0 86,86" />
					<?php } ?>
				</svg>
			<?php } ?>
		</div>
		<?php } ?>
		<?php


		$bridge_qode_footer_bottom_columns = 1;
		if (isset($bridge_qode_options['footer_bottom_columns'])) {
			$bridge_qode_footer_bottom_columns = $bridge_qode_options['footer_bottom_columns'];
		}

		$bridge_qode_footer_bottom_in_grid = false;
		if(isset($bridge_qode_options['footer_bottom_in_grid'])){
			if ($bridge_qode_options['footer_bottom_in_grid'] == "yes") {
				$bridge_qode_footer_bottom_in_grid = true;
			}
		}

        $bridge_qode_footer_bottom_border_color = !empty($bridge_qode_options['footer_bottom_border_color']) ? $bridge_qode_options['footer_bottom_border_color'] : '';
        $bridge_qode_footer_bottom_border_width = isset($bridge_qode_options['footer_bottom_border_width']) && $bridge_qode_options['footer_bottom_border_width'] !== '' ? $bridge_qode_options['footer_bottom_border_width'].'px' : '1px';
        $bridge_qode_footer_bottom_border_in_grid = 'no';
        $bridge_qode_footer_bottom_border_in_grid_class = '';

        if(isset($bridge_qode_options['footer_bottom_border_in_grid'])) {
            $bridge_qode_footer_bottom_border_in_grid = $bridge_qode_options['footer_bottom_border_in_grid'];
            $bridge_qode_footer_bottom_border_in_grid_class = $bridge_qode_footer_bottom_border_in_grid == 'yes' ? 'in_grid' : '';
        }

        $bridge_qode_footer_bottom_border_style = array();
        if($bridge_qode_footer_bottom_border_color !== '') {
            $bridge_qode_footer_bottom_border_style[] = 'background-color: '.$bridge_qode_footer_bottom_border_color;
        }

        if($bridge_qode_footer_bottom_border_width !== '') {
            $bridge_qode_footer_bottom_border_style[] = 'height: '.$bridge_qode_footer_bottom_border_width;
        }

		if($bridge_qode_display_footer_text){ ?>
			<div class="footer_bottom_holder">
                <?php if($bridge_qode_footer_bottom_border_color !== '') { ?>
                    <div <?php bridge_qode_inline_style($bridge_qode_footer_bottom_border_style); ?> <?php bridge_qode_class_attribute('footer_bottom_border '.$bridge_qode_footer_bottom_border_in_grid_class); ?>></div>
                <?php } ?>
				<?php if($bridge_qode_footer_bottom_in_grid){ ?>
				<div class="container">
					<div class="container_inner">
				<?php } ?>
		<?php
			switch ($bridge_qode_footer_bottom_columns) {
			case 1:
			?>
			<div class="footer_bottom">
				<?php dynamic_sidebar( 'footer_text' ); ?>
			</div>
		<?php
			break;
			case 2:
		?>
				<div class="two_columns_50_50 footer_bottom_columns clearfix">
					<div class="column1 footer_bottom_column">
						<div class="column_inner">
							<div class="footer_bottom">
								<?php dynamic_sidebar( 'footer_text_left' ); ?>
							</div>
						</div>
					</div>
					<div class="column2 footer_bottom_column">
						<div class="column_inner">
							<div class="footer_bottom">
								<?php dynamic_sidebar( 'footer_text_right' ); ?>
							</div>
						</div>
					</div>
				</div>
				<?php
			break;
			case 3:
		?>
				<div class="three_columns footer_bottom_columns clearfix">
					<div class="column1 footer_bottom_column">
						<div class="column_inner">
							<div class="footer_bottom">
								<?php dynamic_sidebar( 'footer_text_left' ); ?>
							</div>
						</div>
					</div>
					<div class="column2 footer_bottom_column">
						<div class="column_inner">
							<div class="footer_bottom">
								<?php dynamic_sidebar( 'footer_text' ); ?>
							</div>
						</div>
					</div>
					<div class="column3 footer_bottom_column">
						<div class="column_inner">
							<div class="footer_bottom">
								<?php dynamic_sidebar( 'footer_text_right' ); ?>
							</div>
						</div>
					</div>
				</div>
		<?php
			break;
			default:
		?>
				<div class="footer_bottom">
					<?php dynamic_sidebar( 'footer_text' ); ?>
				</div>
		<?php break; ?>
		<?php } ?>
			<?php if($bridge_qode_footer_bottom_in_grid){ ?>
				</div>
			</div>
			<?php } ?>
			</div>
		<?php } ?>
		</div>
	</footer>
	<?php } ?>
	
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>