<?php

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
<header class="woocommerce-products-header mt-4 mb-5">
	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
		<hr class="p-0 product-header-decorative-line">
	<?php endif;  //DONE ?>


	
	
	
	
	<?php
	/**
 	* Hook: woocommerce_shop_loop_header.
 	*
 	* @since 8.6.0
 	*
 	* @hooked woocommerce_product_taxonomy_archive_header - 10
 	*/
	do_action( 'woocommerce_shop_loop_header' );


	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	?>
</header>

<div class="filter-archive-container row">

	<?php
	//Add sidebar from sidebar.php 
	do_action( 'woocommerce_sidebar' );
	?>
	<div class="product-results-container col-lg-9">
	<?php
		if ( woocommerce_product_loop() ) {
		?>
		<div class="sorting-container d-flex justify-content-between">
			<?php
			/**
	 		* Hook: woocommerce_before_shop_loop.
	 		*
	 		* @hooked woocommerce_output_all_notices - 10
			* @hooked woocommerce_result_count - 20
			* @hooked woocommerce_catalog_ordering - 30
	 		*/
			do_action( 'woocommerce_before_shop_loop' );
			?>
		</div>


	<div class="container mt-5">
	<?php
		woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' ); 
			?>
			<div class="col-6  mb-5">
			<?php wc_get_template_part( 'template-parts/product'); 
			?>
			</div>
			<?php
		}
	}

	woocommerce_product_loop_end();?>

</div><!-- Product loop container end here -->
	<div class="woocommerce">
<?php
	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

?>	
	</div>
	</div> <!-- END of product-results-container div -->
</div> <!-- END of filter-product-container div -->
<?php
/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */


get_footer( 'shop' );
