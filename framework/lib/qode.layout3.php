<?php

/*
Class: QodeMultipleImages
A class that initializes Qode Multiple Images
*/

class BridgeQodeMultipleImages implements iBridgeQodeRender {
private $name;
private $label;
private $description;


function __construct($name,$label="",$description="") {
global $bridge_qode_framework;
$this->name = $name;
$this->label = $label;
$this->description = $description;
$bridge_qode_framework->qodeMetaBoxes->addOption($this->name,"");
}

public function render($factory) {
global $post;
?>

<div class="qodef-page-form-section">


    <div class="qodef-field-desc">
        <h4><?php echo esc_attr($this->label); ?></h4>

        <p><?php echo esc_attr($this->description); ?></p>
    </div>
    <!-- close div.qodef-field-desc -->

    <div class="qodef-section-content">
		<div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="qode-gallery-images-holder clearfix">
                        <?php
                        $portfolio_image_gallery_val = get_post_meta( $post->ID, $this->name, true );
                        if($portfolio_image_gallery_val!='' ) $portfolio_image_gallery_array=explode(',',$portfolio_image_gallery_val);

                        if(isset($portfolio_image_gallery_array) && count($portfolio_image_gallery_array)!=0):

                            foreach($portfolio_image_gallery_array as $gimg_id):

                                $gimage_wp = wp_get_attachment_image_src($gimg_id,'thumbnail', true);
                                echo '<li class="qode-gallery-image-holder"><img src="'.$gimage_wp[0].'"/></li>';

                            endforeach;

                        endif;
                        ?>
                    </ul>
                    <input type="hidden" value="<?php echo esc_attr($portfolio_image_gallery_val); ?>" id="<?php echo esc_attr($this->name) ?>" name="<?php echo esc_attr($this->name) ?>">
                    <div class="qodef-gallery-uploader">
                        <a class="qodef-gallery-upload-btn btn btn-sm btn-primary"
                           href="javascript:void(0)"><?php esc_html_e('Upload', 'bridge'); ?></a>
                        <a class="qodef-gallery-clear-btn btn btn-sm btn-default pull-right"
                           href="javascript:void(0)"><?php esc_html_e('Remove All', 'bridge'); ?></a>
                    </div>
					<?php wp_nonce_field( 'bridge-qode-update-images_' . esc_attr($this->name), 'bridge-qode-update-images_' . esc_attr($this->name) ); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- close div.qodef-section-content -->

</div>
<?php

}
}

/*
   Class: QodeImagesVideos
   A class that initializes Qode Images Videos
*/
class BridgeQodeImagesVideos implements iBridgeQodeRender {
    private $label;
    private $description;


    function __construct($label="",$description="") {
        $this->label = $label;
        $this->description = $description;
    }

