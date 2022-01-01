<?php
    $southern_services_args = array(

        'post_type'         => 'services',
        'post_status'       => 'publish',
        'posts_per_page'    => -1,
        'orderby'          => 'title',
        'order'             => 'ASC'
    );
    $southern_services_query = new WP_Query( $southern_services_args );


if ( $southern_services_query->have_posts() ) :  ?>

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
                  <div class="modal-container">
                        <div class="container">
                          <div class="row">
                              <div class="responsiveGallery-container" id="responsiveGallery-container">
                                        <ul class="flip-items flipster__container">
                                            <?php while ( $southern_services_query->have_posts() ) : $southern_services_query->the_post();

                                                if ( !empty( carbon_get_post_meta( get_the_ID(), 'services_slide' ) ) ):
                                                      $services_slides = carbon_get_post_meta(get_the_ID(), 'services_slide');
                                                      $slide_count = count( $services_slides );
                                                      $count = 0;
                                                      //echo $slide_count;
                                                      foreach ($services_slides as $key=>$services_slide):
                                                        if( $count < $slide_count ): ?>
                                                        <li
                                                            class="responsiveGallery-item <?php the_title(); ?>"
                                                        >
                                                        <?php echo wp_get_attachment_image( $services_slides[$count], array('929', '674'), '', array( "class" => "img-fluid" ) );  ?>
                                                        </li>



                                                    <?php $count++; endif; endforeach;
                                                else: ?>
                                                        <div class="alert alert-danger m-5" role="alert">No GALLERY found!</div>
                                                <?php endif; // end loop here! ?>


                                            <?php endwhile;
                                            wp_reset_postdata(); ?>
                                        </ul>


                                        <div class="carousel-status-coverflow"></div>
                                </div>
                          </div> <!-- end row -->
                        </div> <!-- end container -->
                  </div>
              </div>
        <div class="triangle-bottomleft"></div>
        <div class="triangle-bottomright"></div>
    </div>
</div>

<?php endif; ?>
