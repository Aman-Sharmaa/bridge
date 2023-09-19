<div class="post_text">
    <div class="post_text_inner">
		<span class="post_category"><?php the_category(' '); ?></span>
        <h5 itemprop="name" class="entry_title"><a itemprop="url" href="<?php the_permalink(); ?>" target="_self" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
        <div class="post_excerpt"><?php bridge_qode_excerpt(); ?></div>
        <div class="post_info">
			<span itemprop="dateCreated" class="date entry_date updated">
				<?php the_time(get_option('date_format')); ?>
				<meta itemprop="interactionCount" content="UserComments: <?php echo get_comments_number(bridge_qode_get_page_id()); ?>"/>
			</span>
            <?php if($blog_hide_author == 'no'){ ?>
            | <?php esc_html_e('by','bridge'); ?> <?php the_author(); ?>
            <?php } ?>
        </div>
    </div>
</div>