<?php $home_page_intro_section_youtube_popup_video_link = carbon_get_post_meta( get_the_ID(), 'home_page_intro_section_youtube_popup_video_link' ); ?>
<div class="youtubeVideo top-0 h-100 d-flex">
            <img
                class="img-fluid"
                src="//img.youtube.com/vi/<?php echo $home_page_intro_section_youtube_popup_video_link ?>/maxresdefault.jpg"
            />
            <?php get_template_part('inc/play-button');?>


    <!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
    <!-- <div id="youtubeEmbed"></div>

        <script>
          // Load the IFrame Player API code asynchronously.
          var tag = document.createElement('script');
          tag.src = "https://www.youtube.com/player_api";
          var firstScriptTag = document.getElementsByTagName('script')[0];
          firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

          // Replace the 'ytplayer' element with an <iframe> and
          // YouTube player after the API code downloads.
          var player;
          function onYouTubePlayerAPIReady() {
            player = new YT.Player('youtubeEmbed', {
                className: 'player',
                //height: '1051',
                //width: '1868.4444444444443',
                videoId: '<?php //echo $home_page_intro_section_youtube_popup_video_link ?>',
                playerVars: {
                    'autoplay': 1,
                    'controls': 0,
                    'origin': 'http://first-project-harbinger.local/',
                    'enablejsapi': 1
                },
                events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
              }
            });
          }

          // 4. The API will call this function when the video player is ready.
          function onPlayerReady(event) {
            event.target.playVideo();
          }

          // 5. The API calls this function when the player's state changes.
          //    The function indicates that when playing a video (state=1),
          //    the player should play for six seconds and then stop.
          var done = false;
          function onPlayerStateChange(event) {
            if (event.data == YT.PlayerState.PLAYING && !done) {
              setTimeout(stopVideo, 6000);
              done = true;
            }
          }
          function stopVideo() {
            player.stopVideo();
          }

        </script> -->

    <!-- </div> -->
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
                      <div class="ratio ratio-16x9 d-none d-md-block d-lg-block d-xl-block d-xxl-block">
                          <?php //get_video_embed_code_by_url($home_page_intro_section_youtube_popup_video_link); ?>
                          <iframe
                            id="youtubeEmbed"
                            class="player loaded"
                            width="800"
                            height="450"
                            allow="autoplay"
                            src="https://www.youtube.com/embed/<?php echo $home_page_intro_section_youtube_popup_video_link ?>?autoplay=1&mute=1&controls=1&loop=1&modestbranding=1&rel=0&showinfo=0&autohide=0&disablekb=1"></iframe>
                      </div>
                      <div class="ratio ratio-1x1 d-md-none d-lg-none d-xl-none d-xxl-none">
                          <iframe
                            id="youtubeEmbed"
                            class="player loaded"
                            width="800"
                            height="450"
                            allow="autoplay"
                            src="https://www.youtube.com/embed/<?php echo $home_page_intro_section_youtube_popup_video_link ?>?autoplay=1&mute=1&controls=1&loop=1&modestbranding=1&rel=0&showinfo=0&autohide=0&disablekb=1"></iframe>
                      </div>
                  </div>
            <div class="triangle-bottomleft"></div>
            <div class="triangle-bottomright"></div>
        </div>
    </div>
</div>
