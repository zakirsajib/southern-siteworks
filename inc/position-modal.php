<?php global $count; ?>
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="triangle-topleft"></div>
        <div class="triangle-topright"></div>

              <div class="modal-body">
                  <div class="modal-header position-relative">
                    <a class="modal-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <?php svg_inline( modal_close_svg() ); ?>
                    </a>
                  </div>
                  <div class="modal-container ps-sm-3 pe-sm-3">
                      <div class="container">
                          <div class="row">
                              <header class="d-flex flex-column position-relative align-items-start align-items-sm-center justify-content-center">
                                  <div class="positions-header">

                                        <?php if ( !empty( carbon_get_post_meta( get_the_ID(), 'positions_name' ) ) ):
                                            $positions_name = carbon_get_post_meta( get_the_ID(), 'positions_name' );?>
                                            <h2><?php echo $positions_name; ?></h2>
                                        <?php else: ?>
                                            <h2><?php the_title(); ?></h2>
                                        <?php endif; ?>

                                        <div class="d-flex flex-row positions-heading text-start text-sm-end ps-sm-4 ps-lg-5">
                                            <div class="hr"><hr></div>
                                            <div class="position-tagline ps-sm-1 ps-lg-3">
                                                <?php if ( !empty( carbon_get_post_meta( get_page_by_title('Careers')->ID, 'positions_section_heading' ) ) ):
                                                    $positions_section_heading = carbon_get_post_meta( get_page_by_title('Careers')->ID, 'positions_section_heading' );?>
                                                    <p class="text-uppercase"><?php echo $positions_section_heading; ?></p>
                                                <?php else: ?>
                                                    <p>Nothing found!</p>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                  </div>

                                  <div class="col-12">
                                        <?php if ( !empty( carbon_get_post_meta( get_the_ID(), 'positions_details' ) ) ):
                                          $positions_details = carbon_get_post_meta( get_the_ID(), 'positions_details' );?>
                                          <p><?php echo $positions_details; ?></p>
                                      <?php endif; ?>
                                  </div>
                              </header>
                          </div> <!-- end row -->
                      </div> <!-- end container -->
                      <div class="container pt-3">
                        <div class="row">
                            <div class="col-12">
                                <?php if ( !empty( carbon_get_post_meta( get_the_ID(), 'positions_details_modal' ) ) ):
                                  $positions_details_modal = carbon_get_post_meta( get_the_ID(), 'positions_details_modal' );?>
                                  <div class="job-description">
                                      <?php echo $positions_details_modal; ?>
                                  </div>
                              <?php endif; ?>


                                <!-- <ul class="list-group">
                                  <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                      <div class="fw-bold">Job Type:</div>
                                      <?php //echo carbon_get_post_meta( get_the_ID(), 'positions_type' );?>
                                    </div>
                                  </li>
                                  <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                      <div class="fw-bold">Pay:</div>
                                      <?php //echo carbon_get_post_meta( get_the_ID(), 'positions_rate' );?>
                                    </div>
                                  </li>
                                  <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                      <div class="fw-bold">Benefits:</div>
                                      <?php //echo carbon_get_post_meta( get_the_ID(), 'positions_benefits' );?>
                                    </div>
                                  </li>
                                  <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                      <div class="fw-bold">Schedule:</div>
                                      <?php //echo carbon_get_post_meta( get_the_ID(), 'positions_schedule' );?>
                                    </div>
                                  </li>
                                  <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                      <div class="fw-bold">Supplemental Pay:</div>
                                      <?php //echo carbon_get_post_meta( get_the_ID(), 'positions_supplemental_pay' );?>
                                    </div>
                                  </li>
                                  <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                      <div class="fw-bold">Experience:</div>
                                      <?php //echo carbon_get_post_meta( get_the_ID(), 'positions_expereince' );?>
                                    </div>
                                  </li>
                                  <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                      <div class="fw-bold">License/Certification:</div>
                                      <?php //echo carbon_get_post_meta( get_the_ID(), 'positions_license' );?>
                                    </div>
                                  </li>
                                  <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                      <div class="fw-bold">Work Location:</div>
                                      <?php //echo carbon_get_post_meta( get_the_ID(), 'positions_location' );?>
                                    </div>
                                  </li>
                              </ul> -->
                            </div>
                            <!-- <div class="col-12 col-md-8">
                                <ul class="list-group">
                                  <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                      <div class="fw-bold">Company Culture:</div>
                                      <?php //echo carbon_get_post_meta( get_the_ID(), 'positions_culture' );?>
                                    </div>
                                  </li>
                                  <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                      <div class="fw-bold">Benefits Conditions:</div>
                                      <?php //echo carbon_get_post_meta( get_the_ID(), 'positions_benefits_conditions' );?>
                                    </div>
                                  </li>
                                  <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                      <div class="fw-bold">Work Remotely:</div>
                                      <?php //echo carbon_get_post_meta( get_the_ID(), 'positions_remotely' );?>
                                    </div>
                                  </li>
                                  <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                      <div class="fw-bold">COVID-19 Precautions:</div>
                                      <?php //echo carbon_get_post_meta( get_the_ID(), 'positions_covid_precautions' );?>
                                    </div>
                                  </li>
                                  <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                      <div class="fw-bold">COVID-19 considerations:</div>
                                      <?php //echo carbon_get_post_meta( get_the_ID(), 'positions_covid_considerations' );?>
                                    </div>
                                  </li>
                              </ul>
                            </div> -->
                        </div>
                      </div>
                  </div>
              </div>

              <div class="modal-footer">
                  <div class="cta-button">
                      <a href=""
                        class="ss-button"
                        data-bs-toggle="modal"
                        data-bs-dismiss="modal"
                        data-bs-target="#joinModal<?php echo $count;?>"
                     >
                     Apply Now
                    </a>
                  </div>
              </div>


        <div class="triangle-bottomleft"></div>
        <div class="triangle-bottomright"></div>
    </div>
</div>
