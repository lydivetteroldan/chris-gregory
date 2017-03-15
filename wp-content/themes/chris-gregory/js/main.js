$(window).load(function(){
  $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 0,
    responsive:{
      0:{
        items:1,
        nav: false
      },
      600:{
        items:1
      },
      1000:{
        items:1
      }
    }
  });
});