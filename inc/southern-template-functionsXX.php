<?php
/**
 * Southern hooks
 *
 * @package southernsiteworks
 */

if ( ! function_exists( 'southernsiteworks_preloader' ) ) {
	/**
	 * The video preloader
	 */
	function southernsiteworks_preloader() {
        if ( !empty( carbon_get_theme_option( 'crb_show_preloader' ) ) ):
            $preloader_video_id = carbon_get_theme_option( 'crb_video_preloader' );
                //foreach( $media_gallery as $preloader_video ){
                    $preloader_url = wp_get_attachment_url( $preloader_video_id );
                //} ?>
            <div class="loader">
                <div class="preloader-video">
                    <video width="600" height="600" autoplay muted>
                      <source src="<?php echo $preloader_url ?>" type="video/mp4">
                    Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        <?php endif;
	}
}

if ( ! function_exists( 'southernsiteworks_skip_links' ) ) {
	/**
	 * Skip links
	 *
	 * @since  1.0.0
	 * @return void
	 */
	function southernsiteworks_skip_links() {
		?>
		<a class="skip-link screen-reader-text" href="#site-navigation"><?php esc_attr_e( 'Skip to navigation', 'THEME_TEXTDOMAIN' ); ?></a>
		<a class="skip-link screen-reader-text" href="#content"><?php esc_attr_e( 'Skip to content', 'THEME_TEXTDOMAIN' ); ?></a>
		<?php
	}
}


