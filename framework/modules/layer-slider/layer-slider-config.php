<?php
if(!function_exists('bridge_qode_layer_slider_global_overrides')) {
	function bridge_qode_layer_slider_global_overrides()
	{
		// Disable auto-updates
		$GLOBALS['lsAutoUpdateBox'] = false;
	}
	add_action('layerslider_ready', 'bridge_qode_layer_slider_global_overrides');
}