<?php
$qode_custom_sidebars = array();
foreach ( $GLOBALS['wp_registered_sidebars'] as $sidebar ) {
	if(bridge_qode_is_user_made_sidebar(ucwords($sidebar['name']))){
		$qode_custom_sidebars[$sidebar['id']] = ucwords( $sidebar['name']);
	}
}


$qode_blog_categories = array();
$categories = get_categories(); 
foreach($categories as $category) {
	$qode_blog_categories[$category->term_id] = $category->name;
}

//Qode Slide Type

$qodeSlideType = new BridgeQodeMetaBox("slides", esc_html__('Qode Slide Type', 'bridge'));
bridge_qode_framework()->qodeMetaBoxes->addMetaBox("slides_type",$qodeSlideType);

	$qode_slide_background_type = new BridgeQodeMetaField("imagevideo","qode_slide-background-type","image",esc_html__('Slide Background Type','bridge'), esc_html__('Do you want to upload an image or video?','bridge'), array(), array("dependence" => true, "dependence_hide_on_yes" => "#qodef-meta-box-slides_video_settings", "dependence_show_on_yes" => "#qodef-meta-box-slides_image_settings"));
	$qodeSlideType->addChild("qode_slide-background-type",$qode_slide_background_type);

//Qode Slide Image

$qodeSlideImageSettings = new BridgeQodeMetaBox("slides", esc_html__('Qode Slide Image', 'bridge'),"qode_slide-background-type",array("video"));
bridge_qode_framework()->qodeMetaBoxes->addMetaBox("slides_image_settings",$qodeSlideImageSettings);

	$qode_slide_image = new BridgeQodeMetaField("image","qode_slide-image","",esc_html__('Slide Image', 'bridge'),esc_html__('Choose background image', 'bridge'));
	$qodeSlideImageSettings->addChild("qode_title-image",$qode_slide_image);
	
	$qode_slide_overlay_image = new BridgeQodeMetaField("image","qode_slide-overlay-image","",esc_html__('Overlay Image','bridge'),esc_html__('Choose overlay image (pattern) for background image', 'bridge'));
	$qodeSlideImageSettings->addChild("qode_slide-overlay-image",$qode_slide_overlay_image);
	
	$qode_enable_image_animation = new BridgeQodeMetaField("yesno", "qode_enable_image_animation", "no", esc_html__('Enable Image Animation','bridge'), esc_html__('Enabling this option will turn on a motion animation on the slide image', 'bridge'), array(), array(
        "dependence" => "true",
        "dependence_hide_on_yes" => "",
        "dependence_show_on_yes" => "#qodef_qode_enable_image_animation_container"
    ));
	$qodeSlideImageSettings->addChild('qode_enable_image_animation', $qode_enable_image_animation);
	
	$qode_enable_image_animation_container = new BridgeQodeContainer("qode_enable_image_animation_container", "qode_enable_image_animation", "no");
	$qodeSlideImageSettings->addChild("qode_enable_image_animation_container", $qode_enable_image_animation_container);
	
	$qode_enable_image_animation_type = new BridgeQodeMetaField("select","qode_enable_image_animation_type","zoom_center",esc_html__('Animation Type','bridge'),"", array(
        "zoom_center"		=> esc_html__('Zoom In Center','bridge'),
        "zoom_top_left"		=> esc_html__('Zoom In to Top Left','bridge'),
        "zoom_top_right"	=> esc_html__('Zoom In to Top Right','bridge'),
        "zoom_bottom_left"	=> esc_html__('Zoom In to Bottom Left','bridge'),
        "zoom_bottom_right"	=> esc_html__('Zoom In to Bottom Right','bridge')
    ));
    $qode_enable_image_animation_container->addChild("qode_enable_image_animation_type",$qode_enable_image_animation_type);

//Qode Slide Video

$qodeSlideVideoSettings = new BridgeQodeMetaBox("slides", esc_html__('Qode Slide Video','bridge'),"qode_slide-background-type",array("image"));
bridge_qode_framework()->qodeMetaBoxes->addMetaBox("slides_video_settings",$qodeSlideVideoSettings);

	$qode_slide_video_webm = new BridgeQodeMetaField("text","qode_slide-video-webm","", esc_html__('Video - webm', 'bridge'), esc_html__('Path to the webm file that you have previously uploaded in Media Section','bridge'));
	$qodeSlideVideoSettings->addChild("qode_slide-video-webm",$qode_slide_video_webm);
	
	$qode_slide_video_mp4 = new BridgeQodeMetaField("text","qode_slide-video-mp4","",esc_html__('Video - mp4', 'bridge'),esc_html__('Path to the mp4 file that you have previously uploaded in Media Section', 'bridge'));
	$qodeSlideVideoSettings->addChild("qode_slide-video-mp4",$qode_slide_video_mp4);
	
	$qode_slide_video_ogv = new BridgeQodeMetaField("text","qode_slide-video-ogv","",esc_html__('Video - ogv', 'bridge'),esc_html__('Path to the ogv file that you have previously uploaded in Media Section' ,'bridge'));
	$qodeSlideVideoSettings->addChild("qode_slide-video-ogv",$qode_slide_video_ogv);

	$qode_slide_video_image = new BridgeQodeMetaField("image","qode_slide-video-image","",esc_html__('Video Preview Image', 'bridge'),esc_html__('Choose background image that will be visible until video is loaded. This image will be shown on touch devices too.','bridge'));
	$qodeSlideVideoSettings->addChild("qode_slide-video-image",$qode_slide_video_image);
	
	$qode_slide_video_overlay = new BridgeQodeMetaField("yesempty","qode_slide-video-overlay","", esc_html__('Video Overlay Image', 'bridge'),esc_html__('Do you want to have an overlay image on video?', 'bridge'), array(),
			array("dependence" => true,
			"dependence_hide_on_yes" => "",
			"dependence_show_on_yes" => "#qodef_qode_slide-video-overlay_container"));
	$qodeSlideVideoSettings->addChild("qode_slide-video-overlay",$qode_slide_video_overlay);
	
	$qode_slide_video_overlay_container = new BridgeQodeContainer("qode_slide-video-overlay_container","qode_slide-video-overlay","");
	$qodeSlideVideoSettings->addChild("qode_slide_video_overlay_container",$qode_slide_video_overlay_container);
	
		$qode_slide_video_overlay_image = new BridgeQodeMetaField("image","qode_slide-video-overlay-image","",esc_html__('Overlay Image','bridge'),esc_html__('Choose overlay image (pattern) for background video', 'bridge'));
		$qode_slide_video_overlay_container->addChild("qode_slide-video-overlay-image",$qode_slide_video_overlay_image);

//Qode Slide General

$qodeSlideGeneral = new BridgeQodeMetaBox("slides", esc_html__('Qode Slide General', 'bridge'));
bridge_qode_framework()->qodeMetaBoxes->addMetaBox("slides_layout",$qodeSlideGeneral);
	
	$qode_slide_header_style = new BridgeQodeMetaField("selectblank","qode_slide-header-style","",esc_html__('Header Skin', 'bridge'),esc_html__('Header skin will be applied when this slide is in focus', 'bridge'), array(
	    "light"	=> esc_html__('Light', 'bridge'),
	    "dark"	=> esc_html__('Dark', 'bridge')
	));
	$qodeSlideGeneral->addChild("qode_slide-header-style",$qode_slide_header_style);
	
	$qode_slide_navigation_color = new BridgeQodeMetaField("color","qode_slide-navigation-color","",esc_html__('Navigation Color', 'bridge'),esc_html__('Navigation color will be applied when this slide is in focus', 'bridge'));
	$qodeSlideGeneral->addChild("qode_slide-navigation-color",$qode_slide_navigation_color);
	
	$qode_slide_scroll_to_section = new BridgeQodeMetaField("text","qode_slide-anchor-button","",esc_html__('Scroll to Section', 'bridge'), esc_html__("An arrow will appear to take viewers to the next section of the page. Enter the section anchor here, for example, '#contact'", 'bridge'));
	$qodeSlideGeneral->addChild("qode_slide-anchor-button",$qode_slide_scroll_to_section);

	$qode_slide_hide_title = new BridgeQodeMetaField("yesempty","qode_slide-hide-title","",esc_html__('Hide Slide Title', 'bridge'), esc_html__('Do you want to hide slide title?', 'bridge'), array(), array("dependence" => true, "dependence_hide_on_yes" => "#qodef-meta-box-slides_title", "dependence_show_on_yes" => ""));
	$qodeSlideGeneral->addChild("qode_slide-hide-title",$qode_slide_hide_title);

    $qode_slide_hide_shadow = new BridgeQodeMetaField("yesempty","qode_slide-hide-shadow","",esc_html__('Don\'t Show Slide Text Shadow', 'bridge'),esc_html__('Do you want to hide text shadow?', 'bridge'));
    $qodeSlideGeneral->addChild("qode_slide-hide-shadow",$qode_slide_hide_shadow);

    $qode_slide_thumbnail_animation = new BridgeQodeMetaField("select","qode_slide-thumbnail-animation","",esc_html__('Graphic Animation', 'bridge'),esc_html__('This is how the graphic will enter the slide', 'bridge'), array(
        "flip" => esc_html__('Flip', 'bridge'),
        "fade" => esc_html__('Fade', 'bridge')
    ));
    $qodeSlideGeneral->addChild("qode_slide-thumbnail-animation",$qode_slide_thumbnail_animation);

    $qode_slide_content_animation = new BridgeQodeMetaField("select","qode_slide-content-animation","",esc_html__('Content Animation' ,'bridge'),esc_html__('This is how content (title, subtitle, text and buttons) will enter the slide', 'bridge'), array(
        "all_at_once"	=> esc_html__('All At Once', 'bridge'),
        "one_by_one"	=> esc_html__('One By One', 'bridge')
    ));
    $qodeSlideGeneral->addChild("qode_slide-content-animation",$qode_slide_content_animation);

//Qode Slide Title

