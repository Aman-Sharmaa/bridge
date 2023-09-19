<?php $qodeIconCollections = bridge_qode_return_icon_collections();?>
<form role="search" id="searchform" action="<?php echo esc_url(home_url('/')); ?>" class="qode_search_form" method="get">
    <?php if($header_in_grid){ ?>
    <div class="container">
        <div class="container_inner clearfix">
            <?php } ?>

            <?php $qodeIconCollections->getSearchIcon(bridge_qode_option_get_value('search_icon_pack'), array('icon_attributes' => array('class' => 'qode_icon_in_search'))); ?>
            <input type="text" placeholder="<?php esc_html_e('Search', 'bridge'); ?>" name="s" class="qode_search_field" autocomplete="off" />
            <input type="submit" value="<?php esc_html_e('Search', 'bridge'); ?>" />

            <div class="qode_search_close">
                <a href="#">
                    <?php $qodeIconCollections->getSearchClose(bridge_qode_option_get_value('search_icon_pack'), array('icon_attributes' => array('class' => 'qode_icon_in_search'))); ?>
                </a>
            </div>
            <?php if($header_in_grid){ ?>
        </div>
    </div>
<?php } ?>
</form>
