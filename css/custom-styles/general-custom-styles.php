<?php
if(!function_exists('bridge_qode_design_styles')) {
    /**
     * Generates general custom styles
     */
    function bridge_qode_design_styles() {

        if(bridge_qode_options()->getOptionValue('gradient_style1_start_color') !== '#31c8a2' && bridge_qode_options()->getOptionValue('gradient_style1_start_color') !== '' &&
           bridge_qode_options()->getOptionValue('gradient_style1_end_color') !== '#ae66fd' && bridge_qode_options()->getOptionValue('gradient_style1_end_color') !== ''
        ) {

            echo bridge_qode_dynamic_css('.qode-type1-gradient-left-to-right', array(
                'background' => '-webkit-linear-gradient(left,'.bridge_qode_options()->getOptionValue('gradient_style1_start_color').', '.bridge_qode_options()->getOptionValue('gradient_style1_end_color').')',
                'background' => '-o-linear-gradient(right,'.bridge_qode_options()->getOptionValue('gradient_style1_start_color').', '.bridge_qode_options()->getOptionValue('gradient_style1_end_color').')',
                'background' => '-moz-linear-gradient(right,'.bridge_qode_options()->getOptionValue('gradient_style1_start_color').', '.bridge_qode_options()->getOptionValue('gradient_style1_end_color').')',
                'background' => 'linear-gradient(to right,'.bridge_qode_options()->getOptionValue('gradient_style1_start_color').', '.bridge_qode_options()->getOptionValue('gradient_style1_end_color').')',
            ));

            echo bridge_qode_dynamic_css('.qode-type1-gradient-bottom-to-top, .qode-type1-gradient-bottom-to-top-after:after', array(
                'background' => '-webkit-linear-gradient(bottom,'.bridge_qode_options()->getOptionValue('gradient_style1_start_color').', '.bridge_qode_options()->getOptionValue('gradient_style1_end_color').')',
                'background' => '-o-linear-gradient(top,'.bridge_qode_options()->getOptionValue('gradient_style1_start_color').', '.bridge_qode_options()->getOptionValue('gradient_style1_end_color').')',
                'background' => '-moz-linear-gradient(top,'.bridge_qode_options()->getOptionValue('gradient_style1_start_color').', '.bridge_qode_options()->getOptionValue('gradient_style1_end_color').')',
                'background' => 'linear-gradient(to top,'.bridge_qode_options()->getOptionValue('gradient_style1_start_color').', '.bridge_qode_options()->getOptionValue('gradient_style1_end_color').')',
            ));

            echo bridge_qode_dynamic_css('.qode-type1-gradient-left-bottom-to-right-top', array(
                'background' => '-webkit-linear-gradient(right top,'.bridge_qode_options()->getOptionValue('gradient_style1_end_color').', '.bridge_qode_options()->getOptionValue('gradient_style1_start_color').')',
                'background' => '-o-linear-gradient(right top,'.bridge_qode_options()->getOptionValue('gradient_style1_start_color').', '.bridge_qode_options()->getOptionValue('gradient_style1_end_color').')',
                'background' => '-moz-linear-gradient(right top,'.bridge_qode_options()->getOptionValue('gradient_style1_start_color').', '.bridge_qode_options()->getOptionValue('gradient_style1_end_color').')',
                'background' => 'linear-gradient(to right top,'.bridge_qode_options()->getOptionValue('gradient_style1_start_color').', '.bridge_qode_options()->getOptionValue('gradient_style1_end_color').')',
            ));

            echo bridge_qode_dynamic_css('.qode-type1-gradient-left-to-right-2x', array(
                'background'      => '-webkit-linear-gradient(left,'.bridge_qode_options()->getOptionValue('gradient_style1_start_color').' 0%, '.bridge_qode_options()->getOptionValue('gradient_style1_end_color').' 50% ,'.bridge_qode_options()->getOptionValue('gradient_style1_start_color').' 100%)',
                'background'      => '-o-linear-gradient(right,'.bridge_qode_options()->getOptionValue('gradient_style1_start_color').' 0%, '.bridge_qode_options()->getOptionValue('gradient_style1_end_color').' 50% ,'.bridge_qode_options()->getOptionValue('gradient_style1_start_color').' 100%)',
                'background'      => '-moz-linear-gradient(right,'.bridge_qode_options()->getOptionValue('gradient_style1_start_color').' 0%, '.bridge_qode_options()->getOptionValue('gradient_style1_end_color').' 50% ,'.bridge_qode_options()->getOptionValue('gradient_style1_start_color').' 100%)',
                'background'      => 'linear-gradient(to right,'.bridge_qode_options()->getOptionValue('gradient_style1_start_color').' 0%, '.bridge_qode_options()->getOptionValue('gradient_style1_end_color').' 50%,'.bridge_qode_options()->getOptionValue('gradient_style1_start_color').' 100%)',
                'background-size' => '200% 200%'
            ));

            echo bridge_qode_dynamic_css('.qode-type1-gradient-left-to-right-text i, .qode-type1-gradient-left-to-right-text i:before, .qode-type1-gradient-left-to-right-text span', array(
                'background'              => '-webkit-linear-gradient(right top,'.bridge_qode_options()->getOptionValue('gradient_style1_end_color').', '.bridge_qode_options()->getOptionValue('gradient_style1_start_color').')',
                'color'                   => bridge_qode_options()->getOptionValue('gradient_style1_start_color'),
                '-webkit-background-clip' => 'text',
                '-webkit-text-fill-color' => 'transparent'
            ));

            echo bridge_qode_dynamic_css('.qode-type1-gradient-bottom-to-top-text i, .qode-type1-gradient-bottom-to-top-text i:before, .qode-type1-gradient-bottom-to-top-text span, .qode-type1-gradient-bottom-to-top-text span span', array(
                'background'              => '-webkit-linear-gradient(bottom,'.bridge_qode_options()->getOptionValue('gradient_style1_end_color').', '.bridge_qode_options()->getOptionValue('gradient_style1_start_color').')',
                'color'                   => bridge_qode_options()->getOptionValue('gradient_style1_start_color'),
                '-webkit-background-clip' => 'text',
                '-webkit-text-fill-color' => 'transparent'
            ));

            echo bridge_qode_dynamic_css('.qode-type1-gradient-bottom-to-top-text-hover:hover i, .qode-type1-gradient-bottom-to-top-text-hover:hover i:before, .qode-type1-gradient-bottom-to-top-text-hover:hover span, .qode-type1-gradient-bottom-to-top-text-hover:hover span span', array(
                'background'              => '-webkit-linear-gradient(bottom,'.bridge_qode_options()->getOptionValue('gradient_style1_end_color').', '.bridge_qode_options()->getOptionValue('gradient_style1_start_color').')',
                'color'                   => bridge_qode_options()->getOptionValue('gradient_style1_start_color'),
                '-webkit-background-clip' => 'text',
                '-webkit-text-fill-color' => 'transparent'
            ));

        }

    }

    add_action('bridge_qode_action_style_dynamic', 'bridge_qode_design_styles');
}

