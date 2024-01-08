<?php 

class MoonCart_customizer {

    public function __construct() 
    {
      add_action("customize_register", array( $this,"mooncart_customizer") );
      add_action("customize_preview_init", array( $this,"mooncart_customizer_preview") );
      add_action('customize_controls_enqueue_scripts', array( $this, 'enqueue_customizer_styles' ));
    }


    public function mooncart_customizer_preview(){
        wp_enqueue_script('customizer-preview', get_template_directory_uri() . '/assets/js/customizer-preview.js', array('jquery', 'customize-preview'), '', true);
    }

    function enqueue_customizer_styles() {
        wp_enqueue_style('customizer-styles', get_template_directory_uri() . '/assets/css/customizer-styles.css', array(), '1.0.0', 'all');
    }
    
    













    public function mooncart_customizer($wp_customize)
    {
        $wp_customize->add_panel( 'mc_header_area', array(
            'priority'       => 10,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => 'MoonCart Customizer Area',
            'description'    => '',
        ) );



        $wp_customize->add_section("mc_top_header", array(
            "title"=> __("Top Header","mooncart"),
            "panel"=>"mc_header_area",
        ));
        // Header Logo
        $wp_customize->add_setting("mc_logo", array(
            'default'=> get_template_directory_uri(). '/assets/images/svg/logo.svg',
            'transport'=>'postMessage',
        ));
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'mc_logo', array(
            'label'=> __('Add Logo','mooncart'),
            'settings'=>'mc_logo',
            'section'=> 'mc_top_header',

        )));
        // Header Search Functionality
        $wp_customize->add_setting('search_bar', array(
            'default' => '',
            'type' => 'theme_mod',
            'transport'=>'postMessage',
            
        ));
        $wp_customize->add_control('search_bar', array(
            'label' => __('Click to disable search bar', 'mooncart'),
            'section' => 'mc_top_header',
            'settings' => 'search_bar',
            'type' => 'checkbox',

        ));
        // Header Contact Number Section
        $wp_customize->add_setting('top_header_right_side', array(
            'default' => '',
            'type' => 'theme_mod',
            'transport'=>'postMessage',
            
        ));
        $wp_customize->add_control('top_header_right_side', array(
            'label' => __('Click to disable top right section', 'mooncart'),
            'section' => 'mc_top_header',
            'settings' => 'top_header_right_side',
            'type' => 'checkbox',

        ));
        // Add Contact Number 
        $wp_customize->add_setting('add_contact_number', array(
            'default' => '+8801704217202',
            'type' => 'theme_mod',
            'transport' => 'postMessage',
            
        ));
        $wp_customize->add_control('add_contact_number', array(
            'label' => __('Add Phone Number', 'mooncart'),
            'section' => 'mc_top_header',
            'settings' => 'add_contact_number',
            'type' => 'text',
            'input_attrs' => array(
                'style' => 'border : 2px solid #0D775E;',
                
            ),

        ));
        // Add Contact Support Text
        $wp_customize->add_setting('add_support_text', array(
            'default' => '24/7 Support',
            'type' => 'theme_mod',
            'transport' => 'postMessage',
            
        ));
        $wp_customize->add_control('add_support_text', array(
            'label' => __('Add Suppport Text', 'mooncart'),
            'section' => 'mc_top_header',
            'settings' => 'add_support_text',
            'type' => 'text',
            'input_attrs' => array(
                'style' => 'border : 2px solid #0D775E;',
                
            ),

        ));






        // $wp_customize->add_section("mc_menu_area", array(
        //     "title"=> __("Menu","mooncart"),
        //     "panel"=>"mc_header_area",
        // ));

        // // header menu
        // $wp_customize->add_setting('mc_menu', array(
        //     'default'=>'menu',
        // ));

        // $wp_customize->add_control('mc_menu',array(
        //     'label'=> __('Input name','mooncart'),
        //     'section'=>'mc_menu_area',
        //     'settings'=> 'mc_menu',
        //     'type'=>'text',
        // ));

        

    }

    




}