<?php
if(!function_exists('bridge_qode_option_has_value')) {
	function bridge_qode_option_has_value($name) {
		global $bridge_qode_options;
		global $bridge_qode_framework;
		if (array_key_exists($name, $bridge_qode_framework->qodeOptions->options)) {
			if (isset($bridge_qode_options[$name])) {
				return true;
			} else {
				return false;
			}
		} else {
			global $post;
			$value = get_post_meta($post->ID, $name, true);
			if (isset($value) && $value !== "") {
				return true;
			} else {
				return false;
			}

		}
	}
}

if(!function_exists('bridge_qode_option_get_value')) {
	function bridge_qode_option_get_value($name) {
		global $bridge_qode_options;
		global $bridge_qode_framework;

		if (array_key_exists($name, $bridge_qode_framework->qodeOptions->options)) {
			if (isset($bridge_qode_options[$name])) {
				return $bridge_qode_options[$name];
			} else {
				return $bridge_qode_framework->qodeOptions->getOption($name);
			}
		} else {
			global $post;

			if (is_object($post) && property_exists($post, 'ID')) {
				$value = get_post_meta($post->ID, $name, true);
				if (isset($value) && $value !== "") {
					return $value;
				} else {
					return $bridge_qode_framework->qodeMetaBoxes->getOption($name);
				}
			}
		}
	}
}

if(!function_exists('bridge_qode_option_get_uploaded_file_type')) {
	function bridge_qode_option_get_uploaded_file_type($value) {

		$id = bridge_qode_get_attachment_id_from_url($value);

		return wp_mime_type_icon( $id);

	}
}
if(!function_exists('bridge_qode_option_get_uploaded_file_title')) {
	function bridge_qode_option_get_uploaded_file_title($value) {

		$id = bridge_qode_get_attachment_id_from_url($value);

		return get_the_title($id);

	}
}
if(!function_exists('bridge_qode_get_attachment_thumb_url')) {
	function bridge_qode_get_attachment_thumb_url($attachment_url) {
		$attachment_id = bridge_qode_get_attachment_id_from_url($attachment_url);

		if (!empty($attachment_id)) {
			return wp_get_attachment_thumb_url($attachment_id);
		} else {
			return $attachment_url;
		}
	}
}
if(!function_exists('bridge_qode_get_theme_info_item')) {
	function bridge_qode_get_theme_info_item($item) {
		if($item !== '') {
			$current_theme = wp_get_theme();

			if($current_theme->parent()) {
				$current_theme = $current_theme->parent();
			}

			if($current_theme->exists() && $current_theme->get($item) != "") {
				return $current_theme->get($item);
			}
		}
	}
}

if(!function_exists('bridge_qode_get_native_fonts_list')) {
    /**
     * Function that returns array of native fonts
     * @return array
     */
    function bridge_qode_get_native_fonts_list(){

        return apply_filters('bridge_qode_filter_native_fonts_list', array(
            'Arial',
            'Arial Black',
            'Comic Sans MS',
            'Courier New',
            'Georgia',
            'Impact',
            'Lucida Console',
            'Lucida Sans Unicode',
            'Palatino Linotype',
            'Tahoma',
            'Times New Roman',
            'Trebuchet MS',
            'Verdana'
        ));
    }
}

if(!function_exists('bridge_qode_get_custom_fonts_list')) {
    /**
     * Function that returns array of custom fonts
     * @return array
     */
    function bridge_qode_get_custom_fonts_list(){
		$custom_fonts_list = array();
		$custom_fonts = bridge_qode_options()->getOptionValue('qode_custom_fonts');
		if(!empty($custom_fonts)) {
			foreach ($custom_fonts as $custom_font) {

				if($custom_font['qode_custom_font_name'] != '') {
					$custom_fonts_list[] = $custom_font['qode_custom_font_name'];
				}
			}

		}

		return $custom_fonts_list;
    }
}

if(!function_exists('bridge_qode_get_native_fonts_array')) {
    /**
     * Function that returns formatted array of native fonts
     *
     * @uses bridge_qode_get_native_fonts_list()
     * @return array
     */
    function bridge_qode_get_native_fonts_array(){
        $native_fonts_list = bridge_qode_get_native_fonts_list();
        $native_font_index = 0;
        $native_fonts_array = array();

        foreach($native_fonts_list as $native_font){
            $native_fonts_array[$native_font_index] = array('family' => $native_font);
            $native_font_index++;
        }

        return $native_fonts_array;
    }
}

