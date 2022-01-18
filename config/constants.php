<?php

// Theme brand colors
define( 'THEME_BRAND_COLOR_MAIN', '#1b5fba' );
define( 'THEME_BRAND_COLOR_SECONDARY', '#002145' );
define( 'THEME_BRAND_COLOR_TERTIARY', '#EDEDED' );

// Theme textdomain
define( 'THEME_TEXTDOMAIN', 'southern-siteworks' );

// Assets and assets cache paths/URLs
define( 'THEME_ASSETS_PATH', get_stylesheet_directory() . '/assets' );
define( 'THEME_ASSETS_URL', get_bloginfo('stylesheet_directory') . '/assets' );
define( 'THEME_CACHE_PATH', THEME_ASSETS_PATH . '/cache' );
define( 'THEME_CACHE_URL', THEME_ASSETS_URL . '/cache' );

// PDFs cache path
define( 'THEME_PDFS_CACHE_PATH', WP_CONTENT_DIR . '/cache/pdfs' );

// Email & PDF templates paths
define( 'THEME_EMAIL_TEMPLATES_PATH', get_stylesheet_directory() . '/lib/emails/email-templates' );
define( 'THEME_PDF_TEMPLATES_PATH', get_stylesheet_directory() . '/lib/emails/pdf-templates' );
