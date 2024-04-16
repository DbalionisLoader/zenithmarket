<?php
/**
 * ZenithMarket functions and definitions
 *
 * @link 
 *
 * @package ZenithMarket
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


//**** SUPPORT FUNCTIONS ****

//Add dynamic automatic wordpress title tag support - DISABLED - need attention
function zenith_market_theme_support(){
   add_theme_support('title-tag');
}
//add_action('document_title_parts','zenith_market_theme_support'); - DISABLED 



//Add post-thumbnails incase needed by Woocommerce
function zenith_market_add_theme_support() {
   add_theme_support( 'post-thumbnails' );
   add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'zenith_market_add_theme_support' );

//Add hook support
add_filter('the_content', 'do_shortcode');


//Add custom wp_get_attachment_image image size function
// PARAMS:
// Name of custom size,
// Width and heigh of image,
// Crop the image to specifc dimenstion (true/false)
add_image_size( 'custom-thumbnail', 60, 60, true );
add_image_size( 'product-image', 200, 200, true );

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
   //Get Jquery 3.71
   wp_enqueue_script('zenith_market_jquery', "https://code.jquery.com/jquery-3.7.1.js", array(), '3.7.1', true);
   //Add my ajax script with jquery dependancy
   wp_enqueue_script('zenith_market_ajax_script', get_template_directory_uri() . '/js/ajax-pagination.js',
   array('zenith_market_jquery'), null, true );

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

//Add basic Woocommerce support
function zenith_market_add_woocommerce_support() {
   add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'zenith_market_add_woocommerce_support' );

//WOOCOMMERCE HOOK EDITS - TO BE MOVED

//Change location of SKU template from summary to under the image gallery
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);

//Remove ugly sale tag from single target
remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );

//Remove notice box from product loop @archive-product.php
remove_action('woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10);

//Function to change the number of gallery thumbnails inline
add_filter('woocommerce_product_thumbnails_columns','custom_wc_gallery_thumbnails');

//Remove related product from SINGLE product template
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);



function custom_wc_gallery_thumbnails(){
   return 8;
}

//Register widget sidebar
function zenith_market_widget_init(){
   register_sidebar(array(
      'name' => __('Primary Sidebar', 'zenith-market'),
      'id' => 'primary-sidebar',
      'description' => __('Sidebar for woocommerce filter widgets'),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
   ));
}

add_action('widgets_init', 'zenith_market_widget_init');

add_filter( 'woocommerce_add_to_cart_fragments', 'zenith_market_refresh_cart_fragment' );

function zenith_market_refresh_cart_fragment($fragments){
   ob_start();
   $items_count = WC()->cart->get_cart_contents_count();
   ?>
   <span class="minicart-quantity">  <?php echo esc_html($items_count); ?> </span>
   <?php
   $fragments['.minicart-quantity'] = ob_get_clean();
   return $fragments;
}

//Function to assign any product which get a sale price to a deals category
function auto_assign_sale_cat($product_id){
   //Get individual product 
   $product = wc_get_product( $product_id );

   if( $product->is_on_sale()){
      // Add the product to the "deals" category - !!! Make sure to use product ID not the product object !!!
      wp_set_object_terms($product->get_id(),'deals','product_cat', true);
   }
}
add_action( 'woocommerce_save_product_variation', 'auto_assign_sale_cat', 10, 2 );
add_action( 'woocommerce_update_product', 'auto_assign_sale_cat' );

//Function to assign any existing deal products to the deal category
function assign_existing_products_to_sale_category() {
   // Get all products
   $products = wc_get_products( array(
       'status' => 'publish',
       'limit' => -1,
   ) );

   foreach ( $products as $product ) {
       // Check if the product has a sale price set
       if ( $product->is_on_sale() ) {
           // Add the product to the "deals" category
           wp_set_object_terms( $product->get_id(), 'deals', 'product_cat', true );
       }
   }
}
//Enable function only if products DON'T have deal category assigned
//add_action( 'init', 'assign_existing_products_to_sale_category' );


//Custom Woo Action Hooks
//function zenith_market_custom_product_rating(){
 //  do_action('zenith_market_custom_product_rating');
//}

//do_action('zenith_market_custom_product_rating', 'woocommerce_template_loop_rating', 1);

?>