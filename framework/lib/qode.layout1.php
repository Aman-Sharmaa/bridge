<?php

/*
   Interface: iLayoutNode
   A interface that implements Layout Node methods
*/
interface iBridgeQodeLayoutNode
{
    public function hasChidren();
    public function getChild($key);
    public function addChild($key, $value);
}

/*
   Interface: iRender
   A interface that implements Render methods
*/
interface iBridgeQodeRender
{
    public function render($factory);
}

/*
   Class: QodePanel
   A class that initializes Qode Panel
*/
class BridgeQodePanel implements iBridgeQodeLayoutNode, iBridgeQodeRender {

    public $children;
    public $title;
    public $name;
    public $hidden_property;
    public $hidden_value;

    function __construct($title_panel="",$name="",$hidden_property="",$hidden_value="") {
        $this->children = array();
        $this->title = $title_panel;
        $this->name = $name;
        $this->hidden_property = $hidden_property;
        $this->hidden_value = $hidden_value;
    }

    public function hasChidren() {
        return (count($this->children) > 0)?true:false;
    }

    public function getChild($key) {
        return $this->children[$key];
    }

    public function addChild($key, $value) {
        $this->children[$key] = $value;
    }

    public function render($factory) {
        $hidden = false;
        if (!empty($this->hidden_property)){
            if (bridge_qode_option_get_value($this->hidden_property)==$this->hidden_value)
                $hidden = true;
        }
        ?>
        <div class="qodef-page-form-section-holder" id="qodef_<?php echo esc_attr($this->name); ?>"<?php if ($hidden) { ?> style="display: none"<?php } ?>>
            <h3 class="qodef-page-section-title"><?php echo esc_attr($this->title); ?></h3>
            <?php
            foreach ($this->children as $child) {
                $this->renderChild($child, $factory);
            }
            ?>
        </div>
        <?php
    }

    public function renderChild(iBridgeQodeRender $child, $factory) {
        $child->render($factory);
    }
}

/*
   Class: QodeContainer
   A class that initializes Qode Container
*/
class BridgeQodeContainer implements iBridgeQodeLayoutNode, iBridgeQodeRender {

    public $children;
    public $name;
    public $hidden_property;
    public $hidden_value;
    public $hidden_values;

    function __construct($name="",$hidden_property="",$hidden_value="",$hidden_values=array()) {
        $this->children = array();
        $this->name = $name;
        $this->hidden_property = $hidden_property;
        $this->hidden_value = $hidden_value;
        $this->hidden_values = $hidden_values;
    }

    public function hasChidren() {
        return (count($this->children) > 0)?true:false;
    }

    public function getChild($key) {
        return $this->children[$key];
    }

    public function addChild($key, $value) {
        $this->children[$key] = $value;
    }

    public function render($factory) {
        $hidden = false;
        if (!empty($this->hidden_property)){
            if (bridge_qode_option_get_value($this->hidden_property)==$this->hidden_value)
                $hidden = true;
            else {
                foreach ($this->hidden_values as $value) {
                    if (bridge_qode_option_get_value($this->hidden_property)==$value)
                        $hidden = true;

                }
            }
        }
        ?>
        <div class="qodef-page-form-container-holder" id="qodef_<?php echo esc_attr($this->name); ?>"<?php if ($hidden) { ?> style="display: none"<?php } ?>>
            <?php
            foreach ($this->children as $child) {
                $this->renderChild($child, $factory);
            }
            ?>
        </div>
        <?php
    }

    public function renderChild(iBridgeQodeRender $child, $factory) {
        $child->render($factory);
    }
}

/*
   Class: QodeContainerNoStyle
   A class that initializes Qode Container without css classes
*/
class BridgeQodeContainerNoStyle implements iBridgeQodeLayoutNode, iBridgeQodeRender {

    public $children;
    public $name;
    public $hidden_property;
    public $hidden_value;
    public $hidden_values;

    function __construct($name="",$hidden_property="",$hidden_value="",$hidden_values=array()) {
        $this->children = array();
        $this->name = $name;
        $this->hidden_property = $hidden_property;
        $this->hidden_value = $hidden_value;
        $this->hidden_values = $hidden_values;
    }

    public function hasChidren() {
        return (count($this->children) > 0)?true:false;
    }

    public function getChild($key) {
        return $this->children[$key];
    }

    public function addChild($key, $value) {
        $this->children[$key] = $value;
    }

