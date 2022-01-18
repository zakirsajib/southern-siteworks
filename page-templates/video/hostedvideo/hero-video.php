<?php $home_page_intro_section_hero_video = carbon_get_post_meta( get_the_ID(), 'home_page_intro_section_bg_hero_video' );
$home_page_intro_section_hero_video_url = wp_get_attachment_url( $home_page_intro_section_hero_video );?>

    <div class="self-hosted-video-box top-0 d-flex" id="bgVideo">

            <div class="ratio ratio-16x9 self-hosted-video-box-width">
              <video id="htmlVideo" width="100%" height="100%" autoplay muted loop>
                  <source src="<?php echo $home_page_intro_section_hero_video_url ?>" type="video/mp4">
                  Your browser does not support the video tag.
              </video>
            </div>
        
    </div>
