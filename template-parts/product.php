<?php 
/** 
 * Product card template
 * @package zenithmarket
 * @Test - if product show if 0 stock
 */

 $product_id = get_the_ID();
 $product = wc_get_product( $product_id);
 $product_thumbnail = get_the_post_thumbnail_url( $product_id, 'medium' ); //Param: Product ID, size of image
 $product_title = get_the_title();
 $product_rating = wc_get_rating_html( $product->get_average_rating());
 $product_link = get_the_permalink();
 $sale_price = $product->get_sale_price();
 $regular_price = $product->get_regular_price();
 $is_product_on_sale = $product->is_on_sale(); //Return = true if on sale
 $is_product_in_stock = $product->is_in_stock();
 $is_stock_quantity = $product->get_stock_quantity();
 $product_price = $product->get_price_html(); //Return price in HTML format
 $discount_precent = ! empty($sale_price) ? floatval( ($regular_price - $sale_price) / $regular_price * 100 ) : 0;
 $price_saved = ! empty($sale_price) ? number_format(round(($regular_price-$sale_price), 2)) : 0;

    ?>
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="product mb-5">
                <div class="product-image text-center">
                    <a href="<?php echo esc_url($product_link) ?>">
                      <img  src="<?php echo esc_url($product_thumbnail)?> " alt="Test" class="text-center">
                    </a>
                    <?php echo esc_url($product_title)?>
                <?php 
                if ($is_product_on_sale){
                ?> 
                    <!-- Sale tag goes here
                    <span class="position-absolute top-0 end-0 text-center bg-black text-white ">Sale</span> -->
               <?php 
               }
                ?>
                </div>
            </div> 
        </div>
        <!-- Start of product information - Product title, stock, extras, price and add to card -->
        <div class="col-12 col-md-6 product-info">
            <a href="<?php echo esc_url($product_link) ?>">
               <div class="product-header d-flex flex-column ">
                    <h3 class="product-title h5"><?php echo esc_html($product_title)?> </h3>
            </a>    
                    <div class="rating-wrap woocommerce mb-2">
                     <?php echo ($product_rating) ?>
                    </div>
                  
                    
                </div>
                   <div class="extra-detail-wrap">
                     <div class="product-quantity h6 p-0"><?php echo wc_get_stock_html($product)?></div>
                        <hr class="m-0 p-0">
                            <ul class="product-delivery p-0 mt-2 mb-2 ">
                                <li><span><i class="bi bi-truck"></i> Next Day Delivery </span> </li>
                                <li><span><i class="bi bi-box"></i> Click & Collect</span></li>
                            </ul>
                        <hr class="m-0">
                    </div> 
                <div class="product-price-wrap mt-2 mb-2"> 
                    <h4 class="product-price h6"><?php echo wp_kses_post($product_price)?> </h4>
                </div>   
                <!-- Add to card button here-->
                <!-- CARE WITH add-to-cart spelling-->
                <div class="archive-button-wrap">

                <?php 
                 do_action( 'woocommerce_after_shop_loop_item' );
                 ?>
                </div>    
          
        </div>
   
    </div>
    <?php 

?>