<?php

class BridgeQodeFieldPortfolioFollow extends BridgeQodeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
        global $bridge_qode_options;
        $dependence = false;
        if(isset($args["dependence"]))
            $dependence = true;
        $dependence_hide_on_yes = "";
        if(isset($args["dependence_hide_on_yes"]))
            $dependence_hide_on_yes = $args["dependence_hide_on_yes"];
        $dependence_show_on_yes = "";
        if(isset($args["dependence_show_on_yes"]))
            $dependence_show_on_yes = $args["dependence_show_on_yes"];
        ?>

        <div class="qodef-page-form-section" id="qodef_<?php echo esc_attr($name); ?>">


            <div class="qodef-field-desc">
                <h4><?php echo esc_html($label); ?></h4>

                <p><?php echo esc_html($description); ?></p>
            </div>
            <!-- close div.qodef-field-desc -->



            <div class="qodef-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="field switch">

                            <p class="field switch">
                                <label data-hide="<?php echo esc_attr($dependence_hide_on_yes); ?>" data-show="<?php echo esc_attr($dependence_show_on_yes); ?>"
                                       class="cb-enable<?php if (bridge_qode_option_get_value($name) == "portfolio_single_follow") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('Yes', 'bridge') ?></span></label>
                                <label data-hide="<?php echo esc_attr($dependence_show_on_yes); ?>" data-show="<?php echo esc_attr($dependence_hide_on_yes); ?>"
                                       class="cb-disable<?php if (bridge_qode_option_get_value($name) == "portfolio_single_no_follow") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('No', 'bridge') ?></span></label>
                                <input type="checkbox" id="checkbox" class="checkbox"
                                       name="<?php echo esc_attr($name); ?>_portfoliofollow" value="portfolio_single_follow"<?php if (bridge_qode_option_get_value($name) == "portfolio_single_follow") { echo " selected"; } ?>/>
                                <input type="hidden" class="checkboxhidden_portfoliofollow" name="<?php echo esc_attr($name); ?>" value="<?php echo bridge_qode_option_get_value($name); ?>"/>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
        <?php

    }

}

class BridgeQodeFieldZeroOne extends BridgeQodeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
        global $bridge_qode_options;
        $dependence = false;
        if(isset($args["dependence"]))
            $dependence = true;
        $dependence_hide_on_yes = "";
        if(isset($args["dependence_hide_on_yes"]))
            $dependence_hide_on_yes = $args["dependence_hide_on_yes"];
        $dependence_show_on_yes = "";
        if(isset($args["dependence_show_on_yes"]))
            $dependence_show_on_yes = $args["dependence_show_on_yes"];
        ?>

        <div class="qodef-page-form-section" id="qodef_<?php echo esc_attr($name); ?>">


            <div class="qodef-field-desc">
                <h4><?php echo esc_attr($label); ?></h4>

                <p><?php echo esc_attr($description); ?></p>
            </div>
            <!-- close div.qodef-field-desc -->



            <div class="qodef-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="field switch">

                            <p class="field switch">
                                <label data-hide="<?php echo esc_attr($dependence_hide_on_yes); ?>" data-show="<?php echo esc_attr($dependence_show_on_yes); ?>"
                                       class="cb-enable<?php if (bridge_qode_option_get_value($name) == "1") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('Yes', 'bridge') ?></span></label>
                                <label data-hide="<?php echo esc_attr($dependence_show_on_yes); ?>" data-show="<?php echo esc_attr($dependence_hide_on_yes); ?>"
                                       class="cb-disable<?php if (bridge_qode_option_get_value($name) == "0") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('No', 'bridge') ?></span></label>
                                <input type="checkbox" id="checkbox" class="checkbox"
                                       name="<?php echo esc_attr($name); ?>_zeroone" value="1"<?php if (bridge_qode_option_get_value($name) == "1") { echo " selected"; } ?>/>
                                <input type="hidden" class="checkboxhidden_zeroone" name="<?php echo esc_attr($name); ?>" value="<?php echo bridge_qode_option_get_value($name); ?>"/>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
        <?php

    }

}

