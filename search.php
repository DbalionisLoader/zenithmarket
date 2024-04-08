<?php
/**
 * The template for displaying search results pages.
 *
 * @package zenith_market
 */

get_header(); ?>

	<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <header class="page-header">
            <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'zenith_market' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
        </header>

        <?php
        if ( have_posts() ) :
            woocommerce_product_loop_start();

            while ( have_posts() ) : the_post();
                /**
                 * Include the WooCommerce content-product.php template part for displaying product content
                 */
                wc_get_template_part( 'content', 'product' );
            endwhile;

            woocommerce_product_loop_end();
        else :
            ?>
            <p><?php _e( 'Sorry, no results were found.', 'zenith_market' ); ?></p>
            <?php
        endif;
        ?>
    </main>
	</div><!-- #primary -->

<?php

get_footer();
