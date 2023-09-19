<?php
if(bridge_qode_options()->getOptionValue('enable_search') == "yes"){
	echo bridge_qode_get_module_template_part('templates/search/types/search', 'header', 'covers-header', $params);
}