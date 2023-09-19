<?php

$args = array(
    "skin" => ""
);

$params = shortcode_atts($args, $atts);
extract($params);

$holder_classes = 'qode-preview-slider';

$html = "";

if( ! empty( $skin ) && $skin == 'dark' ){
    $img_src = get_template_directory_uri() . '/img/bridge-phone-hollow-dark.png';
    $holder_classes .= ' qode-preview-slider-dark-devices';
} else{
    $img_src = get_template_directory_uri() . '/img/bridge-phone-hollow.png';
}

$html .=
	'<div class="' . $holder_classes . '">'.
		'<div class="qode-presl-main-slider">'.
			'<ul class="slides">'.
				do_shortcode($content).
			'</ul>'.
		'</div>'.
		'<div class="qode-presl-small-slider-holder">'.
			'<div class="qode-presl-small-slider">'.
				'<ul class="slides"></ul>'.
			'</div>'.
			'<img itemprop="image" class="qode-presl-phone" src="' . $img_src . '" alt="'. esc_html__('Phone', 'bridge') .'">'.
		'</div>'.
	'</div>'.
'';

echo bridge_qode_get_module_part( $html );

