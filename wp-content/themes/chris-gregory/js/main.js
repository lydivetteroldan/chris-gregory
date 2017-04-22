$(document).ready(function(){

  var grid = $('.grid').isotope({
    itemSelector: '.grid-item',
    layoutMode: 'fitRows'
  });

  $('.menu--projects').on( 'click', 'li a', function() {
    $('.menu--projects li a').removeClass('active');
    $(this).addClass('active');
    var filterValue = $(this).attr('data-filter');
    $grid.isotope({ filter: filterValue });
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
});

$('.highlight').mouseover(function() {
  $(this).siblings().css('opacity', 0.2);
});

$('.highlight').mouseout(function() {
  $(this).siblings().css('opacity', 1);
});


$(function(){

    var url = window.location.pathname, 
        urlRegExp = new RegExp(url.replace(/\/$/,'') + "$"); // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there
        // now grab every link from the navigation
        $('.page-navbar-list a').each(function(){
            // and test its normalized href against the url pathname regexp
            if(urlRegExp.test(this.href.replace(/\/$/,''))){
                $(this).addClass('active');
            }
        });

});