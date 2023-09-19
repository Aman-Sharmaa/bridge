<?php
/**
 * Force Visual Composer to initialize as "built into the theme". This will hide certain tabs under the Settings->Visual Composer page
 */
if(function_exists('vc_set_as_theme')) vc_set_as_theme(true);

// Initialising Shortcodes
if (class_exists('WPBakeryVisualComposerAbstract')) {

	function bridge_qode_require_vc_extend(){

		require_once QODE_ROOT_DIR . '/extendvc/extend-vc.php';

		do_action('bridge_qode_action_vc_map');
	}
	add_action('init', 'bridge_qode_require_vc_extend', 11);
}

if(class_exists('WPBakeryShortCodesContainer')) {
	class WPBakeryShortCode_Qode_Cards_Slider extends WPBakeryShortCodesContainer {}
	class WPBakeryShortCode_Qode_Item_Showcase extends WPBakeryShortCodesContainer {}
	class WPBakeryShortCode_Qode_Elliptical_Slider extends WPBakeryShortCodesContainer {}
	class WPBakeryShortCode_Qode_Elliptical_Slide extends WPBakeryShortCodesContainer {}
	class WPBakeryShortCode_Qode_Sliding_Image_Holder extends WPBakeryShortCodesContainer {}
	class WPBakeryShortCode_Qode_Advanced_Tabs extends WPBakeryShortCodesContainer {}
	class WPBakeryShortCode_Qode_Advanced_Tab extends WPBakeryShortCodesContainer {}
	class WPBakeryShortCode_Qode_Numbered_Process extends WPBakeryShortCodesContainer {}
	class WPBakeryShortCode_Qode_Accordion extends WPBakeryShortCodesContainer {}
	class WPBakeryShortCode_Qode_Accordion_Tab extends WPBakeryShortCodesContainer {}
	class WPBakeryShortCode_Qode_Interactive_Icon_Showcase extends WPBakeryShortCodesContainer {}
	class WPBakeryShortCode_Qode_Workflow extends WPBakeryShortCodesContainer {}
}