    public function render($factory) {
        $hidden = false;
        if (!empty($this->hidden_property)){
            if (bridge_qode_option_get_value($this->hidden_property)==$this->hidden_value)
                $hidden = true;
            else {
                foreach ($this->hidden_values as $value) {
                    if (bridge_qode_option_get_value($this->hidden_property)==$value)
                        $hidden = true;

                }
            }
        }
        ?>
        <div id="qodef_<?php echo esc_attr($this->name); ?>"<?php if ($hidden) { ?> style="display: none"<?php } ?>>
            <?php
            foreach ($this->children as $child) {
                $this->renderChild($child, $factory);
            }
            ?>
        </div>
        <?php
    }

    public function renderChild(iBridgeQodeRender $child, $factory) {
        $child->render($factory);
    }
}

/*
   Class: QodeGroup
   A class that initializes Qode Group
*/
class BridgeQodeGroup implements iBridgeQodeLayoutNode, iBridgeQodeRender {

    public $children;
    public $title;
    public $description;

    function __construct($title_group="",$description="") {
        $this->children = array();
        $this->title = $title_group;
        $this->description = $description;
    }

    public function hasChidren() {
        return (count($this->children) > 0)?true:false;
    }

    public function getChild($key) {
        return $this->children[$key];
    }

    public function addChild($key, $value) {
        $this->children[$key] = $value;
    }

    public function render($factory) {
        ?>

        <div class="qodef-page-form-section">


            <div class="qodef-field-desc">
                <h4><?php echo esc_attr($this->title); ?></h4>

                <p><?php echo esc_attr($this->description); ?></p>
            </div>
            <!-- close div.qodef-field-desc -->

            <div class="qodef-section-content">
                <div class="container-fluid">
                    <?php
                    foreach ($this->children as $child) {
                        $this->renderChild($child, $factory);
                    }
                    ?>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
        <?php
    }

    public function renderChild(iBridgeQodeRender $child, $factory) {
        $child->render($factory);
    }
}

/*
   Class: QodeNotice
   A class that initializes Qode Notice
*/
class BridgeQodeNotice implements iBridgeQodeRender {

    public $children;
    public $title;
    public $description;
    public $notice;
    public $hidden_property;
    public $hidden_value;
    public $hidden_values;

    function __construct($title_notice="",$description="",$notice="",$hidden_property="",$hidden_value="",$hidden_values=array()) {
        $this->children = array();
        $this->title = $title_notice;
        $this->description = $description;
        $this->notice = $notice;
        $this->hidden_property = $hidden_property;
        $this->hidden_value = $hidden_value;
        $this->hidden_values = $hidden_values;
    }

    public function render($factory) {
        $hidden = false;
        if (!empty($this->hidden_property)){
            if (bridge_qode_option_get_value($this->hidden_property)==$this->hidden_value)
                $hidden = true;
            else {
                foreach ($this->hidden_values as $value) {
                    if (bridge_qode_option_get_value($this->hidden_property)==$value)
                        $hidden = true;

                }
            }
        }
        ?>

        <div class="qodef-page-form-section"<?php if ($hidden) { ?> style="display: none"<?php } ?>>


            <div class="qodef-field-desc">
                <h4><?php echo esc_attr($this->title); ?></h4>

                <p><?php echo esc_attr($this->description); ?></p>
            </div>
            <!-- close div.qodef-field-desc -->

            <div class="qodef-section-content">
                <div class="container-fluid">
                    <div class="alert alert-warning">
                        <?php echo esc_attr($this->notice); ?>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
        <?php
    }
}

/*
   Class: QodeRow
   A class that initializes Qode Row
*/
class BridgeQodeRow implements iBridgeQodeLayoutNode, iBridgeQodeRender {

    public $children;
    public $next;

    function __construct($next=false) {
        $this->children = array();
        $this->next = $next;
    }

    public function hasChidren() {
        return (count($this->children) > 0)?true:false;
    }

    public function getChild($key) {
        return $this->children[$key];
    }

    public function addChild($key, $value) {
        $this->children[$key] = $value;
    }

    public function render($factory) {
        ?>
        <div class="row<?php if ($this->next) echo " next-row"; ?>">
            <?php
            foreach ($this->children as $child) {
                $this->renderChild($child, $factory);
            }
            ?>
        </div>
        <?php
    }

    public function renderChild(iBridgeQodeRender $child, $factory) {
        $child->render($factory);
    }
}

/*
   Class: QodeTitle
   A class that initializes Qode Title
*/
class BridgeQodeTitle implements iBridgeQodeRender {
    private $name;
    private $title;
    public $hidden_property;
    public $hidden_values = array();

