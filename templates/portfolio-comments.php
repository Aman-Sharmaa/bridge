
<?php
$bridge_qode_options = bridge_qode_return_global_options();
if(isset($bridge_qode_options['enable_portfolio_comments']) && $bridge_qode_options['enable_portfolio_comments'] == 'yes') { ?>
	<div class="portfolio_comments_holder">
		<?php comments_template('', true); ?>
	</div>
<?php }
