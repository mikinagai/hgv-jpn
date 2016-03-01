$(document).ready(function(e){
  $("#destinationslideshow img:gt(0)").hide();
  setInterval(function(){
    $("#destinationslideshow img:first-child").fadeOut(750).next("img").fadeIn(750).end().appendTo("#destinationslideshow");
  }, 6000);
  resizeSlideshow();
  //$('[data-toggle="tooltip"]').tooltip({'placement': 'top'});
});

$(window).resize(function(e){
  resizeSlideshow();
});

function resizeSlideshow(){
  $("#destinationslideshow").height($("#destinationslideshow img:visible").height());
}