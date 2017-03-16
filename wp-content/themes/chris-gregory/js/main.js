$(window).load(function(){

  
});

$(document).ready(function(){

  var $grid = $('.grid').isotope({
    itemSelector: '.grid-item',
    layoutMode: 'fitRows'
  });

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
  
  $('.menu-archive').on( 'click', 'li a', function() {
    $('.menu-archive li a').removeClass('active');
    $(this).addClass('active');
    var filterValue = $(this).attr('data-filter');
    $grid.isotope({ filter: filterValue });
  });
});