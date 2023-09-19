<?php

$qodeIconCollections = bridge_qode_return_icon_collections();

/*** Removing shortcodes ***/
vc_remove_element("vc_wp_search");
vc_remove_element("vc_wp_meta");
vc_remove_element("vc_wp_recentcomments");
vc_remove_element("vc_wp_calendar");
vc_remove_element("vc_wp_pages");
vc_remove_element("vc_wp_tagcloud");
vc_remove_element("vc_wp_custommenu");
vc_remove_element("vc_wp_text");
vc_remove_element("vc_wp_posts");
vc_remove_element("vc_wp_links");
vc_remove_element("vc_wp_categories");
vc_remove_element("vc_wp_archives");
vc_remove_element("vc_wp_rss");
vc_remove_element("vc_teaser_grid");
vc_remove_element("vc_button");
vc_remove_element("vc_cta_button");
vc_remove_element("vc_cta_button2");
vc_remove_element("vc_message");
vc_remove_element("vc_tour");
vc_remove_element("vc_progress_bar");
vc_remove_element("vc_pie");
vc_remove_element("vc_posts_slider");
vc_remove_element("vc_toggle");
vc_remove_element("vc_images_carousel");
vc_remove_element("vc_posts_grid");
vc_remove_element("vc_carousel");
vc_remove_element("vc_cta");
vc_remove_element("vc_round_chart");
vc_remove_element("vc_line_chart");
vc_remove_element("vc_tta_accordion");
vc_remove_element("vc_tta_tour");
vc_remove_element("vc_tta_tabs");

//Remove Grid Elements if disabled
if (!bridge_qode_vc_grid_elements_enabled() && version_compare(bridge_qode_get_vc_version(), '4.4.2') >= 0) {
	vc_remove_element('vc_basic_grid');
	vc_remove_element('vc_media_grid');
	vc_remove_element('vc_masonry_grid');
	vc_remove_element('vc_masonry_media_grid');
	vc_remove_element('vc_icon');
}

if (version_compare(bridge_qode_get_vc_version(), '5.0') >= 0) {
	vc_remove_element("vc_section");
}

if(!bridge_qode_vc_grid_elements_enabled()) {
	vc_remove_element('vc_button2');
	vc_remove_element("vc_custom_heading");
	vc_remove_element("vc_btn");
}

/*** Remove unused parameters ***/
if (function_exists('vc_remove_param')) {
	vc_remove_param('vc_single_image', 'css_animation');
	vc_remove_param('vc_column_text', 'css_animation');
	vc_remove_param('vc_row', 'video_bg');
	vc_remove_param('vc_row', 'video_bg_url');
	vc_remove_param('vc_row', 'video_bg_parallax');
	vc_remove_param('vc_row', 'full_height');
	vc_remove_param('vc_row', 'content_placement');
	vc_remove_param('vc_row', 'full_width');
	vc_remove_param('vc_row', 'bg_image');
	vc_remove_param('vc_row', 'bg_color');
	vc_remove_param('vc_row', 'font_color');
	vc_remove_param('vc_row', 'margin_bottom');
	vc_remove_param('vc_row', 'bg_image_repeat');
	vc_remove_param('vc_tabs', 'interval');
	vc_remove_param('vc_separator', 'style');
	vc_remove_param('vc_separator', 'color');
	vc_remove_param('vc_separator', 'accent_color');
	vc_remove_param('vc_separator', 'el_width');
	vc_remove_param('vc_text_separator', 'style');
	vc_remove_param('vc_text_separator', 'color');
	vc_remove_param('vc_text_separator', 'accent_color');
	vc_remove_param('vc_text_separator', 'el_width');
	vc_remove_param('vc_row', 'gap');
    vc_remove_param('vc_row', 'columns_placement');
    vc_remove_param('vc_row', 'equal_height');
    vc_remove_param('vc_row_inner', 'gap');
    vc_remove_param('vc_row_inner', 'content_placement');
    vc_remove_param('vc_row_inner', 'equal_height');
    vc_remove_param('vc_hoverbox', 'use_custom_fonts_primary_title');
    vc_remove_param('vc_hoverbox', 'use_custom_fonts_hover_title');
    vc_remove_param('vc_hoverbox', 'hover_add_button');


    //remove vc parallax functionality
    vc_remove_param('vc_row', 'parallax');
    vc_remove_param('vc_row', 'parallax_image');

//	vc_remove_param( "vc_row", "css" );
//	vc_remove_param( "vc_row_inner", "css" );

	if(version_compare(bridge_qode_get_vc_version(), '4.4.2') >= 0) {
		vc_remove_param('vc_accordion', 'disable_keyboard');
		vc_remove_param('vc_separator', 'align');
		vc_remove_param('vc_separator', 'border_width');
		vc_remove_param('vc_text_separator', 'align');
		vc_remove_param('vc_text_separator', 'border_width');
	}
	if(version_compare(bridge_qode_get_vc_version(), '4.7.4') >= 0) {
		add_action( 'init', 'bridge_qode_remove_vc_image_zoom',11);
		function bridge_qode_remove_vc_image_zoom() {
			//Remove zoom from click action on single image
			$param = WPBMap::getParam( 'vc_single_image', 'onclick' );
			unset($param['value']['Zoom']);
			vc_update_shortcode_param( 'vc_single_image', $param );
		}
		vc_remove_param('vc_text_separator', 'css');
		vc_remove_param('vc_separator', 'css');
	}
	if(version_compare(bridge_qode_get_vc_version(), '4.10') >= 0) {
		vc_remove_param('vc_text_separator', 'add_icon');
		vc_remove_param('vc_text_separator', 'i_type');
		vc_remove_param('vc_text_separator', 'i_icon_fontawesome');
		vc_remove_param('vc_text_separator', 'i_icon_openiconic');
		vc_remove_param('vc_text_separator', 'i_icon_typicons');
		vc_remove_param('vc_text_separator', 'i_icon_entypo');
		vc_remove_param('vc_text_separator', 'i_icon_linecons');
		vc_remove_param('vc_text_separator', 'i_color');
		vc_remove_param('vc_text_separator', 'i_custom_color');
		vc_remove_param('vc_text_separator', 'i_background_style');
		vc_remove_param('vc_text_separator', 'i_background_color');
		vc_remove_param('vc_text_separator', 'i_custom_background_color');
		vc_remove_param('vc_text_separator', 'i_size');
		vc_remove_param('vc_text_separator', 'i_css_animation');
		vc_remove_param('vc_row', 'parallax_speed_bg');
		vc_remove_param('vc_row', 'parallax_speed_video');
	}
	if(function_exists('vc_remove_param') && version_compare(bridge_qode_get_vc_version(), '4.12') >= 0) {
		vc_remove_param('vc_row', 'disable_element');
		vc_remove_param('vc_row_inner', 'disable_element');
	}
}
/*** Remove unused parameters from grid elements ***/
if (function_exists('vc_remove_param') && bridge_qode_vc_grid_elements_enabled() && version_compare(bridge_qode_get_vc_version(), '4.4.2') >= 0) {
	vc_remove_param('vc_basic_grid', 'button_style');
	vc_remove_param('vc_basic_grid', 'button_color');
	vc_remove_param('vc_basic_grid', 'button_size');
	vc_remove_param('vc_basic_grid', 'filter_color');
	vc_remove_param('vc_basic_grid', 'filter_style');
	vc_remove_param('vc_media_grid', 'button_style');
	vc_remove_param('vc_media_grid', 'button_color');
	vc_remove_param('vc_media_grid', 'button_size');
	vc_remove_param('vc_media_grid', 'filter_color');
	vc_remove_param('vc_media_grid', 'filter_style');
	vc_remove_param('vc_masonry_grid', 'button_style');
	vc_remove_param('vc_masonry_grid', 'button_color');
	vc_remove_param('vc_masonry_grid', 'button_size');
	vc_remove_param('vc_masonry_grid', 'filter_color');
	vc_remove_param('vc_masonry_grid', 'filter_style');
	vc_remove_param('vc_masonry_media_grid', 'button_style');
	vc_remove_param('vc_masonry_media_grid', 'button_color');
	vc_remove_param('vc_masonry_media_grid', 'button_size');
	vc_remove_param('vc_masonry_media_grid', 'filter_color');
	vc_remove_param('vc_masonry_media_grid', 'filter_style');
	vc_remove_param('vc_basic_grid', 'paging_color');
	vc_remove_param('vc_basic_grid', 'arrows_color');
	vc_remove_param('vc_media_grid', 'paging_color');
	vc_remove_param('vc_media_grid', 'arrows_color');
	vc_remove_param('vc_masonry_grid', 'paging_color');
	vc_remove_param('vc_masonry_grid', 'arrows_color');
	vc_remove_param('vc_masonry_media_grid', 'paging_color');
	vc_remove_param('vc_masonry_media_grid', 'arrows_color');
}

/*** Remove frontend editor ***/
if(function_exists('vc_disable_frontend')){
	vc_disable_frontend();
}
$fa_icons = getFontAwesomeIconArray();
$collection = $qodeIconCollections->getIconCollection('font_awesome');
if( $collection ){
    $icons = $collection->getIconsArray();
} else {
    $icons = array();
}

$animations = array(
	"" => "",
	esc_html__('Elements Shows From Left Side', 'bridge') => "element_from_left",
    esc_html__('Elements Shows From Right Side', 'bridge') => "element_from_right",
    esc_html__('Elements Shows From Top Side', 'bridge') => "element_from_top",
	esc_html__('Elements Shows From Bottom Side', 'bridge') => "element_from_bottom",
	esc_html__('Elements Shows From Fade', 'bridge') => "element_from_fade"
);

/*** Accordion ***/

vc_add_param("vc_accordion", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Style", 'bridge'),
	"param_name" => "style",
	"value" => array(
		esc_html__('Accordion', 'bridge')             => "accordion",
		esc_html__('Toggle', 'bridge')                => "toggle",
        esc_html__('Boxed Accordion', 'bridge')       => "boxed_accordion",
        esc_html__('Boxed Toggle', 'bridge')          => "boxed_toggle"
	),
	'save_always' => true
));

vc_add_param("vc_accordion", array(
	"type" => "textfield",
	"heading" => esc_html__( "Accordion Mark Border Radius", 'bridge'),
	"param_name" => "accordion_border_radius",
	"dependency" => Array('element' => "style", 'value' => array('accordion', 'toggle'))
));

vc_add_param("vc_accordion_tab", array(
	"type" => "colorpicker",
	"heading" => esc_html__( "Title Color", 'bridge'),
	"param_name" => "title_color"
));

vc_add_param("vc_accordion_tab", array(
	"type" => "colorpicker",
	"heading" => esc_html__( "Background Color", 'bridge'),
	"param_name" => "background_color"
));

vc_add_param("vc_accordion_tab", array(
	"type" => "dropdown",
    "heading" => esc_html__( "Title Tag", 'bridge'),
    "param_name" => "title_tag",
    "value" => array(
        ""   => "",
        "h2" => "h2",
        "h3" => "h3",
        "h4" => "h4",
        "h5" => "h5",
        "h6" => "h6",
    )
));

/*** Tabs ***/

