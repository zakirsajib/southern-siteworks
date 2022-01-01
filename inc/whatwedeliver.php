<div class="whatwedeliver">
    <div class="container-fluid g-0">
        <div class="row g-0">
            <header class="d-flex flex-column position-relative align-items-sm-center justify-content-center ps-3 pe-3">
                <div class="what-we-deliver-header">
                    <div class="text-center">
                        <?php if ( !empty( carbon_get_theme_option( 'whatwedeliver_section_heading' ) ) ):
                            $whatwedeliver_section_heading = carbon_get_theme_option( 'whatwedeliver_section_heading' );
                            $first_string = stringFirstExtract( $whatwedeliver_section_heading ); ?>
                            <h2>
                                <?php echo '<span> '. $first_string.' </span>' . trim( strstr($whatwedeliver_section_heading," ") );?>
                            </h2>

                        <?php endif; ?>
                    </div>
                    <div class="southern-services-heading text-center text-sm-end">
                        <?php if ( !empty( carbon_get_theme_option( 'whatwedeliver_section_subheading' ) ) ):
                            $whatwedeliver_section_subheading = carbon_get_theme_option( 'whatwedeliver_section_subheading' );?>
                            <p class="text-uppercase"><?php echo $whatwedeliver_section_subheading; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </header>
        </div>
        <div class="row g-0">
            <div class="services-container d-flex justify-content-center position-relative">
                <?php
                if ( !empty( carbon_get_theme_option( 'whatwedeliver_services' ) ) ):
                    $whatwedeliver_services = carbon_get_theme_option('whatwedeliver_services'); ?>
                <div class="col-12 col-sm-9 col-md-9 position-relative">
                    <div class="tab-content position-relative" id="nav-tabContent">
                        <?php
                            $count = 0;
                            foreach ($whatwedeliver_services as $whatwedeliver_service) { ?>

                              <div class="tab-pane <?php echo ($count==0) ? 'show active': 'nonactive' ?>" id="list-<?php echo $whatwedeliver_service['service_content_title']?>" role="tabpanel" aria-labelledby="list-<?php echo $whatwedeliver_service['service_content_title']?>-list">
                                  <div class="col-4 service-contents-area">
                                    <div class="service-contents text-white ">
                                        <h2 class="text-uppercase"><?php echo $whatwedeliver_service['service_content_title']?></h2>
                                        <p><?php echo $whatwedeliver_service['service_content_description']?></p>
                                        <a
                                            href="<?php echo get_home_url().'/'. strtolower( $whatwedeliver_service['service_content_title'] ); ?>"
                                            class="ss-view-button">View
                                        </a>
                                    </div>
                                </div>
                                  <div class="col imageCol">
                                      <!-- <img src="<?php //echo wp_get_attachment_url( $whatwedeliver_service['service_image'] )?>" class="img-fluid w-100"> -->

                                      <?php echo wp_get_attachment_image(
                                          $whatwedeliver_service['service_image'],
                                          array('998', '739'),
                                          '',
                                          array( 'class' => 'img-fluid w-100', 'alt' =>'' )
                                      );
                                      ?>

                                </div>
                              </div>


                        <?php $count++; } ?>

                    </div>
                </div>
                <div class="col-12 col-sm-3 col-md-3 service-list-area">
                    <div class="service-lists">
                        <div class="list-group" id="list-tab" role="tablist">
                            <ul>
                             <?php
                             $count= 0;
                             foreach ($whatwedeliver_services as $whatwedeliver_service) { ?>
                                <li class="<?php echo ($count==0) ? 'active': 'nonactive' ?>"><a
                                class="list-group-item list-group-item-action text-uppercase"
                                id="list-<?php echo $whatwedeliver_service['service_title']?>-list"
                                data-bs-toggle="list"
                                href="#list-<?php echo $whatwedeliver_service['service_title']?>"
                                role="tab" aria-controls="list-<?php echo $whatwedeliver_service['service_title']?>"><?php echo $whatwedeliver_service['service_title']?></a></li>
                            <?php $count++; } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

</div>
