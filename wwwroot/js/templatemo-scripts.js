$(document).ready(function() {
  // Single Page Nav for highlighting nav items
  $("#tmMainNav").singlePageNav();

  // showroom section
  $(".tm-gallery").slick({
    autoplay: true,
    autoplaySpeed: 2000,
    speed: 2000,
    pauseOnHover: true,
    pauseOnDotsHover: true,

    dots: true,
    infinite: true,
    arrows: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1600,
        settings: {
          arrows: true,
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 1200,
        settings: {
          arrows: true,
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 997,
        settings: {
          arrows: false,
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 767,
        settings: {
          arrows: false,
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

   /*
  // Image Pop Up
  $(".tm-gallery").magnificPopup({
    delegate: "a", // child items selector, by clicking on it popup will open
    type: "image",
    gallery: { enabled: true }
  });
  */

  $(".navbar-toggler").on("click", function(e) {
    $(".tm-sidebar").toggleClass("show");
    e.stopPropagation();
  });

  $("html").click(function(e) {
    var sidebar = document.getElementById("tmSidebar");

    if (!sidebar.contains(e.target)) {
      $(".tm-sidebar").removeClass("show");
    }
  });

  $("#tmMainNav .nav-link").click(function(e) {
    $(".tm-sidebar").removeClass("show");
  });
});
