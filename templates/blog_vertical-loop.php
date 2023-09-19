<?php
$bridge_qode_options = bridge_qode_return_global_options();
$bridge_qode_blog_hide_comments = "";
$bridge_qode_blog_query = bridge_qode_get_blog_query_posts();
$bridge_qode_id = bridge_qode_get_page_id();
$bridge_qode_post_number = get_post_meta($bridge_qode_id, "qode_show-posts-per-page", true);


if( ! $bridge_qode_post_number ){
    $bridge_qode_number_of_posts = wp_count_posts();

    if( ! empty($bridge_qode_number_of_posts) ){
        $bridge_qode_number_of_posts = $bridge_qode_number_of_posts->publish;
    }
} else{
    $bridge_qode_number_of_posts = $bridge_qode_blog_query->post_count;
}

if (isset($bridge_qode_options['blog_hide_comments'])) {
    $bridge_qode_blog_hide_comments = $bridge_qode_options['blog_hide_comments'];
}

$bridge_qode_blog_hide_author = "";
if (isset($bridge_qode_options['blog_hide_author'])) {
    $bridge_qode_blog_hide_author = $bridge_qode_options['blog_hide_author'];
}

$bridge_qode_like = "on";
if (isset($bridge_qode_options['qode_like'])) {
    $bridge_qode_like = $bridge_qode_options['qode_like'];
}

if ( get_query_var('paged') ) { $bridge_qode_paged = get_query_var('paged'); }
elseif ( get_query_var('page') ) { $bridge_qode_paged = get_query_var('page'); }
else { $bridge_qode_paged = 1; }
if($bridge_qode_paged == 1){
    $bridge_qode_next_post_class = '';
    $bridge_qode_preload_background_class = "preload_background";
}else{
    $bridge_qode_next_post_class = 'next_post';
    $bridge_qode_preload_background_class = "";
}

$bridge_qode_number_of_pages = intval($bridge_qode_blog_query->max_num_pages);
if($bridge_qode_paged - 2 == 0){
    $bridge_qode_previous_page = $bridge_qode_number_of_pages;
}else if($bridge_qode_paged - 2 < 0){
    $bridge_qode_previous_page = $bridge_qode_number_of_pages - 1;
}else{
    $bridge_qode_previous_page = $bridge_qode_paged - 2;
}

$bridge_qode_post_format = get_post_format();

if (is_front_page() || is_home()) {
    bridge_qode_set_global_paged_variable($bridge_qode_blog_query->query['paged']);
}