class BridgeQodeFieldImageVideo extends BridgeQodeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
        global $bridge_qode_options;
        $dependence = false;
        if(isset($args["dependence"]))
            $dependence = true;
        $dependence_hide_on_yes = "";
        if(isset($args["dependence_hide_on_yes"]))
            $dependence_hide_on_yes = $args["dependence_hide_on_yes"];
        $dependence_show_on_yes = "";
        if(isset($args["dependence_show_on_yes"]))
            $dependence_show_on_yes = $args["dependence_show_on_yes"];
        ?>

        <div class="qodef-page-form-section" id="qodef_<?php echo esc_attr($name); ?>">


            <div class="qodef-field-desc">
                <h4><?php echo esc_attr($label); ?></h4>

                <p><?php echo esc_attr($description); ?></p>
            </div>
            <!-- close div.qodef-field-desc -->



            <div class="qodef-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="field switch">

                            <p class="field switch switch-type">
                                <label data-hide="<?php echo esc_attr($dependence_hide_on_yes); ?>" data-show="<?php echo esc_attr($dependence_show_on_yes); ?>"
                                       class="cb-enable<?php if (bridge_qode_option_get_value($name) == "image") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('Image', 'bridge') ?></span></label>
                                <label data-hide="<?php echo esc_attr($dependence_show_on_yes); ?>" data-show="<?php echo esc_attr($dependence_hide_on_yes); ?>"
                                       class="cb-disable<?php if (bridge_qode_option_get_value($name) == "video") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('Video', 'bridge') ?></span></label>
                                <input type="checkbox" id="checkbox" class="checkbox"
                                       name="<?php echo esc_attr($name); ?>_imagevideo" value="image"<?php if (bridge_qode_option_get_value($name) == "image") { echo " selected"; } ?>/>
                                <input type="hidden" class="checkboxhidden_imagevideo" name="<?php echo esc_attr($name); ?>" value="<?php echo bridge_qode_option_get_value($name); ?>"/>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
        <?php

    }

}

class BridgeQodeFieldYesEmpty extends BridgeQodeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
        global $bridge_qode_options;
        $dependence = false;
        if(isset($args["dependence"]))
            $dependence = true;
        $dependence_hide_on_yes = "";
        if(isset($args["dependence_hide_on_yes"]))
            $dependence_hide_on_yes = $args["dependence_hide_on_yes"];
        $dependence_show_on_yes = "";
        if(isset($args["dependence_show_on_yes"]))
            $dependence_show_on_yes = $args["dependence_show_on_yes"];
        ?>

        <div class="qodef-page-form-section" id="qodef_<?php echo esc_attr($name); ?>">


            <div class="qodef-field-desc">
                <h4><?php echo esc_attr($label); ?></h4>

                <p><?php echo esc_attr($description); ?></p>
            </div>
            <!-- close div.qodef-field-desc -->



            <div class="qodef-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="field switch">

                            <p class="field switch">
                                <label data-hide="<?php echo esc_attr($dependence_hide_on_yes); ?>" data-show="<?php echo esc_attr($dependence_show_on_yes); ?>"
                                       class="cb-enable<?php if (bridge_qode_option_get_value($name) == "yes") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('Yes', 'bridge') ?></span></label>
                                <label data-hide="<?php echo esc_attr($dependence_show_on_yes); ?>" data-show="<?php echo esc_attr($dependence_hide_on_yes); ?>"
                                       class="cb-disable<?php if (bridge_qode_option_get_value($name) == "") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('No', 'bridge') ?></span></label>
                                <input type="checkbox" id="checkbox" class="checkbox"
                                       name="<?php echo esc_attr($name); ?>_yesempty" value="yes"<?php if (bridge_qode_option_get_value($name) == "yes") { echo " selected"; } ?>/>
                                <input type="hidden" class="checkboxhidden_yesempty" name="<?php echo esc_attr($name); ?>" value="<?php echo bridge_qode_option_get_value($name); ?>"/>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
        <?php

    }

}

class BridgeQodeFieldFlagPage extends BridgeQodeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
        global $bridge_qode_options;
        $dependence = false;
        if(isset($args["dependence"]))
            $dependence = true;
        $dependence_hide_on_yes = "";
        if(isset($args["dependence_hide_on_yes"]))
            $dependence_hide_on_yes = $args["dependence_hide_on_yes"];
        $dependence_show_on_yes = "";
        if(isset($args["dependence_show_on_yes"]))
            $dependence_show_on_yes = $args["dependence_show_on_yes"];
        ?>

        <div class="qodef-page-form-section" id="qodef_<?php echo esc_attr($name); ?>">


            <div class="qodef-field-desc">
                <h4><?php echo esc_attr($label); ?></h4>

                <p><?php echo esc_attr($description); ?></p>
            </div>
            <!-- close div.qodef-field-desc -->



            <div class="qodef-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="field switch">

                            <p class="field switch">
                                <label data-hide="<?php echo esc_attr($dependence_hide_on_yes); ?>" data-show="<?php echo esc_attr($dependence_show_on_yes); ?>"
                                       class="cb-enable<?php if (bridge_qode_option_get_value($name) == "page") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('Yes', 'bridge') ?></span></label>
                                <label data-hide="<?php echo esc_attr($dependence_show_on_yes); ?>" data-show="<?php echo esc_attr($dependence_hide_on_yes); ?>"
                                       class="cb-disable<?php if (bridge_qode_option_get_value($name) == "") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('No', 'bridge') ?></span></label>
                                <input type="checkbox" id="checkbox" class="checkbox"
                                       name="<?php echo esc_attr($name); ?>_flagpage" value="page"<?php if (bridge_qode_option_get_value($name) == "page") { echo " selected"; } ?>/>
                                <input type="hidden" class="checkboxhidden_flagpage" name="<?php echo esc_attr($name); ?>" value="<?php echo bridge_qode_option_get_value($name); ?>"/>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
        <?php

    }

}

