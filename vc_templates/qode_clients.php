<?php

$args = array(
    "columns"         => "four_columns",
    'hover_effect'	  => 'default',
    'switch_effect'	  => '',
    'disable_separators' => 'no'
);

$html = "";

extract(shortcode_atts($args, $atts));

$html = '<div class="qode_clients clearfix '.$columns;

($hover_effect == 'switch_img') ? $html .= ' qode_clients_switch_images' : $html .= ' default';

if($hover_effect != 'default'){
	($switch_effect == 'switch_fade') ? $html .= ' qode_clients_switch_fade' : $html .= ' qode_clients_switch_roll';
}

if($disable_separators == 'yes'){
	$html .= ' qode_clients_separators_disabled';
}

$html .= '">';

$html .= do_shortcode($content);

$html .= '</div>';

echo bridge_qode_get_module_part( $html );