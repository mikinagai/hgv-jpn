$(document).ready(function(e){


  mobileMenu();

  $('.lazyload').lazyload();

  $('.sidebar-menu li a').on('click', function(e){
    e.preventDefault();
    var type = $(this).text();
    $('.sub-content').hide();
    switch (type){
      case 'タムシェア・プログラム':
      $('#timeshare-program').show();
      break;
      case 'タイムシェアとホテル滞在の違い':
      $('#timeshare-and-hotels').show();
      break;
      case 'ヒルトン・グランド・バケーションズの特徴':
      $('#hilton-features').show();
      break;
      case 'ご購入までの流れ':
      $('#how-to-purchase').show();
      break;
      case '法人のお客様へ':
      $('#for-business').show();
      break;
    }
  });

  $('.resort-navbar li').on('click', function(e){
    e.preventDefault();
    var type = $(this).find('a').text();
    $('.sub-content').hide();
    switch (type){
      case 'リゾート':
      $('#resort-collection').show();
      break;
      case 'ハワイの１週間':
      $('#sample-week').show();
      break;
      case 'ヒルトン・グランド・バケーションズの特徴':
      $('#hilton-features').show();
      break;
      case 'ご購入までの流れ':
      $('#how-to-purchase').show();
      break;
      case '法人のお客様へ':
      $('#for-business').show();
      break;
    }
  });
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




$(document).ready(function(e){
  // Hide the extra content initially, using JS so that if JS is disabled, no problemo:
$('.read-more-content').addClass('hide')

// Set up a link to expand the hidden content:
.before('<a class="read-more-show" href="#">続きを読む</a>')
  
// Set up a link to hide the expanded content.
.append(' <a class="read-more-hide" href="#">閉じる</a>');

// Set up the toggle effect:
$('.read-more-show').on('click', function(e) {
  $(this).next('.read-more-content').removeClass('hide');
  $(this).addClass('hide');
  e.preventDefault();
});

$('.read-more-hide').on('click', function(e) {
  $(this).parent('.read-more-content').addClass('hide').parent().children('.read-more-show').removeClass('hide');
  e.preventDefault();
});
  
});
