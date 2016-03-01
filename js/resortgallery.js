// on focus of search input, animate it's width up
$("#filters input#search").focus(function(e){
  if($(window).width() > 980){
    $(this).animate({ width:"230px" }, { duration: 300, queue: false }).attr("placeholder","");
  }
});

// on blur of search input, animate it's width down
$("#filters input#search").blur(function(e){
  if($(window).width() > 980){
    $(this).animate({ width:"164px" }, { duration: 300, queue: false }).attr("placeholder","Search");
  }
});

// stop a href # from working when a user clicks on checkboxes in dropdowns
$(".dropdown-menu input, .dropdown-menu label").click(function(e){
  e.stopPropagation();
});

// arrowdown glyph code for easy reuse
var arrowDown = " <span class=\"glyphicon glyphicon-chevron-down\"></span>";

var filters;

function filterResults(){
  filters = "";
  var country = $("li#country-contain a").html().replace(arrowDown, "").replace(" ", "-");
  var region = $("li#region-contain a").html().replace(arrowDown, "").replace(" ", "-");
  var beds = $("li#beds-contain a").html().replace(arrowDown, "").replace("+", "beds");
  var amenities = $("input#amenitiesSelection").val();
  var vacationtype = $("li#vacation-type-contain a").html().replace(arrowDown, "").replace(" ", "-");
  
  if(country != "Country"){
	filters += "." + country + ",";
  }
  
  if(region != "Region"){
	filters += "." + region + ",";  
  }
  
  if(beds != "Beds"){
	filters += "." + beds + ",";  
  }
  
  if(amenities != "Amenities"){
	filters += "." + amenities + ",";  
  }
  
  console.log(filters);
  //alert(country);alert(region);alert(beds);alert(amenities);alert(vacationtype);
}

// frequent command for country change... sets Region filter to default text
function resetRegion(){
  $("li#region-contain a.dropdown-toggle").html("Region" + arrowDown);
}

// on click of a country, change text of country filter, show region filter, and filter region filter based on country selected
$("ul#country li a").click(function(e){
  var selection = $(this).text();
  switch(selection){
	case "All":
	  $(this).parents().eq(2).children("a").html("Country" + arrowDown);
	  $("li#region-contain").hide();
	  break;
	default:
	  $(this).parents().eq(2).children("a").html(selection + arrowDown);
	  $("li#region-contain, ul#region li").show();
	  $("ul#region li:not([data-country=" + selection.replace(" ", "-") + "])").hide();
	  break;
  }
  resetRegion();
  filterResults();
  e.preventDefault();
});

// on click of a region, change text of region filter
$("ul#region li a").click(function(e){
  var selection = $(this).text();
  switch(selection){
	case "All":
	  $(this).parents().eq(2).children("a").html("Region" + arrowDown);
	  break;
	default:
	  $(this).parents().eq(2).children("a").html(selection + arrowDown);
	  break;
  }
  filterResults();
  e.preventDefault();
});

// on click of a bed size
$("ul#beds li a").click(function(e){
  var selection = $(this).text();
  $(this).parents().eq(2).children("a").html(selection + arrowDown);
  filterResults();
  e.preventDefault();
});

// amenities function to generate string
function amenitiesCheck(){
  var amenitiesSelection = "";
  var amenitiesFilter = "";
  $("ul#amenities li input:checked").each(function(e){
    amenitiesSelection += $(this).parent("label").text() + ",";
	amenitiesFilter += "." + $(this).parent("label").text() + ",";
  });
  amenitiesSelection = amenitiesSelection.slice(1, amenitiesSelection.length).substring(0, amenitiesSelection.length - 2);
  amenitiesFilter = amenitiesFilter.slice(1, amenitiesFilter.length).substring(0, amenitiesFilter.length - 2);
  if(amenitiesSelection == "" || amenitiesSelection == null){
	$("li#amenities-contain a.dropdown-toggle").html("Amenities" + arrowDown); 
  }
  else if(amenitiesSelection.length > 16){
    $("li#amenities-contain a.dropdown-toggle").html(amenitiesSelection.substring(0, 15) + "&hellip;" + arrowDown);
  }
  else {
	 $("li#amenities-contain a.dropdown-toggle").html(amenitiesSelection + arrowDown); 
  }
  $("input#amenitiesSelection").val(amenitiesFilter);
  filterResults();
}

// run amenities function
$("ul#amenities li input:checkbox, ul#amenities li label").click(function(e){
  amenitiesCheck();
});

// amenities vacationtype to generate string
function vacationCheck(){
  var vacationSelection = "";
  $("ul#vacation-type li input:checked").each(function(e){
    vacationSelection += $(this).parent("label").text() + ",";
  });
  vacationSelection = vacationSelection.slice(1, vacationSelection.length).substring(0, vacationSelection.length - 2);
  if(vacationSelection == "" || vacationSelection == null){
	$("li#vacation-type-contain a.dropdown-toggle").html("Amenities" + arrowDown); 
  }
  else if(vacationSelection.length > 16){
    $("li#vacation-type-contain a.dropdown-toggle").html(vacationSelection.substring(0, 15) + "&hellip;" + arrowDown);
  }
  else {
	 $("li#vacation-type-contain a.dropdown-toggle").html(vacationSelection + arrowDown); 
  }
  $("input#vacationSelection").val(vacationSelection);
  filterResults();
}

// run vacationtype function
$("ul#vacation-type li input:checkbox, ul#vacation-type li label").click(function(e){
  vacationCheck();
});