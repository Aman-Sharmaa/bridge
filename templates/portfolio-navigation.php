<?php
$bridge_qode_options = bridge_qode_return_global_options();
$bridge_qode_enable_navigation_title = isset($bridge_qode_options['enable_navigation_title']) && $bridge_qode_options['enable_navigation_title'] == 'yes';
$bridge_qode_additional_navigation_class = $bridge_qode_enable_navigation_title ? 'navigation_title' : '';

$bridge_qode_navigation_through_category = false;
if (isset($bridge_qode_options['portfolio_navigation_through_same_category']) && $bridge_qode_options['portfolio_navigation_through_same_category'] === "yes") {
    $bridge_qode_navigation_through_category = true;
}
?>
<div class="portfolio_navigation <?php echo esc_attr($bridge_qode_additional_navigation_class); ?>">
    <div class="portfolio_prev">
        <?php
            if($bridge_qode_navigation_through_category){
                $bridge_qode_prev_html_info = '';
                if(get_previous_post() != "" && $bridge_qode_enable_navigation_title){
                    $bridge_qode_prev_post = get_previous_post(true,'','portfolio_category');
                    $bridge_qode_prev_html_info = bridge_qode_get_portfolio_navigation_post_category_and_title($bridge_qode_prev_post);
                }

                $bridge_qode_prev_html = '<i class="fa fa-angle-left"></i>'.$bridge_qode_prev_html_info;
                previous_post_link('%link', $bridge_qode_prev_html, true,'','portfolio_category');
            } else {
                $bridge_qode_prev_html_info = '';
                if(get_previous_post() != "" && $bridge_qode_enable_navigation_title){
                    $bridge_qode_prev_post = get_previous_post();
                    $bridge_qode_prev_html_info = bridge_qode_get_portfolio_navigation_post_category_and_title($bridge_qode_prev_post);
                }

                $bridge_qode_prev_html = '<i class="fa fa-angle-left"></i>'.$bridge_qode_prev_html_info;
                previous_post_link('%link', $bridge_qode_prev_html);
            }
        ?>
    </div>
    <?php if(get_post_meta(get_the_ID(), "qode_choose-portfolio-list-page", true) != ""){ ?>
        <div class="portfolio_button"><a itemprop="url" href="<?php echo get_permalink(get_post_meta(get_the_ID(), "qode_choose-portfolio-list-page", true)); ?>"></a></div>
    <?php } ?>
    <div class="portfolio_next">
        <?php
            if($bridge_qode_navigation_through_category){
                $bridge_qode_next_html_info = '';
                if(get_next_post() != "" && $bridge_qode_enable_navigation_title){
                    $bridge_qode_next_post = get_next_post(true,'','portfolio_category');
                    $bridge_qode_next_html_info = bridge_qode_get_portfolio_navigation_post_category_and_title($bridge_qode_next_post);
                }
                $bridge_qode_next_html = $bridge_qode_next_html_info.'<i class="fa fa-angle-right"></i>';
                next_post_link('%link',$bridge_qode_next_html, true,'','portfolio_category');
            } else {
                $bridge_qode_next_html_info = '';
                if(get_next_post() != "" && $bridge_qode_enable_navigation_title){
                    $bridge_qode_next_post = get_next_post();
                    $bridge_qode_next_html_info = bridge_qode_get_portfolio_navigation_post_category_and_title($bridge_qode_next_post);
                }
                $bridge_qode_next_html = $bridge_qode_next_html_info.'<i class="fa fa-angle-right"></i>';
                next_post_link('%link',$bridge_qode_next_html);
            }
        ?>
    </div>
</div>