$ = jQuery.noConflict();
$(function ($) {
    "use strict";

    const mediaQuery = window.matchMedia('(min-width: 992px)');
    mediaQuery.addListener(handleMobileTabletChange);
    handleMobileTabletChange(mediaQuery);

    function handleMobileTabletChange(e) {

        if (e.matches) {
            var currentNumber = 1;
            var totalSlides = $('.carousel.desktop .carousel-cell').length;
             if (totalSlides > 10) {
                 $('.desktop-slide .carousel-status').html( '<span>0' + currentNumber + '</span>' + '/' + totalSlides);
             } else {
                 $('.desktop-slide .carousel-status').html( '<span>0' + currentNumber + '</span>' + '/0' + totalSlides);
             }

             $('.carousel.desktop .flickity-button.flickity-prev-next-button.next').on('click', function(){
                 $('.carousel.desktop .flickity-button.flickity-prev-next-button.previous').removeClass('disabled');
                 currentNumber = currentNumber + 1;
                 if ( totalSlides >= 10 && currentNumber <= 9 ) {
                     $('.desktop-slide .carousel-status').html( '<span>0' + currentNumber + '</span>' + '/' + totalSlides);
                 } else if ( totalSlides > 10 && currentNumber > 10 ) {
                     $('.desktop-slide .carousel-status').html( '<span>' + currentNumber + '</span>' + '/' + totalSlides);
                 } else if ( totalSlides < 10 && currentNumber < 10 ) {
                     $('.desktop-slide .carousel-status').html( '<span>0' + currentNumber + '</span>' + '/0' + totalSlides);
                } else {
                    $('.desktop-slide .carousel-status').html( '<span>' + currentNumber + '</span>' + '/' + totalSlides);
                }

                 if (currentNumber == totalSlides) {
                     $(this).addClass('disabled');
                     $('.carousel.desktop .flickity-button.flickity-prev-next-button.previous').removeClass('disabled');
                 }
             })

             $('.carousel.desktop .flickity-button.flickity-prev-next-button.previous').on('click', function(){
                 $('.carousel.desktop .flickity-button.flickity-prev-next-button.next').removeClass('disabled');
                 currentNumber = currentNumber - 1;
                 if ( totalSlides >= 10 && currentNumber <= 9 ) {
                     $('.desktop-slide .carousel-status').html( '<span>0' + currentNumber + '</span>' + '/' + totalSlides);
                 } else if ( totalSlides > 10 && currentNumber > 10 ) {
                     $('.desktop-slide .carousel-status').html( '<span>' + currentNumber + '</span>' + '/' + totalSlides);
                 } else if ( totalSlides < 10 && currentNumber < 10 ) {
                     $('.desktop-slide .carousel-status').html( '<span>0' + currentNumber + '</span>' + '/0' + totalSlides);
                } else {
                    $('.desktop-slide .carousel-status').html( '<span>' + currentNumber + '</span>' + '/' + totalSlides);
                }


                 if (currentNumber == 1) {
                     $(this).addClass('disabled');
                     $('.carousel.desktop .flickity-button.flickity-prev-next-button.next').removeClass('disabled');
                 }
             })
        } else {
            var currentNumberMobile = 1;
            var totalSlidesMobile = $('.carouselM .carousel-cell').length;
             console.log(totalSlidesMobile);
             if (totalSlidesMobile > 10) {
                 $('.carousel-status-mobile').html( '<span>0' + currentNumberMobile + '</span>' + '/' + totalSlidesMobile);
             } else {
                 $('.carousel-status-mobile').html( '<span>0' + currentNumberMobile + '</span>' + '/0' + totalSlidesMobile);
             }

             $('.carouselM .flickity-button.flickity-prev-next-button.next').on('click', function(){
                 $('.carouselM .flickity-button.flickity-prev-next-button.previous').removeClass('disabled');
                 currentNumberMobile = currentNumberMobile + 1;

                 if ( totalSlidesMobile >= 10 && currentNumberMobile <= 9 ) {
                     $('.carousel-status-mobile').html( '<span>0' + currentNumberMobile + '</span>' + '/' + totalSlidesMobile);
                 } else if ( totalSlidesMobile > 10 && currentNumberMobile > 10 ) {
                       $('.carousel-status-mobile').html( '<span>' + currentNumberMobile + '</span>' + '/' + totalSlidesMobile);
                 } else if ( totalSlidesMobile < 10 && currentNumberMobile < 10 ) {
                   $('.carousel-status-mobile').html( '<span>0' + currentNumberMobile + '</span>' + '/0' + totalSlidesMobile);
                } else {
                   $('.carousel-status-mobile').html( '<span>' + currentNumberMobile + '</span>' + '/' + totalSlidesMobile);
                }

                 if (currentNumberMobile == totalSlidesMobile) {
                     $(this).addClass('disabled');
                     $('.carouselM .flickity-button.flickity-prev-next-button.previous').removeClass('disabled');
                 }
             })

             $('.carouselM .flickity-button.flickity-prev-next-button.previous').on('click', function(){
                 $('.carouselM .flickity-button.flickity-prev-next-button.next').removeClass('disabled');
                 currentNumberMobile = currentNumberMobile - 1;

                 if ( totalSlidesMobile >= 10 && currentNumberMobile <= 9 ) {
                     $('.carousel-status-mobile').html( '<span>0' + currentNumberMobile + '</span>' + '/' + totalSlidesMobile);
                 } else if ( totalSlidesMobile > 10 && currentNumberMobile > 10 ) {
                       $('.carousel-status-mobile').html( '<span>' + currentNumberMobile + '</span>' + '/' + totalSlidesMobile);
                 } else if ( totalSlidesMobile < 10 && currentNumberMobile < 10 ) {
                   $('.carousel-status-mobile').html( '<span>0' + currentNumberMobile + '</span>' + '/0' + totalSlidesMobile);
                } else {
                   $('.carousel-status-mobile').html( '<span>' + currentNumberMobile + '</span>' + '/' + totalSlidesMobile);
                }


                 if (currentNumberMobile == 1) {
                     $(this).addClass('disabled');
                     $('.carouselM .flickity-button.flickity-prev-next-button.next').removeClass('disabled');
                 }
             })
        }
    }
});