vc_add_param("vc_tabs", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Style", 'bridge'),
	"param_name" => "style",
	"value" => array(
		esc_html__('Horizontal Center', 'bridge') => "horizontal",
		esc_html__('Horizontal Left', 'bridge')   => "horizontal_left",
		esc_html__('Horizontal Right', 'bridge')  => "horizontal_right",
		esc_html__("Boxed", 'bridge')             => "boxed",
		esc_html__('Vertical Left', 'bridge')     => "vertical_left",
		esc_html__('Vertical Right', 'bridge') => "vertical_right"
	),
	'save_always' => true
));

/*** Gallery ***/

vc_add_param("vc_gallery", array(
	"type" => "dropdown",
	"heading" => esc_html__( 'Column Number', 'bridge'),
	"param_name" => "column_number",
	 "value" => array(2, 3, 4, 5, 6, esc_html__('Disable', 'bridge') => 0),
	'save_always' => true,
	 "dependency" => Array('element' => "type", 'value' => array('image_grid'))
));

vc_add_param("vc_gallery", array(
    "type" => "dropdown",
    "heading" => esc_html__( 'Grayscale Images', 'bridge'),
    "param_name" => "grayscale",
    "value" => array(
        esc_html__('No', 'bridge') => 'no',
        esc_html__('Yes', 'bridge') => 'yes'),
	'save_always' => true,
    "dependency" => Array('element' => "type", 'value' => array('image_grid'))
));

vc_add_param("vc_gallery", array(
    "type" => "dropdown",
    "heading" => esc_html__( "Enable drag", 'bridge'),
    "param_name" => "enable_drag",
    "value" => array(
        '' => '',
        esc_html__('Yes', 'bridge') => 'yes',
        esc_html__('No', 'bridge')  => 'no'
    ),
    "dependency" => Array('element' => "onclick", 'value' => array(''))
));

vc_add_param("vc_gallery", array(
    "type" => "dropdown",
    "heading" => esc_html__( "Show direction navigation", 'bridge'),
    "param_name" => "direction_nav",
    "value" => array(
        '' => '',
        esc_html__('Yes', 'bridge') => 'yes',
        esc_html__('No', 'bridge') => 'no'
    ),
    "dependency" => Array('element' => "type", 'value' => array('flexslider_slide','flexslider_fade'))
));

vc_add_param("vc_gallery", array(
    "type" => "dropdown",
    "heading" => esc_html__( "Show control navigation", 'bridge'),
    "param_name" => "control_nav",
    "value" => array(
        '' => '',
        esc_html__('Yes', 'bridge') => 'yes',
        esc_html__('No', 'bridge')  => 'no'
    ),
    "dependency" => Array('element' => "type", 'value' => array('flexslider_slide','flexslider_fade'))
));

vc_add_param('vc_gallery', array(
	'type'			=> 'dropdown',
	'heading'		=> esc_html__('Show image description at bottom', 'bridge'),
	'param_name'	=> 'show_image_description',
	'value'			=> array(
		esc_html__('No', 'bridge') => 'no',
		esc_html__('Yes', 'bridge') => 'yes'
	),
	'dependency'	=> array('element' => 'type', 'value' => array('flexslider_slide','flexslider_fade'))
));

vc_add_param("vc_gallery", array(
    "type" => "dropdown",
    "heading" => esc_html__( "Pause on hover", 'bridge'),
    "param_name" => "pause_on_hover",
    "value" => array(
        '' => '',
        esc_html__('Yes', 'bridge') => 'yes',
        esc_html__('No', 'bridge')  => 'no'
    ),
    "dependency" => Array('element' => "type", 'value' => array('flexslider_slide','flexslider_fade'))
));

vc_add_param("vc_gallery", array(
    "type" => "dropdown",
    "heading" => esc_html__( "Frame", 'bridge'),
    "param_name" => "frame",
	"value" => array("Use frame?" => "use_frame"),
	"value" => array(
		'' => '',
		esc_html__('Yes', 'bridge') => 'use_frame',
		esc_html__('No', 'bridge')  => 'no'
	),
    "dependency" => Array('element' => "type", 'value' => array('flexslider_slide'))
));

vc_add_param("vc_gallery", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Choose Frame", 'bridge'),
	"param_name" => "choose_frame",
	"value" => array(
	    esc_html__('Default', 'bridge') => 'default',
        esc_html__('Frame 1', 'bridge') => 'frame1',
        esc_html__('Frame 2', 'bridge') => 'frame2',
        esc_html__('Frame 3', 'bridge') => 'frame3',
        esc_html__('Frame 4', 'bridge') => 'frame4'),
	'save_always' => true,
	"dependency" => Array('element' => "frame", 'value' => array('use_frame'))
));
vc_add_param("vc_gallery", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Spaces between images", 'bridge'),
	"param_name" => "images_space",
	"value" => array(
	    esc_html__('No', 'bridge') => 'gallery_without_space',
        esc_html__('Yes','bridge') => 'gallery_with_space'),
	'save_always' => true,
	"dependency" => Array('element' => "type", 'value' => array('image_grid'))
));


/*** Empty Space ***/

vc_add_param("vc_empty_space",  array(
        "type" => "attach_image",
        'heading' => esc_html__( 'Background Image', 'bridge'),
        'param_name' => 'background_image',
        'description' => esc_html__( 'Select image from media library.', 'bridge')
    )
);
vc_add_param("vc_empty_space",  array(
        "type" => "dropdown",
        'heading' => esc_html__( 'Image Repeat', 'bridge'),
        'param_name' => 'image_repeat',
        "value" => array(
            esc_html__('No Repeat', 'bridge')       => 'no-repeat',
            esc_html__('Repeat x', 'bridge')        => 'repeat-x',
            esc_html__('Repeat y', 'bridge')        => 'repeat-y',
            esc_html__('Repeat (x y)', 'bridge')    => 'repeat'
        ),
		'save_always' => true,
        'dependency' => array('element' => 'background_image','not_empty' => true)
    )
);