$qodeSlideTitle = new BridgeQodeMetaBox("slides", esc_html__('Qode Slide Title', 'bridge'), "qode_slide-hide-title",array("yes"));
bridge_qode_framework()->qodeMetaBoxes->addMetaBox("slides_title",$qodeSlideTitle);

	$title_group = new BridgeQodeGroup(esc_html__('Title Style' ,'bridge'), esc_html__('Define styles for title', 'bridge'));
	$qodeSlideTitle->addChild("title_group",$title_group);
	    $row1 = new BridgeQodeRow();
	    $title_group->addChild("row1",$row1);
		    $title_color = new BridgeQodeMetaField("colorsimple","qode_slide-title-color","",esc_html__('Font Color', 'bridge'),esc_html__('This is some description', 'bridge'));
		    $row1->addChild("qode_slide-title-color",$title_color);
		    $title_fontsize = new BridgeQodeMetaField("textsimple","qode_slide-title-font-size","",esc_html__('Font Size (px)', 'bridge'),esc_html__('This is some description', 'bridge'));
		    $row1->addChild("qode_slide-title-font-size",$title_fontsize);
		    $title_lineheight = new BridgeQodeMetaField("textsimple","qode_slide-title-line-height","",esc_html__('Line Height (px)', 'bridge'),esc_html__('This is some description', 'bridge'));
		    $row1->addChild("qode_slide-title-line-height",$title_lineheight);
		    $title_letterspacing = new BridgeQodeMetaField("textsimple","qode_slide-title-letter-spacing","",esc_html__('Letter Spacing (px)', 'bridge'), esc_html__('This is some description', 'bridge'));
		    $row1->addChild("qode_slide-title-letter-spacing",$title_letterspacing);
	
	    $row2 = new BridgeQodeRow(true);
	    $title_group->addChild("row2",$row2);
		    $title_google_fonts = new BridgeQodeMetaField("Fontsimple","qode_slide-title-font-family","",esc_html__('Font Family', 'bridge'),esc_html__('This is some description', 'bridge'));
		    $row2->addChild("qode_slide-title-font-family",$title_google_fonts);
		    $title_fontstyle = new BridgeQodeMetaField("selectblanksimple","qode_slide-title-font-style","",esc_html__('Font Style', 'bridge'),esc_html__('This is some description', 'bridge'),bridge_qode_get_font_style_array());
		    $row2->addChild("qode_slide-title-font-style",$title_fontstyle);
		    $title_fontweight = new BridgeQodeMetaField("selectblanksimple","qode_slide-title-font-weight","",esc_html__('Font Weight', 'bridge'),esc_html__('This is some description', 'bridge'),bridge_qode_get_font_weight_array());
		    $row2->addChild("qode_slide-title-font-weight",$title_fontweight);
		    $title_texttransform = new BridgeQodeMetaField("selectblanksimple","qode_slide-title-text-transform","",esc_html__('Text Transform', 'bridge'),esc_html__('This is some description', 'bridge'),bridge_qode_get_text_transform_array());
		    $row2->addChild("qode_slide-title-text-transform",$title_texttransform);
	
	    $row3 = new BridgeQodeRow(true);
	    $title_group->addChild("row3",$row3);
		    $title_background_color = new BridgeQodeMetaField("colorsimple","qode_slide-title-background-color","",esc_html__('Background Color', 'bridge'),esc_html__('This is some description', 'bridge'));
		    $row3->addChild("qode_slide-title-background-color",$title_background_color);
		    $title_background_color_transparency = new BridgeQodeMetaField("textsimple","qode_slide-title-bg-color-transparency","",esc_html__('Background Color Transparency (0 = fully transparent, 1 = opaque)', 'bridge'),esc_html__('Value between 0 and 1', 'bridge'));
		    $row3->addChild("qode_slide-title-bg-color-transparency",$title_background_color_transparency);

	$qode_slide_title_separator = new BridgeQodeMetaField("yesno","qode_slide-separator-after-title","no",esc_html__('Separator After Title', 'bridge'),esc_html__('Do you want to have a separator after title?' ,'bridge'), array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_qode_slide_title_separator_container"));
	$qodeSlideTitle->addChild("qode_slide-separator-after-title",$qode_slide_title_separator);
	
	$qode_slide_title_separator_container = new BridgeQodeContainer("qode_slide_title_separator_container","qode_slide-separator-after-title","no");
	$qodeSlideTitle->addChild("qode_slide_title_separator_container",$qode_slide_title_separator_container);
	
		$qode_slide_title_separator_color = new BridgeQodeMetaField("color","qode_slide-separator-color","",esc_html__('Separator Color', 'bridge'),esc_html__('Choose a color for the separator', 'bridge'));
		$qode_slide_title_separator_container->addChild("qode_slide-separator-color",$qode_slide_title_separator_color);
		
		$qode_slide_title_separator_transparency = new BridgeQodeMetaField("text","qode_slide-separator-transparency","",esc_html__('Separator transparency', 'bridge'),esc_html__('Enter a value between 0 (fully transparent) and 1 (opaque)' ,'bridge'));
		$qode_slide_title_separator_container->addChild("qode_slide-separator-transparency",$qode_slide_title_separator_transparency);
		
		$qode_slide_title_separator_width = new BridgeQodeMetaField("text","qode_slide-separator-width","",esc_html__('Separator Width', 'bridge'),esc_html__('Enter value from 0% to 100%. Enter just number.', 'bridge'));
		$qode_slide_title_separator_container->addChild("qode_slide-separator-width",$qode_slide_title_separator_width);

		$qode_slide_title_separator_gradient = new BridgeQodeMetaField("yesno","qode_slide_separator_gradient","no",esc_html__('Separator Gradient' ,'bridge'),esc_html__('Enable gradient for Separator', 'bridge'));
		$qode_slide_title_separator_container->addChild("qode_slide_separator_gradient",$qode_slide_title_separator_gradient);

	$qode_slide_title_border = new BridgeQodeMetaField("yesno","qode_slide-border-around-title","no",esc_html__('Border Around Title', 'bridge'),esc_html__('Do you want to have a border around title?', 'bridge'), array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_qode_slide_title_border_container"));
	$qodeSlideTitle->addChild("qode_slide-border-around-title",$qode_slide_title_border);
	
	$qode_slide_title_border_container = new BridgeQodeContainer("qode_slide_title_border_container","qode_slide-border-around-title","no");
	$qodeSlideTitle->addChild("qode_slide_title_border_container",$qode_slide_title_border_container);
	
		$qode_slide_title_border_color = new BridgeQodeMetaField("color","qode_slide-border-around-title-color","",esc_html__('Border Color', 'bridge'),esc_html__('Choose a color for the border', 'bridge'));
		$qode_slide_title_border_container->addChild("qode_slide-border-around-title-color",$qode_slide_title_border_color);
		
		$qode_slide_title_border_transparency = new BridgeQodeMetaField("text","qode_slide-border-around-title-transparency","",esc_html__('Border Transparency', 'bridge'),esc_html__('Enter a value between 0 (fully transparent) and 1 (opaque)', 'bridge'));
		$qode_slide_title_border_container->addChild("qode_slide-border-around-title-transparency",$qode_slide_title_border_transparency);

//Qode Slide Subtitle

$qodeSlideSubtitle = new BridgeQodeMetaBox("slides", esc_html__('Qode Slide Subtitle', 'bridge'));
bridge_qode_framework()->qodeMetaBoxes->addMetaBox("slides_subtitle",$qodeSlideSubtitle);

	$qode_slide_subtitle = new BridgeQodeMetaField("text","qode_slide-subtitle","",esc_html__('Slide Subtitle', 'bridge'),esc_html__('Enter slide subtitle', 'bridge'));
	$qodeSlideSubtitle->addChild("qode_slide-subtitle",$qode_slide_subtitle);
	
	$qode_slide_subtitle_position = new BridgeQodeMetaField("select","qode_slide-subtitle-position","",esc_html__('Subtitle Position', 'bridge'),esc_html__('Choose a position for the subtitle', 'bridge'), array(
	    "above_title"	=> esc_html__('Above title', 'bridge'),
	    "bellow_title"	=> esc_html__('Below title', 'bridge')
	));
	$qodeSlideSubtitle->addChild("qode_slide-subtitle-position",$qode_slide_subtitle_position);
	
	$subtitle_group = new BridgeQodeGroup(esc_html__('Subtitle Style', 'bridge'),esc_html__('Define styles for subtitle', 'bridge'));
	$qodeSlideSubtitle->addChild("subtitle_group",$subtitle_group);
	    $row1 = new BridgeQodeRow();
	    $subtitle_group->addChild("row1",$row1);
		    $subtitle_color = new BridgeQodeMetaField("colorsimple","qode_slide-subtitle-color","",esc_html__('Font Color', 'bridge'),esc_html__('This is some description', 'bridge'));
		    $row1->addChild("qode_slide-subtitle-color",$subtitle_color);
		    $subtitle_fontsize = new BridgeQodeMetaField("textsimple","qode_slide-subtitle-font-size","",esc_html__('Font Size (px)', 'bridge'),esc_html__('This is some description', 'bridge'));
		    $row1->addChild("qode_slide-subtitle-font-size",$subtitle_fontsize);
		    $subtitle_lineheight = new BridgeQodeMetaField("textsimple","qode_slide-subtitle-line-height","",esc_html__('Line Height (px)', 'bridge'),esc_html__('This is some description', 'bridge'));
		    $row1->addChild("qode_slide-subtitle-line-height",$subtitle_lineheight);
		    $subtitle_letterspacing = new BridgeQodeMetaField("textsimple","qode_slide-subtitle-letter-spacing","",esc_html__('Letter Spacing (px)', 'bridge'),esc_html__('This is some description', 'bridge'));
		    $row1->addChild("qode_slide-subtitle-letter-spacing",$subtitle_letterspacing);
	
	    $row2 = new BridgeQodeRow(true);
	    $subtitle_group->addChild("row2",$row2);
		    $subtitle_google_fonts = new BridgeQodeMetaField("fontsimple","qode_slide-subtitle-font-family","",esc_html__('Font Family', 'bridge'),esc_html__('This is some description', 'bridge'));
		    $row2->addChild("qode_slide-subtitle-font-family",$subtitle_google_fonts);
		    $subtitle_fontstyle = new BridgeQodeMetaField("selectblanksimple","qode_slide-subtitle-font-style","",esc_html__('Font Style', 'bridge'),esc_html__('This is some description', 'bridge'),bridge_qode_get_font_style_array());
		    $row2->addChild("qode_slide-subtitle-font-style",$subtitle_fontstyle);
		    $subtitle_fontweight = new BridgeQodeMetaField("selectblanksimple","qode_slide-subtitle-font-weight","",esc_html__('Font Weight', 'bridge'),esc_html__('This is some description', 'bridge'),bridge_qode_get_font_weight_array());
		    $row2->addChild("qode_slide-subtitle-font-weight",$subtitle_fontweight);
			$subtitle_text_transform = new BridgeQodeMetaField("selectblanksimple","qode_slide-subtitle-text-transform","",esc_html__('Text Transform', 'bridge'),esc_html__('This is some description', 'bridge'),bridge_qode_get_text_transform_array());
		    $row2->addChild("qode_slide-subtitle-text-transform",$subtitle_text_transform);
	
	    $row3 = new BridgeQodeRow(true);
	    $subtitle_group->addChild("row3",$row3);
		    $subtitle_background_color = new BridgeQodeMetaField("colorsimple","qode_slide-subtitle-background-color","",esc_html__('Background Color', 'bridge'),esc_html__('This is some description', 'bridge'));
		    $row3->addChild("qode_slide-subtitle-background-color",$subtitle_background_color);
		    $subtitle_background_color_transparency = new BridgeQodeMetaField("textsimple","qode_slide-subtitle-bg-color-transparency","",esc_html__('Background Color Transparency (0 = fully transparent, 1 = opaque)', 'bridge'),esc_html__('Value between 0 and 1', 'bridge'));
		    $row3->addChild("qode_slide-subtitle-bg-color-transparency",$subtitle_background_color_transparency);

    $subtitle_margin_group = new BridgeQodeGroup(esc_html__('Margin Bottom (px)', 'bridge'),esc_html__('Enter value for subtitle bottom margin (default value is 14)', 'bridge'));
    $qodeSlideSubtitle->addChild("subtitle_margin_group",$subtitle_margin_group);
        $row1 = new BridgeQodeRow(true);
        $subtitle_margin_group->addChild("row1",$row1);
            $subtitle_margin_bottom = new BridgeQodeMetaField("textsimple","qode_slide_subtitle_margin_bottom","","",esc_html__('This is some description', 'bridge'));
            $row1->addChild("qode_slide_subtitle_margin_bottom",$subtitle_margin_bottom);

    $subtitle_padding_group = new BridgeQodeGroup(esc_html__('Padding', 'bridge'),esc_html__('Define padding for subtitle', 'bridge'));
    $qodeSlideSubtitle->addChild("subtitle_padding_group",$subtitle_padding_group);
        $row1 = new BridgeQodeRow(true);
        $subtitle_padding_group->addChild("row1",$row1);
            $subtitle_padding_top = new BridgeQodeMetaField("textsimple","qode_slide_subtitle_padding_top","",esc_html__('Top Padding (px)', 'bridge'),esc_html__('This is some description', 'bridge'));
            $row1->addChild("qode_slide_subtitle_padding_top",$subtitle_padding_top);
            $subtitle_padding_right = new BridgeQodeMetaField("textsimple","qode_slide_subtitle_padding_right","",esc_html__('Right Padding (px)', 'bridge'),esc_html__('This is some description', 'bridge'));
            $row1->addChild("qode_slide_subtitle_padding_right",$subtitle_padding_right);
            $subtitle_padding_bottom = new BridgeQodeMetaField("textsimple","qode_slide_subtitle_padding_bottom","",esc_html__('Bottom Padding (px)', 'bridge'),esc_html__('This is some description', 'bridge'));
            $row1->addChild("qode_slide_subtitle_padding_bottom",$subtitle_padding_bottom);
            $subtitle_padding_left = new BridgeQodeMetaField("textsimple","qode_slide_subtitle_padding_left","",esc_html__('Left Padding (px)', 'bridge'),esc_html__('This is some description', 'bridge'));
            $row1->addChild("qode_slide_subtitle_padding_left",$subtitle_padding_left);

//Qode Slide Text

$qodeSlideText = new BridgeQodeMetaBox("slides", "Qode Slide Text");
bridge_qode_framework()->qodeMetaBoxes->addMetaBox("slides_text",$qodeSlideText);

	$qode_slide_text = new BridgeQodeMetaField("textarea","qode_slide-text","","Slide Text","Enter slide text");
	$qodeSlideText->addChild("qode_slide-text",$qode_slide_text);

    $text_group = new BridgeQodeGroup("Text Style","Define styles for text");
    $qodeSlideText->addChild("title_group",$text_group);
    $row1 = new BridgeQodeRow();
    $text_group->addChild("row1",$row1);
        $text_color = new BridgeQodeMetaField("colorsimple","qode_slide-text-color","",esc_html__('Font Color', 'bridge'),esc_html__('This is some description', 'bridge'));
        $row1->addChild("qode_slide-text-color",$text_color);
        $text_fontsize = new BridgeQodeMetaField("textsimple","qode_slide-text-font-size","",esc_html__('Font Size (px)', 'bridge'),esc_html__('This is some description', 'bridge'));
        $row1->addChild("qode_slide-text-font-size",$text_fontsize);
        $text_lineheight = new BridgeQodeMetaField("textsimple","qode_slide-text-line-height","",esc_html__('Line Height (px)', 'bridge'),esc_html__('This is some description', 'bridge'));
        $row1->addChild("qode_slide-text-line-height",$text_lineheight);
		$text_text_transform = new BridgeQodeMetaField("selectblanksimple","qode_slide-text-text-transform","",esc_html__('Text Transform', 'bridge'),esc_html__('This is some description', 'bridge'),bridge_qode_get_text_transform_array());
		$row1->addChild("qode_slide-text-text-transform",$text_text_transform);

    $row2 = new BridgeQodeRow(true);
    $text_group->addChild("row2",$row2);
        $text_google_fonts = new BridgeQodeMetaField("Fontsimple","qode_slide-text-font-family","",esc_html__('Font Family', 'bridge'),esc_html__('This is some description', 'bridge'));
        $row2->addChild("qode_slide-text-font-family",$text_google_fonts);
        $text_fontstyle = new BridgeQodeMetaField("selectblanksimple","qode_slide-text-font-style","",esc_html__('Font Style', 'bridge'),esc_html__('This is some description', 'bridge'),bridge_qode_get_font_style_array());
        $row2->addChild("qode_slide-text-font-style",$text_fontstyle);
        $text_fontweight = new BridgeQodeMetaField("selectblanksimple","qode_slide-text-font-weight","",esc_html__('Font Weight', 'bridge'),esc_html__('This is some description', 'bridge'),bridge_qode_get_font_weight_array());
        $row2->addChild("qode_slide-text-font-weight",$text_fontweight);

    $text_without_separator_padding_group = new BridgeQodeGroup("Padding","Define padding for text");
    $qodeSlideText->addChild("text_without_separator_padding_group",$text_without_separator_padding_group);
        $row1 = new BridgeQodeRow(true);
        $text_without_separator_padding_group->addChild("row1",$row1);
            $text_padding_top = new BridgeQodeMetaField("textsimple","qode_slide_text_padding_top","",esc_html__('Top Padding (px)', 'bridge'),esc_html__('This is some description', 'bridge'));
            $row1->addChild("qode_slide_text_padding_top",$text_padding_top);
            $text_padding_right = new BridgeQodeMetaField("textsimple","qode_slide_text_padding_right","",esc_html__('Right Padding (px)', 'bridge'),esc_html__('This is some description', 'bridge'));
            $row1->addChild("qode_slide_text_padding_right",$text_padding_right);
            $text_padding_bottom = new BridgeQodeMetaField("textsimple","qode_slide_text_padding_bottom","",esc_html__('Bottom Padding (px)', 'bridge'),esc_html__('This is some description', 'bridge'));
            $row1->addChild("qode_slide_text_padding_bottom",$text_padding_bottom);
            $text_padding_left = new BridgeQodeMetaField("textsimple","qode_slide_text_padding_left","",esc_html__('Left Padding (px)', 'bridge'),esc_html__('This is some description', 'bridge'));
            $row1->addChild("qode_slide_text_padding_left",$text_padding_left);

//Qode Slide Graphic

$qodeSlideGraphic = new BridgeQodeMetaBox("slides", esc_html__('Qode Slide Graphic', 'bridge'));
bridge_qode_framework()->qodeMetaBoxes->addMetaBox("slides_graphic",$qodeSlideGraphic);

	$qode_slide_graphic = new BridgeQodeMetaField("image","qode_slide-thumbnail","",esc_html__('Slide Graphic', 'bridge'),esc_html__('Choose slide graphic', 'bridge'));
	$qodeSlideGraphic->addChild("qode_slide-thumbnail",$qode_slide_graphic);
	
	$qode_slide_graphic_link = new BridgeQodeMetaField("text","qode_slide-thumbnail-link","",esc_html__('Link', 'bridge'),esc_html__('Past link for slide graphic if you want to link it', 'bridge'));
	$qodeSlideGraphic->addChild("qode_slide-thumbnail-link",$qode_slide_graphic_link);

$qodeSlideSvg = new BridgeQodeMetaBox('slides', esc_html__('Qode Slide SVG', 'bridge'));
bridge_qode_framework()->qodeMetaBoxes->addMetaBox('svg', $qodeSlideSvg);

	$qode_slide_svg_source = new BridgeQodeMetaField('textarea', 'qode_slide_svg_source', '', esc_html__('SVG source code', 'bridge'), esc_html__('Paste SVG source code. (Note: all CSS styling for SVG you may put in Qode Options > General > Custom SVG CSS)', 'bridge'));
	$qodeSlideSvg->addChild('qode_slide_svg_source', $qode_slide_svg_source);

	$qode_slide_svg_link = new BridgeQodeMetaField('text', 'qode_slide_svg_link', '', esc_html__('SVG link', 'bridge'), esc_html__('Enter URL to link SVG', 'bridge'));
	$qodeSlideSvg->addChild('qode_slide_svg_link', $qode_slide_svg_link);

	$qode_slide_svg_drawing = new BridgeQodeMetaField("yesno", "qode_slide_svg_drawing", "no", esc_html__('SVG Drawing Animation','bridge'), esc_html__('Enable SVG drawing animation', 'bridge'), array(), array(
		"dependence" => "true",
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qode_slide_svg_drawing_container"
	));
	$qodeSlideSvg->addChild("qode_slide_svg_drawing", $qode_slide_svg_drawing);

	$qode_slide_svg_drawing_container = new BridgeQodeContainer("qode_slide_svg_drawing_container", "qode_slide_svg_drawing", "no");
	$qodeSlideSvg->addChild("qode_slide_svg_drawing_container", $qode_slide_svg_drawing_container);

	$qode_slide_svg_frame_rate = new BridgeQodeMetaField("text", "qode_slide_svg_frame_rate", "", esc_html__('SVG Frame Rate', 'bridge'), esc_html__('FPS (frames per second) value, defines speed of drawing', 'bridge'));
	$qode_slide_svg_drawing_container->addChild("qode_slide_svg_frame_rate", $qode_slide_svg_frame_rate);

//Qode Slide Buttons

$qodeSlideButtons = new BridgeQodeMetaBox("slides", esc_html__('Qode Slide Buttons', 'bridge'));
bridge_qode_framework()->qodeMetaBoxes->addMetaBox("slides_buttons",$qodeSlideButtons);

	$button1_group = new BridgeQodeGroup(esc_html__('Button 1', 'bridge'),"");
	$qodeSlideButtons->addChild("button1_group",$button1_group);
	    $row1 = new BridgeQodeRow();
	    $button1_group->addChild("row1",$row1);
		    $button1_label = new BridgeQodeMetaField("textsimple","qode_slide-button-label","",esc_html__('Label', 'bridge'),esc_html__('This is some description', 'bridge'));
		    $row1->addChild("qode_slide-button-label",$button1_label);
		    $button1_link = new BridgeQodeMetaField("textsimple","qode_slide-button-link","",esc_html__('Link', 'bridge'),esc_html__('This is some description', 'bridge'));
		    $row1->addChild("qode_slide-button-link",$button1_link);

			$button1_type = new BridgeQodeMetaField("select","qode_slide_button_type","",esc_html__('Type', 'bridge'),esc_html__('This is some description', 'bridge'), array(
				"qode-button" 		=> esc_html__('Qode Button','bridge'),
				"qode-button-v2"	=> esc_html__('Qode Button V2', 'bridge'),
			),
			array("dependence" => true,
				"hide" => array(
					"qode-button"		=> "#qodef_qode_slide_button_v2_hover_container",
					"qode-button-v2"	=> "#qodef_qode_slide_button_hover_container"
				),
				"show" => array(
					"qode-button"		=> "#qodef_qode_slide_button_hover_container",
					"qode-button-v2"	=> "#qodef_qode_slide_button_v2_hover_container"
				))
			);
			$qodeSlideButtons->addChild("qode_slide_button_type",$button1_type);

			$qode_slide_button_hover_container = new BridgeQodeContainer("qode_slide_button_hover_container","qode_slide_button_type","qode-button-v2");
			$qodeSlideButtons->addChild("qode_slide_button_hover_container",$qode_slide_button_hover_container);

			$qode_slide_button_v2_hover_container = new BridgeQodeContainer("qode_slide_button_v2_hover_container","qode_slide_button_type","qode-button");
			$qodeSlideButtons->addChild("qode_slide_button_v2_hover_container",$qode_slide_button_v2_hover_container);

		    $button1_hover_type = new BridgeQodeMetaField("select","qode_slide-button-hover-type","default",esc_html__('Hover Type', 'bridge'),esc_html__('Choose animation on hover', 'bridge'), array(
			    "default" => esc_html__('Default', 'bridge'),
			    "enlarge" => esc_html__('Enlarge', 'bridge'),
			));
			$qode_slide_button_hover_container->addChild("qode_slide-button-hover-type",$button1_hover_type);


			$button_v2_icon_gradient = new BridgeQodeMetaField("yesno","qode_slide_button_v2_icon_gradient","no",esc_html__('Button V2 Icon Gradient', 'bridge'),esc_html__('Please enable gradient for icon. This is only for Button V2 type', 'bridge'));
			$qode_slide_button_v2_hover_container->addChild("qode_slide_button_v2_icon_gradient",$button_v2_icon_gradient);


//init icon pack hide and show array. It will be populated dinamically from collections array
		$button1_icon_pack_hide_array = array();
		$button1_icon_pack_show_array = array();

		//do we have some collection added in collections array?
		if(is_array(bridge_qode_icon_collections()->iconCollections) && count(bridge_qode_icon_collections()->iconCollections)) {
			//get collections params array. It will contain values of 'param' property for each collection
			$button1_icon_collections_params = bridge_qode_icon_collections()->getIconCollectionsParams();

			//foreach collection generate hide and show array
			foreach (bridge_qode_icon_collections()->iconCollections as $dep_collection_key => $dep_collection_object) {
				$button1_icon_pack_hide_array[$dep_collection_key] = '';
				$button1_icon_pack_hide_array["no_icon"] = "";

				//button1_icon_size is input that is always shown when some icon pack is activated and hidden if 'no_icon' is selected
				$button1_icon_pack_hide_array["no_icon"] .= "#qodef_slider_button1_icon_size,";

				//we need to include only current collection in show string as it is the only one that needs to show
				$button1_icon_pack_show_array[$dep_collection_key] = '#qodef_slider_button1_icon_size, #qodef_button1_icon_'.$dep_collection_object->param.'_container';

				//for all collections param generate hide string
				foreach ($button1_icon_collections_params as $button1_icon_collections_param) {
					//we don't need to include current one, because it needs to be shown, not hidden
					if($button1_icon_collections_param !== $dep_collection_object->param) {
						$button1_icon_pack_hide_array[$dep_collection_key].= '#qodef_button1_icon_'.$button1_icon_collections_param.'_container,';
					}

					$button1_icon_pack_hide_array["no_icon"] .= '#qodef_button1_icon_'.$button1_icon_collections_param.'_container,';
				}

				//remove remaining ',' character
				$button1_icon_pack_hide_array[$dep_collection_key] = rtrim($button1_icon_pack_hide_array[$dep_collection_key], ',');
				$button1_icon_pack_hide_array["no_icon"] = rtrim($button1_icon_pack_hide_array["no_icon"], ',');
			}

		}

		$button1_icon_pack = new BridgeQodeMetaField(
			"select",
			"qode_slide_button1_icon_pack",
			"no_icon",
			esc_html__('Button 1 Icon Pack', 'bridge'),
			esc_html__('Choose icon pack for first button', 'bridge'),
			bridge_qode_icon_collections()->getIconCollectionsEmpty("no_icon"),
			array(
				"dependence" => true,
				"hide" => $button1_icon_pack_hide_array,
				"show" => $button1_icon_pack_show_array
			));

		$qodeSlideButtons->addChild("button1_icon_pack", $button1_icon_pack);

		if(is_array(bridge_qode_icon_collections()->iconCollections) && count(bridge_qode_icon_collections()->iconCollections)) {
			//foreach icon collection we need to generate separate container that will have dependency set
			//it will have one field inside with icons dropdown
			foreach (bridge_qode_icon_collections()->iconCollections as $collection_key => $collection_object) {
				$icons_array = $collection_object->getIconsArray();

                if( $collection_key == 'kiko' ){
                    $icons_array = array_flip( $icons_array );
                }

				//get icon collection keys (keys from collections array, e.g 'font_awesome', 'font_elegant' etc.)
				$icon_collections_keys = bridge_qode_icon_collections()->getIconCollectionsKeys();

				//unset current one, because it doesn't have to be included in dependency that hides icon container
				unset($icon_collections_keys[array_search($collection_key, $icon_collections_keys)]);

				$button1_icon_hide_values = $icon_collections_keys;
				$button1_icon_hide_values[] = "no_icon";
				$button1_icon_container = new BridgeQodeContainer("button1_icon_".$collection_object->param."_container", "qode_slide_button1_icon_pack", "", $button1_icon_hide_values);
				$button1_icon = new BridgeQodeMetaField("select", "qode_slide_button1_icon_".$collection_object->param, "", esc_html__('Button 1 Icon', 'bridge'),esc_html__('Choose First Button Icon', 'bridge'), $icons_array, array("col_width" => 3));
				$button1_icon_container->addChild("button1_icon_".$collection_object->param, $button1_icon);

				$qodeSlideButtons->addChild("button1_icon_".$collection_object->param."_container", $button1_icon_container);
			}

		}

	$button2_group = new BridgeQodeGroup(esc_html__('Button 2', 'bridge'),"");
	$qodeSlideButtons->addChild("button2_group",$button2_group);
	    $row1 = new BridgeQodeRow();
	    $button2_group->addChild("row1",$row1);
		    $button2_label = new BridgeQodeMetaField("textsimple","qode_slide-button-label2","",esc_html__('Label', 'bridge'),esc_html__('This is some description', 'bridge'));
		    $row1->addChild("qode_slide-button-label",$button2_label);
		    $button2_link = new BridgeQodeMetaField("textsimple","qode_slide-button-link2","",esc_html__('Link', 'bridge'),esc_html__('This is some description', 'bridge'));
		    $row1->addChild("qode_slide-button-link",$button2_link);


			$button_type2 = new BridgeQodeMetaField("select","qode_slide_button_type2","",esc_html__('Button 2 Type', 'bridge'),esc_html__('This is some description', 'bridge'), array(
				"qode-button" 		=> esc_html__('Qode Button', 'bridge'),
				"qode-button-v2"	=> esc_html__('Qode Button V2', 'bridge'),
			),
				array("dependence" => true,
					"hide" => array(
						"qode-button"		=> "#qodef_qode_slide_button_v2_hover_container2",
						"qode-button-v2"	=> "#qodef_qode_slide_button_hover_container2"
					),
					"show" => array(
						"qode-button"		=> "#qodef_qode_slide_button_hover_container2",
						"qode-button-v2"	=> "#qodef_qode_slide_button_v2_hover_container2"
					))
			);
			$qodeSlideButtons->addChild("qode_slide_button_type2",$button_type2);

			$qode_slide_button_hover_container2 = new BridgeQodeContainer("qode_slide_button_hover_container2","qode_slide_button_type2","qode-button-v2");
			$qodeSlideButtons->addChild("qode_slide_button_hover_container2",$qode_slide_button_hover_container2);

			$qode_slide_button_v2_hover_container2 = new BridgeQodeContainer("qode_slide_button_v2_hover_container2","qode_slide_button_type2","qode-button");
			$qodeSlideButtons->addChild("qode_slide_button_v2_hover_container2",$qode_slide_button_v2_hover_container2);


		    $button2_hover_type = new BridgeQodeMetaField("select","qode_slide-button-hover-type2","default",esc_html__('Button 2 Hover Type', 'bridge'),esc_html__('Choose animation on hover', 'bridge'), array(
			    "default" => esc_html__('Default', 'bridge'),
			    "enlarge" => esc_html__('Enlarge', 'bridge'),
			));
			$qode_slide_button_hover_container2->addChild("qode_slide-button-hover-type2",$button2_hover_type);


			$button2_v2_icon_gradient = new BridgeQodeMetaField("yesno","qode_slide_button2_v2_icon_gradient","no",esc_html__('Button 2 V2 Icon Gradient', 'bridge'),esc_html__('Please enable gradient for icon. This is only for Button V2 type', 'bridge'));
			$qode_slide_button_v2_hover_container2->addChild("qode_slide_button2_v2_icon_gradient",$button2_v2_icon_gradient);

	//init icon pack hide and show array. It will be populated dinamically from collections array
	$button2_icon_pack_hide_array = array();
	$button2_icon_pack_show_array = array();

	//do we have some collection added in collections array?
	if(is_array(bridge_qode_icon_collections()->iconCollections) && count(bridge_qode_icon_collections()->iconCollections)) {
		//get collections params array. It will contain values of 'param' property for each collection
		$button2_icon_collections_params = bridge_qode_icon_collections()->getIconCollectionsParams();

		//foreach collection generate hide and show array
		foreach (bridge_qode_icon_collections()->iconCollections as $dep_collection_key => $dep_collection_object) {
			$button2_icon_pack_hide_array[$dep_collection_key] = '';
			$button2_icon_pack_hide_array["no_icon"] = "";

			//button2_icon_size is input that is always shown when some icon pack is activated and hidden if 'no_icon' is selected
			$button2_icon_pack_hide_array["no_icon"] .= "#qodef_slider_button2_icon_size,";

			//we need to include only current collection in show string as it is the only one that needs to show
			$button2_icon_pack_show_array[$dep_collection_key] = '#qodef_slider_button2_icon_size,#qodef_button2_icon_'.$dep_collection_object->param.'_container';

			//for all collections param generate hide string
			foreach ($button2_icon_collections_params as $button2_icon_collections_param) {
				//we don't need to include current one, because it needs to be shown, not hidden
				if($button2_icon_collections_param !== $dep_collection_object->param) {
					$button2_icon_pack_hide_array[$dep_collection_key].= '#qodef_button2_icon_'.$button2_icon_collections_param.'_container,';
				}

				$button2_icon_pack_hide_array["no_icon"] .= '#qodef_button2_icon_'.$button2_icon_collections_param.'_container,';
			}

			//remove remaining ',' character
			$button2_icon_pack_hide_array[$dep_collection_key] = rtrim($button2_icon_pack_hide_array[$dep_collection_key], ',');
			$button2_icon_pack_hide_array["no_icon"] = rtrim($button2_icon_pack_hide_array["no_icon"], ',');
		}

	}

	$button2_icon_pack = new BridgeQodeMetaField(
		"select",
		"qode_slide_button2_icon_pack",
		"no_icon",
		esc_html__('Button 2 Icon Pack', 'bridge'),
		esc_html__('Choose icon pack for first button', 'bridge'),
		bridge_qode_icon_collections()->getIconCollectionsEmpty("no_icon"),
		array(
			"dependence" => true,
			"hide" => $button2_icon_pack_hide_array,
			"show" => $button2_icon_pack_show_array
		));

	$qodeSlideButtons->addChild("button2_icon_pack", $button2_icon_pack);

	if(is_array(bridge_qode_icon_collections()->iconCollections) && count(bridge_qode_icon_collections()->iconCollections)) {
		//foreach icon collection we need to generate separate container that will have dependency set
		//it will have one field inside with icons dropdown
		foreach (bridge_qode_icon_collections()->iconCollections as $collection_key => $collection_object) {
			$icons_array = $collection_object->getIconsArray();

            if( $collection_key == 'kiko' ){
                $icons_array = array_flip( $icons_array );
            }

			//get icon collection keys (keys from collections array, e.g 'font_awesome', 'font_elegant' etc.)
			$icon_collections_keys = bridge_qode_icon_collections()->getIconCollectionsKeys();

			//unset current one, because it doesn't have to be included in dependency that hides icon container
			unset($icon_collections_keys[array_search($collection_key, $icon_collections_keys)]);

			$button2_icon_hide_values = $icon_collections_keys;
			$button2_icon_hide_values[] = "no_icon";
			$button2_icon_container = new BridgeQodeContainer("button2_icon_".$collection_object->param."_container", "qode_slide_button2_icon_pack", "", $button2_icon_hide_values);
			$button2_icon = new BridgeQodeMetaField("select", "qode_slide_button2_icon_".$collection_object->param, "", esc_html__('Button 2 Icon', 'bridge'),esc_html__('Choose First Button Icon', 'bridge'), $icons_array, array("col_width" => 3));
			$button2_icon_container->addChild("button2_icon_".$collection_object->param, $button2_icon);

			$qodeSlideButtons->addChild("button2_icon_".$collection_object->param."_container", $button2_icon_container);
		}

	}

//Qode Slide Content Positioning

$qodeSlideContentPositioning = new BridgeQodeMetaBox("slides", "Qode Slide Content Positioning");
bridge_qode_framework()->qodeMetaBoxes->addMetaBox("slides_content_positioning",$qodeSlideContentPositioning);

	$qode_slide_graphic_alignment = new BridgeQodeMetaField("selectblank","qode_slide-graphic-alignment","",esc_html__('Graphic Alignment', 'bridge'),esc_html__('Choose an alignment for the slide graphic', 'bridge'), array(
	    "left"		=> esc_html__('Left', 'bridge'),
	    "center"	=> esc_html__('Center', 'bridge'),
	    "right"		=> esc_html__('Right', 'bridge')
	));
	$qodeSlideContentPositioning->addChild("qode_slide-graphic-alignment",$qode_slide_graphic_alignment);
	
	$qode_slide_text_alignment = new BridgeQodeMetaField("selectblank","qode_slide-content-alignment","",esc_html__('Text Alignment', 'bridge'),esc_html__('Choose an alignment for the slide text', 'bridge'), array(
		"left"		=> esc_html__('Left', 'bridge'),
		"center"	=> esc_html__('Center', 'bridge'),
		"right"		=> esc_html__('Right', 'bridge')
	));
	$qodeSlideContentPositioning->addChild("qode_slide-content-alignment",$qode_slide_text_alignment);

	$qode_slide_separate_text_graphic = new BridgeQodeMetaField("selectblank","qode_slide-separate-text-graphic","no",esc_html__('Separate Graphic and Text Positioning', 'bridge'),esc_html__('Do you want to separately position graphic and text?', 'bridge'), array(
		'no'	=> esc_html__( 'No', 'bridge' ),
		'yes'	=> esc_html__( 'Yes', 'bridge' )
	), array("dependence" => true,
	         "hide" => array(
	            "" => "#qodef_qode_slide_graphic_positioning_container",
	            "no" => "#qodef_qode_slide_graphic_positioning_container"
	         ),
	         "show" => array(
	             "yes" => "#qodef_qode_slide_graphic_positioning_container"
	         )));
	$qodeSlideContentPositioning->addChild("qode_slide-separate-text-graphic",$qode_slide_separate_text_graphic);

    $qode_slide_content_vertical_middle = new BridgeQodeMetaField("yesno","qode_slide-content-vertical-middle","no",esc_html__('Vertically Align Content to Middle','bridge'),"", array(), array("dependence" => true, "dependence_hide_on_yes" => "#qodef_qode_slide-content-vertical-middle-container", "dependence_show_on_yes" => "#qodef_qode_slide-content-vertical-middle-type-container"));
    $qodeSlideContentPositioning->addChild("qode_slide-content-vertical-middle",$qode_slide_content_vertical_middle);

    $qode_slide_content_vertical_middle_type_container = new BridgeQodeContainer("qode_slide-content-vertical-middle-type-container","qode_slide-content-vertical-middle","no");
    $qodeSlideContentPositioning->addChild("qode_slide-content-vertical-middle-type-container",$qode_slide_content_vertical_middle_type_container);

        $qode_slide_content_vertical_middle_type = new BridgeQodeMetaField("selectblank","qode_slide-content-vertical-middle-type","",esc_html__('Align Content Vertically Relative to the Height Measured From', 'bridge'),"", array(
            "bottom_of_header"	=> esc_html__('Bottom of Header','bridge'),
            "window_top"		=> esc_html__('Window Top', 'bridge')
        ));
        $qode_slide_content_vertical_middle_type_container->addChild("qode_slide-content-vertical-middle-type",$qode_slide_content_vertical_middle_type);

        $qode_slide_vertical_content_full_width = new BridgeQodeMetaField("yesno","qode_slide_vertical_content_full_width","no",esc_html__('Content Holder Full Width','bridge'),esc_html__('Do you want to set slide content holder to full width?','bridge'));
        $qode_slide_content_vertical_middle_type_container->addChild("qode_slide_vertical_content_full_width",$qode_slide_vertical_content_full_width);

        $qode_slide_vertical_content_width = new BridgeQodeMetaField("text","qode_slide_vertical_content_width","",esc_html__('Content Width','bridge'),esc_html__('Enter Width for Content Area (%)', 'bridge'),array(), array("col_width" => 3));
        $qode_slide_content_vertical_middle_type_container->addChild("qode_slide_vertical_content_width",$qode_slide_vertical_content_width);

        $content_vertical_positioning_group = new BridgeQodeGroup(esc_html__('Space Around Content in Slide','bridge'),esc_html__('Enter values for margins around slide content', 'bridge'));
        $qode_slide_content_vertical_middle_type_container->addChild("content_vertical_positioning_group",$content_vertical_positioning_group);
        $row1 = new BridgeQodeRow(true);
        $content_vertical_positioning_group->addChild("row1",$row1);
        $qode_slide_vertical_content_left = new BridgeQodeMetaField("textsimple","qode_slide_vertical_content_left","",esc_html__('From Left (%)','bridge'),esc_html__('This is some description', 'bridge'));
        $row1->addChild("qode_slide_vertical_content_left",$qode_slide_vertical_content_left);
        $qode_slide_vertical_content_right = new BridgeQodeMetaField("textsimple","qode_slide_vertical_content_right","",esc_html__('From Right (%)', 'bridge'),esc_html__('This is some description', 'bridge'));
        $row1->addChild("qode_slide_vertical_content_right",$qode_slide_vertical_content_right);

    $qode_slide_content_vertical_middle_container = new BridgeQodeContainer("qode_slide-content-vertical-middle-container","qode_slide-content-vertical-middle","yes");
    $qodeSlideContentPositioning->addChild("qode_slide-content-vertical-middle-container",$qode_slide_content_vertical_middle_container);

        $content_positioning_group = new BridgeQodeGroup(esc_html__('Content Positioning', 'bridge'),esc_html__('Positioning for slide title, subtitle, text and buttons (and graphic if positioning is not separated)','bridge'));
        $qode_slide_content_vertical_middle_container->addChild("content_positioning_group",$content_positioning_group);
            $row1 = new BridgeQodeRow();
            $content_positioning_group->addChild("row1",$row1);
                $qode_slide_content_width = new BridgeQodeMetaField("textsimple","qode_slide-content-width","",esc_html__('Width (%)','bridge'),esc_html__('This is some description', 'bridge'));
                $row1->addChild("qode_slide-content-width",$qode_slide_content_width);

            $row2 = new BridgeQodeRow(true);
            $content_positioning_group->addChild("row2",$row2);
                $qode_slide_content_top = new BridgeQodeMetaField("textsimple","qode_slide-content-top","",esc_html__('Content from top (%)', 'bridge'),esc_html__('This is some description', 'bridge'));
                $row2->addChild("qode_slide-content-top",$qode_slide_content_top);
                $qode_slide_content_left = new BridgeQodeMetaField("textsimple","qode_slide-content-left","",esc_html__('Content from left (%)', 'bridge'),esc_html__('This is some description', 'bridge'));
                $row2->addChild("qode_slide-content-left",$qode_slide_content_left);

            $row3 = new BridgeQodeRow(true);
            $content_positioning_group->addChild("row3",$row3);
                $qode_slide_content_bottom = new BridgeQodeMetaField("textsimple","qode_slide-content-bottom","",esc_html__('Content from bottom (%)', 'bridge'),esc_html__('This is some description', 'bridge'));
                $row3->addChild("qode_slide-content-bottom",$qode_slide_content_bottom);
                $qode_slide_content_right = new BridgeQodeMetaField("textsimple","qode_slide-content-right","",esc_html__('Content from right (%)','bridge'),esc_html__('This is some description', 'bridge'));
                $row3->addChild("qode_slide-content-right",$qode_slide_content_right);

        $qode_slide_graphic_positioning_container = new BridgeQodeContainer("qode_slide_graphic_positioning_container","qode_slide-separate-text-graphic","no");
        $qode_slide_content_vertical_middle_container->addChild("qode_slide_graphic_positioning_container",$qode_slide_graphic_positioning_container);

        $graphic_positioning_group = new BridgeQodeGroup(esc_html__('Graphic Positioning', 'bridge'),esc_html__('Positioning for slide graphic', 'bridge'));
        $qode_slide_graphic_positioning_container->addChild("graphic_positioning_group",$graphic_positioning_group);
            $row1 = new BridgeQodeRow();
            $graphic_positioning_group->addChild("row1",$row1);
                $qode_slide_content_width = new BridgeQodeMetaField("textsimple","qode_slide-graphic-width","",esc_html__('Width (%)', 'bridge'),esc_html__('This is some description', 'bridge'));
                $row1->addChild("qode_slide-graphic-width",$qode_slide_content_width);

            $row2 = new BridgeQodeRow(true);
            $graphic_positioning_group->addChild("row2",$row2);
                $qode_slide_content_top = new BridgeQodeMetaField("textsimple","qode_slide-graphic-top","",esc_html__('Content from top (%)', 'bridge'),esc_html__('This is some description', 'bridge'));
                $row2->addChild("qode_slide-graphic-top",$qode_slide_content_top);
                $qode_slide_content_left = new BridgeQodeMetaField("textsimple","qode_slide-graphic-left","",esc_html__('Content from left (%)', 'bridge'),esc_html__('This is some description', 'bridge'));
                $row2->addChild("qode_slide-graphic-left",$qode_slide_content_left);

            $row3 = new BridgeQodeRow(true);
            $graphic_positioning_group->addChild("row3",$row3);
                $qode_slide_content_bottom = new BridgeQodeMetaField("textsimple","qode_slide-graphic-bottom","",esc_html__('Content from bottom (%)','bridge'),esc_html__('This is some description', 'bridge'));
                $row3->addChild("qode_slide-graphic-bottom",$qode_slide_content_bottom);
                $qode_slide_content_right = new BridgeQodeMetaField("textsimple","qode_slide-graphic-right","",esc_html__('Content from right (%)', 'bridge'),esc_html__('This is some description', 'bridge'));
                $row3->addChild("qode_slide-graphic-right",$qode_slide_content_right);

//Qode Slide Scroll Animations

$qodeSlideScrollAnimations = new BridgeQodeMetaBox("slides", esc_html__('Qode Slide Scroll Animations', 'bridge'));
bridge_qode_framework()->qodeMetaBoxes->addMetaBox("slides_scroll_animations",$qodeSlideScrollAnimations);

	$qode_slide_general_animation = new BridgeQodeMetaField("yesno", "qode_slide_general_animation", "yes", esc_html__('Animate Whole Slide Content Group at Once on Scroll','bridge'), esc_html__('All parts of slide content will animate on scroll as group', 'bridge'), array(), array(
		"dependence" => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qode_slide_general_animation_container"
	));
	$qodeSlideScrollAnimations->addChild('qode_slide_general_animation', $qode_slide_general_animation);

	$qode_slide_general_animation_container = new BridgeQodeContainer('qode_slide_general_animation_container', 'qode_slide_general_animation', 'no');
	$qodeSlideScrollAnimations->addChild('qode_slide_general_animation_container', $qode_slide_general_animation_container);

		$qode_slide_content_animation_data_start = new BridgeQodeGroup(esc_html__('Scrolling Animation Start Point', 'bridge'), esc_html__('These are starting properties for the scrolling animation of the slide content group','bridge'));
		$qode_slide_general_animation_container->addChild("qode_slide_content_animation_data_start", $qode_slide_content_animation_data_start);

			$row1 = new BridgeQodeRow();
			$qode_slide_content_animation_data_start->addChild("row1", $row1);

				$qode_slide_data_start = new BridgeQodeMetaField("textsimple", "qode_slide_data_start", "",esc_html__('Scrollbar Top Distance (px)','bridge'), "", array(), array("col_width" => 1));
				$row1->addChild("qode_slide_data_start", $qode_slide_data_start);

				$qode_slide_data_start_custom_style = new BridgeQodeMetaField("textareasimple", "qode_slide_data_start_custom_style", "", esc_html__('Enter CSS declarations separated by semicolons', 'bridge'), "", array(), array("col_width" => 4));
				$row1->addChild("qode_slide_data_start_custom_style", $qode_slide_data_start_custom_style);

		$qode_slide_content_animation_data_end = new BridgeQodeGroup(esc_html__('Scrolling Animation End Point', 'bridge'), esc_html__('These are ending properties for the scrolling animation of the slide content group', 'bridge'));
		$qode_slide_general_animation_container->addChild("qode_slide_content_animation_data_end", $qode_slide_content_animation_data_end);

			$row2 = new BridgeQodeRow();
			$qode_slide_content_animation_data_end->addChild('row2', $row2);

				$qode_slide_data_end = new BridgeQodeMetaField("textsimple", "qode_slide_data_end", "", esc_html__('Scrollbar Top Distance (px)', 'bridge'), "");
				$row2->addChild("qode_slide_data_end", $qode_slide_data_end);

				$qode_slide_data_end_custom_style = new BridgeQodeMetaField("textareasimple", "qode_slide_data_end_custom_style", "", esc_html__('Enter CSS declarations separated by semicolons', 'bridge'), "");
				$row2->addChild("qode_slide_data_end_custom_style", $qode_slide_data_end_custom_style);

//Title scroll animation
	$qode_slide_title_animation_scroll = new BridgeQodeMetaField("yesno", "qode_slide_title_animation_scroll", "no", esc_html__('Animate Title on Scroll', 'bridge'), esc_html__('Enable title text to animate separately', 'bridge'), array(), array(
		"dependence" => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qode_slide_title_animation_scroll_container"
	));
	$qodeSlideScrollAnimations->addChild('qode_slide_title_animation_scroll', $qode_slide_title_animation_scroll);

	$qode_slide_title_animation_scroll_container = new BridgeQodeContainer('qode_slide_title_animation_scroll_container', 'qode_slide_title_animation_scroll', 'no');
	$qodeSlideScrollAnimations->addChild('qode_slide_title_animation_scroll_container', $qode_slide_title_animation_scroll_container);

		$qode_slide_title_animation_data_start = new BridgeQodeGroup(esc_html__('Scrolling Animation Start Point', 'bridge'), esc_html__('These are properties for the first keyframe in scrolling animation', 'bridge'));
		$qode_slide_title_animation_scroll_container->addChild("qode_slide_title_animation_data_start", $qode_slide_title_animation_data_start);

			$row1 = new BridgeQodeRow();
			$qode_slide_title_animation_data_start->addChild("row1", $row1);

				$qode_slide_data_title_start = new BridgeQodeMetaField("textsimple", "qode_slide_data_title_start", "", esc_html__('Scrollbar Top Distance (px)', 'bridge'), "");
				$row1->addChild("qode_slide_data_title_start", $qode_slide_data_title_start);

				$qode_slide_data_title_start_custom_style = new BridgeQodeMetaField("textareasimple", "qode_slide_data_title_start_custom_style", "", esc_html__('Enter CSS declarations separated by semicolons', 'bridge'), "");
				$row1->addChild("qode_slide_data_title_start_custom_style", $qode_slide_data_title_start_custom_style);

		$qode_slide_title_animation_data_end = new BridgeQodeGroup(esc_html__('Scrolling Animation End Point', 'bridge'), esc_html__('These are properties for the last keyframe in scrolling animation', 'bridge'));
		$qode_slide_title_animation_scroll_container->addChild("qode_slide_title_animation_data_end", $qode_slide_title_animation_data_end);

			$row2 = new BridgeQodeRow();
			$qode_slide_title_animation_data_end->addChild("row2", $row2);

				$qode_slide_data_title_end = new BridgeQodeMetaField("textsimple", "qode_slide_data_title_end", "", esc_html__('Scrollbar Top Distance (px)', 'bridge'), "");
				$row2->addChild("qode_slide_data_title_end", $qode_slide_data_title_end);

				$qode_slide_data_title_end_custom_style = new BridgeQodeMetaField("textareasimple", "qode_slide_data_title_end_custom_style", "", esc_html__('Enter CSS declarations separated by semicolons', 'bridge'), "");
				$row2->addChild("qode_slide_data_title_end_custom_style", $qode_slide_data_title_end_custom_style);


//Subtitle scroll animation
	$qode_slide_subtitle_animation_scroll = new BridgeQodeMetaField("yesno", "qode_slide_subtitle_animation_scroll", "no", esc_html__('Animate Subtitle on Scroll', 'bridge'), esc_html__('Enable subtitle text to animate separately', 'bridge'), array(), array(
		"dependence" => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qode_slide_subtitle_animation_scroll_container"
	));
	$qodeSlideScrollAnimations->addChild('qode_slide_subtitle_animation_scroll', $qode_slide_subtitle_animation_scroll);

	$qode_slide_subtitle_animation_scroll_container = new BridgeQodeContainer('qode_slide_subtitle_animation_scroll_container', 'qode_slide_subtitle_animation_scroll', 'no');
	$qodeSlideScrollAnimations->addChild('qode_slide_subtitle_animation_scroll_container', $qode_slide_subtitle_animation_scroll_container);

		$qode_slide_subtitle_animation_data_start = new BridgeQodeGroup(esc_html__('Scrolling Animation Start Point', 'bridge'), esc_html__('These are properties for the first keyframe in scrolling animation', 'bridge'));
		$qode_slide_subtitle_animation_scroll_container->addChild("qode_slide_subtitle_animation_data_start", $qode_slide_subtitle_animation_data_start);

			$row1 = new BridgeQodeRow();
			$qode_slide_subtitle_animation_data_start->addChild("row1", $row1);

				$qode_slide_data_subtitle_start = new BridgeQodeMetaField("textsimple", "qode_slide_data_subtitle_start", "", esc_html__('Scrollbar Top Distance (px)', 'bridge'), "");
				$row1->addChild("qode_slide_data_subtitle_start", $qode_slide_data_subtitle_start);

				$qode_slide_data_subtitle_start_custom_style = new BridgeQodeMetaField("textareasimple", "qode_slide_data_subtitle_start_custom_style", "", esc_html__('Enter CSS declarations separated by semicolons', 'bridge'), "");
				$row1->addChild("qode_slide_data_subtitle_start_custom_style", $qode_slide_data_subtitle_start_custom_style);

		$qode_slide_subtitle_animation_data_end = new BridgeQodeGroup(esc_html__('Scrolling Animation End Point', 'bridge'), esc_html__('These are properties for the last keyframe in scrolling animation', 'bridge'));
		$qode_slide_subtitle_animation_scroll_container->addChild("qode_slide_subtitle_animation_data_end", $qode_slide_subtitle_animation_data_end);

			$row2 = new BridgeQodeRow();
			$qode_slide_subtitle_animation_data_end->addChild("row2", $row2);

				$qode_slide_data_subtitle_end = new BridgeQodeMetaField("textsimple", "qode_slide_data_subtitle_end", "", esc_html__('Scrollbar Top Distance (px)', 'bridge'), "");
				$row2->addChild("qode_slide_data_subtitle_end", $qode_slide_data_subtitle_end);

				$qode_slide_data_subtitle_end_custom_style = new BridgeQodeMetaField("textareasimple", "qode_slide_data_subtitle_end_custom_style", "", esc_html__('Enter CSS declarations separated by semicolons', 'bridge'), "");
				$row2->addChild("qode_slide_data_subtitle_end_custom_style", $qode_slide_data_subtitle_end_custom_style);


//Graphics scroll animation
	$qode_slide_graphic_animation_scroll = new BridgeQodeMetaField("yesno", "qode_slide_graphic_animation_scroll", "no", esc_html__('Animate Graphic on Scroll', 'bridge'), esc_html__('Enable graphic to animate separately', 'bridge'), array(), array(
		"dependence" => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qode_slide_graphic_animation_scroll_container"
	));
	$qodeSlideScrollAnimations->addChild('qode_slide_graphic_animation_scroll', $qode_slide_graphic_animation_scroll);

	$qode_slide_graphic_animation_scroll_container = new BridgeQodeContainer('qode_slide_graphic_animation_scroll_container', 'qode_slide_graphic_animation_scroll', 'no');
	$qodeSlideScrollAnimations->addChild('qode_slide_graphic_animation_scroll_container', $qode_slide_graphic_animation_scroll_container);

		$qode_slide_graphics_animation_data_start = new BridgeQodeGroup(esc_html__('Scrolling Animation Start Point', 'bridge'), esc_html__('These are properties for the first keyframe in scrolling animation', 'bridge'));
		$qode_slide_graphic_animation_scroll_container->addChild("qode_slide_graphics_animation_data_start", $qode_slide_graphics_animation_data_start);

			$row1 = new BridgeQodeRow();
			$qode_slide_graphics_animation_data_start->addChild("row1", $row1);

				$qode_slide_data_graphics_start = new BridgeQodeMetaField("textsimple", "qode_slide_data_graphics_start", "", esc_html__('Scrollbar Top Distance (px)', 'bridge'), "");
				$row1->addChild("qode_slide_data_graphics_start", $qode_slide_data_graphics_start);

				$qode_slide_data_graphics_start_custom_style = new BridgeQodeMetaField("textareasimple", "qode_slide_data_graphics_start_custom_style", "", esc_html__('Enter CSS declarations separated by semicolons', 'bridge'), "");
				$row1->addChild("qode_slide_data_graphics_start_custom_style", $qode_slide_data_graphics_start_custom_style);

		$qode_slide_graphics_animation_data_end = new BridgeQodeGroup(esc_html__('Scrolling Animation End Point', 'bridge'), esc_html__('These are properties for the last keyframe in scrolling animation','bridge'));
		$qode_slide_graphic_animation_scroll_container->addChild("qode_slide_graphics_animation_data_end", $qode_slide_graphics_animation_data_end);

			$row2 = new BridgeQodeRow();
			$qode_slide_graphics_animation_data_end->addChild("row2", $row2);

				$qode_slide_data_graphics_end = new BridgeQodeMetaField("textsimple", "qode_slide_data_graphics_end", "", esc_html__('Scrollbar Top Distance (px)', 'bridge'), "");
				$row2->addChild("qode_slide_data_graphics_end", $qode_slide_data_graphics_end);

				$qode_slide_data_graphics_end_custom_style = new BridgeQodeMetaField("textareasimple", "qode_slide_data_graphics_end_custom_style", "", esc_html__('Enter CSS declarations separated by semicolons', 'bridge'), "");
				$row2->addChild("qode_slide_data_graphics_end_custom_style", $qode_slide_data_graphics_end_custom_style);

//Text scroll animation
	$qode_slide_text_animation_scroll = new BridgeQodeMetaField("yesno", "qode_slide_text_animation_scroll", "no", esc_html__('Animate Text on Scroll', 'bridge'), esc_html__('Enable text to animate separately', 'bridge'), array(), array(
		"dependence" => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qode_slide_text_animation_scroll_container"
	));
	$qodeSlideScrollAnimations->addChild('qode_slide_text_animation_scroll', $qode_slide_text_animation_scroll);

	$qode_slide_text_animation_scroll_container = new BridgeQodeContainer('qode_slide_text_animation_scroll_container', 'qode_slide_text_animation_scroll', 'no');
	$qodeSlideScrollAnimations->addChild('qode_slide_text_animation_scroll_container', $qode_slide_text_animation_scroll_container);

		$qode_slide_text_animation_data_start = new BridgeQodeGroup(esc_html__('Scrolling Animation Start Point', 'bridge'), esc_html__('These are properties for the first keyframe in scrolling animation', 'bridge'));
		$qode_slide_text_animation_scroll_container->addChild("qode_slide_text_animation_data_start", $qode_slide_text_animation_data_start);

			$row1 = new BridgeQodeRow();
			$qode_slide_text_animation_data_start->addChild("row1", $row1);

				$qode_slide_data_text_start = new BridgeQodeMetaField("textsimple", "qode_slide_data_text_start", "", esc_html__('Scrollbar Top Distance (px)', 'bridge'), "");
				$row1->addChild("qode_slide_data_text_start", $qode_slide_data_text_start);

				$qode_slide_data_text_start_custom_style = new BridgeQodeMetaField("textareasimple", "qode_slide_data_text_start_custom_style", "", esc_html__('Enter CSS declarations separated by semicolons', 'bridge'), "");
				$row1->addChild("qode_slide_data_text_start_custom_style", $qode_slide_data_text_start_custom_style);

		$qode_slide_text_animation_data_end = new BridgeQodeGroup(esc_html__('Scrolling Animation End Point', 'bridge'), esc_html__('These are properties for the last keyframe in scrolling animation', 'bridge'));
		$qode_slide_text_animation_scroll_container->addChild("qode_slide_text_animation_data_end", $qode_slide_text_animation_data_end);

			$row2 = new BridgeQodeRow();
			$qode_slide_text_animation_data_end->addChild("row2", $row2);

				$qode_slide_data_text_end = new BridgeQodeMetaField("textsimple", "qode_slide_data_text_end", "", esc_html__('Scrollbar Top Distance (px)','bridge'), "");
				$row2->addChild("qode_slide_data_text_end", $qode_slide_data_text_end);

				$qode_slide_data_text_end_custom_style = new BridgeQodeMetaField("textareasimple", "qode_slide_data_text_end_custom_style", "", esc_html__('Enter CSS declarations separated by semicolons', 'bridge'), "");
				$row2->addChild("qode_slide_data_text_end_custom_style", $qode_slide_data_text_end_custom_style);


//Button 1 scroll animation
	$qode_slide_button1_animation_scroll = new BridgeQodeMetaField("yesno", "qode_slide_button1_animation_scroll", "no", esc_html__('Animate Button 1 on Scroll', 'bridge'), esc_html__('Enable button 1 to animate separately', 'bridge'), array(), array(
		"dependence" => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qode_slide_button1_animation_scroll_container"
	));
	$qodeSlideScrollAnimations->addChild('qode_slide_button1_animation_scroll', $qode_slide_button1_animation_scroll);

	$qode_slide_button1_animation_scroll_container = new BridgeQodeContainer('qode_slide_button1_animation_scroll_container', 'qode_slide_button1_animation_scroll', 'no');
	$qodeSlideScrollAnimations->addChild('qode_slide_button1_animation_scroll_container', $qode_slide_button1_animation_scroll_container);

		$qode_slide_button_1_animation_data_start = new BridgeQodeGroup(esc_html__('Scrolling Animation Start Point', 'bridge'), esc_html__('These are properties for the first keyframe in scrolling animation', 'bridge'));
		$qode_slide_button1_animation_scroll_container->addChild("qode_slide_button_1_animation_data_start", $qode_slide_button_1_animation_data_start);

			$row1 = new BridgeQodeRow();
			$qode_slide_button_1_animation_data_start->addChild("row1", $row1);

				$qode_slide_data_button_1_start = new BridgeQodeMetaField("textsimple", "qode_slide_data_button_1_start", "", esc_html__('Scrollbar Top Distance', 'bridge'));
				$row1->addChild("qode_slide_data_button_1_start", $qode_slide_data_button_1_start);

				$qode_slide_data_button_1_start_custom_style = new BridgeQodeMetaField("textareasimple", "qode_slide_data_button_1_start_custom_style", "", esc_html__('Enter CSS declarations separated by semicolons', 'bridge'));
				$row1->addChild("qode_slide_data_button_1_start_custom_style", $qode_slide_data_button_1_start_custom_style);

		$qode_slide_button_1_animation_data_end = new BridgeQodeGroup(esc_html__('Scrolling Animation End Point', 'bridge'), esc_html__('These are properties for the last keyframe in scrolling animation', 'bridge'));
		$qode_slide_button1_animation_scroll_container->addChild("qode_slide_button_1_animation_data_end", $qode_slide_button_1_animation_data_end);

			$row2 = new BridgeQodeRow();
			$qode_slide_button_1_animation_data_end->addChild("row2", $row2);

				$qode_slide_data_button_1_end = new BridgeQodeMetaField("textsimple", "qode_slide_data_button_1_end", "", esc_html__('Scrollbar Top Distance', 'bridge'));
				$row2->addChild("qode_slide_data_button_1_end", $qode_slide_data_button_1_end);

				$qode_slide_data_button_1_end_custom_style = new BridgeQodeMetaField("textareasimple", "qode_slide_data_button_1_end_custom_style", "", esc_html__('Enter CSS declarations separated by semicolons', 'bridge'));
				$row2->addChild("qode_slide_data_button_1_end_custom_style", $qode_slide_data_button_1_end_custom_style);



//Button 2 scroll animation
	$qode_slide_button2_animation_scroll = new BridgeQodeMetaField("yesno", "qode_slide_button2_animation_scroll", "no", esc_html__('Animate Button 2 on Scroll', 'bridge'), esc_html__('Enable button 2 to animate separately', 'bridge'), array(), array(
		"dependence" => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qode_slide_button2_animation_scroll_container"
	));
	$qodeSlideScrollAnimations->addChild('qode_slide_button2_animation_scroll', $qode_slide_button2_animation_scroll);

	$qode_slide_button2_animation_scroll_container = new BridgeQodeContainer('qode_slide_button2_animation_scroll_container', 'qode_slide_button2_animation_scroll', 'no');
	$qodeSlideScrollAnimations->addChild('qode_slide_button2_animation_scroll_container', $qode_slide_button2_animation_scroll_container);

		$qode_slide_button_2_animation_data_start = new BridgeQodeGroup(esc_html__('Scrolling Animation Start Point', 'bridge'), esc_html__('These are properties for the first keyframe in scrolling animation', 'bridge'));
		$qode_slide_button2_animation_scroll_container->addChild("qode_slide_button_2_animation_data_start", $qode_slide_button_2_animation_data_start);

			$row1 = new BridgeQodeRow();
			$qode_slide_button_2_animation_data_start->addChild("row1", $row1);

				$qode_slide_data_button_2_start = new BridgeQodeMetaField("textsimple", "qode_slide_data_button_2_start", "", esc_html__('Scrollbar Top Distance', 'bridge'));
				$row1->addChild("qode_slide_data_button_2_start", $qode_slide_data_button_2_start);

				$qode_slide_data_button_2_start_custom_style = new BridgeQodeMetaField("textareasimple", "qode_slide_data_button_2_start_custom_style", "", esc_html__('Enter CSS declarations separated by semicolons', 'bridge'));
				$row1->addChild("qode_slide_data_button_2_start_custom_style", $qode_slide_data_button_2_start_custom_style);

		$qode_slide_button_2_animation_data_end = new BridgeQodeGroup(esc_html__('Scrolling Animation End Point', 'bridge'), esc_html__('These are properties for the last keyframe in scrolling animation', 'bridge'));
		$qode_slide_button2_animation_scroll_container->addChild("qode_slide_button_2_animation_data_end", $qode_slide_button_2_animation_data_end);

			$row2 = new BridgeQodeRow();
			$qode_slide_button_2_animation_data_end->addChild("row2", $row2);

				$qode_slide_data_button_2_end = new BridgeQodeMetaField("textsimple", "qode_slide_data_button_2_end", "", esc_html__('Scrollbar Top Distance', 'bridge'));
				$row2->addChild("qode_slide_data_button_2_end", $qode_slide_data_button_2_end);

				$qode_slide_data_button_2_end_custom_style = new BridgeQodeMetaField("textareasimple", "qode_slide_data_button_2_end_custom_style", "", esc_html__('Enter CSS declarations separated by semicolons', 'bridge'));
				$row2->addChild("qode_slide_data_button_2_end_custom_style", $qode_slide_data_button_2_end_custom_style);


//Separator Bottom scroll animation
	$qode_slide_separator_bottom_animation_scroll = new BridgeQodeMetaField("yesno", "qode_slide_separator_bottom_animation_scroll", "no", esc_html__('Animate Separator on Scroll', 'bridge'), esc_html__('Enable separator bottom to animate separately', 'bridge'), array(), array(
		"dependence" => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qode_slide_separator_bottom_animation_scroll_container"
	));
	$qodeSlideScrollAnimations->addChild('qode_slide_separator_bottom_animation_scroll', $qode_slide_separator_bottom_animation_scroll);

	$qode_slide_separator_bottom_animation_scroll_container = new BridgeQodeContainer('qode_slide_separator_bottom_animation_scroll_container', 'qode_slide_separator_bottom_animation_scroll', 'no');
	$qodeSlideScrollAnimations->addChild('qode_slide_separator_bottom_animation_scroll_container', $qode_slide_separator_bottom_animation_scroll_container);

		$qode_slide_separator_bottom_animation_data_start = new BridgeQodeGroup(esc_html__('Scrolling Animation Start Point', 'bridge'), esc_html__('These are properties for the first keyframe in scrolling animation', 'bridge'));
		$qode_slide_separator_bottom_animation_scroll_container->addChild("qode_slide_separator_bottom_animation_data_start", $qode_slide_separator_bottom_animation_data_start);

			$row1 = new BridgeQodeRow();
			$qode_slide_separator_bottom_animation_data_start->addChild("row1", $row1);

				$qode_slide_data_separator_bottom_start = new BridgeQodeMetaField("textsimple", "qode_slide_data_separator_bottom_start", "", esc_html__('Scrollbar Top Distance', 'bridge'));
				$row1->addChild("qode_slide_data_separator_bottom_start", $qode_slide_data_separator_bottom_start);

				$qode_slide_data_separator_bottom_start_custom_style = new BridgeQodeMetaField("textareasimple", "qode_slide_data_separator_bottom_start_custom_style", "", esc_html__('Enter CSS declarations separated by semicolons', 'bridge'));
				$row1->addChild("qode_slide_data_separator_bottom_start_custom_style", $qode_slide_data_separator_bottom_start_custom_style);

		$qode_slide_separator_bottom_animation_data_end = new BridgeQodeGroup(esc_html__('Scrolling Animation End Point', 'bridge'), esc_html__('These are properties for the last keyframe in scrolling animation', 'bridge'));
		$qode_slide_separator_bottom_animation_scroll_container->addChild("qode_slide_separator_bottom_animation_data_end", $qode_slide_separator_bottom_animation_data_end);

			$row2 = new BridgeQodeRow();
			$qode_slide_separator_bottom_animation_data_end->addChild("row2", $row2);

				$qode_slide_data_separator_bottom_end = new BridgeQodeMetaField("textsimple", "qode_slide_data_separator_bottom_end", "", esc_html__('Scrollbar Top Distance', 'bridge'));
				$row2->addChild("qode_slide_data_separator_bottom_end", $qode_slide_data_separator_bottom_end);

				$qode_slide_data_separator_bottom_end_custom_style = new BridgeQodeMetaField("textareasimple", "qode_slide_data_separator_bottom_end_custom_style", "", esc_html__('Enter CSS declarations separated by semicolons', 'bridge'));
				$row2->addChild("qode_slide_data_separator_bottom_end_custom_style", $qode_slide_data_separator_bottom_end_custom_style);


//SVG scroll animation
	$qode_slide_svg_animation_scroll = new BridgeQodeMetaField("yesno", "qode_slide_svg_animation_scroll", "no", esc_html__('Animate SVG on Scroll', 'bridge'), esc_html__('Enable SVG to animate separately', 'bridge'), array(), array(
		"dependence" => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qode_slide_svg_animation_scroll_container"
	));
	$qodeSlideScrollAnimations->addChild('qode_slide_svg_animation_scroll', $qode_slide_svg_animation_scroll);

	$qode_slide_svg_animation_scroll_container = new BridgeQodeContainer('qode_slide_svg_animation_scroll_container', 'qode_slide_svg_animation_scroll', 'no');
	$qodeSlideScrollAnimations->addChild('qode_slide_svg_animation_scroll_container', $qode_slide_svg_animation_scroll_container);

		$qode_slide_svg_animation_data_start = new BridgeQodeGroup(esc_html__('Scrolling Animation Start Point', 'bridge'), esc_html__('These are properties for the first keyframe in scrolling animation', 'bridge'));
		$qode_slide_svg_animation_scroll_container->addChild("qode_slide_svg_animation_data_start", $qode_slide_svg_animation_data_start);

			$row1 = new BridgeQodeRow();
			$qode_slide_svg_animation_data_start->addChild("row1", $row1);

				$qode_slide_data_svg_start = new BridgeQodeMetaField("textsimple", "qode_slide_data_svg_start", "", esc_html__('Scrollbar Top Distance', 'bridge'));
				$row1->addChild("qode_slide_data_svg_start", $qode_slide_data_svg_start);

				$qode_slide_data_svg_start_custom_style = new BridgeQodeMetaField("textareasimple", "qode_slide_data_svg_start_custom_style", "", esc_html__('Enter CSS declarations separated by semicolons', 'bridge'));
				$row1->addChild("qode_slide_data_svg_start_custom_style", $qode_slide_data_svg_start_custom_style);

		$qode_slide_svg_animation_data_end = new BridgeQodeGroup(esc_html__('Scrolling Animation End Point', 'bridge'), esc_html__('These are properties for the last keyframe in scrolling animation', 'bridge'));
		$qode_slide_svg_animation_scroll_container->addChild("qode_slide_svg_animation_data_end", $qode_slide_svg_animation_data_end);

			$row2 = new BridgeQodeRow();
			$qode_slide_svg_animation_data_end->addChild("row2", $row2);

				$qode_slide_data_svg_end = new BridgeQodeMetaField("textsimple", "qode_slide_data_svg_end", "", esc_html__('Scrollbar Top Distance', 'bridge'));
				$row2->addChild("qode_slide_data_svg_end", $qode_slide_data_svg_end);

				$qode_slide_data_svg_end_custom_style = new BridgeQodeMetaField("textareasimple", "qode_slide_data_svg_end_custom_style", "", esc_html__('Enter CSS declarations separated by semicolons', 'bridge'));
				$row2->addChild("qode_slide_data_svg_end_custom_style", $qode_slide_data_svg_end_custom_style);