class BridgeQodeFieldFlagPost extends BridgeQodeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
        global $bridge_qode_options;
        $dependence = false;
        if(isset($args["dependence"]))
            $dependence = true;
        $dependence_hide_on_yes = "";
        if(isset($args["dependence_hide_on_yes"]))
            $dependence_hide_on_yes = $args["dependence_hide_on_yes"];
        $dependence_show_on_yes = "";
        if(isset($args["dependence_show_on_yes"]))
            $dependence_show_on_yes = $args["dependence_show_on_yes"];
        ?>

        <div class="qodef-page-form-section" id="qodef_<?php echo esc_attr($name); ?>">


            <div class="qodef-field-desc">
                <h4><?php echo esc_attr($label); ?></h4>

                <p><?php echo esc_attr($description); ?></p>
            </div>
            <!-- close div.qodef-field-desc -->



            <div class="qodef-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="field switch">

                            <p class="field switch">
                                <label data-hide="<?php echo esc_attr($dependence_hide_on_yes); ?>" data-show="<?php echo esc_attr($dependence_show_on_yes); ?>"
                                       class="cb-enable<?php if (bridge_qode_option_get_value($name) == "post") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('Yes', 'bridge') ?></span></label>
                                <label data-hide="<?php echo esc_attr($dependence_show_on_yes); ?>" data-show="<?php echo esc_attr($dependence_hide_on_yes); ?>"
                                       class="cb-disable<?php if (bridge_qode_option_get_value($name) == "") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('No', 'bridge') ?></span></label>
                                <input type="checkbox" id="checkbox" class="checkbox"
                                       name="<?php echo esc_attr($name); ?>_flagpost" value="post"<?php if (bridge_qode_option_get_value($name) == "post") { echo " selected"; } ?>/>
                                <input type="hidden" class="checkboxhidden_flagpost" name="<?php echo esc_attr($name); ?>" value="<?php echo bridge_qode_option_get_value($name); ?>"/>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
        <?php

    }

}

class BridgeQodeFieldFlagMedia extends BridgeQodeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
        global $bridge_qode_options;
        $dependence = false;
        if(isset($args["dependence"]))
            $dependence = true;
        $dependence_hide_on_yes = "";
        if(isset($args["dependence_hide_on_yes"]))
            $dependence_hide_on_yes = $args["dependence_hide_on_yes"];
        $dependence_show_on_yes = "";
        if(isset($args["dependence_show_on_yes"]))
            $dependence_show_on_yes = $args["dependence_show_on_yes"];
        ?>

        <div class="qodef-page-form-section" id="qodef_<?php echo esc_attr($name); ?>">


            <div class="qodef-field-desc">
                <h4><?php echo esc_attr($label); ?></h4>

                <p><?php echo esc_attr($description); ?></p>
            </div>
            <!-- close div.qodef-field-desc -->



            <div class="qodef-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="field switch">

                            <p class="field switch">
                                <label data-hide="<?php echo esc_attr($dependence_hide_on_yes); ?>" data-show="<?php echo esc_attr($dependence_show_on_yes); ?>"
                                       class="cb-enable<?php if (bridge_qode_option_get_value($name) == "attachment") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('Yes', 'bridge') ?></span></label>
                                <label data-hide="<?php echo esc_attr($dependence_show_on_yes); ?>" data-show="<?php echo esc_attr($dependence_hide_on_yes); ?>"
                                       class="cb-disable<?php if (bridge_qode_option_get_value($name) == "") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('No', 'bridge') ?></span></label>
                                <input type="checkbox" id="checkbox" class="checkbox"
                                       name="<?php echo esc_attr($name); ?>_flagmedia" value="attachment"<?php if (bridge_qode_option_get_value($name) == "attachment") { echo " selected"; } ?>/>
                                <input type="hidden" class="checkboxhidden_flagmedia" name="<?php echo esc_attr($name); ?>" value="<?php echo bridge_qode_option_get_value($name); ?>"/>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
        <?php

    }

}

