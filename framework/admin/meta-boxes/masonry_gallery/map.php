<?php
//Masonry Gallery Metaboxes

//General settings for text, buttons, links
$qodeMasonryGalleryItemGeneral = new BridgeQodeMetaBox("masonry_gallery", esc_html__('Masonry Gallery General', 'bridge'));
bridge_qode_framework()->qodeMetaBoxes->addMetaBox("masonry_gallery_item_general",$qodeMasonryGalleryItemGeneral);

	$qode_masonry_gallery_item_text = new BridgeQodeMetaField('text', 'qode_masonry_gallery_item_text', '', esc_html__('Text', 'bridge'), '');
	$qodeMasonryGalleryItemGeneral->addChild('qode_masonry_gallery_item_text', $qode_masonry_gallery_item_text);

	$qode_masonry_gallery_item_link = new BridgeQodeMetaField('text', 'qode_masonry_gallery_item_link', '', esc_html__('Link', 'bridge'), '');
	$qodeMasonryGalleryItemGeneral->addChild('qode_masonry_gallery_item_link', $qode_masonry_gallery_item_link);

	$qode_masonry_gallery_item_link_target = new BridgeQodeMetaField('select', 'qode_masonry_gallery_item_link_target', '_self', esc_html__('Link target', 'bridge'), '', array(
		'_self'		=> esc_html__('Self', 'bridge'),
		'_blank'	=> esc_html__('Blank', 'bridge')
	));
	$qodeMasonryGalleryItemGeneral->addChild('qode_masonry_gallery_item_link_target', $qode_masonry_gallery_item_link_target);
	
	$qode_masonry_item_parallax = new BridgeQodeMetaField("select","qode_masonry_item_parallax","no",esc_html__('Set Item in Parallax', 'bridge'),"", array(
		'no'	=> esc_html__( 'No', 'bridge' ),
		'yes'	=> esc_html__( 'Yes', 'bridge' )
	));
	$qodeMasonryGalleryItemGeneral->addChild("qode_masonry_item_parallax",$qode_masonry_item_parallax);
	
	//Masonry Gallery Style - Size, Type
	$section_style_title = new BridgeQodeTitle('section_style_title', esc_html__('Masonry Gallery Item Style', 'bridge'));
	$qodeMasonryGalleryItemGeneral->addChild('section_style_title', $section_style_title);

	$qode_masonry_gallery_item_size = new BridgeQodeMetaField('select', 'qode_masonry_gallery_item_size', 'square_small', esc_html__('Size', 'bridge'), esc_html__('Size','bridge'), array(
		'square_small'			=> esc_html__('Square Small', 'bridge'),
		'square_big'			=> esc_html__('Square Big', 'bridge'),
		'rectangle_portrait'	=> esc_html__('Rectangle Portrait', 'bridge'),
		'rectangle_landscape'	=> esc_html__('Rectangle Landscape', 'bridge')
	));
	$qodeMasonryGalleryItemGeneral->addChild('qode_masonry_gallery_item_size', $qode_masonry_gallery_item_size);

	$qode_masonry_gallery_item_type = new BridgeQodeMetaField('select', 'qode_masonry_gallery_item_type', 'with_button', esc_html__('Type', 'bridge'), esc_html__('Type', 'bridge'), array(
		'with_button'	=> esc_html__('With Button', 'bridge'),
		'with_icon'		=> esc_html__('With Icon', 'bridge'),
		'standard'		=> esc_html__('Standard', 'bridge')
	),
	array(
		'dependence' => true,
		'hide' => array(
			'with_button' => '#qodef_qode_masonry_gallery_item_icon_type_container',
			'with_icon' => '#qodef_qode_masonry_gallery_item_button_type_container',
			'standard' => '#qodef_qode_masonry_gallery_item_button_type_container, #qodef_qode_masonry_gallery_item_icon_type_container'
		),
		'show' => array(
			'with_button' => '#qodef_qode_masonry_gallery_item_button_type_container',
			'with_icon' => '#qodef_qode_masonry_gallery_item_icon_type_container',
			'standard' => ''
		)
	));
	$qodeMasonryGalleryItemGeneral->addChild('qode_masonry_gallery_item_type', $qode_masonry_gallery_item_type);

	$qode_masonry_gallery_item_button_type_container = new BridgeQodeContainer('qode_masonry_gallery_item_button_type_container', 'qode_masonry_gallery_item_type', '', array('standard', 'with_icon'));
	$qodeMasonryGalleryItemGeneral->addChild('qode_masonry_gallery_item_button_type_container', $qode_masonry_gallery_item_button_type_container);

		$qode_masonry_gallery_button_label = new BridgeQodeMetaField('text', 'qode_masonry_gallery_button_label', '', esc_html__('Button Label', 'bridge'), '');
		$qode_masonry_gallery_item_button_type_container->addChild('qode_masonry_gallery_button_label', $qode_masonry_gallery_button_label);

	$qode_masonry_gallery_item_icon_type_container = new BridgeQodeContainer('qode_masonry_gallery_item_icon_type_container', 'qode_masonry_gallery_item_type', '', array('standard', 'with_button'));
	$qodeMasonryGalleryItemGeneral->addChild('qode_masonry_gallery_item_icon_type_container', $qode_masonry_gallery_item_icon_type_container);
