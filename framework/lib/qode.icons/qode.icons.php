<?php

include "qode.iconcollection.interface.php";
include "qode.fontawesome.php";
include "qode.fontelegant.php";
include "qode.lineaicons.php";
include "qode.dripicons.php";
include "qode.kiko.php";
include "qode.fontawesome5.php";
/*
  Class: QodeIconCollections
  A class that initializes Qode Icon Collections
 */

if( ! function_exists('bridge_qode_get_icon_packs') ){
    function bridge_qode_get_icon_packs(){
        $icon_packs = apply_filters( 'bridge_qode_filter_icon_packs', $icon_packs = array() );

        return $icon_packs;
    }
}

class BridgeQodeIconCollections {

    private static $instance;
    public $iconCollections;
    public $VCParamsArray;
    public $iconPackParamName;

    private function __construct() {
        $this->iconPackParamName = 'icon_pack';
        $this->initIconCollections();
    }

    public static function getInstance() {

        if (null == self::$instance) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    /**
     * Method that adds individual collections to set of collections
     */
    private function initIconCollections() {
        $bridge_qode_options = get_option('qode_options_proya');

        //name for Font Awesome needs to be icon because that was name for icon fields before we have added icon collections
        $this->addIconCollection('font_awesome', new BridgeQodeIconsFontAwesome("Font Awesome", "icon"));

        if( ! empty( $bridge_qode_options['qode_performance_icon_packs'] ) ){
            $icon_packs_to_load = $bridge_qode_options['qode_performance_icon_packs'];

            if( is_array( $icon_packs_to_load ) && in_array('font_elegant', $icon_packs_to_load) ){
                $this->addIconCollection('font_elegant', new BridgeQodeIconsFontElegant("Font Elegant", "fe_icon"));
            }

            if( is_array( $icon_packs_to_load ) && in_array('linea_icons', $icon_packs_to_load) ){
                $this->addIconCollection('linea_icons', new BridgeQodeIconsFontLinea("Linea Icons", "linea_icon"));
            }

            if( is_array( $icon_packs_to_load ) && in_array('dripicons', $icon_packs_to_load) ){
                $this->addIconCollection('dripicons', new BridgeQodeIconsFontDripicons("Dripicons", "dripicon"));
            }

            if( is_array( $icon_packs_to_load ) && in_array('kiko', $icon_packs_to_load) ){
                $this->addIconCollection('kiko', new BridgeQodeIconsFontKiko("Kiko", "kiko"));
            }

            if( is_array( $icon_packs_to_load ) && in_array('font_awesome_5', $icon_packs_to_load) ){
                $this->addIconCollection('font_awesome_5', new BridgeQodeIconsFontAwesome5("Font Awesome 5", "font_awesome_5"));
            }
        } else{
            //fallback if you import demo that has not set these options
            $this->addIconCollection('font_elegant', new BridgeQodeIconsFontElegant("Font Elegant", "fe_icon"));
            $this->addIconCollection('linea_icons', new BridgeQodeIconsFontLinea("Linea Icons", "linea_icon"));
            $this->addIconCollection('dripicons', new BridgeQodeIconsFontDripicons("Dripicons", "dripicon"));
            $this->addIconCollection('kiko', new BridgeQodeIconsFontKiko("Kiko", "kiko"));
            $this->addIconCollection('font_awesome_5', new BridgeQodeIconsFontAwesome5("Font Awesome 5", "font_awesome_5"));
        }
    }

	public function getIconsMetaBoxOrOption($attributes) {
		$scope = '';
		$label = '';
		$parent = '';
		$name = '';
		$default_icon_pack = '';
		$default_icon = '';
		$type = '';
		$field_type = '';

		extract($attributes);

		$icon_hide_array = array();
		$icon_show_array = array();

		$icon_collections = $this->getCollectionsWithSocialIcons();
		$icon_collection_params = $this->getSocialIconCollectionsParams();
		if ($scope == 'regular') {
			$icon_collections = $this->getCollectionsWithIcons();
			$icon_collection_params = $this->getIconCollectionsParams();
		}else if ($scope == 'back-to-top') {
			$icon_collections = $this->getCollectionsWithBackToTopIcons();
			$icon_collection_params = $this->getBackToTopIconCollectionsParams();
		}
		foreach ($icon_collections as $dep_collection_key => $dep_collection_object) {
			$icon_hide_array[$dep_collection_key] = '';
			$icon_show_array[$dep_collection_key] = '#qodef_' . $name . '_' . $dep_collection_object->param . '_container';

			foreach ($icon_collection_params as $icon_collection_param) {
				if ($icon_collection_param !== $dep_collection_object->param) {
					$icon_hide_array[$dep_collection_key] .= '#qodef_' . $name . '_' . $icon_collection_param . '_container,';
				}
			}

			$icon_hide_array[$dep_collection_key] = rtrim($icon_hide_array[$dep_collection_key], ',');
		}

		$options = array(
			'font_awesome'      => esc_html__('Font Awesome', 'bridge'),
			'font_elegant'      => esc_html__('Font Elegant', 'bridge')
		);
		if ($scope == 'regular' || $scope == 'back-to-top') {
			$options = array(
				'font_awesome'      => esc_html__('Font Awesome', 'bridge'),
				'font_elegant'      => esc_html__('Font Elegant', 'bridge'),
				'linea_icons'       => esc_html__('Linea Icons', 'bridge'),
				'dripicons'         => esc_html__('Dripicons', 'bridge'),
				'kiko'         => esc_html__('Kiko', 'bridge'),
				'font_awesome_5'         => esc_html__('Font Awesome 5', 'bridge'),
			);
		}

		if ($type == 'meta-box') {
			bridge_qode_create_meta_box_field(
				array(
					'parent'        => $parent,
					'type'          => 'select' . $field_type,
					'name'          => $name,
					'default_value' => $default_icon_pack,
					'label'         => $label,
					'options'       => $options,
					'args'          => array(
						'dependence' => true,
						'hide'       => $icon_hide_array,
						'show'       => $icon_show_array
					)
				)
			);
		} else if ($type == 'option') {
			bridge_qode_add_admin_field(
				array(
					'parent'        => $parent,
					'type'          => 'select' . $field_type,
					'name'          => $name,
					'default_value' => $default_icon_pack,
					'label'         => $label,
					'options'       => $options,
					'args'          => array(
						'dependence' => true,
						'hide'       => $icon_hide_array,
						'show'       => $icon_show_array
					)
				)
			);
		}

		foreach ($icon_collections as $collection_key => $collection_object) {
			if ($scope == 'regular') {
				$icons_array = $collection_object->getIconsArray();
			} else if ($scope == 'back-to-top') {
				$icons_array = $collection_object->getBackToTopIconsArray();
			} else {
				$icons_array = $collection_object->getSocialIconsArray();
			}

			$icon_collections_keys = array_keys($icon_collections);

			unset($icon_collections_keys[array_search($collection_key, $icon_collections_keys)]);

			$qode_icon_hide_values = $icon_collections_keys;

			$qode_icon_pack_container = bridge_qode_add_admin_container(
				array(
					'parent'          => $parent,
					'name'            => $name . '_' . $collection_object->param . '_container',
					'hidden_property' => $name,
					'hidden_value'    => '',
					'hidden_values'   => $qode_icon_hide_values,
					'simple'          => $field_type == 'simple' ? true : false
				)
			);

			if ($type == 'meta-box') {
				bridge_qode_create_meta_box_field(
					array(
						'parent'        => $qode_icon_pack_container,
						'type'          => 'select' . $field_type,
						'name'          => $name . '_' . $collection_object->param,
						'default_value' => $default_icon,
						'label'         => $collection_object->title,
						'options'       => $icons_array
					)
				);
			} else if ($type == 'option') {
				bridge_qode_add_admin_field(
					array(
						'parent'        => $qode_icon_pack_container,
						'type'          => 'select' . $field_type,
						'name'          => $name . '_' . $collection_object->param,
						'default_value' => $default_icon,
						'label'         => $collection_object->title,
						'options'       => $icons_array
					)
				);
			}
		}
	}

    public function getIconWidgetParamsArray() {
        $iconPackParams[] = array(
            'type'    => 'dropdown',
            'name'    => 'icon_pack',
            'title'   => esc_html__( 'Icon Pack', 'bridge' ),
            'options' => array_flip( $this->getIconCollectionsVC() )
        );

        $iconSetParams = array();
        if ( is_array( $this->iconCollections ) && count( $this->iconCollections ) ) {
            foreach ( $this->iconCollections as $key => $collection ) {
                $iconSetParams[] = array(
                    'type'    => 'dropdown',
                    'title'   => $collection->title . esc_html__( ' Icon', 'bridge' ),
                    'name'    => $collection->param,
                    'options' => array_flip( $collection->getIconsArray() )
                );
            }
        }

        return array_merge( $iconPackParams, $iconSetParams );
    }

    public function getElementorParamsArray($control_object, $iconPackDependency = array(), $iconCollectionPrefix = "", $emptyIconPack = false){
        if ($emptyIconPack) {
            $iconCollectionsVC = $this->getIconCollectionsVCEmpty();
        } else {
            $iconCollectionsVC = $this->getIconCollectionsVC();
        }

        $control_object->add_control(
            'icon_pack', [
                'label' => esc_html__( 'Icon Pack', 'bridge' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => array_flip($iconCollectionsVC),
                'condition' => $iconPackDependency
            ]
        );

        if (is_array($this->iconCollections) && count($this->iconCollections)) {
            foreach ($this->iconCollections as $key => $collection) {
                $control_object->add_control(
                    $iconCollectionPrefix . $collection->param, [
                        'label' => esc_html__( 'Icon', 'bridge' ),
                        'type' => \Elementor\Controls_Manager::SELECT,
                        'options' => array_flip($collection->getIconsArray()),
                        'condition' => [
                            'icon_pack' => $key,
                        ]
                    ]
                );
            }
        }
    }

    public function getElementorIconFromIconPack( $params ){
        if( ! empty( $params['fe_icon'] ) ){
            $params['icon'] = $params['fe_icon'];
        }

        if( ! empty( $params['linea_icon'] ) ){
            $params['icon'] = $params['linea_icon'];
        }

        if( ! empty( $params['dripicon'] ) ){
            $params['icon'] = $params['dripicon'];
        }

        if( ! empty( $params['kiko'] ) ){
            $params['icon'] = $params['kiko'];
        }

        if( ! empty( $params['font_awesome_5'] ) ){
            $params['icon'] = $params['font_awesome_5'];
        }

        return $params['icon'];
    }

	public function getSocialElementorParamsArray($control_object, $iconPackDependency = array(), $iconCollectionPrefix = "", $emptyIconPack = false, $exclude = '') {


    	if ($emptyIconPack) {
			$iconCollectionsVC = $this->getIconCollectionsVCEmptyExclude($exclude);
		} else {
			$iconCollectionsVC = $this->getIconCollectionsVCExclude($exclude);
		}

		$icon_pack_args = array(
			'label' => esc_html__( 'Icon Pack', 'bridge' ),
			'type' => \Elementor\Controls_Manager::SELECT,
			'options' => array_flip($iconCollectionsVC)
		);

		if (!empty($iconPackDependency)) {
			$icon_pack_args['condition'] = [$iconPackDependency];
		}

		$control_object->add_control(
			'icon_pack',
				$icon_pack_args

		);

		$iconCollections = $this->iconCollections;
		if(is_array($exclude) && count($exclude)) {
			foreach ($exclude as $exclude_key) {
				if  (array_key_exists($exclude_key, $this->iconCollections)) {

					unset($iconCollections[$exclude_key]);
				}
			}

		} else {
			if  (array_key_exists($exclude, $this->iconCollections)) {
				unset($iconCollections[$exclude]);
			}
		}


		if (is_array($iconCollections) && count($iconCollections)) {
			foreach ($iconCollections as $key => $collection) {
				$control_object->add_control(
					$iconCollectionPrefix . $collection->param, [
						'label' => esc_html__( 'Icon', 'bridge' ),
						'type' => \Elementor\Controls_Manager::SELECT,
						'options' => array_flip($collection->getSocialIconsArrayVC()),
						'condition' => [
							'icon_pack' => $key,
						]
					]
				);
			}
		}
	}

    public function getVCParamsArray($iconPackDependency = array(), $iconCollectionPrefix = "", $emptyIconPack = false) {
        if ($emptyIconPack) {
            $iconCollectionsVC = $this->getIconCollectionsVCEmpty();
        } else {
            $iconCollectionsVC = $this->getIconCollectionsVC();
        }

        $iconPackParams = array(
            "type" => "dropdown",
            "class" => "",
            "heading" => "Icon pack",
            "param_name" => $this->iconPackParamName,
            "value" => $iconCollectionsVC,
            "description" => ""
        );

        if ($iconPackDependency !== "") {
            $iconPackParams["dependency"] = $iconPackDependency;
        }

        $iconPackParams = array($iconPackParams);

        $iconSetParams = array();
        if (is_array($this->iconCollections) && count($this->iconCollections)) {
            foreach ($this->iconCollections as $key => $collection) {
                $iconSetParams[] = array(
                    "type" => "dropdown",
                    "class" => "",
                    "heading" => "Icon",
                    "param_name" => $iconCollectionPrefix . $collection->param,
                    "value" => $collection->getIconsArray(),
                    "description" => "",
                    "dependency" => array('element' => $this->iconPackParamName, 'value' => array($key))
                );
            }
        }

        return array_merge($iconPackParams, $iconSetParams);
    }

    public function getSocialVCParamsArray($iconPackDependency = array(), $iconCollectionPrefix = "", $emptyIconPack = false, $exclude = '') {
        if ($emptyIconPack) {
            $iconCollectionsVC = $this->getIconCollectionsVCEmptyExclude($exclude);
        } else {
            $iconCollectionsVC = $this->getIconCollectionsVCExclude($exclude);
        }


        $iconPackParams = array(
            "type" => "dropdown",
            "class" => "",
            "heading" => "Icon pack",
            "param_name" => $this->iconPackParamName,
            "value" => $iconCollectionsVC,
            "description" => ""
        );

        if ($iconPackDependency !== "") {
            $iconPackParams["dependency"] = $iconPackDependency;
        }

        $iconPackParams = array($iconPackParams);

        $iconCollections = $this->iconCollections;
        if(is_array($exclude) && count($exclude)) {
            foreach ($exclude as $exclude_key) {
                if  (array_key_exists($exclude_key, $this->iconCollections)) {

                    unset($iconCollections[$exclude_key]);
                }
            }

        } else {
            if  (array_key_exists($exclude, $this->iconCollections)) {
                unset($iconCollections[$exclude]);
            }
        }

        $iconSetParams = array();
        if (is_array($iconCollections) && count($iconCollections)) {
            foreach ($iconCollections as $key => $collection) {
                $iconSetParams[] = array(
                    "type" => "dropdown",
                    "class" => "",
                    "heading" => "Icon",
                    "param_name" => $iconCollectionPrefix . $collection->param,
                    "value" => $collection->getSocialIconsArrayVC(),
                    "description" => "",
                    "dependency" => array('element' => $this->iconPackParamName, 'value' => array($key))
                );
            }
        }

        return array_merge($iconPackParams, $iconSetParams);
    }


	public function getCollectionsWithIcons() {
		$collectionsWithIcons = array();

		foreach ($this->iconCollections as $key => $collection) {
			$collectionsWithIcons[$key] = $collection;
		}

		return $collectionsWithIcons;
	}

	public function getCollectionsWithSocialIcons() {
		$collectionsWithSocial = array();

		foreach ($this->iconCollections as $key => $collection) {
			if ($collection->hasSocialIcons()) {
				$collectionsWithSocial[$key] = $collection;
			}
		}

		return $collectionsWithSocial;
	}

	public function getCollectionsWithBackToTopIcons() {
		$collectionsWithBackToTop = array();

		foreach ($this->iconCollections as $key => $collection) {
			if ($collection->hasBackToTopIcons()) {
				$collectionsWithBackToTop[$key] = $collection;
			}
		}

		return $collectionsWithBackToTop;
	}

    public function getIconSizesArray() {
        return array(
            "Tiny" => "fa-lg",
            "Small" => "fa-2x",
            "Medium" => "fa-3x",
            "Large" => "fa-4x",
            "Very Large" => "fa-5x"
        );
    }

    public function getIconSizeClass($iconSize) {
        switch ($iconSize) {
            case "fa-lg":
                $iconSize = "qode_tiny_icon";
                break;
            case "fa-2x":
                $iconSize = "qode_small_icon";
                break;
            case "fa-3x":
                $iconSize = "qode_medium_icon";
                break;
            case "fa-4x":
                $iconSize = "qode_large_icon";
                break;
            case "fa-5x":
                $iconSize = "qode_huge_icon";
                break;
            default:
                $iconSize = "qode_small_icon";
        }

        return $iconSize;
    }

	public function getIconCollectionParamNameByKey($key) {
		$collection = $this->getIconCollection($key);

		if($collection) {
			return $collection->param;
		}

		return false;
	}

    public function getShortcodeParams($iconCollectionPrefix = "") {
        $iconCollectionsParam = array();
        foreach ($this->iconCollections as $key => $collection) {
            $iconCollectionsParam[$iconCollectionPrefix . $collection->param] = '';
        }

        return array_merge(array($this->iconPackParamName => '',), $iconCollectionsParam);
    }

    public function addIconCollection($key, $value) {
        $this->iconCollections[$key] = $value;
    }

    public function getIconCollection($key) {
        if (array_key_exists($key, $this->iconCollections)) {
            return $this->iconCollections[$key];   
        }
        return false;
            
    }

    public function getIconCollectionIcons(iIconCollection $collection) {
        return $collection->getIconsArray();
    }

    public function getIconCollectionsVC() {
        $vc_array = array();
        foreach ($this->iconCollections as $key => $collection) {
            $vc_array[$collection->title] = $key;
        }
        return $vc_array;
    }

    public function getIconCollectionsVCExclude($exclude) {
        $array = $this->getIconCollectionsVC();

        if(is_array($exclude) && count($exclude)) {
            foreach ($exclude as $key) {
                if(($x = array_search($key, $array)) !== false) {
                    unset($array[$x]);
                }
            }

        } else {
            if(($x = array_search($exclude, $array)) !== false) {
                unset($array[$x]);
            }
        }


        return $array;
    }

    public function getIconCollectionsKeys() {
        return array_keys($this->iconCollections);
    }

    /**
     * Method that returns an array of 'param' attribute of each icon collection
     * @return array array of param attributes
     */
    public function getIconCollectionsParams() {
        $paramArray = array();
        if(is_array($this->iconCollections) && count($this->iconCollections)) {
            foreach ($this->iconCollections as $key => $obj) {
                $paramArray[] = $obj->param;
            }
        }

        return $paramArray;
    }
	/**
	 * Method that returns an array of 'param' attribute of each icon collection with social icons
	 * @return array array of param attributes
	 */
	public function getSocialIconCollectionsParams() {
		$paramArray = array();
		if (is_array($this->getCollectionsWithSocialIcons()) && count($this->getCollectionsWithSocialIcons())) {
			foreach ($this->getCollectionsWithSocialIcons() as $key => $obj) {
				$paramArray[] = $obj->param;
			}
		}
		return $paramArray;
	}

	public function getBackToTopIconCollectionsParams() {
		$paramArray = array();
		if (is_array($this->getCollectionsWithBackToTopIcons()) && count($this->getCollectionsWithBackToTopIcons())) {
			foreach ($this->getCollectionsWithBackToTopIcons() as $key => $obj) {
				$paramArray[] = $obj->param;
			}
		}
		return $paramArray;
	}
    public function getIconCollections() {
        $array = array();
        foreach ($this->iconCollections as $key => $collection) {
            $array[$key] = $collection->title;
        }
        return $array;
    }

    public function getIconCollectionsEmpty($no_empty_key = "") {
        $array = array();
        $array[$no_empty_key] = "No Icon";
        foreach ($this->iconCollections as $key => $collection) {
            $array[$key] = $collection->title;
        }

        return $array;
    }

    public function getIconCollectionsVCEmpty() {
        $vc_array = array();
        $vc_array["No Icon"] = "";
        foreach ($this->iconCollections as $key => $collection) {
            $vc_array[$collection->title] = $key;
        }
        return $vc_array;
    }

    public function getIconCollectionsVCEmptyExclude($key) {
        $array = $this->getIconCollectionsVCEmpty();
        if  (($x = array_search($key, $array)) !== false) {
            unset($array[$x]);
        }
        return $array;
    }

    public function getIconCollectionsExclude($exclude) {
        $array = $this->getIconCollections();

        if(is_array($exclude) && count($exclude)) {
            foreach ($exclude as $exclude_key) {
                if(array_key_exists($exclude_key, $array)) {
                    unset($array[$exclude_key]);
                }
            }

        } else {
            if  (array_key_exists($exclude, $array)) {
                unset($array[$exclude]);
            }
        }

        return $array;
    }

    public function hasIconCollection($key) {

        return array_key_exists($key, $this->iconCollections);

    }

    public function enqueueStyles() {
        if(is_array($this->iconCollections) && count($this->iconCollections)) {
            foreach($this->iconCollections as $collection_key => $collection_obj) {
                wp_enqueue_style('bridge-qode-'.$collection_key, $collection_obj->styleUrl);
            }
        }
    }


    # HEADER AND SIDE MENU ICONS
    public function getSearchIcon($iconPack, $params = array()) {

        if ($this->hasIconCollection($iconPack)) {
            $iconsObject = $this->getIconCollection($iconPack);
            print bridge_qode_get_module_part( $iconsObject->getSearchIcon($params) );
        }

    }

    public function getSearchClose($iconPack, $params = array()) {
        if ($this->hasIconCollection($iconPack)) {
            $iconsObject = $this->getIconCollection($iconPack);
            print bridge_qode_get_module_part( $iconsObject->getSearchClose($params) );
        }
    }

    public function getSearchIconValue($iconPack) {

        if ($this->hasIconCollection($iconPack)) {

            $iconsObject = $this->getIconCollection($iconPack);
            print bridge_qode_get_module_part( $iconsObject->getSearchIconValue() );

        }

    }

    public function getMenuSideIcon($iconPack) {

        if ($this->hasIconCollection($iconPack)) {

            $iconsObject = $this->getIconCollection($iconPack);
            print bridge_qode_get_module_part( $iconsObject->getMenuSideIcon() );

        }

    }

    public function getBackToTopIcon($iconPack) {

        if ($this->hasIconCollection($iconPack)){

            $iconsObject = $this->getIconCollection($iconPack);
            print bridge_qode_get_module_part( $iconsObject->getBackToTopIcon() );

        }


    }

    public function getMobileMenuIcon($iconPack) {

        if($this->hasIconCollection($iconPack)) {

            $iconsObject = $this->getIconCollection($iconPack);
            print bridge_qode_get_module_part( $iconsObject->getMobileMenuIcon() );

        }

    }

    public function getQuoteIcon($iconPack, $return = false) {

        if($this->hasIconCollection($iconPack)) {

            $iconsObject = $this->getIconCollection($iconPack);
            if($return == true){
                return $iconsObject->getQuoteIcon();
            }
            else{
                print bridge_qode_get_module_part( $iconsObject->getQuoteIcon() );
            }

        }

    }


    # SOCIAL SIDEBAR ICONS
    public function getFacebookIcon($iconPack) {

        if ($this->hasIconCollection($iconPack)) {

            $iconsObject = $this->getIconCollection($iconPack);
            return $iconsObject->getFacebookIcon();

        }

    }

    public function getTwitterIcon($iconPack) {

        if ($this->hasIconCollection($iconPack)) {

            $iconsObject = $this->getIconCollection($iconPack);
            return $iconsObject->getTwitterIcon();

        }

    }

    public function getGooglePlusIcon($iconPack) {

        if ($this->hasIconCollection($iconPack)) {

            $iconsObject = $this->getIconCollection($iconPack);
            return $iconsObject->getGooglePlusIcon();

        }

    }

    public function getLinkedInIcon($iconPack) {

        if ($this->hasIconCollection($iconPack)) {

            $iconsObject = $this->getIconCollection($iconPack);
            return $iconsObject->getLinkedInIcon();

        }

    }

    public function getTumblrIcon($iconPack) {

        if ($this->hasIconCollection($iconPack)) {

            $iconsObject = $this->getIconCollection($iconPack);
            return $iconsObject->getTumblrIcon();

        }

    }

    public function getPinterestIcon($iconPack) {

        if ($this->hasIconCollection($iconPack)) {

            $iconsObject = $this->getIconCollection($iconPack);
            return $iconsObject->getPinterestIcon();

        }

    }

    public function getVKIcon($iconPack) {

        if ($this->hasIconCollection($iconPack)) {

            $iconsObject = $this->getIconCollection($iconPack);
            return $iconsObject->getVKIcon();

        }

    }

	public function getSocialShareIcon($iconPack) {
		if ($this->hasIconCollection($iconPack)) {
			$iconsObject = $this->getIconCollection($iconPack);
			return $iconsObject->getSocialShareIcon();
		}
	}

    public function getIconHTML($icon, $iconPack, $iconParams = array()) {
        if($this->hasIconCollection($iconPack)) {
            $iconCollection = $this->getIconCollection($iconPack);
            if($iconCollection) {
                return $iconCollection->render($icon, $iconParams);
            }
        }

        return false;
    }

    public function renderIconHTML($icon, $iconPack, $iconParams = array()) {
        echo bridge_qode_get_module_part( $this->getIconHTML($icon, $iconPack, $iconParams) );
    }
}