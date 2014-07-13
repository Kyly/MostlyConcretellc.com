jQuery(function($) {

    $('#site-navigation').waypoint(function(direction) {
        if(direction === 'down' || $(this).hasClass('fixed-nav'))
            $(this).toggleClass( 'fixed-nav' );
     });

});