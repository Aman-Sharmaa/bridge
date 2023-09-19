<?php

$args = array(
	"title"         	=> "",
	"title_color"		=> "",
	"title_font_size" 	=> "",
	"title_tag"			=> "h4",
	"text"				=> "",
	"text_color"		=> "",
	"text_font_size"	=> "",
	"price"         	=> "0",
	"price_color"		=> "",
	"price_font_size"	=> "",
);

extract(shortcode_atts($args, $atts));

$headings_array = array('h2', 'h3', 'h4', 'h5', 'h6');

//get correct heading value. If provided heading isn't valid get the default one
$title_tag = (in_array($title_tag, $headings_array)) ? $title_tag : $args['title_tag'];

$params = shortcode_atts($args, $atts);
$params['content'] = $content;
$params['args'] = $args;

extract($params);

echo bridge_core_get_shortcode_template_part('templates/pricing-list-item', '_pricing-list', '', $params);