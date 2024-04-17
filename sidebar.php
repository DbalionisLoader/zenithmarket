<?php
/**
 * The sidebar containing the main widget area.
 * ADD Filter Everything
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<div id="primary-sidebar" class="primary-sidebar col-lg-3">
    <div class="filter-top-section pt-0 pb-0 d-flex justify-content-between">
        <h2>Filters</h2>
        <div class="filter-reset-button"><?php echo do_shortcode('[br_filter_single filter_id=174]') ?></div>
        
    </div>
    <hr>
    <?php dynamic_sidebar( 'primary-sidebar' ); ?>
</div>