if(!function_exists('bridge_qode_get_custom_fonts_array')) {
    /**
     * Function that returns formatted array of native fonts
     *
     * @uses bridge_qode_get_custom_fonts_array()
     * @return array
     */
    function bridge_qode_get_custom_fonts_array(){
        $custom_fonts_list = bridge_qode_get_custom_fonts_list();
        $custom_font_index = 0;
        $custom_fonts_array = array();

        foreach($custom_fonts_list as $custom_font){
			$custom_fonts_array[$custom_font_index] = array('family' => $custom_font);
            $custom_font_index++;
        }

        return $custom_fonts_array;
    }
}

if(!function_exists('bridge_qode_is_native_font')) {
    /**
     * Function that checks if given font is native font
     * @param $font_family string
     * @return bool
     */
    function bridge_qode_is_native_font($font_family) {
        return  in_array(str_replace('+', ' ', $font_family), bridge_qode_get_native_fonts_list());
    }
}

if(!function_exists('bridge_qode_is_custom_font')) {
	/**
	 * Function that checks if given font is custom font
	 * @param $font_family string
	 * @return bool
	 */
	function bridge_qode_is_custom_font($font_family) {
		return  in_array(str_replace('+', ' ', $font_family), bridge_qode_get_custom_fonts_list());
	}
}

if(!function_exists('bridge_qode_merge_fonts')) {
    /**
     * Function that merge google and native fonts
     *
     * @uses bridge_qode_get_native_fonts_array()
     * @return array
     */
    function bridge_qode_merge_fonts() {
        global $bridge_qode_font_arrays;
        $native_fonts = bridge_qode_get_native_fonts_array();
        $custom_fonts = bridge_qode_get_custom_fonts_array();

        if(is_array($native_fonts) && count($native_fonts)){
            $bridge_qode_font_arrays = array_merge($native_fonts, $bridge_qode_font_arrays);
        }
        if(is_array($custom_fonts) && count($custom_fonts)){
            $bridge_qode_font_arrays = array_merge($custom_fonts, $bridge_qode_font_arrays);
        }
    }

    add_action('admin_init', 'bridge_qode_merge_fonts');
}

if(!function_exists('bridge_qode_resize_image')) {
    /**
     * Functin that generates custom thumbnail for given attachment
     * @param null $attach_id id of attachment
     * @param null $attach_url URL of attachment
     * @param int $width desired height of custom thumbnail
     * @param int $height desired width of custom thumbnail
     * @param bool $crop whether to crop image or not
     * @return array returns array containing img_url, width and height
     *
     * @see bridge_qode_get_attachment_id_from_url()
     * @see get_attached_file()
     * @see wp_get_attachment_url()
     * @see wp_get_image_editor()
     */
    function bridge_qode_resize_image($attach_id = null, $attach_url = null, $width = null, $height = null, $crop = true) {
        $return_array = array();

        //is attachment id empty?
        if(empty($attach_id) && $attach_url !== '') {
            //get attachment id from url
            $attach_id = bridge_qode_get_attachment_id_from_url($attach_url);
        }

        if(!empty($attach_id) && (isset($width) && isset($height))) {

            //get file path of the attachment
            $img_path = get_attached_file($attach_id);

            //get attachment url
            $img_url  = wp_get_attachment_url($attach_id);

            //break down img path to array so we can use it's components in building thumbnail path
            $img_path_array = pathinfo($img_path);
            //build thumbnail path
            $new_img_path = $img_path_array['dirname'].'/'.$img_path_array['filename'].'-'.$width.'x'.$height.'.'.$img_path_array['extension'];

            //build thumbnail url
            $new_img_url = str_replace($img_path_array['filename'], $img_path_array['filename'].'-'.$width.'x'.$height, $img_url);

            //check if thumbnail exists by it's path
            if(!file_exists($new_img_path)) {
                //get image manipulation object
                $image_object = wp_get_image_editor($img_path);

                if(!is_wp_error($image_object)) {
                    //resize image and save it new to path
                    $image_object->resize($width, $height, $crop);
                    $image_object->save($new_img_path);

                    //get sizes of newly created thumbnail.
                    ///we don't use $width and $height because those might differ from end result based on $crop parameter
                    $image_sizes = $image_object->get_size();

                    $width = $image_sizes['width'];
                    $height = $image_sizes['height'];
                }
            }

            //generate data to be returned
            $return_array = array(
                'img_url' => $new_img_url,
                'img_width' => $width,
                'img_height' => $height
            );
        }

        //attachment wasn't found, probably because it comes from external source
        elseif($attach_url !== '' && (isset($width) && isset($height))) {
            //generate data to be returned
            $return_array = array(
                'img_url' => $attach_url,
                'img_width' => $width,
                'img_height' => $height
            );
        }

        return $return_array;
    }
}