/*** Row ***/

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"show_settings_on_create"=>true,
	"heading" => esc_html__( "Row Type", 'bridge'),
	"param_name" => "row_type",
	"value" => array(
		esc_html__("Row", 'bridge')         => "row",
		esc_html__("Parallax", 'bridge')    => "parallax",
		esc_html__("Expandable", 'bridge')  => "expandable",
		esc_html__("Content menu", 'bridge')=> "content_menu"
	),
	'save_always' => true
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"show_settings_on_create"=>true,
	"heading" => esc_html__( "Define the z-index for this row", 'bridge'),
	"param_name" => "z_index",
	'save_always' => true,
	'description' => esc_html__( 'The z-index specifies the stack order of an element. Elements with a higher z-index will be displayed above elements with a lower z-index', 'bridge'),
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"show_settings_on_create"=>true,
	"heading" => esc_html__( "Use Row as Full Screen Section", 'bridge'),
	"param_name" => "use_row_as_full_screen_section",
	"value" => array(
		esc_html__("No", "bridge")  => "no",
		esc_html__("Yes", 'bridge') => "yes"
	),
	'save_always' => true,
	"description" => esc_html__( "This option works only for Full Screen Sections Template", 'bridge'),
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Type", 'bridge'),
	"param_name" => "type",
	"value" => array(
		esc_html__("Full Width", 'bridge') => "full_width",
		esc_html__("In Grid", 'bridge') => "grid"
	),
	'save_always' => true,
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row", array(
    "type" => "dropdown",
    "heading" => esc_html__( "Header Style", 'bridge'),
    "param_name" => "header_style",
    "value" => array(
        "" => "",
        esc_html__("Light", 'bridge') => "light",
        esc_html__("Dark", 'bridge')  => "dark"
    ),
    "dependency" => Array('element' => "row_type", 'value' => array('row','parallax','expandable'))
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Content Width", 'bridge'),
	"param_name" => "parallax_content_width",
	"value" => array(
		esc_html__("In Grid", 'bridge')     => "in_grid",
		esc_html__("Full Width", 'bridge')  => "full_width"
	),
	'save_always' => true,
	"dependency" => Array('element' => "row_type", 'value' => array('parallax'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"heading" => esc_html__( "Anchor ID", 'bridge'),
	"param_name" => "anchor",
	"dependency" => Array('element' => "row_type", 'value' => array('row','parallax','expandable'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Row in content menu", 'bridge'),
	"value" => array(
		esc_html__("No", 'bridge')  => "",
		esc_html__("Yes", 'bridge') => "in_content_menu"
	),
	"param_name" => "in_content_menu",
	"dependency" => Array('element' => "row_type", 'value' => array('row','parallax','expandable'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"heading" => esc_html__( "Content menu title", 'bridge'),
	"param_name" => "content_menu_title",
	"dependency" => Array('element' => "in_content_menu", 'value' => array('in_content_menu'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Content menu icon", 'bridge'),
	"param_name" => "content_menu_icon",
	"value" => $icons,
	'save_always' => true,
	"dependency" => Array('element' => "in_content_menu", 'value' => array('in_content_menu'))
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Angled Shape in Background", 'bridge'),
	"param_name" => "angled_section",
	"value" => array(
		esc_html__('No', 'bridge')  => 'no',
		esc_html__('Yes', 'bridge') => 'yes'
	),
	'save_always' => true,
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Angled Shape Position", 'bridge'),
	"param_name" => "angled_section_position",
	"value" => array(
		esc_html__('Default (both)', 'bridge')   => 'both',
		esc_html__('Only Top', 'bridge')         => 'top',
		esc_html__('Only Bottom', 'bridge')      => 'bottom'
	),
	'save_always' => true,
	"dependency" => Array('element' => "angled_section", 'value' => array('yes'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Angled Shape Direction", 'bridge'),
	"param_name" => "angled_section_direction",
	"value" => array(
		esc_html__('From Left To Right', 'bridge') => 'from_left_to_right',
		esc_html__('From Right To Left', 'bridge') => 'from_right_to_left'
	),
	'save_always' => true,
	"dependency" => Array('element' => "angled_section", 'value' => array('yes'))
));


vc_add_param("vc_row", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Text Align", 'bridge'),
	"param_name" => "text_align",
	"value" => array(
		esc_html__("Left", 'bridge')   => "left",
		esc_html__("Center", 'bridge') => "center",
		esc_html__("Right", 'bridge')  => "right"
	),
	'save_always' => true,
	"dependency" => Array('element' => "row_type", 'value' => array('row','parallax','expandable'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Video background", 'bridge'),
	"value" => array(
		esc_html__("No", 'bridge')  => "",
		esc_html__("Yes", 'bridge') => "show_video"
	),
	"param_name" => "video",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Video overlay", 'bridge'),
	"value" => array(
		esc_html__("No", "bridge")  => "",
		esc_html__("Yes", 'bridge') => "show_video_overlay"
	),
	"param_name" => "video_overlay",
	"dependency" => Array('element' => "video", 'value' => array('show_video'))
));
vc_add_param("vc_row", array(
	"type" => "attach_image",
	"heading" => esc_html__( "Video overlay image (pattern)", 'bridge'),
	"param_name" => "video_overlay_image",
	"dependency" => Array('element' => "video_overlay", 'value' => array('show_video_overlay'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"heading" => esc_html__( "Video background (webm) file url", 'bridge'),
	"param_name" => "video_webm",
	"dependency" => Array('element' => "video", 'value' => array('show_video'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"heading" => esc_html__( "Video background (mp4) file url", 'bridge'),
	"param_name" => "video_mp4",
	"dependency" => Array('element' => "video", 'value' => array('show_video'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"heading" => esc_html__( "Video background (ogv) file url", 'bridge'),
	"param_name" => "video_ogv",
	"dependency" => Array('element' => "video", 'value' => array('show_video'))
));
vc_add_param("vc_row", array(
	"type" => "attach_image",
	"heading" => esc_html__( "Video preview image", 'bridge'),
	"param_name" => "video_image",
	"dependency" => Array('element' => "video", 'value' => array('show_video'))
));
vc_add_param("vc_row", array(
	"type" => "attach_image",
	"heading" => esc_html__( "Background image", 'bridge'),
	"param_name" => "background_image",
	"dependency" => Array('element' => "row_type", 'value' => array('parallax', 'row'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Set Background image as pattern", 'bridge'),
	"value" => array(
		esc_html__("No", 'bridge')  => "without_pattern",
		esc_html__("Yes", 'bridge') => "with_pattern"
	),
	'save_always' => true,
	"param_name" => "background_image_as_pattern",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row", array(
    'type' => 'dropdown',
    'heading' => esc_html__( 'Full Screen Height', 'bridge'),
    'param_name' => 'full_screen_section_height',
    'value' => array(
        esc_html__('No', 'bridge') => 'no',
        esc_html__('Yes', 'bridge') => 'yes'
    ),
    'save_always' => true,
    'dependency' => Array('element' => 'row_type', 'value' => array('parallax'))
));

vc_add_param('vc_row', array(
    'type' => 'dropdown',
    'heading' => esc_html__( 'Vertically align content in middle', 'bridge'),
    'param_name' => 'vertically_align_content_in_middle',
    'value' => array(
        esc_html__('No', 'bridge')  => 'no',
        esc_html__('Yes', 'bridge') => 'yes'
    ),
    'dependency' => array('element' => 'full_screen_section_height', 'value' => 'yes')
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"heading" => esc_html__("Section height", 'bridge'),
	"param_name" => "section_height",
	"dependency" => Array('element' => "full_screen_section_height", 'value' => array('no'))
));
vc_add_param("vc_row", array(
    "type" => "textfield",
    "heading" => esc_html__( "Parallax speed", 'bridge'),
    "param_name" => "parallax_speed",
    "dependency" => Array('element' => "row_type", 'value' => array('parallax'))
));
vc_add_param("vc_row", array(
	"type" => "colorpicker",
	"heading" => esc_html__( "Background color", 'bridge'),
	"param_name" => "background_color",
	"dependency" => Array('element' => "row_type", 'value' => array('row','expandable','content_menu'))
));
vc_add_param("vc_row", array(
	"type" => "colorpicker",
	"heading" => esc_html__( "Border bottom color", 'bridge'),
	"param_name" => "border_color",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));


vc_add_param("vc_row", array(
	"type" => "checkbox",
	"heading" => esc_html__( "Disable negative margin", 'bridge'),
	"value" => array(
	    esc_html__("Disable negative margin", 'bridge') => "disable_negative_margin"
    ),
	"param_name" => "row_negative_margin",
	"description" => esc_html__( 'This option will remove left and right -15px margin on row', 'bridge'),
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"heading" => esc_html__( "Padding", 'bridge'),
	"param_name" => "side_padding",
	"description" => esc_html__( "Padding (left/right in % - full width only)", 'bridge'),
	"dependency" => Array('element' => "type", 'value' => array('full_width'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"heading" => esc_html__( "Side Padding", 'bridge'),
	"param_name" => "parallax_side_padding",
	"description" => esc_html__( "Padding (left/right in % - full width only)", 'bridge'),
	"dependency" => Array('element' => "parallax_content_width", 'value' => array('full_width'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"heading" => esc_html__( "Padding Top", 'bridge'),
	"param_name" => "padding_top",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"heading" => esc_html__( "Padding Bottom", 'bridge'),
	"param_name" => "padding_bottom",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));
vc_add_param("vc_row", array(
	"type" => "colorpicker",
	"heading" => esc_html__( "Label Color", 'bridge'),
	"param_name" => "color",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));
vc_add_param("vc_row", array(
	"type" => "colorpicker",
	"heading" => esc_html__( "Label Hover Color", 'bridge'),
	"param_name" => "hover_color",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"heading" => esc_html__( "More Label", 'bridge'),
	"param_name" => "more_button_label",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"heading" => esc_html__( "Less Label", 'bridge'),
	"param_name" => "less_button_label",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Label Position", 'bridge'),
	"param_name" => "button_position",
	"value" => array(
		"" => "",
		esc_html__("Left", 'bridge')   => "left",
		esc_html__("Right", 'bridge')  => "right",
		esc_html__("Center", 'bridge') => "center"
	),
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));
vc_add_param("vc_row",  array(
    "type" => "textfield",
    "heading" => esc_html__( "Expandable Content Top Padding (px)", 'bridge'),
    "param_name" => "expandable_content_top_padding",
    "admin_label" => true,
    "description" => esc_html__( "Default value is 70", 'bridge'),
    "dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));
vc_add_param("vc_row",  array(
  "type" => "dropdown",
  "heading" => esc_html__( "CSS Animation", 'bridge'),
  "param_name" => "css_animation",
  "admin_label" => true,
  "value" => $animations,
  'save_always' => true,
  "dependency" => Array('element' => "row_type", 'value' => array('row'))

));
vc_add_param("vc_row",  array(
  "type" => "textfield",
  "heading" => esc_html__( "Transition delay (ms)", 'bridge'),
  "param_name" => "transition_delay",
  "admin_label" => true,
  "dependency" => Array('element' => "row_type", 'value' => array('row'))

));

/*** Row Inner ***/

vc_add_param("vc_row_inner", array(
	"type" => "dropdown",
	"show_settings_on_create"=>true,
	"heading" => esc_html__( "Row Type", 'bridge'),
	"param_name" => "row_type",
	"value" => array(
		esc_html__("Row", 'bridge')         => "row",
		esc_html__("Parallax", 'bridge')    => "parallax",
		esc_html__("Expandable", 'bridge')  => "expandable"
	),
	'save_always' => true

));
vc_add_param("vc_row_inner", array(
	"type" => "checkbox",
	"heading" => esc_html__( "Use as box", 'bridge'),
	"value" => array("Use row as box" => "use_row_as_box" ),
	"param_name" => "use_as_box",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));
vc_add_param("vc_row_inner", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Type", 'bridge'),
	"param_name" => "type",
	"value" => array(
		esc_html__("Full Width", 'bridge')   => "full_width",
		esc_html__("In Grid", 'bridge')      => "grid"
	),
	'save_always' => true,
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));
vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"heading" => esc_html__( "Anchor ID", 'bridge'),
	"param_name" => "anchor"
));
vc_add_param("vc_row_inner", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Text Align", 'bridge'),
	"param_name" => "text_align",
	"value" => array(
		esc_html__("Left", 'bridge')    => "left",
		esc_html__("Center", 'bridge')  => "center",
		esc_html__("Right", 'bridge')   => "right"
	),
	'save_always' => true

));
vc_add_param("vc_row_inner", array(
	"type" => "colorpicker",
	"heading" => esc_html__( "Background color", 'bridge'),
	"param_name" => "background_color",
	"dependency" => Array('element' => "row_type", 'value' => array('row','expandable'))
));
vc_add_param("vc_row_inner", array(
	"type" => "attach_image",
	"heading" => esc_html__( "Background image", 'bridge'),
	"param_name" => "background_image",
	"dependency" => Array('element' => "row_type", 'value' => array('parallax'))
));
vc_add_param("vc_row_inner", array(
    'type' => 'dropdown',
    'heading' => esc_html__( 'Full screen height', 'bridge'),
    'param_name' => 'full_screen_section_height',
    'value' => array(
        esc_html__('No', 'bridge')  => 'no',
        esc_html__('Yes', 'bridge') => 'yes'
    ),
    'save_always' => true,
    'dependency' => Array('element' => 'row_type', 'value' => array('parallax'))
));
vc_add_param('vc_row_inner', array(
    'type' => 'dropdown',
    'heading' => esc_html__( 'Vertically align content in middle', 'bridge'),
    'param_name' => 'vertically_align_content_in_middle',
    'value' => array(
        esc_html__('No', 'bridge')  => 'no',
        esc_html__('Yes', 'bridge') => 'yes'
    ),
    'dependency' => array('element' => 'full_screen_section_height', 'value' => 'yes')
));
vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"heading" => esc_html__( "Section height", 'bridge'),
	"param_name" => "section_height",
	"dependency" => Array('element' => "full_screen_section_height", 'value' => array('no'))
));
vc_add_param("vc_row_inner", array(
	"type" => "colorpicker",
	"heading" => esc_html__( "Border color", 'bridge'),
	"param_name" => "border_color",
	"dependency" => Array('element' => "row_type", 'value' => array('row','expandable'))
));

vc_add_param("vc_row_inner", array(
	"type" => "checkbox",
	"heading" => esc_html__( "Disable negative margin", 'bridge'),
	"value" => array(
	    esc_html__("Disable negative margin", 'bridge') => "disable_negative_margin"
    ),
	"param_name" => "row_negative_margin",
	"description" => esc_html__( 'This option will remove left and right -15px margin on row', 'bridge'),
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"heading" => esc_html__( "Padding", 'bridge'),
	"param_name" => "side_padding",
	"description" => esc_html__( "Padding (left/right in % - full width only)", 'bridge'),
	"dependency" => Array('element' => "type", 'value' => array('full_width'))
));

vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"heading" => esc_html__( "Padding Top", 'bridge'),
	"param_name" => "padding_top",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));
vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"heading" => esc_html__( "Padding Bottom", 'bridge'),
	"param_name" => "padding_bottom",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));
vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"heading" => esc_html__( "More Button Label", 'bridge'),
	"param_name" => "more_button_label",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));
vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"heading" => esc_html__( "Less Button Label", 'bridge'),
	"param_name" => "less_button_label",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));
vc_add_param("vc_row_inner", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Button Position", 'bridge'),
	"param_name" => "button_position",
	"value" => array(
		"" => "",
		esc_html__("Left", 'bridge')   => "left",
		esc_html__("Right", 'bridge')  => "right",
		esc_html__("Center", 'bridge') => "center"
	),
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));
vc_add_param("vc_row_inner", array(
	"type" => "colorpicker",
	"heading" => esc_html__( "Color", 'bridge'),
	"param_name" => "color",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));
vc_add_param("vc_row_inner",  array(
    "type" => "textfield",
    "heading" => esc_html__( "Expandable Content Top Padding (px)", 'bridge'),
    "param_name" => "expandable_content_top_padding",
    "admin_label" => true,
    "description" => esc_html__( "Default value is 70", 'bridge'),
    "dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));
vc_add_param("vc_row_inner",  array(
	"type" => "dropdown",
	"heading" => esc_html__( "CSS Animation", 'bridge'),
	"param_name" => "css_animation",
	"admin_label" => true,
	"value" => $animations,
	'save_always' => true,
	"dependency" => Array('element' => "row_type", 'value' => array('row'))

));
vc_add_param("vc_row_inner",  array(
  "type" => "textfield",
  "heading" => esc_html__( "Transition delay (ms)", 'bridge'),
  "param_name" => "transition_delay",
  "admin_label" => true,
  "dependency" => Array('element' => "row_type", 'value' => array('row'))

));

/*** Separator ***/


$separator_setting = array (
  'show_settings_on_create' => true,
  "controls"	=> '',
);
vc_map_update('vc_separator', $separator_setting);


vc_add_param("vc_separator", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Type", 'bridge'),
	"param_name" => "type",
	"value" => array(
		esc_html__("Normal", 'bridge')		    =>	"normal",
		esc_html__("Transparent", 'bridge')	=>	"transparent",
		esc_html__("Small", 'bridge')			=>	"small"
	),
	'save_always' => true
));

vc_add_param("vc_separator", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Position", 'bridge'),
	"param_name" => "position",
	"value" => array(
		esc_html__("Center", 'bridge') => "center",
		esc_html__("Left", 'bridge')   => "left",
		esc_html__("Right", 'bridge')  => "right"
	),
	'save_always' => true,
    "dependency" => array("element" => "type", "value" => array("small")),
));

vc_add_param("vc_separator", array(
	"type" => "colorpicker",
	"heading" => esc_html__( "Color", 'bridge'),
	"param_name" => "color",
	"dependency" => array("element" => "type", "value" => array("normal","small"))
));

vc_add_param("vc_separator",  array(
    "type" => "dropdown",
    "heading" => esc_html__( "Gradient Color", 'bridge'),
    "param_name" => "gradient_color",
    "value" => array(
        esc_html__('No', 'bridge')  => 'no',
        esc_html__('Yes', 'bridge') => 'yes'
    ),
    "dependency" => array("element" => "type", "value" => array("normal","small"))

));

vc_add_param("vc_separator", array(
	"type" => "textfield",
	"heading" => esc_html__( "Transparency", 'bridge'),
	"param_name" => "transparency",
	"dependency" => array("element" => "type", "value" => array("normal","small")),
	"description" => esc_html__( "Value should be between 0 and 1", 'bridge')
));

vc_add_param("vc_separator", array(
	"type" => "textfield",
	"heading" => esc_html__( "Thickness", 'bridge'),
	"param_name" => "thickness",
));

vc_add_param("vc_separator", array(
	"type" => "textfield",
	"heading" => esc_html__( "Width", 'bridge'),
	"param_name" => "width",
	"dependency" => array("element" => "type", "value" => array("small")),
));

vc_add_param("vc_separator", array(
	"type" => "checkbox",
	"value" => array(
	    esc_html__("Width In Percentages?", 'bridge')  => "yes"),
	"param_name" => "width_in_percentages",
	"dependency" => array('element' => 'width', 'not_empty' => true)
));

vc_add_param("vc_separator", array(
	"type" => "textfield",
	"heading" => esc_html__( "Top Margin", 'bridge'),
	"param_name" => "up"
));
vc_add_param("vc_separator", array(
	"type" => "textfield",
	"heading" => esc_html__( "Bottom Margin", 'bridge'),
	"param_name" => "down"
));

/*** Separator With Text ***/

vc_add_param("vc_text_separator", array(
	"type" => "dropdown",
	"heading" => esc_html__( "Border", 'bridge'),
	"param_name" => "border",
	"value" => array(
		esc_html__("No", 'bridge')  => "no",
		esc_html__("Yes", 'bridge') => "yes"
	),
	'save_always' => true
));
vc_add_param("vc_text_separator", array(
	"type" => "colorpicker",
	"heading" => esc_html__( "Border Color", 'bridge'),
	"param_name" => "border_color",
	"dependency" => Array('element' => "border", 'value' => array('yes'))

));
vc_add_param("vc_text_separator", array(
	"type" => "colorpicker",
	"heading" => esc_html__( "Background Color", 'bridge'),
	"param_name" => "background_color",

));
vc_add_param("vc_text_separator", array(
	"type" => "colorpicker",
	"heading" => esc_html__( "Title Color", 'bridge'),
	"param_name" => "title_color",
));

/*** Single Image ***/

vc_add_param("vc_single_image",  array(
  "type" => "dropdown",
  "heading" => esc_html__( "CSS Animation", 'bridge'),
  "param_name" => "qode_css_animation",
  "admin_label" => true,
  "value" => $animations,
	'save_always' => true

));
vc_add_param("vc_single_image",  array(
  "type" => "textfield",
  "heading" => esc_html__( "Transition delay (s)", 'bridge'),
  "param_name" => "transition_delay",
  "admin_label" => true

));
vc_add_param("vc_single_image",  array(
  "type" => "dropdown",
  "heading" => esc_html__( "Hover Animation", 'bridge'),
  "param_name" => "qode_hover_animation",
  "admin_label" => true,
  "value" => array(
  		esc_html__('No animation', 'bridge') => '',
  		esc_html__('Zoom In', 'bridge')      => 'zoom_in',
  		esc_html__('Dark Overlay', 'bridge') => 'darken',
  		esc_html__('Title on bottom', 'bridge') => 'bottom_title'
  	)

));

// Animation holder
class WPBakeryShortCode_Qode_Animation_Holder extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
        'name' => esc_html__( 'Qode Animation Holder', 'bridge'),
        'base' => 'qode_animation_holder',
        "content_element" => true,
        'category' => esc_html__( 'by QODE', 'bridge'),
        'icon' => 'extended-custom-icon-qode icon-wpb-animation-holder',
        'allowed_container_element' => 'vc_row',
		"as_parent" => array('except' => 'vc_row'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
        "js_view" => 'VcColumnView',
        'params' => array(
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Animation Type", 'bridge'),
                "param_name" => "animation_type",
                "value" => array(
            		esc_html__('Element from Fade', 'bridge')	=> 'element_from_fade',
            		esc_html__('Element from Left', 'bridge')  => 'element_from_left',
            		esc_html__('Element from Right', 'bridge') => 'element_from_right',
            		esc_html__('Element from Top', 'bridge')	=> 'element_from_top',
            		esc_html__('Element from Bottom', 'bridge')=> 'element_from_bottom',
            		esc_html__('Element Grow In', 'bridge')	=> 'element_transform',
                ),
                'save_always' => true
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__( 'Animation Delay', 'bridge'),
                'param_name' => 'animation_delay',
                'description' => esc_html__( 'Animation delay in seconds.', 'bridge')
            ),
        )
) );

class WPBakeryShortCode_Animated_Icons_With_Text  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
        "name" => esc_html__( "Animated icons with text", 'bridge'),
        "base" => "animated_icons_with_text",
        "as_parent" => array('only' => 'animated_icon_with_text'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
        "content_element" => true,
		"category" => esc_html__( 'by QODE', 'bridge'),
		"icon" => "extended-custom-icon-qode icon-wpb-animated_icons_with_text",
        "show_settings_on_create" => true,
        "params" => array(
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Columns", 'bridge'),
                "param_name" => "columns",
                "value" => array(
                    esc_html__("Two", 'bridge')       => "two_columns",
                    esc_html__("Three", 'bridge')     => "three_columns",
                    esc_html__("Four", 'bridge')      => "four_columns",
                    esc_html__("Five", 'bridge')      => "five_columns"
                ),
				'save_always' => true,
				"admin_label" => true

            )
        ),
        "js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_Animated_Icon_With_Text extends WPBakeryShortCode {}
vc_map( array(
        "name" => esc_html__( "Animated icons with text", 'bridge'),
        "base" => "animated_icon_with_text",
		"icon" => "extended-custom-icon-qode icon-wpb-animated_icon_with_text_item",
        "content_element" => true,
        "as_child" => array('only' => 'animated_icons_with_text'), // Use only|except attributes to limit parent (separate multiple values with comma)
        "params" => array(
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Title", 'bridge'),
				"param_name" => "title",
				"admin_label" => true
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Title Tag", 'bridge'),
				"param_name" => "title_tag",
				"value" => array(
                    ""   => "",
					"h2" => "h2",
					"h3" => "h3",
					"h4" => "h4",
					"h5" => "h5",
					"h6" => "h6",
				)
            ),
			array(
				"type" => "textarea",
				"heading" => esc_html__( "Text", 'bridge'),
				"param_name" => "text",
				"admin_label" => true
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Icon", 'bridge'),
				"param_name" => "icon",
				"value" => $icons,
				'save_always' => true
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Icon size", 'bridge'),
				"param_name" => "size",
				"description" => esc_html__( "Put number in px, ex.25", 'bridge')
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Icon Color", 'bridge'),
				"param_name" => "icon_color"
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Icon background Color", 'bridge'),
				"param_name" => "icon_background_color"
			),
            array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Border Color", 'bridge'),
				"param_name" => "border_color"
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Icon Color on hover", 'bridge'),
				"param_name" => "icon_color_hover"
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Icon background Color On Hover", 'bridge'),
				"param_name" => "icon_background_color_hover"
			),
            array(
				"type" => "colorpicker",
				"heading" => esc_html__( "Border Color On Hover", 'bridge'),
				"param_name" => "border_color_hover"
			),
			array(
				"type" => "dropdown",
				"value" => array(
					esc_html__('No','bridge') => 'no',
					esc_html__('Yes','bridge') => 'yes'
				),
				"heading" => esc_html__('Enable link','bridge'),
				"param_name" => "enable_link",
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__('Link','bridge'),
				"param_name" => "link",
				'dependency' => array('element' => 'enable_link', 'value' => 'yes')
			),
			array(
				"type" => "dropdown",
				"value" => array(
					esc_html__('Blank','bridge') => '_blank',
					esc_html__('Self','bridge') => '_self'
				),
				"heading" => esc_html__('Target','bridge'),
				"param_name" => "target",
				'dependency' => array('element' => 'enable_link', 'value' => 'yes')
			)
        )
) );

class WPBakeryShortCode_Qode_Circles  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
		'name' => esc_html__( 'Qode Process Holder', 'bridge'),
		'base'				=> 'qode_circles',
		'as_parent'			=> array('only' => 'qode_circle'),
		'content_element'	=> true,
		'category' => esc_html__( 'by QODE', 'bridge'),
		'icon'				=> 'extended-custom-icon-qode icon-wpb-qode_circles',
		'params' => array(
			array(
				'type'			=> 'dropdown',
				'heading' => esc_html__( 'Columns', 'bridge'),
				'param_name'	=> 'columns',
				'value'			=> array(
					esc_html__('Three', 'bridge')	=> 'three_columns',
					esc_html__('Four', 'bridge')	=> 'four_columns',
					esc_html__('Five', 'bridge')	=> 'five_columns'
				),
				'save_always' => true
			),
			array(
				'type'			=> 'dropdown',
				'heading' => esc_html__( 'Line between Process', 'bridge'),
				'param_name'	=> 'circle_line',
				'value'			=> array(
					esc_html__('No', 'bridge')	    => 'no_line',
					esc_html__('Yes', 'bridge')	=> 'with_line',
				),
				'save_always'	=> true
			),
			array(
				'type'			=> 'colorpicker',
				'heading' => esc_html__( 'Line Color', 'bridge'),
				'param_name'	=> 'line_color',
			)
		),
		'js_view' => 'VcColumnView'
) );

class WPBakeryShortCode_Qode_Circle extends WPBakeryShortCode {}
vc_map( array(
	'name' => esc_html__( 'Qode Process', 'bridge'),
	'base' => 'qode_circle',
	'content_element' => true,
	'icon' => 'extended-custom-icon-qode icon-wpb-qode_circle',
	'as_child' => array('only' => 'qode_circles'), // Use only|except attributes to limit parent (separate multiple values with comma)
	'params' => array(
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Type', 'bridge'),
			'param_name' => 'type',
			'value' => array(
				esc_html__('Icon in Process', 'bridge') => 'icon_type',
				esc_html__('Image', 'bridge') => 'image_type',
				esc_html__('Text in Process', 'bridge') => 'text_type'
			),
			'save_always' => true,
			'admin_label' => true
		),
		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'Background Process Color', 'bridge'),
			'param_name' => 'background_color',
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Background Process Transparency', 'bridge'),
			'param_name' => 'background_transparency',
			'description' => esc_html__( 'Insert value between 0 and 1', 'bridge')
		),
		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'Border Process Color', 'bridge'),
			'param_name' => 'border_color'
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Border Process Width', 'bridge'),
			'param_name' => 'border_width'
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Icon', 'bridge'),
			'param_name' => 'icon',
			'value' => $icons,
			'save_always' => true,
			'dependency' => array('element' => 'type', 'value' => array('icon_type'))
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Size', 'bridge'),
			'param_name' => 'size',
			'value' => array(
				esc_html__('Tiny', 'bridge')        => 'fa-lg',
				esc_html__('Small', 'bridge')       => 'fa-2x',
				esc_html__('Normal', 'bridge')      => 'fa-3x',
				esc_html__('Large', 'bridge')       => 'fa-4x',
				esc_html__('Very Large', 'bridge')  => 'fa-5x'
			),
			'save_always' => true,
			'dependency' => array('element' => 'type', 'value' => array('icon_type'))
		),
		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'Icon Color', 'bridge'),
			'param_name' => 'icon_color',
			'dependency' => array('element' => 'type', 'value' => array('icon_type'))
		),
		array(
			'type' => 'attach_image',
			'heading' => esc_html__( 'Image', 'bridge'),
			'param_name' => 'image',
			'dependency' => array('element' => 'type', 'value' => array('image_type'))
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Text in Process', 'bridge'),
			'param_name' => 'text_in_circle',
			'dependency' => array('element' => 'type', 'value' => array('text_type')),
			'admin_label' => true
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Text in Process Tag', 'bridge'),
			'param_name' => 'text_in_circle_tag',
			'value' => array(
				''   => '',
				'h2' => 'h2',
				'h3' => 'h3',
				'h4' => 'h4',
				'h5' => 'h5',
				'h6' => 'h6',
			),
			'dependency' => array('element' => 'text_in_circle', 'not_empty' => true)
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Text in Process Size (px)', 'bridge'),
			'param_name' => 'font_size',
			'dependency' => array('element' => 'text_in_circle', 'not_empty' => true)
		),
		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'Text in Process Color', 'bridge'),
			'param_name' => 'text_in_circle_color',
			'dependency' => array('element' => 'text_in_circle', 'not_empty' => true)
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Text in Process Font Weight', 'bridge'),
			'param_name' => 'text_in_circle_font_weight',
			'description' => esc_html__( 'Not all values are available for chosen font', 'bridge'),
			'value' => array(
				esc_html__('Default', 'bridge') => '',
				esc_html__('Thin 100', 'bridge') => '100',
				esc_html__('Extra-Light 200', 'bridge') => '200',
				esc_html__('Light 300', 'bridge') => '300',
				esc_html__('Regular 400', 'bridge') => '400',
				esc_html__('Medium 500', 'bridge') => '500',
				esc_html__('Semi-Bold 600', 'bridge') => '600',
				esc_html__('Bold 700', 'bridge') => '700',
				esc_html__('Extra-Bold 800', 'bridge') => '800',
				esc_html__('Ultra-Bold 900', 'bridge') => '900'
			),
			'dependency' => array('element' => 'text_in_circle', 'not_empty' => true)
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Link', 'bridge'),
			'param_name' => 'link'
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Link Target', 'bridge'),
			'param_name' => 'link_target',
			'value' => array(
				'' => '',
				esc_html__('Self', 'bridge') => '_self',
				esc_html__('Blank', 'bridge') => '_blank',
				esc_html__('Parent', 'bridge') => '_parent'
			),
			'dependency' => array('element' => 'link', 'not_empty' => true)
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Title', 'bridge'),
			'param_name' => 'title'
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Title Tag', 'bridge'),
			'param_name' => 'title_tag',
			'value' => array(
				''   => '',
				'h2' => 'h2',
				'h3' => 'h3',
				'h4' => 'h4',
				'h5' => 'h5',
				'h6' => 'h6',
			),
			'dependency' => array('element' => 'title', 'not_empty' => true)
		),
		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'Title Color', 'bridge'),
			'param_name' => 'title_color',
			'dependency' => array('element' => 'title', 'not_empty' => true)
		),
		array(
			'type' => 'textarea',
			'heading' => esc_html__( 'Text', 'bridge'),
			'param_name' => 'text'
		),
		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'Text Color', 'bridge'),
			'param_name' => 'text_color',
			'dependency' => array('element' => 'text', 'not_empty' => true)
		)
	)
) );

