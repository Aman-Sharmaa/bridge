<?php 
$bridge_qode_options = bridge_qode_return_global_options();
$bridge_qode_blog_hide_comments = "";
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
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post_content_holder">
		<?php if ( has_post_thumbnail() ) { ?>
			<div class="post_image">
				<a itemprop="url" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<?php the_post_thumbnail('full'); ?>
				</a>
			</div>
		<?php } ?>
		<div class="post_text">
			<div class="post_text_inner">
				<h2 itemprop="name" class="entry_title"><span itemprop="dateCreated" class="date entry_date updated"><?php the_time('d M'); ?><meta itemprop="interactionCount" content="UserComments: <?php echo get_comments_number(bridge_qode_get_page_id()); ?>"/></span> <a itemprop="url" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<div class="post_info">
					<span class="time"><?php esc_html_e('Posted at','bridge'); ?> <?php the_time('H:i'); ?><?php esc_html_e('h','bridge'); ?></span>

					<?php $bridge_qode_category = get_the_category(get_the_ID()); ?>
					<?php if(!empty($bridge_qode_category)){ ?>
							<?php esc_html_e('in','bridge'); ?>
							<?php the_category(', '); ?>
					<?php } 
					?>
					<?php if($bridge_qode_blog_hide_author == "no") { ?>
						<span class="post_author">
                                    <?php esc_html_e('by','bridge'); ?>
							<a itemprop="author" class="post_author_link" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author_meta('display_name'); ?></a>
                                </span>
					<?php } ?>
					<?php if($bridge_qode_blog_hide_comments != "yes"){ ?>
						<span class="dots"><i class="fa fa-square"></i></span><a itemprop="url" class="post_comments" href="<?php comments_link(); ?>" target="_self"><?php comments_number('0 ' . esc_html__('Comments','bridge'), '1 '.esc_html__('Comment','bridge'), '% '.esc_html__('Comments','bridge') ); ?></a>
					<?php } ?>
					<?php if( $bridge_qode_like == "on" ) { ?>
						<span class="dots"><i class="fa fa-square"></i></span><div class="blog_like">
							<?php if( function_exists('bridge_core_like') ) bridge_core_like(); ?>
						</div>
					<?php } ?>
					<?php if(isset($bridge_qode_options['enable_social_share'])  && $bridge_qode_options['enable_social_share'] == "yes") { ?>
						<span class="dots"><i class="fa fa-square"></i></span><?php echo do_shortcode('[social_share]'); ?>
					<?php } ?>
				</div>
				<?php
					$bridge_qode_my_excerpt = get_the_excerpt();
					if ($bridge_qode_my_excerpt != '') {
						echo bridge_qode_get_module_part( $bridge_qode_my_excerpt );
					}
				?>
                <?php if ( ! post_password_required() ) { ?>
                    <div class="post_more">
                        <a itemprop="url" href="<?php the_permalink(); ?>" class="qbutton small"><?php esc_html_e('Read More','bridge'); ?></a>
                    </div>
                <?php } ?>
			</div>
		</div>
	</div>
</article>