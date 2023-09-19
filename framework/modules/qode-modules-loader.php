<?php

if(!function_exists('bridge_qode_load_modules')) {
	/**
	 * Loades all modules by going through all folders that are placed directly in modules folder
	 * and loads load.php file in each. Hooks to qode_after_options_map action
	 *
	 * @see http://php.net/manual/en/function.glob.php
	 */
	function bridge_qode_load_modules() {
		foreach(glob(QODE_FRAMEWORK_ROOT_DIR.'/modules/*/load.php') as $module_load) {
            if (strpos($module_load, 'reviews') == false) {
                include_once $module_load;
            }

		}
	}

	add_action('bridge_qode_action_before_options_map', 'bridge_qode_load_modules');
}