    public function render($factory) {
        global $post;
        ?>
        <div class="qodef_hidden_portfolio_images" style="display: none">
            <div class="qodef-page-form-section">


                <div class="qodef-field-desc">
                    <h4><?php echo esc_attr($this->label); ?></h4>

                    <p><?php echo esc_attr($this->description); ?></p>
                </div>
                <!-- close div.qodef-field-desc -->

                <div class="qodef-section-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-2">
                                <em class="qodef-field-description"><?php esc_html_e('Order Number', 'bridge'); ?></em>
                                <input type="text"
                                       class="form-control qodef-input qodef-form-element"
                                       id="portfolioimgordernumber_x"
                                       name="portfolioimgordernumber_x"/></div>
                            <div class="col-lg-10">
                                <em class="qodef-field-description"><?php esc_html_e('Image/Video title (only for gallery layout - Portfolio Style 6)', 'bridge'); ?></em>
                                <input type="text"
                                       class="form-control qodef-input qodef-form-element"
                                       id="portfoliotitle_x"
                                       name="portfoliotitle_x"/></div>
                        </div>
                        <div class="row next-row">
                            <div class="col-lg-12">
                                <em class="qodef-field-description"><?php esc_html_e('Image', 'bridge'); ?></em>
                                <div class="qodef-media-uploader">
                                    <div style="display: none"
                                         class="qodef-media-image-holder">
                                        <img src="" alt="<?php esc_attr_e( 'Image thumbnail', 'bridge' ); ?>"
                                             class="qodef-media-image img-thumbnail"/>
                                    </div>
                                    <div style="display: none"
                                         class="qodef-media-meta-fields">
                                        <input type="hidden" class="qodef-media-upload-url"
                                               name="portfolioimg_x"
                                               id="portfolioimg_x"/>
                                        <input type="hidden"
                                               class="qodef-media-upload-height"
                                               name="qode_options_theme[media-upload][height]"
                                               value=""/>
                                        <input type="hidden"
                                               class="qodef-media-upload-width"
                                               name="qode_options_theme[media-upload][width]"
                                               value=""/>
                                    </div>
                                    <a class="qodef-media-upload-btn btn btn-sm btn-primary"
                                       href="javascript:void(0)"
                                       data-frame-title="<?php esc_attr_e('Select Image', 'bridge'); ?>"
                                       data-frame-button-text="<?php esc_attr_e('Select Image', 'bridge'); ?>"><?php esc_html_e('Upload', 'bridge'); ?></a>
                                    <a style="display: none;" href="javascript: void(0)"
                                       class="qodef-media-remove-btn btn btn-default btn-sm"><?php esc_attr_e('Remove', 'bridge'); ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="row next-row">
                            <div class="col-lg-3">
                                <em class="qodef-field-description"><?php esc_html_e('Video type', 'bridge'); ?></em>
                                <select class="form-control qodef-form-element qodef-portfoliovideotype"
                                        name="portfoliovideotype_x" id="portfoliovideotype_x">
                                    <option value=""></option>
                                    <option value="youtube"><?php esc_html_e('Youtube', 'bridge'); ?></option>
                                    <option value="vimeo"><?php esc_html_e('Vimeo', 'bridge'); ?></option>
                                    <option value="self"><?php esc_html_e('Self hosted', 'bridge'); ?></option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <em class="qodef-field-description"><?php esc_html_e('Video ID', 'bridge'); ?></em>
                                <input type="text"
                                       class="form-control qodef-input qodef-form-element"
                                       id="portfoliovideoid_x"
                                       name="portfoliovideoid_x"/></div>
                        </div>
                        <div class="row next-row">
                            <div class="col-lg-12">
                                <em class="qodef-field-description"><?php esc_html_e('Video image', 'bridge'); ?></em>
                                <div class="qodef-media-uploader">
                                    <div style="display: none"
                                         class="qodef-media-image-holder">
                                        <img src="" alt="<?php esc_attr_e( 'Image thumbnail', 'bridge' ); ?>"
                                             class="qodef-media-image img-thumbnail"/>
                                    </div>
                                    <div style="display: none"
                                         class="qodef-media-meta-fields">
                                        <input type="hidden" class="qodef-media-upload-url"
                                               name="portfoliovideoimage_x"
                                               id="portfoliovideoimage_x"/>
                                        <input type="hidden"
                                               class="qodef-media-upload-height"
                                               name="qode_options_theme[media-upload][height]"
                                               value=""/>
                                        <input type="hidden"
                                               class="qodef-media-upload-width"
                                               name="qode_options_theme[media-upload][width]"
                                               value=""/>
                                    </div>
                                    <a class="qodef-media-upload-btn btn btn-sm btn-primary"
                                       href="javascript:void(0)"
                                       data-frame-title="<?php esc_attr_e('Select Image', 'bridge'); ?>"
                                       data-frame-button-text="<?php esc_attr_e('Select Image', 'bridge'); ?>"><?php esc_html_e('Upload', 'bridge'); ?></a>
                                    <a style="display: none;" href="javascript: void(0)"
                                       class="qodef-media-remove-btn btn btn-default btn-sm"><?php esc_html_e('Remove', 'bridge'); ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="row next-row">
                            <div class="col-lg-4">
                                <em class="qodef-field-description"><?php esc_html_e('Video webm', 'bridge'); ?></em>
                                <input type="text"
                                       class="form-control qodef-input qodef-form-element"
                                       id="portfoliovideowebm_x"
                                       name="portfoliovideowebm_x"/></div>
                            <div class="col-lg-4">
                                <em class="qodef-field-description"><?php esc_html_e('Video mp4', 'bridge'); ?></em>
                                <input type="text"
                                       class="form-control qodef-input qodef-form-element"
                                       id="portfoliovideomp4_x"
                                       name="portfoliovideomp4_x"/></div>
                            <div class="col-lg-4">
                                <em class="qodef-field-description"><?php esc_html_e('Video ogv', 'bridge'); ?></em>
                                <input type="text"
                                       class="form-control qodef-input qodef-form-element"
                                       id="portfoliovideoogv_x"
                                       name="portfoliovideoogv_x"/></div>
                        </div>
                        <div class="row next-row">
                            <div class="col-lg-12">
                                <a class="qodef_remove_image btn btn-sm btn-primary" href="/" onclick="javascript: return false;"><?php esc_html_e('Remove portfolio image/video', 'bridge'); ?></a>
                            </div>
                        </div>



                    </div>
                </div>
                <!-- close div.qodef-section-content -->

            </div>
        </div>

        <?php
        $no = 1;
        $portfolio_images = get_post_meta( $post->ID, 'qode_portfolio_images', true );
        if (count($portfolio_images)>1) {
            usort($portfolio_images, "bridge_qode_compare_portfolio_images");
        }
        while (isset($portfolio_images[$no-1])) {
            $portfolio_image = $portfolio_images[$no-1];
            ?>
            <div class="qodef_portfolio_image" rel="<?php echo esc_attr($no); ?>" style="display: block;">

                <div class="qodef-page-form-section">


                    <div class="qodef-field-desc">
                        <h4><?php echo esc_attr($this->label); ?></h4>

                        <p><?php echo esc_attr($this->description); ?></p>
                    </div>
                    <!-- close div.qodef-field-desc -->

                    <div class="qodef-section-content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-2">
                                    <em class="qodef-field-description"><?php esc_html_e('Order Number', 'bridge'); ?></em>
                                    <input type="text"
                                           class="form-control qodef-input qodef-form-element"
                                           id="portfolioimgordernumber_<?php echo esc_attr($no); ?>"
                                           name="portfolioimgordernumber[]" value="<?php echo isset($portfolio_image['portfolioimgordernumber'])?stripslashes($portfolio_image['portfolioimgordernumber']):""; ?>"/></div>
                                <div class="col-lg-10">
                                    <em class="qodef-field-description"><?php esc_html_e('Image/Video title (only for gallery layout - Portfolio Style 6)', 'bridge'); ?></em>
                                    <input type="text"
                                           class="form-control qodef-input qodef-form-element"
                                           id="portfoliotitle_<?php echo esc_attr($no); ?>"
                                           name="portfoliotitle[]" value="<?php echo isset($portfolio_image['portfoliotitle'])?stripslashes($portfolio_image['portfoliotitle']):""; ?>"/></div>
                            </div>
                            <div class="row next-row">
                                <div class="col-lg-12">
                                    <em class="qodef-field-description"><?php esc_html_e('Image', 'bridge'); ?></em>
                                    <div class="qodef-media-uploader">
                                        <div<?php if (stripslashes($portfolio_image['portfolioimg']) == false) { ?> style="display: none"<?php } ?>
                                            class="qodef-media-image-holder">
                                            <img src="<?php if (stripslashes($portfolio_image['portfolioimg']) == true) { echo bridge_qode_get_attachment_thumb_url($portfolio_image['portfolioimg']); } ?>" alt="<?php esc_attr_e( 'Image thumbnail', 'bridge' ); ?>"
                                                 class="qodef-media-image img-thumbnail"/>
                                        </div>
                                        <div style="display: none"
                                             class="qodef-media-meta-fields">
                                            <input type="hidden" class="qodef-media-upload-url"
                                                   name="portfolioimg[]"
                                                   id="portfolioimg_<?php echo esc_attr($no); ?>"
                                                   value="<?php echo stripslashes($portfolio_image['portfolioimg']); ?>"/>
                                            <input type="hidden"
                                                   class="qodef-media-upload-height"
                                                   name="qode_options_theme[media-upload][height]"
                                                   value=""/>
                                            <input type="hidden"
                                                   class="qodef-media-upload-width"
                                                   name="qode_options_theme[media-upload][width]"
                                                   value=""/>
                                        </div>
                                        <a class="qodef-media-upload-btn btn btn-sm btn-primary"
                                           href="javascript:void(0)"
                                           data-frame-title="<?php esc_attr_e('Select Image', 'bridge'); ?>"
                                           data-frame-button-text="<?php esc_attr_e('Select Image', 'bridge'); ?>"><?php esc_html_e('Upload', 'bridge'); ?></a>
                                        <a style="display: none;" href="javascript: void(0)"
                                           class="qodef-media-remove-btn btn btn-default btn-sm"><?php esc_html_e('Remove', 'bridge'); ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row next-row">
                                <div class="col-lg-3">
                                    <em class="qodef-field-description"><?php esc_html_e('Video type', 'bridge'); ?></em>
                                    <select class="form-control qodef-form-element qodef-portfoliovideotype"
                                            name="portfoliovideotype[]" id="portfoliovideotype_<?php echo esc_attr($no); ?>">
                                        <option value=""></option>
                                        <option <?php if ($portfolio_image['portfoliovideotype'] == "youtube") { echo "selected='selected'"; } ?>  value="youtube"><?php esc_html_e('Youtube', 'bridge'); ?></option>
                                        <option <?php if ($portfolio_image['portfoliovideotype'] == "vimeo") { echo "selected='selected'"; } ?>  value="vimeo"><?php esc_html_e('Vimeo', 'bridge'); ?></option>
                                        <option <?php if ($portfolio_image['portfoliovideotype'] == "self") { echo "selected='selected'"; } ?>  value="self"><?php esc_html_e('Self hosted', 'bridge'); ?></option>
                                    </select>
                                </div>
                                <div class="col-lg-3">
                                    <em class="qodef-field-description"><?php esc_html_e('Video ID', 'bridge'); ?></em>
                                    <input type="text"
                                           class="form-control qodef-input qodef-form-element"
                                           id="portfoliovideoid_<?php echo esc_attr($no); ?>"
                                           name="portfoliovideoid[]" value="<?php echo isset($portfolio_image['portfoliovideoid'])?stripslashes($portfolio_image['portfoliovideoid']):""; ?>"/></div>
                            </div>
                            <div class="row next-row">
                                <div class="col-lg-12">
                                    <em class="qodef-field-description"><?php esc_html_e('Video image', 'bridge'); ?></em>
                                    <div class="qodef-media-uploader">
                                        <div<?php if (stripslashes($portfolio_image['portfoliovideoimage']) == false) { ?> style="display: none"<?php } ?>
                                            class="qodef-media-image-holder">
                                            <img src="<?php if (stripslashes($portfolio_image['portfoliovideoimage']) == true) { echo bridge_qode_get_attachment_thumb_url($portfolio_image['portfoliovideoimage']); } ?>" alt="<?php esc_attr_e( 'Image thumbnail', 'bridge' ); ?>"
                                                 class="qodef-media-image img-thumbnail"/>
                                        </div>
                                        <div style="display: none"
                                             class="qodef-media-meta-fields">
                                            <input type="hidden" class="qodef-media-upload-url"
                                                   name="portfoliovideoimage[]"
                                                   id="portfoliovideoimage_<?php echo esc_attr($no); ?>"
                                                   value="<?php echo stripslashes($portfolio_image['portfoliovideoimage']); ?>"/>
                                            <input type="hidden"
                                                   class="qodef-media-upload-height"
                                                   name="qode_options_theme[media-upload][height]"
                                                   value=""/>
                                            <input type="hidden"
                                                   class="qodef-media-upload-width"
                                                   name="qode_options_theme[media-upload][width]"
                                                   value=""/>
                                        </div>
                                        <a class="qodef-media-upload-btn btn btn-sm btn-primary"
                                           href="javascript:void(0)"
                                           data-frame-title="<?php esc_attr_e('Select Image', 'bridge'); ?>"
                                           data-frame-button-text="<?php esc_attr_e('Select Image', 'bridge'); ?>"><?php esc_html_e('Upload', 'bridge'); ?></a>
                                        <a style="display: none;" href="javascript: void(0)"
                                           class="qodef-media-remove-btn btn btn-default btn-sm"><?php esc_html_e('Remove', 'bridge'); ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row next-row">
                                <div class="col-lg-4">
                                    <em class="qodef-field-description"><?php esc_html_e('Video webm', 'bridge'); ?></em>
                                    <input type="text"
                                           class="form-control qodef-input qodef-form-element"
                                           id="portfoliovideowebm_<?php echo esc_attr($no); ?>"
                                           name="portfoliovideowebm[]" value="<?php echo isset($portfolio_image['portfoliovideowebm'])?stripslashes($portfolio_image['portfoliovideowebm']):""; ?>"/></div>
                                <div class="col-lg-4">
                                    <em class="qodef-field-description"><?php esc_html_e('Video mp4', 'bridge'); ?></em>
                                    <input type="text"
                                           class="form-control qodef-input qodef-form-element"
                                           id="portfoliovideomp4_<?php echo esc_attr($no); ?>"
                                           name="portfoliovideomp4[]" value="<?php echo isset($portfolio_image['portfoliovideomp4'])?stripslashes($portfolio_image['portfoliovideomp4']):""; ?>"/></div>
                                <div class="col-lg-4">
                                    <em class="qodef-field-description"><?php esc_html_e('Video ogv', 'bridge'); ?></em>
                                    <input type="text"
                                           class="form-control qodef-input qodef-form-element"
                                           id="portfoliovideoogv_<?php echo esc_attr($no); ?>"
                                           name="portfoliovideoogv[]" value="<?php echo isset($portfolio_image['portfoliovideoogv'])?stripslashes($portfolio_image['portfoliovideoogv']):""; ?>"/></div>
                            </div>
                            <div class="row next-row">
                                <div class="col-lg-12">
                                    <a class="qodef_remove_image btn btn-sm btn-primary" href="/" onclick="javascript: return false;"><?php esc_html_e('Remove portfolio image/video', 'bridge'); ?></a>
                                </div>
                            </div>



                        </div>
                    </div>
                    <!-- close div.qodef-section-content -->

                </div>
            </div>
            <?php
            $no++;
        }
        ?>
        <br />
        <a class="qodef_add_image btn btn-sm btn-primary" onclick="javascript: return false;" href="/" ><?php esc_html_e('Add portfolio image/video', 'bridge'); ?></a>


        <?php

    }
}