?>
<?php
switch ($bridge_qode_post_format) {
    case "video":
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class($bridge_qode_next_post_class); ?>>

            <div class="grid_section blog_load_next">
                <div class="section_inner">
                    <div class="blog_vertical_loop_button_holder">
                        <?php if(get_next_posts_link('', $bridge_qode_number_of_posts)) { ?>
                            <div class="blog_vertical_loop_button"><span class="button_icon" ><?php echo wp_kses_post(get_next_posts_link('', $bridge_qode_number_of_posts)); ?></span></div>
                        <?php }else{ ?>
                            <div class="blog_vertical_loop_button"><span class="button_icon" ><a href="<?php echo esc_url(get_pagenum_link(1, true)); ?>"></a></span></div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="post_content_holder">
                <?php if ( has_post_thumbnail() ) { ?>
                    <div class="post_image">
                        <div class="grid_section blog_load_prev">
                            <div class="section_inner">
                                <div class="blog_vertical_loop_button_holder prev_post">
                                    <div class="last_page"><a href="<?php echo esc_url(get_pagenum_link($bridge_qode_number_of_pages, true)); ?>"></a></div>
                                    <div class="blog_vertical_loop_back_button"><span class="button_icon" ><a href="<?php echo esc_url(get_pagenum_link($bridge_qode_previous_page, true)); ?>"></a></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="post_image_inner">
                            <a itemprop="url" class="<?php echo esc_attr($bridge_qode_preload_background_class); ?>" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" style="background-image:url('<?php echo esc_url(wp_get_attachment_url(get_post_thumbnail_id())); ?>');"></a>
                            <div class="post_image_title"><div class="post_image_title_inner"><div class="grid_section"><div class="section_inner"><h2 itemprop="name" class="entry_title"><?php the_title(); ?></h2></div></div></div></div>
                        </div>
                    </div>
                <?php } ?>
                <div class="grid_section">
                    <div class="section_inner">
                        <div class="post_text">
                            <div class="post_text_inner">
                                <div class="post_info">
                                    <span itemprop="dateCreated" class="time entry_date updated"><?php the_time('d F, Y'); ?><meta itemprop="interactionCount" content="UserComments: <?php echo get_comments_number(bridge_qode_get_page_id()); ?>"/></span>
                                    <span class="category"><?php the_category(', '); ?></span>
                                    <?php if($bridge_qode_blog_hide_comments != "yes"){ ?>
                                        <span class="post_comments_holder"><a class="post_comments" href="<?php comments_link(); ?>" target="_self"><?php comments_number('0 ' . esc_html__('Comments','bridge'), '1 '.esc_html__('Comment','bridge'), '% '.esc_html__('Comments','bridge') ); ?></a></span>
                                    <?php } ?>
                                    <?php if($bridge_qode_blog_hide_author == "no") { ?>
                                        <span class="post_author">
												<a itemprop="author" class="post_author_link" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author_meta('display_name'); ?></a>
											</span>
                                    <?php } ?>
                                    <?php if( $bridge_qode_like == "on" ) { ?>
                                        <div class="blog_like">
                                            <?php if( function_exists('bridge_core_like') ) bridge_core_like(); ?>
                                        </div>
                                    <?php } ?>
                                    <?php if(isset($bridge_qode_options['enable_social_share'])  && $bridge_qode_options['enable_social_share'] == "yes") { ?>
                                        <?php echo do_shortcode('[social_share]'); ?>
                                    <?php } ?>
                                </div>
                                <h2 itemprop="name" class="entry_title">
                                    <a itemprop="url" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <?php the_content(); ?>
                                <a itemprop="url" class="qbutton  small loop_more" href="<?php the_permalink(); ?>"><?php esc_html_e('See More', 'bridge'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <?php
        break;
    case "audio":
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class($bridge_qode_next_post_class); ?>>
            <div class="grid_section blog_load_next">
                <div class="section_inner">
                    <div class="blog_vertical_loop_button_holder">
                        <?php if(get_next_posts_link('', $bridge_qode_number_of_posts)) { ?>
                            <div class="blog_vertical_loop_button"><span class="button_icon" ><?php echo wp_kses_post(get_next_posts_link('', $bridge_qode_number_of_posts)); ?></span></div>
                        <?php }else{ ?>
                            <div class="blog_vertical_loop_button"><span class="button_icon" ><a href="<?php echo esc_url(get_pagenum_link(1, true)); ?>"></a></span></div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="post_content_holder">
                <?php if ( has_post_thumbnail() ) { ?>
                    <div class="post_image">

                        <div class="grid_section blog_load_prev">
                            <div class="section_inner">
                                <div class="blog_vertical_loop_button_holder prev_post">
                                    <div class="last_page"><a href="<?php echo esc_url(get_pagenum_link($bridge_qode_number_of_pages, true)); ?>"></a></div>
                                    <div class="blog_vertical_loop_back_button"><span class="button_icon" ><a href="<?php echo esc_url(get_pagenum_link($bridge_qode_previous_page, true)); ?>"></a></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="post_image_inner">
                            <a itemprop="url" class="<?php echo esc_attr($bridge_qode_preload_background_class); ?>" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" style="background-image:url('<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>');"></a>
                            <div class="post_image_title"><div class="post_image_title_inner"><div class="grid_section"><div class="section_inner"><h2 itemprop="name" class="entry_title"><?php the_title(); ?></h2></div></div></div></div>
                        </div>
                    </div>
                <?php } ?>
                <div class="grid_section">
                    <div class="section_inner">
                        <div class="post_text">
                            <div class="post_text_inner">
                                <div class="post_info">
                                    <span itemprop="dateCreated" class="time entry_date updated"><?php the_time('d F, Y'); ?><meta itemprop="interactionCount" content="UserComments: <?php echo get_comments_number(bridge_qode_get_page_id()); ?>"/></span>
                                    <span class="category"><?php the_category(', '); ?></span>
                                    <?php if($bridge_qode_blog_hide_comments != "yes"){ ?>
                                        <span class="post_comments_holder"><a itemprop="url" class="post_comments" href="<?php comments_link(); ?>" target="_self"><?php comments_number('0 ' . esc_html__('Comments','bridge'), '1 '.esc_html__('Comment','bridge'), '% '.esc_html__('Comments','bridge') ); ?></a></span>
                                    <?php } ?>
                                    <?php if($bridge_qode_blog_hide_author == "no") { ?>
                                        <span class="post_author">
												<a itemprop="author" class="post_author_link" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author_meta('display_name'); ?></a>
											</span>
                                    <?php } ?>
                                    <?php if( $bridge_qode_like == "on" ) { ?>
                                        <div class="blog_like">
                                            <?php if( function_exists('bridge_core_like') ) bridge_core_like(); ?>
                                        </div>
                                    <?php } ?>
                                    <?php if(isset($bridge_qode_options['enable_social_share'])  && $bridge_qode_options['enable_social_share'] == "yes") { ?>
                                        <?php echo do_shortcode('[social_share]'); ?>
                                    <?php } ?>
                                </div>
                                <h2 itemprop="name" class="entry_title">
                                    <a itemprop="url" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <?php the_content(); ?>
                                <a itemprop="url" class="qbutton  small loop_more" href="<?php the_permalink(); ?>"><?php esc_html_e('See More', 'bridge'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <?php
        break;
    case "link":
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class($bridge_qode_next_post_class); ?>>
            <div class="grid_section blog_load_next">
                <div class="section_inner">
                    <div class="blog_vertical_loop_button_holder">
                        <?php if(get_next_posts_link('', $bridge_qode_number_of_posts)) { ?>
                            <div class="blog_vertical_loop_button"><span class="button_icon" ><?php echo wp_kses_post(get_next_posts_link('', $bridge_qode_number_of_posts)); ?></span></div>
                        <?php }else{ ?>
                            <div class="blog_vertical_loop_button"><span class="button_icon" ><a href="<?php echo esc_url(get_pagenum_link(1, true)); ?>"></a></span></div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="post_content_holder">
                <?php if ( has_post_thumbnail() ) { ?>
                    <div class="post_image">

                        <div class="grid_section blog_load_prev">
                            <div class="section_inner">
                                <div class="blog_vertical_loop_button_holder prev_post">
                                    <div class="last_page"><a href="<?php echo esc_url(get_pagenum_link($bridge_qode_number_of_pages, true)); ?>"></a></div>
                                    <div class="blog_vertical_loop_back_button"><span class="button_icon" ><a href="<?php echo esc_url(get_pagenum_link($bridge_qode_previous_page, true)); ?>"></a></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="post_image_inner">
                            <a itemprop="url" class="<?php echo esc_attr($bridge_qode_preload_background_class); ?>" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" style="background-image:url('<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>');"></a>
                            <div class="post_image_title"><div class="post_image_title_inner"><div class="grid_section"><div class="section_inner"><h2 itemprop="name" class="entry_title"><?php the_title(); ?></h2></div></div></div></div>
                        </div>
                    </div>
                <?php } ?>
                <div class="grid_section">
                    <div class="section_inner">
                        <div class="post_text_columns">
                            <div class="post_text">
                                <div class="post_text_inner">
                                    <div class="post_info">
                                        <span itemprop="dateCreated" class="time entry_date updated"><?php the_time('d F, Y'); ?><meta itemprop="interactionCount" content="UserComments: <?php echo get_comments_number(bridge_qode_get_page_id()); ?>"/></span>
                                        <span class="category"><?php the_category(', '); ?></span>
                                        <?php if($bridge_qode_blog_hide_comments != "yes"){ ?>
                                            <span class="post_comments_holder"><a class="post_comments" href="<?php comments_link(); ?>" target="_self"><?php comments_number('0 ' . esc_html__('Comments','bridge'), '1 '.esc_html__('Comment','bridge'), '% '.esc_html__('Comments','bridge') ); ?></a></span>
                                        <?php } ?>
                                        <?php if($bridge_qode_blog_hide_author == "no") { ?>
                                            <span class="post_author">
												<a itemprop="author" class="post_author_link" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author_meta('display_name'); ?></a>
											</span>
                                        <?php } ?>
                                        <?php if( $bridge_qode_like == "on" ) { ?>
                                            <div class="blog_like">
                                                <?php if( function_exists('bridge_core_like') ) bridge_core_like(); ?>
                                            </div>
                                        <?php } ?>
                                        <?php if(isset($bridge_qode_options['enable_social_share'])  && $bridge_qode_options['enable_social_share'] == "yes") { ?>
                                            <?php echo do_shortcode('[social_share]'); ?>
                                        <?php } ?>
                                    </div>
                                    <i class="link_mark fa fa-link pull-left"></i>
                                    <div class="post_title entry_title">
                                        <p><a itemprop="url" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
                                    </div>
                                </div>
                            </div>
                            <?php the_content();?>
                            <a itemprop="url" class="qbutton  small loop_more" href="<?php the_permalink(); ?>"><?php esc_html_e('See More', 'bridge'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <?php
        break;
    case "gallery":
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class($bridge_qode_next_post_class); ?>>
            <div class="grid_section blog_load_next">
                <div class="section_inner">
                    <div class="blog_vertical_loop_button_holder">
                        <?php if(get_next_posts_link('', $bridge_qode_number_of_posts)) { ?>
                            <div class="blog_vertical_loop_button"><span class="button_icon" ><?php echo wp_kses_post(get_next_posts_link('', $bridge_qode_number_of_posts)); ?></span></div>
                        <?php }else{ ?>
                            <div class="blog_vertical_loop_button"><span class="button_icon" ><a href="<?php echo esc_url(get_pagenum_link(1, true)); ?>"></a></span></div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="post_content_holder">
                <?php if ( has_post_thumbnail() ) { ?>
                    <div class="post_image">

                        <div class="grid_section blog_load_prev">
                            <div class="section_inner">
                                <div class="blog_vertical_loop_button_holder prev_post">
                                    <div class="last_page"><a href="<?php echo esc_url(get_pagenum_link($bridge_qode_number_of_pages, true)); ?>"></a></div>
                                    <div class="blog_vertical_loop_back_button"><span class="button_icon" ><a href="<?php echo esc_url(get_pagenum_link($bridge_qode_previous_page, true)); ?>"></a></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="post_image_inner">
                            <a itemprop="url" class="<?php echo esc_attr($bridge_qode_preload_background_class); ?>" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" style="background-image:url('<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>');"></a>
                            <div class="post_image_title"><div class="post_image_title_inner"><div class="grid_section"><div class="section_inner"><h2 itemprop="name" class="entry_title"><?php the_title(); ?></h2></div></div></div></div>
                        </div>
                    </div>
                <?php } ?>
                <div class="grid_section">
                    <div class="section_inner">
                        <div class="post_text">
                            <div class="post_text_inner">
                                <div class="post_info">
                                    <span itemprop="dateCreated" class="time entry_date updated"><?php the_time('d F, Y'); ?><meta itemprop="interactionCount" content="UserComments: <?php echo get_comments_number(bridge_qode_get_page_id()); ?>"/></span>
                                    <span class="category"><?php the_category(', '); ?></span>
                                    <?php if($bridge_qode_blog_hide_comments != "yes"){ ?>
                                        <span class="post_comments_holder"><a class="post_comments" href="<?php comments_link(); ?>" target="_self"><?php comments_number('0 ' . esc_html__('Comments','bridge'), '1 '.esc_html__('Comment','bridge'), '% '.esc_html__('Comments','bridge') ); ?></a></span>
                                    <?php } ?>
                                    <?php if($bridge_qode_blog_hide_author == "no") { ?>
                                        <span class="post_author">
												<a itemprop="author" class="post_author_link" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author_meta('display_name'); ?></a>
											</span>
                                    <?php } ?>
                                    <?php if( $bridge_qode_like == "on" ) { ?>
                                        <div class="blog_like">
                                            <?php if( function_exists('bridge_core_like') ) bridge_core_like(); ?>
                                        </div>
                                    <?php } ?>
                                    <?php if(isset($bridge_qode_options['enable_social_share'])  && $bridge_qode_options['enable_social_share'] == "yes") { ?>
                                        <?php echo do_shortcode('[social_share]'); ?>
                                    <?php } ?>
                                </div>
                                <h2 itemprop="name" class="entry_title">
                                    <a itemprop="url" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <?php the_content();?>
                                <a itemprop="url" class="qbutton small loop_more" href="<?php the_permalink(); ?>"><?php esc_html_e('See More', 'bridge'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </article>
        <?php
        break;
    case "quote":
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class($bridge_qode_next_post_class); ?>>
            <div class="grid_section blog_load_next">
                <div class="section_inner">
                    <div class="blog_vertical_loop_button_holder">
                        <?php if(get_next_posts_link('', $bridge_qode_number_of_posts)) { ?>
                            <div class="blog_vertical_loop_button"><span class="button_icon" ><?php echo wp_kses_post(get_next_posts_link('', $bridge_qode_number_of_posts)); ?></span></div>
                        <?php }else{ ?>
                            <div class="blog_vertical_loop_button"><span class="button_icon" ><a href="<?php echo esc_url(get_pagenum_link(1, true)); ?>"></a></span></div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="post_content_holder">
                <?php if ( has_post_thumbnail() ) { ?>
                    <div class="post_image">

                        <div class="grid_section blog_load_prev">
                            <div class="section_inner">
                                <div class="blog_vertical_loop_button_holder prev_post">
                                    <div class="last_page"><a href="<?php echo esc_url(get_pagenum_link($bridge_qode_number_of_pages, true)); ?>"></a></div>
                                    <div class="blog_vertical_loop_back_button"><span class="button_icon" ><a href="<?php echo esc_url(get_pagenum_link($bridge_qode_previous_page, true)); ?>"></a></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="post_image_inner">
                            <a itemprop="url" class="<?php echo esc_attr($bridge_qode_preload_background_class); ?>" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" style="background-image:url('<?php echo esc_url(wp_get_attachment_url(get_post_thumbnail_id())); ?>');"></a>
                            <div class="post_image_title"><div class="post_image_title_inner"><div class="grid_section"><div class="section_inner"><h2 itemprop="name" class="entry_title"><?php the_title(); ?></h2></div></div></div></div>
                        </div>
                    </div>
                <?php } ?>
                <div class="grid_section">
                    <div class="section_inner">
                        <div class="post_text_columns">
                            <div class="post_text">
                                <div class="post_text_inner">

                                    <div class="post_info">
                                        <span itemprop="dateCreated" class="time entry_date updated"><?php the_time('d F, Y'); ?><meta itemprop="interactionCount" content="UserComments: <?php echo get_comments_number(bridge_qode_get_page_id()); ?>"/></span>
                                        <span class="category"><?php the_category(', '); ?></span>
                                        <?php if($bridge_qode_blog_hide_comments != "yes"){ ?>
                                            <span class="post_comments_holder"><a class="post_comments" href="<?php comments_link(); ?>" target="_self"><?php comments_number('0 ' . esc_html__('Comments','bridge'), '1 '.esc_html__('Comment','bridge'), '% '.esc_html__('Comments','bridge') ); ?></a></span>
                                        <?php } ?>
                                        <?php if($bridge_qode_blog_hide_author == "no") { ?>
                                            <span class="post_author">
												<a itemprop="author" class="post_author_link" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author_meta('display_name'); ?></a>
											</span>
                                        <?php } ?>
                                        <?php if( $bridge_qode_like == "on" ) { ?>
                                            <div class="blog_like">
                                                <?php if( function_exists('bridge_core_like') ) bridge_core_like(); ?>
                                            </div>
                                        <?php } ?>
                                        <?php if(isset($bridge_qode_options['enable_social_share'])  && $bridge_qode_options['enable_social_share'] == "yes") { ?>
                                            <?php echo do_shortcode('[social_share]'); ?>
                                        <?php } ?>
                                    </div>
                                    <i class="qoute_mark fa fa-quote-right pull-left"></i>
                                    <div class="post_title entry_title">
                                        <p><a itemprop="url" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo get_post_meta(get_the_ID(), "quote_format", true); ?></a></p>
                                        <span class="quote_author">&mdash; <?php the_title(); ?></span>
                                    </div>
                                </div>
                            </div>
                            <?php the_content(); ?>
                            <a itemprop="url" class="qbutton  small loop_more" href="<?php the_permalink(); ?>"><?php esc_html_e('See More', 'bridge'); ?></a>
                        </div>
                    </div>

                </div>
            </div>
            </div>
        </article>
        <?php
        break;
    default:
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class($bridge_qode_next_post_class); ?>>
            <div class="grid_section blog_load_next">
                <div class="section_inner">
                    <div class="blog_vertical_loop_button_holder">
                        <?php if(get_next_posts_link('', $bridge_qode_number_of_posts)) { ?>
                            <div class="blog_vertical_loop_button"><span class="button_icon" ><?php echo wp_kses_post(get_next_posts_link('', $bridge_qode_number_of_posts)); ?></span></div>
                        <?php }else{ ?>
                            <div class="blog_vertical_loop_button"><span class="button_icon" ><a href="<?php echo esc_url(get_pagenum_link(1, true)); ?>"></a></span></div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="post_content_holder">
                <?php if ( has_post_thumbnail() ) { ?>
                    <div class="post_image">
                        <div class="grid_section blog_load_prev">
                            <div class="section_inner">
                                <div class="blog_vertical_loop_button_holder prev_post">
                                    <div class="last_page"><a href="<?php echo esc_url(get_pagenum_link($bridge_qode_number_of_pages, true)); ?>"></a></div>
                                    <div class="blog_vertical_loop_back_button"><span class="button_icon" ><a href="<?php echo esc_url(get_pagenum_link($bridge_qode_previous_page, true)); ?>"></a></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="post_image_inner">
                            <a itemprop="url" class="<?php echo esc_attr($bridge_qode_preload_background_class); ?>" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" style="background-image:url('<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>');"></a>
                            <div class="post_image_title"><div class="post_image_title_inner"><div class="grid_section"><div class="section_inner"><h2 itemprop="name" class="entry_title"><?php the_title(); ?></h2></div></div></div></div>
                        </div>
                    </div>
                <?php } ?>
                <div class="grid_section">
                    <div class="section_inner">
                        <div class="post_text">
                            <div class="post_text_inner">
                                <div class="post_info">
                                    <span itemprop="dateCreated" class="time entry_date updated"><?php the_time('d F, Y'); ?><meta itemprop="interactionCount" content="UserComments: <?php echo get_comments_number(bridge_qode_get_page_id()); ?>"/></span>
                                    <span class="category"><?php the_category(', '); ?></span>
                                    <?php if($bridge_qode_blog_hide_comments != "yes"){ ?>
                                        <span class="post_comments_holder"><a class="post_comments" href="<?php comments_link(); ?>" target="_self"><?php comments_number('0 ' . esc_html__('Comments','bridge'), '1 '.esc_html__('Comment','bridge'), '% '.esc_html__('Comments','bridge') ); ?></a></span>
                                    <?php } ?>
                                    <?php if($bridge_qode_blog_hide_author == "no") { ?>
                                        <span class="post_author">
												<a itemprop="author" class="post_author_link" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author_meta('display_name'); ?></a>
											</span>
                                    <?php } ?>
                                    <?php if( $bridge_qode_like == "on" ) { ?>
                                        <div class="blog_like">
                                            <?php if( function_exists('bridge_core_like') ) bridge_core_like(); ?>
                                        </div>
                                    <?php } ?>
                                    <?php if(isset($bridge_qode_options['enable_social_share'])  && $bridge_qode_options['enable_social_share'] == "yes") { ?>
                                        <?php echo do_shortcode('[social_share]'); ?>
                                    <?php } ?>
                                </div>
                                <h2 itemprop="name" class="entry_title">
                                    <a itemprop="url" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <?php the_content();?>
                                <a itemprop="url" class="qbutton small loop_more" href="<?php the_permalink(); ?>"><?php esc_html_e('See More', 'bridge'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <?php
}
?>

