<div class="clients-logo">
    <div class="main-carousel"
        data-flickity='{
            "groupCells": true,
            "prevNextButtons": false,
            "pageDots": false,
            "freeScroll": true,
            "wrapAround": true,
            "autoPlay": true,
            "pauseAutoPlayOnHover": false,
            "draggable": false
        }'>

        <?php
        if ( !empty( carbon_get_post_meta( get_the_ID(), 'client_logos' ) ) ):
            $southern_logo_items = carbon_get_post_meta(get_the_ID(), 'client_logos');
            foreach ($southern_logo_items as $southern_logo_item) { ?>
                <div class="carousel-cell">
                    <span class="green-overlay">
                    <a href="<?php echo $southern_logo_item['client_logo_url']; ?>" target="_blank">
                    <img
                        src="<?php echo wp_get_attachment_url( $southern_logo_item['client_logo'] ) ?>"
                        alt=""
                        class="img-fluid mx-auto"
                    /></a></span>
                </div>
            <?php }
        endif; ?>
    </div>
</div>
