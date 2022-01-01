<div class="position-fixed sidemenu-container">
    <div class="position-absolute side-menu-parent" id="sideNav">
    <div class="side-menu" id="sideContents">
        <div class="left-menu-contents pt-sm-5 p-lg-8">


            <div class="header-contact-details pt-3 pb-3 ms-4 me-4 ms-sm-4 ms-xxl-5 me-xxl-5">
                <ul>
                    <?php if ( !empty( carbon_get_theme_option( 'southern_phone' ) ) ):
                    $southern_phone = carbon_get_theme_option( 'southern_phone' );?>
                        <li><a class="telephone" href="tel:<?php echo $southern_phone; ?>"><?php svg_inline( dropdown_phone_svg() ); ?><span><?php echo $southern_phone; ?></span></a></li>
                    <?php endif;?>

                    <?php if ( !empty( carbon_get_theme_option( 'southern_email' ) ) ):
                    $southern_email = carbon_get_theme_option( 'southern_email' );?>
                        <li><a class="email" href="mailto:<?php echo antispambot($southern_email); ?>"><?php svg_inline( dropdown_email_svg() ); ?><span><?php echo antispambot($southern_email); ?></span></a></li>
                    <?php endif;?>

                    <?php if ( !empty( carbon_get_theme_option( 'southern_location' ) ) ):
                    $southern_location = carbon_get_theme_option( 'southern_location' );?>
                        <li><a href="#" class="location"><?php svg_inline( dropdown_location_svg() ); ?><span><?php echo $southern_location; ?></span></a></li>
                    <?php endif;?>
                </ul>
            </div>
            <div class="header-social-details pt-3 pb-3 ms-4 me-4 ms-sm-4 ms-xxl-5 me-xxl-5">
                <ul>
                    <?php if ( !empty( carbon_get_theme_option( 'southern_facebook' ) ) ):
                    $southern_facebook = carbon_get_theme_option( 'southern_facebook' );?>
                        <li><a href="<?php echo $southern_facebook; ?>" target="_blank" class="location"><?php svg_inline( dropdown_fb_svg() ); ?><span>Facebook Feed</span></a></li>
                    <?php endif;?>
                </ul>
            </div>
        </div>
    </div>
    <div class="services-btn" id="servicesBtn">
        <div class="btn-label">Services</div>
        <div class="btn-symbol"><?php svg_inline( services_btn_svg() ); ?></div>
    </div>
</div>
    <?php wp_nav_menu( array(
        'theme_location' => 'footer_menu',
        'container_class' => 'sidebar-menu-container position-absolute',
        'container_id'    => 'sidebarMenuContainer',
        'fallback_cb'    => true
    ) );?>
</div>
