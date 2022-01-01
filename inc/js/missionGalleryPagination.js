$ = jQuery.noConflict();
$(function ($) {
    "use strict";


            var currentNumber = 1;
            var totalSlides = $('#carouselMission .carousel-cell').length;
             console.log(totalSlides);
             if (totalSlides > 10) {
                 $('.carousel-status').html( '<span>0' + currentNumber + '</span>' + '/' + totalSlides);
             } else {
                 $('.carousel-status').html( '<span>0' + currentNumber + '</span>' + '/0' + totalSlides);
             }

             $('#carouselMission .flickity-button.flickity-prev-next-button.next').on('click', function(){
                 $('#carouselMission .flickity-button.flickity-prev-next-button.previous').removeClass('disabled');
                 currentNumber = currentNumber + 1;

                 if ( totalSlides >= 10 && currentNumber <= 9 ) {
                     $('.carousel-status').html( '<span>0' + currentNumber + '</span>' + '/' + totalSlides);
                 } else if ( totalSlides > 10 && currentNumber > 10 ) {
                     $('.carousel-status').html( '<span>' + currentNumber + '</span>' + '/' + totalSlides);
                 } else if ( totalSlides < 10 && currentNumber < 10 ) {
                     $('.carousel-status').html( '<span>0' + currentNumber + '</span>' + '/0' + totalSlides);
                } else {
                    $('.carousel-status').html( '<span>' + currentNumber + '</span>' + '/' + totalSlides);
                }

                 if (currentNumber == totalSlides) {
                     $(this).addClass('disabled');
                     $('#carouselMission .flickity-button.flickity-prev-next-button.previous').removeClass('disabled');
                 }
             })

             $('#carouselMission .flickity-button.flickity-prev-next-button.previous').on('click', function(){
                 $('#carouselMission .flickity-button.flickity-prev-next-button.next').removeClass('disabled');
                 currentNumber = currentNumber - 1;

                 if ( totalSlides >= 10 && currentNumber <= 9 ) {
                     $('.carousel-status').html( '<span>0' + currentNumber + '</span>' + '/' + totalSlides);
                 } else if ( totalSlides > 10 && currentNumber > 10 ) {
                     $('.carousel-status').html( '<span>' + currentNumber + '</span>' + '/' + totalSlides);
                 } else if ( totalSlides < 10 && currentNumber < 10 ) {
                     $('.carousel-status').html( '<span>0' + currentNumber + '</span>' + '/0' + totalSlides);
                } else {
                    $('.carousel-status').html( '<span>' + currentNumber + '</span>' + '/' + totalSlides);
                }


                 if (currentNumber == 1) {
                     $(this).addClass('disabled');
                     $('#carouselMission .flickity-button.flickity-prev-next-button.next').removeClass('disabled');
                 }
             })
    
});
