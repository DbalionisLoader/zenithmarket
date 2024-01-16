<?php 
/** 
 * Product card template
 * @package zenithmarket
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
 $discount_precent = ! empty($sale_price) ? floatval( ($regular_price - $sale_price) / 100 ) : 0;

 if ($is_product_in_stock) {
    ?>
    <div class="product mb-5">
        <div class="position-relative">
            <a href="<?php echo esc_url($product_link) ?>">
                <img src="<?php echo esc_url($product_thumbnail)?> " alt="<?php echo esc_url($product_title)?>">
            </a>
            <?php 
                if ($is_product_on_sale){
                    ?>
                    <span class="position-absolute top-0 end-0 text-center bg-black text-white ">Sale</span>
               <?php 
               }
            ?>
        </div>
        <div class="product-info">
            <h3 class="product-title"><?php echo esc_html($product_title)?> </h3>
        </div>
    </div>
    <?php 
 }

?>