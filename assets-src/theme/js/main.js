$ = jQuery.noConflict();
$(function ($) {
    "use strict";
    //Pre-LOADER
    $('.loader').show().delay(8000).fadeOut();

    // Disable + Enable scrolling while menu is clicked on certain condition.
     $('.menu-bar a').on('click', function() {
         if ($('body').hasClass('overflow-hidden')) {
             //$('html').removeClass('pushbar_locked');
             $('body').removeClass('overflow-hidden');
         } else {
             //$('html').addClass('pushbar_locked');
             $('body').addClass('overflow-hidden');
         }
       return false;
     });

    // Hide dropdown menu while its opened; if clicked on anywhere in body.
    $('html').on('click', function() {
        if ($('body').hasClass('overflow-hidden')) {
            $('body.overflow-hidden').removeClass('overflow-hidden');
            $('.collapse').removeClass('show');
            //$('html').removeClass('pushbar_locked');
        }
        // Hide while closing the left menu sidebar in all child pages of services page.
        if ($('body').hasClass('side-menu-open')) {

            $('html').removeClass('pushbar_locked');

           $('body.side-menu-open').removeClass('side-menu-open');
           document.getElementById("sideNav").style.width = "0px";
           document.getElementById("sideContents").style.width = "0px";
           document.getElementById("servicesBtn").style.left = "0px";
           $('#sidebarMenuContainer').delay(0).fadeOut('fast');
           $('.services-btn').removeClass('open');
        }

        const mediaQuery = window.matchMedia('(min-width: 576px)');
        mediaQuery.addListener(handleMobileTabletChange);
        handleMobileTabletChange(mediaQuery);

        function handleMobileTabletChange(e) {
            if (e.matches) {
                $( 'body.page-careers .modal-dialog' ).css( {'max-width':'90%', 'width':'100%' } );
            } else {
                $( 'body.page-careers .modal-dialog' ).css( {'max-width':'100%', 'width':'100%' } );
            }
        }


    });

    // Modal Stop Youtube Video
    $('#videoModal').on('hidden.bs.modal', function() {
        var $this = $(this).find('iframe'),
        tempSrc = $this.attr('src');
        $this.attr('src', "");
        $this.attr('src', tempSrc);
    });

    // Modal Stop HTML5 Video
    $('#videoModal').on('hidden.bs.modal', function() {
        var html5Video = document.getElementById("htmlVideo");
        if (html5Video != null) {
            html5Video.pause();
            html5Video.currentTime = 0;
        }
    });


    // Open the left menu sidebar in all child pages of services page.
    $('.services-btn').on('click', function() {
        if ($('body').hasClass('side-menu-open')) {

            $('html').removeClass('pushbar_locked');

            $('body').removeClass('side-menu-open');
            $(this).removeClass('open');
            document.getElementById("sideNav").style.width = "0px";
            document.getElementById("sideContents").style.width = "0px";
            document.getElementById("servicesBtn").style.left = "0px";
            $('#sidebarMenuContainer').delay(0).fadeOut('fast');
        } else {
            $('body').addClass('side-menu-open');

            $('html').addClass('pushbar_locked');

            $(this).addClass('open');
            document.getElementById("sideNav").style.width = "500px";
            document.getElementById("sideContents").style.width = "500px";
            document.getElementById("sideContents").style.display = "block";
            document.getElementById("servicesBtn").style.left = "500px";
            $('#sidebarMenuContainer').delay(400).fadeIn('slow');
        }
        return false;
    });


    // What We do deliver tab
    $('.service-lists .list-group ul li a').on('click', function() {
        $(this).removeClass('active'); // we inititally removed bootstrap active class on .list-group a element.
        $(this).parent().addClass('active').siblings().removeClass('active');   // we adding remove class only on li element which was just clicked.
    });

    // Gallery navigation
    $('.services-gallery .nav li button').on('click', function() {
        $(this).addClass('active');
        $(this).siblings().removeClass('active');   // we adding remove class on others(siblings) nav button elements.
    });

    // We inititally made the first tab as show and active mode.
    $('.services-gallery .tab-content .tab-pane').first().addClass('show active');

    // For Mobile
    $('.services-gallery #pills-tabContentMobile .tab-pane').first().addClass('show active');

    // Who do we need hover effects on career page.
    // We are chnaging h4 color when hovers on button. They are siblings.
    $( ".position-more-button a" ).hover(

        function() {
            $( this ).closest(':has(h4)').find('.position-small-meta .position-title h4, .position-small-meta .position-rate h4').addClass( "hover" );
        }, function() {
            $( this ).closest(':has(h4)').find('.position-small-meta .position-title h4, .position-small-meta .position-rate h4').removeClass( "hover" );
        }
    );

    // Who do we need hover effects on Projects section.
    // We are chnaging h4 color when hovers on button. They are siblings.
    $( ".project-more-button a" ).hover(

        function() {
            $( this ).closest(':has(h4)').find('.project-small-meta .project-title h4').addClass( "hover" );
        }, function() {
            $( this ).closest(':has(h4)').find('.project-small-meta .project-title h4').removeClass( "hover" );
        }
    );



    // We are reducing the modal width when join us ninja form is submitted and shows thank you page.
    $( document ).on( 'nfFormSubmitResponse', function() {
        $( 'body.page-careers .modal-dialog' ).css( 'width', '500px' );
    });

    // And here we are revert to modal original size.
    $('.modal-btn-close').on('click', function(){
        $( 'body.page-careers .modal-dialog' ).css( 'width', '80%' );
    })


    $('.project-more-button a').click(

        function() {
            $('.project-container .flickity-slider').css( 'transform', 'none' );
        }, function() {
            $('.project-container .flickity-slider').css( 'transform', 'none' );
        }
    );



    $('#projectCat').change(function() {

        var ourClass = $(this).val();

        if(ourClass == 'all') {

        var cellsCount = $('.projects-gallery').find('.project-box.item').length;
        var cellWidth= $('.projects-gallery').find('div.project-box').width();


        var initialColLeftPosition = 0;
        var nextColLeftPosition = cellWidth + 20;

        for (let i = 0; i < cellsCount; i++) {

          var selectedCell = $('.projects-gallery').find('div.project-box');
          $(selectedCell[i]).css('left', initialColLeftPosition+'px');
          $(selectedCell[i]).css('padding-left', '0.5rem');
          $(selectedCell[i]).css('padding-right', '0.5rem');
          $(selectedCell[i]).css('margin-left', '1rem');
          $(selectedCell[i]).show();

          initialColLeftPosition = initialColLeftPosition + nextColLeftPosition;
        }

        }
        else {
          // hide all elements that don't share ourClass
          $('.projects-gallery').find('div.project-box:not('+ ourClass+ ')').hide();

          var selectedCellsCount= $('.projects-gallery').find('div.project-box.' + ourClass ).length;

          var selectedCellWidth= $('.projects-gallery').find('div.project-box').width();

          var initialColLeftPosition = 0;
          var nextColLeftPosition = selectedCellWidth + 20;

          for (let i = 0; i < selectedCellsCount; i++) {

              var selectedCell = $('.projects-gallery').find('div.project-box.' + ourClass );
              $(selectedCell[i]).css('left', initialColLeftPosition+'px');
              $(selectedCell[i]).css('padding-left', '0.5rem');
              $(selectedCell[i]).css('padding-right', '0.5rem');
              $(selectedCell[i]).css('margin-left', '1rem');
              $(selectedCell[i]).show();

              initialColLeftPosition = initialColLeftPosition + nextColLeftPosition;

          }
        }
        return false;
    });




}); // End js
