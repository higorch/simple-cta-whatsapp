<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

class SCW_ADD_CTA {

    public function __construct()
    {
        add_action('wp_footer', array($this, 'scw_template_cta') );
        add_action('admin_menu', array($this, 'scw_options_page'));
        add_action( 'admin_init', array($this, 'register_settings_for_scw') );
    }

    // Template CTA
    public function scw_template_cta()
    {
        ob_start();
        include SCW_DIR_PATH . 'templates/template-cta-whatsapp.php';
        echo ob_get_clean();
    }

    // Pagina de configuração
    public function scw_options_page()
    {
        add_menu_page('CTA WhatsApp', 'CTA WhatsApp', 'manage_options', 'scw-config', array($this, 'scw_settings_options_page'), SCW_DIR_URL . '/assets/images/whatsapp.png');
    }

    // opções de configuração
    public function scw_settings_options_page()
    {
        require SCW_DIR_PATH . '/templates/config-admin.php';
    }

    // Save settings options
    public function register_settings_for_scw()
    {       
        register_setting( 'scw-options', 'scw_telefone' );
        register_setting( 'scw-options', 'scw_text' );
        register_setting( 'scw-options', 'scw_show_desktop' );
    }
}

new SCW_ADD_CTA();
