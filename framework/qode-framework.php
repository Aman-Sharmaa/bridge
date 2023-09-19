<?php
require_once( QODE_FRAMEWORK_ROOT_DIR . "/lib/qode.layout1.php" );
require_once( QODE_FRAMEWORK_ROOT_DIR . "/lib/qode.layout2.php" );
require_once( QODE_FRAMEWORK_ROOT_DIR . "/lib/qode.layout3.php" );
require_once( QODE_FRAMEWORK_ROOT_DIR . "/lib/qode.layout.tax.php" );
require_once( QODE_FRAMEWORK_ROOT_DIR . "/lib/qode.layout.user.php" );
require_once( QODE_FRAMEWORK_ROOT_DIR . "/lib/qode.optionsapi.php" );
require_once( QODE_FRAMEWORK_ROOT_DIR . "/lib/qode.framework.php" );
require_once( QODE_FRAMEWORK_ROOT_DIR . "/lib/qode.functions.php" );
require_once( QODE_FRAMEWORK_ROOT_DIR . "/lib/qode.icons/qode.icons.php" );
require_once( QODE_FRAMEWORK_ROOT_DIR . "/lib/google-fonts.php" );
require_once( QODE_FRAMEWORK_ROOT_DIR . "/admin/options/qode-options-setup.php" );
require_once( QODE_FRAMEWORK_ROOT_DIR . "/admin/meta-boxes/qode-meta-boxes-setup.php" );
require_once( QODE_FRAMEWORK_ROOT_DIR . "/modules/qode-modules-loader.php" );


if(!function_exists('bridge_qode_admin_script_init')) {
	/**
	 * Register styles and scripts
	 */

	function bridge_qode_admin_scripts_init() {
		wp_register_style('qodef-additional-admin-style', get_template_directory_uri() . '/framework/admin/assets/css/qodef-additional-admin-style.css');
		wp_register_style('qodef-page-admin', get_template_directory_uri() . '/framework/admin/assets/css/qodef-page.css');
		wp_register_style('qodef-options-admin', get_template_directory_uri() . '/framework/admin/assets/css/qodef-options.css');
		wp_register_style('qodef-meta-boxes-admin', get_template_directory_uri() . '/framework/admin/assets/css/qodef-meta-boxes.css');
		wp_register_style('qodef-ui-admin', get_template_directory_uri() . '/framework/admin/assets/css/qodef-ui/qodef-ui.css');
		wp_register_style('qodef-forms-admin', get_template_directory_uri() . '/framework/admin/assets/css/qodef-forms.css');
		wp_register_style('font-awesome-admin', get_template_directory_uri() . '/framework/admin/assets/css/font-awesome/css/font-awesome.min.css');
		wp_register_style('select2', get_template_directory_uri() . '/framework/admin/assets/css/select2.min.css');

		wp_register_script('bootstrap.min', get_template_directory_uri() . '/framework/admin/assets/js/bootstrap.min.js');
		wp_register_script("select2", get_template_directory_uri() . '/framework/admin/assets/js/select2.min.js', array(), false, true);
		wp_register_script('jquery.nouislider.min', get_template_directory_uri() . '/framework/admin/assets/js/qodef-ui/jquery.nouislider.min.js');
		wp_register_script('qodef-ui-admin', get_template_directory_uri() . '/framework/admin/assets/js/qodef-ui/qodef-ui.js');
		wp_register_script('qodef-ui-repeater', get_template_directory_uri() . '/framework/admin/assets/js/qodef-ui/qodef-ui-repeater.js', array(), false, true);
		wp_enqueue_script("qodef-twitter-connect", get_template_directory_uri() . '/framework/admin/assets/js/qodef-twitter-connect.js', array(), false, true);
		wp_enqueue_script("qodef-instagram", get_template_directory_uri() . '/framework/admin/assets/js/qodef-instagram.js', array(), false, true);
		//This part is required for field type address
		$enable_google_map_in_admin = apply_filters('bridge_qode_filter_google_maps_in_backend', false);
		if ($enable_google_map_in_admin) {
			//include google map api script
			$google_maps_api_key = bridge_qode_options()->getOptionValue('google_maps_api_key');
			$google_maps_extensions = '';
			$google_maps_extensions_array = apply_filters('bridge_qode_filter_google_maps_extensions_array', array());
			if (!empty($google_maps_extensions_array)) {
				$google_maps_extensions .= '&libraries=';
				$google_maps_extensions .= implode(',', $google_maps_extensions_array);
			}
			if (!empty($google_maps_api_key)) {
				wp_enqueue_script('qodef-admin-maps', '//maps.googleapis.com/maps/api/js?key=' . esc_attr($google_maps_api_key) . $google_maps_extensions, array(), false, true);
				wp_enqueue_script('jquery.geocomplete', get_template_directory_uri() . '/framework/admin/assets/js/jquery.geocomplete.min.js', array('qodef-admin-maps'), false, true);
			}
		}

		do_action('bridge_qode_action_admin_scripts_init');

	}

	add_action('admin_init', 'bridge_qode_admin_scripts_init');
}

