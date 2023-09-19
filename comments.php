<div class="comment_holder clearfix" id="comments">
<div class="comment_number"><div class="comment_number_inner"><h5><?php comments_number( esc_html__('No Comments','bridge'), '1 '.esc_html__('Comment','bridge'), '% '.esc_html__('Comments','bridge')); ?></h5></div></div>
<div class="comments">
<?php if ( post_password_required() ) : ?>
				<p class="nopassword"><?php esc_html_e( 'This post is password protected. Enter the password to view any comments.', 'bridge' ); ?></p>
			</div></div>
<?php
		
		return;
	endif;
?>
<?php if ( have_comments() ) : ?>

	<ul class="comment-list">
		<?php wp_list_comments( array_unique( array_merge( array( 'callback' => 'bridge_qode_comment' ), apply_filters( 'bridge_qode_filter_comments_callback', array() ) ) ) ); ?>
	</ul>


<?php // End Comments ?>

 <?php else : // this is displayed if there are no comments so far 

	if ( ! comments_open() ) :
?>
		<!-- If comments are open, but there are no comments. -->

	 
		<!-- If comments are closed. -->
		<p><?php esc_html_e('Sorry, the comment form is closed at this time.', 'bridge'); ?></p>

	<?php endif; ?>
<?php endif; ?>
</div></div>
<?php
$bridge_qode_commenter = wp_get_current_commenter();
$bridge_qode_req = get_option( 'require_name_email' );
$bridge_qode_aria_req = ( $bridge_qode_req ? " aria-required='true'" : '' );
$bridge_qode_consent  = empty( $bridge_qode_commenter['comment_author_email'] ) ? '' : ' checked="checked"';
$bridge_qode_args = array(
	'id_form' => 'commentform',
	'id_submit' => 'submit_comment',
	'title_reply'=>'<h5>'. esc_html__( 'Post A Comment','bridge' ) .'</h5>',
	'title_reply_to' => esc_html__( 'Post A Reply to %s','bridge' ),
	'cancel_reply_link' => esc_html__( 'Cancel Reply','bridge' ),
	'label_submit' => esc_html__( 'Submit','bridge' ),
	'comment_field'        => apply_filters( 'qode_comment_form_textarea_field', '<textarea id="comment" placeholder="' . esc_html__( 'Write your comment here...', 'bridge' ) . '" name="comment" cols="45" rows="8" aria-required="true"></textarea>' ),
	'comment_notes_before' => '',
	'comment_notes_after' => '',
	'fields' => apply_filters( 'comment_form_default_fields', array(
		'author' => '<div class="three_columns clearfix"><div class="column1"><div class="column_inner"><input id="author" name="author" placeholder="'. esc_html__( 'Your full name','bridge' ) .'" type="text" value="' . esc_attr( $bridge_qode_commenter['comment_author'] ) . '"' . $bridge_qode_aria_req . ' /></div></div>',
		'email' => '<div class="column2"><div class="column_inner"><input id="email" name="email" placeholder="'. esc_html__( 'E-mail address','bridge' ) .'" type="text" value="' . esc_attr(  $bridge_qode_commenter['comment_author_email'] ) . '"' . $bridge_qode_aria_req . ' /></div></div>',
		'url' => '<div class="column3"><div class="column_inner"><input id="url" name="url" type="text" placeholder="'. esc_html__( 'Website','bridge' ) .'" value="' . esc_attr( $bridge_qode_commenter['comment_author_url'] ) . '" /></div></div></div>',
		'cookies' => '<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $bridge_qode_consent . ' />' .
					'<label for="wp-comment-cookies-consent">' . esc_html__( 'Save my name, email, and website in this browser for the next time I comment.', 'bridge' ) . '</label></p>',
		  ) ) );

$bridge_qode_args = apply_filters( 'bridge_qode_filter_comment_form_final_fields', $bridge_qode_args );
 ?>
 <div class="comment_pager">
	<p><?php paginate_comments_links(); ?></p>
 </div>
 <div class="comment_form">
	<?php comment_form($bridge_qode_args); ?>
</div>