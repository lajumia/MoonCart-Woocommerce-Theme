<?php

class MoonCart_custom_post_type{
    public function __construct()
    {
        add_action('init', array($this, 'register_post_type'));
        add_action('init', array($this,'create_custom_taxonomy'));
    
    }


    public function register_post_type()
    {
        register_post_type('movies', // Change 'custom_type' to your desired slug
        array(
            'labels' => array(
                'name' => __('Movies'),
                'singular_name' => __('Movie'),
                'add_new' => __('Add New Movie'),
                'add_new_item' => __('Add New Movie'),
                'edit_item' => __('Edit Movie'),
                'new_item' => __('New Movie'),
                'view_item' => __('View Movie'),
                'view_items' => __('View Movies'),
                'search_items' => __('Search Movies'),
                'not_found' => __('No movies found'),
                'not_found_in_trash' => __('No movies found in Trash'),
                'parent_item_colon' => __('Parent Movie'),
                'all_items' => __('All Movies'),
                'archives' => __('Movie Archives'),
                'attributes' => __('Movie Attributes'),
                'insert_into_item' => __('Insert into movie'),
                'uploaded_to_this_item' => __('Uploaded to this movie'),
                'featured_image' => __('Featured Image'),
                'set_featured_image' => __('Set featured image'),
                'remove_featured_image' => __('Remove featured image'),
                'use_featured_image' => __('Use as featured image'),
                'menu_name' => __('Movies'),
                'filter_items_list' => __('Filter movies list'),
                'items_list_navigation' => __('Movies list navigation'),
                'items_list' => __('Movies list'),
                'name_admin_bar' => __('Movie')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'movies'), // Change 'custom-type' to your desired permalink structure
            'supports' => array('title', 'editor', 'thumbnail','author','thumbnail','excerpt','comments','page-attributes', 'custom-fields'), // Add or remove features as needed
        )
         );

    }

    // Add the following code to your theme's functions.php file or in a custom plugin.

function create_custom_taxonomy() {
    register_taxonomy(
        'movie-category', // Replace 'custom_taxonomy' with your desired slug
        'movies',     // Replace 'custom_type' with the slug of the post type to associate with
        array(
            'label' => __('Categories'),
            'add_new_item'=> 'Add New Category',
            'public' => true,
            'hierarchical' => true, // Set to true if you want hierarchical categories like default post categories
            'rewrite' => array('slug' => 'hot-movie'), // Change 'custom-taxonomy' to your desired permalink structure
            'show_admin_column' => true, // Display the taxonomy in the admin post list
        )
    );





    register_taxonomy(
        'movie-tag', // Replace 'custom_taxonomy' with your desired slug
        'movies',     // Replace 'custom_type' with the slug of the post type to associate with
        array(
            'label' => __('Tags'),
            'add_new_item'=> 'Add New Tag',
            'public' => true,
           
            'rewrite' => array('slug' => 'new-tag'), // Change 'custom-taxonomy' to your desired permalink structure
            'show_admin_column' => true, // Display the taxonomy in the admin post list
        )
    );





}


}//finished class