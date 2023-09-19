<?php 
$bridge_qode_options = bridge_qode_return_global_options();
$bridge_qode_sidebar_id = bridge_qode_get_page_id();
?>
	<div class="column_inner">
		<aside class="sidebar">
			<?php	
			$bridge_qode_sidebar = "";

            $bridge_qode_is_woocommerce=false;
            if(function_exists("is_woocommerce")) {
                $bridge_qode_is_woocommerce = is_woocommerce();
                if($bridge_qode_is_woocommerce){
					$bridge_qode_sidebar_id = get_option('woocommerce_shop_page_id');
                }
            }
		
			if(get_post_meta($bridge_qode_sidebar_id, 'qode_choose-sidebar', true) != ""){
				$bridge_qode_sidebar = get_post_meta($bridge_qode_sidebar_id, 'qode_choose-sidebar', true);
			}else{
				if (is_singular("post")) {
					if($bridge_qode_options['blog_single_sidebar_custom_display'] != ""){
						$bridge_qode_sidebar = $bridge_qode_options['blog_single_sidebar_custom_display'];
					}else{
						$bridge_qode_sidebar = "Sidebar";
					}
				} elseif(is_singular("portfolio_page") && $bridge_qode_options['portfolio_single_sidebar_custom_display'] != ""){
					$bridge_qode_sidebar = $bridge_qode_options['portfolio_single_sidebar_custom_display'];
				}elseif(is_singular("events") && bridge_qode_timetable_schedule_installed()){
					if($bridge_qode_options['event_single_sidebar_custom_display'] != ""){
						$bridge_qode_sidebar = $bridge_qode_options['event_single_sidebar_custom_display'];
					}else{
						$bridge_qode_sidebar = 'sidebar-event';
					}
				}else {
					$bridge_qode_sidebar = "Sidebar Page";
				}
			}
			?>
				
			<?php if(function_exists('dynamic_sidebar') && dynamic_sidebar($bridge_qode_sidebar)) : 
			endif;  ?>
		</aside>
	</div>
