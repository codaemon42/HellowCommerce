<?php
/**
 * The hooks of woocommerce plugin to take into action
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * 
 * @package Hellocommerce
 */


 add_action('wp', 'hw_wc_modifications');
 function hw_wc_modifications(){
     // priority 5 => woocommerce_before_main_content
      add_action('woocommerce_before_main_content', 'hw_woocommerce_before_wrapper_func', 5);
      function hw_woocommerce_before_wrapper_func(){
          echo '<div class="container shop-content"><div class="row">';
      }
      remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar');
      if(is_shop()){
          // priority 6 => woocommerce_before_main_content
          add_action('woocommerce_before_main_content', 'hw_woocommerce_before_sidebar_wrapper_func', 6);
          function hw_woocommerce_before_sidebar_wrapper_func(){
              echo '<div class="sidebar-shop col-lg-3 col-md-4 order-2 order-md-1">';
          }

           // priority 7 => woocommerce_before_main_content
           add_action('woocommerce_before_main_content', 'woocommerce_get_sidebar', 7);
           
           // priority 8 => woocommerce_before_main_content
           add_action('woocommerce_before_main_content', 'hw_woocommerce_after_sidebar_wrapper_func', 8);
           function hw_woocommerce_after_sidebar_wrapper_func(){
               echo '</div>';
           }
      }
     
      // priority 9 => woocommerce_before_main_content
     add_action('woocommerce_before_main_content', 'hw_woocommerce_before_products_wrapper_func', 9);
     function hw_woocommerce_before_products_wrapper_func(){
         if(is_shop()){
            echo '<div class="products-shop col-lg-9 col-md-8 order-1 order-md-2">';
         }else{

         }
         echo '<div class="products-shop col">';
     }
     
      // priority 6 => woocommerce_after_main_content
      add_action('woocommerce_before_main_content', 'hw_woocommerce_after_products_wrapper_func', 10);
      function hw_woocommerce_after_products_wrapper_func(){
          echo '</div>';
      }
     
      // priority 20 => woocommerce_after_main_content
      add_action('woocommerce_after_main_content', 'hw_woocommerce_after_wrapper_func', 20);
      function hw_woocommerce_after_wrapper_func(){
          echo '</div></div>';
      }

 }

