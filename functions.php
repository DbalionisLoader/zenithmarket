<?php

//**** SUPPORT FUNCTIONS ****

//Add dynamic automatic wordpress title tag support - DISABLED - need attention
function zenith_market_theme_support(){
   add_theme_support('title-tag');
}
//add_action('document_title_parts','zenith_market_theme_support'); - DISABLED 

//Add basic Woocommerce support
function zenith_market_add_woocommerce_support() {
   add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'zenith_market_add_woocommerce_support' );

//Add post-thumbnails incase needed by Woocommerce
function zenith_market_add_theme_support() {
   add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'zenith_market_add_theme_support' );

//Add custom wp_get_attachment_image image size function
// PARAMS:
// Name of custom size,
// Width and heigh of image,
// Crop the image to specifc dimenstion (true/false)
add_image_size( 'custom-thumbnail', 60, 60, true );

// *** ADD CUSTOM WOOCOM FUNCTIONALITY AND HOOKS HERE
//function mytheme_customize_woocommerce() {
   // Add or remove actions and filters for WooCommerce
//}
//add_action( 'after_setup_theme', 'mytheme_customize_woocommerce' );

// *** ADD Menu Locations here ***
//Add dynamic menus function
function zenith_market_locations(){
   $locations = array(
      'primary' => "Primary Navbar Menu",
      'footer'  => "Footer Menu",
      'custom-pc' => "Custom PC sub-menu",
      'next-day-pc' => "Next Day PC sub-menu",
      'gaming-pc' => "Gaming PC sub-memu",
      'desktop-pc' => "Desktop PC sub-menu"
   );
   register_nav_menus($locations);
}
//Add lardrock_menus_locations during init step
add_action('after_setup_theme','zenith_market_locations');


//Enqueue google fonts here
function zenith_market_enqueue_google_fonts() {
   wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap', false ); 
}
add_action( 'wp_enqueue_scripts', 'zenith_market_enqueue_google_fonts' );

// Add styles to wp_head function
// array argument controls the order of css files loading  
// PARAMS:
// stylesheet name, location, dependancy(order of loading), version, all???
function zenith_market_reg_styles(){
   // Dynamic version param
   $version = wp_get_theme()->get('Version');
 
   //Get bootstrap styles from CDN - TODO: convert to a local dir critical styles only for for speed boost
   wp_enqueue_style( 'zenith_market_bootstrap_style', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css", array(), '5.3.2', 'all' );
   //Bootstrap Icons style
   wp_enqueue_style( 'zenith_market_bootstrap_icon-style', "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css", array('zenith_market_bootstrap_style'), '1.11.1', 'all' );  
   
   wp_enqueue_style('slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');

   wp_enqueue_style('slick-css-theme', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css');

 
   //Get global style.css sheet from local dir
   wp_enqueue_style( 'zenith_market_global_style', get_template_directory_uri() . "/style.css", array('zenith_market_bootstrap_style','zenith_market_bootstrap_icon-style'), $version, 'all' );

    // Enqueue Webpack-compiled CSS for header
    wp_enqueue_style('zenith_market_header_style', get_template_directory_uri() . '/dist/header.css', array('zenith_market_bootstrap_style', 'zenith_market_bootstrap_icon-style'), $version, 'all');

    // Enqueue Webpack-compiled CSS for footer
    wp_enqueue_style('zenith_market_footer_style', get_template_directory_uri() . '/dist/footer.css', array('zenith_market_bootstrap_style', 'zenith_market_bootstrap_icon-style'), $version, 'all');
 
    // Enqueue Webpack-compiled main style.css
    wp_enqueue_style('zenith_market_main_style', get_template_directory_uri() . '/dist/style.css', array('zenith_market_bootstrap_style', 'zenith_market_bootstrap_icon-style'), $version, 'all');
}

// Add js scripts to wp_head function
// PARAMS:
// Script name, location, dependancy(order of loading), version, load in footer (true or false); 
function zenith_market_reg_js_scripts(){
   // Dynamic version param
   $version = wp_get_theme()->get('Version');

   //Get bootstrap script from CDN - TODO: convert to a local dir for critical scripts only for speed boost
   wp_enqueue_script( 'zenith_market_bootstrap_js_script', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js", array(), '5.3.2', true);
   
   wp_enqueue_script('zenith_market_jquery', "https://code.jquery.com/jquery-3.7.1.js", array(), '3.7.1', true);

   wp_enqueue_script('slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('zenith_market_jquery'), null, true);
      //Get main.js script from local dir
   wp_enqueue_script( 'zenith_market_js_script', get_template_directory_uri()."/js/script.js", array('zenith_market_jquery'), $version, true );

   //EXTRAS
   //Include pooper.js and jquary.min.slim if needed here
}

//Remove wp_head junk function
function remove_default_styles() {
   wp_dequeue_style('wp-block-library');
}
// 100 priority for ensure styles removed after the required styles loaded
add_action('wp_enqueue_scripts','remove_default_styles', 100);

//FUNCTION CALLS

//Call lardrock_reg_style function
add_action('wp_enqueue_scripts','zenith_market_reg_styles');


//Call ardrock_reg_js_scripts function
add_action('wp_enqueue_scripts','zenith_market_reg_js_scripts');

//CSS optimazation plan - have separate css files for development ease
//rpe-Combine the required separate css files into one css for each page
//Conditionaly enqueue the required css file per page 


?>


