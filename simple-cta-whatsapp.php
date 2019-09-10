<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/*
Plugin Name: Simple CTA WhatsApp
Description: Direct contact via whatsapp in one click
Version: 0.1.0
Author: Higor Christian (AP </>)
Author URI: https://agenciapiracanjuba.com.br/
Text Domain: scw
Domain Path: /languages
*/

define('SCW_DIR_PATH', plugin_dir_path(__FILE__));
define('SCW_DIR_URL', plugin_dir_url(__FILE__));

require SCW_DIR_PATH . '/includes/scw-class-setup.php';
require SCW_DIR_PATH . '/includes/scw-add-cta.php';
