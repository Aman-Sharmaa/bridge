<?php

$args = array(
	"image" => "",
	"title" => "",
	"link" => "",
	"target" => ""
);

$params = shortcode_atts($args, $atts);
$params['content'] = $content;
$params['args'] = $args;

extract($params);

echo bridge_core_get_shortcode_template_part('templates/in-device-slider-item', '_in-device-slider', '', $params);