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
</div>

<div class="testing">

</div>


<?php 
    get_footer();
?>