/*
   Class: QodeImagesVideos
   A class that initializes Qode Images Videos
*/
class BridgeQodeImagesVideosFramework implements iBridgeQodeRender {
    private $label;
    private $description;


    function __construct($label="",$description="") {
        $this->label = $label;
        $this->description = $description;
    }

    public function render($factory) {
        global $post;
        ?>

        <!--Image hidden start-->
        <div class="qodef-hidden-portfolio-images"  style="display: none">
            <div class="qodef-portfolio-toggle-holder">
                <div class="qodef-portfolio-toggle qodef-toggle-desc">
                    <span class="number">1</span><span class="qodef-toggle-inner"><?php esc_html_e('Image - ', 'bridge'); ?><em><?php esc_html_e('(Order Number, Image Title)', 'bridge'); ?></em></span>
                </div>
                <div class="qodef-portfolio-toggle qodef-portfolio-control">
                    <span class="toggle-portfolio-media"><i class="fa fa-caret-up"></i></span>
                    <a href="#" class="remove-portfolio-media"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <div class="qodef-portfolio-toggle-content">
                <div class="qodef-page-form-section">
                    <div class="qodef-section-content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="qodef-media-uploader">
                                        <em class="qodef-field-description"><?php esc_html_e('Image', 'bridge'); ?></em>
                                        <div style="display: none" class="qodef-media-image-holder">
                                            <img src="" alt="<?php esc_attr_e( 'Image thumbnail', 'bridge' ); ?>" class="qodef-media-image img-thumbnail">
                                        </div>
                                        <div  class="qodef-media-meta-fields">
                                            <input type="hidden" class="qodef-media-upload-url" name="portfolioimg_x" id="portfolioimg_x">
                                            <input type="hidden" class="qodef-media-upload-height" name="qode_options_theme[media-upload][height]" value="">
                                            <input type="hidden" class="qodef-media-upload-width" name="qode_options_theme[media-upload][width]" value="">
                                        </div>
                                        <a class="qodef-media-upload-btn btn btn-sm btn-primary" href="javascript:void(0)" data-frame-title="Select Image" data-frame-button-text="Select Image"><?php esc_html_e('Upload', 'bridge'); ?></a>
                                        <a style="display: none;" href="javascript: void(0)" class="qodef-media-remove-btn btn btn-default btn-sm"><?php esc_html_e('Remove', 'bridge'); ?></a>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <em class="qodef-field-description"><?php esc_html_e('Order Number', 'bridge'); ?></em>
                                    <input type="text" class="form-control qodef-input qodef-form-element" id="portfolioimgordernumber_x" name="portfolioimgordernumber_x">
                                </div>
                                <div class="col-lg-8">
                                    <em class="qodef-field-description"><?php esc_html_e('Image Title (works only for Gallery portfolio type selected)', 'bridge'); ?></em>
                                    <input type="text" class="form-control qodef-input qodef-form-element" id="portfoliotitle_x" name="portfoliotitle_x">
                                </div>
                            </div>
                            <input type="hidden" name="portfoliovideoimage_x" id="portfoliovideoimage_x">
                            <input type="hidden" name="portfoliovideotype_x" id="portfoliovideotype_x">
                            <input type="hidden" name="portfoliovideoid_x" id="portfoliovideoid_x">
                            <input type="hidden" name="portfoliovideowebm_x" id="portfoliovideowebm_x">
                            <input type="hidden" name="portfoliovideomp4_x" id="portfoliovideomp4_x">
                            <input type="hidden" name="portfoliovideoogv_x" id="portfoliovideoogv_x">
                            <input type="hidden" name="portfolioimgtype_x" id="portfolioimgtype_x" value="image">

                        </div><!-- close div.container-fluid -->
                    </div><!-- close div.qodef-section-content -->
                </div>
            </div>
        </div>
        <!--Image hidden End-->

        <!--Video Hidden Start-->
        <div class="qodef-hidden-portfolio-videos"  style="display: none">
            <div class="qodef-portfolio-toggle-holder">
                <div class="qodef-portfolio-toggle qodef-toggle-desc">
                    <span class="number">2</span><span class="qodef-toggle-inner"><?php esc_html_e('Video - ', 'bridge'); ?><em><?php esc_html_e('(Order Number, Video Title)', 'bridge'); ?></em></span>
                </div>
                <div class="qodef-portfolio-toggle qodef-portfolio-control">
                    <span class="toggle-portfolio-media"><i class="fa fa-caret-up"></i></span> <a href="#" class="remove-portfolio-media"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <div class="qodef-portfolio-toggle-content">
                <div class="qodef-page-form-section">
                    <div class="qodef-section-content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="qodef-media-uploader">
                                        <em class="qodef-field-description"><?php esc_html_e('Cover Video Image', 'bridge'); ?></em>
                                        <div style="display: none" class="qodef-media-image-holder">
                                            <img src="" alt="<?php esc_attr_e( 'Image thumbnail', 'bridge' ); ?>" class="qodef-media-image img-thumbnail">
                                        </div>
                                        <div style="display: none" class="qodef-media-meta-fields">
                                            <input type="hidden" class="qodef-media-upload-url" name="portfoliovideoimage_x" id="portfoliovideoimage_x">
                                            <input type="hidden" class="qodef-media-upload-height" name="qode_options_theme[media-upload][height]" value="">
                                            <input type="hidden" class="qodef-media-upload-width" name="qode_options_theme[media-upload][width]" value="">
                                        </div>
                                        <a class="qodef-media-upload-btn btn btn-sm btn-primary" href="javascript:void(0)" data-frame-title="Select Image" data-frame-button-text="Select Image"><?php esc_html_e('Upload', 'bridge'); ?></a>
                                        <a style="display: none;" href="javascript: void(0)" class="qodef-media-remove-btn btn btn-default btn-sm"><?php esc_html_e('Remove', 'bridge'); ?></a>
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <em class="qodef-field-description"><?php esc_html_e('Order Number', 'bridge'); ?></em>
                                            <input type="text" class="form-control qodef-input qodef-form-element" id="portfolioimgordernumber_x" name="portfolioimgordernumber_x">
                                        </div>
                                        <div class="col-lg-10">
                                            <em class="qodef-field-description"><?php esc_html_e('Video Title (works only for Gallery portfolio type selected)', 'bridge'); ?></em>
                                            <input type="text" class="form-control qodef-input qodef-form-element" id="portfoliotitle_x" name="portfoliotitle_x">
                                        </div>
                                    </div>
                                    <div class="row next-row">
                                        <div class="col-lg-2">
                                            <em class="qodef-field-description"><?php esc_html_e('Video type', 'bridge'); ?></em>
                                            <select class="form-control qodef-form-element qodef-portfoliovideotype" name="portfoliovideotype_x" id="portfoliovideotype_x">
                                                <option value=""></option>
                                                <option value="youtube"><?php esc_html_e('Youtube', 'bridge'); ?></option>
                                                <option value="vimeo"><?php esc_html_e('Vimeo', 'bridge'); ?></option>
                                                <option value="self"><?php esc_html_e('Self hosted', 'bridge'); ?></option>
                                            </select>
                                        </div>
                                        <div class="col-lg-2 qodef-video-id-holder">
                                            <em class="qodef-field-description" id="videoId"><?php esc_html_e('Video ID', 'bridge'); ?></em>
                                            <input type="text" class="form-control qodef-input qodef-form-element" id="portfoliovideoid_x" name="portfoliovideoid_x">
                                        </div>
                                    </div>

                                    <div class="row next-row qodef-video-self-hosted-path-holder">
                                        <div class="col-lg-4">
                                            <em class="qodef-field-description"><?php esc_html_e('Video webm', 'bridge'); ?></em>
                                            <input type="text" class="form-control qodef-input qodef-form-element" id="portfoliovideowebm_x" name="portfoliovideowebm_x">
                                        </div>
                                        <div class="col-lg-4">
                                            <em class="qodef-field-description"><?php esc_html_e('Video mp4', 'bridge'); ?></em>
                                            <input type="text" class="form-control qodef-input qodef-form-element" id="portfoliovideomp4_x" name="portfoliovideomp4_x">
                                        </div>
                                        <div class="col-lg-4">
                                            <em class="qodef-field-description"><?php esc_html_e('Video ogv', 'bridge'); ?></em>
                                            <input type="text" class="form-control qodef-input qodef-form-element" id="portfoliovideoogv_x" name="portfoliovideoogv_x">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <input type="hidden" name="portfolioimg_x" id="portfolioimg_x">
                            <input type="hidden" name="portfolioimgtype_x" id="portfolioimgtype_x" value="video">
                        </div><!-- close div.container-fluid -->
                    </div><!-- close div.qodef-section-content -->
                </div>
            </div>
        </div>
        <!--Video Hidden End-->


        <?php
        $no = 1;
        $portfolio_images = get_post_meta( $post->ID, 'qode_portfolio_images', true );
        if (is_array($portfolio_images) && count($portfolio_images)>1) {
            usort($portfolio_images, "bridge_qode_compare_portfolio_images");
        }
        while (isset($portfolio_images[$no-1])) {
            $portfolio_image = $portfolio_images[$no-1];
            if (isset($portfolio_image['portfolioimgtype']))
                $portfolio_img_type = $portfolio_image['portfolioimgtype'];
            else {
                if (stripslashes($portfolio_image['portfolioimg']) == true)
                    $portfolio_img_type = "image";
                else
                    $portfolio_img_type = "video";
            }
            if ($portfolio_img_type == "image") {
                ?>

                <div class="qodef-portfolio-images qodef-portfolio-media" rel="<?php echo esc_attr($no); ?>">
                    <div class="qodef-portfolio-toggle-holder">
                        <div class="qodef-portfolio-toggle qodef-toggle-desc">
                            <span class="number"><?php echo esc_attr($no); ?></span><span class="qodef-toggle-inner"><?php esc_html_e('Image - ', 'bridge'); ?><em>(<?php echo stripslashes($portfolio_image['portfolioimgordernumber']); ?>, <?php echo stripslashes($portfolio_image['portfoliotitle']); ?>)</em></span>
                        </div>
                        <div class="qodef-portfolio-toggle qodef-portfolio-control">
                            <a href="#" class="toggle-portfolio-media"><i class="fa fa-caret-down"></i></a>
                            <a href="#" class="remove-portfolio-media"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="qodef-portfolio-toggle-content" style="display: none">
                        <div class="qodef-page-form-section">
                            <div class="qodef-section-content">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="qodef-media-uploader">
                                                <em class="qodef-field-description"><?php esc_html_e('Image', 'bridge'); ?></em>
                                                <div<?php if (stripslashes($portfolio_image['portfolioimg']) == false) { ?> style="display: none"<?php } ?>
                                                    class="qodef-media-image-holder">
                                                    <img src="<?php if (stripslashes($portfolio_image['portfolioimg']) == true) { echo bridge_qode_get_attachment_thumb_url($portfolio_image['portfolioimg']); } ?>" alt="<?php esc_attr_e( 'Image thumbnail', 'bridge' ); ?>"
                                                         class="qodef-media-image img-thumbnail"/>
                                                </div>
                                                <div style="display: none"
                                                     class="qodef-media-meta-fields">
                                                    <input type="hidden" class="qodef-media-upload-url"
                                                           name="portfolioimg[]"
                                                           id="portfolioimg_<?php echo esc_attr($no); ?>"
                                                           value="<?php echo stripslashes($portfolio_image['portfolioimg']); ?>"/>
                                                    <input type="hidden"
                                                           class="qodef-media-upload-height"
                                                           name="qode_options_theme[media-upload][height]"
                                                           value=""/>
                                                    <input type="hidden"
                                                           class="qodef-media-upload-width"
                                                           name="qode_options_theme[media-upload][width]"
                                                           value=""/>
                                                </div>
                                                <a class="qodef-media-upload-btn btn btn-sm btn-primary"
                                                   href="javascript:void(0)"
                                                   data-frame-title="<?php esc_attr_e('Select Image', 'bridge'); ?>"
                                                   data-frame-button-text="<?php esc_attr_e('Select Image', 'bridge'); ?>"><?php esc_html_e('Upload', 'bridge'); ?></a>
                                                <a style="display: none;" href="javascript: void(0)"
                                                   class="qodef-media-remove-btn btn btn-default btn-sm"><?php esc_html_e('Remove', 'bridge'); ?></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <em class="qodef-field-description"><?php esc_html_e('Order Number', 'bridge'); ?></em>
                                            <input type="text" class="form-control qodef-input qodef-form-element" id="portfolioimgordernumber_<?php echo esc_attr($no); ?>" name="portfolioimgordernumber[]" value="<?php echo isset($portfolio_image['portfolioimgordernumber'])?stripslashes($portfolio_image['portfolioimgordernumber']):""; ?>">
                                        </div>
                                        <div class="col-lg-8">
                                            <em class="qodef-field-description"><?php esc_html_e('Image Title (works only for Gallery portfolio type selected)', 'bridge'); ?></em>
                                            <input type="text" class="form-control qodef-input qodef-form-element" id="portfoliotitle_<?php echo esc_attr($no); ?>" name="portfoliotitle[]" value="<?php echo isset($portfolio_image['portfoliotitle'])?stripslashes($portfolio_image['portfoliotitle']):""; ?>">
                                        </div>
                                    </div>
                                    <input type="hidden" id="portfoliovideoimage_<?php echo esc_attr($no); ?>" name="portfoliovideoimage[]">
                                    <input type="hidden" id="portfoliovideotype_<?php echo esc_attr($no); ?>" name="portfoliovideotype[]">
                                    <input type="hidden" id="portfoliovideoid_<?php echo esc_attr($no); ?>" name="portfoliovideoid[]">
                                    <input type="hidden" id="portfoliovideowebm_<?php echo esc_attr($no); ?>" name="portfoliovideowebm[]">
                                    <input type="hidden" id="portfoliovideomp4_<?php echo esc_attr($no); ?>" name="portfoliovideomp4[]">
                                    <input type="hidden" id="portfoliovideoogv_<?php echo esc_attr($no); ?>" name="portfoliovideoogv[]">
                                    <input type="hidden" id="portfolioimgtype_<?php echo esc_attr($no); ?>" name="portfolioimgtype[]" value="image">
                                </div><!-- close div.container-fluid -->
                            </div><!-- close div.qodef-section-content -->
                        </div>
                    </div>
                </div>

                <?php
            } else {
                ?>
                <div class="qodef-portfolio-videos qodef-portfolio-media" rel="<?php echo esc_attr($no); ?>">
                    <div class="qodef-portfolio-toggle-holder">
                        <div class="qodef-portfolio-toggle qodef-toggle-desc">
                            <span class="number"><?php echo esc_attr($no); ?></span><span class="qodef-toggle-inner"><?php esc_html_e('Video - ', 'bridge'); ?><em>(<?php echo stripslashes($portfolio_image['portfolioimgordernumber']); ?>, <?php echo stripslashes($portfolio_image['portfoliotitle']); ?></em>) </span>
                        </div>
                        <div class="qodef-portfolio-toggle qodef-portfolio-control">
                            <a href="#" class="toggle-portfolio-media"><i class="fa fa-caret-down"></i></a> <a href="#" class="remove-portfolio-media"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="qodef-portfolio-toggle-content" style="display: none">
                        <div class="qodef-page-form-section">
                            <div class="qodef-section-content">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="qodef-media-uploader">
                                                <em class="qodef-field-description"><?php esc_html_e('Cover Video Image', 'bridge'); ?></em>
                                                <div<?php if (stripslashes($portfolio_image['portfoliovideoimage']) == false) { ?> style="display: none"<?php } ?>
                                                    class="qodef-media-image-holder">
                                                    <img src="<?php if (stripslashes($portfolio_image['portfoliovideoimage']) == true) { echo bridge_qode_get_attachment_thumb_url($portfolio_image['portfoliovideoimage']); } ?>" alt="<?php esc_attr_e( 'Image thumbnail', 'bridge' ); ?>"
                                                         class="qodef-media-image img-thumbnail"/>
                                                </div>
                                                <div style="display: none"
                                                     class="qodef-media-meta-fields">
                                                    <input type="hidden" class="qodef-media-upload-url"
                                                           name="portfoliovideoimage[]"
                                                           id="portfoliovideoimage_<?php echo esc_attr($no); ?>"
                                                           value="<?php echo stripslashes($portfolio_image['portfoliovideoimage']); ?>"/>
                                                    <input type="hidden"
                                                           class="qodef-media-upload-height"
                                                           name="qode_options_theme[media-upload][height]"
                                                           value=""/>
                                                    <input type="hidden"
                                                           class="qodef-media-upload-width"
                                                           name="qode_options_theme[media-upload][width]"
                                                           value=""/>
                                                </div>
                                                <a class="qodef-media-upload-btn btn btn-sm btn-primary"
                                                   href="javascript:void(0)"
                                                   data-frame-title="<?php esc_attr_e('Select Image', 'bridge'); ?>"
                                                   data-frame-button-text="<?php esc_attr_e('Select Image', 'bridge'); ?>"><?php esc_html_e('Upload', 'bridge'); ?></a>
                                                <a style="display: none;" href="javascript: void(0)"
                                                   class="qodef-media-remove-btn btn btn-default btn-sm"><?php esc_html_e('Remove', 'bridge'); ?></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-10">
                                            <div class="row">
                                                <div class="col-lg-2">
                                                    <em class="qodef-field-description"><?php esc_html_e('Order Number', 'bridge'); ?></em>
                                                    <input type="text" class="form-control qodef-input qodef-form-element" id="portfolioimgordernumber_<?php echo esc_attr($no); ?>" name="portfolioimgordernumber[]" value="<?php echo isset($portfolio_image['portfolioimgordernumber'])?stripslashes($portfolio_image['portfolioimgordernumber']):""; ?>">
                                                </div>
                                                <div class="col-lg-10">
                                                    <em class="qodef-field-description"><?php esc_html_e('Video Title (works only for Gallery portfolio type selected)', 'bridge'); ?></em>
                                                    <input type="text" class="form-control qodef-input qodef-form-element" id="portfoliotitle_<?php echo esc_attr($no); ?>" name="portfoliotitle[]" value="<?php echo isset($portfolio_image['portfoliotitle'])?stripslashes($portfolio_image['portfoliotitle']):""; ?>">
                                                </div>
                                            </div>
                                            <div class="row next-row">
                                                <div class="col-lg-2">
                                                    <em class="qodef-field-description"><?php esc_html_e('Video type', 'bridge'); ?></em>
                                                    <select class="form-control qodef-form-element qodef-portfoliovideotype"
                                                            name="portfoliovideotype[]" id="portfoliovideotype_<?php echo esc_attr($no); ?>">
                                                        <option value=""></option>
                                                        <option <?php if ($portfolio_image['portfoliovideotype'] == "youtube") { echo "selected='selected'"; } ?>  value="youtube"><?php esc_html_e('Youtube', 'bridge'); ?></option>
                                                        <option <?php if ($portfolio_image['portfoliovideotype'] == "vimeo") { echo "selected='selected'"; } ?>  value="vimeo"><?php esc_html_e('Vimeo', 'bridge'); ?></option>
                                                        <option <?php if ($portfolio_image['portfoliovideotype'] == "self") { echo "selected='selected'"; } ?>  value="self"><?php esc_html_e('Self hosted', 'bridge'); ?></option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-2 qodef-video-id-holder">
                                                    <em class="qodef-field-description"><?php esc_html_e('Video ID', 'bridge'); ?></em>
                                                    <input type="text"
                                                           class="form-control qodef-input qodef-form-element"
                                                           id="portfoliovideoid_<?php echo esc_attr($no); ?>"
                                                           name="portfoliovideoid[]" value="<?php echo isset($portfolio_image['portfoliovideoid'])?stripslashes($portfolio_image['portfoliovideoid']):""; ?>"/>
                                                </div>
                                            </div>

                                            <div class="row next-row qodef-video-self-hosted-path-holder">
                                                <div class="col-lg-4">
                                                    <em class="qodef-field-description"><?php esc_html_e('Video webm', 'bridge'); ?></em>
                                                    <input type="text"
                                                           class="form-control qodef-input qodef-form-element"
                                                           id="portfoliovideowebm_<?php echo esc_attr($no); ?>"
                                                           name="portfoliovideowebm[]" value="<?php echo isset($portfolio_image['portfoliovideowebm'])?stripslashes($portfolio_image['portfoliovideowebm']):""; ?>"/></div>
                                                <div class="col-lg-4">
                                                    <em class="qodef-field-description"><?php esc_html_e('Video mp4', 'bridge'); ?></em>
                                                    <input type="text"
                                                           class="form-control qodef-input qodef-form-element"
                                                           id="portfoliovideomp4_<?php echo esc_attr($no); ?>"
                                                           name="portfoliovideomp4[]" value="<?php echo isset($portfolio_image['portfoliovideomp4'])?stripslashes($portfolio_image['portfoliovideomp4']):""; ?>"/></div>
                                                <div class="col-lg-4">
                                                    <em class="qodef-field-description"><?php esc_html_e('Video ogv', 'bridge'); ?></em>
                                                    <input type="text"
                                                           class="form-control qodef-input qodef-form-element"
                                                           id="portfoliovideoogv_<?php echo esc_attr($no); ?>"
                                                           name="portfoliovideoogv[]" value="<?php echo isset($portfolio_image['portfoliovideoogv'])?stripslashes($portfolio_image['portfoliovideoogv']):""; ?>"/></div>
                                            </div>
                                        </div>

                                    </div>
                                    <input type="hidden" id="portfolioimg_<?php echo esc_attr($no); ?>" name="portfolioimg[]">
                                    <input type="hidden" id="portfolioimgtype_<?php echo esc_attr($no); ?>" name="portfolioimgtype[]" value="video">
                                </div><!-- close div.container-fluid -->
                            </div><!-- close div.qodef-section-content -->
                        </div>
                    </div>
                </div>
                <?php
            }
            $no++;
        }
        ?>

        <div class="qodef-portfolio-add">
            <a class="qodef-add-image btn btn-sm btn-primary" href="#"><i class="fa fa-camera"></i><?php esc_html_e(' Add Image', 'bridge'); ?></a>
            <a class="qodef-add-video btn btn-sm btn-primary" href="#"><i class="fa fa-video-camera"></i><?php esc_html_e(' Add Video', 'bridge'); ?></a>

            <a class="qodef-toggle-all-media btn btn-sm btn-default pull-right" href="#"><?php esc_html_e('Expand All', 'bridge'); ?></a>
            <?php /* <a class="qodef-remove-last-row-media btn btn-sm btn-default pull-right" href="#"> Remove last row</a> */ ?>
        </div>


        <?php

    }
}



