<?php
if(bridge_qode_options()->getOptionValue('show_back_button') == "yes"){

	$back_to_top_html = '<i class="fa fa-arrow-up"></i>';
	$back_to_top_icon_pack = bridge_qode_options()->getOptionValue('qode_back_to_top_icon_pack');

	if(isset($back_to_top_icon_pack) && !empty($back_to_top_icon_pack)) {
		$back_to_top_icon_param = bridge_qode_icon_collections()->getIconCollectionParamNameByKey($back_to_top_icon_pack);
		$back_to_top_icon = bridge_qode_options()->getOptionValue('qode_back_to_top_icon_pack_' . $back_to_top_icon_param);
		if(isset($back_to_top_icon) && !empty($back_to_top_icon)){
			$back_to_top_html = bridge_qode_icon_collections()->getIconHTML($back_to_top_icon, $back_to_top_icon_pack);
		}
	}
	?>
	<a id="back_to_top" href="#">
        <span class="fa-stack">
            <?php echo bridge_qode_get_module_part( $back_to_top_html ); ?>
        </span>
	</a>
<?php } ?>