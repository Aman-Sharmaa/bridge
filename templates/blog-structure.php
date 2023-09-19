<?php 
	$bridge_qode_wp_query = bridge_qode_return_global_query();
	$bridge_qode_options = bridge_qode_return_global_options();
    $qode_template_name = bridge_qode_return_template_name();
	$bridge_qode_id = bridge_qode_get_page_id();


	if ( get_query_var('paged') ) { $bridge_qode_paged = get_query_var('paged'); }
	elseif ( get_query_var('page') ) { $bridge_qode_paged = get_query_var('page'); }
	else { $bridge_qode_paged = 1; }

	$bridge_qode_filter = "no";
	if(isset($bridge_qode_options['blog_masonry_filter'])){
		$bridge_qode_filter = $bridge_qode_options['blog_masonry_filter'];
	}

    $bridge_qode_blog_style = "1";
    if(isset($bridge_qode_options['blog_style'])){
        $bridge_qode_blog_style = $bridge_qode_options['blog_style'];
    }

	$bridge_qode_blog_list = "";
	if($qode_template_name != "") {
		if($qode_template_name == "blog-large-image.php"){
			$bridge_qode_blog_list = "blog_large_image";
			$bridge_qode_blog_list_class = "blog_large_image";
		}elseif($qode_template_name == "blog-masonry.php") {
            $bridge_qode_blog_list = "blog_masonry";
            $bridge_qode_blog_list_class = "masonry";
        }elseif($qode_template_name == "blog-masonry-gallery.php"){
            $bridge_qode_blog_list = "blog_masonry_gallery";
            $bridge_qode_blog_list_class = "masonry_gallery";
		}elseif($qode_template_name == "blog-gallery.php"){
			$bridge_qode_blog_list = "blog_gallery";
			$bridge_qode_blog_list_class = "blog_gallery";
		}elseif($qode_template_name == "blog-chequered.php"){
			$bridge_qode_blog_list = "blog_chequered";
			$bridge_qode_blog_list_class = "blog_chequered";
		}elseif($qode_template_name == "blog-masonry-full-width.php"){
			$bridge_qode_blog_list = "blog_masonry";
			$bridge_qode_blog_list_class = "masonry_full_width";
		}elseif($qode_template_name == "blog-masonry-date-in-image.php"){
			$bridge_qode_blog_list = "blog_masonry_date_in_image";
			$bridge_qode_blog_list_class = "masonry blog_masonry_date_in_image ";
			if(isset($bridge_qode_options['blog_masonry_date_image_hover_type']) && $bridge_qode_options['blog_masonry_date_image_hover_type'] != ""){
				$bridge_qode_blog_list_class .= $bridge_qode_options['blog_masonry_date_image_hover_type'] ;
			}
		}elseif($qode_template_name == "blog-masonry-full-width-date-in-image.php"){
			$bridge_qode_blog_list = "blog_masonry_date_in_image";
			$bridge_qode_blog_list_class = "masonry_full_width blog_masonry_date_in_image ";
			if(isset($bridge_qode_options['blog_masonry_date_image_hover_type']) && $bridge_qode_options['blog_masonry_date_image_hover_type'] != ""){
				$bridge_qode_blog_list_class .= $bridge_qode_options['blog_masonry_date_image_hover_type'] ;
			}
		}elseif($qode_template_name == "blog-large-image-whole-post.php"){
			$bridge_qode_blog_list = "blog_large_image_whole_post";
			$bridge_qode_blog_list_class = "blog_large_image";
		}elseif($qode_template_name == "blog-small-image.php"){
			$bridge_qode_blog_list = "blog_small_image";
			$bridge_qode_blog_list_class = "blog_small_image";
		}elseif($qode_template_name == "blog-large-image-simple.php"){
			$bridge_qode_blog_list = "blog_large_image_simple";
			$bridge_qode_blog_list_class = "blog_large_image_simple";
		}elseif($qode_template_name == "blog-large-image-with-dividers.php"){
			$bridge_qode_blog_list = "blog_large_image_with_dividers";
			$bridge_qode_blog_list_class = "blog_large_image_with_dividers";
		}elseif($qode_template_name == "blog-compound.php"){
            $bridge_qode_blog_list = "blog_compound";
            $bridge_qode_blog_list_class = "blog_compound";
        }elseif($qode_template_name == "blog-pinterest.php"){
            $bridge_qode_blog_list = "blog_pinterest";
            $bridge_qode_blog_list_class = "blog_pinterest";
        }elseif($qode_template_name == "blog-headlines.php"){
            $bridge_qode_blog_list = "blog_headlines";
            $bridge_qode_blog_list_class = "blog_headlines";
        }else{
			$bridge_qode_blog_list = "blog_large_image";
			$bridge_qode_blog_list_class = "blog_large_image";
		}
	} else{
		if($bridge_qode_blog_style=="1"){
			$bridge_qode_blog_list = "blog_large_image";
			$bridge_qode_blog_list_class = "blog_large_image";
		}elseif($bridge_qode_blog_style=="2"){
			$bridge_qode_blog_list = "blog_masonry";
			$bridge_qode_blog_list_class = "masonry";
		}elseif($bridge_qode_blog_style=="5"){
			$bridge_qode_blog_list = "blog_masonry";
			$bridge_qode_blog_list_class = "masonry_full_width";
        }elseif($bridge_qode_blog_style=="3"){
			$bridge_qode_blog_list = "blog_large_image_whole_post";
			$bridge_qode_blog_list_class = "blog_large_image";
		}elseif($bridge_qode_blog_style=="4"){
			$bridge_qode_blog_list = "blog_small_image";
			$bridge_qode_blog_list_class = "blog_small_image";
		}elseif($bridge_qode_blog_style=="6"){
			$bridge_qode_blog_list = "blog_large_image_simple";
			$bridge_qode_blog_list_class = "blog_large_image_simple";
		}elseif($bridge_qode_blog_style=="7"){
			$bridge_qode_blog_list = "blog_large_image_with_dividers";
			$bridge_qode_blog_list_class = "blog_large_image_with_dividers";
		}elseif($bridge_qode_blog_style=="8"){
			$bridge_qode_blog_list = "blog_masonry_date_in_image";
			$bridge_qode_blog_list_class = "masonry blog_masonry_date_in_image ";
			if(isset($bridge_qode_options['blog_masonry_date_image_hover_type']) && $bridge_qode_options['blog_masonry_date_image_hover_type'] != ""){
				$bridge_qode_blog_list_class .= $bridge_qode_options['blog_masonry_date_image_hover_type'] ;
			}
		}elseif($bridge_qode_blog_style=="9"){
            $bridge_qode_blog_list = "blog_compound";
            $bridge_qode_blog_list_class = "blog_compound";
        }elseif($bridge_qode_blog_style=="10"){
            $bridge_qode_blog_list = "blog_pinterest";
            $bridge_qode_blog_list_class = "blog_pinterest";
        }elseif($bridge_qode_blog_style=="11"){
            $bridge_qode_blog_list = "blog_headlines";
            $bridge_qode_blog_list_class = "blog_headlines";
        }elseif($bridge_qode_blog_style=="12"){
            $bridge_qode_blog_list = "blog_chequered";
            $bridge_qode_blog_list_class = "blog_chequered";
        }else{
			$bridge_qode_blog_list = "blog_large_image";
			$bridge_qode_blog_list_class = "blog_large_image";
		}

	}


    $bridge_qode_pagination_masonry = "pagination";
    if(isset($bridge_qode_options['pagination_masonry'])){
       $bridge_qode_pagination_masonry = $bridge_qode_options['pagination_masonry'];
		if(in_array($bridge_qode_blog_list, array('blog_masonry','blog_masonry_date_in_image','blog_masonry_gallery','blog_pinterest','blog_gallery', 'blog_chequered'))) {
			$bridge_qode_blog_list_class .= " masonry_" . $bridge_qode_pagination_masonry;
		}
        if(in_array($bridge_qode_blog_list, array('blog_headlines'))) {
            $bridge_qode_blog_list_class .= " blog_" . $bridge_qode_pagination_masonry;
        }
    }