if(!function_exists('bridge_qode_generate_thumbnail')) {
    /**
     * Generates thumbnail img tag. It calls qode_resize_image function which resizes img on the fly
     * @param null $attach_id attachment id
     * @param null $attach_url attachment URL
     * @param  int$width width of thumbnail
     * @param int $height height of thumbnail
     * @param bool $crop whether to crop thumbnail or not
     * @return string generated img tag
     *
     * @see bridge_qode_resize_image()
     * @see bridge_qode_get_attachment_id_from_url()
     */
    function bridge_qode_generate_thumbnail($attach_id = null, $attach_url = null, $width = null, $height = null, $crop = true) {
        //is attachment id empty?
        if(empty($attach_id)) {
            //get attachment id from attachment url
            $attach_id = bridge_qode_get_attachment_id_from_url($attach_url);
        }

        if(!empty($attach_id) || !empty($attach_url)) {
            $img_info = bridge_qode_resize_image($attach_id, $attach_url, $width, $height, $crop);
            $img_alt = !empty($attach_id) ? get_post_meta($attach_id, '_wp_attachment_image_alt', true) : '';

            if(is_array($img_info) && count($img_info)) {
                return '<img src="'.$img_info['img_url'].'" alt="'.$img_alt.'" width="'.$img_info['img_width'].'" height="'.$img_info['img_height'].'" />';
            }
        }

        return '';
    }
}

if(!function_exists('bridge_qode_inline_style')) {
    /**
     * Function that echoes generated style attribute
     * @param $value string | array attribute value
     *
     * @see bridge_qode_get_inline_style()
     */
    function bridge_qode_inline_style($value) {
        echo bridge_qode_get_inline_style($value);
    }
}

if(!function_exists('bridge_qode_get_inline_style')) {
    /**
     * Function that generates style attribute and returns generated string
     * @param $value string | array value of style attribute
     * @return string generated style attribute
     *
     * @see bridge_qode_get_inline_style()
     */
    function bridge_qode_get_inline_style($value) {
        return bridge_qode_get_inline_attr($value, 'style', ';');
    }
}

if(!function_exists('bridge_qode_class_attribute')) {
    /**
     * Function that echoes class attribute
     * @param $value string value of class attribute
     *
     * @see bridge_qode_get_class_attribute()
     */
    function bridge_qode_class_attribute($value) {
        echo bridge_qode_get_class_attribute($value);
    }
}

if(!function_exists('bridge_qode_get_class_attribute')) {
    /**
     * Function that returns generated class attribute
     * @param $value string value of class attribute
     * @return string generated class attribute
     *
     * @see bridge_qode_get_inline_attr()
     */
    function bridge_qode_get_class_attribute($value) {
        return bridge_qode_get_inline_attr($value, 'class');
    }
}

if(!function_exists('bridge_qode_get_inline_attr')) {
    /**
     * Function that generates html attribute
     * @param $value string | array value of html attribute
     * @param $attr string name of html attribute to generate
     * @param $glue string glue with which to implode $attr. Used only when $attr is array
     * @return string generated html attribute
     */
    function bridge_qode_get_inline_attr($value, $attr, $glue = ' ') {
        if(!empty($value)) {

            if(is_array($value) && count($value)) {
                $properties = implode($glue, $value);
            } elseif($value !== '') {
                $properties = $value;
            }

            return $attr.'="'.esc_attr($properties).'"';
        }

        return '';
    }
}

