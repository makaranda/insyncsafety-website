(function($) {
    $.fn.countdown = function(options, callback) {

        //custom 'this' selector
        var thisEl = $(this);

        //array of custom settings
        var settings = {
            'date': '2024-11-08',
            'format': 'on'
        };

        //append the settings array to options
        if (options) {
            $.extend(settings, options);
        }

        //main countdown function
        function countdown_proc() {
            var eventDate = new Date(settings['date']).getTime() / 1000;
            var currentDate = Math.floor($.now() / 1000);

            var seconds = eventDate - currentDate;

            // Check if the event date has passed
            if (seconds <= 0) {
                thisEl.find(".days").text("07");
                thisEl.find(".hours").text("08");
                thisEl.find(".minutes").text("10");
                thisEl.find(".seconds").text("30");
                clearInterval(interval); // Stop the countdown when the date has passed

                if (typeof callback === "function") {
                    callback.call(thisEl); // Execute the callback if provided
                }

                return; // Exit the function to prevent further calculations
            }

            var days = Math.floor(seconds / (60 * 60 * 24));
            seconds -= days * 60 * 60 * 24;

            var hours = Math.floor(seconds / (60 * 60));
            seconds -= hours * 60 * 60;

            var minutes = Math.floor(seconds / 60);
            seconds -= minutes * 60;

            // Update countdown values
            thisEl.find(".days").text(days);
            thisEl.find(".hours").text(hours);
            thisEl.find(".minutes").text(minutes);
            thisEl.find(".seconds").text(seconds);
        }

        //run the function
        countdown_proc();

        //loop the function
        var interval = setInterval(countdown_proc, 1000);
    }
})(jQuery);
