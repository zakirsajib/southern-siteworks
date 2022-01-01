<?php get_header() ?>

<div class="g-0">
    <div class="row g-0">
        <?php /* Start the Loop */
            while ( have_posts() ) :
            	the_post();
                if( is_page('contact-us') ):
            	    get_template_part( 'page-templates/contact/content-page' );
                else:
                    get_template_part( 'page-templates/content/content-page' );
                endif;

            endwhile; // End of the loop. ?>
    </div>
</div>

<?php get_footer() ?>
