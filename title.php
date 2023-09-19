<?php 
$bridge_qode_options = bridge_qode_return_global_options();
/* Set id on -1 beacause archive page id can have same id as some post and settings is not good */
if(is_category() || is_tag() || is_author()){
	$bridge_qode_archive_id = $id;
	$id = -1;
}

if(get_post_meta($id, "qode_responsive-title-image", true) != ""){
    $bridge_qode_responsive_title_image = get_post_meta($id, "qode_responsive-title-image", true);
}else{
	$bridge_qode_responsive_title_image = bridge_qode_options()->getOptionValue('responsive_title_image');
}

if(get_post_meta($id, "qode_fixed-title-image", true) != ""){
 $bridge_qode_fixed_title_image = get_post_meta($id, "qode_fixed-title-image", true);
}else{
	$bridge_qode_fixed_title_image = bridge_qode_options()->getOptionValue('fixed_title_image');
}

if(get_post_meta($id, "qode_title-image", true) != ""){
 $bridge_qode_title_image = get_post_meta($id, "qode_title-image", true);
}else{
	$bridge_qode_title_image = bridge_qode_options()->getOptionValue('title_image');
}
$bridge_qode_title_image_height = "";
$bridge_qode_title_image_width = "";

if (!empty($bridge_qode_title_image)) {
	$bridge_qode_image_sizes = bridge_qode_get_image_dimensions($bridge_qode_title_image);
	if ( ! empty( $bridge_qode_image_sizes ) ) {
		$bridge_qode_title_image_height = $bridge_qode_image_sizes['height'];
		$bridge_qode_title_image_width = $bridge_qode_image_sizes['width'];
	}
}

if(get_post_meta($id, "qode_title-overlay-image", true) != ""){
 $bridge_qode_title_overlay_image = get_post_meta($id, "qode_title-overlay-image", true);
}else{
	$bridge_qode_title_overlay_image = bridge_qode_options()->getOptionValue('title_overlay_image');
}

//is header some of sticky types and initially hidden
$bridge_qode_is_header_initially_hidden = false;
if(isset($bridge_qode_options['header_bottom_appearance']) && ($bridge_qode_options['header_bottom_appearance'] == "stick" || $bridge_qode_options['header_bottom_appearance'] == "stick menu_bottom" || $bridge_qode_options['header_bottom_appearance'] == "stick_with_left_right_menu")){
	if(get_post_meta($id, "qode_page_hide_initial_sticky", true) !== "") {
		if(get_post_meta($id, "qode_page_hide_initial_sticky", true) === "yes") {
				$bridge_qode_is_header_initially_hidden = true;
		}
	} else if(isset($bridge_qode_options['hide_initial_sticky']) && $bridge_qode_options['hide_initial_sticky'] == 'yes'){
		$bridge_qode_is_header_initially_hidden = true;
	}
}


$bridge_qode_header_height_padding = 0;
if (!empty($bridge_qode_options['header_height'])) {
	$bridge_qode_header_height = bridge_qode_options()->getOptionValue('header_height');
} else {
	$bridge_qode_header_height = 100;
}
if (isset($bridge_qode_options['header_bottom_border_color']) && !empty($bridge_qode_options['header_bottom_border_color'])) {
	$bridge_qode_header_height = $bridge_qode_header_height + 1;
}
if(bridge_qode_options()->getOptionValue('header_bottom_appearance') == 'stick menu_bottom'){
	$bridge_qode_menu_bottom = '46';
	if(is_active_sidebar('header_fixed_right')){
		$bridge_qode_menu_bottom = $bridge_qode_menu_bottom + 22;
	}
} else {
	$bridge_qode_menu_bottom = 0;
}
$bridge_qode_nav_font_size = 7;
if(isset($bridge_qode_options['menu_fontsize']) && $bridge_qode_options['menu_fontsize'] != ""){
	$bridge_qode_nav_font_size = $bridge_qode_options['menu_fontsize'] / 2;
}
$bridge_qode_header_top = 0;
if(isset($bridge_qode_options['header_top_area']) && $bridge_qode_options['header_top_area'] == "yes"){
	$bridge_qode_header_top = 33;
}
$bridge_qode_header_height_padding = $bridge_qode_header_height + $bridge_qode_menu_bottom + $bridge_qode_header_top;
if ((isset($bridge_qode_options['center_logo_image']) && $bridge_qode_options['center_logo_image'] == "yes") || bridge_qode_options()->getOptionValue('header_bottom_appearance') == 'fixed_hiding') {
    if(isset($bridge_qode_options['logo_image'])){
                $bridge_qode_logo_width = 0;
                $bridge_qode_logo_height = 0;
                if (!empty($bridge_qode_options['logo_image'])) {
					$bridge_qode_image_sizes = bridge_qode_get_image_dimensions($bridge_qode_options['logo_image']);
					if ( ! empty( $bridge_qode_image_sizes ) ) {
						$bridge_qode_logo_height = $bridge_qode_image_sizes['height'];
						$bridge_qode_logo_width = $bridge_qode_image_sizes['width'];
					}
                }
            }
    if($bridge_qode_options['header_bottom_appearance'] == 'stick menu_bottom'){
        $bridge_qode_header_height_padding = $bridge_qode_logo_height + 30 + $bridge_qode_menu_bottom + $bridge_qode_header_top; // 30 is top and bottom margin of centered logo
    } else if($bridge_qode_options['header_bottom_appearance'] == 'fixed_hiding'){
        $bridge_qode_header_height_padding = $bridge_qode_logo_height/2 + 40 + $bridge_qode_header_height + $bridge_qode_header_top; // 40 is top and bottom margin of centered logo
    } else {
        $bridge_qode_header_height_padding = $bridge_qode_logo_height + 30 + $bridge_qode_header_height + $bridge_qode_header_top; // 30 is top and bottom margin of centered logo
    }
}