if(!function_exists('bridge_qode_inline_attr')) {
    /**
     * Function that generates html attribute
     *
     * @param $value string | array value of html attribute
     * @param $attr string name of html attribute to generate
     * @param $glue string glue with which to implode $attr. Used only when $attr is array
     *
     * @return string generated html attribute
     */
    function bridge_qode_inline_attr($value, $attr, $glue = '') {
        echo bridge_qode_get_inline_attr($value, $attr, $glue);
    }
}

if(!function_exists('bridge_qode_get_inline_attrs')) {
	/**
	 * Generate multiple inline attributes
	 *
	 * @param $attrs
	 *
	 * @return string
	 */
	function bridge_qode_get_inline_attrs($attrs) {
		$output = '';

		if(is_array($attrs) && count($attrs)) {
			foreach($attrs as $attr => $value) {
				$output .= ' '.bridge_qode_get_inline_attr($value, $attr);
			}
		}

		$output = ltrim($output);

		return $output;
	}
}

if(!function_exists('bridge_qode_filter_px')) {
    /**
     * Removes px in provided value if value ends with px
     * @param $value
     * @return string
     */
    function bridge_qode_filter_px($value) {
        if($value !== '' && bridge_qode_string_ends_with($value, 'px')) {
            $value = substr($value, 0, strpos($value, 'px'));
        }

        return $value;
    }
}

if(!function_exists('bridge_qode_string_starts_with')) {
    /**
     * Checks if $haystack starts with $needle and returns proper bool value
     * @param $haystack string to check
     * @param $needle string with which $haystack needs to start
     * @return bool
     */
    function bridge_qode_string_starts_with($haystack, $needle) {
        if($haystack !== '' && $needle !== '') {
            return (substr($haystack, 0, strlen($needle)) == $needle);
        }

        return true;
    }
}

if(!function_exists('bridge_qode_string_ends_with')) {
    /**
     * Checks if $haystack ends with $needle and returns proper bool value
     * @param $haystack string to check
     * @param $needle string with which $haystack needs to end
     * @return bool
     */
    function bridge_qode_string_ends_with($haystack, $needle) {
        if($haystack !== '' && $needle !== '') {
            return (substr($haystack, -strlen($needle), strlen($needle)) == $needle);
        }

        return true;
    }
}

if(!function_exists('bridge_qode_icon_collections')) {
    /**
     * Returns instance of QodeIconCollections class
     *
     * @return BridgeQodeIconCollections
     */
    function bridge_qode_icon_collections() {
        return BridgeQodeIconCollections::getInstance();
    }
}

if(!function_exists('bridge_qode_kses_img')) {
    /**
     * Function that does escaping of img html.
     * It uses wp_kses function with predefined attributes array.
     * Should be used for escaping img tags in html.
     * Defines bridge_qode_filter_filter_kses_img_atts filter that can be used for changing allowed html attributes
     *
     * @see wp_kses()
     *
     * @param $content string string to escape
     * @return string escaped output
     */
    function bridge_qode_kses_img($content) {
        $img_atts = apply_filters('bridge_qode_filter_kses_img_atts', array(
            'src' => true,
            'alt' => true,
            'height' => true,
            'width' => true,
            'class' => true,
            'id' => true,
            'title' => true
        ));

        return wp_kses($content, array(
            'img' => $img_atts
        ));
    }
}

