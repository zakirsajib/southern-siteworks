<?php
//     $southern_services_args = array(
//
//         'post_type'         => 'services',
//         'post_status'       => 'publish',
//         'posts_per_page'    => -1,
//         'orderby'          => 'title',
//         'order'             => 'ASC'
//     );
//     $southern_services_query = new WP_Query( $southern_services_args );
//
//
// if ( $southern_services_query->have_posts() ) :  ?>

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
                              <div class="responsiveGallery-container" id="responsiveGallery-container<?php the_ID(); ?>">
                                        <ul class="flip-items flipster__container">
                                            <?php //while ( $southern_services_query->have_posts() ) : $southern_services_query->the_post();

                                                if ( !empty( carbon_get_post_meta( get_the_ID(), 'services_slide' ) ) ):
                                                      $services_slides = carbon_get_post_meta(get_the_ID(), 'services_slide');
                                                      //$slide_count = count( $services_slides );
                                                      //$count = 0;
                                                      //echo $slide_count;
                                                      foreach ($services_slides as $services_slide):
                                                        //if( $count < $slide_count ): ?>
                                                        <li
                                                            class="responsiveGallery-item <?php the_title(); ?>"
                                                        >
                                                        <?php echo wp_get_attachment_image( $services_slide, array('729', '474'), '', array( "class" => "img-fluid" ) );  ?>
                                                        </li>



                                                    <?php
                                                    //$count++;
                                                //endif;
                                            endforeach;
                                                else: ?>
                                                        <div class="alert alert-danger m-5" role="alert">No GALLERY found!</div>
                                                <?php endif; // end loop here! ?>


                                            <?php //endwhile;
                                            //wp_reset_postdata(); ?>
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

<?php //endif; ?>

<script>

$ = jQuery.noConflict();
$(function ($) {
    "use strict";

    // Project Coverflow Modal

    var carousel = $("#responsiveGallery-container<?php the_ID(); ?>").flipster({
        itemContainer: 'ul',
        itemSelector: 'li',
        style: 'carousel',
        spacing: -0.5,
        nav: false,
        buttons: true,
        start: 0,
        keyboard: true,
    });



    // Gallery Pagination
    var currentNumber = 1;
    var totalSlides = $('#responsiveGallery-container<?php the_ID(); ?> .flip-items li').length;
     //console.log(totalSlides);
     if (totalSlides > 10) {
         $('#responsiveGallery-container<?php the_ID(); ?> .carousel-status-coverflow').html( '<span>0' + currentNumber + '</span>' + '/' + totalSlides);
     } else {
         $('#responsiveGallery-container<?php the_ID(); ?> .carousel-status-coverflow').html( '<span>0' + currentNumber + '</span>' + '/0' + totalSlides);
     }

     $('#responsiveGallery-container<?php the_ID(); ?> .flipster__button--next').on('click', function(){
         $('#responsiveGallery-container<?php the_ID(); ?> .flipster__button--prev').removeClass('disabled');
         currentNumber = currentNumber + 1;

         if ( totalSlides >= 10 && currentNumber <= 9 ) {
             $('#responsiveGallery-container<?php the_ID(); ?> .carousel-status-coverflow').html( '<span>0' + currentNumber + '</span>' + '/' + totalSlides);
         } else if ( totalSlides > 10 && currentNumber > 10 ) {
               $('#responsiveGallery-container<?php the_ID(); ?> .carousel-status-coverflow').html( '<span>' + currentNumber + '</span>' + '/' + totalSlides);
         } else if ( totalSlides < 10 && currentNumber < 10 ) {
           $('#responsiveGallery-container<?php the_ID(); ?> .carousel-status-coverflow').html( '<span>0' + currentNumber + '</span>' + '/0' + totalSlides);
        } else {
           $('#responsiveGallery-container<?php the_ID(); ?> .carousel-status-coverflow').html( '<span>' + currentNumber + '</span>' + '/' + totalSlides);
        }

         if (currentNumber == totalSlides) {
             $(this).addClass('disabled');
             $('#responsiveGallery-container<?php the_ID(); ?> .flipster__button--prev').removeClass('disabled');
         }
     })

     $('#responsiveGallery-container<?php the_ID(); ?> .flipster__button--prev').on('click', function(){
         $('#responsiveGallery-container<?php the_ID(); ?> .flipster__button--next').removeClass('disabled');

         if (currentNumber > 1) {
            currentNumber = currentNumber - 1;
         }

         if ( totalSlides >= 10 && currentNumber <= 9 ) {
             $('#responsiveGallery-container<?php the_ID(); ?> .carousel-status-coverflow').html( '<span>0' + currentNumber + '</span>' + '/' + totalSlides);
         } else if ( totalSlides > 10 && currentNumber > 10 ) {
               $('#responsiveGallery-container<?php the_ID(); ?> .carousel-status-coverflow').html( '<span>' + currentNumber + '</span>' + '/' + totalSlides);
         } else if ( totalSlides < 10 && currentNumber < 10 ) {
           $('#responsiveGallery-container<?php the_ID(); ?> .carousel-status-coverflow').html( '<span>0' + currentNumber + '</span>' + '/0' + totalSlides);
        } else {
           $('#responsiveGallery-container<?php the_ID(); ?> .carousel-status-coverflow').html( '<span>' + currentNumber + '</span>' + '/' + totalSlides);
        }


         if (currentNumber == 1) {
             $(this).addClass('disabled');
             $('#responsiveGallery-container<?php the_ID(); ?> .flipster__button--next').removeClass('disabled');
         }
     })


});


</script>