class BridgeQodeFieldFlagPortfolio extends BridgeQodeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
        global $bridge_qode_options;
        $dependence = false;
        if(isset($args["dependence"]))
            $dependence = true;
        $dependence_hide_on_yes = "";
        if(isset($args["dependence_hide_on_yes"]))
            $dependence_hide_on_yes = $args["dependence_hide_on_yes"];
        $dependence_show_on_yes = "";
        if(isset($args["dependence_show_on_yes"]))
            $dependence_show_on_yes = $args["dependence_show_on_yes"];
        ?>

        <div class="qodef-page-form-section" id="qodef_<?php echo esc_attr($name); ?>">


            <div class="qodef-field-desc">
                <h4><?php echo esc_attr($label); ?></h4>

                <p><?php echo esc_attr($description); ?></p>
            </div>
            <!-- close div.qodef-field-desc -->



            <div class="qodef-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="field switch">

                            <p class="field switch">
                                <label data-hide="<?php echo esc_attr($dependence_hide_on_yes); ?>" data-show="<?php echo esc_attr($dependence_show_on_yes); ?>"
                                       class="cb-enable<?php if (bridge_qode_option_get_value($name) == "portfolio_page") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('Yes', 'bridge') ?></span></label>
                                <label data-hide="<?php echo esc_attr($dependence_show_on_yes); ?>" data-show="<?php echo esc_attr($dependence_hide_on_yes); ?>"
                                       class="cb-disable<?php if (bridge_qode_option_get_value($name) == "") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('No', 'bridge') ?></span></label>
                                <input type="checkbox" id="checkbox" class="checkbox"
                                       name="<?php echo esc_attr($name); ?>_flagportfolio" value="portfolio_page"<?php if (bridge_qode_option_get_value($name) == "portfolio_page") { echo " selected"; } ?>/>
                                <input type="hidden" class="checkboxhidden_flagportfolio" name="<?php echo esc_attr($name); ?>" value="<?php echo bridge_qode_option_get_value($name); ?>"/>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
        <?php

    }

}

class BridgeQodeFieldFlagProduct extends BridgeQodeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
        global $bridge_qode_options;
        $dependence = false;
        if(isset($args["dependence"]))
            $dependence = true;
        $dependence_hide_on_yes = "";
        if(isset($args["dependence_hide_on_yes"]))
            $dependence_hide_on_yes = $args["dependence_hide_on_yes"];
        $dependence_show_on_yes = "";
        if(isset($args["dependence_show_on_yes"]))
            $dependence_show_on_yes = $args["dependence_show_on_yes"];
        ?>

        <div class="qodef-page-form-section" id="qodef_<?php echo esc_attr($name); ?>">


            <div class="qodef-field-desc">
                <h4><?php echo esc_attr($label); ?></h4>

                <p><?php echo esc_attr($description); ?></p>
            </div>
            <!-- close div.qodef-field-desc -->



            <div class="qodef-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="field switch">

                            <p class="field switch">
                                <label data-hide="<?php echo esc_attr($dependence_hide_on_yes); ?>" data-show="<?php echo esc_attr($dependence_show_on_yes); ?>"
                                       class="cb-enable<?php if (bridge_qode_option_get_value($name) == "product") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('Yes', 'bridge') ?></span></label>
                                <label data-hide="<?php echo esc_attr($dependence_show_on_yes); ?>" data-show="<?php echo esc_attr($dependence_hide_on_yes); ?>"
                                       class="cb-disable<?php if (bridge_qode_option_get_value($name) == "") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('No', 'bridge') ?></span></label>
                                <input type="checkbox" id="checkbox" class="checkbox"
                                       name="<?php echo esc_attr($name); ?>_flagproduct" value="product"<?php if (bridge_qode_option_get_value($name) == "product") { echo " selected"; } ?>/>
                                <input type="hidden" class="checkboxhidden_flagproduct" name="<?php echo esc_attr($name); ?>" value="<?php echo bridge_qode_option_get_value($name); ?>"/>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
        <?php

    }

}

class BridgeQodeFieldFlagCustomPost extends BridgeQodeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
        global $bridge_qode_options;
        $dependence = false;
        if(isset($args["dependence"]))
            $dependence = true;
        $dependence_hide_on_yes = "";
        if(isset($args["dependence_hide_on_yes"]))
            $dependence_hide_on_yes = $args["dependence_hide_on_yes"];
        $dependence_show_on_yes = "";
        if(isset($args["dependence_show_on_yes"]))
            $dependence_show_on_yes = $args["dependence_show_on_yes"];


        if(isset($args["custom_post_type"])) {
            $custom_post_type = $args["custom_post_type"];
        } else {
            $custom_post_type = '';
        }

        ?>

        <div class="qodef-page-form-section" id="qodef_<?php echo esc_attr($name); ?>">


            <div class="qodef-field-desc">
                <h4><?php echo esc_attr($label); ?></h4>

                <p><?php echo esc_attr($description); ?></p>
            </div>
            <!-- close div.qodef-field-desc -->



            <div class="qodef-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">

                            <p class="field switch" data-custom-post-type="<?php echo esc_attr($custom_post_type); ?>">
                                <label data-hide="<?php echo esc_attr($dependence_hide_on_yes); ?>" data-show="<?php echo esc_attr($dependence_show_on_yes); ?>"
                                       class="cb-enable<?php if (bridge_qode_option_get_value($name) == $custom_post_type) { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('Yes', 'bridge') ?></span></label>
                                <label data-hide="<?php echo esc_attr($dependence_show_on_yes); ?>" data-show="<?php echo esc_attr($dependence_hide_on_yes); ?>"
                                       class="cb-disable<?php if (bridge_qode_option_get_value($name) == "") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('No', 'bridge') ?></span></label>
                                <input type="checkbox" id="checkbox" class="checkbox"
                                       name="<?php echo esc_attr($name); ?>_flagcustomposttype" value="<?php echo esc_attr($custom_post_type); ?>"<?php if (bridge_qode_option_get_value($name) == $custom_post_type) { echo " selected"; } ?>/>
                                <input type="hidden" class="checkboxhidden_flagcustomposttype" name="<?php echo esc_attr($name); ?>" value="<?php echo bridge_qode_option_get_value($name); ?>"/>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
        <?php

    }

}


