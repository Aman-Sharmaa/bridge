<?php
/*
Template Name: Blog Masonry Gallery
*/
?>
<?php get_header(); ?>
<?php
$qode_template_name = bridge_qode_return_template_name();
$bridge_qode_id = bridge_qode_get_page_id();
$qode_template_name = get_page_template_slug($bridge_qode_id);
$bridge_qode_category = get_post_meta($bridge_qode_id, "qode_choose-blog-category", true);
$bridge_qode_post_number = get_post_meta($bridge_qode_id, "qode_show-posts-per-page", true);
$bridge_qode_page_object = get_post( $bridge_qode_id );
$bridge_qode_content = $bridge_qode_page_object->post_content;
$bridge_qode_content = apply_filters( 'the_content', $bridge_qode_content );
if ( get_query_var('paged') ) { $bridge_qode_paged = get_query_var('paged'); }
elseif ( get_query_var('page') ) { $bridge_qode_paged = get_query_var('page'); }
else { $bridge_qode_paged = 1; }

$bridge_qode_sidebar = get_post_meta($bridge_qode_id, "qode_show-sidebar", true);

if(get_post_meta($bridge_qode_id, "qode_page_background_color", true) != ""){
    $bridge_qode_background_color = get_post_meta($bridge_qode_id, "qode_page_background_color", true);
}else{
    $bridge_qode_background_color = "";
}

if($bridge_qode_options['number_of_chars_masonry'] != "") {
    bridge_qode_set_blog_word_count($bridge_qode_options['number_of_chars_masonry']);
}
$bridge_qode_category_filter = "no";
if(isset($bridge_qode_options['blog_masonry_filter'])){
    $bridge_qode_category_filter = $bridge_qode_options['blog_masonry_filter'];
}
$bridge_qode_container_inner_class = "";
if($bridge_qode_category_filter == "yes"){
    $bridge_qode_container_inner_class = " full_page_container_inner";
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

<?php get_template_part( 'title' ); ?>

<?php
$bridge_qode_revslider = get_post_meta($bridge_qode_id, "qode_revolution-slider", true);
if (!empty($bridge_qode_revslider)){ ?>
    <div class="q_slider"><div class="q_slider_inner">
            <?php echo do_shortcode($bridge_qode_revslider); ?>
        </div></div>
<?php
}
?>
<?php
$bridge_qode_blog_query = bridge_qode_get_blog_query_posts();
$bridge_qode_params['blog_query'] = $bridge_qode_blog_query;

?>
    <div class="full_width"<?php if($bridge_qode_background_color != "") { echo " style='background-color:". $bridge_qode_background_color ."'";} ?>>
        <div class="full_width_inner<?php echo esc_attr( $bridge_qode_container_inner_class ); ?>" <?php bridge_qode_inline_style($bridge_qode_content_style_spacing); ?>>
            <?php if( ! post_password_required() ) { ?>
                <?php echo bridge_qode_get_module_part( $bridge_qode_content ); ?>

                <?php
                bridge_qode_get_template_part('templates/blog', 'structure', $bridge_qode_params);
                ?>
            <?php } else {
                echo get_the_password_form();
            }?>
        </div>
    </div>
<?php do_action('bridge_qode_action_page_after_container') ?>
<?php get_footer(); ?>