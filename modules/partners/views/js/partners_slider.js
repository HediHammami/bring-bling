$(document).ready(function () {
  $("#partner-logos").owlCarousel({
    items: 5,
    loop: true,
    margin: 10,
    nav: false,
    responsive: {
      0: {
          items: 2, // Number of items to show on mobile
          stagePadding: 100 // Padding to show part of the next slide
      },
      600: {
          items: 2, // Number of items to show on tablets
          stagePadding: 120 // Adjust padding for tablets
      },
      1000: {
          items: 5, // Number of items to show on desktops
          stagePadding: 0 // No padding on larger screens
      }
  }
  });
});
