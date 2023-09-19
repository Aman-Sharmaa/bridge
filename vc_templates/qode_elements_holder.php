<?php

$args = array(
	"number_of_columns" => "",
	"columns_proportion" => "",
	"three_columns_proportion" => "",
	"background_color" => "",
	"switch_to_one_column" => "",
	"alignment_one_column" => "",
	"custom_class"	=> ""
);

$html = "";

extract(shortcode_atts($args, $atts));

$number_of_columns_class = "";
$elements_holder_style = "";

if($number_of_columns != ''){
	$number_of_columns_class = " " . $number_of_columns ;
}
if($columns_proportion != '') {
	$number_of_columns_class .= ' eh_two_columns_' . $columns_proportion;
}
if($three_columns_proportion != '') {
	$number_of_columns_class .= ' eh_three_columns_' . $three_columns_proportion;
}
if($switch_to_one_column != ""){
	$number_of_columns_class .= " responsive_mode_from_" . $switch_to_one_column ;
} else {
	$number_of_columns_class .= " responsive_mode_from_768" ;
}

if($alignment_one_column != ""){
	$number_of_columns_class .= " alignment_one_column_" . $alignment_one_column ;
}

if($background_color != ""){
	$elements_holder_style = " style='background-color:". $background_color ."'";
}


$html = "<div class='q_elements_holder" . $number_of_columns_class;
if(! empty($custom_class)){
	$html .= " " . $custom_class; 
}
$html .= "' ". $elements_holder_style .">";
$html .= do_shortcode($content);
$html .= '</div>';

echo bridge_qode_get_module_part( $html );