if(!function_exists('bridge_qode_get_template_part')) {
    /**
     * Loads template part with parameters. If file with slug parameter added exists it will load that file, else it will load file without slug added.
     * Child theme friendly function
     *
     * @param string $template name of the template to load without extension
     * @param string $slug
     * @param array $params array of parameters to pass to template
     */
    function bridge_qode_get_template_part($template, $slug = '', $params = array(), $plugin = false) {
        if(is_array($params) && count($params)) {
            extract($params);
        }

        $templates = array();

        if($template !== '') {
            if($slug !== '') {
                $templates[] = "{$template}-{$slug}.php";
            }

            $templates[] = $template.'.php';
        }

        $located = bridge_qode_find_template_path($templates, $plugin);

        if($located) {
            include($located);
        }
    }
}
if(!function_exists('bridge_qode_get_module_template_part')) {
	/**
	 * Loads module template part.
	 *
	 * @param string $template name of the template to load
	 * @param string $module name of the module folder
	 * @param string $slug
	 * @param array $params array of parameters to pass to template
	 *
	 * @see bridge_qode_get_template_part()
	 */
	function bridge_qode_get_module_template_part($template, $module, $slug = '', $params = array()) {
		$template_path = 'framework/modules/'.$module;

		bridge_qode_get_template_part($template_path.'/'.$template, $slug, $params);
	}
}
if(!function_exists('bridge_qode_return_template_part')) {
	/**
	 * Loads template part with parameters. If file with slug parameter added exists it will load that file, else it will load file without slug added.
	 * Child theme friendly function
	 *
	 * @param string $template name of the template to load without extension
	 * @param string $slug
	 * @param array $params array of parameters to pass to template
	 *
	 * @return html
	 * @see bridge_qode_get_template_part()
	 */
	function bridge_qode_return_template_part($template, $slug = '', $params = array()) {
		if(is_array($params) && count($params)) {
			extract($params);
		}
		$html          = '';
		$templates = array();

		if($template !== '') {
			if($slug !== '') {
				$templates[] = "{$template}-{$slug}.php";
			}

			$templates[] = $template.'.php';
		}

		$located = bridge_qode_find_template_path($templates);

		if($located) {
			ob_start();
			include($located);
			$html = ob_get_clean();
		}

		return $html;
	}
}
if(!function_exists('bridge_qode_return_module_template_part')) {
	/**
	 * Loads module template part.
	 *
	 * @param string $template name of the template to load
	 * @param string $module name of the module folder
	 * @param string $slug
	 * @param array $params array of parameters to pass to template
	 *
	 * @return html
	 * @see bridge_qode_get_template_part()
	 */
	function bridge_qode_return_module_template_part($template, $module, $slug = '', $params = array()) {
		$template_path = 'framework/modules/'.$module;

		return bridge_qode_return_template_part($template_path.'/'.$template, $slug, $params);
	}
}
if(!function_exists('bridge_qode_get_shortcode_template_part')) {
    /**
     * Loads module template part.
     *
     * @param string $template name of the template to load
     * @param string $shortcode name of the shortcode folder
     * @param string $slug
     * @param array $params array of parameters to pass to template
     *
     * @return html
     * @see bridge_qode_get_template_part()
     */
    function bridge_qode_get_shortcode_template_part($template, $shortcode, $slug = '', $params = array()) {

        //HTML Content from template
        $html          = '';
        $template_path = 'includes/shortcodes/shortcode-elements/'.$shortcode;

        $temp = $template_path.'/'.$template;

        if(is_array($params) && count($params)) {
            extract($params);
        }

        $templates = array();

        if($temp !== '') {
            if($slug !== '') {
                $templates[] = "{$temp}-{$slug}.php";
            }

            $templates[] = $temp.'.php';
        }
        $located = bridge_qode_find_template_path($templates);
        if($located) {
            ob_start();
            include($located);
            $html = ob_get_clean();
        }

        return $html;
    }
}

if(!function_exists('bridge_qode_find_template_path')) {
    /**
     * Find template path and return it
     *
     * @param $template_names
     *
     * @return string
     */
    function bridge_qode_find_template_path($template_names, $plugin = false) {
        $located = '';
        foreach((array) $template_names as $template_name) {

            if(!$template_name) {
                continue;
            }
            if(file_exists(get_stylesheet_directory().'/'.$template_name)) {
                $located = get_stylesheet_directory().'/'.$template_name;
                break;
            } elseif(file_exists(get_template_directory().'/'.$template_name)) {
                $located = get_template_directory().'/'.$template_name;
                break;
            }elseif ( $plugin && file_exists( $template_name ) ) {

				$located = $template_name;
				break;
			}
        }

        return $located;



    }
}

