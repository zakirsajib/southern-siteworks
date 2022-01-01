<?php
/**
 * Template part for displaying page content in page.php
 *
 *
 * @subpackage southernsiteworks
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="header-bg">
        <div class="container-md container">
            <div class="row g-0 min-vh-100 m-n0 m-md-n5">
                <header class="entry-header col-md-4 col-xsl-4 col-12 d-flex align-items-start justify-content-center flex-column pt-5 pb-5 ps-sm-0 ps-3 pe-3 ps-md-5 pe-md-1">
            		<?php get_template_part( 'page-templates/header/hero/entry-header' );?>
            	</header>
                <div class="featured-video col-md-8 col-xsl-8 col-12 order-first order-md-last ps-6">
                    <?php get_template_part( 'page-templates/video/content-video' );?>
                </div>
            </div>
        </div>
    </div>

    <?php
    // Child pages of services
    //if ( is_page() && $post->post_parent ):
    if( is_singular( 'services' ) ):
        get_template_part( 'inc/content', 'side-menu' );
        //echo '<div class="header-bg-overlay"></div>';
        echo '<div class="who-we-stand-for-bg-empty"></div>';
        get_template_part( 'inc/content', 'child-services' );
        get_template_part( 'inc/content', 'child-services-gallery' );
    endif;


    // Only shows in home, about, careers page according to design.
    if ( is_page( array( 'about-us', 'careers' ) ) ):
        get_template_part( 'inc/whatwestandfor' );
    endif;

    // Only shows in services page according to design.
    if( is_page('our-services') ):
        //echo '<div class="header-bg-overlay"></div>';
        echo '<div class="who-we-stand-for-bg-empty"></div>';
        get_template_part( 'inc/whatwedeliver' );
        get_template_part( 'inc/whatwestandfor' );
    endif;

    // Only shows in home page according to design.
    if( is_front_page() ):
        get_template_part( 'inc/whatwestandfor' );
        get_template_part( 'inc/whatwedeliver' );
        get_template_part( 'inc/content' ,'projects' );
        get_template_part( 'inc/content', 'clientslogo' );
    endif;

    if( is_page('about-us') ):
        get_template_part( 'inc/content', 'mission-statement' );
    endif;

    // Only shows in home, about and careers page according to design.
    if( is_front_page() || is_page(array( 'about-us', 'careers' ) ) ):
        get_template_part( 'inc/content', 'careers' );
    endif;

    if( is_page('careers') ):
        get_template_part( 'inc/content', 'positions' );
        get_template_part( 'inc/content', 'faq' );
    endif;


    ?>





</article><!-- #post-<?php the_ID(); ?> -->