if(bridge_qode_options()->getOptionValue('header_bottom_appearance') == 'fixed_top_header' || $bridge_qode_is_header_initially_hidden){ // because this header type never goes over slider, title or content (content top margin is 0, title padding is 0)
	
	$bridge_qode_title_height = 100;
	if(get_post_meta($id, "qode_title-height", true) != ""){
		$bridge_qode_title_height = get_post_meta($id, "qode_title-height", true);
	}else if($bridge_qode_options['title_height'] != ''){
		$bridge_qode_title_height = $bridge_qode_options['title_height'];
	}
} else {

	$bridge_qode_title_height = 100;
	if(get_post_meta($id, "qode_title-height", true) != ""){
		$bridge_qode_title_height = get_post_meta($id, "qode_title-height", true);
	}else if(bridge_qode_options()->getOptionValue('title_height') != ''){
		$bridge_qode_title_height = $bridge_qode_options['title_height'];
	}else {
		if (isset($bridge_qode_options['center_logo_image']) && $bridge_qode_options['center_logo_image'] == "yes") {
			if($bridge_qode_options['header_bottom_appearance'] == 'stick menu_bottom'){
				$bridge_qode_title_height = $bridge_qode_title_height + $bridge_qode_logo_height + 30 + $bridge_qode_menu_bottom + $bridge_qode_header_top; // 30 is top and bottom margin of centered logo
			} else {
				$bridge_qode_title_height = $bridge_qode_header_height + $bridge_qode_title_height + $bridge_qode_logo_height + 30 + $bridge_qode_header_top; // 30 is top and bottom margin of centered logo
			}
			
		} else {
			$bridge_qode_title_height = $bridge_qode_title_height + $bridge_qode_header_height + $bridge_qode_menu_bottom + $bridge_qode_header_top;

		 }
	}
}

if(get_post_meta($id, "qode_fixed-title-image", true) != ""){
 $bridge_qode_fixed_title_image = get_post_meta($id, "qode_fixed-title-image", true);
}else{
	$bridge_qode_fixed_title_image = bridge_qode_options()->getOptionValue('fixed_title_image');
}

$bridge_qode_title_background_color = '';
if(get_post_meta($id, "qode_page-title-background-color", true) != ""){
 $bridge_qode_title_background_color = get_post_meta($id, "qode_page-title-background-color", true);
}else{
	$bridge_qode_title_background_color = bridge_qode_options()->getOptionValue('title_background_color');
}

$bridge_qode_show_title_image = true;
if(get_post_meta($id, "qode_show-page-title-image", true) == 'yes') {
	$bridge_qode_show_title_image = false;
}
$bridge_qode_page_title_style = "standard";
if(get_post_meta($id, "qode_page_title_style", true) != ""){
	$bridge_qode_page_title_style = get_post_meta($id, "qode_page_title_style", true);
}else{
	if(isset($bridge_qode_options['title_style'])) {
		$bridge_qode_page_title_style = $bridge_qode_options['title_style'];
	} else {
		$bridge_qode_page_title_style = "standard";
	}
}

$bridge_qode_animate_title_area = '';
if(get_post_meta($id, "qode_animate-page-title", true) != ""){
	$bridge_qode_animate_title_area = get_post_meta($id, "qode_animate-page-title", true);
}else{
	$bridge_qode_animate_title_area = bridge_qode_options()->getOptionValue('animate_title_area');
}

if($bridge_qode_animate_title_area == "text_right_left") {
	$bridge_qode_animate_title_class = "animate_title_text";
} elseif($bridge_qode_animate_title_area == "area_top_bottom"){
	$bridge_qode_animate_title_class = "animate_title_area";
} else {
	$bridge_qode_animate_title_class = "title_without_animation";
}

$bridge_qode_page_title_fontsize = '';
if(get_post_meta($id, "qode_page_title_font_size", true) != ""){
	$bridge_qode_page_title_fontsize = "title_size_" . get_post_meta($id, "qode_page_title_font_size", true);
}else{
	if(isset($bridge_qode_options['predefined_title_sizes'])) {
		$bridge_qode_page_title_fontsize = "title_size_" . $bridge_qode_options['predefined_title_sizes'];
	}
}


$bridge_qode_page_title_border_bottom_in_grid = false;
$bridge_qode_page_title_border_bottom_in_grid_class = '';

if(isset($bridge_qode_options['border_bottom_title_area']) && isset($bridge_qode_options['border_bottom_in_grid_title_area']) && $bridge_qode_options['border_bottom_in_grid_title_area'] == "yes" && $bridge_qode_options['border_bottom_title_area'] == "yes") {
	$bridge_qode_page_title_border_bottom_in_grid = true;
	$bridge_qode_page_title_border_bottom_in_grid_class = " title_bottom_border_in_grid";
}


//init variables
$bridge_qode_title_subtitle_padding 	= '';
$bridge_qode_header_transparency 		= '';
$bridge_qode_is_header_transparent  	= false;
$bridge_qode_transparent_values_array 	= array('0.00', '0');
$bridge_qode_solid_values_array			= array('', '1');
$bridge_qode_header_bottom_border		= '';
$bridge_qode_is_title_angled_enabled	= false;

//is header transparent not set on current page?
if(get_post_meta($id, "qode_header_color_transparency_per_page", true) === "") {
	//take global value set in Qode Options
	$bridge_qode_header_transparency = bridge_qode_options()->getOptionValue('header_background_transparency_initial');
} else {
	//take value set for current page
	$bridge_qode_header_transparency = get_post_meta($id, "qode_header_color_transparency_per_page", true);
}

//is border bottom color for header set in Qode Options?
if(isset($bridge_qode_options['header_bottom_border_color']) && !empty($bridge_qode_options['header_bottom_border_color'])) {
	$bridge_qode_header_bottom_border = $bridge_qode_options['header_bottom_border_color'];
}

//is header completely transparent?
$bridge_qode_is_header_transparent 	= in_array($bridge_qode_header_transparency, $bridge_qode_transparent_values_array);

//is header solid?
$bridge_qode_is_header_solid		= in_array($bridge_qode_header_transparency, $bridge_qode_solid_values_array);