class BridgeQodeFieldRange extends BridgeQodeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
        $range_min = 0;
        $range_max = 1;
        $range_step = 0.01;
        $range_decimals = 2;
        if(isset($args["range_min"]))
            $range_min = $args["range_min"];
        if(isset($args["range_max"]))
            $range_max = $args["range_max"];
        if(isset($args["range_step"]))
            $range_step = $args["range_step"];
        if(isset($args["range_decimals"]))
            $range_decimals = $args["range_decimals"];
        ?>

        <div class="qodef-page-form-section">


            <div class="qodef-field-desc">
                <h4><?php echo esc_attr($label); ?></h4>

                <p><?php echo esc_attr($description); ?></p>
            </div>
            <!-- close div.qodef-field-desc -->

            <div class="qodef-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="qodef-slider-range-wrapper">
                                <div class="form-inline">
                                    <input type="text"
                                           class="form-control qodef-form-element qodef-form-element-xsmall pull-left qodef-slider-range-value"
                                           name="<?php echo esc_attr($name); ?>" value="<?php echo bridge_qode_option_get_value($name); ?>"/>

                                    <div class="qodef-slider-range small"
                                         data-step="<?php echo esc_attr($range_step); ?>" data-min="<?php echo esc_attr($range_min); ?>" data-max="<?php echo esc_attr($range_max); ?>" data-decimals="<?php echo esc_attr($range_decimals); ?>" data-start="<?php echo bridge_qode_option_get_value($name); ?>"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
        <?php

    }

}

class BridgeQodeFieldRangeSimple extends BridgeQodeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
        ?>

        <div class="col-lg-3" id="qodef_<?php echo esc_attr($name); ?>"<?php if ($hidden) { ?> style="display: none"<?php } ?>>
            <div class="qodef-slider-range-wrapper">
                <div class="form-inline">
                    <em class="qodef-field-description"><?php echo esc_attr($label); ?></em>
                    <input type="text"
                           class="form-control qodef-form-element qodef-form-element-xxsmall pull-left qodef-slider-range-value"
                           name="<?php echo esc_attr($name); ?>" value="<?php echo bridge_qode_option_get_value($name); ?>"/>

                    <div class="qodef-slider-range xsmall"
                         data-step="0.01" data-max="1" data-start="<?php echo bridge_qode_option_get_value($name); ?>"></div>
                </div>

            </div>
        </div>
        <?php

    }

}

class BridgeQodeFieldRadio extends BridgeQodeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {

        $checked = "";
        if ($default_value == $value)
            $checked = "checked";
        $html = '<input type="radio" name="'.$name.'" value="'.$default_value.'" '.$checked.' /> '.$label.'<br />';
        echo wp_kses( $html, array(
            'input' => array(
                'type'    => true,
                'name'    => true,
                'value'   => true,
                'checked' => true
            ),
            'br'    => true
        ) );

    }

}

class BridgeQodeFieldCheckBox extends BridgeQodeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {

        $checked = "";

        if ('1' === bridge_qode_option_get_value($name)){
            $checked = "checked";
        }

        $html = '<div class ="qodef-page-form-section">';
        $html .= '<div class="qodef-section-content">';
        $html .= '<div class="container-fluid">';
        $html .= '<div class="row">';
        $html .= '<div class="col-lg-3">';
        $html .= '<input id="' . $name . '" class="qodef-single-checkbox-field" type="checkbox" name="' . esc_attr($name) . '" value="1" ' . esc_attr( $checked ) . ' />';
        $html .= '<label for="' . esc_attr($name) . '"> ' . esc_attr($label) . '</label><br />';
        $html .= '<input class="qodef-checkbox-single-hidden" type="hidden" name="' . esc_attr($name) . '" value="0"/>';
        $html .= '</div>'; //close col-lg-3
        $html .= '</div>'; //close row
        $html .= '</div>'; //close container-fluid
        $html .= '</div>'; //close qodef-section-content
        $html .= '</div>'; //close qodef-page-form-section