if(!function_exists('bridge_qode_dynamic_css')) {
    /**
     * Generates css based on selector and rules that are provided
     *
     * @param array|string $selector selector for which to generate styles
     * @param array $rules associative array of rules.
     *
     * Example of usage: if you want to generate this css:
     *      header { width: 100%; }
     * function call should look like this: qode_dynamic_css('header', array('width' => '100%'));
     *
     * @return string
     */
    function bridge_qode_dynamic_css($selector, $rules) {
        $output = '';
        //check if selector and rules are valid data
        if(!empty($selector) && (is_array($rules) && count($rules))) {

            if(is_array($selector) && count($selector)) {
                $output .= implode(', ', $selector);
            } else {
                $output .= $selector;
            }

            $output .= ' { ';
            foreach($rules as $prop => $value) {
                if($prop !== '') {
                    $output .= $prop.': '.esc_attr($value).';';
                }
            }

            $output .= '}'."\n\n";
        }

        return $output;
    }
}

if(!function_exists('bridge_qode_execute_shortcode')) {
    /**
     * @param $shortcode_tag - shortcode base
     * @param $atts - shortcode attributes
     * @param null $content - shortcode content
     *
     * @return mixed|string
     */
    function bridge_qode_execute_shortcode($shortcode_tag, $atts, $content = null) {
        global $shortcode_tags;

        if(!isset($shortcode_tags[$shortcode_tag])) {
            return esc_html__('Shortcode doesn\'t exist', 'bridge');
        }

        if(is_array($shortcode_tags[$shortcode_tag])) {
            $shortcode_array = $shortcode_tags[$shortcode_tag];

            return call_user_func(array(
                $shortcode_array[0],
                $shortcode_array[1]
            ), $atts, $content, $shortcode_tag);
        }

        return call_user_func($shortcode_tags[$shortcode_tag], $atts, $content, $shortcode_tag);
    }
}

if(!function_exists('bridge_qode_replace_newline')) {
	function bridge_qode_replace_newline($text ) {
		/**
		 * @param $text
		 *
		 * @return string
		 */
		$text = (string) $text;
		$text = str_replace( array( "\r", "\n" ), '', $text );
		return trim( $text );
	}
}

if ( ! function_exists('bridge_qode_get_custom_sidebars') ) {
	/**
	 * Function that returns all custom made sidebars.
	 *
	 * @uses get_option()
	 * @return array array of custom made sidebars where key and value are sidebar name
	 */
	function bridge_qode_get_custom_sidebars() {
		$custom_sidebars = get_option( 'qode_sidebars' );
		$formatted_array             = array();

		if ( is_array( $custom_sidebars ) && count( $custom_sidebars ) ) {
			foreach ( $custom_sidebars as $custom_sidebar ) {
				$formatted_array[ sanitize_title( $custom_sidebar ) ] = $custom_sidebar;
			}
		}

		return $formatted_array;
	}
}

if( ! function_exists('bridge_qode_ajax_status') ) {

	/**
	 * Function that return status from ajax functions
	 */

	function bridge_qode_ajax_status($status, $message, $data = NULL) {

		$response = array (
			'status' => $status,
			'message' => $message,
			'data' => $data
		);
		$output = json_encode($response);
		exit($output);
	}

}

if(!function_exists('bridge_qode_attachment_image_additional_fields')) {
	/**
	 * Add Attachment Image Sizes option
	 *
	 * @param $form_fields array, fields to include in attachment form
	 * @param $post object, attachment record in database
	 *
	 * @return mixed
	 */
	function bridge_qode_attachment_image_additional_fields($form_fields, $post) {

		// ADDING IMAGE LINK FILED - START //

		$form_fields['attachment-image-custom-link'] = array(
			'label' => 'Image Link',
			'input' => 'text',
			'application' => 'image',
			'exclusions'  => array( 'audio', 'video' ),
			'value' => get_post_meta($post->ID, 'attachment_image_custom_link', true)
		);

		// ADDING IMAGE LINK FILED - END //

		// ADDING IMAGE TARGET FILED - START //

		$options_image_target = array(
			'_self' 	=> esc_html__('Same Window', 'bridge'),
			'_blank'	=> esc_html__('New Window', 'bridge'),
		);

		$html_image_target     = '';
		$selected_image_target = get_post_meta($post->ID, 'attachment_image_link_target', true);

		$html_image_target .= '<select name="attachments['.$post->ID.'][attachment-image-link-target]" class="attachment-image-link-target" data-setting="attachment-image-link-target">';
		// Browse and add the options
		foreach($options_image_target as $key => $value) {
			if($key == $selected_image_target) {
				$html_image_target .= '<option value="'.$key.'" selected>'.$value.'</option>';
			} else {
				$html_image_target .= '<option value="'.$key.'">'.$value.'</option>';
			}
		}

		$html_image_target .= '</select>';

		$form_fields['attachment-image-link-target'] = array(
			'label' => 'Image Link Target',
			'input' => 'html',
			'html'  => $html_image_target,
			'application' => 'image',
			'exclusions'  => array( 'audio', 'video' ),
			'value' => get_post_meta($post->ID, 'attachment_image_link_target', true)
		);

		// ADDING IMAGE TARGET FILED - END //

		return $form_fields;
	}

	add_filter('attachment_fields_to_edit', 'bridge_qode_attachment_image_additional_fields', 10, 2);

}