if(bridge_qode_options()->getOptionValue('header_bottom_appearance') == 'fixed_top_header' || $bridge_qode_is_header_initially_hidden || bridge_qode_is_content_below_header()){  // because this header type never goes over slider, title or content (content top margin is 0, title padding is 0)

	$bridge_qode_title_holder_height = 'style="padding-top:0;height:' . $bridge_qode_title_height . 'px;"';
	$bridge_qode_title_subtitle_padding = 'style="padding-top:0;"';
	
} else {

	//is header solid?
	if($bridge_qode_is_header_solid) {
		$bridge_qode_title_holder_height = 'style="padding-top:' . $bridge_qode_header_height_padding . 'px;height:' . ($bridge_qode_title_height - $bridge_qode_header_height_padding) . 'px;"';
		$bridge_qode_title_subtitle_padding = 'style="padding-top:' . $bridge_qode_header_height_padding . 'px;"';
	} else {

		//is border for header bottom set?
		if ($bridge_qode_header_bottom_border != '') {

			//center title between header and end of title section
			$bridge_qode_title_holder_height = 'style="padding-top:' . $bridge_qode_header_height_padding . 'px;height:' . ($bridge_qode_title_height - $bridge_qode_header_height_padding) . 'px;"';
			$bridge_qode_title_subtitle_padding = 'style="padding-top:' . $bridge_qode_header_height_padding . 'px;"';
		} else {

			//is header semi-transparent?
			if(!$bridge_qode_is_header_transparent) {
				//center title between border and end of title section
				$bridge_qode_title_holder_height = 'style="padding-top:' . $bridge_qode_header_height_padding . 'px;height:' . ($bridge_qode_title_height - $bridge_qode_header_height_padding) . 'px;"';
				$bridge_qode_title_subtitle_padding = 'style="padding-top:' . $bridge_qode_header_height_padding . 'px;"';
			} else {
				//header is transparent. Center it between main menu item's text beginning and end of title section
				$bridge_qode_title_holder_height = 'style="padding-top:'.(($bridge_qode_header_height/2 - $bridge_qode_nav_font_size) + $bridge_qode_header_top) .'px;height:' . ($bridge_qode_title_height - ($bridge_qode_header_height/2 - $bridge_qode_nav_font_size + $bridge_qode_header_top)) . 'px;"';
				$bridge_qode_title_subtitle_padding = 'style="padding-top:'.(($bridge_qode_header_height/2 - $bridge_qode_nav_font_size) + $bridge_qode_header_top) .'px;"';
			}
		}
	}

}

//is title angled enabled
if(get_post_meta($id, "qode_enable_page_title_angled", true) == 'yes') {
	$bridge_qode_is_title_angled_enabled = true;
} elseif(get_post_meta($id, "qode_enable_page_title_angled", true) == 'no') {
	$bridge_qode_is_title_angled_enabled = false;
} elseif(get_post_meta($id, "qode_enable_page_title_angled", true) == '' && (isset($bridge_qode_options['enable_title_angled']) && $bridge_qode_options['enable_title_angled'] == 'yes')) {
	$bridge_qode_is_title_angled_enabled = true;
} elseif(get_post_meta($id, "qode_enable_page_title_angled", true) == '' && (isset($bridge_qode_options['enable_title_angled']) && $bridge_qode_options['enable_title_angled'] == 'no')) {
	$bridge_qode_is_title_angled_enabled = false;
} elseif(isset($bridge_qode_options['enable_title_angled']) && $bridge_qode_options['enable_title_angled'] == 'yes') {
	$bridge_qode_is_title_angled_enabled = true;
}

//title angled background color
$bridge_qode_title_angled_background_color = '';
if(get_post_meta($id, "qode_title_angled_section_color", true) != ""){
	$bridge_qode_title_angled_background_color = esc_attr(get_post_meta($id, "qode_title_angled_section_color", true));
}else{
	if(isset($bridge_qode_options['title_angled_section_color'])) {
		$bridge_qode_title_angled_background_color = esc_attr($bridge_qode_options['title_angled_section_color']);
	}
}


//title angled position
$bridge_qode_title_angled_position = '';
if(get_post_meta($id, "qode_title_angled_section_direction", true) == 'from_left_to_right') {
	$bridge_qode_title_angled_position = 'from_left_to_right';
}elseif(get_post_meta($id, "qode_title_angled_section_direction", true) == 'from_right_to_left') {
	$bridge_qode_title_angled_position = 'from_right_to_left';
}elseif(get_post_meta($id, "qode_title_angled_section_direction", true) == '' && (isset($bridge_qode_options['title_angled_section_direction']) && $bridge_qode_options['title_angled_section_direction'] == 'from_left_to_right')) {
	$bridge_qode_title_angled_position = 'from_left_to_right';
} elseif(get_post_meta($id, "qode_title_angled_section_direction", true) == '' && (isset($bridge_qode_options['title_angled_section_direction']) && $bridge_qode_options['title_angled_section_direction'] == 'from_right_to_left')) {
	$bridge_qode_title_angled_position = 'from_right_to_left';
}

//is vertical menu activated in Qode Options?
if(isset($bridge_qode_options['vertical_area']) && $bridge_qode_options['vertical_area'] =='yes'){
	$bridge_qode_title_subtitle_padding = 0;
	$bridge_qode_title_holder_height = 100;
	$bridge_qode_title_height = 100;
	if(get_post_meta($id, "qode_title-height", true) != ""){
		$bridge_qode_title_holder_height = get_post_meta($id, "qode_title-height", true);
		$bridge_qode_title_height = get_post_meta($id, "qode_title-height", true);
	}else if($bridge_qode_options['title_height'] != ''){
		$bridge_qode_title_holder_height = $bridge_qode_options['title_height'];
		$bridge_qode_title_height = $bridge_qode_options['title_height'];
	}

}

