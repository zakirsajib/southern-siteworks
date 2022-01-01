<?php

/*
use Carbon_Fields\Widget;
use Carbon_Fields\Field;

class Contact_Us_Widget extends Widget {
    function __construct() {
        $this->setup(
            'contact-us-widget',
            __('Contact Us', THEME_TEXTDOMAIN),
            __('Display contact us information', THEME_TEXTDOMAIN),
            array(
                Field::make( 'text', 'title', __('Title', THEME_TEXTDOMAIN) )
            ),
            'contact-us-widget'
        );
    }

    function front_end( $args, $instance ) {
        echo $args['before_title'] . $instance['title'] . $args['after_title'];

        ?>

        <ul class="contact-details">
            <li>
                <p class="address icon">
                    <?php echo nl2br( carbon_get_theme_option('address') ) ?>
                </p>
            </li>

            <li>
                <?php $phone = carbon_get_theme_option('phone') ?>

                <a href="tel:<?php echo convert_phone_for_link( $phone ) ?>" class="phone icon">
                    <?php echo $phone ?>
                </a>
            </li>

            <li>
                <?php $email = carbon_get_theme_option('email') ?>

                <a href="mailto:<?php echo antispambot( $email ) ?>" class="email icon">
                    <?php echo antispambot( $email ) ?>
                </a>
            </li>
        </ul>

        <?php
    }
}

add_action('widgets_init', function() {
    register_widget( 'Contact_Us_Widget' );
});
*/