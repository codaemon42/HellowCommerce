<?php
/**
 * hellocommere functions and definitions
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hellocommerce
 * 
 */



 // require
 require get_template_directory() . '/inc/wc-modifications.php';

 // enqueue All scripts and styles here
 add_action( 'wp_enqueue_scripts', 'hellocommerce_enqueue_scripts' );
 function hellocommerce_enqueue_scripts(){
     wp_enqueue_script( 'bootstrap-js', get_template_directory_uri(). '/inc/bootstrap.min.js', array('jquery'), '', true );

     wp_enqueue_style( 'bootstrap-css',  get_template_directory_uri(). '/inc/bootstrap.min.css', array(), '', 'all');
     wp_enqueue_style( 'hellocommerce-style',  get_stylesheet_uri(), array(), filemtime(get_template_directory(). '/style.css'), 'all');
 }

 // register menus location here
 add_action('after_setup_theme', 'func_register_menus_positions', 0);
 function func_register_menus_positions(){
     register_nav_menus( 
         array(
            'hw_main_menu' => 'Hellocommerce Main Menu',
            'hw_footer_menu_1'  => 'Hellocommerce Footer Menu 1',
            'hw_footer_menu_2'  => 'Hellocommerce Footer Menu 2',
            'hw_footer_menu_3'  => 'Hellocommerce Footer Menu 3',
            'hw_footer_menu_4'  => 'Hellocommerce Footer Menu 4',
        ) 
    );
    add_theme_support( 'woocommerce', array(
        'thumbnail_image_width' => 150,
        'single_image_width'    => 300,

        'product_grid'          => array(
            'default_rows'    => 3,
            'min_rows'        => 2,
            'max_rows'        => 10,
            'default_columns' => 4,
            'min_columns'     => 2,
            'max_columns'     => 5,
        ),
    ) );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
 }