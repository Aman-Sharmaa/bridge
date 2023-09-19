<?php

$args = array(
    "type"                          => "",
    "background_color"              => "",
    "background_transparency"       => "",
    "border_color"                  => "",
    "border_width"                  => "",
    "icon"                          => "",
    "size"                          => "fa-3x",
    "icon_color"                    => "",
    "image"                         => "",
    "text_in_circle"                => "",
    "text_in_circle_tag"            => "h3",
    "font_size"                     => "",
    "text_in_circle_color"          => "",
    "text_in_circle_font_weight"    => "",
    "link"                          => "",
    "link_target"                   => "_self",
    "title"                         => "",
    "title_tag"                     => "h3",
    "title_color"                   => "",
    "text"                          => "",
    "text_color"                    => ""
);

$params = shortcode_atts($args, $atts);
$params['content'] = $content;
$params['args'] = $args;

extract($params);

echo bridge_core_get_shortcode_template_part('templates/circle', '_circles', '', $params);