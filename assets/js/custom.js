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

// Custom js

$('.nebosh-list li h4').click(function(){
  if($(this).next().is(":hidden")){
    $('.info-collapse').hide(400);
    $(this).next().show(400);
  }else{
    $(this).next().hide(400);
  }
  
  
  });

  $(".owl-prev").append('<img src="../assets/images/left_slider_arrow.png"/>');
  $(".owl-next").append('<img src="../assets/images/right_slider_arrow.png"/>');
  // $(".nav-wrap ul li a").click(function(){
  //   console.log("raja");
  //   $(this).children(".sub-menu").show();
  // });

});

