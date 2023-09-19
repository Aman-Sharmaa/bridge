<?php

if(!function_exists('bridge_qode_set_plugins_array_to_install')){
    function bridge_qode_set_plugins_array_to_install(){
        global $default_plugins_array_to_install;

        $default_plugins_array_to_install = array('js_composer', 'elementor', 'bridge-core', 'LayerSlider', 'revslider', 'envato-market', 'qode-twitter-feed', 'qode-instagram-widget');
    }

    add_action('bridge_qode_action_before_options_map', 'bridge_qode_set_plugins_array_to_install');
}

if(!function_exists('bridge_qode_plugins_list')) {
    function bridge_qode_plugins_list($filter_array = array()){
        $plugins = array(
            array(
                'name'                  => esc_html__( 'Bridge Core', 'bridge' ),
                'slug'                  => 'bridge-core',
                'source'                => get_template_directory() . '/plugins/bridge-core.zip',
                'version'               => '2.7.1',
                'required'				=> true,
                'force_activation'		=> false,
                'force_deactivation'	=> false,
                'external_url'			=> '',
            ),
            array(
                'name'					=>  esc_html__('WPBakery Visual Composer', 'bridge'),
                'slug'					=> 'js_composer',
                'source'				=> get_template_directory() . '/plugins/js_composer.zip',
                'required'				=> false,
                'version'				=> '6.6.0',
                'force_activation'		=> false,
                'force_deactivation'	=> false,
                'external_url'			=> '',
            ),
			array(
				'name'					=>  esc_html__('Elementor', 'bridge'),
				'slug'					=> 'elementor',
				'required'				=> false
			),
            array(
                'name'     				=> esc_html__('LayerSlider WP', 'bridge'),
                'slug'     				=> 'LayerSlider',
                'source'   				=> get_template_directory() . '/plugins/layersliderwp-6.11.6.installable.zip',
                'required' 				=> true,
                'version' 				=> '6.11.6',
                'force_activation' 		=> false,
                'force_deactivation' 	=> false,
                'external_url' 			=> ''
            ),
            array(
                'name'     				=> esc_html__('Revolution Slider', 'bridge'),
                'slug'     				=> 'revslider',
                'source'   				=> get_template_directory() . '/plugins/revslider.zip',
                'required' 				=> true,
                'version' 				=> '6.4.6',
                'force_activation' 		=> false,
                'force_deactivation' 	=> false,
                'external_url' 			=> ''
            ),
            array(
                'name'                  => esc_html__( 'Envato Market', 'bridge' ),
                'slug'                  => 'envato-market',
                'source'                => 'https://envato.github.io/wp-envato-market/dist/envato-market.zip',
                'required'              => false
            ),
            array(
                'name'     				=> esc_html__('Timetable Responsive Schedule For WordPress', 'bridge'),
                'slug'     				=> 'timetable',
                'source'   				=> get_template_directory() . '/plugins/timetable.zip',
                'required' 				=> false,
                'version' 				=> '6.4',
                'force_activation' 		=> false,
                'force_deactivation' 	=> false,
                'external_url' 			=> ''
            ),
            array(
                'name'        		=> esc_html__('Wp Job Manager', 'bridge'),
                'slug'        		=> 'wp-job-manager',
                'required'          => false,
                'external_url'  	=> 'https://wordpress.org/plugins/wp-job-manager/',
            ),
            array(
                'name'        		=> esc_html__('Regions for WP Job Manager', 'bridge'),
                'slug'        		=> 'wp-job-manager-locations',
                'required'          => false,
                'external_url'  	=> 'https://wordpress.org/plugins/wp-job-manager-locations/',
            ),
            array(
                'name'     				=> esc_html__('Qode Instagram Widget', 'bridge'),
                'slug'     				=> 'qode-instagram-widget',
                'source'   				=> get_template_directory() . '/plugins/qode-instagram-widget.zip',
                'required' 				=> false,
                'version' 				=> '2.1.2',
                'force_activation' 		=> false,
                'force_deactivation' 	=> false,
                'external_url' 			=> ''
            ),
            array(
                'name'     				=> esc_html__('Qode Twitter Feed', 'bridge'),
                'slug'     				=> 'qode-twitter-feed',
                'source'   				=> get_template_directory() . '/plugins/qode-twitter-feed.zip',
                'required' 				=> false,
                'version' 				=> '2.0.2',
                'force_activation' 		=> false,
                'force_deactivation' 	=> false,
                'external_url' 			=> ''
            ),
            array(
                'name'     				=> esc_html__('Quick Links', 'bridge'),
                'slug'     				=> 'qode-quick-links',
                'source'   				=> get_template_directory() . '/plugins/qode-quick-links.zip',
                'required' 				=> false,
                'version' 				=> '2.1',
                'force_activation' 		=> false,
                'force_deactivation' 	=> false,
                'external_url' 			=> '',
            ),
            array(
                'name'     				=> esc_html__('Qode Listing', 'bridge'),
                'slug'     				=> 'qode-listing',
                'source'   				=> get_template_directory() . '/plugins/qode-listing.zip',
                'required' 				=> false,
                'version' 				=> '3.0.2',
                'force_activation' 		=> false,
                'force_deactivation' 	=> false,
                'external_url' 			=> '',
            ),
            array(
                'name'     				=> esc_html__('Qode News', 'bridge'),
                'slug'     				=> 'qode-news',
                'source'   				=> get_template_directory() . '/plugins/qode-news.zip',
                'required' 				=> false,
                'version' 				=> '3.0.2',
                'force_activation' 		=> false,
                'force_deactivation' 	=> false,
                'external_url' 			=> '',
            ),
            array(
                'name'     				=> esc_html__('Qode Restaurant', 'bridge'),
                'slug'     				=> 'qode-restaurant',
                'source'   				=> get_template_directory() . '/plugins/qode-restaurant.zip',
                'required' 				=> false,
                'version' 				=> '3.0.1',
                'force_activation' 		=> false,
                'force_deactivation' 	=> false,
                'external_url' 			=> '',
            ),
            array(
                'name'     				=> esc_html__('Qode Membership', 'bridge'),
                'slug'     				=> 'qode-membership',
                'source'   				=> get_template_directory() . '/plugins/qode-membership.zip',
                'required' 				=> false,
                'version' 				=> '2.0.2',
                'force_activation' 		=> false,
                'force_deactivation' 	=> false,
                'external_url' 			=> '',
            ),
            array(
                'name'     				=> esc_html__('Qode Music', 'bridge'),
                'slug'     				=> 'qode-music',
                'source'   				=> get_template_directory() . '/plugins/qode-music.zip',
                'required' 				=> false,
                'version' 				=> '2.1.1',
                'force_activation' 		=> false,
                'force_deactivation' 	=> false,
                'external_url' 			=> '',
            ),
            array(
                'name'     				=> esc_html__('Qode Tours', 'bridge'),
                'slug'     				=> 'qode-tours',
                'source'   				=> get_template_directory() . '/plugins/qode-tours.zip',
                'required' 				=> false,
                'version' 				=> '3.0.2',
                'force_activation' 		=> false,
                'force_deactivation' 	=> false,
                'external_url' 			=> '',
            ),
            array(
                'name'     				=> esc_html__('Qode LMS', 'bridge'),
                'slug'     				=> 'qode-lms',
                'source'   				=> get_template_directory() . '/plugins/qode-lms.zip',
                'required' 				=> false,
                'version' 				=> '3.0.2',
                'force_activation' 		=> false,
                'force_deactivation' 	=> false,
                'external_url' 			=> '',
            ),
            array(
                'name'     				=> esc_html__('Qode Woocommerce Checkout Integration', 'bridge'),
                'slug'     				=> 'qode-woocommerce-checkout-integration',
                'source'   				=> get_template_directory() . '/plugins/qode-woocommerce-checkout-integration.zip',
                'required' 				=> false,
                'version' 				=> '2.0.1',
                'force_activation' 		=> false,
                'force_deactivation' 	=> false,
                'external_url' 			=> '',
            ),
            array(
                'name'     				=> esc_html__('Qode Real Estate', 'bridge'),
                'slug'     				=> 'qode-real-estate',
                'source'   				=> get_template_directory() . '/plugins/qode-real-estate.zip',
                'required' 				=> false,
                'version' 				=> '1.0.1',
                'force_activation' 		=> false,
                'force_deactivation' 	=> false,
                'external_url' 			=> '',
            ),
            array(
                'name'     				=> esc_html__('WooCommerce', 'bridge'),
                'slug'     				=> 'woocommerce',
                'source'   				=> '',
                'required' 				=> false,
                'version' 				=> '',
                'force_activation' 		=> false,
                'force_deactivation' 	=> false,
                'external_url' 			=> ''
            ),
            array(
                'name'     				=> esc_html__('Contact Form 7', 'bridge'),
                'slug'     				=> 'contact-form-7',
                'source'   				=> '',
                'required' 				=> false,
                'version' 				=> '',
                'force_activation' 		=> false,
                'force_deactivation' 	=> false,
                'external_url' 			=> ''
            ),
	        array(
                'name'     				=> esc_html__('Yith WooCommerce Quick View', 'bridge'),
                'slug'     				=> 'yith-woocommerce-quick-view',
                'source'   				=> '',
                'required' 				=> false,
                'version' 				=> '',
                'force_activation' 		=> false,
                'force_deactivation' 	=> false,
                'external_url' 			=> ''
            ),
	        array(
                'name'     				=> esc_html__('Yith WooCommerce Wishlist', 'bridge'),
                'slug'     				=> 'yith-woocommerce-wishlist',
                'source'   				=> '',
                'required' 				=> false,
                'version' 				=> '',
                'force_activation' 		=> false,
                'force_deactivation' 	=> false,
                'external_url' 			=> ''
            ),
        );

        if(!empty($filter_array)){
            $filtered_plugins = array();
            foreach($filter_array as $k1 => $val1) {
                foreach ($plugins as $k2 => $val2) {
                    if ($plugins[$k2]['slug'] == $val1) {
                        $filtered_plugins[$plugins[$k2]['slug']] = $plugins[$k2]['name'];
                    }
                }
            }
            return $filtered_plugins;
        }else{
            return $plugins;
        }
    }
}