if ( ! function_exists('bridge_qode_enqueue_admin_styles') ) {
	/**
	 * Enqueue styles and scripts for admin page
	 */

	function bridge_qode_enqueue_admin_styles() {
		wp_enqueue_style('wp-color-picker');
		wp_enqueue_style('qodef-additional-admin-style');
		wp_enqueue_style('select2');
		wp_enqueue_style('qodef-page-admin');
		wp_enqueue_style('qodef-options-admin');
		wp_enqueue_style('qodef-ui-admin');
		wp_enqueue_style('qodef-forms-admin');
		wp_enqueue_style('font-awesome-admin');
	}
}

if ( ! function_exists('bridge_qode_enqueue_admin_scripts') ) {
	function bridge_qode_enqueue_admin_scripts() {
		wp_enqueue_script('underscore'); //underscore
		wp_enqueue_script('wp-color-picker'); //colorpicker
		wp_enqueue_script('bootstrap.min');
		wp_enqueue_script('select2');
		wp_enqueue_media();
		wp_enqueue_script('jquery.nouislider.min');
		wp_enqueue_script('qodef-ui-admin');
		wp_enqueue_script('qodef-ui-repeater');
	}
}

if ( ! function_exists('bridge_qode_enqueue_meta_box_styles') ) {
	function bridge_qode_enqueue_meta_box_styles() {
		wp_enqueue_style('wp-color-picker');
		wp_enqueue_style('qodef-additional-admin-style');
		wp_enqueue_style('select2');
		wp_enqueue_style('qodef-page-admin');
		wp_enqueue_style('qodef-meta-boxes-admin');
		wp_enqueue_style('qodef-ui-admin');
		wp_enqueue_style('qodef-forms-admin');
		wp_enqueue_style('font-awesome-admin');
	}
}

if ( ! function_exists('bridge_qode_enqueue_meta_box_scripts') ) {
	function bridge_qode_enqueue_meta_box_scripts() {
		wp_enqueue_script('underscore'); //underscore
		wp_enqueue_script('wp-color-picker'); //colorpicker
		wp_enqueue_script('bootstrap.min');
		wp_enqueue_script('select2');
		wp_enqueue_media();
		wp_enqueue_script('jquery-ui-sortable');
		wp_enqueue_script('qodef-ui-admin');
		wp_enqueue_script('qodef-ui-repeater');
	}
}
if( ! function_exists( 'bridge_qode_init_theme_options_array' ) ) {
	function bridge_qode_init_theme_options_array() {
		global $bridge_qode_options, $bridge_qode_framework;

		$db_options = get_option( 'qode_options_proya' );

		if ( ! empty( $db_options ) && is_array( $db_options ) ) {
			//merge with default options
			$bridge_qode_options = array_merge( $bridge_qode_framework->qodeOptions->options, $db_options );
		} else {
			//options don't exists in db, take default ones
			$bridge_qode_options = $bridge_qode_framework->qodeOptions->options;
		}
	}

	add_action( 'bridge_qode_action_before_options_map', 'bridge_qode_init_theme_options_array', 11 );
}


if ( ! function_exists('bridge_qode_init_qode_theme_options') ) {
	function bridge_qode_init_qode_theme_options() {
		global $bridge_qode_options;
		global $bridge_qode_framework;
		if (isset($bridge_qode_options['reset_to_defaults'])) {
			if ($bridge_qode_options['reset_to_defaults'] == 'yes') delete_option("qode_options_proya");
		}
		if (!get_option("qode_options_proya")) {
			add_option("qode_options_proya",
				$bridge_qode_framework->qodeOptions->options
			);
			$bridge_qode_options = $bridge_qode_framework->qodeOptions->options;
		}
	}
}
if ( ! function_exists('bridge_qode_register_qode_theme_settings') ) {
	function bridge_qode_register_qode_theme_settings() {
		register_setting('qode_theme_menu', 'qode_options');
	}

	add_action('admin_init', 'bridge_qode_register_qode_theme_settings');
}

if ( ! function_exists('bridge_qode_strafter') ) {
	function bridge_qode_strafter($string, $substring) {
		$pos = strpos($string, $substring);
		if ($pos === false)
			return NULL;
		else
			return (substr($string, $pos + strlen($substring)));
	}
}

if ( ! function_exists('bridge_qode_get_admin_tab') ) {
	function bridge_qode_get_admin_tab() {
		return isset($_GET['page']) ? bridge_qode_strafter($_GET['page'], 'tab') : NULL;
	}
}

