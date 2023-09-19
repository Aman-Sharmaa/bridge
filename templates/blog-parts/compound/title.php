<div class="post_title">
    <span class="category"><?php the_category(', '); ?><span class="date">  / <?php the_time('d.m.Y'); ?></span></span>
    <h2 itemprop="name" class="entry_title"><a itemprop="url" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    <?php
    $separator_style = array(
        'margin-top: 18px',
        'margin-bottom: 32px',
        'width: 27px'
    );
    ?>
    <div class="separator  small center  " <?php echo bridge_qode_get_inline_style( implode('; ', $separator_style) ); ?>></div>
</div>