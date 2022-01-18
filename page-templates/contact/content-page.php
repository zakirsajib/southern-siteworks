<?php
/**
 * Template part for displaying Contact page content in page.php
 *
 *
 * @subpackage southernsiteworks
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="header-bg">
        <div class="container g-0">
            <div class="row g-0">
                <header class="entry-header col-md-4 col-xl-5 col-12 d-flex align-items-start justify-content-center flex-column p-md-0 pt-5 pb-5 ps-3 ps-sm-0 ps-md-3 pe-md-5">
            		<?php get_template_part( 'page-templates/header/hero/entry-header' );
                        get_template_part( 'page-templates/contact/contact-details' );
                    ?>
            	</header><!-- .entry-header -->
                <div class="featured-video col-md-8 col-xl-7 col-12 order-first order-md-last">
                    <?php get_template_part( 'page-templates/video/content-video' );?>
                </div>
            </div>
        </div>
    </div>

    <div class="who-we-stand-for-bg-empty"></div>

</article><!-- #post-<?php the_ID(); ?> -->