if ( ! function_exists('bridge_qode_save_options') ) {
	function bridge_qode_save_options() {
		global $bridge_qode_options;
		global $bridge_qode_framework;

		if (current_user_can('administrator')) {
			$_REQUEST = stripslashes_deep($_REQUEST);
			check_ajax_referer('qode_ajax_save_nonce', 'qode_ajax_save_nonce');

			foreach ($bridge_qode_framework->qodeOptions->options as $key => $value) {
				if (isset($_REQUEST[$key])) {
					$bridge_qode_options[$key] = $_REQUEST[$key];
				}
			}
			update_option('qode_options_proya', $bridge_qode_options);
			do_action('bridge_qode_action_after_theme_option_save');
			echo esc_html__("Saved", "bridge");

			die();
		}
	}

	add_action('wp_ajax_bridge_qode_save_options', 'bridge_qode_save_options');
}

if ( ! function_exists('bridge_qode_theme_display') ) {
	function bridge_qode_theme_display() {
		global $bridge_qode_framework;
		$tab = bridge_qode_get_admin_tab();
		$active_page = $bridge_qode_framework->qodeOptions->getAdminPageFromSlug($tab);
		if ($active_page == null) return;
		?>
		<div class="qodef-options-page qodef-page">

			<div class="qodef-page-header page-header clearfix">
				<img src="<?php echo get_template_directory_uri() . '/framework/admin/assets/img/qode-logo.png' ?>"
				     alt="<?php esc_html_e('qode_logo', 'bridge'); ?>" class="qodef-header-logo pull-left"/>
				<?php $current_theme = wp_get_theme(); ?>
				<h2 class="qodef-page-title pull-left">
					<?php echo esc_attr($current_theme->get('Name')); ?>
					<small><?php echo esc_attr($current_theme->get('Version')); ?></small>
				</h2>
				<?php if ($active_page->slug != '_importexport') { ?>
					<div class="pull-right"><input type="button" id="qode_top_save_button"
					                               class="btn btn-primary btn-sm pull-right"
					                               value="<?php esc_html_e('Save Changes', 'bridge'); ?>"/></div>
				<?php } ?>
			</div> <!-- close div.qodef-page-header -->

			<div class="qodef-page-content-wrapper">
				<div class="qodef-page-content">
					<div class="qodef-page-navigation qodef-tabs-wrapper vertical left clearfix">

						<div class="qodef-tabs-navigation-wrapper">
							<ul class="nav nav-tabs">
								<?php
								foreach ($bridge_qode_framework->qodeOptions->adminPages as $key => $page) {
									$slug = "";
									if (!empty($page->slug)) $slug = "_tab" . $page->slug;
									$icon = $page->icon;
									?>
									<li <?php if ($page->slug == $tab) echo "class=\"active\""; ?>>
										<a href="<?php echo get_admin_url(); ?>admin.php?page=qode_theme_menu<?php echo esc_attr($slug); ?>">
											<i class="fa fa-<?php echo esc_attr($icon); ?> qodef-tooltip qodef-inline-tooltip left"
											   data-placement="top" data-toggle="tooltip"
											   title="<?php echo esc_attr($page->title); ?>"></i>
											<span><?php echo esc_attr($page->title); ?></span>
										</a>
									</li>
								<?php } ?>
							</ul>
						</div> <!-- close div.qodef-tabs-navigation-wrapper -->

						<div class="qodef-tabs-content">
							<div class="tab-content">
								<?php
								foreach ($bridge_qode_framework->qodeOptions->adminPages as $key => $page) {
									if ($page->slug == $tab) {
										?>
										<div class="tab-pane fade<?php if ($page->slug == $tab) echo " in active"; ?>"
										     id="<?php echo esc_attr($key); ?>">
											<div class="qodef-tab-content">
												<h2 class="qodef-page-title"><?php echo esc_attr($page->title); ?></h2>

												<?php if ($page->slug == '_importexport') { ?>

													<form method="post" class="qode_import_export_ajax_form">
														<div class="qodef-page-form">
															<?php $page->render(); ?>

														</div>
													</form>

												<?php } else { ?>
													<form method="post" class="qode_ajax_form">
														<?php wp_nonce_field("qode_ajax_save_nonce", "qode_ajax_save_nonce") ?>
														<div class="qodef-page-form">
															<?php $page->render(); ?>

															<div class="form-button-section clearfix">
																<div
																	class="qodef-input-change"><?php echo esc_html__('You should save your changes', 'bridge'); ?></div>
																<div
																	class="qodef-changes-saved"><?php echo esc_html__('All your changes are successfully saved', 'bridge'); ?></div>
																<div class="form-buttom-section-holder" id="anchornav">
																	<div class="form-button-section-inner clearfix">

																		<div class="container-fluid">
																			<div class="row">
																				<div class="col-lg-10">
																					<ul class="pull-left">
																						<li><?php echo esc_html__('Scroll To:', 'bridge'); ?></li>
																						<?php
																						foreach ($page->layout as $key => $panel) {
																							?>
																							<li>
																								<a href="#qodef_<?php echo esc_attr($panel->name); ?>"><?php echo esc_attr($panel->title); ?></a>
																							</li>
																							<?php
																						}
																						?>
																					</ul>
																				</div>
																				<div class="col-lg-2">
																					<input type="submit"
																					       class="btn btn-primary btn-sm pull-right"
																					       value="<?php esc_html_e('Save Changes', 'bridge'); ?>"/>
																				</div>
																			</div>
																		</div>

																	</div>
																</div>
															</div>
														</div>
													</form>

												<?php } ?>

											</div><!-- close qodef-tab-content -->
										</div>
										<?php
									}
								}
								?>
							</div>
						</div> <!-- close div.qodef-tabs-content -->

					</div> <!-- close div.qodef-page-navigation -->

				</div> <!-- close div.qodef-page-content -->

			</div> <!-- close div.qodef-page-content-wrapper -->

		</div> <!-- close div.qode-options-page -->
	<?php }
}

