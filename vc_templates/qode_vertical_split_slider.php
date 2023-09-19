<?php

$html = "";
$data_attr = '';

$data_disable_header_skin_change = 'no';
$data_attr .= " data-disable-header-skin-change='" . $data_disable_header_skin_change . "'";

$html .= '<div class="vertical_split_slider" '.$data_attr.'>';
$html .= do_shortcode($content);
$html .= '</div>';

echo bridge_qode_get_module_part( $html );

