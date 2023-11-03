<?php
    /**
     * Plugin Name:     Fonctionnalités projet SNPNC
     * Plugin URI:      https://www.all-in-appli.com/
     * Description:     Plugin permettant d'ajouter des fonctionnalités pour le projet SNPNC
     * Author:          ALL IN APPLI / Dewy Mercerais
     * Author URI:      https://dewy.fr/
     * Text Domain:     func-snpnc
     * Domain Path:     /languages
     * Version:         1.0
     *
     * @package         func-snpnc
     */
    
    /** Secure */
    defined( 'ABSPATH' ) || exit;
    
    /**
     * constantes
     */
    define( 'CONNECT_FUNCSNPNC_WP_URL', plugin_dir_url ( __FILE__ ) );
    define( 'CONNECT_FUNCSNPNC_WP_DIR', plugin_dir_path( __FILE__ ) );
    define( 'CONNECT_FUNCSNPNC_WP_BASENAME', plugin_basename( __FILE__ ) );
    define( 'CONNECT_FUNCSNPNC_WP_VERSION', '1.0' );
    
    /**
     *  Activation / Deactivation hook
     */
    function add_func_activate_plugin() {
    
    }
    register_activation_hook( __FILE__, 'add_func_activate_plugin' );
    
    function delete_func_deactivate() {
    
    }
    register_deactivation_hook( __FILE__, 'delete_func_deactivate' );
    
    require_once CONNECT_FUNCSNPNC_WP_DIR . 'functions/wordpress/wordpress_hooks.php';
    require_once CONNECT_FUNCSNPNC_WP_DIR . 'functions/wordpress/wordpress_filters.php';
    require_once CONNECT_FUNCSNPNC_WP_DIR . 'functions/utils.php';
