<?php get_header(); ?>
<?php
$bridge_qode_id = bridge_qode_get_page_id();
$bridge_qode_sidebar = get_post_meta($bridge_qode_id, "qode_show-sidebar", true); 

if ( get_query_var('paged') ) { $bridge_qode_paged = get_query_var('paged'); }
elseif ( get_query_var('page') ) { $bridge_qode_paged = get_query_var('page'); }
else { $bridge_qode_paged = 1; }

$bridge_qode_blog_hide_comments = "";
if (isset($bridge_qode_options['blog_hide_comments']))
	$bridge_qode_blog_hide_comments = $bridge_qode_options['blog_hide_comments'];

?>
	
	<?php get_template_part( 'title' ); ?>
	<?php
		$bridge_qode_revslider = get_post_meta($bridge_qode_id, "qode_revolution-slider", true);
		if (!empty($bridge_qode_revslider)){ ?>
			<div class="q_slider"><div class="q_slider_inner">
			<?php echo do_shortcode($bridge_qode_revslider); ?>
			</div></div>
		<?php
		}
		?>	
	<div class="container">
        <?php if(isset($bridge_qode_options['overlapping_content']) && $bridge_qode_options['overlapping_content'] == 'yes') {?>
            <div class="overlapping_content"><div class="overlapping_content_inner">
        <?php } ?>
		<div class="container_inner default_template_holder clearfix">
			<?php if(($bridge_qode_sidebar == "default")||($bridge_qode_sidebar == "")) : ?>
				<?php 
					get_template_part('templates/blog', 'structure');
				?>
			<?php elseif($bridge_qode_sidebar == "1" || $bridge_qode_sidebar == "2"): ?>
				<div class="<?php if($bridge_qode_sidebar == "1"):?>two_columns_66_33<?php elseif($bridge_qode_sidebar == "2") : ?>two_columns_75_25<?php endif; ?> background_color_sidebar grid2 clearfix">
					<div class="column1">
						<div class="column_inner">
							<?php 
								get_template_part('templates/blog', 'structure');
							?>
						</div>
					</div>
					<div class="column2">
						<?php get_sidebar(); ?>	
					</div>
				</div>
		<?php elseif($bridge_qode_sidebar == "3" || $bridge_qode_sidebar == "4"): ?>
				<div class="<?php if($bridge_qode_sidebar == "3"):?>two_columns_33_66<?php elseif($bridge_qode_sidebar == "4") : ?>two_columns_25_75<?php endif; ?> background_color_sidebar grid2 clearfix">
					<div class="column1">
					<?php get_sidebar(); ?>	
					</div>
					<div class="column2">
						<div class="column_inner">
							<?php 
								get_template_part('templates/blog', 'structure');
							?>
						</div>
					</div>
				</div>
			<?php endif; ?>
		</div>
        <?php if(isset($bridge_qode_options['overlapping_content']) && $bridge_qode_options['overlapping_content'] == 'yes') {?>
            </div></div>
        <?php } ?>
	</div>
<?php get_footer(); ?>