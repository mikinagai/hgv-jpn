$(document).ready(function() {
  $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,

    fixedContentPos: false
  });

});



$(document).ready(function(e){
  
  function getUrlVars() {
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
  }

  function determineSubPageIndex(){
    var index = getUrlVars()["index"];
    if (index){
      hideShowSubPages(index);
      var selector = 'a[menu="' + index + '"]';
      $('.sidebar-menu li a').removeClass('active');
      $(selector).addClass('active');
    }
  }

  determineSubPageIndex();

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

  function hideShowSubPages(type){ 
    $('.sub-content').hide();
    var english = /^[A-Za-z0-9]/;
    var letters = type.replace('-', '');
    if (english.test(letters ? letters : type)){
      var selector = "#" + type;
      $(selector).show();
    } else{
      parseJapaneseNavigation(type);
    }
  }

  function parseJapaneseNavigation(type){
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
        $('#fq_timeshare-program').show();
        break;
      case 'オーナーになったら':
        $('#fq_become-owner').show();
        break;
      case '各リゾートについて':
        $('#fq_each-resort').show();
        break;
      case '販売説明会について':
        $('#fq_sales-preview').show();
        break;
      case 'リゾート宿泊プランについて':
        $('#fq_resort-plans').show();
        break;
      case 'タムシェア販売説明会':
        $('#sales-preview').show();
        break;
      case '販売説明会の流れ':
        $('#sales-tower-flow').show();
        break;
      case '開催地・日程':
        $('#tour-location').show();
        break;
      case '来場ご予約（ハワイ）':
        $('#booking-form-hawaii').show();
        break;
      case '来場ご予約（国内）':
        $('#booking-form-japan').show();
        break;
      case 'リゾート宿泊プラン':
        $('#vacation-packages').show();
        break;
      case 'オアフ島プラン':
        $('#oahu-pkgs').show();
        break;
      case 'ハワイ島プラン':
        $('#hawaii-pkgs').show();
        break;
      case 'Wアイランド・プラン':
        $('#wisland-pkgs').show();
        break;
      case 'お申し込みフォーム':
        $('#vacation-pkgs-forms').show();
        break;
    }
  }

  mobileMenu();

  new WOW().init();

  $('.lazyload').lazyload();

  $('.sidebar-menu li a').on('click', function(e){
    e.preventDefault();
    $('.sidebar-menu li a').removeClass('active');
    $(this).addClass('active');
    var type = $(this).text();
    console.log('clicked', type);
    hideShowSubPages(type);
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

  $('.nav-mobile').change(function(){
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
      case 'タムシェア・プログラム':
      $('#timeshare-program').show();
      break;
      case 'ご購入までの流れ':
      $('#how-to-purchase').show();
      break;
      case '法人のお客様へ':
      $('#for-business').show();
      break;
      case 'タムシェア販売説明会':
        $('#sales-preview').show();
        break;
      case '販売説明会の流れ':
        $('#sales-tower-flow').show();
        break;
      case '開催地・日程':
        $('#tour-location').show();
        break;
      case '来場ご予約（ハワイ）':
        $('#booking-form-hawaii').show();
        break;
      case '来場ご予約（国内）':
        $('#booking-form-japan').show();
        break;
      case 'タイムシェアについて':
        $('#fq_timeshare-program').show();
        break;
      case 'オーナーになったら':
        $('#fq_become-owner').show();
        break;
      case '各リゾートについて':
        $('#fq_each-resort').show();
        break;
      case '販売説明会について':
        $('#fq_sales-preview').show();
        break;
      case 'リゾート宿泊プランについて':
        $('#fq_resort-plans').show();
        break;
    }
  });
});


$(window).resize(function(e){
  mobileMenu();
});

function mobileMenu(){
  var width = $(window).width();
  if(width <= 767){
	 $("nav ul").addClass("dropdown-menu");  
  }
  else {
	 $("nav ul").removeClass("dropdown-menu");  
  }
}

function openNav(elem, e, mobile){
  var id = $(elem).attr('id'); 
  var selector = "#" + id + "-menu";
  if ($(window).width() >= 768 || mobile){
    $('.nav-dropdown-menu').slideUp(200); 
    if(!$(selector).is(":visible")){
      $(selector).slideDown(200);
      $(elem).addClass("active");
    } else {
      $(selector).slideUp(200);  
      $(elem).removeClass("active");
    }
    e.preventDefault();
  }
}

$("header nav ul li a").on({
    mouseenter: function(e) {
        openNav(this, e);
    },
    mouseleave: function() {
        // Handle mouseleave...
    },
    click: function(e) {
        //openNav(this, e, true);
        console.log('clicked mobile');
    }
}, null);

function closeDropdowns(){
  $("#explore-menu").slideUp(200);
    $('header nav ul li a').removeClass("active");
    $("#timeshare-menu").slideUp(200);
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
