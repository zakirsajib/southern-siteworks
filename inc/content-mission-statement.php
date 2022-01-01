<div class="missionstatement">
    <div class="container">
            <div class="row">
                <header class="d-flex flex-column position-relative align-items-start align-items-sm-center justify-content-center">
                    <div class="southern-missionstatement-header">
                            <?php if ( !empty( carbon_get_post_meta( get_the_ID(), 'missionstatement_section_heading' ) ) ):
                                $missionstatement_section_heading = carbon_get_post_meta( get_the_ID(), 'missionstatement_section_heading' );

                                $first_string = stringFirstExtract( $missionstatement_section_heading ); ?>
                                <h2>
                                    <?php echo '<span> '. $first_string.' </span>' . trim( strstr($missionstatement_section_heading," ") );?>
                                </h2>


                            <?php endif; ?>
                        <div class="missionstatement-heading text-start text-sm-end">
                            <?php if ( !empty( carbon_get_post_meta( get_the_ID(), 'missionstatement_section_subheading' ) ) ):
                                $missionstatement_section_subheading = carbon_get_post_meta( get_the_ID(), 'missionstatement_section_subheading' );?>
                                <p class="text-uppercase"><?php echo $missionstatement_section_subheading; ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </header>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 slider-left">
                    <div class="left-col">
                        <?php if ( !empty( carbon_get_theme_option( 'logo_raster_white' ) ) ):
                            $missionstatement_section_logo = carbon_get_theme_option( 'logo_raster_white' );?>
                            <!-- <img src="<?php //echo wp_get_attachment_url( $missionstatement_section_logo ); ?>" class="img-fluid mission-logo" alt="Southern Siteworks Mission statement logo"/> -->

                            <?php echo wp_get_attachment_image(
                                $missionstatement_section_logo,
                                array('296', '72'),
                                '',
                                array( 'class' => 'img-fluid mission-logo', 'alt' =>'Southern Siteworks Mission statement logo' )
                            );
                            ?>


                        <?php endif; ?>
                        <?php if ( !empty( carbon_get_post_meta( get_the_ID(), 'missionstatement_section_description' ) ) ):
                            $missionstatement_section_description = carbon_get_post_meta( get_the_ID(), 'missionstatement_section_description' );?>
                            <p><?php echo $missionstatement_section_description ?></p>
                        <?php else:?>
                            <div class="alert alert-danger m-5" role="alert">No CONTENTS ARE found!</div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-12 col-md-8 mb-sm-5 slider-gallery">
                    <div class="right-col">
                        <div class="row">
                            <div class="col-sm-12 col-md-8">
                                <div id="carouselMission" class="carousel carousel-main"
                                   data-flickity='{
                                     "contain": true,
                                     "pageDots": false,
                                     "draggable": false
                                   }'>
                                   <?php
                                   if ( !empty( carbon_get_post_meta( get_the_ID(), 'missionstatement_gallery' ) ) ):
                                       $missionstatement_gallery = carbon_get_post_meta(get_the_ID(), 'missionstatement_gallery');
                                       foreach ($missionstatement_gallery as $missionstatement_gallery_item) { ?>
                                           <div class="carousel-cell">

                                               <?php echo wp_get_attachment_image(
                                                   $missionstatement_gallery_item,
                                                   'mission-carousel',
                                                   '',
                                                   array( 'class' => 'img-fluid', 'alt' => '' )
                                               );  ?>
                                           </div>
                                        <?php }
                                    else:?>
                                        <div class="alert alert-danger m-5" role="alert">No GALLERY found!</div>
                                    <?php endif; ?>
                                </div>
                                <div class="carousel-status"></div>

                            </div>
                            <div class="col-md-4 d-sm-none d-md-block">
                               <div id="carouselMissionMobile" class="carousel carousel-nav"
                                    data-flickity='{
                                      "asNavFor": ".carousel-main",
                                      "draggable": false,
                                      "percentPosition": false,
                                      "groupCells": true,
                                      "pageDots": false
                                    }'>
                                    <?php
                                    if ( !empty( carbon_get_post_meta( get_the_ID(), 'missionstatement_gallery' ) ) ):
                                        $missionstatement_gallery = carbon_get_post_meta(get_the_ID(), 'missionstatement_gallery');
                                        foreach ($missionstatement_gallery as $missionstatement_gallery_item) { ?>
                                            <div class="carousel-cell">

                                                <?php echo wp_get_attachment_image(
                                                    $missionstatement_gallery_item,
                                                    array('269', '200'),
                                                    '',
                                                    array( 'class' => 'img-fluid' )
                                                );
                                                ?>

                                            </div>
                                         <?php }
                                    else:?>
                                        <div class="alert alert-danger m-5" role="alert">No GALLERY found!</div>
                                    <?php endif; ?>
                              </div>
                              <div class="carousel-status-mobile"></div>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
    </div>
</div>
