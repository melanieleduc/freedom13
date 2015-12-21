$(function() {

  $('[data-toggle="lightbox"]').magnificPopup({type:'iframe'});

  //SLIDER
  var sliders = [];

  $('.swiper-container').each(function(index, element){

      $(this).addClass('s'+index);
      var slider = new Swiper('.s'+index, {
        direction: 'horizontal',
        loop: true,
        pagination: '.swiper-pagination',
      });
      sliders.push(slider);

  });

});
