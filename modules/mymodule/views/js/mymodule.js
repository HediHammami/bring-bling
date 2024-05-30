$(document).ready(function () {
  $(".category-carousel").owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    responsive: {
      0: {
        items: 1.5, // Number of items to show on mobile
        
      },
      600: {
        items: 1.5, // Number of items to show on tablets
        
      },
      1000: {
        items: 3, // Number of items to show on desktops
        
      },
    },
  });
});
