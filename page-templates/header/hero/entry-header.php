<?php
/**
 * Displays the post header
 *
 * @subpackage southernsiteworks
 */

    if ( !empty( carbon_get_post_meta( get_the_ID(), 'hero_section_heading' ) ) ):
        $hero_section_heading = carbon_get_post_meta( get_the_ID(), 'hero_section_heading' );

        $first_string = stringFirstExtract( $hero_section_heading );

        if( is_front_page() ): ?>
            <h1 class="entry-title">
                <?php echo '<span class="line-break"> '. $first_string.' </span>' . trim( strstr($hero_section_heading," ") );?>
            </h1>
        <?php else: ?>
            <h1 class="entry-title">
                <?php echo '<span> '. $first_string.' </span>' . trim( strstr($hero_section_heading," ") );?>
            </h1>
        <?php endif;

    else:
        the_title( '<h1 class="entry-title">', '</h1>' );
    endif;
    if ( !empty( carbon_get_post_meta( get_the_ID(), 'hero_section_subheading' ) ) ):
        $hero_section_subheading = carbon_get_post_meta( get_the_ID(), 'hero_section_subheading' );
            if( is_front_page() ): ?>
                <div class="southern-tagline">
                    <p class="text-uppercase"><?php echo $hero_section_subheading; ?></p>
                </div>
            <?php else: ?>
                <div class="southern-tagline other-pages">
                    <p class="fw-normal"><?php echo $hero_section_subheading; ?></p>
                </div>
            <?php endif; ?>
    <?php endif; ?>

    <?php if ( !empty( carbon_get_post_meta( get_the_ID(), 'hero_section_cta_btn_label' ) ) &&
    !empty( carbon_get_post_meta( get_the_ID(), 'hero_section_cta_btn_url' ) ) ):
        $hero_section_cta_btn_label = carbon_get_post_meta( get_the_ID(), 'hero_section_cta_btn_label' );
        $hero_section_cta_btn_url = carbon_get_post_meta( get_the_ID(), 'hero_section_cta_btn_url' ); ?>
        <div class="cta-button">
            <?php if( is_page('careers') ): // Join Us Ninja form Modal?>
                <a
                    href="#"
                    class="ss-button popup"
                    data-bs-toggle="modal"
                    data-bs-dismiss="modal"
                    data-bs-target="#joinModal1"
                ><?php echo $hero_section_cta_btn_label; ?></a>
            <?php else: ?>
                <a href="<?php echo $hero_section_cta_btn_url; ?>" class="ss-button"><?php echo $hero_section_cta_btn_label; ?></a>
            <?php endif; ?>
        </div>
    <?php endif; ?>
