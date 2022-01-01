<div class="careers">
    <div class="careers-inner">
        <div class="container">
            <div class="row">
                <header class="d-flex flex-column position-relative align-items-start justify-content-center">
                    <div class="careers-header">
                        <div class="text-start">
                            <?php if ( !empty( carbon_get_theme_option( 'career_section_heading' ) ) ):
                                $career_section_heading = carbon_get_theme_option( 'career_section_heading' );?>
                                <h2><?php echo $career_section_heading; ?></h2>
                            <?php endif; ?>
                        </div>
                        <div class="southern-careers-heading text-start text-sm-end">
                            <?php if ( !empty( carbon_get_theme_option( 'career_section_subheading' ) ) ):
                                $career_section_subheading = carbon_get_theme_option( 'career_section_subheading' );?>
                                <p class="text-uppercase"><?php echo $career_section_subheading; ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </header>
            </div>
        </div>

        <div class="career-growth-container">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-5 pe-md-5">
                        <div class="why-work-with-us">
                            <?php if ( !empty( carbon_get_theme_option( 'career_section_secondheading' ) ) ):
                                $career_section_secondheading = carbon_get_theme_option( 'career_section_secondheading' );?>
                                <h4 class="text-uppercase"><?php echo $career_section_secondheading; ?></h4>
                            <?php else: ?>
                                <h4 class="text-uppercase">Why work with us? </h4>
                            <?php endif; ?>
                            <?php if ( !empty( carbon_get_theme_option( 'career_section_descr' ) ) ):
                                $career_section_descr = carbon_get_theme_option( 'career_section_descr' );
                                echo $career_section_descr;
                            endif; ?>

                            <?php if ( !empty( carbon_get_theme_option( 'career_section_btn_label' ) ) ):
                            $career_section_btn_label = carbon_get_theme_option( 'career_section_btn_label' );?>
                                <div class="cta-button">
                                    <a class="ss-button" href="/career/#positionsContainer"><?php echo $career_section_btn_label; ?></a>
                                </div>
                            <?php else: ?>
                                <div class="cta-button">
                                    <a class="ss-button" href="/career/#positionsContainer">View Positions</a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-12 col-md-7 ps-md-5">
                        <div class="career-growth d-flex flex-column justify-content-center pt-5 ps-5 pe-5">
                            <div class="position-relative">
                                <div class="container">
                                    <div class="pt-5 pb-4 d-flex align-items-end justify-content-end">
                                        <div class="position-box">
                                            <span class="position-title">Grading Foreman</span>
                                            <span class="position-rate">$50hr</span>
                                        </div>
                                    </div>
                                    <div class="pb-4 d-flex align-items-start justify-content-start">
                                        <div class="position-box left">
                                            <span class="position-title">Class A CDL Driver</span>
                                            <span class="position-rate">$50hr</span>
                                        </div>
                                    </div>
                                    <div class="pt-5 pb-5 d-flex align-items-center justify-content-center">
                                        <div class="position-box">
                                            <span class="position-title">Seasoned Operator </span>
                                            <span class="position-rate">$50hr</span>
                                        </div>
                                    </div>
                                    <div class="mt-4 pt-5 pb-5 d-flex align-items-start justify-content-between">
                                        <div class="position-box left mt-n4">
                                            <span class="position-title">Laborer</span>
                                            <span class="position-rate">$50hr</span>
                                        </div>
                                        <div class="position-box">
                                            <span class="position-title">Starting Operator</span>
                                            <span class="position-rate">$50hr</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php if( is_front_page() ): ?>
        <div class="career-team">
            <div class="container">
                <div class="row">
                    <h3><span>Our</span> team</h3>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