//Icon Packages
$qode_masonry_gallery_item_icon_hide_array = array();
$qode_masonry_gallery_item_icon_show_array = array();

if(is_array(bridge_qode_icon_collections()->iconCollections) && count(bridge_qode_icon_collections()->iconCollections)) {

    $qode_masonry_gallery_item_icon_collection_params = bridge_qode_icon_collections()->getIconCollectionsParams();

    foreach (bridge_qode_icon_collections()->iconCollections as $dep_collection_key => $dep_collection_object) {

        $qode_masonry_gallery_item_icon_hide_array[$dep_collection_key] = '';

        $qode_masonry_gallery_item_icon_show_array[$dep_collection_key] = '#qodef_qode_masonry_gallery_item_with_icon_'.$dep_collection_object->param.'_container';

        foreach ($qode_masonry_gallery_item_icon_collection_params as $qode_masonry_gallery_item_icon_collection_param) {

            if($qode_masonry_gallery_item_icon_collection_param !== $dep_collection_object->param) {
                $qode_masonry_gallery_item_icon_hide_array[$dep_collection_key].= '#qodef_qode_masonry_gallery_item_with_icon_'.$qode_masonry_gallery_item_icon_collection_param.'_container,';
            }

        }

        $qode_masonry_gallery_item_icon_hide_array[$dep_collection_key] = rtrim($qode_masonry_gallery_item_icon_hide_array[$dep_collection_key], ',');
    }

}

$qode_masonry_gallery_item_with_icon_icon_pack = new BridgeQodeMetaField(
    'select',
    'qode_masonry_gallery_item_with_icon_icon_pack',
    'font_awesome',
	esc_html__('Icon Package','bridge'),
	esc_html__('Choose Icon Package', 'bridge'),
    bridge_qode_icon_collections()->getIconCollections(),
    array(
        'dependence' => true,
        'hide' => $qode_masonry_gallery_item_icon_hide_array,
        'show' => $qode_masonry_gallery_item_icon_show_array
    )
);
$qode_masonry_gallery_item_icon_type_container->addChild('qode_masonry_gallery_item_with_icon_icon_pack', $qode_masonry_gallery_item_with_icon_icon_pack);

if(is_array(bridge_qode_icon_collections()->iconCollections) && count(bridge_qode_icon_collections()->iconCollections)) {

    foreach (bridge_qode_icon_collections()->iconCollections as $collection_key => $collection_object) {
        $icons_array = $collection_object->getIconsArray();

        if( $collection_key == 'kiko' ){
            $icons_array = array_flip( $icons_array );
        }

        $icon_collections_keys = bridge_qode_icon_collections()->getIconCollectionsKeys();

        unset($icon_collections_keys[array_search($collection_key, $icon_collections_keys)]);

        $qode_masonry_gallery_item_icon_hide_values = $icon_collections_keys;

        $qode_masonry_gallery_item_icon_pack_container = new BridgeQodeContainer('qode_masonry_gallery_item_with_icon_'.$collection_object->param.'_container', 'qode_masonry_gallery_item_with_icon_icon_pack', '', $qode_masonry_gallery_item_icon_hide_values);
        $qode_masonry_gallery_item_icon_type_container->addChild('qode_masonry_gallery_item_with_icon_'.$collection_object->param.'_container', $qode_masonry_gallery_item_icon_pack_container);

        $qode_masonry_gallery_item_with_icon_icon_type = new BridgeQodeMetaField('select', 'qode_masonry_gallery_item_with_icon_'.$collection_object->param, '', $collection_object->title, esc_html__('Icon Package', 'bridge'), $icons_array);
        $qode_masonry_gallery_item_icon_pack_container->addChild('qode_masonry_gallery_item_with_icon_'.$collection_object->param, $qode_masonry_gallery_item_with_icon_icon_type);

    }

}