class BridgeQodeRepeater implements iBridgeQodeRender
{
    private $label;
    private $description;
    private $name;
    private $fields;
    private $num_of_rows;
    private $button_text;

    function __construct($fields, $name, $label = '', $description = '', $button_text = '', $field_domain = 'meta')
    {
        global $bridge_qode_framework;

        $this->label = $label;
        $this->description = $description;
        $this->fields = $fields;
        $this->field_domain = $field_domain;
        $this->name = $name;
        $this->num_of_rows = 1;
        $this->button_text = !empty($button_text) ? $button_text : 'Add New Item';

        $counter = 0;

        foreach ($this->fields as $field) {

            if(!isset($this->fields[$counter]['options'])){
                $this->fields[$counter]['options'] = array();
            }
            if(!isset($this->fields[$counter]['args'])){
                $this->fields[$counter]['args'] = array();
            }
            if(!isset($this->fields[$counter]['hidden'])){
                $this->fields[$counter]['hidden'] = false;
            }
            if(!isset($this->fields[$counter]['label'])){
                $this->fields[$counter]['label'] = '';
            }
            if(!isset($this->fields[$counter]['description'])){
                $this->fields[$counter]['description'] = '';
            }
            if(!isset($this->fields[$counter]['default_value'])){
                $this->fields[$counter]['default_value'] = '';
            }
            $counter++;
        }
        if($this->field_domain != 'meta'){
            $bridge_qode_framework->qodeOptions->addOption($this->name, '');
        } else {
            $bridge_qode_framework->qodeMetaBoxes->addOption($this->name, '');
        }

    }

