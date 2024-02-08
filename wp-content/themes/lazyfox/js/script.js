jQuery(document).ready(function () {
  // OWL CAROUSEL INSTALLATION
  jQuery("#testimonial-carousel").owlCarousel({
    items: 1,
    itemsDesktop: [1000, 1], //5 items between 1000px and 901px
    itemsDesktopSmall: [900, 1], // betweem 900px and 601px
    itemsTablet: [600, 1],
    itemsMobile: [479, 1],
    pagination: true,
  });
  jQuery("#home-slider").owlCarousel({
    items: 1,
    itemsDesktop: [1000, 1], //5 items between 1000px and 901px
    itemsDesktopSmall: [900, 1], // betweem 900px and 601px
    itemsTablet: [600, 1],
    itemsMobile: [479, 1],
    pagination: false,
    navigation: true,
    navigationText: ["<i class='ion-ios-arrow-left'></i>", "<i class='ion-ios-arrow-right'></i>"],
  });

  /* Navigation Menu*/
  var offsettop = jQuery(".navbar").offset().top;
  if (offsettop > 50) {
    jQuery(".navbar").addClass("colored-nav");
    jQuery(".navbar").addClass("gradient-violat");
    jQuery("#scroll-top-div").fadeIn("500");
  } else {
    jQuery(".navbar").removeClass("colored-nav");
    jQuery(".navbar").removeClass("gradient-violat");
    jQuery("#scroll-top-div").fadeOut("500");
  }
  var num = 50; //number of pixels before modifying styles

  jQuery(window).on("scroll", function () {
    if (jQuery(window).scrollTop() > num) {
      jQuery(".navbar").addClass("colored-nav");
      jQuery(".navbar").addClass("gradient-violat");
      jQuery("#scroll-top-div").fadeIn("500");
    } else {
      jQuery(".navbar").removeClass("colored-nav");
      jQuery(".navbar").removeClass("gradient-violat");
      jQuery("#scroll-top-div").fadeOut("500");
    }
  });

  /* SMOOTH SCROLLING SCRIPT*/
  // Add smooth scrolling to all links
  jQuery(".navbar-nav li a").on("click", function (event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      jQuery("html, body").animate(
        {
          scrollTop: jQuery(hash).offset().top,
        },
        800,
        function () {
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        }
      );
    } // End if
  });

  /****************************BACK TO TOP************************************/
  jQuery("#scroll-top-div").on("click", function (e) {
    e.preventDefault();
    jQuery("html,body").animate(
      {
        scrollTop: 0,
      },
      700
    );
  });
});
