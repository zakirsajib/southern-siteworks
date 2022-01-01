$ = jQuery.noConflict();
$(function ($) {
    "use strict";

    // Gallery Coverflow Modal

    var carousel = $(".responsiveGallery-container").flipster({
        style: 'carousel',
        spacing: -0.5,
        nav: false,
        buttons: true,
        start: 0,
        keyboard: true,
    });



    // Gallery Pagination
    var currentNumber = 1;
    var totalSlides = $('.flip-items li').length;
     //console.log(totalSlides);
     if (totalSlides > 10) {
         $('.carousel-status-coverflow').html( '<span>0' + currentNumber + '</span>' + '/' + totalSlides);
     } else {
         $('.carousel-status-coverflow').html( '<span>0' + currentNumber + '</span>' + '/0' + totalSlides);
     }

     $('.flipster__button--next').on('click', function(){
         $('.flipster__button--prev').removeClass('disabled');
         currentNumber = currentNumber + 1;

         if ( totalSlides >= 10 && currentNumber <= 9 ) {
             $('.carousel-status-coverflow').html( '<span>0' + currentNumber + '</span>' + '/' + totalSlides);
         } else if ( totalSlides > 10 && currentNumber > 10 ) {
               $('.carousel-status-coverflow').html( '<span>' + currentNumber + '</span>' + '/' + totalSlides);
         } else if ( totalSlides < 10 && currentNumber < 10 ) {
           $('.carousel-status-coverflow').html( '<span>0' + currentNumber + '</span>' + '/0' + totalSlides);
        } else {
           $('.carousel-status-coverflow').html( '<span>' + currentNumber + '</span>' + '/' + totalSlides);
        }

         if (currentNumber == totalSlides) {
             $(this).addClass('disabled');
             $('.flipster__button--prev').removeClass('disabled');
         }
     })

     $('.flipster__button--prev').on('click', function(){
         $('.flipster__button--next').removeClass('disabled');

         if (currentNumber > 1) {
            currentNumber = currentNumber - 1;
         }

         if ( totalSlides >= 10 && currentNumber <= 9 ) {
             $('.carousel-status-coverflow').html( '<span>0' + currentNumber + '</span>' + '/' + totalSlides);
         } else if ( totalSlides > 10 && currentNumber > 10 ) {
               $('.carousel-status-coverflow').html( '<span>' + currentNumber + '</span>' + '/' + totalSlides);
         } else if ( totalSlides < 10 && currentNumber < 10 ) {
           $('.carousel-status-coverflow').html( '<span>0' + currentNumber + '</span>' + '/0' + totalSlides);
        } else {
           $('.carousel-status-coverflow').html( '<span>' + currentNumber + '</span>' + '/' + totalSlides);
        }


         if (currentNumber == 1) {
             $(this).addClass('disabled');
             $('.flipster__button--next').removeClass('disabled');
         }
     })


});
