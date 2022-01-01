<div class="whatwedeliver">
    <div class="container-fluid g-0">
        <div class="row g-0">
            <header class="d-flex flex-column position-relative align-items-sm-center justify-content-center ps-3 pe-3">
                <div class="what-we-deliver-header">
                    <div class="text-center">
                        <?php if ( !empty( carbon_get_theme_option( 'whatwedeliver_section_heading' ) ) ):
                            $whatwedeliver_section_heading = carbon_get_theme_option( 'whatwedeliver_section_heading' );?>
                            <h2><?php echo $whatwedeliver_section_heading; ?></h2>
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
                <div class="col-9 position-relative">
                    <div class="tab-content position-relative" id="nav-tabContent">
                        <?php
                            $count = 0;
                            foreach ($whatwedeliver_services as $whatwedeliver_service) { ?>

                              <div class="tab-pane <?php echo ($count==0) ? 'show active': 'nonactive' ?>" id="list-<?php echo $whatwedeliver_service['service_content_title']?>" role="tabpanel" aria-labelledby="list-<?php echo $whatwedeliver_service['service_content_title']?>-list">
                                  <div class="col-4 service-contents-area">
                                    <div class="service-contents text-white ">
                                        <h2 class="text-uppercase"><?php echo $whatwedeliver_service['service_content_title']?></h2>
                                        <p><?php echo $whatwedeliver_service['service_content_description']?></p>
                                        <a href="<?php echo $whatwedeliver_service['service_url']?>" class="ss-view-button"><?php echo $whatwedeliver_service['service_url_label']?></a>
                                    </div>
                                </div>
                                  <div class="col imageCol">
                                      <img src="<?php echo wp_get_attachment_url( $whatwedeliver_service['service_image'] )?>" class="img-fluid w-100">
                                </div>
                              </div>


                        <?php $count++; } ?>

                    </div>
                </div>
                <div class="col-3 service-list-area">
                    <div class="service-lists h-100">
                        <div class="list-group h-100" id="list-tab" role="tablist">
                             <?php
                             $count = 0;
                             foreach ($whatwedeliver_services as $whatwedeliver_service) { ?>
                                <a
                                class="list-group-item list-group-item-action text-uppercase <?php echo ($count==0) ? 'active': 'nonactive' ?>"
                                id="list-<?php echo $whatwedeliver_service['service_title']?>-list"
                                data-bs-toggle="list"
                                href="#list-<?php echo $whatwedeliver_service['service_title']?>"
                                role="tab" aria-controls="list-<?php echo $whatwedeliver_service['service_title']?>"><?php echo $whatwedeliver_service['service_title']?></a>
                            <?php $count++; } ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

</div>
