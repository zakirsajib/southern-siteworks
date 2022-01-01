<?php if ( !empty( carbon_get_post_meta( get_the_ID(), 'home_page_intro_section_hero_image' ) ) ):

    $home_page_intro_section_hero_image = carbon_get_post_meta( get_the_ID(), 'home_page_intro_section_hero_image' );?>

    <div class="featured-image-box top-0 h-100 d-flex">
        <!-- <img
            src="<?php //echo $home_page_intro_section_hero_image ?>"
            class="img-fluid"
            alt=""
        > -->
        <?php echo wp_get_attachment_image(
            $home_page_intro_section_hero_image,
            'hero',
            '',
            array( 'class' => 'img-fluid', 'alt' =>'' )
        );
        ?>
    </div>

<?php else:
    if ( !empty( carbon_get_post_meta( get_the_ID(), 'home_page_intro_section_bg_video' ) ) ):

        get_template_part( 'page-templates/video/hostedvideo/hostedvideo' );

    elseif ( !empty( carbon_get_post_meta( get_the_ID(), 'home_page_intro_section_youtube_popup_video_link' ) ) ):

        get_template_part( 'page-templates/video/youtube/yt-video' );

    elseif ( !empty( carbon_get_post_meta( get_the_ID(), 'home_page_intro_section_bg_hero_video' ) ) ):

        get_template_part( 'page-templates/video/hostedvideo/hero-video' );

    else: ?>
        <div class="empty-box top-0 h-100 justify-content-center d-flex align-items-center" role="alert">
            <img
                class="img-fluid"
                src="https://via.placeholder.com/1920x1920.png?text=No+Video+or+Image+Found!"
            />
        </div>
    <?php endif; ?>

<?php endif; ?>
