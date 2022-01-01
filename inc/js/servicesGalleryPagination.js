$ = jQuery.noConflict();
$(function ($) {
    "use strict";


    const mediaQuery = window.matchMedia('(min-width: 576px)');
    mediaQuery.addListener(handleMobileTabletChange);
    handleMobileTabletChange(mediaQuery);

    function handleMobileTabletChange(e) {
        if( e.matches ) {
            // Gallery Pagination: All

                var currentNumber = 1;
                var totalSlides = $('.Allcarousel .carousel-cell').length;
                 console.log(totalSlides);
                 if (totalSlides > 10) {
                     $('.carousel-status.Allcarousel').html( '<span>0' + currentNumber + '</span>' + '/' + totalSlides);
                 } else {
                     $('.carousel-status.Allcarousel').html( '<span>0' + currentNumber + '</span>' + '/0' + totalSlides);
                 }

                 $('.Allcarousel .flickity-button.flickity-prev-next-button.next').on('click', function(){
                     $('.Allcarousel .flickity-button.flickity-prev-next-button.previous').removeClass('disabled');
                     currentNumber = currentNumber + 1;

                     if ( totalSlides >= 10 && currentNumber <= 9 ) {
                         $('.carousel-status.Allcarousel').html( '<span>0' + currentNumber + '</span>' + '/' + totalSlides);
                     } else if ( totalSlides > 10 && currentNumber > 10 ) {
                         $('.carousel-status.Allcarousel').html( '<span>' + currentNumber + '</span>' + '/' + totalSlides);
                     } else if ( totalSlides < 10 && currentNumber < 10 ) {
                         $('.carousel-status.Allcarousel').html( '<span>0' + currentNumber + '</span>' + '/0' + totalSlides);
                    } else {
                        $('.carousel-status.Allcarousel').html( '<span>' + currentNumber + '</span>' + '/' + totalSlides);
                    }

                     if (currentNumber == totalSlides) {
                         $(this).addClass('disabled');
                         $('.Allcarousel .flickity-button.flickity-prev-next-button.previous').removeClass('disabled');
                     }
                 })

                 $('.Allcarousel .flickity-button.flickity-prev-next-button.previous').on('click', function(){
                     $('.Allcarousel .flickity-button.flickity-prev-next-button.next').removeClass('disabled');
                     currentNumber = currentNumber - 1;

                     if ( totalSlides >= 10 && currentNumber <= 9 ) {
                         $('.carousel-status.Allcarousel').html( '<span>0' + currentNumber + '</span>' + '/' + totalSlides);
                     } else if ( totalSlides > 10 && currentNumber > 10 ) {
                         $('.carousel-status.Allcarousel').html( '<span>' + currentNumber + '</span>' + '/' + totalSlides);
                     } else if ( totalSlides < 10 && currentNumber < 10 ) {
                         $('.carousel-status.Allcarousel').html( '<span>0' + currentNumber + '</span>' + '/0' + totalSlides);
                    } else {
                        $('.carousel-status.Allcarousel').html( '<span>' + currentNumber + '</span>' + '/' + totalSlides);
                    }


                     if (currentNumber == 1) {
                         $(this).addClass('disabled');
                         $('.Allcarousel .flickity-button.flickity-prev-next-button.next').removeClass('disabled');
                     }
                 })


             // Gallery Pagination: Clearning
             $('#pills-Clearing-tab').on('click', function() {

             var currentNumberClearning = 1;
             var totalSlidesClearning = $('.Clearingcarousel .carousel-cell').length;
              console.log(totalSlidesClearning);
              if (totalSlidesClearning > 0) {
                  $('.carousel-status.Clearing').html( '<span>0' + currentNumberClearning + '</span>' + '/0' + totalSlidesClearning);
              } else {
                  //$('.carousel-status.Clearing').html( '<span>0' + currentNumberClearning + '</span>' + '/0' + totalSlidesClearning);
                  alert('No Gallery images found!');
              }

              $('.Clearingcarousel .flickity-button.flickity-prev-next-button.next').on('click', function(){
                  $('.Clearingcarousel .flickity-button.flickity-prev-next-button.previous').removeClass('disabled');
                  currentNumberClearning = currentNumberClearning + 1;

                  if ( totalSlidesClearning >= 10 && currentNumberClearning <= 9 ) {
                      $('.carousel-status.Clearing').html( '<span>0' + currentNumberClearning + '</span>' + '/' + totalSlidesClearning);
                  } else if ( totalSlidesClearning > 10 && currentNumberClearning > 10 ) {
                      $('.carousel-status.Clearing').html( '<span>' + currentNumberClearning + '</span>' + '/' + totalSlidesClearning);
                  } else if ( totalSlidesClearning < 10 && currentNumberClearning < 10 ) {
                      $('.carousel-status.Clearing').html( '<span>0' + currentNumberClearning + '</span>' + '/0' + totalSlidesClearning);
                 } else {
                     $('.carousel-status.Clearing').html( '<span>' + currentNumberClearning + '</span>' + '/' + totalSlidesClearning);
                 }

                  if (currentNumberClearning == totalSlidesClearning) {
                      $(this).addClass('disabled');
                      $('.Clearingcarousel .flickity-button.flickity-prev-next-button.previous').removeClass('disabled');
                  }
              })

              $('.Clearingcarousel .flickity-button.flickity-prev-next-button.previous').on('click', function(){
                  $('.Clearingcarousel .flickity-button.flickity-prev-next-button.next').removeClass('disabled');
                    if (currentNumberClearning > 1) {
                        currentNumberClearning = currentNumberClearning - 1;
                    }

                  if ( totalSlidesClearning >= 10 && currentNumberClearning <= 9 ) {
                      $('.carousel-status.Clearing').html( '<span>0' + currentNumberClearning + '</span>' + '/' + totalSlidesClearning);
                  } else if ( totalSlidesClearning > 10 && currentNumberClearning > 10 ) {
                      $('.carousel-status.Clearing').html( '<span>' + currentNumberClearning + '</span>' + '/' + totalSlidesClearning);
                  } else if ( totalSlidesClearning < 10 && currentNumberClearning < 10 ) {
                      $('.carousel-status.Clearing').html( '<span>0' + currentNumberClearning + '</span>' + '/0' + totalSlidesClearning);
                 } else {
                    $('.carousel-status.Clearing').html( '<span>' + currentNumberClearning + '</span>' + '/' + totalSlidesClearning);
                 }


                  if (currentNumberClearning == 1) {
                      $(this).addClass('disabled');
                      $('.Clearingcarousel .flickity-button.flickity-prev-next-button.next').removeClass('disabled');
                  }
              })

            });


            // Gallery Pagination: Demolition
            $('#pills-Demolition-tab').on('click', function() {

            var currentNumberDemolition = 1;
            var totalSlidesDemolition = $('.Demolitioncarousel .carousel-cell').length;
             console.log(totalSlidesDemolition);
             if (totalSlidesDemolition > 0) {
                 $('.carousel-status.Demolition').html( '<span>0' + currentNumberDemolition + '</span>' + '/0' + totalSlidesDemolition);
             } else {
                 alert('No Gallery images found!');
             }

             $('.Demolitioncarousel .flickity-button.flickity-prev-next-button.next').on('click', function(){
                 $('.Demolitioncarousel .flickity-button.flickity-prev-next-button.previous').removeClass('disabled');
                 currentNumberDemolition = currentNumberDemolition + 1;

                 if ( totalSlidesDemolition >= 10 && currentNumberDemolition <= 9 ) {
                     $('.carousel-status.Demolition').html( '<span>0' + currentNumberDemolition + '</span>' + '/' + totalSlidesDemolition);
                 } else if ( totalSlidesDemolition > 10 && currentNumberClearning > 10 ) {
                     $('.carousel-status.Demolition').html( '<span>' + currentNumberDemolition + '</span>' + '/' + totalSlidesDemolition);
                 } else if ( totalSlidesDemolition < 10 && currentNumberDemolition < 10 ) {
                     $('.carousel-status.Demolition').html( '<span>0' + currentNumberDemolition + '</span>' + '/0' + totalSlidesDemolition);
                } else {
                    $('.carousel-status.Demolition').html( '<span>' + currentNumberDemolition + '</span>' + '/' + totalSlidesDemolition);
                }

                 if (currentNumberDemolition == totalSlidesDemolition) {
                     $(this).addClass('disabled');
                     $('.Demolitioncarousel .flickity-button.flickity-prev-next-button.previous').removeClass('disabled');
                 }
             })

             $('.Demolitioncarousel .flickity-button.flickity-prev-next-button.previous').on('click', function(){
                 $('.Demolitioncarousel .flickity-button.flickity-prev-next-button.next').removeClass('disabled');
                   if (currentNumberDemolition > 1) {
                       currentNumberDemolition = currentNumberDemolition - 1;
                   }

                 if ( totalSlidesDemolition >= 10 && currentNumberDemolition <= 9 ) {
                     $('.carousel-status.Demolition').html( '<span>0' + currentNumberDemolition + '</span>' + '/' + totalSlidesDemolition);
                 } else if ( totalSlidesDemolition > 10 && currentNumberDemolition > 10 ) {
                     $('.carousel-status.Demolition').html( '<span>' + currentNumberDemolition + '</span>' + '/' + totalSlidesDemolition);
                 } else if ( totalSlidesDemolition < 10 && currentNumberDemolition < 10 ) {
                     $('.carousel-status.Demolition').html( '<span>0' + currentNumberDemolition + '</span>' + '/0' + totalSlidesDemolition);
                } else {
                   $('.carousel-status.Demolition').html( '<span>' + currentNumberDemolition + '</span>' + '/' + totalSlidesDemolition);
                }


                 if (currentNumberDemolition == 1) {
                     $(this).addClass('disabled');
                     $('.Demolitioncarousel .flickity-button.flickity-prev-next-button.next').removeClass('disabled');
                 }
             })

           });


           // Gallery Pagination: Excavation
           $('#pills-Excavation-tab').on('click', function() {

           var currentNumberExcavation = 1;
           var totalSlidesExcavation = $('.Excavationcarousel .carousel-cell').length;
            console.log(totalSlidesExcavation);
            if (totalSlidesExcavation > 0) {
                $('.carousel-status.Excavation').html( '<span>0' + currentNumberExcavation + '</span>' + '/0' + totalSlidesExcavation);
            } else {
                alert('No Gallery images found!');
            }

            $('.Excavationcarousel .flickity-button.flickity-prev-next-button.next').on('click', function(){
                $('.Excavationcarousel .flickity-button.flickity-prev-next-button.previous').removeClass('disabled');
                currentNumberExcavation = currentNumberExcavation + 1;

                if ( totalSlidesExcavation >= 10 && currentNumberExcavation <= 9 ) {
                    $('.carousel-status.Excavation').html( '<span>0' + currentNumberExcavation + '</span>' + '/' + totalSlidesExcavation);
                } else if ( totalSlidesExcavation > 10 && currentNumberExcavation > 10 ) {
                    $('.carousel-status.Excavation').html( '<span>' + currentNumberExcavation + '</span>' + '/' + totalSlidesExcavation);
                } else if ( totalSlidesExcavation < 10 && currentNumberExcavation < 10 ) {
                    $('.carousel-status.Excavation').html( '<span>0' + currentNumberExcavation + '</span>' + '/0' + totalSlidesExcavation);
               } else {
                   $('.carousel-status.Excavation').html( '<span>' + currentNumberExcavation + '</span>' + '/' + totalSlidesExcavation);
               }

                if (currentNumberExcavation == totalSlidesExcavation) {
                    $(this).addClass('disabled');
                    $('.Excavationcarousel .flickity-button.flickity-prev-next-button.previous').removeClass('disabled');
                }
            })

            $('.Excavationcarousel .flickity-button.flickity-prev-next-button.previous').on('click', function(){
                $('.Excavationcarousel .flickity-button.flickity-prev-next-button.next').removeClass('disabled');
                  if (currentNumberExcavation > 1) {
                      currentNumberExcavation = currentNumberExcavation - 1;
                  }

                if ( totalSlidesExcavation >= 10 && currentNumberExcavation <= 9 ) {
                    $('.carousel-status.Excavation').html( '<span>0' + currentNumberExcavation + '</span>' + '/' + totalSlidesExcavation);
                } else if ( totalSlidesExcavation > 10 && currentNumberExcavation > 10 ) {
                    $('.carousel-status.Excavation').html( '<span>' + currentNumberExcavation + '</span>' + '/' + totalSlidesExcavation);
                } else if ( totalSlidesExcavation < 10 && currentNumberExcavation < 10 ) {
                    $('.carousel-status.Excavation').html( '<span>0' + currentNumberExcavation + '</span>' + '/0' + totalSlidesExcavation);
               } else {
                  $('.carousel-status.Excavation').html( '<span>' + currentNumberExcavation + '</span>' + '/' + totalSlidesExcavation);
               }


                if (currentNumberExcavation == 1) {
                    $(this).addClass('disabled');
                    $('.Excavationcarousel .flickity-button.flickity-prev-next-button.next').removeClass('disabled');
                }
            })

          });


          // Gallery Pagination: Grading
          $('#pills-Grading-tab').on('click', function() {

          var currentNumberGrading = 1;
          var totalSlidesGrading = $('.Gradingcarousel .carousel-cell').length;
           console.log(totalSlidesGrading);
           if (totalSlidesGrading > 0) {
               $('.carousel-status.Grading').html( '<span>0' + currentNumberGrading + '</span>' + '/0' + totalSlidesGrading);
           } else {
               alert('No Gallery images found!');
           }

           $('.Gradingcarousel .flickity-button.flickity-prev-next-button.next').on('click', function(){
               $('.Gradingcarousel .flickity-button.flickity-prev-next-button.previous').removeClass('disabled');
               currentNumberGrading = currentNumberGrading + 1;

               if ( totalSlidesGrading >= 10 && currentNumberGrading <= 9 ) {
                   $('.carousel-status.Grading').html( '<span>0' + currentNumberGrading + '</span>' + '/' + totalSlidesGrading);
               } else if ( totalSlidesGrading > 10 && currentNumberGrading > 10 ) {
                   $('.carousel-status.Grading').html( '<span>' + currentNumberGrading + '</span>' + '/' + totalSlidesGrading);
               } else if ( totalSlidesGrading < 10 && currentNumberGrading < 10 ) {
                   $('.carousel-status.Grading').html( '<span>0' + currentNumberGrading + '</span>' + '/0' + totalSlidesGrading);
              } else {
                  $('.carousel-status.Grading').html( '<span>' + currentNumberGrading + '</span>' + '/' + totalSlidesGrading);
              }

               if (currentNumberGrading == totalSlidesGrading) {
                   $(this).addClass('disabled');
                   $('.Gradingcarousel .flickity-button.flickity-prev-next-button.previous').removeClass('disabled');
               }
           })

           $('.Gradingcarousel .flickity-button.flickity-prev-next-button.previous').on('click', function(){
               $('.Gradingcarousel .flickity-button.flickity-prev-next-button.next').removeClass('disabled');
                 if (currentNumberGrading > 1) {
                     currentNumberGrading = currentNumberGrading - 1;
                 }

               if ( totalSlidesGrading >= 10 && currentNumberGrading <= 9 ) {
                   $('.carousel-status.Grading').html( '<span>0' + currentNumberGrading + '</span>' + '/' + totalSlidesGrading);
               } else if ( totalSlidesGrading > 10 && currentNumberGrading > 10 ) {
                   $('.carousel-status.Grading').html( '<span>' + currentNumberGrading + '</span>' + '/' + totalSlidesGrading);
               } else if ( totalSlidesGrading < 10 && currentNumberGrading < 10 ) {
                   $('.carousel-status.Grading').html( '<span>0' + currentNumberGrading + '</span>' + '/0' + totalSlidesGrading);
              } else {
                 $('.carousel-status.Grading').html( '<span>' + currentNumberGrading + '</span>' + '/' + totalSlidesGrading);
              }


               if (currentNumberGrading == 1) {
                   $(this).addClass('disabled');
                   $('.Gradingcarousel .flickity-button.flickity-prev-next-button.next').removeClass('disabled');
               }
           })

         });


         // Gallery Pagination: Logging
         $('#pills-Logging-tab').on('click', function() {

         var currentNumberLogging = 1;
         var totalSlidesLogging = $('.Loggingcarousel .carousel-cell').length;
          console.log(totalSlidesLogging);
          if (totalSlidesLogging > 0) {
              $('.carousel-status.Logging').html( '<span>0' + currentNumberLogging + '</span>' + '/0' + totalSlidesLogging);
          } else {
              alert('No Gallery images found!');
          }

          $('.Loggingcarousel .flickity-button.flickity-prev-next-button.next').on('click', function(){
              $('.Loggingcarousel .flickity-button.flickity-prev-next-button.previous').removeClass('disabled');
              currentNumberLogging = currentNumberLogging + 1;

              if ( totalSlidesLogging >= 10 && currentNumberLogging <= 9 ) {
                  $('.carousel-status.Logging').html( '<span>0' + currentNumberLogging + '</span>' + '/' + totalSlidesLogging);
              } else if ( totalSlidesLogging > 10 && currentNumberLogging > 10 ) {
                  $('.carousel-status.Logging').html( '<span>' + currentNumberLogging + '</span>' + '/' + totalSlidesLogging);
              } else if ( totalSlidesLogging < 10 && currentNumberLogging < 10 ) {
                  $('.carousel-status.Logging').html( '<span>0' + currentNumberLogging + '</span>' + '/0' + totalSlidesLogging);
             } else {
                 $('.carousel-status.Logging').html( '<span>' + currentNumberLogging + '</span>' + '/' + totalSlidesLogging);
             }

              if (currentNumberLogging == totalSlidesLogging) {
                  $(this).addClass('disabled');
                  $('.Loggingcarousel .flickity-button.flickity-prev-next-button.previous').removeClass('disabled');
              }
          })

          $('.Loggingcarousel .flickity-button.flickity-prev-next-button.previous').on('click', function(){
              $('.Loggingcarousel .flickity-button.flickity-prev-next-button.next').removeClass('disabled');
                if (currentNumberLogging > 1) {
                    currentNumberLogging = currentNumberLogging - 1;
                }

              if ( totalSlidesLogging >= 10 && currentNumberLogging <= 9 ) {
                  $('.carousel-status.Logging').html( '<span>0' + currentNumberLogging + '</span>' + '/' + totalSlidesLogging);
              } else if ( totalSlidesLogging > 10 && currentNumberLogging > 10 ) {
                  $('.carousel-status.Logging').html( '<span>' + currentNumberLogging + '</span>' + '/' + totalSlidesLogging);
              } else if ( totalSlidesLogging < 10 && currentNumberLogging < 10 ) {
                  $('.carousel-status.Logging').html( '<span>0' + currentNumberLogging + '</span>' + '/0' + totalSlidesLogging);
             } else {
                $('.carousel-status.Logging').html( '<span>' + currentNumberLogging + '</span>' + '/' + totalSlidesLogging);
             }


              if (currentNumberLogging == 1) {
                  $(this).addClass('disabled');
                  $('.Loggingcarousel .flickity-button.flickity-prev-next-button.next').removeClass('disabled');
              }
          })

        });


            // Gallery Pagination: Rolloff
            $('#pills-Rolloff-tab').on('click', function() {

        var currentNumberRolloff = 1;
        var totalSlidesRolloff = $('.Rolloffcarousel .carousel-cell').length;
         console.log(totalSlidesRolloff);
         if (totalSlidesRolloff > 0) {
             $('.carousel-status.Rolloff').html( '<span>0' + currentNumberRolloff + '</span>' + '/0' + totalSlidesRolloff);
         } else {
             alert('No Gallery images found!');
         }

         $('.Rolloffcarousel .flickity-button.flickity-prev-next-button.next').on('click', function(){
             $('.Rolloffcarousel .flickity-button.flickity-prev-next-button.previous').removeClass('disabled');
             currentNumberRolloff = currentNumberRolloff + 1;

             if ( totalSlidesRolloff >= 10 && currentNumberRolloff <= 9 ) {
                 $('.carousel-status.Rolloff').html( '<span>0' + currentNumberRolloff + '</span>' + '/' + totalSlidesRolloff);
             } else if ( totalSlidesRolloff > 10 && currentNumberRolloff > 10 ) {
                 $('.carousel-status.Rolloff').html( '<span>' + currentNumberRolloff + '</span>' + '/' + totalSlidesRolloff);
             } else if ( totalSlidesRolloff < 10 && currentNumberRolloff < 10 ) {
                 $('.carousel-status.Rolloff').html( '<span>0' + currentNumberRolloff + '</span>' + '/0' + totalSlidesRolloff);
            } else {
                $('.carousel-status.Rolloff').html( '<span>' + currentNumberRolloff + '</span>' + '/' + totalSlidesRolloff);
            }

             if (currentNumberRolloff == totalSlidesRolloff) {
                 $(this).addClass('disabled');
                 $('.Rolloffcarousel .flickity-button.flickity-prev-next-button.previous').removeClass('disabled');
             }
         })

         $('.Rolloffcarousel .flickity-button.flickity-prev-next-button.previous').on('click', function(){
             $('.Rolloffcarousel .flickity-button.flickity-prev-next-button.next').removeClass('disabled');
               if (currentNumberRolloff > 1) {
                   currentNumberRolloff = currentNumberRolloff - 1;
               }

             if ( totalSlidesRolloff >= 10 && currentNumberRolloff <= 9 ) {
                 $('.carousel-status.Rolloff').html( '<span>0' + currentNumberRolloff + '</span>' + '/' + totalSlidesRolloff);
             } else if ( totalSlidesRolloff > 10 && currentNumberRolloff > 10 ) {
                 $('.carousel-status.Rolloff').html( '<span>' + currentNumberRolloff + '</span>' + '/' + totalSlidesRolloff);
             } else if ( totalSlidesRolloff < 10 && currentNumberRolloff < 10 ) {
                 $('.carousel-status.Rolloff').html( '<span>0' + currentNumberRolloff + '</span>' + '/0' + totalSlidesRolloff);
            } else {
               $('.carousel-status.Rolloff').html( '<span>' + currentNumberRolloff + '</span>' + '/' + totalSlidesRolloff);
            }


             if (currentNumberRolloff == 1) {
                 $(this).addClass('disabled');
                 $('.Rolloffcarousel .flickity-button.flickity-prev-next-button.next').removeClass('disabled');
             }
         })

        });


        // Gallery Pagination: Utilities
        $('#pills-Utilities-tab').on('click', function() {

        var currentNumberUtilities = 1;
        var totalSlidesUtilities = $('.Utilitiescarousel .carousel-cell').length;
        console.log(totalSlidesUtilities);

        if (totalSlidesUtilities > 0) {
         $('.carousel-status.Utilities').html( '<span>0' + currentNumberUtilities + '</span>' + '/0' + totalSlidesUtilities);
        } else {
         alert('No Gallery images found!');
        }

        $('.Utilitiescarousel .flickity-button.flickity-prev-next-button.next').on('click', function(){
         $('.Utilitiescarousel .flickity-button.flickity-prev-next-button.previous').removeClass('disabled');
         currentNumberUtilities = currentNumberUtilities + 1;

         if ( totalSlidesUtilities >= 10 && currentNumberUtilities <= 9 ) {
             $('.carousel-status.Utilities').html( '<span>0' + currentNumberUtilities + '</span>' + '/' + totalSlidesUtilities);
         } else if ( totalSlidesUtilities > 10 && currentNumberUtilities > 10 ) {
             $('.carousel-status.Utilities').html( '<span>' + currentNumberUtilities + '</span>' + '/' + totalSlidesUtilities);
         } else if ( totalSlidesUtilities < 10 && currentNumberUtilities < 10 ) {
             $('.carousel-status.Utilities').html( '<span>0' + currentNumberUtilities + '</span>' + '/0' + totalSlidesUtilities);
        } else {
            $('.carousel-status.Utilities').html( '<span>' + currentNumberUtilities + '</span>' + '/' + totalSlidesUtilities);
        }

         if (currentNumberUtilities == totalSlidesUtilities) {
             $(this).addClass('disabled');
             $('.Utilitiescarousel .flickity-button.flickity-prev-next-button.previous').removeClass('disabled');
         }
        })

        $('.Utilitiescarousel .flickity-button.flickity-prev-next-button.previous').on('click', function(){
         $('.Utilitiescarousel .flickity-button.flickity-prev-next-button.next').removeClass('disabled');
           if (currentNumberUtilities > 1) {
               currentNumberUtilities = currentNumberUtilities - 1;
           }

         if ( totalSlidesUtilities >= 10 && currentNumberUtilities <= 9 ) {
             $('.carousel-status.Utilities').html( '<span>0' + currentNumberUtilities + '</span>' + '/' + totalSlidesUtilities);
         } else if ( totalSlidesUtilities > 10 && currentNumberUtilities > 10 ) {
             $('.carousel-status.Utilities').html( '<span>' + currentNumberUtilities + '</span>' + '/' + totalSlidesUtilities);
         } else if ( totalSlidesUtilities < 10 && currentNumberUtilities < 10 ) {
             $('.carousel-status.Utilities').html( '<span>0' + currentNumberUtilities + '</span>' + '/0' + totalSlidesUtilities);
        } else {
           $('.carousel-status.Utilities').html( '<span>' + currentNumberUtilities + '</span>' + '/' + totalSlidesUtilities);
        }


         if (currentNumberUtilities == 1) {
             $(this).addClass('disabled');
             $('.Utilitiescarousel .flickity-button.flickity-prev-next-button.next').removeClass('disabled');
         }
        })

        });
        } else {
            // Mobile
            var currentNumber = 1;
            var totalSlides = $('.AllcarouselMobile .carousel-cell').length;
             console.log(totalSlides);
             if (totalSlides > 10) {
                 $('.carousel-status-mobile.all').html( '<span>0' + currentNumber + '</span>' + '/' + totalSlides);
             } else {
                 $('.carousel-status-mobile.all').html( '<span>0' + currentNumber + '</span>' + '/0' + totalSlides);
             }

             $('.AllcarouselMobile .flickity-button.flickity-prev-next-button.next').on('click', function(){
                 $('.AllcarouselMobile .flickity-button.flickity-prev-next-button.previous').removeClass('disabled');
                 currentNumber = currentNumber + 1;

                 if ( totalSlides >= 10 && currentNumber <= 9 ) {
                     $('.carousel-status-mobile.all').html( '<span>0' + currentNumber + '</span>' + '/' + totalSlides);
                 } else if ( totalSlides > 10 && currentNumber > 10 ) {
                       $('.carousel-status-mobile.all').html( '<span>' + currentNumber + '</span>' + '/' + totalSlides);
                 } else if ( totalSlides < 10 && currentNumber < 10 ) {
                   $('.carousel-status-mobile.all').html( '<span>0' + currentNumber + '</span>' + '/0' + totalSlides);
                } else {
                   $('.carousel-status-mobile.all').html( '<span>' + currentNumber + '</span>' + '/' + totalSlides);
                }

                 if (currentNumber == totalSlides) {
                     $(this).addClass('disabled');
                     $('.AllcarouselMobile .flickity-button.flickity-prev-next-button.previous').removeClass('disabled');
                 }
             })

             $('.AllcarouselMobile .flickity-button.flickity-prev-next-button.previous').on('click', function(){
                 $('.AllcarouselMobile .flickity-button.flickity-prev-next-button.next').removeClass('disabled');
                 currentNumber = currentNumber - 1;

                 if ( totalSlides >= 10 && currentNumber <= 9 ) {
                     $('.carousel-status-mobile.all').html( '<span>0' + currentNumber + '</span>' + '/' + totalSlides);
                 } else if ( totalSlides > 10 && currentNumber > 10 ) {
                       $('.carousel-status-mobile.all').html( '<span>' + currentNumber + '</span>' + '/' + totalSlides);
                 } else if ( totalSlides < 10 && currentNumber < 10 ) {
                   $('.carousel-status-mobile.all').html( '<span>0' + currentNumber + '</span>' + '/0' + totalSlides);
                } else {
                   $('.carousel-status-mobile.all').html( '<span>' + currentNumber + '</span>' + '/' + totalSlides);
                }


                 if (currentNumber == 1) {
                     $(this).addClass('disabled');
                     $('.AllcarouselMobile .flickity-button.flickity-prev-next-button.next').removeClass('disabled');
                 }
             })




             // Gallery Pagination: Clearning
             $('#pills-ClearingMobile-tab').on('click', function() {

             var currentNumberClearningMobile = 1;
             var totalSlidesClearningMobile = $('.ClearingcarouselMobile .carousel-cell').length;
              console.log(totalSlidesClearningMobile);
              if (totalSlidesClearningMobile > 0) {
                  $('.carousel-status-mobile.Clearing').html( '<span>0' + currentNumberClearningMobile + '</span>' + '/0' + totalSlidesClearningMobile);
              } else {
                  alert('No Gallery images found!');
              }

              $('.ClearingcarouselMobile .flickity-button.flickity-prev-next-button.next').on('click', function(){
                  $('.ClearingcarouselMobile .flickity-button.flickity-prev-next-button.previous').removeClass('disabled');
                  currentNumberClearningMobile = currentNumberClearningMobile + 1;

                  if ( totalSlidesClearningMobile >= 10 && currentNumberClearningMobile <= 9 ) {
                      $('.carousel-status-mobile.Clearing').html( '<span>0' + currentNumberClearningMobile + '</span>' + '/' + totalSlidesClearningMobile);
                  } else if ( totalSlidesClearningMobile > 10 && currentNumberClearningMobile > 10 ) {
                      $('.carousel-status-mobile.Clearing').html( '<span>' + currentNumberClearningMobile + '</span>' + '/' + totalSlidesClearningMobile);
                  } else if ( totalSlidesClearningMobile < 10 && currentNumberClearningMobile < 10 ) {
                      $('.carousel-status-mobile.Clearing').html( '<span>0' + currentNumberClearningMobile + '</span>' + '/0' + totalSlidesClearningMobile);
                 } else {
                     $('.carousel-status-mobile.Clearing').html( '<span>' + currentNumberClearningMobile + '</span>' + '/' + totalSlidesClearningMobile);
                 }

                  if (currentNumberClearningMobile == totalSlidesClearningMobile) {
                      $(this).addClass('disabled');
                      $('.ClearingcarouselMobile .flickity-button.flickity-prev-next-button.previous').removeClass('disabled');
                  }
              })

              $('.ClearingcarouselMobile .flickity-button.flickity-prev-next-button.previous').on('click', function(){
                  $('.ClearingcarouselMobile .flickity-button.flickity-prev-next-button.next').removeClass('disabled');
                    if (currentNumberClearningMobile > 1) {
                        currentNumberClearningMobile = currentNumberClearningMobile - 1;
                    }

                  if ( totalSlidesClearningMobile >= 10 && currentNumberClearningMobile <= 9 ) {
                      $('.carousel-status-mobile.Clearing').html( '<span>0' + currentNumberClearningMobile + '</span>' + '/' + totalSlidesClearningMobile);
                  } else if ( totalSlidesClearningMobile > 10 && currentNumberClearningMobile > 10 ) {
                      $('.carousel-status-mobile.Clearing').html( '<span>' + currentNumberClearningMobile + '</span>' + '/' + totalSlidesClearningMobile);
                  } else if ( totalSlidesClearningMobile < 10 && currentNumberClearningMobile < 10 ) {
                      $('.carousel-status-mobile.Clearing').html( '<span>0' + currentNumberClearningMobile + '</span>' + '/0' + totalSlidesClearningMobile);
                 } else {
                    $('.carousel-status-mobile.Clearing').html( '<span>' + currentNumberClearningMobile + '</span>' + '/' + totalSlidesClearningMobile);
                 }


                  if (currentNumberClearningMobile == 1) {
                      $(this).addClass('disabled');
                      $('.ClearingcarouselMobile .flickity-button.flickity-prev-next-button.next').removeClass('disabled');
                  }
              })

            });


            // Gallery Pagination: Demolition
            $('#pills-DemolitionMobile-tab').on('click', function() {

            var currentNumberDemolitionMobile = 1;
            var totalSlidesDemolitionMobile = $('.DemolitioncarouselMobile .carousel-cell').length;
             console.log(totalSlidesDemolitionMobile);
             if (totalSlidesDemolitionMobile > 0) {
                 $('.carousel-status-mobile.Demolition').html( '<span>0' + currentNumberDemolitionMobile + '</span>' + '/0' + totalSlidesDemolitionMobile);
             } else {
                 alert('No Gallery images found!');
             }

             $('.DemolitioncarouselMobile .flickity-button.flickity-prev-next-button.next').on('click', function(){
                 $('.DemolitioncarouselMobile .flickity-button.flickity-prev-next-button.previous').removeClass('disabled');
                 currentNumberDemolitionMobile = currentNumberDemolitionMobile + 1;

                 if ( totalSlidesDemolitionMobile >= 10 && currentNumberDemolitionMobile <= 9 ) {
                     $('.carousel-status-mobile.Demolition').html( '<span>0' + currentNumberDemolitionMobile + '</span>' + '/' + totalSlidesDemolitionMobile);
                 } else if ( totalSlidesDemolitionMobile > 10 && currentNumberDemolitionMobile > 10 ) {
                     $('.carousel-status-mobile.Demolition').html( '<span>' + currentNumberDemolitionMobile + '</span>' + '/' + totalSlidesDemolitionMobile);
                 } else if ( totalSlidesDemolitionMobile < 10 && currentNumberDemolitionMobile < 10 ) {
                     $('.carousel-status-mobile.Demolition').html( '<span>0' + currentNumberDemolitionMobile + '</span>' + '/0' + totalSlidesDemolitionMobile);
                } else {
                    $('.carousel-status-mobile.Demolition').html( '<span>' + currentNumberDemolitionMobile + '</span>' + '/' + totalSlidesDemolitionMobile);
                }

                 if (currentNumberDemolitionMobile == totalSlidesDemolitionMobile) {
                     $(this).addClass('disabled');
                     $('.DemolitioncarouselMobile .flickity-button.flickity-prev-next-button.previous').removeClass('disabled');
                 }
             })

             $('.DemolitioncarouselMobile .flickity-button.flickity-prev-next-button.previous').on('click', function(){
                 $('.DemolitioncarouselMobile .flickity-button.flickity-prev-next-button.next').removeClass('disabled');
                   if (currentNumberDemolitionMobile > 1) {
                       currentNumberDemolitionMobile = currentNumberDemolitionMobile - 1;
                   }

                 if ( totalSlidesDemolitionMobile >= 10 && currentNumberDemolitionMobile <= 9 ) {
                     $('.carousel-status-mobile.Demolition').html( '<span>0' + currentNumberDemolitionMobile + '</span>' + '/' + totalSlidesDemolitionMobile);
                 } else if ( totalSlidesDemolitionMobile > 10 && currentNumberDemolitionMobile > 10 ) {
                     $('.carousel-status-mobile.Demolition').html( '<span>' + currentNumberDemolitionMobile + '</span>' + '/' + totalSlidesDemolitionMobile);
                 } else if ( totalSlidesDemolitionMobile < 10 && currentNumberDemolitionMobile < 10 ) {
                     $('.carousel-status-mobile.Demolition').html( '<span>0' + currentNumberDemolitionMobile + '</span>' + '/0' + totalSlidesDemolitionMobile);
                } else {
                   $('.carousel-status-mobile.Demolition').html( '<span>' + currentNumberDemolitionMobile + '</span>' + '/' + totalSlidesDemolitionMobile);
                }


                 if (currentNumberDemolitionMobile == 1) {
                     $(this).addClass('disabled');
                     $('.DemolitioncarouselMobile .flickity-button.flickity-prev-next-button.next').removeClass('disabled');
                 }
             })

           });

           // Gallery Pagination: Excavation
           $('#pills-ExcavationMobile-tab').on('click', function() {

           var currentNumberExcavationMobile = 1;
           var totalSlidesExcavationMobile = $('.ExcavationcarouselMobile .carousel-cell').length;
            console.log(totalSlidesExcavationMobile);
            if (totalSlidesExcavationMobile > 0) {
                $('.carousel-status-mobile.Excavation').html( '<span>0' + currentNumberExcavationMobile + '</span>' + '/0' + totalSlidesExcavationMobile);
            } else {
                alert('No Gallery images found!');
            }

            $('.ExcavationcarouselMobile .flickity-button.flickity-prev-next-button.next').on('click', function(){
                $('.ExcavationcarouselMobile .flickity-button.flickity-prev-next-button.previous').removeClass('disabled');
                currentNumberExcavationMobile = currentNumberExcavationMobile + 1;

                if ( totalSlidesExcavationMobile >= 10 && currentNumberExcavationMobile <= 9 ) {
                    $('.carousel-status-mobile.Excavation').html( '<span>0' + currentNumberExcavationMobile + '</span>' + '/' + totalSlidesExcavationMobile);
                } else if ( totalSlidesExcavationMobile > 10 && currentNumberExcavationMobile > 10 ) {
                    $('.carousel-status-mobile.Excavation').html( '<span>' + currentNumberExcavationMobile + '</span>' + '/' + totalSlidesExcavationMobile);
                } else if ( totalSlidesExcavationMobile < 10 && currentNumberExcavationMobile < 10 ) {
                    $('.carousel-status-mobile.Excavation').html( '<span>0' + currentNumberExcavationMobile + '</span>' + '/0' + totalSlidesExcavationMobile);
               } else {
                   $('.carousel-status-mobile.Excavation').html( '<span>' + currentNumberExcavationMobile + '</span>' + '/' + totalSlidesExcavationMobile);
               }

                if (currentNumberExcavationMobile == totalSlidesExcavationMobile) {
                    $(this).addClass('disabled');
                    $('.ExcavationcarouselMobile .flickity-button.flickity-prev-next-button.previous').removeClass('disabled');
                }
            })

            $('.ExcavationcarouselMobile .flickity-button.flickity-prev-next-button.previous').on('click', function(){
                $('.ExcavationcarouselMobile .flickity-button.flickity-prev-next-button.next').removeClass('disabled');
                  if (currentNumberExcavationMobile > 1) {
                      currentNumberExcavationMobile = currentNumberExcavationMobile - 1;
                  }

                if ( totalSlidesExcavationMobile >= 10 && currentNumberExcavationMobile <= 9 ) {
                    $('.carousel-status-mobile.Excavation').html( '<span>0' + currentNumberExcavationMobile + '</span>' + '/' + totalSlidesExcavationMobile);
                } else if ( totalSlidesExcavationMobile > 10 && currentNumberExcavationMobile > 10 ) {
                    $('.carousel-status-mobile.Excavation').html( '<span>' + currentNumberExcavationMobile + '</span>' + '/' + totalSlidesExcavationMobile);
                } else if ( totalSlidesExcavationMobile < 10 && currentNumberExcavationMobile < 10 ) {
                    $('.carousel-status-mobile.Excavation').html( '<span>0' + currentNumberExcavationMobile + '</span>' + '/0' + totalSlidesExcavationMobile);
               } else {
                  $('.carousel-status-mobile.Excavation').html( '<span>' + currentNumberExcavationMobile + '</span>' + '/' + totalSlidesExcavationMobile);
               }


                if (currentNumberExcavationMobile == 1) {
                    $(this).addClass('disabled');
                    $('.ExcavationcarouselMobile .flickity-button.flickity-prev-next-button.next').removeClass('disabled');
                }
            })

           });


           // Gallery Pagination: Grading
           $('#pills-GradingMobile-tab').on('click', function() {

           var currentNumberGradingMobile = 1;
           var totalSlidesGradingMobile = $('.GradingcarouselMobile .carousel-cell').length;
            console.log(totalSlidesGradingMobile);
            if (totalSlidesGradingMobile > 0) {
                $('.carousel-status-mobile.Grading').html( '<span>0' + currentNumberGradingMobile + '</span>' + '/0' + totalSlidesGradingMobile);
            } else {
                alert('No Gallery images found!');
            }

            $('.GradingcarouselMobile .flickity-button.flickity-prev-next-button.next').on('click', function(){
                $('.GradingcarouselMobile .flickity-button.flickity-prev-next-button.previous').removeClass('disabled');
                currentNumberGradingMobile = currentNumberGradingMobile + 1;

                if ( totalSlidesGradingMobile >= 10 && currentNumberGradingMobile <= 9 ) {
                    $('.carousel-status-mobile.Grading').html( '<span>0' + currentNumberGradingMobile + '</span>' + '/' + totalSlidesGradingMobile);
                } else if ( totalSlidesGradingMobile > 10 && currentNumberGradingMobile > 10 ) {
                    $('.carousel-status-mobile.Grading').html( '<span>' + currentNumberGradingMobile + '</span>' + '/' + totalSlidesGradingMobile);
                } else if ( totalSlidesGradingMobile < 10 && currentNumberGradingMobile < 10 ) {
                    $('.carousel-status-mobile.Grading').html( '<span>0' + currentNumberGradingMobile + '</span>' + '/0' + totalSlidesGradingMobile);
               } else {
                   $('.carousel-status-mobile.Grading').html( '<span>' + currentNumberGradingMobile + '</span>' + '/' + totalSlidesGradingMobile);
               }

                if (currentNumberGradingMobile == totalSlidesGradingMobile) {
                    $(this).addClass('disabled');
                    $('.GradingcarouselMobile .flickity-button.flickity-prev-next-button.previous').removeClass('disabled');
                }
            })

            $('.GradingcarouselMobile .flickity-button.flickity-prev-next-button.previous').on('click', function(){
                $('.GradingcarouselMobile .flickity-button.flickity-prev-next-button.next').removeClass('disabled');
                  if (currentNumberGradingMobile > 1) {
                      currentNumberGradingMobile = currentNumberGradingMobile - 1;
                  }

                if ( totalSlidesGradingMobile >= 10 && currentNumberGradingMobile <= 9 ) {
                    $('.carousel-status-mobile.Grading').html( '<span>0' + currentNumberGradingMobile + '</span>' + '/' + totalSlidesGradingMobile);
                } else if ( totalSlidesGradingMobile > 10 && currentNumberGradingMobile > 10 ) {
                    $('.carousel-status-mobile.Grading').html( '<span>' + currentNumberGradingMobile + '</span>' + '/' + totalSlidesGradingMobile);
                } else if ( totalSlidesGradingMobile < 10 && currentNumberGradingMobile < 10 ) {
                    $('.carousel-status-mobile.Grading').html( '<span>0' + currentNumberGradingMobile + '</span>' + '/0' + totalSlidesGradingMobile);
               } else {
                  $('.carousel-status-mobile.Grading').html( '<span>' + currentNumberGradingMobile + '</span>' + '/' + totalSlidesGradingMobile);
               }


                if (currentNumberGradingMobile == 1) {
                    $(this).addClass('disabled');
                    $('.GradingcarouselMobile .flickity-button.flickity-prev-next-button.next').removeClass('disabled');
                }
            })

           });


           // Gallery Pagination: Logging
           $('#pills-LoggingMobile-tab').on('click', function() {

           var currentNumberLoggingMobile = 1;
           var totalSlidesLoggingMobile = $('.LoggingcarouselMobile .carousel-cell').length;
            console.log(totalSlidesLoggingMobile);
            if (totalSlidesLoggingMobile > 0) {
                $('.carousel-status-mobile.Logging').html( '<span>0' + currentNumberLoggingMobile + '</span>' + '/0' + totalSlidesLoggingMobile);
            } else {
                alert('No Gallery images found!');
            }

            $('.LoggingcarouselMobile .flickity-button.flickity-prev-next-button.next').on('click', function(){
                $('.LoggingcarouselMobile .flickity-button.flickity-prev-next-button.previous').removeClass('disabled');
                currentNumberLoggingMobile = currentNumberLoggingMobile + 1;

                if ( totalSlidesLoggingMobile >= 10 && currentNumberLoggingMobile <= 9 ) {
                    $('.carousel-status-mobile.Logging').html( '<span>0' + currentNumberLoggingMobile + '</span>' + '/' + totalSlidesLoggingMobile);
                } else if ( totalSlidesLoggingMobile > 10 && currentNumberLoggingMobile > 10 ) {
                    $('.carousel-status-mobile.Logging').html( '<span>' + currentNumberLoggingMobile + '</span>' + '/' + totalSlidesLoggingMobile);
                } else if ( totalSlidesLoggingMobile < 10 && currentNumberLoggingMobile < 10 ) {
                    $('.carousel-status-mobile.Logging').html( '<span>0' + currentNumberLoggingMobile + '</span>' + '/0' + totalSlidesLoggingMobile);
               } else {
                   $('.carousel-status-mobile.Logging').html( '<span>' + currentNumberLoggingMobile + '</span>' + '/' + totalSlidesLoggingMobile);
               }

                if (currentNumberLoggingMobile == totalSlidesLoggingMobile) {
                    $(this).addClass('disabled');
                    $('.LoggingcarouselMobile .flickity-button.flickity-prev-next-button.previous').removeClass('disabled');
                }
            })

            $('.LoggingcarouselMobile .flickity-button.flickity-prev-next-button.previous').on('click', function(){
                $('.LoggingcarouselMobile .flickity-button.flickity-prev-next-button.next').removeClass('disabled');
                  if (currentNumberLoggingMobile > 1) {
                      currentNumberLoggingMobile = currentNumberLoggingMobile - 1;
                  }

                if ( totalSlidesLoggingMobile >= 10 && currentNumberLoggingMobile <= 9 ) {
                    $('.carousel-status-mobile.Logging').html( '<span>0' + currentNumberLoggingMobile + '</span>' + '/' + totalSlidesLoggingMobile);
                } else if ( totalSlidesLoggingMobile > 10 && currentNumberLoggingMobile > 10 ) {
                    $('.carousel-status-mobile.Logging').html( '<span>' + currentNumberLoggingMobile + '</span>' + '/' + totalSlidesLoggingMobile);
                } else if ( totalSlidesLoggingMobile < 10 && currentNumberLoggingMobile < 10 ) {
                    $('.carousel-status-mobile.Logging').html( '<span>0' + currentNumberLoggingMobile + '</span>' + '/0' + totalSlidesLoggingMobile);
               } else {
                  $('.carousel-status-mobile.Logging').html( '<span>' + currentNumberLoggingMobile + '</span>' + '/' + totalSlidesLoggingMobile);
               }


                if (currentNumberLoggingMobile == 1) {
                    $(this).addClass('disabled');
                    $('.LoggingcarouselMobile .flickity-button.flickity-prev-next-button.next').removeClass('disabled');
                }
            })

           });

           // Gallery : Rolloff
           $('#pills-RolloffMobile-tab').on('click', function() {

           var currentNumberRolloffMobile = 1;
           var totalSlidesRolloffMobile = $('.RolloffcarouselMobile .carousel-cell').length;
            console.log(totalSlidesRolloffMobile);
            if (totalSlidesRolloffMobile > 0) {
                $('.carousel-status-mobile.Rolloff').html( '<span>0' + currentNumberRolloffMobile + '</span>' + '/0' + totalSlidesRolloffMobile);
            } else {
                alert('No Gallery images found!');
            }

            $('.RolloffcarouselMobile .flickity-button.flickity-prev-next-button.next').on('click', function(){
                $('.RolloffcarouselMobile .flickity-button.flickity-prev-next-button.previous').removeClass('disabled');
                currentNumberRolloffMobile = currentNumberRolloffMobile + 1;

                if ( totalSlidesRolloffMobile >= 10 && currentNumberRolloffMobile <= 9 ) {
                    $('.carousel-status-mobile.Rolloff').html( '<span>0' + currentNumberRolloffMobile + '</span>' + '/' + totalSlidesRolloffMobile);
                } else if ( totalSlidesRolloffMobile > 10 && currentNumberRolloffMobile > 10 ) {
                    $('.carousel-status-mobile.Rolloff').html( '<span>' + currentNumberRolloffMobile + '</span>' + '/' + totalSlidesRolloffMobile);
                } else if ( totalSlidesRolloffMobile < 10 && currentNumberRolloffMobile < 10 ) {
                    $('.carousel-status-mobile.Rolloff').html( '<span>0' + currentNumberRolloffMobile + '</span>' + '/0' + totalSlidesRolloffMobile);
               } else {
                   $('.carousel-status-mobile.Rolloff').html( '<span>' + currentNumberRolloffMobile + '</span>' + '/' + totalSlidesRolloffMobile);
               }

                if (currentNumberRolloffMobile == totalSlidesRolloffMobile) {
                    $(this).addClass('disabled');
                    $('.RolloffcarouselMobile .flickity-button.flickity-prev-next-button.previous').removeClass('disabled');
                }
            })

            $('.RolloffcarouselMobile .flickity-button.flickity-prev-next-button.previous').on('click', function(){
                $('.RolloffcarouselMobile .flickity-button.flickity-prev-next-button.next').removeClass('disabled');
                  if (currentNumberRolloffMobile > 1) {
                      currentNumberRolloffMobile = currentNumberRolloffMobile - 1;
                  }

                if ( totalSlidesRolloffMobile >= 10 && currentNumberRolloffMobile <= 9 ) {
                    $('.carousel-status-mobile.Rolloff').html( '<span>0' + currentNumberRolloffMobile + '</span>' + '/' + totalSlidesRolloffMobile);
                } else if ( totalSlidesRolloffMobile > 10 && currentNumberRolloffMobile > 10 ) {
                    $('.carousel-status-mobile.Rolloff').html( '<span>' + currentNumberRolloffMobile + '</span>' + '/' + totalSlidesRolloffMobile);
                } else if ( totalSlidesRolloffMobile < 10 && currentNumberRolloffMobile < 10 ) {
                    $('.carousel-status-mobile.Rolloff').html( '<span>0' + currentNumberRolloffMobile + '</span>' + '/0' + totalSlidesRolloffMobile);
               } else {
                  $('.carousel-status-mobile.Rolloff').html( '<span>' + currentNumberRolloffMobile + '</span>' + '/' + totalSlidesRolloffMobile);
               }


                if (currentNumberRolloffMobile == 1) {
                    $(this).addClass('disabled');
                    $('.RolloffcarouselMobile .flickity-button.flickity-prev-next-button.next').removeClass('disabled');
                }
            })

           });

           // Utilities
           $('#pills-UtilitiesMobile-tab').on('click', function() {

           var currentNumberUtilitiesMobile = 1;
           var totalSlidesUtilitiesMobile = $('.UtilitiescarouselMobile .carousel-cell').length;
            console.log(totalSlidesUtilitiesMobile);
            if (totalSlidesUtilitiesMobile > 0) {
                $('.carousel-status-mobile.Utilities').html( '<span>0' + currentNumberUtilitiesMobile + '</span>' + '/0' + totalSlidesUtilitiesMobile);
            } else {
                alert('No Gallery images found!');
            }

            $('.UtilitiescarouselMobile .flickity-button.flickity-prev-next-button.next').on('click', function(){
                $('.UtilitiescarouselMobile .flickity-button.flickity-prev-next-button.previous').removeClass('disabled');
                currentNumberUtilitiesMobile = currentNumberUtilitiesMobile + 1;

                if ( totalSlidesUtilitiesMobile >= 10 && currentNumberUtilitiesMobile <= 9 ) {
                    $('.carousel-status-mobile.Utilities').html( '<span>0' + currentNumberUtilitiesMobile + '</span>' + '/' + totalSlidesUtilitiesMobile);
                } else if ( totalSlidesUtilitiesMobile > 10 && currentNumberUtilitiesMobile > 10 ) {
                    $('.carousel-status-mobile.Utilities').html( '<span>' + currentNumberUtilitiesMobile + '</span>' + '/' + totalSlidesUtilitiesMobile);
                } else if ( totalSlidesUtilitiesMobile < 10 && currentNumberUtilitiesMobile < 10 ) {
                    $('.carousel-status-mobile.Utilities').html( '<span>0' + currentNumberUtilitiesMobile + '</span>' + '/0' + totalSlidesUtilitiesMobile);
               } else {
                   $('.carousel-status-mobile.Utilities').html( '<span>' + currentNumberUtilitiesMobile + '</span>' + '/' + totalSlidesUtilitiesMobile);
               }

                if (currentNumberUtilitiesMobile == totalSlidesUtilitiesMobile) {
                    $(this).addClass('disabled');
                    $('.UtilitiescarouselMobile .flickity-button.flickity-prev-next-button.previous').removeClass('disabled');
                }
            })

            $('.UtilitiescarouselMobile .flickity-button.flickity-prev-next-button.previous').on('click', function(){
                $('.UtilitiescarouselMobile .flickity-button.flickity-prev-next-button.next').removeClass('disabled');
                  if (currentNumberUtilitiesMobile > 1) {
                      currentNumberUtilitiesMobile = currentNumberUtilitiesMobile - 1;
                  }

                if ( totalSlidesUtilitiesMobile >= 10 && currentNumberUtilitiesMobile <= 9 ) {
                    $('.carousel-status-mobile.Utilities').html( '<span>0' + currentNumberUtilitiesMobile + '</span>' + '/' + totalSlidesUtilitiesMobile);
                } else if ( totalSlidesUtilitiesMobile > 10 && currentNumberUtilitiesMobile > 10 ) {
                    $('.carousel-status-mobile.Utilities').html( '<span>' + currentNumberUtilitiesMobile + '</span>' + '/' + totalSlidesUtilitiesMobile);
                } else if ( totalSlidesUtilitiesMobile < 10 && currentNumberUtilitiesMobile < 10 ) {
                    $('.carousel-status-mobile.Utilities').html( '<span>0' + currentNumberUtilitiesMobile + '</span>' + '/0' + totalSlidesUtilitiesMobile);
               } else {
                  $('.carousel-status-mobile.Utilities').html( '<span>' + currentNumberUtilitiesMobile + '</span>' + '/' + totalSlidesUtilitiesMobile);
               }


                if (currentNumberUtilitiesMobile == 1) {
                    $(this).addClass('disabled');
                    $('.UtilitiescarouselMobile .flickity-button.flickity-prev-next-button.next').removeClass('disabled');
                }
            })

           });


        }
    }
});
