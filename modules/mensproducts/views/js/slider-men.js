$(document).ready(function () {
  $("#men-products-carousel").owlCarousel({
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


// $(document).ready(function () {
//   $("#subcategories-carousel").owlCarousel({
//     loop: true,
//     margin: 10,
//     nav: false,
//     responsive: {
//       0: {
//         items: 2,
//       },
//       600: {
//         items: 3,
//       },
//       1000: {
//         items: 5.5,
//       },
//     },
//   });
// });
