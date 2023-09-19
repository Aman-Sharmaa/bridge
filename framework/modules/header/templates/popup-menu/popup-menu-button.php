<?php if($enable_popup_menu == "yes"){
    $icon_source = bridge_qode_options()->getOptionValue('font_icon_pack_icon_popup');

    $additional_class = '';

    if( $icon_source == 'svg_path' ) {
        $additional_class = 'qode-popup-menu-svg-opener';
    } ?>
	<a href="javascript:void(0)" class="popup_menu <?php echo esc_attr( $header_button_size ).' '. esc_attr( $popup_menu_animation_style ) . ' ' . esc_attr( $additional_class ); ?>">
		<?php
		switch( $icon_source ){
			case 'font_awesome':
				echo '<i class="fa fa-bars"></i>';
				break;
			case 'font_elegant':
				echo '<span class="icon_menu"></span>';
				break;
            case 'kiko':
				echo '<span class="kikol kiko-hamburger-menu"></span>';
				break;
            case 'svg_path':
                $svg_opener = bridge_qode_options()->getOptionValue('popup_menu_icon_svg_opener');
                $svg_closer = bridge_qode_options()->getOptionValue('popup_menu_icon_svg_closer');
                if( ! empty( $svg_opener ) ){ ?>
                    <span class="qode-popup-menu-opener">
                        <?php echo bridge_qode_get_module_part( $svg_opener ); ?>
                    </span>
                <?php }

                if( ! empty( $svg_closer ) ){ ?>
                    <span class="qode-popup-menu-closer">
                        <?php echo bridge_qode_get_module_part( $svg_closer ); ?>
                    </span>
                <?php }
                //echo bridge_qode_get_module_part( $svg_opener );
                break;
			default:
				echo '<span class="popup_menu_inner"><i class="line">&nbsp;</i></span>';
				break;
		}
		?>
	</a>
<?php } ?>