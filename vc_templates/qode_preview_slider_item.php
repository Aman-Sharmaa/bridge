<?php

$args = array(
    "skin" => "",
	"big_image" => "",
	"small_image" => "",
	"link" => "",
	"target" => ""
);

$params = shortcode_atts($args, $atts);
$params['content'] = $content;
$params['args'] = $args;

extract($params);

echo bridge_core_get_shortcode_template_part('templates/preview-slider-item', '_preview-slider', '', $params);