    public function render($factory)
    {
        global $post;

        $clones = array();

        $clones = bridge_qode_option_get_value($this->name);

        ?>
        <?php if($this->field_domain != 'meta') { ?>
        <input type="hidden" name="<?php echo esc_attr($this->name); ?>" value="">
    <?php } ?>
        <div class="qodef-repeater-wrapper">
            <h4><?php echo esc_attr($this->label); ?></h4>
            <?php if($this->description != ''){ ?>
                <p><?php echo esc_attr($this->description); ?></p>
            <?php } ?>
            <div class="qodef-repeater-wrapper-inner" data-template="<?php echo str_replace('_', '-', $this->name); ?>">

                <?php if (! empty($clones) && is_array($clones) && count($clones) > 0) {
                    $counter = 0;
                    foreach($clones as $clone) {
                        ?>
                        <div class="qodef-repeater-fields-holder qodef-sort-parent clearfix" data-index="<?php echo esc_attr($counter); ?>">
                            <div class="qodef-repeater-sort">
                                <i class="fa fa-sort"></i>
                            </div>
                            <div class="qodef-repeater-fields">
                                <?php
                                foreach ($this->fields as $field) {

                                    $col_width_class = 'col-xs-12';
                                    if ( ! empty($field['col_width']) ) {
                                        $col_width_class = 'col-xs-'.$field['col_width'];
                                    }
                                    ?>
                                    <div class="qodef-repeater-field-row <?php echo esc_attr($col_width_class);?>">
                                        <div class="qodef-repeater-field-row-inner">
                                            <?php
                                            if($field['type'] == 'repeater'){ ?>
                                                <div class="qodef-repeater-inner-wrapper">
                                                    <div class="qodef-repeater-inner-wrapper-inner" data-template="<?php echo str_replace('_', '-', $field['name']); ?>">
                                                        <h4><?php echo esc_attr($field['label']); ?></h4>
                                                        <?php if($field['description'] != ''){ ?>
                                                            <p><?php echo esc_attr($field['description']); ?></p>
                                                        <?php } ?>
                                                        <?php if (!empty($clone[$field['name']]) && count($clone[$field['name']]) > 0) {
                                                            $counter2 = 0;

                                                            foreach($clone[$field['name']] as $clone_inner) {
                                                                ?>
                                                                <div class="qodef-repeater-inner-fields-holder qodef-sort-child qodef-second-level clearfix" data-index="<?php echo esc_attr($counter2); ?>">
                                                                    <div class="qodef-repeater-sort">
                                                                        <i class="fa fa-sort"></i>
                                                                    </div>
                                                                    <div class="qodef-repeater-inner-fields">
                                                                        <?php
                                                                        foreach ($field['fields'] as $field_inner) { ?>
                                                                            <div class="qodef-repeater-inner-field-row">
                                                                                <div class="qodef-repeater-inner-field-row-inner">
                                                                                    <?php

                                                                                    if (!isset($field_inner['options'])) {
                                                                                        $field_inner['options'] = array();
                                                                                    }
                                                                                    if (!isset($field_inner['args'])) {
                                                                                        $field_inner['args'] = array();
                                                                                    }
                                                                                    if (!isset($field_inner['hidden'])) {
                                                                                        $field_inner['hidden'] = false;
                                                                                    }
                                                                                    if (!isset($field_inner['label'])) {
                                                                                        $field_inner['label'] =  '';
                                                                                    }
                                                                                    if (!isset($field_inner['description'])) {
                                                                                        $field_inner['description'] = '';
                                                                                    }
                                                                                    if (!isset($field_inner['default_value'])) {
                                                                                        $field_inner['default_value'] = '';
                                                                                    }

                                                                                    if($clone_inner[$field_inner['name']] == '' && $field_inner['default_value'] != ''){
                                                                                        $repeater_inner_field_value = $field_inner['default_value'];
                                                                                    } else {
                                                                                        $repeater_inner_field_value = $clone_inner[$field_inner['name']];
                                                                                    }

                                                                                    $factory->render($field_inner['type'], $field_inner['name'], $field_inner['label'], $field_inner['description'], $field_inner['options'], $field_inner['args'], $field_inner['hidden'], array('name'=> $this->name . '['.$counter.']['.$field['name'].']', 'index' => $counter2, 'value' => $repeater_inner_field_value));
                                                                                    ?>
                                                                                </div>
                                                                            </div>
                                                                            <?php
                                                                        } ?>
                                                                    </div>
                                                                    <div class="qodef-repeater-inner-remove">
                                                                        <a class="qodef-clone-inner-remove" href="#"><i class="fa fa-times"></i></a>
                                                                    </div>
                                                                </div>
                                                                <?php $counter2++; } } ?>
                                                    </div>
                                                    <div class="qodef-repeater-inner-add">
                                                        <a class="qodef-inner-clone btn btn-sm btn-primary"
                                                           data-count="<?php echo esc_attr($this->num_of_rows) ?>"
                                                           href="#"><?php echo esc_html($this->button_text); ?></a>
                                                    </div>
                                                </div>
                                                <?php
                                            } else {
                                                if($clone[$field['name']] == '' && $field['default_value'] != ''){
                                                    $repeater_field_value = $field['default_value'];
                                                } else {
                                                    $repeater_field_value = $clone[$field['name']];
                                                }
                                                $factory->render($field['type'], $field['name'], $field['label'], $field['description'], $field['options'], $field['args'], $field['hidden'], array('name'=> $this->name, 'index' => $counter, 'value' => $repeater_field_value));
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <?php

                                } ?>
                            </div>
                            <div class="qodef-repeater-remove">
                                <a class="qodef-clone-remove" href="#"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <?php $counter++; } } ?>

                <script type="text/html" id="tmpl-qodef-repeater-template-<?php echo str_replace('_', '-', $this->name); ?>">
                    <div class="qodef-repeater-fields-holder qodef-sort-parent clearfix"  data-index="{{{ data.rowIndex }}}">
                        <div class="qodef-repeater-sort">
                            <i class="fa fa-sort"></i>
                        </div>
                        <div class="qodef-repeater-fields">
                            <?php
                            foreach ($this->fields as $field) {

                                $col_width_class = 'col-xs-12';
                                if ( ! empty($field['col_width']) ) {
                                    $col_width_class = 'col-xs-'.$field['col_width'];
                                }

                                ?>
                                <div class="qodef-repeater-field-row <?php echo esc_attr($col_width_class);?>">
                                    <div class="qodef-repeater-field-row-inner">
                                        <?php
                                        if($field['type'] == 'repeater') { ?>
                                            <div class="qodef-repeater-inner-wrapper">
                                                <div class="qodef-repeater-inner-wrapper-inner" data-template="<?php echo str_replace('_', '-', $field['name']); ?>">
                                                    <h4><?php echo esc_attr($field['label']); ?></h4>
                                                    <?php if($field['description'] != ''){ ?>
                                                        <p><?php echo esc_attr($field['description']); ?></p>
                                                    <?php } ?>
                                                </div>
                                                <div class="qodef-repeater-inner-add">
                                                    <a class="qodef-inner-clone btn btn-sm btn-primary"
                                                       data-count="<?php echo esc_attr($this->num_of_rows) ?>"
                                                       href="#"><?php echo esc_html($this->button_text); ?></a>
                                                </div>
                                            </div>
                                        <?php } else {

                                            $repeater_template_field_value = ($field['default_value'] != '') ? $field['default_value'] : '';
                                            $factory->render($field['type'], $field['name'], $field['label'], $field['description'], $field['options'], $field['args'], $field['hidden'], array('name' => $this->name, 'index' => '{{{ data.rowIndex }}}', 'value' => $repeater_template_field_value));
                                        }?>
                                    </div>
                                </div>
                                <?php

                            } ?>
                        </div>
                        <div class="qodef-repeater-remove">
                            <a class="qodef-clone-remove" href="#"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                </script>
                <?php $counter = 0;
                foreach ($this->fields as $field) {
                    if($field['type'] == 'repeater') {
                        ?>
                        <script type="text/html" id="tmpl-qodef-repeater-inner-template-<?php echo str_replace('_', '-', $field['name']); ?>">
                            <div class="qodef-repeater-inner-fields-holder qodef-sort-child qodef-second-level clearfix" data-index="{{{ data.rowInnerIndex }}}">
                                <div class="qodef-repeater-sort">
                                    <i class="fa fa-sort"></i>
                                </div>
                                <div class="qodef-repeater-inner-fields">
                                    <?php $counter2 = 0;
                                    foreach ($field['fields'] as $field_inner) {

                                        $col_width_inner_class = 'col-xs-12';
                                        if ( ! empty($field_inner['col_width']) ) {
                                            $col_width_inner_class = 'col-xs-' . $field_inner['col_width'];
                                        }
                                        ?>
                                        <div class="qodef-repeater-inner-field-row  <?php echo esc_attr($col_width_inner_class);?>">
                                            <div class="qodef-repeater-field-row-inner">
                                                <?php

                                                if (!isset($field_inner['options'])) {
                                                    $field_inner['options'] = array();
                                                }
                                                if (!isset($field_inner['args'])) {
                                                    $field_inner['args'] = array();
                                                }
                                                if (!isset($field_inner['hidden'])) {
                                                    $field_inner['hidden'] = false;
                                                }
                                                if (!isset($field_inner['label'])) {
                                                    $field_inner['label'] =  '';
                                                }
                                                if (!isset($field_inner['description'])) {
                                                    $field_inner['description'] = '';
                                                }
                                                if (!isset($field_inner['default_value'])) {
                                                    $field_inner['default_value'] = '';
                                                }
                                                $repeater_inner_template_field_value = ($field_inner['default_value'] != '') ? $field_inner['default_value'] : '';
                                                $factory->render($field_inner['type'], $field_inner['name'], $field_inner['label'], $field_inner['description'], $field_inner['options'], $field_inner['args'], $field_inner['hidden'], array('name'=> $this->name . '[{{{ data.rowIndex }}}]['.$field['name'].']', 'index' => '{{{ data.rowInnerIndex }}}', 'value' => $repeater_inner_template_field_value));

                                                ?>
                                            </div>
                                        </div>
                                        <?php
                                        $counter2++;	} ?>
                                </div>
                                <div class="qodef-repeater-inner-remove">
                                    <a class="qodef-clone-inner-remove" href="#"><i class="fa fa-times"></i></a>
                                </div>
                            </div>
                        </script>
                    <?php }
                } ?>
            </div>

            <div class="qodef-repeater-add">
                <a class="qodef-clone btn btn-sm btn-primary"
                   data-count="<?php echo esc_attr($this->num_of_rows) ?>"
                   href="#"><?php echo esc_html($this->button_text); ?></a>
            </div>
        </div>


        <?php

    }
}




class BridgeQodeTwitterFramework implements  iBridgeQodeRender {
    public function render($factory) {
        $twitterApi = QodeTwitterApi::getInstance();
        $message = '';

        if(!empty($_GET['oauth_token']) && !empty($_GET['oauth_verifier'])) {
            if(!empty($_GET['oauth_token'])) {
                update_option($twitterApi::AUTHORIZE_TOKEN_FIELD, $_GET['oauth_token']);
            }

            if(!empty($_GET['oauth_verifier'])) {
                update_option($twitterApi::AUTHORIZE_VERIFIER_FIELD, $_GET['oauth_verifier']);
            }

            $responseObj = $twitterApi->obtainAccessToken();
            if($responseObj->status) {
                $message = esc_html__('You have successfully connected with your Twitter account. If you have any issues fetching data from Twitter try reconnecting.', 'bridge');
            } else {
                $message = $responseObj->message;
            }
        }

        $buttonText = $twitterApi->hasUserConnected() ? esc_html__('Re-connect with Twitter', 'bridge') : esc_html__('Connect with Twitter', 'bridge');
        ?>
        <?php if($message !== '') { ?>
            <div class="alert alert-success" style="margin-top: 20px;">
                <span><?php echo esc_html($message); ?></span>
            </div>
        <?php } ?>
        <div class="qodef-page-form-section" id="qodef_enable_social_share_twitter">

            <div class="qodef-field-desc">
                <h4><?php esc_html_e('Connect with Twitter', 'bridge'); ?></h4>

                <p><?php esc_html_e('Connecting with Twitter will enable you to show your latest tweets on your site', 'bridge'); ?></p>
            </div>
            <!-- close div.qodef-field-desc -->

            <div class="qodef-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <a id="qodef-tw-request-token-btn" class="btn btn-primary" href="#"><?php echo esc_html($buttonText); ?></a>
                            <input type="hidden" data-name="current-page-url" value="<?php echo esc_url($twitterApi->buildCurrentPageURI()); ?>"/>
							<?php wp_nonce_field("bridge_qode_twitter_connect", "bridge_qode_twitter_connect") ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
    <?php }
}

class BridgeQodeInstagramFramework implements iBridgeQodeRender {