$bridge_qode_page_title_position = 'left';
$bridge_qode_separator_classes = array('separator', 'small');
$bridge_qode_separator_title_position = 'left';
if(get_post_meta($id, "qode_page_title_position", true) != ""){
	$bridge_qode_page_title_position = " position_" . get_post_meta($id, "qode_page_title_position", true);
	$bridge_qode_separator_title_position = get_post_meta($id, "qode_page_title_position", true);
}else{
	$bridge_qode_page_title_position = " position_" . bridge_qode_options()->getOptionValue('page_title_position');
	$bridge_qode_separator_title_position = bridge_qode_options()->getOptionValue('page_title_position');
}
$bridge_qode_separator_classes[] = $bridge_qode_separator_title_position;

if(get_post_meta($id, "qode_title_gradient_separator_meta", true) == "yes"){
	$bridge_qode_separator_classes[] = 'qode-type1-gradient-left-to-right';
} elseif(isset($bridge_qode_options['title_gradient_separator']) && $bridge_qode_options['title_gradient_separator'] == 'yes' && get_post_meta($id, "qode_title_gradient_separator_meta", true) != "no"){
	$bridge_qode_separator_classes[] = 'qode-type1-gradient-left-to-right';
}

$bridge_qode_enable_breadcrumbs = 'no';
if(get_post_meta($id, "qode_enable_breadcrumbs", true) != ""){
	$bridge_qode_enable_breadcrumbs = get_post_meta($id, "qode_enable_breadcrumbs", true);
}elseif(isset($bridge_qode_options['enable_breadcrumbs'])){
	$bridge_qode_enable_breadcrumbs = $bridge_qode_options['enable_breadcrumbs'];
}

$bridge_qode_title_text_shadow = '';
if(get_post_meta($id, "qode_title_text_shadow", true) != ""){
	if(get_post_meta($id, "qode_title_text_shadow", true) == "yes"){
		$bridge_qode_title_text_shadow = ' title_text_shadow';
	}
}else{
	if(bridge_qode_options()->getOptionValue('title_text_shadow') == "yes"){
		$bridge_qode_title_text_shadow = ' title_text_shadow';
	}
}
$bridge_qode_subtitle_color ="";
if(get_post_meta($id, "qode_page_subtitle_color", true) != ""){
	$bridge_qode_subtitle_color = " style='color:" . get_post_meta($id, "qode_page_subtitle_color", true) . "';";
} else {
	$bridge_qode_subtitle_color = "";
}

$bridge_qode_text_above_title_color = array();
if(get_post_meta($id, "qode_page_text_above_title_color", true) != ""){
	$bridge_qode_text_above_title_color[] = 'color:' . get_post_meta($id, "qode_page_text_above_title_color", true);
}

$bridge_qode_separator_color ="";
if(get_post_meta($id, "qode_title_separator_color", true) != ""){
	$bridge_qode_separator_color = " style='background-color:" . get_post_meta($id, "qode_title_separator_color", true) . "';";
} else {
	$bridge_qode_separator_color = "";
}
$bridge_qode_title_separator = "yes";
if(get_post_meta($id, "qode_separator_bellow_title", true)){
	$bridge_qode_title_separator = get_post_meta($id, "qode_separator_bellow_title", true);
} elseif(isset($bridge_qode_options['title_separator'])) {
	$bridge_qode_title_separator = $bridge_qode_options['title_separator'];
}

//SCROLL ANIMATIONS
//Whole Title Content Animation
$bridge_qode_title_content_animation = 'no';
if (get_post_meta($id, 'page_page_title_whole_content_animations', true) !== '') {
	$bridge_qode_title_content_animation = get_post_meta($id, 'page_page_title_whole_content_animations', true);
}
elseif (get_post_meta($id, 'page_page_title_whole_content_animations', true) == '' && isset($bridge_qode_options['page_title_whole_content_animations']) && $bridge_qode_options['page_title_whole_content_animations'] !== '') {
	$bridge_qode_title_content_animation = $bridge_qode_options['page_title_whole_content_animations'];
}

$bridge_qode_page_title_content_animation_data = '';
if ($bridge_qode_title_content_animation == 'yes') {

	$bridge_qode_page_title_content_data_start = '0';
	$bridge_qode_page_title_content_start_custom_style = 'opacity:1';
	$bridge_qode_page_title_content_data_end = '300';
	$bridge_qode_page_title_content_end_custom_style = 'opacity:0';

	if (get_post_meta($id, 'page_page_title_whole_content_data_start', true) == '' && isset($bridge_qode_options['page_title_whole_content_data_start']) && $bridge_qode_options['page_title_whole_content_data_start'] !== '') {
		$bridge_qode_page_title_content_data_start = $bridge_qode_options['page_title_whole_content_data_start'];
	} elseif (get_post_meta($id, 'page_page_title_whole_content_data_start', true) !== '') {
		$bridge_qode_page_title_content_data_start = get_post_meta($id, 'page_page_title_whole_content_data_start', true);
	}

	if (get_post_meta($id, 'page_page_title_whole_content_start_custom_style', true) == '' && isset($bridge_qode_options['page_title_whole_content_start_custom_style']) && $bridge_qode_options['page_title_whole_content_start_custom_style'] !== '') {
		$bridge_qode_page_title_content_start_custom_style = $bridge_qode_options['page_title_whole_content_start_custom_style'];
	} elseif (get_post_meta($id, 'page_page_title_whole_content_start_custom_style', true) !== '') {
		$bridge_qode_page_title_content_start_custom_style = get_post_meta($id, 'page_page_title_whole_content_start_custom_style', true);
	}

	if (get_post_meta($id, 'page_page_title_whole_content_data_end', true) == '' && isset($bridge_qode_options['page_title_whole_content_data_end']) && $bridge_qode_options['page_title_whole_content_data_end'] !== '') {
		$bridge_qode_page_title_content_data_end = $bridge_qode_options['page_title_whole_content_data_end'];
	} elseif (get_post_meta($id, 'page_page_title_whole_content_data_end', true) !== '') {
		$bridge_qode_page_title_content_data_end = get_post_meta($id, 'page_page_title_whole_content_data_end', true);
	}

	if (get_post_meta($id, 'page_page_title_whole_content_end_custom_style', true) == '' && isset($bridge_qode_options['page_title_whole_content_end_custom_style']) && $bridge_qode_options['page_title_whole_content_end_custom_style'] !== '') {
		$bridge_qode_page_title_content_end_custom_style = $bridge_qode_options['page_title_whole_content_end_custom_style'];
	} elseif (get_post_meta($id, 'page_page_title_whole_content_end_custom_style', true) !== '') {
		$bridge_qode_page_title_content_end_custom_style = get_post_meta($id, 'page_page_title_whole_content_end_custom_style', true);
	}

	$bridge_qode_page_title_content_animation_data = ' data-'.$bridge_qode_page_title_content_data_start.'="'.$bridge_qode_page_title_content_start_custom_style.'" data-'.$bridge_qode_page_title_content_data_end.'="'.$bridge_qode_page_title_content_end_custom_style.'"';
}

