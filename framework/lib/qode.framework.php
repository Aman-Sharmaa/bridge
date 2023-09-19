<?php
/*
   Class: QodeFramework
   A class that initializes Qode Framework
*/
class BridgeQodeFramework {

    private static $instance;
    public $qodeOptions;
    public $qodeMetaBoxes;
    public $qodeTaxonomyOptions;
    public $qodefUserOptions;

    private function __construct() {
        $this->qodeOptions = BridgeQodeOptions::get_instance();
        $this->qodeMetaBoxes = BridgeQodeMetaBoxes::get_instance();
        $this->qodeTaxonomyOptions = BridgeQodeTaxonomyOptions::get_instance();
        $this->qodefUserOptions     = BridgeQodeUserOptions::get_instance();
    }

    public static function get_instance() {
        if ( ! isset( self::$instance ) && ! ( self::$instance instanceof self ) ) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}

/*
   Class: QodeOptions
   A class that initializes Qode Options
*/
class BridgeQodeOptions {

    private static $instance;
    public $adminPages;
    public $options;
    public $optionsByType;

    private function __construct() {
        $this->adminPages = array();
        $this->options = array();
    }

    public static function get_instance() {
        if ( ! isset( self::$instance ) && ! ( self::$instance instanceof self ) ) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function addAdminPage($key, $page) {
        $this->adminPages[$key] = $page;
    }

    public function getAdminPage($key) {
        return $this->adminPages[$key];
    }

    public function adminPageExists($key) {
        return array_key_exists($key, $this->adminPages);
    }

    public function getAdminPageFromSlug($slug) {
        foreach ($this->adminPages as $key=>$page ) {
            if ($page->slug == $slug)
                return $page;
        }
        return;
    }

    public function addOption($key, $value, $type = '') {
        $this->options[$key] = $value;

        $this->addOptionByType($type, $key);
    }

    public function getOption($key) {
        if(isset($this->options[$key])) {
            return $this->options[$key];
        }
        return;
    }

    public function addOptionByType($type, $key) {
        $this->optionsByType[$type][] = $key;
    }

    public function getOptionsByType($type) {
        if(array_key_exists($type, $this->optionsByType)) {
            return $this->optionsByType[$type];
        }
        return array();
    }

    public function getOptionValue($key) {
        global $bridge_qode_options;

        if(is_array($bridge_qode_options) && array_key_exists($key, $bridge_qode_options)) {
            return $bridge_qode_options[$key];
        } elseif(array_key_exists($key, $this->options)) {
            return $this->getOption($key);
        }

        return false;
    }
}

/*
   Class: QodeAdminPage
   A class that initializes Qode Admin Page
*/
class BridgeQodeAdminPage implements iBridgeQodeLayoutNode {

    public $layout;
		private $factory;
		public $slug;
		public $title;

    function __construct($slug = "", $title = "", $icon = "") {
        $this->layout = array();
        $this->factory = new BridgeQodeFieldFactory();
        $this->slug = $slug;
        $this->title = $title;
        $this->icon = $icon;
    }

    public function hasChidren() {
        return (count($this->layout) > 0)?true:false;
    }

    public function getChild($key) {
        return $this->layout[$key];
    }

    public function addChild($key, $value) {
        $this->layout[$key] = $value;
    }

    function render() {
        foreach ($this->layout as $child) {
            $this->renderChild($child);
        }
    }

    public function renderChild(iBridgeQodeRender $child) {
        $child->render($this->factory);
    }
}

/*
   Class: QodeMetaBoxes
   A class that initializes Qode Meta Boxes
*/
class BridgeQodeMetaBoxes {

    private static $instance;
    public $metaBoxes;
    public $options;
	public $optionsByType;

    private function __construct() {
        $this->metaBoxes = array();
        $this->options = array();
		$this->optionsByType = array();
    }

    public static function get_instance() {
        if ( ! isset( self::$instance ) && ! ( self::$instance instanceof self ) ) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function addMetaBox($key, $box) {
        $this->metaBoxes[$key] = $box;
    }

    public function getMetaBox($key) {
        return $this->metaBoxes[$key];
    }

    public function addOption($key, $value, $type = '') {
        $this->options[$key] = $value;
		$this->addOptionByType($type, $key);
    }

    public function getOption($key) {
			if(isset($this->options[$key]))
        return $this->options[$key];
      return;
    }

	public function addOptionByType($type, $key) {
		$this->optionsByType[$type][] = $key;
	}

	public function getOptionsByType($type) {

		if(array_key_exists($type, $this->optionsByType)) {
			return $this->optionsByType[$type];
		}

		return array();
	}

	public function getMetaBoxesByScope( $scope ) {
		$boxes = array();

		if ( is_array( $this->metaBoxes ) && count( $this->metaBoxes ) ) {
			foreach ( $this->metaBoxes as $metabox ) {
				if ( is_array( $metabox->scope ) && in_array( $scope, $metabox->scope ) ) {
					$boxes[] = $metabox;
				} elseif ( $metabox->scope !== '' && $metabox->scope === $scope ) {
					$boxes[] = $metabox;
				}
			}
		}

		return $boxes;
	}

}

/*
   Class: QodeMetaBox
   A class that initializes Qode Meta Box
*/
class BridgeQodeMetaBox implements iBridgeQodeLayoutNode {

