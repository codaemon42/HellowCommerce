<?php
/**
 * The footer for our theme
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hellocommerce
 */

 wp_footer();
?>
            <footer>
                <section class="footer-widgets">
                    <div class="container">
                        <div class="row">
                            Footer widgets
                        </div>
                    </div>
                </section>
                <section class="copy-right">
                    <div class="container">
                        <div class="row">
                            <div class="copyright-text col-12 col-md-6">Copyright</div>
                            <nav class="footer-menu col-12 col-md-6 text-left text-md-right">
                                <?php
                                wp_nav_menu(
                                    array('theme_location'  =>  'hw_footer_menu_1')
                                );
                                ?>
                            </nav>
                        </div>
                    </div>
                </section>
            </footer>
        </div>
    </body>
</html>
