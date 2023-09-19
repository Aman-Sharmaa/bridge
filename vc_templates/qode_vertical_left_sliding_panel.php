<?php
$html = "";

$html = "<div class='ms-left'>";
$html .= do_shortcode($content);
$html .= '</div>';

echo bridge_qode_get_module_part( $html );

