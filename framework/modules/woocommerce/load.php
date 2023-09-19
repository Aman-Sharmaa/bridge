<?php
include_once QODE_FRAMEWORK_MODULES_ROOT_DIR.'/woocommerce/woocommerce-functions.php';

if (bridge_qode_is_woocommerce_installed()) {
	include_once QODE_FRAMEWORK_MODULES_ROOT_DIR.'/woocommerce/admin/options-map/map.php';
	include_once QODE_FRAMEWORK_MODULES_ROOT_DIR.'/woocommerce/admin/meta-boxes/woocommerce-meta-boxes.php';

	include_once QODE_FRAMEWORK_MODULES_ROOT_DIR.'/woocommerce/woocommerce-template-hooks.php';
	include_once QODE_FRAMEWORK_MODULES_ROOT_DIR.'/woocommerce/woocommerce-config.php';
	include_once QODE_FRAMEWORK_MODULES_ROOT_DIR.'/woocommerce/widgets/woocommerce-dropdown-cart.php';
	include_once QODE_FRAMEWORK_MODULES_ROOT_DIR.'/woocommerce/custom-styles/woocommerce.php';

	foreach(glob(QODE_FRAMEWORK_MODULES_ROOT_DIR.'/woocommerce/plugins/*/load.php') as $plugin_load) {
		include_once $plugin_load;
	}
}