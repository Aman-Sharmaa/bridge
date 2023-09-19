<?php

$args = array(
    "image"         => "",
    'hover_image'	=> '',
    "link"          => "",
    "link_target"   => "_self"
);

$params = shortcode_atts($args, $atts);
$params['content'] = $content;
$params['args'] = $args;

extract($params);

echo bridge_core_get_shortcode_template_part('templates/client', '_clients', '', $params);