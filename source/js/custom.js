$(document).ready(function(){


  
   		//Init the carousel
initSlider();

function initSlider() {
  $(".owl-demo .owl-carousel").owlCarousel({
    items: 1,
    loop: true,
    autoplay: true,
    nav: true,
    onInitialized: startProgressBar,
    onTranslate: resetProgressBar,
    onTranslated: startProgressBar,

  });
//   $(".virtical .owl-carousel").owlCarousel({
//   loop: true,
//   autoplay: true,
//   items: 1,
//   dots: false,
//   nav: true,
//   autoplayHoverPause: true,
//   animateOut: 'slideOutDown',
//   animateIn: 'slideInDown'
// });







// Custom js

}




});