class WPBakeryShortCode_Qode_Clients  extends WPBakeryShortCodesContainer {}
vc_map( array(
	'name' => esc_html__( 'Qode Clients', 'bridge'),
	'base' => 'qode_clients',
	'as_parent' => array('only' => 'qode_client'),
	'content_element' => true,
	'category' => esc_html__( 'by QODE', 'bridge'),
	'icon' => 'extended-custom-icon-qode icon-wpb-qode_clients',
	'show_settings_on_create' => true,
	'params' => array(
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Columns', 'bridge'),
			'param_name' => 'columns',
			'value' => array(
				esc_html__('Two', 'bridge')       => 'two_columns',
				esc_html__('Three', 'bridge')     => 'three_columns',
				esc_html__('Four', 'bridge')      => 'four_columns',
				esc_html__('Five', 'bridge')      => 'five_columns',
				esc_html__('Six', 'bridge')       => 'six_columns'
			),
			'save_always' => true,
			'admin_label' => true
		),
		array(
			'type'	=> 'dropdown',
			'heading'	=> esc_html__('Hover Effect', 'bridge'),
			'param_name'	=> 'hover_effect',
			'value' => array(
				esc_html__('Default','bridge')       => 'default',
				esc_html__('Switch Images', 'bridge')     => 'switch_img'
			),
			'save_always' => true
		),
		array(
			'type'	=> 'dropdown',
			'heading'	=> esc_html__('Switch Effect', 'bridge'),
			'param_name'	=> 'switch_effect',
			'value' => array(
				esc_html__('Fade','bridge')       => 'switch_fade',
				esc_html__('Roll Over','bridge')     => 'switch_roll'
			),
			'dependency' => array('element' => 'hover_effect', 'value' => array('switch_img')),
			'save_always' => true
		),
		array(
			'type'	=> 'dropdown',
			'heading'	=> esc_html__('Disable Cilents Separators', 'bridge'),
			'param_name'	=> 'disable_separators',
			'value' => array(
				esc_html__('No','bridge')       => '',
				esc_html__('Yes','bridge')     => 'yes'
			),
			'save_always' => true
		)
	),
	'js_view' => 'VcColumnView'
) );

