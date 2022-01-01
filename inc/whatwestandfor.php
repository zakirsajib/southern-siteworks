<div class="who-we-stand-for-bg">
    <div class="who-we-stand-for-contents">
        <div class="container">
            <div class="row">
                <header class="d-flex flex-column position-relative align-items-sm-center justify-content-center">
                    <div class="who-we-are-stand-header">
                        <div class="text-center">
                            <?php if ( !empty( carbon_get_theme_option( 'whatwestand_section_heading' ) ) ):
                                $whatwestand_section_heading = carbon_get_theme_option( 'whatwestand_section_heading' );

                                $first_string = stringFirstExtract( $whatwestand_section_heading ); ?>
                                <h2>
                                    <?php echo '<span> '. $first_string.' </span>' . trim( strstr($whatwestand_section_heading," ") );?>
                                </h2>

                            <?php endif; ?>
                        </div>
                        <div class="southern-values-heading text-center text-sm-end">
                            <?php if ( !empty( carbon_get_theme_option( 'whatwestand_value_section_heading' ) ) ):
                                $whatwestand_value_section_heading = carbon_get_theme_option( 'whatwestand_value_section_heading' );?>
                                <p class="text-uppercase"><?php echo $whatwestand_value_section_heading; ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </header>
            </div>
            <div class="row">
                <div class="southern-values d-flex align-items-center justify-content-center">

                    <div class="container-md container-xsl">
                        <div class="row d-none d-md-flex">

                            <?php
                            if ( !empty( carbon_get_theme_option( 'whatwestand_media_item' ) ) ):
                                $values = carbon_get_theme_option('whatwestand_media_item');
                                foreach ($values as $value) {
                                //$value_icon= wp_get_attachment_url( $value['value_icon'] );
                                //echo $value['value_icon'];
                                //echo $value_icon;
                                //echo $value['value_title'];
                                ?>


                                <div class="card col text-center">
                                    <img
                                        src="<?php echo wp_get_attachment_url( $value['value_icon'] ) ?>"
                                        alt="<?php echo $value['value_title']?>"
                                        width="140"
                                        height="140"
                                        class="img-fluid mx-auto"
                                    />
                                  <div class="card-body">
                                    <p class="card-text text-uppercase">
                                        <?php echo stringFirstWordBreak( $value['value_title'] ); ?>
                                    </p>
                                  </div>
                                </div>

                            <?php } endif; ?>

                        </div>

                        <div class="row d-md-none d-sm-flex">
                            <div class="main-carousel"
                                data-flickity='{
                                    "groupCells": 2,
                                    "prevNextButtons": false,
                                    "pageDots": false,
                                    "freeScroll": true,
                                    "contain": true,
                                    "wrapAround": true
                                }'>
                                <?php
                                if ( !empty( carbon_get_theme_option( 'whatwestand_media_item' ) ) ):
                                    $values = carbon_get_theme_option('whatwestand_media_item');
                                    foreach ($values as $value) { ?>
                                        <div class="carousel-cell card col text-center">
                                            <img
                                                src="<?php echo wp_get_attachment_url( $value['value_icon'] ) ?>"
                                                alt="<?php echo $value['value_title']?>"
                                                width="140"
                                                height="140"
                                                class="img-fluid mx-auto"
                                            />
                                          <div class="card-body">
                                            <p class="card-text text-uppercase"><?php echo $value['value_title']?></p>
                                          </div>
                                        </div>
                                    <?php }
                                endif; ?>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
