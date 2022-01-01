<div class="positions-container" id="positionsContainer">
    <div class="container">
        <div class="row g-0">
            <header class="d-flex flex-column position-relative align-items-start align-items-sm-center justify-content-center ps-4 pe-4">
                <div class="positions-header">
                        <?php if ( !empty( carbon_get_post_meta( get_the_ID(), 'positions_section_heading' ) ) ):
                            $positions_section_heading = carbon_get_post_meta( get_the_ID(), 'positions_section_heading' );

                            $first_string = stringFirstExtract( $positions_section_heading ); ?>
                            <h2>
                                <?php echo '<span> '. $first_string.' </span>' . trim( strstr($positions_section_heading," ") );?>
                            </h2>

                        <?php endif; ?>
                    <div class="positions-heading text-start text-sm-end">
                        <?php if ( !empty( carbon_get_post_meta( get_the_ID(), 'positions_section_subheading' ) ) ):
                            $positions_section_subheading = carbon_get_post_meta( get_the_ID(), 'positions_section_subheading' );?>
                            <p class="text-uppercase"><?php echo $positions_section_subheading; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </header>
        </div>
    </div>
    <div class="container">
        <div class="row ps-4 pe-4">

            <?php
                global $count;
                $southern_positions_args = array(

                    'post_type'         => 'southern_positions',
                    'post_status'       => 'publish',
                    'posts_per_page'    => -1,
                    'order'             => 'DESC'

                );

                $southern_positions_query = new WP_Query( $southern_positions_args );

                if ( $southern_positions_query->have_posts() ) :

                    $count = 0;
                    while ( $southern_positions_query->have_posts() ) : $southern_positions_query->the_post(); ?>

                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 pt-40 mt-40">
                            <div class="position-box card h-100">

                                <div class="position-image">
                                    <?php if ( !empty( carbon_get_post_meta( get_the_ID(), 'positions_image' ) ) ):
                                        $positions_image = carbon_get_post_meta( get_the_ID(), 'positions_image' );?>
                                        <img
                                            src="<?php echo $positions_image; ?>"
                                            class="img-fluid"
                                            alt="<?php the_title(); ?>"
                                        />

                                    <?php else:?>
                                        <img src="https://picsum.photos/id/1000/460/400" class="img-fluid" />
                                    <?php endif; ?>
                                </div>
                                <div class="position-small-meta d-flex flex-column flex-lg-row align-items-start justify-content-between">
                                    <div class="position-title text-uppercase">
                                            <h4><?php the_title(); ?></h4>
                                    </div>

                                    <?php if ( !empty( carbon_get_post_meta( get_the_ID(), 'positions_rate' ) ) ):
                                        $positions_rate = carbon_get_post_meta( get_the_ID(), 'positions_rate' );?>
                                        <div class="position-rate text-uppercase"><h4><?php echo $positions_rate; ?></h4></div>
                                    <?php else:?>
                                        <div class="position-rate text-uppercase"><h4><p><?php _e( 'Sorry, no information found!' ); ?></p></h4></div>
                                    <?php endif; ?>
                                </div>

                                <div class="position-more-button">
                                    <a
                                        href=""
                                        data-bs-toggle="modal"
                                        data-bs-target="#positionModal<?php echo $count;?>"
                                    >More Info</a>
                                </div>

                                <!-- Job Descriptions Modal -->
                                <div
                                    class="fade modal"
                                    id="positionModal<?php echo $count;?>"
                                    tabindex="-1"
                                    aria-labelledby="positionModalLabel"
                                    aria-hidden="true"
                                >
                                    <?php
                                        // Modal for displaying all position/job's Data
                                        get_template_part( 'inc/position-modal' );
                                    ?>
                                </div>
                                <!-- End Job Descriptions Modal -->

                                <!-- Join Our Team Modal -->
                                <div
                                    class="fade modal"
                                    id="joinModal<?php echo $count;?>"
                                    tabindex="-1"
                                    aria-labelledby="joinModalLabel"
                                    aria-hidden="true"
                                >
                                    <?php
                                        // Modal for job form (Ninja form)
                                        get_template_part( 'inc/join-modal' );
                                    ?>
                                </div>
                                <!-- End Join Our Team Modal -->



                            </div>
                        </div>



                    <?php $count++; endwhile;

                    wp_reset_postdata();

                else : ?>
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="alert alert-danger m-5" role="alert">
                            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>
