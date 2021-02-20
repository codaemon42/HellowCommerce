<?php
/**
 * The template for displaying all pages
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hellocommerce
 */

get_header();
// <?php  
// if( !is_page_template('elementor_header_footer')){ ?>
     <!-- <div class="container"> -->
     <?php 
// } 
//   the_content();

?>
  <div class="content-area">
      <main>
        <section class="lab-blog">
          <div class="container">
            <div class="row">
              <?php
                if(have_posts()){
                  while(have_posts()){
                    the_post();
                    ?>
                      <article>
                        <h2><?php the_title(); ?></h2>
                        <div><?php the_content(); ?></div>
                      </article>
                    <?php
                  }
                }
                else{
                  ?>
                    <p>Nothing to display...</p>
                  <?php
                }
              ?>
            </div>
          </div>
        </section>
      </main>
  </div>
  <?php get_footer(); ?>
