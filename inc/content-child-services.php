<!-- <div class="header-bg-overlay"></div> -->
<div class="about-child-service">
    <div class="container-fluid g-0">
        <div class="row g-0">
            <header class="d-flex flex-column position-relative align-items-start align-items-sm-center justify-content-center ps-3 pe-3">
                <div class="about-child-service-header">
                    <?php if ( !empty( carbon_get_post_meta( get_the_ID(), 'about_service_section_heading' ) ) ):
                        $about_service_section_heading = carbon_get_post_meta( get_the_ID(), 'about_service_section_heading' );

                        $first_string = stringFirstExtract( $about_service_section_heading ); ?>
                        <h2 class="text-capitalize">
                            <?php echo '<span> '. $first_string.' </span>' . trim( strstr($about_service_section_heading," ") );?>
                        </h2>


                    <?php else: ?>
                    <h2 class="text-capitalize"><span>About</span> The Service</h2>
                <?php endif; ?>
                </div>
            </header>
        </div>
        <div class="row g-0">
            <div class="col-12 col-md about-image g-0">
                <?php if ( !empty( carbon_get_post_meta( get_the_ID(), 'about_service_section_image' ) ) ):
                    $about_service_section_image = carbon_get_post_meta( get_the_ID(), 'about_service_section_image' );?>

                    <!-- <img src="<?php //echo $about_service_section_image; ?>" class="img-fluid w-100" alt="Southern Siteworks About the service"/> -->

                    <?php echo wp_get_attachment_image(
                        $about_service_section_image,
                        array('1109', '654'),
                        '',
                        array( 'class' => 'img-fluid w-100', 'alt' =>'Southern Siteworks About the service' )
                    );
                    ?>


                <?php else:?>
                    <img src="https://picsum.photos/id/1000/5626/3635" class="img-fluid w-100" />
                    <!-- <div class="alert alert-danger m-5Z" role="alert">No IMAGE is found!</div> -->
                <?php endif; ?>
            </div>
            <div class="col-12 col-md-4 g-0">
                <div class="about-contents d-flex flex-column align-items-start justify-content-center h-100 flex-wrap">
                    <h3><?php the_title()?></h3>
                    <?php if ( !empty( carbon_get_post_meta( get_the_ID(), 'about_service_section_description' ) ) ):
                    $about_service_section_description = carbon_get_post_meta( get_the_ID(), 'about_service_section_description' );?>
                    <p><?php echo $about_service_section_description; ?></p>
                <?php else:?>
                    <p>Morbixx arcu dictumst mauris nulla fermentum. A, bibendum ut mattis elit consectetur in cras malesuada. Augue feugiat lorem nec fringilla in ut. Scelerisque malesuada velit, duis velit sagittis urna porta. Porttitor ac tortor dictumst placerat lobortis et in. Ultrices scelerisque tortor sit aliquam justo diam scelerisque venenatis. Ac a euismod ac risus. Pulvinar mattis eget ullamcorper consectetur est iaculis posuere duis. Feugiat orci nulla ornare ac vel. Scelerisque luctus id semper vestibulum tempor quam scelerisque elit.</p>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