//Title Scroll Animation
$bridge_qode_title_animation = 'no';
if (get_post_meta($id, 'page_page_title_animations', true) !== '') {
	$bridge_qode_title_animation = get_post_meta($id, 'page_page_title_animations', true);
}
elseif (get_post_meta($id, 'page_page_title_animations', true) == '' && isset($bridge_qode_options['page_title_animations']) && $bridge_qode_options['page_title_animations'] !== '') {
	$bridge_qode_title_animation = $bridge_qode_options['page_title_animations'];
}

$bridge_qode_page_title_animation_data = "";
if($bridge_qode_title_animation == 'yes') {

	$bridge_qode_page_title_data_start = '0';
	$bridge_qode_page_title_start_custom_style = 'opacity:1';
	$bridge_qode_page_title_data_end = '300';
	$bridge_qode_page_title_end_custom_style = 'opacity:0';

	if(get_post_meta($id, 'page_page_title_data_start', true) == '' && isset($bridge_qode_options['page_title_data_start']) && $bridge_qode_options['page_title_data_start'] !== '') {
		$bridge_qode_page_title_data_start = $bridge_qode_options['page_title_data_start'];
	} elseif(get_post_meta($id, 'page_page_title_data_start', true) !== '') {
		$bridge_qode_page_title_data_start = get_post_meta($id, 'page_page_title_data_start', true);
	}

	if(get_post_meta($id, 'page_page_title_start_custom_style', true) == '' && isset($bridge_qode_options['page_title_start_custom_style']) && $bridge_qode_options['page_title_start_custom_style'] !== '') {
		$bridge_qode_page_title_start_custom_style = $bridge_qode_options['page_title_start_custom_style'];
	} elseif(get_post_meta($id, 'page_page_title_start_custom_style', true) !== '') {
		$bridge_qode_page_title_start_custom_style = get_post_meta($id, 'page_page_title_start_custom_style', true);
	}

	if(get_post_meta($id, 'page_page_title_data_end', true) == '' && isset($bridge_qode_options['page_title_data_end']) && $bridge_qode_options['page_title_data_end'] !== '') {
		$bridge_qode_page_title_data_end = $bridge_qode_options['page_title_data_end'];
	} elseif(get_post_meta($id, 'page_page_title_data_end', true) !== '') {
		$bridge_qode_page_title_data_end = get_post_meta($id, 'page_page_title_data_end', true);
	}

	if(get_post_meta($id, 'page_page_title_end_custom_style', true) == '' && isset($bridge_qode_options['page_title_end_custom_style']) && $bridge_qode_options['page_title_end_custom_style'] !== '') {
		$bridge_qode_page_title_end_custom_style = $bridge_qode_options['page_title_end_custom_style'];
	} elseif(get_post_meta($id, 'page_page_title_end_custom_style', true) !== '') {
		$bridge_qode_page_title_end_custom_style = get_post_meta($id, 'page_page_title_end_custom_style', true);
	}

	$bridge_qode_page_title_animation_data = ' data-'.$bridge_qode_page_title_data_start.'="'.$bridge_qode_page_title_start_custom_style.'" data-'.$bridge_qode_page_title_data_end.'="'.$bridge_qode_page_title_end_custom_style.'"';
}

//Separator scroll animation
$bridge_qode_separator_animation = 'no';
if (get_post_meta($id, 'page_page_title_separator_animations', true) !== '') {
	$bridge_qode_separator_animation = get_post_meta($id, 'page_page_title_separator_animations', true);
}
elseif(isset($bridge_qode_options['page_title_separator_animations']) && $bridge_qode_options['page_title_separator_animations'] !== '') {
	$bridge_qode_separator_animation = $bridge_qode_options['page_title_separator_animations'];
}

$bridge_qode_page_title_separator_animation_data = "";
if($bridge_qode_separator_animation == 'yes') {

	$bridge_qode_page_title_separator_data_start = '0';
	$bridge_qode_page_title_separator_start_custom_style = 'opacity:1';
	$bridge_qode_page_title_separator_data_end = '300';
	$bridge_qode_page_title_separator_end_custom_style = 'opacity:0';

	if(get_post_meta($id, 'page_page_title_separator_data_start', true) == '' && isset($bridge_qode_options['page_title_separator_data_start']) && $bridge_qode_options['page_title_separator_data_start'] !== '') {
		$bridge_qode_page_title_separator_data_start = $bridge_qode_options['page_title_separator_data_start'];
	} elseif (get_post_meta($id, 'page_page_title_separator_data_start', true) !== '') {
		$bridge_qode_page_title_separator_data_start = get_post_meta($id, 'page_page_title_separator_data_start', true);
	}

	if(get_post_meta($id, 'page_page_title_separator_start_custom_style', true) == '' && isset($bridge_qode_options['page_title_separator_start_custom_style']) && $bridge_qode_options['page_title_separator_start_custom_style'] !== '') {
		$bridge_qode_page_title_separator_start_custom_style = $bridge_qode_options['page_title_separator_start_custom_style'];
	} elseif (get_post_meta($id, 'page_page_title_separator_start_custom_style', true) !== '') {
		$bridge_qode_page_title_separator_start_custom_style = get_post_meta($id, 'page_page_title_separator_start_custom_style', true);
	}

	if(get_post_meta($id, 'page_page_title_separator_data_end', true) == '' && isset($bridge_qode_options['page_title_separator_data_end']) && $bridge_qode_options['page_title_separator_data_end'] !== '') {
		$bridge_qode_page_title_separator_data_end = $bridge_qode_options['page_title_separator_data_end'];
	} elseif (get_post_meta($id, 'page_page_title_separator_data_end', true) !== '') {
		$bridge_qode_page_title_separator_data_end = get_post_meta($id, 'page_page_title_separator_data_end', true);
	}

	if(get_post_meta($id, 'page_page_title_separator_end_custom_style', true) == '' && isset($bridge_qode_options['page_title_separator_end_custom_style']) && $bridge_qode_options['page_title_separator_end_custom_style'] !== '') {
		$bridge_qode_page_title_separator_end_custom_style = $bridge_qode_options['page_title_separator_end_custom_style'];
	} elseif (get_post_meta($id, 'page_page_title_separator_end_custom_style', true) !== '') {
		$bridge_qode_page_title_separator_end_custom_style = get_post_meta($id, 'page_page_title_separator_end_custom_style', true);
	}

	$bridge_qode_page_title_separator_animation_data = ' data-'.$bridge_qode_page_title_separator_data_start.'="'.$bridge_qode_page_title_separator_start_custom_style.'" data-'.$bridge_qode_page_title_separator_data_end.'="'.$bridge_qode_page_title_separator_end_custom_style.'"';
}

