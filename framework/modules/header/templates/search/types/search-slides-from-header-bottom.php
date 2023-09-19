<?php $qodeIconCollections = bridge_qode_return_icon_collections();?>
<form role="search" action="<?php echo esc_url(home_url('/')); ?>" class="qode_search_form_2" method="get">
	<?php if($header_in_grid){ ?>
    <div class="container">
        <div class="container_inner clearfix">
			<?php if($overlapping_content) {?><div class="overlapping_content_margin"><?php } ?>
				<?php } ?>
                <div class="form_holder_outer">
                    <div class="form_holder">
                        <input type="text" placeholder="<?php esc_html_e('Search', 'bridge'); ?>" name="s" class="qode_search_field" autocomplete="off" />
                        <a class="qode_search_submit" href="javascript:void(0)">
							<?php $qodeIconCollections->getSearchIcon(bridge_qode_option_get_value('search_icon_pack')); ?>
                        </a>
                    </div>
                </div>
				<?php if($header_in_grid){ ?>
				<?php if($overlapping_content) {?></div><?php } ?>
        </div>
    </div>
<?php } ?>
</form>