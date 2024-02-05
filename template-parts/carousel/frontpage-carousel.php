<?php
/** 
 * Front page carousel template part 
 * @include carousel-product.php woo template
 * @package zenithmarket
 */ ?>
<div class="container mb-5 mt-5">
<div class="product-carousel" id="product-carousel">
    <?php
    
    //Retrieve args from location product carousel is placed
    $carousel_args = get_query_var('carousel_args', array());

    $loop = new WP_Query($carousel_args);
    while ($loop->have_posts()) : $loop->the_post();
        get_template_part('template-parts/carousel-product');
    endwhile;
    wp_reset_postdata();    

    ?>
</div>
</div>
