<?php
class BridgeQodeRelatedPosts extends WP_Widget {

	public function __construct() {
		parent::__construct(
	 		'related_posts_widget', // Base ID
			esc_html__('Related Posts', 'bridge'), // Name
			array( 'description' => esc_html__( 'Related Posts Widget', 'bridge' ), ) // Args
		);
	}

	public function widget( $args, $instance ) {
		global $post;

		extract( $args );

		$title = apply_filters('widget_title', empty($instance['title']) ? esc_html__('Related Posts','bridge') : $instance['title'], $instance, $this->id_base);

		if ( empty( $instance['number'] ) || ! $number = absint( $instance['number'] ) ){
			$number = 10;
		}


		echo wp_kses_post($before_widget);

		if ( ! empty( $title ) ){
			echo wp_kses_post($before_title) . wp_kses_post($title ) . wp_kses_post($after_title);
		}

		
			$tags = wp_get_post_tags(get_the_ID());
			
 			if ($tags) {
				
 				$tag_ids = array();

 				foreach($tags as $individual_tag) {
					$tag_ids[] = $individual_tag->term_id;
				}

				$args = array(
					'tag__in'           => $tag_ids,
					'post__not_in'      => array(get_the_ID()),
					'posts_per_page'    => $number
				);
 				$related_query = new WP_Query($args);
				if ($related_query->have_posts()) {
					while ($related_query->have_posts()) : $related_query->the_post(); ?>
						<div class="post no_image">
			                <div class="text">
			                    <a itemprop="url" href="<?php the_permalink() ?>" > <?php the_title();?> </a>
			                </div>
						</div>
                <?php
					endwhile;
				}
                wp_reset_postdata();
			}

			echo wp_kses_post($after_widget);
	}

	
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['number'] = (int) $new_instance['number']; 
		return $instance;
	}

	public function form( $instance ) {
		$title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
		$number    = isset( $instance['number'] ) ? absint( $instance['number'] ) : 5; 
		?>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php esc_html_e( 'Title:','bridge'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php esc_html_e( 'Number of posts:','bridge' ); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'number' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'number' )); ?>" type="text" value="<?php echo esc_attr( $number ); ?>" />
		</p>
		<?php 
	}

}