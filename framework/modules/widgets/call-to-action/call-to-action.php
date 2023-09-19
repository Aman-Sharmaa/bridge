<?php

class BridgeQodeCallToAction extends WP_Widget {
    public function __construct() {
		parent::__construct(
	 		'call_to_action_widget', // Base ID
			esc_html__('Call To Action', 'bridge'), // Name
			array( 'description' => esc_html__( 'Call to Action Widget', 'bridge' ), ) // Args
		);
	}

    public function widget($args, $instance) {
        extract($args);

        //prepare variables
        $content        = '';
        $params         = '';
        $content_key    = 'text';

        //is call to action text set?
        if(array_key_exists($content_key, $instance)) {
            //set shortcode's content and remove it from instance array
            $content = $instance[$content_key];
            unset($instance[$content_key]);
        }

        //is instance empty?
        if(is_array($instance) && count($instance)) {
            //generate shortcode params
            foreach($instance as $key => $value) {
                $params .= " $key = '$value' ";
            }
        }

        //finally call the shortcode
        echo do_shortcode("[action $params]".$content."[/action]");
	}

 	public function form($instance) {

        //set widget values
        $type                                       = isset( $instance['type'] ) ? esc_attr( $instance['type'] ) : '';
        $full_width                                 = isset( $instance['full_width'] ) ? esc_attr( $instance['full_width'] ) : '';
        $content_in_grid                            = isset( $instance['content_in_grid'] ) ? esc_attr( $instance['content_in_grid'] ) : '';
        $text                                       = isset( $instance['text'] ) ? esc_attr( $instance['text'] ) : '';
        $text_color                                 = isset( $instance['text_color'] ) ? esc_attr( $instance['text_color'] ) : '';
        $text_size                                  = isset( $instance['text_size'] ) ? esc_attr( $instance['text_size'] ) : '';
        $text_letter_spacing                        = isset( $instance['text_letter_spacing'] ) ? esc_attr( $instance['text_letter_spacing'] ) : '';
        $text_font_weight                           = isset( $instance['text_font_weight'] ) ? esc_attr( $instance['text_font_weight'] ) : '';
        $background_color                           = isset( $instance['background_color'] ) ? esc_attr( $instance['background_color'] ) : '';
        $border_color                               = isset( $instance['border_color'] ) ? esc_attr( $instance['border_color'] ) : '';
        $padding_top                                = isset( $instance['padding_top'] ) ? esc_attr( $instance['padding_top'] ) : '';
        $padding_bottom                             = isset( $instance['padding_bottom'] ) ? esc_attr( $instance['padding_bottom'] ) : '';
        $show_button                                = isset( $instance['show_button'] ) ? esc_attr( $instance['show_button'] ) : '';
        $button_link                                = isset( $instance['button_link'] ) ? esc_attr( $instance['button_link'] ) : '';
        $button_text                                = isset( $instance['button_text'] ) ? esc_attr( $instance['button_text'] ) : '';
        $button_target                              = isset( $instance['button_target'] ) ? esc_attr( $instance['button_target'] ) : '';
        $button_text_color                          = isset( $instance['button_text_color'] ) ? esc_attr( $instance['button_text_color'] ) : '';
        $button_hover_text_color                    = isset( $instance['button_hover_text_color'] ) ? esc_attr( $instance['button_hover_text_color'] ) : '';
        $button_background_color                    = isset( $instance['button_background_color'] ) ? esc_attr( $instance['button_background_color'] ) : '';
        $button_hover_background_color              = isset( $instance['button_hover_background_color'] ) ? esc_attr( $instance['button_hover_background_color'] ) : '';
        $button_border_color                        = isset( $instance['button_border_color'] ) ? esc_attr( $instance['button_border_color'] ) : '';
        $button_hover_border_color                  = isset( $instance['button_hover_border_color'] ) ? esc_attr( $instance['button_hover_border_color'] ) : '';

		$font_weight_array = array(
			"" => "Default",
			"100" => "Thin 100",
			"200" => "Extra-Light 200",
			"300" => "Light 300",
			"400" => "Regular 400",
			"500" => "Medium 500",
			"600" => "Semi-Bold 600",
			"700" => "Bold 700",
			"800" => "Extra-Bold 800",
			"900" => "Ultra-Bold 900"
		);

        ?>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id( 'full_width' )); ?>"><?php esc_html_e( 'Full Width:','bridge'); ?></label>
            <select id="<?php echo esc_attr($this->get_field_id( 'full_width' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'full_width' )); ?>">
                <option value="yes" <?php if(esc_attr($full_width) == "yes"){echo 'selected="selected"';} ?>><?php esc_html_e('Yes', 'bridge') ?></option>
                <option value="no" <?php if(esc_attr($full_width) == "no"){echo 'selected="selected"';} ?>><?php esc_html_e('No', 'bridge') ?></option>
            </select>
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id( 'content_in_grid' )); ?>"><?php esc_html_e( 'Content In Grid:','bridge'); ?></label>
            <select id="<?php echo esc_attr($this->get_field_id( 'content_in_grid' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'content_in_grid' )); ?>">
                <option value="yes" <?php if(esc_attr($content_in_grid) == "yes"){echo 'selected="selected"';} ?>><?php esc_html_e('Yes', 'bridge') ?></option>
                <option value="no" <?php if(esc_attr($content_in_grid) == "no"){echo 'selected="selected"';} ?>><?php esc_html_e('No', 'bridge') ?></option>
            </select>
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id( 'text' )); ?>"><?php esc_html_e( 'Text:','bridge'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id( 'text' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'text' )); ?>" cols="5" rows="5"><?php echo esc_attr( $text ); ?></textarea>
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id( 'text_color' )); ?>"><?php esc_html_e( 'Text Color:','bridge' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'text_color' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'text_color' )); ?>" type="text" value="<?php echo esc_attr( $text_color ); ?>" />
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id( 'text_size' )); ?>"><?php esc_html_e( 'Text Size:','bridge' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'text_size' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'text_size' )); ?>" type="text" value="<?php echo esc_attr( $text_size ); ?>" />
        </p>

		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'text_letter_spacing' )); ?>"><?php esc_html_e( 'Text Letter Spacing:','bridge' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'text_letter_spacing' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'text_letter_spacing' )); ?>" type="text" value="<?php echo esc_attr( $text_letter_spacing ); ?>" />
		</p>

		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'text_font_weight' )); ?>"><?php esc_html_e( 'Text Font Weight:','bridge'); ?></label>
			<select id="<?php echo esc_attr($this->get_field_id( 'text_font_weight' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'text_font_weight' )); ?>">
				<?php foreach($font_weight_array as $font_weight_val => $font_weight_label) { ?>
					<option value="<?php echo esc_attr($font_weight_val); ?>" <?php if(esc_attr($text_font_weight) == $font_weight_val){echo 'selected="selected"';} ?>><?php echo esc_attr($font_weight_label); ?></option>
				<?php } ?>
			</select>
		</p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id( 'type' )); ?>"><?php esc_html_e( 'Type:','bridge'); ?></label>
            <select id="<?php echo esc_attr($this->get_field_id( 'type' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'type' )); ?>">
                <option value="normal" <?php if(esc_attr($type) == "normal"){echo 'selected="selected"';} ?>><?php esc_html_e('Normal', 'bridge'); ?></option>
                <option value="with_icon" <?php if(esc_attr($type) == "with_icon"){echo 'selected="selected"';} ?>><?php esc_html_e('With Icon', 'bridge'); ?></option>
            </select>
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id( 'background_color' )); ?>"><?php esc_html_e( 'Background Color:','bridge' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'background_color' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'background_color' )); ?>" type="text" value="<?php echo esc_attr( $background_color ); ?>" />
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id( 'border_color' )); ?>"><?php esc_html_e( 'Border Color:','bridge' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'border_color' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'border_color' )); ?>" type="text" value="<?php echo esc_attr( $border_color ); ?>" />
        </p>

		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'padding_top' )); ?>"><?php esc_html_e( 'Padding Top (px):','bridge' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'padding_top' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'padding_top' )); ?>" type="text" value="<?php echo esc_attr( $padding_top ); ?>" />
		</p>

		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'padding_bottom' )); ?>"><?php esc_html_e( 'Padding Bottom (px):','bridge' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'padding_bottom' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'padding_bottom' )); ?>" type="text" value="<?php echo esc_attr( $padding_bottom ); ?>" />
		</p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id( 'show_button' )); ?>"><?php esc_html_e( 'Show Button:','bridge'); ?></label>
            <select id="<?php echo esc_attr($this->get_field_id( 'show_button' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'show_button' )); ?>">
                <option value="yes" <?php if(esc_attr($show_button) == "yes"){echo 'selected="selected"';} ?>><?php esc_html_e('Yes', 'bridge') ?></option>
                <option value="no" <?php if(esc_attr($show_button) == "no"){echo 'selected="selected"';} ?>><?php esc_html_e('No', 'bridge') ?></option>
            </select>
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id( 'button_link' )); ?>"><?php esc_html_e( 'Button Link:','bridge' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'button_link' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'button_link' )); ?>" type="text" value="<?php echo esc_attr( $button_link ); ?>" />
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id( 'button_text' )); ?>"><?php esc_html_e( 'Button Text:','bridge' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'button_text' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'button_text' )); ?>" type="text" value="<?php echo esc_attr( $button_text ); ?>" />
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id( 'button_target' )); ?>"><?php esc_html_e( 'Button Target:','bridge' ); ?></label>
            <select id="<?php echo esc_attr($this->get_field_id( 'button_target' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'button_target' )); ?>">
                <option value="_blank" <?php if(esc_attr($button_target) == "_blank"){echo 'selected="selected"';} ?>><?php esc_html_e('Blank', 'bridge'); ?></option>
                <option value="_self" <?php if(esc_attr($button_target) == "_self"){echo 'selected="selected"';} ?>><?php esc_html_e('Self', 'bridge'); ?></option>
                <option value="_top" <?php if(esc_attr($button_target) == "_top"){echo 'selected="selected"';} ?>><?php esc_html_e('Top', 'bridge'); ?></option>
                <option value="_parent" <?php if(esc_attr($button_target) == "_parent"){echo 'selected="selected"';} ?>><?php esc_html_e('Parent', 'bridge'); ?></option>
            </select>
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id( 'button_text_color' )); ?>"><?php esc_html_e( 'Button Text Color:','bridge' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'button_text_color' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'button_text_color' )); ?>" type="text" value="<?php echo esc_attr( $button_text_color ); ?>" />
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id( 'button_hover_text_color' )); ?>"><?php esc_html_e( 'Button Hover Text Color:','bridge' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'button_hover_text_color' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'button_hover_text_color' )); ?>" type="text" value="<?php echo esc_attr( $button_hover_text_color ); ?>" />
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id( 'button_background_color' )); ?>"><?php esc_html_e( 'Button Background Color:','bridge' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'button_background_color' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'button_background_color' )); ?>" type="text" value="<?php echo esc_attr( $button_background_color ); ?>" />
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id( 'button_hover_background_color' )); ?>"><?php esc_html_e( 'Button Hover Background Color:','bridge' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'button_hover_background_color' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'button_hover_background_color' )); ?>" type="text" value="<?php echo esc_attr( $button_hover_background_color ); ?>" />
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id( 'button_border_color' )); ?>"><?php esc_html_e( 'Button Border Color:','bridge' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'button_border_color' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'button_border_color' )); ?>" type="text" value="<?php echo esc_attr( $button_border_color ); ?>" />
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id( 'button_hover_border_color' )); ?>"><?php esc_html_e( 'Button Hover Border Color:','bridge' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'button_hover_border_color' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'button_hover_border_color' )); ?>" type="text" value="<?php echo esc_attr( $button_hover_border_color ); ?>" />
        </p>

		<?php
	}

	public function update($new_instance, $old_instance) {
		// processes widget options to be saved
        $instance = array();

		$instance['type']                                    = $new_instance['type'];
		$instance['full_width']                              = $new_instance['full_width'];
        $instance['content_in_grid']                         = $new_instance['content_in_grid'];
        $instance['text']                                    = strip_tags($new_instance['text']);
        $instance['text_color']                              = $new_instance['text_color'];
        $instance['text_size']                               = $new_instance['text_size'];
        $instance['text_letter_spacing']                    = $new_instance['text_letter_spacing'];
        $instance['text_font_weight']                        = $new_instance['text_font_weight'];
        $instance['background_color']                        = $new_instance['background_color'];
        $instance['border_color']                        	 = $new_instance['border_color'];
        $instance['padding_top']                        	 = $new_instance['padding_top'];
        $instance['padding_bottom']                        	 = $new_instance['padding_bottom'];
        $instance['show_button']                             = $new_instance['show_button'];
        $instance['button_text']                             = $new_instance['button_text'];
        $instance['button_link']                             = $new_instance['button_link'];
        $instance['button_target']                           = $new_instance['button_target'];
        $instance['button_text_color']                       = $new_instance['button_text_color'];
        $instance['button_hover_text_color']                 = $new_instance['button_hover_text_color'];
        $instance['button_background_color']                 = $new_instance['button_background_color'];
        $instance['button_hover_background_color']           = $new_instance['button_hover_background_color'];
        $instance['button_border_color']                     = $new_instance['button_border_color'];
        $instance['button_hover_border_color']               = $new_instance['button_hover_border_color'];

		return $instance;
	}
}
