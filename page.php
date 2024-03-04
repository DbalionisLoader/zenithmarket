<?php
/**
 * 
 * The base template for display content using template-parts/content-page to call the_content wp function
 *  
 * MUST BE INCLUDED WITH CONTENT-PAGE 
 * Index.php override this file if present
 * 
 * 
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ZenithMarket
 * @since 1.0.0
 */

 if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<h2>Page.php working </h2>
<div id="primary" class="content-area ">
    <main id="main" class="site-main homepage" role="main">

        <?php
        // Start the loop
        while (have_posts()) :
            the_post();

   
        get_template_part('template-parts/content', 'page');   


        // End the loop
        endwhile;
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>