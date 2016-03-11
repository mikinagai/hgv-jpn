$(document).ready(function() {
  $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,

    fixedContentPos: false
  });

  $(".martial-status .form-click-to-show").click(function(){
    if($(this).val() === "Married"){
      $(".show-onclick-marital-status").show("fast");    
    } else {
      $(".show-onclick-marital-status").hide("fast");
    }
  });

  $(".promo-code .form-click-to-show").click(function(){
    if($(this).val() === "Yes"){
      $(".show-onclick-promocode").show("fast");    
    } else {
      $(".show-onclick-promocode").hide("fast");
    }
  });

  $(".request-info .form-click-to-show").click(function(){
    if($(this).val() === "Catalogue"){
      $(".show-onclick-catalogue").show("fast");    
    } else {
      $(".show-onclick-catalogue").hide("fast");
    }
  });

  $(".booking-info .form-click-to-show").click(function(){
    if($(this).val() === "1"){
      $(".show-onclick-booking-info").show("fast");    
    } else {
      $(".show-onclick-booking-info").hide("fast");
    }
  });

  


  $('.datepicker').datepicker();

  if ($('#search').length > 0){
    document.getElementById("search").addEventListener("click", geoApiSearchByPostal);
    geoApiInitialize();

    // debugger;
            $('#Japan-tour-form, #exampleForm2')
                .formValidation({
                    framework: 'bootstrap',
                    icon: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove'
                    },
                    fields: {
                        '00N9000000DrpdY': {
                            validators: {
                                notEmpty: {
                                    message: '10桁のANAマイレージ番号を入力してください'
                                }
                            }
                        },
                        'last_name': {
                            validators: {
                                notEmpty: {
                                    message: '姓を入力してください'
                                }
                            }
                        },
                        'first_name': {
                            validators: {
                                notEmpty: {
                                    message: '名前を入力してください'
                                }
                            }
                        },
                        // roman last name
                        '00N70000001wI2h': {
                            validators: {
                                notEmpty: {
                                    message: '姓をローマ字入力してください'
                                }
                            }
                        },
                        // roman first name
                        '00N70000001wI2w': {
                            validators: {
                                notEmpty: {
                                    message: '名前をローマ字入力してください'
                                }
                            }
                        },
                        // Income
                        '00N70000001hDUD': {
                            validators: {
                                notEmpty: {
                                    message: 'お選びください'
                                }
                            }
                        },
                        'geoapi-postal-3': {
                            validators: {
                                notEmpty: {
                                    message: '郵便番号を入力してください'
                                }
                            }
                        },
                        'geoapi-postal-4': {
                            validators: {
                                notEmpty: {
                                    message: ''
                                }
                            }
                        },
                        'phone': {
                            validators: {
                                notEmpty: {
                                    message: '電話番号をハイフンなしで番号のみ入力してください'
                                }
                            }
                        },
                        'email': {
                            validators: {
                                notEmpty: {
                                    message: 'Eメールアドレスを入力してください'
                                },
                                identical: {
                                    field: 'confirm_email',
                                    message: 'Eメールアドレスを確認してください'
                                }
                            }
                        },
                        'confirm_email': {
                            validators: {
                                notEmpty: {
                                    message: '確認の為再度Eメールアドレスを入力してください'
                                },
                                identical: {
                                    field: 'email',
                                    message: ''
                                }
                            }
                        },
                        // tour location
                        '00N9000000EaMff': {
                            validators: {
                                notEmpty: {
                                    message: 'ご希望の場所をお選びください'
                                }
                            }
                        },
                        // tour date
                        '00N9000000EaMfe': {
                            validators: {
                                notEmpty: {
                                    message: 'ご希望の日をお選びください'
                                }
                            }
                        },
                        // tour time
                        '00N9000000EaMfd': {
                            validators: {
                                notEmpty: {
                                    message: 'ご希望の時間をお選びください'
                                }
                            }
                        }
                        // opt in
                        /*'00N70000001wkiv': {
                            validators: {
                                notEmpty: {
                                    message: '必須項目です'
                                }
                            }
                        }*/
                    }
                })
  }

});



$(document).ready(function(e){
  
  function addFormReturnUrl(){
    var location = window.location.href + '&form=submit';
    $('input[name="retURL"]').val(location);
  }

  addFormReturnUrl();

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
    var form = getUrlVars()["form"];
    if (index){
      hideShowSubPages(index);
      var selector = 'a[menu="' + index + '"]';
      $('.sidebar-menu li a').removeClass('active');
      $(selector).addClass('active');
    }
    if (form){
      $('.sub-content.active #form-success').show();
      $('.sub-content.active .pre-form').hide();
    } else{
      $('.sub-content.active #form-success').hide();
      $('.sub-content.active .pre-form').show();
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
    var japanese = /[\u3000-\u303F]|[\u3040-\u309F]|[\u30A0-\u30FF]|[\uFF00-\uFFEF]|[\u4E00-\u9FAF]|[\u2605-\u2606]|[\u2190-\u2195]|\u203B/g;
    var letters = type.replace('-', '');
    if (!japanese.test(letters ? letters : type)){
      var selector = "#" + type;
      $(selector).show();
    } else{
      parseJapaneseNavigation(type);
    }
    toggleActiveContainer();
  }


  // function hideShowSubPages(type){ 
  //   $('.sub-content').hide();
  //   var english = /^[A-Za-z0-9]/;
  //   var letters = type.replace('-', '');
  //   if (english.test(letters ? letters : type)){
  //     var selector = "#" + type;
  //     $(selector).show();
  //   } else{
  //     parseJapaneseNavigation(type);
  //   }
  //   toggleActiveContainer();
  // }

  function toggleActiveContainer(){
    $('.sub-content').removeClass('active');
    $('.sub-content').each(function(){
      if ($(this).is(':visible')){
        var selector = '#' + $(this).attr('id');
        $(selector).addClass('active');
      }
    });
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
      case '資料請求':
        $('#request-dvd').show();
        break;
      case 'タイムシェア販売説明会':
        $('#request-tours').show();
        break;
      case 'タイムシェア新規購入やオーナー様の追加購入':
        $('#purchase-on-phone').show();
        break;
      case '販売説明会宿泊プラン':
        $('#minivac').show();
        break;
      case 'その他':
        $('#other-contact').show();
        break;
    }
    //toggleActiveContainer();
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

  $('.testimonial-popup').magnificPopup({
    type: 'ajax',
    alignTop: true,
    overflowY: 'scroll' // as we know that popup content is tall we set scroll overflow by default to avoid jump
  });

  $('.simple-ajax-popup').magnificPopup({
    type: 'ajax'
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
      case '資料請求':
        $('#request-dvd').show();
        break;
      case 'タイムシェア販売説明会':
        $('#request-tours').show();
        break;
      case 'タイムシェア新規購入やオーナー様の追加購入':
        $('#purchase-on-phone').show();
        break;
      case '販売説明会宿泊プラン':
        $('#minivac').show();
        break;
      case 'その他':
        $('#other-contact').show();
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
