<?php

use Carbon_Fields\Carbon_Fields;
use Harbinger_Marketing\Assets_Cache;
use Harbinger_Marketing\PDF_Generator;
use Harbinger_Marketing\Instagram_Media;
use Harbinger_Marketing\BirdEye_Reviews;

add_action('after_setup_theme', 'load_theme_dependencies');
function load_theme_dependencies() {
	require_once('vendor/autoload.php');

	require_once('config/constants.php');

	require_once('lib/checks.php');

	require_once('lib/helpers/generic.php');
	require_once('lib/helpers/geolocation.php');
	require_once('lib/helpers/media.php');
	require_once('lib/helpers/svg.php');
	require_once('lib/helpers/image.php');
	require_once('lib/helpers/video.php');
	require_once('lib/helpers/ninja-forms.php');
	require_once('lib/helpers/wp.php');
}

add_action('after_setup_theme', 'init_carbon_fields');
function init_carbon_fields() {
	Carbon_Fields::boot();

	add_action('carbon_fields_register_fields', function() {
		require_once('lib/fields/post-metas.php');
		require_once('lib/fields/term-metas.php');
		require_once('lib/fields/nav-metas.php');
		require_once('lib/fields/widgets.php');
		require_once('lib/fields/global-sections.php');
		require_once('lib/fields/theme-options.php');
	});
}

//add_action('init', 'init_classes');
// function init_classes() {
// 	PDF_Generator::init();
//
// 	Instagram_Media::init( carbon_get_theme_option('instagram_app_id'), carbon_get_theme_option('instagram_app_secret'), carbon_get_theme_option('instagram_access_token') );
// }

add_action('init', 'init_theme');
function init_theme() {
	require_once('config/constants-dependent.php');

	require_once('lib/branding.php');
	require_once('lib/post-types.php');
	require_once('lib/menus/menus.php');
	require_once('lib/sidebars.php');
	require_once('lib/shortcodes.php');
	require_once('lib/emails/emails.php');

	load_theme_textdomain( THEME_TEXTDOMAIN, get_stylesheet_directory() . '/languages' );

	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
	add_theme_support( 'automatic-feed-links' );

	add_image_size('full-hd', 1920, 0, 1);

	// Southern Custom Image sizes
	add_image_size('hero', 1107, 950, 1);
	add_image_size('whatwedeliver', 998, 739, 1);
	add_image_size('project-thumbnail', 382, 400, 1);
	add_image_size('team-first-large', 1059, 600, 1);
	add_image_size('team-second-large', 517, 339, 1);
	add_image_size('gallery-D-large', 788, 760, 1);
	add_image_size('gallery-D-medium', 788, 368, 1);
	add_image_size('gallery-D-small', 382, 368, 1);
	add_image_size('gallery-T-large', 340, 325, 1);
	add_image_size('gallery-T-medium', 339, 157, 1);
	add_image_size('gallery-T-small', 164, 157, 1);
	add_image_size('modal-gallery', 929, 674, 1);
	add_image_size('mission-carousel', 780, 853, 1);

}


add_action('wp_enqueue_scripts', 'enqueue_scripts');
function enqueue_scripts() {

	wp_enqueue_script( THEME_TEXTDOMAIN . '-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', null, false, true );

	wp_enqueue_script( THEME_TEXTDOMAIN . '-vendor', get_stylesheet_directory_uri() . '/assets/theme/js/vendor.js', array('jquery'), false, true );
	wp_enqueue_script( THEME_TEXTDOMAIN . '-main', get_stylesheet_directory_uri() . '/assets/theme/js/main.js', array('jquery'), false, true );

	wp_enqueue_script( THEME_TEXTDOMAIN . '-googlemappolyfill', 'https://polyfill.io/v3/polyfill.min.js?features=default', null, false, true );
	wp_enqueue_script( THEME_TEXTDOMAIN . '-googlemap', get_stylesheet_directory_uri() . '/assets/theme/js/googlemap.js', null, false, true );

	if ( !empty( carbon_get_theme_option( 'southern_google_map_api_key' ) ) ):
		$southern_google_map_api_key = carbon_get_theme_option( 'southern_google_map_api_key' );

		wp_enqueue_script( THEME_TEXTDOMAIN . '-googlemapapi', 'https://maps.googleapis.com/maps/api/js?key='.$southern_google_map_api_key.'&callback=initMap', null, false, true );
	endif;

	wp_enqueue_script( THEME_TEXTDOMAIN . '-flickity', get_stylesheet_directory_uri() . '/node_modules/flickity/dist/flickity.pkgd.min.js', array('jquery'), false, true );

	if( is_front_page() ):
		wp_enqueue_script( THEME_TEXTDOMAIN . '-teamPagination', get_stylesheet_directory_uri() . '/inc/js/teamPagination.js', array('jquery'), false, true );
		// For Projects section
		wp_enqueue_script( THEME_TEXTDOMAIN . '-Flipster', get_stylesheet_directory_uri() . '/inc/js/jquery.flipster.min.js', array('jquery'), false, true );

	endif;

	if( is_singular( 'services' ) ):
		wp_enqueue_script( THEME_TEXTDOMAIN . '-servicesGalleryPagination', get_stylesheet_directory_uri() . '/inc/js/servicesGalleryPagination.js', array('jquery'), false, true );

		// For services gallery
		wp_enqueue_script( THEME_TEXTDOMAIN . '-Flipster', get_stylesheet_directory_uri() . '/inc/js/jquery.flipster.min.js', array('jquery'), false, true );

		//wp_enqueue_script( THEME_TEXTDOMAIN . '-CustomCoverflowCarousel', get_stylesheet_directory_uri() . '/inc/js/coverflow.js', array('jquery'), false, true );
		// End for services gallery
	endif;

	if ( is_page('about-us') ):
		wp_enqueue_script( THEME_TEXTDOMAIN . '-missionGallery', get_stylesheet_directory_uri() . '/inc/js/missionGalleryPagination.js', array('jquery'), false, true );
	endif;
}

add_action('wp_enqueue_scripts', 'enqueue_styles');
function enqueue_styles() {

	wp_enqueue_style( THEME_TEXTDOMAIN . '-flickity', get_stylesheet_directory_uri() . '/node_modules/flickity/dist/flickity.min.css' );

	wp_enqueue_style( THEME_TEXTDOMAIN . '-style', get_stylesheet_directory_uri() . '/assets/theme/css/styles.css' );

	wp_enqueue_style( THEME_TEXTDOMAIN . '-styleFlipster', get_stylesheet_directory_uri() . '/inc/css/jquery.flipster.min.css' );

}

add_action('init', 'southern_template');
function southern_template() {
	require_once 'inc/southern-template-hooks.php';
	require_once 'inc/southern-template-functions.php';
}

add_action('after_setup_theme', 'southern_cpt');
function southern_cpt() {
	require_once 'inc/cpt/service-cpt.php';
	require_once 'inc/cpt/project-cpt.php';
	require_once 'inc/cpt/position-cpt.php';
}

//Page Slug Body Class
function add_slug_body_class( $classes ) {
	global $post;
	if ( isset( $post ) ) {
		$classes[] = $post->post_type . '-' . $post->post_name;
	}
	return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

remove_filter( 'positions_details_modal', 'wpautop' );
