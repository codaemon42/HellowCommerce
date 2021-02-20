<?php
/**
 * Template Name: Home page
 *
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
        <section class="slider">
          <div class="container">
            <div class="row">
              Slider
            </div>
          </div>
        </section>

        <section class="popular-products">
          <div class="container">
            <div class="row">
              Popular Products
            </div>
          </div>
        </section>

        <section class="new-arrivals">
          <div class="container">
            <div class="row">
              new-arrivals
            </div>
          </div>
        </section>

        <section class="deads-of-the-week">
          <div class="container">
            <div class="row">
              deads-of-the-week
            </div>
          </div>
        </section>

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