if(!function_exists('bridge_qode_register_theme_included_plugins')) {

    /**
     * Registers theme required and optional plugins. Hooks to tgmpa_register hook
     */

    function bridge_qode_register_theme_included_plugins()	{
        global $default_plugins_array_to_install;
        $plugins = bridge_qode_plugins_list();
        $plugins_to_load = array();

        //if this option is already set (ie someone is updating theme) than update current option with new array entries
        if(!add_option("qode_required_plugins", $default_plugins_array_to_install)) {
            $former_options = get_option("qode_required_plugins");
            if(is_array($default_plugins_array_to_install) && count($default_plugins_array_to_install) > 0) {
                foreach ($default_plugins_array_to_install as $default_plugin) {
                    if (!in_array($default_plugin, $former_options)) {
                        array_push($former_options, $default_plugin);
                    }
                }
            }
            update_option("qode_required_plugins", $former_options);
        }

        $qode_required_plugins = get_option("qode_required_plugins");
        if(empty($qode_required_plugins)) {
            $qode_required_plugins = array();
        }

        $filtered_plugins = apply_filters('bridge_qode_filter_required_plugins', $qode_required_plugins);

        foreach($filtered_plugins as $k1 => $val1) {
            foreach($plugins as $k2 => $val2) {
                if($plugins[$k2]['slug'] == $val1) {
                    array_push($plugins_to_load, $plugins[$k2]);
                }
            }
        }

        $config = array(
            'domain'			=> 'bridge',
            'default_path'		=> '',
            'parent_slug'		=> 'themes.php',
            'capability'		=> 'edit_theme_options',
            'menu'				=> 'install-required-plugins',
            'has_notices'		=> true,
            'is_automatic'		=> false,
            'message'			=> '',
            'strings'			=> array(
                'page_title'						=> esc_html__('Install Required Plugins', 'bridge'),
                'menu_title'						=> esc_html__('Install Plugins', 'bridge'),
                'installing'						=> esc_html__('Installing Plugin: %s', 'bridge'),
                'oops'								=> esc_html__('Something went wrong with the plugin API.', 'bridge'),
                'notice_can_install_required'		=> _n_noop('This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'bridge'),
                'notice_can_install_recommended'	=> _n_noop('This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'bridge'),
                'notice_cannot_install'				=> _n_noop('Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'bridge'),
                'notice_can_activate_required'		=> _n_noop('The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'bridge'),
                'notice_can_activate_recommended'	=> _n_noop('The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'bridge'),
                'notice_cannot_activate'			=> _n_noop('Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'bridge'),
                'notice_ask_to_update'				=> _n_noop('The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'bridge'),
                'notice_cannot_update'				=> _n_noop('Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'bridge'),
                'install_link'						=> _n_noop('Begin installing plugin', 'Begin installing plugins', 'bridge'),
                'activate_link'						=> _n_noop('Activate installed plugin', 'Activate installed plugins', 'bridge'),
                'return'							=> esc_html__('Return to Required Plugins Installer', 'bridge'),
                'plugin_activated'					=> esc_html__('Plugin activated successfully.', 'bridge'),
                'complete'							=> esc_html__('All plugins installed and activated successfully. %s', 'bridge'),
                'nag_type'							=> 'updated'
            )
        );

        tgmpa($plugins_to_load, $config);
    }

    add_action( 'tgmpa_register', 'bridge_qode_register_theme_included_plugins' );
}
