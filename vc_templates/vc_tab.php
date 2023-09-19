<?php
$output = $title = $tab_id = '';
if(function_exists('vc_map_get_attributes')){
    $atts = vc_map_get_attributes( $this->getShortcode(), $atts );
    extract( $atts );
} else{
    extract(shortcode_atts($this->predefined_atts, $atts));
}

wp_enqueue_script('jquery_ui_tabs_rotate');

$css_class =  apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'tab-content', $this->settings['base']);
$output .= "\n\t\t\t" . '<div id="tab-'. (empty($tab_id) ? sanitize_title( $title ) : $tab_id) .'" class="'.$css_class.'">';
$output .= ($content=='' || $content==' ') ? esc_html__('Empty section. Edit page to add content here.', 'bridge') : "\n\t\t\t\t" . wpb_js_remove_wpautop($content);
$output .= "\n\t\t\t" . '</div> ' . $this->endBlockComment('.wpb_tab');

echo bridge_qode_get_module_part( $output );