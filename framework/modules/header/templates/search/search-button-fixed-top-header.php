<?php if(bridge_qode_options()->getOptionValue('enable_search') == 'yes') {
	$qodeIconCollections = bridge_qode_return_icon_collections();
	$search_type_class = 'search_covers_header';
	?>
    <a class="search_button <?php echo esc_attr($search_type_class); ?> <?php echo esc_attr($header_button_size); ?>" href="javascript:void(0)">
		<?php $qodeIconCollections->getSearchIcon(bridge_qode_option_get_value('search_icon_pack')); ?>
    </a>
<?php } ?>