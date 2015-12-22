//Analytics
(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
e=o.createElement(i);r=o.getElementsByTagName(i)[0];
e.src='https://www.google-analytics.com/analytics.js';
r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
ga('create','UA-38554438-1','auto');ga('send','pageview');

$(function() {

  $('[data-toggle="lightbox"]').magnificPopup({type:'iframe'});

  //SLIDER
  sliders = [];

  $('.swiper-container').each(function(index, element){

      $(this).addClass('s'+index);
      var slider = new Swiper('.s'+index, {
        direction: 'horizontal',
        loop: true,
        prevButton: '.swiper-button-prev--' + index,
        nextButton: '.swiper-button-next--' + index,
        pagination: '.swiper-pagination--' + index,
      });
      sliders.push(slider);
  });

  // $('.swiper-pagination-bullet').on('click', function(event){
  //   event.preventDefault();
  //   var index = $(".swiper-pagination-bullet").index(event.currentTarget);
  //   sliders.slider.slide(index);
  // });


});
