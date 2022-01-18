<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'theme_options', __('Theme Options', THEME_TEXTDOMAIN) )
	->add_tab(
        __('General', THEME_TEXTDOMAIN),
        array(
			Field::make( 'image', 'logo', __('Logo', THEME_TEXTDOMAIN) )
				->set_width(25)
				->set_value_type( 'url' ),
			Field::make( 'image', 'logo_icon', __('Logo Icon', THEME_TEXTDOMAIN) )
				->set_width(25),
			Field::make( 'image', 'logo_raster_colorful', __('Logo Raster (Colorful)', THEME_TEXTDOMAIN) )
				->set_width(25),
			Field::make( 'image', 'logo_raster_white', __('Logo Raster (White)', THEME_TEXTDOMAIN) )
				->set_width(25)
        )
	)

	// ->add_tab(
    //     __('Instagram', THEME_TEXTDOMAIN),
    //     array(
	// 		Field::make( 'text', 'instagram_app_id', __('Instagram App ID', THEME_TEXTDOMAIN) )
	// 			->set_width(33),
	// 		Field::make( 'text', 'instagram_app_secret', __('Instagram App Secret', THEME_TEXTDOMAIN) )
	// 			->set_width(33),
	// 		Field::make( 'text', 'instagram_access_token', __('Instagram Access Token', THEME_TEXTDOMAIN) )
	// 			->set_width(33)
    //     )
	// )
	//
	// ->add_tab(
    //     __('BirdEye', THEME_TEXTDOMAIN),
    //     array(
	// 		Field::make( 'text', 'birdeye_business_id', __('BirdEye Business ID', THEME_TEXTDOMAIN) )
	// 			->set_width(50),
	// 		Field::make( 'text', 'birdeye_api_key', __('BirdEye API Key', THEME_TEXTDOMAIN) )
	// 			->set_width(50)
    //     )
	// )

	// Adding Preloader Option
	->add_tab(
        __('Preloader', THEME_TEXTDOMAIN),
		array(
			Field::make( 'checkbox', 'show_preloader', 'Show preloader' ),
			Field::make( 'file', 'video_preloader', __( 'Select Video' ) )
    			->set_type( array( 'video' ) )
				->set_help_text( 'Only mp4 format is allowed.' )
     			->set_conditional_logic( array(
					array(
						'field' => 'show_preloader',
						'value' => true,
					)
    			) ),
			)
	)

	// Contact Options
	->add_tab(
        __('Contact', THEME_TEXTDOMAIN),
        array(
			Field::make( 'text', 'southern_phone', __('Phone', THEME_TEXTDOMAIN) )
				->set_width(50),
			Field::make( 'text', 'southern_email', __('E-mail', THEME_TEXTDOMAIN) )
				->set_width(50),
			Field::make( 'text', 'southern_location', __('Location', THEME_TEXTDOMAIN) )
				->set_width(50),
			Field::make( 'text', 'southern_social_label', __('Social Media Name', THEME_TEXTDOMAIN) )
				->set_width(25),
			Field::make( 'text', 'southern_social_url', __('Social Media URL', THEME_TEXTDOMAIN) )
				->set_width(25)
        )
	)

	// Google Map Options
	->add_tab(
        __('Google Map', THEME_TEXTDOMAIN),
        array(
			Field::make( 'text', 'southern_google_map_api_key', __('Google Map API Key', THEME_TEXTDOMAIN) )
				->set_width(100),
		)
	)


	// 404 Options
	->add_tab(
        __('Not Found', THEME_TEXTDOMAIN),
        array(
			Field::make( 'separator', 'separator_one', __( '404' ) ),
			Field::make( 'text', 'southern_404_heading', __('Heading', THEME_TEXTDOMAIN) )
				->set_width(50),
			Field::make( 'rich_text', 'southern_404_description', __('Description', THEME_TEXTDOMAIN) )
				->set_width(50),
        )
	)



	// What We stand for options
	->add_tab(
        __('What We Stand For', THEME_TEXTDOMAIN),
        array(
            Field::make( 'text', 'whatwestand_section_heading', __('Heading', THEME_TEXTDOMAIN) )
			->set_width(50),
			Field::make( 'text', 'whatwestand_value_section_heading', __('Values Subtitle', THEME_TEXTDOMAIN) )
			->set_width(50),
			Field::make( 'complex', 'whatwestand_media_item', __('Values', THEME_TEXTDOMAIN) )
			->set_layout( 'tabbed-horizontal' )
			->set_max(5)
			->set_help_text('Maximum 5 items are allowed.')
		    ->add_fields( 'values', array(
		        Field::make( 'image', 'value_icon' )
				//->set_value_type( 'url' )
				->set_help_text( 'Recommended Size 140 x 140 pixels. Recommended Image format png/svg.' ),
		        Field::make( 'text', 'value_title' ),
		    ) )
        )
    )

	// What We Deliver for options
	->add_tab(
        __('What We Deliver', THEME_TEXTDOMAIN),
        array(
            Field::make( 'text', 'whatwedeliver_section_heading', __('Heading', THEME_TEXTDOMAIN) )
			->set_width(50),
			Field::make( 'text', 'whatwedeliver_section_subheading', __('Subtitle', THEME_TEXTDOMAIN) )
			->set_width(50),
			Field::make( 'complex', 'whatwedeliver_services', __('Add Services', THEME_TEXTDOMAIN) )
			->set_layout( 'tabbed-horizontal' )
			->set_max(7)
			->set_help_text('Maximum 7 items are allowed.')
		    ->add_fields( 'ss-services', array(
				Field::make( 'text', 'service_title', __('Service Title', THEME_TEXTDOMAIN) ),
		        Field::make( 'image', 'service_image', __('Service Image', THEME_TEXTDOMAIN) )
				->set_help_text( 'Recommended Size 2560 x 1760 pixels. Recommended Image format png/svg. <br>Make sure all images are same height for optimal viewing experience.' ),
				Field::make( 'text', 'service_content_title', __('Service Content Title', THEME_TEXTDOMAIN) )
		        ->set_width(50),
				Field::make( 'textarea', 'service_content_description', __('Service Content Descriptions', THEME_TEXTDOMAIN) )
		        ->set_width(50)
				//Field::make( 'text', 'service_url_label', __('Service Button Label', THEME_TEXTDOMAIN) )
				//->set_width(50),
				//Field::make( 'text', 'service_url', __('Service Button URL', THEME_TEXTDOMAIN) )
				//->set_width(50)
		    ) )
        )
    )


	// What We have done options
	->add_tab(
        __('What We Have Done', THEME_TEXTDOMAIN),
        array(
            Field::make( 'text', 'whatwedone_section_heading', __('Heading', THEME_TEXTDOMAIN) )
			->set_width(50),
			Field::make( 'text', 'whatwedone_section_subheading', __('Subtitle', THEME_TEXTDOMAIN) )
			->set_width(50)
        )
    )


	// Careers options (This information shows on home, about and career pages.)
	->add_tab(
        __('Career & Career Growth ', THEME_TEXTDOMAIN),
        array(
            Field::make( 'text', 'career_section_heading', __('Heading', THEME_TEXTDOMAIN) )
			->set_width(50),
			Field::make( 'text', 'career_section_subheading', __('Subtitle', THEME_TEXTDOMAIN) )
			->set_width(25),
			Field::make( 'text', 'career_section_btn_label', __('Button Label', THEME_TEXTDOMAIN) )
			->set_width(25),
			Field::make( 'text', 'career_section_secondheading', __('Second Heading', THEME_TEXTDOMAIN) )
			->set_width(50),
			Field::make( 'rich_text', 'career_section_descr', __('Descriptions', THEME_TEXTDOMAIN) )
			->set_width(50),

			Field::make( 'text', 'career_position_title_one', __('Postion Title', THEME_TEXTDOMAIN) )
			->set_width(50),
			Field::make( 'text', 'career_position_rate_one', __('Postion Rate', THEME_TEXTDOMAIN) )
			->set_width(50),
			Field::make( 'text', 'career_position_title_two', __('Postion Title', THEME_TEXTDOMAIN) )
			->set_width(50),
			Field::make( 'text', 'career_position_rate_two', __('Postion Rate', THEME_TEXTDOMAIN) )
			->set_width(50),
			Field::make( 'text', 'career_position_title_three', __('Postion Title', THEME_TEXTDOMAIN) )
			->set_width(50),
			Field::make( 'text', 'career_position_rate_three', __('Postion Rate', THEME_TEXTDOMAIN) )
			->set_width(50),
			Field::make( 'text', 'career_position_title_four', __('Postion Title', THEME_TEXTDOMAIN) )
			->set_width(50),
			Field::make( 'text', 'career_position_rate_four', __('Postion Rate', THEME_TEXTDOMAIN) )
			->set_width(50),
			Field::make( 'text', 'career_position_title_five', __('Postion Title', THEME_TEXTDOMAIN) )
			->set_width(50),
			Field::make( 'text', 'career_position_rate_five', __('Postion Rate', THEME_TEXTDOMAIN) )
			->set_width(50),


			// Field::make( 'complex', 'career_position', __('Career Growth Chart', THEME_TEXTDOMAIN) )
		    // ->add_fields( 'career-position', array(
		    //     Field::make( 'text', 'career_position_title', __('Postion Title', THEME_TEXTDOMAIN) )
			// 	->set_width(50),
			// 	Field::make( 'text', 'career_position_rate', __('Postion Rate', THEME_TEXTDOMAIN) )
			// 	->set_width(50),
		    // ) )
        )
    );


	// Footer Options May be later but not now.
	// ->add_tab(
    //     __('Footer', THEME_TEXTDOMAIN),
    //     array(
	// 		Field::make( 'textarea', 'southern_googlemap', __('Google Map', THEME_TEXTDOMAIN) )
	// 			->set_width(50)
	// 			->set_help_text( 'Copy and paste google iframe code here.' )
    //     )
	// );