class WPBakeryShortCode_Qode_Client extends WPBakeryShortCode {}
vc_map( array(
	'name' => esc_html__( 'Qode Client', 'bridge'),
	'base' => 'qode_client',
	'content_element' => true,
	'icon' => 'extended-custom-icon-qode icon-wpb-qode_client',
	'as_child' => array('only' => 'qode_clients'), // Use only|except attributes to limit parent (separate multiple values with comma)
	'params' => array(
		array(
			'type'			=> 'attach_image',
			'heading' => esc_html__( 'Image', 'bridge'),
			'param_name'	=> 'image'
		),
		array(
			'type'			=> 'attach_image',
			'heading'		=>  esc_html__('Hover Image', 'bridge'),
			'param_name'	=> 'hover_image',
			'description'	=> esc_html__("You can use this option only if you have chosen 'Switch Images' as hover effect in Qode Clients", 'bridge')
		),
		array(
			'type'			=> 'textfield',
			'heading'       => esc_html__( 'Link', 'bridge'),
			'param_name'	=> 'link',
			'admin_label'	=> true
		),
		array(
			'type'			=> 'dropdown',
			'heading' => esc_html__( 'Link Target', 'bridge'),
			'param_name'	=> 'link_target',
			'value'			=> array(
				'' => '',
				esc_html__('Self', 'bridge') => '_self',
				esc_html__('Blank', 'bridge') => '_blank',
				esc_html__('Parent', 'bridge') => '_parent'
			)
		)
	)
) );

class WPBakeryShortCode_Qode_Elements_Holder  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
	"name" =>  esc_html__( 'Qode Elements Holder', 'bridge' ),
	"base" => "qode_elements_holder",
	"as_parent" => array('only' => 'qode_elements_holder_item'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
	"content_element" => true,
	"category" => esc_html__( 'by QODE', 'bridge'),
	"icon" => "extended-custom-icon-qode icon-wpb-qode_elements_holder",
	"show_settings_on_create" => true,
	"js_view" => 'VcColumnView',
	"params" => array(
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Background Color", 'bridge'),
			"param_name" => "background_color",
			"value" => ""
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Columns", 'bridge'),
			"param_name" => "number_of_columns",
			"value" => array(
				esc_html__('One', 'bridge')    	=> "one_column",
				esc_html__('Two', 'bridge')    	=> "two_columns",
				esc_html__('Three', 'bridge')      => "three_columns",
				esc_html__('Four', 'bridge')       => "four_columns"
			),
			"admin_label" => true,
			'save_always' => true
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__("Custom Css class", 'bridge'),
			"param_name" => "custom_class"
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Columns Proportion", 'bridge'),
			"param_name" => "columns_proportion",
			"value" => array(
				"50:50"    	=> "50_50",
				"66:33"    	=> "66_33",
				"33:66"     => "33_66",
				"25:75"		=> "25_75",
				"75:25"		=> "75_25"
			),
			"dependency" => array("element" => "number_of_columns", "value" => array("two_columns"))
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Columns Proportion", 'bridge'),
			"param_name" => "three_columns_proportion",
			"value" => array(
				"33:33:33"    	=> "33_33_33",
				"50:25:25"    	=> "50_25_25",
				"25:25:50"     => "25_25_50"
			),
			"dependency" => array("element" => "number_of_columns", "value" => array("three_columns"))
		),
		array(
			"type" => "dropdown",
			"group" => "Width & Responsiveness",
			"heading" => esc_html__( 'Switch to One Column', 'bridge'),
			"param_name" => "switch_to_one_column",
			"value" => array(
				esc_html__('Default', 'bridge')    		=> "",
				esc_html__("Below 1300px", 'bridge') 		=> "1300",
				esc_html__('Below 1000px', 'bridge')    	=> "1000",
				esc_html__('Below 768px', 'bridge')     	=> "768",
				esc_html__('Below 600px', 'bridge')    	=> "600",
				esc_html__('Below 480px', 'bridge')    	=> "480",
				esc_html__('Never', 'bridge')   			=> "never"
			),
			"admin_label" => true,
			"description" => esc_html__( 'Choose on which stage item will be in one column', 'bridge')
		),
		array(
			"type" => "dropdown",
			"group" => "Width & Responsiveness",
			"heading" => esc_html__( 'Choose Alignment In Responsive Mode', 'bridge'),
			"param_name" => "alignment_one_column",
			"value" => array(
				esc_html__('Default', 'bridge')    	=> "",
				esc_html__('Left', 'bridge') 			=> "left",
				esc_html__('Center', 'bridge')     	=> "center",
				esc_html__('Right', 'bridge')      	=> "right"
			),
			"description" => esc_html__( 'Alignment When Items are in One Column', 'bridge')
		)
	)
) );

