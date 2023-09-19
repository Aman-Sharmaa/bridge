<?php

$args = array(
	"background_color" => "",
	"background_image" => "",
	"item_padding" => "",
	"vertical_alignment" => "",
    "horizontal_alignment" => "",
	"advanced_animations" => "no",
	"start_position" => "",
	"end_position" => "",
	"start_animation_style" => "",
	"end_animation_style" => "",
    "item_padding_1280_1440" => "",
    "item_padding_1024_1280" => "",
    "item_padding_768_1024" => "",
    "item_padding_600_768" => "",
    "item_padding_480_600" => "",
    "item_padding_480" => "",
    "custom_class" => "",
    'cover'         => 'no'
);

$html = "";
$qode_elements_item_style = "";
$qode_elements_item_inner_style = "";
$background_image_src = "";


extract(shortcode_atts($args, $atts));

$background_color = esc_attr($background_color);
$item_padding = esc_attr($item_padding);
$start_position = esc_attr($start_position);
$end_position = esc_attr($end_position);
$start_animation_style = esc_attr($start_animation_style);
$end_animation_style = esc_attr($end_animation_style);


if($background_color != "" || $background_image !== '' || $vertical_alignment !== "" || $horizontal_alignment !== ""){
	$qode_elements_item_style .= " style='";
}

if($background_color != ""){
	$qode_elements_item_style .= "background-color:" . $background_color . ";";
}

if($background_image != ""){
	if(is_numeric($background_image)) {
		$background_image_src = wp_get_attachment_url($background_image);
	} else {
		$background_image_src = $background_image;
	}
	$qode_elements_item_style .= "background-image: url(" . $background_image_src . ");";
	$qode_elements_item_style .= "background-position: center;";

    if(!empty($cover) && $cover == 'yes'){
        $qode_elements_item_style .= "background-size: cover;";
    }
}

if($vertical_alignment != ""){
	$qode_elements_item_style .= "vertical-align:" . $vertical_alignment . ";";
}

if($horizontal_alignment != ""){
    $qode_elements_item_style .= "text-align:" . $horizontal_alignment . ";";
}

if($background_color != "" || $background_image !== '' || $vertical_alignment !== "" || $horizontal_alignment !== ""){
	$qode_elements_item_style .= "'";
}

if($item_padding != ""){
	$qode_elements_item_inner_style = " style='padding:". $item_padding ."'";
}

//generate random class for custom responsive css
$rand_class = 'q_elements_holder_custom_' . mt_rand(100000,1000000);

$html .= "<div class='q_elements_item ";

if(!empty($custom_class)){
    $html .= $custom_class;
}

$html .= "'";

//crate array with responsive breakpoints for custom css
$element_holder_item_responsive_style = array();

if ($item_padding_1280_1440 !== '') {
	$element_holder_item_responsive_style['item_padding_1280_1440'] = $item_padding_1280_1440;
    $html .= " data-1280-1440='$item_padding_1280_1440'";
}
if ($item_padding_1024_1280 !== '') {
    $element_holder_item_responsive_style['item_padding_1024_1280'] = $item_padding_1024_1280;
    $html .= " data-1024-1280='$item_padding_1024_1280'";
}
if ($item_padding_768_1024 !== '') {
    $element_holder_item_responsive_style['item_padding_768_1024'] = $item_padding_768_1024;
    $html .= " data-768-1024='$item_padding_768_1024'";
}
if ($item_padding_600_768 !== '') {
    $element_holder_item_responsive_style['item_padding_600_768'] = $item_padding_600_768;
    $html .= " data-600-768='$item_padding_600_768'";
}
if ($item_padding_480_600 !== '') {
    $element_holder_item_responsive_style['item_padding_480_600'] = $item_padding_480_600;
    $html .= " data-480-600='$item_padding_480_600'";
}
if ($item_padding_480 !== '') {
    $element_holder_item_responsive_style['item_padding_480'] = $item_padding_480;
    $html .= " data-480='$item_padding_480'";
}


$html .= " data-animation='$advanced_animations'";
$html .= " data-item-class='$rand_class'";

if ($advanced_animations == 'yes') {
	$html .= " data-".$start_position."='$start_animation_style' data-".$end_position."='$end_animation_style'";
}
$html .= $qode_elements_item_style . "><div class='q_elements_item_inner'>";
$html .= "<div class='q_elements_item_content ".$rand_class."'". $qode_elements_item_inner_style .">";

$html .= do_shortcode($content);
$html .= '</div></div></div>';
echo bridge_qode_get_module_part( $html );

