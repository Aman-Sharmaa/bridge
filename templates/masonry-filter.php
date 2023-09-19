<?php
$qode_page_id = bridge_qode_get_page_id();
$bridge_qode_options = bridge_qode_return_global_options();
$bridge_qode_filter = "no";
if(isset($bridge_qode_options['blog_masonry_filter'])){
	$bridge_qode_filter = $bridge_qode_options['blog_masonry_filter'];
}
$bridge_qode_page_category = get_post_meta($qode_page_id, "qode_choose-blog-category", true);
if(is_category()){
	$bridge_qode_page_category = get_query_var( 'cat' );
}
if ($bridge_qode_page_category == "" && !is_category()) {
                $bridge_qode_args = array(
                    'parent' => 0
                );
                $bridge_qode_categories = get_categories( $bridge_qode_args );
            } else {
                $bridge_qode_args = array(
                    'parent' => $bridge_qode_page_category
                );
                $bridge_qode_categories = get_categories( $bridge_qode_args );
            }
if ($bridge_qode_filter == "yes" && count($bridge_qode_categories) > 0) {	?>

			<div class="filter_outer">
				<div class="filter_holder">
					<ul>
						<li class="filter" data-filter="*"><span><?php esc_html_e('All', 'bridge'); ?></span></li>
						<?php foreach ($bridge_qode_categories as $bridge_qode_category) { ?>
							 <li class="filter" data-filter="<?php echo ".category-" . $bridge_qode_category->slug; ?>"><span><?php echo esc_attr( $bridge_qode_category->name ); ?></span></li>
						<?php } ?>
					</ul>
				</div>
			</div>

      <?php  }
?>
