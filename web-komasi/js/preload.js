var delay = 1500;
 
    $(window).on('load', function() {
        setTimeout(function(){
            $("#loading").hide();
            $(".loader").hide();
        },delay);
    });