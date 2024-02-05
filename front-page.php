<!-- Fetch header - found in header.php -->
<?php 
    get_header();
?>
<div class="homepage-section">
    <section class="homepage service-bar">
        <?php get_template_part('template-parts/carousel/service', 'carousel'); ?>
    </section>
    <section class="homepage banner-section">
        <?php get_template_part('template-parts/carousel/banner', 'carousel'); ?>
    </section>
    <section class="homepage landing-category-grid1">
        <?php get_template_part('template-parts/category/category', 'grid'); ?>
    </section>
    <section class="homepage secondary-banner-section">
        <div class="container mt-5">
            <a href="#"> <img src=" <?php echo get_template_directory_uri(); ?>/images/temp-paint-mix.png" alt="Test3" class="img-fluid" ></a>
        </div>          
    </section class="homepage sale-carousel">
    <h2 class="text-center mt-5">Shop Deals</h2>
    <?php
        $args = array(
        'post_type' => 'product',
        'posts_per_page' => -1,
        'product_cat' =>  'gaming-pc',
         ); 
        //pass args to the template part  
        $carousel_args = $args;
        set_query_var('carousel_args', $carousel_args);
   
        get_template_part('template-parts/carousel/frontpage', 'carousel',['carousel_args' => $carousel_args]); ?>
    </section> 
    <section class="homepage about-store-frontpage mt-5 mb-5">
        <hr class="m-0 p-0 border-line-frontpage">
        <div class="about-store-text-box">
        <h2 class="mt-5">We are holding the prices of some of our most popular products.</h2>
        <p>Our one stop car paint shop offers automotive paint for a wide range of applications. The more you buy the more you save with our bulk offers on the most popular deep repair body fillers, fine putties, high solid primers, masking products and automotive coatings.</p>
        <h2 class="mt-3">In our car paint shop you can always find everyday essential products at low prices.</h2>
        <p>Very strong fibreglass body fillers for structural repairs, underbody coatings, finishing putties, car coatings and polishing compounds you can find our car paint shop near you.</p>
        <h2 class="mt-3">More than 4,000 products from more than 30 manufacturers are ready for shipping.</h2>
        <p>Car coatings and auto body paints from Kapci, Mipa, Final Systems have a very long established reputation for high quality and durability. We stock the most popular primers, solid colours and lacquers for rapid despatch on your demand.</p>
        </div>
    </section>
</div>


<?php 
    get_footer();
?>