if(!function_exists('bridge_qode_attachment_image_additional_fields_save')) {
	/**
	 * Save values of Attachment Image sizes in media uploader
	 *
	 * @param $post array, the post data for database
	 * @param $attachment array, attachment fields from $_POST form
	 *
	 * @return mixed
	 */
	function bridge_qode_attachment_image_additional_fields_save($post, $attachment) {


		if(isset($attachment['attachment-image-custom-link'])) {
			update_post_meta($post['ID'], 'attachment_image_custom_link', $attachment['attachment-image-custom-link']);
		}

		if(isset($attachment['attachment-image-link-target'])) {
			update_post_meta($post['ID'], 'attachment_image_link_target', $attachment['attachment-image-link-target']);
		}


		return $post;

	}

	add_filter('attachment_fields_to_save', 'bridge_qode_attachment_image_additional_fields_save', 10, 2);

}


if ( ! function_exists('bridge_qode_show_comments') ) {
	/**
	 * Functions which check are comments enabled on page
	 *
	 * @return boolean
	 */
	function bridge_qode_show_comments() {
		$comments = false;
		$comments = apply_filters( 'bridge_qode_filter_post_type_comments', $comments );

		return $comments;
	}
}

if ( ! function_exists('bridge_qode_get_meta_field_intersect') ) {
	/**
	 * @param $name
	 * @param $post_id
	 *
	 * @return bool|mixed|void
	 */
	function bridge_qode_get_meta_field_intersect($name, $post_id = '' ) {
		$post_id = ! empty( $post_id ) ? $post_id : get_the_ID();

		if ( bridge_qode_is_woocommerce_installed() && bridge_qode_is_woocommerce_shop() ) {
			$post_id = bridge_qode_get_woo_shop_page_id();
		}

		$value = bridge_qode_options()->getOptionValue( $name );

		if ( $post_id !== - 1 ) {
			$meta_field = get_post_meta( $post_id, $name . '_meta', true );
			if ( $meta_field !== '' && $meta_field !== false ) {
				$value = $meta_field;
			}
		}

		$value = apply_filters( 'bridge_qode_filter_meta_field_intersect_' . $name, $value );

		return $value;
	}
}

if ( ! function_exists('bridge_qode_add_custom_upload_mimes') ) {

	function bridge_qode_add_custom_upload_mimes($existing_mimes) {

		$existing_mimes['ttf'] = 'font/ttf';
		$existing_mimes['otf'] = 'font/otf';
		$existing_mimes['woff'] = 'font/woff';
		$existing_mimes['woff2'] = 'font/woff2';

		return $existing_mimes;
	}
	add_filter('upload_mimes', 'bridge_qode_add_custom_upload_mimes');
}

if ( ! function_exists( 'bridge_qode_return_global_options' ) ) {
	function bridge_qode_return_global_options() {
		global $bridge_qode_options;

		return $bridge_qode_options;
	}
}

if ( ! function_exists( 'bridge_qode_get_search_page_template' ) ) {
    function bridge_qode_get_search_page_template( $template, $module, $slug = '', $params = array(), $plugin = false ) {
        $root          = $plugin ? apply_filters( 'bridge_qode_filter_edit_module_template_path', $root = 'framework/modules/' ) : 'framework/modules/';
        $template_path = $root . $module;

        bridge_qode_get_template_part( $template_path . '/' . $template, $slug, $params, $plugin );
    }
}