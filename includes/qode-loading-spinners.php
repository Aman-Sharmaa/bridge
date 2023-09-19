<?php

if(!function_exists('bridge_qode_loading_spinners')) {
    function bridge_qode_loading_spinners($return = false) {
        global $bridge_qode_options;

        $spinner_html = '';
        if(isset($bridge_qode_options['loading_animation_spinner'])){


            switch ($bridge_qode_options['loading_animation_spinner']) {
                case "pulse":
                    $spinner_html = bridge_qode_loading_spinner_pulse();
                break;
                case "double_pulse":
                    $spinner_html =  bridge_qode_loading_spinner_double_pulse();
                break;
                case "cube":
                    $spinner_html =  bridge_qode_loading_spinner_cube();
                break;
                case "rotating_cubes":
                    $spinner_html =  bridge_qode_loading_spinner_rotating_cubes();
                break;
                case "stripes":
                    $spinner_html =  bridge_qode_loading_spinner_stripes();
                break;
                case "wave":
                    $spinner_html =  bridge_qode_loading_spinner_wave();
                break;
                case "two_rotating_circles":
                    $spinner_html =  bridge_qode_loading_spinner_two_rotating_circles();
                break;
                case "five_rotating_circles":
                    $spinner_html =  bridge_qode_loading_spinner_five_rotating_circles();
                break;
            }
        }else{
            $spinner_html = bridge_qode_loading_spinner_pulse();
        }

        if($return === true) {
            return $spinner_html;
        }

        echo bridge_qode_get_module_part( $spinner_html );
    }
}

if(!function_exists('bridge_qode_loading_spinner_pulse')) {
    function bridge_qode_loading_spinner_pulse() {
        $html = '';
        $html .= '<div class="pulse"></div>';
        return $html;
    }
}

if(!function_exists('bridge_qode_loading_spinner_double_pulse')) {
    function bridge_qode_loading_spinner_double_pulse() {
        $html = '';
        $html .= '<div class="double_pulse">';
        $html .= '<div class="double-bounce1"></div>';
        $html .= '<div class="double-bounce2"></div>';
        $html .= '</div>';

        return $html;
    }
}

if(!function_exists('bridge_qode_loading_spinner_cube')) {
    function bridge_qode_loading_spinner_cube() {
        $html = '';
        $html .= '<div class="cube"></div>';
        return $html;
    }
}

if(!function_exists('bridge_qode_loading_spinner_rotating_cubes')) {
    function bridge_qode_loading_spinner_rotating_cubes() {
        $html = '';
        $html .= '<div class="rotating_cubes">';
        $html .= '<div class="cube1"></div>';
        $html .= '<div class="cube2"></div>';
        $html .= '</div>';

        return $html;
    }
}

if(!function_exists('bridge_qode_loading_spinner_stripes')) {
    function bridge_qode_loading_spinner_stripes() {
        $html = '';
        $html .= '<div class="stripes">';
        $html .= '<div class="rect1"></div>';
        $html .= '<div class="rect2"></div>';
        $html .= '<div class="rect3"></div>';
        $html .= '<div class="rect4"></div>';
        $html .= '<div class="rect5"></div>';
        $html .= '</div>';
        return $html;
    }
}

if(!function_exists('bridge_qode_loading_spinner_wave')) {
    function bridge_qode_loading_spinner_wave() {
        $html = '';
        $html .= '<div class="wave">';
        $html .= '<div class="bounce1"></div>';
        $html .= '<div class="bounce2"></div>';
        $html .= '<div class="bounce3"></div>';
        $html .= '</div>';

        return $html;
    }
}

if(!function_exists('bridge_qode_loading_spinner_two_rotating_circles')) {
    function bridge_qode_loading_spinner_two_rotating_circles() {
        $html = '';
        $html .= '<div class="two_rotating_circles">';
        $html .= '<div class="dot1"></div>';
        $html .= '<div class="dot2"></div>';
        $html .= '</div>';

        return $html;
    }
}

if(!function_exists('bridge_qode_loading_spinner_five_rotating_circles')) {
    function bridge_qode_loading_spinner_five_rotating_circles() {
        $html = '';
        $html .= '<div class="five_rotating_circles">';
        $html .= '<div class="spinner-container container1">';
        $html .= '<div class="circle1"></div>';
        $html .= '<div class="circle2"></div>';
        $html .= '<div class="circle3"></div>';
        $html .= '<div class="circle4"></div>';
        $html .= '</div>';
        $html .= '<div class="spinner-container container2">';
        $html .= '<div class="circle1"></div>';
        $html .= '<div class="circle2"></div>';
        $html .= '<div class="circle3"></div>';
        $html .= '<div class="circle4"></div>';
        $html .= '</div>';
        $html .= '<div class="spinner-container container3">';
        $html .= '<div class="circle1"></div>';
        $html .= '<div class="circle2"></div>';
        $html .= '<div class="circle3"></div>';
        $html .= '<div class="circle4"></div>';
        $html .= '</div>';
        $html .= '</div>';
        return $html;
    }
}