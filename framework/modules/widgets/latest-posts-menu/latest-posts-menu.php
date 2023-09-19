<?php
class BridgeQodeLatestPostsMenu extends WP_Widget {

	public function __construct() {
		parent::__construct(
	 		'latest_posts_menu', // Base ID
			esc_html__('Menu Latest Posts', 'bridge'), // Name
			array( 'description' => esc_html__( 'Menu Latest Posts', 'bridge' ) ) // Args
		);
	}

	public function widget( $args, $instance ) {
		global $post;
		extract( $args );
		$title = apply_filters('widget_title', empty($instance['title']) ? '' : $instance['title'], $instance, $this->id_base);

		if ( empty( $instance['number'] ) || ! $number = absint( $instance['number'] ) ){
			$number = 10;
		}

		if ( empty( $instance['category'] ) || ! $category = absint( $instance['category'] ) ){
			$category = '';
		}

		echo wp_kses_post($before_widget);

		if ( ! empty( $title ) ){
			echo wp_kses_post($before_title) . wp_kses_post($title) . wp_kses_post($after_title);
		}
		?>
		
		<?php
				global $bridge_qode_options;
				$blog_hide_comments = "";
				if (isset($bridge_qode_options['blog_hide_comments'])) {
					$blog_hide_comments = $bridge_qode_options['blog_hide_comments'];
				}
				$args = array(
					'order'=>'DESC', 
					'orderby'=>'date',
					'cat'=> $category,
					'posts_per_page'=>$number // Number of related posts to display.
				);
 				$related_query = new WP_Query($args);
				if ($related_query->have_posts()) {
			?>
			
			<div class="flexslider widget_flexslider">
				<ul class="slides">
            <?php
            while ($related_query->have_posts()) : $related_query->the_post();
            ?>
				<li>
					<a itemprop="url" href="<?php the_permalink() ?>"><?php echo get_the_post_thumbnail(get_the_id(),'menu-featured-post'); ?></a>
					<h3 itemprop="name"><a itemprop="url" href="<?php the_permalink() ?>" ><?php the_title();?> </a></h3>
					<span class="menu_recent_post_text">
						<?php esc_html_e('Posted in','bridge'); ?> <?php the_category(', '); ?>
						<?php esc_html_e(' by','bridge'); ?> <a itemprop="url" class="post_author" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author_meta('display_name'); ?></a>
					</span>
				</li>
            <?php
            endwhile;
            ?>
				</ul>
			</div>
        
 
<?php }
    wp_reset_postdata();

		echo wp_kses_post($after_widget);
	}

	
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['number'] = (int) $new_instance['number'];
		$instance['category'] = (int) $new_instance['category']; 
		return $instance;
	}

	public function form( $instance ) {
		$title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
		$number    = isset( $instance['number'] ) ? absint( $instance['number'] ) : 5;
		$category    = isset( $instance['category'] ) ? absint( $instance['category'] ) : ''; 
		?>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php esc_html_e( 'Title:','bridge'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php esc_html_e( 'Number of posts:','bridge' ); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'number' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'number' )); ?>" type="text" value="<?php echo esc_attr( $number ); ?>" />
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php esc_html_e( 'Category:','bridge' ); ?></label>
		<select id="<?php echo esc_attr($this->get_field_id( 'category' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'category' )); ?>">
		<option value="">All</option>
		<?php $categories = get_categories();
			foreach ( $categories as $cat ) { ?>
				<option value="<?php echo esc_attr($cat->cat_ID); ?>" <?php if(esc_attr($category) == $cat->cat_ID){echo 'selected="selected"';} ?>><?php echo esc_attr($cat->name); ?></option>
		<?php } ?>
		</select>
		</p>
		<?php 
	}

}