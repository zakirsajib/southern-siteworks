$ = jQuery.noConflict();
$(function ($) {
    "use strict";

$('#projectCat').change(function() {

    var termID = $('#projectCat').val();

    //console.log( 'Project Category Term ID: ' + termID );

    //var ajaxurl = 'http://localhost:3000/wp-admin/admin-ajax.php';
    $.ajax({
        type: 'POST',
        url: the_ajax_script.ajaxurl,
        //crossDomain : true,
        //dataType: 'json',
        //contentType: "text/html",
        dataType: 'html',
        data: {
          "action": "load-project-cat-filter",
          cat: termID
        },
        success: function(data) {
          console.log(data);
          //responseM(data);
        },
        error: function(data){
            console.log(data);
        }
    });
})

});
