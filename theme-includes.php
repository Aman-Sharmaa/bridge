<?php
define( 'BRIDGE_QODE', true );
define('QODE_ROOT', get_template_directory_uri());
define('QODE_ROOT_DIR', get_template_directory());
define('QODE_VAR_PREFIX', 'qode_');
define('QODE_FRAMEWORK_ROOT', get_template_directory_uri().'/framework');
define('QODE_FRAMEWORK_ROOT_DIR', get_template_directory().'/framework');
define('QODE_FRAMEWORK_ADMIN_ASSETS_ROOT', get_template_directory_uri() . '/framework/admin/assets' );
define('QODE_SHORTCODES_ROOT_DIR', get_template_directory().'/includes/shortcodes/shortcode-elements');
define('QODE_FRAMEWORK_MODULES_ROOT', get_template_directory_uri().'/framework/modules');
define('QODE_FRAMEWORK_MODULES_ROOT_DIR', get_template_directory().'/framework/modules');
define('QODE_INCLUDES_ROOT', QODE_ROOT . '/includes');
define('QODE_INCLUDES_ROOT_DIR', QODE_ROOT_DIR . '/includes');

include_once( QODE_INCLUDES_ROOT_DIR . '/qode-fallback-helper-functions.php' );
include_once( QODE_FRAMEWORK_ROOT_DIR . '/qode-framework.php' );
include_once( QODE_INCLUDES_ROOT_DIR . '/qode-breadcrumbs.php' );
include_once( QODE_INCLUDES_ROOT_DIR . '/qode-blog-helper-functions.php' );
include_once( QODE_INCLUDES_ROOT_DIR . '/nav_menu/qode-menu.php' );
include_once( QODE_INCLUDES_ROOT_DIR . '/sidebar/qode-custom-sidebar.php' );
include_once( QODE_INCLUDES_ROOT_DIR . '/qode-plugin-helper-functions.php' );
include_once( QODE_INCLUDES_ROOT_DIR . '/qode-custom-taxonomy-field.php' );
include_once( QODE_INCLUDES_ROOT_DIR . '/qode-gradient-helper-functions.php' );
include_once( QODE_INCLUDES_ROOT_DIR . '/qode-loading-spinners.php' );
include_once( QODE_INCLUDES_ROOT_DIR . '/qode-related-posts.php' );
/* Include comment functionality */
include_once( QODE_INCLUDES_ROOT_DIR . '/comment/comment.php' );
/* Include sidebar functionality */
include_once( QODE_INCLUDES_ROOT_DIR . '/sidebar/sidebar.php' );
/* Include pagination functionality */
include_once( QODE_INCLUDES_ROOT_DIR . '/pagination/pagination.php' );
/* Include qode carousel select box for visual composer */
/* Include font awesome icons list */
include_once( QODE_INCLUDES_ROOT_DIR . '/font_awesome/font-awesome.php' );
/** Include the TGM_Plugin_Activation class. */
require_once( QODE_INCLUDES_ROOT_DIR . '/plugins/class-tgm-plugin-activation.php' );
/* Include plugins activation file */
include_once( QODE_INCLUDES_ROOT_DIR . '/plugins/plugins-activation.php' );
include_once( QODE_ROOT_DIR . '/css/custom-styles/general-custom-styles.php' );
include_once( QODE_INCLUDES_ROOT_DIR . '/qode-dynamic-helper-functions.php' );