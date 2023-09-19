<?php if($display_header_top == "yes"){ ?>
	<div class="header_top clearfix" <?php echo wp_kses_post( $header_top_color_per_page ); ?> >
		<?php if($header_in_grid){ ?>
		<div class="container">
			<div class="container_inner clearfix">
				<?php if($overlapping_content) {?><div class="overlapping_content_margin"><?php } ?>
					<?php } ?>
					<div class="left">
						<div class="inner">
							<?php
							dynamic_sidebar('header_left');
							?>
						</div>
					</div>
					<div class="right">
						<div class="inner">
							<?php
							dynamic_sidebar('header_right');
							?>
						</div>
					</div>
					<?php if($header_in_grid){ ?>
					<?php if($overlapping_content) {?></div><?php } ?>
			</div>
		</div>
	<?php } ?>
	</div>
<?php } ?>