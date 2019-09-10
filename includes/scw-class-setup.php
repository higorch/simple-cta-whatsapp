<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

class Setup_SCW {

    public function __construct()
    {
        add_action('wp_enqueue_scripts', array($this, 'scw_enqueue_scripts'));
    }
    
    public function scw_enqueue_scripts()
    {
        wp_enqueue_style('style-scw', SCW_DIR_URL.'assets/css/style.css');

        wp_enqueue_script('scripts-scw', SCW_DIR_URL . 'assets/js/scripts.js', array('jquery'), null, true);
    }
}

new Setup_SCW();
