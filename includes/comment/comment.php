<?php

if (!function_exists('bridge_qode_comment')) {
function bridge_qode_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;

    $is_pingback_comment = $comment->comment_type == 'pingback';

    $comment_class = 'comment';

    if ( $is_pingback_comment ) {
        $comment_class .= ' pingback-comment';
    }

	?>

<li>
	<div class="<?php echo esc_attr($comment_class); ?>">
        <?php if ( ! $is_pingback_comment ) { ?>
		    <div class="image"> <?php echo get_avatar($comment, 75); ?> </div>
        <?php } ?>
		<div class="text">
			<h5 class="name"><?php if ( $is_pingback_comment ) { esc_html_e( 'Pingback:', 'bridge' ); } ?><?php echo get_comment_author_link(); ?></h5>
			<span class="comment_date"><?php esc_html_e('Posted at', 'bridge'); ?> <?php comment_date('H:i'); ?>h, <?php comment_date('d F'); ?></span>
			<?php comment_reply_link( array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']) ) ); ?>
			<div class="text_holder" id="comment-<?php echo comment_ID(); ?>">
				<?php comment_text(); ?>
			</div>
		</div>
	</div>                          
                
<?php if ($comment->comment_approved == '0') : ?>
<p><em><?php esc_html_e('Your comment is awaiting moderation.', 'bridge'); ?></em></p>
<?php endif; ?>
<?php 
}
}
?>