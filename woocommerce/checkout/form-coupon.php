<?php
/**
 * Checkout coupon form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-coupon.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.4
 */

defined( 'ABSPATH' ) || exit;

if ( ! wc_coupons_enabled() ) { // @codingStandardsIgnoreLine.
    return;
}
?>

<div class="woocommerce-form-coupon-toggle">
    <?php wc_print_notice( apply_filters( 'woocommerce_checkout_coupon_message', esc_html__( 'Have a coupon?', 'bridge' ) . ' <a href="#" class="showcoupon">' . esc_html__( 'Click here to enter your code', 'bridge' ) . '</a>' ), 'notice' ); ?>
</div>

<form class="checkout_coupon woocommerce-form-coupon" method="post" style="display:none">
	
	<?php /*** Our code modification inside Woo template - begin ***/ ?>
	<div class="coupon">
		<input type="text" name="coupon_code" class="input-text" placeholder="<?php esc_attr_e( 'Coupon code', 'bridge' ); ?>" id="coupon_code" value="" />
		<input type="submit" class="button" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'bridge' ); ?>" />
	</div>
	<?php /*** Our code modification inside Woo template - end ***/ ?>
	
	<div class="clear"></div>
</form>