if ( ! function_exists('bridge_qode_meta_box_add') ) {
	function bridge_qode_meta_box_add() {
		global $bridge_qode_framework;

		foreach ($bridge_qode_framework->qodeMetaBoxes->metaBoxes as $key=>$box ) {

			$hidden = false;
			if (!empty($box->hidden_property)){
				foreach ($box->hidden_values as $value) {
					if (bridge_qode_option_get_value($box->hidden_property)==$value)
						$hidden = true;

				}
			}

			if ( is_string( $box->scope ) ) {
				$box->scope = array( $box->scope );
			}

			if ( is_array( $box->scope ) && count( $box->scope ) ) {
				foreach ( $box->scope as $screen ) {
					bridge_core_create_meta_box_handler( $box, $key, $screen );

					if ( $hidden ) {
						add_filter( 'postbox_classes_' . $screen . '_qodef-meta-box-' . $key, 'bridge_qode_meta_box_add_hidden_class' );
					}
				}
			}

		}

		if ( bridge_qode_is_gutenberg_installed() || bridge_qode_is_wp_gutenberg_installed() ) {

            $postTypes = apply_filters('bridge_qode_filter_meta_box_post_types_save', array("page", "post", "portfolio_page", "testimonials", "slides", "carousels", "masonry_gallery"));
            if (bridge_qode_is_woocommerce_installed()) {
                array_push($postTypes, "product");
            }

            $pt = '';

            if( function_exists('get_current_screen') ){
                $pt = get_current_screen()->post_type;
            }

            if(in_array($pt, $postTypes)){
                bridge_qode_enqueue_meta_box_styles();
                bridge_qode_enqueue_meta_box_scripts();
            }
		} else {
			add_action('admin_enqueue_scripts', 'bridge_qode_enqueue_meta_box_styles');
			add_action('admin_enqueue_scripts', 'bridge_qode_enqueue_meta_box_scripts');
		}


	}
}