    function __construct($name="",$title_class="",$hidden_property="",$hidden_value="") {
        $this->title = $title_class;
        $this->name = $name;
        $this->hidden_property = $hidden_property;
        $this->hidden_value = $hidden_value;
    }

    public function render($factory) {
        $hidden = false;
        if (!empty($this->hidden_property)){
            if (bridge_qode_option_get_value($this->hidden_property)==$this->hidden_value)
                $hidden = true;
        }
        ?>
        <h5 class="qodef-page-section-subtitle" id="qodef_<?php echo esc_attr($this->name); ?>"<?php if ($hidden) { ?> style="display: none"<?php } ?>><?php echo esc_html($this->title); ?></h5>
        <?php
    }
}

/*
   Class: QodeField
   A class that initializes Qode Field
*/
class BridgeQodeField implements iBridgeQodeRender {
    private $type;
    private $name;
    private $default_value;
    private $label;
    private $description;
    private $options = array();
    private $args = array();
    public $hidden_property;
    public $hidden_values = array();


    function __construct($type,$name,$default_value="",$label="",$description="", $options = array(), $args = array(),$hidden_property="", $hidden_values = array()) {
        global $bridge_qode_framework;
        $this->type = $type;
        $this->name = $name;
        $this->default_value = $default_value;
        $this->label = $label;
        $this->description = $description;
        $this->options = $options;
        $this->args = $args;
        $this->hidden_property = $hidden_property;
        $this->hidden_values = $hidden_values;
        $bridge_qode_framework->qodeOptions->addOption($this->name,$this->default_value, $type);
    }

    public function render($factory) {
        $hidden = false;
        if (!empty($this->hidden_property)){
            foreach ($this->hidden_values as $value) {
                if (bridge_qode_option_get_value($this->hidden_property)==$value)
                    $hidden = true;

            }
        }
        $factory->render( $this->type, $this->name, $this->label, $this->description, $this->options, $this->args, $hidden );
    }
}

/*
   Class: QodeMetaField
   A class that initializes Qode Meta Field
*/
class BridgeQodeMetaField implements iBridgeQodeRender {
    private $type;
    private $name;
    private $default_value;
    private $label;
    private $description;
    private $options = array();
    private $args = array();
    public $hidden_property;
    public $hidden_values = array();


    function __construct($type,$name,$default_value="",$label="",$description="", $options = array(), $args = array(),$hidden_property="", $hidden_values = array()) {
        global $bridge_qode_framework;
        $this->type = $type;
        $this->name = $name;
        $this->default_value = $default_value;
        $this->label = $label;
        $this->description = $description;
        $this->options = $options;
        $this->args = $args;
        $this->hidden_property = $hidden_property;
        $this->hidden_values = $hidden_values;
        $bridge_qode_framework->qodeMetaBoxes->addOption($this->name,$this->default_value, $type);
    }

    public function render($factory) {
        $hidden = false;
        if (!empty($this->hidden_property)){
            foreach ($this->hidden_values as $value) {
                if (bridge_qode_option_get_value($this->hidden_property)==$value)
                    $hidden = true;

            }
        }
        $factory->render( $this->type, $this->name, $this->label, $this->description, $this->options, $this->args, $hidden );
    }
}

abstract class BridgeQodeFieldType {

    abstract public function render( $name, $label="",$description="", $options = array(), $args = array(), $hidden = false );

}

class BridgeQodeFieldText extends BridgeQodeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false, $repeat = array() ) {
        $col_width = 12;
        $class = '';
        $data_string = '';

        if (!empty($repeat) && array_key_exists('name', $repeat) && array_key_exists('index', $repeat)) {
            $id		= $name . '-' . $repeat['index'];
            $name	= $repeat['name'] . '['.$repeat['index'].']['. $name .']';
            $value	= $repeat['value'];
        } else {
            $id = $name;
            $value = bridge_qode_option_get_value($name);
        }

        if(isset($args["col_width"])) {
            $col_width = $args["col_width"];
        }

        if($label === '' && $description === '') {
            $class .= ' qodef-no-description';
        }

        if(isset($args['custom_class']) && $args['custom_class'] != '') {
            $class .= ' '  . $args['custom_class'];
        }

        if(isset($args['input-data']) && $args['input-data'] != '') {
            foreach($args['input-data'] as $data_key => $data_value) {
                $data_string .= $data_key . '=' . $data_value;
                $data_string .= ' ';
            }
        }

        ?>

