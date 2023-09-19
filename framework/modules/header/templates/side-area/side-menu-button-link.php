<?php

$header_button_additional_class = '';
$icon_pack = bridge_qode_option_get_value('side_area_button_icon_pack');

if( ! empty( $icon_pack ) && $icon_pack == 'svg_path' ){
    $header_button_additional_class = 'qode-side-menu-button-svg';
}

?>

<?php if($enable_side_area == "yes" && $enable_popup_menu == 'no'){ ?>
	<a class="side_menu_button_link <?php echo esc_attr( $header_button_size ); ?> <?php echo esc_attr( $header_button_additional_class ); ?>" href="javascript:void(0)">
		<?php echo bridge_qode_get_side_menu_icon_html(); ?>
	</a>
<?php } ?>