    public $layout;
	private $factory;
	public $scope;
	public $title;
	public $hidden_property;
	public $hidden_values = array();
	public $name;

    function __construct($scope="", $title_meta_box="",$hidden_property="", $hidden_values = array(), $name = '') {
        $this->layout = array();
		$this->factory = new BridgeQodeFieldFactory();
		$this->scope = $scope;
		$this->title = $title_meta_box;
		$this->hidden_property = $hidden_property;
		$this->hidden_values = $hidden_values;
		$this->name            = $name;
    }

    public function hasChidren() {
        return (count($this->layout) > 0)?true:false;
    }

    public function getChild($key) {
        return $this->layout[$key];
    }

    public function addChild($key, $value) {
        $this->layout[$key] = $value;
    }

    function render() {
        foreach ($this->layout as $child) {
            $this->renderChild($child);
        }
    }

    public function renderChild(iBridgeQodeRender $child) {
        $child->render($this->factory);
    }
}

/*
   Class: QodeTaxonomyOptions
   A class that initializes Qode Taxonomy Options
*/
class BridgeQodeTaxonomyOptions {

	private static $instance;
	public $taxonomyOptions;

	private function __construct() {
		$this->taxonomyOptions = array();
	}

    public static function get_instance() {
        if ( ! isset( self::$instance ) && ! ( self::$instance instanceof self ) ) {
            self::$instance = new self();
        }

        return self::$instance;
    }

	public function addTaxonomyOptions($key, $options) {
		$this->taxonomyOptions[$key] = $options;
	}

	public function getTaxonomyOptions($key) {
		return $this->taxonomyOptions[$key];
	}
}


/*
   Class: QodeTaxonomyOption
   A class that initializes Qode Taxonomy Option
*/
class BridgeQodeTaxonomyOption implements iBridgeQodeLayoutNode{
	public $layout;
	private $factory;
	public $scope;

	function __construct($scope="") {
		$this->layout = array();
		$this->factory = new BridgeQodeTaxonomyFieldFactory();
		$this->scope = $scope;
	}

	public function hasChidren() {
		return (count($this->layout) > 0)?true:false;
	}

	public function getChild($key) {
		return $this->layout[$key];
	}

	public function addChild($key, $value) {
		$this->layout[$key] = $value;
	}

	function render() {
		foreach ($this->layout as $child) {
			$this->renderChild($child);
		}
	}

	public function renderChild(iBridgeQodeRender $child) {
		$child->render($this->factory);
	}
}

if ( ! function_exists( 'bridge_qode_init_framework_variable' ) ) {
    function bridge_qode_init_framework_variable() {
        global $bridge_qode_framework;

        $bridge_qode_framework = BridgeQodeFramework::get_instance();
    }

    add_action( 'bridge_qode_action_before_options_map', 'bridge_qode_init_framework_variable' );
}

/*
   Class: BridgeQodeUserOptions
   A class that initializes BridgeQode User Options
*/
class BridgeQodeUserOptions {
    private static $instance;
    public $userOptions;

    private function __construct() {
        $this->userOptions = array();
    }

    public static function get_instance() {

        if ( null == self::$instance ) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    public function addUserOptions( $key, $options ) {
        $this->userOptions[ $key ] = $options;
    }

    public function getUserOptions( $key ) {
        return $this->userOptions[ $key ];
    }
}

/*
   Class: BridgeQodeUserOption
   A class that initializes BridgeQode User Option
*/
class BridgeQodeUserOption implements iBridgeQodeLayoutNode {
    public $layout;
    private $factory;
    public $scope;

    function __construct( $scope = "" ) {
        $this->layout  = array();
        $this->factory = new BridgeQodeUserFieldFactory();
        $this->scope   = $scope;
    }

    public function hasChidren() {
        return ( count( $this->layout ) > 0 ) ? true : false;
    }

    public function getChild( $key ) {
        return $this->layout[ $key ];
    }

    public function addChild( $key, $value ) {
        $this->layout[ $key ] = $value;
    }

    function render() {
        foreach ( $this->layout as $child ) {
            $this->renderChild( $child );
        }
    }

    public function renderChild( iBridgeQodeRender $child ) {
        $child->render( $this->factory );
    }
}