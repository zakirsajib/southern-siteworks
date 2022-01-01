<?php global $results; ?>

<div class="southernsiteworksprojects">
    <div class="southernsiteworksprojects-inner">
        <div class="container">
            <div class="flex-column flex-lg-row flex-sm-column d-flex justify-content-lg-around align-items-lg-flex-start align-items-md-start">
                    <div class="catList order-last order-sm-last order-lg-first">

                        <form name ="projectcat" action="" method="post">
                            <select
                                name="showresults"
                                id="projectCat"
                            >
                            <?php
							// $results = get_option('project_term_new_id', $results);
							// 	if(isset($_POST['showresults'])){
							// 		$results = $_POST['showresults'];
							// 		update_option('project_term_new_id', $results);
							// 		$results = get_option('project_term_new_id', $results);
							// 	}

                            // if(isset($_POST['showresults'])) {
                            //     $results = $_POST['showresults'];
                            //
                            // }


                            $args = array(
                               'taxonomy' => 'projectcategory',
                               'orderby' => 'name',
                               'order'   => 'ASC'
                            );

                            $cats = get_categories($args);?>
                            <option <?php if( $results == 'all' ) { echo 'selected="selected"';}?> value="all">All Categories</option>

                            <?php foreach($cats as $cat): ?>

                                <option <?php if( $results==$cat->name ){ echo 'selected="selected"';}?> value="<?php echo $cat->name; ?>"><?php echo $cat->name; ?></option>

                            <?php endforeach; ?>

                            </select>
                            <!-- <input type="hidden" value="Go" id="cat-submit"> -->
                        </form>


                    </div>
                    <div class="heading-parent">
                        <?php if ( !empty( carbon_get_theme_option( 'whatwedone_section_heading' ) ) ):
                            $whatwedone_section_heading = carbon_get_theme_option( 'whatwedone_section_heading' );
                            $first_string = stringFirstExtract( $whatwedone_section_heading ); ?>
                            <h2>
                                <?php echo '<span> '. $first_string.' </span>' . trim( strstr($whatwedone_section_heading," ") );?>
                            </h2>

                        <?php endif; ?>
                        <?php if ( !empty( carbon_get_theme_option( 'whatwedone_section_subheading' ) ) ):
                            $whatwedone_section_subheading = carbon_get_theme_option( 'whatwedone_section_subheading' );?>
                            <p class="text-uppercase text-lg-end text-sm-start"><?php echo $whatwedone_section_subheading; ?></p>
                        <?php endif; ?>
                    </div>
            </div>

        </div>


        <div class="container-fluid g-0 projects-gallery">
            <div class="row ps-0 ps-sm-4 pe-4">

            <?php
            // All posts from projects if term_id = 0
            //$term_id = get_option( 'project_term_new_id', $results );

           //  if( isset( $_POST[ 'cat' ] ) ){
           //     $term_id = $_POST[ 'cat' ];
           //     //echo 'Others' . $term_id;
           // } else {
           //      $term_id = 0;
           //      //echo 'All' . $term_id;
           //  }



           //echo $term_id;

            //if ($term_id == 0):

            $posts_array = array(
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
            if ( $query->have_posts() ):
                $count = 0; ?>
                <div class="mb-5 pb-5 project-container" data-flickity='{
                        "groupCells": true,
                        "cellAlign": "left",
                        "contain": true,
                        "percentPosition": true,
                        "freeScroll": false,
                        "wrapAround": false,
                        "draggable": true,
                        "pageDots": true
                    }'
                >
                <?php while ( $query->have_posts() ): $query->the_post(); ?>
                    <div class="project-box col-12 col-sm-6 col-md-6 col-lg-3 me-3 <?php the_title(); ?>">
                        <div class="project-image">
                            <?php if ( !empty( carbon_get_post_meta( get_the_ID(), 'featured_projects_gallery' ) ) ):
                                $project_images = carbon_get_post_meta( get_the_ID(), 'featured_projects_gallery' );
                                echo wp_get_attachment_image( $project_images[0], 'project-thumbnail', '', array( "class" => "img-fluid" ) );
                            else:?>
                                <img src="https://picsum.photos/id/1000/382/400" class="img-fluid" />
                            <?php endif; ?>
                        </div>
                        <div class="project-small-meta d-flex flex-column flex-lg-row align-items-start justify-content-between">
                            <div class="project-title text-uppercase">
                                <h4><?php the_title(); ?></h4>
                            </div>
                        </div>

                        <div class="project-more-button">
                            <a
                                href=""
                                data-bs-toggle="modal"
                                data-bs-target="#projectModal<?php echo $count; ?>"
                            >More Info</a>
                        </div>

                        <!-- Gallery Modal -->
                        <div
                            class="fade modal"
                            id="projectModal<?php echo $count; ?>"
                            tabindex="-1"
                            aria-labelledby="projectModalLabel"
                            aria-hidden="true"
                        >
                            <?php
                                // Modal for displaying all images
                                get_template_part( 'inc/project-gallery-modal' );
                            ?>
                        </div>
                        <!-- End Gallery Modal -->



                    </div>




                <?php $count++;
                endwhile;
                wp_reset_postdata(); ?>
            </div> <!-- end project container -->
            <?php else : ?>
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="alert alert-danger m-5" role="alert">
                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    </div>
                </div>
            <?php endif;

            else: // Other Terms of Projects

            $terms_array = array(
                'posts_per_page' => -1,
                'post_type' => 'southern_projects',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'projectcategory',
                        //'operator' => 'EXISTS', // all posts from project CPT
                        //'field' => 'slug',
                        'terms'   => $term_id,
                        //'terms' => get_option( 'project_term_id' ) //$term_id, // speciic terms
                    )
                )
            );

            $queryterms = new WP_Query($terms_array);
            if ( $queryterms->have_posts() ):
                $count = 0; ?>
                <div class="mb-5 pb-5 project-container" data-flickity='{
                        "groupCells": true,
                        "cellAlign": "left",
                        "contain": true,
                        "percentPosition": true,
                        "freeScroll": false,
                        "wrapAround": false,
                        "draggable": false,
                        "pageDots": true
                    }'
                >
                <?php while ( $queryterms->have_posts() ): $queryterms->the_post(); ?>
                    <div class="project-box col-12 col-sm-6 col-md-6 col-lg-3 me-3 <?php the_title(); ?>">
                        <div class="project-image">

                            <?php if ( !empty( carbon_get_post_meta( get_the_ID(), 'featured_projects_gallery' ) ) ):
                                $project_images = carbon_get_post_meta( get_the_ID(), 'featured_projects_gallery' );
                                echo wp_get_attachment_image( $project_images[0], 'project-thumbnail', '', array( "class" => "img-fluid" ) );
                            else: ?>
                                <img src="https://picsum.photos/id/1000/382/400" class="img-fluid" />
                            <?php endif; ?>
                        </div>
                        <div class="project-small-meta d-flex flex-column flex-lg-row align-items-start justify-content-between">
                            <div class="project-title text-uppercase">
                                <h4><?php the_title(); ?></h4>
                            </div>
                        </div>

                        <div class="project-more-button">
                            <a
                                href=""
                                data-bs-toggle="modal"
                                data-bs-target="#projectModal<?php echo $count; ?>"
                            >More Info</a>
                        </div>

                        <!-- Gallery Modal -->
                        <div
                            class="fade modal"
                            id="projectModal<?php echo $count; ?>"
                            tabindex="-1"
                            aria-labelledby="projectModalLabel"
                            aria-hidden="true"
                        >
                            <?php
                                // Modal for displaying all images
                                get_template_part( 'inc/project-gallery-modal' );
                            ?>
                        </div>
                        <!-- End Gallery Modal -->



                    </div>




                <?php $count++;
                endwhile;
                wp_reset_postdata(); ?>
            </div> <!-- end project container -->
            <?php else : ?>
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="alert alert-danger m-5" role="alert">
                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    </div>
                </div>
            <?php endif;


            endif; ?>

            </div>
        </div>
    </div>



</div>