//Subtitle scroll animation
$bridge_qode_subtitle_animation = 'no';
if (get_post_meta($id, 'page_page_subtitle_animations', true) !== '') {
	$bridge_qode_subtitle_animation = get_post_meta($id, 'page_page_subtitle_animations', true);
}
elseif (isset($bridge_qode_options['page_subtitle_animations']) && $bridge_qode_options['page_subtitle_animations'] !== '') {
	$bridge_qode_subtitle_animation = $bridge_qode_options['page_subtitle_animations'];
}

$bridge_qode_page_subtitle_animation_data = "";
if ($bridge_qode_subtitle_animation == 'yes') {

	$bridge_qode_page_subtitle_data_start = '0';
	$bridge_qode_page_subtitle_start_custom_style = 'opacity:1';
	$bridge_qode_page_subtitle_data_end = '300';
	$bridge_qode_page_subtitle_end_custom_style = 'opacity:0';

	if(get_post_meta($id, 'page_page_subtitle_data_start', true) == '' && isset($bridge_qode_options['page_subtitle_data_start']) && ($bridge_qode_options['page_subtitle_data_start'] !== '')) {
		$bridge_qode_page_subtitle_data_start = $bridge_qode_options['page_subtitle_data_start'];
	} elseif (get_post_meta($id, 'page_page_subtitle_data_start', true) !== '') {
		$bridge_qode_page_subtitle_data_start = get_post_meta($id, 'page_page_subtitle_data_start', true);
	}

	if(get_post_meta($id, 'page_page_subtitle_start_custom_style', true) == '' && isset($bridge_qode_options['page_subtitle_start_custom_style']) && ($bridge_qode_options['page_subtitle_start_custom_style'] !== '')) {
		$bridge_qode_page_subtitle_start_custom_style = $bridge_qode_options['page_subtitle_start_custom_style'];
	} elseif (get_post_meta($id, 'page_page_subtitle_start_custom_style', true) !== '') {
		$bridge_qode_page_subtitle_start_custom_style = get_post_meta($id, 'page_page_subtitle_start_custom_style', true);
	}

	if(get_post_meta($id, 'page_page_subtitle_data_end', true) == '' && isset($bridge_qode_options['page_subtitle_data_end']) && ($bridge_qode_options['page_subtitle_data_end'] !== '')) {
		$bridge_qode_page_subtitle_data_end = $bridge_qode_options['page_subtitle_data_end'];
	} elseif (get_post_meta($id, 'page_page_subtitle_data_end', true) !== '') {
		$bridge_qode_page_subtitle_data_end = get_post_meta($id, 'page_page_subtitle_data_end', true);
	}

	if(get_post_meta($id, 'page_page_subtitle_end_custom_style', true) == '' && isset($bridge_qode_options['page_subtitle_end_custom_style']) && ($bridge_qode_options['page_subtitle_end_custom_style'] !== '')) {
		$bridge_qode_page_subtitle_end_custom_style = $bridge_qode_options['page_subtitle_end_custom_style'];
	} elseif (get_post_meta($id, 'page_page_subtitle_end_custom_style', true) !== '') {
		$bridge_qode_page_subtitle_end_custom_style = get_post_meta($id, 'page_page_subtitle_end_custom_style', true);
	}

	$bridge_qode_page_subtitle_animation_data = ' data-'.$bridge_qode_page_subtitle_data_start.'="'.$bridge_qode_page_subtitle_start_custom_style.'" data-'.$bridge_qode_page_subtitle_data_end.'="'.$bridge_qode_page_subtitle_end_custom_style.'"';

}

//Breadcrumbs scroll animation
$bridge_qode_breadcrumbs_animation = 'no';
if (get_post_meta($id, 'page_page_title_breadcrumbs_animations', true) !== '') {
	$bridge_qode_breadcrumbs_animation = get_post_meta($id, 'page_page_title_breadcrumbs_animations', true);
}
elseif (get_post_meta($id, 'page_page_title_breadcrumbs_animations', true) == '' && isset($bridge_qode_options['page_title_breadcrumbs_animations']) && $bridge_qode_options['page_title_breadcrumbs_animations'] !== '') {
	$bridge_qode_breadcrumbs_animation = $bridge_qode_options['page_title_breadcrumbs_animations'];
}

