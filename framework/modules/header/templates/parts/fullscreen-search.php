<?php if($enable_fullscreen_search=="yes"){ ?>
	<div class="fullscreen_search_holder <?php echo esc_attr($fullscreen_search_animation); ?>">
		<div class="close_container">
			<?php if($header_in_grid){ ?>
			<div class="container">
				<div class="container_inner clearfix" >
					<?php if($overlapping_content) {?><div class="overlapping_content_margin"><?php } ?>
						<?php } ?>
						<div class="search_close_holder">
							<div class="side_menu_button">
								<a class="fullscreen_search_close" href="javascript:void(0)">
									<?php bridge_qode_icon_collections()->getSearchClose(bridge_qode_options()->getOptionValue('search_icon_pack')); ?>
								</a>
							</div>
						</div>
						<?php if($header_in_grid){ ?>
						<?php if($overlapping_content) {?></div><?php } ?>
				</div>
			</div>
		<?php } ?>
		</div>
		<div class="fullscreen_search_table">
			<div class="fullscreen_search_cell">
				<div class="fullscreen_search_inner">
					<form role="search" action="<?php echo esc_url(home_url( '/' )); ?>" class="fullscreen_search_form" method="get">
						<div class="form_holder">
							<span class="search_label"><?php esc_html_e('Search:', 'bridge'); ?></span>
							<div class="field_holder">
								<input type="text"  name="s" class="search_field" autocomplete="off" />
								<div class="line"></div>
							</div>
							<a class="qode_search_submit search_submit" href="javascript:void(0)">
								<?php bridge_qode_icon_collections()->getSearchIcon(bridge_qode_options()->getOptionValue('search_icon_pack')); ?>
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php } ?>