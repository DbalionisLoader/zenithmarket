<?php 
/*
Template Name: Colour Services
*/

get_header();?>

<div id="primary" class="">
    <main id="main" class="">
        <section class="cmm-hero-section">
            <picture>
                 <source srcset="<?php echo get_template_directory_uri(); ?>/images/carhero-road-2100x800-pg.png" media="(min-width: 768px)">
                 <source srcset="<?php echo get_template_directory_uri(); ?>/images/carheroimage-mobile-cwebp-600x536.webp" media="(min-width: 480px)">
                 <img src="<?php echo get_template_directory_uri(); ?>/images/carheroimage-mobile-cwebp-600x536.webp" alt="Red sport's car hood" class="cmm-hero-image">
            </picture>
            <div class="cmm-hero-container">   
            <div class="cmm-hero-content">
                <span class="cmm-preheading">Soll Automotive Paints</span> <br>
                <h1>Car Paint Matching</h1>
                <p class="mb-2">Get the most accurate paint colour match and specialty car paint mixed at Soll Leeds. </p>
                <div class="review-widget_net" data-uuid="9c9224b8-6d56-4b67-95ff-603354ec5da3" data-template="2" data-lang="en" data-theme="dark"></div><script src="https://grwapi.net/widget.min.js"></script>
                <div class="cmm-buttons-container">
                    <a href="#" class="cmm-button primary">Visit Our Store</a>
                </div>
            </div>
            </div> 
        </section>
        <section class="cmm-paintmatch-section" style="background: url('<?php echo get_template_directory_uri(); ?>/images/Hex-Pattern3.png') repeat-x  left center;">
            <div class="cmm-paintmatch-wrap row">
                <div class="col-12 col-lg-6 cmm-paintmatch-text-wrap">
                    <h2>Perfect Paint Matching for Your Vehicle</h2>
                    <p class="intro-p">At Soll, we pride ourselves on delivering the most accurate car paint matching available. Using advanced tools such as spectrophotometers, colour chips, and expert colour tinting, we ensure that we find the exact shade you desire.</p>
                    <p>Whether you're looking to repair a scratch or give your car a fresh new look, our precise matching techniques will make your vehicle look as good as new. Trust us to bring your dream car's colour to life with unmatched precision and quality.</p>
            </div>
                <div class="col-12 col-lg-6 cmm-banner-image-container">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/colourchipbox-900x600-tiny.png" alt="Image of a full car paint colour chip box">
                </div>
            </div>
        </section>
        <section class="cmm-paintbrands-section">
        </section>
        <?php get_template_part('template-parts/sections/brand', 'list'); ?>
        <?php get_template_part('template-parts/sections/matching', 'steps'); ?>
        <?php get_template_part('template-parts/sections/question', 'accord'); ?>
        <?php get_template_part('template-parts/sections/visit', 'banner'); ?>
    </main>
    <script src="https://grwapi.net/widget.min.js"></script>
</div>



<?php 
    get_footer();
?>