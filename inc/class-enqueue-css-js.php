<?php

class Enqueue{
    public function __construct(){
        add_action("wp_enqueue_scripts", array($this,"mc_enqueue_assets"));
        
       
    }


    public  function mc_enqueue_assets(){

        // enqueue css
        wp_enqueue_style("bootstrap-select", get_template_directory_uri() ."/assets/css/bootstrap-select.min.css", array(),null,"all");
        wp_enqueue_style("themify-icons", get_template_directory_uri() ."/assets/css/themify-icons.css", array(),null,"all");
        wp_enqueue_style("flaticon-mooncar", get_template_directory_uri() ."/assets/css/flaticon_mooncart.css", array(),null,"all");
        wp_enqueue_style("magnific-popup", get_template_directory_uri() ."/assets/css/magnific-popup.min.css", array(),null,"all");
        wp_enqueue_style("all-min", get_template_directory_uri() ."/assets/css/all.min.css", array(),null,"all");
        wp_enqueue_style("swiper-bundle", get_template_directory_uri() ."/assets/css/swiper-bundle.min.css", array(),null,"all");
        wp_enqueue_style("animate", get_template_directory_uri() ."/assets/css/animate.css", array(),null,"all");
        wp_enqueue_style("lightgallery", get_template_directory_uri() ."/assets/css/lightgallery.css", array(),null,"all");
        wp_enqueue_style("lg-thumbnail", get_template_directory_uri() ."/assets/css/lg-thumbnail.css", array(),null,"all");
        wp_enqueue_style("lg-zoom", get_template_directory_uri() ."/assets/css/lg-zoom.css", array(),null,"all");
        wp_enqueue_style("style", get_template_directory_uri() ."/assets/css/style.css", array(),null,"all");


        // enqueue js    
        wp_enqueue_script("jquery", get_template_directory_uri() ."/assets/js/jquery.min.js", array(),null,array());
        wp_enqueue_script("wow", get_template_directory_uri() ."/assets/js/wow.min.js", array(),null,array("strategy"=>"defer","in_footer"=>"true"));
        wp_enqueue_script("bootstrap-bundle", get_template_directory_uri() ."/assets/js/bootstrap.bundle.min.js", array(),null,array("strategy"=>"defer","in_footer"=>"true"));
        wp_enqueue_script("bootstrap-select", get_template_directory_uri() ."/assets/js/bootstrap-select.min.js", array(),null,array("strategy"=>"defer","in_footer"=>"true"));
        wp_enqueue_script("bootstrap-touchspin", get_template_directory_uri() ."/assets/js/bootstrap-touchspin.js", array(),null,array("strategy"=>"defer","in_footer"=>"true"));
        wp_enqueue_script("magnific-popup", get_template_directory_uri() ."/assets/js/magnific-popup.js", array(),null,array("strategy"=>"defer","in_footer"=>"true"));
        wp_enqueue_script("waypoints", get_template_directory_uri() ."/assets/js/waypoints-min.js", array(),null,array("strategy"=>"defer","in_footer"=>"true"));
        wp_enqueue_script("counterup", get_template_directory_uri() ."/assets/js/counterup.min.js", array(),null,array("strategy"=>"defer","in_footer"=>"true"));
        wp_enqueue_script("swiper-bundl", get_template_directory_uri() ."/assets/js/swiper-bundle.min.js", array(),null,array("strategy"=>"defer","in_footer"=>"true"));
        wp_enqueue_script("imagesloaded", get_template_directory_uri() ."/assets/js/imagesloaded.js", array(),null,array("strategy"=>"defer","in_footer"=>"true"));
        wp_enqueue_script("masonry", get_template_directory_uri() ."/assets/js/masonry-4.2.2.js", array(),null,array("strategy"=>"defer","in_footer"=>"true"));
        wp_enqueue_script("isotope", get_template_directory_uri() ."/assets/js/isotope.pkgd.min.js", array(),null,array("strategy"=>"defer","in_footer"=>"true"));
        wp_enqueue_script("countdown", get_template_directory_uri() ."/assets/js/jquery.countdown.js", array(),null,array("strategy"=>"defer","in_footer"=>"true"));
        wp_enqueue_script("carousel", get_template_directory_uri() ."/assets/js/dz.carousel.js", array(),null,array("strategy"=>"defer","in_footer"=>"true"));
        wp_enqueue_script("lightgallery", get_template_directory_uri() ."/assets/js/lightgallery.min.js", array(),null,array("strategy"=>"defer","in_footer"=>"true"));
        wp_enqueue_script("lg-thumbnail", get_template_directory_uri() ."/assets/js/lg-thumbnail.min.js", array(),null,array("strategy"=>"defer","in_footer"=>"true"));
        wp_enqueue_script("lg-zoom", get_template_directory_uri() ."/assets/js/lg-zoom.min.js", array(),null,array("strategy"=>"defer","in_footer"=>"true"));
        wp_enqueue_script("dz-ajax", get_template_directory_uri() ."/assets/js/dz.ajax.js", array(),null,array("strategy"=>"defer","in_footer"=>"true"));
        wp_enqueue_script("custom", get_template_directory_uri() ."/assets/js/custom.js", array(),null,array("strategy"=>"defer","in_footer"=>"true"));
        

        
    }



}




?>