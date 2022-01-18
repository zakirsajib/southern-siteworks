<?php //global $showresults; ?>

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
                                $args = array(
                                   'taxonomy' => 'projectcategory',
                                   'orderby' => 'name',
                                   'order'   => 'ASC'
                                );

                                $cats = get_categories($args);?>
                                <option <?php //if( $showresults == 'all' ) { echo 'selected="selected"';}?> value="all">All Categories</option>

                                <?php foreach($cats as $cat): ?>
                                    <option
                                        value="<?php echo $cat->name; ?>" <?php //selected($cat->name, $showresults);?>>
                                        <?php echo $cat->name; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
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
            <div class="row ps-0 ps-sm-5 ps-md-5">

            <?php
            $posts_array = array(
                'posts_per_page' => -1,
                'post_type' => 'southern_projects',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'projectcategory',
                        'operator' => 'EXISTS', // all posts from project CPT
                    )
                )
            );

            $query = new WP_Query($posts_array);
            if ( $query->have_posts() ):
                $count = 0; ?>
                <div class="pb-5 project-container" data-flickity='{
                        "groupCells": true,
                        "cellAlign": "left",
                        "contain": false,
                        "percentPosition": false,
                        "freeScroll": false,
                        "wrapAround": false,
                        "draggable": true,
                        "pageDots": false
                    }'
                >
                <?php

                while ( $query->have_posts() ): $query->the_post();
                    $terms = wp_get_post_terms( get_the_ID(), 'projectcategory', [ 'fields' => 'names' ] );?>

                    <div class="item project-box col-12 col-sm-6 col-md-6 col-lg-3 me-3 <?php echo implode( ' ', $terms ); ?>">
                        <div class="project-image">
                            <?php if ( !empty( carbon_get_post_meta( get_the_ID(), 'featured_projects_gallery' ) ) ):
                                $project_images = carbon_get_post_meta( get_the_ID(), 'featured_projects_gallery' );
                                echo wp_get_attachment_image( $project_images[0], 'project-thumbnail', '', array( "class" => "img-fluid" ) );
                            else:?>
                                <img src="https://picsum.photos/id/1000/382/400" class="img-fluid" />
                            <?php endif; ?>
                        </div>
                        <div class="ps-3 pe-3 pt-3 pb-3 project-meta">
                            <div class="project-small-meta d-flex flex-column flex-lg-row align-items-md-start align-items-center justify-content-between">
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

                    </div> <!-- end .project-box -->

                <?php $count++; endwhile; wp_reset_postdata(); ?>
                </div> <!-- end project container -->
            <?php endif; ?>
            </div> <!-- end row -->
        </div> <!-- end projects-gallery -->
    </div> <!-- end southernsiteworksprojects-inner -->
</div> <!-- end southernsiteworksprojects -->
