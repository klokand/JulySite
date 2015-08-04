	

/*------------------------------
	
-------------------------------*/


(function ($) {
    "use strict";
    var mainApp = {

        main_fun: function () {

            //ADD REMOVE PADDING CLASS ON SCROLL
            $(window).scroll(function () {
                if ($(".navbar").offset().top >400) {
                    $(".navbar-fixed-top").addClass("navbar-pad-original");
                } else {
                    $(".navbar-fixed-top").removeClass("navbar-pad-original");
                }
            });
            //SLIDESHOW SCRIPT
            $('.carousel').carousel({
                interval: 3000 //TIME IN MILLI SECONDS
            });

            /*====================================
               WRITE YOUR SCRIPTS BELOW 
           ======================================*/


        },

        initialization: function () {
            mainApp.main_fun();

        }

    }
    // Initializing ///

    $(document).ready(function () {
        mainApp.main_fun();
		$('#property-images a').tosrus({
			buttons: 'inline',
			pagination: {
				add: true,
				type: 'thumbnails'
			},
			slides: {
				width: "100%"
			}
		});
		$("#property-images").tosrus({
			//	default options (for both desktop and touch-devices)
		}, {
			pagination : {
					add : true,
					drag: true,
		},
			slides: {
				scale : "fit",
				visible:2
			}
		}, {
			buttons: true,
			infinite: true,
			slides: {
			visible: 3
			}
		});
    });

}(jQuery));



