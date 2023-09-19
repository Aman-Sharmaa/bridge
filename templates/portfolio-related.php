<?php
$bridge_qode_options = bridge_qode_return_global_options();
if(isset($bridge_qode_options['enable_portfolio_related']) && $bridge_qode_options['enable_portfolio_related'] == 'yes') {
    $bridge_qode_query = bridge_qode_get_related_post_type(get_the_ID(), array('posts_per_page' => '4'));
    $bridge_qode_image_size = 'full';
    if(isset($bridge_qode_options['portfolio_related_image_size']) && $bridge_qode_options['portfolio_related_image_size'] !== '') {
        $bridge_qode_image_size = $bridge_qode_options['portfolio_related_image_size'];
    }

    if (is_object($bridge_qode_query)) {?>
        <div class="qode_portfolio_related">
            <h4><?php esc_html_e('Related Projects', 'bridge'); ?></h4>

            <div class="projects_holder_outer v4 portfolio_with_space portfolio_standard ">
                <div class="projects_holder clearfix v4 standard">
                    <?php if ($bridge_qode_query->have_posts()) : while ($bridge_qode_query->have_posts()) : $bridge_qode_query->the_post();

                        $bridge_qode_categories = wp_get_post_terms(get_the_ID(), 'portfolio_category');
                        $bridge_qode_category_html = '<span class="project_category">';
                        $bridge_qode_k = 1;
                        foreach ($bridge_qode_categories as $bridge_qode_cat) {
                            $bridge_qode_category_html .= $bridge_qode_cat->name;
                            if (count($bridge_qode_categories) != $bridge_qode_k) {
                                $bridge_qode_category_html .= ', ';
                            }
                            $bridge_qode_k++;
                        }
                        $bridge_qode_category_html .= '</span>';
                        ?>

                        <article class="mix">
                            <div class="image_holder">
                                <a itemprop="url" class="portfolio_link_for_touch" href="<?php echo esc_url(get_permalink()); ?>">
                                    <span class="image"><?php echo get_the_post_thumbnail(get_the_ID(), $bridge_qode_image_size); ?></span>
                                </a>
                        <span class="text_holder">
                        <span class="text_outer">
                        <span class="text_inner">
                        <span class="feature_holder">
                        <span class="feature_holder_icons">
                            <a itemprop="url" class='preview qbutton small white' href='<?php echo esc_url(get_permalink()); ?>'
                               target='_self'> <?php esc_html_e('view', 'bridge'); ?></a>
                        </span></span></span></span></span>
                            </div>
                            <div class="portfolio_description ">

                                <h5 itemprop="name" class="portfolio_title entry_title">
                                    <a itemprop="url" href="<?php echo esc_url(get_permalink()) ?>">
                                        <?php echo esc_attr(get_the_title()); ?>
                                    </a>
                                </h5>
                                <?php echo wp_kses_post($bridge_qode_category_html); ?>
                            </div>

                        </article>

                    <?php
                    endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                    <div class="filler"></div>
                    <div class="filler"></div>
                    <div class="filler"></div>
                    <div class="filler"></div>
                </div>
            </div>
        </div>
    <?php }
}
?>