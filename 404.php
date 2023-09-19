<?php $bridge_qode_options = bridge_qode_return_global_options(); ?>
<?php get_header(); ?>

			<?php get_template_part( 'title' ); ?>
			<div class="container">
                <?php if(isset($bridge_qode_options['overlapping_content']) && $bridge_qode_options['overlapping_content'] == 'yes') {?>
                    <div class="overlapping_content"><div class="overlapping_content_inner">
                <?php } ?>
				<div class="container_inner default_template_holder">
					<div class="page_not_found">
						<h2><?php if($bridge_qode_options['404_subtitle'] != ""): echo esc_html( $bridge_qode_options['404_subtitle'] ); else: ?> <?php esc_html_e('The page you are looking for is not found', 'bridge'); ?> <?php endif;?></h2>
                        <p><?php if($bridge_qode_options['404_text'] != ""): echo esc_html( $bridge_qode_options['404_text'] ); else: ?> <?php esc_html_e('The page you are looking for does not exist. It may have been moved, or removed altogether. Perhaps you can return back to the site\'s homepage and see if you can find what you are looking for.', 'bridge'); ?> <?php endif;?></p>
						<div class="separator  transparent center  " style="margin-top:35px;"></div>
						<p><a itemprop="url" class="qbutton with-shadow" href="<?php echo esc_url(home_url( '/' )); ?>"><?php if($bridge_qode_options['404_backlabel'] != ""): echo esc_html( $bridge_qode_options['404_backlabel'] ); else: ?> <?php esc_html_e('Back to homepage', 'bridge'); ?> <?php endif;?></a></p>
						<div class="separator  transparent center  " style="margin-top:35px;"></div>
					</div>
				</div>
                <?php if(isset($bridge_qode_options['overlapping_content']) && $bridge_qode_options['overlapping_content'] == 'yes') {?>
                    </div></div>
                <?php } ?>
			</div>
<?php get_footer(); ?>
