<?php
$root = dirname(dirname(dirname(dirname(dirname(__FILE__)))));
if ( file_exists( $root.'/wp-load.php' ) ) {
    require_once( $root.'/wp-load.php' );
} else {
	$root = dirname(dirname(dirname(dirname(dirname(dirname(__FILE__))))));
	if ( file_exists( $root.'/wp-load.php' ) ) {
    	require_once( $root.'/wp-load.php' );
	}
}
header("Content-type: text/css; charset=utf-8");
?>
@media only screen and (max-width: 1000px){
	<?php if (!empty($bridge_qode_options['header_background_color'])) { ?>
	.header_bottom {
		background-color: <?php echo esc_attr($bridge_qode_options['header_background_color']);  ?>;
	}
	<?php } ?>
	<?php if (!empty($bridge_qode_options['mobile_background_color'])) { ?>
		.header_bottom,
		nav.mobile_menu{
			background-color: <?php echo esc_attr($bridge_qode_options['mobile_background_color']);  ?> !important;
		}
	<?php } ?>
	<?php if (isset($bridge_qode_options['blog_slider_box_width']) && $bridge_qode_options['blog_slider_box_width']!== '' && $bridge_qode_options['blog_slider_box_width'] <= 40){ ?>
		.blog_slider_holder .blog_slider.simple_slider .blog_text_holder_inner2{
			width: <?php echo esc_attr($bridge_qode_options['blog_slider_box_width'])*1.3;?>%;
		}
	<?php }
	?>
	<?php if (isset($bridge_qode_options['margin_after_title_responsive']) && $bridge_qode_options['margin_after_title_responsive'] !== '' ) { ?>
		.content .container .container_inner.default_template_holder,
		.content .container .container_inner.page_container_inner {
			padding-top:<?php echo intval($bridge_qode_options['margin_after_title_responsive']);  ?>px !important; /*important because of the inline style on page*/
		}
	<?php } ?>
}
@media only screen and (min-width: 480px) and (max-width: 768px){
	
	<?php if (isset($bridge_qode_options['parallax_minheight']) && !empty($bridge_qode_options['parallax_minheight'])) { ?>
        section.parallax_section_holder{
			height: auto !important;
			min-height: <?php echo intval($bridge_qode_options['parallax_minheight']); ?>px;
		}
	<?php } ?>
	<?php if (isset($bridge_qode_options['header_background_color_mobile']) &&  !empty($bridge_qode_options['header_background_color_mobile'])) { ?>
		header{
			background-color: <?php echo esc_attr($bridge_qode_options['header_background_color_mobile']);  ?> !important;
			background-image:none;
		}
	<?php } ?>
}
@media only screen and (max-width: 768px){
	<?php if ((isset($bridge_qode_options['h1_fontsize_tablet']) && $bridge_qode_options['h1_fontsize_tablet'] !== '') || (isset($bridge_qode_options['h1_lineheight_tablet']) && $bridge_qode_options['h1_lineheight_tablet'] !== '') || (isset($bridge_qode_options['h1_letterspacing_tablet']) && $bridge_qode_options['h1_letterspacing_tablet'] !== '')) { ?>
		h1, h1 a, body.qode-overridden-elementors-fonts .elementor-widget-heading h1.elementor-heading-title {
			<?php if (isset($bridge_qode_options['h1_fontsize_tablet']) && $bridge_qode_options['h1_fontsize_tablet'] !== '') { ?>font-size: <?php echo intval($bridge_qode_options['h1_fontsize_tablet']); ?>px; <?php } ?>
			<?php if (isset($bridge_qode_options['h1_lineheight_tablet']) && $bridge_qode_options['h1_lineheight_tablet'] !== '') { ?>line-height: <?php echo intval($bridge_qode_options['h1_lineheight_tablet']); ?>px; <?php } ?>
		    <?php if (isset($bridge_qode_options['h1_letterspacing_tablet']) && $bridge_qode_options['h1_letterspacing_tablet'] !== '') { ?>letter-spacing: <?php echo intval($bridge_qode_options['h1_letterspacing_tablet']); ?>px; <?php } ?>
		}
	<?php } ?>

	<?php if ((isset($bridge_qode_options['h2_fontsize_tablet']) && $bridge_qode_options['h2_fontsize_tablet'] !== '') || (isset($bridge_qode_options['h2_lineheight_tablet']) && $bridge_qode_options['h2_lineheight_tablet'] !== '') || (isset($bridge_qode_options['h2_letterspacing_tablet']) && $bridge_qode_options['h2_letterspacing_tablet'] !== '')) { ?>
		h2, h2 a, body.qode-overridden-elementors-fonts .elementor-widget-heading h2.elementor-heading-title {
			<?php if (isset($bridge_qode_options['h2_fontsize_tablet']) && $bridge_qode_options['h2_fontsize_tablet'] !== '') { ?>font-size: <?php echo intval($bridge_qode_options['h2_fontsize_tablet']); ?>px; <?php } ?>
			<?php if (isset($bridge_qode_options['h2_lineheight_tablet']) && $bridge_qode_options['h2_lineheight_tablet'] !== '') { ?>line-height: <?php echo intval($bridge_qode_options['h2_lineheight_tablet']); ?>px; <?php } ?>
		    <?php if (isset($bridge_qode_options['h2_letterspacing_tablet']) && $bridge_qode_options['h2_letterspacing_tablet'] !== '') { ?>letter-spacing: <?php echo intval($bridge_qode_options['h2_letterspacing_tablet']); ?>px; <?php } ?>
		}
	<?php } ?>

	<?php if ((isset($bridge_qode_options['h3_fontsize_tablet']) && $bridge_qode_options['h3_fontsize_tablet'] !== '') || (isset($bridge_qode_options['h3_lineheight_tablet']) && $bridge_qode_options['h3_lineheight_tablet'] !== '') || (isset($bridge_qode_options['h3_letterspacing_tablet']) && $bridge_qode_options['h3_letterspacing_tablet'] !== '')) { ?>
		h3, h3 a, body.qode-overridden-elementors-fonts .elementor-widget-heading h3.elementor-heading-title {
			<?php if (isset($bridge_qode_options['h3_fontsize_tablet']) && $bridge_qode_options['h3_fontsize_tablet'] !== '') { ?>font-size: <?php echo intval($bridge_qode_options['h3_fontsize_tablet']); ?>px; <?php } ?>
			<?php if (isset($bridge_qode_options['h3_lineheight_tablet']) && $bridge_qode_options['h3_lineheight_tablet'] !== '') { ?>line-height: <?php echo intval($bridge_qode_options['h3_lineheight_tablet']); ?>px; <?php } ?>
		    <?php if (isset($bridge_qode_options['h3_letterspacing_tablet']) && $bridge_qode_options['h3_letterspacing_tablet'] !== '') { ?>letter-spacing: <?php echo intval($bridge_qode_options['h3_letterspacing_tablet']); ?>px; <?php } ?>
		}
	<?php } ?>

	<?php if ((isset($bridge_qode_options['h4_fontsize_tablet']) && $bridge_qode_options['h4_fontsize_tablet'] !== '') || (isset($bridge_qode_options['h4_lineheight_tablet']) && $bridge_qode_options['h4_lineheight_tablet'] !== '') || (isset($bridge_qode_options['h4_letterspacing_tablet']) && $bridge_qode_options['h4_letterspacing_tablet'] !== '')) { ?>
		h4, h4 a, body.qode-overridden-elementors-fonts .elementor-widget-heading h4.elementor-heading-title {
			<?php if (isset($bridge_qode_options['h4_fontsize_tablet']) && $bridge_qode_options['h4_fontsize_tablet'] !== '') { ?>font-size: <?php echo intval($bridge_qode_options['h4_fontsize_tablet']); ?>px; <?php } ?>
			<?php if (isset($bridge_qode_options['h4_lineheight_tablet']) && $bridge_qode_options['h4_lineheight_tablet'] !== '') { ?>line-height: <?php echo intval($bridge_qode_options['h4_lineheight_tablet']); ?>px; <?php } ?>
		    <?php if (isset($bridge_qode_options['h4_letterspacing_tablet']) && $bridge_qode_options['h4_letterspacing_tablet'] !== '') { ?>letter-spacing: <?php echo intval($bridge_qode_options['h4_letterspacing_tablet']); ?>px; <?php } ?>
		}
	<?php } ?>

	<?php if ((isset($bridge_qode_options['h5_fontsize_tablet']) && $bridge_qode_options['h5_fontsize_tablet'] !== '') || (isset($bridge_qode_options['h5_lineheight_tablet']) && $bridge_qode_options['h5_lineheight_tablet'] !== '') || (isset($bridge_qode_options['h5_letterspacing_tablet']) && $bridge_qode_options['h5_letterspacing_tablet'] !== '')) { ?>
		h5, h5 a, body.qode-overridden-elementors-fonts .elementor-widget-heading h5.elementor-heading-title {
			<?php if (isset($bridge_qode_options['h5_fontsize_tablet']) && $bridge_qode_options['h5_fontsize_tablet'] !== '') { ?>font-size: <?php echo intval($bridge_qode_options['h5_fontsize_tablet']); ?>px; <?php } ?>
			<?php if (isset($bridge_qode_options['h5_lineheight_tablet']) && $bridge_qode_options['h5_lineheight_tablet'] !== '') { ?>line-height: <?php echo intval($bridge_qode_options['h5_lineheight_tablet']); ?>px; <?php } ?>
		    <?php if (isset($bridge_qode_options['h5_letterspacing_tablet']) && $bridge_qode_options['h5_letterspacing_tablet'] !== '') { ?>letter-spacing: <?php echo intval($bridge_qode_options['h5_letterspacing_tablet']); ?>px; <?php } ?>
		}
	<?php } ?>

	<?php if ((isset($bridge_qode_options['h6_fontsize_tablet']) && $bridge_qode_options['h6_fontsize_tablet'] !== '') || (isset($bridge_qode_options['h6_lineheight_tablet']) && $bridge_qode_options['h6_lineheight_tablet'] !== '') || (isset($bridge_qode_options['h6_letterspacing_tablet']) && $bridge_qode_options['h6_letterspacing_tablet'] !== '')) { ?>
		h6, h6 a, body.qode-overridden-elementors-fonts .elementor-widget-heading h6.elementor-heading-title {
			<?php if (isset($bridge_qode_options['h6_fontsize_tablet']) && $bridge_qode_options['h6_fontsize_tablet'] !== '') { ?>font-size: <?php echo intval($bridge_qode_options['h6_fontsize_tablet']); ?>px; <?php } ?>
			<?php if (isset($bridge_qode_options['h6_lineheight_tablet']) && $bridge_qode_options['h6_lineheight_tablet'] !== '') { ?>line-height: <?php echo intval($bridge_qode_options['h6_lineheight_tablet']); ?>px; <?php } ?>
		    <?php if (isset($bridge_qode_options['h6_letterspacing_tablet']) && $bridge_qode_options['h6_letterspacing_tablet'] !== '') { ?>letter-spacing: <?php echo intval($bridge_qode_options['h6_letterspacing_tablet']); ?>px; <?php } ?>
		}
	<?php } ?>

	<?php if ((isset($bridge_qode_options['text_fontsize_tablet']) && $bridge_qode_options['text_fontsize_tablet'] !== '') || (isset($bridge_qode_options['text_lineheight_tablet']) && $bridge_qode_options['text_lineheight_tablet'] !== '') || (isset($bridge_qode_options['text_letterspacing_tablet']) && $bridge_qode_options['text_letterspacing_tablet'] !== '')) { ?>
		body,
		p,
        body.qode-overridden-elementors-fonts .elementor-widget-heading p.elementor-heading-title {
			<?php if (isset($bridge_qode_options['text_fontsize_tablet']) && $bridge_qode_options['text_fontsize_tablet'] !== '') { ?>font-size: <?php echo intval($bridge_qode_options['text_fontsize_tablet']); ?>px; <?php } ?>
			<?php if (isset($bridge_qode_options['text_lineheight_tablet']) && $bridge_qode_options['text_lineheight_tablet'] !== '') { ?>line-height: <?php echo intval($bridge_qode_options['text_lineheight_tablet']); ?>px; <?php } ?>
		    <?php if (isset($bridge_qode_options['text_letterspacing_tablet']) && $bridge_qode_options['text_letterspacing_tablet'] !== '') { ?>letter-spacing: <?php echo intval($bridge_qode_options['text_letterspacing_tablet']); ?>px; <?php } ?>
		}
	<?php } ?>

	<?php if (isset($bridge_qode_options['footer_bottom_padding_right']) && $bridge_qode_options['footer_bottom_padding_right'] != "" && $bridge_qode_options['footer_bottom_padding_right'] > 10){ ?>
		.footer_bottom_holder{
			padding-right:10px;
		}
	<?php }
	if (isset($bridge_qode_options['footer_bottom_padding_left']) && $bridge_qode_options['footer_bottom_padding_left'] != "" && $bridge_qode_options['footer_bottom_padding_left'] > 10){ ?>
		.footer_bottom_holder{
			padding-left:10px;
		}
	<?php } ?>

	<?php if (isset($bridge_qode_options['blog_slider_box_width']) && $bridge_qode_options['blog_slider_box_width'] !== '' && $bridge_qode_options['blog_slider_box_width'] < 65){ ?>
		.blog_slider_holder .blog_slider.simple_slider .blog_text_holder_inner2 {
			width: 65%;
		}
	<?php }
	?>

	<?php

	$small_tablet_title_fs = bridge_qode_options()->getOptionValue('small_tablet_title_fs');
	$small_tablet_title_lh = bridge_qode_options()->getOptionValue('small_tablet_title_lh');

	$medium_tablet_title_fs = bridge_qode_options()->getOptionValue('medium_tablet_title_fs');
	$medium_tablet_title_lh = bridge_qode_options()->getOptionValue('medium_tablet_title_lh');

	$large_tablet_title_fs = bridge_qode_options()->getOptionValue('large_tablet_title_fs');
	$large_tablet_title_lh = bridge_qode_options()->getOptionValue('large_tablet_title_lh');

	?>

	<?php if ( !empty($small_tablet_title_fs) || !empty($small_tablet_title_lh)) { ?>
		.title.title_size_small h1 {
			<?php if (!empty($small_tablet_title_fs)) { ?>font-size: <?php echo intval($small_tablet_title_fs); ?>px; <?php } ?>
			<?php if (!empty($small_tablet_title_lh)) { ?>line-height: <?php echo intval($small_tablet_title_lh); ?>px; <?php } ?>
		}
	<?php } ?>

	<?php if ( !empty($medium_tablet_title_fs) || !empty($medium_tablet_title_lh)) { ?>
		.title.title_size_medium h1 {
			<?php if (!empty($medium_tablet_title_fs)) { ?>font-size: <?php echo intval($medium_tablet_title_fs); ?>px; <?php } ?>
			<?php if (!empty($medium_tablet_title_lh)) { ?>line-height: <?php echo intval($medium_tablet_title_lh); ?>px; <?php } ?>
		}
	<?php } ?>

	<?php if ( !empty($large_tablet_title_fs) || !empty($large_tablet_title_lh)) { ?>
		.title.title_size_large h1 {
			<?php if (!empty($large_tablet_title_fs)) { ?>font-size: <?php echo intval($large_tablet_title_fs); ?>px!important; <?php } ?>
			<?php if (!empty($large_tablet_title_lh)) { ?>line-height: <?php echo intval($large_tablet_title_lh); ?>px!important; <?php } ?>
		}
	<?php } ?>

}
@media only screen and (max-width: 600px) {
	<?php if ((isset($bridge_qode_options['h1_fontsize_mobile']) && $bridge_qode_options['h1_fontsize_mobile'] !== '') || (isset($bridge_qode_options['h1_lineheight_mobile']) && $bridge_qode_options['h1_lineheight_mobile'] !== '') || (isset($bridge_qode_options['h1_letterspacing_mobile']) && $bridge_qode_options['h1_letterspacing_mobile'] !== '')) { ?>
		h1, h1 a, body.qode-overridden-elementors-fonts .elementor-widget-heading h1.elementor-heading-title {
			<?php if (isset($bridge_qode_options['h1_fontsize_mobile']) && $bridge_qode_options['h1_fontsize_mobile'] !== '') { ?>font-size: <?php echo intval($bridge_qode_options['h1_fontsize_mobile']); ?>px; <?php } ?>
			<?php if (isset($bridge_qode_options['h1_lineheight_mobile']) && $bridge_qode_options['h1_lineheight_mobile'] !== '') { ?>line-height: <?php echo intval($bridge_qode_options['h1_lineheight_mobile']); ?>px; <?php } ?>
		    <?php if (isset($bridge_qode_options['h1_letterspacing_mobile']) && $bridge_qode_options['h1_letterspacing_mobile'] !== '') { ?>letter-spacing: <?php echo intval($bridge_qode_options['h1_letterspacing_mobile']); ?>px; <?php } ?>
		}
	<?php } ?>

	<?php if ((isset($bridge_qode_options['h2_fontsize_mobile']) && $bridge_qode_options['h2_fontsize_mobile'] !== '') || (isset($bridge_qode_options['h2_lineheight_mobile']) && $bridge_qode_options['h2_lineheight_mobile'] !== '') || (isset($bridge_qode_options['h2_letterspacing_mobile']) && $bridge_qode_options['h2_letterspacing_mobile'] !== '')) { ?>
		h2, h2 a, body.qode-overridden-elementors-fonts .elementor-widget-heading h2.elementor-heading-title {
			<?php if (isset($bridge_qode_options['h2_fontsize_mobile']) && $bridge_qode_options['h2_fontsize_mobile'] !== '') { ?>font-size: <?php echo intval($bridge_qode_options['h2_fontsize_mobile']); ?>px; <?php } ?>
			<?php if (isset($bridge_qode_options['h2_lineheight_mobile']) && $bridge_qode_options['h2_lineheight_mobile'] !== '') { ?>line-height: <?php echo intval($bridge_qode_options['h2_lineheight_mobile']); ?>px; <?php } ?>
		    <?php if (isset($bridge_qode_options['h2_letterspacing_mobile']) && $bridge_qode_options['h2_letterspacing_mobile'] !== '') { ?>letter-spacing: <?php echo intval($bridge_qode_options['h2_letterspacing_mobile']); ?>px; <?php } ?>
		}
	<?php } ?>

	<?php if ((isset($bridge_qode_options['h3_fontsize_mobile']) && $bridge_qode_options['h3_fontsize_mobile'] !== '') || (isset($bridge_qode_options['h3_lineheight_mobile']) && $bridge_qode_options['h3_lineheight_mobile'] !== '') || (isset($bridge_qode_options['h3_letterspacing_mobile']) && $bridge_qode_options['h3_letterspacing_mobile'] !== '')) { ?>
		h3, h3 a, body.qode-overridden-elementors-fonts .elementor-widget-heading h3.elementor-heading-title {
			<?php if (isset($bridge_qode_options['h3_fontsize_mobile']) && $bridge_qode_options['h3_fontsize_mobile'] !== '') { ?>font-size: <?php echo intval($bridge_qode_options['h3_fontsize_mobile']); ?>px; <?php } ?>
			<?php if (isset($bridge_qode_options['h3_lineheight_mobile']) && $bridge_qode_options['h3_lineheight_mobile'] !== '') { ?>line-height: <?php echo intval($bridge_qode_options['h3_lineheight_mobile']); ?>px; <?php } ?>
		    <?php if (isset($bridge_qode_options['h3_letterspacing_mobile']) && $bridge_qode_options['h3_letterspacing_mobile'] !== '') { ?>letter-spacing: <?php echo intval($bridge_qode_options['h3_letterspacing_mobile']); ?>px; <?php } ?>
		}
	<?php } ?>

	<?php if ((isset($bridge_qode_options['h4_fontsize_mobile']) && $bridge_qode_options['h4_fontsize_mobile'] !== '') || (isset($bridge_qode_options['h4_lineheight_mobile']) && $bridge_qode_options['h4_lineheight_mobile'] !== '') || (isset($bridge_qode_options['h4_letterspacing_mobile']) && $bridge_qode_options['h4_letterspacing_mobile'] !== '')) { ?>
		h4, h4 a, body.qode-overridden-elementors-fonts .elementor-widget-heading h4.elementor-heading-title {
			<?php if (isset($bridge_qode_options['h4_fontsize_mobile']) && $bridge_qode_options['h4_fontsize_mobile'] !== '') { ?>font-size: <?php echo intval($bridge_qode_options['h4_fontsize_mobile']); ?>px; <?php } ?>
			<?php if (isset($bridge_qode_options['h4_lineheight_mobile']) && $bridge_qode_options['h4_lineheight_mobile'] !== '') { ?>line-height: <?php echo intval($bridge_qode_options['h4_lineheight_mobile']); ?>px; <?php } ?>
		    <?php if (isset($bridge_qode_options['h4_letterspacing_mobile']) && $bridge_qode_options['h4_letterspacing_mobile'] !== '') { ?>letter-spacing: <?php echo intval($bridge_qode_options['h4_letterspacing_mobile']); ?>px; <?php } ?>
		}
	<?php } ?>

	<?php if ((isset($bridge_qode_options['h5_fontsize_mobile']) && $bridge_qode_options['h5_fontsize_mobile'] !== '') || (isset($bridge_qode_options['h5_lineheight_mobile']) && $bridge_qode_options['h5_lineheight_mobile'] !== '') || (isset($bridge_qode_options['h5_letterspacing_mobile']) && $bridge_qode_options['h5_letterspacing_mobile'] !== '')) { ?>
		h5, h5 a, body.qode-overridden-elementors-fonts .elementor-widget-heading h5.elementor-heading-title {
			<?php if (isset($bridge_qode_options['h5_fontsize_mobile']) && $bridge_qode_options['h5_fontsize_mobile'] !== '') { ?>font-size: <?php echo intval($bridge_qode_options['h5_fontsize_mobile']); ?>px; <?php } ?>
			<?php if (isset($bridge_qode_options['h5_lineheight_mobile']) && $bridge_qode_options['h5_lineheight_mobile'] !== '') { ?>line-height: <?php echo intval($bridge_qode_options['h5_lineheight_mobile']); ?>px; <?php } ?>
		    <?php if (isset($bridge_qode_options['h5_letterspacing_mobile']) && $bridge_qode_options['h5_letterspacing_mobile'] !== '') { ?>letter-spacing: <?php echo intval($bridge_qode_options['h5_letterspacing_mobile']); ?>px; <?php } ?>
		}
	<?php } ?>

	<?php if ((isset($bridge_qode_options['h6_fontsize_mobile']) && $bridge_qode_options['h6_fontsize_mobile'] !== '') || (isset($bridge_qode_options['h6_lineheight_mobile']) && $bridge_qode_options['h6_lineheight_mobile'] !== '') || (isset($bridge_qode_options['h6_letterspacing_mobile']) && $bridge_qode_options['h6_letterspacing_mobile'] !== '')) { ?>
		h6, h6 a, body.qode-overridden-elementors-fonts .elementor-widget-heading h6.elementor-heading-title {
			<?php if (isset($bridge_qode_options['h6_fontsize_mobile']) && $bridge_qode_options['h6_fontsize_mobile'] !== '') { ?>font-size: <?php echo intval($bridge_qode_options['h6_fontsize_mobile']); ?>px; <?php } ?>
			<?php if (isset($bridge_qode_options['h6_lineheight_mobile']) && $bridge_qode_options['h6_lineheight_mobile'] !== '') { ?>line-height: <?php echo intval($bridge_qode_options['h6_lineheight_mobile']); ?>px; <?php } ?>
		    <?php if (isset($bridge_qode_options['h6_letterspacing_mobile']) && $bridge_qode_options['h6_letterspacing_mobile'] !== '') { ?>letter-spacing: <?php echo intval($bridge_qode_options['h6_letterspacing_mobile']); ?>px; <?php } ?>
		}
	<?php } ?>

	<?php if ((isset($bridge_qode_options['text_fontsize_mobile']) && $bridge_qode_options['text_fontsize_mobile'] !== '') || (isset($bridge_qode_options['text_lineheight_mobile']) && $bridge_qode_options['text_lineheight_mobile'] !== '') || (isset($bridge_qode_options['text_letterspacing_mobile']) && $bridge_qode_options['text_letterspacing_mobile'] !== '')) { ?>
		body,
		p,
        body.qode-overridden-elementors-fonts .elementor-widget-heading h5.elementor-heading-title {
			<?php if (isset($bridge_qode_options['text_fontsize_mobile']) && $bridge_qode_options['text_fontsize_mobile'] !== '') { ?>font-size: <?php echo intval($bridge_qode_options['text_fontsize_mobile']); ?>px; <?php } ?>
			<?php if (isset($bridge_qode_options['text_lineheight_mobile']) && $bridge_qode_options['text_lineheight_mobile'] !== '') { ?>line-height: <?php echo intval($bridge_qode_options['text_lineheight_mobile']); ?>px; <?php } ?>
		    <?php if (isset($bridge_qode_options['text_letterspacing_mobile']) && $bridge_qode_options['text_letterspacing_mobile'] !== '') { ?>letter-spacing: <?php echo intval($bridge_qode_options['text_letterspacing_mobile']); ?>px; <?php } ?>
		}
	<?php } ?>

	<?php

	$small_mobile_title_fs = bridge_qode_options()->getOptionValue('small_mobile_title_fs');
	$small_mobile_title_lh = bridge_qode_options()->getOptionValue('small_mobile_title_lh');

	$medium_mobile_title_fs = bridge_qode_options()->getOptionValue('medium_mobile_title_fs');
	$medium_mobile_title_lh = bridge_qode_options()->getOptionValue('medium_mobile_title_lh');

	$large_mobile_title_fs = bridge_qode_options()->getOptionValue('large_mobile_title_fs');
	$large_mobile_title_lh = bridge_qode_options()->getOptionValue('large_mobile_title_lh');

	?>

	<?php if ( !empty($small_mobile_title_fs) || !empty($small_mobile_title_lh)) { ?>
		.title.title_size_small h1 {
			<?php if (!empty($small_mobile_title_fs)) { ?>font-size: <?php echo intval($small_mobile_title_fs); ?>px; <?php } ?>
			<?php if (!empty($small_mobile_title_lh)) { ?>line-height: <?php echo intval($small_mobile_title_lh); ?>px; <?php } ?>
		}
	<?php } ?>

	<?php if ( !empty($medium_mobile_title_fs) || !empty($medium_mobile_title_lh)) { ?>
		.title.title_size_medium h1 {
			<?php if (!empty($medium_mobile_title_fs)) { ?>font-size: <?php echo intval($medium_mobile_title_fs); ?>px; <?php } ?>
			<?php if (!empty($medium_mobile_title_lh)) { ?>line-height: <?php echo intval($medium_mobile_title_lh); ?>px; <?php } ?>
		}
	<?php } ?>

	<?php if ( !empty($large_mobile_title_fs) || !empty($large_mobile_title_lh)) { ?>
		.title.title_size_large h1 {
			<?php if (!empty($large_mobile_title_fs)) { ?>font-size: <?php echo intval($large_mobile_title_fs); ?>px!important; <?php } ?>
			<?php if (!empty($large_mobile_title_lh)) { ?>line-height: <?php echo intval($large_mobile_title_lh); ?>px!important; <?php } ?>
		}
	<?php } ?>
}
@media only screen and (max-width: 480px){

	<?php if (isset($bridge_qode_options['parallax_minheight']) && !empty($bridge_qode_options['parallax_minheight'])) { ?>
		section.parallax_section_holder {
			height: auto !important;
			min-height: <?php echo intval($bridge_qode_options['parallax_minheight']); ?>px;
		}
	<?php } ?>

	<?php if (isset($bridge_qode_options['header_background_color_mobile']) &&  !empty($bridge_qode_options['header_background_color_mobile'])) { ?>
		header {
			background-color: <?php echo esc_attr($bridge_qode_options['header_background_color_mobile']);  ?> !important;
			background-image:none;
		}
	<?php } ?>
	<?php if (isset($bridge_qode_options['footer_bottom_text_line_height']) && $bridge_qode_options['footer_bottom_text_line_height'] !== "") { ?>
		.footer_bottom {
			line-height: <?php echo intval($bridge_qode_options['footer_bottom_text_line_height']); ?>px;
		}
	<?php } ?>

	<?php if (isset($bridge_qode_options['footer_top_padding_right']) && $bridge_qode_options['footer_top_padding_right'] != "" && $bridge_qode_options['footer_top_padding_right'] > 10){ ?>
		.footer_top.footer_top_full {
			padding-right:10px;
		}
	<?php }
	if (isset($bridge_qode_options['footer_top_padding_left']) && $bridge_qode_options['footer_top_padding_left'] != "" && $bridge_qode_options['footer_top_padding_left'] > 10){ ?>
		.footer_top.footer_top_full {
			padding-left:10px;
		}
	<?php } ?>
}