if(!function_exists('bridge_qode_meta_box_save')) {
	function bridge_qode_meta_box_save($post_id, $post) {
		global $bridge_qode_framework;


		$nonces_array = array();
		$meta_boxes = bridge_qode_framework()->qodeMetaBoxes->getMetaBoxesByScope($post->post_type);

		if (is_array($meta_boxes) && count($meta_boxes)) {
			foreach ($meta_boxes as $meta_box) {
				$nonces_array[] = 'qode_meta_box_' . $meta_box->name . '_save';
			}
		}

		if (is_array($nonces_array) && count($nonces_array)) {
			foreach ($nonces_array as $nonce) {

				if (!isset($_POST[$nonce]) || !wp_verify_nonce($_POST[$nonce], $nonce)) {
					return;
				}
			}
		}

		$postTypes = apply_filters('bridge_qode_filter_meta_box_post_types_save', array("page", "post", "portfolio_page", "testimonials", "slides", "carousels", "masonry_gallery"));


		//add product post type into array if woocommerce is installed
		if (bridge_qode_is_woocommerce_installed()) {
			array_push($postTypes, "product");
		}
		if (!isset($_POST['_wpnonce']))
			return;
		if (!current_user_can('edit_post', $post_id))
			return;
		if (!in_array($post->post_type, $postTypes))
			return;
		foreach ($bridge_qode_framework->qodeMetaBoxes->options as $key => $box) {

			if (isset($_POST[$key]) && trim($_POST[$key] !== '')) {

				$value = $_POST[$key];
				// Auto-paragraphs for any WYSIWYG
				update_post_meta($post_id, $key, $value);
			} else {
				delete_post_meta($post_id, $key);
			}
		}

		$portfolios = false;
		if (isset($_POST['optionLabel'])) {
			foreach ($_POST['optionLabel'] as $key => $value) {
				$portfolios_val[$key] = array('optionLabel' => $value, 'optionValue' => sanitize_text_field($_POST['optionValue'][$key]), 'optionUrl' => esc_url($_POST['optionUrl'][$key]), 'optionlabelordernumber' => sanitize_text_field($_POST['optionlabelordernumber'][$key]));
				$portfolios = true;

			}
		}

		if ($portfolios) {
			update_post_meta($post_id, 'qode_portfolios', $portfolios_val);
		} else {
			delete_post_meta($post_id, 'qode_portfolios');
		}

		$portfolio_images = false;
		if (isset($_POST['portfolioimg'])) {
			foreach ($_POST['portfolioimg'] as $key => $value) {
				$portfolio_images_val[$key] = array('portfolioimg' => esc_url($_POST['portfolioimg'][$key]), 'portfoliotitle' => sanitize_text_field($_POST['portfoliotitle'][$key]), 'portfolioimgordernumber' => sanitize_text_field($_POST['portfolioimgordernumber'][$key]), 'portfoliovideotype' => sanitize_text_field($_POST['portfoliovideotype'][$key]), 'portfoliovideoid' => sanitize_text_field($_POST['portfoliovideoid'][$key]), 'portfoliovideoimage' => esc_url($_POST['portfoliovideoimage'][$key]), 'portfoliovideowebm' => esc_url($_POST['portfoliovideowebm'][$key]), 'portfoliovideomp4' => esc_url($_POST['portfoliovideomp4'][$key]), 'portfoliovideoogv' => esc_url($_POST['portfoliovideoogv'][$key]), 'portfolioimgtype' => sanitize_text_field($_POST['portfolioimgtype'][$key]));
				$portfolio_images = true;
			}
		}

		if ($portfolio_images) {
			update_post_meta($post_id, 'qode_portfolio_images', $portfolio_images_val);
		} else {
			delete_post_meta($post_id, 'qode_portfolio_images');
		}
	}

	add_action('save_post', 'bridge_qode_meta_box_save', 1, 2);
}
if(!function_exists('bridge_qode_render_meta_box')) {
	function bridge_qode_render_meta_box($post, $metabox) { ?>
		<div class="qodef-meta-box qodef-page">
			<div class="qodef-meta-box-holder">
				<?php $metabox["args"]["box"]->render(); ?>
				<?php wp_nonce_field('qode_meta_box_' . $metabox['args']['box']->name . '_save', 'qode_meta_box_' . $metabox['args']['box']->name . '_save'); ?>
			</div>
		</div>
		<?php
	}
}
if(!function_exists('bridge_qode_meta_box_add_hidden_class')) {
	function bridge_qode_meta_box_add_hidden_class($classes = array()) {
		if (!in_array('qodef-meta-box-hidden', $classes))
			$classes[] = 'qodef-meta-box-hidden';

		return $classes;
	}
}
if(!function_exists('bridge_qode_remove_default_custom_fields')) {
	/**
	 * Remove the default Custom Fields meta box
	 */

	function bridge_qode_remove_default_custom_fields() {
		foreach (array('normal', 'advanced', 'side') as $context) {
			foreach (apply_filters('bridge_qode_filter_meta_box_post_types_remove', array("page", "post", "portfolio_page", "testimonials", "slides", "carousels")) as $postType) {
				remove_meta_box('postcustom', $postType, $context);
			}
		}
	}

	add_action('do_meta_boxes', 'bridge_qode_remove_default_custom_fields');
}
if(!function_exists('bridge_qode_admin_notice')) {
    /**
     * Prints admin notice. It checks if notice has been disabled and if it hasn't then it displays it
     * @param $id string id of notice. It will be used to store notice dismis
     * @param $message string message to show to the user
     * @param $class string HTML class of notice
     * @param bool $is_dismisable whether notice is dismisable or not
     */
    function bridge_qode_admin_notice($id, $message, $class, $is_dismisable = true) {
        $is_dismised = get_user_meta(get_current_user_id(), 'dismis_'.$id);

        //if notice isn't dismissed
        if(!$is_dismised && is_admin()) {
            echo '<div style="display: block;" class="'.esc_attr($class).' is-dismissible notice">';
            echo '<p>';

            echo wp_kses_post($message);

            if($is_dismisable) {
                echo '<strong style="display: block; margin-top: 7px;"><a href="'.esc_url(add_query_arg('qode_dismis_notice', $id)).'">'.esc_html__('Dismiss this notice', 'bridge').'</a></strong>';
            }

            echo '</p>';

            echo '</div>';
        }

    }
}

