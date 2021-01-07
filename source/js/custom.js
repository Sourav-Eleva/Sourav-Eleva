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
  $(".virtical .owl-carousel").owlCarousel({
  loop: true,
  autoplay: true,
  items: 1,
  dots: false,
  nav: true,
  autoplayHoverPause: true,
  animateOut: 'slideOutDown',
  animateIn: 'slideInDown'
});
$(".slider_area_block .owl-carousel").owlCarousel({
  loop: true,
  autoplay: true,
  nav: true,
  items: 4,
  dots: false,
  autoplayHoverPause: true,
  animateOut: 'slideOutDown',
  animateIn: 'slideInDown'
});
$(".Awards_Accreditation_block .owl-carousel").owlCarousel({
    items: 6,
    loop: true,
    autoplay: true,
    nav: true,
  onInitialized: startProgressBar,
  onTranslate: resetProgressBar,
  onTranslated: startProgressBar,
});
}

function startProgressBar() {
  // apply keyframe animation
  $(".slide-progress").css({
    width: "100%",
    transition: "width 5000ms"
  });
}

function resetProgressBar() {
  $(".slide-progress").css({
    width: 0,
    transition: "width 0s"
  });
}
});
