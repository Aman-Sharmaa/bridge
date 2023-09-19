<?php
$args = array(
    "title"							=> "",
	"title_tag"						=> "h5",
    "text"							=> "",
    "icon"							=> "",
    "size"							=> "",
    "icon_color"					=> "",
    "icon_background_color"			=> "",
    "border_color"					=> "",
    "icon_color_hover"				=> "",
    "icon_background_color_hover"	=> "",
    "border_color_hover"			=> "",
    'enable_link'					=> 'no',
    'link'							=> '',
    'target'						=> '_blank'
);

$params = shortcode_atts($args, $atts);
$params['content'] = $content;
$params['args'] = $args;

extract($params);

echo bridge_core_get_shortcode_template_part('templates/animated-icon-with-text', '_animated-icons-with-text', '', $params);