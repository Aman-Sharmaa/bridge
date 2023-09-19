<?php

$args = array(
	"height" => "0",
	"spacing" => "0",
	"behavior" => "",
	"appear_fx" => ""
);

extract(shortcode_atts($args, $atts));

$aux_classes = '';

if (!empty($behavior)) {
	$aux_classes .= 'qode-'.$behavior;
}

if (!empty($appear_fx) && ($appear_fx == 'yes')) {
	$aux_classes .= ' qode-appear-fx';
}

$html = "";

$html .= '<div class="qode-horizontal-marquee '. esc_attr($aux_classes) .'" data-height="'.esc_attr($height).'" data-spacing="'.esc_attr($spacing).'">';
$html .= '<div class="qode-horizontal-marquee-inner clearfix">';
$html .= do_shortcode($content);
$html .= '</div>';
$html .= '</div>';

echo bridge_qode_get_module_part( $html );