if ( ! function_exists( 'southernsiteworks_header_branding' ) ) {
	/**
	 * Main header
	 *
	 * @since  1.0.0
	 * @return void
	 */
	function southernsiteworks_header_branding() {
		?>
        <div class="container g-0">
            <div class="row">
                <div class="header-wrapper position-relative">
                    <div class="col d-flex flex-wrap justify-content-center align-items-center">
                        <div class="ss-logo-wrapper position-absolute">
                            <div class="ss-logo position-relative">
                                <?php
                                if ( !empty( carbon_get_theme_option( 'logo' ) ) ):
                                    $southern_mainlogo = carbon_get_theme_option( 'logo' ); ?>
                                    <a href="<?php echo get_home_url(); ?>"><img src="<?php echo $southern_mainlogo ?>" alt="Southern siteworks logo" width="290" height="70"></a>
                                <?php else: ?>
                                    <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/theme/img/ss-main-logo.svg" alt="Southern siteworks logo" width="290" height="70"></a>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                    <div class="header-main d-flex flex-wrap justify-content-center position-relative">
                        <div class="col d-flex flex-wrap justify-content-start">
                            <div class="col-4 col-sm-4 col-md-4 col-lg-3 col-xl-3 col-xxl-3 d-flex align-items-center justify-content-center menu-bar">
                                <a data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" class="d-flex flex-column justify-content-center justify-content-sm-center justify-content-md-start justify-content-lg-start justify-content-xl-center justify-content-xxl-center align-items-center w-100" href="#"><span class="d-md-none d-none d-xl-flex d-xxl-flex">Menu</span><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/theme/img/menu-hamburger.svg" alt="" width="48" height="48"></a>
                            </div>

                            <div class="col-9 align-items-center justify-content-start ps-4 menu-translate d-none d-xl-flex d-xxl-flex">
                                <div class="col-5 h-100">
                                    <a class="d-flex align-items-center h-100" href="#"><svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M42.8204 17.28C42.8204 17.28 42.8204 17.28 42.8204 17.18C41.4112 13.3325 38.8542 10.0106 35.4954 7.66373C32.1365 5.31689 28.1379 4.05835 24.0404 4.05835C19.9429 4.05835 15.9443 5.31689 12.5854 7.66373C9.22656 10.0106 6.66959 13.3325 5.26039 17.18C5.26039 17.18 5.26039 17.18 5.26039 17.28C3.68664 21.6218 3.68664 26.3782 5.26039 30.72C5.26039 30.72 5.26039 30.72 5.26039 30.82C6.66959 34.6676 9.22656 37.9894 12.5854 40.3363C15.9443 42.6831 19.9429 43.9417 24.0404 43.9417C28.1379 43.9417 32.1365 42.6831 35.4954 40.3363C38.8542 37.9894 41.4112 34.6676 42.8204 30.82C42.8204 30.82 42.8204 30.82 42.8204 30.72C44.3941 26.3782 44.3941 21.6218 42.8204 17.28ZM8.52039 28C7.82685 25.3784 7.82685 22.6216 8.52039 20H12.2404C11.9205 22.6571 11.9205 25.3429 12.2404 28H8.52039ZM10.1604 32H12.9604C13.4298 33.7837 14.1008 35.5081 14.9604 37.14C12.999 35.8039 11.3594 34.0481 10.1604 32ZM12.9604 16H10.1604C11.3421 13.9582 12.9608 12.2029 14.9004 10.86C14.0615 12.4945 13.4107 14.2188 12.9604 16ZM22.0004 39.4C19.5439 37.5974 17.8187 34.9705 17.1404 32H22.0004V39.4ZM22.0004 28H16.2804C15.9072 25.3464 15.9072 22.6536 16.2804 20H22.0004V28ZM22.0004 16H17.1404C17.8187 13.0295 19.5439 10.4026 22.0004 8.60001V16ZM37.8404 16H35.0404C34.571 14.2163 33.9 12.4919 33.0404 10.86C35.0018 12.1961 36.6414 13.9519 37.8404 16ZM26.0004 8.60001C28.4569 10.4026 30.1821 13.0295 30.8604 16H26.0004V8.60001ZM26.0004 39.4V32H30.8604C30.1821 34.9705 28.4569 37.5974 26.0004 39.4ZM31.7204 28H26.0004V20H31.7204C32.0936 22.6536 32.0936 25.3464 31.7204 28ZM33.1004 37.14C33.96 35.5081 34.631 33.7837 35.1004 32H37.9004C36.7014 34.0481 35.0618 35.8039 33.1004 37.14ZM39.4804 28H35.7604C35.923 26.6729 36.0032 25.337 36.0004 24C36.0026 22.663 35.9224 21.3271 35.7604 20H39.4804C40.1739 22.6216 40.1739 25.3784 39.4804 28Z" fill="#1B5FBA"/>
                                    </svg><span class="hola ms-2 position-relative">Hola</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col d-flex flex-wrap justify-content-center align-items-center"></div>
                        <div class="col d-flex flex-wrap justify-content-end">
                            <div class="col-xl-6 col-xxl-7 menu-phone align-items-center justify-content-center d-none d-xl-flex d-xxl-flex">
                                <?php if ( !empty( carbon_get_theme_option( 'southern_phone' ) ) ):
                                $southern_phone = carbon_get_theme_option( 'southern_phone' );?>
                                    <a class="telephone" href="tel:<?php echo $southern_phone; ?>"><svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M37.995 40C20.9317 40.0242 7.98176 26.919 8.00002 10.005C8.00002 8.90045 8.89545 8 10 8H15.2787C16.2699 8 17.1119 8.72826 17.2574 9.70866C17.6062 12.0584 18.2903 14.3459 19.289 16.5014L19.4945 16.945C19.7803 17.5618 19.5866 18.2947 19.0334 18.6897C17.3986 19.8572 16.7738 22.2071 18.0474 24.0407C19.6456 26.3417 21.6601 28.3558 23.9605 29.9532C25.794 31.2264 28.1436 30.6018 29.311 28.9673C29.7063 28.4138 30.4396 28.22 31.0568 28.5059L31.4984 28.7104C33.654 29.709 35.9417 30.3932 38.2917 30.7419C39.2721 30.8874 40 31.7294 40 32.7205V38C40 39.1045 39.1024 40 37.9978 40L37.995 40Z" fill="#002145"/></svg><span><?php echo $southern_phone; ?></span></a>
                                <?php endif;?>
                            </div>
                            <div class="col-4 col-sm-4 col-md-8 col-lg-6 col-xl-6 col-xxl-5 d-flex align-items-center justify-content-center">
                                <div class="col menu-contact-btn d-none d-md-flex d-lg-flex d-xl-flex d-xxl-flex align-items-center justify-content-center h-100 position-relative"><a class="d-flex flex-column align-items-center justify-content-center w-100 h-100 position-absolute" href="#">Facebook</a></div>
                                <div class="d-flex d-sm-flex d-md-none d-lg-none d-xxl-none d-xl-none align-items-center justify-content-center mobile-phone w-100 h-100">
                                    <?php if ( !empty( carbon_get_theme_option( 'southern_phone' ) ) ):
                                    $southern_phone = carbon_get_theme_option( 'southern_phone' );?>
                                        <a class="d-flex flex-column align-items-center justify-content-center w-100 h-100 telephone" href="tel:<?php echo $southern_phone; ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/theme/img/mobile-phone-icon.svg" alt="" width="24" height="24"></a>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse mt-3 mt-md-n3 main-dropdown-menu" id="navbarToggleExternalContent">
                    <div class="col-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 bg-blue p-5 p-md-3 p-lg-3 p-xl-4 p-xxl-5 notch-bottom-only">
                        <?php wp_nav_menu( array('theme_location' => 'primary_menu', 'container_class' => 'menu-primary-menu-container pt-3 pb-4') );?>
                        <div class="header-contact-details pt-3 pb-3">
                            <ul>
                                <?php if ( !empty( carbon_get_theme_option( 'southern_phone' ) ) ):
                                $southern_phone = carbon_get_theme_option( 'southern_phone' );?>
                                    <li><a class="telephone" href="tel:<?php echo $southern_phone; ?>"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.165 19.3333C8.21149 19.3475 0.657332 11.7028 0.66798 1.83628C0.66798 1.19195 1.19031 0.666687 1.83465 0.666687H4.9139C5.49206 0.666687 5.98322 1.0915 6.06812 1.6634C6.2716 3.03408 6.67067 4.36848 7.2532 5.62584L7.37309 5.88461C7.53979 6.24441 7.4268 6.67192 7.10409 6.90237C6.15048 7.58338 5.78604 8.95417 6.52895 10.0238C7.46121 11.366 8.63636 12.5409 9.97828 13.4727C11.0478 14.2154 12.4184 13.851 13.0994 12.8976C13.33 12.5747 13.7577 12.4617 14.1178 12.6285L14.3753 12.7478C15.6328 13.3303 16.9673 13.7294 18.3381 13.9328C18.91 14.0177 19.3346 14.5088 19.3346 15.087V18.1667C19.3346 18.811 18.811 19.3333 18.1667 19.3333L18.165 19.3333Z" fill="white" fill-opacity="0.8"/>
                                    </svg><span><?php echo $southern_phone; ?></span></a></li>
                                <?php endif;?>

                                <?php if ( !empty( carbon_get_theme_option( 'southern_email' ) ) ):
                                $southern_email = carbon_get_theme_option( 'southern_email' );?>
                                    <li><a class="email" href="mailto:<?php echo antispambot($southern_email); ?>"><svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M23.332 23.3334H4.66536C3.3767 23.3334 2.33203 22.2887 2.33203 21V6.89852C2.38641 5.64966 3.41532 4.66551 4.66536 4.66669H23.332C24.6207 4.66669 25.6654 5.71136 25.6654 7.00002V21C25.6654 22.2887 24.6207 23.3334 23.332 23.3334ZM4.66536 9.17936V21H23.332V9.17936L13.9987 15.4L4.66536 9.17936ZM5.5987 7.00002L13.9987 12.6L22.3987 7.00002H5.5987Z" fill="white" fill-opacity="0.8"/>
                                    </svg><span><?php echo antispambot($southern_email); ?></span></a></li>
                                <?php endif;?>

                                <?php if ( !empty( carbon_get_theme_option( 'southern_location' ) ) ):
                                $southern_location = carbon_get_theme_option( 'southern_location' );?>
                                    <li><a href="#" class="location"><svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.9987 24.5C12.5251 23.2431 11.1592 21.8651 9.91537 20.3805C8.0487 18.151 5.83203 14.8307 5.83203 11.6667C5.83038 8.36213 7.82032 5.38229 10.8733 4.11763C13.9262 2.85297 17.4404 3.55278 19.776 5.8905C21.3119 7.41954 22.1723 9.49945 22.1654 11.6667C22.1654 14.8307 19.9487 18.151 18.082 20.3805C16.8382 21.8651 15.4723 23.2431 13.9987 24.5ZM13.9987 5.83333C10.7786 5.83719 8.16922 8.4466 8.16537 11.6667C8.16537 13.027 8.7802 15.3825 11.7062 18.8837C12.4274 19.7447 13.1925 20.5679 13.9987 21.35C14.8049 20.5689 15.5705 19.7468 16.2924 18.8872C19.2172 15.3813 19.832 13.0258 19.832 11.6667C19.8282 8.4466 17.2188 5.83719 13.9987 5.83333ZM13.9987 15.1667C12.0657 15.1667 10.4987 13.5997 10.4987 11.6667C10.4987 9.73367 12.0657 8.16666 13.9987 8.16666C15.9317 8.16666 17.4987 9.73367 17.4987 11.6667C17.4987 12.5949 17.13 13.4852 16.4736 14.1415C15.8172 14.7979 14.927 15.1667 13.9987 15.1667Z" fill="white" fill-opacity="0.8"/>
                                    </svg><span><?php echo $southern_location; ?></span></a></li>
                                <?php endif;?>
                            </ul>
                        </div>
                        <div class="header-social-details pt-3 pb-3">
                            <ul>
                                <?php if ( !empty( carbon_get_theme_option( 'southern_facebook' ) ) ):
                                $southern_facebook = carbon_get_theme_option( 'southern_facebook' );?>
                                    <li><a href="<?php echo $southern_facebook; ?>" target="_blank" class="location"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 0.5H20C25.2467 0.5 29.5 4.75329 29.5 10V29.5H10C4.75329 29.5 0.5 25.2467 0.5 20V0.5Z" fill="white" stroke="#1B5FBA"/><path d="M19.9987 6.66666H17.4987C16.3936 6.66666 15.3338 7.10564 14.5524 7.88704C13.771 8.66845 13.332 9.72825 13.332 10.8333V13.3333H10.832V16.6667H13.332V23.3333H16.6654V16.6667H19.1654L19.9987 13.3333H16.6654V10.8333C16.6654 10.6123 16.7532 10.4003 16.9094 10.2441C17.0657 10.0878 17.2777 9.99999 17.4987 9.99999H19.9987V6.66666Z" fill="#1B5FBA"/>
                                    </svg><span>Facebook Feed</span></a></li>
                                <?php endif;?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		<?php
	}
}

