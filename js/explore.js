// initialize the grid
var $grid = $("#grid");
$gridItems = $grid.find('.resortpanel'),

$(document).ready(function(e){ 
  $(".container").css("overflow","hidden");  
  $grid.shuffle({
    itemSelector: ".resortpanel", // the selector for the items in the grid
	speed: 500
  });
  ///if(checkCookie == true){
    activeCookies(); 
	shuffleGrid();   
  //}
});

var checkCookie = function(){
  if(($.cookie("prevFilters") == null)){
	return false;
  }
  else {
	return true;  
  }	
}

// Sorting options
$(".sort-options").on("change", function(e){
  var sort = this.value,
      opts = {};
  // We're given the element wrapped in jQuery
  if (sort === "name"){
    opts = {
      by: function($el) {
        return $el.data("name").toLowerCase();
      }
    };
  } 
  else if (sort === "city"){
    opts = {
      by: function($el) {
        return $el.data("city");
      }
    };
  } 
  else if (sort === "club-points"){
    opts = {
      by: function($el) {
        return $el.data("club-points");
      }
    };
  } 
  else if (sort === "club-points-reverse"){
    opts = {
  	  reverse: true,
      by: function($el) {
        return $el.data("club-points");
      }
    };
  }
  // Filter elements
  $grid.shuffle("sort", opts);
});

// Advanced filtering
/*
$(".js-shuffle-search").on("keyup change", function(e){
  var valq = this.value.toLowerCase();
  $grid.shuffle("shuffle", function($el, shuffle){
	  
	var currentResort = $el.data().groups;
	var isSuperset = filters().every(function(val) { return currentResort.indexOf(val) >= 0; });
	 
	if(!isSuperset){
	  return false;
    }
	
	else {
	    
      // Only search elements in the current group
      if(shuffle.group !== "all" && $.inArray(shuffle.group, $el.data("groups")) === -1){
        return false;
      }
      var text = $.trim( $el.find(".title").text() + " " + $el.find(".location").text() ).toLowerCase();
      return text.indexOf(valq) !== -1;
	
	}	
	
  }); 
  
});
*/

/*
$grid.on("done.shuffle", function(e){
  console.log("Finished initializing shuffle!");
});
*/


// makes whole panel act as a link
$(".resortpanel").click(function(e){
  var target = $(this).find("a").attr("href");
  console.log(target);
  window.location.href = target;
});

/* var caret = "<span class=\"caret\"></span>"; */

$("#location li a").click(function(e){
	
  /*var value = $(this).text();*/
  $("#location li a").not(this).removeClass("active");
  
  /*if(!(value == "All")){*/
  if($(this).hasClass("active")){
	$(this).removeClass("active");	
  }
  else {
    $(this).addClass("active");
  }
	/*$("#location").prev("button").html(value + " " + caret);*/
  /*}
  else {
	$("#location li a").removeClass("active");
	$("#location").prev("button").html("Location " + caret);
  }*/
  
  /*
  if($("#location li a:eq(1)").hasClass("active") || $("#location li.sub a").hasClass("active")){
	$("#location li.sub").slideDown();
	if(!($("#location li.sub a").hasClass("active"))){
  	  e.stopPropagation();
	}
  }
  else {
	$("#location li.sub").slideUp();
  }
  */
  
  
  shuffleGrid();
  e.preventDefault();
  
});

$("#vacation li a").click(function(e){
  var value = $(this).text();
  if(!(value == "All")){
    $(this).toggleClass("active");
  }
  else {
    $("#vacation li a").removeClass("active");
  }
  shuffleGrid();
  e.preventDefault();
});

$("#amenities li a").click(function(e){
  if(!($(this).text() == "All")){
    $(this).toggleClass("active");
  }
  else {
    $("#amenities li a").removeClass("active");
  }
  shuffleGrid();
  e.preventDefault();
});

// gather variables for filtering
var filters = function(){
  // declare an array
  var array = [];
  // go through location dropdown to find active element
  $("#location li a.active").each(function(index, element){
    array.push($(this).attr("data-group"));
  });
  // go through vacation dropdown to find active element
  $("#vacation li a.active").each(function(index, element){
    array.push($(this).attr("data-group"));
  });
  // go through amenities dropdown to find active element
  $("#amenities li a.active").each(function(index, element){
    array.push($(this).attr("data-group"));
  });
  // log full array for documentation purposes
  //console.log(array);
  setCookie(array);
  return array;
}

function shuffleGrid(){
  if(hasFilters()){
	$("#remove-filters").css("display", "inline-block");
    $grid.shuffle("shuffle", function($el){
	  var currentResort = $el.data().groups;
	  var isSuperset = filters().every(function(val) { return currentResort.indexOf(val) >= 0; });
	  if(!isSuperset){
		return false;
	  }
	  else {
		return true;
	  }
	  console.log(isSuperset);
	  console.log($el.data().name + ": " + currentResort);
    });
  }
  else {
	$("#remove-filters").css("display", "none");
	$grid.shuffle("shuffle", "all");
  }
  var visibleResorts = $(".resortpanel.filtered").length;
  if(visibleResorts == 0) {
    $("#noResults").fadeIn(300);
  }
  else {
	$("#noResults").fadeOut(300); 
  }
  console.log($.cookie("prevFilters"));
  console.log(checkCookie());
}

var hasFilters = function(){
  return filters().length > 0;
}

$("#vacation li a, #amenities li a").click(function(e) {
  e.stopPropagation();
});

$("#show-filters").click(function(e){
  var txt = $(this).children(".txt").text();
  var newTxt = (txt == "View Filters") ? "Hide Filters" : "View Filters";
  $(this).children(".txt").text(newTxt);
  $("#filter-bunch").slideToggle(400);
  e.preventDefault();
});

function setCookie(prevArray){
  var date = new Date();
  var minutes = 60;
  date.setTime(date.getTime() + (minutes * 60 * 1000));
  $.cookie("prevFilters", prevArray, { expires: date });  // expire in an hour	
}

var checkCookie = function(){
  if(($.cookie("prevFilters") == null)){
	return false;
  }
  else {
	return true;  
  }	
}

function activeCookies(){
  var activeArray = [];
  activeArray = $.cookie("prevFilters").split(",");
  console.log(activeArray);
  for(i=0; i < activeArray.length; i++){
	var cookieValue = activeArray[i];
	console.log(cookieValue);
	$("a[data-group='" + cookieValue + "']").addClass("active");
  }
}

$("#remove-filters").on("click", function(){
  $("#filter-group ul li a").removeClass("active");
  //activeCookies(); 
  shuffleGrid();  
});

/*
$("#vacation li a.active").each(function(index, element){
    array.push($(this).attr("data-group"));
  });
  */