if(!function_exists('bridge_qode_save_dismisable_notice')) {
    /**
     * Updates user meta with dismisable notice. Hooks to admin_init action
     * in order to check this on every page request in admin
     */
    function bridge_qode_save_dismisable_notice() {
        if(is_admin() && !empty($_GET['qode_dismis_notice'])) {
            $notice_id = sanitize_key($_GET['qode_dismis_notice']);
            $current_user_id = get_current_user_id();

            update_user_meta($current_user_id, 'dismis_'.$notice_id, 1);
        }
    }

    add_action('admin_init', 'bridge_qode_save_dismisable_notice');
}

if(!function_exists('bridge_qode_enqueue_style_scripts_slider_taxonomy')) {
	/**
	 * Enqueue style and scripts when on slider taxonomy page in admin
	 */
	function bridge_qode_enqueue_style_scripts_slider_taxonomy() {
		if(isset($_GET['taxonomy']) && $_GET['taxonomy'] == 'slides_category') {
			wp_enqueue_style('qodef-slider-category', get_template_directory_uri().'/framework/admin/assets/css/qodef-slider-category.css');
			wp_enqueue_script('qodef-slider-category', get_template_directory_uri().'/framework/admin/assets/js/qodef-slider-category.js');
		}
	}

	add_action('admin_print_scripts-edit-tags.php', 'bridge_qode_enqueue_style_scripts_slider_taxonomy');
}

if(!function_exists('bridge_qode_enqueue_nav_menu_script')) {
    /**
     * Function that enqueues styles and scripts necessary for menu administration page.
     * It checks $hook variable
     * @param $hook string current page hook to check
     */
    function bridge_qode_enqueue_nav_menu_script($hook) {
        if($hook == 'nav-menus.php') {
            wp_enqueue_script('qodef-nav-menu', get_template_directory_uri().'/framework/admin/assets/js/qodef-nav-menu.js');
            wp_enqueue_style('qodef-nav-menu', get_template_directory_uri().'/framework/admin/assets/css/qodef-nav-menu.css');
        }
    }

    add_action('admin_enqueue_scripts', 'bridge_qode_enqueue_nav_menu_script');
}

if ( ! function_exists( 'bridge_qode_init_icon_collection_variable' ) ) {
    function bridge_qode_init_icon_collection_variable() {
        global $qodeIconCollections;

        $qodeIconCollections = BridgeQodeIconCollections::getInstance();;
    }

    add_action( 'bridge_qode_action_before_options_map', 'bridge_qode_init_icon_collection_variable' );
}

if(!function_exists('bridge_qode_generate_icon_pack_options')) {
    /**
     * Generates options HTML for each icon in given icon pack
     * Hooked to wp_ajax_update_admin_nav_icon_options action
     */
    function bridge_qode_generate_icon_pack_options() {
        global $qodeIconCollections;
		check_ajax_referer('update-nav_menu', 'update_nav_menu_nonce');
        $html = '';
        $icon_pack = isset($_POST['icon_pack']) ? sanitize_text_field($_POST['icon_pack']) : '';
        $collections_object = $qodeIconCollections->getIconCollection($icon_pack);

        if($collections_object) {
            $icons = $collections_object->getIconsArray();
            if(is_array($icons) && count($icons)) {
                foreach ($icons as $key => $icon) {
                    $html .= '<option value="'.esc_attr($key).'">'.esc_html($key).'</option>';
                }
            }
        }

        print bridge_qode_get_module_part( $html );
    }

    add_action('wp_ajax_bridge_qode_update_admin_nav_icon_options', 'bridge_qode_generate_icon_pack_options');
}

if(!function_exists('bridge_qode_get_custom_sidebars')) {
    /**
     * Function that returns all custom made sidebars.
     *
     * @uses get_option()
     * @return array array of custom made sidebars where key and value are sidebar name
     */
    function bridge_qode_get_custom_sidebars() {
        $custom_sidebars = get_option('qode_sidebars');
        $formatted_array = array();

        if(is_array($custom_sidebars) && count($custom_sidebars)) {
            foreach ($custom_sidebars as $custom_sidebar) {
                $formatted_array[$custom_sidebar] = $custom_sidebar;
            }
        }

        return $formatted_array;
    }
}


if(!function_exists('bridge_qode_hook_twitter_request_ajax')) {
	/**
	 * Wrapper function for obtaining twitter request token.
	 * Hooks to wp_ajax_qode_twitter_obtain_request_token ajax action
	 *
	 * @see QodeTwitterApi::obtainRequestToken()
	 */
	function bridge_qode_hook_twitter_request_ajax() {
		check_ajax_referer('bridge_qode_twitter_connect', 'bridge_qode_twitter_connect');
		QodeTwitterApi::getInstance()->obtainRequestToken();
	}

	add_action('wp_ajax_bridge_qode_twitter_obtain_request_token', 'bridge_qode_hook_twitter_request_ajax');
}

