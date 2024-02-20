
<?php
/**
 * Pagination template
 * To be used inside the Wordpress loop.
 * 
 * @package zenithmarket
 */

if ( ! empty ($args['total_pages']) && ! empty($args['current_page'] )){
    if (1 < $args['total_pages']){
    ?>
    <div class="pagination d-flex justify-content-center align-items-center mt-5 ">
       <?php
       echo paginate_links([
        'base'      => esc_url_raw( add_query_arg( 'paged', '%#%', remove_query_arg( 'product_cat' ) ) ),
        'format' => '',
        'current' => $args['current_page'],
        'total' => $args['total_pages'],
        'prev_text' => __( ' < Prev', 'zenithmarket'),
        'next_text' => __( 'Next > ', 'zenithmarket'),
        
       ]);
       ?> 
      
    </div> 
    <?php    
    }
}   ?>    
