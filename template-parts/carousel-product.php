<?php 
/** 
 * Product card for carousel only template
 * @package zenithmarket
 * @Test - if product show if 0 stock
 */

 $product_id = get_the_ID();
 $product = wc_get_product( $product_id);
 $product_thumbnail = get_the_post_thumbnail_url( $product_id, 'medium' ); //Param: Product ID, size of image
 $product_title = get_the_title();
 $product_link = get_the_permalink();
 $sale_price = $product->get_sale_price();
 $regular_price = $product->get_regular_price();
 $is_product_on_sale = $product->is_on_sale(); //Return = true if on sale
 $is_product_in_stock = $product->is_in_stock();
 $product_price = $product->get_price_html(); //Return price in HTML format
 $discount_percent = ! empty($sale_price) ? floatval( ($regular_price - $sale_price) / 100 ) : 0;

 if ($is_product_in_stock) {
    ?>
    <div class="carousel-product me-3 ">
        <div class="position-relative carousel-product-image">
            <a href="<?php echo esc_url($product_link) ?>">
                <img src="<?php echo esc_url($product_thumbnail)?> " alt="<?php echo esc_url($product_title)?>">  
            </a> 
        </div>
        <div class="carousel-product-info mt-2">
            <a href="<?php echo esc_url($product_link) ?>">
            <h3 class="carousel-product-title"><?php echo esc_html($product_title)?> </h3>
            </a> 
        </div>
     
        <div class="carousel-product-price">
            <?php
            if ($is_product_on_sale) {
                echo '<del class="regular-price-onsale pe-2">£' . esc_html($regular_price) . '</del>';
                echo '<span class="sale-price">£' . esc_html($sale_price) . '</span>';
            } else {
                echo '<span class="regular-price">£' . esc_html($regular_price) . '</span>';
            }
            ?>
        </div>  
    </div>
    <?php 
 }

?>