        <div class="qodef-page-form-section <?php echo esc_attr($class); ?>" id="qodef_<?php echo esc_attr($id); ?>"<?php if ($hidden) { ?> style="display: none"<?php } ?>>


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
                                <?php echo esc_attr($data_string); ?>
                                   class="form-control qodef-input qodef-form-element"
                                   name="<?php echo esc_attr($name); ?>" value="<?php echo htmlspecialchars($value); ?>"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
        <?php

    }

}

class BridgeQodeFieldTextSimple extends BridgeQodeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false, $repeat = array() ) {


        if (!empty($repeat) && array_key_exists('name', $repeat) && array_key_exists('index', $repeat)) {
            $id		= $name . '-' . $repeat['index'];
            $name	= $repeat['name'] . '['.$repeat['index'].']['. $name .']';
            $value	= $repeat['value'];
        } else {
            $id = $name;
            $value = bridge_qode_option_get_value($name);
        }

        ?>


        <div class="col-lg-3" id="qodef_<?php echo esc_attr($id); ?>"<?php if ($hidden) { ?> style="display: none"<?php } ?>>
            <em class="qodef-field-description"><?php echo esc_attr($label); ?></em>
            <input type="text"
                   class="form-control qodef-input qodef-form-element"
                   name="<?php echo esc_attr($name); ?>" value="<?php echo htmlspecialchars($value); ?>"/></div>
        <?php

    }

}

class BridgeQodeFieldTextArea extends BridgeQodeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false, $repeat = array() ) {

        if (!empty($repeat) && array_key_exists('name', $repeat) && array_key_exists('index', $repeat)) {
            $name	= $repeat['name'] . '['.$repeat['index'].']['. $name .']';
            $value	= $repeat['value'];
        } else {
            $value = bridge_qode_option_get_value($name);
        }

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
							<textarea class="form-control qodef-form-element"
                                      name="<?php echo esc_attr($name); ?>"
                                      rows="5"><?php echo htmlspecialchars($value); ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
        <?php

    }

}

class BridgeQodeFieldTextAreaSimple extends BridgeQodeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false, $repeat = array() ) {

        if (!empty($repeat) && array_key_exists('name', $repeat) && array_key_exists('index', $repeat)) {
            $name	= $repeat['name'] . '['.$repeat['index'].']['. $name .']';
            $value	= $repeat['value'];
        } else {
            $value = bridge_qode_option_get_value($name);
        }

        ?>

        <div class="col-lg-3">
            <em class="qodef-field-description"><?php echo esc_html($label); ?></em>
            <textarea class="form-control qodef-form-element"
                      name="<?php echo esc_attr($name); ?>"
                      rows="5"><?php echo esc_attr($value); ?></textarea>
        </div>
        <?php

    }

}

class BridgeQodeFieldTextAreaHtml extends BridgeQodeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false, $repeat = array() ) {

        if (!empty($repeat) && array_key_exists('name', $repeat) && array_key_exists('index', $repeat)) {
            $id		= $name . '-' . $repeat['index'];

            //if textareahtml already exists it will have index as number, if created in repeater it will be a string because of the tinymce rules
            if (is_int($repeat['index'])) {
                $field_id	= $repeat['name'] . '_textarea_index_'.$repeat['index'].'_'. $name;
            } else {
                $field_id	= $repeat['name'] . '_textarea_index_'. $name;
            }
            $name	= $repeat['name'] . '['.$repeat['index'].']['. $name .']';
            $value	= $repeat['value'];
        } else {
            $id = $field_id = $name;
            $value = bridge_qode_option_get_value($name);
        }

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
                            <?php wp_editor( $value, $field_id, array('textarea_name' => $name, 'height' => '200'));?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>

        <?php

    }

}

class BridgeQodeFieldColor extends BridgeQodeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false, $repeat = array() ) {
        global $bridge_qode_options;

        if (!empty($repeat) && array_key_exists('name', $repeat) && array_key_exists('index', $repeat)) {
            $name	= $repeat['name'] . '['.$repeat['index'].']['. $name .']';
            $value	= $repeat['value'];
        } else {
            $value = bridge_qode_option_get_value($name);
        }

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
                            <input type="text" name="<?php echo esc_attr($name); ?>" value="<?php echo esc_attr($value); ?>" class="my-color-field"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
        <?php

    }

}

class BridgeQodeFieldColorSimple extends BridgeQodeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false, $repeat = array() ) {
        global $bridge_qode_options;

