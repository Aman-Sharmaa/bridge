<?php
$bridge_qode_options = bridge_qode_return_global_options();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<?php
    $bridge_qode_is_IE = bridge_qode_return_is_ie_variable();

	if ( ! empty( $bridge_qode_is_IE ) && $bridge_qode_is_IE ) { ?>
		<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
	<?php } ?>

	<?php
	/**
	 * bridge_qode_header_meta hook
	 *
	 * @see bridge_core_header_meta() - hooked with 10
	 * @see bridge_qode_user_scalable_meta() - hooked with 10
	 */
	do_action('bridge_qode_action_header_meta');
	?>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">


<?php
//Wordpress 5.2 default action
do_action( 'wp_body_open' );

?>

<?php
$params = bridge_qode_header_parameters();
extract($params);

echo bridge_qode_get_module_template_part('templates/parts/ajax-loader', 'header');

echo bridge_qode_get_module_template_part('templates/side-area/side-area', 'header', '', $params);
echo bridge_qode_get_module_template_part('templates/panel-area', 'panel-area', '', $params);
?>

<div class="wrapper">
	<div class="wrapper_inner">

    <?php do_action('bridge_qode_action_after_wrapper_inner'); ?>

	<?php
    if($enable_vertical_menu) {
		echo bridge_qode_get_module_template_part('templates/vertical-header', 'header', '', $params);
	}else{
        switch($header_bottom_appearance){
            case 'stick menu_bottom':
				$header_appearance_slug = 'stick_menu_bottom';
                break;
            case 'fixed fixed_minimal':
                $header_appearance_slug = 'fixed_minimal';
                break;
            default:
                $header_appearance_slug = $header_bottom_appearance;
            break;
        }
        echo bridge_qode_get_module_template_part('templates/header-appearance/header', 'header', $header_appearance_slug, $params);
    }

	echo bridge_qode_get_module_template_part('templates/parts/back-to-top', 'header', '', $params);
	echo bridge_qode_get_module_template_part('templates/popup-menu/popup-menu', 'header', '', $params);
	echo bridge_qode_get_module_template_part('templates/parts/fullscreen-search', 'header', '', $params);
    ?>
	
	
    <?php if(bridge_qode_options()->getOptionValue('paspartu') == 'yes'){ ?>
    <div class="paspartu_outer <?php echo bridge_qode_get_paspartu_class(); ?>">
        <?php if(bridge_qode_options()->getOptionValue('vertical_area') == "yes" && bridge_qode_options()->getOptionValue('vertical_menu_inside_paspartu') == 'no') { ?>
            <div class="paspartu_middle_inner">
        <?php }?>

        <?php if((bridge_qode_options()->getOptionValue('paspartu_on_top') == 'yes' && bridge_qode_options()->getOptionValue('paspartu_on_top_fixed') == 'yes') ||
            (bridge_qode_options()->getOptionValue('vertical_area') == "yes" && bridge_qode_options()->getOptionValue('vertical_menu_inside_paspartu') == 'yes')){ ?>
            <div class="paspartu_top"></div>
        <?php }?>

        <div class="paspartu_left"></div>
        <div class="paspartu_right"></div>
        <div class="paspartu_inner">
    <?php } ?>

    <?php if(is_active_sidebar('left_side_fixed')){ ?>
        <div class="qode_left_side_fixed">
            <?php 
                dynamic_sidebar('left_side_fixed');
            ?>
        </div>
    <?php } ?>
	
    <?php if(is_active_sidebar('right_side_fixed')){ ?>
        <div class="qode_right_side_fixed">
	        <?php
	        dynamic_sidebar('right_side_fixed');
	        ?>
        </div>
    <?php } ?>

    <div class="content <?php echo bridge_qode_get_content_class(); ?>">
    <?php
    $animation = get_post_meta($id, "qode_show-animation", true);
    if (!empty($_SESSION['qode_animation']) && $animation == ""){ $animation = $_SESSION['qode_animation']; }
    if(in_array(bridge_qode_options()->getOptionValue('page_transitions'), array('1', '2', '3', '4')) || in_array($animation, array("updown","fade","updown_fade","leftright"))){ ?>
        <div class="meta">

            <?php
            /**
             * bridge_qode_action_ajax_meta hook
             *
             * @hooked bridge_qode_action_ajax_meta - 10
             */
            do_action('bridge_qode_action_ajax_meta'); ?>

            <span id="qode_page_id"><?php echo esc_attr( bridge_qode_get_page_id() ); ?></span>
            <div class="body_classes"><?php echo implode( ',', get_body_class()); ?></div>
        </div>
    <?php } ?>
    <div class="content_inner <?php echo esc_attr( $animation );?> ">
    <?php if(in_array(bridge_qode_options()->getOptionValue('page_transitions'), array('1', '2', '3', '4')) || in_array($animation, array("updown","fade","updown_fade","leftright"))){
         do_action('bridge_qode_action_visual_composer_custom_shortcodce_css');
    } ?>
