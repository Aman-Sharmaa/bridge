<?php 
/*
Template Name: WooCommerce
*/ 
?>

<?php 
global $woocommerce;

$bridge_qode_id = get_option('woocommerce_shop_page_id');
$bridge_qode_shop = get_post($bridge_qode_id);
$bridge_qode_sidebar = get_post_meta($bridge_qode_id, "qode_show-sidebar", true);

if (get_query_var('paged')) {
    $bridge_qode_paged = get_query_var('paged');
} elseif (get_query_var('page')) {
    $bridge_qode_paged = get_query_var('page');
} else {
    $bridge_qode_paged = 1;
}

$bridge_qode_content_style_spacing = "";
if(get_post_meta($bridge_qode_id, "qode_margin_after_title", true) != ""){
	if(get_post_meta($bridge_qode_id, "qode_margin_after_title_mobile", true) == 'yes'){
		$bridge_qode_content_style_spacing = "padding-top:".esc_attr(get_post_meta($bridge_qode_id, "qode_margin_after_title", true))."px !important";
	}else{
		$bridge_qode_content_style_spacing = "padding-top:".esc_attr(get_post_meta($bridge_qode_id, "qode_margin_after_title", true))."px";
	}
}

$bridge_qode_single_type = bridge_qode_woocommerce_single_type();
$bridge_qode_woo_content_width = 'grid';
if($bridge_qode_single_type == 'wide-gallery') {
	$bridge_qode_woo_content_width = 'full';
}

?>
<?php
    get_header();
    $bridge_qode_id = get_option('woocommerce_shop_page_id');
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
	<?php if($bridge_qode_woo_content_width == 'full' && is_singular('product')){ ?>
	<div class="full_width">
		<div class="full_width_inner clearfix" <?php bridge_qode_inline_style($bridge_qode_content_style_spacing); ?>>
	<?php } else { ?>
			<div class="container">
				<?php if(isset($bridge_qode_options['overlapping_content']) && $bridge_qode_options['overlapping_content'] == 'yes') {?>
				<div class="overlapping_content"><div class="overlapping_content_inner">
						<?php } ?>
						<div class="container_inner default_template_holder clearfix" <?php bridge_qode_inline_style($bridge_qode_content_style_spacing); ?>>
	<?php } ?>

            <?php if(!is_singular('product')) { ?>
                <?php if($bridge_qode_sidebar == "default" || $bridge_qode_sidebar == "") : ?>
                    <?php bridge_qode_woocommerce_content(); ?>
                <?php elseif($bridge_qode_sidebar == "1" || $bridge_qode_sidebar == "2"): ?>
                <?php global $woocommerce_loop;
                    $woocommerce_loop['columns'] = 3;
                ?>
                <?php if($bridge_qode_sidebar == "1") : ?>
                    <div class="two_columns_66_33 woocommerce_with_sidebar grid2 clearfix">
                        <div class="column1">
                <?php elseif($bridge_qode_sidebar == "2") : ?>
                    <div class="two_columns_75_25 woocommerce_with_sidebar grid2 clearfix">
                        <div class="column1">
                <?php endif; ?>
                            <div class="column_inner">
                                <?php bridge_qode_woocommerce_content(); ?>
                            </div>
                        </div>
                        <div class="column2"><?php get_sidebar();?></div>
                    </div>
                <?php elseif($bridge_qode_sidebar == "3" || $bridge_qode_sidebar == "4"): ?>
                    <?php global $woocommerce_loop;
                        $woocommerce_loop['columns'] = 3;
                    ?>
                    <?php if($bridge_qode_sidebar == "3") : ?>
                        <div class="two_columns_33_66 woocommerce_with_sidebar grid2 clearfix">
                            <div class="column1"><?php get_sidebar();?></div>
                            <div class="column2">
                    <?php elseif($bridge_qode_sidebar == "4") : ?>
                        <div class="two_columns_25_75 woocommerce_with_sidebar grid2 clearfix">
                            <div class="column1"><?php get_sidebar();?></div>
                            <div class="column2">
                    <?php endif; ?>
                                <div class="column_inner">
                                    <?php bridge_qode_woocommerce_content(); ?>
                                </div>
                            </div>
                        </div>
                <?php endif; ?>
            <?php } else {
                  bridge_qode_woocommerce_content();
            } ?>
        </div>
        <?php if(isset($bridge_qode_options['overlapping_content']) && $bridge_qode_options['overlapping_content'] == 'yes') {?>
			<?php if($bridge_qode_woo_content_width == 'full' && is_singular('product')){ ?>
			<?php } else { ?>
					</div></div>
			<?php } ?>
        <?php } ?>
    </div>
<?php get_footer(); ?>