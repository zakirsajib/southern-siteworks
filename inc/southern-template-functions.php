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
        if ( !empty( carbon_get_theme_option( 'show_preloader' ) ) ):
            $preloader_video_id = carbon_get_theme_option( 'video_preloader' );
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
        <div class="container">
            <div class="row">
                <div class="header-wrapper position-relative g-0">
                    <div class="col d-flex flex-wrap justify-content-center align-items-center">
                        <div class="ss-logo-wrapper position-absolute">
                            <div class="ss-logo position-relative">
                                <?php
                                if ( !empty( carbon_get_theme_option( 'logo' ) ) ):
                                    $southern_mainlogo = carbon_get_theme_option( 'logo' ); ?>
                                    <a href="<?php echo get_home_url(); ?>"><img class="img-fluid" src="<?php echo $southern_mainlogo ?>" alt="Southern siteworks logo" width="290" height="70"></a>
                                <?php else: ?>
                                    <a href="<?php echo get_home_url(); ?>"><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri() ?>/assets/theme/img/ss-main-logo.svg" alt="Southern siteworks logo" width="290" height="70"></a>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                    <div class="header-main d-flex flex-wrap justify-content-center position-relative">
                        <div class="col d-flex flex-wrap justify-content-start">
                            <div class="col-4 col-sm-4 col-md-4 col-lg-3 col-xl-3 col-xxl-3 d-flex align-items-center justify-content-center menu-bar">
                                <a data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" class="d-flex flex-column justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center justify-content-xxl-center align-items-center w-100" href="#"><span class="d-none d-md-flex">Menu</span><?php svg_inline( menu_hamburger() ); ?></a>
                            </div>

                            <div class="col-9 align-items-center justify-content-start ps-4 menu-translate d-none d-xl-flex d-xxl-flex">
                                <div class="col-5 h-100 position-relative">

									<a
										class="hola align-items-center h-100 nturl notranslate button-en"
										href="#"
										title="English"
										onclick="doGTranslate('en|en');return false;">
										<?php svg_inline( globe_svg() ); ?><span class="ms-2 position-relative">Hello</span>
									</a>
									<a
										class="hola align-items-center h-100 nturl notranslate button-es"
										href="#"
										title="Spansih"
										onclick="doGTranslate('en|es');return false;">
										<?php svg_inline( globe_svg() ); ?><span class="ms-2 position-relative">Hola</span>
									</a>


                                </div>
                            </div>
                        </div>
                        <div class="col d-flex flex-wrap justify-content-center align-items-center"></div>
                        <div class="col d-flex flex-wrap justify-content-end">
                            <div class="col-xl-6 col-xxl-7 menu-phone align-items-center justify-content-center d-none d-xl-flex d-xxl-flex">
                                <?php if ( !empty( carbon_get_theme_option( 'southern_phone' ) ) ):
                                $southern_phone = carbon_get_theme_option( 'southern_phone' );?>
                                    <a class="telephone" href="tel:<?php echo $southern_phone; ?>"><?php svg_inline( mobile_svg() ); ?><span><?php echo $southern_phone; ?></span></a>
                                <?php endif;?>
                            </div>

							<?php if ( !empty( carbon_get_theme_option( 'southern_social_label' ) ) ):
							$southern_social_label = carbon_get_theme_option( 'southern_social_label' );

							if ( !empty( carbon_get_theme_option( 'southern_social_url' ) ) ):
							$southern_social_url = carbon_get_theme_option( 'southern_social_url' );

							endif; endif;?>


                            <div class="col-4 col-sm-4 col-md-8 col-lg-6 col-xl-6 col-xxl-5 d-flex align-items-center justify-content-center">
                                <div class="col menu-contact-btn d-none d-md-flex d-lg-flex d-xl-flex d-xxl-flex align-items-center justify-content-center h-100 position-relative"><a class="d-flex flex-column align-items-center justify-content-center w-100 h-100 position-absolute" href="<?php echo $southern_social_url; ?>" target="_blank"><?php echo $southern_social_label; ?></a></div>
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
                <div class="collapse mt-lg-3 pt-lg-5 mt-md-n3  g-0 main-dropdown-menu" id="navbarToggleExternalContent">
                    <div class="pt-2 pb-2 pb-md-3 pb-lg-3 pb-xl-4 pb-xxl-5 pt-md-3 pt-lg-3 pt-xl-4 pt-xxl-5 col-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 col-xsl-2 bg-blue notch-bottom-only">
                    <!-- <div class="col-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 bg-blue p-5 p-md-3 p-lg-3 p-xl-4 p-xxl-5 notch-bottom-only"> -->
                        <?php wp_nav_menu( array('theme_location' => 'primary_menu', 'container_class' => 'menu-primary-menu-container pt-3 pt-sm-3 pt-md-4 pt-lg-5 pt-xl-5 pt-xxl-5 pb-2') );?>
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
                                <?php /*
								if ( !empty( carbon_get_theme_option( 'southern_social_label' ) ) ):
                                $southern_social_label = carbon_get_theme_option( 'southern_social_label' );

								if ( !empty( carbon_get_theme_option( 'southern_social_url' ) ) ):
                                $southern_social_url = carbon_get_theme_option( 'southern_social_url' ); */ ?>

                                    <li><a href="<?php echo $southern_social_url; ?>" target="_blank" class="fb"><?php svg_inline( dropdown_fb_svg() ); ?><span><?php echo $southern_social_label; ?></span></a></li>
                                <?php /* endif; endif; */ ?>
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
        <div class="container-fluid g-0 m-n1">
            <div class="row g-0">
                <div class="col-lg-6 col-md-4 col-sm-12">
                    <div id="map"></div>
                </div>
                <div class="col-lg-6 col-md-8 col-sm-12 pt-5 pb-5 pe-4 ps-4 pt-sm-5 p5-sm-3 pe-sm-3 ps-sm-3 ps-md-5 pt-lg-5 pe-lg-2 ps-md-6 ps-lg-6 order-first order-md-last">
                    <!-- <div class="container"> -->
                        <div class="row">
                            <div class="col footer-logo">
                                <?php
                                if ( !empty( carbon_get_theme_option( 'logo' ) ) ):
                                    $southern_footerlogo = carbon_get_theme_option( 'logo' ); ?>
                                    <a href="<?php echo get_home_url(); ?>"><img class="img-fluid" src="<?php echo $southern_footerlogo ?>" alt="Souther siteworks Footer logo" width="290" height="70"></a>
                                <?php else: ?>
                                    <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/theme/img/footer-ss-logo.svg" alt="Souther siteworks Footer logo" width="290" height="70"></a>
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="row pt-5">
                            <div class="col-md-4 col-sm-12 footer-widget">
                                <h4 class="text-uppercase mb-0">Services</h4>
                                <?php wp_nav_menu( array('theme_location' => 'footer_menu') );?>
                            </div>
                            <div class="col-md-8 col-sm-12 footer-widget">
                                <h4 class="text-uppercase mb-0">Contacts</h4>
                                <ul>
                                    <?php if ( !empty( carbon_get_theme_option( 'southern_phone' ) ) ):
                                    $southern_phone = carbon_get_theme_option( 'southern_phone' );?>
                                        <li><a class="telephone" href="tel:<?php echo $southern_phone; ?>"><?php svg_inline( mobile_svg() ); ?><span><?php echo $southern_phone; ?></span></a></li>
                                    <?php endif;?>

                                    <?php if ( !empty( carbon_get_theme_option( 'southern_email' ) ) ):
                                    $southern_email = carbon_get_theme_option( 'southern_email' );?>
                                        <li><a class="email" href="mailto:<?php echo antispambot($southern_email); ?>"><?php svg_inline( email_svg() ); ?><span><?php echo antispambot($southern_email); ?></span></a></li>
                                    <?php endif;?>

                                    <?php if ( !empty( carbon_get_theme_option( 'southern_location' ) ) ):
                                    $southern_location = carbon_get_theme_option( 'southern_location' );?>
                                        <li><a href="#" class="location"><?php svg_inline( location_svg() ); ?><span><?php echo $southern_location; ?></span></a></li>
                                    <?php endif;?>
                                </ul>
                            </div>
                        </div>
                <!-- </div> -->
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
                        <div class="text-center"><span class="credit-txt d-none d-md-block d-lg-block d-xl-block">Design & Marketed by</span> <a href="http://harbingermarketing.com/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/theme/img/footer-hb-logo.svg" alt="" width="105" height="30"></a></div>
                    </div>
                </div>
            </div>
        </div>
    <?php }
}