    public function render($factory) {
        $instagram_api = QodeInstagramApi::getInstance();
        $message = '';

        //check if code parameter and instagram parameter is set in URL
        if ( ! empty( $_GET['code'] ) && ! empty( $_GET['instagram'] ) ) {
            //update code option so we can use it later
            $instagram_api->setConnectionType( 'instagram' );
            $instagram_api->instagramStoreCode();
            $instagram_api->instagramExchangeCodeForToken();
            $message = esc_html__( 'You have successfully connected with your Instagram Personal account.', 'bridge' );
        }

        //check if code parameter and instagram parameter is set in URL
        if ( ! empty( $_GET['access_token'] ) && ! empty( $_GET['facebook'] ) ) {
            //update code option so we can use it later
            $instagram_api->setConnectionType( 'facebook' );
            $instagram_api->facebookStoreToken();
            $message = esc_html__( 'You have successfully connected with your Instagram Business account.', 'bridge' );
        }

        //check if code parameter and instagram parameter is set in URL
        if ( ! empty( $_GET['disconnect'] ) ) {
            //update code option so we can use it later
            $instagram_api->disconnect();
            $message = esc_html__( 'You have have been disconnected from all Instagram accounts.', 'bridge' );

        }

        ?>
        <?php if($message !== '') { ?>
            <div class="alert alert-success" style="margin-top: 20px;">
                <span><?php echo esc_html($message); ?></span>
            </div>
        <?php } ?>
        <div class="qodef-page-form-section" id="qode_enable_social_share">

            <div class="qodef-field-desc">
                <h4><?php esc_html_e('Connect with Instagram', 'bridge'); ?></h4>

                <p><?php esc_html_e('Connecting with Instagram will enable you to show your latest photos on your site', 'bridge'); ?></p>
            </div>
            <!-- close div.qodef-field-desc -->

            <div class="qodef-section-content">
                <div class="container-fluid">
                    <?php
                    $instagram_user_id = get_option($instagram_api::INSTAGRAM_USER_ID);
                    $connection_type   = get_option($instagram_api::CONNECTION_TYPE);

                    if ($instagram_user_id) { ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <p><?php echo esc_html__( 'You are currently connected to Instagram ID: ', 'bridge' ); echo esc_attr($instagram_user_id) ?></p>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="row">
                        <?php if ( ! empty( $_GET['disconnect'] ) ) { ?>
                            <div class="col-lg-4">
                                <a class="btn btn-primary" href="<?php echo esc_url( $instagram_api->reloadURL() ); ?>"><?php echo esc_html__( 'Reload Page', 'bridge' ); ?></a>
                            </div>
                        <?php } else if ( empty( $connection_type ) ) { ?>
                            <div class="col-lg-4">
                                <a class="btn btn-primary" href="<?php echo esc_url( $instagram_api->instagramRequestCode() ); ?>"><?php echo esc_html__( 'Connect with Instagram Personal account', 'bridge' ); ?></a>
                            </div>
                            <div class="col-lg-4">
                                <a class="btn btn-primary" href="<?php echo esc_url( $instagram_api->facebookRequestCode() ); ?>"><?php echo esc_html__( 'Connect with Instagram Business account', 'bridge' ); ?></a>
                            </div>
                        <?php } else { ?>
                            <div class="col-lg-4">
                                <a class="btn btn-primary" href="<?php echo esc_url( $instagram_api->disconnectURL() ); ?>"><?php echo esc_html__( 'Disconnect Instagram account', 'bridge' ) ?></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
    <?php }
}

/*
   Class: QodeImagesVideos
   A class that initializes Qode Images Videos
*/
class BridgeQodeOptionsFramework implements iBridgeQodeRender {
    private $label;
    private $description;


    function __construct($label="",$description="") {
        $this->label = $label;
        $this->description = $description;
    }

    public function render($factory) {
        global $post;
        ?>

        <div class="qodef-portfolio-additional-item-holder" style="display: none">
            <div class="qodef-portfolio-toggle-holder">
                <div class="qodef-portfolio-toggle qodef-toggle-desc">
                    <span class="number">1</span><span class="qodef-toggle-inner"><?php esc_html_e('Additional Sidebar Item ', 'bridge'); ?><em><?php esc_html_e('(Order Number, Item Title)', 'bridge'); ?></em></span>
                </div>
                <div class="qodef-portfolio-toggle qodef-portfolio-control">
                    <span class="toggle-portfolio-item"><i class="fa fa-caret-up"></i></span>
                    <a href="#" class="remove-portfolio-item"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <div class="qodef-portfolio-toggle-content">
                <div class="qodef-page-form-section">
                    <div class="qodef-section-content">
                        <div class="container-fluid">
                            <div class="row">

                                <div class="col-lg-2">
                                    <em class="qodef-field-description"><?php esc_html_e('Order Number', 'bridge'); ?></em>
                                    <input type="text" class="form-control qodef-input qodef-form-element" id="optionlabelordernumber_x" name="optionlabelordernumber_x">
                                </div>
                                <div class="col-lg-10">
                                    <em class="qodef-field-description"><?php esc_html_e('Item Title ', 'bridge'); ?></em>
                                    <input type="text" class="form-control qodef-input qodef-form-element" id="optionLabel_x" name="optionLabel_x">
                                </div>
                            </div>
                            <div class="row next-row">
                                <div class="col-lg-12">
                                    <em class="qodef-field-description"><?php esc_html_e('Item Text', 'bridge'); ?></em>
                                    <textarea class="form-control qodef-input qodef-form-element" id="optionValue_x" name="optionValue_x"></textarea>
                                </div>
                            </div>
                            <div class="row next-row">
                                <div class="col-lg-12">
                                    <em class="qodef-field-description"><?php esc_html_e('Enter Full URL for Item Text Link', 'bridge'); ?></em>
                                    <input type="text" class="form-control qodef-input qodef-form-element" id="optionUrl_x" name="optionUrl_x">
                                </div>
                            </div>
                        </div><!-- close div.qodef-section-content -->
                    </div><!-- close div.container-fluid -->
                </div>
            </div>
        </div>
        <?php
        $no = 1;
        $portfolios = get_post_meta( $post->ID, 'qode_portfolios', true );
        if (is_array($portfolios) && count($portfolios)>1) {
            usort($portfolios, "bridge_qode_compare_portfolio_options");
        }
        while (isset($portfolios[$no-1])) {
            $portfolio = $portfolios[$no-1];
            ?>
            <div class="qodef-portfolio-additional-item" rel="<?php echo esc_attr($no); ?>">
                <div class="qodef-portfolio-toggle-holder">
                    <div class="qodef-portfolio-toggle qodef-toggle-desc">
                        <span class="number"><?php echo esc_attr($no); ?></span><span class="qodef-toggle-inner"><?php esc_html_e('Additional Sidebar Item - ', 'bridge'); ?><em>(<?php echo stripslashes($portfolio['optionlabelordernumber']); ?>, <?php echo stripslashes($portfolio['optionLabel']); ?>)</em></span>
                    </div>
                    <div class="qodef-portfolio-toggle qodef-portfolio-control">
                        <span class="toggle-portfolio-item"><i class="fa fa-caret-down"></i></span>
                        <a href="#" class="remove-portfolio-item"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="qodef-portfolio-toggle-content" style="display: none">
                    <div class="qodef-page-form-section">
                        <div class="qodef-section-content">
                            <div class="container-fluid">
                                <div class="row">

                                    <div class="col-lg-2">
                                        <em class="qodef-field-description"><?php esc_html_e('Order Number', 'bridge'); ?></em>
                                        <input type="text" class="form-control qodef-input qodef-form-element" id="optionlabelordernumber_<?php echo esc_attr($no); ?>" name="optionlabelordernumber[]" value="<?php echo isset($portfolio['optionlabelordernumber'])?stripslashes($portfolio['optionlabelordernumber']):""; ?>">
                                    </div>
                                    <div class="col-lg-10">
                                        <em class="qodef-field-description"><?php esc_html_e('Item Title ', 'bridge'); ?></em>
                                        <input type="text" class="form-control qodef-input qodef-form-element" id="optionLabel_<?php echo esc_attr($no); ?>" name="optionLabel[]" value="<?php echo stripslashes($portfolio['optionLabel']); ?>">
                                    </div>
                                </div>
                                <div class="row next-row">
                                    <div class="col-lg-12">
                                        <em class="qodef-field-description"><?php esc_html_e('Item Text', 'bridge'); ?></em>
                                        <textarea class="form-control qodef-input qodef-form-element" id="optionValue_<?php echo esc_attr($no); ?>" name="optionValue[]"><?php echo stripslashes($portfolio['optionValue']); ?></textarea>
                                    </div>
                                </div>
                                <div class="row next-row">
                                    <div class="col-lg-12">
                                        <em class="qodef-field-description"><?php esc_html_e('Enter Full URL for Item Text Link', 'bridge'); ?></em>
                                        <input type="text" class="form-control qodef-input qodef-form-element" id="optionUrl_<?php echo esc_attr($no); ?>" name="optionUrl[]" value="<?php echo stripslashes($portfolio['optionUrl']); ?>">
                                    </div>
                                </div>
                            </div><!-- close div.qodef-section-content -->
                        </div><!-- close div.container-fluid -->
                    </div>
                </div>
            </div>
            <?php
            $no++;
        }
        ?>

        <div class="qodef-portfolio-add">
            <a class="qodef-add-item btn btn-sm btn-primary" href="#"><?php esc_html_e('Add New Item', 'bridge'); ?></a>


            <a class="qodef-toggle-all-item btn btn-sm btn-default pull-right" href="#"><?php esc_html_e('Expand All', 'bridge'); ?></a>
            <?php /* <a class="qodef-remove-last-item-row btn btn-sm btn-default pull-right" href="#"> Remove Last Row</a> */ ?>
        </div>




        <?php

    }
}


class BridgeQodeImportExport implements iBridgeQodeRender {

    private $title;
    private $name;


    function __construct($title_import_export="",$name="") {
        $this->title = $title_import_export;
        $this->name = $name;
    }

    public function render($factory) { ?>
        <div id="qode-metaboxes-general" class="wrap qodef-page qodef-page-info">
            <div class="qodef-page-form">
                <div class="qodef-page-form-section-holder clearfix">
                    <h3 class="qodef-page-section-title"><?php echo esc_attr($this->title); ?></h3>
                    <div class="qodef-page-form-section">
                        <div class="qodef-field-desc">
                            <h4><?php esc_html_e('Export', 'bridge'); ?></h4>
                            <p><?php esc_html_e('Copy the code from this field and save it to a textual file to export your options. Save that textual file somewhere so you can later use it to import options if necessary.', 'bridge'); ?></p>
                        </div>
                        <div class="qodef-section-content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <textarea name="export_theme_options" id="export_options" class="form-control qodef-form-element" rows="10" readonly><?php echo bridge_core_export_theme_options(); ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="qodef-page-form-section" >
                        <div class="qodef-field-desc">
                            <h4><?php esc_html_e('Import', 'bridge'); ?></h4>
                            <p><?php esc_html_e('To import options, just paste the code you previously saved from the "Export" field into this field, and then click the "Import" button.', 'bridge'); ?></p>
                        </div>

                        <div class="qodef-section-content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <textarea name="import_theme_options" id="import_theme_options" class="form-control qodef-form-element" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="qodef-page-form-section" >
                        <div class="qodef-section-content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button type="button" class="btn btn-primary btn-sm " name="import" id="qodef-import-theme-options-btn" data-waiting-message="<?php esc_html_e('Please wait', 'bridge'); ?>" data-confirm-message="<?php esc_html_e('Are you sure, you want to import Options now?', 'bridge'); ?>"><?php esc_html_e('Import', 'bridge'); ?></button>
                                        <?php wp_nonce_field('qodef_import_theme_options_secret_value', 'qodef_import_theme_options_secret', false); ?>
                                        <span class="qodef-bckp-message"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="qodef-page-form-section">
                        <div class="qodef-section-content">
                            <div class="alert alert-warning">
                                <strong><?php esc_html_e('Important notes:', 'bridge') ?></strong>
                                <ul>
                                    <li><?php esc_html_e('Please note that import process will overide all your existing options.', 'bridge'); ?></li>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    <?php }
}