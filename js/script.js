$(document).ready(function(e){

  $.fn.scrollTo = function( target, options, callback ){
    if(typeof options == 'function' && arguments.length == 2){ callback = options; options = target; }
    var settings = $.extend({
      scrollTarget  : target,
      offsetTop     : 50,
      duration      : 500,
      easing        : 'swing'
    }, options);
    return this.each(function(){
      var scrollPane = $(this);
      var scrollTarget = (typeof settings.scrollTarget == "number") ? settings.scrollTarget : $(settings.scrollTarget);
      var scrollY = (typeof scrollTarget == "number") ? scrollTarget : scrollTarget.offset().top + scrollPane.scrollTop() - parseInt(settings.offsetTop);
      scrollPane.animate({scrollTop : scrollY }, parseInt(settings.duration), settings.easing, function(){
        if (typeof callback == 'function') { callback.call(this); }
      });
    });
  }

  mobileMenu();

  new WOW().init();

  $('.lazyload').lazyload();

  $('.sidebar-menu li a').on('click', function(e){
    e.preventDefault();
    $('.sidebar-menu li a').removeClass('active');
    $(this).addClass('active');
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
      case 'タイムシェアについて':
      $('#timeshare-program').show();
      break;
      case 'オーナーになったら':
      $('#become-owner').show();
      break;
    }
  });

  $('.link-list li a').on('click', function(e){
    e.preventDefault();
    var href = $(this).attr('href');
    $('body').scrollTo(href);
  });

  $('.resort-navbar li').on('click', function(e){
    e.preventDefault();
    $('.resort-navbar li a').removeClass('active');
    $(this).find('a').addClass('active');
    var type = $(this).find('a').text();
    $('.sub-content').hide();
    switch (type){
      case 'リゾート':
      $('#resort-collection').show();
      break;
      case 'ハワイの１週間':
      $('#sample-week').show();
      break;
      case 'イベント':
      $('#events').show();
      break;
      case 'アクティビティ':
      $('#activities').show();
      break;
      case 'ナイトライフ':
      $('#nightlife').show();
      break;
      case 'ダイニング':
      $('#dining').show();
      break;
      case 'ショッピング':
      $('#shopping').show();
      break;
    }
  });

  $('#resort-nav-mobile').change(function(){
    var url = $(this).val();
    $('.sub-content').hide();
    switch (url){
      case 'リゾート':
      $('#resort-collection').show();
      break;
      case 'ハワイの１週間':
      $('#sample-week').show();
      break;
      case 'イベント':
      $('#events').show();
      break;
      case 'アクティビティ':
      $('#activities').show();
      break;
      case 'ナイトライフ':
      $('#nightlife').show();
      break;
      case 'ダイニング':
      $('#dining').show();
      break;
      case 'ショッピング':
      $('#shopping').show();
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

$("header nav ul li a#open-explore").on('mouseenter', function(e){
  if ($(window).width() >= 768){
    closeDropdowns();
    if(!$("#explore-menu").is(":visible")){
      $("#explore-menu").slideDown(200);
      $(this).addClass("active");
    }
    else {
      $("#explore-menu").slideUp(200);  
      $(this).removeClass("active");
    }
    e.preventDefault();
  }
});

$("header nav ul li a#open-explore2").on('mouseenter', function(e){
  if ($(window).width() >= 768){
    if(!$("#explore-menu2").is(":visible")){
      $("#explore-menu2").slideDown(200);
      $(this).addClass("active");
    }
    else {
      $("#explore-menu2").slideUp(200);  
      $(this).removeClass("active");
    }
    e.preventDefault();
  }
});


$("header nav ul li a#open-explore").on('click', function(e){
  if ($(window).width() <= 767){
    closeDropdowns();
    if(!$("#explore-menu").is(":visible")){
      $("#explore-menu").slideDown(200);
      $(this).addClass("active");
    }
    else {
      $("#explore-menu").slideUp(200);  
      $(this).removeClass("active");
    }
    e.preventDefault();
  }
});

$("header nav ul li a#open-explore2").on('click', function(e){
  if ($(window).width() <= 767){
    if(!$("#explore-menu2").is(":visible")){
      $("#explore-menu2").slideDown(200);
      $(this).addClass("active");
    }
    else {
      $("#explore-menu2").slideUp(200);  
      $(this).removeClass("active");
    }
    e.preventDefault();
  }
});

function closeDropdowns(){
  $("#explore-menu").slideUp(200);
    $('header nav ul li a').removeClass("active");
    $("#explore-menu2").slideUp(200);
}

$('.nav-dropdown-menu').on('mouseleave', function(){
    closeDropdowns();
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
