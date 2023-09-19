<?php

$args = array(
    "type"			=> "",
    "title"			=> "",
    "title_tag"		=> "h4",
    "title_tag_standard"	=> "",
    "subtitle"		=> "",
    "short_info"	=> "",
    "additional_info"	=> "",
    "image"	=> "",
    "price"         => "0",
    "currency"      => "$",
    "price_period"  => "/mo",
    "show_button"   => "yes",
    "link"          => "",
    "target"        => "_self",
    "button_text"   => "Purchase",
    "button_size"   => "",
    "active"        => "",
    "active_text"   => "Best price"
);

$params = shortcode_atts($args, $atts);
$params['content'] = $content;
$params['args'] = $args;

extract($params);

echo bridge_core_get_shortcode_template_part('templates/pricing-table', '_pricing-tables', '', $params);