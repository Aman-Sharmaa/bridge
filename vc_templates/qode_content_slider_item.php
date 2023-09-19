<?php

$html = "";

$html .= '<div class="qode_content_slider_item">';
$html .= do_shortcode($content);
$html .= '</div>';

echo bridge_qode_get_module_part( $html );

