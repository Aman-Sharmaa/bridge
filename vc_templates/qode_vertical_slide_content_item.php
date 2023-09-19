<?php

$args = array(
    "background_color" => "",
    "background_image" => "",
    "item_padding" => "",
    "aligment" => "",
	"header_style" => "",
);

$html = "";
$qode_splitted_item_style = "";
$qode_splitted_item_data = "";

extract(shortcode_atts($args, $atts));


if($background_color != "" || $background_image != "" || $item_padding != "" || $item_padding != "") {
    $qode_splitted_item_style .= "style='";

    if ($background_color != "") {
        $qode_splitted_item_style .= "background-color:".$background_color.";";
    }

    if ($background_image != "") {
        $background_image_src = wp_get_attachment_url( $background_image );
        $qode_splitted_item_style .= "background-image:url(".$background_image_src.");";
    }

    if ($aligment != "") {
        $qode_splitted_item_style .= "text-align:".$aligment.";";
    }

    if ($item_padding != "") {
        $qode_splitted_item_style .= "padding:0px ".$item_padding.";";
    }

    $qode_splitted_item_style .= "'";
}
$qode_splitted_item_data = "data-header_style='".$header_style."'"; //render empty value also, in order to remove header style if needed

$html .= "<div class='ms-section' ".$qode_splitted_item_style." ".$qode_splitted_item_data." >";
$html .= do_shortcode($content);
$html .= "</div>";
echo bridge_qode_get_module_part( $html );

