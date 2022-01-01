<?php


use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'post_meta', __('Page Settings', THEME_TEXTDOMAIN) )
    ->show_on_post_type( array('page', 'services') )
	//->show_on_template('page.php')

    ->add_tab(
		__('Hero Section', THEME_TEXTDOMAIN),
		array(
			Field::make( 'text', 'hero_section_heading', __('Heading', THEME_TEXTDOMAIN) )
            ->set_width(50),
            //->set_help_text( 'Add <span> tag to highlight the specific word' ),

            Field::make( 'textarea', 'hero_section_subheading', __('Sub Heading', THEME_TEXTDOMAIN) )
            ->set_width(50),

            Field::make( 'text', 'hero_section_cta_btn_label', __('CTA Button Label', THEME_TEXTDOMAIN) )
            ->set_width(25),
            Field::make( 'text', 'hero_section_cta_btn_url', __('CTA Button URL', THEME_TEXTDOMAIN) )
            ->set_width(25)
		)
	)

	->add_tab(
		__('Hero Video Section', THEME_TEXTDOMAIN),
		array(

			// Field::make( 'file', 'home_page_intro_section_bg_video', __('Background Video', THEME_TEXTDOMAIN) )
			// 	->set_type('video')
            //     ->set_width(25)
            //     ->set_help_text( 'Only mp4 format is allowed.' ),
            //
			// Field::make( 'image', 'home_page_intro_section_bg_video_poster', __('Background Video Poster', THEME_TEXTDOMAIN) )
            // ->set_width(25)
            // ->set_value_type( 'url' ),
            //
            //
			// Field::make( 'text', 'home_page_intro_section_youtube_popup_video_link', __('YouTube Video ID', THEME_TEXTDOMAIN) )
            // ->set_width(50)
            // ->set_help_text( 'Example: https://www.youtube.com/watch?v=<b>uU3AIBmXF1o</b>. <br>You just need to copy the last part of the video url which is <b>uU3AIBmXF1o</b>' ),
			// //Field::make( 'text', 'home_page_intro_section_heading', __('Heading', THEME_TEXTDOMAIN) )


            Field::make( 'select', 'show_video_type', 'Select Video Type' )
                ->add_options( array(
                    'self' => 'Self-Hosted Video (Popup)',
                    'yt' => 'YouTube Video (Popup)',
                    'ft' => 'Hero Image',
                    'hv' => 'Background Hero Video (No Popup)',
                ) ),

                Field::make( 'file', 'home_page_intro_section_bg_video', __('Popup Video', THEME_TEXTDOMAIN) )
    				->set_type('video')
                    ->set_help_text( 'Only mp4 format is allowed.' )
                    ->set_conditional_logic( array(
                         'relation' => 'AND', // Optional, defaults to "AND"
                         array(
                             'field' => 'show_video_type',
                             'value' => 'self', // Optional, defaults to "". Should be an array if "IN" or "NOT IN" operators are used.
                             'compare' => '=', // Optional, defaults to "=". Available operators: =, <, >, <=, >=, IN, NOT IN
                         )
                    ) ),
                Field::make( 'image', 'home_page_intro_section_bg_video_poster', __('Popup Video Poster', THEME_TEXTDOMAIN) )
                ->set_value_type( 'id' )
                ->set_conditional_logic( array(
                     'relation' => 'AND', // Optional, defaults to "AND"
                     array(
                         'field' => 'show_video_type',
                         'value' => 'self', // Optional, defaults to "". Should be an array if "IN" or "NOT IN" operators are used.
                         'compare' => '=', // Optional, defaults to "=". Available operators: =, <, >, <=, >=, IN, NOT IN
                     )
                ) ),

                Field::make( 'text', 'home_page_intro_section_youtube_popup_video_link', __('YouTube Video ID', THEME_TEXTDOMAIN) )
                ->set_width(50)
                ->set_help_text( 'Example: https://www.youtube.com/watch?v=<b>uU3AIBmXF1o</b>. <br>You just need to copy the last part of the video url which is <b>uU3AIBmXF1o</b>' )
                ->set_conditional_logic( array(
                     'relation' => 'AND', // Optional, defaults to "AND"
                     array(
                         'field' => 'show_video_type',
                         'value' => 'yt', // Optional, defaults to "". Should be an array if "IN" or "NOT IN" operators are used.
                         'compare' => '=', // Optional, defaults to "=". Available operators: =, <, >, <=, >=, IN, NOT IN
                     )
                ) ),

                Field::make( 'image', 'home_page_intro_section_hero_image', __('Featured/Hero Image', THEME_TEXTDOMAIN) )
                //->set_value_type( 'url' )
                ->set_help_text( 'Minimum image resolution size: 1000 by 500 pixels. (Width: 1000px and Height: 500px)' )
                ->set_conditional_logic( array(
                     'relation' => 'AND', // Optional, defaults to "AND"
                     array(
                         'field' => 'show_video_type',
                         'value' => 'ft', // Optional, defaults to "". Should be an array if "IN" or "NOT IN" operators are used.
                         'compare' => '=', // Optional, defaults to "=". Available operators: =, <, >, <=, >=, IN, NOT IN
                     )
                ) ),
                Field::make( 'file', 'home_page_intro_section_bg_hero_video', __('Backround Hero Video', THEME_TEXTDOMAIN) )
				->set_type('video')
                ->set_help_text( 'Only mp4 format is allowed.' )
                ->set_conditional_logic( array(
                     'relation' => 'AND', // Optional, defaults to "AND"
                     array(
                         'field' => 'show_video_type',
                         'value' => 'hv', // Optional, defaults to "". Should be an array if "IN" or "NOT IN" operators are used.
                         'compare' => '=', // Optional, defaults to "=". Available operators: =, <, >, <=, >=, IN, NOT IN
                     )
                ) ),
		)
	);

    // Client Logos
	// ->add_tab(
    //     __('Client Logos', THEME_TEXTDOMAIN),
    //     array(
	// 		Field::make( 'complex', 'southern_logo_item', __('Client Logos', THEME_TEXTDOMAIN) )
	// 		//->set_help_text('Maximum 5 items are allowed.')
	// 	    ->add_fields( 'clientlogos', array(
	// 	        Field::make( 'image', 'ss_logo', __('Add logo', THEME_TEXTDOMAIN) )
	// 			//->set_help_text( 'Recommended Size 140 x 140 pixels. Recommended Image format png/svg.' ),
	// 	    ) )
    //     )
    // );


    // Client Logos only to show in Home page.
    Container::make( 'post_meta', 'Client Logos' )
        ->where( 'post_id', '=', get_option( 'page_on_front' ) )

        // Client Logos

    	->add_tab(
            __('Client Logos', THEME_TEXTDOMAIN),
            array(
                Field::make( 'complex', 'client_logos', __( 'Client Logos', THEME_TEXTDOMAIN ) )
                ->set_layout( 'tabbed-horizontal' )
    		    ->add_fields( 'client-logo', array(
    				Field::make( 'image', 'client_logo', __('Add Logo', THEME_TEXTDOMAIN) )
                    ->set_value_type('image')
                    ->set_help_text( 'Recommended Size 140 x 140 pixels. Recommended Image format png/svg.' )
                    ->set_width(50),
                    Field::make( 'text', 'client_logo_url', __('Logo URL', THEME_TEXTDOMAIN) )
                    ->set_width(50)
                ) )
            )
        );


    // Postions (What Do We Need) only to show in home page only.
    Container::make( 'post_meta', 'Featured Projects' )
        ->where( 'post_id', '=', get_option( 'page_on_front' ) )

        // Featured Projects options in home page
        ->add_tab(
            __('Featured Projects (What We Have Done)', THEME_TEXTDOMAIN),
            array(
                Field::make( 'text', 'featured_projects_heading', __('Heading', THEME_TEXTDOMAIN) )
                ->set_width(50),
                Field::make( 'text', 'featured_projects_subheading', __('Subtitle', THEME_TEXTDOMAIN) )
                ->set_width(50)
            )
        );




    // Team Section only to show in Home page.
    Container::make( 'post_meta', 'Team' )
        ->where( 'post_id', '=', get_option( 'page_on_front' ) )

        // Team Section
        ->add_tab(
            __('Team Section', THEME_TEXTDOMAIN),
            array(
                Field::make( 'text', 'team_section_heading', __('Heading', THEME_TEXTDOMAIN) )
                ->set_width(50),
                Field::make( 'image', 'team_image_one', __('Add Team Image', THEME_TEXTDOMAIN) )
                ->set_help_text( 'Recommended Image format png/svg.' ),
                Field::make( 'textarea', 'team_descriptions', __('First Descriptions', THEME_TEXTDOMAIN) )
                ->set_width(50),
                //->set_attribute( 'maxLength', '500' ),

                Field::make( 'media_gallery', 'team_image_item', __('Team Gallery', THEME_TEXTDOMAIN) )
                ->set_type( array( 'image' ) )
                ->set_help_text( 'Recommended Image format png/jpg/svg.' ),
            )
        );




    // Mission Statement only to show in About us page.
    Container::make( 'post_meta', 'Mission Statement' )
        ->where( 'post_type', '=', 'page' )
        ->show_on_page('about-us')

        // Mission Statement options
    	->add_tab(
            __('Mission Statement', THEME_TEXTDOMAIN),
            array(
                Field::make( 'text', 'missionstatement_section_heading', __('Heading', THEME_TEXTDOMAIN) )
    			->set_width(50),
    			Field::make( 'text', 'missionstatement_section_subheading', __('Subtitle', THEME_TEXTDOMAIN) )
    			->set_width(50),
                //Field::make( 'image', 'missionstatement_section_logo', __('Logo', THEME_TEXTDOMAIN) )
    			//->set_help_text( 'Recommended Image format png/svg.' )
                //->set_value_type( 'url' ),
                Field::make( 'textarea', 'missionstatement_section_description', __('Descriptions', THEME_TEXTDOMAIN) )
    			->set_width(50),
    			Field::make( 'media_gallery', 'missionstatement_gallery', __('Add Images', THEME_TEXTDOMAIN) )
                ->set_type( array( 'image' ) )
                ->set_help_text( 'Recommended Image format png/svg.' ),
            )
        );


    // Only post type services to show.

    Container::make( 'post_meta', 'About the Service' )
        ->where( 'post_type', '=', 'services' )

    	->add_tab(
            __('About the Service', THEME_TEXTDOMAIN),
            array(
                Field::make( 'text', 'about_service_section_heading', __('Heading', THEME_TEXTDOMAIN) )
    			->set_width(50),
                Field::make( 'image', 'about_service_section_image', __('About The Service Large Image', THEME_TEXTDOMAIN) )
    			->set_help_text( 'Recommended Image format png/svg.' )
                ->set_value_type( 'id' ),
                Field::make( 'textarea', 'about_service_section_description', __('Descriptions', THEME_TEXTDOMAIN) )
    			->set_width(100),
                Field::make( 'separator', 'separator_one', __( 'Gallery' ) ),
                Field::make( 'media_gallery', 'services_slide', __('Add Images for this service', THEME_TEXTDOMAIN) )
                ->set_type( array( 'image' ) )
                ->set_help_text( 'Recommended Image format png/svg.' ),
    		    // ->add_fields( 'services-slide', array(
    			// 	Field::make( 'image', 'service_gallery_img_one', __('Add First Image', THEME_TEXTDOMAIN) )
                //     ->set_help_text( 'This is a large-sized image' )
                //     ->set_value_type('id')
                //     ->set_width(25),
                //     Field::make( 'image', 'service_gallery_img_two', __('Add Second Image', THEME_TEXTDOMAIN) )
                //     ->set_help_text( 'This is a Medium-sized image' )
                //     ->set_value_type('id')
                //     ->set_width(25),
                //     Field::make( 'image', 'service_gallery_img_three', __('Add Third Image', THEME_TEXTDOMAIN) )
                //     ->set_help_text( 'This is a small-szed image' )
                //     ->set_value_type('id')
                //     ->set_width(25),
                //     Field::make( 'image', 'service_gallery_img_four', __('Add Fourth Image', THEME_TEXTDOMAIN) )
                //     ->set_help_text( 'This is a small-szed image' )
                //     ->set_value_type('id')
                //     ->set_width(25),
    		    //) )
            )
        );



    // Only post type projects to show.

    Container::make( 'post_meta', 'Featured Projects' )
        ->where( 'post_type', '=', 'southern_projects' )

    	->add_tab(
            __('Featured Projects', THEME_TEXTDOMAIN),
            array(
                Field::make( 'media_gallery', 'featured_projects_gallery', __('Add Images', THEME_TEXTDOMAIN) )
                ->set_type( array( 'image' ) )
                ->set_help_text( 'Recommended Image format png/svg.' ),
            )
        );







    // Only post type Positions to show.

    Container::make( 'post_meta', 'What Do We Need' )
        ->where( 'post_type', '=', 'southern_positions' )

    	->add_tab(
            __('What Do We Need', THEME_TEXTDOMAIN),
            array(
                Field::make( 'image', 'positions_image', __('Position Image', THEME_TEXTDOMAIN) )
                ->set_help_text( 'Recommended Image format jpg/jpeg/png/svg.' )
                ->set_value_type( 'url' ),
                Field::make( 'text', 'positions_name', __('Position Title/Name', THEME_TEXTDOMAIN) )
                ->set_width(50),
                Field::make( 'text', 'positions_rate', __('Position Rate', THEME_TEXTDOMAIN) )
                ->set_width(50),


                // Popup fields
                Field::make( 'textarea', 'positions_details', __('Job Summary', THEME_TEXTDOMAIN) )
                ->set_width(100),

                Field::make( 'rich_text', 'positions_details_modal', __('Details Job Descriptions', THEME_TEXTDOMAIN) )
                ->set_width(100),

                // Field::make( 'text', 'positions_type', __('Job Type', THEME_TEXTDOMAIN) )
                // ->set_width(50),
                // Field::make( 'rich_text', 'positions_benefits', __('Benefits', THEME_TEXTDOMAIN) )
                // ->set_width(50),
                // Field::make( 'rich_text', 'positions_schedule', __('Schedule', THEME_TEXTDOMAIN) )
                // ->set_width(50),
                // Field::make( 'rich_text', 'positions_supplemental_pay', __('Supplemental Pay', THEME_TEXTDOMAIN) )
                // ->set_width(50),
                // Field::make( 'rich_text', 'positions_expereince', __('Experience', THEME_TEXTDOMAIN) )
                // ->set_width(50),
                // Field::make( 'rich_text', 'positions_license', __('License/Certification', THEME_TEXTDOMAIN) )
                // ->set_width(50),
                // Field::make( 'text', 'positions_location', __('Work Location', THEME_TEXTDOMAIN) )
                // ->set_width(50),
                //
                // Field::make( 'rich_text', 'positions_culture', __('Company Culture', THEME_TEXTDOMAIN) )
                // ->set_width(50),
                // Field::make( 'rich_text', 'positions_benefits_conditions', __('Benefits Conditions', THEME_TEXTDOMAIN) )
                // ->set_width(50),
                // Field::make( 'text', 'positions_remotely', __('Work Remotely', THEME_TEXTDOMAIN) )
                // ->set_width(50),
                // Field::make( 'rich_text', 'positions_covid_precautions', __('Covid Precautions', THEME_TEXTDOMAIN) )
                // ->set_width(50),
                // Field::make( 'rich_text', 'positions_covid_considerations', __('Covid Considerations', THEME_TEXTDOMAIN) )
                // ->set_width(50),
            )
        );



    // Postions (What Do We Need) only to show in careers page.
    Container::make( 'post_meta', 'Positions' )
        ->where( 'post_type', '=', 'page' )
        ->show_on_page('careers')

        // Positions options
        ->add_tab(
            __('Positions (What Do We Need. )', THEME_TEXTDOMAIN),
            array(
                Field::make( 'text', 'positions_section_heading', __('Heading', THEME_TEXTDOMAIN) )
                ->set_width(50),
                Field::make( 'text', 'positions_section_subheading', __('Subtitle', THEME_TEXTDOMAIN) )
                ->set_width(50)
                ->set_help_text( 'To add positions, please go to <a href="/wp-admin/edit.php?post_type=southern_positions" target="_blank">Southern Positions Section</a>.' )
            )
        );



    // FAQ only to show in careers page.
    Container::make( 'post_meta', 'FAQ' )
        ->where( 'post_type', '=', 'page' )
        ->show_on_page('careers')

        // FAQ options
        ->add_tab(
            __('FAQ', THEME_TEXTDOMAIN),
            array(
                Field::make( 'text', 'faq_section_heading', __('Heading', THEME_TEXTDOMAIN) )
                ->set_width(50),
                Field::make( 'text', 'faq_section_subheading', __('Subtitle', THEME_TEXTDOMAIN) )
                ->set_width(50),
                Field::make( 'complex', 'faq_items', __('Add FAQ for Left Column', THEME_TEXTDOMAIN) )
                ->set_layout( 'tabbed-horizontal' )
                ->add_fields( 'faq-items', array(
                    Field::make( 'text', 'career_faq_question', __('Add Question', THEME_TEXTDOMAIN) )
                    ->set_width(100),
                    Field::make( 'textarea', 'career_faq_answer', __('Add Answer', THEME_TEXTDOMAIN) )
                    ->set_width(100),
                ) ),
                Field::make( 'complex', 'faq_items_right', __('Add FAQ for Right Column', THEME_TEXTDOMAIN) )
                ->set_layout( 'tabbed-horizontal' )
                ->add_fields( 'faq-items_right', array(
                    Field::make( 'text', 'career_faq_question_right', __('Add Question', THEME_TEXTDOMAIN) )
                    ->set_width(100),
                    Field::make( 'textarea', 'career_faq_answer_right', __('Add Answer', THEME_TEXTDOMAIN) )
                    ->set_width(100),
                ) )
            )
        );
