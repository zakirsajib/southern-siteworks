<?php get_header() ?>
    <div class="container">
        <div class="row">
            <div class="d-flex flex-column position-relative align-items-sm-center justify-content-center vh-100">
                <header>
                    <?php if ( !empty( carbon_get_theme_option( 'southern_404_heading' ) ) ):
                        $southern_404_heading = carbon_get_theme_option( 'southern_404_heading' );?>
                        <h1><?php echo $southern_404_heading; ?></h1>
                    <?php endif; ?>
                </header>
                <div class="col-lg-6 mx-auto">
                    <?php if ( !empty( carbon_get_theme_option( 'southern_404_description' ) ) ):
                        $southern_404_description = carbon_get_theme_option( 'southern_404_description' );?>
                        <p class="p-5"><?php echo $southern_404_description; ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer() ?>
