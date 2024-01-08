<?php 
class MoonCart_theme_options{
        public function __construct(){
            add_action("admin_menu", array( $this,"mooncart_theme_option") );
            add_action( 'admin_init', array( $this, 'mc_settings' ) );
            add_action( 'admin_init', array( $this, 'mc_slider_submenu_page_input' ) );
            add_action( 'admin_menu', array( $this, 'mc_slider_submenu_page' ) );
            add_action('admin_enqueue_scripts', array( $this,'my_submenu_page_enqueue_styles'));
            add_action('admin_enqueue_scripts', array( $this,'enqueue_media_uploader_script'));
        }
        // Enqueue Media Uploader Script
        function enqueue_media_uploader_script() {
            if (isset($_GET['page']) && $_GET['page'] == 'moon-cart-slider') {
                wp_enqueue_media();
                wp_enqueue_script('custom-media_uploader-script', get_template_directory_uri() . '/assets/js/custom-media-uploader.js', array('jquery'), null, true);
            }
        }
        
        
    
        // Custom Theme Options
        public function mooncart_theme_option()
        {
            add_menu_page( 
                'Moon Cart Theme Option',//$page_title:string, 
                'MoonCart Option',//$menu_title:string, 
                'manage_options',//$capability:string, 
                'moon-cart-theme-option',//$menu_slug:string,
                array($this,'mooncart_to_page'),//$callback:callable, 
                'dashicons-screenoptions',//$icon_url:string, 
                101);//$position:integer|float|null

        }

        // All Settings for theme options
        public function mc_settings(){

            add_settings_section( "mc_settings", "MoonCart Settings", array($this,'mc_settings_section'), "moon-cart-theme-option");
            add_settings_field( "custom-input", "MoonCart Header", array($this,'custom_setting'),"moon-cart-theme-option", "mc_settings");
            register_setting( 'mc_settings','custom-input');
            add_settings_field( "custom-input2", "MoonCart Header", array($this,'custom_setting'),"moon-cart-theme-option", "mc_settings");
            register_setting( 'mc_settings','custom-input2');
        }

        public function custom_setting(){
            echo '<input type="text" name="custom-input" value="'.get_option('custom-input').'">';

        }

        //mc_settings_section
        public function mc_settings_section()
        {
            return;

        }


        // Defauld them option page
        public function mooncart_to_page()
        {
        ?>
        <h1>Theme Options</h1>
        <?php settings_errors(); ?>
        <form action="options.php" method="post">
        <?php do_settings_sections( 'moon-cart-theme-option' );?>
        <?php settings_fields( 'mc_settings' );?>
        <?php submit_button();?>
        </form>
        <?php

    }

    public function my_submenu_page_enqueue_styles(){
        $hook_suffix = get_current_screen()->id;
    
    // Enqueue stylesheet only on your submenu page
    if ($hook_suffix === 'mooncart-option_page_moon-cart-slider') {
        wp_enqueue_style('my-submenu-styles', get_template_directory_uri() . '/assets/css/mc-submenu.css');
    }
    
    }

















    

    //Submenu page in Theme options for slider----------------------------------------------------
    public function mc_slider_submenu_page()
    {
        add_submenu_page(
            'moon-cart-theme-option',//$parent_slug:string, 
            'MoonCart Slider',//$page_title:string, 
            'MoonCart Slider',//$menu_title:string, 
            'manage_options',//$capability:string, 
            'moon-cart-slider',//$menu_slug:string,
            array($this,'mc_slider_submenu_page_callback') //$callback:callable 
        );
    }


    public function mc_slider_submenu_page_callback()
    {?>

    <h1 style="margin-left:25px;">Slider Options</h1>
    <div>
            <!-- // note: to = Theme Option--> 
        <div style="margin-left:25px;">        


            <div>
                <div class="requred_setting"></div>
                <div class="slide">
                    <form enctype='multipart/form-data' action="options.php" method="post">
                        <?php settings_errors(); ?>
                        <?php do_settings_sections( 'moon-cart-slider' );?>
                        <?php settings_fields( 'slide-1' );?>                       
                        <?php settings_fields( 'slide-2' );?>                       
                        <?php settings_fields( 'slide-3' );?>                       
                        <?php submit_button();?>
                    </form>
                </div>
            </div>
            
        </div>
    </div>

    <?php
    }