if(!function_exists('bridge_qode_custom_fonts_styles')) {

	function bridge_qode_custom_fonts_styles() {

		$custom_fonts = bridge_qode_options()->getOptionValue('qode_custom_fonts');
		if(!empty($custom_fonts)) {
			foreach ($custom_fonts as $custom_font) {
				$comma = '';
				if($custom_font['qode_custom_font_name'] != ''){
				?>
				@font-face {
				font-family: '<?php echo esc_attr($custom_font['qode_custom_font_name']) ?>';
				src: <?php if($custom_font['qode_custom_font_woff2'] != '') {
						echo "url(". esc_url($custom_font['qode_custom_font_woff2']) .") format('woff2')";
						$comma = ',';
					} ?>
				     <?php if($custom_font['qode_custom_font_woff'] != '') {
				     	echo esc_attr( $comma ) . "url(". esc_url($custom_font['qode_custom_font_woff']) .") format('woff')";
						$comma = ',';
					} ?>
					<?php if($custom_font['qode_custom_font_ttf'] != '') {
						echo esc_attr( $comma ) . "url(". esc_url($custom_font['qode_custom_font_ttf']) .") format('truetype')";
						$comma = ',';
					} ?>
					<?php if($custom_font['qode_custom_font_otf'] != '') {
						echo esc_attr( $comma ) . "url(". esc_url($custom_font['qode_custom_font_otf']) .") format('truetype')";
					} ?>
				;}
			<?php
				}
			}
		}

	}

	add_action('bridge_qode_action_style_dynamic', 'bridge_qode_custom_fonts_styles');
}