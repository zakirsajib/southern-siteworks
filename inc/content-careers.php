<div class="careers">
    <div class="careers-inner">
        <div class="container">
            <div class="row">
                <header class="d-flex flex-column position-relative align-items-start justify-content-center">
                    <div class="careers-header">
                        <div class="text-start">
                            <?php if ( !empty( carbon_get_theme_option( 'career_section_heading' ) ) ):
                                $career_section_heading = carbon_get_theme_option( 'career_section_heading' );

                                $first_string = stringFirstExtract( $career_section_heading ); ?>
                                <h2>
                                    <?php echo '<span> '. $first_string.' </span>' . trim( strstr($career_section_heading," ") );?>
                                </h2>

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
                    <div class="col-12 col-md-5 tabletMode">
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
                                    <?php if( is_front_page() ): ?>
                                        <a class="ss-button" href="/career/#positionsContainer"><?php echo $career_section_btn_label; ?></a>
                                    <?php else: ?>
                                        <a class="ss-button" href="#positionsContainer"><?php echo $career_section_btn_label; ?></a>
                                    <?php endif; ?>
                                </div>
                            <?php else: ?>
                                <div class="cta-button">
                                    <a class="ss-button" href="/career/#positionsContainer">View Positions</a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-12 col-md-7 ps-0 pe-0 tabletMode">
                        <!-- <div class="desktopMode"> -->
                            <div class="career-growth d-none d-sm-flex d-flex flex-column justify-content-center pt-5 ps-0 pe-0 ps-md-5 pe-md-5">
                                <div class="position-relative">
                                    <div class="container">
                                        <div class="pt-5 pb-4 d-flex align-items-end justify-content-end align-md-items-center justify-md-content-center">
                                            <div class="position-box">
                                                <span class="position-title"><?php echo carbon_get_theme_option( 'career_position_title_one' ); ?></span>
                                                <span class="position-rate"><?php echo carbon_get_theme_option( 'career_position_rate_one' ); ?></span>
                                            </div>
                                        </div>
                                        <div class="pb-4 d-flex align-items-start justify-content-start align-md-items-center justify-md-content-center">
                                            <div class="position-box left">
                                                <span class="position-title"><?php echo carbon_get_theme_option( 'career_position_title_two' ); ?></span>
                                                <span class="position-rate"><?php echo carbon_get_theme_option( 'career_position_rate_two' ); ?></span>
                                            </div>
                                        </div>
                                        <div class="pt-5 pb-5 d-flex align-items-center justify-content-center">
                                            <div class="position-box">
                                                <span class="position-title"><?php echo carbon_get_theme_option( 'career_position_title_three' ); ?></span>
                                                <span class="position-rate"><?php echo carbon_get_theme_option( 'career_position_rate_three' ); ?></span>
                                            </div>
                                        </div>
                                        <div class="mt-4 pt-5 pb-5 d-flex align-items-start justify-content-between align-md-items-center justify-md-content-center">
                                            <div class="position-box left mt-n4">
                                                <span class="position-title"><?php echo carbon_get_theme_option( 'career_position_title_four' ); ?></span>
                                                <span class="position-rate"><?php echo carbon_get_theme_option( 'career_position_rate_four' ); ?></span>
                                            </div>
                                            <div class="position-box">
                                                <span class="position-title"><?php echo carbon_get_theme_option( 'career_position_title_five' ); ?></span>
                                                <span class="position-rate"><?php echo carbon_get_theme_option( 'career_position_rate_five' ); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- </div> -->

                        <div class="mobileMode">
                            <div class="d-sm-none career-growth d-flex flex-column justify-content-center pt-5 ps-0 pe-0 ps-md-5 pe-md-5">
                                <div class="position-relative mobile-horizontal-scroll-container">
                                    <div class="container d-flex flex-row mobile-horizontal-scroll">
                                        <div class="col-12 me-5 pt-5 pb-5 d-flex align-items-center justify-content-center">
                                            <div class="position-box">
                                                <span class="position-title"><?php echo carbon_get_theme_option( 'career_position_title_one' ); ?></span>
                                                <span class="position-rate"><?php echo carbon_get_theme_option( 'career_position_rate_one' ); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-12 me-5 ms-5 pt-5 pb-5 d-flex align-items-center justify-content-center">
                                            <div class="position-box">
                                                <span class="position-title"><?php echo carbon_get_theme_option( 'career_position_title_two' ); ?></span>
                                                <span class="position-rate"><?php echo carbon_get_theme_option( 'career_position_rate_two' ); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-12 me-5 ms-5 pt-5 pb-5 d-flex align-items-center justify-content-center">
                                            <div class="position-box">
                                                <span class="position-title"><?php echo carbon_get_theme_option( 'career_position_title_three' ); ?></span>
                                                <span class="position-rate"><?php echo carbon_get_theme_option( 'career_position_rate_three' ); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-12 me-5 ms-5 pt-5 pb-5 d-flex align-items-center justify-content-center">
                                            <div class="position-box">
                                                <span class="position-title"><?php echo carbon_get_theme_option( 'career_position_title_four' ); ?></span>
                                                <span class="position-rate"><?php echo carbon_get_theme_option( 'career_position_rate_four' ); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-12 me-5 ms-5 pt-5 pb-5 d-flex align-items-center justify-content-center">
                                            <div class="position-box">
                                                <span class="position-title"><?php echo carbon_get_theme_option( 'career_position_title_five' ); ?></span>
                                                <span class="position-rate"><?php echo carbon_get_theme_option( 'career_position_rate_five' ); ?></span>
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
    </div>

    <?php if( is_front_page() ): ?>


        <div class="career-team">
            <div class="container">
                <div class="row">
                    <?php
                    if ( !empty( carbon_get_post_meta( get_the_ID(), 'team_section_heading' ) ) ):
                        $team_section_heading = carbon_get_post_meta(get_the_ID(), 'team_section_heading');

                        $first_string = stringFirstExtract( $team_section_heading ); ?>
                        <h3>
                            <?php echo '<span> '. $first_string.' </span>' . trim( strstr($team_section_heading," ") );?>
                        </h3>

                    <?php endif; ?>
                </div>
            </div>
            <div class="container-md d-none d-lg-block mt-5 position-relative">

                <div class="desktop-slide row">
                    <div class="team-image col-7">
                          <?php
                          if ( !empty( carbon_get_post_meta( get_the_ID(), 'team_image_one' ) ) ):
                              $team_image_item = carbon_get_post_meta(get_the_ID(), 'team_image_one'); ?>
                              <?php echo wp_get_attachment_image(
                                  $team_image_item,
                                  array('1059', '600'),
                                  '',
                                  array( 'class' => 'img-fluid', 'alt' =>'' )
                              );

                              if ( !empty( carbon_get_post_meta( get_the_ID(), 'team_descriptions' ) ) ):
                                  $team_descriptions = carbon_get_post_meta(get_the_ID(), 'team_descriptions'); ?>
                                  <p><?php echo $team_descriptions; ?></p>
                              <?php endif;
                        endif; ?>
                    </div>

                    <div class="col-5">
                        <div class="carousel desktop" data-flickity='{
                             "contain": true,
                             "pageDots": false,
                             "draggable": true,
                             "percentPosition": true,
                             "freeScroll": false,
                             "wrapAround": false,
                             "resize": true,
                             "groupCells": false
                         }'>
                             <?php
                             if ( !empty( carbon_get_post_meta( get_the_ID(), 'team_image_item' ) ) ):
                                 $team_image_items = carbon_get_post_meta(get_the_ID(), 'team_image_item');

                                    foreach ($team_image_items as $key=>$team_image_item): ?>
                                        <div class="carousel-cell">
                                          <?php echo wp_get_attachment_image(
                                              $team_image_items[$key],
                                              array('517', '339'),
                                              '',
                                              array( 'class' => 'img-fluid', 'alt' =>'' )
                                          ); ?>
                                        </div>
                                    <?php endforeach; ?>

                            <?php else:?>
                                <div class="alert alert-danger m-5" role="alert">No GALLERY found!</div>
                            <?php endif; ?>
                        </div>
                        <div class="carousel-status"></div>
                    </div>
                </div>
            </div>


            <div class="container d-lg-none mt-5 carouselMobile">
                <div class="carouselM" data-flickity='{
                    "contain": true,
                    "pageDots": false,
                    "draggable": true,
                    "adaptiveHeight": false,
                    "groupCells": false
                }'>
                    <?php
                    if ( !empty( carbon_get_post_meta( get_the_ID(), 'team_image_item' ) ) ):
                        $team_image_items = carbon_get_post_meta(get_the_ID(), 'team_image_item');
                        foreach ($team_image_items as $key=>$team_image_item): ?>
                          <div class="carousel-cell">
                              <?php echo wp_get_attachment_image(
                                  $team_image_items[$key],
                                  array('1059', '600'),
                                  '',
                                  array( 'class' => 'img-fluid', 'alt' =>'' )
                              ); ?>
                         </div>
                     <?php endforeach;
                    else:?>
                        <div class="alert alert-danger m-5" role="alert">No GALLERY found!</div>
                    <?php endif; ?>
                </div>
                <div class="carousel-status-mobile"></div>
            </div>
        </div>
    <?php endif; ?>
</div>