if ( ! function_exists( 'southernsiteworks_footer_contact' ) ) {
	/**
	 * Footer Ninja Contact Form
	*/
    function southernsiteworks_footer_contact() { ?>

        <div class="footer-contact">
            <div class="container">
                <div class="row justify-content-md-center p-1 m-1">
                    <div class="col-xxl-10 col-sm-12 southern-ninjaForm position-relative">
                        <div class="triangle-topleft"></div>
                        <div class="triangle-topright"></div>
                        <?php echo do_shortcode('[ninja_form id=1]'); ?>
                        <div class="triangle-bottomleft"></div>
                        <div class="triangle-bottomright"></div>
                    </div>
                </div>
            </div>
        </div>
    <?php }
}




if ( ! function_exists( 'southernsiteworks_footer_widgets' ) ) {
	/**
	 * Footer Widgets (Map + Contact)
	*/
    function southernsiteworks_footer_widgets() { ?>
        <div class="container-fluid g-0">
            <div class="row g-0">
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <?php if ( !empty( carbon_get_theme_option( 'southern_googlemap' ) ) ):
                        $southern_googlemap = carbon_get_theme_option( 'southern_googlemap' );
                        printf( '%s', $southern_googlemap);
                    endif;?>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-12 pt-5 pe-5 pb-5 pl-80 order-first order-md-last">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <?php
                                if ( !empty( carbon_get_theme_option( 'logo' ) ) ):
                                    $southern_footerlogo = carbon_get_theme_option( 'logo' ); ?>
                                    <a href="<?php echo get_home_url(); ?>"><img src="<?php echo $southern_footerlogo ?>" alt="Souther siteworks Footer logo" width="290" height="70"></a>
                                <?php else: ?>
                                    <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/theme/img/footer-ss-logo.svg" alt="Souther siteworks Footer logo" width="290" height="70"></a>
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="row pt-5">
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 footer-widget">
                                <h4 class="text-uppercase mb-0">Services</h4>
                                <?php wp_nav_menu( array('theme_location' => 'footer_menu') );?>
                            </div>
                            <div class="col-xl-8 col-lg-6 col-md-6 col-sm-12 footer-widget">
                                <h4 class="text-uppercase mb-0">Contacts</h4>
                                <ul>
                                    <?php if ( !empty( carbon_get_theme_option( 'southern_phone' ) ) ):
                                    $southern_phone = carbon_get_theme_option( 'southern_phone' );?>
                                        <li><a class="telephone" href="tel:<?php echo $southern_phone; ?>"><svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M37.995 40C20.9317 40.0242 7.98176 26.919 8.00002 10.005C8.00002 8.90045 8.89545 8 10 8H15.2787C16.2699 8 17.1119 8.72826 17.2574 9.70866C17.6062 12.0584 18.2903 14.3459 19.289 16.5014L19.4945 16.945C19.7803 17.5618 19.5866 18.2947 19.0334 18.6897C17.3986 19.8572 16.7738 22.2071 18.0474 24.0407C19.6456 26.3417 21.6601 28.3558 23.9605 29.9532C25.794 31.2264 28.1436 30.6018 29.311 28.9673C29.7063 28.4138 30.4396 28.22 31.0568 28.5059L31.4984 28.7104C33.654 29.709 35.9417 30.3932 38.2917 30.7419C39.2721 30.8874 40 31.7294 40 32.7205V38C40 39.1045 39.1024 40 37.9978 40L37.995 40Z" fill="#002145"/></svg><span><?php echo $southern_phone; ?></span></a></li>
                                    <?php endif;?>

                                    <?php if ( !empty( carbon_get_theme_option( 'southern_email' ) ) ):
                                    $southern_email = carbon_get_theme_option( 'southern_email' );?>
                                        <li><a class="email" href="mailto:<?php echo antispambot($southern_email); ?>"><svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M40 40H8C5.79086 40 4 38.2091 4 36V11.826C4.09322 9.6851 5.85707 7.99798 8 8H40C42.2091 8 44 9.79086 44 12V36C44 38.2091 42.2091 40 40 40ZM8 15.736V36H40V15.736L24 26.4L8 15.736ZM9.6 12L24 21.6L38.4 12H9.6Z" fill="#002145"/>
                                        </svg><span><?php echo antispambot($southern_email); ?></span></a></li>
                                    <?php endif;?>

                                    <?php if ( !empty( carbon_get_theme_option( 'southern_location' ) ) ):
                                    $southern_location = carbon_get_theme_option( 'southern_location' );?>
                                        <li><a href="#" class="location"><svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M24 42.0001C21.4739 39.8454 19.1324 37.4831 17 34.9381C13.8 31.1161 10 25.4241 10 20.0001C9.99717 14.3352 13.4085 9.22688 18.6421 7.0589C23.8758 4.89091 29.9001 6.09058 33.904 10.0981C36.5369 12.7193 38.0118 16.2849 38.0001 20.0001C38.0001 25.4241 34.2 31.1161 31 34.9381C28.8676 37.4831 26.5261 39.8454 24 42.0001ZM24 10.0001C18.4799 10.0067 14.0066 14.48 14 20.0001C14 22.3321 15.054 26.3701 20.07 32.3721C21.3063 33.8482 22.618 35.2594 24 36.6001C25.3821 35.261 26.6945 33.8518 27.932 32.3781C32.946 26.3681 34 22.3301 34 20.0001C33.9934 14.48 29.5201 10.0067 24 10.0001ZM24 26.0001C20.6863 26.0001 18 23.3138 18 20.0001C18 16.6864 20.6863 14.0001 24 14.0001C27.3137 14.0001 30 16.6864 30 20.0001C30 21.5914 29.3679 23.1175 28.2426 24.2427C27.1174 25.368 25.5913 26.0001 24 26.0001Z" fill="#002145"/>
                                        </svg><span><?php echo $southern_location; ?></span></a></li>
                                    <?php endif;?>
                                </ul>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    <?php }
}

if ( ! function_exists( 'southernsiteworks_footer_copyright' ) ) {
	/**
	 * Footer Copyright
	*/
    function southernsiteworks_footer_copyright() { ?>
        <div class="copyright py-1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-sm-12">
                        <div class="copyright-txt text-center">
                                <?php $site_name = get_bloginfo( 'name' );
                                $current_year = date('Y');
                                printf( '&copy; All Rights Reserved. %s %s', $site_name, $current_year); ?>
                        </div>
                    </div>
                    <div class="col-xl-6 col-sm-12">
                        <div class="text-center"><span class="credit-txt d-none d-md-block d-lg-block d-xl-block">Design & Marketed by</span> <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/theme/img/footer-hb-logo.svg" alt="" width="105" height="30"></div>
                    </div>
                </div>
            </div>
        </div>
    <?php }
}