?>
<?php
	if(in_array($bridge_qode_blog_list, array('blog_masonry','blog_masonry_date_in_image','blog_pinterest')) && $bridge_qode_filter == "yes") {
		get_template_part('templates/masonry', 'filter');

	}
?>
<div class="blog_holder <?php echo esc_attr( $bridge_qode_blog_list_class ); ?>">

	<?php
	if(in_array($bridge_qode_blog_list, array('blog_masonry','blog_masonry_date_in_image','blog_masonry_gallery','blog_pinterest','blog_gallery','blog_chequered'))){ ?>
		<div class="blog_holder_grid_sizer"></div>
		<div class="blog_holder_grid_gutter"></div>
	<?php }	?>

    <!--if template name is defined than it is used our template and we can use query '$blog_query'-->
    <?php if(isset($qode_template_name)){ ?>
        <?php if($blog_query->have_posts()) :

            if(isset($bridge_qode_options['blog_page_range']) && $bridge_qode_options['blog_page_range'] != ""){
                $bridge_qode_blog_page_range = $bridge_qode_options['blog_page_range'];
            } else{
                $bridge_qode_blog_page_range = $blog_query->max_num_pages;
            }

            while ( $blog_query->have_posts() ) : $blog_query->the_post();

            if(isset($bridge_qode_options['blog_page_range']) && $bridge_qode_options['blog_page_range'] != ""){
                $bridge_qode_blog_page_range = $bridge_qode_options['blog_page_range'];
            } else{
                $bridge_qode_blog_page_range = $blog_query->max_num_pages;
            }
        ?>
            <?php
                get_template_part('templates/'.$bridge_qode_blog_list, 'loop');
            ?>
        <?php endwhile; ?>
        <?php if(!in_array($bridge_qode_blog_list, array('blog_masonry','blog_masonry_date_in_image','blog_masonry_gallery','blog_pinterest','blog_headlines','blog_gallery','blog_chequered'))) { ?>
            <?php if(isset($bridge_qode_options['pagination']) && $bridge_qode_options['pagination'] != "0") : ?>
                <?php bridge_qode_pagination($blog_query->max_num_pages, $bridge_qode_blog_page_range, $bridge_qode_paged); ?>
            <?php endif; ?>
        <?php } ?>
        <?php else: //If no posts are present ?>
        <div class="entry">
                <p><?php esc_html_e('No posts were found.', 'bridge'); ?></p>
        </div>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    <?php } else { ?>

        <!--otherwise it is archive or category page and we don't have query-->
        <?php if(have_posts()) :

            if(isset($bridge_qode_options['blog_page_range']) && $bridge_qode_options['blog_page_range'] != ""){
                $bridge_qode_blog_page_range = $bridge_qode_options['blog_page_range'];
            } else{
                $bridge_qode_blog_page_range = $bridge_qode_wp_query->max_num_pages;
            }

            while ( have_posts() ) : the_post(); ?>
            <?php
            get_template_part('templates/'.$bridge_qode_blog_list, 'loop');
            ?>
        <?php endwhile; ?>
            <?php if(!in_array($bridge_qode_blog_list, array('blog_masonry','blog_masonry_date_in_image','blog_masonry_gallery','blog_pinterest','blog_headlines','blog_gallery','blog_chequered'))) { ?>
                <?php if(isset($bridge_qode_options['pagination']) && $bridge_qode_options['pagination'] != "0") : ?>
                    <?php bridge_qode_pagination($bridge_qode_wp_query->max_num_pages, $bridge_qode_blog_page_range, $bridge_qode_paged); ?>
                <?php endif; ?>
            <?php } ?>
        <?php else: //If no posts are present ?>
            <div class="entry">
                <p><?php esc_html_e('No posts were found.', 'bridge'); ?></p>
            </div>
        <?php endif; ?>
    <?php } ?>