        echo wp_kses($html, array(
            'input' => array(
                'type' => true,
                'id'    => true,
                'name' => true,
                'value' => true,
                'checked' => true,
                'class'   => true,
                'disabled' => true
            ),
            'div' => array(
                'class' => true
            ),
            'br' => true,
            'label' => array(
                'for'=>true
            )
        ));

    }

}

class BridgeQodeFieldCheckBoxGroup extends BridgeQodeFieldType {

    public function render($name, $label = '', $description = '', $options = array(), $args = array(), $hidden = false, $repeat = array()) {
        if(!(is_array($options) && count($options))) {
            return;
        }

        if (!empty($repeat) && array_key_exists('name', $repeat) && array_key_exists('index', $repeat)) {
            $id		= $name . '-' . $repeat['index'];
            $name	= $repeat['name'] . '['.$repeat['index'].']['. $name .']';
            $saved_value	= $repeat['value'];
        } else {
            $id = $name;
            $saved_value = bridge_qode_option_get_value($name);
        }

        $dependence = isset($args["dependence"]) && $args["dependence"] ? true : false;
        $show = !empty($args["show"]) ? $args["show"] : array();

        ?>

        <div class="qodef-page-form-section" id="qodef_<?php echo esc_attr($name); ?>"<?php if ($hidden) { ?> style="display: none"<?php } ?>>
            <div class="qodef-field-desc">
                <h4><?php echo esc_html($label); ?></h4>
                <p><?php echo esc_html($description); ?></p>
            </div>
            <div class="qodef-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="qodef-checkbox-group-holder">
                                <div class="checkbox-inline" style="display: none">
                                    <label>
                                        <input checked type="checkbox" value="" name="<?php echo esc_attr($name.'[]'); ?>">
                                    </label>
                                </div>
                                <?php foreach($options as $option_key => $option_label) : ?>
                                    <?php
                                    if($option_label !== ''){
                                        $i = 1;
                                        $checked = is_array($saved_value) && in_array($option_key, $saved_value);
                                        $checked_attr = $checked ? 'checked' : '';

                                        $show_val = "";
                                        if($dependence) {
                                            if(array_key_exists($option_key, $show)) {
                                                $show_val = $show[$option_key];
                                            }
                                        }
                                        ?>
                                        <div class="checkbox-inline">
                                            <label>
                                                <input <?php echo bridge_qode_get_inline_attr($show_val, 'data-show'); ?>
                                                    <?php echo esc_attr($checked_attr); ?> type="checkbox"
                                                                                           id="<?php echo esc_attr($name.$option_key).'-'.$i; ?>"
                                                                                           value="<?php echo esc_attr($option_key); ?>" name="<?php echo esc_attr($name.'[]'); ?>"
                                                    <?php if($dependence) bridge_qode_class_attribute("dependence multiselect"); ?>>
                                                <label for="<?php echo esc_attr($name.$option_key).'-'.$i; ?>"><?php echo esc_html($option_label); ?></label>
                                            </label>
                                        </div>
                                        <?php
                                        $i++;
                                    }
                                endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}

class BridgeQodeFieldDate extends BridgeQodeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false, $repeat = array()) {

        $col_width = 2;
        if(isset($args["col_width"])) {
            $col_width = $args["col_width"];
        }

        $formatted_date_class = '';
        if(isset($args["formatted_date"]) && $args["formatted_date"] == 'yes'){
            $formatted_date_class = 'qodef-formatted-date';
        }

        if (!empty($repeat) && array_key_exists('name', $repeat) && array_key_exists('index', $repeat)) {
            $id		= $name . '-' . $repeat['index'];
            $name	= $repeat['name'] . '['.$repeat['index'].']['. $name .']';
            $value	= $repeat['value'];
        } else {
            $id = $name;
            $value = bridge_qode_option_get_value($name);
        }
        ?>

        <div class="qodef-page-form-section" id="qodef_<?php echo esc_attr($name); ?>"<?php if ($hidden) { ?> style="display: none"<?php } ?>>


            <div class="qodef-field-desc">
                <h4><?php echo esc_attr($label); ?></h4>

                <p><?php echo esc_attr($description); ?></p>
            </div>
            <!-- close div.qodef-field-desc -->

            <div class="qodef-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-<?php echo esc_attr($col_width); ?>">
                            <input type="text"
                                   class="datepicker form-control qodef-input qodef-form-element <?php echo esc_attr($formatted_date_class); ?>"
                                   name="<?php echo esc_attr($name); ?>" value="<?php echo esc_attr($value); ?>"
                            /></div>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
        <?php

    }

}