if ( ! function_exists( 'southernsiteworks_gtranslate' ) ) {
	/**
	 * GTranslate JS Code ( We don't need GTranslate Plugin anymore! )
	*/
    function southernsiteworks_gtranslate() { ?>

		<style>#goog-gt-tt{display:none!important;}.goog-te-banner-frame{display:none!important;}.goog-te-menu-value:hover{text-decoration:none!important;}.goog-text-highlight{background-color:transparent!important;box-shadow:none!important;}body{top:0!important;}#google_translate_element2{display:none!important;}</style>
	<div id="google_translate_element2"></div>
	<script>function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'en',autoDisplay: false}, 'google_translate_element2');}if(!window.gt_translate_script){window.gt_translate_script=document.createElement('script');gt_translate_script.src='https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2';document.body.appendChild(gt_translate_script);}</script>
	<script>
		function GTranslateGetCurrentLang() {var keyValue = document['cookie'].match('(^|;) ?googtrans=([^;]*)(;|$)');return keyValue ? keyValue[2].split('/')[2] : null;}
		function GTranslateFireEvent(element,event){try{if(document.createEventObject){var evt=document.createEventObject();element.fireEvent('on'+event,evt)}else{var evt=document.createEvent('HTMLEvents');evt.initEvent(event,true,true);element.dispatchEvent(evt)}}catch(e){}}
		function doGTranslate(lang_pair){if(lang_pair.value)lang_pair=lang_pair.value;if(lang_pair=='')return;var lang=lang_pair.split('|')[1];if(GTranslateGetCurrentLang() == null && lang == lang_pair.split('|')[0])return;if(typeof ga=='function'){ga('send', 'event', 'GTranslate', lang, location.hostname+location.pathname+location.search);}var teCombo;var sel=document.getElementsByTagName('select');for(var i=0;i<sel.length;i++)if(sel[i].className.indexOf('goog-te-combo')!=-1){teCombo=sel[i];break;}if(document.getElementById('google_translate_element2')==null||document.getElementById('google_translate_element2').innerHTML.length==0||teCombo.length==0||teCombo.innerHTML.length==0){setTimeout(function(){doGTranslate(lang_pair)},500)}else{teCombo.value=lang;GTranslateFireEvent(teCombo,'change');GTranslateFireEvent(teCombo,'change')}}
	</script>
	<?php }
}



