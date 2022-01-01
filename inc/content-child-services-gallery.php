<div class="gallery-container">
    <div class="container">
        <div class="row">
            <div class="gallery-heading ps-4 pe-4">
                <h3>Gallery</h3>
            </div>
        </div>
    </div>

    <?php
        $southern_services_args = array(

            'post_type'         => 'services',
            'post_status'       => 'publish',
            'posts_per_page'    => -1,
            'orderby'          => 'title',
            'order'             => 'ASC'

        );
        $southern_services_query = new WP_Query( $southern_services_args ); ?>

    <div class="container">
        <div class="row">
            <div class="services-gallery col-12">

                <?php if ( $southern_services_query->have_posts() ) : $count = 0; ?>
                    <div class="desktop-nav d-none d-sm-block">
                        <ul class="nav nav-pills mb-5 mt-5" id="pillsTab" role="tablist">

                            <li class="nav-item all" role="presentation">
                                <button
                                    class="nav-link <?php echo ($count==0) ? 'active': 'nonactive' ?>"
                                    id="pills-All-tab"
                                    data-bs-toggle="pill"
                                    data-bs-target="#pills-All"
                                    type="button"
                                    role="tab"
                                    aria-controls="pills-All"
                                    aria-selected="true"
                                >All
                                </button>
                            </li>

                            <?php while ( $southern_services_query->have_posts() ) : $southern_services_query->the_post(); ?>

                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link <?php //echo ($count==0) ? 'active': 'nonactive' ?>"
                                        id="pills-<?php the_title(); ?>-tab"
                                        data-bs-toggle="pill"
                                        data-bs-target="#pills-<?php the_title(); ?>"
                                        type="button"
                                        role="tab"
                                        aria-controls="pills-<?php the_title(); ?>"
                                        aria-selected="false"
                                    >
                                        <?php the_title(); ?>
                                    </button>
                                </li>


                            <?php $count++; endwhile;
                            wp_reset_postdata(); ?>
                        </ul>
                    </div>

                <div class="tab-content d-none d-sm-block" id="pills-tabContent">

                    <div class="tab-pane fade" id="pills-All" role="tabpanel" aria-labelledby="pills-All-tab">
                      <div class="Allcarousel col-12" data-flickity='{
                            "cellAlign": "left",
                            "contain": false,
                            "percentPosition": true,
                            "freeScroll": false,
                            "wrapAround": false,
                            "resize": true,
                            "draggable": false,
                            "pageDots": false,
                            "groupCells": 1
                        }'>

                        <?php while ( $southern_services_query->have_posts() ) : $southern_services_query->the_post();

                              if ( !empty( carbon_get_post_meta( get_the_ID(), 'services_slide' ) ) ):
                                    $services_slides = carbon_get_post_meta(get_the_ID(), 'services_slide');
                                    $slide_count = count( $services_slides );
                                    $count = 0;
                                    foreach ($services_slides as $key=>$services_slide):
                                    if( $count < $slide_count ): ?>
                                      <div class="carousel-cell row <?php the_title()?>">
                                          <?php if( $count < $slide_count ): ?>
                                              <div class="col-6 largeC g-0 pe-sm-1 pe-md-3">
                                                  <a
                                                      href=""
                                                      data-bs-toggle="modal"
                                                      data-bs-target="#galleryModal">
                                                      <!-- <img
                                                          src="<?php //echo wp_get_attachment_url( $services_slide['service_gallery_img_one'] ) ?>"
                                                          class="img-fluid"
                                                      > -->
                                                      <?php echo wp_get_attachment_image( $services_slides[$count], 'gallery-D-large', '', array( "class" => "img-fluid" ) );  ?>
                                                  </a>
                                                  <?php $count++; ?>
                                              </div>
                                          <?php endif; ?>
                                          <div class="col-6 g-0 ps-sm-1 ps-md-0">
                                              <div class="row">
                                                <?php if( $count < $slide_count ): ?>
                                                    <div class="col-12 mediumC g-0 ps-sm-2 pb-sm-1 pb-md-3 pe-md-3">
                                                        <a
                                                          href=""
                                                          data-bs-toggle="modal"
                                                          data-bs-target="#galleryModal">
                                                          <!-- <img
                                                              src="<?php //echo wp_get_attachment_url( $services_slide['service_gallery_img_two'] ) ?>"
                                                              class="img-fluid"
                                                          > -->
                                                          <?php echo wp_get_attachment_image( $services_slides[$count], 'gallery-D-medium', '', array( "class" => "img-fluid" ) );  ?>
                                                        </a>
                                                        <?php $count++; ?>
                                                    </div>
                                                    <?php endif; ?>
                                              </div>
                                              <div class="row">
                                                <?php if( $count < $slide_count ): ?>
                                                    <div class="col-6 smallC g-0 ps-sm-2">
                                                        <a href=""
                                                          data-bs-toggle="modal"
                                                          data-bs-target="#galleryModal">
                                                            <!-- <img
                                                              src="<?php //echo wp_get_attachment_url( $services_slide['service_gallery_img_three'] ) ?>"
                                                            class="img-fluid"
                                                            > -->
                                                            <?php echo wp_get_attachment_image( $services_slides[$count], 'gallery-D-small', '', array( "class" => "img-fluid" ) );  ?>
                                                        </a>
                                                        <?php $count++; ?>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if( $count < $slide_count ): ?>
                                                    <div class="col-6 smallC g-0 ps-sm-2 ms-n1 ps-md-3 ps-lgfix-2">
                                                        <a href=""
                                                          data-bs-toggle="modal"
                                                          data-bs-target="#galleryModal">
                                                            <!-- <img
                                                              src="<?php //echo wp_get_attachment_url( $services_slide['service_gallery_img_four'] ) ?>"
                                                              class="img-fluid"
                                                            > -->
                                                            <?php echo wp_get_attachment_image( $services_slides[$count], 'gallery-D-small', '', array( "class" => "img-fluid" ) );  ?>
                                                        </a>
                                                        <?php $count++; ?>
                                                    </div>
                                                <?php endif; ?>
                                              </div>
                                          </div>
                                      </div>
                                  <?php endif;
                              endforeach;
                              else:?>
                                  <div class="alert alert-danger m-5" role="alert">No GALLERY found!</div>
                              <?php endif;

                        endwhile;
                        wp_reset_postdata(); ?>


                    </div> <!-- end Carousel -->
                    <div class="carousel-status Allcarousel"></div>
                </div> <!-- end tab-pane -->




            <?php
            // Other services
            while ( $southern_services_query->have_posts() ) : $southern_services_query->the_post(); ?>

                  <div class="tab-pane fade" id="pills-<?php the_title(); ?>" role="tabpanel" aria-labelledby="pills-<?php the_title(); ?>-tab">
                    <div class="<?php the_title(); ?>carousel col-12" data-flickity='{
                          "cellAlign": "left",
                          "contain": false,
                          "percentPosition": true,
                          "freeScroll": false,
                          "wrapAround": false,
                          "resize": true,
                          "draggable": false,
                          "pageDots": false,
                          "groupCells": 1
                      }'>

                    <?php
                    if ( !empty( carbon_get_post_meta( get_the_ID(), 'services_slide' ) ) ):
                          $services_slides = carbon_get_post_meta(get_the_ID(), 'services_slide');
                          $slide_count = count($services_slides);
                          $count = 0;

                          foreach ($services_slides as $key=>$services_slide):
                            if( $count < $slide_count ): ?>
                            <div class="carousel-cell row">
                                <?php if( $count < $slide_count ): ?>
                                    <div class="col-6 largeC g-0 pe-sm-1 pe-md-3">
                                        <a
                                            href=""
                                            data-bs-toggle="modal"
                                            data-bs-target="#galleryModal">

                                            <!-- <img
                                                src="<?php //echo wp_get_attachment_url( $key[$count] ) ?>"
                                                class="img-fluid"
                                            > -->
                                            <?php echo wp_get_attachment_image( $services_slides[$count], 'gallery-D-large', '', array( "class" => "img-fluid" ) );  ?>
                                        </a>
                                        <?php $count++; ?>
                                    </div>
                                <?php endif; ?>
                                <div class="col-6 g-0 ps-sm-1 ps-md-0">
                                    <div class="row">
                                        <?php if( $count < $slide_count ): ?>
                                          <div class="col-12 mediumC g-0 ps-sm-2 pb-sm-1 pb-md-3 pe-md-3">
                                              <a
                                                href=""
                                                data-bs-toggle="modal"
                                                data-bs-target="#galleryModal">
                                                <!-- <img
                                                    src="<?php //echo wp_get_attachment_url( $services_slide['service_gallery_img_two'] ) ?>"
                                                    class="img-fluid"
                                                > -->
                                                <?php echo wp_get_attachment_image( $services_slides[$count], 'gallery-D-medium', '', array( "class" => "img-fluid" ) );  ?>
                                              </a>
                                              <?php $count++; ?>
                                          </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="row">
                                        <?php if( $count < $slide_count ): ?>
                                          <div class="col-6 smallC g-0 ps-sm-2">
                                              <a href=""
                                                data-bs-toggle="modal"
                                                data-bs-target="#galleryModal">
                                                  <!-- <img
                                                    src="<?php //echo wp_get_attachment_url( $services_slide['service_gallery_img_three'] ) ?>"
                                                  class="img-fluid"
                                                  > -->
                                                  <?php echo wp_get_attachment_image( $services_slides[$count], 'gallery-D-small', '', array( "class" => "img-fluid" ) );  ?>
                                              </a>
                                              <?php $count++; ?>
                                          </div>
                                        <?php endif;?>
                                        <?php if( $count < $slide_count ): ?>
                                          <div class="col-6 smallC g-0 ps-sm-2 ms-n1 ps-md-3 ps-lgfix-2">
                                              <a href=""
                                                data-bs-toggle="modal"
                                                data-bs-target="#galleryModal">
                                                  <!-- <img
                                                    src="<?php //echo wp_get_attachment_url( $services_slide['service_gallery_img_four'] ) ?>"
                                                    class="img-fluid"
                                                  > -->
                                                  <?php echo wp_get_attachment_image( $services_slides[$count], 'gallery-D-small', '', array( "class" => "img-fluid" ) );  ?>
                                              </a>
                                              <?php $count++; ?>
                                          </div>
                                        <?php endif;?>
                                    </div>
                                </div>
                            </div>
                            <?php endif;
                        endforeach;

                    else:?>
                        <div class="alert alert-danger m-5" role="alert">No GALLERY found!</div>
                    <?php endif; ?>

                    </div> <!-- end Carousel -->
                    <div class="carousel-status <?php the_title(); ?>"></div>
                </div> <!-- end tab-pane -->
                <?php endwhile;
                wp_reset_postdata(); ?>

                <!-- <div class="carousel-status"></div> -->

            </div> <!-- end tab content -->















            <!-- Galery Mobile mode-->
            <?php $count= 0; ?>
            <div class="mobile-overflow-nav d-sm-none">
                <ul class="nav nav-pills mb-5 mt-5" id="pillsMobileTab" role="tablist">

                    <li class="nav-item all" role="presentation">
                        <button
                            class="nav-link <?php echo ($count==0) ? 'active': 'nonactive' ?>"
                            id="pills-AllMobile-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#pills-AllMobile"
                            type="button"
                            role="tab"
                            aria-controls="pills-AllMobile"
                            aria-selected="true"
                        >All
                        </button>
                    </li>

                    <?php while ( $southern_services_query->have_posts() ) : $southern_services_query->the_post(); ?>
                    <li class="nav-item" role="presentation">
                        <button
                            class="nav-link <?php //echo ($count==0) ? 'active': 'nonactive' ?>"
                            id="pills-<?php the_title(); ?>Mobile-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#pills-<?php the_title(); ?>Mobile"
                            type="button"
                            role="tab"
                            aria-controls="pills-<?php the_title(); ?>Mobile"
                            aria-selected="false"
                        >
                        <?php the_title(); ?>
                        </button>
                    </li>

                    <?php $count++; endwhile;
                    wp_reset_postdata(); ?>
                </ul>
            </div>


            <div class="tab-content d-sm-none" id="pills-tabContentMobile">

                <div class="tab-pane fade" id="pills-AllMobile" role="tabpanel" aria-labelledby="pills-AllMobile-tab">
                  <div class="AllcarouselMobile col-12" data-flickity='{
                        "cellAlign": "center",
                        "contain": false,
                        "percentPosition": true,
                        "freeScroll": false,
                        "wrapAround": false,
                        "resize": true,
                        "draggable": false,
                        "pageDots": false,
                        "groupCells": 1
                    }'>

                    <?php while ( $southern_services_query->have_posts() ) : $southern_services_query->the_post();
                        if ( !empty( carbon_get_post_meta( get_the_ID(), 'services_slide' ) ) ):
                              $services_slides = carbon_get_post_meta(get_the_ID(), 'services_slide');
                              $slide_count = count( $services_slides );
                              $count = 0;
                              foreach ($services_slides as $services_slide):
                                if( $count < $slide_count ): ?>
                                    <div class="carousel-cell <?php the_title()?>">
                                        <a
                                            href=""
                                            data-bs-toggle="modal"
                                            data-bs-target="#galleryModal">
                                            <!-- <img
                                                src="<?php //echo wp_get_attachment_url( $services_slide['service_gallery_img_one'] ) ?>"
                                                class="img-fluid"
                                                alt=""
                                            > -->
                                            <?php echo wp_get_attachment_image( $services_slides[$count], 'gallery-T-large', '', array( "class" => "img-fluid" ) );  ?>
                                        </a>
                                    </div>
                                <?php $count++; endif; endforeach;
                        else:?>

                            <div class="alert alert-danger m-5" role="alert">No GALLERY found!</div>

                        <?php endif;
                    endwhile;
                    wp_reset_postdata(); ?>
                  </div> <!-- end carouselMobile -->
                  <div class="carousel-status-mobile all"></div>
                </div> <!-- end tab-pane -->






                <?php while ( $southern_services_query->have_posts() ) : $southern_services_query->the_post(); ?>
                <div class="tab-pane fade" id="pills-<?php the_title(); ?>Mobile" role="tabpanel" aria-labelledby="pills-<?php the_title(); ?>Mobile-tab">
                  <div class="<?php the_title(); ?>carouselMobile col-12" data-flickity='{
                        "cellAlign": "center",
                        "contain": false,
                        "percentPosition": true,
                        "freeScroll": false,
                        "wrapAround": false,
                        "resize": true,
                        "draggable": false,
                        "pageDots": false,
                        "groupCells": 1
                    }'>

                    <?php
                    if ( !empty( carbon_get_post_meta( get_the_ID(), 'services_slide' ) ) ):
                          $services_slides = carbon_get_post_meta(get_the_ID(), 'services_slide');
                          $slide_count = count( $services_slides );
                          $count = 0;
                          foreach ($services_slides as $key=>$services_slide):
                            if( $count < $slide_count ): ?>
                                <div class="carousel-cell">
                                    <a
                                        href=""
                                        data-bs-toggle="modal"
                                        data-bs-target="#galleryModal">
                                        <!-- <img
                                            src="<?php //echo wp_get_attachment_url( $services_slide['service_gallery_img_one'] ) ?>"
                                            class="img-fluid"
                                            alt=""
                                        > -->
                                        <?php echo wp_get_attachment_image( $services_slides[$count], 'gallery-T-large', '', array( "class" => "img-fluid" ) );  ?>
                                    </a>
                                </div>
                            <?php $count++; endif; endforeach;
                    else:?>
                        <div class="alert alert-danger m-5" role="alert">No GALLERY found!</div>
                    <?php endif; ?>

                  </div> <!-- end carouselMobile -->

                  <div class="carousel-status-mobile <?php the_title(); ?>"></div>

                </div> <!-- end tab-pane -->

                <?php endwhile;
                wp_reset_postdata(); ?>

            </div> <!-- end mobile tab content -->

            <?php endif; ?>
            </div>
        </div>
    </div>
</div>



<div
    class="modal fade"
    id="galleryModal"
    tabindex="-1"
    aria-labelledby="galleryModalLabel"
    aria-hidden="true"
>
<?php
    // Modal for displaying all images in gallery modal
    get_template_part( 'inc/gallery-modal' );
?>
</div>