class BridgeQodeFieldIconPack extends BridgeQodeFieldType {
    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
        global $qodeIconCollections;

        $dependence = isset($args["dependence"]) ? true : false;
        $show = isset($args["show"]) ? $args["show"] : array();
        $hide = isset($args["hide"]) ? $args["hide"] : array();

        $icon_collections = $qodeIconCollections->getIconCollections();
        ?>

        <div class="qodef-page-form-section"<?php if ($hidden) { ?> style="display: none"<?php } ?>>

            <div class="qodef-field-desc">
                <h4><?php echo esc_html($label); ?></h4>

                <p><?php echo esc_html($description); ?></p>
            </div>
            <!-- close div.qodef-field-desc -->
            <div class="qodef-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <select class="form-control qodef-form-element<?php if ($dependence) { echo " dependence"; } ?>"
                                <?php foreach($show as $key=>$value) { ?>
                                    data-show-<?php echo str_replace(' ', '',$key); ?>="<?php echo esc_attr($value); ?>"
                                <?php } ?>
                                <?php foreach($hide as $key=>$value) { ?>
                                    data-hide-<?php echo str_replace(' ', '',$key); ?>="<?php echo esc_attr($value); ?>"
                                <?php } ?>
                                    name="<?php echo esc_attr($name); ?>">
                                <?php if(is_array($icon_collections) && count($icon_collections)) {
                                    foreach ($icon_collections as $collection_key => $collection_title) { ?>
                                        <option <?php if (bridge_qode_option_get_value($name) == $collection_key) { echo "selected='selected'"; } ?> value="<?php echo esc_attr($collection_key); ?>"><?php echo esc_html($collection_title); ?></option>
                                    <?php }
                                } ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
        <?php
    }
}

class BridgeQodeFieldAddress extends BridgeQodeFieldType {
    public function render( $name, $label = "", $description = "", $options = array(), $args = array(), $hidden = array(), $repeater = array() ) {
        $col_width = 12;
        if ( isset( $args["col_width"] ) ) {
            $col_width = $args["col_width"];
        }

        $suffix = ! empty( $args['suffix'] ) ? $args['suffix'] : false;

        $class = $id = $country = $lat_field = $long_field = '';
        if (!empty($repeat) && array_key_exists('name', $repeat) && array_key_exists('index', $repeat)) {
            $id		= $name . '-' . $repeat['index'];
            $name	= $repeat['name'] . '['.$repeat['index'].']['. $name .']';
            $value	= $repeat['value'];
        } else {
            $id    = $name;
            $value = bridge_qode_option_get_value( $name );
        }

        if ( $label === '' && $description === '' ) {
            $class .= ' qodef-no-description';
        }

        if ( isset( $args['country'] ) && $args['country'] != '' ) {
            $country = $args['country'];
        }

        if ( isset( $args['latitude_field'] ) && $args['latitude_field'] != '' ) {
            $lat_field = $args['latitude_field'];
        }

        if ( isset( $args['longitude_field'] ) && $args['longitude_field'] != '' ) {
            $long_field = $args['longitude_field'];
        }
        ?>

        <div class="qodef-page-form-section qodef-address-field <?php echo esc_attr( $class ); ?>" data-country="<?php echo esc_attr( $country ); ?>" data-lat-field="<?php echo esc_attr( $lat_field ); ?>" data-long-field="<?php echo esc_attr( $long_field ); ?>" id="qodef_<?php echo esc_attr( $id ); ?>">
            <div class="qodef-field-desc">
                <h4><?php echo esc_html( $label ); ?></h4>
                <p><?php echo esc_html( $description ); ?></p>
            </div>
            <div class="qodef-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-<?php echo esc_attr( $col_width ); ?>">
                            <?php if ( $suffix ) : ?>
                            <div class="input-group">
                                <?php endif; ?>
                                <input type="text" class="form-control qodef-input qodef-form-element" name="<?php echo esc_attr( $name ); ?>" value="<?php echo esc_attr( htmlspecialchars( $value ) ); ?>"/>
                                <?php if ( $suffix ) : ?>
                                    <div class="input-group-addon"><?php echo esc_html( $args['suffix'] ); ?></div>
                                <?php endif; ?>
                                <?php if ( $suffix ) : ?>
                            </div>
                        <?php endif; ?>
                            <div class="map_canvas"></div>
                            <a id="reset" class="button-primary" href="#" style="display:none;"><?php esc_html_e( 'Reset Marker', 'bridge' ); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}

class BridgeQodeFieldFactory {

