<?php
/**
 * The template used for displaying page content
 *
 * @package ZenithMarket

 */
?>
<section class="content-wrap">
<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
</header><!-- .entry-header -->

<div class="entry-content">
		<?php
		the_content();

        ?>
</div><!-- .entry-content -->
    
</section>