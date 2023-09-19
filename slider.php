<?php
$bridge_qode_slider_shortcode = get_post_meta(bridge_qode_get_page_id(), "qode_revolution-slider", true);
if (!empty($bridge_qode_slider_shortcode)){ ?>
	<div class="q_slider"><div class="q_slider_inner">
			<?php echo do_shortcode($bridge_qode_slider_shortcode); ?>
		</div></div>
	<?php
}
?>