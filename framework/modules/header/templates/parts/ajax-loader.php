<?php
$loading_animation = true;
if (bridge_qode_options()->getOptionValue('loading_animation') == 'off'){ $loading_animation = false; };

$loading_image =  "";
if (bridge_qode_options()->getOptionValue('loading_image') !== ''){ $loading_image = bridge_qode_options()->getOptionValue('loading_image'); };

?>
<?php if($loading_animation){
	if(bridge_qode_options()->getOptionValue('page_loading_effect') == 'yes') : ?>
		<div class="qode-page-loading-effect-holder">
	<?php endif; ?>
	<div class="ajax_loader"><div class="ajax_loader_1"><?php if($loading_image != ""){ ?><div class="ajax_loader_2"><img itemprop="image" src="<?php echo esc_url( $loading_image ); ?>" alt="<?php esc_html_e('Loader', 'bridge'); ?>" /></div><?php } else{ bridge_qode_loading_spinners(); } ?></div></div>
	<?php if(bridge_qode_options()->getOptionValue('page_loading_effect') == 'yes') : ?>
		</div>
	<?php endif; ?>
<?php } ?>