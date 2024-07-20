<?php 
/*
Template Name: Colour Services
*/

get_header();?>

<div id="primary" class="">
    <main id="main" class="">
        <section class="cmm-hero-section" >
            <picture>
                 <source srcset="<?php echo get_template_directory_uri(); ?>/images/carhero-road-2100x800-pg.png" media="(min-width: 768px)">
                 <source srcset="<?php echo get_template_directory_uri(); ?>/images/carheroimage-mobile-cwebp-600x536.webp" media="(min-width: 480px)">
                 <img src="<?php echo get_template_directory_uri(); ?>/images/carheroimage-mobile-cwebp-600x536.webp" alt="Red sport's car hood" class="cmm-hero-image">
            </picture>
            <div class="cmm-hero-container">   
            <div class="cmm-hero-content">
                <span class="cmm-preheading">Soll Automotive Paints</span> <br>
                <h1>Car Paint Matching</h1>
                <p>Get the most accurate paint colour match and specialty car paint mixed at Soll Leeds. </p>
                <div class="cmm-buttons-container">
                    <a href="#" class="cmm-button primary">Visit store</a>
                </div>
            </div>
            </div> 
        </section>
    </main>
    
</div>



<?php 
    get_footer();
?>