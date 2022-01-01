<?php
/**
 * Displays the post header
 *
 * @subpackage southernsiteworks
 */

the_title( '<h1 class="entry-title">', '</h1>' ); ?>

<div class="entry-content pt-2 col-12 col-md-9">
    <?php the_content(); ?>
</div><!-- .entry-content -->
