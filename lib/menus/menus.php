<?php

	//register_nav_menu( 'main-menu', __('Main Menu', THEME_TEXTDOMAIN) );
    register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu', 'THEME_TEXTDOMAIN' ),
        'footer_menu'  => __( 'Footer Menu', 'THEME_TEXTDOMAIN' ),
    ) );
