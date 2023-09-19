<?php

if (!function_exists('bridge_qode_single_product_summary_additional_tag_before')) {
	function bridge_qode_single_product_summary_additional_tag_before() {

		print '<div class="qode-single-product-summary">';
	}
}

if (!function_exists('bridge_qode_single_product_summary_additional_tag_after')) {
	function bridge_qode_single_product_summary_additional_tag_after() {

		print '</div>';
	}
}