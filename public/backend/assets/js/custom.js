(function ($) {

    var customJS = {

        init: function() {
            $(".create-event-type-section").toggle();
        }

    }

    'use strict';

    $(document).ready(function() {
        $(".create-event-type-section").hide();

        $("body").on("click", ".create-event-type-button", function() {
            customJS.init();
        });
    });
})(jQuery);