    public function render( $field_type, $name, $label="", $description="", $options = array(), $args = array(), $hidden = false, $repeater = array() ) {


        switch ( strtolower( $field_type ) ) {

            case 'text':
                $field = new BridgeQodeFieldText();
                $field->render( $name, $label, $description, $options, $args, $hidden, $repeater );
                break;

            case 'textsimple':
                $field = new BridgeQodeFieldTextSimple();
                $field->render( $name, $label, $description, $options, $args, $hidden, $repeater );
                break;

            case 'textarea':
                $field = new BridgeQodeFieldTextArea();
                $field->render( $name, $label, $description, $options, $args, $hidden, $repeater );
                break;

            case 'textareasimple':
                $field = new BridgeQodeFieldTextAreaSimple();
                $field->render( $name, $label, $description, $options, $args, $hidden, $repeater );
                break;
            case 'textareahtml':
                $field = new BridgeQodeFieldTextAreaHtml();
                $field->render( $name, $label, $description, $options, $args, $hidden, $repeater );
                break;
            case 'color':
                $field = new BridgeQodeFieldColor();
                $field->render( $name, $label, $description, $options, $args, $hidden, $repeater );
                break;

            case 'colorsimple':
                $field = new BridgeQodeFieldColorSimple();
                $field->render( $name, $label, $description, $options, $args, $hidden, $repeater );
                break;

            case 'image':
                $field = new BridgeQodeFieldImage();
                $field->render( $name, $label, $description, $options, $args, $hidden, $repeater );
                break;

            case 'file':
                $field = new BridgeQodeFieldFile();
                $field->render( $name, $label, $description, $options, $args, $hidden, $repeater );
                break;

            case 'filesimple':
                $field = new BridgeQodeFieldFileSimple();
                $field->render( $name, $label, $description, $options, $args, $hidden, $repeater );
                break;

            case 'font':
                $field = new BridgeQodeFieldFont();
                $field->render( $name, $label, $description, $options, $args, $hidden, $repeater );
                break;

            case 'fontsimple':
                $field = new BridgeQodeFieldFontSimple();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;

            case 'select':
                $field = new BridgeQodeFieldSelect();
                $field->render( $name, $label, $description, $options, $args, $hidden, $repeater );
                break;

            case 'selectblank':
                $field = new BridgeQodeFieldSelectBlank();
                $field->render( $name, $label, $description, $options, $args, $hidden, $repeater );
                break;

            case 'selectsimple':
                $field = new BridgeQodeFieldSelectSimple();
                $field->render( $name, $label, $description, $options, $args, $hidden, $repeater );
                break;

            case 'selectblanksimple':
                $field = new BridgeQodeFieldSelectBlankSimple();
                $field->render( $name, $label, $description, $options, $args, $hidden, $repeater );
                break;

            case 'yesno':
                $field = new BridgeQodeFieldYesNo();
                $field->render( $name, $label, $description, $options, $args, $hidden, $repeater );
                break;

            case 'yesnosimple':
                $field = new BridgeQodeFieldYesNoSimple();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;

            case 'onoff':
                $field = new BridgeQodeFieldOnOff();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;

            case 'portfoliofollow':
                $field = new BridgeQodeFieldPortfolioFollow();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;

            case 'zeroone':
                $field = new BridgeQodeFieldZeroOne();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;

            case 'imagevideo':
                $field = new BridgeQodeFieldImageVideo();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;

            case 'yesempty':
                $field = new BridgeQodeFieldYesEmpty();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;

            case 'flagpost':
                $field = new BridgeQodeFieldFlagPost();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;

            case 'flagpage':
                $field = new BridgeQodeFieldFlagPage();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;

            case 'flagmedia':
                $field = new BridgeQodeFieldFlagMedia();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;

            case 'flagportfolio':
                $field = new BridgeQodeFieldFlagPortfolio();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;

            case 'flagproduct':
                $field = new BridgeQodeFieldFlagProduct();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;
            case 'flagcustomposttype':
                $field = new BridgeQodeFieldFlagCustomPost();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;

            case 'range':
                $field = new BridgeQodeFieldRange();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;

            case 'rangesimple':
                $field = new BridgeQodeFieldRangeSimple();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;

            case 'radio':
                $field = new BridgeQodeFieldRadio();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;

            case 'checkbox':
                $field = new BridgeQodeFieldCheckBox();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;
            case 'checkboxgroup':
                $field = new BridgeQodeFieldCheckBoxGroup();
                $field->render( $name, $label, $description, $options, $args, $hidden, $repeater );
                break;
            case 'date':
                $field = new BridgeQodeFieldDate();
                $field->render( $name, $label, $description, $options, $args, $hidden, $repeater );
                break;
            case 'iconpack':
                $field = new BridgeQodeFieldIconPack();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;
            case 'iconwithiconpack':
                $field = new QodeFieldIconWithIconPack();
                $field->render( $name, $label, $description, $options, $args, $hidden );
                break;
            case 'address':
                $field = new BridgeQodeFieldAddress();
                $field->render( $name, $label, $description, $options, $args, $hidden, $repeater );
                break;
            default:
                break;

        }

    }

}