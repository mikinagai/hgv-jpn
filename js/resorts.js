var dotHTML = function(index){
  switch(index){
	case 0:
	  return "<div class=\"dot active\"></div>"; 
	  break;
	default:
	  return "<div class=\"dot\"></div>";
	  break;
  }
}
	
$(document).ready(function(e){
  var numSlides = $(".slide").length;
  for(i=0; i<numSlides; i++){
    $("#placeholder").append(dotHTML(i));
  }
  $("#photo-count").text($(".slide").length);
  $("#floorplan-count").text($(".floorplan").length);
});

window.photosSwipe = Swipe(document.getElementById('photosSlider'), {
  speed: 550,
  auto: 4000,
  callback: function(index, elem){
	$("#placeholder .dot").removeClass("active");
    $("#placeholder .dot:eq(" + index + ")").addClass("active");
  }
});

$("#right-arrow").click(function(e){
  photosSwipe.next();
});
	
$("#left-arrow").click(function(e){
  photosSwipe.prev();
});

$("#photosSlider").hover(
  function(e){
	$(".arrow").animate({ opacity:"0.8" }, { duration: 300, queue: false });
	$("#left-arrow").animate({ left:"8px" }, { duration: 300, queue: false });
	$("#right-arrow").animate({ right:"8px" }, { duration: 300, queue: false });
  },
  function(e){
	$(".arrow").animate({ opacity:"0" }, { duration: 300, queue: false });
	$("#left-arrow").animate({ left:"20px" }, { duration: 300, queue: false });
	$("#right-arrow").animate({ right:"20px" }, { duration: 300, queue: false });
  }
);

function getMap(latitude, longitude, zoom){   

  var map = new Microsoft.Maps.Map(document.getElementById("map"), {
    credentials: "ApIHq7Ifu66Veo8yZKe-20gZUfrVftFEm8pNAkNf0Ifa7azkxBCWzTw_7Bl3SVyz",
    center: new Microsoft.Maps.Location(latitude, longitude),
    mapTypeId: Microsoft.Maps.MapTypeId.road,
    zoom: zoom
  });

  // define the location variables
  var loc1 = new Microsoft.Maps.Location(latitude, longitude); // anderson
            
  // define pin location and text
  var pin1 = new Microsoft.Maps.Pushpin(loc1, { text: '' }); 

  // add pins to map
  map.entities.push(pin1);
	
}


$("#resorts-options ul li a").click(function(e){
	
  $("#resorts-options ul li a").removeClass("active");
  $(this).addClass("active");
  
  $("#homeslideshow, #floorplan-container, #points-container, #points-next-container, #map-container, #placeholder").hide();
  
  var tab = $(this).attr("id");
  if(tab == "photos-link"){
	$("#homeslideshow, #placeholder").show();
	// photosSwipe.slide(0,100);
  }
  else if(tab == "floorplans-link"){
	$("#floorplan-container").show();
  }
  else if(tab == "points-link"){
	$("#points-container").show();
  }
  else if(tab == "points-next-link"){
  $("#points-next-container").show();
  }
  else if(tab == "map-link"){
	$("#map-container").show();
  }
  else {
	  
  }
  
  e.preventDefault();
  
});

$("body").on("click", '.floorplan', function(e){
  $(this).addClass("active");
});
$("body").on("click", '.floorplan.active', function(e){
  $(this).removeClass("active");
});