        if (!empty($repeat) && array_key_exists('name', $repeat) && array_key_exists('index', $repeat)) {
            $id		= $name . '-' . $repeat['index'];
            $name	= $repeat['name'] . '['.$repeat['index'].']['. $name .']';
            $value	= $repeat['value'];
        } else {
            $id		= $name;
            $value	= bridge_qode_option_get_value($name);
        }

        ?>

        <div class="col-lg-3" id="qodef_<?php echo esc_attr($id); ?>"<?php if ($hidden) { ?> style="display: none"<?php } ?>>
            <em class="qodef-field-description"><?php echo esc_attr($label); ?></em>
            <input type="text" name="<?php echo esc_attr($name); ?>" value="<?php echo esc_attr($value); ?>" class="my-color-field"/>
        </div>
        <?php

    }

}

class BridgeQodeFieldImage extends BridgeQodeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false, $repeat = array() ) {
        global $bridge_qode_options;

        if (!empty($repeat) && array_key_exists('name', $repeat) && array_key_exists('index', $repeat)) {
            $id		= $name . '-' . $repeat['index'];
            $name	= $repeat['name'] . '['.$repeat['index'].']['. $name .']';
            $value	= $repeat['value'];
        } else {
            $id		= $name;
            $value	= bridge_qode_option_get_value($name);
        }

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
                            <div class="qodef-media-uploader">
                                <div<?php if (!$value) { ?> style="display: none"<?php } ?>
                                    class="qodef-media-image-holder">
                                    <img src="<?php if ($value) { echo bridge_qode_get_attachment_thumb_url($value); } ?>" alt="<?php esc_attr_e( 'Image thumbnail', 'bridge' ); ?>"
                                         class="qodef-media-image img-thumbnail"/>
                                </div>
                                <div style="display: none"
                                     class="qodef-media-meta-fields">
                                    <input type="hidden" class="qodef-media-upload-url"
                                           name="<?php echo esc_attr($name); ?>"
                                           value="<?php echo esc_attr($value); ?>"/>
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
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
        <?php

    }

}

class BridgeQodeFieldFile extends BridgeQodeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false, $repeat = array() ) {

        if (!empty($repeat) && array_key_exists('name', $repeat) && array_key_exists('index', $repeat)) {
            $id		= $name . '-' . $repeat['index'];
            $name	= $repeat['name'] . '['.$repeat['index'].']['. $name .']';
            $value	= $repeat['value'];
            $has_value = empty($value) ? false : true;
        } else {
            $id		= $name;
            $value	= bridge_qode_option_get_value($name);
            $has_value = bridge_qode_option_has_value($name);
        }
        ?>

        <div class="qodef-page-form-section">


            <div class="qodef-field-desc">
                <h4><?php echo esc_html($label); ?></h4>

                <p><?php echo esc_html($description); ?></p>
            </div>
            <!-- close div.qodef-field-desc -->

            <div class="qodef-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="qodef-media-uploader">
                                <div<?php if (!$has_value) { ?> style="display: none"<?php } ?>
                                    class="qodef-media-image-holder">
                                    <img src="<?php if ($has_value) { echo esc_url(bridge_qode_option_get_uploaded_file_type($value)); } ?>" alt="<?php esc_attr_e( 'Image thumbnail', 'bridge' ); ?>"
                                         class="qodef-media-image img-thumbnail"/>
                                    <h4 class="qodef-media-title"><?php echo bridge_qode_option_get_uploaded_file_title($value) ?></h4>
                                </div>
                                <div style="display: none"
                                     class="qodef-media-meta-fields">
                                    <input type="hidden" class="qodef-media-upload-url"
                                           name="<?php echo esc_attr($name); ?>"
                                           value="<?php echo esc_attr($value); ?>"/>
                                </div>
                                <a class="qodef-media-upload-btn btn btn-sm btn-primary"
                                   href="javascript:void(0)"
                                   data-frame-title="<?php esc_html_e('Select File', 'bridge'); ?>"
                                   data-frame-button-text="<?php esc_html_e('Select File', 'bridge'); ?>"><?php esc_html_e('Upload', 'bridge'); ?></a>
                                <a style="display: none;" href="javascript: void(0)"
                                   class="qodef-media-remove-btn btn btn-default btn-sm"><?php esc_html_e('Remove', 'bridge'); ?></a>
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

class BridgeQodeFieldFileSimple extends BridgeQodeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false, $repeat = array() ) {

