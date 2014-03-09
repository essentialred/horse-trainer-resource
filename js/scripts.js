'use strict';

var ESF = window.ESF || {};

(function($){

    $('#form-sections').flexslider({
        manualControls: '#form-nav a',
        slideshow: false,
        directionNav: false,
        animation: 'slide'
    });

    $('#search-form').submit(function(e){
        e.preventDefault();

        var query = $(this).find('input').val();

        $.get(this.action + query, function(data) {
            console.log(data);
        });
    });

    // instantiate Form Manager
    new ESF.FormManager('.create');

})(jQuery);