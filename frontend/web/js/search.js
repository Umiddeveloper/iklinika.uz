/*--------------------- Copyright (c) 2020 -----------------------
[Master Javascript]
Project: Multifarious Services - Responsive HTML Template
Version: 1.0.0
Assigned to: Theme Forest
-------------------------------------------------------------------*/
(function($) {
    "use strict";
    /*-----------------------------------------------------
    	Function  Start
    -----------------------------------------------------*/
    var Multifarious = {
        initialised: false,
        version: 1.0,
        mobile: false,
        init: function() {
            if (!this.initialised) {
                this.initialised = true;
            } else {
                return;
            }
            /*-----------------------------------------------------
            	Function Calling
            -----------------------------------------------------*/
            ;
            this.searchBox();


        },

        /*-----------------------------------------------------
        	Fix Search Bar & Cart
        -----------------------------------------------------*/
        searchBox: function() {
            $('.searchBtn').on("click", function() {
                $('.searchBox').addClass('show');
            });
            $('.closeBtn').on("click", function() {
                $('.searchBox').removeClass('show');
            });
            $('.searchBox').on("click", function() {
                $('.searchBox').removeClass('show');
            });
            $(".search_bar_inner").on('click', function() {
                event.stopPropagation();
            });
        },








    };

    Multifarious.init();

})(jQuery);

///************** location//
const findMyState = () => {
    const status = document.getElementById("select");
    const success = (position) => {
        const latitude = position.coords.latitude;
        const longitude = position.coords.longitude;
        const geoApiUrl = `https://api.bigdatacloud.net/data/reverse-geocode-client?latitude=${latitude}&longitude=${longitude}&localityLanguage=en`
        fetch(geoApiUrl)
            .then(res => res.json())
            .then(data => {
                status.innerHTML = data.city
            });
    };
    const error = () => {
        status.innerHTML = "Sizni hududingiz topilmadi!";
    }
    navigator.geolocation.getCurrentPosition( success, error);
};

document.getElementById('select').addEventListener('click', findMyState);