    public function mc_slider_submenu_page_input()
    {
        //input for slide 1 start
        add_settings_section( 'slide-1', 'Slide One', array($this,'callback_for_slide_section'), 'moon-cart-slider');

        add_settings_field( 'slide-1-discount-text', 'Discount', array($this,'slide_1_discount'), 'moon-cart-slider', 'slide-1');
        register_setting( 'slide-1', 'slide-1-discount-text');

        add_settings_field('slide-1-heading','Add heading',array($this,'slide_1_heading'),'moon-cart-slider','slide-1');
        register_setting( 'slide-1', 'slide-1-heading');

        add_settings_field( 'slide-1-pag','Add slider paragraph',array($this,'slide_1_par'),'moon-cart-slider','slide-1');
        register_setting( 'slide-1', 'slide-1-pag' );

        add_settings_field( 'slide-1-img','Add slide 1 image',array($this,'slide_1_image'),'moon-cart-slider','slide-1');
        register_setting( 'slide-1', 'slide-1-img' );
        //input for slide 1 finished


        //input for slide 2 start
        add_settings_section( 'slide-2', 'Slide Two', array($this,'callback_for_slide_section'), 'moon-cart-slider');

        add_settings_field( 'slide-2-discount-text', 'Discount', array($this,'slide_2_discount'), 'moon-cart-slider', 'slide-2');
        register_setting( 'slide-2', 'slide-2-discount-text');

        add_settings_field('slide-2-heading','Add heading',array($this,'slide_2_heading'),'moon-cart-slider','slide-2');
        register_setting( 'slide-2', 'slide-2-heading');

        add_settings_field( 'slide-2-pag','Add slider paragraph',array($this,'slide_2_par'),'moon-cart-slider','slide-2');
        register_setting( 'slide-2', 'slide-2-pag' );

        add_settings_field( 'slide-2-img','Add slide 2 image',array($this,'slide_2_image'),'moon-cart-slider','slide-2');
        register_setting( 'slide-2', 'slide-2-img' );
        //input for slide 2 finished


        //input for slide 3 start
        add_settings_section( 'slide-3', 'Slide Three', array($this,'callback_for_slide_section'), 'moon-cart-slider');

        add_settings_field( 'slide-3-discount-text', 'Discount', array($this,'slide_3_discount'), 'moon-cart-slider', 'slide-3');
        register_setting( 'slide-3', 'slide-3-discount-text');

        add_settings_field('slide-3-heading','Add heading',array($this,'slide_3_heading'),'moon-cart-slider','slide-3');
        register_setting( 'slide-3', 'slide-3-heading');

        add_settings_field( 'slide-3-pag','Add slider paragraph',array($this,'slide_3_par'),'moon-cart-slider','slide-3');
        register_setting( 'slide-3', 'slide-3-pag' );

        add_settings_field( 'slide-3-img','Add slide 3 image',array($this,'slide_3_image'),'moon-cart-slider','slide-3');
        register_setting( 'slide-3', 'slide-3-img' );
        //input for slide 3 finished






        
    }
    public function callback_for_slide_section()
    {
        echo "Slide setting";
    }

    //input for slider 1 start
    public function slide_1_discount()
    {
        echo '<input type="text" name="slide-1-discount-text" value="'.get_option('slide-1-discount-text').'">';
    }
    public function slide_1_heading()
    {
        echo '<input type="text" name="slide-1-heading" value="'.get_option('slide-1-heading').'">';
    }
    public function slide_1_par()
    {
        echo '<input type="text" name="slide-1-pag" value="'.get_option('slide-1-pag').'">';
    }
    public function slide_1_image()
    {
        echo '<input type="button" id="upload_button_1" class="button" value="Upload Slide Image">';
        echo '<input type="text" id="image_url_1" name="slide-1-img" value="'.get_option('slide-1-img').'">';
        
    }
    //input for slider 1 finished


    // input for slider 2 start
    public function slide_2_discount()
    {
        echo '<input type="text" name="slide-2-discount-text" value="'.get_option('slide-2-discount-text').'">';
    }
    public function slide_2_heading(){
        echo '<input type="text" name="slide-2-heading" value="'.get_option('slide-2-heading').'">';
    }
    public function slide_2_par(){
        echo '<input type="text" name="slide-2-pag" value="'.get_option('slide-2-pag').'">';
    
    }
    public function slide_2_image(){
        echo '<input type="button" id="upload_button_2" class="button" value="Upload Slide Image">';
        echo '<input type="text" id="image_url_2" name="slide-2-img" value="'.get_option('slide-2-img').'">';
        
    }
    //input for slider 2 finished
    
    //input for slider 3 start
    public function slide_3_discount()
    {
        echo '<input type="text" name="slide-3-discount-text" value="'.get_option('slide-3-discount-text').'">';
    }
    public function slide_3_heading()
    {
        echo '<input type="text" name="slide-3-heading" value="'.get_option('slide-3-heading').'">';
    
    }
    public function slide_3_par()
    {
        echo '<input type="text" name="slide-3-pag" value="'.get_option('slide-3-pag').'">';
    
    }
    public function slide_3_image()
    {
        echo '<input type="button" id="upload_button_3" class="button" value="Upload Slide Image">';
        echo '<input type="text" id="image_url_3" name="slide-3-img" value="'.get_option('slide-3-img').'">';
        
    
    }
    





    




}