class WPBakeryShortCode_Qode_Elements_Holder_Item  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
	"name" =>  esc_html__( 'Qode Elements Holder Item', 'bridge' ),
	"base" => "qode_elements_holder_item",
	"as_parent" => array('except' => 'vc_row, vc_accordion, cover_boxes, portfolio_list, portfolio_slider, qode_carousel'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
	"as_child" => array('only' => 'qode_elements_holder'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
	"content_element" => true,
	"category" => esc_html__( 'by QODE', 'bridge'),
	"icon" => "extended-custom-icon-qode icon-wpb-qode_elements_holder_item",
	"show_settings_on_create" => true,
	"js_view" => 'VcColumnView',
	"params" => array(
			array(
				"type" => "textfield",
				"heading" => esc_html__("Custom Css class", 'bridge'),
				"param_name" => "custom_class"
			),
			array(
				"type" => "colorpicker",
				"heading" => esc_html__( 'Background Color', 'bridge'),
				"param_name" => "background_color",
				"admin_label" => true
            ),
			array(
				"type" => "attach_image",
				"heading" => esc_html__( 'Background Image', 'bridge'),
				"param_name" => "background_image",
				"admin_label" => true
			),
			array(
				'type'	=> 'dropdown',
				'heading'	=> esc_html__('Background Size','bridge'),
				'param_name'	=> 'cover',
				'value'	=> array(
					esc_html__('Initial/Default','bridge')	=> 'no',
					esc_html__('Cover','bridge') => 'yes'
				),
				'description'	=> esc_html__('Enable this option if you want background image to cover whole elements holder item','bridge'),
				'dependency'	=> array('element' => 'background_image', 'not_empty' => true)
			),
			array(
                "type" => "textfield",
                "heading" => esc_html__( 'Padding', 'bridge'),
                "param_name" => "item_padding",
				"admin_label" => true,
                "description" => esc_html__( 'Please insert padding in format 0px 10px 0px 10px', 'bridge')
            ),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( 'Vertical Alignment', 'bridge'),
				"param_name" => "vertical_alignment",
				"value" => array(
					esc_html__('Default', 'bridge') => "",
					esc_html__('Top', 'bridge')     => "top",
					esc_html__('Middle', 'bridge')  => "middle",
					esc_html__('Bottom', 'bridge')  => "bottom"
				),
				"admin_label" => true
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__('Horizontal Alignment', 'bridge'),
				"param_name" => "horizontal_alignment",
				"value" => array(
					esc_html__('Default', 'bridge') => "",
					esc_html__('Left', 'bridge')    => "left",
					esc_html__('Center', 'bridge')  => "center",
					esc_html__('Right', 'bridge')   => "right"
				)
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Advanced Scroll Animations", 'bridge'),
				"param_name" => "advanced_animations",
				"value" => array(
					esc_html__('No', 'bridge') => "no",
					esc_html__('Yes', 'bridge') => "yes"
				),
				'save_always' => true
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( 'Animation Start Position', 'bridge'),
				"param_name" => "start_position",
				"value" => array(
					esc_html__('Bottom of Page', 'bridge') => 'bottom',
					esc_html__('Center of Page', 'bridge') => 'center'
				),
				'save_always' => true,
				"dependency" => array("element" => "advanced_animations", "value" => array("yes"))
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Start Animation Style", 'bridge'),
				"param_name" => "start_animation_style",
				"dependency" => array("element" => "advanced_animations", "value" => array("yes"))
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Animation End Position", 'bridge'),
				"param_name" => "end_position",
				"value" => array(
					esc_html__('Center of Page', 'bridge') => "center",
					esc_html__('Top of Page', 'bridge')    => "top-bottom"
				),
				'save_always' => true,
				"dependency" => array("element" => "advanced_animations", "value" => array("yes"))
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( 'End Animation Style', 'bridge'),
				"param_name" => "end_animation_style",
				"dependency" => array("element" => "advanced_animations", "value" => array("yes"))
			),
			array(
				'type' => 'textfield',
				'class' => '',
                'group' => esc_html__( 'Width & Responsiveness', 'bridge'),
				'heading' => esc_html__( 'Padding on screen size between 1280px-1440px', 'bridge'),
				'param_name' => 'item_padding_1280_1440',
				'description' => esc_html__( 'Please insert padding in format 0px 10px 0px 10px', 'bridge')
			),
            array(
                'type' => 'textfield',
                'group' => esc_html__( 'Width & Responsiveness', 'bridge'),
                'heading' => esc_html__( 'Padding on screen size between 1024px-1280px', 'bridge'),
                'param_name' => 'item_padding_1024_1280',
                'description' => esc_html__( 'Please insert padding in format 0px 10px 0px 10px', 'bridge')
            ),
            array(
                'type' => 'textfield',
                'group' => esc_html__( 'Width & Responsiveness', 'bridge'),
                'heading' => esc_html__( 'Padding on screen size between 768px-1024px', 'bridge'),
                'param_name' => 'item_padding_768_1024',
                'description' => esc_html__( 'Please insert padding in format 0px 10px 0px 10px', 'bridge')
            ),
            array(
                'type' => 'textfield',
                'group' => esc_html__( 'Width & Responsiveness', 'bridge'),
                'heading' => esc_html__( 'Padding on screen size between 600px-768px', 'bridge'),
                'param_name' => 'item_padding_600_768',
                'description' => esc_html__( 'Please insert padding in format 0px 10px 0px 10px', 'bridge')
            ),
            array(
                'type' => 'textfield',
                'group' => esc_html__( 'Width & Responsiveness', 'bridge'),
                'heading' => esc_html__( 'Padding on screen size between 480px-600px', 'bridge'),
                'param_name' => 'item_padding_480_600',
                'description' => esc_html__( 'Please insert padding in format 0px 10px 0px 10px', 'bridge')
            ),
            array(
                'type' => 'textfield',
                'group' => esc_html__( 'Width & Responsiveness', 'bridge'),
                'heading' => esc_html__( 'Padding on Screen Size Bellow 480px', 'bridge'),
                'param_name' => 'item_padding_480',
                'description' => esc_html__( 'Please insert padding in format 0px 10px 0px 10px', 'bridge'))
            )
        )
);

