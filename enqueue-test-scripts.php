<?php



/**
 * Enqueue scripts and styles.
 */

function theme_scripts(){




          // JQuery

          if( !is_admin()){
            $jquery= 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js';
            $jquery_url = @fopen($jquery,'r');
            if($jquery_urll !== false) {

                function load_external_jQuery() {
                    wp_deregister_script('jquery');
                    wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js');
                    wp_enqueue_script('jquery');
                }
                add_action('wp_enqueue_scripts', 'load_external_jQuery');
            } else {

                function load_local_jQuery() {
                    wp_deregister_script('jquery');
                    wp_register_script('jquery', get_bloginfo('template_url').'/js/min/jquery-3.1.0.min.js', __FILE__, false, '3.1.0', true);
                    wp_enqueue_script('jquery');
                }


            add_action('wp_enqueue_scripts', 'load_local_jQuery');
            }
        }




           // Modernizr

          if( !is_admin()){
            $modernizr= 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js';
            $modernizr_url = @fopen($modernizr,'r');
            if($modernizr_url !== false) {

                function load_external_modernizr() {
                    wp_register_script('modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js');
                    wp_enqueue_script('modernizr');
                }
                add_action('wp_enqueue_scripts', 'load_external_modernizr');
            } else {

                function load_local_modernizr() {
                    wp_register_script('modernizr', get_bloginfo('template_url').'/js/min/modernizr.min.js', __FILE__, false, '1.0', true);
                    wp_enqueue_script('modernizr');
                }


            add_action('wp_enqueue_scripts', 'load_local_modernizr');
            }
        }




          // Respond

          if( !is_admin()){
            $respond= 'https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js';
            $respond_url = @fopen($respond,'r');
            if($respond_url !== false) {

                function load_external_respond() {
                    wp_register_script('respond', 'https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js');
                    wp_enqueue_script('respond');
                }
                add_action('wp_enqueue_scripts', 'load_external_respond');
            } else {

                function load_local_respond() {
                    wp_register_script('respond', get_bloginfo('template_url').'/js/min/respond.min.js', __FILE__, false, '1.0', true);
                    wp_enqueue_script('respond');
                }


            add_action('wp_enqueue_scripts', 'load_local_respond');
            }
        }




         // Bootstrap

          if( !is_admin()){
            $bootstrap= 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js';
            $bootstrap_url = @fopen($bootstrap,'r');
            if($bootstrap_url !== false) {

                function load_external_bootstrap() {
                    wp_register_script('bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js');
                    wp_enqueue_script('bootstrap');
                }
                add_action('wp_enqueue_scripts', 'load_external_bootstrap');
            } else {

                function load_local_bootstrap() {
                    wp_register_script('jquery', get_bloginfo('template_url').'/js/min/bootstrap.min.js', __FILE__, false, '1.0', true);
                    wp_enqueue_script('jquery');
                }


            add_action('wp_enqueue_scripts', 'load_local_bootstrap');
            }
        }




         // SkrollMagic

          if( !is_admin()){
            $skrollMagic= 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js';
            $skrollMagic_url = @fopen($skrollMagic,'r');
            if($skrollMagic_url !== false) {

                function load_external_skrollMagic() {
                    wp_register_script('skrollMagic', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js');
                    wp_enqueue_script('skrollMagic');
                }
                add_action('wp_enqueue_scripts', 'load_external_skrollMagic');
            } else {

                function load_local_skrollMagic() {
                    wp_register_script('skrollMagic', get_bloginfo('template_url').'/js/min/ScrollMagic.min.js', __FILE__, false, '1.0', true);
                    wp_enqueue_script('skrollMagic');
                }


            add_action('wp_enqueue_scripts', 'load_local_skrollMagic');
            }
        }




           // SkrollMagic Add Indicators

          if( !is_admin()){
            $skrollMagic_debug= 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js';
            $skrollMagic_debug_url = @fopen($skrollMagic_debug,'r');
            if($skrollMagic_debug_url !== false) {

                function load_external_skrollMagic_debug() {
                    wp_register_script('skrollMagic_debug', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js');
                    wp_enqueue_script('skrollMagic_debug');
                }
                add_action('wp_enqueue_scripts', 'load_external_skrollMagic_debug');
            } else {

                function load_local_skrollMagic_debug() {
                    wp_register_script('skrollMagic_debug', get_bloginfo('template_url').'/js/min/debug.addIndicators.min.js', __FILE__, false, '1.0', true);
                    wp_enqueue_script('skrollMagic_debug');
                }


            add_action('wp_enqueue_scripts', 'load_local_skrollMagic_debug');
            }
        }








        // Custom JS

        function custom_scripts() {
        wp_register_script( 'myscripts', get_template_directory_uri() . '/js/min/customscripts-min.js' );
        wp_enqueue_script( 'myscripts' );
    }

    add_action( 'wp_enqueue_scripts', 'custom_scripts' );





















}

add_action('wp_enqueue_scripts', 'theme_scripts');

?>