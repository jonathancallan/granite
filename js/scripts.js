$(document).ready(function(){
/* Display the main navigation */
  $("#trigger-menu").on("click",function(){
    $("body").addClass("main-menu-open");
    return false;
  });
  $("#main-menu .close").on("click",function(){
    $("body").removeClass(".main-menu-open");
    return false;
  });
/* Press ESC to close menu by removing class */
  $("body").keydown(function(e) {
    //alert("Press");
    if(e.key === "Escape") {
      //alert("Escape");
      $("body.main-menu-open").removeClass("main-menu-open");
    }
  });


/* Init the slider */
$('.home-slider').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 1,
    dots: true,
    arrows: false,
    autoplay:true
  });

$('.client-logo-slider').slick({
    dots: false,
    autoplaySpeed: 0,
    speed: 20000,
    cssEase: 'linear',
    arrows: false,
    autoplay:true,
    variableWidth: true,
    slidesToScroll: 1,
    slidesToShow: 1
});
$('.umbraco-logo-slider').slick({
    dots: false,
    autoplaySpeed: 0,
    speed: 20000,
    cssEase: 'linear',
    arrows: false,
    autoplay:true,
    variableWidth: true,
    slidesToScroll: 1,
    slidesToShow: 1
});


/* Modal Video */    
$(".js-modal-btn").modalVideo({channel:'vimeo',animationSpeed:0});
    
    
// Close document ready
});
