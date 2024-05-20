$(document).ready(function () {
  $(".owl-carousel").owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    navText: [
      '<div class="owl-prev-custom">&#10094;</div>',
      '<div class="owl-next-custom">&#10095;</div>',
    ],
    responsive: {
      0: {
        items: 2,
        margin: 10,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 3.5,
      },
    },
  });
});
