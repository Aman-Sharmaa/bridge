<?php 
$bridge_qode_options = bridge_qode_return_global_options();
$bridge_qode_blog_hide_comments = "";
if (isset($bridge_qode_options['blog_hide_comments'])) {
	$bridge_qode_blog_hide_comments = $bridge_qode_options['blog_hide_comments'];
}
$bridge_qode_blog_share_like_layout = 'in_post_info';
if (isset($bridge_qode_options['blog_share_like_layout'])) {
    $bridge_qode_blog_share_like_layout = $bridge_qode_options['blog_share_like_layout'];
}
$bridge_qode_enable_social_share = 'no';
if(isset($bridge_qode_options['enable_social_share'])){
    $bridge_qode_enable_social_share = $bridge_qode_options['enable_social_share'];
}
$bridge_qode_blog_author_info="no";
if (isset($bridge_qode_options['blog_author_info'])) {
	$bridge_qode_blog_author_info = $bridge_qode_options['blog_author_info'];
}
$bridge_qode_blog_author_info = "on";
if (isset($bridge_qode_options['qode_like'])) {
    $bridge_qode_blog_author_info = $bridge_qode_options['qode_like'];
}

$bridge_qode_itp_separator = 'no';
$bridge_qode_itp_separator_classes = array('qode-itp-single-separator', 'separator', 'center', 'small');

if(bridge_qode_options()->getOptionValue('blog_imt_post_separator') == 'yes'){
	$bridge_qode_itp_separator = 'yes';
}
if(bridge_qode_options()->getOptionValue('blog_imt_post_separator_gradient') == 'yes'){
	$bridge_qode_itp_separator_classes[] = 'qode-type1-gradient-left-to-right';
}

$bridge_qode_gallery_post_layout = bridge_qode_check_gallery_post_layout(get_the_ID());

$bridge_qode_params = array(
    'blog_share_like_layout' => $bridge_qode_blog_share_like_layout,
    'enable_social_share' => $bridge_qode_enable_social_share,
    'qode_like' => $bridge_qode_blog_author_info
);

$bridge_qode_post_format = get_post_format();
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post_content_holder">
		<?php if(get_post_meta(get_the_ID(), "qode_hide-featured-image", true) != "yes") {
			if ( has_post_thumbnail() ) { ?>
				<div class="post_image">
					<?php if($bridge_qode_post_format == 'gallery') {

						$bridge_qode_post_content = get_the_content();
						preg_match('/\[gallery.*ids=.(.*).\]/', $bridge_qode_post_content, $bridge_qode_ids);
						$bridge_qode_array_id = explode(",", $bridge_qode_ids[1]);
						$bridge_qode_content =  str_replace($bridge_qode_ids[0], "", $bridge_qode_post_content);
						$bridge_qode_filtered_content = apply_filters( 'the_content', $bridge_qode_content);

						?>
							<div class="flexslider">
								<ul class="slides">
									<?php
									foreach ($bridge_qode_array_id as $bridge_qode_img_id) { ?>
										<li><a itemprop="url" href="<?php the_permalink(); ?>">
												<?php echo wp_get_attachment_image($bridge_qode_img_id, 'full'); ?>
											</a>
										</li>
									<?php } ?>
								</ul>
							</div>

					<?php } else {
						the_post_thumbnail('full');
					} ?>
					<div class="single_top_part_holder">
						<div class="single_top_part">
							<div class="single_top_part_inner">
								<div class="grid_section">
									<div class="section_inner">
										<span class="post_category"><?php the_category(', '); ?></span>
										<h1 itemprop="name" class="entry_title"><?php the_title(); ?></h1>
										<?php if($bridge_qode_itp_separator == "yes"){ ?>
											<span <?php bridge_qode_class_attribute(implode(' ', $bridge_qode_itp_separator_classes)) ?>></span>
										<?php } ?>
										<div class="post_info">
											<span class="date entry_date updated" itemprop="dateCreated">
												<?php the_time(get_option('date_format')); ?>
												<meta itemprop="interactionCount" content="UserComments: <?php echo get_comments_number(bridge_qode_get_page_id()); ?>"/>
											</span><span class="vertical_separator">|</span>
											<span class="post_author">
												<?php esc_html_e('by','bridge'); ?>
												<a itemprop="author" class="post_author_link" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author_meta('display_name'); ?></a>
											</span>
											<?php if($bridge_qode_blog_hide_comments != "yes"){ ?>
												<span class="vertical_separator">|</span>
												<a itemprop="url" class="post_comments" href="<?php comments_link(); ?>" target="_self"><?php comments_number('0 ' . esc_html__('Comments','bridge'), '1 '.esc_html__('Comment','bridge'), '% '.esc_html__('Comments','bridge') ); ?></a>
											<?php } ?>
											<?php if ($bridge_qode_blog_author_info == "on") { ?>
												<span class="vertical_separator">|</span>
												<div class="blog_like">
													<?php if (function_exists('bridge_core_like')) bridge_core_like(); ?>
												</div>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } } ?>
		<div class="itp_post_text">
			<div class="post_text_inner">
				<?php
					if($bridge_qode_post_format == 'gallery') {
						print bridge_qode_get_module_part( $bridge_qode_filtered_content );
					} else {
						the_content();
					}
				?>
			</div>
		</div>
	</div>
			<div class="grid_section">
				<div class="section_inner">
					<div class="single_bottom_part">
						<div class="single_bottom_part_left">
							<?php if( has_tag()) { ?>
								<div class="single_tags clearfix">
									<div class="tags_text">
										<?php
										if ((isset($bridge_qode_options['tags_border_style']) && $bridge_qode_options['tags_border_style'] !== '') || (isset($bridge_qode_options['tags_background_color']) && $bridge_qode_options['tags_background_color'] !== '')){
											the_tags('', ' ', '');
										}
										else{
											the_tags('', ', ', '');
										}
										?>
									</div>
								</div>
							<?php } ?>
						</div>
						<div class="single_bottom_part_right">
							<?php
							if($bridge_qode_blog_share_like_layout == 'below_post_text') {
								echo do_shortcode('[social_share_list]');
							}
							?>
						</div>
					</div>

					<?php
					$bridge_qode_args_pages = array(
						'before'           => '<p class="single_links_pages">',
						'after'            => '</p>',
						'link_before'      => '<span>',
						'link_after'       => '</span>',
						'pagelink'         => '%'
					);

					wp_link_pages($bridge_qode_args_pages);
					?>
					<?php if($bridge_qode_blog_author_info == "yes") { ?>
						<div class="author_description">
							<div class="author_description_inner">
								<div class="image">
									<?php echo get_avatar(get_the_author_meta( 'ID' ), 75); ?>
								</div>
								<div class="author_text_holder">
									<h5 class="author_name vcard author">
				<span class="fu">
				<?php
				if(get_the_author_meta('first_name') != "" || get_the_author_meta('last_name') != "") {
					echo get_the_author_meta('first_name') . " " . get_the_author_meta('last_name');
				} else {
					echo get_the_author_meta('display_name');
				}
				?>
			    </span>
									</h5>
									<span class="author_email"><?php echo get_the_author_meta('email'); ?></span>
									<?php if(get_the_author_meta('description') != "") { ?>
										<div class="author_text">
											<p><?php echo get_the_author_meta('description') ?></p>
										</div>
									<?php } ?>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>


</article>