        if (!empty($repeat) && array_key_exists('name', $repeat) && array_key_exists('index', $repeat)) {
            $id		= $name . '-' . $repeat['index'];
            $name	= $repeat['name'] . '['.$repeat['index'].']['. $name .']';
            $value	= $repeat['value'];
            $has_value = empty($value) ? false : true;
        } else {
            $id		= $name;
            $value	= bridge_qode_option_get_value($name);
            $has_value = bridge_qode_option_has_value($name);
        }
        ?>

        <div class="col-lg-3">
            <em class="qodef-field-description"><?php echo esc_attr($label); ?></em>
            <div class="qodef-media-uploader">
                <div<?php if (!$has_value) { ?> style="display: none"<?php } ?>
                    class="qodef-media-image-holder">
                    <img src="<?php if ($has_value) { echo esc_url(bridge_qode_option_get_uploaded_file_type($value)); } ?>" alt="<?php esc_attr_e( 'Image thumbnail', 'bridge' ); ?>"
                         class="qodef-media-image img-thumbnail"/>
                    <h4 class="qodef-media-title"><?php echo bridge_qode_option_get_uploaded_file_title($value) ?></h4>
                </div>
                <div style="display: none"
                     class="qodef-media-meta-fields">
                    <input type="hidden" class="qodef-media-upload-url"
                           name="<?php echo esc_attr($name); ?>"
                           value="<?php echo esc_attr($value); ?>"/>
                </div>
                <a class="qodef-media-upload-btn btn btn-sm btn-primary"
                   href="javascript:void(0)"
                   data-frame-title="<?php esc_html_e('Select File', 'bridge'); ?>"
                   data-frame-button-text="<?php esc_html_e('Select File', 'bridge'); ?>"><?php esc_html_e('Upload', 'bridge'); ?></a>
                <a style="display: none;" href="javascript: void(0)"
                   class="qodef-media-remove-btn btn btn-default btn-sm"><?php esc_html_e('Remove', 'bridge'); ?></a>
            </div>
        </div>

        <?php

    }

}

class BridgeQodeFieldFont extends BridgeQodeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false, $repeat = array() ) {
        global $bridge_qode_options;
        global $bridge_qode_font_arrays;

        if (!empty($repeat) && array_key_exists('name', $repeat) && array_key_exists('index', $repeat)) {
            $name	= $repeat['name'] . '['.$repeat['index'].']['. $name .']';
            $value	= $repeat['value'];
        } else {
            $value	= bridge_qode_option_get_value($name);
        }

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
                        <div class="col-lg-3">
                            <select class="form-control qodef-form-element"
                                    name="<?php echo esc_attr($name); ?>">
                                <option value="-1"><?php esc_html_e('Default', 'bridge'); ?></option>
                                <?php foreach($bridge_qode_font_arrays as $fontArray) { ?>
                                    <option <?php if ($value == str_replace(' ', '+', $fontArray["family"])) { echo "selected='selected'"; } ?>  value="<?php echo str_replace(' ', '+', $fontArray["family"]); ?>"><?php echo esc_attr($fontArray["family"]); ?></option>
                                <?php } ?>
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

class BridgeQodeFieldFontSimple extends BridgeQodeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
        global $bridge_qode_options;
        global $bridge_qode_font_arrays;
        ?>


        <div class="col-lg-3">
            <em class="qodef-field-description"><?php echo esc_attr($label); ?></em>
            <select class="form-control qodef-form-element"
                    name="<?php echo esc_attr($name); ?>">
                <option value="-1"><?php esc_html_e('Default', 'bridge'); ?></option>
                <?php foreach($bridge_qode_font_arrays as $fontArray) { ?>
                    <option <?php if (bridge_qode_option_get_value($name) == str_replace(' ', '+', $fontArray["family"])) { echo "selected='selected'"; } ?> value="<?php echo str_replace(' ', '+', $fontArray["family"]); ?>"><?php echo esc_attr($fontArray["family"]); ?></option>
                <?php } ?>
            </select>
        </div>
        <?php

    }

}

class BridgeQodeFieldSelect extends BridgeQodeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false, $repeat = array() ) {
        global $bridge_qode_options;


        if (!empty($repeat) && array_key_exists('name', $repeat) && array_key_exists('index', $repeat)) {
            $id		= $name . '-' . $repeat['index'];
            $name	= $repeat['name'] . '['.$repeat['index'].']['. $name .']';
            $field_value	= $repeat['value'];
        } else {
            $id = $name;
            $field_value = bridge_qode_option_get_value($name);
        }


        $dependence = false;
        if(isset($args["dependence"]))
            $dependence = true;
        $show = array();
        if(isset($args["show"]))
            $show = $args["show"];
        $hide = array();
        if(isset($args["hide"]))
            $hide = $args["hide"];
        ?>

