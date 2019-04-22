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
    autoplaySpeed: 3000,
    speed: 2000,
    cssEase: 'ease-in-out',
    arrows: false,
    autoplay:true,
    variableWidth: true,
    slidesToShow: 6,
    responsive: [
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 4
        }
      }
    ]
});


// Close document ready
});
