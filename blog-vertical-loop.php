<?php
	/*
	Template Name: Blog Vertical Loop
	*/
?>
<?php get_header(); ?>
<?php
$qode_template_name = bridge_qode_return_template_name();
$bridge_qode_id = bridge_qode_get_page_id();
$qode_template_name = get_page_template_slug($bridge_qode_id);
$bridge_qode_category = get_post_meta($bridge_qode_id, "qode_choose-blog-category", true);
$bridge_qode_post_number = esc_attr(get_post_meta($bridge_qode_id, "qode_show-posts-per-page", true));
if ( get_query_var('paged') ) { $bridge_qode_paged = get_query_var('paged'); }
elseif ( get_query_var('page') ) { $bridge_qode_paged = get_query_var('page'); }
else { $bridge_qode_paged = 1; }

$bridge_qode_sidebar = get_post_meta($bridge_qode_id, "qode_show-sidebar", true);

if(get_post_meta($bridge_qode_id, "qode_page_background_color", true) != ""){
    $bridge_qode_background_color = 'background-color: '.esc_attr(get_post_meta($bridge_qode_id, "qode_page_background_color", true));
}else{
    $bridge_qode_background_color = "";
}

if(isset($bridge_qode_options['blog_vertical_loop_type_number_of_chars']) && $bridge_qode_options['blog_vertical_loop_type_number_of_chars'] != "") {
    bridge_qode_set_blog_word_count(esc_attr($bridge_qode_options['blog_vertical_loop_type_number_of_chars']));
}

$bridge_qode_content_style_spacing = "";
if(get_post_meta($bridge_qode_id, "qode_margin_after_title", true) != ""){
	if(get_post_meta($bridge_qode_id, "qode_margin_after_title_mobile", true) == 'yes'){
		$bridge_qode_content_style_spacing = "padding-top:".esc_attr(get_post_meta($bridge_qode_id, "qode_margin_after_title", true))."px !important";
	}else{
		$bridge_qode_content_style_spacing = "padding-top:".esc_attr(get_post_meta($bridge_qode_id, "qode_margin_after_title", true))."px";
	}
}

?>

<?php
    $bridge_qode_blog_query = bridge_qode_get_blog_query_posts( $qode_template_name );
    $bridge_qode_params['blog_query'] = $bridge_qode_blog_query;
?>
    <div class="full_width blog_vertical_loop"<?php if($bridge_qode_background_color != "") { echo " style='background-color:". $bridge_qode_background_color ."'";} ?>>
        <div class="full_width_inner" <?php bridge_qode_inline_style($bridge_qode_content_style_spacing); ?>>
            <?php if( ! post_password_required() ) { ?>
                <div class="blog_holder blog_vertical_loop_type">
                    <?php if($bridge_qode_blog_query->have_posts()) : while ( $bridge_qode_blog_query->have_posts() ) : $bridge_qode_blog_query->the_post(); ?>
                        <?php get_template_part('templates/blog_vertical', 'loop'); ?>
                    <?php endwhile; ?>

                    <?php else: //If no posts are present ?>
                        <div class="entry">
                            <p><?php esc_html_e('No posts were found.', 'bridge'); ?></p>
                        </div>
                    <?php endif; ?>
                </div>
            <?php } else {
                echo get_the_password_form();
            }?>
        </div>
    </div>
<?php do_action('bridge_qode_action_page_after_container') ?>
<?php get_footer(); ?>