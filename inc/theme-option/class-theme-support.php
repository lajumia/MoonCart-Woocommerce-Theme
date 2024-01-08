<?php 

class MoonCart_theme_support{
    public function __construct()
    {
         add_action("after_setup_theme", array($this,"mooncart_add_woocommerce_support"));
         add_action("init", array($this,"mooncart_nav_manus_support"));

    }

    // Woocommerce support
    public function mooncart_add_woocommerce_support() 
    {
        add_theme_support( 'woocommerce' );
    }
    
    // Menu support
    public function mooncart_nav_manus_support()
    {
        register_nav_menus( array(
            'header_menu'=> __('Header Menu','mooncart'),
            'footer_menu'=> __('Footer Menu','mooncart'),
        ) );
    }
}





?>