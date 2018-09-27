$(document).ready(function(){

  /* Display the main navigation */
  $("#trigger-menu").on("click",function(){
    $("body").addClass("main-menu-open");
    return false;
  });
    
$('.home-slider').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 1,
    dots: true,
    arrows: false,
    autoplay:true
  });
});
