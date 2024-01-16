<?php 
    get_header();

    $current_category = get_queried_object();
    $category_slug = $current_category->slug;
?>



<main class="wrap container-fluid p-0 m-0">
    <div class="container mt-5 p-0">
<!-- 
    * Hook: woocommerce_show_page_title
    * Show page title using filter and action hook
-->
<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h1 class="woocommerce-products-header__title page-title mb-5 text-center"><?php woocommerce_page_title(); ?></h1>
	<?php endif; ?>

	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 * Show the description for the archive(category) - ensure
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	?>
<?php    
//Current page information 
   $paged = get_query_var('paged') ? get_query_var('paged') : 1; // Get current page number or default to 1



   $args = array(
    'post_type'      => 'product', //Woo Products
    'posts_per_page' => 10,        //Products per page
    'paged' =>  $paged,            //Get the page number - to use for pagination
    'order' => 'DESC',             //Product order
    'post_status' => 'publish',
    'tax_query'      => array(
        array(
            'taxonomy' => 'product_cat',  // Use 'product_cat' for product categories
            'field'    => 'slug',
            'terms'    => $category_slug,  // Category slug from the URL
        ),
    ),

   );

$products = new WP_Query( $args );
//Test query output
//echo '<pre/>';
//print_r($products);
?>

<div class="container">
    <div class="d-flex flex-wrap">
    <?php
    if ( $products->have_posts() ) :
        while ( $products->have_posts() ) : $products->the_post();
        ?>
        <div class="col-lg-6">
            <?php  get_template_part( 'template-parts/product' );// This will include the content-product.php template ?> 
        </div>
        <?php    
    endwhile;
    wp_reset_postdata();
else :
    echo esc_html__( 'No products found', 'your-text-domain' );
endif;
    ?>
        
    </div>
</div>
</div>
//Pagination
<?php
$total_pages = $products->max_num_pages;
get_template_part( 'template-parts/pagination', null, ['total_pages' => $total_pages, 'current_page' => $paged ] ); //Pass argument to template using 3rd param
?>



</main>

<?php 
    get_footer();
?>