class WPBakeryShortCode_Qode_Pricing_List  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
	"name" => esc_html__("Qode Pricing List", 'bridge'),
	"base" => "qode_pricing_list",
	"as_parent" => array('only' => 'qode_pricing_list_item'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
	"content_element" => true,
	"category" => esc_html__( 'by QODE', 'bridge'),
	"icon" => "extended-custom-icon-qode icon-wpb-qode_pricing_list",
	"show_settings_on_create" => false,
	"params" => array(),
	"js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_Qode_Pricing_List_Item extends WPBakeryShortCode {}
vc_map( array(
	"name" => esc_html__( "Qode Pricing List Item", 'bridge'),
	"base" => "qode_pricing_list_item",
	"content_element" => true,
	"icon" => "extended-custom-icon-qode icon-wpb-pricing_list_item",
	"as_child" => array('only' => 'qode_pricing_list'), // Use only|except attributes to limit parent (separate multiple values with comma)
	"params" => array(
		array(
			"type" => "textfield",
			"heading" => esc_html__( 'Title', 'bridge'),
			"param_name" => "title",
			'admin_label' => true
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( 'Title Color', 'bridge'),
			"param_name" => "title_color"
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( 'Title Font Size (px)', 'bridge'),
			"param_name" => "title_font_size",
			"description" => esc_html__( 'Enter just number. Omit unit, it is added automatically', 'bridge')
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( 'Title Tag', 'bridge'),
			"param_name" => "title_tag",
			"value" => array(
				""   => "",
				"h2" => "h2",
				"h3" => "h3",
				"h4" => "h4",
				"h5" => "h5",
				"h6" => "h6",
			),
			"dependency" => array('element' => "title", 'not_empty' => true)
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( 'Text', 'bridge'),
			"param_name" => "text",
			'admin_label' => true
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( 'Text Color', 'bridge'),
			"param_name" => "text_color",
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( 'Text Font Size (px)', 'bridge'),
			"param_name" => "text_font_size",
			"description" => esc_html__( 'Enter just number. Omit unit, it is added automatically', 'bridge')
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( 'Price', 'bridge'),
			"param_name" => "price",
			"description" => esc_html__( 'You can append any unit that you want', 'bridge'),
			'admin_label' => true
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( 'Price Color', 'bridge'),
			"param_name" => "price_color",
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( 'Price Font Size (px)', 'bridge'),
			"param_name" => "price_font_size",
			"description" => esc_html__( 'Enter just number. Omit unit, it is added automatically', 'bridge')
		)
	)
) );

class WPBakeryShortCode_Qode_Pricing_Tables  extends WPBakeryShortCodesContainer {}
vc_map( array(
    "name" => esc_html__( "Qode Pricing Tables", 'bridge'),
    "base" => "qode_pricing_tables",
    "as_parent" => array('only' => 'qode_pricing_table'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
    "content_element" => true,
    "category" => esc_html__( 'by QODE', 'bridge'),
    "icon" => "extended-custom-icon-qode icon-wpb-pricing_column",
    "show_settings_on_create" => true,
    "params" => array(
        array(
            "type" => "dropdown",
            "heading" => esc_html__( 'Columns', 'bridge'),
            "param_name" => "columns",
            "value" => array(
                esc_html__('Two', 'bridge')       => "two_columns",
                esc_html__('Three', 'bridge')     => "three_columns",
                esc_html__('Four', 'bridge')      => "four_columns",
            ),
			'admin_label'	=> true,
			'save_always' => true
        )
    ),
    "js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_Qode_Pricing_Table  extends WPBakeryShortCode {}
// Pricing table shortcode
vc_map( array(
		"name" => esc_html__( "Pricing Table", 'bridge'),
		"base" => "qode_pricing_table",
		"icon" => "extended-custom-icon-qode icon-wpb-pricing_list_item",
		"category" => esc_html__( 'by QODE', 'bridge'),
		"allowed_container_element" => 'vc_row',
        "as_child" => array('only' => 'qode_pricing_tables'), // Use only|except attributes to limit parent (separate multiple values with comma)
		"params" => array(
			array(
				"type" => "dropdown",
				"heading" => esc_html__( 'Type', 'bridge'),
				"param_name" => "type",
				"value" => array(
					esc_html__('Standard', 'bridge')	=> "standard",
					esc_html__('Advanced', 'bridge')	=> "advanced"
				),
				'admin_label'	=> true
			),
			array(
				"type"			=> "attach_image",
				"heading" => esc_html__( 'Image', 'bridge'),
				"param_name"	=> "image",
				"dependency" 	=> array('element' => "type", 'value' => 'advanced')
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( 'Title', 'bridge'),
				"param_name" => "title",
				"value" => esc_html__("Basic Plan", "bridge"),
				'admin_label'	=> true,
				'save_always'	=> true
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( 'Title Tag', 'bridge'),
				"param_name" => "title_tag",
				"value" => array(
					'h1' => 'h1',
					'h2' => 'h2',
					'h3' => 'h3',
					'h4' => 'h4',
					'h5' => 'h5',
					'h6' => 'h6',
				),
				'save_always'	=> true,
				'dependency'	=> array('element' => 'type', 'value' => 'advanced')
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( 'Title Tag', 'bridge'),
				"param_name" => "title_tag_standard",
				"value" => array(
					''	 => '',
					'h1' => 'h1',
					'h2' => 'h2',
					'h3' => 'h3',
					'h4' => 'h4',
					'h5' => 'h5',
					'h6' => 'h6',
				),
				'save_always'	=> true,
				'dependency'	=> array('element' => 'type', 'value' => 'standard')
			),
			array(
				"type"			=> "textfield",
				"heading" => esc_html__( 'Subtitle', 'bridge'),
				"param_name"	=> "subtitle",
				"dependency" 	=> array('element' => "type", 'value' => 'advanced')
			),
			array(
				"type"			=> "textfield",
				"heading" => esc_html__( 'Short Info', 'bridge'),
				"param_name"	=> "short_info",
				"dependency" 	=> array('element' => "type", 'value' => 'advanced')
			),
			array(
				"type"			=> "textfield",
				"heading" => esc_html__( 'Additional Info', 'bridge'),
				"param_name"	=> "additional_info",
				"value"			=> "",
				"dependency" 	=> array('element' => "type", 'value' => 'advanced')
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( 'Price', 'bridge'),
				"param_name" => "price",
				'admin_label'	=> true
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( 'Currency', 'bridge'),
				"param_name" => "currency",
				'admin_label'	=> true
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( 'Price Period', 'bridge'),
				"param_name" => "price_period",
				'admin_label'	=> true
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( 'Show Button', 'bridge'),
				"param_name" => "show_button",
				"value" => array(
					esc_html__('Yes', 'bridge') => "yes",
					esc_html__('No', 'bridge')  => "no"
				),
				'admin_label'	=> true,
				'save_always' => true
			),
            array(
                "type" => "textfield",
                "heading" => esc_html__( 'Button Text', 'bridge'),
                "param_name" => "button_text",
                "description" => esc_html__( 'Default label is Purchase', 'bridge'),
                "dependency" => array('element' => 'show_button', 'value' => 'yes')
            ),
			array(
				"type" => "textfield",
				"heading" => esc_html__( 'Button Link', 'bridge'),
				"param_name" => "link",
				"dependency" => array('element' => 'show_button', 'value' => 'yes')
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( 'Button Target', 'bridge'),
				"param_name" => "target",
				"value" => array(
					"" => "",
					esc_html__('Self', 'bridge')   => "_self",
					esc_html__('Blank', 'bridge')  => "_blank",
					esc_html__('Parent', 'bridge') => "_parent"
				),
				"dependency" => array('element' => 'show_button', 'value' => 'yes')
			),
			array(
				"type" => "dropdown",
				"heading" => esc_html__( 'Button Size', 'bridge'),
				"param_name" => "button_size",
				"value" => array(
					"" => "",
					esc_html__('Small', 'bridge')  => "small",
					esc_html__('Medium', 'bridge') => "medium",
					esc_html__('Large', 'bridge')  => "large"
				),
				"dependency" => array('element' => 'show_button', 'value' => 'yes')
			),
			array(
				'type'			=> 'dropdown',
				'heading' => esc_html__( 'Active', 'bridge'),
				'param_name'	=> 'active',
				'value' => array(
					esc_html__('No', 'bridge')  => 'no',
					esc_html__('Yes', 'bridge') => 'yes'
				),
				'save_always'	=> true,
				'admin_label'	=> true,
				'dependency' 	=> array('element' => 'type', 'value' => 'standard')
			),
            array(
                "type" => "textfield",
                "heading" => esc_html__( 'Active text', 'bridge'),
                "param_name" => "active_text",
                "dependency" => array('element' => 'active', 'value' => 'yes')
            ),
			array(
				"type" => "textarea_html",
				"heading" => esc_html__( 'Content', 'bridge'),
				"param_name" => "content",
				"value" => "<li>" . esc_html__('content content content', 'bridge') . "</li><li>" . esc_html__('content content content', 'bridge') . "</li><li>" . esc_html__('content content content', 'bridge') . "</li>"
			)
		)
) );

class WPBakeryShortCode_Qode_Vertical_Split_Slider  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
	"name" =>  esc_html__( 'Qode Vertical Split Slider', 'bridge' ),
	"base" => "qode_vertical_split_slider",
	"as_parent" => array('only' => 'qode_vertical_left_sliding_panel,qode_vertical_right_sliding_panel'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
	"content_element" => true,
	"category" => esc_html__( 'by QODE', 'bridge'),
	"icon" => "extended-custom-icon-qode icon-wpb-vertical_split_slider",
	"show_settings_on_create" => false,
	"params" => array(),
	"js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_Qode_Vertical_Left_Sliding_Panel  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
	"name" =>  esc_html__( 'Left Sliding Panel', 'bridge' ),
	"base" => "qode_vertical_left_sliding_panel",
	"as_parent" => array('only' => 'qode_vertical_slide_content_item'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
	"as_child" => array('only' => 'qode_vertical_split_slider'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
	"content_element" => true,
	"category" => esc_html__( 'by QODE', 'bridge'),
	"icon" => "extended-custom-icon-qode icon-wpb-vertical_split_left",
	"show_settings_on_create" => false,
	"params" => array(),
	"js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_Qode_Vertical_Right_Sliding_Panel  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
	"name" =>  esc_html__( 'Right Sliding Panel', 'bridge' ),
	"base" => "qode_vertical_right_sliding_panel",
	"as_parent" => array('only' => 'qode_vertical_slide_content_item'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
	"as_child" => array('only' => 'qode_vertical_split_slider'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
	"content_element" => true,
	"category" => esc_html__( 'by QODE', 'bridge'),
	"icon" => "extended-custom-icon-qode icon-wpb-vertical_split_right",
	"show_settings_on_create" => false,
	"params" => array(),
	"js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_Qode_Vertical_Slide_Content_Item  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
	"name" =>  esc_html__( 'Slide Content Item', 'bridge' ),
	"base" => "qode_vertical_slide_content_item",
	"as_parent" => array('except' => 'vc_row, vc_accordion, cover_boxes, portfolio_list, portfolio_slider, qode_carousel'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
	"as_child" => array('only' => 'qode_vertical_left_sliding_panel, qode_vertical_right_sliding_panel'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
	"content_element" => true,
	"category" => esc_html__( 'by QODE', 'bridge'),
	"icon" => "extended-custom-icon-qode icon-wpb-qode_horizontal_marquee_item",
	"show_settings_on_create" => true,
	"js_view" => 'VcColumnView',
	"params" => array(
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( 'Background Color', 'bridge'),
			"param_name" => "background_color"
		),
		array(
			"type" => "attach_image",
			"heading" => esc_html__( 'Background Image', 'bridge'),
			"param_name" => "background_image"
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( 'Padding left/right', 'bridge'),
			"param_name" => "item_padding",
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Content Aligment", 'bridge'),
			"param_name" => "aligment",
			"value" => array(
				esc_html__('Left', 'bridge')    	=> "left",
				esc_html__('Right', 'bridge')      => "right",
				esc_html__('Center', 'bridge')     => "center"
			),
			'save_always' => true
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( 'Header/Bullets Style', 'bridge'),
			"param_name" => "header_style",
			"value" => array(
				""	=>	"",
				esc_html__('Light', 'bridge')	=>	"light",
				esc_html__('Dark', 'bridge')	=>	"dark"
			)
		)

	)
) );

/******* Horizontal Marquee Shortcodes ***********/

class WPBakeryShortCode_Qode_Horizontal_Marquee  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
	"name" =>  esc_html__( 'Qode Horizontal Marquee', 'bridge' ),
	"base" => "qode_horizontal_marquee",
	"as_parent" => array('only' => 'qode_horizontal_marquee_item'),
	"content_element" => true,
	"category" => esc_html__( 'by QODE', 'bridge'),
	"icon" => "extended-custom-icon-qode icon-wpb-qode_horizontal_marquee",
	"show_settings_on_create" => true,
	"params" => array(
		array(
			"type"			=> "textfield",
			"heading" => esc_html__( 'Height (px)', 'bridge'),
			"param_name"	=> "height",
			"admin_label"	=> true,
			"description" => esc_html__( 'Enter the desired height for the marquee. It might become lower to fit smaller screens.', 'bridge')
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( 'Spacing (px)', 'bridge'),
			"param_name" => "spacing",
			"description" => esc_html__( 'Distance between marquee items.', 'bridge')
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( 'Behavior', 'bridge'),
			"param_name" => "behavior",
			"value" => array(
				esc_html__('Draggable', 'bridge')  => "draggable",
				esc_html__('Loop', 'bridge')       => "loop"
			),
			"admin_label"	=> true
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( 'Enable Appear Effect', 'bridge'),
			"param_name" => "appear_fx",
			"value" => array(
				esc_html__('No', 'bridge')  => "no",
				esc_html__('Yes', 'bridge') => "yes"
			),
			'dependency' 	=> array('element' => 'behavior', 'value' => 'loop'),
			"admin_label"	=> true
		)
	),
	"js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_Qode_Horizontal_Marquee_Item  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
	"name" =>  esc_html__( 'Horizontal Marquee Item', 'bridge' ),
	"base" => "qode_horizontal_marquee_item",
	"as_parent" => array('except' => 'vc_row, vc_tabs, vc_accordion, cover_boxes, portfolio_list, portfolio_slider, qode_carousel'),
	"as_child" => array('only' => 'qode_horizontal_marquee'),
	"content_element" => true,
	"category" => esc_html__( 'by QODE', 'bridge'),
	"icon" => "extended-custom-icon-qode icon-wpb-qode_horizontal_marquee_item",
	"show_settings_on_create" => true,
	"params" => array(
		array(
			"type" => "textfield",
			"heading" => esc_html__( 'Width (px)', 'bridge'),
			"param_name" => "width",
			"description" => esc_html__( 'Enter the desired width for this item. It might be lower on smaller screens.', 'bridge')
		),
		array(
			"type" => "dropdown",
			"heading" => esc_html__( 'Vertical Alignment', 'bridge'),
			"param_name" => "align",
			"value" => array(
				esc_html__('Top', 'bridge')    	=> "top",
				esc_html__('Middle', 'bridge')     => "middle",
				esc_html__('Bottom', 'bridge')     => "bottom"
			),
			'save_always' => true,
			"description" => esc_html__( 'How to align the content of this item relative to the marquee height.', 'bridge')
		)
	),
	"js_view" => 'VcColumnView'
) );

/******* Preview Slider Shortcodes ***********/

class WPBakeryShortCode_Qode_Preview_Slider  extends WPBakeryShortCodesContainer {}
vc_map( array(
    "name" =>  esc_html__( 'Qode Preview Slider', 'bridge' ),
    "base" => "qode_preview_slider",
    "as_parent" => array('only' => 'qode_preview_slider_item'),
    "content_element" => true,
    "category" => esc_html__( 'by QODE', 'bridge'),
    "icon" => "extended-custom-icon-qode icon-wpb-qode_preview_slider",
    "js_view" => 'VcColumnView',
    'params' => array(
        array(
            "type" => "dropdown",
            "heading" => esc_html__( 'Frame Skin', 'bridge-core'),
            "param_name" => "skin",
            "admin_label" => true,
            "value" => array(
                esc_html__('Light / Default', 'bridge')  => "",
                esc_html__('Dark', 'bridge') => "dark"
            ),
            'save_always' => true
        ),
    )
) );

class WPBakeryShortCode_Qode_Preview_Slider_Item  extends WPBakeryShortCode {}
vc_map( array(
    "name" =>  esc_html__( 'Preview Slider Item', 'bridge' ),
    "base" => "qode_preview_slider_item",
    "as_child" => array('only' => 'qode_preview_slider'),
    "category" => esc_html__( 'by QODE', 'bridge'),
    "icon" => "extended-custom-icon-qode icon-wpb-qode_preview_slider_item",
    "show_settings_on_create" => true,
    "params" => array(
        array(
            "type" => "dropdown",
            "heading" => esc_html__( 'Frame Skin', 'bridge-core'),
            "param_name" => "skin",
            "admin_label" => true,
            "value" => array(
                esc_html__('Light / Default', 'bridge')  => "",
                esc_html__('Dark', 'bridge') => "dark"
            ),
            'save_always' => true
        ),
        array(
            "type" => "attach_image",
            "heading" => esc_html__( 'Main Image', 'bridge'),
            "param_name" => "big_image",
			"admin_label" => true
        ),
        array(
            "type" => "attach_image",
            "heading" => esc_html__( 'Preview Image', 'bridge'),
            "param_name" => "small_image",
			"admin_label" => true
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__( 'Link', 'bridge'),
            "param_name" => "link",
			"admin_label" => true
        ),
        array(
            "type" => "dropdown",
            "heading" => esc_html__( 'Link Target', 'bridge'),
            "param_name" => "target",
            "value" => array(
                esc_html__('Self', 'bridge')  => "_self",
                esc_html__('Blank', 'bridge') => "_blank"
            ),
            'save_always' => true
        )
    )
) );

/******* In-Device Slider Shortcodes ***********/

class WPBakeryShortCode_Qode_In_Device_Slider  extends WPBakeryShortCodesContainer {}
vc_map( array(
    "name" =>  esc_html__( 'Qode In-Device Slider', 'bridge' ),
    "base" => "qode_in_device_slider",
    "as_parent" => array('only' => 'qode_in_device_slider_item'),
    "content_element" => true,
    "category" => esc_html__( 'by QODE', 'bridge'),
    "icon" => "extended-custom-icon-qode icon-wpb-qode_in_device_slider",
    "show_settings_on_create" => true,
    "params" => array(
        array(
            "type" => "dropdown",
            "heading" => esc_html__( 'Device', 'bridge'),
            "param_name" => "device",
            "description" => esc_html__( 'Choose the frame in which the slides will be shown.', 'bridge'),
            "value" => array(
                "Desktop" => "desktop",
                "Tablet - Portrait" => "tablet-portrait",
                "Tablet - Landscape" => "tablet-landscape",
                "Phone - Portrait" => "phone-portrait",
                "Phone - Landscape" => "phone-landscape"
            ),
            'save_always' => true,
			"admin_label" => true
        ),
        array(
            "type" => "dropdown",
            "heading" => esc_html__( 'Image Titles on Hover?', 'bridge'),
            "param_name" => "titles_on_hover",
            "value" => array(
                esc_html__('Yes', 'bridge') => "yes",
                esc_html__('No', 'bridge')  => "no"
            ),
            'save_always' => true,
			"admin_label" => true
        ),
        array(
            "type" => "dropdown",
            "heading" => esc_html__( 'Show Navigation Arrows?', 'bridge'),
            "param_name" => "navigation",
            "value" => array(
                esc_html__('No', 'bridge')  => "no",
                esc_html__('Yes', 'bridge') => "yes"
            ),
            'save_always' => true,
			"admin_label" => true
        ),
        array(
            "type" => "dropdown",
            "heading" => esc_html__( 'Autostart Slideshow', 'bridge'),
            "param_name" => "auto_start",
            "value" => array(
                esc_html__('Yes', 'bridge') => "yes",
                esc_html__('No', 'bridge')  => "no"
            ),
            'save_always' => true,
			"admin_label" => true
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__( 'Time Between Slides (ms)', 'bridge'),
            "description" => esc_html__( 'Default is 5000.', 'bridge'),
            "param_name" => "timeout",
            "placeholder" => '5000',
            'dependency' => array('element' => 'auto_start', 'value' => array('yes'))
        )
    ),
    "js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_Qode_In_Device_Slider_Item  extends WPBakeryShortCode {}
vc_map( array(
    "name" =>  esc_html__( 'In-Device Slider Item', 'bridge' ),
    "base" => "qode_in_device_slider_item",
    "as_child" => array('only' => 'qode_in_device_slider'),
    "category" => esc_html__( 'by QODE', 'bridge'),
    "icon" => "extended-custom-icon-qode icon-wpb-qode_in_device_slider_item",
    "show_settings_on_create" => true,
    "params" => array(
        array(
            "type" => "attach_image",
            "heading" => esc_html__( 'Image', 'bridge'),
            "param_name" => "image"
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__( 'Title', 'bridge'),
            "param_name" => "title",
			"admin_label" => true
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__( 'Link', 'bridge'),
            "param_name" => "link"
        ),
        array(
            "type" => "dropdown",
            "heading" => esc_html__( 'Link Target', 'bridge'),
            "param_name" => "target",
            "value" => array(
                esc_html__('Self', 'bridge')  => "_self",
                esc_html__('Blank', 'bridge') => "_blank"
            ),
            'save_always' => true
        )
    )
) );

/******* Content Slider Shortcodes ***********/

class WPBakeryShortCode_Qode_Content_Slider  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
    "name" =>  esc_html__( 'Qode Content Slider', 'bridge' ),
    "base" => "qode_content_slider",
    "as_parent" => array('only' => 'qode_content_slider_item'),
    "content_element" => true,
    "category" => esc_html__( 'by QODE', 'bridge'),
    "icon" => "extended-custom-icon-qode icon-wpb-qode_content_slider",
    "show_settings_on_create" => true,
    "params" => array(
        array(
            "type" => "dropdown",
            "heading" => esc_html__( 'Auto Rotate', 'bridge'),
            "param_name" => "auto_rotate",
            "value" => array(
                "3" => "3",
                "5" => "5",
                "10" => "10",
                esc_html__('Disable', 'bridge') => "0"
            ),
			"admin_label" => true
        ),
        array(
            "type" => "dropdown",
            "heading" => esc_html__( 'Enable drag', 'bridge'),
            "param_name" => "enable_drag",
            "value" => array(
                '' => '',
                esc_html__('Yes', 'bridge') => 'yes',
                esc_html__('No', 'bridge')  => 'no'
            )
        ),
        array(
            "type" => "dropdown",
            "heading" => esc_html__( 'Show direction navigation', 'bridge'),
            "param_name" => "direction_nav",
            "value" => array(
                '' => '',
                esc_html__('Yes', 'bridge') => 'yes',
                esc_html__('No', 'bridge')  => 'no'
            )
        ),
        array(
            "type" => "dropdown",
            "heading" => esc_html__( 'Show control navigation', 'bridge'),
            "param_name" => "control_nav",
            "value" => array(
                '' => '',
                esc_html__('Yes', 'bridge')  => 'yes',
                esc_html__('No', 'bridge')   => 'no'
            )
        ),
        array(
            "type" => "dropdown",
            "heading" => esc_html__( 'Justify control navigation', 'bridge'),
            "param_name" => "control_nav_justify",
            "value" => array(
                '' => '',
                esc_html__('Yes', 'bridge') => 'yes',
                esc_html__('No', 'bridge') => 'no'
            ),
			"dependency" => Array('element' => "control_nav", 'not_empty' => true)
        ),
        array(
            "type" => "dropdown",
            "heading" => esc_html__( 'Pause on hover', 'bridge'),
            "param_name" => "pause_on_hover",
            "value" => array(
                '' => '',
                esc_html__( 'Yes', 'bridge') => 'yes',
                esc_html__('No', 'bridge')   => 'no'
            )
        )
    ),
    "js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_Qode_Content_Slider_Item  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
    "name" =>  esc_html__( 'Content Slider Item', 'bridge' ),
    "base" => "qode_content_slider_item",
    "as_parent" => array(''),
    "as_child" => array('only' => 'qode_content_slider'),
    "content_element" => true,
    "category" => esc_html__( 'by QODE', 'bridge'),
    "icon" => "extended-custom-icon-qode icon-wpb-qode_content_slider_item",
    "show_settings_on_create" => false,
    "js_view" => 'VcColumnView'
) );


/*** Contact Form 7 ***/

if(bridge_qode_contact_form_7_installed()){
	vc_add_param('contact-form-7', array(
		'type' => 'dropdown',
		'heading' => esc_html__( 'Style', 'bridge'),
		'param_name' => 'html_class',
		'value' => array(
			esc_html__('Default', 'bridge')				=> 'default',
			esc_html__('Custom Style 1', 'bridge')  		=> 'cf7_custom_style_1',
			esc_html__('Custom Style 2', 'bridge')  		=> 'cf7_custom_style_2',
			esc_html__('Custom Style 3', 'bridge')	    	=> 'cf7_custom_style_3'
		),
		'save_always' => true,
		'description' => esc_html__( 'You can style each form element individually in Qode Options > Contact Form 7', 'bridge')
	));
}

/*** Restore Tabs&Accordion from Deprecated category ***/

$vc_map_deprecated_settings = array (
	'deprecated' => false,
	'category' => esc_html__( 'Content', 'bridge' )
);
vc_map_update( 'vc_accordion', $vc_map_deprecated_settings );
vc_map_update( 'vc_tabs', $vc_map_deprecated_settings );
vc_map_update( 'vc_tab', array('deprecated' => false) );
vc_map_update( 'vc_accordion_tab', array('deprecated' => false) );