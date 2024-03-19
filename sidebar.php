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
    <div class="filter-top-section pt-0 pb-2">
        <h2>Filters</h2>
        <hr>
    </div>
    <?php dynamic_sidebar( 'primary-sidebar' ); ?>
</div>
