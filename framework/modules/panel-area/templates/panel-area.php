<?php

if (is_active_widget( false, false, 'qode_panel_area_opener' )) { ?>

    <section class="qode-panel-area">
        <div class="qode-close-panel-holder">
            <div class="qode-close-panel-holder-inner">
                <a href="#" target="_self" class="qode-close-panel">
                    <span class="qode-close-panel-label">
                        <?php
                        $close_label_option = bridge_qode_options()->getOptionValue('panel_area_close_label');
                        $close_label = ! empty( $close_label_option ) ? $close_label_option : esc_html__('Close', 'bridge');

                        echo esc_html( $close_label );
                        ?>
                    </span>
                </a>
            </div>
        </div>
        <div class="qode-panel-area-inner">
            <div class="qode-panel-area-content">
                <div class="qode-container">
                    <div class="container_inner">
                        <?php if(is_active_sidebar('panel_area')) {
                            dynamic_sidebar('panel_area');
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php }