        <div class="qodef-page-form-section"<?php if ($hidden) { ?> style="display: none"<?php } ?>>


            <div class="qodef-field-desc">
                <h4><?php echo esc_attr($label); ?></h4>

                <p><?php echo esc_attr($description); ?></p>
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
                                <?php foreach($options as $key=>$value) { if ($key == "-1") $key = ""; ?>
                                    <option <?php if ($field_value == $key) { echo "selected='selected'"; } ?>  value="<?php echo esc_attr($key); ?>"><?php echo esc_attr($value); ?></option>
                                <?php } ?>
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

class BridgeQodeFieldSelectBlank extends BridgeQodeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false, $repeat = array() ) {
        global $bridge_qode_options;


        if (!empty($repeat) && array_key_exists('name', $repeat) && array_key_exists('index', $repeat)) {
            $name	= $repeat['name'] . '['.$repeat['index'].']['. $name .']';
            $field_value	= $repeat['value'];
        } else {
            $field_value = bridge_qode_option_get_value($name);
        }

        $dependence = false;
        if(isset($args["dependence"]))
            $dependence = true;
        $show = array();
        if(isset($args["show"]))
            $show = $args["show"];
        $hide = array();
        if(isset($args["hide"]))
            $hide = $args["hide"];
        ?>

        <div class="qodef-page-form-section"<?php if ($hidden) { ?> style="display: none"<?php } ?>>


            <div class="qodef-field-desc">
                <h4><?php echo esc_attr($label); ?></h4>

                <p><?php echo esc_attr($description); ?></p>
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
                                <option <?php if (bridge_qode_option_get_value($name) == "") { echo "selected='selected'"; } ?> value=""></option>
                                <?php foreach($options as $key=>$value) { if ($key == "-1") $key = ""; ?>
                                    <option <?php if ($field_value == $key) { echo "selected='selected'"; } ?>  value="<?php echo esc_attr($key); ?>"><?php echo esc_attr($value); ?></option>
                                <?php } ?>
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

class BridgeQodeFieldSelectSimple extends BridgeQodeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false, $repeat = array() ) {
        global $bridge_qode_options;

        if (!empty($repeat) && array_key_exists('name', $repeat) && array_key_exists('index', $repeat)) {
            $name	= $repeat['name'] . '['.$repeat['index'].']['. $name .']';
            $field_value	= $repeat['value'];
        } else {
            $field_value = bridge_qode_option_get_value($name);
        }

        $dependence = false;
        if(isset($args["dependence"]))
            $dependence = true;
        $show = array();
        if(isset($args["show"]))
            $show = $args["show"];
        $hide = array();
        if(isset($args["hide"]))
            $hide = $args["hide"];

        ?>


        <div class="col-lg-3">
            <em class="qodef-field-description"><?php echo esc_attr($label); ?></em>
            <select class="form-control qodef-form-element<?php if ($dependence) { echo " dependence"; } ?>"
                <?php foreach($show as $key=>$value) { ?>
                    data-show-<?php echo str_replace(' ', '',$key); ?>="<?php echo esc_attr($value); ?>"
                <?php } ?>
                <?php foreach($hide as $key=>$value) { ?>
                    data-hide-<?php echo str_replace(' ', '',$key); ?>="<?php echo esc_attr($value); ?>"
                <?php } ?>
                    name="<?php echo esc_attr($name); ?>">
                <?php foreach($options as $key=>$value) { if ($key == "-1") $key = ""; ?>
                    <option <?php if ($field_value == $key) { echo "selected='selected'"; } ?>  value="<?php echo esc_attr($key); ?>"><?php echo esc_attr($value); ?></option>
                <?php } ?>
            </select>
        </div>
        <?php

    }

}

class BridgeQodeFieldSelectBlankSimple extends BridgeQodeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false, $repeat = array()) {
        global $bridge_qode_options;
        if (!empty($repeat) && array_key_exists('name', $repeat) && array_key_exists('index', $repeat)) {
            $name	= $repeat['name'] . '['.$repeat['index'].']['. $name .']';
            $field_value	= $repeat['value'];
        } else {
            $field_value = bridge_qode_option_get_value($name);
        }
        ?>


