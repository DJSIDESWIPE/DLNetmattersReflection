$(document).ready(function () {
  $('.container-banner').slick({
    dots: true,
    slidesToShow: 1,
    infinite: true,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 5000,
  });
  $('.container-brands').slick({
    prevArrow: false,
    nextArrow: false,
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    variableWidth: true,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          arrows: false,
          slidesToShow: 4,
          
        }
      },
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          slidesToShow: 3,
          
        }
      }, 
      {
        breakpoint: 498,
        settings: {
          arrows: false,
          slidesToShow: 2,
          
        }
      }
    ]
  });
});    