if ( ! function_exists( 'southernsiteworks_background_overlay' ) ) {
	/**
	 * Background  Overlay while services button is clicked.
	*/
    function southernsiteworks_background_overlay() { ?>
		<div class="pushbar_overlay"></div>
	<?php }
}


/**
 * Menu Hamburger SVG Inline function
*/

function menu_hamburger () {
	return get_stylesheet_directory_uri(). '/assets/theme/img/menu-hamburger.svg';
}

/**
 * Location SVG Inline function
*/

function location_svg () {
	return get_stylesheet_directory_uri(). '/assets/theme/img/location.svg';
}

/**
 * Menu Dropdown Location SVG Inline function
*/

function dropdown_location_svg () {
	return get_stylesheet_directory_uri(). '/assets/theme/img/dropdown-location.svg';
}

/**
 * Menu FB Feed SVG Inline function
*/

function dropdown_fb_svg () {
	return get_stylesheet_directory_uri(). '/assets/theme/img/dropdown-fb.svg';
}

/**
 * Menu Email SVG Inline function
*/

function dropdown_email_svg () {
	return get_stylesheet_directory_uri(). '/assets/theme/img/dropdown-email.svg';
}


/**
 * Menu Phone SVG Inline function
*/

function dropdown_phone_svg () {
	return get_stylesheet_directory_uri(). '/assets/theme/img/dropdown-phone.svg';
}


/**
 * Email SVG Inline function
*/

function email_svg () {
	return get_stylesheet_directory_uri(). '/assets/theme/img/email-icon.svg';
}


/**
 * Mobile SVG Inline function
*/

function mobile_svg () {
	return get_stylesheet_directory_uri(). '/assets/theme/img/phone-icon.svg';
}

/**
 * Globe SVG Inline function
*/

function globe_svg () {
	return get_stylesheet_directory_uri(). '/assets/theme/img/globe-hola.svg';
}

/**
 * Close button on Modal SVG Inline function
*/

function modal_close_svg () {
	return get_stylesheet_directory_uri(). '/assets/theme/img/modal-close.svg';
}

/**
 * Service button on Services sidebar menu SVG Inline function
*/
function services_btn_svg() {
	return get_stylesheet_directory_uri(). '/assets/theme/img/service-btn.svg';
}

/**
 * Play button on Services sidebar menu SVG Inline function
*/
function play_btn_svg() {
	return get_stylesheet_directory_uri(). '/assets/theme/img/play.svg';
}


/**
* first word extracting from string
*/

function stringFirstExtract( $string ) {
	$first_string = explode(' ', trim($string ))[0];
	return $first_string ;
}

/**
* Break first word from string
*/

function stringFirstWordBreak( $string ) {
	return str_replace( " ", "<br>", $string );
}


// function load_project_cat_filter() {
//
// 	//$term_id = (isset($_POST["cat"])) ? $_POST["cat"] : 0;
//
//     $term_id = $_POST[ 'cat' ];
//
// 	echo '<div class="xx">' .$term_id. '</div>';
//
//
//
//
// 	//echo 'Term ID' .$results;
//
// 	//get_template_part( 'inc/content' ,'projects' );
// 	//update_option( 'project_term_new_id', $results );
//
//     wp_die();
// }
