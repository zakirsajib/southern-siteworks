
<?php $posts_array = array(
    'posts_per_page' => -1,
    'post_type' => 'southern_projects',
    'tax_query' => array(
        array(
            'taxonomy' => 'projectcategory',
            'operator' => 'EXISTS', // all posts from project CPT
            //'field' => 'slug',
            //'terms' => 'commercial', // speciic terms
        )
    )
);

$query = new WP_Query($posts_array);
if ( $query->have_posts() ): ?>




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

                                            <?php while ( $query->have_posts() ): $query->the_post(); ?>

                                            <?php

                                                if ( !empty( carbon_get_post_meta( get_the_ID(), 'featured_projects_gallery' ) ) ):
                                                      $featured_projects_gallery = carbon_get_post_meta(get_the_ID(), 'featured_projects_gallery');

                                                      foreach ($featured_projects_gallery as $project_slide) { ?>

                                                        <li
                                                            class="responsiveGallery-item <?php the_title(); ?>"
                                                        >
                                                        <?php echo wp_get_attachment_image( $project_slide, array('929', '674'), '', array( "class" => "img-fluid" ) );  ?>
                                                        </li>



                                                    <?php }
                                                //else: ?>
                                                        <!-- <div class="alert alert-danger m-5" role="alert">No GALLERY found!</div> -->
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
