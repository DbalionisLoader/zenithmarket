<?php
/** 
 * Display product categories on front-page as grid
 * @package zenithmarket
 */ ?>

<div class="container category-grid">
    <div class="row">

        <?php 
            //Array of category slugs wanted to be displayed - use even number of slugs 
            $category_slugs = array('intel-gaming-pc','custom-pc','desktop-pc','gaming-pc');

            foreach($category_slugs as $category_slug){
                $category = get_term_by('slug',$category_slug,'product_cat');

                if($category){
                    $category_link = get_term_link($category);

                    echo '<div class="col-6 col-md-3 mb-3 mb-md-0 category">';
                        echo '<div class="category-box d-flex flex-column justify-content-center align-items-center">';
                        //Fetch category image here
                        $thumbnail_id = get_woocommerce_term_meta($category->term_id,'thumbnail_id', true);
                        $image = wp_get_attachment_url($thumbnail_id);
                        $cat_url =  get_term_link($category);
                        echo '<a href=" ' . esc_url($cat_url) . '">'; 
                        echo '<img src="' . esc_url($image) . '" alt="' . esc_attr($category->name) . '">';

                        echo '<h2 class="pt-2">' . $category->name . '</h2>';
                        echo '</a>';
                        echo '</div>';
                    echo '</div>';
                }
            }
        ?>
    </div>
</div>