$bridge_qode_page_title_breadcrumbs_animation_data = '';
if($bridge_qode_enable_breadcrumbs == 'yes' && $bridge_qode_breadcrumbs_animation == 'yes') {

	$bridge_qode_page_title_breadcrumbs_data_start = '0';
	$bridge_qode_page_title_breadcrumbs_start_custom_style = 'opacity:1';
	$bridge_qode_page_title_breadcrumbs_data_end = '300';
	$bridge_qode_page_title_breadcrumbs_end_custom_style = 'opacity:0';

	if(get_post_meta($id, 'page_page_title_breadcrumbs_data_start', true) == '' && isset($bridge_qode_options['page_title_breadcrumbs_data_start']) && ($bridge_qode_options['page_title_breadcrumbs_data_start'] !== '')) {
		$bridge_qode_page_title_breadcrumbs_data_start = $bridge_qode_options['page_title_breadcrumbs_data_start'];
	} elseif (get_post_meta($id, 'page_page_title_breadcrumbs_data_start', true) !== '') {
		$bridge_qode_page_title_breadcrumbs_data_start = get_post_meta($id, 'page_page_title_breadcrumbs_data_start', true);
	}

	if(get_post_meta($id, 'page_page_title_breadcrumbs_start_custom_style', true) == '' && isset($bridge_qode_options['page_title_breadcrumbs_start_custom_style']) && ($bridge_qode_options['page_title_breadcrumbs_start_custom_style'] !== '')) {
		$bridge_qode_page_title_breadcrumbs_start_custom_style = $bridge_qode_options['page_title_breadcrumbs_start_custom_style'];
	} elseif (get_post_meta($id, 'page_page_title_breadcrumbs_start_custom_style', true) !== '') {
		$bridge_qode_page_title_breadcrumbs_start_custom_style = get_post_meta($id, 'page_page_title_breadcrumbs_start_custom_style', true);
	}

	if(get_post_meta($id, 'page_page_title_breadcrumbs_data_end', true) == '' && isset($bridge_qode_options['page_title_breadcrumbs_data_end']) && ($bridge_qode_options['page_title_breadcrumbs_data_end'] !== '')) {
		$bridge_qode_page_title_breadcrumbs_data_end = $bridge_qode_options['page_title_breadcrumbs_data_end'];
	} elseif (get_post_meta($id, 'page_page_title_breadcrumbs_data_end', true) !== '') {
		$bridge_qode_page_title_breadcrumbs_data_end = get_post_meta($id, 'page_page_title_breadcrumbs_data_end', true);
	}

	if(get_post_meta($id, 'page_page_title_breadcrumbs_end_custom_style', true) == '' && isset($bridge_qode_options['page_title_breadcrumbs_end_custom_style']) && ($bridge_qode_options['page_title_breadcrumbs_end_custom_style'] !== '')) {
		$bridge_qode_page_title_breadcrumbs_end_custom_style = $bridge_qode_options['page_title_breadcrumbs_end_custom_style'];
	} elseif (get_post_meta($id, 'page_page_title_breadcrumbs_end_custom_style', true) !== '') {
		$bridge_qode_page_title_breadcrumbs_end_custom_style = get_post_meta($id, 'page_page_title_breadcrumbs_end_custom_style', true);
	}

	$bridge_qode_page_title_breadcrumbs_animation_data = ' data-'.$bridge_qode_page_title_breadcrumbs_data_start.'="'.$bridge_qode_page_title_breadcrumbs_start_custom_style.'" data-'.$bridge_qode_page_title_breadcrumbs_data_end.'="'.$bridge_qode_page_title_breadcrumbs_end_custom_style.'"';
}

$bridge_qode_animation = '';
if($bridge_qode_title_content_animation == 'yes' || $bridge_qode_title_animation == 'yes' || $bridge_qode_separator_animation == 'yes' || $bridge_qode_subtitle_animation == 'yes' || $bridge_qode_breadcrumbs_animation == 'yes') {
	$bridge_qode_animation = 'data-animation="yes"';
}

