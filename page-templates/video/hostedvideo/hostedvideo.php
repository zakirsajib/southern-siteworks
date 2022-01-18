<?php $home_page_intro_section_bg_video = carbon_get_post_meta( get_the_ID(), 'home_page_intro_section_bg_video' );
$home_page_intro_section_bg_video_url = wp_get_attachment_url( $home_page_intro_section_bg_video );?>

    <div class="self-hosted-video-box top-0 d-flex">

            <?php if ( !empty( carbon_get_post_meta( get_the_ID(), 'home_page_intro_section_bg_video_poster' ) ) ):
                $intro_section_bg_video_poster = carbon_get_post_meta( get_the_ID(), 'home_page_intro_section_bg_video_poster' ); ?>
                <!-- <img
                    class="img-fluid"
                    src="<?php //echo $intro_section_bg_video_poster;?>"
                /> -->
                <?php echo wp_get_attachment_image(
                    $intro_section_bg_video_poster,
                    'hero',
                    '',
                    array( 'class' => 'img-fluid', 'alt' =>'' )
                );
                ?>
            <?php endif; ?>

            <?php get_template_part('inc/play-button');?>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content">
                <div class="triangle-topleft"></div>
                <div class="triangle-topright"></div>

                      <div class="modal-body">
                          <div class="modal-headerx position-relative">
                            <a class="modal-btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <?php svg_inline( modal_close_svg() ); ?>
                            </a>
                          </div>
                          <div class="ratio ratio-16x9">
                                <video id="htmlVideo" width="100%" height="100%" autoplay muted loop controls>
                                    <source src="<?php echo $home_page_intro_section_bg_video_url ?>" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                      </div>
                <div class="triangle-bottomleft"></div>
                <div class="triangle-bottomright"></div>
            </div>
        </div>
    </div>
