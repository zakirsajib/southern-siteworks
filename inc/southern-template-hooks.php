<?php
/**
 * Southern hooks
 *
 * @package southernsiteworks
 */

/**
* General
*
* @see  southernsiteworks_preloader()
*/

add_action( 'southernsiteworks_before', 'southernsiteworks_preloader', 0 );

/**
* Header
*
* @see  southernsiteworks_skip_links()
* @see  southernsiteworks_header_branding()
*/

add_action( 'southernsiteworks_before', 'southernsiteworks_skip_links', 10 );
add_action( 'southernsiteworks_header', 'southernsiteworks_header_branding', 20 );

/**
 * Footer
 *
 * @see  southernsiteworks_footer_contact()
 * @see  southernsiteworks_footer_widgets()
 * @see  southernsiteworks_footer_copyright()
 * @see  southernsiteworks_gtranslate()
*/
add_action( 'southernsiteworks_footer', 'southernsiteworks_footer_contact', 5 );
add_action( 'southernsiteworks_footer', 'southernsiteworks_footer_widgets', 10 );
add_action( 'southernsiteworks_footer', 'southernsiteworks_footer_copyright', 20 );
add_action( 'southernsiteworks_footer', 'southernsiteworks_gtranslate', 25 );


/**
*
*
* @see  southernsiteworks_background_overlay()
*
*/

add_action( 'southernsiteworks_overlay', 'southernsiteworks_background_overlay', 5 );

/**
*
*
* @see  load_project_cat_filter()
*
*/
//add_action( 'wp_ajax_nopriv_load-project-cat-filter', 'load_project_cat_filter' );
//add_action( 'wp_ajax_load-project-cat-filter', 'load_project_cat_filter' );