if(!function_exists('bridge_qode_disconnect_from_instagram')) {

	function bridge_qode_disconnect_from_instagram() {
		check_ajax_referer('bridge_qode_disconnect_from_instagram', 'bridge_qode_disconnect_from_instagram');
		QodeInstagramApi::getInstance()->deleteFieldsFromDB();

	}

	add_action('wp_ajax_bridge_qode_disconnect_from_instagram', 'bridge_qode_disconnect_from_instagram');
}

/* Taxonomy custom fields functions - START */

if(!function_exists('bridge_qode_init_custom_taxonomy_fields')){
	function bridge_qode_init_custom_taxonomy_fields(){
		do_action('bridge_qode_action_custom_taxonomy_fields');
	}
	add_action('after_setup_theme','bridge_qode_init_custom_taxonomy_fields');

}

if(!function_exists('bridge_qode_taxonomy_fields_add')) {
	function bridge_qode_taxonomy_fields_add()
	{
		global $bridge_qode_framework;
		foreach ($bridge_qode_framework->qodeTaxonomyOptions->taxonomyOptions as $key => $fields) {
			add_action($fields->scope.'_add_form_fields', 'bridge_qode_taxonomy_fields_display_add', 10, 2);
		}
	}

	add_action('after_setup_theme', 'bridge_qode_taxonomy_fields_add', 11);
}

if(!function_exists('bridge_qode_taxonomy_fields_edit')) {
	function bridge_qode_taxonomy_fields_edit()
	{
		global $bridge_qode_framework;
		foreach ($bridge_qode_framework->qodeTaxonomyOptions->taxonomyOptions as $key => $fields) {
			add_action($fields->scope.'_edit_form_fields', 'bridge_qode_taxonomy_fields_display_edit', 10, 2);
		}
	}

	add_action('after_setup_theme', 'bridge_qode_taxonomy_fields_edit', 11);
}

if(!function_exists('bridge_qode_taxonomy_fields_display_add')) {
	function bridge_qode_taxonomy_fields_display_add($taxonomy)
	{
		global $bridge_qode_framework;
		foreach ($bridge_qode_framework->qodeTaxonomyOptions->taxonomyOptions as $key => $fields) {
			if($taxonomy == $fields->scope) {
				$fields->render();
			}
		}
	}
}

if(!function_exists('bridge_qode_taxonomy_fields_display_edit')) {
	function bridge_qode_taxonomy_fields_display_edit($term, $taxonomy)
	{
		global $bridge_qode_framework;
		foreach ($bridge_qode_framework->qodeTaxonomyOptions->taxonomyOptions as $key => $fields) {
			if($taxonomy == $fields->scope) {
				$fields->render();
			}
		}
	}
}

if (!function_exists('bridge_qode_save_taxonomy_custom_fields')) {
	function bridge_qode_save_taxonomy_custom_fields($term_id) {
		$fields = apply_filters('bridge_qode_filter_taxonomy_fields',array());

		foreach ( $fields as $value ) {
			if( isset( $_POST[$value] ) && '' !== $_POST[$value] ){
				add_term_meta ( $term_id, $value, sanitize_text_field($_POST[$value]) );
			}
		}
	}
	add_action('created_term', 'bridge_qode_save_taxonomy_custom_fields', 10, 2);
}


if (!function_exists('bridge_qode_update_taxonomy_custom_fields')) {
	function bridge_qode_update_taxonomy_custom_fields ($term_id) {
		$fields = apply_filters('bridge_qode_filter_taxonomy_fields',array());

		foreach ( $fields as $value ) {
			if( isset( $_POST[$value] ) && '' !== $_POST[$value] ){
				update_term_meta ( $term_id, $value, sanitize_text_field($_POST[$value]) );
			}else {
				update_term_meta ( $term_id, $value, '' );
			}
		}
	}
	add_action( 'edited_term', 'bridge_qode_update_taxonomy_custom_fields', 10, 2 );
}


if (!function_exists('bridge_qode_tax_add_script')) {
	function bridge_qode_tax_add_script() {
		wp_enqueue_media();
		wp_enqueue_script('qode-tax-js', QODE_FRAMEWORK_ROOT.'/admin/assets/js/qode-tax-custom-fields.js');
		wp_enqueue_script( 'select2', get_template_directory_uri() . '/framework/admin/assets/js/select2.min.js', array(), false, true );

		wp_enqueue_style( 'select2', get_template_directory_uri() . '/framework/admin/assets/css/select2.min.css' );
	}
	add_action( 'admin_enqueue_scripts', 'bridge_qode_tax_add_script' );
}

