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
        <div class="container-md container">
            <div class="row g-0 min-vh-100 m-n0 m-md-n5">
                <header class="entry-header col-md-4 col-xsl-4 col-12 d-flex align-items-start justify-content-center flex-column p-md-0 pt-5 pb-5 ps-sm-0 ps-3 ps-lg-5 p-md-5">
            		<?php get_template_part( 'page-templates/header/hero/entry-header' );
                        get_template_part( 'page-templates/contact/contact-details' );
                    ?>
            	</header><!-- .entry-header -->
                <div class="featured-video col-md-8 col-xsl-8 col-12 order-first order-md-last ps-6">
                    <?php get_template_part( 'page-templates/video/content-video' );?>
                </div>
            </div>
        </div>
    </div>

    <div class="who-we-stand-for-bg-empty"></div>

</article><!-- #post-<?php the_ID(); ?> -->
