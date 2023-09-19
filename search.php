<?php get_header(); ?>
<?php 
$wp_query = bridge_qode_return_global_query();
$bridge_qode_id = bridge_qode_get_page_id();

if ( get_query_var('paged') ) { $bridge_qode_paged = get_query_var('paged'); }
elseif ( get_query_var('page') ) { $bridge_qode_paged = get_query_var('page'); }
else { $bridge_qode_paged = 1; }

$bridge_qode_sidebar = $bridge_qode_options['category_blog_sidebar'];


if(isset($bridge_qode_options['blog_page_range']) && $bridge_qode_options['blog_page_range'] != ""){
	$bridge_qode_blog_page_range = $bridge_qode_options['blog_page_range'];
} else{
	$bridge_qode_blog_page_range = $wp_query->max_num_pages;
}

$bridge_qode_search_columns = bridge_qode_options()->getOptionValue('search_results_columns');

if( empty( $bridge_qode_search_columns ) ){
    $bridge_qode_search_columns = 'one';
}


$bridge_qode_search_spacing = bridge_qode_options()->getOptionValue('search_results_spacing');

if( empty( $bridge_qode_search_spacing ) ){
    $bridge_qode_search_spacing = 'normal';
}

$bridge_qode_holder_classes = [];

$bridge_qode_holder_classes[] =  'qode-search-results-' . $bridge_qode_search_columns . '-columns';
$bridge_qode_holder_classes[] =  'qode-' . $bridge_qode_search_spacing . '-space';
$bridge_qode_holder_classes[] =  'qode-disable-bottom-space';
$bridge_qode_holder_classes[] =  'clearfix';


// Filter for overriding default search template
$path   = apply_filters( 'bridge_qode_filter_search_page_path', 'templates/page' );
$type   = apply_filters( 'bridge_qode_filter_search_page_layout', 'default' );
$module = apply_filters( 'bridge_qode_filter_search_page_module', 'search' );
$plugin = apply_filters( 'bridge_qode_filter_search_page_plugin_override', false );
$params = apply_filters( 'bridge_qode_filter_search_page_params', array() );

?>
	
	<?php get_template_part( 'title' ); ?>

    <?php if( $plugin ) { ?>
        <?php bridge_qode_get_search_page_template( $path . '/' . $type, $module, '', $params, $plugin ); ?>
    <?php } else { ?>
        <div class="container">
            <?php if(isset($bridge_qode_options['overlapping_content']) && $bridge_qode_options['overlapping_content'] == 'yes') {?>
            <div class="overlapping_content"><div class="overlapping_content_inner">
                    <?php } ?>
                    <div class="container_inner default_template_holder clearfix">
                        <?php if(($bridge_qode_sidebar == "default")||($bridge_qode_sidebar == "")) : ?>
                            <div class="blog_holder blog_large_image <?php echo esc_attr(implode(' ', $bridge_qode_holder_classes))?>">
                                <?php if($bridge_qode_search_columns !== 'one'){ ?>
                                <div class="qode-outer-space">
                                    <?php } ?>
                                    <?php if(have_posts()) : while ( have_posts() ) : the_post(); ?>
                                        <?php
                                            get_template_part('templates/blog_search', 'loop');
                                        ?>


                                    <?php endwhile; ?>
                                        <?php if($bridge_qode_options['pagination'] != "0") : ?>
                                            <?php bridge_qode_pagination($wp_query->max_num_pages, $bridge_qode_blog_page_range, $bridge_qode_paged); ?>
                                        <?php endif; ?>
                                    <?php else: //If no posts are present ?>
                                        <div class="entry">
                                            <p><?php esc_html_e('No posts were found.', 'bridge'); ?></p>
                                        </div>
                                    <?php endif; ?>
                                    <?php if($bridge_qode_search_columns !== 'one'){ ?>
                                </div>
                            <?php } ?>
                            </div>
                        <?php elseif($bridge_qode_sidebar == "1" || $bridge_qode_sidebar == "2"): ?>
                            <div class="<?php if($bridge_qode_sidebar == "1"):?>two_columns_66_33<?php elseif($bridge_qode_sidebar == "2") : ?>two_columns_75_25<?php endif; ?> background_color_sidebar grid2 clearfix">
                                <div class="column1">
                                    <div class="column_inner">
                                        <div class="blog_holder blog_large_image <?php echo esc_attr(implode(' ', $bridge_qode_holder_classes))?>">
                                            <?php if(have_posts()) : while ( have_posts() ) : the_post(); ?>
                                                <?php
                                                    get_template_part('templates/blog_search', 'loop');
                                                ?>


                                            <?php endwhile; ?>
                                                <?php if($bridge_qode_options['pagination'] != "0") : ?>
                                                    <?php bridge_qode_pagination($wp_query->max_num_pages, $bridge_qode_blog_page_range, $bridge_qode_paged); ?>
                                                <?php endif; ?>
                                            <?php else: //If no posts are present ?>
                                                <div class="entry">
                                                    <p><?php esc_html_e('No posts were found.', 'bridge'); ?></p>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="column2">
                                    <?php get_sidebar(); ?>
                                </div>
                            </div>
                        <?php elseif($bridge_qode_sidebar == "3" || $bridge_qode_sidebar == "4"): ?>
                            <div class="<?php if($bridge_qode_sidebar == "3"):?>two_columns_33_66<?php elseif($bridge_qode_sidebar == "4") : ?>two_columns_25_75<?php endif; ?> background_color_sidebar grid2 clearfix">
                                <div class="column1">
                                    <?php get_sidebar(); ?>
                                </div>
                                <div class="column2">
                                    <div class="column_inner">
                                        <div class="blog_holder blog_large_image <?php echo esc_attr(implode(' ', $bridge_qode_holder_classes))?>">
                                            <?php if(have_posts()) : while ( have_posts() ) : the_post(); ?>
                                                <?php
                                                    get_template_part('templates/blog_search', 'loop');
                                                ?>
                                            <?php endwhile; ?>
                                                <?php if($bridge_qode_options['pagination'] != "0") : ?>
                                                    <?php bridge_qode_pagination($wp_query->max_num_pages, $bridge_qode_blog_page_range, $bridge_qode_paged); ?>
                                                <?php endif; ?>
                                            <?php else: //If no posts are present ?>
                                                <div class="entry">
                                                    <p><?php esc_html_e('No posts were found.', 'bridge'); ?></p>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php if(isset($bridge_qode_options['overlapping_content']) && $bridge_qode_options['overlapping_content'] == 'yes') {?>
                </div></div>
        <?php } ?>
        </div>
    <?php } ?>

	
<?php get_footer(); ?>