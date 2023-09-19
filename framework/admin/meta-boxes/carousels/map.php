<?php

//Carousels

$qodeCarousels = new BridgeQodeMetaBox("carousels",  esc_html__('Qode Carousels', 'bridge'));
bridge_qode_framework()->qodeMetaBoxes->addMetaBox("carousels",$qodeCarousels);

	$qode_carousel_image = new BridgeQodeMetaField("image","qode_carousel-image","",esc_html__('Carousel Image', 'bridge'),esc_html__('Choose carousel image (min width needs to be 220px)','bridge'));
	$qodeCarousels->addChild("qode_carousel-image",$qode_carousel_image);

	$qode_carousel_hover_image = new BridgeQodeMetaField("image","qode_carousel-hover-image","", esc_html__('Carousel Hover Image', 'bridge'), esc_html__('Choose carousel hover image (min width needs to be 220px)', 'bridge'));
	$qodeCarousels->addChild("qode_carousel-hover-image",$qode_carousel_hover_image);

	$qode_carousel_item_link = new BridgeQodeMetaField("text","qode_carousel-item-link","", esc_html__('Link', 'bridge'), esc_html__('Attach URL link to an image (e.g. http://www.example.com)','bridge'));
	$qodeCarousels->addChild("qode_carousel-item-link",$qode_carousel_item_link);

	$qode_carousel_item_target = new BridgeQodeMetaField("selectblank","qode_carousel-item-target","", esc_html__('Target', 'bridge'), esc_html__('Specify where to open the linked document', 'bridge'), array(
        "_self"		=>  esc_html__('Self', 'bridge'),
        "_blank"	=>  esc_html__('Blank','bridge')
    ));
	$qodeCarousels->addChild("qode_carousel-item-target",$qode_carousel_item_target);