if(!bridge_qode_is_title_hidden()) { ?>
	<div class="title_outer <?php echo bridge_qode_get_module_part( $bridge_qode_animate_title_class.$bridge_qode_title_text_shadow ); if($bridge_qode_responsive_title_image == 'yes' && $bridge_qode_show_title_image == true){ echo ' with_image'; }?>"  <?php print bridge_qode_get_module_part( $bridge_qode_animation ); ?>  <?php echo 'data-height="'.$bridge_qode_title_height.'"'; if($bridge_qode_title_height != '' && $bridge_qode_animate_title_area == 'area_top_bottom'){ echo 'style="opacity:0;height:' . $bridge_qode_header_height_padding .'px;"'; } ?>>
		<div class="title <?php echo bridge_qode_get_module_part( $bridge_qode_page_title_fontsize . " " . $bridge_qode_page_title_position . " " . $bridge_qode_page_title_border_bottom_in_grid_class ); if($bridge_qode_responsive_title_image == 'no' && $bridge_qode_title_image != "" && ($bridge_qode_fixed_title_image == "yes" || $bridge_qode_fixed_title_image == "yes_zoom") && $bridge_qode_show_title_image == true){ echo ' has_fixed_background '; if($bridge_qode_fixed_title_image == "yes_zoom"){ echo 'zoom_out '; } } if($bridge_qode_responsive_title_image == 'no' && $bridge_qode_title_image != "" && $bridge_qode_fixed_title_image == "no" && $bridge_qode_show_title_image == true){ echo ' has_background'; }  ?>" style="<?php if($bridge_qode_responsive_title_image == 'no' && $bridge_qode_title_image != "" && $bridge_qode_show_title_image == true){ if($bridge_qode_title_image_width != ''){ echo 'background-size:'.$bridge_qode_title_image_width.'px auto;'; } echo 'background-image:url('.$bridge_qode_title_image.');';  } if($bridge_qode_title_height != ''){ echo 'height:'.$bridge_qode_title_height.'px;'; } if($bridge_qode_title_background_color != ''){ echo 'background-color:'.$bridge_qode_title_background_color.';'; } ?>">
			<div class="image <?php if($bridge_qode_responsive_title_image == 'yes' && $bridge_qode_title_image != "" && $bridge_qode_show_title_image == true){ echo "responsive"; }else{ echo "not_responsive"; } ?>"><?php if($bridge_qode_title_image != "" && $bridge_qode_show_title_image == true){ ?><img itemprop="image" src="<?php echo esc_url( $bridge_qode_title_image ); ?>" alt="&nbsp;" /> <?php } ?></div>
			<?php if($bridge_qode_title_overlay_image != ""){ ?>
				<div class="title_overlay" style="background-image:url('<?php echo esc_url( $bridge_qode_title_overlay_image ); ?>');"></div>
			<?php } ?>
			<?php if(!bridge_qode_is_title_text_hidden()) { ?>
				<div class="title_holder" <?php print bridge_qode_get_module_part( $bridge_qode_page_title_content_animation_data ); ?> <?php if($bridge_qode_responsive_title_image != 'yes' && get_post_meta($id, "qode_show-page-title-image", true) == ""){ echo bridge_qode_get_module_part( $bridge_qode_title_holder_height ); }?>>
					<div class="container">
						<div class="container_inner clearfix">
								<div class="title_subtitle_holder" <?php if($bridge_qode_responsive_title_image == 'yes' && $bridge_qode_show_title_image == true){ echo bridge_qode_get_module_part( $bridge_qode_title_subtitle_padding ); }?>>
                                <?php if(isset($bridge_qode_options['overlapping_content']) && $bridge_qode_options['overlapping_content'] == 'yes') {?><div class="overlapping_content_margin"><?php } ?>
                                <?php if(($bridge_qode_responsive_title_image == 'yes' && $bridge_qode_show_title_image == true) || ($bridge_qode_fixed_title_image == "yes" || $bridge_qode_fixed_title_image == "yes_zoom") || ($bridge_qode_responsive_title_image == 'no' && $bridge_qode_title_image != "" && $bridge_qode_fixed_title_image == "no" && $bridge_qode_show_title_image == true)){ ?>
									<div class="title_subtitle_holder_inner">
								<?php } ?>
									<?php if(get_post_meta($id, "qode_page_text_above_title", true) != ""){ ?>
										<span class="text_above_title" <?php echo bridge_qode_get_inline_style($bridge_qode_text_above_title_color); ?>><?php echo get_post_meta($id, "qode_page_text_above_title", true); ?></span>
									<?php } ?>
									<h1 <?php print bridge_qode_get_module_part( $bridge_qode_page_title_animation_data ); if(get_post_meta($id, "qode_page-title-color", true)) { ?> style="color:<?php echo get_post_meta($id, "qode_page-title-color", true) ?>" <?php } ?>><span><?php bridge_qode_title_text(); ?></span></h1>
									<?php if($bridge_qode_title_separator == "yes"){ ?>
										<span <?php bridge_qode_class_attribute(implode(' ', $bridge_qode_separator_classes)) ?> <?php echo bridge_qode_get_module_part( $bridge_qode_separator_color ); ?> <?php print bridge_qode_get_module_part( $bridge_qode_page_title_separator_animation_data ); ?>></span>
									<?php } ?>
								
									<?php if(get_post_meta($id, "qode_page_subtitle", true) != ""){ ?>
										<?php if(get_post_meta($id, "qode_page_title_font_size", true) == "large") { ?>
											<h4 class="subtitle" <?php print bridge_qode_get_module_part( $bridge_qode_page_subtitle_animation_data ); ?> <?php echo bridge_qode_get_module_part( $bridge_qode_subtitle_color ); ?>><?php echo get_post_meta($id, "qode_page_subtitle", true); ?></h4>
										<?php } else { ?>
											<span class="subtitle" <?php print bridge_qode_get_module_part( $bridge_qode_page_subtitle_animation_data ); ?> <?php echo bridge_qode_get_module_part( $bridge_qode_subtitle_color ); ?>><?php echo get_post_meta($id, "qode_page_subtitle", true); ?></span>
										<?php } ?>
									<?php } ?>
									<?php if (function_exists('bridge_qode_custom_breadcrumbs') && $bridge_qode_enable_breadcrumbs == "yes") { ?>
										<div class="breadcrumb" <?php print bridge_qode_get_module_part( $bridge_qode_page_title_breadcrumbs_animation_data ); ?>> <?php bridge_qode_custom_breadcrumbs(); ?></div>
									<?php } ?>
								<?php if(($bridge_qode_responsive_title_image == 'yes' && $bridge_qode_show_title_image == true)  || ($bridge_qode_fixed_title_image == "yes" || $bridge_qode_fixed_title_image == "yes_zoom") || ($bridge_qode_responsive_title_image == 'no' && $bridge_qode_title_image != "" && $bridge_qode_fixed_title_image == "no" && $bridge_qode_show_title_image == true)){ ?>
									</div>
								<?php } ?>
                                <?php if(isset($bridge_qode_options['overlapping_content']) && $bridge_qode_options['overlapping_content'] == 'yes') {?></div><?php } ?>
                            </div>
						</div>
					</div>
				</div>
			<?php } ?>
			<?php if ($bridge_qode_is_title_angled_enabled)     { ?>
				<svg class="angled-section svg-title-bottom" preserveAspectRatio="none" viewBox="0 0 86 86" width="100%" height="86">
					<?php if($bridge_qode_title_angled_position == 'from_left_to_right'){ ?>
						<polygon style="fill: <?php echo esc_attr($bridge_qode_title_angled_background_color); ?>;" points="0,0 0,86 86,86" />
					<?php }
					if($bridge_qode_title_angled_position == 'from_right_to_left'){ ?>
						<polygon style="fill: <?php echo esc_attr($bridge_qode_title_angled_background_color); ?>;" points="0,86 86,0 86,86" />
					<?php } ?>
				</svg>
			<?php } ?>
		</div>
		<?php if($bridge_qode_page_title_border_bottom_in_grid){ ?>
			<div class="title_border_in_grid_holder"></div>
		<?php } ?>
	</div>
<?php } ?>
<?php
	/* Return id for archive pages */
	if(is_category() || is_tag() || is_author()){
		$id = $bridge_qode_archive_id;
	}
?>