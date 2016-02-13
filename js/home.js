$(document).ready(function(e){
  $("#homeslideshow img:gt(0)").hide();
  setInterval(function(){
    $("#homeslideshow img:first-child").fadeOut(750).next("img").fadeIn(750).end().appendTo("#homeslideshow");
  }, 6000);
  resizeSlideshow();
  //$('[data-toggle="tooltip"]').tooltip({'placement': 'top'});
});

$(window).resize(function(e){
  resizeSlideshow();
});

function resizeSlideshow(){
  $("#homeslideshow").height($("#homeslideshow img:visible").height());
}

$(".bxslider").bxSlider({
  minSlides: 2,
  maxSlides: 5,
  slideWidth: 146,
  slideMargin: 20,
  pager: false,
  captions: true
});

$(".bxslider li").on({
  mouseenter: function(){
	$(this).children(".bx-caption").animate({bottom:"0"},200);
  },
  mouseleave: function(){
	$(this).children(".bx-caption").animate({bottom:"-60px"},200);
  }
});


$(".bx-wrapper .bx-caption").click(function(e){
  var link = $(this).prev("a").attr("href");
  window.location.href = link;
});