        <div class="col-lg-3">
            <em class="qodef-field-description"><?php echo esc_attr($label); ?></em>
            <select class="form-control qodef-form-element"
                    name="<?php echo esc_attr($name); ?>">
                <option <?php if (bridge_qode_option_get_value($name) == "") { echo "selected='selected'"; } ?> value=""></option>
                <?php foreach($options as $key=>$value) { ?>
                    <option <?php if ($field_value == $key) { echo "selected='selected'"; } ?>  value="<?php echo esc_attr($key); ?>"><?php echo esc_attr($value); ?></option>
                <?php } ?>
            </select>
        </div>
        <?php

    }

}

class BridgeQodeFieldYesNo extends BridgeQodeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false, $repeat = array() ) {
        global $bridge_qode_options;

        if (!empty($repeat) && array_key_exists('name', $repeat) && array_key_exists('index', $repeat)) {
            $id		= $name . '-' . $repeat['index'];
            $name	= $repeat['name'] . '['.$repeat['index'].']['. $name .']';
            $field_value	= $repeat['value'];
        } else {
            $id = $name;
            $field_value = bridge_qode_option_get_value($name);
        }

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

        <div class="qodef-page-form-section" id="qodef_<?php echo esc_attr($id); ?>" <?php if ($hidden) { ?> style="display: none"<?php } ?>>


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
                                <label data-hide="<?php echo esc_attr($dependence_hide_on_yes); ?>" data-show="<?php echo esc_attr($dependence_show_on_yes); ?>"
                                       class="cb-enable<?php if ($field_value == "yes") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('Yes', 'bridge') ?></span></label>
                                <label data-hide="<?php echo esc_attr($dependence_show_on_yes); ?>" data-show="<?php echo esc_attr($dependence_hide_on_yes); ?>"
                                       class="cb-disable<?php if ($field_value == "no") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('No', 'bridge') ?></span></label>
                                <input type="checkbox" id="checkbox" class="checkbox"
                                       name="<?php echo esc_attr($name); ?>_yesno" value="yes"<?php if ($field_value == "yes") { echo " selected"; } ?>/>
                                <input type="hidden" class="checkboxhidden_yesno" name="<?php echo esc_attr($name); ?>" value="<?php echo esc_attr($field_value); ?>"/>
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

class BridgeQodeFieldYesNoSimple extends BridgeQodeFieldType {

    public function render( $name, $label="", $description="", $options = array(), $args = array(), $hidden = false ) {
        global $qode_options;
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


        <div class="col-lg-3">
            <em class="qodef-field-description"><?php echo esc_attr($label); ?></em>
            <p class="field switch">
                <label data-hide="<?php echo esc_attr($dependence_hide_on_yes); ?>" data-show="<?php echo esc_attr($dependence_show_on_yes); ?>"
                       class="cb-enable<?php if (bridge_qode_option_get_value($name) == "yes") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('Yes', 'bridge') ?></span></label>
                <label data-hide="<?php echo esc_attr($dependence_show_on_yes); ?>" data-show="<?php echo esc_attr($dependence_hide_on_yes); ?>"
                       class="cb-disable<?php if (bridge_qode_option_get_value($name) == "no") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('No', 'bridge') ?></span></label>
                <input type="checkbox" id="checkbox" class="checkbox"
                       name="<?php echo esc_attr($name); ?>_yesno" value="yes"<?php if (bridge_qode_option_get_value($name) == "yes") { echo " selected"; } ?>/>
                <input type="hidden" class="checkboxhidden_yesno" name="<?php echo esc_attr($name); ?>" value="<?php echo bridge_qode_option_get_value($name); ?>"/>
            </p>
        </div>


        <?php

    }

}

class BridgeQodeFieldOnOff extends BridgeQodeFieldType {

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
                                       class="cb-enable<?php if (bridge_qode_option_get_value($name) == "on") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('On', 'bridge') ?></span></label>
                                <label data-hide="<?php echo esc_attr($dependence_show_on_yes); ?>" data-show="<?php echo esc_attr($dependence_hide_on_yes); ?>"
                                       class="cb-disable<?php if (bridge_qode_option_get_value($name) == "off") { echo " selected"; } ?><?php if ($dependence) { echo " dependence"; } ?>"><span><?php esc_html_e('Off', 'bridge') ?></span></label>
                                <input type="checkbox" id="checkbox" class="checkbox"
                                       name="<?php echo esc_attr($name); ?>_onoff" value="on"<?php if (bridge_qode_option_get_value($name) == "on") { echo " selected"; } ?>/>
                                <input type="hidden" class="checkboxhidden_onoff" name="<?php echo esc_attr($name); ?>" value="<?php echo bridge_qode_option_get_value($name); ?>"/>
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