</div>
<?php if(in_array($bridge_qode_blog_list, array('blog_masonry','blog_masonry_date_in_image','blog_masonry_gallery','blog_pinterest','blog_headlines','blog_gallery','blog_chequered'))) {
    if(isset($qode_template_name)){
        if($bridge_qode_pagination_masonry == "load_more") {
            if ($blog_query->max_num_pages > 1) { ?>
                <?php if( is_front_page() || is_home() ){
                    bridge_qode_set_global_paged_variable( $blog_query->query['paged'] );
                } ?>
                <div class="blog_load_more_button_holder">
                    <div class="blog_load_more_button"><span rel="<?php echo esc_attr( $blog_query->max_num_pages ); ?>"><?php echo get_next_posts_link(esc_html__('Show more', 'bridge'), $blog_query->max_num_pages); ?></span></div>
                    <div class="blog_load_more_button_loading"><a href="javascript: void(0)" class="qbutton"><?php esc_html_e('Loading...', 'bridge'); ?></a></div>
                </div>
            <?php } ?>
         <?php } elseif($bridge_qode_pagination_masonry == "infinite_scroll") { ?>
            <div class="blog_infinite_scroll_button">
                <span rel="<?php echo esc_attr( $blog_query->max_num_pages ); ?>">
                    <?php echo get_next_posts_link(esc_html__('Show more', 'bridge'), $blog_query->max_num_pages); ?>
                </span>
            </div>
            <div class="qode-infinite-scroll-loading-label"><?php echo esc_html__('Loading new posts...', 'bridge'); ?></div>
            <div class="qode-infinite-scroll-finished-label"><?php echo esc_html__('No more posts', 'bridge'); ?></div>
        <?php }else { ?>
            <?php if($bridge_qode_options['pagination'] != "0") : ?>
                <?php bridge_qode_pagination($blog_query->max_num_pages, $bridge_qode_blog_page_range, $bridge_qode_paged); ?>
            <?php endif; ?>
        <?php } ?>
    <?php } else {
        if($bridge_qode_pagination_masonry == "load_more") {
            if (get_next_posts_link()) { ?>
                <?php if( is_front_page() || is_home() ){
                    bridge_qode_set_global_paged_variable( $blog_query->query['paged'] );
                } ?>
                <div class="blog_load_more_button_holder">
                    <div class="blog_load_more_button"><span rel="<?php echo esc_attr($bridge_qode_wp_query->max_num_pages); ?>"><?php echo get_next_posts_link(esc_html__('Show more', 'bridge')); ?></span></div>
                    <div class="blog_load_more_button_loading"><a href="javascript: void(0)" class="qbutton"><?php esc_html_e('Loading...', 'bridge'); ?></a></div>
                </div>
            <?php } ?>
        <?php } elseif($bridge_qode_pagination_masonry == "infinite_scroll") { ?>
            <div class="blog_infinite_scroll_button">
                <span rel="<?php echo esc_attr($bridge_qode_wp_query->max_num_pages); ?>">
                    <?php echo get_next_posts_link(esc_html__('Show more', 'bridge')); ?>
                </span>
            </div>
            <div class="qode-infinite-scroll-loading-label"><?php echo esc_html__('Loading new posts...', 'bridge'); ?></div>
            <div class="qode-infinite-scroll-finished-label"><?php echo esc_html__('No more posts', 'bridge'); ?></div>
        <?php }else { ?>
            <?php if($bridge_qode_options['pagination'] != "0") : ?>
                <?php bridge_qode_pagination($bridge_qode_wp_query->max_num_pages, $bridge_qode_blog_page_range, $bridge_qode_paged); ?>
            <?php endif; ?>
        <?php } ?>
    <?php } ?>
<?php } ?>
<?php wp_reset_postdata(); ?>
