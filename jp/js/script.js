$(document).ready(function(e){
  mobileMenu();
});

$(window).resize(function(e){
  mobileMenu();
});

function mobileMenu(){
  var width = $(window).width();
  if(width <= 599){
	$("nav ul").addClass("dropdown-menu");  
  }
  else {
	$("nav ul").removeClass("dropdown-menu");  
  }
}

$("header nav ul li a#open-explore").click(function(e){
  if(!$("#explore-menu").is(":visible")){
	$("#explore-menu").slideDown(200);
	$(this).addClass("active");
  }
  else {
	$("#explore-menu").slideUp(200);  
	$(this).removeClass("active");
  }
  e.preventDefault();
});