/** Taxonomy Delete Image **/
if (!function_exists('bridge_qode_tax_del_image')) {
	function bridge_qode_tax_del_image(){


		/** If we don't have a term_id, bail out **/
		if (!isset($_GET['term_id'])) {

			check_ajax_referer('add-tag', 'delete_tax_nonce');
			echo esc_html__('Not Set or Empty', 'bridge');
			exit;
		}

		check_ajax_referer('update-tag_'.$_GET['term_id'], 'delete_tax_nonce');

		$field_name = $_GET['field_name'];
		$term_id = $_GET['term_id'];
		$imageID = get_term_meta($term_id, $field_name, true);  // Get our attachment ID

		if (is_numeric($imageID)) {
			delete_term_meta($term_id, $field_name);// Delete our image meta
			exit;
		}

		echo esc_html__('Contact Administrator', 'bridge'); // If we've reached this point, something went wrong - enable debugging
		exit;
	}

	add_action('wp_ajax_bridge_qode_tax_del_image', 'bridge_qode_tax_del_image');
}

/* Taxonomy custom fields functions - END */

/* User custom fields functions - START */

if ( !function_exists('bridge_qode_user_add_script') ) {
    function bridge_qode_user_add_script() {
        wp_enqueue_script('qodef-user-js', QODE_FRAMEWORK_ROOT . '/admin/assets/js/qodef-ui/qodef-user-custom-fields.js');
    }

    add_action('admin_enqueue_scripts', 'bridge_qode_user_add_script');
}

if ( !function_exists('bridge_qode_init_custom_user_fields') ) {
    function bridge_qode_init_custom_user_fields() {
        do_action('bridge_qode_action_custom_user_fields');
    }

    add_action('after_setup_theme', 'bridge_qode_init_custom_user_fields');
}

if ( !function_exists('bridge_qode_user_fields_edit') ) {
    function bridge_qode_user_fields_edit($user) {
        global $bridge_qode_framework;

        foreach ( $bridge_qode_framework->qodefUserOptions->userOptions as $key => $fields ) {

            $display_fields = false;
            foreach ( $user->roles as $role ) {
                if ( in_array($role, $fields->scope) ) {
                    $display_fields = true;
                    break;
                }
            }
            if ( $display_fields ) {
                $fields->render();
            }
        }
    }

    add_action('show_user_profile', 'bridge_qode_user_fields_edit');
    add_action('edit_user_profile', 'bridge_qode_user_fields_edit');
}

if ( !function_exists('bridge_qode_save_user_fields') ) {
    function bridge_qode_save_user_fields($user_id) {

        $fields = apply_filters('bridge_qode_user_fields', array());

        foreach ( $fields as $value ) {
            if ( isset($_POST[$value]) && '' !== $_POST[$value] ) {
                update_user_meta($user_id, $value, $_POST[$value]);
            }
        }
    }

    add_action('personal_options_update', 'bridge_qode_save_user_fields');
    add_action('edit_user_profile_update', 'bridge_qode_save_user_fields');
}

/* User custom fields functions - END */

if ( ! function_exists('bridge_qode_set_admin_google_api_class') ) {
	function bridge_qode_set_admin_google_api_class($classes ) {
		$google_map_api = bridge_qode_options()->getOptionValue( 'google_maps_api_key' );

		if ( empty( $google_map_api ) ) {
			$classes .= ' qodef-empty-google-api';
		}

		return $classes;
	}

	add_filter( 'admin_body_class', 'bridge_qode_set_admin_google_api_class' );
}

/** User Delete Image **/
if ( ! function_exists( 'bridge_qode_remove_widget_image' ) ) {
    function bridge_qode_remove_widget_image() {
        check_ajax_referer( 'qode_user_del_image_nonce', 'user_del_image_nonce' );

        /** If we don't have a term_id, bail out **/
        if ( ! isset( $_GET['user_id'] ) ) {
            esc_html_e( 'Not Set or Empty', 'bridge' );
            exit;
        }

        $field_name = $_GET['field_name'];
        $user_id    = $_GET['user_id'];
        $imageID    = get_user_meta( $user_id, $field_name, true );;  // Get our attachment ID

        if ( is_numeric( $imageID ) ) {               // Verify that the attachment ID is indeed a number
            delete_user_meta( $user_id, $field_name );// Delete our image meta
            exit;
        }

        esc_html_e( 'Contact Administrator', 'bridge' ); // If we've reached this point, something went wrong - enable debugging
        exit;
    }

    add_action( 'wp_ajax_bridge_qode_remove_widget_image', 'bridge_qode_remove_widget_image' );
}