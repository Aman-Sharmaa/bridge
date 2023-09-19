<?php
if(!function_exists('bridge_qode_social_options_map')) {
    /**
     * Social options page
     */
    function bridge_qode_social_options_map() {

    	$page = 'socialPage';
        $socialPage = new BridgeQodeAdminPage("_social", esc_html__('Social', 'bridge'), "fa fa-share-alt");
        bridge_qode_framework()->qodeOptions->addAdminPage("socialPage", $socialPage);

        //Social Share

        $panel1 = new BridgeQodePanel(esc_html__('Social Sharing', 'bridge'), "social_sharing_panel");
        $socialPage->addChild("panel1", $panel1);

        $enable_social_share = new BridgeQodeField("yesno", "enable_social_share", "no", esc_html__('Enable Social Share', 'bridge'), esc_html__('Enabling this option will allow social share on networks of your choice', 'bridge'), array(),
            array("dependence" => true,
                "dependence_hide_on_yes" => "",
                "dependence_show_on_yes" => "#qodef_facebook_share_panel,#qodef_twitter_share_panel,#qodef_google_share_panel,#qodef_linked_share_panel,#qodef_tumblr_share_panel,#qodef_pinterest_share_panel,#qodef_vk_share_panel,#qodef_show_social_share_panel"));
        $panel1->addChild("enable_social_share", $enable_social_share);

        //Show Social Share

        $panel9 = new BridgeQodePanel(esc_html__('Show Social Share', 'bridge'), "show_social_share_panel", "enable_social_share", "no");
        $socialPage->addChild("panel9", $panel9);

        $post_types_names_post = new BridgeQodeField("flagpost", "post_types_names_post", "", esc_html__('Posts', 'bridge'), esc_html__('Show Social Share on Blog Posts', 'bridge'));
        $panel9->addChild("post_types_names_post", $post_types_names_post);

        $post_types_names_page = new BridgeQodeField("flagpage", "post_types_names_page", "", esc_html__('Pages', 'bridge'), esc_html__('Show Social Share on Pages', 'bridge'));
        $panel9->addChild("post_types_names_page", $post_types_names_page);

        $post_types_names_attachment = new BridgeQodeField("flagmedia", "post_types_names_attachment", "", esc_html__('Media', 'bridge'), esc_html__('Show Social Share for Images and Videos', 'bridge'));
        $panel9->addChild("post_types_names_attachment", $post_types_names_attachment);

        $post_types_names_portfolio_page = new BridgeQodeField("flagportfolio", "post_types_names_portfolio_page", "", esc_html__('Portfolio Item','bridge'), esc_html__('Show Social Share for Portfolio Items', 'bridge'));
        $panel9->addChild("post_types_names_portfolio_page", $post_types_names_portfolio_page);

        if (bridge_qode_is_woocommerce_installed()) {
            $post_types_names_product = new BridgeQodeField("flagproduct", "post_types_names_product", "", esc_html__('Product', 'bridge'), esc_html__('Show Social Share for Product Items', 'bridge'));
            $panel9->addChild("post_types_names_product", $post_types_names_product);
        }

		do_action( 'bridge_qode_action_option_social_page_map', $panel9 );

        //Facebook

        $panel2 = new BridgeQodePanel(esc_html__('Facebook Share Options', 'bridge'), "facebook_share_panel", "enable_social_share", "no");
        $socialPage->addChild("panel2", $panel2);

        $enable_facebook_share = new BridgeQodeField("yesno", "enable_facebook_share", "no", esc_html__('Enable Share', 'bridge'), esc_html__('Enabling this option will allow sharing via Facebook', 'bridge'), array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_enable_facebook_share_container"));
        $panel2->addChild("enable_facebook_share", $enable_facebook_share);
        $enable_facebook_share_container = new BridgeQodeContainer("enable_facebook_share_container", "enable_facebook_share", "no");
        $panel2->addChild("enable_facebook_share_container", $enable_facebook_share_container);
        $facebook_icon = new BridgeQodeField("image", "facebook_icon", "", esc_html__('Icon', 'bridge'), esc_html__('Upload Facebook icon', 'bridge'));
        $enable_facebook_share_container->addChild("facebook_icon", $facebook_icon);

        //Twitter

        $panel3 = new BridgeQodePanel(esc_html__('Twitter Share Options', 'bridge'), "twitter_share_panel", "enable_social_share", "no");
        $socialPage->addChild("panel3", $panel3);

        $enable_twitter_share = new BridgeQodeField("yesno", "enable_twitter_share", "no", esc_html__('Enable Share', 'bridge'), esc_html__('Enabling this option will allow sharing via Twitter', 'bridge'), array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_enable_twitter_share_container"));
        $panel3->addChild("enable_twitter_share", $enable_twitter_share);
        $enable_twitter_share_container = new BridgeQodeContainer("enable_twitter_share_container", "enable_twitter_share", "no");

        $panel3->addChild("enable_twitter_share_container", $enable_twitter_share_container);
        $twitter_icon = new BridgeQodeField("image", "twitter_icon", "", esc_html__('Icon', 'bridge'), esc_html__('Upload Twitter icon', 'bridge'));
        $enable_twitter_share_container->addChild("twitter_icon", $twitter_icon);
        $twitter_via = new BridgeQodeField("text", "twitter_via", "", esc_html__('Via', 'bridge'), "");
        $enable_twitter_share_container->addChild("twitter_via", $twitter_via);

        //Google Plus

        $panel4 = new BridgeQodePanel(esc_html__('Google Plus Share Options', 'bridge'), "google_share_panel", "enable_social_share", "no");
        $socialPage->addChild("panel4", $panel4);

        $enable_google_plus = new BridgeQodeField("yesno", "enable_google_plus", "no", esc_html__('Enable Share', 'bridge'), esc_html__('Enabling this option will allow sharing via Google Plus', 'bridge'), array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_enable_google_plus_container"));
        $panel4->addChild("enable_google_plus", $enable_google_plus);
        $enable_google_plus_container = new BridgeQodeContainer("enable_google_plus_container", "enable_google_plus", "no");
        $panel4->addChild("enable_google_plus_container", $enable_google_plus_container);
        $google_plus_icon = new BridgeQodeField("image", "google_plus_icon", "", esc_html__('Icon', 'bridge'), esc_html__('Upload Google Plus icon', 'bridge'));
        $enable_google_plus_container->addChild("google_plus_icon", $google_plus_icon);

        //LinkedIn

        $panel5 = new BridgeQodePanel(esc_html__('LinkedIn Share Options', 'bridge'), "linked_share_panel", "enable_social_share", "no");
        $socialPage->addChild("panel5", $panel5);

        $enable_linkedin = new BridgeQodeField("yesno", "enable_linkedin", "no", esc_html__('Enable Share', 'bridge'), esc_html__('Enabling this option will allow sharing via LinkedIn', 'bridge'), array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_enable_linkedin_container"));
        $panel5->addChild("enable_linkedin", $enable_linkedin);
        $enable_linkedin_container = new BridgeQodeContainer("enable_linkedin_container", "enable_linkedin", "no");
        $panel5->addChild("enable_linkedin_container", $enable_linkedin_container);
        $linkedin_icon = new BridgeQodeField("image", "linkedin_icon", "", esc_html__('Icon', 'bridge'), esc_html__('Upload LinkedIn icon', 'bridge'));
        $enable_linkedin_container->addChild("linkedin_icon", $linkedin_icon);

        //Tumblr

        $panel6 = new BridgeQodePanel(esc_html__('Tumblr Share Options', 'bridge'), "tumblr_share_panel", "enable_social_share", "no");
        $socialPage->addChild("panel6", $panel6);

        $enable_tumblr = new BridgeQodeField("yesno", "enable_tumblr", "no", esc_html__('Enable Share', 'bridge'), esc_html__('Enabling this option will allow sharing via Tumblr', 'bridge'), array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_enable_tumblr_container"));
        $panel6->addChild("enable_tumblr", $enable_tumblr);
        $enable_tumblr_container = new BridgeQodeContainer("enable_tumblr_container", "enable_tumblr", "no");
        $panel6->addChild("enable_tumblr_container", $enable_tumblr_container);
        $tumblr_icon = new BridgeQodeField("image", "tumblr_icon", "", esc_html__('Icon', 'bridge'), esc_html__('Upload Tumblr icon', 'bridge'));
        $enable_tumblr_container->addChild("tumblr_icon", $tumblr_icon);

        // Pinterest

        $panel7 = new BridgeQodePanel(esc_html__('Pinterest Share Options', 'bridge'), "pinterest_share_panel", "enable_social_share", "no");
        $socialPage->addChild("panel7", $panel7);

        $enable_pinterest = new BridgeQodeField("yesno", "enable_pinterest", "no", esc_html__('Enable Share', 'bridge'), esc_html__('Enabling this option will allow sharing via Pinterest','bridge'), array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_enable_pinterest_container"));
        $panel7->addChild("enable_pinterest", $enable_pinterest);
        $enable_pinterest_container = new BridgeQodeContainer("enable_pinterest_container", "enable_pinterest", "no");
        $panel7->addChild("enable_pinterest_container", $enable_pinterest_container);
        $pinterest_icon = new BridgeQodeField("image", "pinterest_icon", "", esc_html__('Icon', 'bridge'), esc_html__('Upload Pinterest icon', 'bridge'));
        $enable_pinterest_container->addChild("pinterest_icon", $pinterest_icon);

        //VK

        $panel8 = new BridgeQodePanel(esc_html__('VK Share Options', 'bridge'), "vk_share_panel", "enable_social_share", "no");
        $socialPage->addChild("panel8", $panel8);

        $enable_vk = new BridgeQodeField("yesno", "enable_vk", "no", esc_html__('Enable Share', 'bridge'), esc_html__('Enabling this option will allow sharing via VK', 'bridge'), array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_enable_vk_container"));
        $panel8->addChild("enable_vk", $enable_vk);
        $enable_vk_container = new BridgeQodeContainer("enable_vk_container", "enable_vk", "no");
        $panel8->addChild("enable_vk_container", $enable_vk_container);
        $vk_icon = new BridgeQodeField("image", "vk_icon", "", esc_html__('Icon', 'bridge'), "Upload VK icon");
        $enable_vk_container->addChild("vk_icon", $vk_icon);

        if (defined('QODE_INSTAGRAM_WIDGET_VERSION')) {
            $instagram_panel = new BridgeQodePanel(esc_html__('Instagram', 'bridge'), 'panel_instagram');
            $socialPage->addChild("instagram_panel", $instagram_panel);

            $instagram_button = new BridgeQodeInstagramFramework(esc_html__('Connect', 'bridge'), esc_html__('ThisIsDescription','bridge'));
            $instagram_panel->addChild("instagram_button", $instagram_button);
        }

		if(defined('QODE_TWITTER_FEED_VERSION')) {
			$twitter_panel = bridge_qode_add_admin_panel(array(
				'title' => esc_html__('Twitter','bridge'),
				'name'  => 'panel_twitter',
				'page'  => 'socialPage'
			));

			bridge_qode_add_admin_twitter_button(array(
				'name'   => 'twitter_button',
				'parent' => $twitter_panel
			));
		}

		/**
		 * Action for embedding social share option for custom post types
		 */
		do_action('bridge_qode_action_social_options', $page);

    }
    add_action('bridge_qode_action_options_map','bridge_qode_social_options_map',130);
}